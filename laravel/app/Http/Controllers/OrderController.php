<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {

        $order = Order::all();

        //with('category')->get();


        //dd($order);

        return view('orders.index', compact('order'));


    }

    public function show($id)
    {
        $order = Order::find($id);

        // dd($order);

        // show the view and pass the "produit" to it
        return View('orders.show')
            ->with('order', $order);
    }

}
