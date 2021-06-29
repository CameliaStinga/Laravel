@extends('layouts.main')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Formulaire Produit</h2>
    </div>
    <div class="panel-body">
        <form class="" action="/backoffice/formulaireProduit" method="post">
            {{ csrf_field() }}
            <div class="form-group col-md-3">
                <label for="id">id</label>
                <input type="text" class="form-control" name="id" placeholder="id">
                <label for="name">lastname</label>
                <input type="text" class="form-control" name="name" placeholder="name">
                <label for="price">price</label>
                <input type="text" class="form-control" name="price" placeholder="price">
                <label for="weight">weight</label>
                <input type="text" class="form-control" name="weight" placeholder="weight">
                <label for="quantity">quantity</label>
                <input type="text" class="form-control" name="quantity" placeholder="quantity">
                <label for="available">available</label>
                <select name="available" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                 </select>
                <label for="size">size</label>
                <input type="text" class="form-control" name="size" placeholder="size">
                <label for="categories_id">categories_id</label>
                <select name="categories_id" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label for="id">color</label>
                <input type="text" class="form-control" name="color" placeholder="color">
                <label for="name">form</label>
                <input type="text" class="form-control" name="form" placeholder="form">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
