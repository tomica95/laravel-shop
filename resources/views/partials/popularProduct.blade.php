 <!-- Single Product -->
 @foreach($watches as $watch)
 <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('img/'.$watch->src)}}" alt="{{$watch->alt}}">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">

                                <a href="{{url('/product/'.$watch->id)}}">
                                    <h6>{{$watch->name}}</h6>
                                </a>
                                <p class="product-price">{{$watch->price}}</p>

                                <!-- Hover Content -->
                                @if(request()->session()->has('user') && !$watch->user_cart->contains(request()->session()->get('user')->id))
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="{{url('addtocart/watchid/'.$watch->id)}}" class="btn essence-btn">Add to Cart</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

@endforeach
