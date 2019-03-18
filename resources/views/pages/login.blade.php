@extends('master')

@section('content')

<h2>Login</h2>
<form method="POST" action="{{url('login')}}">
    @csrf 

    Email:<input type="text" name="email"></br></br>
    Password:<input type="password" name="password"></br></br>

    <input type="submit" name="login" value="Login"></br>
</form></br></br></br>
<h2>Registracija</h2>
<form method="POST" action="{{url('register')}}">
@csrf
    Name:<input type="text" name="firstName"></br></br>
    Last name:<input type="text" name="lastName"></br></br>
    Email:<input type="text" name="email"></br></br>
    Password:<input type="password" name="password"></br></br>

    Re-enter password:<input type="password" name="password_confirmation"></br></br>

    <input type="submit" name="register" value="Register">

</form>

@if($errors->any())

    <ul>
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>

        @endforeach
    </ul>

@endif

@if(!empty(session('Message')))


{{session('Message')}}

@endif


@endsection