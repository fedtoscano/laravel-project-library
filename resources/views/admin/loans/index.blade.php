@extends('admin.layouts.backoffice')

@section('title')
Loans List
@endsection

@section('content')
<h1>Qui c'è la lista dei prestiti</h1>
@dump($loans)
@endsection
