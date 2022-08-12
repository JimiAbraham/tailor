@extends('layout.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
    div#social-links {
        margin: 0 auto;
        max-width: 500px;
    }
    div#social-links ul li {
        display: inline-block;
    }          
    div#social-links ul li a {
        padding: 20px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 30px;
        color: #222;
        background-color: #26a69a;
    }
</style>


@section('contents')

<div class="content-area">

  <div class="pagehead-bg   primary-bg" >
    </div> 

  <div class="container has-pagehead is-pagetitle">
    <div class="section">
      <h5 class="pagetitle">Your Portfolio</h5>
          </div>
  </div>
  
  @foreach ( $portfolio  as $port )
  @endforeach




  
  <div class="container">
    <div class="section">

      

<div class="row ui-mediabox portfolio portfolio-masonry ">



  @auth == auth()->user()->id 

  <h5 class="mb-5 text-center">Share A Feedback Form Of Your Ogranisation To Any Of The Following Platforms</h5>
  <center> {!! $shareComponent !!}  </center> 
  @endauth
  

  
      

       
        <br>
        <br>
  
  @if ( $portfolio->count())
    
  @foreach ( $portfolio  as $port )
    
  <div class="col s6 grid-item">
    <a class="img-wrap round" href="{{asset('Portfolio/'.$port->media)}}" data-fancybox="images"
      data-caption="Fancy looking with this new style">
      <img alt="image" class="z-depth-1" style="width: 100%;" src="{{asset('Portfolio/'.$port->media)}}">
    </a>
    
  </div>

  
  @endforeach
  @else
    

  @endif
  
 
     
    
</div>
    </div>
  </div>



</div>

@endsection