$(document).ready(function(){


    $('#users').on('click','.update-user',function(){

        let id_user = $(this).val();

        $.ajax({
            url:BASE_URL+"admin/show-user-update",
            method:"POST",
            data:{
                id:id_user,
                _token:TOKEN
            },
            success:function(user){

               
                
                let ispis=``;

                user.uloga.forEach(function(uloga){

                    ispis+=`<option value="${uloga.id}">${uloga.name}</option>`;

                })
                
                var csrfVar = $('meta[name="csrf-token"]').attr('content');

                let user_update = `
                    
                    <form method="POST" action="${BASE_URL}admin/update-user">
                        Role:<select name="role_id">
                            <option>Choose role</option>
                            
                            ${ispis}
                            
                        
                        </select>
                        
                        First name:<input type="text" name="firstName" value="${user.korisnik.first_name}"></br></br>

                        Last name:<input type="text" name="lastName" value="${user['korisnik']['last_name']}"></br></br>

                        Email:<input type="email" name="email" value="${user['korisnik']['email']}"></br></br>

                        Password:<input type="password" name="password" value="${user['korisnik']['password']}"></br></br>
                        <input name='_token' value="${csrfVar}" type='hidden'>
                        <input type="hidden" name="id" value="${user['korisnik']['id']}">

                        <input type="submit" value="Update">

                    </form>
                
                
                `;

                $('#update-user').html(user_update);

            }

            

        })
       

    })


})