@extends('layouts.main')

@section('content')

    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
        <h2 class="card-title">Commandes</h2>
        <a class="btn btn-info" href="{{ route('index.index') }}">Liste produits</a>
        @foreach($order as $commande)
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <p class="card-text" style="color: white">Description commande</p>
                    </div>
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">ID: {{$commande-> id}} </li>
                        <li class="list-group-item">Nombre: {{$commande->number}}</li>
                        <li class="list-group-item">ID client: {{$commande->customer_id}}</li>
                     </ul>

                       @csrf
               </div>
            <br>
                <strong>Les produits de la commande:</strong>

                @foreach($commande->products as $product)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> id: {{$product->id}} <br> nom:{{$product->name}} <br> Quantité Commandée: {{$product->pivot->quantity}} </li>
                    </ul>
    @endforeach
    @endforeach

@stop
