@extends('layout.app')



@section('contents')

<x:notify-messages />
<div class="pagehead-bg   primary-bg" >
</div> 

<div class="container has-pagehead is-pagetitle">
<div class="section">
  <h5 class="pagetitle">Your search Results</h5>
      </div>
</div>






<div class="container full">
<div class="section">

    <div class="search-bar">
        <nav class="ui-forms">
          <div class="nav-wrapper">
            <br>
            <br>
          </div>
        </nav>
      </div>

  <div class="spacer"></div>


  <center>
      <a class="green lighten-1 waves-effect waves-light btn modal-trigger " href="#modal989466222">Add New Clients</a>

      <a class="danger lighten-1 waves-effect waves-light btn" href="{{ route('new-client-details', [auth()->user()->id, auth()->user()->name] )}}">Share New Form Info</a>
  </center>

<ul class="collection friends contacts  z-depth-1 " >


  @if ( $searchedClients->count())
    
 
    @foreach ( $searchedClients as  $client)
        
    

<li  style='margin-left: 10px;' class="collection-item avatar  ">

<a href="{{ route('client-details', $client->id)}}"> <i  class="mdi mdi-human-male-female"></i>
<span  class="title">{{ $client->name}}</span></a>
<p>{{ $client->job}} </p>

        
 <div class="secondary-content">
    
         <a href="{{ route('client-details', $client->id)}}" class="waves-effect waves-light btn-small btn-rounded blue-grey lighten-1">See Details</a>
        
   </div>
    
  </li>


  @endforeach
  <div class="row ">
    <div class="col s12 pad-0">                  
      <div class="card-panel red lighten-1">
       <center> <span class="white-text"><a href="{{ route('all-clients')}}">See All Your Clients</a></span></center>
      </div>
</div>
</div>


  @else

    
    <div class="row ">
      <div class="col s12 pad-0">                  
        <div class="card-panel red lighten-1">
          <span class="white-text">No result for searched name!. <a href="{{ route('all-clients')}}">See All Clients</a></span>
        </div>
</div>
</div>
  @endif

</ul>

</div>

@endsection




<div id="modal989466222" class="modal">
    <div class="modal-content ">
          <h4 class="bot-20 sec-tit">New Clients Profile</h4>       
      <p>
          <form action="{{ route('add-client')}}" method="POST">
            @csrf
        <div class="row">
            <div class="input-field col s12">
              <i class="mdi mdi-account-outline prefix"></i>
              <input name="name" value="{{ old('name')}}" type="text" required>
              <label for="first_name">Name</label>
            </div>
            </div>
        
            <div class="row">
            <div class="input-field col s12">
              <i class="mdi mdi-email-outline prefix"></i>
              <input name="email" value="{{old('email')}}"  type="email" >
              <label for="email">Email</label>
            </div>
            </div>
        
            <div class="row">
            <div class="input-field col s12">
              <i class="mdi mdi-cellphone prefix"></i>
              <input name="phone" value="{{ old('phone')}}" type="text" >
              <label for="mobno">Mobile No.</label>
            </div>
            </div>



            <div class="row">
                <div class="input-field col s12">
                  <i class="mdi mdi-user"></i>
                  
                  <select name="gender"  >
                      <option>--Gender--</option>
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                  </select>
                </div>
                </div>
        
            
            <div class="row">
            <div class="input-field col s12">
              <i class="mdi mdi-calendar prefix"></i>
              <input type="date" name="DOB" value="{{ old('DOB')}}">
              <label for="datepicker-input2">Birth Date</label>
            </div>
            </div>

            <div class="row" style="background-color: rgb(236, 150, 244) ">
              <div class="input-field col s12">
                <i class="mdi mdi-calendar prefix"></i>
                <input type="date" name="Spouse_DOB" value="{{ old('Spouse_DOB')}}">
                <label for="datepicker-input2" style="color: rgb(236, 150, 244)">Spouse's Birth Date</label>
              </div>
              </div>
        
        
            <div class="row">
                <div class="input-field col s12">
                  <i class="mdi mdi-briefcase-outline prefix"></i>
                  <input  name="address" value="{{ old('address')}}" type="text" >
                  <label for="address">Address</label>
                </div>
                </div>
        
            <div class="row">
            <div class="input-field col s12">
              <i class="mdi mdi-briefcase-outline prefix"></i>
              <input  name="prof" value="{{ old('prof')}}" type="text" >
              <label for="prof">Profession</label>
            </div>
            </div>
            <h3>Body Measurements</h3>
            <div class="row">

                <div class="row">
                    <div class="input-field col s5" style="margin:10px">
                    <i class="mdi mdi-briefcase-outline prefix"></i>
                    <input  name="m1" value="{{ old('m1')}}" type="text" >
                    <label for="m1">Neck Size</label>
                    </div>

                    <div class="input-field col s5" style="margin:10px">
                        <i class="mdi mdi-briefcase-outline prefix"></i>
                        <input  name="m2" value="{{ old('m2')}}" type="text" class="validate">
                        <label for="m2">Tr. Length</label>
                      </div>
                </div>

                <div class="row">
                <div class="row">
                    <div class="input-field col s5" style="margin:10px">
                    <i class="mdi mdi-briefcase-outline prefix"></i>
                    <input  name="m3" value="{{ old('m3')}}" type="text" class="validate">
                    <label for="m3">Neck Size</label>
                    </div>

                    <div class="input-field col s5" style="margin:10px">
                        <i class="mdi mdi-briefcase-outline prefix"></i>
                        <input  name="m4" value="{{ old('m4')}}" type="text" class="validate">
                        <label for="m4">Tr. Length</label>
                      </div>
                </div>
                </div>
                <div class="row">
                <div class="row">
                    <div class="input-field col s5" style="margin:10px">
                    <i class="mdi mdi-briefcase-outline prefix"></i>
                    <input  name="m5" value="{{ old('m5')}}" type="text" class="validate">
                    <label for="m5">Shoulder Length</label>
                    </div>

                    <div class="input-field col s5" style="margin:10px">
                        <i class="mdi mdi-briefcase-outline prefix"></i>
                        <input  name="m6" value="{{ old('m6')}}" type="text" class="validate">
                        <label for="m6">Head Size</label>
                      </div>
                </div>
                </div>

                 
             </div>
        
            <div class="row">
                <div class="">
                    <button type="submit" class="waves-effect waves-light btn-large bg-primary ">Save </button>
                </div>
            </div>

        </form>
        
      </p>
    </div>
     
    
    
  </div>

