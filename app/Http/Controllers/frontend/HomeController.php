<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
return view('frontend.index');
    }
        public function about ()
    {
return view('frontend.about');
    }
           public function shop ()
    {
return view('frontend.shop');
    }
           public function contact ()
    {
return view('frontend.contact');
    }
}

