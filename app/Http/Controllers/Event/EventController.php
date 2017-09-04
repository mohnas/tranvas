<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
	public function home()
	{
		//
		return view('welcome');		# code...
	}

	public function create()
	{
		//
		return view('create');		# code...
	}
    //
}
