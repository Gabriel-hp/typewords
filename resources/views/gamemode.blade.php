<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Game Mode</title>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/home/header.css">
    <link rel="stylesheet" href="/css/gamemode.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <h1>
                        <a href="{{ url('/') }}"><-</a>
                    </h1>
                </li>
                <li>
                    <div class="home-title">
                        <h1 class="write" data-write-time="120" data-write-delay="300">TypeWords</h1>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/gamemode">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome do nível</label>
                        <input class="form-control" name="name" type="text" autocomplete="off" id="level_name_input" placeholder="Nome" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Modo de jogo</label>
                        <select class="form-select" name="gm">
                            <option value="RandomWords">RandomWords</option>
                            <option value="RandomLetters">RandomLetters</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Tempo</span>
                        <input class="form-control" name="sec" type="number" class="time-input" id="seconds-input" placeholder="segundos" required>
                        <input class="form-control" name="msec" type="number" id="time-input" id="milise-onds_input" placeholder="milisegundos" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Máximo de caracteres</label>
                        <input class="form-control" name="mwl" type="number" placeholder="nº de caracteres">
                    </div>

                    <button type="submit" class="btn btn-secondary" id="btn_create">Criar</button>
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="/js/write-animation.js"></script>
</body>

</html>