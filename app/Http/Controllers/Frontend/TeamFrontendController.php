<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Partner;

class TeamFrontendController extends Controller
{
    public function PartnerFrontView()
    {
        $viewpartner = DB::table('partners')->select('id','name','image')->get();
        return view('frontend.partner',compact('viewpartner'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function AssociatesFrontView()
    {
        $associateview = DB::table('associates')->select('id','name','designation','image')->get();
        return view('frontend.advocate',compact('associateview'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function HrAdminFrontView()
    {
        $hrview = DB::table('hradmins')->select('id','name','designation','image')->get();
        return view('frontend.administration',compact('hrview'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function OfficeAssistantFrontView()
    {
        $officeass = DB::table('officeasses')->select('id','name','designation','image')->get();
        return view('frontend.assistant',compact('officeass'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
}
