@extends('layouts.admin')

@section('content')
    <div class="bg-dark py-4 text-center text-info d-flex justify-content-center align-items-center">
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
        <div class="row">
            {{-- left col with preview image --}}
            <div class="col">
                <img width="700px" src="{{ asset('storage/' . $project->cover_image) }}"
                    alt="{{ $project->title . 'image' }}">
            </div>
            {{-- right column with description and links --}}
            <div class="col">
                <div>
                    <h4>
                        Description
                    </h4>
                    <p>
                        {{ $project->description }}
                    </p>
                </div>
                {{-- projects links wrapper --}}
                <div>
                    <h4>
                        Links
                    </h4>
                    <div class="d-flex">
                        {{-- git hub --}}
                        <div class="pe-5">
                            <h5>
                                Git Hub
                            </h5>
                            <a href="{{ $project->git_link }}" class="text-decoration-none text-info">
                                {{ $project->git_link }}
                            </a>
                        </div>
                        {{-- project link --}}
                        <div>
                            <h5>
                                Project
                            </h5>
                            <a href="{{ $project->project_link }}" class="text-decoration-none text-info">
                                {{ $project->project_link }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
