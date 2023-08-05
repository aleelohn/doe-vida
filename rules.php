<?php 
    //inicio da sessao de login
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRules.css">
    <link rel="shortcut icon" href="assets/logoDoeVidaIcone.ico" type="image/x-icon">
    <title>Orientações</title>
</head>
<body>
<div id="app">
        <nav>
            <a href="index.php"><img class="logo" src="assets/logoDoeVidaFundoBranco.png" alt="logo"></a>
            <ul>
                <li>
                    <a href="index.php">
                        <ion-icon name="home"></ion-icon>
                        Início
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="chatbox-ellipses"></ion-icon>
                        Mensagens
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="notifications"></ion-icon>
                        Notificações
                    </a>
                </li>
                <li>
                    <a href="rules.php" class="active">
                        <ion-icon name="document-text"></ion-icon>
                        Orientações
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="cog"></ion-icon>
                        Ajustes
                    </a>
                </li>
                <li>
                    <a href="functions.php?logout">
                        <ion-icon name="log-out-outline"></ion-icon>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <main>
            <div class="inner">
                <section class="title">
                    <h1>Critérios Básicos para Doação</h1>
                </section>
                <section class="rules">
                    <ul>
                        <li>Ter idade entre 16 e 69 anos, (menores de 18 anos devem apresentar consentimento formal do responsável legal).</li>
                        <li>Pessoas com idade entre 60 e 69 anos só poderão doar sangue se já o tiverem feito antes dos 60 anos.</li>
                        <li>Pesar no mínimo 50 kg.</li>
                        <li>Ter dormido pelo menos 6 horas nas últimas 24 horas.</li>
                        <li>Estar alimentado. Evitar alimentos gordurosos nas 3 horas que antecedem a doação de sangue. Caso seja após o almoço, aguardar 2 horas.</li>
                    </ul>
                </section>
                <section class="title">
                    <h1>Intervalo de Doação</h1>
                </section>
                <section class="rules">
                    <ul>
                        <li>Homens - 60 dias (máximo de 04 doações nos últimos 12 meses).</li>
                        <li>Mulheres - 90 dias (máximo de 03 doações nos últimos 12 meses).</li>
                    </ul>
                </section>
            </div>
        </main>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>