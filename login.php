<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style-login.css" />
    <link rel="shortcut icon" href="assets/logoDoeVidaIcone.ico" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <section>
        <div class="login-left">
            <img src="assets/logoDoeVidaFundoBranco.png" class="logo"/>
            <h1>Faça login e doe vida!</h1>
            <img src="assets/doctor.svg" class="login-doctors" alt="doutores">
        </div>
        <div class="login-right">
            <div class="login-card">
                <h1>LOGIN</h1>
                <form action="functions.php" method="POST">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="exemplo@gmail.com">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha">
                    <?php if (isset($_GET['invalidLogin']) == 'true') {
                     echo "<span class='invalidLogin'>Login inválido, tente novamente.</span>";
                    }
                    ?>
                    <a type="button" class="forgetpassword" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Esqueceu sua senha?
                    </a>
                    <div>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="staticBackdropLabel">Recuperar Senha</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Enviaremos um e-mail com mais informações sobre como redefenir sua senha.
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Digite seu e-mail"
                                            aria-label="Digite seu Email" aria-describedby="basic-addon2">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Login" name="logar" class="button-login">
                    <a href="register.php" class="register">Cadastre-se</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>