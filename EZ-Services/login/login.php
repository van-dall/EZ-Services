<?php
session_start();

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["Email_Cliente"]) && isset($_POST["Senha_Cliente"])) {

    $email = mysqli_real_escape_string($conn, $_POST["Email_Cliente"]);
    $md5senha = mysqli_real_escape_string($conn, $_POST["Senha_Cliente"]);
  
    $sql = "SELECT * FROM Cliente WHERE Email_Cliente = '$email'";
  
    $result = mysqli_query($conn, $sql);
  
    if ($result) {
  
      if (mysqli_num_rows($result) == 1) {
  
        $cliente = mysqli_fetch_assoc($result);
  
        if (password_verify($md5senha, $cliente["Senha_Cliente"])) {
  
          $_SESSION["ID_Cliente"] = $cliente["ID_Cliente"];
          $_SESSION["Email_Cliente"] = $cliente["Email_Cliente"];
          $_SESSION["ID_Cliente"] = $cliente["ID_Cliente"];
          header("location: /EZ-Services/configurações/index.php");
          exit();
  
        } else {
          echo "Incorrect password.";
        }
  
      } else {
        echo "User not found.";
      }
  
    } else {
      echo "Query failed: " . mysqli_error($conn);
    }
  }

mysqli_close($conn);
?>