<?php

namespace App\Models;

//CUSTOM MODELS
use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Translator extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function books(){
        return $this->hasMany(Book::class);
    }
}
