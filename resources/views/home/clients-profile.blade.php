@extends('layout.app')



@section('contents')


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Profile </h5>
            </div>
    </div>
    
  
  
  
  
    
  
  <div class="container over transparent pr0 pl0">
      <div class="section pt0 pb0">
        
    @foreach ($clientProfile as  $cp)
        
    
      
      <div class="row ">
                  <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Bio data </h5>    <table class="highlight responsive-table striped center">
          <thead>
            <a href="{{ route('edit-client-profile', $cp->id)}}" class="btn-floating btn-large pulse teal lighten-1"><i class=""></i>Edit </a>


            <a href="{{ route('client-gallery', $cp->id)}}" class="btn-floating btn-large pulse teal lighten-1"><i class=""></i>Gallery </a>
            <tr>
             
                <th>Name</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>Birthday</th>
                <th>Spouse Birthday</th>
                <th>Profession</th>
            </tr>
          </thead>
  
          <tbody>
            <tr >
              <td>{{ $cp->name}}</td>
              <td>{{ $cp->phone}}</td>
              <td>{{ $cp->gender}}</td>
              <td>{{ $cp->email}}</td>
              <td>{{ $cp->address}}</td>
              <td>{{ $cp->DOB}}</td>
              <td>{{ $cp->SDOB}}</td>
              <td>{{ $cp->job}}</td>
            </tr>
           
          </tbody>
        </table>
      </div>
      </div>


      <div class="row ">
        <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Measurement Profile</h5>    <table class="highlight responsive-table striped center">
<thead>
  <a href="{{ route('edit-client-profile', $cp->id)}}" class="btn-floating btn-large pulse teal lighten-1"><i class=""></i>Edit </a>

  <a href="{{ route('client-gallery', $cp->id)}}" class="btn-floating btn-large pulse primary lighten-1"><i class=""></i>Gallery </a>
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
    <td>{{ $cp->m1 ? : "No measurement yet!"  }}</td>
    <td>{{ $cp->m2 ? : "No measurement yet!"  }}</td>
    <td>{{ $cp->m3 ? : "No measurement yet!"  }}</td>
    <td>{{ $cp->m4 ? : "No measurement yet!"  }}</td>
    <td>{{ $cp->m5 ? : "No measurement yet!"  }}</td>
   
  </tr>
 
</tbody>
</table>
</div>
</div>
  
@endforeach
          </div>
  </div>
  
  
  
  
  </div>


@endsection