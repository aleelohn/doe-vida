<?php 
    include "connection.php";

    //inicio da sessao de login
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location:login.php');
    }

    //logout
    if(isset($_GET['logout'])) {
        session_destroy();
        header('location:login.php');
    }

    //cadastro
    if(isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $date = $_POST['date'];
        $CPF = $_POST['CPF'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $password = md5($_POST['password']);
        $bloodType = $_POST['bloodType'];

        $register = $connection->prepare('INSERT INTO `cadastro` (`idCadastro`, `nmPessoa`, `dsEmail`, `nrTelefone`, `dtNascimento`, `nrCPF`, `dsGenero`, `nmCidade`, `dsSenha`, `dsTipoSangue`) VALUES (NULL, :pName, :pEmail, :pPhoneNumber, :pDate, :pCPF, :pGender, :pCity, :pPassword, :pBloodType);');

        $register->bindValue(':pName', $name);
        $register->bindValue(':pEmail', $email);
        $register->bindValue(':pPhoneNumber', $phoneNumber);
        $register->bindValue(':pDate', $date);
        $register->bindValue(':pCPF', $CPF);
        $register->bindValue(':pGender', $gender);
        $register->bindValue(':pCity', $city);
        $register->bindValue(':pPassword', $password);
        $register->bindValue(':pBloodType', $bloodType);

        $register->execute();

        header('location:login.php');
    }

    //login
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $login = $connection->prepare('SELECT * FROM `cadastro` WHERE `dsEmail` = :pEmail AND `dsSenha` = :pPassword;');

        $login->bindValue(':pEmail', $email);
        $login->bindValue(':pPassword', $password);

        $login->execute();

        if ($login->rowCount()==0) {
            header('location:login.php?invalidLogin=true');
        } else {
            session_start();
            $row = $login->fetch();
            $idLogin = $row['idCadastro'];
            $_SESSION['login']=$idLogin;
            header('location:index.php');
        }
    }

?>