<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class ApiBookController extends Controller
{
    public function index(){
        $books = Book::with('authors')->paginate(50);

        return response()->json(
            [
                'message'=> "success",
                'results'=> $books
            ]
            );
    }

    public function show(Book $book){
        // $book -> loadMissing('editor', 'category', 'author', 'translator');

        return response()->json([
            'message' => 'success',
            'results' => $book
        ]);
    }
}
