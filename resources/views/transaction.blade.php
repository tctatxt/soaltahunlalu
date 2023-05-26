@extends('layout.master')
@section('title', 'home')
@section('content')
    {{-- @dd($trans) --}}
    @foreach ($trans as $t)
        {{ $t->Book->Title }} <br>
    @endforeach
@endsection
