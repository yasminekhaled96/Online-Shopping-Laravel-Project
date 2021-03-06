@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a product</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}">
          @csrf
          <div class="form-group">    
              <label for="category_id">Category ID:</label>
              <input type="text" class="form-control" name="category_id"/>
          </div>

          <div class="form-group">
              <label for="product_name">Name:</label>
              <input type="text" class="form-control" name="product_name"/>

              </div>

          <div class="form-group">
              <label for="product_origin">Origin:</label>
              <input type="text" class="form-control" name="product_origin"/>
          </div>
          <div class="form-group">
              <label for="product_description">product_description:</label>
              <input type="text" class="form-control" name="product_description"/>
          </div>
          <div class="form-group">
              <label for="product_price">product_price:</label>
              <input type="text" class="form-control" name="product_price"/>
          </div>
          <div class="form-group">
              <label for="product_stock">product_stock</label>
              <input type="text" class="form-control" name="product_stock"/>
          </div>
          <div class="form-group">
              <label for="product_minallowedstock">product_minallowedstock</label>
              <input type="text" class="form-control" name="product_minallowedstock"/>
          </div>   
          <div class="form-group">
              <label for="product_quantity">product_quantity</label>
              <input type="text" class="form-control" name="product_quantity"/>
          </div>   
          <div class="form-group">
              <label for="product_expirationdate">product_expirationdate</label>
              <input type="text" class="form-control" name="product_expirationdate"/>
          </div>   
          <button type="submit" class="btn btn-primary-outline">Add product</button>
      </form>
  </div>
</div>
</div>
@endsection