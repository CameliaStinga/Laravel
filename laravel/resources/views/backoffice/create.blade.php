@extends('layouts.main')

@section('content')


    <div class="card-uper">
        <div class="card-header">
            <h2 class="card-title">Ajouter un produit</h2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif

        <div class="panel-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form class="" action="/backoffice/index" method="post">
                {{ csrf_field() }}

                 <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">id</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">name</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">price</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="price" placeholder="price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="picture" class="col-sm-2 col-form-label">picture</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="picture" placeholder="url-picture">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="weight" class="col-sm-2 col-form-label">weight</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="weight" placeholder="weight">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="quantity" class="col-sm-2 col-form-label">quantity</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="quantity" placeholder="quantity">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="available" class="col-sm-2 col-form-label">available</label>
                    <div class=" col-md-3">
                        <select name="available" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="size" class="col-sm-2 col-form-label">size</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="size" placeholder="size">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="categories_id" class="col-sm-2 col-form-label">categories_id</label>
                    <div class=" col-md-3">
                        <select name="categories_id" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="color" class="col-sm-2 col-form-label">color</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="color" placeholder="color">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">form</label>
                    <div class=" col-md-3">
                        <input type="text" class="form-control" name="form" placeholder="form">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

@endsection
