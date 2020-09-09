<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    
        return [
            'category_id'=> $this->category_id,
            'product_name' =>  $this->product_name,
            'product_origin' =>  $this->product_origin,
            'product_description' =>  $this->product_description,
            'product_price' =>  $this->product_price,
            'product_stock' =>  $this->product_stock,
            'product_minallowedstock'=> $this->product_minallowedstock,
            'product_expirationdate'=> $this->product_expirationdate,
        ];
    }
}
