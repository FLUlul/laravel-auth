@extends('layouts.main-layout')
@section('content')
    @auth
    <h1>Welcome {{ Auth::user() -> name }}</h1>
    <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>
    @else
    <h1>Login or register to see the infos.</h1>
    @endauth

    <h3>Login:</h3>
    <form method="POST" action="{{route('login')}}">

        @method("POST")
        @csrf

        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="email">

        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password">

        <button type="submit">Login</button>

    </form>
    <br><hr><hr><br>
    
    <h3>Register:</h3>
    <form method="POST" action="{{route('register')}}">

        @method("POST")
        @csrf

        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="name">

        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="email">

        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="password">

        <label for="password-confirm">Password Confirm: </label>
        <input type="password" name="password_confirmation" placeholder="password-confirm">

        <button type="submit">Register</button>

    </form>
@endsection