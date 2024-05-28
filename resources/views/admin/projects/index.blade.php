@extends('layouts.admin')

@section('content')

<h1> Progetti </h1>

<a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Create New Project</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col"> Title </th>
            <th scope="col"> Author </th>
            <th scope="col"> Date of creation </th>
            <th scope="col"> Description </th>
        </tr>
    </thead>

    @foreach ($projects as $project)
        <tr>
            <td> {{$project->title}} </td>
            <td> {{$project->author}} </td>
            <td> {{$project->date_of_creation}} </td>
            <td> {{$project->description}} </td>
            <td>
                <a href="" class="btn btn-success "> <i class="fa-solid fa-eye"></i> </a>
                <a href="" class="btn btn-warning "> <i class="fa-solid fa-pencil"></i> </a>
                <a href="" class="btn btn-danger "> <i class="fa-solid fa-trash"></i> </a>
            </td>
        </tr>
    @endforeach

@endsection
