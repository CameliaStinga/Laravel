<?php

namespace App\Http\Controllers ;

class ProductController extends Controller
{
    public function listeProduits() {

        //echo "Liste des produits";

        return view ('product-list');
    }

    public function detailsProduit($id) {

        //echo "Fiche du produit . $id";

        return view ('product-details'). $id;
    }
}
