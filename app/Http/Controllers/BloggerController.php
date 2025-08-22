<?php

namespace App\Http\Controllers;
use App\Models\Blogger_details;
use App\Models\Bussiness_details;
use App\Models\Post_details;
use App\Models\Gadgetdetail;
use App\Models\Orderdetails;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\BussinessRequest;

class BloggerController extends Controller
{

  //Blogger_seller
  
            //bloggers_dashboard

           public function blogger($id)
           {
             
             $blogger_details = Blogger_details::where('id','=',$id)->get();
           return view('blogger.pages.dashboard.dashboard',compact('blogger_details','id'));
           }

   

            //bloggers_invoice
            public function invoice()
            {
              return view('blogger.pages.profile.invoice');
            }


            //edit profile add update profile
            public function profile($id)
            {
              return view('blogger.pages.profile.editprofile',compact('id'));
            }
        
            //seller_details_edit_profile
            public function store_profile(ProfileRequest $request,$id)
            {
              // $blogger = \Request::all();
              // return $blogger;
              $blogger_details = new Blogger_details;

              //image database path
              $files=$request->file('aadhar');
              $picName = rand().'.'.$files->getClientOriginalExtension(); //Insert path in database
              $files->move(base_path().'/public/blogger/image/aadhar/',$picName);
              //profile image
              $files1 =$request->file('profile_picture');
              $picName1 = rand().'.'.$files1->getClientOriginalExtension(); //Insert path in database
              $files1->move(base_path().'/public/blogger/image/profile_picture/',$picName1);
      
              $blogger_details->user_id=\Auth::user()->id;
              $blogger_details->name = $request->input('name');
              $blogger_details->email = $request->input('email');
              $blogger_details->phone = $request->input('phone');
              $blogger_details->address = $request->input('address');
              $blogger_details->description = $request->input('description');
              $blogger_details->status="Dis-Approve";
              // $blogger->aadhar = $request->input('aadhar'); for single image , replace with down code
              $blogger_details->aadhar = $picName;
              $blogger_details->profile_picture = $picName1;
      
              $blogger_details->save();
              $current_id=$blogger_details->id;
              // return $current_id;

              return \Redirect::route('bussiness_detail',['id'=>$current_id])->with('message','Profile Updated  Successfully');
            }

  //Bussiness_details_that_filled_by_seller

            // bussiness_detail_view
            public function bussiness_detail($id)
            {
              $category=category::all();
              return view('blogger.pages.profile.bussiness_detail',compact('id','category'));
            }

    
            //busssiness_details_store
            public function store_bussiness(BussinessRequest $request,$id)
            {
              // $bussiness = \Request::all();
              // return $bussiness;
              $bussiness_details = new Bussiness_details;

              //image database path
              $files=$request->file('bussiness_image');
              $picName = rand().'.'.$files->getClientOriginalExtension(); //Insert path in database
              $files->move(base_path().'/public/bussiness/image/',$picName);

              // $bussiness_details->blogger_id = $id;
              $bussiness_details->blogger_id=$id;
              $bussiness_details->bussiness_category = $request->input('bussiness_category');
              $bussiness_details->bussiness_name = $request->input('bussiness_name');
              $bussiness_details->bussiness_email = $request->input('bussiness_email');
              $bussiness_details->bussiness_phone = $request->input('bussiness_phone');
              $bussiness_details->bussiness_state = $request->input('bussiness_state');
              $bussiness_details->bussiness_city = $request->input('bussiness_city');
              $bussiness_details->youtube = $request->input('youtube');
              $bussiness_details->facebook = $request->input('facebook');
              $bussiness_details->instagram = $request->input('instagram');
              $bussiness_details->twiter = $request->input('twiter');
              $bussiness_details->bussiness_description = $request->input('bussiness_description');
              $bussiness_details->bussiness_terms = $request->input('bussiness_terms');
              // $bussiness->aadhar = $request->input('aadhar'); for single image , replace with down code
              $bussiness_details->bussiness_image = $picName;
              //   return $bussiness_details;

              $bussiness_details->save();

              $current_id=$bussiness_details->id;
              // return $current_id;

              return \Redirect::route('post_detail',['id'=>$id])->with('message','Bussiness Detail saved Successfully');
            }

            

    // admin/view_blogger's_bussiness_detail
     public function view_bussiness_detail($id)
     {
         $bussiness_details = Bussiness_details::where('blogger_id','=',$id)->get();
        return view('admin.pages.saler_profile.profile',compact('bussiness_details'));
     }




     // admin/view_blogger's_gadget_detail
     public function view_gadget_detail_admin($id)
     {
      // $gadgetdetails = \Request::all();
      // return $gadgetdetails;

      $gadgetdetails = Gadgetdetail::where('seller_post_id','=',$id)->get();
     
      
      return view('admin.pages.saler_profile.viewgadget',compact('gadgetdetails'));
     }



     // admin/view_blogger's_order_detail
     public function view_order_detail_admin($id)
     {
      $orderdetails = Orderdetails::where('blogger_id','=',$id)->get();
      return view('admin.pages.saler_profile.vieworder',compact('orderdetails'));
     }
// ------------------------------------------------------------------------------------------------------------//

     // blogger/view_blogger's_gadget_detail
     public function view_gadget_detail_blogger($id)
     {
      // $gadgetdetails = \Request::all();
      // return $gadgetdetails;

      $gadgetdetails = Gadgetdetail::where('seller_post_id','=',$id)->get();
     
      
      return view('blogger.pages.profile.viewgadget',compact('gadgetdetails'));
     }



     // blogger/view_blogger's_order_detail
     public function view_order_detail_blogger($id)
     {
      $orderdetails = Orderdetails::where('blogger_id','=',$id)->get();
      return view('blogger.pages.profile.vieworder',compact('orderdetails'));
     }

          // blogger/view_blogger's_order_detail
          public function view_invoice_detail_blogger($id)
          {
          
          $invoice_no=rand();

          $invoice = Orderdetails::where('id','=',$id)->pluck('invoice_no')->first();
          
           if($invoice=="0")
           {
            \DB::table('orderdetails')
            ->where('id','=',$id)
            ->update(['invoice_no'=>$invoice_no]);

             //Gadget Details
             $orderdetails = Orderdetails::where('id','=',$id)->get();
             
            
 
            //Customer Details
            $cus_id = Orderdetails::where('id','=',$id)->pluck('customer_id')->first();
            $customer= Customer::where('id','=',$cus_id)->get();
 
            //Blooger Details
            $b_id = Orderdetails::where('id','=',$id)->pluck('blogger_id')->first();
            $blogger= Blogger_details::where('id','=',$b_id)->get();
            
           
           
            return view('blogger.pages.profile.invoice',compact('orderdetails','customer','blogger'));
           }
           else{
             //Gadget Details
             $orderdetails = Orderdetails::where('id','=',$id)->get();
             
 
            //Customer Details
            $cus_id = Orderdetails::where('id','=',$id)->pluck('customer_id')->first();
            $customer= Customer::where('id','=',$cus_id)->get();
 
            //Blooger Details
            $b_id = Orderdetails::where('id','=',$id)->pluck('blogger_id')->first();
            $blogger= Blogger_details::where('id','=',$b_id)->get();
            
           
           
            return view('blogger.pages.profile.invoice',compact('orderdetails','customer','blogger'));
           }
           

           
          }

}

