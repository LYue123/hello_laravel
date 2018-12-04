<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
    	return view('static_pages/home');
    }

    public function help(){
    	return view('static_pages/help');
    }

    public function about(){
    	return view('static_pages/about');
    }
}
//dcngettext(domain, msgid1, msgid2, n, category)