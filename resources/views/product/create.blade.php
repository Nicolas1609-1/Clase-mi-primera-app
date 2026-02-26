<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#f8f9fa;">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Registrar Nuevo Producto</h3>

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
                <select class="form-control">
                    <option>Disponible</option>
                    <option>Agotado</option>
                </select>
            </div>

            <button class="btn btn-dark w-100">Guardar</button>

            <a href="{{ url('product') }}" class="btn btn-secondary w-100 mt-2">
                Volver
            </a>
        </form>
    </div>
</div>

</body>
</html>