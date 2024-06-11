<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('urls.Api_url');
    }
    
    public function index()
    {       
        return view('guest.index', ['apiUrl' => $this->apiUrl]);
    }

    public function privacy_policy(){

        return view('privacy_policy');
    }

    public function terms_and_conditions(){

        return view('terms_and_conditions');
    }
  
}

