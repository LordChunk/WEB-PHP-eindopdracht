@extends('layouts.app')
@section('header')
    <h1 class="font-weight-bold">{{__('Bought ticket')}}</h1>
@endsection
@section('content')
    <p>
        {{__('Number of tickets:')}} {{$festivalTicketUser->number_of_tickets}}
    </p>
    <p>
        {{__('Start day:')}} {{$festivalTicketUser->start_day}}
    </p>
    <p>
        {{__('End day:')}} {{$festivalTicketUser->end_day}}
    </p>
    <img src="{{$festivalTicketUser->photo}}">

@endsection
