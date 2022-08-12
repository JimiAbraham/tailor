@extends('layout.app')


@section('contents')

<div class="pagehead-bg   primary-bg" >
</div> 

<div class="container has-pagehead is-pagetitle">
<div class="section">
  <h5 class="pagetitle">Add A New Client</h5>
      </div>
</div>






<div class="spacer"></div>
<div class="spacer"></div>
<div class="container over z-depth-1">
<div class="section">

      <div class="editprof-img">
        <div class="img-wrap circle">
        <img src="assets/images/edit-profile.jpg" alt="image">
        <i class="mdi mdi-pencil prefix"></i>
        </div>
      </div>

     

    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-account-outline prefix"></i>
      <input id="first_name" type="text" class="validate">
      <label for="first_name">Name</label>
    </div>
    </div>

    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-email-outline prefix"></i>
      <input id="email" type="email" class="validate">
      <label for="email">Email</label>
    </div>
    </div>

    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-cellphone prefix"></i>
      <input id="mobno" type="text" class="validate">
      <label for="mobno">Mobile No.</label>
    </div>
    </div>

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

    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-calendar prefix"></i>
      <input type="text" id="datepicker-input2" class="datepicker datepicker2">
      <label for="datepicker-input2">Birth Date</label>
    </div>
    </div>

    <div class="row" style="background-color: rgb(236, 150, 244) ">
      <div class="input-field col s12">
        <i class="mdi mdi-calendar prefix"></i>
        <input type="text" id="datepicker-input2" class="datepicker datepicker2">
        <label for="datepicker-input2">Spouse's Birth Date</label>
      </div>
      </div>
  


    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-briefcase-outline prefix"></i>
      <input  id="prof" type="text" class="validate">
      <label for="prof">Profession</label>
    </div>
    </div>

    <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-circle-edit-outline prefix"></i>
      <textarea id="textarea-prefix" class="materialize-textarea"></textarea>
      <label for="textarea-prefix">Brief Description</label>
    </div>
    </div>


    <div class="row">
        <div class="">
            <a class="waves-effect waves-light btn-large bg-primary ">Save Profile</a>
        </div>
    </div>

      </div>
    </div>





@endsection