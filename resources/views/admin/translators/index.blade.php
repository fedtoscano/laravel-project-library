@extends('admin.layouts.backoffice')

@section('title')
Translators List
@endsection

@section('content')
<h1>Qui c'è la lista dei traduttori</h1>
@dump($translators)
@endsection
