<?php

namespace App\Http\Controllers\Admin;
use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBookRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Editor;
use App\Models\Translator;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::paginate(50);
        return view("admin.books.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Author $author, )
    {
        $categories = Category::all();
        $authors = Author::all();
        $translators = Translator::all();
        $editors = Editor::all();
        $genres = [
            'fiction',
            'non-fiction',
            'mystery',
            'fantasy',
            'science fiction',
            'historical',
            'romance',
            'thriller',
            'biography',
            'autobiography',
            'poetry',
            'drama',
            'horror',
            'classic',
            'adventure',
            'young adult',
            'children',
            'memoir',
            'self-help',
            'essay',
        ];
        $conditions = [
            'new',            // Condizione nuova, mai letto, perfetto.
            'like new',       // Appare come nuovo, ma potrebbe essere stato letto una volta, nessun segno di usura visibile.
            'very good',      // Leggermente usato, minimi segni di usura, nessun danno alle pagine o alla copertina.
            'good',           // Mostra alcuni segni di usura, ma è ancora in buone condizioni. Nessuna pagina mancante o danneggiata.
            'acceptable',     // Usura visibile, possibili pieghe o piccoli strappi, ma ancora leggibile.
            'worn',           // Segni di usura significativi, possibili pagine danneggiate o marcature.
            'very used',      // Molto usato, usura e strappi evidenti, possibili annotazioni o pagine mancanti.
        ];
        $languages = [
            'English',
            'Spanish',
            'French', 'German', 'Italian', 'Chinese', 'Japanese', 'Russian', 'Portuguese', 'Arabic'
        ];
        return view('admin.books.create', compact('categories',  'genres', 'editors','translators', 'authors', 'conditions', 'languages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBookRequest $request, Author $author)
    {
        $validatedData = $request->validated();

        $book = Book::create([
            'title' => $validatedData['title'],
            'translator_id' => $validatedData['translator_id'],
            'category_id' => $validatedData['category_id'],
            'editor_id' => $validatedData['editor_id'],
            'genre' => $validatedData['genre'],
            'description' => $validatedData['description'],
            'language' => $validatedData['language'],
            // 'cover_img' => $validatedData['cover_img'],
            'isbn' => $validatedData['isbn'],
            'price' => $validatedData['price'],
            'pages' => $validatedData['pages'],
            'is_available' => $validatedData['is_available'],
            'state' => $validatedData['state'],
        ]);
        $book->authors()->attach($validatedData['author_id']);
        return redirect()->route('admin.books.show', compact('book'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('admin.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
