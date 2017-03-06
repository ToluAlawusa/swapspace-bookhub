<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;
use App\Cart;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $_cartCount;

	public function __construct(){

		if(Session::has("customer_id")) {

			$getTotal = Cart::cartCount(Session::get("customer_id"));
			$this->_cartCount = ( $getTotal > 0) ? $getTotal : 0;
		}
	}
}
