@extends('layouts.app')
@section('header')
    <h1>Selected Show: </h1>
@endsection
@section('content')
    <h4>Shows:</h4>
    <strong><h5>{{$show->movieName}}</h5></strong>
    <strong>Shown at: {{\Carbon\Carbon::parse($show->start_time)->format('D H:i')}}</strong>
    <p>
        {{$show->description}}
    </p>
@endsection
