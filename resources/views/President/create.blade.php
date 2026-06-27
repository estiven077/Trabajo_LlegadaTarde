<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulario Presidentes</h1>

<form action="{{ route('president.store') }}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>

    <label>
        Año:
        <br>
        <input type="number" name="year">
    </label>
    <br><br>

    <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

</form>

</body>
</html>