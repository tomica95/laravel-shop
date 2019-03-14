$(document).ready(function(){

    $('#answers').on('click','.delete-answer',function(){

        let id_answer = $(this).val();

        $.ajax({
            url:BASE_URL+"admin/delete-answer",
            method:"delete",
            data:{
                id:id_answer,
                _token:TOKEN
            },
            success:function(response){

                let answers = `

                <table border="1">
                <h1>Insert answer</h1>
                <tr>
                    <td>
                        Id Poll
                    </td>
                    <td>
                        Poll question
                    </td>
                    <td>    
                        Id answer
                    </td>
                    <td>
                        Poll Answers
                    </td>
                </tr> 
                
                `;

                response.forEach(function(answer){
                    console.log(answer);
                    answers+=`
                    <tr>
                        <td>${answer.question.id}</td>
                        <td>${answer.question.question}</td>
                        <td>${answer.id}</td>
                        <td>${answer.answer}</td>
                        <td><button class="delete-answer" value="${answer.id}">Delete</button></td>
                        <td><button class="update-answer" value="${answer.id}">Update</button></td>
                        
                        
                        
                        
                    </tr>
                    `;
                })

                answers+=`</table>`;

                $('#answers').html(answers);
                

            }
        })

    })

})