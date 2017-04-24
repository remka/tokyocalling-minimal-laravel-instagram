<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Vinkla\Instagram\Instagram;
use \Cache;

class HomeController extends Controller {
  public function listInstagram() {
    if (Cache::has('cache_instagram')) {
      //echo('has cache');
      $results = Cache::get('cache_instagram');
    } else {
      //echo('has NO cache. Create!');
      $instagram = new Instagram();
      $results = $instagram->get('_tokyocalling');
      //Cache::put('cache_instagram', $results, 60); // 1 hour
      Cache::put('cache_instagram', $results, 1); // 1 min
    }
    //$instagram = new Instagram();
    //return $instagram->get('_tokyocalling');
    return view('home', ['items' => $results]);
  }
}
