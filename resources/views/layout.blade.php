<!DOCTYPE html>
<html lang="es">

<head>
    <title>equiRENT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f2f2f2;
            color: #333;
        }

        .custom-header {
            background-color: #f04b19;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .custom-footer {
            background-color: #6fe065;
            color: white;
            padding: 3% 0;
            text-align: center;
            margin-top: 30px;
            box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.2);
        }

        .custom-sidebar {
            background-color: #6fe065;
            color: white;
            padding: 20px 0;
            min-height: 100vh;
            box-shadow: 6px 0 12px rgba(0, 0, 0, 0.2);
        }

        .custom-sidebar a.nav-link {
            color: white;
            transition: background-color 0.3s;
            padding: 15px 20px;
            border-radius: 5px;
            text-align: left;
            margin-bottom: 10px;
            display: block;
        }

        .custom-sidebar a.nav-link:hover {
            background-color: #f04b19;
        }

        .custom-sidebar a.nav-link.active {
            background-color: #f04b19;
        }

        .custom-content {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        /* Botón de cierre de sesión personalizado */
        .logout-btn {
            background-color: #6fe065;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div class="custom-header">
            <h1>equiRENT</h1>
            <h3>Sistema de administración de equiRENT</h3>
            <!-- Botón de cierre de sesión -->
            <div class="container mt-3 text-end">
                <a href="{{ route('logout') }}" class="btn btn-secondary logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </header>

    <main class="row">
        <section class="col-md-2 custom-sidebar">
            <nav class="nav flex-column">
                <a class="nav-link active" href="{{'/home'}}">Inicio</a>
                <a class="nav-link" href="{{'/sucursal'}}">Sucursal</a>
                <a class="nav-link" href="{{'/mant'}}">Mantenimiento</a>
                <a class="nav-link" href="{{'/prod'}}">Productos</a>
                <a class="nav-link" href="{{'/clientes'}}">Clientes</a>
                <a class="nav-link" href="{{'/admin'}}">Administración</a>
            </nav>
        </section>
        <section class="col-md-10">
            <div class="container custom-content">
                @yield('contenido')
            </div>
        </section>
    </main>

    <footer class="custom-footer">
        <p>Renta de Sanitarios Portátiles ideales para sus eventos.</p>
        <p>Si busca la Renta de Sanitarios Portátiles para cualquier tipo de fiesta o reunión, en EquiRent somos una empresa creada en 1985 especializada en el área.</p>
        <!-- ... (Resto del contenido) ... -->
    </footer>
</body>

</html>
