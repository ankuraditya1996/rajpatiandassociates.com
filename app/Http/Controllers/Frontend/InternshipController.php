<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Onlineinternship;
use App\Models\Offlineinternship;
use App\Models\Specializeinternship;
use App\Models\Trustedinternship;
use Auth;
use App\Models\User;
use App\Models\Articalpaymentstore;
use Image;
use App\Models\Vacancy;
use App\Models\Jobapplicant;


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

    //////////////////Intern Dashboard Functions////////////////////

    public function ViewArticalPayment()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('intern.submit_artical_payment',compact('user'));
    }

    public function ArticalPaymentStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'refrence_no' => 'required',
            'email' => 'required',
            'screenshot' => 'required',
        ],[
            'name.required' => 'Please Enter Your Name',
            'phone_number.required' => 'Please Enter Your Mobile Number',
            'refrence_no.required' => 'Please Enter Refrence Number',
            'email.required' => 'Please Enter Your email',
            'screenshot.required' => 'Please Upload The Screenshot',

        ]);

        $image = $request->file('screenshot');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(500,500)->save('upload/payment_ss/'.$name_gen);
        $save_url = 'upload/payment_ss/'.$name_gen;

        Articalpaymentstore::insert([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'refrence_no' => $request->refrence_no,
            'email' => $request->email,
            'screenshot' => $save_url,
        ]);

         $notification = array(
            'message' => 'Screenshot Updated Successfully, All the best with writing your article.',
            'alert-type' => 'success'
        );
        return redirect()->route('view.artical.submit')->with($notification);
    }

    public function SubmitArticleView()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('intern.submit_artical',compact('user'));
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function VacancyViewOnFrontEnd()
    {
        $vacancyfrontview = DB::table('vacancies')->select('id','job_title','job_discription','last_date')->get();
        return view('frontend.vacancy',compact('vacancyfrontview'));
    }

////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function SubmitJobApplicant(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'applying_for' => 'required',
        ],[
            'name.required' => 'This field is required. ',
            'phone_number.required' => 'This field is required. ',
            'applying_for.required' => 'This field is required. ',
        ]);

        Jobapplicant::insert([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'applying_for' => $request->applying_for,
        ]);

         $notification = array(
            'message' => 'Form Submited Sucessfully, we will get back to you soon.',
            'alert-type' => 'success'
        );
        return redirect()->route('view.vacancy')->with($notification);
    }
////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function VacacnyPage()
    {
        return view('frontend.vacancy');
    }//End Method   
}
