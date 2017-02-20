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

        return redirect()->action('SubjectController@index')->withSuccess('Create Subject Successfully!');
    }


    public function edit($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return redirect()->action('SubjectController@index')
                ->withErrors(['message' => 'Not found subject']);
        }

        return view('subjects.edit')->with(
            [
                'subject' => $subject,
                'action' => url('/subjects/'. $subject->id),
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

        return redirect()->action('SubjectController@index')->withSuccess('Update Subject Successfully!');
    }

    public function destroy($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return redirect()->action('SubjectController@index')
                ->withErrors(['message' => 'Not found subject']);
        }

        $subject->delete();

        return redirect()->action('SubjectController@index')->withSuccess('Delete Subject Successfully!');
    }
}
