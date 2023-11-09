@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-2 text-secondary my-4">
            Create new project
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">
                <small></small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="textarea" class="form-control" name="description" id="description">
                <small></small>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Choose Image</label>
                <input type="file" class="form-control" name="cover_image" id="cover_image" placeholder=""
                    aria-describedby="cover_image_helper">
                <small></small>
            </div>


            <button type="submit" class="btn btn-primary">
                Create
            </button>


        </form>


    </div>
@endsection
