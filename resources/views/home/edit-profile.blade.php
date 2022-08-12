@extends('layout.app')




@section('contents')

<div class="pagehead-bg   primary-bg" >
</div> 

<div class="container has-pagehead is-pagetitle">
<div class="section">
  <h5 class="pagetitle">Edit Your Profile</h5>
      </div>
</div>







<div class="spacer"></div>
<div class="spacer"></div>
<div class="container over z-depth-1">
<div class="section">

      <div class="editprof-img">
        <div class="img-wrap circle">

          @if ( auth()->user()->logo == NULL)
          <img src="{{ asset('assets/images/edit-profile.jpg')}}" alt="image">
          <i class="mdi mdi-pencil prefix"></i>
          @else
          <img src="{{ 'logo/'.auth()->user()->logo }}" alt="image">
       
        
          @endif
      
        
        </div>
      </div>
     
      <form action="{{route('update-my-profile', auth()->user()->id)}}" method="POST"  enctype="multipart/form-data">
        @csrf
     
        @if($errors->any())
        <div class="alert alert-danger" style="background: rgb(93, 4, 4); padding: 5px;"> 
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li style="color:white">{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
  
  </div>

    <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-account-outline prefix"></i>
          <input name="name" value="{{ auth()->user()->name}}" type="text" class="validate">
          <label for="first_name">Name </label>
        </div>
        </div>
    
        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-email-outline prefix"></i>
          <input name="email" value="{{ auth()->user()->email }}"  type="email" class="validate">
          <label for="email">Email</label>
        </div>
        </div>
    
        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-cellphone prefix"></i>
          <input name="phone" value="{{ auth()->user()->phone }}" type="text" class="validate">
          <label for="mobno">Mobile No.</label>
        </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-lock-outline prefix"></i>
            <input  type="file" name="banner" class="validate">
            <label for="password">Banner</label>
          </div>
          </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-lock-outline prefix"></i>
            <input  type="file" name="logo" class="validate">
            <label for="password">Logo</label>
          </div>
          </div>

         
      
{{-- 
    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-lock-outline prefix"></i>
      <input  id="password" type="password" class="validate">
      <label for="password">Password</label>
    </div>
    </div>


    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-lock-outline prefix"></i>
      <input  id="cpassword" type="password" class="validate">
      <label for="cpassword">Confirm Password</label>
    </div>
    </div>
 --}}


 <div class="row">
  <div class="">
      <button type="submit" class="waves-effect waves-light btn-large bg-primary ">Update  </button>
  </div>
</div>

</form>

      </div>
    </div>





@endsection