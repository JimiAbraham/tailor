@extends('layout.app')



@section('contents')

 
<div class="login-bg access-login"></div>


<div class="container login-area">
  <div class="section">


    <h3 class="bot-20 center white-text">Login</h3>


    <form action="{{ route('login-action')}}" method="POST">
@csrf
@if (session('success'))
    <div class="alert alert-success" role="alert">
        <h4 style="color:red">{{ session('success') }}</h4>
    </div>
@endif

    

<div class="row">
  <div class="input-field col s10 offset-s1">
    <input id="email311" name="email" value="{{ old('email')}}" type="email" class="validate">
    <label for="email311">Email</label>

    @if ($errors->has('email'))
      <p style="color:red; text-align:center;">{{ $errors->first('email') }}</p>
  @endif
  </div>
</div>


    <div class="row">

      <div class="input-field col s10 offset-s1">
        <input id="pass311" name="password" type="password" class="validate">
        <label for="pass311">Password</label>

        @if ($errors->has('password'))
          <p style="color:red; text-align:center;">{{ $errors->first('password') }}</p>
      @endif
      </div>

    </div>

     
<div class="row center">
  <button type="submit" class="waves-effect waves-light btn-large bg-primary">Login</button>
  <div class="spacer"></div>
    

    <div class="spacer"></div>
   <center> <div>
     <a href="{{ url('auth/google') }}">
          <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="">
      </a>
   
  </div>
  </center>

  <div class="links">

    <a href="" >Forgot Password</a><span class="sep">|</span><a href="{{route('register')}}" >Register</a>  </div>

</div>



    


  </div>
</div>





{{-- codeCheck --}}
@endsection