<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show($id){
        // cara 1
        // $books = Book::where("category_id","=", $id)->get();
        //buat navbar dropdown
        $categories = Category::all();
        // cara 2
        //jd kek kategori itu punya book apa aja
        $books = Category::find($id)->Book;
        return view('layout.home', compact('books', 'categories'));
    }
}
