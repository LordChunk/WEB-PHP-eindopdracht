@extends('layouts.app')
@section('header')
    <h1 class="font-weight-bold">{{__('Selected Festival:')}} {{$festival->name}}</h1>
@endsection
@section('content')
    <form action="{{route('festivalticketusers.storetickets', $festival)}}" method="post">
        @csrf

        <div>
            <label for="number_of_tickets" class="col-form-label">{{__('Number of tickets')}}:</label>

            <input type="number"
                   class="form-control @error('number_of_tickets') is-invalid @enderror" name="number_of_tickets"
                   value="{{ old('number_of_tickets') }}" autofocus required>

            @error('number_of_tickets')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div>
            <label for="start_day" class="col-form-label">{{__('Start day')}}:</label>

            <select name="start_day" required>
                <option>
                    1
                </option>
                <option>
                    2
                </option>
                <option>
                    3
                </option>
            </select>

            @error('start_day')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div>
            <label for="end_day" class="col-form-label">{{__('End day')}}:</label>

            <select name="end_day" required>
                <option>
                    1
                </option>
                <option>
                    2
                </option>
                <option>
                    3
                </option>
            </select>

            @error('end_day')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div>
            <label for="photo" class="col-form-label">{{__('Photo')}}:</label>

            <input type="file" name="file" required>

            @error('photo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <input type="hidden" name="festival_id" value="{{$festival->id}}">

        <button class="btn btn-primary">{{__('Order Tickets!')}}</button>
    </form>
@endsection
