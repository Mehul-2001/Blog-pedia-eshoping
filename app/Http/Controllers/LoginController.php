<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;

use App\Http\Requests\RegistrationRequest;
use App\Models\Blogger_details;


class LoginController extends Controller
{
    public function login()
    {
        return view('login-resistration.login');
    }

    public function resistration()
    {
        return view('login-resistration.resistration');
    }

    public function loginstore(LoginRequest $request)
      {
       
       
       
        // if(User::loginUser($request->email,$request->password))//Check UserName and Password
        // {
        //     return redirect()->route('Dashboard')->with('message','Login Successfully');
        // }
        // else
        // {
        //     return redirect()->back();
        // }
        
        if(User::loginUser($request->email,$request->password))
        {

            $role= User::where('email','=',$request->email)->pluck('role')->first();

            
           
            if($role==1){
                return redirect()->route('dashboard')->with('message','Admin Login Successfully');
            }
            elseif($role==2)
            {
                $user_id=User::where('email','=',$request->email)->pluck('id')->first();
               
                $blogger_id=Blogger_details::where('user_id','=',$user_id)->pluck('id')->first();
                if($blogger_id != "")
                {
                    //Dashboard
                   
                    
                    return redirect()->route('blogger',['id'=>$blogger_id])->with('message','Blogger Logined Successfully');
                }
                else
                {
                    //Edit Profile
                    // $u_id=Auth::user()->id;
                    // return $u_id;
                    return redirect()->route('editprofile',['id'=>\Auth::user()->id])->with('warning','Please Update Your Profile !');
                }
                
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->route('login')->with('error','Wrong ID And Password Entered !');
        }
   
    }
     public function logout()
     {
        \Auth::logout();
         return \Redirect::route('login')->with('warning','Logout Successfully');
     }

     //resistration blogger store
     public function blogger_store(RegistrationRequest $request)
    {

     
      
     $user = new User;
     $role = 2;
     $status = 0;
      
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->role = $role;
      $user->status = $status;
      
      $user->save();

      
      return redirect()->route('login')->with('message','Your Resistration is Complated');


    }
    // public function view()
    // {
    //   $Blogger_resistration=Blogger_resistration::all();
    //   return view('admin.pages.Blogger_resistration.view',compact('Blogger_resistration'));
    // }
    

    // public function edit($id)
    // {
    //   $Blogger_resistration=Blogger_resistration::where('id','=',$id)->get();
    //   return view('admin.pages.Blogger_resistration.edit',compact('Blogger_resistration'));
    // }
    // public function editstore(Request $request, $id)
    // {

    //     $Blogger_resistration = Blogger_resistration::find($id);            
    //   $Blogger_resistration->name = $request->input('name');
    //   $Blogger_resistration->phone = $request->input('phone');
    //   $Blogger_resistration->address = $request->input('address');
    //   $Blogger_resistration->bussiness_name = $request->input('bussiness_name');
    //   $Blogger_resistration->bussiness_address = $request->input('bussiness_address');
    //   $Blogger_resistration->save();

        
    //   return redirect()->route('viewBlogger_resistration')->with('message','Data Added Successfully');
    // }

    // public function destroy($id)
    // {
    //   $Blogger_resistration = Blogger_resistration::find($id);
    //   $Blogger_resistration -> delete();
    //     return \Redirect() -> back();
    // }

    
      
}
