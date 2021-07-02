<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{

    public function index()
    {

        $categorie = Category::all();

        //with('category')->get();



        //dd($categorie);

        return view('categories.index', compact('categorie'));



    }

    public function show($id)
    {
        $categorie = Category::find($id);

        // dd($categorie);

        // show the view and pass the "produit" to it
        return View('categories.show')
            ->with('categorie', $categorie);
    }


}
