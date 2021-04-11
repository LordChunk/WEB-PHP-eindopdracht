@extends('layouts.app')
@section('header')
    <h1>{{__('All Festivals')}}</h1>
    <a href="{{route('orderables.index')}}" class="btn btn-primary">
        {{__('back to list')}}
    </a>
@endsection
@section('content')
    <form action="{{route('customers.store')}}" method="post">
        @csrf

        <div>
            <label for="number_of_tickets" class="col-form-label">{{__('Amount of tickets')}}:</label>

            <input id="name" type="text"
                   class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
            @enderror
        </div>

        <button class="btn btn-primary">Maak aan</button>
    </form>
@endsection
