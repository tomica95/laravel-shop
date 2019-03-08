$(document).ready(function(){

    $('#insert-user').on('click','.insert-user',function(){


        let role_id = $('#role-id').val();

        let firstName = $('#first-name').val();

        let lastName = $('#last-name').val();

        let email = $('#email').val();

        let password = $('#password').val();

        let password_confirmation = $('#password_confirmation').val();


        $.ajax({
            url:BASE_URL+"admin/insert-user",
            method:"POST",
            data:{
                _token:TOKEN,
                role_id,
                firstName,
                lastName,
                email,
                password,
                password_confirmation
            },
            success:function(users){

                printUsers(users);
            }
        })

        function printUsers(users){

            let ispis = `
            <table border="1">
            <tr>
                <td>Id user</td>
                <td>Role name</td>
                <td>First name </td>
                <td>Last name </td>
                <td>Email</td>
                <td>Created At</td>
                <td>Updated At</td>
            </tr>`;

            users.forEach(function(user){

                ispis+=printUser(user);
            })

            $('#users').html(ispis);



        }

        function printUser(user){

            return `
            <tr>
            <td>${user.id}</td>
            <td>${user.role.name}</td>
            <td>${user.first_name}</td>
            <td>${user.last_name}</td>
            <td>${user.email}</td>
            <td>${user.created_at}</td>
            <td>${user.updated_at}</td>
            <td><button class="delete-user" value="${user.id}">Delete</button></td>
        </tr>

            
            `;

        }


    })




})