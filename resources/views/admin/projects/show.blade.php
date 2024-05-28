<!-- resources/views/posts/show.blade.php -->
@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <span>{{ $project->date_of_creation }}</span>
        <span>{{ $project->author }}</span>

        <a href="{{ route('admin.index') }}">Back to projects</a>
    </div>

@endsection
