@extends('layout.app')


@section('contents')


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle"> Picture Gallery</h5>
            </div>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif


    <div class="container full">
        <div class="section">

            
        @if($errors->any())
        <div class="alert alert-danger" style="background: rgb(93, 4, 4); padding: 5px; position: absolute;top: 30px;"> 
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li style="color:white">{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
      
          @foreach ($userId  as $userr )
            
        
            <div class="modal-content ">
                <h4 class="bot-20 sec-tit"></h4>
          
                   <form action="{{route('save-client-gallery')}}" method="post" enctype="multipart/form-data">
             @csrf 
          
      <input type="hidden" name="user_id" value="{{ $userr->id}}">
      
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-face prefix"></i>
            <input name="images" value="{{ old('images')}}" type="file">
            <label for="event_title11"></label>

            @if ($errors->has('files'))
            @foreach ($errors->get('files') as $error)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $error }}</strong>
            </span>
            @endforeach
          @endif
          </div>
        </div>
        <div class="row ">
          <div class="col s12 pad-0">                  
            <div class="card-panel green lighten-1">
              <span class="white-text">Upload the awesome pictures  of the clothes you have sown for {{ $userr->name}}!.</span>
            </div>
    </div>
    </div>
          
        
        <div class="row">
          <div class="">
            <button type="submit" class="waves-effect waves-light btn bg-primary">Upload</button>
          </div>
        </div>

        <div class="row">
          <div class="">
            <a href="{{ route('client-gallery', $userr->id)}}" class="waves-effect waves-light btn bg-success">View Uploads</a>
          </div>
        </div>
      
      </div>
         
      @endforeach
        </div>
      </div>

</div>

  

  <!-- Modal Structure -->
  
@endsection