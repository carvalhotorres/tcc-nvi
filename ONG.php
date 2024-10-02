<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ec6885e69b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/inicio.png" type="image/x-icon">
    <title>Ong</title>
</head>
<body>

     <!-- botão de subir ao topo -->
     <div class="go-top-btn">
     <img src="img/logo_subir.png" alt="arrow up">
  </div>


<!-- menu 1 navegação entre as páginas -->
<div class="navbar">
    <div class="nav-right">
      <a href="Index.php">Sobre nós</a>
      <a href="#">Documentação</a>
      <a href="ONG.html">Ong</a>
      <a href="#">Historias</a>
      <a href="fale_conosco.php">Fale conosco</a>
      <div class="profile">
        <?php
        if (isset($_SESSION["logado"])) {
          echo "
                <img src='img/login_on.png' alt='Imagem para fazer login' id='profileImg'>
                <div class='dropdown-menu' id='dropdownMenu'>
                  <a href='config_conta.php'>Perfil</a>          
                   <button  class='links' id='logoutBtn'>Sair</button>
                </div>";
        } else {
          echo "
                <img src='img/img_user.png' alt='Imagem para acessar a conta' id='profileImg'>
                <div class='dropdown-menu' id='dropdownMenu'>
                  <a href='login_criar.php'>Criar conta</a>
                  <a href='login.php'>Entrar</a>
                </div>";
        }
        ?>

      </div>
    </div>
  </div>

       <!-- menu 2 -->
  <header class="pt2">
    <div class="container_2">
      <div class="logo_nvi"><img class="nvi" src="img/logo.png"></div>
      <div class="menu2">
        <nav class="nav2">
          <div class="Vulgo"><a class="teste" href="#"><span class="nvi_span">N.V.I</span></a></div>
        </nav>
      </div>
  </header>

  <span class="overlay"></span>
      <div class="modal-box">
          <img src="img/Perfil_sair.png" alt="">
          <h2>Deseja <span>sair</span> da conta?</h2>
          <h3>Caso deseje sair, para entrar de novo acesse o botão de criar conta.</h3>
          <div class="buttons">
            <a href="logout.php"><button class="botoao_pop" id="logoutBtn" type="button">Sair da conta</button></a>

            <button id="close-modal" class="botoao_pop">Voltar</button>
          </div>
      </div>


      <!-- home page  -->
      <div class="fullcontainer banner" id="homeSection">
      <div class="container">
            <h1 class="banner_h1">ONG:<span>organização não governamental.</span></h1>

            <p class="banner_p">
                A solidariedade é o sentimento que melhor expressa o respeito pela dignidade humana
            </p>
      </div>
    </div>

 <!-- um pouco do nosso trabalho -->
<section class="feitos">
    <div class="interface">
        <div class="sectionTitle2" id="ong"><h3>Um pouco sobre nosso Trabalho</h3></div>

        <br><br>

        <article class="itens-container">

            <div class="txt-itens">
                <h3><span>Titulo</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur commodi illum ex similique suscipit ullam temporibus enim dolor repellendus. Ipsa ea impedit voluptatum odit inventore, sed, maxime nobis eaque neque minima similique, laboriosam minus nisi assumenda autem laborum modi non. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat qui totam quos vitae iure sequi facilis tempora asperiores? Possimus, mollitia! Consequatur consectetur, corrupti excepturi nihil at accusantium nobis dolorum itaque?</p>
            </div>

            <div class="img-itens">
                <img src="img/ong3.jpeg" alt="">
            </div>
        </article>
        <article class="itens-container">

            <div class="img-itens">
                <img src="img/foto03.jpeg" alt="">
            </div>

            <div class="txt-itens">
                <h3><span>Titulo</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dolores inventore eveniet ipsum a nihil laborum minima dignissimos incidunt nostrum quo maiores qui provident sed nisi non aperiam pariatur ex, quaerat facilis aut. Nobis culpa excepturi maxime deleniti, molestias eos debitis earum necessitatibus repudiandae libero aperiam ipsum officiis quos minima, perferendis perspiciatis consectetur! A natus quia eius, voluptate delectus doloremque exercitationem incidunt minus adipisci ad eligendi? Rerum, impedit. Fugit nostrum consequuntur itaque, aperiam quo ratione unde officia est labore natus fuga beatae corporis architecto dolor pariatur qui error omnis nemo iure nesciunt laboriosam. Esse sunt ullam fugiat debitis iste unde dignissimos ipsam aspernatur, sapiente, ipsa voluptate corrupti id libero eaque provident consectetur quasi? Consequuntur illum ipsa exercitationem officia fugit dolorem.</p>
            </div>

          
        </article>
        <article class="itens-container">

            <div class="txt-itens">
                <h3><span>Titulo</span></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur commodi illum ex similique suscipit ullam temporibus enim dolor repellendus. Ipsa ea impedit voluptatum odit inventore, sed, maxime nobis eaque neque minima similique, laboriosam minus nisi assumenda autem laborum modi non. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam iusto incidunt soluta facilis temporibus iste ex animi aspernatur. Laboriosam doloremque deleniti placeat reiciendis laudantium ipsa dolorum a facere esse illum, consectetur nesciunt labore odio numquam vero et quibusdam suscipit.</p>
            </div>

            <div class="img-itens">
                <img src="img/foto02.jpeg" alt="">
        </div>
        </article>
    </div>


</section>


    <!-- sessão motivacional e de doar para um site de ajuda a imigrantes -->
<section class="explic" id="explicsection">
    <div class="banner_apoio">
    <div class="container">
        <div class="container_apoio">
            <h3>O que fazemos para nós mesmos morre conosco. O que fazemos pelos outros e pelo mundo permanece. <br>
            </h3>
            <h2>Unidos  Somos  Melhores!</h2>
            <p class="apoio_p">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro tenetur quos blanditiis commodi qui asperiores quidem temporibus ex dolorum omnis, consequuntur voluptates numquam voluptate. Mollitia dicta repellat quod fuga, tempora harum earum ad impedit cumque et cum rerum sint sed atque voluptas voluptates quibusdam illo dolor repellendus iste. Quas odio cum inventore ipsam? Iusto, provident autem facilis optio officiis minima.
            </p>
            <button>
                 <a href="https://doar.acnur.org/page/ACNURBR/doe/general?_gl=1*17udsrc*_gcl_au*Nzk5ODU0MC4xNzI1ODkyNTEz*_ga*MjE1NzExMzQ1LjE3MjU4OTI1MTM.*_ga_1NY8H8HC5P*MTcyNTg5MjUxMy4xLjAuMTcyNTg5MjUxMy42MC4wLjA.*_rup_ga*MjE1NzExMzQ1LjE3MjU4OTI1MTM.*_rup_ga_EVDQTJ4LMY*MTcyNTg5MjUxMy4xLjAuMTcyNTg5MjUxMy42MC4wLjA.">Saiba mais</a>
            </button>
        </div>

    </div>
</div>
</section>

        <br><br><br>
            <br><br><br>
                    <br><br>



<div class="ngo-services-section">

    <h1 class="heading">Serviços</h1>

    <br>

    <div class="box-container">

        <div class="box">
            <img src="img/splendore_ong.png" alt="">
            <h3>Splendore</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
            <a href="#" class="btn">Saiba mais</a>
        </div>

        <div class="box">
            <img src="img/splendore_ong.png" alt="">
            <h3>Splendore</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
            <a href="#" class="btn">Saiba mais</a>
        </div>

        <div class="box">
            <img src="img/splendore_ong.png" alt="">
            <h3>Splendore</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
            <a href="#" class="btn">Saiba mais</a>
        </div>

    </div>

</div>

        <br><br><br>
                <br><br><br>
                        <br><br>



    <!-- sessão de fotos do nosso trabalho -->
    <section class="gallery" id="gallerySection">
        <div class="container">
            <div class="sectionTitle3"><h3>Galéria</h3></div>
            <div class="galleryContainer">
                <div class="item">
                    
                    <img src="img/ong1.jpeg" alt="">
                    
                </div>
                <br>
                <div class="item">
                    
                    <img src="img/ong2.jpeg" alt="">

                </div>
                <div class="item">
                    
                    <img src="img/foto01.jpeg" alt="">

                </div>
                <div class="item">
                    
                    <img src="img/foto02.jpeg" alt="">

                </div>
                <div class="item">
                    
                    <img src="img/foto03.jpeg" alt="">

                </div>
                <div class="item">
                    
                    <img src="img/foto04.jpeg" alt="">

                </div>
              
                <div class="item">
                    
                    <img src="img/foto06.jpeg" alt="">

                </div>
                <div class="item">
                    
                    <img src="img/foto07.jpeg" alt="">

                </div>
                <div class="item">
                    
                    <img src="img/foto08.jpeg" alt="">

                </div>
            </div>
        </div>
    </section>

    <br><br><br>


      <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
        </div>
        <div class="box">
            <h2>Sobre Nós</h2>
            <!-- Texto sobre a organização, fornecendo informações gerais -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, sit suscipit culpa incidunt accusantium esse. Nemo, perspiciatis dolorum totam provident ipsam asperiores, nam, rerum odit dolores aliquid ducimus error. Quas magni necessitatibus, iste distinctio eveniet sequi sint consequatur illum repellat?</p>
        </div>
        <div class="box">
            <h2>Segue-nos</h2>
            <!-- Ícones de redes sociais com links para seguir a ONG -->
            <div class="red-social">
                <a href="https://www.instagram.com/nuevavidainmigrantes/"><i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/@NuevaVidaInmigrantes" target="blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <!-- Texto de direitos reservados com o nome da ONG e o ano -->
        <small>&copy; 2024 <b>N.V.I Nueva Vida Imnigrantes</b> - Todos os Direitos Reservados.</small>
    </div>
</footer>


<!-- Scripts para funcionalidades adicionais -->
<script src="JS/ong.js"></script>


</body>
</html>