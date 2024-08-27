<?php

namespace App\Models;
//CUSTOM MODELS
use App\Models\Author;
use App\Models\Category;
use App\Models\Editor;
use App\Models\Translator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function editor(){
        return $this->belongsTo(Editor::class);
    }

    public function translator(){
        return $this->belongsTo(Translator::class);
    }
}
