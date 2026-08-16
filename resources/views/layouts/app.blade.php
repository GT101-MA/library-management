<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>
    <header>
        <h1>Library Management</h1>
    </header>
    
    <nav>        
        <a href="{{ route('books.index') }}">Books</a>
        <a href="{{ route('books.create') }}">Add Book</a>

    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2026 Library Management</p>
    </footer>

</body>
</html>