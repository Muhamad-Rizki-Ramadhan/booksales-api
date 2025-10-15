<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author'])->get(); 

        return response()->json([
            "success" => true,
            "message" => "Get All Book Resource",
            "data" => $books
        ], 200);
    }
}
