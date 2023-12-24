<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
public function index()
{
$events = Event::all();
return view('events.index', compact('events'));
}


public function show($id)
{
$event = Event::findOrFail($id);
return view('events.show', compact('event'));
}

}
