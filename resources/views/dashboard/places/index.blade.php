@extends('layouts.dashboard')

@section('top-btn')
    <a class="btn btn-primary btn-sm" href="{{ route('dashboard.place.create') }}"><i class="fa fa-plus"></i> Add Place</a>
@endsection
