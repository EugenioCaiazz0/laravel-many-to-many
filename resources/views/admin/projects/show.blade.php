<!-- resources/views/posts/show.blade.php -->
@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1>{{ $project->title }}</h1>
        <p>{{ $project->description }}</p>
        <p>{{ $project->author }}</p>
        <p>{{ $project->date_of_creation }}</p>


        <a href="{{ route('admin.projects.index') }}">Back to projects</a>
    </div>

@endsection
