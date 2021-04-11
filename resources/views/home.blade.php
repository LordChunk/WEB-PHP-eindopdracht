@extends('layouts.app')

@section('content')

    <a href="{{route('restaurants.index')}}" class="btn btn-primary">
        <p>Show restaurants</p>
    </a>

    <a href="{{route('orderables.index')}}" class="btn btn-primary">
        <p>Show festivals and cinemas</p>
    </a>

@endsection

