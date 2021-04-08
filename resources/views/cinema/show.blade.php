@extends('layouts.app')
@section('header')
    <h1>Selected Cinema: {{$cinema->location}}</h1>
@endsection
@section('content')
    <h4>Shows:</h4>
    @foreach($shows as $show)
        <strong><h5>{{$show->movieName}}</h5></strong>
        <strong>Shown at: {{\Carbon\Carbon::parse($show->start_time)->format('D H:i')}}</strong>
        <p>
            {{$show->description}}
        </p>
        <a href="{{route('cinema.show')}}">

        </a>
    @endforeach
@endsection
