@extends('layout.master')
@section('title', 'detail')
@section('content')
    <div class="px-12 py-12">
        <h1>Book Detail {{ $book->Title }}</h1>
        <h3>Title: {{ $book->Title }}</h3>
        <h2>Category: {{ $book->Category->category }}</h2>
        <h2>Author: {{ $book->Detail->author }}</h2>
        <h2>Author: {{ $book->Detail->publisher }}</h2>
        <p>Desc: <br>
            {{ $book->Detail->description }} </p>
    </div>
@endsection
