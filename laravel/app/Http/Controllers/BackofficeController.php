<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $produit = Product::all();

        //with('category')->get();


        //dd($produit);

        return view('backoffice.index', compact('produit'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            //'id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'picture'=>'',
            'weight' => 'required',
            'quantity' => 'required|min:0',
            'available' => 'required',
            'size' => 'required',
            'category_id' => 'required',
            'color' => 'required',
            'form' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/backoffice/index/create')
              ->withErrors($validator);
            //return back()->withErrors($validator)->withInput();
        }
else{
    $produit=new Product;
    //$produit->id =$request->input('id');
    $produit->name =$request-> Input('name');
    $produit->price = $request-> Input('price');
    $produit->picture = $request-> Input('picture');
    $produit->weight =$request-> Input('weight');
    $produit->quantity = $request->Input('quantity');
    $produit->available = $request->Input('available');
    $produit->size =$request->Input('size');
    $produit->categorie_id = $request->Input('categorie_id');
    $produit->color = $request->Input('color');
    $produit->form = $request->Input('form');
    $produit->save();



        }



        return redirect()->route('index.index')->with('success', 'Produit ajouté.');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $produit = Product::find($id);

        // show the view and pass the "produit" to it
        return View('backoffice.show')
            ->with('produit', $produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Product::findOrFail($id);

        return view('backoffice.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([

            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'quantity' => 'required',
            'available' => 'required',
            'size' => 'required',
            'category_id' => 'required',
            'color' => 'required',
            'form' => 'required'
        ]);

        Product::whereId($id)->update($validatedData);

        return redirect('/backoffice/index')->with('success', 'Produit mis à jour avec succèss');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Product::findOrFail($id);
        $produit->delete();

        return redirect('/backoffice/index')->with('success', 'Produit supprimé avec succèss');
    }

    //public function (){



}
