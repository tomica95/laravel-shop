<table border="1">
        <tr>
            <td>Id user</td>
            <td>Role name</td>
            <td>First name </td>
            <td>Last name </td>
            <td>Email</td>
            <td>Created At</td>
            <td>Updated At</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td><button class="delete-user" value="{{$user->id}}">Delete</button></td>
        </tr>
        @endforeach


    </table>



