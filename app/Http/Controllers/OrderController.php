<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class OrderController extends Controller
{
    public function add()
    {
        return view('front.pages.shop.checkout');
    }
    public function store(Request $request)
    {
      // $customer = \Request::all();
      // return $customer;
      $customer = new customer;
      
      $customer->first_name = $request->input('name');
      $customer->phone_number = $request->input('phone_number');
      $customer->email = $request->input('email');
      $customer->address = $request->input('address');
      $customer->state = $request->input('state');
      $customer->city = $request->input('city');
      $customer->zip = $request->input('zip');
      $customer->termsandcondition = $request->input('termsandcondition');
      
      
      $customer->save();
      return redirect()->route('checkout')->with('message','Order Placed Successfully');

    }
}
