<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
global $servername ;
global $username;
global $password;
global $database;

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

session_start();
$email = $_SESSION['Email_Cliente'];
$imagem = $_SESSION['imagem'];
echo $imagem;


//$mensagemlogin = echo "Bem vindo '$email'"; /* Utilizar para fazer o design da maensagem de login*/
?>

    <div class="p-3 mb-2 bg-warning text-dark">
        <ul class="nav nav-tabs">
          <p class="text-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../tela_inicio/projeto_1.php">Menu Inicial</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Serviços</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../eletricista/trabalho_eletricista.php">Eletricista</a></li>
              <li><a class="dropdown-item" href="../encanador/trabalho_encanador.php">Encanador</a></li>
              <li><a class="dropdown-item" href="../encanador_de_gas/trabalho_encanador_de_gas.php">Encanador de Gás</a></li>
              <li><a class="dropdown-item" href="../jardinagem/trabalho_jardineiro.php">Jardinagem</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cadastro</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../cadastro/index.html">Cadastro Cliente</a></li>
              <li><a class="dropdown-item" href="../cadastro_prestador/indexP.html">Cadastro Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="..//login/indexLogin.php">Login Cliente</a></li>
              <li><a class="dropdown-item" href="../login_prestador/indexLoginP.php">Login Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../configurações/index.php">Configuração</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><?php echo "Bem vindo $email"?></a> <!-- Verificar , mudar para nome --> 
          </li>
          </p>
        </ul>
      </div>
      <div class="container">
        <h1>Configurações</h1>
        <ul class="list-group">
          <li class="list-group-item">
            <form method="POST" action="tela_update.php">
             <button id=() onclick="header('location:/EZ-Services/configuracoes/tela_update.php')">
             Editar Perfil </button>
          </li>
    
        
          <li class="list-group-item"><a href="#">Sair</a></li>

          <li class="list-group-item">
            <form method="POST" action="delete.php">
                <input type="hidden" name="ID_Cliente" value="">
                <button type="submit">Excluir conta</button>
            </li> 
          
        </ul>
      </div>
      <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
    <script type="importmap">{
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/esm/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.esm.min.js"
      }
    }
    </script>
    <script type="module">
      import * as bootstrap from 'bootstrap'

      new bootstrap.Popover(document.getElementById('popoverButton'))
    </script>

      <div id="modal-editar-perfil" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2>Editar Perfil</h2>
          <form id="form-editar-perfil" class="popupedit">
          <div>
            <form method="POST" action="update.php">
            <p id="Ptelefone">Insira seu celular: <input type="text" name= "Celular_Cliente"id="telefone" name="telefone" class="inputs required" placeholder="()*-" pattern="[0-9]{2}[0-9]{9}" oninput="celValidate()"></p>
            <span class="span-required">Digite um número válido</span>
        </div>
        <div class="endereco">
          <p id="nome">Endereço (Rua/Nº): </p><input type="text" name="Endereco_Cliente" placeholder="Digite seu endereço" class="inputs required"></p>
          <p id="nome">Cep: </p><input type="text" name="CEP_Cliente" placeholder="Digite seu Cep" class="inputs required" pattern="[0-9]{2}[0-9]{3}[0-9]{3}" oninput="cepValidate()"></p>
          <span class="span-required">Insira um CEP válido</span> 
          <input type="submit" class="salvar">
      </div>
            </form>
          </form>
        </div>
      </div>
    
</body>
<script>
  const form   = document.getElementById('form-editar-perfil');
        const campos = document.querySelectorAll('.required');
        const spans  = document.querySelectorAll('.span-required');
        const emailRegex = /^\w+([-+.']\w+)@\w+([-.]\w+)\.\w+([-.]\w+)*$/;
    
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            nameValidate();
            emailValidate();
            mainPasswordValidate();
            comparePassword();
        });
    
        function setError(index){
            campos[index].style.border = '2px solid #e63636';
            campos[index].style.boxShadow = '0px 5px 20px -6px #720909';
            spans[index].style.display = 'block';
        }
    
        function removeError(index){
            campos[index].style.border = '';
            campos[index].style.boxShadow = '';
    
            spans[index].style.display = 'none';
        }

        function emailValidate(){
            if(!emailRegex.test(campos[1].value))
            {
                setError(1);
            }
            else
            {
                removeError(1);
            }
        }

        function celValidate(){
            if((!campos[5].checkValidity()))
            {
                setError(5);
            }
            else
            {
                removeError(5);
            }
        }

        function cepValidate(){
            if((!campos[7].checkValidity()))
            {
                setError(7);
            }
            else
            {
                removeError(7);
            }
          }
  const dropdownElementList = document.querySelectorAll(".dropdown-toggle");
const dropdownList = [...dropdownElementList].map(
  (dropdownToggleEl) => new bootstrap.Dropdown(dropdownToggleEl)
);

function exibirModalEditarPerfil() {
  const modalEditarPerfil = document.getElementById("modal-editar-perfil");
  const btnClose = modalEditarPerfil.querySelector(".close");
  modalEditarPerfil.style.display = "block";
  btnClose.addEventListener("click", fecharModalEditarPerfil);
}

function fecharModalEditarPerfil() {
  const modalEditarPerfil = document.getElementById("modal-editar-perfil");
  modalEditarPerfil.style.display = "none";
}

</script>
</html>