@extends('layout.admin')

@section('content')

<h1>Crear Categoría</h1>

<form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf

    <div style="margin-bottom:15px;">
        <label>Nombre</label><br>
        <input type="text" name="name" placeholder="Nombre de categoría">
    </div>

    <div style="margin-bottom:15px;">
        <label>Descripción</label><br>
        <textarea name="description" placeholder="Descripción de la categoría"></textarea>
    </div>

    <button type="submit">Guardar</button>
</form>

@endsection