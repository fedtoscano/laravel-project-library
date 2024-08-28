@extends('admin.layouts.base-layout')

@section('title')
{{-- da completare in base alla create o all-edit --}}
@endsection

@section('content')
<form action="@yield('form-action')" method="@yield('form-method')">
    @csrf
    @yield('form-method-override')

    <div class="mb-3">
        <label for="book-name" class="form-label">Insert book's name</label>
        <input type="text" class="form-control" id="book-name" placeholder="insert title here..." name="name">
    </div>

    <div class="mb-3">
        <label for="book-author" class="form-label">Insert book's author</label>
        <input type="text" class="form-control" id="book-author" placeholder="insert title here..." author="author">
    </div>





</form>
@endsection


