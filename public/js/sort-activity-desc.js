$(document).ready(function(){

    $('#aktiv').on('click','.sort-desc',function(){

        $.ajax({
            url:BASE_URL+"/admin/sort-desc",
            method:"get",
            success:function(activities){

               

                let ispis = `<table border="1">
                <tr>
                    <td>Description</td>
                    <td>created_at</td>
                    <td>updated_at</td>
                    <td>Client user</td>
                        <td>
                        
                        <button class="sort-desc">Sort by date desc</button>
             
                        </td>
                </tr>`;

                activities.forEach(function(activity){

                    ispis+=`
                    <tr>
                    <td>${activity.description}</td>
                    <td>${activity.created_at}</td>
                    <td>${activity.updated_at}</td>
                    <td>${activity.client}</td>
                </tr>
                    
                    `;

                    
                })

                ispis+=`</table>`;

                $('#aktiv').html(ispis);
            }
        })

    })
})