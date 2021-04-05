@extends('dash-layouts.app')

@section('container-fluid')
<div class="container h-75">
    <div class="card w-75">
      <div class="card-body">
        <h5 class="card-title">{{$product->producto}}</h5>
        <p class="card-text">{{$product->descripcion}}</p>
        <hr>
        <p>{{$product->precio}}</p>
        <p>{{$product->market->supermarket}}</p>

        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Agregar</a>
      </div>
    </div>
</div>




@endsection