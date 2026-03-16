@extends('layout.admin')

@section('content')

<h1>Categorías</h1>

<a href="{{ route('admin.categories.create') }}">Nueva categoría</a>

<table border="1" cellpadding="10" style="margin-top:20px; width:100%;">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>   {{-- NUEVA COLUMNA --}}
        <th>Acciones</th>
    </tr>

@foreach($categories as $category)

<tr>
<td>{{ $category->id }}</td>
<td>{{ $category->name }}</td>
<td>{{ $category->description }}</td> {{-- MOSTRAR DESCRIPCIÓN --}}

<td>

<a href="{{ route('admin.categories.edit',$category) }}">Editar</a>

<form action="{{ route('admin.categories.destroy',$category) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button>Eliminar</button>
</form>

</td>

</tr>

@endforeach

</table>

@endsection