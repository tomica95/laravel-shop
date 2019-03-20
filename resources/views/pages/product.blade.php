@extends('master')

@section('css')

<link rel="stylesheet" href="{{asset('css/product.css')}}">

@show

@section('content')

    @include('partials.cart')

 <!-- ##### Single Product Details Area Start ##### -->
 <section class="single_product_details_area d-flex align-items-center">


 <!-- Single Product Thumb -->
 <div class="single_product_thumb slika-proizvod clearfix">
 <img src="{{asset('img/'.$product->src)}}" alt="{{$product->alt}}" width="350" height="250">
        </div>

<!-- Single Product Description -->
<div class="single_product_desc clearfix">

    <a href="cart.html">
        <h2>{{$product->name}}</h2>
    </a>
    <p class="product-price">${{$product->price}}</p>
    <p class="product-desc">{{$product->description}}</p>

    <!-- Form -->
    <form class="cart-form clearfix" method="post">
        
        <!-- Cart & Favourite Box -->
        <div class="cart-fav-box d-flex align-items-center">
            <!-- Cart -->
            @if(request()->session()->has('user') && !$product->user_cart->contains(request()->session()->get('user')->id))
            <div class="add-to-cart-btn">
                                        <a href="{{url('addtocart/watchid/'.$product->id)}}" class="btn essence-btn">Add to Cart</a>
                                    </div>
            @endif
        </div>
    </form>
</div>
</section>
<!-- ##### Single Product Details Area End ##### -->

@endsection
