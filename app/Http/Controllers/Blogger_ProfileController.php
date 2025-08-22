<?php

namespace App\Http\Controllers;
use App\Models\Blogger_details;
use App\Models\Bussiness_details;
use App\Models\Post_detail;
use App\Models\Gadgetdetail;
use App\Models\subscription;
use App\Http\Requests\PostRequest;
use App\Http\Requests\GadgetRequest;

use Illuminate\Http\Request;

class Blogger_ProfileController extends Controller
{

//Admin_views_sellers/Blogger_data_by_this_controller

    //admin/view_seller_profile
          public function view_profile($id)
          {
            $blogger=Blogger_details::where('id','=',$id)->get();
            $bussiness_details = Bussiness_details::where('blogger_id','=',$id)->get();
            $post_details = Post_detail::where('blogger_id','=',$id)->get();                                       ////////////
            $status=Blogger_details::where('id','=',$id)->pluck('status')->first();
            return view('admin.pages.saler_profile.profile',compact('blogger','bussiness_details','post_details','status'));
          }

    //admin/view_blogger_invoice
          public function view_blogger_email()
          {
            $subscription=subscription::all();
      return view('admin.pages.saler_profile.subscription',compact('subscription'));
           
          }

    // admin/view_all_blogger_detail_'eye_icone'_page
          public function view_bloggers()
          {
            $blogger_details = Blogger_details::all();
            return view('admin.pages.saler_profile.view_blogger_details',compact('blogger_details'));
          }

     // admin/view_blogger's_bussiness_detail_in_profile_page(left_side_up)
     public function view_bussiness_detail($id)
    {
        $bussiness_details = Bussiness_details::where('id','=',$id)->get();
    return view('admin.pages.saler_profile.profile',compact('bussiness_details'));
    }

    //admin_view_post_details_in_profile_page(left_side_down)
    public function view_post_detail($id)
    {
      
        $post_details = Post_detail::where('blogger_id','=',$id)->get();  
        return view('admin.pages.saler_profile.profile',compact('post_details','id'));

    }

    //post_details_that_filled_by_seller

            //post_details_store
            public function store_post(PostRequest $request,$id)
            {
              // $post = \Request::all();
              // return $post;
              $post_details = new Post_detail;

              //image database path
              $files=$request->file('post_image');
              $picName = rand().'.'.$files->getClientOriginalExtension(); //Insert path in database
              $files->move(base_path().'/public/post/image/',$picName);

              $post_details->blogger_id = $id;
              $post_details->category_id = '1';
              
              $post_details->post_name = $request->input('post_name');
              $post_details->post_topic = $request->input('post_topic');
              $post_details->youtube = $request->input('youtube');
              $post_details->facebook = $request->input('facebook');
              $post_details->instagram = $request->input('instagram');
              $post_details->twiter = $request->input('twiter');
              $post_details->post_description = $request->input('post_description');
              $post_details->status="Dis-Approve";
              
              // $post->aadhar = $request->input('aadhar'); for single image , replace with down code
              $post_details->post_image = $picName;
              //   return $post_details;

              $post_details->save();

              //return redirect()->back();
              $current_id=$post_details->id;
              // return $current_id;

              

              return \Redirect::route('gadget_detail',['post_id'=>$current_id,'blogger_id'=>$id])->with('message','Post Saved Succesfully');
            }

            // post_detail_form_view
            public function post_detail($id)
            {
            
              return view('blogger.pages.profile.post_detail',compact('id'));
            }

            //Post Detail Delete

            public function destroypost($id)
            {
              $post_details = Post_detail::find($id);
              $post_details -> delete();
                return \Redirect() -> back()->with('message','Post Deleted Successfully');
            }
            
     

            //gadget_details_that_filled_by_seller
            public function gadget_detail($post_id,$blogger_id)
            {
              
              return view('blogger.pages.profile.gadget_detail',compact('post_id','blogger_id'));
            }
            //gadget_details_store
            public function store_gadget(GadgetRequest $request,$post_id,$blogger_id)
            {
              // $gadget = \Request::all();
              // return $gadget;
              $gadgetdetails = new Gadgetdetail;

              //image database path
              $files=$request->file('gadget_image');
              $picName = rand().'.'.$files->getClientOriginalExtension(); //Insert path in database
              $files->move(base_path().'/public/gadget/image/',$picName);

              $gadgetdetails->blogger_id = $blogger_id;
              $gadgetdetails->seller_post_id = $post_id;
              
              $gadgetdetails->gadget_name = $request->input('gadget_name');
              
              $gadgetdetails->gadget_price = $request->input('gadget_price');
              $gadgetdetails->gadget_description = $request->input('gadget_description');
              $gadgetdetails->status="Dis-Approve";
              
              // $gadget->aadhar = $request->input('aadhar'); for single image , replace with down code
              $gadgetdetails->gadget_image = $picName;
              //   return $gadget_details;

              $gadgetdetails->save();

              return redirect()->back()->with('message','Gadget Saved Successfully');
            }

            // gadget_detail_view
            public function view_gadget_detail($post_id,$blogger_id)
            {
              return view('admin.pages.saller_profile.viewgadget',compact('post_id','blogger_id'));
            }

             //gadget Delete

             public function destroygadget($id)
             {
               $gadgetdetails = Gadgetdetail::find($id);
               $gadgetdetails -> delete();
                 return \Redirect() -> back()->with('message','Gadget Deleted Successfully');
             }

            //blogger/view_their_own_post
          public function view_post_by_blogger($id)
          {
            $blogger=Blogger_details::where('id','=',$id)->get();
            $bussiness_details = Bussiness_details::where('blogger_id','=',$id)->get();
            $post_details = Post_detail::where('blogger_id','=',$id)->get();                                       ////////////
            $status=Blogger_details::where('id','=',$id)->pluck('status')->first();
            return view('blogger.pages.profile.viewpost',compact('blogger','bussiness_details','post_details','status'));
          }

          
}
