<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::with(['author', 'genre'])->get();
        
        return response()->json([
            'success' => true,
            'message' => 'List of Books',
            'data' => $books
        ], 200);
    }
    /*public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover_photo' => 'nullable|string',
            'genre_id' => 'nullable|integer',
            'author_id' => 'required|integer|exists:authors,id',
        ]);
        
        $book = Book::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Book created successfully',
            'data' => $book
        ], 201);
    }*/
}
