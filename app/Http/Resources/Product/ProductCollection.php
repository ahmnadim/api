<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public $preserveKeys = true;
    
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'totalPrice' => round($this->price - (($this->discount*$this->price)/100), 2),
           'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(), 2) : 'No Reviews',
            'href' => [
                'link' => route('products.show', $this->id)
            ],
        ];
    }
}
