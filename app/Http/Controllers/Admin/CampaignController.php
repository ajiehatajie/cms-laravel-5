<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\NewsLetterMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNewLetters;
use App\Mail\SendCampaignMail;
use App\NewsLetter;

class CampaignController extends Controller
{
    

    public function index()
    {
    	return view('admin.campaign.index');
    }

    public function postCampaign(Request $request)
    {
    	$data = $request->all();
    	//dispatch(new NewsLetterMail ($data) ); //jobs

    	$contact = NewsLetter::where('status',1)->get();
    	foreach ($contact as $email ) 
    	{
    		 Mail::to($email->email)->queue(new SendCampaignMail($data) );
    	}
    	
    	$this->index();
      


    }

}
