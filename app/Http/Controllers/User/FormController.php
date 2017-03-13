<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
    	$forms = Form::all();

    	return view('user.forms.index', compact('forms'));
    }

    public function upload(Request $request)
    {
    	$form = new Form();

    	if($request->hasFile('form')) {
    		dd($request->file('form'));
    		$form = $request->file('form');
    		$filename = $form->getClientOriginalName();
    		$request->file('avatar')->move(base_path() . 'public/uploads/', $filename);
    	}
    }
}
