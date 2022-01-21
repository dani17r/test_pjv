@extends('layouts.app')

@section('content')
<div class="row pb-4">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Factura de la compra</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Regresar atras</a>
        </div>
    </div>
</div>

<div class="row">
  <div class="card col-3 p-4">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <h4>{{$product->name}}</h4>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Precio:</strong>
        {{ $product->price }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Impuesto:</strong>
        {{ $product->tax }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Total:</strong>
        {{ $product->price + 4.02 }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Fecha:</strong>
        {{ $product->created_at->format('d-m-Y') }}
      </div>
      <div class="form-group">
        <strong>Hora:</strong>
        {{ $product->created_at->format('H') - 12}} : {{ $product->created_at->format('i')}}
      </div>
      <div class="form-group mt-1">
        <btn class="btn btn-success col-12">Guardar</btn>
      </div>
    </div>
  </div>
</div>
@endsection
