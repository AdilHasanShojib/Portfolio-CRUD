@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>{{ $project->title }}</h2>
    <a href="{{ url('projects') }}" class="btn btn-danger float-end mb-3">Back</a>
    <p><strong>Status:</strong> {{ $project->status }}</p>
    <img src="{{ asset('images/' . $project->image) }}" width="300">
    <p class="mt-3">{{ $project->description }}</p>
    @if($project->project_url)
        <p><strong>Project Link:</strong> <a href="{{ $project->project_url }}" target="_blank">{{ $project->project_url }}</a></p>
    @endif
    <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
