<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class STMPComtroller extends Controller
{
    
    function mailsending(){
        $data=["name"=>"faizan","data"=>"this is my code"];
        Mail::send('mail', $data, function ($message) {
        
            $message->to('fa921865@gmail.com');
           
            $message->subject('Hello dev');
           
        });
    }
}
