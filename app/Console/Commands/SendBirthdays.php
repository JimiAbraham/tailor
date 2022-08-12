<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon;


use App\Models\User;
use App\Models\client;

class SendBirthdays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendBirthdays:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Happy Birthday Messages';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


            $month = Carbon::now()->format('m');
            $day = Carbon::now()->format('d');

            // $bday = Carbon\Carbon::parse($date->created_at)->day;

            $AllBirthdays = client::whereMonth('DOB', $month)
                                    ->whereDay('DOB', $day)
                                    ->with('user')
                                    ->get();


            $SpouseBirthdays = client::whereMonth('SDOB', $month)
            ->whereDay('DOB', $day)
            ->where('user_id', auth()->user()->id)->get();


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

              $Message  =  " Dear ". $al->name ." ". $al->user->birthday . "<br> From your designer: ". $al->user->name ;

               $Mobiles  =  $al->phone;

               $recipientName = $al->name;

               $recipientDob =  $al->DOB;

              //  dd('name:'. $recipientName .' and . DOB: '.$recipientDob)

              $this->bulkSmsHandler( $Sender, $Message, $Mobiles,
              $recipientName, $recipientDob);

              // return view('home.test',
              // ['resp' => $resp ]);

          }



        \Log::info("While you are away, I am doing my job!");

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
