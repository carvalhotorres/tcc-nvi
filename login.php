<?php

// login banco de dados para funcionar

// Fazer as modificações como senha do Root e o número do banco de dados ex: 3306 do localhost para funcionar corretamente

include('conexao.php');
session_start();


if (isset($_POST['email']) || isset($_POST['senha'])) {

    $usu = $mysqli->real_escape_string($_POST['fname']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM loginn WHERE email = ? AND senha = ? AND usuario = ?";
    $stmt = $mysqli->prepare($sql_code);
    $stmt->bind_param("sss", $email, $senha, $usu);
    $stmt->execute();
    $sql_query = $stmt->get_result();
    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $_SESSION['logado'] = true;
        $row = $sql_query->fetch_assoc();
        $_SESSION["id"] = $row['id'];
        $_SESSION["Nome"] = $row['Nome'];
        $_SESSION["Telefone"] = $row['Telefone'];
        $_SESSION["Nascimento"] = $row['Nascimento'];
        $_SESSION["genero"] = $row['genero'];
        $_SESSION["estado"] = $row['estado'];
        $_SESSION["residencia"] = $row['residencia'];
        $_SESSION["Cidade"] = $row['Cidade'];
        $_SESSION["usuario"] = $row['usuario'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["Senha"] = $row['Senha'];

        header("Location: Index.php");
    } else {
        $quantidade = 999;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/inicio.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/ec6885e69b.js" crossorigin="anonymous"></script>
    <title>Login nvi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

        :root {

            font-size: 100%;
            font-size: 16px;
            line-height: 1.5;
            --primary-red: #B40000;
        }

        body {
            padding: 0;
            margin: 0;
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            position: relative;
        }

        h1 {
            font-size: 2.60rem;
            font-weight: 700;
            color: aliceblue;
            background-color: #B40000;
        }

        a {
            text-decoration: none;
            color: #B40000;
        }

        a:hover {
            text-decoration: underline;
        }

        .small {
            font-size: 80%;
            text-align: center;
        }

        .split-screen {
            display: flex;
            flex-direction: column;
        }

        .left {
            height: 200px;
        }

        .left,
        .right {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left {
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .5)), no-repeat url(img/login_v18.jpg);
            background-size: cover;
        }

        .left .copy {
            color: white;
            text-align: center;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .left p {
            font-weight: 400;

        }

        .right .copy {
            color: black;
            text-align: center;
        }

        .right .copy p {
            margin: 1.5em 0;
            font-size: 0.875rem;
        }

        .right form {
            width: 328px;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            display: flex;
            width: 100%;
            box-sizing: border-box;
            border-radius: 8px;
            border: 1px solid #c4c4c4;
            padding: 1em;
            margin-bottom: 1.25rem;
            font-size: 0.875rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.75rem;
        }

        .input-container.password {
            position: relative;
        }

        .input-container.password i {
            position: absolute;
            top: 42px;
            right: 16px;
            cursor: pointer;
        }

        .signup-btn {
            display: block;
            width: 100%;
            background: var(--primary-red);
            color: white;
            font-weight: 700;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            text-decoration: uppercase;
            letter-spacing: 0.5px;
        }

        .espaco {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 0px;
            width: 100%;
        }

        .signup-btn:hover {
            background: #790303;
            cursor: pointer;
        }

        @media screen and (min-width: 900px) {
            .split-screen {
                flex-direction: row;
                height: 100vh;
            }

            .left,
            .right {
                display: flex;
                width: 50%;
                height: auto;
            }
        }

        .signup-btn a {
            width: 100%;
            color: #fff;
        }

        .popup-button,
        .popup .close-popup-button {
            background-color: #B40000;
            border: none;
            padding: 8px 30px;
            border-radius: 21px;
            text-transform: uppercase;
            color: #FFF;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all .4s;
            margin: 12px 0;
        }

        .popup-button:hover,
        .popup .close-popup-button:hover {
            opacity: .8;
        }

        .popup-button:active,
        .popup .close-popup-button:active {
            transform: scale(.8);
        }

        .popup {
            position: fixed;
            background-color: rgba(0, 0, 0, 0.9);
            box-shadow: 0 4px 8px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px 50px;
            border-radius: 8px;
            text-align: center;
            width: 400px;
            box-sizing: border-box;
            transition: all .4s;
            z-index: 999;
            transform: scale(.4);
            opacity: 0;
        }

        .popup.opened {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);

        }

        .popup img {
            width: 150px;
        }

        .popup h2.title {
            color: #fff;
        }

        .popup span {
            background: #c40808;
        }

        .popup p.desc {
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- tela de login para entrar na conta -->
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>Tem uma conta?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </section>
        </div>
        <div class="right">
            <form action="" method="POST">
                <section class="copy">
                    <h2>Login</h2>
                    <div class="login_container">
                        <p>Não tem uma conta? <a href="login_criar.php">
                                <strong>Login aqui</strong></a></p>
                    </div>
                </section>
                <div class="input-container name">
                    <label for="fname">Nome inteiro</label>
                    <input id="fname" name="fname" type="text" required>
                </div>
                <div class="input-container email">
                    <label for="fname">Email:</label>
                    <input id="email" name="email" type="email" required>
                </div>
                <div class="input-container password">
                    <label for="fname">Senha:</label>
                    <input id="password" name="senha" type="password" required>
                    <i id="icon" class="fa-regular fa-eye-slash"></i>
                </div>

                <button class="signup-btn" type="submit">Entrar</button>


                <div class="espaco">
                    <button class="signup-btn" onclick="history.back()">
                        Voltar
                    </button>
                </div>

                <section class="copy legal">
                    <p><span class="small"> Lorem ipsum dolor sit amet consectetur.
                            <br> <a href="#">privacy policy</a> &amp; <a href="#">Terms of service</a>. </span></p>
                </section>

                <!-- sessão de pop up de caso algo esteja errado -->
                <div class="popup" id="popup">
                    <img src="img/erro_perfil_sem_fundo.png" alt="warning">

                    <h2 class="title">Algo de <span>Errado</span></h2>

                    <p class="desc">Usuário, email ou senha incorretos!!!</p>

                    <button class="close-popup-button" type="submit" onclick="handlePopup(false); window.history.back();">
                        Fechar
                    </button>

                </div>
            </form>
        </div>
    </div>


    <!-- php para a ativação do pop up -->
    <?php
    if (isset($quantidade)) {
        if ($quantidade == 999) {
            echo "
            <script>
            const popUp = document.getElementById('popup');

            function handlePopup(open){
            popUp.classList[open ? 'add' : 'remove']('opened');
            }
            handlePopup(true);
            </script>";
        } else {
            echo "";
        }
    }
    ?>
    <script>
        let isVisible = false;
        const input = document.getElementById("password");
        const icon = document.getElementById("icon");
        console.log(document.getElementById("password").type);
        icon.addEventListener("click", () => {
            if (!isVisible) {
                icon.classList.remove("fa-regular", "fa-eye-slash");
                icon.classList.add("fa-regular", "fa-eye");
                isVisible = true;

                input.type = "text";
            } else {
                icon.classList.remove("fa-regular", "fa-eye");
                icon.classList.add("fa-regular", "fa-eye-slash");
                isVisible = false;

                input.type = "password";
            }

        })
    </script>
</body>

</html>
