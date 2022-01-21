@extends('layouts.app')

@section('content')
    <div class="row pb-4">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar 1 Producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('home') }}"> Regresar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
           <div class="card col-4">
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <strong>Nombre:</strong>
                 <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
               </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <strong>Precio:</strong>
                 <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Name">
               </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                 <strong>Impuesto:</strong>
                 <input type="text" name="tax" value="{{ $product->tax }}" class="form-control" placeholder="Tax">
               </div>
             </div>
             <div class="text-center my-2 col-12">
               <button type="submit" class="btn btn-primary col-12">Actualizar</button>
             </div>
           </div>
        </div>

    </form>
@endsection
