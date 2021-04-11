@extends('layouts.app')
@section('header')
    <h1 class="font-weight-bold">{{__('Selected Festival:')}} {{$festival->name}}</h1>
@endsection
@section('content')
    <form action="{{route('festivalticketusers.store')}}" method="post">
        @csrf

        <div>
            <label for="number_of_tickets" class="col-form-label">{{__('Number of tickets')}}:</label>

            <input type="number"
                   class="form-control @error('name') is-invalid @enderror" name="number_of_tickets"
                   value="{{ old('number_of_tickets') }}" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="hidden" name="festival_id" value="{{$festival->id}}">
        </div>

        <button class="btn btn-primary">Create</button>
    </form>
@endsection
