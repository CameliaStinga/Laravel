@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description produit</p>
        </div>
        <ul class="list-group list-group-flush">

            <a href="/product/{{$produit-> id}}"> <img src="{{$produit->picture}}" class="card-img-top" alt="image"></a>
            <li class="list-group-item">ID: {{$produit-> id}} </li>
            <li class="list-group-item">Nom: {{$produit->name}}</li>
            <li class="list-group-item">Prix: {{$produit->price}}</li>
            <li class="list-group-item">Poids: {{$produit->weight}}</li>
            <li class="list-group-item">Quantité: {{$produit->quantity}}</li>
            <li class="list-group-item">Disponibilité: {{$produit->available}}</li>
            <li class="list-group-item">Taille: {{$produit->size}}</li>
            <li class="list-group-item">Catégorie: {{$produit->categories_id}}</li>
            <li class="list-group-item">Couleur: {{$produit->color}}</li>
            <li class="list-group-item">Forme: {{$produit->form}}</li>
        </ul>
    </div>
@endsection
