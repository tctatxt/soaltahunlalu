<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $categories = Category::all();
        return view('layout.home', compact("books", "categories"));
    }

    public function show($id){
        // find tu automatis nyari primary key
        $book = Book::find($id);

        return view('detail', compact("book"));

    }
}
