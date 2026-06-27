<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulario Equipos</h1>

<form action="{{ route('team.store') }}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>

    <label>
        Ciudad:
        <br>
        <input type="text" name="city">
    </label>
    <br><br>

    <label>
        Estadio:
        <br>
        <input type="text" name="stadium">
    </label>
    <br><br>

    <label>
        Capacidad:
        <br>
        <input type="number" name="capacity">
    </label>
    <br><br>

    <label>
        Año de Fundación:
        <br>
        <input type="number" name="year_of_fundation">
    </label>
    <br><br>

    <label for="president_id">Presidente:</label>
    <select name="president_id" id="president_id" class="form-control">
        <option value="">Seleccione un presidente</option>
        @foreach($presidents as $president)
            <option value="{{$president->id}}">
                {{$president->name}}
            </option>
        @endforeach
    </select>
    <br><br>

    <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

</form>

</body>
</html>