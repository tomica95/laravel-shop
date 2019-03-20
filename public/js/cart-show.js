$(document).ready(function(){

    $('#essenceCartBtn').on('click',function(e){

       e.preventDefault();

       console.log("radi");
        
            $.ajax({
            url:BASE_URL+"/show-cart",
            method:"GET",
            success:function(data){

                
                
                let ispis = ``;

                data.products.forEach(function(product){

                    ispis+=`
                    <div class="single-cart-item">
                    <a href="${BASE_URL}/product/${product.id}" class="product-image">
                        <img src="${BASE_URL}img/${product.src}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">${product.name}</span>
                            <h6>${product.description}</h6>
                            
                            <p class="price">$${product.price}</p>
                        </div>
                    </a>
                </div>
                    
                    
                    `;


                })

                    $('#productsplace').append(ispis);

                let total = `

                 <li><span>Subtotal price:</span> <span>$${data.price}</span></li>


                `;
            
                $('.summary-table').append(total);

                let number = `
                <li><span>Number of products:</span> <span>${data.number}</span></li>

                `;

                $('.summary-table').append(number);

                

            }
        })


    })


})