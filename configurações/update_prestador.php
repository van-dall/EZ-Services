<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$id = $_POST['ID_Prestador'];
$celular = $_POST['Celular_Prestador'];
$endereco = $_POST['Endereco_Prestador'];
$cep = $_POST['CEP_Prestador'];

$sql = "UPDATE Prestador SET Celular_Prestador='$cliente', Endereco_Prestador='$endereco', CEP_Prestador='$cep'  WHERE id=$id";

$result = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0)
    echo "As informações foram atualizadas!"

?>