@extends('layouts.main')

@section('content')

    <div class="uper">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Catégorie {{$categorie->id}}</h2>
            </div>

        </div>
    </div>

    <div class="card" style="width: 18rem;">

        <div class="card-body">

            <p class="card-text" style="color: white">Description </p>
        </div>
        <ul class="list-group list-group-flush">


            <li class="list-group-item">ID: {{$categorie->id}} </li>
            <li class="list-group-item">Nom: {{$categorie->name}}</li>
            <li class="list-group-item">Description: {{$categorie->description}}</li>

        </ul>
    </div>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
@endsection
