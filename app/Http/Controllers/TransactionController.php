<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\BookTransaction;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function store(Request $request){
        Transaction::create([
            "user_id" => $request->user_id,
            "book_id" => $request->book_id,
            "transaction_date" => date(now())
        ]);

        return redirect($request->user_id);
    }

    public function show($id){
        $trans = Transaction::where('user_id', '=', $id)->get();
        $categories = Category::all();
        $user = User::find($id);
        return view('transaction', compact('trans', 'categories', 'user'));
    }
}
