@extends('layouts.main')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
        <div class="panel-body">
            <h3>id</h3>
            <p>valeur : <b>{{ $user['id'] }}</b></p>
            <h3>name</h3>
            <p>valeur : <b>{{ $user['name'] }}</b></p>
            <h3>price</h3>
            <p>valeur : <b>{{ $user['price'] }}</b></p>

            <h3>weight</h3>
            <p>valeur : <b>{{ $user['weight'] }}</b></p>

            <h3>quantity</h3>
            <p>valeur : <b>{{ $user['quantity'] }}</b></p>

            <h3>available</h3>
            <p>valeur : <b>{{ $user['available'] }}</b></p>

            <h3>size</h3>
            <p>valeur : <b>{{ $user['size'] }}</b></p>

            <h3>categories_id</h3>
            <p>valeur : <b>{{ $user['categories_id'] }}</b></p>

            <h3>color</h3>
            <p>valeur : <b>{{ $user['color'] }}</b></p>

            <h3>form</h3>
            <p>valeur : <b>{{ $user['form'] }}</b></p>

        </div>
    </div>


@endsection
