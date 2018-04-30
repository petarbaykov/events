<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    public function getEvent($slug){

      $event = Event::where('slug',$slug)->first();
      parse_str(json_decode($event->header_data),  $header_data);

      $data = [
        'header_data'=>(object)$header_data,
        'event'=>$event
      ];
      if($event){
        return view('events.event')->with($data);
      }

      return "event not found";
    }

    public function editEvent($slug){
      $event = Event::where('slug',$slug)->first();


      $data = [

        'event'=>$event
      ];
      return view('events.edit')->with($data);
    }
}
