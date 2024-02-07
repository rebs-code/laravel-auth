@extends('layouts.admin')

@section('content')
    <div class="container">
        <ul>
            @foreach ($projects as $project)
                <li>{{ $project->name }}</li>
            @endforeach
        </ul>
        <table class="table-striped-columns table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Tech Stack</th>
                    <th scope="col">Repo Link</th>
                    <th scope="col">Slug</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->tech_stack }}</td>
                        <td>{{ $project->repo_link }}</td>
                        <td>{{ $project->slug }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
