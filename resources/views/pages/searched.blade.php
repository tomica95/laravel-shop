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

            

            <!-- end categories and sort -->

                        <div class="row">

                            <!-- Single Product -->
                            @foreach($watchees as $searchwatch)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{$searchwatch->src}}" alt="{{$searchwatch->alt}}">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="{{$searchwatch->src}}" alt="{{$searchwatch->alt}}">

                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <a href="{{url('/product/'.$searchwatch->id)}}">
                                            <h6>{{$searchwatch->description}}</h6>
                                        </a>
                                        <p class="product-price"></span>{{$searchwatch->price}}</p>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                            {{$watchees->links()}}

                           

                            

                            

                           

                            

                            

                            

                            

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

@endsection
