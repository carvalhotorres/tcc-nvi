<?php
 include('conexao.php');
 $nome = $_POST['nome'];
 $tele = $_POST['telefone'];
 $nasci = $_POST['nasci'];
 $genero = $_POST['genero'];
 $estado = $_POST['estados'];
 $residente = $_POST['reside'];
 $cidade = $_POST['cidade'];
 $Usuario = $_POST['usuario'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
    
    $sql_code = "INSERT INTO loginn(Nome, Telefone, Nascimento, genero, estado, residencia, Cidade, usuario,email, Senha) VALUE ('$nome','$tele','$nasci', '$genero', '$estado', '$residente', 
    '$cidade', '$Usuario', '$email', '$senha')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    header("Location: login.php");


    // parte de banco de dados cadastro do usuário + Insert into.
?>