<!DOCTYPE html>
<html>
<head>
    <title>Detalle Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

@include('layout.navbar')

<div class="container mt-5 mb-5">

@php
$products = [
    1 => ['nombre'=>'Laptop Gamer','precio'=>2500,'descripcion'=>'Laptop Ryzen 7 16GB RAM RTX 3060','imagen'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8','estado'=>'Disponible'],
    2 => ['nombre'=>'iPhone 14','precio'=>3200,'descripcion'=>'iPhone 14 128GB','imagen'=>'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9','estado'=>'Disponible'],
    3 => ['nombre'=>'Monitor Curvo','precio'=>900,'descripcion'=>'Monitor 27" Curvo Full HD','imagen'=>'https://images.unsplash.com/photo-1587829741301-dc798b83add3','estado'=>'Agotado'],
];

$product = $products[$producto] ?? null;
@endphp

@if($product)
<div class="card detail-card shadow-lg p-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product['imagen'] }}" class="img-fluid rounded">
        </div>

        <div class="col-md-6">
            <h2 class="fw-bold">{{ $product['nombre'] }}</h2>
            <h3 class="text-primary price-tag">${{ $product['precio'] }}</h3>

            <p class="mt-4">{{ $product['descripcion'] }}</p>

            @if($product['estado'] == 'Disponible')
                <span class="badge bg-success fs-6">Disponible</span>
            @else
                <span class="badge bg-danger fs-6">Agotado</span>
            @endif

            <div class="mt-4">
                <a href="{{ url('product') }}" class="btn btn-dark btn-custom">
                    Volver
                </a>
            </div>
        </div>
    </div>
</div>
@else
<div class="alert alert-danger">
    Producto no encontrado
</div>
@endif

</div>

@include('layout.footer')>

</body>
</html>