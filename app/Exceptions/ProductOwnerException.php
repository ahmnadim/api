<?php

namespace App\Exceptions;

use Exception;

class ProductOwnerException extends Exception
{
    public function render(){
    	return ["error" => "You do not Own this product."];
    }
}
