@extends ('layout.app')

@section ('content')

<div class="container mt-5 mb-5">
    <div class="card shadow-lg p-5 form-card">
        <h3 class="mb-4 text-center fw-bold">Registrar Nuevo Producto</h3>

        <form action="{{ url('product/store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
                @error('nombre')
                <span style="color: red; font-size:14px">
                 {{ $message}}
                </span>    
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control">
                   @error('precio')
                <span style="color: red; font-size:14px">
                 {{ $message}}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
                 @error('descripcion')
                <span style="color: red; font-size:14px">
                 {{ $message}}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Imagen (URL)</label>
                <input type="file" id="imagen" name="imagen" accept="image/*" class="form-control">
                 @error('imagen')
                <span style="color: red; font-size:14px">
                 {{ $message}}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Categoria</label>
                <select id="estado" name="categoria" class="form-select">
                    @foreach ($categoryList as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                 @error('categoria')
                <span style="color: red; font-size:14px">
                 {{ $message}}
                </span>
                @enderror
            </div>

            <button type="submit" class="btn-submit">
                Guardar Producto
            </button>
        </form>
    </div>
</div>

@endsection