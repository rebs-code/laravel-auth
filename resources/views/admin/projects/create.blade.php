@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h2>Create a New Record</h2>
        <p>or <a href="{{ route('admin.projects.index') }}">back to Projects</a></p>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            {{-- input name --}}
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName">
            </div>
            {{-- input description --}}
            <div class="mb-3">
                <label for="descriptionArea" class="form-label">Project Description</label>
                <textarea class="form-control" id="descriptionArea" rows="3"></textarea>
            </div>
            {{-- input tech stack --}}
            <div class="mb-3">
                <label for="inputStack" class="form-label">Tech Stack</label>
                <input type="text" class="form-control" id="inputStack">
            </div>
            {{-- input repo link --}}
            <div class="mb-3">
                <label for="inputRepo" class="form-label">Repo Link</label>
                <input type="text" class="form-control" id="inputRepo">
            </div>
            {{-- input live link --}}
            <div class="mb-3">
                <label for="inputLive" class="form-label">Live Link</label>
                <input type="text" class="form-control" id="inputLive">
            </div>
            {{-- input slug --}}
            <div class="mb-3">
                <label for="inputSlug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="inputSlug">
            </div>
            {{-- input image --}}
            <div class="mb-3">
                <label for="inputImage" class="form-label">Image</label>
                <input class="form-control" type="file" id="inputImage">
            </div>
            {{-- button to submit --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
