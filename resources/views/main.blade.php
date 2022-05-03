<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Typewords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/home/header.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/signup') }}">Registrar</a>
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
    </main>
    
    <script src="/js/write-animation.js"></script>
</body>
</html>