<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #222;
        }

        .navbar {
            background: #0f172a;
            color: white;
            padding: 18px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-size: 24px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 15px;
        }

        .hero {
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            color: white;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px;
            gap: 40px;
        }

        .hero-text {
            max-width: 550px;
        }

        .hero-text h1 {
            font-size: 52px;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #dbeafe;
            line-height: 1.6;
        }

        .hero-buttons a {
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            margin-right: 15px;
            transition: 0.3s ease;
        }

        .btn-primary {
            background-color: #facc15;
            color: #111827;
        }

        .btn-primary:hover {
            background-color: #eab308;
        }

        .btn-secondary {
            border: 2px solid white;
            color: white;
        }

        .btn-secondary:hover {
            background-color: white;
            color: #0f172a;
        }

        .hero-image img {
            width: 480px;
            max-width: 100%;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.35);
        }

        .section {
            padding: 70px 60px;
        }

        .section-title {
            text-align: center;
            font-size: 34px;
            margin-bottom: 15px;
        }

        .section-subtitle {
            text-align: center;
            color: #555;
            margin-bottom: 45px;
            font-size: 17px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px 25px;
            border-radius: 14px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            text-align: center;
        }

        .card h3 {
            margin-bottom: 12px;
            color: #0f172a;
        }

        .card p {
            color: #666;
            line-height: 1.5;
        }

        .highlight {
            background: #111827;
            color: white;
            border-radius: 20px;
            margin: 60px;
            padding: 50px;
            text-align: center;
        }

        .highlight h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .highlight p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #d1d5db;
        }

        .footer {
            background: #0f172a;
            color: #cbd5e1;
            text-align: center;
            padding: 25px;
            margin-top: 40px;
        }

        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .navbar {
                padding: 18px 25px;
                flex-direction: column;
                gap: 10px;
            }

            .section {
                padding: 50px 25px;
            }

            .highlight {
                margin: 25px;
                padding: 35px 20px;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <h2>TechStore</h2>
        <div>
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('product.index') }}">Productos</a>
            <a href="{{ route('product.index') }}">Ofertas</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-text">
            <h1>La mejor tecnología en un solo lugar</h1>
            <p>
                Descubre laptops, accesorios, componentes y equipos modernos
                para estudiar, trabajar y jugar. Compra fácil, rápido y con estilo.
            </p>

            <div class="hero-buttons">
                <a href="{{ route('product.index') }}" class="btn btn-primary">Ver productos</a>
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Explorar catálogo</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('storage/imagen/y2uTbUUr9ahdiyCjRPs6qXgs5U0LYIFUWJa8NPa2.png') }}" alt="Producto destacado">
        </div>
    </section>

    <section class="section">
        <h2 class="section-title">¿Por qué comprar en TechStore?</h2>
        <p class="section-subtitle">Una experiencia moderna, rápida y enfocada en tecnología.</p>

        <div class="cards">
            <div class="card">
                <h3>Productos Premium</h3>
                <p>Seleccionamos tecnología moderna y útil para estudiantes, gamers y profesionales.</p>
            </div>

            <div class="card">
                <h3>Precios Competitivos</h3>
                <p>Encuentra equipos y accesorios con excelente relación calidad-precio.</p>
            </div>

            <div class="card">
                <h3>Compra Fácil</h3>
                <p>Navega de forma simple, revisa detalles y encuentra lo que necesitas rápidamente.</p>
            </div>

            <div class="card">
                <h3>Diseño Profesional</h3>
                <p>Una tienda hecha para ofrecer una experiencia visual limpia, moderna y confiable.</p>
            </div>
        </div>
    </section>

    <section class="highlight">
        <h2>Explora nuestro catálogo tecnológico</h2>
        <p>
            Revisa nuestros productos destacados y encuentra el equipo ideal para ti.
        </p>
        <a href="{{ route('product.index') }}" class="btn btn-primary">Ir a la tienda</a>
    </section>

    <footer class="footer">
        <p>© 2026 TechStore - Ecommerce desarrollado con Laravel</p>
    </footer>

</body>
</html>