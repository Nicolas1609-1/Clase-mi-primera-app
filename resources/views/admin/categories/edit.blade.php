@extends('layout.admin')

@section('content')

<h1>Editar Categoría</h1>

<form action="{{ route('admin.categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <div style="margin-bottom:15px;">
        <label>Nombre</label><br>
        <input type="text" name="name" value="{{ $category->name }}">
    </div>

    <div style="margin-bottom:15px;">
        <label>Descripción</label><br>
        <textarea name="description">{{ $category->description }}</textarea>
    </div>

    <button type="submit">Actualizar</button>
</form>

@endsection