@extends('admin.layouts.backoffice')

@section('title')
Authors List
@endsection

@section('content')
<h1>Qui c'è la lista degli autori</h1>
@dump($authors)
@endsection
