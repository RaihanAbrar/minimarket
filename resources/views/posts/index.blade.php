<!DOCTYPE html>
<html>
<head>
    <title>Daftar Post</title>
</head>
<body>
    <h1>Daftar Post</h1>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    @endforeach
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('about') }}">About</a>
</body>
</html>