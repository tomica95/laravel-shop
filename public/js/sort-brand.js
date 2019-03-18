$(document).ready(function(){

    $('#clothing').on('click','.sort-brand',function(event){

        event.preventDefault();

        let id_brand = $(this).attr('id');

        $.ajax({
            url:BASE_URL+"/sort-by-brand",
            method:"POST",
            data:{
                id:id_brand,
                _token:TOKEN
            },
            success:function(products){

                let ispis=``;

                products.forEach(function(product){

                    ispis+= `
                    <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="${BASE_URL}img/${
                                            product.src}" alt="${product.alt}">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="${BASE_URL}img/${
                                            product.src}" alt="${product.alt}">

                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <a href="${BASE_URL}/product/${product.id}">
                                            <h6>${product.description}</h6>
                                        </a>
                                        <p class="product-price"></span>${product.price}</p>

                                    </div>
                                </div>
                            </div>
                    `;

                })

                $('#ispis-ajax').html(ispis);

            }

        })

        
        
       



    })

    

    
})