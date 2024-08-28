@extends('admin.layouts.backoffice')

@section('title')
Editors List
@endsection

@section('content')
<h1>Qui c'è la lista degli editori</h1>
@dump($editors)
@endsection
