<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulario Goles</h1>

<form action="{{ route('goal.store') }}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>

    <label>
        Descripción:
        <br>
        <input type="text" name="description">
    </label>
    <br><br>

    <label for="player_id">Jugador:</label>
    <select name="player_id" id="player_id" class="form-control">
        <option value="">Seleccione un jugador</option>
        @foreach($players as $player)
            <option value="{{$player->id}}">
                {{$player->name}}
            </option>
        @endforeach
    </select>
    <br><br>

    <label for="game_id">Partido:</label>
    <select name="game_id" id="game_id" class="form-control">
        <option value="">Seleccione un partido</option>
        @foreach($games as $game)
            <option value="{{$game->id}}">
                Partido {{$game->id}}
            </option>
        @endforeach

    </select>

    <br><br>

    <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

</form>

</body>
</html>