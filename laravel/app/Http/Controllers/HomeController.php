<?php

namespace App\Http\Controllers ;

       class HomeController extends Controller
    {
        public function homePage() {

           //echo "Home page";
            return view ('homepageC');
        }
}

