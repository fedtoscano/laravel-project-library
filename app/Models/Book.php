<?php

namespace App\Models;
//CUSTOM MODELS
use App\Models\Author;
use App\Models\Category;
use App\Models\Editor;
use App\Models\Translator;
use App\Models\Loan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'genre', 'language', 'cover_img', 'isbn', 'price', 'pages', 'is_available', 'state'];

    public function authors(){
        return $this->belongsToMany(Author::class);
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

    public function loans(){
        return $this->hasMany(Loan::class);
    }
}
