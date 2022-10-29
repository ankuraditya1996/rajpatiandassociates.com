<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Onlineinternship;
use App\Models\Offlineinternship;
use App\Models\Specializeinternship;
use App\Models\Trustedinternship;

class CareerController extends Controller
{
    public function OnlineInternship()
    {
        $onlineinternship = DB::table('onlineinternships')->select('id','first_name','email','phone','address','qualification')->get();
        return view('admin.online_internship',compact('onlineinternship'));
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
   
    public function OnlineInternshipDataDel($id)
    {
        $cardel = Onlineinternship::findOrFail($id);

        Onlineinternship::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function OfflineInternship()
    {
        $offlineinternship = DB::table('offlineinternships')->select('id','first_name','email','phone','address','qualification')->get();
        return view('admin.offline_internship',compact('offlineinternship'));
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function OfflineInternshipDataDel($id)
    {
        $cardel = Offlineinternship::findOrFail($id);

        Offlineinternship::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function SpecializeInternship()
    {
        $specializeinternship = DB::table('specializeinternships')->select('id','first_name','email','phone','address','qualification')->get();
        return view('admin.specialize_internship',compact('specializeinternship'));
    }
////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function SpecializeInternshipDataDel($id)
    {
        $cardel = Specializeinternship::findOrFail($id);

        Specializeinternship::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function TrustedInternship()
    {
        $trustedinternship = DB::table('trustedinternships')->select('id','first_name','email','phone','address','qualification')->get();
        return view('admin.trusted_internship',compact('trustedinternship'));
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function TrustedInternshipDataDel($id)
    {
        $cardel = Trustedinternship::findOrFail($id);

        Trustedinternship::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function VacancyView()
    {
        return view('admin.post_vacancy');
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    
}
