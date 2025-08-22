<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\subscription;

class ContactController extends Controller
{
    public function add()
    {
      $carts = \Cart::instance('shopping')->content();
      $total=str_replace(',','',\Cart::total());
      $count=\Cart::count();
  
  return view('front.pages.contact.add',compact('carts','total','count'));

        // return view('front.pages.contact.add');
    }
    public function store(ContactRequest $request)
    {
      // $contact = \Request::all();
      // return $contact;
      $contact = new contact;
      
      $contact->message = $request->input('message');
      $contact->name = $request->input('name');
      $contact->contact = $request->input('contact');
      $contact->subject = $request->input('subject');
      $contact->save();
      return redirect()->route('contact')->with('message','Message Sended Successfully !');

    }
    public function view()
    {
      $contact=contact::all();
      return view('admin.pages.contact.view',compact('contact'));
    }
    

   

    public function destroy($id)
    {
      $contact = contact::find($id);
      $contact -> delete();
        return \Redirect() -> back()->with('warning','Deleted Successfully');
    }

    public function storeemail(Request $request)
    {
      // $contact = \Request::all();
      // return $contact;
      $subscription = new subscription;
      
      $subscription->email = $request->input('email');
     
      $subscription->save();
      return redirect()->back()->with('message','Subscription Added Succesfully !');

    }

    public function destroysubscription($id)
    {
      $subscription = subscription::find($id);
      $subscription -> delete();
        return \Redirect() -> back()->with('warning',' Email Deleted Successfully');
    }
}
