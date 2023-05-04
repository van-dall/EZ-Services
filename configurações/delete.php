<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}
if (isset($_POST['id'])) {
  $id = intval(filter_var($_POST['id'], FILTER_VALIDATE_INT));

  if ($id <= 0) {
    die("ID inválido!");
  }

  $conn = mysqli_connect("localhost:3306", "root", "", "EZservice");

  $sql = "DELETE FROM Cliente WHERE id = $id";

  if (mysqli_query($conn, $sql)) {
    echo "Registro excluído com sucesso!";
  } else {
    echo "Erro ao excluir registro: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}

?>