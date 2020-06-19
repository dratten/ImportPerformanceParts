<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Category</h2>
                <div class="panel-group category-products" id="accordian">
                    <!--category-products-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a
                                    data-toggle="collapse"
                                    data-parent="#accordian"
                                    href="#sportswear"
                                >
                                    <span class="badge pull-right"
                                        ><i class="fa fa-plus"></i
                                    ></span>
                                    Air Induction
                                </a>
                            </h4>
                        </div>
                        <div id="sportswear" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li><a href="#">Air Boxes </a></li>
                                    <li><a href="#">Air Intake ducts</a></li>
                                    <li><a href="#">Intake Hoses </a></li>
                                    <li><a href="#">Turbo Inlet Hoses</a></li>
                                    <li><a href="#">Short Ram intakes </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a
                                    data-toggle="collapse"
                                    data-parent="#accordian"
                                    href="#mens"
                                >
                                    <span class="badge pull-right"
                                        ><i class="fa fa-plus"></i
                                    ></span>
                                    Cooling
                                </a>
                            </h4>
                        </div>
                        <div id="mens" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li><a href="#">Couplers and Hoses</a></li>
                                    <li><a href="#">Intercoolers</a></li>
                                    <li>
                                        <a href="#">Intercooler Hose Kits</a>
                                    </li>
                                    <li><a href="#">Radiators</a></li>
                                    <li><a href="#">Water Pumps</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a
                                    data-toggle="collapse"
                                    data-parent="#accordian"
                                    href="#"
                                >
                                    <span class="badge pull-right"
                                        ><i class="fa fa-plus"></i
                                    ></span>
                                    Exhausts
                                </a>
                            </h4>
                        </div>
                        <div id="womens" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li><a href="#">Axle Backs</a></li>
                                    <li><a href="#">Cross Pipes</a></li>
                                    <li>
                                        <a href="#">Downpipes and Y-Pipes</a>
                                    </li>
                                    <li><a href="#">Turbo Outlets</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                              @foreach($categories as $category)
                                <a href="#">{{ $category->name }}</a>
                              @endforeach
                            </h4>
                        </div>
                    </div>
                </div>
                <!--/category-products-->

                <div class="brands_products">
                    <h2>Manufacturer</h2>
                    <div class="brands-name">
                        <ul class="nav nav-pills nav-stacked">
                          @foreach($brands as $brand)
                            <li>
                                <a href="#">
                                  <span class="pull-right">({{ $brand->count }})</span
                                    >{{ $brand->name }}</a
                                >
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
