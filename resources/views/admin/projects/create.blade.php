@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h2>Create a New Record</h2>
        <p>or <a href="{{ route('admin.projects.index') }}">back to Projects</a></p>
        <form>
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
                <label for="descriptionArea" class="form-label">Project Description</label>
                <textarea class="form-control" id="descriptionArea" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="inputStack" class="form-label">Tech Stack</label>
                <input type="text" class="form-control" id="inputStack">
            </div>
            <div class="mb-3">
                <label for="inputRepo" class="form-label">Repo Link</label>
                <input type="text" class="form-control" id="inputRepo">
            </div>
            <div class="mb-3">
                <label for="inputLive" class="form-label">Live Link</label>
                <input type="text" class="form-control" id="inputLive">
            </div>
            <div class="mb-3">
                <label for="inputSlug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="inputSlug">
            </div>
            <div class="mb-3">
                <label for="inputImage" class="form-label">Image</label>
                <input class="form-control" type="file" id="inputImage">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="{{ route('admin.projects.index') }}" role="button" class="btn btn-primary">Back</a>
    </div>
@endsection
