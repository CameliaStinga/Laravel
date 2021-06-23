<?php

namespace App\Http\Controllers ;

class ProductController extends Controller
{
    public function listeProduits() {

        echo "Liste des produits";
    }

    public function detailsProduit($id) {

        echo "Fiche du produit . $id";
    }
}
