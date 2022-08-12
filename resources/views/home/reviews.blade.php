@extends('layout.app')


@section('contents')


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Reviews from clients</h5>
            </div>
    </div>
    

<div class="container over transparent pr0 pl0">
    <div class="section pt0 pb0">

 
    
    
    <div class="row ">
            <div class="col s12 pad-0">
              <h2 class="bot-20 sec-tit  ">
                {{-- <a href="{{route('share')}}">Share Review Form</a> --}}
                <a class="btn-floating btn-large pulse red lighten-1"  style="width: 350px; font-size:25px;" href="{{route('share-feedback-form', ['id'=>auth()->user()->id,'name'=>auth()->user()->name]  )}}"><i class="mdi mdi-share"></i>Share Review Form</a>
              
              </h2>
    <ul class="collapsible expandable">
      
      @foreach ( $reviews as $review )
        
      
          <li class="">
          <div class="collapsible-header "><i class="mdi mdi-square-edit-outline"> {{ $no++}} </i>
            {{ !empty($review->name) ?  $review->name  :  'Anonymous'}} => {{ $review->created_at->isoFormat('ddd, D-MMM-YYYY' )}}</div>
          <div class="collapsible-body "><span>
            Contact:   {{ !empty($review->phone) ?  $review->phone  :  '-'}}
            <br>
              {{ $review->body }}

              <hr>
              <div class="spacer"></div>


        @if ( $review->status == 0)
        
        @endif 



        @if ( $review->status == 0 )
            <div class="switch  medium">

        <form action="{{ route('reviews-status', $review->id)}}" method="POST">
          @csrf
              <label>
                Off
                <input  type="checkbox" >
                <span class="lever"></span>
                
              </label>
          <button type="submit" class="waves-effect waves-light btn bg-primary">Mark Read</button>
            </form>
            </div>
        @else
        <div class="switch ">
          <label>
            
            <input disabled checked type="checkbox">
            <span class="lever"></span>
            Read
          </label>
        </div>
    

             @endif 
              


                 </span></div>
        </li>

  @endforeach
  <div style="background-color:white!important;">
  <h2><center>{{ $reviews->links("pagination::bootstrap-4") }}</center></h2>
  </div>
</ul>

    </div>
    </div>
    

  </div>
</div>

</div>


@endsection