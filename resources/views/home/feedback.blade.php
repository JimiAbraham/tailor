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

    <div class="pagehead-bg  primary-bg" >
      </div>

    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        @foreach ( $formData as $fd )

        @endforeach
        <h5 class="pagetitle"> {{ $fd->name }}'s Feedback Mechanism</h5>
            </div>
    </div>


    <div class="container full">


        <div class="section">


      <ul class="collection mailbox  z-depth-1">
        @auth


        <h5 class="mb-5 text-center" style="color:white">Share A Feedback Form Of Your Ogranisation To Any Of The Following Platforms</h5>
        <center> {!! $shareComponent !!}  </center>
        <br>
        <br>
        @endauth
          <li class="collection-item avatar">
          <a  class='maillink  waves-effect'>
          <span class="from">why feedback?</span>
          <span class="title">Feedbacks helps us deliver better services</span>
          <p>
          </a>
        </li>

      </ul>
        </div>
      </div>

</div>

@guest


<div class="addbutton">
    <a href="#modal1706851887" class="waves-effect waves-light btn-floating btn primary-bg z-depth-3 modal-trigger ">
      <i class="mdi mdi-message-plus"></i>
    </a>
  </div>


  <!-- Modal Structure -->
  <div id="modal1706851887" class="modal  bottom-sheet default-open">
    <div class="modal-content ">
          <h4 class="bot-20 sec-tit">We would love to have a feedback from you!</h4>

             <form action="{{route('feedback-form')}}" method="post">
       @csrf
       <input type="hidden" value="{{ $fd->id}}" name='user_id'>
            <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-face prefix"></i>
      <input name="name" value="{{ old('name')}}" type="text">
      <label for="event_title11">Your Name: ( Leave blank to stay anonymous)</label>
    </div>
  </div>


  <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-face prefix"></i>
      <input name="phone" value="{{ old('phone')}}" type="text">
      <label for="event_title11">Your Phone Or : ( Leave blank to stay anonymous)</label>
    </div>
  </div>
{{--
  <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-pencil prefix"></i>
      <input id="event_title112" type="text">
      <label for="event_title112">Subject</label>
    </div>
  </div> --}}

  <div class="row">
    <div class="input-field col s12 textarea">
      <i class="mdi mdi-file-outline prefix"></i>
      <textarea name="message" value="{{ old('message')}}" class="materialize-textarea"></textarea>
      <label for="textarea-prefix">Your Message</label>
    </div>
  </div>


  <div class="row">
    <div class="">
      <button type="submit" class="waves-effect waves-light btn bg-primary">Send</button>
    </div>
  </div>
  @endguest
</div>

@endsection
