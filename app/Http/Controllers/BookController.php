<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index($id){
        $books = Book::all();
        $categories = Category::all();
        $user = User::find($id);
        return view('layout.home', compact("books", "categories", "user"));
    }

    public function show($id, $idCat){
        // find tu automatis nyari primary key
        $book = Book::find($idCat);
        $user = User::find($id);
        return view('detail', compact("book", "user"));

    }
}
