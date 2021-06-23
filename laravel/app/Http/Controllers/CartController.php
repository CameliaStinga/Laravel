<?php

namespace App\Http\Controllers ;

class CartController extends Controller
{
    public function panier() {

        //echo "Panier";
        return view ('cart');
    }
}
