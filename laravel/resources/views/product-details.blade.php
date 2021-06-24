@extends('layouts.main')

@section('content')
    <h3 class="card-title">Produit</h3>


        <div class="card" style="width: 18rem;">

            <div class="card-body">

                <p class="card-text" style="color: white">Description produit</p>
            </div>

            <ul class="list-group list-group-flush">
                <img src="{{$produit->picture}}" class="card-img-top" alt="image">
                <li class="list-group-item">{{$produit-> id}}</li>
                <li class="list-group-item">{{$produit->name}}</li>
                <li class="list-group-item">{{$produit->price}}</li>
                <li class="list-group-item">{{$produit->weight}}</li>
                <li class="list-group-item">{{$produit->quantity}}</li>
                <li class="list-group-item">{{$produit->available}}</li>
                <li class="list-group-item">{{$produit->size}}</li>
                <li class="list-group-item">{{$produit->categories_id}}</li>
                <li class="list-group-item">{{$produit->color}}</li>
                <li class="list-group-item">{{$produit->form}}</li>
            </ul>

        </div>









@stop
