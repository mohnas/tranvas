<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Event\Event;

class EventController extends Controller
{
	public function home()
	{
		return view('welcome');		# code...
	}

	public function index()
	{
		$today = \Carbon\Carbon::today()->format('Y-m-d');
		$upcommingEvents = Event::where('end_date','>',$today)
					->orderBy('start_date','desc')
					->get();
		$pastEvents = Event::where('end_date','<',$today)
					->orderBy('start_date','desc')
					->limit(3)
					->get();
		return view('events.event-list')
		->with('upcommingEvents', $upcommingEvents)
		->with('pastEvents', $pastEvents);

	}
}
