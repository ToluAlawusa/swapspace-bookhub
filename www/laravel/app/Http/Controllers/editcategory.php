<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use Illuminate\Http\Request;

class EditCategory extends Controller 
{

	public function showEditCategory(Id $id) {

          return view('editcategory', ['caty'=>Category::getCategoryById($id), 'id'=>$id]);
	}

    
}