@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-2 text-secondary my-4">
            Your Projects
        </h2>

        <a class="btn btn-primary my-4 ms-4 position-fixed top-10 end-0 me-3" href="{{ route('admin.projects.create') }}">
            Add Project
        </a>

        <div class="table-responsive border my-4">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($projects as $project)
                        <tr>
                            <td>
                                {{ $project->id }}
                            </td>
                            <td>
                                <img width="150px" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
                            </td>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                {{ $project->created_at }}
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">
                                    View
                                </a>
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-secondary">
                                    Edit
                                </a>


                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $project->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $project->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitle-{{ $project->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Attention! You cannot go back from this
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                <!-- Delete form -->
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </td>
                        </tr>
                    @empty
                        <h3>
                            No projects at the moment
                        </h3>
                    @endforelse



                </tbody>
            </table>
        </div>



    </div>
@endsection
