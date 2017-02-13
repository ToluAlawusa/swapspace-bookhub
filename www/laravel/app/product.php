<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getProduct() {
        $prod = Products::all();
        return $prod;
    }

    public static function getProductId($id) {
  		$prodid = Products::where("product_id", '=', $id)->first();
  		return $prodid;
    }

    public static function showProductById($id) {
	    $showp = Products::where('category_id', '=', $id)->get();
	    return $showp;
    }
	
}