@extends('layout.admin')

@section('content')

<style>
.dashboard-title{
    font-size:28px;
    font-weight:700;
    margin-bottom:25px;
    padding-top:10px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}

.card-admin{
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 6px 20px rgba(0,0,0,0.08);
}

.card-admin h3{
    font-size:16px;
    color:#64748b;
    margin-bottom:10px;
}

.card-admin p{
    font-size:28px;
    font-weight:bold;
    color:#0f172a;
}
</style>

<div class="dashboard-title">
    Panel de Administración
</div>

<div class="cards">
    <div class="card-admin">
        <h3>Productos</h3>
        <p>24</p>
    </div>

    <div class="card-admin">
        <h3>Usuarios</h3>
        <p>12</p>
    </div>

    <div class="card-admin">
        <h3>Pedidos</h3>
        <p>8</p>
    </div>

    <div class="card-admin">
        <h3>Ventas</h3>
        <p>$3,450</p>
    </div>
</div>

@endsection