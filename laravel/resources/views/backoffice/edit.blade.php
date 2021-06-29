@extends('layouts.main')

@section('content')


<div class="card uper">
    <div class="card-header">
        Modifier le produit
    </div>

    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        <form method="post" action="{{ route('backoffice/indexProduct.update', $produit->id ) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Name :</label>
                <input type="text" class="form-control" name="name" value="{{ $produit->name }}"/>
            </div>
            <div class="form-group">
                <label for="cases">Price :</label>
                <input type="text" class="form-control" name="price" value="{{ $produit->price }}"/>
            </div>
            <div class="form-group">
                <label for="picture">Picture :</label>
                 <input type="text" class="form-control" name="picture" value="{{ $produit->picture }}"/>
            </div>
            <div class="form-group">
                <label for="cases">weight :</label>
                <input type="text" class="form-control" name="weight" value="{{ $produit->weight }}"/>
            </div>
            <div class="form-group">
                <label for="cases">quantity :</label>
                <input type="text" class="form-control" name="quantity" value="{{ $produit->quantity }}"/>
            </div>
            <div class="form-group">
                <label for="cases">available :</label>
                <input type="text" class="form-control" name="available" value="{{ $produit->available }}"/>
            </div>
            <div class="form-group">
                <label for="cases">size :</label>
                <input type="text" class="form-control" name="size" value="{{ $produit->size }}"/>
            </div>
            <div class="form-group">
                <label for="cases">categories_id :</label>
                <input type="text" class="form-control" name="categories_id" value="{{ $produit->categories_id }}"/>
            </div>
            <div class="form-group">
                <label for="cases">color :</label>
                <input type="text" class="form-control" name="color" value="{{ $produit->color }}"/>
            </div><div class="form-group">
                <label for="cases">form :</label>
                <input type="text" class="form-control" name="form" value="{{ $produit->form }}"/>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>

        </form>
    </div>
</div>




@stop
