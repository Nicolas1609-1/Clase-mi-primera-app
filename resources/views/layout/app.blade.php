<!DOCTYPE html>
<html>

<head>
    <title>Tienda Tecnológica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

@include('layout.navbar')

@yield('content')

@include('layout.footer')

</body>
</html>