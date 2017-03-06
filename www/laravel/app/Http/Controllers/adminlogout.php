<?php

namespace App\Http\Controllers;


class AdminLogout extends Controller {

	public function doAdminLogout() {

		Session::all();


		// unset(Session::all());

		Session::flush();

		return redirect()->route('index'); //We redirect to admin_login page
    }
}
