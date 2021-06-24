<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  afficheProduct(){
        return view ('product-list');

    }

    public function  detailProduit($id){
        return view ('product-details',
            ['cleproduit'=>$id]);
    }
}

?>
