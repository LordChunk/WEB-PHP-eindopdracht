@extends('layouts.app')
@section('header')
    <h1>All Restaurants</h1>
@endsection
@section('content')
    @foreach($restaurants as $restaurant)
        <p><h3>
            <a href="{{route('cinema.show', $restaurant)}}">
                {{$restaurant->name}}
                uit {{$restaurant->location}}
                soort: {{$restaurant->restaurantType->type}}
            </a>
        </h3></p>
    @endforeach
@endsection
