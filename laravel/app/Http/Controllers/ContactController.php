<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function  afficheContact(){
        return view ('contact');
    }
}
