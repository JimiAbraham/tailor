<html>


<h2>Testing Birthdaysss</h2>

{{ $resp}}

<hr>

{{-- 
<p>
@foreach ( $AllBirthdays  as  $al)
    

Celebrant name: {{ $al->name }}<br>

Celebrant email: {{ $al->email }}<br>

celebrant phone num:  {{ $al->phone }}<br>
Celebrant tailor: {{ $al->user->name }}<br>

custom birthday Message: {{ $al->user->birthday }}<br>


@php
   
// Initialize variables ( set your variables here )

$username = 'adesokanjimmy@gmail.com';

$password = 'Yr@dxHN4Z6J88XB';

$sender   =  mb_strimwidth($al->user->name, 0, 11);

$message  =  " Dear ". $al->name ." ". $al->user->birthday . "<br> From your designer: ". $al->user->name ;

// Separate multiple numbers by comma

$mobiles  =  $al->phone ;

// Set your domain's API URL

$api_url  = 'http://portal.nigeriabulksms.com/api/';


//Create the message data

$data = array('username'=>$username, 'password'=>$password, 'sender'=>$sender, 'message'=>$message, 'mobiles'=>$mobiles);

//URL encode the message data

$data = http_build_query($data);

//Send the message


$request = $api_url.'?'.$data;

$result  = file_get_contents($request);

$result  = json_decode($result);


if(isset($result->status) && strtoupper($result->status) == 'OK')
{
    // Message sent successfully, do anything here

    echo 'Message sent at N'.$result->price;

}
else if(isset($result->error))
{
     // Message failed, check reason.

   echo 'Message failed - error: '.$result->error;
}
else
{
    // Could not determine the message response.

    echo 'Unable to process request';
}


@endphp

@endforeach


</p> --}}




</html>