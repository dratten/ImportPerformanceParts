<div class="col-sm-3">
  <div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian">
      <!--category-products-->
      @foreach($categories as $category)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a href="/{{ $category->category_name }}">
              {{ $category->category_name }}
            </a>
          </h4>
        </div>
      </div>
      @endforeach
    </div>

    <div class="brands_products">
      <h2>Manufacturer</h2>
      <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
          @foreach($cars as $car)
            <li>
              <a href="#">
                <span class="pull-right">({{ count($cars) }})</span
                >{{ $car->car_brand }} {{$car->car_model}} {{$car->car_code}}</a
              >
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
