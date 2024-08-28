@extends('admin.layouts.backoffice')

@section('title')
Categories List
@endsection

@section('content')
<h1>Qui c'è la lista delle categorie</h1>
@dump($categories)
@endsection
