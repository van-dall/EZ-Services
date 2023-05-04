<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$id = $_POST['ID_cliente']
$celular = $_POST['Celular_Cliente'];
$endereco = $_POST['Endereco_Cliente'];
$cep = $_POST['CEP_Cliente'];

$sql = "UPDATE Cliente SET Celular_Cliente='$cliente', Endereco_Cliente='$endereco', CEP_Cliente='$cep'  WHERE id=$id";

$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo "As informações foram atualizadas!""

?>