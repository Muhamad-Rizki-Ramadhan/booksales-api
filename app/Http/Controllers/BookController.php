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
        return view('books', ['books'=>$books]);
    }
}
