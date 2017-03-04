<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

   	public function index()
   	{
   		return 'Staff';
   	}
}
