<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class ApiBookController extends Controller
{
    public function index(){
        $books = Book::paginate(50);

        return response()->json(
            [
                'message'=> "success",
                'results'=> $books
            ]
            );
    }
}
