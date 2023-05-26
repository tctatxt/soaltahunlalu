<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $guarded = ["id"];

    public function Book(){
        return $this->belongsToMany(Book::class, 'book_transaction');
    }
}
