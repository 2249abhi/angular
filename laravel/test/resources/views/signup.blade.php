@section('layouts.login')
@section('title','Register')

@section('content')
<form action="#" method="post">
    <input type="text" placeholder="Name" class="input-field" required/>
    <input type="email" placeholder="E-mail" class="input-field" required/>
    <input type="password" placeholder="Password" class="input-field" required/>
    <input type="password" placeholder="Confirm Password" class="input-field" required/>
    <button id="submit-form" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">Sign Up</span></button>
</form>
<div class="login-links">
    <a href="password_forgot.html">Forgot password?</a>
    <br>
    <a href="login.html">Already have an account? <strong>Sign In</strong></a>
</div>
@endsection
                    