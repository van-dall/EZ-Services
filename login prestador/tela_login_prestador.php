<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Login Trabalhador</title>
</head>
<body>
    <div class="p-3 mb-2 bg-warning text-dark">
        <ul class="nav nav-tabs">
          <p class="text-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./projeto_1.php">Menu Inicial</a>
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
              <li><a class="dropdown-item" href="../cadastro/index.php">Cadastro Cliente</a></li>
              <li><a class="dropdown-item" href="../cadastro prestador/indexP.php">Cadastro Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="..//login/indexLogin.php">Login Cliente</a></li>
              <li><a class="dropdown-item" href="../login prestador/indexLoginP.php">Login Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../configurações/index.php">Configuração</a>
          </li>
          </p>
        </ul>
      </div>
<div class="container"></div>
    <form id="form" class="form">
        <h1>Faça seu login</h1>
   <p id="email">Email: <input type="email" placeholder="Digite seu Email"
    name="Email_Prestador" required> </p>   
    <p id="senha">Senha: <input type="password" placeholder="Digite sua Senha"
        name="Senha_Prestador" required> </p> 
    <input type="submit" class="login" value="Login">
        <div class="link">
            <p>Não possui uma conta? <a href="" class="link0">Cadastre-se aqui!</a></p> 
        </div>
    </form>
</div>
<script>
    form.addEventListener('submit', (event) => {
    event.preventDefault(); 
    window.location.href = '../tela_inicio/projeto_1.html';
});
</script>
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
  

</body>
</html>

