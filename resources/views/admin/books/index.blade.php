@extends('admin.layouts.backoffice')

@section('title')
Books List
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <h1>Book List</h1>
        <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Editor</th>
                    <th>Translator</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Genre</th>
                    <th>Language</th>
                    <th>ISBN</th>
                    <th>Available</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>
                        @foreach ($book->authors as $author )
                            <span>{{$author->name}}, </span>
                                @if ($loop->last)
                                <span>{{$author->name}}</span>
                                @endif
                        @endforeach
                    </td>
                    <td>{{$book->category->name}}</td>
                    <td>{{$book->editor->name}}</td>
                    <td>{{$book->translator->name}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{ Str::limit($book->description, 100) }}</td>
                    <td>{{$book->genre}}</td>
                    <td>{{$book->language}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->is_available ? "Yes" : "No"}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">View</button>
                        <button type="button" class="btn btn-success btn-sm">Update</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection
