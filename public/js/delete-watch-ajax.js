$(document).ready(function(){

    $('#products').on('click','.delete-watch',function(){

        
        let id = $(this).val();

       
        if(confirm('Are you sure ? ')){
      

        $.ajax({
            
            url:BASE_URL+"admin/delete-watch",
            method:"DELETE",
            data:{
                _token:TOKEN,
                id:id
            },
            success:function(watches){

                printWatches(watches);
               
                
            }
            
        })

        function printWatches(watches){

            let ispis = `  <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Picture</td>
                <td>Alt</td>
            </tr>`;

            watches.forEach(function(watch){
                
                ispis+=onewatch(watch);
            })

            ispis+=`</table>`;

            $('#products').html(ispis);

        }

        function onewatch(watch){

            return `
    
    <tr>
        <td>${watch.id}</td>
        <td>${watch.name}</td>
        <td>${watch.description}</td>
        <td>${watch.price}</td>
        <td><img src="${BASE_URL}img/${watch.src}" width="100" heigth="140"></td>
        <td>${watch.alt}</td>
        <td>
        
        <button class="delete-watch" value="${watch.id}">Delete</button>

        </td>
        <td>
            <button class="update-watch" value="${watch.id}">Update</button>
        </td>
       
        
    </tr>
  



            
            `;

        }

    }
    })


})