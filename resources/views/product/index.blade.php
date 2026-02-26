<!DOCTYPE html>
<html>
<head>
    <title>Tienda Tecnológica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card:hover {
            transform: scale(1.03);
            transition: 0.3s;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('product') }}">
            🛍️ TechStore
        </a>
        <a href="{{ url('product/create') }}" class="btn btn-outline-light">
            + Crear Producto
        </a>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Nuestros Productos</h2>

    @php
        $products = [
            ['id'=>1,'nombre'=>'Laptop Gamer','precio'=>2500,'descripcion'=>'Laptop Ryzen 7 16GB RAM RTX 3060','imagen'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8','estado'=>'Disponible'],
            ['id'=>2,'nombre'=>'iPhone 14','precio'=>3200,'descripcion'=>'iPhone 14 128GB','imagen'=>'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9','estado'=>'Disponible'],
            ['id'=>3,'nombre'=>'Monitor Curvo','precio'=>900,'descripcion'=>'Monitor 27" Curvo Full HD','imagen'=>'https://images.unsplash.com/photo-1587829741301-dc798b83add3','estado'=>'Agotado'],
            ['id'=>4,'nombre'=>'Teclado RGB','precio'=>350,'descripcion'=>'Teclado mecánico profesional','imagen'=>'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae','estado'=>'Disponible'],
            ['id'=>5,'nombre'=>'Mouse Gamer','precio'=>200,'descripcion'=>'Mouse 7200 DPI RGB','imagen'=>'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7','estado'=>'Disponible'],
        ];
    @endphp

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card shadow h-100">
                    <img src="{{ $product['imagen'] }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    <div class="card-body">
                        <h5>{{ $product['nombre'] }}</h5>
                        <p class="text-muted">${{ $product['precio'] }}</p>

                        @if($product['estado'] == 'Disponible')
                            <span class="badge bg-success">Disponible</span>
                        @else
                            <span class="badge bg-danger">Agotado</span>
                        @endif

                        <div class="mt-3">
                            <a href="{{ url('product/'.$product['id']) }}" class="btn btn-dark w-100">
                                Ver Detalle
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>