<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return ProductResource::collection(
            Product::all()
            
        ); 
    }

    public function show($product){
        return  Product::find($product)
            ?new ProductResource(
                Product::find($product)
            ) : 'does not exist';
    }

    public function store(Request $request)
    {
       
    
    $product= Product::create([
        'category_id' => $request->category_id,
        'product_name'=>$request->product_name,
        'product_origin' =>  $request->product_origin,
        'product_description' =>  $request->product_description,
        'product_price' =>  $request->product_price,
        'product_stock' =>  $request->product_stock,
        'product_minallowedstock' =>  $request->product_minallowedstock,
        'product_quantity' =>  $request->product_quantity,
        'product_expirationdate' =>  $request->product_expirationdate,

        ]);
    // return response()->json($orders,201);

     return new ProductResource($product);
}



public function update(Request $request)
{

    $productId=$request->product;
        $product= Product::find($productId);
        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_origin = $request->product_origin;
        $product->product_description = $request->product_description;
        $product->product_price =  $request->product_price;
        $product->product_stock =$request->product_stock;
        $product->product_minallowedstock = $request->product_minallowedstock;
        $product->product_quantity =$request->product_quantity;
        $product->product_expirationdate=$request->product_expirationdate;
        $product->save();
    return new ProductResource($product);
}



}
