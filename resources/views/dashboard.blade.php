<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TypeWords | Dashboard</title>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/home/main.css">
    <link rel="stylesheet" href="/css/animations/spin.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/gamemode') }}">Criar um nível de jogo</a>
                </li>
                <li>
                    <div class="home-title">
                        <h1 class="write no-selectable" data-write-time="120" data-write-delay="300">TypeWords</h1>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <section class="default-levels-list">
            <h2>Níveis</h2>
            <hr>
            <ul>
                @foreach ($default_game_stts as $setting)
                    <li><a class="level-button"
                            href="{{ url('/starter/default/' . $setting->id) }}">{{ $setting->name }}</a></li>
                @endforeach
            </ul>
        </section>

        <section class="custom-levels-list">
            <h2>Níveis Criados</h2>
            <hr>

            @if (count($custom_game_stts) === 0)
                <p>Você não possui nenhum nível criado</p>
            @endif

            <ul>
                @foreach ($custom_game_stts as $setting)
                    <li>
                        <a class="level-button custom"
                            href="{{ url('/starter/custom/' . $setting->id) }}">{{ $setting->name }}</a>
                        <form method="POST" action="{{ url("/gamemode/delete/$setting->id") }}">
                            @csrf
                            <button type="submit">
                                <img class="level-trash-icon" src="/assets/trash.svg" alt="trash">
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </section>
        <footer>
            <ul>
                <li>
                    &copy; Created by <a href="https://github.com/pultzlucas" target="_blank">pultzlucas</a>
                </li>
                <li>
                    v{{ config('app.version') }}
                </li>
                <li>
                    <a href="https://github.com/pultzlucas/typewords" target="_blank">
                        <img id="github-mark" src="/assets/github-mark.png" alt="Github mark">
                    </a>
                </li>
            </ul>
        </footer>
    </main>
    <script src="/js/write-animation.js"></script>
</body>

</html
