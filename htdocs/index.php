<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edpet Rações</title>

    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado do site -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

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

    <!-- Header com imagem -->
    <header class="bg-image" style="
    background-image: linear-gradient(45deg, #3d23a5, #73db67);
    /* background-image: url(&quot;/images/logo.png&quot;); */
    /* background-size: 22%; */
    /* background-position-x: 50%; */
    /* background-position-y: 25%; */
">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h1 class="display-4 text-white">Bem-vindo à Edpet Rações!</h1>
                </div>
            </div>
        </div>
    </header>

    

    <!-- Seção de destaque -->
    <section class="py-5"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4">Produtos de alta qualidade para seu animal de estimação</h2>
                    <p>Nossa loja oferece uma ampla variedade de rações naturais e orgânicas para cães, gatos, pássaros
                        e outros animais de estimação. Trabalhamos apenas com as melhores marcas do mercado para
                        garantir a saúde e bem-estar do seu pet.</p>
                    <a href="#" class="btn btn-primary mt-3 btn-lg" style="width: 100%">VER PRODUTOS</a>
                </div>
                <div class="col-md-6">
                    <img src="/images/Ração.jpg" alt="Imagem de produtos" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de serviços -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-first order-md-first">
                    <img src="/images/Banho e tosa.jpg" alt="Imagem de serviços" class="img-fluid">
                </div>
                <div class="col-md-6 order-last order-md-last">
                    <h2 class="mb-4">Serviços de banho e tosa personalizados</h2>
                    <p>Nossa equipe de profissionais altamente qualificados está pronta para cuidar do seu animalzinho de
                        estimação com serviços personalizados de banho e tosa. Oferecemos várias opções e pacotes para
                        atender às necessidades do seu pet.</p>
                    <a href="/login" class="btn btn-primary mt-3 btn-lg" style="width: 100%">AGENDAR UM HORÁRIO</a>
                </div>
            </div>
        </div>
    </section>

    <!--Localização-->
    <section class="bg-light py-5" id="endereco">
    <div class="container">
        <div class="row align-items-center">                
        <div class="col-md-6 order-first order-md-first">
            <h2 class="mb-4">Encontre-nos</h2>
          <p>Loja 1: Rua 02 , Nº29-B Ao lado do Supermercado C&amp;S COPLAN, Cruz das Almas, BA, Brasil</p>
            <p>Loja 2: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, ipsa eum error expedita nesciunt repellat sapiente doloribus eveniet id dolorem ut repellendus qui. Aspernatur ut modi accusantium recusandae aliquam veritatis?</p>
            
        </div>
        <div class="col-md-6 order-last order-md-last">
            <img src="/images/edpet1.webp" alt="Imagem de serviços" class="img-fluid">
        </div>
        </div>
    </div>
    </section>

    <!-- Rodapé -->
    <section class="bg-light py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2>Contato</h2>
            <p>Estamos prontos para atender você. Entre em contato conosco para agendar um serviço ou tirar suas dúvidas.</p>           
          </div>
          <div class="col-lg-4">
            <img src="img/contact.jpg" class="img-fluid" alt="Contato">
          </div>
          <div class="col-lg-4" id="contato">
            <ul class="list-unstyled">
	      <li>
                <strong>Instagram:</strong> @
              </li>              
              <li>
                <strong>Telefone:</strong> (11) 1234-5678
              </li>
              <li>
                <strong>WhatsApp:</strong> <a href="https://wa.me/557581068862">+55 75 8106-8862</a>
              </li>
              <li>
                <strong>Email:</strong> seu-email@gmail.com
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark text-light text-center py-3">
      <div class="container" id="dev">
        <span><a href="https://thiagosousa81.wordpress.com/" style="color: white">Thiago Sousa</a> - <a href="https://ebs-systems.epizy.com/" style="color: white">EBS Security Systems</a> © 2023. Todos os direitos reservados.</span>
      </div>
    </footer>
    


    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>