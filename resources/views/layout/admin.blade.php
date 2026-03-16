<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        *{
            box-sizing: border-box;
        }

        body{
            font-family: Arial;
            margin:0;
            background:#f3f4f6;
        }

        .sidebar{
            width:220px;
            height:100vh;
            background:#0f172a;
            color:white;
            position:fixed;
            top:0;
            left:0;
            padding:30px 20px;
            box-sizing:border-box;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            margin:10px 0;
        }

        .main{
            margin-left:220px;
            padding:30px;
            min-height:100vh;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin</h2>
    <a href="/admin">Dashboard</a>
    <a href="/product">Productos</a>
</div>

<div class="main">
    @yield('content')
</div>

</body>
</html>