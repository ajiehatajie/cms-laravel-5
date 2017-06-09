<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampaignController extends Controller
{
    

    public function index()
    {
    	return view('admin.campaign.index');
    }

    public function postCampaign(Request $request)
    {

    }
}
