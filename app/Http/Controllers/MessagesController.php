<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

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

    	// Only the validation is successful below line of code will be executed to add the data to messages table.
	    $message = new Message;
	    $message->name = $request->input(  'name');
	    $message->email = $request->input(  'email');
	    $message->message = $request->input(  'message');

	    // Save the message into database.
	    $message->save();

	    /**
	     * Once its saved to database redirect to homepage,
	     * with( 'success', 'Message Sent' ) will make session( 'success' ) with a value 'Message Sent' available
	     * in home page where it is being redirected to.
	     */
	    return redirect( url( '/' ) )->with( 'success', 'Message Sent' );
    }

	/**
	 * This function is called when the user lands to base_url/messages
	 */
    function get_messages() {
    	// Gets all the data from the 'messages' table and passes to views/messages/blade.php in $messages variable.
//    	$messages = \App\Message::all(); or,
	    $messages = Message::all();
		return view( 'messages', compact( 'messages' ) );
    }
}
