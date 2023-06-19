<?php
require_once '../php/class.php';
$cls = new database();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edpet Rações - Login</title>

    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado do site -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body style="background-color: lightgray;">    
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="/images/logo.png" alt="Logo" style="width: 8%;"><a class="navbar-brand" href="/">Edpet Rações</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#endereco">Endereço</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
    <section class="py-5" style="background-color: lightgray;">
      <div class="container">
        <div class="row d-flex">
          <div class=" align-items-stretch">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body">
                <?php/*
                if (isset($_POST['email'], $_POST['senha'])) {
                  $link = $cls->GetLinkMySQLI();
                  $email = base64_encode($_POST['email']);
                  $senha = $_POST['senha'];//password_hash($_POST['senha'], PASSWORD_BCRYPT);
                  
                  $result = mysqli_query($link, "SELECT EMAIL_CLIENTE FROM `CLIENTES` where EMAIL_CLIENTE = '".$email."'");
                  $rows = mysqli_num_rows($result);
                  
                  $result2 = mysqli_query($link, "SELECT HASH_CLIENTE FROM `CLIENTES` where HASH_CLIENTE = '".base64_encode($senha)."'");
                  $rows2 = mysqli_num_rows($result2);
                  if ($rows == 1 && $rows2 == 1){
                    echo('<div class="alert alert-success" style="margin-top: 5px"><strong>Login efetuado!</strong></div>');
                  }
                  else{
                    echo('<div class="alert alert-danger" style="margin-top: 5px"><strong>Email ou senha incorretos!</strong></div>');
                  }
                }*/
                ?>
                <h5 class="card-title">Faça login para realizar um agendamento.</h5>
                <form method="POST" action="index.php">
                  <div class="mb-3">
                    <label for="cpf" class="form-label">E-mail:</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                  </div>
                  <button type="submit" class="btn btn-primary" style="background-color: #ffd043; color: black; border-color: black; width: 100%" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='#ffd043'; this.style.color='black';">ENTRAR</button>
                  <p>
                    Não tem uma conta? <a href="/singup">Cadastre-se agora!</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Rodapé -->
    <footer class="bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Edpet - Rações</h1>
                    <h2>Tudo par seu pet</h2>
                </div>
                <div class="col-md-6 text-end">
                    <ul class="list-unstyled">
                        <li><a href="#" class="a-dark">Produtos</a></li>
                        <li><a href="#" class="a-dark">Serviços</a></li>
                        <li><a href="#" class="a-dark">Sobre Nós</a></li>
                        <li><a href="#" class="a-dark">Contato</a></li>
                    </ul>
                </div>
                <div class="text-center" > 
                    <p>© <a href="https://thiagosousa81.wordpress.com/" class="a-dark">Thiago Sousa</a> - <a
                            href="https://ebs-systems.epizy.com/" class="a-dark">EBS Security Systems 2023</a> - <a
                            href="/" class="a-dark">EdPet Rações LTDA.</a> - Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>