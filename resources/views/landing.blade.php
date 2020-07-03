@extends('app')

@section('content')
<section id="slider"><!--slider-->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#slider-carousel" data-slide-to="1"></li>
            <li data-target="#slider-carousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <div class="col-sm-6">
                <h1><span>Import Perfomance Parts</span></h1>
                <button type="button" class="btn btn-default get">Get it now</button>
              </div>
              <div class="col-sm-6">
                <img src="images/home/parts3.jpg" class="girl img-responsive" alt="" />
              </div>
            </div>
            <div class="item">
              <div class="col-sm-6">
                <h1><span>Import Perfomance Parts</span></h1>
                <button type="button" class="btn btn-default get">Get it now</button>
              </div>
              <div class="col-sm-6">
                <img src="images/home/parts2.jpg" class="girl img-responsive" alt="" />
              </div>
            </div>

            <div class="item">
              <div class="col-sm-6">
                <h1><span>Import Perfomance Parts</span></h1>
                <button type="button" class="btn btn-default get">Get it now</button>
              </div>
              <div class="col-sm-6">
                <img src="images/home/parts1.jpg" class="girl img-responsive" alt="" />
              </div>
            </div>

          </div>

          <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
</section><!--/slider-->
<section>
  <div class="container">
    <div class="row">
      @include('sidebar')
      <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
          <h2 class="title text-center">Features Items</h2>
          @foreach($featured as $item)
          <form id="form{{$item->product_id}}" action="{{url('/payment/cart')}}" method="post">
            @csrf
             <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <input name="id" type="hidden" value="{{ $item->product_id }}"/>
                  <input name="image" type="hidden" value="{{ $item->product_image }}"/>
                  <input name="price" type="hidden" value="{{ $item->product_price }}"/>
                  <input name="name" type="hidden" value="{{ $item->product_name }}"/>
                  <img src="{{ $item->product_image }}" alt="Image" height="120" width="100"/>
                  <h2>Kshs.{{ $item->product_price }}</h2>
                  <p>{{ $item->product_name }}</p>
                  <a href="javascript:$('#form{{$item->product_id}}').submit();" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>Kshs.{{ $item->product_price }}</h2>
                    <p>{{ $item->product_name }}</p>
                    <a href="javascript:$('#form{{$item->product_id}}').submit();" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
          </form>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

<script type="text/javascript">
      /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
      (function(d, m){
        var kommunicateSettings = {"appId":"58b627fc28d24c8de0a37feacafbffa8","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
      })(document, window.kommunicate || {});
  </script>