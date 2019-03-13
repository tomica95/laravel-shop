$(document).ready(function(){


    $('#answers').on('click','.poll-answer',function(){

        let id_answer = $(this).val();

        console.log(id_answer);

        $.ajax({
            url:BASE_URL+"/insert-answer",
            method:"POST",
            data:{
                id:id_answer,
                _token:TOKEN
            },
            success:function(answers){


                let ispis = `<h5>Answers</h5>`;
                
                answers.forEach(function(answer){

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