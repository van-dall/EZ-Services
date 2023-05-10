<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) { 
  die("Conexão falho: " . mysqli_connect_error());
}

$nome = $conn ->real_escape_string($_POST['Nome_Cliente']);
$email = $conn ->real_escape_string($_POST['Email_Cliente']);
$md5senha = $conn ->real_escape_string(md5($_POST['Senha_Cliente']));
$cpf = $conn ->real_escape_string($_POST['CPF_Cliente']);
$celular = $conn ->real_escape_string($_POST['Celular_Cliente']);  
$endereco = $conn ->real_escape_string($_POST['Endereco_Cliente']);
$cep = $conn ->real_escape_string($_POST['CEP_Cliente']);

$sql = "INSERT INTO Cliente (Nome_Cliente, Email_Cliente, CPF_Cliente, Celular_Cliente, CEP_Cliente, Senha_Cliente, Endereco_Cliente)
VALUES ('$nome', '$email', '$cpf', '$celular', '$cep', '$md5senha', '$endereco')";

if (mysqli_query($conn, $sql)) {
  $msg = "Registro feito com sucesso!";
  $_SESSION['mensagem'] = $msg;
  header('location: /EZ-Services/login/indexLogin.php');
  exit();

  
} else {
  echo "Erro ao inserir registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
