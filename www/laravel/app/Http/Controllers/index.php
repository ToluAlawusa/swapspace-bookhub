<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Splash;
use App\Trending;
use Illuminate\Http\Request;


class Index extends Controller {

    public function showIndexPage() {
    	
      return view('index', ['totalItems'=> $this->_cartCount]);
    }
}