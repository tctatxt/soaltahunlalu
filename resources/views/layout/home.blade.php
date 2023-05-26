@extends('layout.master')
@section('content')
    <div class="container mx-auto grid grid-cols-3">
        @foreach ($books as $book)
            <a href="/detail/{{ $book->id }}" class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $book->Title }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $book->Detail->description }}
                    </p>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Genre:
                        {{ $book->Category->category }}</span>
                </div>
            </a>
            {{-- alt+shift+f --}}
            {{-- kalo dia empty  --}}
        @endforeach
        @if (count($books) == 0)
            <h1>no data</h1>
        @endif
    </div>
@endsection
