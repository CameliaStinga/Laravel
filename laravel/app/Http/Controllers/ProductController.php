<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function afficheProduct()
    {
        $produits = DB::select('select * from products');
        return view('listeproduitsBD', ['listeproduits' => $produits]);

    }

    public function detailProduit($id)
    {
        $produit = DB::select('select * from products WHERE id=?', [$id]);

        return view('product-details',
            ['produit' => $produit[0]]);
    }


    public function listenomProduits()
    {

        $produit = Product::orderBy('name')->get();
        return view('listenomProduits',['produit' => $produit]);
    }

    public function listeprixcroissantProduits()
    {

        $produit = Product::orderBy('price','asc')->get();
        return view('listeprixProduits',['produit' => $produit]);
    }

    public function nomprixProduit($id)
    {

        $produit = Product::find($id);
        return view('nomprixproduit',['produit' => $produit]);
    }


}
?>
