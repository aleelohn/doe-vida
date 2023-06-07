<?php 
    include "conexao.php";

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

        echo "<script>window.location.replace('index.html');</script>";
    }

?>