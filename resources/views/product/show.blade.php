<!DOCTYPE html>
<html>
<head>
    <title>Detalle Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#f8f9fa;">

<div class="container mt-5">

@php
$products = [
    1 => ['nombre'=>'Laptop Gamer','precio'=>2500,'descripcion'=>'Laptop Ryzen 7 16GB RAM RTX 3060','imagen'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8','estado'=>'Disponible'],
    2 => ['nombre'=>'iPhone 14','precio'=>3200,'descripcion'=>'iPhone 14 128GB','imagen'=>'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9','estado'=>'Disponible'],
    3 => ['nombre'=>'Monitor Curvo','precio'=>900,'descripcion'=>'Monitor 27" Curvo Full HD','imagen'=>'https://images.unsplash.com/photo-1587829741301-dc798b83add3','estado'=>'Agotado'],
    4 => ['nombre'=>'Teclado RGB','precio'=>350,'descripcion'=>'Teclado mecánico profesional','imagen'=>'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae','estado'=>'Disponible'],
    5 => ['nombre'=>'Mouse Gamer','precio'=>200,'descripcion'=>'Mouse 7200 DPI RGB','imagen'=>'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7','estado'=>'Disponible'],
];

$product = $products[$producto] ?? null;
@endphp

@if($product)
<div class="card shadow-lg p-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product['imagen'] }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2>{{ $product['nombre'] }}</h2>
            <h4 class="text-primary">${{ $product['precio'] }}</h4>

            <p class="mt-3">{{ $product['descripcion'] }}</p>

            @if($product['estado'] == 'Disponible')
                <span class="badge bg-success fs-6">Disponible</span>
            @else
                <span class="badge bg-danger fs-6">Agotado</span>
            @endif

            <div class="mt-4">
                <a href="{{ url('product') }}" class="btn btn-secondary">
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

</body>
</html>