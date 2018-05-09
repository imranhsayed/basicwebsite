<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function get_home_page() {
	    return view('home');
    }

    function get_about_page() {
	    return view('about');
    }

    function get_contact_page() {
	    return view('contact');
    }
}
