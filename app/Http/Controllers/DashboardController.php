<?php

namespace App\Http\Controllers;
use App\Models\Blogger_details;
use App\Models\Category;
use App\Models\Orderdetails;
use App\Models\Contact;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard()
    {
         // $blogger_details = Blogger_details::find($id);            
      
        // $blogger_details->status = "1";
      
        // $blogger_details->save();
        // return redirect()->route('viewcategory')->with('message','Category Added Successfully');

        $categories=Category::count();
        $blogger=Blogger_details::count();
        $order=Orderdetails::count();
        $contact=Contact::count();
        return view('admin.pages.dashboard.dashboard',compact('categories','blogger','order','contact'));
    }

    public function approve($id)
    {
        
        \DB::table('blogger_details')
        ->where('id','=',$id)
        ->update(['status'=>'Approve']);

        \DB::table('post_details')
        ->where('blogger_id','=',$id)
        ->update(['status'=>'Approve']);

        \DB::table('gadgetdetails')
        ->where('blogger_id','=',$id)
        ->update(['status'=>'Approve']);

        return redirect()->back()->with('message','Blogger Approved Successfully');


    }

    public function disapprove($id)
    {
        \DB::table('blogger_details')
        ->where('id','=',$id)
        ->update(['status'=>'Dis-Approve']);

        \DB::table('post_details')
        ->where('blogger_id','=',$id)
        ->update(['status'=>'Dis-Approve']);

        \DB::table('gadgetdetails')
        ->where('blogger_id','=',$id)
        ->update(['status'=>'Dis-Approve']);

        return redirect()->back()->with('Warning','blogger Diss-Approved Successfully');
    }

}

