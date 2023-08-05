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
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/logoDoeVidaIcone.ico" type="image/x-icon">
    <title>Home</title>
</head>
<body>
    <div id="app">
        <nav>
            <a href="index.php"><img class="logo" src="assets/logoDoeVidaFundoBranco.png" alt="logo"></a>
            <ul>
                <li>
                    <a href="index.php" class="active">
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
                    <a href="rules.php">
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
                <section class="top">
                    <h1>Doações</h1>
                    <button>
                        <ion-icon name="filter-outline"></ion-icon>
                        <span>Filtrar</span>
                    </button>
                </section>
                <section class="requests">
                    <div class="cards">
                        <div class="card">
                            <img src="assets/hemocentro1.jpg" alt="">
                            <div class="bloodTypeDate">
                                <div>
                                    <ion-icon name="water"></ion-icon>
                                    <small>O+</small>
                                </div>
                                <small class="date">08/04/2023</small>
                            </div>
                            <h3>José da Silva</h3>
                            <p>Estou precisando de sangue O- para o tratamento de câncer. Se puder ajudar, agradeço muito.</p>
                            <h4>Hemobanco</h4>
                            <address>R. Cap. Souza Franco, 290 - Bigorrilho, Curitiba - PR, 80730-420</address>
                            <button>Doar</button>
                        </div>
                        <div class="card">
                            <img src="assets/hemocentro2.jpg" alt="">
                            <div class="bloodTypeDate">
                                <div>
                                    <ion-icon name="water"></ion-icon>
                                    <small>A+</small>
                                </div>
                                <small class="date">03/04/2023</small>
                            </div>
                            <h3>Amanda de Oliveira</h3>
                            <p>Sofri um acidente de moto e estou precisando de transfusão de sangue urgentemente.</p>
                            <h4>Hemepar</h4>
                            <address>Tv. João Prosdócimo, 145 - Alto da XV, Curitiba - PR, 80045-145</address>
                            <button>Doar</button>
                        </div>
                        <div class="card">
                            <img src="assets/hemocentro3.jpg" alt="">
                            <div class="bloodTypeDate">
                                <div>
                                    <ion-icon name="water"></ion-icon>
                                    <small>B-</small>
                                </div>
                                <small class="date">01/04/2023</small>
                            </div>
                            <h3>Ivonete Pereira</h3>
                            <p>Fiz uma cirurgia recentemente, e estou precisando de sangue regularmente. Agradeço.</p>
                            <h4>Hospital Erasto Gaertner</h4>
                            <address>R. Dr. Ovande do Amaral, 201 - Jardim das Américas, Curitiba - PR, 81520-060</address>
                            <button>Doar</button>
                        </div>
                    </div>
                </section>
                <button class="ask">Pedir Doação</button>
            </div>
        </main>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>