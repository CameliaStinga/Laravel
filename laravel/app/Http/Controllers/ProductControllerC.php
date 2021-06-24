<?php

namespace App\Http\Controllers ;

class ProductControllerC extends Controller
{
    public function listeProduits() {

        //echo "Liste des produits";

        return view ('product-listC');
    }

    public function detailsProduit($id) {

        //echo "Fiche du produit . $id";

        return view ('product-detailsC',
        ['cleproduit'=>$id]);
    }
}
