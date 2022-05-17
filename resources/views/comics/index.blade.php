@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <main>
        @foreach ($comics as $comic)
            <a href="{{route("comics.show", $comic->id)}}">
                <h5>{{$comic->title}}</h5>
            </a>
        @endforeach
    </main>
@endsection
    