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
    <h3><strong>Select seats:</strong></h3>
    <div class="grid grid-cols-{{$room->column + 1}} grid-gap-4">
        <div>
            @for($rowNo = 0; $rowNo < $room->row; $rowNo++)
                <div><strong>Row: {{$rowNo}}</strong></div>
            @endfor
        </div>
        @for($colNo = 0; $colNo < $room->column; $colNo++)
            <div class="text-center">
            @for($rowNo = 0; $rowNo < $room->row; $rowNo++)
                @if(!isset($blockedSeats[$colNo][$rowNo]))
                   <a class="block bg-green-300" href="{{route('show.book', [$show, $colNo, $rowNo])}}">{{$colNo}}</a>
                @else
                    <div class="bg-gray-600">&nbsp;</div>
                @endif
            @endfor
            </div>
        @endfor
    </div>
@endsection
