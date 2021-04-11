@extends('layouts.app')
@section('header')
    <h1>All Festivals</h1>
@endsection
@section('content')
    @foreach($festivals as $festival)
        <p><h3>
            <a href="{{route('festivals.show', $festival)}}">
                {{$festival->name}}
            </a>
        </h3></p>
    @endforeach
@endsection
