<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function create()
    {
        $events = Event::all();
        return view('create-event', compact('events'));
    }
    
    public function store(Request $request)
    {   
        $event = new Event();
        $event->name = $request->name;
        $event->date = $request->date;
        
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date|after:today',
        ]);
        
        $event->save();

        return redirect('/')->with('success', 'Event created successfully!');
    }
}
