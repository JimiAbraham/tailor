@extends('layout.app')



@section('contents')

<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Contact Options</h5>
            </div>
    </div>
    
  
  
  
  
    
  
  
  
  <div class="container over z-depth-1">
    <div class="section pt0 pb0">
  
      @foreach ( $reachClient as $rc )
        
      @endforeach
  
  
      <div class="row mb0">
                  <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Reach out to {{ $rc->name }}</h5>    
  <!--   Icon Section   -->
  <div class="row">
      <div class="col s12 m12 l4">
      <div class="icon-block block-small z-depth-1">
        <div class="icon  primary-text"><i class="mdi mdi-phone"></i></div>
        <div class="title ">Call</div>
        <div class="tagline ">
          <a href="tel:{{ $rc->phone}}">
          {{ $rc->phone ?  $rc->phone : "Phone Number Is Empty"}}
          </a>
        </div>
      </div>
    </div>
  
      <div class="col s12 m12 l4">
      <div class="icon-block block-small z-depth-1">
        <div class="icon  primary-text"><i class="mdi mdi-map-marker"></i></div>
        <div class="title ">Home Address</div>
        <div class="tagline ">{{ $rc->address ? $rc->address : "Address Is Empty" }}</div>
      </div>
    </div>
  
      <div class="col s12 m12 l4">
      <div class="icon-block block-small z-depth-1">
        <div class="icon  primary-text"><i class="mdi mdi-email"></i></div>
        <div class="title ">Email</div>
        <div class="tagline ">
          <a href="mailto:{{ $rc->email}}">
            {{ $rc->email ? $rc->email : "Email Is Empty" }}
          </a>
          </div>

         
      </div>
    </div>
  
      
  
    </div>
  
      </div>
      </div>
      
      
  <!--   Icon Section   -->

  
  

  
  </div>

@endsection