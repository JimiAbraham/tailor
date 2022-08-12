@extends('layout.app')


@section('contents')



<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Your Clients Birthday</h5>
            </div>
    </div>
    
  

  <div class="container over transparent pr0 pl0">
      <div class="section pt0 pb0">
              

        <div class="container">
          <div class="section">
      
      
      <div class="row ui-mediabox portfolio portfolio-masonry ">
      
      
        @if ( $AllBirthdays->count())
          
        @foreach ( $AllBirthdays as  $bday )
          
        <table class="highlight striped responsive">
          <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Email log</th>
                <th>SMS Log</th>
            </tr>
          </thead>
  
          <tbody>

          


<tr>

  
  <td>{{ $bday->name }}</td>
  <td>{{ $bday->gender }}</td>
  <td> {{$bday->DOB}} </td>
  <td> {{$bday->email_log}} </td>
  <td> {{$bday->sms_log}} </td>
</tr>
 
            

          </tbody>
        </table>


       
        @endforeach
        @else
          
        <h3 style="margin-top: 130px;">No Birthday Today</h3>
      
        @endif
        
       
           
          
      </div>



          </div>
        </div>
   
      
     
          </div>
  </div>
  
  <hr>

  <div class="container over transparent pr0 pl0">
    <div class="section pt0 pb0">
            

      <div class="container">
        <div class="section">
    
    
    <div class="row ui-mediabox portfolio portfolio-masonry ">
    
    
      @if ( $SpouseBirthdays->count())
        
      @foreach ( $SpouseBirthdays as  $bday )
        
      <table class="highlight striped responsive">
        <thead>
          <h4>Spouses Birthday!</h4>
          <tr>
              <th>Name</th>
              <th>Gender</th>
              <th>Birthday</th>
              <th>Email log</th>
              <th>SMS Log</th>
          </tr>
        </thead>

        <tbody>

        


<tr>


<td>{{ $bday->name }}</td>
<td>{{ $bday->gender }}</td>
<td> {{$bday->DOB}} </td>
<td> {{$bday->email_log}} </td>
<td> {{$bday->sms_log}} </td>
</tr>

          

        </tbody>
      </table>


     
      @endforeach
      @else
        
      <h3 style="margin-top: 130px;">No Spouse Birthday Today</h3>
    
      @endif
      
     
         
        
    </div>



        </div>
      </div>
 
    
   
        </div>
</div>

  </div>
@endsection