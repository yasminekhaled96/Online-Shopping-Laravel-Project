<?php

namespace App;
use App\Category;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'category_id',
       'product_name',
       'product_origin',
       'product_description',
       'product_price',
        'product_stock',
       'product_minallowedstock',
        'product_quantity',
        'product_expirationdate',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
