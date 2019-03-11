 <!-- Single Product -->
 @foreach($watches as $watch)
 <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{$watch->src}}" alt="{{$watch->alt}}">
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">

                                <a href="single-product-details.html">
                                    <h6>{{$watch->name}}</h6>
                                </a>
                                <p class="product-price">{{$watch->price}}</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

@endforeach
