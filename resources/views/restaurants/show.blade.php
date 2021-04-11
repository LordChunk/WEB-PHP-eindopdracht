@extends('layouts.app')
@section('header')
    <h1>Selected Restaurant: {{$restaurant->name}}</h1>
@endsection
@section('content')
    <strong>Information</strong>
    <p>
        Location: {{$restaurant->location}} <br>
        Opens at: {{\Carbon\Carbon::parse($restaurant->opens_at)->format('H:i')}} <br>
        Closes at: {{\Carbon\Carbon::parse($restaurant->closes_at)->format('H:i')}}
    </p>

    @guest
        <a href="/login">Login to make a reservation</a>
    @endguest

    @auth
        <h2 class="font-weight-bold">Make a reservation</h2>
        <form action="{{route('restaurants.makereservation', $restaurant)}}" method="post">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <p>
                <label for="guest_count">Number of guests</label><br>
                <input type="number" id="guest_count" name="guest_count" required>
            </p>
            <p>
                <label for="time">Time of reservation</label><br>
                <select name="time" id="time" required>
                @foreach($availableTimeSlots as $timeslot)
                    <option value="{{$timeslot}}">{{$timeslot}}</option>
                @endforeach
                </select>
            </p>

            <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">

            <button type="submit" class="btn btn-primary">Submit order</button>
        </form>
    @endauth
@endsection
