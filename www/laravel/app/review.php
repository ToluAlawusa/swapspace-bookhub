<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model 
{
	# eloquent needs u to define ur preferred table name and primary key for overide
  protected $table = 'reviews';
  protected $primaryKey = 'review_id';

  public static function getReviews() {
        $review = Reviews::all();
        return $review;
  }

  public static function getReviewsId($id) {
    // $reviewid = Reviews::all();
  		$revid = Reviews::where("product_id", $id)->get();
      if($revid != null) {
        return $revid;
      } else {
        return false;
      }
  		
  }

}