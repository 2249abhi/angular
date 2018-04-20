@extends('layouts.login')
@section('title', 'Login Form')
@section('content')
<form action="#" method="post">
    <input type="text" placeholder="Username" class="input-field form-control user" />
    <input type="password" placeholder="Password" class="input-field form-control password" />
    <button id="submit-form" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">login</span></button>
</form>
<div class="login-links">
    <a href="password_forgot.html">Forgot password?</a>
    <br>
    <a href="signup.html">Don't have an account? <strong>Sign Up</strong></a>
</div>
@endsection