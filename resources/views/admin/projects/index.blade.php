@extends('layouts.admin')

@section('content')
    <div class="container">
        <ul>
            @foreach ($projects as $project)
                <li>{{ $project->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
