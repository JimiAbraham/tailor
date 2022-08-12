@extends('layout.app')



@section('contents')
<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Gallery of clients pictures</h5>
            </div>
    </div>
    
  
  
  
  
    
    <div class="container">
      <div class="section">
  
      
  
        <center>
          <a class="green lighten-1 waves-effect waves-light btn-lg btn modal-trigger " href="{{ route('add-client-gallery', $userId)}}">Add New Photos</a>
      </center>
      <br>
      <br>
  
  <div class="row ui-mediabox portfolio portfolio-masonry ">
  
  
    @if ( $userGallery->count() )
    @foreach ($userGallery  as $ug )
      
   
    <div class="col s6 grid-item">
      <a class="img-wrap round" href="{{url('storage/app/public/uploads/'.$ug->media)}}" data-fancybox="images"
        data-caption="The Works of my hands">
     <img alt="image" class="z-depth-1" style="width: 100%;" src="{{ asset('Portfolio/'.$ug->media) }}">

        
      </a>
        <div class="user-actions">
        
      <p></p>
        
    </div>
    </div>
    
    @endforeach
    @else
    <h3></h3>

    <div class="row ">
      <div class="col s12 pad-0">                  
        <div class="card-panel red lighten-1">
          <span class="white-text">This client has no pictures yet in the gallery!.</span>
        </div>
</div>
</div>

    @endif
   
  </div>
      </div>
    </div>
  
    </div>

@endsection