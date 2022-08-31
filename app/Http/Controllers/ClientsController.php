<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;


use App\Models\User;
use App\Models\client;


class ClientsController extends Controller
{

    public function bulkSmsSender( REQUEST $request){
        $data =  client::where('user_id', auth()->user()->id)->get();

        foreach( $data as $dt)
        {
           // dd($dt->name .' 2 ' .$dt->phone. ' 3 '.$request->message.' 4 '. auth()->user()->name );

           $Sender = auth()->user()->name;
           $Message = $request->message;
           $Mobiles = $dt->phone;
           $recipientName = $dt->name;


            $this->bulkSmsHandler( $Sender, $Message, $Mobiles,
            $recipientName);
        }

    }

    public function clientBirthday()
    {

      $month = Carbon::now()->format('m');
      $day = Carbon::now()->format('d');

      // $bday = Carbon\Carbon::parse($date->created_at)->day;

      $AllBirthdays = client::whereMonth('DOB', $month)
                              ->whereDay('DOB', $day)
                              ->with('user')
                              ->get();


      $SpouseBirthdays = client::whereMonth('SDOB', $month)
      ->whereDay('SDOB', $day)
      ->with('user')->get();


     // dd($AllBirthdays);

    foreach( $AllBirthdays as $al )
    {

        $Sender = mb_strimwidth($al->user->name, 0, 11);

        $Message  =  " Dear ". $al->name ." ". $al->user->spousebday . "<br> From your designer: ". $al->user->name ;

         $Mobiles  =  $al->phone;

         $recipientName = $al->name;

         $recipientDob =  $al->SDOB;

        //  dd('name:'. $recipientName .' and . DOB: '.$recipientDob)

        $this->bulkSmsHandler( $Sender, $Message, $Mobiles,
        $recipientName, $recipientDob);

        // return view('home.test',
        // ['resp' => $resp ]);

    }


    foreach( $SpouseBirthdays as $al )
    {

        $Sender = mb_strimwidth($al->user->name, 0, 11);

        $Message  =  " Dear ". $al->name ." ". $al->user->birthday . /n"  From your designer: ". $al->user->name ;

         $Mobiles  =  $al->phone;

         $recipientName = $al->name;

         $recipientDob =  $al->DOB;

        //  dd('name:'. $recipientName .' and . DOB: '.$recipientDob)

        $this->bulkSmsHandler( $Sender, $Message, $Mobiles,
        $recipientName, $recipientDob);

        // return view('home.test',
        // ['resp' => $resp ]);

    }


    }




public function bulkSmsHandler( $Sender, $Message, $Mobiles, $recipientName, $recipientDob   )

{

    $username = 'adesokanjimmy@gmail.com';

    $password = 'Yr@dxHN4Z6J88XB';

    // $sender   =  mb_strimwidth($al->user->name, 0, 11);

    $sender   =  $Sender;


    // $message  =  " Dear ". $al->name ." ". $al->user->birthday . "<br> From your designer: ". $al->user->name ;

    $message  = $Message;

    // Separate multiple numbers by comma

    // $mobiles  =  $al->phone ;

    $mobiles  =  $Mobiles;



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
        client::where('name', $recipientName)
                            ->where('DOB', $recipientDob)
                            ->update(['sms_log' => "SMS SENT"]);


       return  $resp =  'Message sent at N'.$result->price;

    }
    else if(isset($result->error))
    {
        client::where('name', $recipientName)
        ->where('DOB', $recipientDob)
        ->update(['sms_log' => "SMS NOT SENT"]);

       return   $resp = 'Message failed - error: '.$result->error;
    }
    else
    {
        // Could not determine the message response.
        client::where('name', $recipientName)
        ->where('DOB', $recipientDob)
        ->update(['sms_log' => "ERROR"]);
      return   $resp =  'Unable to process request';
    }

}



}





// 6$LZgyL9p2hNbQ!
