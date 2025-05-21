@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Project</h2>
    <a href="{{ url('projects') }}" class="btn btn-danger float-end mb-3">Back</a>
                        
    <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title *</label>
            <input type="text" name="title" value="{{ $project->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Project URL</label>
            <input type="url" name="project_url" value="{{ $project->project_url }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Image (Leave empty to keep current)</label>
            <input type="file" name="image" class="form-control">
            <br>
            <img src="{{ asset('images/' . $project->image) }}" width="150">
        </div>
        <div class="mb-3">
            <label>Status *</label>
            <select name="status" class="form-control" required>
                <option value="draft" {{ $project->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ $project->status == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
