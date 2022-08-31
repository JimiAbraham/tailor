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
      <h5 class="pagetitle">Your Portfolio </h5>
          </div>
  </div>



  <div class="container">
    <div class="section">


        @if ( $id == null)
        <a style="width: 200px;" href="" class="btn-floating btn-large pulse red lighten-1"><i class="mdi mdi-share"></i>Your Portfolio Is Empty</a>
        @else
        <a style="width: 200px;" href="{{ route('my-portfolio',  $id )}}" class="btn-floating btn-large pulse red lighten-1"><i class="mdi mdi-share"></i>Share Portfolio</a>

        @endif


<div class="row ui-mediabox portfolio portfolio-masonry ">


  @if ( $portfolio->count())

  @foreach ( $portfolio  as $port )

  <div class="col s6 l6 grid-item">
    <a class="img-wrap round" href=" {{asset('Portfolio/'.$port->media)}}" data-fancybox="images"
      data-caption="The Designer Tailorin Platform">
    <img alt="image" class="z-depth-1" style="width: 100%;" src="{{asset('Portfolio/'.$port->media)}}">
    </a>
     <p><a href="{{ route('delete-photo',$port->id ) }}">DELETE</a></p>
  </div>
  @endforeach
  @else

  <h3 style="margin-top: 130px;">You haven't uploaded any picture of your clients, <a href="{{ route('all-clients')}}">start uploading here </a> </h3>

  @endif




</div>
    </div>
  </div>



</div>

@endsection
