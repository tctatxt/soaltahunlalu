<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    #pengen namanya books
    protected $table = "books";
    #kalo mo ngatur nama pk
    protected $primaryKey = "id";
    public function Category(){
        #inget dia tu ke model bukan ke nama table, kalo misal pk fkny g sesuai default, maka bisa tambahin fk dan pk dibelakang
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function Detail(){
        return $this->hasOne(Detail::class);
    }
}
