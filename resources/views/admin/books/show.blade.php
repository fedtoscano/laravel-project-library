@extends('admin.layouts.backoffice')

@section('title')
{{ $book->title }}
@endsection

@section('content')
@dump($book)
@endsection

