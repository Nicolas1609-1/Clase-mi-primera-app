@extends('layout.app')

@section('content')

@php
$products = [
    1 => ['nombre'=>'Laptop Gamer','precio'=>2500,'descripcion'=>'Laptop Ryzen 7','estado'=>'Disponible','img'=>'https://picsum.photos/600/400?1'],
    2 => ['nombre'=>'iPhone 14','precio'=>3200,'descripcion'=>'iPhone 14','estado'=>'Disponible','img'=>'https://picsum.photos/600/400?2'],
    3 => ['nombre'=>'Monitor Curvo','precio'=>900,'descripcion'=>'Monitor 27','estado'=>'Agotado','img'=>'https://picsum.photos/600/400?3'],
];
@endphp

<div class="container py-5">

@if(isset($products[$producto]))

<div class="card shadow-lg detail-card">

    <div class="row g-0">

        <div class="col-md-6">
            <img src="{{ $products[$producto]['img'] }}" class="img-fluid w-100">
        </div>

        <div class="col-md-6 p-4 d-flex flex-column justify-content-center">

            <h2 class="fw-bold mb-3">
                {{ $products[$producto]['nombre'] }}
            </h2>

            <p class="text-muted">
                {{ $products[$producto]['descripcion'] }}
            </p>

            <div class="price-tag text-primary mb-3">
                ${{ $products[$producto]['precio'] }}
            </div>

            @if($products[$producto]['estado'] == 'Disponible')

                <span class="badge bg-success mb-4">
                    Disponible
                </span>

            @else

                <span class="badge bg-danger mb-4">
                    Agotado
                </span>

            @endif

            <div>
                <a href="/productos" class="btn btn-dark btn-custom">
                    Volver
                </a>
            </div>

        </div>

    </div>

</div>

@else

<div class="alert alert-danger text-center">
    Producto no encontrado
</div>

@endif

</div>

@endsection