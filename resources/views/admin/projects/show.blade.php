@extends('layouts.admin')

@section('content')
    <div class="bg-secondary py-4 text-center d-flex justify-content-center align-items-center">
        <h1>
            {{ $project->title }}
        </h1>
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-info mx-5">Edit</a>
    </div>

    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show my-2" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong> {{ session('message') }} </strong>
        </div>
    @endif


    <div class="container my-3">
        <img class=" w-50" src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title . 'image' }}">
    </div>
@endsection
