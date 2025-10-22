<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use App\Models\Transaction;
use App\Models\Book;



class TransactionController extends Controller
{
    public function index()
    {
        $user = auth('api')->user();
        if (!$user || $user->role !== 'admin') {
            return response()->json([
                "success" => false,
                "message" => "Akses terlarang. Hanya admin yang diizinkan."
            ], 403);
        }

        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Mendapatkan semua data transaksi",
            "data" => $transactions
        ]);
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'data' => $validator->errors()
            ], 422);
        }

        $uniqueCode = "ORD-" . strtoupper(uniqid());

        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }

        $book = Book::find($request->book_id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Buku tidak ditemukan.'
            ], 404);
        }

        if($book->stock < $request->quantity){
            return response()->json([
                'success' => false,
                'message' => "Stok barang tidak cukup"
            ], 400);
        }

        $totalAmount = $book->price * $request->quantity;
        
        $book->stock -= $request->quantity;
        $book->save();
        
        $transaction = Transaction::create([ 
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount,
        ]);

        return response()->json([
            'success' => true,
            'message' => "Transaksi berhasil dibuat",
            'data' => $transaction->load('user', 'book') 
        ], 201);
    }

    public function show($id)
    {
        $transaction = Transaction::with('user', 'book')->find($id);
        $user = auth('api')->user();

        if (!$transaction) {
            return response()->json([
                "success" => false,
                "message" => "Transaksi tidak ditemukan."
            ], 404);
        }

        if (!$user || ($user->role !== 'admin' && $transaction->customer_id !== $user->id)) {
            return response()->json([
                "success" => false,
                "message" => "Akses terlarang. Anda tidak memiliki izin"
            ], 403);
        }

        return response()->json([
            "success" => true,
            "message" => "Detail transaksi ditemukan.",
            "data" => $transaction
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $user = auth('api')->user();
        
        $newBookId = $request->book_id;
        $newQuantity = $request->quantity;
        $newBook = Book::findOrFail($newBookId);

        if ($newBook->stock < $newQuantity) {
            return response()->json(['success' => false, 'message' => "Stok buku tidak cukup untuk kuantitas baru."], 400);
        }
        
        $newBook->stock -= $newQuantity; 
        $newBook->save();
        
        $totalAmount = $newBook->price * $newQuantity;

        $transaction->update([
            'book_id' => $newBookId,
            'total_amount' => $totalAmount,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil diperbarui. (PERHATIAN: Logika stok tidak benar!)',
            'data' => $transaction->load('user', 'book')
        ], 200);
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        $user = auth('api')->user();
        $transaction->delete();
        
        return response()->json([
            "success" => true,
            "message" => "Transaksi berhasil dihapus"
        ], 200);
    }
}
