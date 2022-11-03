<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Partner;
use App\Models\Associates;
use App\Models\Hradmin;
use App\Models\Officeass;
use Image;

class TeamController extends Controller
{
    public function PartnerView()
    {
        $viewpartner = DB::table('partners')->select('id','name','image')->get();
        return view('admin.partner_view',compact('viewpartner'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function PartnerAdd()
    {
        return view('admin.partner_add');
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function PartnerStore(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ],[
            'name.required' => 'Company/Individual name is required',
            'image.required' => 'Company/Individual image id required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(250,100)->save('upload/partner_image/'.$name_gen);
        $save_url = 'upload/partner_image/'.$name_gen;

        Partner::insert([
            'name' => $request->name,
            'image' => $save_url,
        ]);

         $notification = array(
            'message' => 'Partner Added Sucessfully',
            'alert-type' => 'success'
        );
        return redirect()->route('partner.view')->with($notification);
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function DeletePartner($id){
        $partner = Partner::findOrFail($id);
        $img = $partner->image;
        unlink($img);

        Partner::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Partner Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function AssociatesView()
    {
        $associates = DB::table('associates')->select('id','name','designation','image')->get();
        return view('admin.associates_view',compact('associates'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function AssociatesAdd()
    {
        return view('admin.associate_add');
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function AssociatesStore(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ],[
            'name.required' => 'Associate name is required',
            'designation.required' => 'Associate designation is required',
            'image.required' => 'Associate image is required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(314,429)->save('upload/associates_image/'.$name_gen);
        $save_url = 'upload/associates_image/'.$name_gen;

        Associates::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $save_url,
        ]);

         $notification = array(
            'message' => 'Associate Added Sucessfully',
            'alert-type' => 'success'
        );
        return redirect()->route('associates.view')->with($notification);
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function DeleteAssociates($id){
        $associates = Associates::findOrFail($id);
        $img = $associates->image;
        unlink($img);

        Associates::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Associate Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function HrAdminView()
    {
        $hradmin = DB::table('hradmins')->select('id','name','designation','image')->get();
        return view('admin.hradmin_view',compact('hradmin'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function HrAdminAdd()
    {
        return view('admin.hradmin_add');
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function HrAdminStore(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ],[
            'name.required' => 'Associate name is required',
            'designation.required' => 'Associate designation is required',
            'image.required' => 'Associate image is required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(314,429)->save('upload/associates_image/'.$name_gen);
        $save_url = 'upload/associates_image/'.$name_gen;

        Hradmin::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $save_url,
        ]);

         $notification = array(
            'message' => 'HR & Administration Added Sucessfully',
            'alert-type' => 'success'
        );
        return redirect()->route('hradmin.view')->with($notification);
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function DeleteHrAdmin($id){
        $hradmin = Hradmin::findOrFail($id);
        $img = $hradmin->image;
        unlink($img);

        Hradmin::findOrFail($id)->delete();
        $notification = array(
            'message' => 'HR & Administration Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function OfficeAssView()
    {
        $officeass = DB::table('officeasses')->select('id','name','designation','image')->get();
        return view('admin.officass_view',compact('officeass'));
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function OfficeAssAdd()
    {
        return view('admin.officeass_add');
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     public function OfficeAssStore(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ],[
            'name.required' => 'Associate name is required',
            'designation.required' => 'Associate designation is required',
            'image.required' => 'Associate image is required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(314,429)->save('upload/associates_image/'.$name_gen);
        $save_url = 'upload/associates_image/'.$name_gen;

        Officeass::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $save_url,
        ]);

         $notification = array(
            'message' => 'Office Assistant Added Sucessfully',
            'alert-type' => 'success'
        );
        return redirect()->route('officeass.view')->with($notification);
    }

    ////////////////////////////////////////////////////////// Next Function \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function DeleteOfficeAss($id){
        $officeass = Officeass::findOrFail($id);
        $img = $officeass->image;
        unlink($img);

        Officeass::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Office Assistant Deleted Sucessfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
