<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Vinkla\Instagram\Instagram;

class HomeController extends Controller {
  public function listInstagram() {
    $instagram = new Instagram();
    //return $instagram->get('_tokyocalling');
    return view('home', ['items' => $instagram->get('_tokyocalling')]);
  }
}
