<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
		"name", "details", "price", "stock", "discount"
	];

    public function reviews(){
    	return $this->hasMany(Review::class);
    }
}
