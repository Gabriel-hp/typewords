<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Starter</title>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/starter.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <main class="container">
        <div class="card">
            <div class="card-body">
                <h2>Nível: {{ $game_setting->name }}</h2>

                <table class="table table-bordered">
                    <tr>
                        <td>Modo de jogo</td>
                        <td>{{ $game_setting->game_mode }}</td>
                    </tr>
                    <tr>
                        <td>Tempo por turno</td>
                        <td>{{ $game_setting->seconds }}:{{ $game_setting->miliseconds }}</td>
                    </tr>
                    <tr>
                        <td>Máximo de caracteres</td>
                        <td>{{ $game_setting->max_words_len }}</td>
                    </tr>
                </table>
                <div class="controls">
                    <a class="btn btn-secondary" href="{{ url('/') }}">Voltar para o dashboard</a>
                    <a class="btn btn-secondary"
                        href="{{ url('/game?') .
                            http_build_query([
                                'name' => $game_setting->name,
                                'gm' => $game_setting->game_mode,
                                'sec' => $game_setting->seconds,
                                'msec' => $game_setting->miliseconds,
                                'mwl' => $game_setting->max_words_len,
                            ]) }}">Jogar</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
