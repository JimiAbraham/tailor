@extends('layout.app')



@section('contents')

<div class="pagehead-bg   primary-bg" >
</div> 

<div class="container has-pagehead is-pagetitle">
<div class="section">
  <h5 class="pagetitle">User Profile</h5>
      </div>
</div>






    <div class="container full subpage ">
    <div class="section">


        
<!-- <div class="container">
<div class="section"> -->


<ul class="subpages collection z-depth-1">



<li class="collection-img">
    <a class="img-wrap" href="#!">
    <img alt="image" class="responsive-img z-depth-1" src="assets/images/pic4.jpg">
</a></li>


    


  <li class="collection-item">
                             
                              </li><li class="collection-item">
                                  <a href="{{ route('my-profile')}}" class="waves-effect"><i class="mdi mdi-account-heart "></i><span>Profile</span><i class="arrow mdi mdi-chevron-right"></i></a>
                              </li>
                              <li class="collection-item">
                                  <a href="{{ route('edit-profile')}}" class="waves-effect"><i class="mdi mdi-account-edit "></i><span>Edit Profile</span><i class="arrow mdi mdi-chevron-right"></i></a>
                              </li>

                              <li class="collection-item">
                                <a href="{{ route('edit-messages')}}" class="waves-effect"><i class="mdi mdi-account-edit "></i><span>Edit Message Contents [ Birthdays, Spouse and  Custom  ]</span><i class="arrow mdi mdi-chevron-right"></i></a>
                            </li>

                           
</ul>


<!-- </div>

</div> -->

    </div>
    </div>



@endsection