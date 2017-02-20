<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\council;

class CouncilController extends Controller
{
    public function index()
    {
    	$councils = Council::all();

    	return view('councils.index', compact('councils'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:councils',
        ]);

        $council = new Council();
        $name = $request->only('name');
        $council->create($name);

        return redirect()->action('CouncilController@index')->withSuccess('Create Council Successfully!');
    }


    public function edit($id)
    {
        $council = Council::find($id);

        if (!$council) {
            return redirect()->action('CouncilController@index')
                ->withErrors(['message' => 'Not found council']);
        }

        return view('councils.edit')->with(
            [
                'council' => $council,
                'action' => url('/councils/'. $council->id),
                'input' => '<input name="_method" type="hidden" value="PUT">',
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $council = Council::find($id);

        if (!$council) {
            return redirect()->action('CouncilController@index')
                ->withErrors(['message' => 'Not found council']);
        }

        $this->validate($request, [
            'name' => 'required|unique:councils',
        ]);

        $request = $request->only('name');
        $council->update($request);

        return redirect()->action('CouncilController@index')->withSuccess('Update Council Successfully!');
    }

    public function destroy($id)
    {
        $council = Council::find($id);

        if (!$council) {
            return redirect()->action('CouncilController@index')
                ->withErrors(['message' => 'Not found class']);
        }

        $council->delete();

        return redirect()->action('CouncilController@index')->withSuccess('Delete Council Successfully!');
    }
}
