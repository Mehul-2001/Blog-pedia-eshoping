<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
use App\Models\Gadgetdetail;
use App\Models\Orderdetails;
use App\Models\Customer;

class RazorpayController extends Controller
{

    public function razorpay()
    {        
        return view('index');
    }

    public function payment(Request $request)
    {       
         //Insert Customer Details
         $customer = new customer;
         $customer->name = $request->input('name');
         $customer->phone_number = $request->input('phone_number');
         $customer->email = $request->input('email');
         $customer->address = $request->input('address');
         $customer->state = $request->input('state');
         $customer->city = $request->input('city');
         $customer->zip = $request->input('zip');
         $customer->termsandcondition = $request->input('termsandcondition');
         $customer->save();
         $customer_id=$customer->id;

            

        // RazorPay Payment Process
        $input = $request->all();        
        $api = new Api('rzp_test_oJr0LyXZINBwt2','07Vuum21ZHJHLYRwso5iEaW8');
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
               

            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return \Redirect::route('cart');
            }            
        }

        //Customer Mail
        
//Insert Orders 
$orders= \Cart::instance('shopping')->content();
foreach($orders as $order)
{
    $gadget_id=$order->id;
    $blogger_id=Gadgetdetail::where('id','=',$gadget_id)->pluck('blogger_id')->first();
    $post_id=Gadgetdetail::where('id','=',$gadget_id)->pluck('seller_post_id')->first();
    
    //Insert Order Details

    $orderdetails = new Orderdetails;

  

    $orderdetails->blogger_id = $blogger_id;
    $orderdetails->seller_post_id = $post_id;
    $orderdetails->customer_id = $customer_id;
    
    $orderdetails->gadget_name = $order->name;
    
    $orderdetails->gadget_price = $order->price;

    $orderdetails->qty = $order->qty;
    $orderdetails->total = $order->subtotal;
    $orderdetails->invoice_no= "0";

    
  
    
    // $gadget->aadhar = $request->input('aadhar'); for single image , replace with down code
  
    //   return $gadget_details;

    $orderdetails->save();

    $data = array('name'=>$order->name,
                  'price'=>$order->price,
                  'qty'=>$order->qty,
                  'total'=>$order->subtotal,
                  'email'=>$request->email);

    \Mail::send('front.pages.shop.mail', $data, function($message)use ($data)
    {
       $message->to($data['email'], 'Order Details')->subject
          ('Blogpedia E Shopping');
       $message->from('blogppedia.e.shoping@gmail.com','Blogpedia E Shopping');
    });
    
}
        \Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return \Redirect::route('home');
    }
}
