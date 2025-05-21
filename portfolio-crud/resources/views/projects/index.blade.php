@extends('layout')

@section('content')
 <div class="container mt-5">
    
    <h2>All Projects</h2>
    <a href="{{ url('projects/create')}}" class="btn btn-primary mb-3 float-end">+Add New Project</a>

     @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($projects->isEmpty())
        <p class="text-danger">No projects found.</p>
    @else

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->status }}</td>
                <td><img src="{{ asset('images/' . $project->image) }}" width="100"></td>
                <td>
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{$projects->links()}}
    @endif
</div> 
@endsection


<style>
    .w-5.h-5{
        width: 15px;
    }
</style>

    

