<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Services\Customizer;
class EventController extends Controller
{
    protected $customizer = null;
    public function __construct(){
        $this->customizer = new Customizer;
    }
    public function getEvent($slug){
      $data = $this->customizer->getData($slug);

      if($data["event"]){
        return view('events.event')->with($data);
      }

      return "event not found";
    }

    public function editEvent($slug){
      $data = $this->customizer->getData($slug);
      
      return view('events.edit')->with($data);
    }
}
