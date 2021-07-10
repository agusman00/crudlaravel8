<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    //
    public function index()
    {
        return view ('welcome');
    }
    public function myaccount()
    {
        return view ('log/myaccount');
    }
    public function myaccountk()
    {
        return view ('log/myaccountk');
    }
    public function myaccountd()
    {
        return view ('log/myaccountd');
    }
}
