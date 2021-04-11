@extends('layouts.app')
@section('header')
    <h1>All Festivals</h1>
    <a href="{{route('orderables.index')}}" class="btn btn-primary">
        back to list
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
@endsection
