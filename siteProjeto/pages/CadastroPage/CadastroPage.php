<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Página de Cadastro</title>
</head>
<body>
        <div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">
                <div class="card shadow-lg border-success rounded-4" style="max-width: 620px; width:100%; padding:2.5rem 2rem 2rem 2rem;">
                        <form action="processa_cadastro.php" method="POST">
                                <h1 class="text-success text-center fw-bold mb-4" style="font-size:2.2rem;">Cadastro</h1>
                                <div class="mb-3">
                                        <label for="nome" class="form-label text-success fw-semibold">Nome:</label>
                                        <input class="form-control form-control-lg border-success" placeholder="Digite seu nome" type="text" id="nome" name="nome" required>
                                </div>
                                <div class="mb-3">
                                        <label for="email" class="form-label text-success fw-semibold">E-mail:</label>
                                        <input class="form-control form-control-lg border-success" placeholder="seuemail@gmail.com" type="email" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                        <label for="pwd" class="form-label text-success fw-semibold">Senha</label>
                                        <input class="form-control form-control-lg border-success" placeholder="******" type="password" id="pwd" name="pwd" required>
                                </div>
                                <div class="mb-3">
                                        <label for="pwd2" class="form-label text-success fw-semibold">Confirmar Senha</label>
                                        <input class="form-control form-control-lg border-success" placeholder="******" type="password" id="pwd2" name="pwd2" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100 mt-3" style="font-size:1.2rem; font-weight:600; border-radius:0.7rem;">Cadastrar</button>
                        </form>
                </div>
        </div>
</body>
</html>