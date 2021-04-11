@extends('layouts.app')
@section('header')
    <h1>{{__('Selected Festival:')}} {{$festival->name}}</h1>

    <a class="btn-primary btn" href="{{route('festivalticketusers.create', $festival)}}">
        {{__('Buy tickets!')}}
    </a>
@endsection
@section('content')
    {{__('Location:')}} {{$festival->location}}
    {{__('Number of tickets for sale:')}} {{$festival->numberOfTickets}}
    {{__('Start date:')}} {{$festival->startDate}}
    {{__('End date:')}} {{$festival->endDate}}
@endsection
