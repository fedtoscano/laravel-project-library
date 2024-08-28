<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Book;
use App\Models\User;

class Loan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['start_date', 'end_date', 'notes'];

    public function books(){
        return $this->belongsToMany(Book::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
