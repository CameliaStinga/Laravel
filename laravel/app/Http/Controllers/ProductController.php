<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function  afficheProduct(){
        $produits = DB::select('select * from products');
        return view ('listeproduitsBD', ['listeproduits'=>$produits]);

    }

    public function  detailProduit($id){
        $produit = DB::select('select * from products WHERE id=?',[$id] );

        return view ('product-details',
            ['produit'=>$produit[0]]);
    }
}

?>
