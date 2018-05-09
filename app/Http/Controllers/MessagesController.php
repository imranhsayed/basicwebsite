<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function submit( Request $request ) {
	    /**
	     * Using the validate() method of Controller class.
	     * This method will not allow to execute the next line of code if validation does not complete and make
	     * $errors->all() available to the same page where the form is submitted.
	     */
    	$this->validate( request(), [
    		'name' => 'required',
		    'email' => 'required'
	    ] );
    	return 'success';
    }
}
