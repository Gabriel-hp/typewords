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
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <main class="container">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/signup">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome de usuário</label>
                        <input class="form-control" name="username" type="text" autocomplete="off"
                            placeholder="Nome" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="email" autocomplete="off"
                            placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha de acesso</label>
                        <input class="form-control" name="password" type="password" autocomplete="off"
                            placeholder="Senha" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirme a senha</label>
                        <input class="form-control" name="password_confirm" type="password" autocomplete="off"
                            placeholder="Senha" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data de nascimento</label>
                        <input class="form-control" name="birth_date" type="date" autocomplete="off"
                            placeholder="Senha" required>
                    </div>

                    <button type="submit" class="btn btn-secondary" id="btn_create">Login</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>