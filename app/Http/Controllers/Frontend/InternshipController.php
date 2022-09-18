<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Onlineinternship;
use App\Models\Offlineinternship;
use App\Models\Specializeinternship;
use App\Models\Trustedinternship;


class InternshipController extends Controller
{
    public function OnlineInternship()
    {
        $Onlineinternship = OnlineInternship::latest()->get();
        return view('frontend.online-internship',compact('Onlineinternship'));
    }//End Method

    public function OnlineInternshipStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'qualification' => 'required',
        ],[
            'first_name.required' => 'This field is required. ',
            'last_name.required' => 'This field is required. ',
            'email.required' => 'This field is required. ',
            'phone.required' => 'This field is required. ',
            'address.required' => 'This field is required. ',
            'qualification.required' => 'This field is required. ',

        ]);

        Onlineinternship::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'qualification' => $request->qualification,
            
        ]);

         $notification = array(
            'message' => 'Form Submited Sucessfully, we will get back to you soon.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//End Method

    public function OfflineInternship()
    {
        $Offlineinternship = Offlineinternship::latest()->get();
        return view('frontend.offline-internship',compact('Offlineinternship'));
    }//End Method

     public function OfflineInternshipStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'qualification' => 'required',
        ],[
            'first_name.required' => 'This field is required. ',
            'last_name.required' => 'This field is required. ',
            'email.required' => 'This field is required. ',
            'phone.required' => 'This field is required. ',
            'address.required' => 'This field is required. ',
            'qualification.required' => 'This field is required. ',

        ]);

        Offlineinternship::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'qualification' => $request->qualification,
            
        ]);

         $notification = array(
            'message' => 'Form Submited Sucessfully, We will get back to you soon.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//End Method

    public function SpecializeInternship()
    {
        $Specializeinternship = Specializeinternship::latest()->get();
        return view('frontend.specialize-internship',compact('Specializeinternship'));
    }//End Method

    public function SpecializeInternshipStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'qualification' => 'required',
        ],[
            'first_name.required' => 'This field is required. ',
            'last_name.required' => 'This field is required. ',
            'email.required' => 'This field is required. ',
            'phone.required' => 'This field is required. ',
            'address.required' => 'This field is required. ',
            'qualification.required' => 'This field is required. ',

        ]);

        Specializeinternship::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'qualification' => $request->qualification,
            
        ]);

         $notification = array(
            'message' => 'Form Submited Sucessfully, We will get back to you soon',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//End Method

    public function TrustedInternshipView()
    {
        $Trustedinternship = Trustedinternship::latest()->get();
        return view('frontend.trusted-internship',compact('Trustedinternship'));
    }//End Method

    public function TrustedInternshipStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'qualification' => 'required',
        ],[
            'first_name.required' => 'This field is required. ',
            'last_name.required' => 'This field is required. ',
            'email.required' => 'This field is required. ',
            'phone.required' => 'This field is required. ',
            'address.required' => 'This field is required. ',
            'qualification.required' => 'This field is required. ',

        ]);

        Trustedinternship::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'qualification' => $request->qualification,
            
        ]);

         $notification = array(
            'message' => 'Form Submited Sucessfully, We will get back to you soon',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//End Method

}
