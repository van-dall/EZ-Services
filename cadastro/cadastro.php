
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database); 

if (!$conn) { 
  die("Conexão falho: " . mysqli_connect_error());
}

$nome = $_POST['Nome_Cliente'];
$email = $_POST['Email_Cliente'];
$md5senha = md5($_POST['Senha_Cliente']);
$cpf = $_POST['CPF_Cliente'];
$celular = $_POST['Celular_Cliente'];  
$endereco = $_POST['Endereco_Cliente'];
$cep = $_POST['CEP_Cliente'];

$sql = "INSERT INTO Cliente (Nome_Cliente, Email_Cliente, CPF_Cliente, Celular_Cliente, CEP_Cliente, Senha_Cliente, Endereco_Cliente)
VALUES ('$nome', '$email', '$cpf', '$celular', '$cep', '$md5senha', '$endereco')";

if (mysqli_query($conn, $sql)) {
  echo "Registro inserido com sucesso!";
} else {
  echo "Erro ao inserir registro: " . mysqli_error($conn);
}

mysqli_close($conn);git 
?>
