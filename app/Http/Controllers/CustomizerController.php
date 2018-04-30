<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Customizer;
class CustomizerController extends Controller
{
    protected $customizer = null;

    public function __construct(){
        $this->customizer = new Customizer;
    }
    public function save(Request $request){

      $save = $this->customizer->save($request->all());

      return $save;
    }
}
