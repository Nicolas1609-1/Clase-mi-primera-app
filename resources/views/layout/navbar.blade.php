<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('product') }}">
            🛍️ TechStore
        </a>

        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('cart.index') }}" class="btn btn-warning fw-bold">
                🛒 Carrito
            </a>

            <a href="{{ url('product/create') }}" class="btn btn-outline-light">
                + Crear Producto
            </a>
        </div>
    </div>
</nav>