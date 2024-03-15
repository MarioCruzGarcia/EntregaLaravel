<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Aula</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control {
            margin-bottom: 20px;
        }
        .btn-primary {
            width: 100%;
        }
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Aula</h1>
        <form action="{{ route('aulas.store') }}" method="POST">
            @csrf <!-- {{ csrf_field() }} -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" value="{{ old('nombre') }}" type="text" class="form-control" id="nombre" placeholder="Nombre del aula">
            </div>
            <div class="mb-3">
                <label for="planta" class="form-label">Planta</label>
                <input name="planta" value="{{ old('planta') }}" type="text" class="form-control" id="planta" placeholder="Planta del aula">
            </div>
            <div class="mb-3">
                <label for="capacidad" class="form-label">Capacidad</label>
                <input name="capacidad" value="{{ old('capacidad') }}" type="number" class="form-control" id="capacidad" placeholder="Capacidad del aula">
            </div>
            <div class="mb-3">
                <label for="caracteristicas" class="form-label">Características</label>
                <textarea name="caracteristicas" class="form-control" id="caracteristicas" rows="3" placeholder="Características del aula">{{ old('caracteristicas') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
