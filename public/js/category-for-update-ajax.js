$(document).ready(function(){

        $('#categories').on('click','.update-category',function(){
            let id_kategorije = $(this).val();

           $.ajax({
                url:BASE_URL+"admin/show-category-update",
                method:"POST",
                data:{
                    id:id_kategorije,
                    _token:TOKEN
                },
                success:function(category){

                    var csrfVar = $('meta[name="csrf-token"]').attr('content');

                    let update_category = `

                    <h1>Update categories</h1>
                    <form method="POST" action="${BASE_URL}/admin/update-category" enctype="multipart/form-data">
                    Category name:<input type="text" name="name" value="${category.name}"></br></br>

                    Picture src:<input type="file" name="src" value="${category.src}"></br></br>

                    Picture alt:<input type="text" name="alt" value="${category.alt}"></br></br>

                    <input type="hidden" name="id" value="${category.id}">

                    <input name='_token' value="${csrfVar}" type='hidden'>



                    
                    <input type="submit" name="update" value="Update">

                    </form>
                    
                    `;

                    $('#update-category').html(update_category);
                }
           })
        })


})