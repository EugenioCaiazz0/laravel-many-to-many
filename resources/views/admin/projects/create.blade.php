@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Create New Project</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required maxlength="100">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="date_of_creation">Date of Creation</label>
            <input type="date" name="date_of_creation" id="date_of_creation" class="form-control" value="{{ old('date_of_creation') }}" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Project</button>
    </form>
</div>

@endsection
