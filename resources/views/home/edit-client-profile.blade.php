@extends('layout.app')




@section('contents')

<div class="pagehead-bg   primary-bg" >
</div> 

<div class="container has-pagehead is-pagetitle">
<div class="section">
  <h5 class="pagetitle">Edit Profile</h5>
      </div>
</div>






<div class="spacer"></div>
<div class="spacer"></div>
<div class="container over z-depth-1">
<div class="section">

      
      
      @foreach( $clientDetails as $cl)
          
     
          
      
      <form action="{{route('update-client-profile', $cl->id)}}" method="POST">
        @csrf
    <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-account-outline prefix"></i>
          <input name="name" value="{{ $cl->name}}" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>
        </div>
    
        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-email-outline prefix"></i>
          <input name="email" value="{{ $cl->email }}"  type="email" >
          <label for="email">Email</label>
        </div>
        </div>
    
        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-cellphone prefix"></i>
          <input name="phone" value="{{ $cl->phone }}" type="text" >
          <label for="mobno">Mobile No.</label>
        </div>
        </div>



        <div class="row">
            <div class="input-field col s12">
              <i class="mdi mdi-user"></i>
              
              <select name="gender" class="validate" >
                  <option value="{{ $cl->gender}}">{{ $cl->gender}}</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
              </select>
            </div>
            </div>
    
        
        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-calendar prefix"></i>
          <input type="date" name="DOB" value="{{ $cl->DOB}}">
          <label for="">Birth Date</label>
        </div>
        </div>

        <div class="row" style="background-color: rgb(236, 150, 244)">
          <div class="input-field col s12">
            <i class="mdi mdi-calendar prefix"></i>
            <input type="date" name="Spouse_DOB" value="{{ $cl->SDOB}}">
            <label for="" style="color: rgb(236, 150, 244)">Spouse Birth Date</label>
          </div>
          </div>
    
        <div class="row">
            <div class="input-field col s12">
              <i class="mdi mdi-briefcase-outline prefix"></i>
              <input  name="address" value="{{ $cl->address}}" type="text" >
              <label for="prof">Address</label>
            </div>
            </div>
    
        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-briefcase-outline prefix"></i>
          <input  name="prof" value="{{ $cl->job }}" type="text" >
          <label for="prof">Profession</label>
        </div>
        </div>
        <h3>Body Measurements</h3>
        <div class="row">

            <div class="row">
                <div class="input-field col s5" style="margin:10px">
                <i class="mdi mdi-briefcase-outline prefix"></i>
                <input  name="m1" value="{{$cl->m1}}" type="text" >
                <label for="">Neck Size</label>
                </div>

                <div class="input-field col s5" style="margin:10px">
                    <i class="mdi mdi-briefcase-outline prefix"></i>
                    <input  name="m2" value="{{ $cl->m2 }}" type="text" >
                    <label for="">Tr. Length</label>
                  </div>
            </div>

            <div class="row">
            <div class="row">
                <div class="input-field col s5" style="margin:10px">
                <i class="mdi mdi-briefcase-outline prefix"></i>
                <input  name="m3" value="{{ $cl->m3 }}" type="text" >
                <label for="">Neck Size</label>
                </div>

                <div class="input-field col s5" style="margin:10px">
                    <i class="mdi mdi-briefcase-outline prefix"></i>
                    <input  name="m4" value="{{ $cl->m4 }}" type="text" >
                    <label for="">Tr. Length</label>
                  </div>
            </div>
            </div>
            <div class="row">
            <div class="row">
                <div class="input-field col s5" style="margin:10px">
                <i class="mdi mdi-briefcase-outline prefix"></i>
                <input  name="m5" value="{{ $cl->m5 }}" type="text" >
                <label for="">Shoulder Length</label>
                </div>

                <div class="input-field col s5" style="margin:10px">
                    <i class="mdi mdi-briefcase-outline prefix"></i>
                    <input  name="m6" value="{{ $cl->m6 }}" type="text" >
                    <label for="">Head Size</label>
                  </div>
            </div>
            </div>

             
         </div>
    
        <div class="row">
            <div class="">
                <button type="submit" class="waves-effect waves-light btn-large bg-primary ">Update  </button>
            </div>
        </div>

    </form>
    

    @endforeach
    

      </div>
    </div>





@endsection