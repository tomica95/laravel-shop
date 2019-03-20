  <!-- ##### Shop Grid Area Start ##### -->
  <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filter by:</h6>

                            <!--  Categories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#">Brands</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            @foreach($brands as $brand)
                                            <li><a href="" class="sort-brand" id="{{$brand->id}}">{{$brand->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    
                                    <!-- Single Item -->
                                    
                                </ul>
                            </div>
                        </div>

                      <!-- filter brands -->

                        @include('partials.filterBrands')


                        <!-- end filter brands -->
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                   
                                    <!-- Sorting -->
                                    
                                </div>
                            </div>
                        </div>

                       