@extends('layouts.main')

@section('content')

    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
        <h2 class="card-title">Catégories</h2>
        <a class="btn btn-info" href="{{ route('index.index') }}">Liste produits</a>
        @foreach($categorie as $category)
            <div class="card-body">
                <p class="card-text" style="color: white">{{$category->description}}</p><br>
                <strong>Les produits de la catégorie:</strong>
                @foreach($category->products as $product)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> id: {{$product->id}} <br> nom:{{$product->name}} </li>
                    </ul>
                @endforeach
                <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Description
                    catégorie</a><br>
    @endforeach

@stop
