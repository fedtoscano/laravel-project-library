@extends('admin.layouts.backoffice')

@section('title')
{{-- da completare in base alla create o all-edit --}}
@endsection

@section('content')
    <h1>Insert new book form</h1>
    <form action="@yield('form-action')" method="POST">
        @yield('method-override')
        @csrf

        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </ul>
        </div>
        @endif
        <div class="mb-3">
            <label for="book-name" class="form-label">Insert book's title</label>
            <input type="text" class="form-control" id="book-name" placeholder="insert title here..." name="title">
        </div>

        <div class="mb-3">
            <label for="book-name" class="form-label">Insert book's description</label>
            <input type="text" class="form-control" id="book-name" placeholder="insert title here..." name="description">
        </div>

        <div class="mb-3">
            <label for="book-author" class="form-label">Insert book's author</label>
            <select name="author_id" id="">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book-author_id" class="form-label">Insert book's translator</label>
            <select name="translator_id" id="">
                @foreach ($translators as $translator)
                    <option value="{{$translator->id}}">{{$translator->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book-category" class="form-label">Insert book's category</label>
            <select name="category_id" id="">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book-author" class="form-label">Insert book's genre</label>
            <select name="genre" id="book-author" required>
                @foreach ($genres as $genre)
                    <option value="{{$genre}}">{{$genre}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book-author" class="form-label">Insert book's condition</label>
            <select name="condition" id="">
                @foreach ($conditions as $condition)
                    <option value="{{$condition}}">{{$condition}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book-author" class="form-label">Insert book's editor</label>
            <select name="editor_id" id="">
                @foreach ($editors as $editor)
                    <option value="{{$editor->id}}">{{$editor->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book-author" class="form-label">Insert book's language</label>
            <select name="language" id="">
                @foreach ($languages as $language)
                    <option value="{{$language}}">{{$language}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book-page-number" class="form-label">Insert book's page number</label>
            <input type="number" name="pages" id="pages">
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">Insert book's ISBN number</label>
            <input type="number" name="isbn" id="isbn" max="9999999999999" min="1000000000000" required>
        </div>

        <div class="mb-3">
            <label for="book-price-number" class="form-label">Insert book's price</label>
            <input type="number" name="price" id="price">
        </div>

        <div class="mb-3">
            <label for="is_available" class="form-label">Is this book available?</label>
            <input type="hidden" name="is_available" value="0">
            <input type="checkbox" id="is_available" name="is_available" value="1">
        </div>

        <button type="submit">VAI</button>
    </form>
@endsection


