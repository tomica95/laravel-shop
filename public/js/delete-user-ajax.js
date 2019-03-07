$(document).ready(function(){

    $('#users').on('click','.delete-user',function(){

        let id = $(this).val();

        console.log(id);

       console.log(BASE_URL);

    $.ajax({
        url:BASE_URL+"admin/delete-user",
        method:"DELETE",
        data:{
            _token:TOKEN,
            id
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