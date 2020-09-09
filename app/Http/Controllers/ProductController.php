<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',[
            'products' => $products,
        ]);
    }

    public function create()
    {
        $categories= Category::all();
        return view ('products.create',[
            'categories' =>$categories,
        ]);
    }
   
    

    public function store(Request $request){
    
         Product::create([

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
        return redirect()->route('products.index');
    }

    public function show(){

        $request=request();
        $productId=$request->product;
        $product = Product::find($productId);

        return view('products.show',[
            'product'=>$product,
        ]);
    }


    public function edit($id)
    {
        $request= request();
        $categories= Category::all();
        $productId=$request->product;
        $product=Product::find($ProductId);
        return view('products.edit',[
        'product'=>$product,
        'categories' =>$categories,
    ]);

    }
    
    public function update(Request $request){

        $request=request();
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
        return redirect()->route('products.index');
        
    }
}
