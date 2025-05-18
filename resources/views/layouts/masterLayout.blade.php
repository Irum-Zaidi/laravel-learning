<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard Layout - @yield('title', 'Website')</title>
    {{-- in public folder css --}}
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')

</head>

<body>

    <header>
        <h1>Website Header </h1>

    </header>

    <nav>
        {{-- <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/post">Post</a> --}}
        @section('navLinks')
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/post">Post</a>
        @show
    </nav>

    <div class="container">
        <aside>
            <h2>Sidebar</h2>
            <p>Sidebar content goes here.</p>
        </aside>

        @hasSection('content')
            @yield('content')
        @else
            <main>
                <h2>No Content Found</h2>
            </main>
        @endif

        {{-- @yield('content', 'No content available') --}}
        {{-- <main>
        <h2>Main Heading of Home Page</h2>
        <p>This is a paragraph inside the main content area. You can write your page's main information here.</p>
    </main> --}}

    </div>

    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>

    @stack('scripts')

</body>

</html>
