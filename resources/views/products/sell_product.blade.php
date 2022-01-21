@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Impuestos</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->tax }}</td>
            <td>
              <form action="{{ route('buys.create') }}" method="POST">
                  @csrf
                  @method('POST')
                  <input name="id" value="{{ $product->id }}" style="display:none;">
                  <button type="submit" class="btn btn btn-info">Comprar</button>
              </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
