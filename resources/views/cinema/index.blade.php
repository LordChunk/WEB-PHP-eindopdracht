@extends('layouts.app')
@section('header')
    <h1>Cinema index</h1>
@endsection
@section('content')
    <h2>Tons of content</h2>
    @foreach($cinemas as $cinema)
        <p>
            <h3>{{$cinema->location}}</h3>
        </p>
    @endforeach
@endsection
