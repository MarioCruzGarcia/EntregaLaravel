<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Alumno</h1>
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf <!-- {{ csrf_field() }} -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input name="nombre" value="{{ old('nombre') }}" type="text" class="form-control" id="nombre" placeholder="Nombre del alumno">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input name="apellidos" value="{{ old('apellidos') }}" type="text" class="form-control" id="apellidos" placeholder="Apellidos del alumno">
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input name="dni" value="{{ old('dni') }}" type="text" class="form-control" id="dni" placeholder="DNI del alumno">
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha de Nacimiento del alumno">
            </div>
            <div class="mb-3">
                <label for="numero_matricula" class="form-label">Número de Matrícula</label>
                <input name="numero_matricula" value="{{ old('numero_matricula') }}" type="text" class="form-control" id="numero_matricula" placeholder="Número de Matrícula del alumno">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="email" placeholder="Correo electrónico del alumno">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // Initialize Select2
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
</body>
</html>
