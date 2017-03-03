<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CustomerLogin extends Controller 
{

	public function showCustomerLogin() {

          return view('customerlogin');
	}


	public function doCustomerLogin(Request $request) {

       $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            
            if(!Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            	return redirect()->back()->with(['fail' => 'email or password incorrect']);
            }


            if(Session::has('customer_id')){
                Session::get('customer_id');
            }

            return redirect()->route('index');
    }

}