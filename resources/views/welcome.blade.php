@extends('master')
  
@section('content')

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    

            @include('partials.cart')
            
        
    <!-- ##### Right Side Cart End ##### -->

    @include('components.header')

  @include('partials.category')

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                       
                    @include('partials.popularProduct')
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        @include('partials.brand')
    </div>
    <!-- ##### Brands Area End ##### -->

@endsection


  