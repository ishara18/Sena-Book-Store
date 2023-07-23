<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    public function homeview()
    {
        return view ('home');
    }
    public function booksview()
    {
        return view ('books');
    }
    public function authorview()
    {
        return view ('author');
    }
    public function offersview()
    {
        return view ('offers');
    }
    public function aboutusview()
    {
        return view ('aboutus');
    }
    public function contactusview()
    {
        return view ('contactus');
    }
    public function registerloginview()
    {
        return view ('registerlogin');
    }
    public function createnewaccountview()
    {
        return view ('createnewaccount');
    }
    public function forgotpasswordview()
    {
        return view ('forgotpassword');
    }

}
