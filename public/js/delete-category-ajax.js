$(document).ready(function(){

    $('#categories').on('click','.delete-category',function(){

        let id = $(this).val();

        $.ajax({
            url:BASE_URL+"/admin/delete-category",
            method:"DELETE",
            data:{
                _token:TOKEN,
                 id
            },
            success:function(response){

                printCategories(response);

            }
        })

        function printCategories(response){

            let ispis = `<table border="1">

            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Picture</td>
                <td>Picture - alt</td>
            </tr>
            
        
        `;

            response.forEach(function(category){

                ispis+=printCategory(category);
            })

            ispis+=`</table>`;

            $('#categories').html(ispis);
        }

        function printCategory(category){
            
            return `
            <tr>
            <td>${category.id}</td>
            <td>${category.name}</td>
            <td><img src="${category.src}" width="150" height="120"></td>
            <td>${category.alt}</td>
            <td><button value="${category.id}" class="delete-category">Delete</button></td>
            <td><button value="${category.id}" class="update-category">Update</button></td>
            </tr>
            `;
        }


    })


})