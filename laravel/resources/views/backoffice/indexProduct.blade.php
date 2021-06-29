@extends('layouts.main')

@section('content')


    <h3 class="card-title">Liste produits nom</h3>

    <a href="{{route('indexProduct.create')}}"  class="btn btn-primary">Nouveau produit</a>

    @foreach ($produit as $product)


    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description produit</p>
        </div>
        <ul class="list-group list-group-flush">

            <a href="/product/{{$product-> id}}"> <img src="{{$product->picture}}" class="card-img-top" alt="image"></a>
            <li class="list-group-item">ID: {{$product-> id}} </li>
            <li class="list-group-item">Nom: {{$product->name}}</li>
            <li class="list-group-item">Prix: {{$product->price}}</li>
            <li class="list-group-item">Poids: {{$product->weight}}</li>
            <li class="list-group-item">Quantité: {{$product->quantity}}</li>
            <li class="list-group-item">Disponibilité: {{$product->available}}</li>
            <li class="list-group-item">Taille: {{$product->size}}</li>
            <li class="list-group-item">Catégorie: {{$product->categories_id}}</li>
            <li class="list-group-item">Couleur: {{$product->color}}</li>
            <li class="list-group-item">Forme: {{$product->form}}</li>
        </ul>

    </div>

    @endforeach

@stop
