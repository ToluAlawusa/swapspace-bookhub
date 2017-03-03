<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Splash;
use App\Trending;
use App\Customer;


class CustomerCatalogue extends Controller {

    public function showCustomerCatalogue() {
          return view('customercatalogue', ['prod'=>Product::getProduct(), 'cat'=>Category::getCategories(), 'totalItems'=> $this->_cartCount]);
    }

    public function showCatalogueCategories($id) {
    	return view('customercatalogue', ['prod'=>Product::showProductById($id), 'cat'=>Category::getCategories(), 'totalItems'=> $this->_cartCount]);
    }

}
