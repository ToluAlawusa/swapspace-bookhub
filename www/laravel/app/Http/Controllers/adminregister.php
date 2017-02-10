<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class AdminRegister extends Controller 
{

	public function showAdminRegister() {

          return view('adminregister');
	}

    public function doAdminRegister(Request $request) {

   $this->validate($request, [
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'same:pass',
        ]);
        

        return view('adminregister');
    }
}
