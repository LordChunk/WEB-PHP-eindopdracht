@extends('layouts.app')
@section('header')
    <h1 class="font-weight-bold">Selected Show: {{$movie->name}}</h1>
@endsection
@section('content')
    <h4>Shows:</h4>
    <strong><h5>{{$show->name}}</h5></strong>
    <strong>Shown at: {{\Carbon\Carbon::parse($show->start_time)->format('D H:i')}}</strong>
    <h4 class="font-weight-bold">{{$movie->name}}</h4>
    <p>
        {{$movie->description}}
    </p>
    <br>
    <h3><strong>Selected seat: seat {{$column}} row {{$row}}</strong></h3>

    @if(!$confirmed)
        <a href="{{route('show.book.confirm',  [$show, $column, $row])}}">Confirm booking</a>
    @else
        <strong>Your booking has been saved. <a href="/">Go back</a> </strong>
    @endif
@endsection
