$(document).ready(function(){
    
    $('#polls-table').on('click','.update-poll',function(){
        
        
            
          
        let id_poll = $(this).val();

        $.ajax({
            url:BASE_URL+"admin/poll-for-update",
            method:"POST",
            data:{
                id:id_poll,
                _token:TOKEN

            },
            success:function(poll){

                var csrfVar = $('meta[name="csrf-token"]').attr('content');
                

                let pollFormUpdate = `

                    <form method="POST" action="${BASE_URL}admin/update-poll">

                        <input type="text" name="update-question" value="${poll.question}"></br></br>

                        Active:<select name="update-active">
                            <option value="choose">Choose if it is active...</option>
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>

                        <input type="hidden" name="id" value="${poll['id']}">

                        <input name='_token' value="${csrfVar}" type='hidden'>

                        <input type="submit" value="Update">
                    
                    </form>
                
                `;

                $('#poll-update').html(pollFormUpdate);
                

            }

    })

    })


})