<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
    	$subjects = Subject::all();

    	return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store()
    {
    }


    public function edit($id)
    {

    }

    public function update()
    {

    }

    public function destroy($id)
    {

    }
}
