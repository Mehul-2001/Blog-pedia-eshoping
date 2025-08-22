<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogger_details;
use App\Models\Bussiness_details;
use App\Models\Post_detail;
use App\Models\Gadgetdetail;
use App\Models\Category;

class FrontController extends Controller
{
    // front home page 
    public function home()
    {
        // return view('front.pages.home');
      
        $carts = \Cart::instance('shopping')->content();
            $total=str_replace(',','',\Cart::total());
            $count=\Cart::count();
            $blogger=Blogger_details::where('status','=','Approve')->limit(3)->get();
            $bussiness_details = Bussiness_details::all();
            $post_details = Post_detail::where('status','=','Approve')->limit(3)->get();                                       ////////////
            $gadgetdetails = Gadgetdetail::where('status','=','Approve')->limit(4)->get();
            $gadgetdetails2 = Gadgetdetail::where('status','=','Approve')->limit(8)->get();

            return view('front.pages.home',compact('blogger','bussiness_details','post_details','gadgetdetails','gadgetdetails2','carts','total','count'));
    }

    // blogpost list page
    public function blogpost()
    {
        $category=category::all();
        $post_details = Post_detail::where('status','=','Approve')->get();
        $carts = \Cart::instance('shopping')->content();
            $total=str_replace(',','',\Cart::total());
            $count=\Cart::count(); 
        // $post_details = Post_detail::where('blogger_id','=',$id)->get();

        return view('front.pages.blog_posts.blog_post_list',compact('post_details','carts','total','count','category'));
        // return view('front.pages.blog_posts.blog_post_list');
    }

    // single blogpost page
    public function single_blogpost($id)
    {
        
    //     $post_details = \Request::all();
        $category=category::all();
        $post_details = Post_detail::where('id','=',$id)->where('status','=','Approve')->get();
        $carts = \Cart::instance('shopping')->content();
            $total=str_replace(',','',\Cart::total());
            $count=\Cart::count();
        return view('front.pages.blog_posts.single_blog_post',compact('post_details','carts','total','count','category'));
        // go on path and run post detail foreach
    }

    //order tracking page
    public function tracking()
    {
        $carts = \Cart::instance('shopping')->content();
        $total=str_replace(',','',\Cart::total());
        $count=\Cart::count();

        return view('front.pages.page.tracking',compact('carts','total','count'));
        
    }

    //contact page
    public function contact()
    {
        // $carts = \Cart::instance('shopping')->content();
        //     $total=str_replace(',','',\Cart::total());
        //     $count=\Cart::count();
        return view('front.pages.contact');
        // return view('front.pages.contact',compact('carts','total','count'));
    }
    
    //shop category ( bloggers_profile_category ) page
    public function bloggers_profile_category()
    {
        $blogger = Blogger_details::where('status','=','Approve')->get();
        $carts = \Cart::instance('shopping')->content();
            $total=str_replace(',','',\Cart::total());
            $count=\Cart::count();
        return view('front.pages.shop.bloggers_profile_category',compact('blogger','carts','total','count'));
        // return view('front.pages.shop.shop_category');
    }

    // bloggers_product_category (show the all product of perticuler blogger) page
    public function bloggers_product_category($id)
    {
        $category=category::all();
        $carts = \Cart::instance('shopping')->content();
            $total=str_replace(',','',\Cart::total());
            $count=\Cart::count();
        $gadgetdetails = Gadgetdetail::where('blogger_id','=',$id)->where('status','=','Approve')->get();
        return view('front.pages.shop.bloggers_product_category',compact('gadgetdetails','carts','total','count','category'));
        // return view('front.pages.shop.bloggers_product_category');
    }

    //cart page
   
    //single_product show page
    public function single_product($id)
    {
        $carts = \Cart::instance('shopping')->content();
            $total=str_replace(',','',\Cart::total());
            $count=\Cart::count();
        $gadgetdetails = Gadgetdetail::where('id','=',$id)->where('status','=','Approve')->get();
        return view('front.pages.shop.single_product_details',compact('gadgetdetails','carts','total','count'));
       
        // return view('front.pages.shop.single_product_details');
    }
// ----------------------------------------------------------------------------------------------------------------
    // checkout page 
    // public function checkout()
    // {

       

    //     return view('front.pages.shop.checkout');
    // }

    public function checkout()
    {
        $carts = \Cart::instance('shopping')->content();
        // return $carts;
        $total=str_replace(',','',\Cart::total());
        $count=\Cart::count();
        return view('front.pages.shop.checkout',compact('carts','total','count'))->with('message','Cart Updated');
    }
    public function checkout_index()
	{
        $carts = \Cart::instance('shopping')->content();
        return $carts;
		return view('front.pages.shop.shoping_cart')->with('carts',$carts);
    }


    public function tnc()
    {
        $carts = \Cart::instance('shopping')->content();
            $total=str_replace(',','',\Cart::total());
            $count=\Cart::count();

            return view('front.pages.page.tnc',compact('carts','total','count'));

    }
    
// ----------------------------------------------------------------------------------------------------------------
}
