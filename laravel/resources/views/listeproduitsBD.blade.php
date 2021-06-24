@extends('layouts.main')

@section('content')
    <h3 class="card-title">Catalogue</h3>

@foreach ($listeproduits as $product)

    </div>
    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description produit</p>
        </div>
        <ul class="list-group list-group-flush">

            <a href="/product/{{$product-> id}}"> <img src="{{$product->picture}}" class="card-img-top" alt="image"></a>
            <li class="list-group-item">{{$product-> id}}</li>
            <li class="list-group-item">{{$product->name}}</li>
            <li class="list-group-item">{{$product->price}}</li>
            <li class="list-group-item">{{$product->weight}}</li>
            <li class="list-group-item">{{$product->quantity}}</li>
            <li class="list-group-item">{{$product->available}}</li>
            <li class="list-group-item">{{$product->size}}</li>
            <li class="list-group-item">{{$product->categories_id}}</li>
            <li class="list-group-item">{{$product->color}}</li>
            <li class="list-group-item">{{$product->form}}</li>
        </ul>

    </div>

@endforeach




@stop
