@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Products</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
       
          <td>ID</td>
          <td>category_id</td>
          <td>product_name</td>
          <td>product_origin</td>
          <td>product_description</td>
          <td>product_price</td>
          <td>product_stock</td>
          <td>product_minallowedstock</td>
          <td>product_quantity</td>
          <td>product_expirationdate</td>

          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_origin}}</td>
            <td>{{$product->product_description}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_stock}}</td>
            <td>{{$product->product_minallowedstock}}</td>
            <td>{{$product->product_quantity}}</td>
            <td>{{$product->product_expirationdate}}</td>
            <td>
            <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
            </td>
           
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection