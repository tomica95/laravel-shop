$(document).ready(function(){


    $('#products').on('click','.update-watch',function(){


        let watch_id = $(this).val();

        $.ajax({
            url:BASE_URL+"/admin/show-product-update",
            method:"POST",
            data:{
                id:watch_id,
                _token:TOKEN
            },
            success:function(watch){

                var csrfVar = $('meta[name="csrf-token"]').attr('content');

               
                
                let forma_update = `
                    <h1>Products update</h1>
                    <form method="POST" action="${BASE_URL}admin/update-product" enctype="multipart/form-data">
                        Watch name:<input type="text" value="${watch.name}" name="name"></br></br>
                        Watch description:<input type="text" value="${watch.description}" name="description"></br></br>
                        Watch price:<input type="text" value="${watch.price}" name="price"></br></br>
                        Input picture:<input type="file" value="putanja.jpg" name="src"></br></br>
                        Picture alt:<input type="text" value="${watch.alt}" name="alt"></br></br>
                        <input name='_token' value="${csrfVar}" type='hidden'>
                        <input name="id" value="${watch.id}" type="hidden">

                        <input type="submit" value="Update">

                    </form>
                
                `;

                $('#products-update').html(forma_update);
                
            }
        })

        

    })



})