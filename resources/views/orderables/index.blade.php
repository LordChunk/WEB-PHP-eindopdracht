@extends('layouts.app')
@section('header')
    <h1>All Orderables</h1>

    <a href="{{route('cinema.index')}}" class="btn btn-primary">
        filter cinemas
    </a>

    <a href="{{route('festivals.index')}}" class="btn btn-primary">
        filter festivals
    </a>
@endsection
@section('content')
    @foreach($festivals as $festival)
        <p><h3>
            <a href="{{route('festivals.show', $festival)}}">
                {{$festival->name}}
            </a>
        </h3></p>
    @endforeach
    @foreach($cinemas as $cinema)
        <p><h3>
            <a href="{{route('cinema.show', $cinema)}}">
                {{$cinema->name}}
            </a>
        </h3></p>
    @endforeach
@endsection
