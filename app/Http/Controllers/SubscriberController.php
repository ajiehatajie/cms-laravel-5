<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Mailgun;
use App\Newsletter;
use App\Jobs\NewsLetterMail;

class SubscriberController extends Controller
{
    

	public function index() 
	{

		return view('subscriber.index');
	}

	public function getunsubscribe() 
	{

		return view('subscriber.unsubscribe');
	}

    public function subscribe(Request $req)
    {

    	 $check = Newsletter::where('email',$req->email)->first();
    	 if($check) 
    	 {
    	 	$status= $check->status;
    	 	$id 	= $check->id;
    	 	if($status == 1) {

    	 		echo "sudah berlangganan";
    	 	} else {

				 $user = Newsletter::findOrFail($id);
				 $user->status=1;
				 $user->save();
    	 	}
    	 }
    	 else 
    	 {

    	 	$subscribe = new Newsletter();
    	 	$subscribe->email = $req->email;
    	 	$subscribe->save();
    	 	echo "succes";
    	 
    	 }
    	
    }

    public function unsubscribe(Request $req)
    {

    	 $check = Newsletter::where('email',$req->email)->first();
    	 if($check) 
    	 {
    	 	$status= $check->status;
    	 	$id 	= $check->id;
    	 	if($status == 1) {

    	 		 $user = Newsletter::findOrFail($id);
				 $user->status=0;
				 $user->save();
				 echo "succes unreg";
    	 	} else {

				 echo "belum berlangganan";
    	 	}
    	 }
    	 else 
    	 {

    	 	echo "belum berlangganan";

    	 
    	 }
    	

		
		    	
    	

    }


    public function sendCompaign(Request $request)
    {
        $data = ['judul'=>'ini adalah judul nya ','desc'=>'ini adalah desc'];
        $check = Newsletter::where('email',$req->email)->first();
        $new = new Newsletter();

        dispatch(new NewsLetterMail($data) );
    }
    

}
