<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Series;
use App\PostHit;
use App\Page;
use Carbon\Carbon;
Use Session;

class PageController extends Controller
{
    
    public function index (Page $page)
    {
    	//dd($page);
    	 \VisitLog::save();
      return view('promo.page-detail',compact('page'));
    }
}
