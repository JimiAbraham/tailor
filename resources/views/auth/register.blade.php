
@extends('layout.app')



@section('contents')

 
<div class="login-bg access-login"></div>


<div class="container login-area">
  <div class="section">


    <h3 class="bot-20 center white-text">Register</h3>

    
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        <h4 style="color:red">{{ session('success') }}</h4>
    </div>
@endif
<form action="{{ route('register-action')}}" method="POST">
  @csrf
    <div class="row">
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="input-field col s10 offset-s1">
        <input type="text" name="name" value="{{ old('name')}}" class="validate">
        <label for="name311">Company Name</label>
        @if ($errors->has('name'))
          <p style="color:red; text-align:center;">{{ $errors->first('name') }}</p>
      @endif
      </div>

    </div>



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


    <div class="row">

      <div class="input-field col s10 offset-s1">
        <input  name="password_confirmation" type="password" class="validate">
        <label for="Confirmpass311">Confirm Password</label>
      </div>

    </div>

        
<div class="row center">
  <button type="submit" class="waves-effect waves-light btn-large bg-primary">Register</button>
</div>
</form>

<div class="row center">
  <div class="spacer"></div>
  <div class="links">

    <a href="ui-pages-forgotpassword.html" >Forgot Password</a><span class="sep">|</span><a href="{{ route('login')}}" >Login</a>  </div>

    <div class="spacer"></div>
  

</div>



    


  </div>
</div>





{{-- codeCheck --}}
@endsection
