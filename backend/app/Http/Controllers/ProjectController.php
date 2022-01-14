<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects.list', compact('projects'));
    }

    public function new()
    {
        return view('pages.projects.new');
    }

    public function create(Request $request)
    {
        $project = new Project;
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->save();
        return redirect('/projects');
    }
}
