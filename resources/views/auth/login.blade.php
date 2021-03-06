@extends('layouts.authentication')

@section('title')
    Login
@endsection

@section('content')

<div class="form-content">
    <h1 class="text-capitalize">Sign In</h1>
    <p class="">Log in to your account to continue.</p>
    
    <form method="POST" action="{{ route('login') }}" class="text-left">
        @csrf

        <div class="form">
            @include('auth.login-form')
            <p class="signup-link">Don't have an account ? <a href="{{url('register')}}">Register</span></a></p>
        </div>
    </form>

</div>
@endsection
