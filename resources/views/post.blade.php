{{-- <h1>First post page</h1> --}}
{{-- <a href="/">Home</a> --}}

{{-- <a href="{{ route('home') }}">Home</a>


<a href="/about">About</a> --}}


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
    <link rel="stylesheet" href="css/style.css"> 
    
</head>
<body>

<header>
    <h1>Post Page</h1>
</header>

<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/post">Post</a>
</nav>

<div class="container">
    <aside>
        <h2>Sidebar</h2>
        <p>Sidebar content goes here.</p>
    </aside>

    <main>
        <h2>Main Heading of Post Page</h2>
        <p>This is a paragraph inside the main content area. You can write your page's main information here.</p>
    </main>
</div>

<footer>
    <p>&copy; 2025 Your Website. All rights reserved.</p>
</footer>

</body>
</html> --}}

{{-- @include('pages.header', ['name' => 'Post Page'])
<main>
    <h2>Main Heading of Post Page</h2>
    <p>This is a paragraph inside the main content area. You can write your page's main information here.</p>
</main>
@include('pages.footer') --}}


@extends('layouts.masterLayout')
@section('content')
    {{-- <h1>Post page</h1> --}}
    <main>
        <h2>Main Heading of Post Page</h2>
        <p>This is a paragraph inside the main content area. You can write your page's main information here.</p>
    </main>
@endsection

@section('title')
Post
@endsection