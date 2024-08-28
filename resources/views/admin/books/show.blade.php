@extends('admin.layouts.backoffice')

@section('title')
{{ $book->title }}
@endsection

@section('content')
{{-- @dump($book) --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 60rem;">
                <img src="{{$book->cover_img}}" class="card-img-top w-12" alt="{{$book->title}} cover image">
                <div class="card-body">
                    <h5 class="card-title mb-3">{{$book->title}}</h5>
                    <h6 class="card-subtitle mb-3">Written by:
                        @foreach ($book->authors as $author )
                            <span>{{$author->name}}, </span>
                                @if ($loop->last)
                                <span>{{$author->name}}</span>
                                @endif
                        @endforeach
                    </h6>
                    <h6 class="card-title mb-3">Translated by:
                        {{$book->translator->name}}
                    </h6>
                    <h6 class="card-title mb-3">Edited by:
                        {{$book->editor->name}}
                    </h6>
                    <h5 class="card-subtitle mb-3">{{$book->genre}} - {{$book->category->name}}</h5>
                    <h5 class="card-title">Description</h5>
                  <p class="card-text"><em>{{$book->description}} mb-3</p>
                </div>
                <ul class="list-group list-group-flush m-3">
                  <li class="list-group-item">{{$book->pages}} pages, written in {{$book->language}}</li>
                  <li class="list-group-item">ISBN CODE: {{$book->isbn}}</li>
                  <li class="list-group-item">{{$book->price}}EUR // Conditions: {{$book->state}}</li>
                  <li class="list-group-item">
                    <em>{{$book->is_available ? "This book is available for loan" : "This book is currently not available"}}</em>
                  </li>
                </ul>
                <div class="card-body">
                    <button class="btn-primary btn">
                        <a href="#" class="text-white">Edit this Book</a>
                    </button>
                    <button class="btn-danger btn">
                        <a href="#" class="text-white">Delete this Book</a>
                    </button>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

