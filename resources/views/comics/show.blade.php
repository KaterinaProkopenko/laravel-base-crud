@extends('layouts.main')

@section('title', 'Comic detail')

@section('main-content')
    <main>
        <h5>{{$comic->title}}</h5>
        <p>{{$comic->description}}</p>
    </main>
@endsection