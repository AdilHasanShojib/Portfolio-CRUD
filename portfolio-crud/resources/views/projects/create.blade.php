@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Add New Project</h2>
    <a href="{{ url('projects') }}" class="btn btn-danger float-end">Back</a>
                        
    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title *</label>
            <input type="text" name="title" class="form-control" required>
             @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
             @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Project URL</label>
            <input type="url" name="project_url" class="form-control">
             @error('project_url') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Image *</label>
            <input type="file" name="image" class="form-control" required>
             @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Status *</label>
            <select name="status" class="form-control" required>
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
