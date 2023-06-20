<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-register.css" />
    <link rel="shortcut icon" href="assets/logoDoeVidaIcone.ico" type="image/x-icon">
    <title>Cadastre-se</title>
</head>

<body>
    <main>
        <div class="registerLeft">
            <img src="assets/register.svg" class="registerImage">
        </div>
        <div class="registerRight">
            <div class="formHeader">
                <h1>Cadastre-se</h1>
                <img src="assets/logoDoeVidaFundoBranco.png" class="logo" alt="logo">
                <a href="login.php" class="loginButton">Entrar <ion-icon name="log-in-outline"></ion-icon></a>
            </div>
            <hr>
            <form action="functions.php" method="POST">
                <div>
                    <label for="name">Nome</label>
                    <br>
                    <input id="name" type="text" name="name" placeholder="Digite seu nome completo" maxlength="80" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <br>
                    <input id="email" type="email" name="email" placeholder="exemplo@gmail.com" maxlength="100" required>
                </div>
                <div>
                    <label for="phoneNumber">Celular</label>
                    <br>
                    <input id="phoneNumber" type="tel" name="phoneNumber" placeholder="(xx) xxxxx-xxxx" maxlength="14" required>
                </div>
                <div>
                    <label for="date">Data de Nascimento</label>
                    <br>
                    <input id="date" type="date" name="date" required>
                </div>
                <div>
                    <label for="CPF">CPF</label>
                    <br>
                    <input id="CPF" type="text" name="CPF" placeholder="xxx.xxx.xxx-xx" maxlength="14" required>
                </div>
                <div>
                    <label for="gender">Sexo</label>
                    <br>
                    <select id="gender" name="gender" required>
                        <option selected>Qual seu sexo?</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                    </select>
                </div>
                <div>
                    <label for="city">Cidade</label>
                    <br>
                    <input id="city" type="text" name="city" placeholder="Qual sua cidade?" maxlength="80" required>
                </div>
                <div>
                    <label for="password">Senha</label>
                    <br>
                    <input id="password" type="password" name="password" placeholder="Digite sua senha" maxlength="50" required>
                </div>
                <div>
                    <label for="bloodType">Tipo Sanguíneo</label>
                    <br>
                        <select id="bloodType" name="bloodType" required>
                            <option selected>Escolha seu tipo sanguíneo</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">O+</option>
                            <option value="6">O-</option>
                            <option value="7">AB+</option>
                            <option value="8">AB-</option>
                        </select>
                </div>
                <div class="registerButton">
                    <input id="register" type="submit" name="register" value="Cadastrar">
                </div>
            </form>
        </div>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>