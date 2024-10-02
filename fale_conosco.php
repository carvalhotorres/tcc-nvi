<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ec6885e69b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/inicio.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style3.css">
    <title>fale conosco</title>
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
    <a href="ONG.php">Ong</a>
    <a href="#">Historias</a>
    <a href="#feedback">Fale conosco</a>
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
        <section class="contact-section">
            <div class="contact-bg">
                <h3>Ajude a melhorar nosso site cada vez mais</h3>
                <h2>Fale <span>conosco</span></h2>
                </div>
            </div>
        </section>

        
        <!-- formulario de falar com nossa empresa onde chegara um diretamente para nossa equipe
        para ver isso 
        1- nosso email: nuevavidainmgrantes@gmail.com
        senha: JLPR1234
        2 acesse a caixa de email do gmail
        ira aparecer todas as mensagens dos emails mandando pelo nossos usuários
        
        obs: tem que estar conectado a um servidor ex:http://127.0.0.1:5500/-->
    <section class="contact" id="feedback">
        <div class="container_contact">
            <div class="respons">
            <div class="content">
                <div class="image-box">
                    <img src="img/dnvvvvv2.png" alt="logo da empresa">
                </div>
            </div>
            <form action="https://formsubmit.co/nuevavidainmgrantes@gmail.com" method="post">
                <div class="topic">Fale com nossa <span> Equipe</span></div>
                <div class="input-box">
                    <input type="text" required name="nome" >
                    <label for="">Digite seu Nome:</label>
                </div> 
                <br>
                <div class="input-box">
                    <input type="text" required name="email">
                    <label for="">Digite seu Email:</label>
                </div>
                <br><br><br>
            <div class="message-box">
                <textarea name="comentario"></textarea>
                <label for="">Escreve seu Feedback:</label>
            </div>
            <br>
               <Center><button class="botton" value="submit">
                <p>Enviar mensagem</p>
               </button></Center>
    
               <input type="hidden" name="_captcha" value="false">
               <input type="hidden" name="_next" value="hhttp://127.0.0.1:5500/obrigado.html">
            </form>
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
 <script src="JS/fale_conosco.js"></script>
</body>
</html>