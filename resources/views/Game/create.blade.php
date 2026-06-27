<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document</title>
</head>
<body>

<h1>Formulario Partidos</h1>

<form action="{{ route('game.store') }}" method="POST">

    @csrf

    <label>
        Fecha:
        <br>
        <input type="date" name="date">
    </label>
    <br><br>

    <label>
        Goles Local:
        <br>
        <input type="number" name="local_goals">
    </label>
    <br><br>

    <label>
        Goles Visitante:
        <br>
        <input type="number" name="away_goals">
    </label>
    <br><br>

    <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

</form>

</body>
</html>