$(document).ready(function(){

    $('#insert-answer').on('click','.insert-answer-button',function(){

        let id_question = $('.whichQ').val();

        let answer = $('.poll-answer').val();

        $.ajax({
            url:BASE_URL+"admin/insert-answer",
            method:"POST",
            data:{
                id:id_question,
                answer,
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