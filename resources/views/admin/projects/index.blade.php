@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Project List</h2>
            <a href="{{ route('admin.projects.create') }}" role="button" class="btn btn-primary m-2">Create a New
                Record</a>
        </div>

        <table class="table-striped-columns table table-dark">
            <thead>
                <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Tech Stack</th>
                    <th scope="col" class="col-3">Repo Link</th>
                    <th scope="col">Slug</th>
                    <th scope="col" class="col-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->tech_stack }}</td>
                        <td>{{ $project->repo_link }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" role="button"
                                class="btn btn-primary btn-sm me-2">Show</a>
                            <a href="" role="button" class="btn btn-info btn-sm me-2 text-white">Edit</a>
                            <a href="" role="button" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
