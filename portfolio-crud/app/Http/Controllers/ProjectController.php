<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
     public function index() {
        $projects = Project::paginate(5);
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function create() {
        return view('projects.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'status' => 'required|in:draft,published',
    ]);

    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    Project::create([
        'title' => $request->title,
        'description' => $request->description,
        'project_url' => $request->project_url,
        'image' => $imageName,
        'status' => $request->status,
    ]);

    return redirect()->route('projects.index')->with('success', 'Project created.');
}


    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        $request->validate(['title' => 'required']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $project->image = $imagePath;
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'project_url' => $request->project_url,
            'status' => $request->status
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated!');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted!');
    }
}
