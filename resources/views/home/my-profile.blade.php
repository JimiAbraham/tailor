@extends('layout.app')




@section('contents')

<div class="content-area">      
    <div class="ui-profile">
        
      <div class="primg">
      </div>
      <div class="prinfo card-panel">
          <div class="prname">
                            <h4 class="name">{{ auth()->user()->name}}</h4>
                <div class="pos">Fashion Designer</div>
                          <p>Joined on {{ auth()->user()->created_at->isoFormat('dddd, D-MM-Y')   }}.</p>             
          </div>
                                <div class="count">
                <h6 class="num">{{ $clientCount}}</h6>
                <div class="tit"><a style="color: white;" href="{{route('all-clients')}}">Total Clients</a></div>
            </div>
            <div class="count">
                <h6 class="num">{{ $MessageCount}}</h6>
                <div class="tit"><a style="color: white;" href="{{route('reviews')}}">Total Feedbacks</a></div>
            </div>
            <div class="count">
                <h6 class="num">{{ $PhotoCount}}</h6>
                <div class="tit"><a style="text-decoration: none; color:white" href="{{route('portfolio')}}">All Photo Gallery</a></div>
            </div>
                    
      </div>
    </div>

</div>

@endsection