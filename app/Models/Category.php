<?php

namespace App\Models;

//CUSTOM MODELS
use App\Models\Book;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name", "color"];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
