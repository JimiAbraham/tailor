@extends('layout.app')


@section('contents')
<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div>

    <div class="container has-pagehead is-pagetitle">
      <div class="section">

        @foreach( $clientDetails as $cl)


        <h5 class="pagetitle">{{ $cl->name}} Profile</h5>

        @endforeach
            </div>
    </div>






          <div class="container full subpage ">
          <div class="section">



  <!-- <div class="container">
    <div class="section"> -->


      <ul class="subpages collection z-depth-1">

        @foreach( $clientDetails as $cl)
                          {{-- <li class="collection-item">
                                <a href="{{ route('reach-client', $cl->id)}}" class="waves-effect"><i class="mdi mdi-details"></i><span>Contact {{ $cl->name}} </span><i clavariantss="arrow mdi mdi-chevron-right"></i></a>
                           </li> --}}

                            <div class="row ">
                                        <div class="col s12 pad-0">
                            <ul class="collapsible ">

                            <li >
                            <div class="collapsible-header "><i class="mdi mdi-details"></i>Contact {{ $cl->name}} </div>
                            <div class="collapsible-body "><span>
                              <div class="row">
                                <div class="col s12 m12 l4">
                                <div class="icon-block block-small z-depth-1">
                                  <div class="icon  primary-text"><i class="mdi mdi-phone"></i></div>
                                  <div class="title ">Call</div>
                                  <div class="tagline ">
                                    <a href="tel:{{ $cl->phone}}">
                                    {{ $cl->phone ?  $cl->phone : "Phone Number Is Empty"}}
                                    </a>
                                  </div>
                                </div>
                              </div>

                                <div class="col s12 m12 l4">
                                <div class="icon-block block-small z-depth-1">
                                  <div class="icon  primary-text"><i class="mdi mdi-map-marker"></i></div>
                                  <div class="title ">Home Address</div>
                                  <div class="tagline ">{{ $cl->address ? $cl->address : "Address Is Empty" }}</div>
                                </div>
                              </div>

                                <div class="col s12 m12 l4">
                                <div class="icon-block block-small z-depth-1">
                                  <div class="icon  primary-text"><i class="mdi mdi-email"></i></div>
                                  <div class="title ">Email</div>
                                  <div class="tagline ">
                                    <a href="mailto:{{ $cl->email}}">
                                      {{ $cl->email ? $cl->email : "Email Is Empty" }}
                                    </a>
                                    </div>


                                </div>
                              </div>


                              </div>    </span></div>
                          </li>

                        </ul>


                            </div>
                            </div>



                           <li class="collection-item">

                                          {{-- <a href="{{ route('edit-client-profile', $cl->id)}}" class="waves-effect"><i class="mdi mdi-lead-pencil "></i><span>Edit {{ $cl->name}}'s profile  || View profile<span><i class="arrow mdi mdi-chevron-right"></i></a> --}}

                                            <ul class="collapsible ">

                                              <li >
                                              <div class="collapsible-header "><i class="mdi mdi-eye"></i></i>View profile</div>
                                              <div class="collapsible-body "><span>
                                                <div class="row ">
                                                  <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Measurement Profile</h5>    <table class="highlight responsive-table striped center">
                                          <thead>



                                            <tr>
                                                <th>Measurement 1</th>
                                                <th>Measurement 2</th>
                                                <th>Measurement 3</th>
                                                <th>Measurement 4</th>
                                                <th>Measurement 5</th>
                                            </tr>
                                          </thead>

                                          <tbody>
                                            <tr>

                                              <td>{{ $cl->m1 ? $cl->m1 : "No Data" }}</td>
                                              <td>{{ $cl->m2  ? $cl->m2: "No Data"  }}</td>
                                              <td>{{ $cl->m3  ? $cl->m3: "No Data" }}</td>
                                              <td>{{ $cl->m4  ? $cl->m4: "No Data" }}</td>
                                              <td>{{ $cl->m5  ? $cl->m5: "No Data" }}</td>

                                            </tr>

                                          </tbody>
                                          </table>
                                          <a href="{{ route('client-profile', $cl->id)}}" class="waves-effect"><i class="mdi mdi-eye"></i><span> Manage [  View, Update, Delete ] Profile</span><i class="arrow mdi mdi-chevron-right"></i></a>
                                          </div>
                                          </div>
                                                 </span></div>
                                            </li>



                                          </ul>


                                    </li>

                                    <li class="collection-item">

                                        <ul class="collapsible ">

                                          <li >
                                          <div class="collapsible-header "><i class="mdi mdi-camera-iris"></i></i>View {{ $cl->name}}'s  Gallery</div>


                                          <div class="collapsible-body ">
                                            <a href="{{ route('client-gallery', $cl->id )}}" class="waves-effect"><i class="mdi mdi-camera-iris"></i><span>Manage [  View, Add, Delete ] Gallery</span><i class="arrow mdi mdi-chevron-right"></i></a>

                                            @if( $clientPhotos->count() )
                                            <li class="collection-item">
                                              <div class="carousel carousel-basic carousel-small rounded">
                                           @foreach ( $clientPhotos as  $cp)
                                           <a class="carousel-item" href="#one!"><img alt="image" src="{{ asset('Portfolio/'.$cp->media) }}"></a>
                                           @endforeach

                                              </div>

                                                  </li>
                                              @else
                                                  <p>{{ $cl->name}} doesn't have any picture</p>
                                              @endif

                                          </div>
                                        </li>

                                      </ul>


                                    </li>





                                    {{-- <li class="collection-item">
                                      <a href="{{ route('client-gallery', $cl->id )}}" class="waves-effect"><i class="mdi mdi-camera-iris"></i><span></span><i class="arrow mdi mdi-chevron-right"></i></a>
                                  </li> --}}
                                    <hr>
                                    <li class="collection-item">
                                      <a href="{{ route('delete-client', $cl->id )}}"  onclick="return confirm('Are you sure?')" class="waves-effect"><i class="mdi mdi-delete"></i><span> Delete</span></a>
                                  </li>




            @endforeach
      </ul>


    <!-- </div>

  </div> -->

          </div>
          </div>




  </div>

@endsection


