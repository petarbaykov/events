<?php namespace App\Services;

use App\Event;
class Customizer{

    public function save($data){
      $event = Event::where('slug',$data['slug'])->first();
      $event->header_data = json_encode($data['header-data']);
      $event->about_data = json_encode($data['about-data']);
      $event->speakers_data = $data['speakers-data'];
      $event->save();

    }

    public function getData($slug){
      $event = Event::where('slug',$slug)->first();
      parse_str(json_decode($event->header_data),  $header_data);
      parse_str(json_decode($event->about_data),  $about_data);
      $speakers_data = json_decode( $event->speakers_data);

      return [
        'header_data'=>(object)$header_data,
        'about_data'=>(object)$about_data,
        "speakers_data"=>  $speakers_data,
        'event'=>$event
      ];
    }
}
