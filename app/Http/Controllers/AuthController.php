<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\UpdateAuthRequest;
use Illuminate\Http\Request;
use App\Models\Auth;

class AuthController extends Controller
{
    public function RegistrationSubmit(Request $request){

        $validate = $request->validate([
              "name"=>'required',
              'dob'=>'required|date',
              'email'=>'required|email',
              'password'=>'required',
              
          ],
          ['name.required'=>"Name field is required.",
          'email.required'=>"Email Address field is required.",
          ]
      );

      if ($request->repeatpassword == $request->password)  
      {
  
      $userCheck = Auth::where('email',$request->email)->first();
      if($userCheck){
  
          return redirect()->back()->with('failed', 'Email already exist');
      }
      else{
  
        $Auth = new Auth();
          $Auth->name = $request->name;
          $Auth->email = $request->email;
          $Auth->phone = $request->phones.$request->phonee;
          $Auth->dob = $request->dob;
          $Auth->password = md5($request->password);
          $result = $Auth->save();
          if($result){
              return redirect()->route('login');
          }
          else{
              return redirect()->back()->with('failed', 'Registration Failed');
          }
      }
  
      }
      else{
        return redirect()->back()->with('failed', 'Password does not matched');
    }
    }

    public function LoginSubmit(Request $request){

    $loginCheck = Auth::where('email',$request->email)->where('password',md5($request->password))->first();

    if($loginCheck){
            return  redirect()->route('welcome');
        }
    else{

        return redirect()->back()->with('failed', 'Incorrect Information');
    }
    }

}
