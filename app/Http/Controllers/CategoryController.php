<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show($id, $idCat){
        // cara 1
        // $books = Book::where("category_id","=", $id)->get();
        //buat navbar dropdown
        $categories = Category::all();
        $user = User::find($id);
        // cara 2
        //jd kek kategori itu punya book apa aja
        $books = Category::find($idCat)->Book;
        return view('layout.home', compact('books', 'categories', 'user'));
    }
}
