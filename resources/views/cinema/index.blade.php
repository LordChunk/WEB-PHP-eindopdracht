@extends('layouts.app')
@section('header')
    <h1>All Cinemas</h1>
@endsection
@section('content')
    @foreach($cinemas as $cinema)
        <p><h3>
            <a href="{{route('cinema.show', $cinema)}}">
                {{$cinema->name}}
                {{$cinema->location}}
            </a>
        </h3></p>
    @endforeach
@endsection
