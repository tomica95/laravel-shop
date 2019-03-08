$(document).ready(function(){

    $('#insert-category').on('click','.insert-category',function(){

       let catName = $('#categoryName').val();

       let pictureAlt = $('#categoryPictureAlt').val();


        $.ajax({
            url:BASE_URL+"admin/insert-category",
            method:"POST",
            data:{
                _token:TOKEN,
                catName,
                pictureAlt
            },
            success:function(categories){

                printCategories(categories);
            }
        })

        function printCategories(categories){

            let ispis = `<table border="1">

            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Picture</td>
                <td>Picture - alt</td>
            </tr>
            
        
        `;

        categories.forEach(function(category){

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
            </tr>
            `;
        }


    })



})