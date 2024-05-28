@extends('layouts.admin')

@section('content')

<h1> Technologies </h1>

<table class="table">

    @foreach ($technologies as $technology)
        <tr>
            <td> {{$technology->name}} </td>
        </tr>
    @endforeach

@endsection
