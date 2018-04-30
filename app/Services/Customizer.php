<?php namespace App\Services;

use App\Event;
class Customizer{

    public function save($data){
      $event = Event::where('slug',$data['slug'])->first();
      $event->header_data = json_encode($data['header-data']);

      $event->save();

    }
}
