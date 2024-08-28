@extends('admin.layouts.backoffice')

@section('title')
Users List
@endsection

@section('content')
<h1>Qui c'è la lista degli utenti</h1>
@dump($users)
@endsection
