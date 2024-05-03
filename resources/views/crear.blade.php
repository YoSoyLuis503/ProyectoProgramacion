<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Trabajo</title>
    <link href="{{ asset('css/crear.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1>Crear Nuevo Trabajo</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <div class="centrar-formulario">

    <form action="{{ route('guardar') }}" method="POST" class="mt-5">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título del trabajo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escribe el título">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del trabajo</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Escribe la descripción"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar trabajo</button>
    </form>

</div>
</body>

</html>
