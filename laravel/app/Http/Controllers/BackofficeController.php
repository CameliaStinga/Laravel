<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = Product::all();
        return view('backoffice/indexProduct',compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice/indexProduct.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'quantity' => 'required',
            'available' => 'required',
            'size' => 'required',
            'categories_id' => 'required',
            'color' => 'required',
            'form' => 'required'
        ]);
        $produit = Product::create ($validatedData);


        return redirect('/backoffice/indexProduct')->with('succes','Produit ajouté');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Product::findOrFail($id);

        return view('backoffice/indexProduct.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'quantity' => 'required',
            'available' => 'required',
            'size' => 'required',
            'categories_id' => 'required',
            'color' => 'required',
            'form' => 'required'
        ]);

        Product::whereId($id)->update($validatedData);

        return redirect('/backofficeindexProduct')->with('success', 'Produit mis à jour avec succèss');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Product::findOrFail($id);
        $produit->delete();

        return redirect('/backoffice/indexProduct')->with('success', 'Produit supprimé avec succèss');
    }
}
