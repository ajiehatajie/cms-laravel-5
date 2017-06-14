<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Sarfraznawaz2005\VisitLog\Models\VisitLog as VisitLogModel;

class VisitorController extends Controller
{
    public function index()
   {
       $visitlogs = VisitLogModel::all();
       #dd($visitlogs);
       return view('admin.visitor.index', compact('visitlogs'));
   }

}
