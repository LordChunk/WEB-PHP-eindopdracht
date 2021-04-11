@extends('layouts.app')
@section('header')
    <h1 class="font-weight-bold">{{__('Selected Festival:')}} {{$festivals->name}}</h1>
@endsection
@section('content')
    <form action="{{route('customers.store')}}" method="post">
        @csrf

        <div>
            <label for="number_of_tickets" class="col-form-label">{{__('Number of tickets')}}:</label>

            <input  type="text"
                   class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
            @enderror
        </div>


        <div>
            <label for="number_of_tickets" class="col-form-label">{{__('begin')}}:</label>

            <input  type="text"
                    class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
            @enderror
        </div>

        <div>
            <label for="number_of_tickets" class="col-form-label">{{__('Number of tickets')}}:</label>

            <input  type="text"
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
