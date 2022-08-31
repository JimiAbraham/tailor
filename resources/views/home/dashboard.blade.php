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
              <i class="mdi mdi-cake"></i>
            <h6> Birthdays</h6>
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

<hr>
<div class="col s12 ">
    <ul class="collapsible ">

        <li >
        <div class="collapsible-header "><i class="mdi mdi-details"></i> </div>
        <div class="collapsible-body "><span>
          <div class="row">
            <div class="col s12 m12 l6">
            <div class="icon-block block-small z-depth-1">
              <div class="icon  primary-text"><i class="mdi mdi mdi-settings"></i></div>
              <div class="title "><a href="{{ route('profile')}}">Update Profile</a></div>
              <div class="tagline ">
                  <p>Edit custom birthday messages and profile</p>

              </div>
            </div>
          </div>



            <div class="col s12 m12 l6">
            <div class="icon-block block-small z-depth-1">
              <div class="icon  primary-text"><a class="modal-trigger" href="#modal989466222"><i class="mdi mdi-email"></i></a></div>
              <div class="title modal-trigger"><a class="modal-trigger" href="#modal989466222"> Send SMS</a></div>
              {{-- <p>Let's you send SMS to all your clients</p> --}}

              <div class="tagline ">
                <p>Send SMS to all your clients</p>

                </div>


            </div>
          </div>


          </div>    </span></div>
      </li>

    </ul>

    </div>


</div>



</div>
</div>


@endsection


<div id="modal989466222" class="modal">
    <div class="modal-content ">
          <h4 class="bot-20 sec-tit">Send SMS To All Your Clients</h4>
      <p>
          <span style="color:red">THIS WILL SEND SMS TO ALL THE CLIENTS PHONE HUMBER IN YOUR PROFILE</span>
          <form action="{{ route('sendBulkSms')}}" method="POST">
            @csrf



            <div class="row">
                <div class="input-field col s12">
                  <i class="mdi mdi-pen prefix"></i>
                  <textarea name="message"></textarea>
                  <label for="first_name">Message</label>
                </div>
                </div>



            <div class="row">
                <div class="">
                    <button type="submit" class="waves-effect waves-light btn-large bg-primary ">SEND </button>
                </div>
            </div>

        </form>

      </p>
    </div>



  </div>


