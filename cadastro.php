<?php
include_once("conexao.php");

$usuario = filter_input(INPUT_POST, 'usuario');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

if(mysqli_query($conn, $sql)){
    echo "Valores inseridos com sucesso!";
    header('Location: login.html');
    exit();
}else{
    echo "Erro: ". $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>