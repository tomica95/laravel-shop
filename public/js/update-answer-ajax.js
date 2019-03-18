$(document).ready(function(){

    $('#answers').on('click','.update-answer',function(){

        let id = $(this).val();

        $.ajax({
            url:BASE_URL+"admin/answer-for-update",
            method:"POST",
            data:{
                id,
                _token:TOKEN
            },
            success:function(answer){


                var csrfVar = $('meta[name="csrf-token"]').attr('content');
                

                let answerForUpdate = `

                    <form method="POST" action="${BASE_URL}admin/update-answer">

                        Update answer: <input type="text" name="update-answer" value="${answer.answer}"></br></br>

                        <input type="hidden" name="id" value="${answer['id']}">

                        <input name='_token' value="${csrfVar}" type='hidden'>

                        <input type="submit" value="Update">
                    
                    </form>
                
                `;

                $('#update-answer').html(answerForUpdate);
            }

        })

    })

})