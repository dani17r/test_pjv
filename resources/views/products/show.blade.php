@extends('layouts.app')

@section('content')
    <div class="row pb-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Viendo 1 producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Regresar atras</a>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="card col-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Nombre:</strong>
            {{ $product->name }}
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
      </div>
    </div>
@endsection
