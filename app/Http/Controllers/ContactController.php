<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class ContactController extends Controller
{
    public function index(){

        return view('website.contact');

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' =>    'required|min:3|max:50',
            'email' =>   'required|email',
            'subject' => 'required|min:2|max:255',
            'message' => 'required|min:3|max:5000',
        ]);


        $contanct = new Contact();

        $contanct->name = strip_tags($request->title);
        $contanct->email = strip_tags($request->email);
        $contanct->subject = strip_tags($request->subject);
        $contanct->message = strip_tags($request->message);
        $contanct->is_seen = 0;
        $contanct->save();

        return Redirect::back()->withFlashMessage('Message Sent Successfully');
    }

    public function getMacAddress1(){

        // PHP code to get the MAC address of Client
        $MAC = exec('getmac');

// Storing 'getmac' value in $MAC
        $MAC = strtok($MAC, ' ');

// Updating $MAC value using strtok function,
// strtok is used to split the string into tokens
// split character of strtok is defined as a space
// because getmac returns transport name after
// MAC address
        echo "MAC address of client is: $MAC";




// PHP program to get IP address of client
        $IP = $_SERVER['REMOTE_ADDR'];

// $IP stores the ip address of client
        echo "Client's IP address is: $IP";

// Print the ip address of client
        echo '<br>';
       // return substr(exec('getmac'), 0, 17);
        return substr(shell_exec('getmac'), 159,20);

    }
}
