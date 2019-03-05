@extends('master')

@section('css')

@endsection

@section('content')

 <!-- ##### Single Product Details Area Start ##### -->
 <section class="single_product_details_area d-flex align-items-center">


 <!-- Single Product Thumb -->
 <div class="single_product_thumb clearfix">
 <img src="{{$product->src}}" alt="" width="578" height="516">
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
            <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
            
        </div>
    </form>
</div>
</section>
<!-- ##### Single Product Details Area End ##### -->

@endsection
