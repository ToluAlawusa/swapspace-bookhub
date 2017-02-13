<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public static function getCategories() {
        $cat = Category::all();
        return $cat;
    }

    public static function getCategoryById($id) {
  		$caty = Category::where("category_id", '=', $id)->get();
  		return $caty;
  }

	
}