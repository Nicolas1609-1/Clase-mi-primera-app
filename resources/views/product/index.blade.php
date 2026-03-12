@extends('layout.app')
@section('content')

<div class="container mt-5 mb-5">
    <h2 class="text-center section-title">Nuestros Productos</h2>

    <div class="row">
        @foreach($misProductos as $product)
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow-sm h-100">
                    @if($product->image)
                    <img src="{{asset('storage/'.$product->image)}}">
                    @else
                    <img src="https://cdn.mos.cms.futurecdn.net/MwkqZ8bCRNY4zK4yR8JTHX.jpg">
                    @endif

                    <div class="card-body text-center">
                        <h5 class="fw-bold">{{ $product->name }}</h5>
                        <p class="text-muted fs-5">${{ $product->price }}</p>

                   

                        <p class="mt-2">{{ $product->description }}</p>

                        <div class="mt-3">
                            <a href="{{ url('product/'.$product->id) }}" class="btn btn-dark w-100">
                                Ver Detalle
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection