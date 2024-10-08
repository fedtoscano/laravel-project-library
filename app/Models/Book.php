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
use Illuminate\Pagination\LengthAwarePaginator;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'author_id',
        'translator_id',
        'category_id',
        'editor_id',
        'genre',
        'description',
        'language',
        'cover_img',
        'isbn',
        'price',
        'pages',
        'is_available',
        'state'
    ];

    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    public function category(){
        return $this->belongsTo(Category::class, "category_id");
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
