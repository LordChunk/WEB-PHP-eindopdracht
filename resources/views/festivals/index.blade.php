@extends('layouts.app')
@section('header')
    <h1>{{ __('Festival') }}</h1>
@endsection
@section('content')

    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    @if(Auth::user() && Auth::user()->role->role == 'administratie')
                        <a class="btn-lg btn-success pb-0" href="{{ route('festivals.create') }}"><span
                                class="material-icons">add</span></a>
                    @endif
                </div>
                <div class="m-1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-hover mt-4 fixed-table-head">
                        <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">Adres</th>
                            <th scope="col">Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($festivals as $festival)
                            <tr style="transform: rotate(0);">
                                <td><a class="stretched-link" href="{{ route('festivals.show', $festival) }}"></a>{{ $festival->Name }}</td>
                                <td>{{ $festival->Location }}</td>
                                <td>{{ $festival->Type }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
