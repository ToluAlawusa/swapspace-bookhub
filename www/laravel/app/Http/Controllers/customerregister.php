<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerRegister extends Controller {


	public function showCustomerRegister() {
         return view('customerregister');
	}
}
