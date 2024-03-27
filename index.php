<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #00A5E0
    }
    .login {
        width: 100%;
        height: 100vh;
        aling-itens: center;
        justify-self: center;
        margin-top:100px;
        display:flex;
    }
</style>
<body style="background-color: #00A5E0">
    <div class="login">
        <div class= "container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h1>Acesso Restrito</h1>
                            <form action="login.php" method="POST">
                            <div>
                                <div class="mb-3">
                                    <label>CPF</label>
                                    <input type="text" name="cpf" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>