<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;
class CreateEventController extends Controller
{
    //

    public function createEvent(){

      return view('events.create-event');
    }

    public function postCreateEvent(Request $request){

       $request = $request->all();
       $event = new Event;
       $event->name = $request['name'];
       $event->slug = $request['slug'];
       $event->user_id = Auth::user()->id;
       $event->save();

       return redirect()->back();

    }
}
