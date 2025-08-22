<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BloggerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Blogger_ProfileController;
use App\Http\Controllers\RazorpayController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

   
// Front //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Home page
        Route::get('/',[FrontController::class,'home'])->name('home');

        // blogpost page
        Route::get('Blogpost',[FrontController::class,'blogpost'])->name('blogpost');

        // single-blogpost page
        Route::get('Blogpost/single_blogpost/{id}',[FrontController::class,'single_blogpost'])->name('single_blogpost');

        // tracking page
        Route::get('About-Us',[FrontController::class,'tracking'])->name('tracking');

        // Contact page
        Route::get('Contact',[FrontController::class,'contact'])->name('contact');

        //contact form add
        Route::get('contact',[ContactController::class,'add'])->name('contact');
        Route::post('contact',[ContactController::class,'store'])->name('addcontact');
        Route::get('contact/view',[ContactController::class,'view'])->name('viewcontact');
        Route::get('contact/delete/{id}',[ContactController::class,'destroy'])->name('deletecontact');

        //terms and conditions
        Route::get('User/TermsAndCondition',[FrontController::class,'tnc'])->name('tnc');

        //subscription users
        Route::post('Subscription',[ContactController::class,'storeemail'])->name('addsubscription');

        

// shop folders route /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
        // bloggers_profile_category (shop category) page
        Route::get('bloggers_profile_category',[FrontController::class,'bloggers_profile_category'])->name('bloggers_profile_category');

        // bloggers_product_category (show the all product of perticuler blogger) page
        Route::get('bloggers_product_category/{id}',[FrontController::class,'bloggers_product_category'])->name('bloggers_product_category');

        // cart page
        Route::get('cart',[CartController::class,'view'])->name('cart');
        //added cart route logic are here
        Route::get('addcart/{id} ',[CartController::class,'store'])->name('addcart');
        Route::get('getcart',[CartController::class,'index'])->name('getcart');
        Route::post('cart/update',[CartController::class,'update'])->name('updatecart');
        Route::get('cart/delete/{rowid}',[CartController::class,'destroy'])->name('removecart');

        // single-product page
        
        Route::get('single_product/{id}',[FrontController::class,'single_product'])->name('single_product');

        // check-out page
        Route::get('checkout',[FrontController::class,'checkout'])->name('checkout');
        Route::get('get_checkout_cart',[FrontController::class,'checkout_index'])->name('get_checkout_cart');
        //customer details filled on order
        Route::get('customer_order_detail',[OrderController::class,'add'])->name('order_details_by_customer');
        Route::post('customer_order_detail',[OrderController::class,'store'])->name('addorder_details_by_customer');
        

// Blogger //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // Seller/blogger Edit Profile
        Route::get('blogger/editprofile/{id}',[BloggerController::class,'profile'])->name('editprofile');
        Route::post('blogger/editprofile/{id}',[BloggerController::class,'store_profile'])->name('editprofile');

        // Blogger Bussiness_detail Store
        Route::get('blogger/bussiness_detail/{id}',[BloggerController::class,'bussiness_detail'])->name('bussiness_detail');
        Route::post('blogger/bussiness_detail/{id}',[BloggerController::class,'store_bussiness'])->name('bussiness_detail');
        Route::get('blogger/bussiness_detail/view/{id}',[BloggerController::class,'view_bussiness_detail'])->name('view_bussiness_detail');

        // Blogger post_detail Store
        Route::get('blogger/post_detail/{id}',[Blogger_ProfileController::class,'post_detail'])->name('post_detail');
        Route::post('blogger/post_detail/{id}',[Blogger_ProfileController::class,'store_post'])->name('post_detail');
        Route::get('blogger/post_detail/view/{id}',[Blogger_ProfileController::class,'view_post_detail'])->name('view_post_detail');
        Route::get('Post_detail/delete/{id}',[Blogger_ProfileController::class,'destroypost'])->name('deletepost');

        // Blogger gadget_detail Store
        Route::get('blogger/gadget_detail/{post_id}/{blogger_id}',[Blogger_ProfileController::class,'gadget_detail'])->name('gadget_detail');
        Route::post('blogger/gadget_detail/{post_id}/{blogger_id}',[Blogger_ProfileController::class,'store_gadget'])->name('gadget_detail');
        Route::get('blogger/gadget_detail/view/{id}',[Blogger_ProfileController::class,'view_gadget_detail'])->name('view_gadget_detail');
        Route::get('gadget/delete/{id}',[Blogger_ProfileController::class,'destroygadget'])->name('deletegadget');

        //invoice
        Route::get('invoice',[BloggerController::class,'invoice'])->name('invoice');

        //blogger
        Route::get('blogger/dashboard/{id}',[BloggerController::class,'blogger'])->name('blogger');
        Route::get('blogger/view_bloggers',[Blogger_ProfileController::class,'view_bloggers'])->name('viewbloggers');

        //view order and gedget
        Route::get('blogger/gadgetdetail/{id}',[BloggerController::class,'view_gadget_detail_blogger'])->name('view_gadget_detail_blogger');
        Route::get('blogger/orders/{id}',[BloggerController::class,'view_order_detail_blogger'])->name('view_order_detail_blogger');
        Route::get('blogger/orders/invoice/{id}',[BloggerController::class,'view_invoice_detail_blogger'])->name('view_invoice_detail_blogger');
        Route::get('blogger/profile/{id}',[Blogger_ProfileController::class,'view_post_by_blogger'])->name('view_blogger_post');

        //finish
        


// Super Admin ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
Route::group(['middleware' => 'admin'], function()

{
   //dashboard
   Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

   //Blogger profile and invoice and gadget see by admin
   Route::get('admin/blogger/profile/{id}',[Blogger_ProfileController::class,'view_profile'])->name('view_blogger_profile');
   Route::get('admin/blogger/invoice',[Blogger_ProfileController::class,'view_blogger_invoice'])->name('view_blogger_invoice');
   Route::get('admin/blogger/gadgetdetail/{id}',[BloggerController::class,'view_gadget_detail_admin'])->name('view_gadget_detail_admin');
   Route::get('admin/blogger/orders/{id}',[BloggerController::class,'view_order_detail_admin'])->name('view_order_detail_admin');
  

   //category
   Route::get('category/add',[CategoryController::class,'add'])->name('addcategory');
   Route::post('category/add',[CategoryController::class,'store'])->name('addcategory');
   Route::get('category/view',[CategoryController::class,'view'])->name('viewcategory');
   Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('editcategory');
   Route::post('category/edit/{id}',[CategoryController::class,'editstore'])->name('editcategory');
   Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('deletecategory');

   //APPROVE / dis approve
   Route::get('admin/blogger/Aprove/{id}',[DashboardController::class,'approve'])->name('approve');
   Route::get('admin/blogger/Disaprove/{id}',[DashboardController::class,'disapprove'])->name('disapprove');

   //Subscription view
   Route::get('Subscription/view',[Blogger_ProfileController::class,'view_blogger_email'])->name('viewsubscription');
   Route::get('subscription/delete/{id}',[ContactController::class,'destroysubscription'])->name('deletesubscription');


}
);
        


// Login/Logout Routes /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //login
        Route::get('login',[LoginController::class,'login'])->name('login');
        Route::post('login',[LoginController::class,'loginstore'])->name('login');

        //logout
        Route::get('logout',[LoginController::class,'logout'])->name('logout');

        //resistration
        Route::get('registration',[LoginController::class,'resistration'])->name('resistration');
        Route::post('registration',[LoginController::class,'blogger_store'])->name('resistration');

// Payment gateway route ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //razor pay

    Route::get('razorpay', [RazorpayController::class, 'razorpay'])->name('razorpay');
    Route::post('razorpaypayment', [RazorpayController::class, 'payment'])->name('payment');
