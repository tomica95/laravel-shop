$(document).ready(function(){


    $('#answers').on('click','.poll-answer',function(){

        let id_answer = $(this).val();

        $.ajax({
            url:BASE_URL+"/insert-answer",
            method:"POST",
            data:{
                id:id_answer,
                _token:TOKEN
            },
            success:function(answers){

                console.log(answers);

                let ispis = `<h5>Answers</h5>`;

                ispis+=`<strong>${answers.message}</strong></br>`;
                
                answers.answers.forEach(function(answer){

                    ispis+=printanswer(answer);
                })

                $('#poll-result').html(ispis);
            }
        })

        function printanswer(answer){

            return `
                
                ${answer.answer} : ${answer.sum} votes</br>
            
            
            `;

        }

        


    })



})