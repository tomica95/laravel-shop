@extends('master')

@section('css')

@endsection

@section('content')

 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb_area bg-img" style="background-image: {{asset('url(img/bg-img/breadcumb.jpg')}};">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

            <!-- Categories and sort -->

            @include('partials.sort')

            <!-- end categories and sort -->

                        <div class="row">

                            <!-- Single Product -->
                            @foreach($products as $product)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{$product->src}}" alt="{{$product->alt}}">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="{{$product->src}}" alt="{{$product->alt}}">

                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <a href="{{url('/product/'.$product->id)}}">
                                            <h6>{{$product->description}}</h6>
                                        </a>
                                        <p class="product-price"></span>{{$product->price}}</p>

                                    </div>
                                </div>
                            </div>

                           @endforeach

                            

                            

                           

                            

                            

                            

                            

                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

@endsection
