<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style4.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ec6885e69b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/inicio.png" type="image/x-icon">
    <title>Documentação</title>
</head>
<body>

<div class="go-top-btn">
  <img src="img/logo_subir.png" alt="arrow up">
  </div>

   <!-- menu 1 navegação entre as páginas -->
   <div class="navbar">
    <div class="nav-right">
      <a href="Index.php">Sobre nós</a>
      <a href="#documento">Documentação</a>
      <a href="ONG.php">Ong</a>
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


 <!-- Pop-up deseja sair da conta -->
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

     <section class="home-document">
      <div class="content">
        <h1 class="document-h1">Documentação</h1>
       <p class="document-p">"Ter um documento no Brasil é <span>essencial</span> para garantir seus direitos e dar segurança em acordos e compromissos."</p>
      </div>
      <div class="image-box">
        <img class="carteira" src="img/Documentos_3D_sfundo.png" alt="">
      </div>
     </section>

     <section class="img-meio">
        <div class="interface">
          <h3>Carteira de <span>trabalho</span></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem officia suscipit facilis.</p>
        </div>
        <div class="efeito-meio"></div>
     </section>

     <section class="blog-section">
      <div class="blog-container">
          <h2 id="documento">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quas delectus corrupti?</h2>
  
          <p class="parag-borda">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="blog-topic">
              <h3>HTML</h3>
              <p class="normal">HTML (Hypertext Markup Language) é a base de toda página web. Ele permite estruturar o conteúdo com elementos como títulos, parágrafos, listas, links e muito mais.</p>
              <br>
              <img src="img/imigrantes6.jpg" alt="HTML Icon" class="html-icon">
              <br><br>
          </div>
          <div class="blog-topic">
              <h3>CSS</h3>
              <p class="normal">CSS (Cascading Style Sheets) é utilizado para estilizar páginas web. Ele controla o layout, as cores, as fontes e outros aspectos visuais dos elementos HTML.</p>
          </div>
          <div class="blog-topic">
              <h3>JavaScript</h3>
              <p class="normal">JavaScript é uma linguagem de programação que adiciona interatividade às páginas web. Com ele, é possível criar animações, validar formulários e desenvolver aplicativos web dinâmicos.</p>
          </div>
          <div class="blog-topic">
              <h3>JavaScript</h3>
              <p class="normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur laudantium velit aut neque blanditiis quia cumque, enim, omnis quis esse repudiandae. Quod quas porro expedita rerum non odit iusto maiores quos in veniam. Ex quibusdam, deserunt repellendus odio reiciendis aspernatur sunt et nostrum, eius, laborum nisi tempora eveniet nihil! Quas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptatum quae ratione corrupti ab unde eum, saepe aspernatur pariatur, nesciunt at molestias aliquid totam? Eius sapiente similique aut dolore eveniet!</p>
          </div>
          <div class="blog-topic">
              
              <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>
          </div>

          <!-- botão de ler mais -->
          <button class="botao-ler-mais">Ler Mais</button>

          <div class="conteudo-oculto">
          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>

          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>

          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>

          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>
          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>
          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>
          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>
          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>
          <p class="normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis nam, delectus dignissimos dolorum eius illum, repellendus enim, repudiandae repellat cum alias! Facere, laudantium! Enim voluptas ex minima soluta obcaecati, culpa cumque! Distinctio rem cupiditate excepturi cumque id, tenetur at dolore expedita, dolores nulla quas eos asperiores ducimus aut, facere atque molestias praesentium autem officiis qui. Unde expedita incidunt nihil repellat fugiat? Eveniet dolore nobis veniam iusto autem quis reiciendis voluptate maiores, vel ad. Non odio repudiandae adipisci tenetur animi.</p>
      </div>
    </div>
    <br><br>
  </section>
  <div class="hand-enfeite">
    <img src="img/icone_poupate-removebg-preview.png" alt="Enfeite da Mão">
  </div>
  

<script src="JS/Document.js"></script>
</body>
</html>
