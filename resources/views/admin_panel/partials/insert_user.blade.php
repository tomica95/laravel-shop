<select id="role-id">
    <option>Choose role...</option>
    @foreach($roles as $role)

        <option value="{{$role->id}}">{{$role->name}}</option>

    @endforeach
    
   
</select>
</br></br></br>
First name:<input type="text" id="first-name"></br></br>
Last name:<input type="text" id="last-name"></br></br>
Email:<input type="text" id="email"></br></br>
Password:<input type="password" id="password"></br></br>
Re-Password:<input type="password" id="password_confirmation" ></br></br>

<input type="button" class="insert-user" value="Insert user">

