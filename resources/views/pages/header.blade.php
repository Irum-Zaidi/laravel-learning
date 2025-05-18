 {{-- <h2>Header Page</h2> --}}


{{-- @forelse ($names as $key => $value)
    <p>{{ $key }} - {{ $value }}</p>
@empty
    <p>No names found.</p>
@endforelse --}}

{{-- <p> Hello, {{ $name }}.</p>   --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard Layout</title>
    {{-- in public folder css --}}
    <link rel="stylesheet" href="css/style.css"> 
    
</head>
<body>

<header>
    <h1>Website Header {{ $name }}</h1>
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
