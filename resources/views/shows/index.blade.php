@extends('layouts.app')
@section('header')
    <h1>All Shows</h1>
@endsection
@section('content')
    @foreach($shows as $show)
        <p><h3>
            <a href="{{route('show.show', $show)}}">
                Movie name: {{$show->movie->name}}
                Description: {{$show->movie->description}}
                Start time:{{$show->start_time}}
                End time: {{$show->end_time}}
                In cinema: {{$show->room->cinema->name}}
                From: {{$show->room->cinema->location}}
            </a>
        </h3></p>
    @endforeach
@endsection
