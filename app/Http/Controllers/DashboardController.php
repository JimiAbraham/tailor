<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Models\client;
use App\Models\message;
use App\Models\photo;
use GuzzleHttp\Middleware;
use Carbon\Carbon;

use RealRashid\SweetAlert\Facades\Alert;



class DashboardController extends Controller
{

    // public  function __construct()

    // {
    //     $this->Middleware('auth');
    // }


    public function dashboard()
    {
        if(Auth::check()){

            return view('home.dashboard');
        }

        return redirect("login")->withSuccess('Opps! You have to login to get here');
    }


    public function editProfilePage()
    {

        // $profile = User::
        return view('home.edit-profile');
    }


    public function editProfileMessages()
    {

        $messages = User::where('id' , auth()->user()->id)->get(['customMesssage','spousebday','birthday' ]);
      //$messages =   User::all(['customMesssage','spousebday','birthday' ]);

    foreach ($messages as $msg ){
      $msg;
    }
        return view('home.edit-messages', compact('msg'));
    }


    public function editMessages( REQUEST $request, $id)
    {
      $request->validate([
        'Birthday-Message' =>'required',
        'Spouse-Birthday-Message' =>'required|unique:users,birthday',
        'Custom-Birthday-Message' =>'required',


    ]);


        $user = User::find($id);
    $user->customMesssage = $request['Custom-Birthday-Message'];
    $user->birthday = $request['Birthday-Message'];
    $user->spousebday = $request['Spouse-Birthday-Message'];

    $user->update();

    if ( $user){
      Alert::success("Great ", "Custom Messages Updated");

      return redirect()->route('profile');
    }

    return back();
  }




    public function ShowMyProfile()
    {

         $clientCount = client::where('user_id', auth()->user()->id)->count();

         $MessageCount = message::where('user_id', auth()->user()->id)->count();

         $PhotoCount = photo::where('user_id', auth()->user()->id)->count();
        return view('home.my-profile', [ 'clientCount' => $clientCount, 'MessageCount' => $MessageCount, 'PhotoCount' => $PhotoCount ]);
    }


    public function UpdateMyProfile( Request $request, $id)
    {


        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'banner' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('logo') ||  $request->hasFile('banner')) {

            $SaveLogo =  $request->file('logo')->getClientOriginalName();
            $logopath = $request->file('logo')->store('logo');


            $SaveBanner =  $request->file('banner')->getClientOriginalName();
            $bannerpath = $request->file('banner')->store('banners');

        }else{
            $SaveLogo = NULL;
            $logopath = NULL;
            $SaveBanner = NULL;
            $bannerpath  = NULL;
        }

            //   dd( $request->all());

            $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->logo = $SaveLogo;
        $user->logoPath = $logopath;
        $user->banner = $SaveBanner;
        $user->bannerpath = $bannerpath;
        $user->update();

        if ( $user){
        Alert::success("Good Job ", "Profile Updated");

        return redirect()->route('profile');
        }

        //Alert::error('Snap!', 'Update wasnt successful, try again');


        return back()->with('error', 'something is wrong');
    }


    public function showAllClients()
    {
      $shareComponent = \Share::page(
        url()->full(),
          'Follow this link to see my awesome portfolio',
      )
      ->facebook()
      ->twitter()
      ->linkedin()
      ->telegram()
      ->whatsapp();


        $clients  = client::where('user_id', auth()->user()->id)->paginate(10);

        return view('home.all-clients', ['clients'=>$clients, 'shareComponent' => $shareComponent])->with('no', 1);
    }


    public function SearchClient(Request $request)
    {


       $searchedClients = client::where('name','LIKE','%'.$request->search.'%')->get();


        return view('home.search-page', ['searchedClients'=>$searchedClients ])->with('no', 1);




     }



    public function addNewClient( Request $request)
    {
         //dd($request->all());

        // $request->validate([
        //     'name' =>'required',
        //     'email' =>'required|unique:clients,email',
        //     'phone' =>'required|unique:clients,phone',
        //     'gender'=> 'required',
        // ]);


        // dd($request->all());
        $AddClient = client::create([
            'name' =>  request('name'),
            'phone' => request('phone'),
            'gender' => request('gender'),
            'DOB' => request('DOB'),
            'SDOB' => request('Spouse_DOB'),
            'address' => request('address'),
            'email' => request('email'),
            'job' => request('prof'),
            'm1' => request('m1'),
            'm2' => request('m2'),
            'm3' => request('m3'),
            'm4' => request('m4'),
            'm5' => request('m5'),
            'm6' => request('m6'),
            'user_id' => auth()->user()->id,
        ]);

        if ( $AddClient)
        {

            Alert::success("+1", "A new Client Added");

            return back();
        }else{
        Alert::error('Snap!', 'Something went wrong, try again');

            return back();

        }
}



public function NewClientInfoPage( $id, $name)
{

  $shareComponent = \Share::page(
    url()->full(),
      'Follow this link to see my awesome portfolio',
  )
  ->facebook()
  ->twitter()
  ->linkedin()
  ->telegram()
  ->whatsapp();


  //$id = User::where('id', auth()->user()->id)->value('id');
//dd($id);
//$clientID = client::all(['id', 'name']);


  return view('home.get-clients-details', compact(['shareComponent','id','name' ]));
}

public function NewClientInfo( Request $request)
{
     //dd($request->all());

    $request->validate([
        'name' =>'required',
        'email' =>'required|unique:clients,email',
        'phone' =>'required|min:11|unique:clients,phone',
        'gender'=> 'required',
        'DOB' => 'required',
    ]);


    // dd($request->all());
    $AddClient = client::create([
        'name' =>  request('name'),
        'phone' => request('phone'),
        'gender' => request('gender'),
        'DOB' => request('DOB'),
        'SDOB' => request('Spouse_DOB'),
        'address' => request('address'),
        'email' => request('email'),
        'job' => request('prof'),
        'm1' => request('m1'),
        'm2' => request('m2'),
        'm3' => request('m3'),
        'm4' => request('m4'),
        'm5' => request('m5'),
        'm6' => request('m6'),
        'user_id' => request('id'),
    ]);

    if ( $AddClient)
    {


      return view('home.thank-you');

    }else{
    Alert::error('Snap!', 'Something went wrong, try again');

        return back();

    }
}


public function showCLientDetails( $id)
{

    $clientDetails  = client::where('id', $id)->get();

    $clientPhotos = photo::where('client_id', $id)->get();

    return view('home.clients-details', ['clientDetails'=> $clientDetails, 'clientPhotos'=>$clientPhotos  ]);
}



public function showCLientProfile( $id)
{

     $clientProfile  = client::where('id', $id)->get();

     return view('home.clients-profile', ['clientProfile'=> $clientProfile ]);
    }


 public function showProfilePage( $id)
{

    $clientDetails  = client::where('id', $id)->get();

    return view('home.edit-client-profile', ['clientDetails'=> $clientDetails ]);
}


public function UpdateClientProfile( Request $request, $id)
{


$user = client::find($id);
$user->name = $request['name'];
$user->email = $request['email'];
$user->phone = $request['phone'];

$user->gender = $request['gender'];
$user->DOB = $request['DOB'];
$user->SDOB = $request['Spouse_DOB'];
$user->address = $request['address'];
$user->job = $request['prof'];
$user->m1 = $request['m1'];
$user->m2 = $request['m2'];
$user->m3 = $request['m3'];
$user->m4 = $request['m4'];
$user->m5 = $request['m5'];
$user->m6 = $request['m6'];


$user->update();


Alert::success("Good Job", "Client Profile Updated Successfully");


    return redirect()->route('client-profile', $id);
}


public function ClientGallery( $id)
  {


$userGallery = photo::where('client_id',$id )->where('user_id', auth()->user()->id )->get();

$userId = $id;
// dd($userGallery);

    return view('home.client-gallery', compact('userGallery', 'userId'));
  }

  public function AddClientGallery( $id)
  {

    $userId = client::where('id',$id )->get();

    // dd($userId);

    return view('home.add-clients-photo',['userId' => $userId]);
  }



  public function storeClientGallery(Request $request)

  {
     // dd($request);
      $request->validate([
        'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      ]);



        $file = $request->file('images');


        $filename = date('Ymd').$file->getClientOriginalName();
        $file-> move(public_path('Portfolio'), $filename);



              photo::create([
                  'media' => $filename,
                  'path' => 'NULL',
                  'user_id' =>auth()->user()->id,
                  'client_id' =>$request->user_id,

                ]);



       Alert::success("Good Job", "Client Photo Uploaded Successfully");



    //   return back()->with('success', 'Images uploaded successfully');

    return back()->with('error', 'something is wrong');;
  }

  public function reachClient( $id)

  {
    $reachClient = client::where('id', $id)->get();


      return view('home.reach-client',['reachClient'=>$reachClient]);
  }

  public function deleteClient( $id)
  {
      client::where('id', $id)->delete();


      Alert::success("Good Job", "Client and details have been Deleted Successfully");


      return redirect()->route('all-clients');
  }




  public function DeletePhoto( $id)
  {
      photo::where('id', $id)->delete();


      Alert::success("Good Job", "Photo has been Deleted Successfully");


      return redirect()->route('portfolio');
  }

  public function reviews()
  {

    $reviews = message::where('user_id', auth()->user()->id)->paginate(5);

     //dd($reviews);

      return view('home.reviews', ['reviews' => $reviews ])->with('no', 1);
  }


  public function reviewStatus( Request $request, $id)
  {

     $update = message::find($id);

     $update->status = 1;
     $update->update();

    // dd($reviews);

      return back();
  }



  public function portfolio()
  {

    $portfolio = photo::where('user_id',auth()->user()->id)->get();

    $id = photo::where('user_id', auth()->user()->id)->value('user_id');

    //dd($id );


//dd($id);
      return view('home.portfolio', ['portfolio' =>$portfolio, 'id'=> $id]);
  }

  public function sharePortfolio( $id)
  {

    $shareComponent = \Share::page(
        url()->full(),
          'Follow this link to see my awesome portfolio',
      )
      ->facebook()
      ->twitter()
      ->linkedin()
      ->telegram()
      ->whatsapp()
      ->reddit();


    $portfolio = photo::where('user_id',$id)->get();



      // dd($id);
    //   return view('home.myportfolio', ['portfolio' =>$portfolio, 'shareComponent' => $shareComponent ]);

      return view('home.myportfolio', compact('portfolio',  'shareComponent'));

    }

  public function clientBirthday()
  {

    $month = Carbon::now()->format('m');
    $day = Carbon::now()->format('d');

    // $bday = Carbon\Carbon::parse($date->created_at)->day;

    $AllBirthdays = client::whereMonth('DOB', $month)
                            ->whereDay('DOB', $day)
                            ->where('user_id', auth()->user()->id)->get();


    $SpouseBirthdays = client::whereMonth('SDOB', $month)
    ->whereDay('DOB', $day)
    ->where('user_id', auth()->user()->id)->get();


//    dd($AllBirthdays);

      return view('home.client-birthday',
       ['AllBirthdays' => $AllBirthdays, 'SpouseBirthdays' => $SpouseBirthdays]);
  }



  public function Sharefeedback( $id,$name)
  {

    $shareComponent = \Share::page(
        URL::current(),
          'Hey dear, kindly help me with this survey',
      )
      ->facebook()
      ->twitter()
      ->linkedin()
      ->telegram()
      ->whatsapp()
      ->reddit();


    $formData = User::where('id',$id)->get();

      return view('home.feedback', ['formData' => $formData, 'shareComponent' => $shareComponent ]);
  }

  public function Processfeedback( Request $request )
  {
     $request->validate([


        'message' => 'required',
     ]);
        $id = auth::id();

     $inbox = message::create([
         'user_id' => $request->user_id,
         'body' => $request->message,
         'name' => $request->name,
         'phone' => $request->phone,
             ]);

    Alert::success("Thank You", "Your Feedback have been sent successfully");

             return back();
  }


//   public function ShareWidget()
//   {
//       $shareComponent = \Share::page(
//         URL::current(),
//           'Hey dear, kindly give your feedback to help us serve you better!',
//       )
//       ->facebook()
//       ->twitter()
//       ->linkedin()
//       ->telegram()
//       ->whatsapp()
//       ->reddit();

//     //   dd($shareComponent);

//       return view('home.share',['shareComponent' => $shareComponent]);
//   }



public function adminpage()

{
    $allUsers = User::all()->count();

    $Users = User::all();

    $allClients = client::all()->count();

    $Clients = client::all();



    return view('control.index', compact('allUsers','allClients', 'Users', 'Clients' ))->with('no',1);

}


}
