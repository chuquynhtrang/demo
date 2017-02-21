<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index()
    {
    	$subjects = Subject::all();

    	return view('subjects.index', compact('subjects'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:subjects',
        ]);

        $subject = new Subject();
        $name = $request->only('name');
        $subject->create($name);

        return redirect('/admin/subjects')->withSuccess('Create Subject Successfully!');
    }


    public function edit($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return redirect('/admin/subjects')
                ->withErrors(['message' => 'Not found subject']);
        }

        return view('subjects.edit')->with(
            [
                'subject' => $subject,
                'action' => url('/admin/subjects/'. $subject->id),
                'input' => '<input name="_method" type="hidden" value="PUT">',
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return redirect()->action('SubjectController@index')
                ->withErrors(['message' => 'Not found subject']);
        }

        $this->validate($request, [
            'name' => 'required|unique:subjects',
        ]);

        $request = $request->only('name');
        $subject->update($request);

        return redirect('/admin/subjects')->withSuccess('Update Subject Successfully!');
    }

    public function destroy($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return redirect('/admin/subjects')
                ->withErrors(['message' => 'Not found subject']);
        }

        $subject->delete();

        return redirect('/admin/subjects')->withSuccess('Delete Subject Successfully!');
    }
}
