<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Mail;
use App\Mail\MyTestMail;

use Carbon\Carbon;


use App\Http\Models\User;
use App\Http\Models\client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function celebrant()
    {

        $month = Carbon::now()->format('m');
        $day = Carbon::now()->format('d');
        
    
        $AllBirthdays = client::whereMonth('DOB', $month)
                                ->whereDay('DOB', $day)
                                ->where('user_id', auth()->user()->id)->get();
    
    
        $SpouseBirthdays = client::whereMonth('SDOB', $month)
        ->whereDay('DOB', $day)
        ->where('user_id', auth()->user()->id)->get();
        
        dd( $AllBirthdays );
    
    }


    public function mail()
{
    $details = [
        'title' => 'Testing Birthday Mails',
        'body' => 'This is the body of test email.'
    ];



    Mail::to('adesokanjimmy@gmail.com')->send(new MyTestMail($details));

    dd('Success! Email has been sent successfully.');

}

}
