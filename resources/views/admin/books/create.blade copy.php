@extends('admin.layouts.create-or-edit')

@section('title')
Insert new book
@endsection

@section('form-action')
{{ route('admin.books.store') }}
@endsection

@section('form-method-override')
@endsection
