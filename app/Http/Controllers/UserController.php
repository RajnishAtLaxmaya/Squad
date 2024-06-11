<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    protected $Api_url;

public function __construct()
    {
        $this->apiUrl = config('urls.Api_url');
    }
    
 public function index(Request $request){
    $mobileNumber = $request->session()->get('Mobile_Number');

    $user = DB::table('users')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
    $id = DB::table('users')->select('id')->where('Mobile_Number', $mobileNumber)->get();
   

    return view('user.user', ['users' => $user, 'Api_url' => $this->Api_url,'user_id'=>$id]);
}
  



public function userprofile(Request $request)
    {       

        $mobileNumber = $request->session()->get('Mobile_Number');

        $user = DB::table('users')->select('Name', 'Email','Avatar')->where('Mobile_Number', $mobileNumber)->get();
        $id = DB::table('users')->select('id')->where('Mobile_Number', $mobileNumber)->get();
              return view('user.user_profile', ['users' => $user, 'Api_url' => $this->Api_url,'user_id'=>$id]);
    }

    }