$(document).ready(function(){

    $('#insert').on('click','.insert',function(){

        let id_cat = $('#brand_id').val();

        let name = $('.name').val();

        let description = $('.description').val();

        let price = $('.price').val();

        $.ajax({
            url:BASE_URL+"/admin/insert-product",
            method:"POST",
            data:{
                _token:TOKEN,
                id:id_cat,
                name,
                description,
                price
            },
            success:function(response){

                printProducts(response);

            }
        })

        function printProducts(response){
           
            let ispis = `  <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Picture</td>
            </tr>`;

            response.forEach(function(watch){
                
                ispis+=printProduct(watch);
            })

            ispis+=`</table>`;

            $('#products').html(ispis);

        }

        function printProduct(watch){
            
            return `
    
            <tr>
                <td>${watch.id}</td>
                <td>${watch.name}</td>
                <td>${watch.description}</td>
                <td>${watch.price}</td>
                <td><img src="${watch.src}" width="100" heigth="140"></td>
                <td>
                
                <button class="delete-watch" value="${watch.id}">Delete</button>
               
                </td>
                <td>

                <button class="update-watch" value="${watch.id}">Update</button>
                
                </td>
            </tr>
                      `;
        }


        



        


    })



})