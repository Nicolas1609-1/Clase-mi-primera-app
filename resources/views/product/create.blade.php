@extends ('layout.app')

@section ('content')

<div class="container mt-5 mb-5">
    <div class="card shadow-lg p-5 form-card">
        <h3 class="mb-4 text-center fw-bold">Registrar Nuevo Producto</h3>

        <form>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen (URL)</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Estado</label>
                <select class="form-select">
                    <option>Disponible</option>
                    <option>Agotado</option>
                </select>
            </div>

            <button class="btn btn-dark w-100 btn-save">Guardar</button>

            <a href="{{ url('product') }}" class="btn btn-secondary w-100 mt-3 btn-save">
                Volver
            </a>
        </form>
    </div>
</div>

@endsection