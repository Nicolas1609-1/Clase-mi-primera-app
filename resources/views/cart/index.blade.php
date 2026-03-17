@extends('layout.app')

@section('content')

<div class="container mt-5 mb-5">
    <h1 class="mb-4">Carrito de Compras</h1>

    @php
        $total = 0;
    @endphp

    @forelse($cartItems as $item)
        @php
            $subtotal = $item->product->price * $item->quantity;
            $total += $subtotal;
        @endphp

        <div class="card mb-3 p-3">
            <div class="row align-items-center">
                <div class="col-md-2">
                    @if($item->product->image)
                        <img src="{{ asset('storage/' . $item->product->image) }}" class="img-fluid rounded" alt="{{ $item->product->name }}">
                    @else
                        <img src="https://cdn.mos.cms.futurecdn.net/MwkqZ8bCRNY4zK4yR8JTHX.jpg" class="img-fluid rounded" alt="{{ $item->product->name }}">
                    @endif
                </div>

                <div class="col-md-6">
                    <h4>{{ $item->product->name }}</h4>
                    <p>{{ $item->product->description }}</p>
                    <p><strong>Cantidad:</strong> {{ $item->quantity }}</p>
                </div>

                <div class="col-md-2">
                    <strong>${{ $subtotal }}</strong>
                </div>

                <div class="col-md-2">
                    <form action="{{ route('cart.remove', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">
            No hay productos en el carrito.
        </div>
    @endforelse

    <div class="card p-3 mt-4">
        <h3>Total: ${{ $total }}</h3>

        <a href="{{ route('product.index') }}" class="btn btn-dark mt-2">
            Seguir comprando
        </a>
    </div>
</div>

@endsection