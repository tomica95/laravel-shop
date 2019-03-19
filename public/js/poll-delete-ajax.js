$(document).ready(function(){

    $('#polls-table').on('click','.delete-poll',function(){

        let id_poll= $(this).val();
        if(confirm('Are you sure ? ')){
        $.ajax({

            url:BASE_URL+"admin/delete-poll",
            method:"DELETE",
            data:{
                id:id_poll,
                _token:TOKEN

            },
            success:function(polls){

                let ispis = `<h1>Polls</h1>
                <table border="1">
                    <tr>
                        <td>Id Poll</td>
                        <td>Poll question</td>
                        <td>Is it active?</td>
                    </tr>`;

                var csrfVar = $('meta[name="csrf-token"]').attr('content');

                polls.forEach(function(poll){

                    ispis+=`
                    <tr>
                    <td>${poll.id}</td>
                    <td>${poll.question}</td>
                    <td>${poll.active}</td>
        
                    <input name='_token' value="${csrfVar}" type='hidden'>
                    
                    <td><button type="button" value="${poll.id}" name="delete-poll" class="delete-poll">Delete</button></td>
        
                    <td><button type="button" value="${poll.id}"
                    name="update-poll" class="update-poll">Update</button></td>
        
        
                    </tr>
                    
                        
                    `;
                    


                })
                ispis+=`</table>`;

                $('#polls-table').html(ispis);


            }
        })
    }
        
    })




})