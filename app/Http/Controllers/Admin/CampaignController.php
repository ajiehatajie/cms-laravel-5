<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\NewsLetterMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNewLetters;
use App\Mail\SendCampaignMail;
use App\NewsLetter;
use App\User;
use App\Campaign;

class CampaignController extends Controller
{
    

    public function index(Request $request)
    { 
        
        $keyword = $request->get('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $data = Campaign::where('subject', 'LIKE', "%$keyword%")
                    ->orWhere('content', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $data = Campaign::paginate($perPage);
        }

    	return view('admin.campaign.index',compact('data'));
    }

    public function create()
    {
        return view('admin.campaign.create');
    }

     public function show($id)
    {
        $data = Campaign::findOrFail($id);
        return view('admin.campaign.show',compact('data'));
    }

    public function store(Request $request)
    {
         $this->validate($request, [
                'subject' => 'required',
                'content' => 'required',

                ]);

    	$data = $request->all();
    	//dispatch(new NewsLetterMail ($data) ); //jobs

    	$contact = NewsLetter::select('email')->where('status',1);
        $users   =  User::select('email')->where('subscribe',1);
        $merge    = $contact->union($users)->get();

    	foreach ($merge as $email ) 
    	{
    		 Mail::to($email->email)->queue(new SendCampaignMail($data) );
    	}
    	
    	
         Campaign::create($request->all());

         return redirect('admin/campaign');
      


    }

}
