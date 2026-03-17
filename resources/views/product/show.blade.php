@extends('layout.app')

@section('content')

<style>
    .show-section {
        background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
        min-height: 100vh;
        padding: 60px 0;
    }

    .product-detail-card {
        background: #ffffff;
        border: none;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
    }

    .product-image-box {
        background: linear-gradient(135deg, #0f172a, #1d4ed8);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 500px;
        padding: 30px;
    }

    .product-image-box img {
        max-height: 380px;
        width: 100%;
        object-fit: contain;
        border-radius: 18px;
        background: white;
        padding: 20px;
    }

    .product-info {
        padding: 50px 40px;
    }

    .product-tag {
        display: inline-block;
        background: #dbeafe;
        color: #1d4ed8;
        padding: 8px 14px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 18px;
    }

    .product-title {
        font-size: 42px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 18px;
    }

    .product-description {
        color: #475569;
        font-size: 18px;
        line-height: 1.7;
        margin-bottom: 24px;
    }

    .product-price {
        font-size: 34px;
        font-weight: 800;
        color: #2563eb;
        margin-bottom: 25px;
    }

    .product-extra {
        background: #f8fafc;
        border-radius: 16px;
        padding: 18px 20px;
        margin-bottom: 30px;
        color: #334155;
    }

    .btn-tech {
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        margin-right: 12px;
        transition: 0.3s ease;
    }

    .btn-primary-tech {
        background: #2563eb;
        color: white;
    }

    .btn-primary-tech:hover {
        background: #1d4ed8;
        color: white;
    }

    .btn-dark-tech {
        background: #0f172a;
        color: white;
    }

    .btn-dark-tech:hover {
        background: #1e293b;
        color: white;
    }

    @media (max-width: 768px) {
        .product-title {
            font-size: 30px;
        }

        .product-info {
            padding: 30px 24px;
        }

        .product-image-box {
            min-height: 320px;
        }
    }
</style>

<section class="show-section">
    <div class="container">
        <div class="card product-detail-card">
            <div class="row g-0">

                {{-- Imagen del producto --}}
                <div class="col-md-6">
                    <div class="product-image-box">
                        @if($producto->image)
                            <img src="{{ asset('storage/' . $producto->image) }}" alt="{{ $producto->name }}">
                        @else
                            <img src="https://cdn.mos.cms.futurecdn.net/MwkqZ8bCRNY4zK4yR8JTHX.jpg" alt="{{ $producto->name }}">
                        @endif
                    </div>
                </div>

                {{-- Información del producto --}}
                <div class="col-md-6">
                    <div class="product-info">

                        <span class="product-tag">Producto destacado</span>

                        <h1 class="product-title">
                            {{ $producto->name }}
                        </h1>

                        <p class="product-description">
                            {{ $producto->description }}
                        </p>

                        <div class="product-price">
                            ${{ $producto->price }}
                        </div>

                        {{-- Botón agregar al carrito --}}
                        <form action="{{ route('cart.add', $producto) }}" method="POST" class="mb-3">
                            @csrf
                            <button type="submit" class="btn-tech btn-primary-tech" style="border:none; cursor:pointer;">
                                🛒 Agregar al carrito
                            </button>
                        </form>

                        {{-- Información adicional --}}
                        <div class="product-extra">
                            Ideal para usuarios que buscan tecnología moderna, rendimiento y una experiencia de compra simple en TechStore.
                        </div>

                        {{-- Navegación --}}
                        <a href="{{ route('product.index') }}" class="btn-tech btn-dark-tech">
                            Volver a productos
                        </a>

                        <a href="{{ route('product.index') }}" class="btn-tech btn-primary-tech">
                            Seguir comprando
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection