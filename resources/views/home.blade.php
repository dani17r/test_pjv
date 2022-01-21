@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
              <div class="card-header">Bienvenido {{ @Auth::user()->name }}</div>

              <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
                @endif

                @if(@Auth::user()->hasRole('admin'))
                  <!-- @include('products.index') -->
                  hola
                @else
                  @include('products.sell_product')
                @endif
              </div>

            </div>
        </div>
    </div>
</div>
@endsection
