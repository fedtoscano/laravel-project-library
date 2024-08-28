
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <style></style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sidebar">
                <!-- Split dropend button -->
                <div class="btn-group dropend">
                    <button type="button" class="btn btn-secondary">
                    Books
                    </button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropend</span>
                    </button>
                    <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->
                        <li><a href="{{route('admin.books.index')}}">See all books</a></li>
                        <li>Create New book</li>
                    </ul>
                </div>
        <a href="{{ route('admin.books.index') }}">Books</a>
        <a href="{{ route('admin.authors.index') }}">Authors</a>
        <a href="{{ route('admin.categories.index') }}">Categories</a>
        <a href="{{ route('admin.editors.index') }}">Editors</a>
        <a href="{{ route('admin.loans.index') }}">Loans</a>
        <a href="{{ route('admin.translators.index') }}">Translators</a>
        <a href="{{ route('admin.users.index') }}">Users</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
