<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TypeWords</title>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/game/game.css">
    <link rel="stylesheet" href="/css/game/game-over.css">
</head>

<body>
    <div id="settings" hidden>{{ $game_settings }}</div>
    <div id="game-over-container" hidden>
        <div class="card">
            <div class="card-body">
                <h1 class="game-over-message writer">Game Over</h1>
                <p id="type-error"></p>
                <p id="game-over-msg"></p>
                <table class="table table-bordered">
                    <tr>
                        <td>Pontos</td>
                        <td id="game-total-points"></td>
                    </tr>
                    <tr>
                        <td>Palavra</td>
                        <td id="game-expected-word"></td>
                    </tr>
                    <tr>
                        <td>Tempo</td>
                        <td id="game-end-time"></td>
                    </tr>
                </table>

                <div class="controls">
                    <a href="{{ Request::url() }}" class="btn btn-secondary">Novo Jogo</a>
                    <a class="btn btn-secondary" href="{{ url('/') }}">Voltar para o Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <header>
        <table class="table table-bordered table-sm">
            <thead>
                <tr class="table-secondary">
                    <td scope="col">Nível</td>
                    <td scope="col">Pontos</td>
                    <td scope="col">Caracteres</td>
                    <td scope="col">Tempo</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $name }}</td>
                    <td id="game-points">0</td>
                    <td id="word-length">0</td>
                    <td id="time-display">0</td>
                </tr>
            </tbody>
        </table>
    </header>
    <main class="container-fluid">
        <section>
            <div class="word-display-container">
                <p class="no-selectable" id="word-display"></p>
            </div>
            <input type="text" autocomplete="off" spellcheck="false" id="word-input">
            <p class="space-message">Pressione enter quando terminar de digitar.</p>
        </section>
        <a class="btn btn-danger" href="{{ url('/') }}">Sair</a>
    </main>
    <script type="module" src="/runtime/init.js"></script>
</body>

</html>
