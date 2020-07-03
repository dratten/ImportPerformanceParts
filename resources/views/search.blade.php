@extends('app')
 
@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-10 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Search Results</h2>
          @foreach($products as $item)
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{ $item->product_image }}" alt="Image" height="120" width="100"/>
                  <h2>Kshs.{{ $item->product_price }}</h2>
                  <p>{{ $item->product_name }}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>Kshs.{{ $item->product_price }}</h2>
                    <p>{{ $item->product_name }}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
