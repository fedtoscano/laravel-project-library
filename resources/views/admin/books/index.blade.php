@extends('admin.layouts.backoffice')

@section('title')
Books List
@endsection

@section('content')
<h1>Qui c'è la lista dei libri</h1>
@dump($books)
@endsection
