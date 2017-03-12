<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Excel;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('admin.projects.index', compact('projects'));
    }

    public function importExcel(Request $request)
    {
    	if ($request->hasFile('fileProject')) {
    		$path = $request->file('fileProject')->getRealPath();
    		$projectExcel = Excel::load($path)->get();
    		if (!empty($projectExcel) && $projectExcel->count()) {
    			foreach ($projectExcel as $num => $row) {
    				foreach ($row as $key => $value) {
	    				$insert[] = [
	    					'name' => $value->name,
	    					'description' => $value->description,
	    					'teacher_id' => $value->teacher_id,
                            'created_at' => date('Y-m-d h:i:s'),
                            'updated_at' => date('Y-m-d h:i:s'),
	    				];
	    			}
    			}

    			if (!empty($insert)) {
    				$project = new Project();
    				$project->insert($insert);
    			}
    		}
    	}

    	return redirect('admin/projects')->withSuccess('Import thành công');
    }
}
