<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //

    function form()
    {
        return view('myform');
    }
    function forminsert(Request $submit)
    {
        print_r($submit->all());
        $submit->validate(
            [
                'u_email' => 'required|email',
                'u_pass' => 'required'
                // 'password'=>'digits_between:2,4'

            ]


        );
    
}
}