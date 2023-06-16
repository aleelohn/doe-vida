<?php 
    include "conexao.php";

    //logout
    if(isset($_GET['logout'])) {
        session_destroy();
        header('location:login.php');
    }

    //cadastro
    if(isset($_POST['cadastra'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $date = $_POST['date'];
        $CPF = $_POST['CPF'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $bloodType = $_POST['bloodType'];

        $cadastra = $conexao->prepare('INSERT INTO `cadastro` (`idCadastro`, `nmPessoa`, `dsEmail`, `nrTelefone`, `dtNascimento`, `nrCPF`, `dsGenero`, `nmCidade`, `dsSenha`, `dsConfirmarSenha`, `dsTipoSangue`) VALUES (NULL, :pNome, :pEmail, :pTelefone, :pDataNascimento, :pCPF, :pGenero, :pCidade, :pSenha, :pConfirmarSenha, :pTipoSangue);');

        $cadastra->bindValue(':pNome', $name);
        $cadastra->bindValue(':pEmail', $email);
        $cadastra->bindValue(':pTelefone', $phoneNumber);
        $cadastra->bindValue(':pDataNascimento', $date);
        $cadastra->bindValue(':pCPF', $CPF);
        $cadastra->bindValue(':pGenero', $gender);
        $cadastra->bindValue(':pCidade', $city);
        $cadastra->bindValue(':pSenha', $password);
        $cadastra->bindValue(':pConfirmarSenha', $confirmPassword);
        $cadastra->bindValue(':pTipoSangue', $bloodType);

        $cadastra->execute();

        header('location:login.php');
    }

    //login
    if (isset($_POST['logar'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $ver_login = $conexao->prepare('SELECT * FROM `cadastro` WHERE `dsEmail` = :pEmail AND `dsSenha` = :pSenha;');

        $ver_login->bindValue(':pEmail', $email);
        $ver_login->bindValue(':pSenha', $password);

        $ver_login->execute();

        if ($ver_login->rowCount()==0) {
            header('location:login.php?invalidLogin=true');
        } else {
            session_start();
            $row = $ver_login->fetch();
            $idLogin = $row['idCadastro'];
            $_SESSION['login']=$idLogin;
            header('location:index.php');
        }
    }

?>