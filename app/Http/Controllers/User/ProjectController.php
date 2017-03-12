<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('user.projects.index', compact('projects'));
    }

    public function show($id)
    {
    	$project = Project::find($id);

    	return view('user.projects.show', compact('project'));
    }
}
