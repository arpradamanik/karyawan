<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
        public function openhome(){
            return view('home');
        }
        public function mainhome(){
            return view('main');
        }
        public function abouthome(){
            return view('about');
        }
}
