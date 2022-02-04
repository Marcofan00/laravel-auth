@extends('layouts.main-layout')
@section('content')
    
    <div id="app" class="ms-container">
        
        @auth
            <div class="ms-container-auth">
               Ciao {{ Auth::user()->name }}
               <div>
                    <a href="{{ route('logout') }}">LOGOUT</a>
               </div>
            </div>
        @else
            <div class="ms-container-auth"> 
                Se vuoi continuare, registrati o fai il login
            </div>
        @endauth

        {{-- Register form --}}
        <h2>REGISTER</h2>
        <form action="{{ route('register') }}" method="POST">

            @method('POST')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" value="marco">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email" value="marco@gmail.com">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" value="password">
            <br>
            <label for="password-confirmation">Confirm password</label>
            <input type="password" name="password_confirmation" placeholder="password confirmation" value="password">
            <br>
            <input type="submit" value="REGISTRATI">
        </form>

        <br><hr class="bg-white"><br>

        {{-- Login form --}}
        <h2>LOGIN</h2>
        <form action="{{ route('login') }}" method="POST">

            @method('POST')
            @csrf

            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="LOGIN">
        </form>

    </div>

@endsection