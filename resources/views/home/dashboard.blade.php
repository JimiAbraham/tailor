@extends('layout.app')



@section('contents')


<div class="pagehead-bg   primary-bg" >
</div> 

<div class="container has-pagehead is-pagetitle">
<div class="section">
  <h5 class="pagetitle">{{ auth()->user()->name}}, Welcome to dashboard</h5>
      </div>
   
</div>







<div class="spacer-large"></div>
<div class="container over mb0 transparent pr0 pl0 relative">
<div class="section pt0 pb0">

<div class="row settings-row " >

<div class="col s6 ">
<div class="setting-box z-depth-1 center" style="border-radius: 50px;">
            <a href="{{ route('all-clients')}}">
              <i class="mdi mdi-emoticon-cool z-depth-1"></i>
            <h6>My Clients
          </a>
</div>
</div>


<div class="col s6 ">
<div class="setting-box z-depth-1 center " style="border-radius: 50px;">
            <a href="{{ route('birthdays')}}">
              <i class="mdi mdi-cake z-depth-1"></i>
            <h6>Clients Birthdays</h6>
          </a>
</div>
</div>
<div class="col s6 ">
  
  {{-- <span class="badge" style="position: relative; right: 118px; bottom: 30px; color:white; background: red; border-radius: 50% 50%"></span> --}}
<div class="setting-box z-depth-1 center " style="border-radius: 50px;">
 
            <a href="{{route('reviews')}}">
           
              <i class="mdi mdi-email-open z-depth-1"></i>
            <h6>Reviews</h6>
          </a>
</div>
</div>
  <div class="col s6 ">
<div class="setting-box z-depth-1 center " style="border-radius: 50px;" >
            <a href="{{route('portfolio')}}">
              <i class="mdi mdi-hanger z-depth-1"></i>
            <h6>My Portfolio</h6>
          </a>
</div>
</div>
</div>



</div>
</div>


@endsection

