@extends('layouts.app')
@section('header')
    <h1>Selected Cinema: {{$cinema->name}}</h1>
@endsection
@section('content')
    <div>
        <h4 class="text-xl"><strong>Shows:</strong></h4>
        @foreach($shows as $show)
            <strong><h5>{{$show->name}}</h5></strong>
            <strong>Shown at: {{\Carbon\Carbon::parse($show->start_time)->format('D H:i')}}</strong>
            <p>
                {{$show->description}}
            </p>
            <a class="text-blue-600" href="{{route('show.show', $show->id)}}">
                Book show
            </a>
            <br><br>
        @endforeach
    </div>
@endsection
