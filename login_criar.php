<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ec6885e69b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/dnvvvvvvvvvv.png" type="image/x-icon">
    <title>Criar Conta</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        z-index: 1;
        background: rgb(36, 0, 1);
        background: linear-gradient(100deg, rgba(36, 0, 1, 1) 0%, rgba(196, 11, 11, 1) 29%, rgba(215, 0, 0, 1) 64%, rgba(36, 0, 1, 1) 100%);
        background-size: 400% 400%;
        animation: animate 15s ease infinite;

    }

    .container {
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #ffff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container header {
        font-size: 1.5rem;
        color: #333;
        font-weight: 500;
        text-align: center;
    }

    h2 {
        font-size: 1.5rem;
        color: #333;
        font-weight: 500;
        text-align: center;
    }

    .container form {
        margin-top: 30px;
    }

    .form .input-box {
        width: 100%;
        margin-top: 20px;
    }

    .input-box label {
        color: #333;
    }

    .form :where(.input-box input, .select-box) {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0 15px;
    }

    .form .column {
        display: flex;
        column-gap: 15px;
    }
    .select-box select {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        color: #707070;
        font-size: 1rem;
    }

    .form button {
        height: 55px;
        width: 46%;
        font-size: 18px;
        border: none;
        margin-top: 30px;
        cursor: pointer;
        border-radius: 6px;
        font-weight: 400;
        background-color: #B40000;
        color: #ddd;
        transition: all 0, 2s ease;
    }

    .form button a {
        color: #ddd;
        text-decoration: none;
    }

    .form button:hover {
        background-color: #970707;
    }

    @keyframes animate {
        0% {
            background-position: 0 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0 50%;
        }
    }


    @media screen and (max-width: 500px) {
        .form .column {
            flex-wrap: wrap;
        }
    }

    .password-strength{
        /* position:absolute; */
        inset: 0;
        background: #f00;
    }

    .password-strength:nth-child(1){
        filter: blur(5px);
    }

    .password-strength:nth-child(1){
        filter: blur(10px);
    }
    </style>
</head>

<body>

        <!-- sessão para criar conta N.V.I -->
    <section class="container">
        <header>Informações importantes</header>
        <form action="cad.php" class="form" method="POST">
            <div class="input-box">
                <label>Nome completo</label>
                <input type="text" name="nome" placeholder="Digite seu nome completo" required>
            </div>


            <div class="column">
                <div class="input-box">
                    <label>Número de telefone</label>
                    <input type="tel" name="telefone" placeholder="(xx) xxxxx-xxxx" required>
                </div>
                <div class="input-box">
                    <label>Data de nascimento</label>
                    <input type="date" name="nasci">
                </div>
            </div>

            <div class="gender-box">
                <h3>Gênero</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check" value="Feminino" name="genero">
                        <label for="check">Feminino</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check" value="Masculino" name="genero">
                        <label for="check">Masculino</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check" value="nao_informar" name="genero">
                        <label for="check">Prefiro não informar</label>
                    </div>
                </div>
            </div>

            <div class="input-box info">
                <div class="column">
                    <div class="select-box">
                        <select name="estados">
                            <option hidden>Estado</option>
                            <option value="Ac">Acre</option>
                            <option value="Al">Alagoas</option>
                            <option value="Ap">Amapá</option>
                            <option value="Am">Amazonas</option>
                            <option value="Ba">Bahia</option>
                            <option value="Ce">Ceará</option>
                            <option value="Es">Espírito Santo</option>
                            <option value="Go">Goiás</option>
                            <option value="Ma">Maranhão</option>
                            <option value="Mt">Mato Grosso</option>
                            <option value="Ms">Mato Grosso do Sul</option>
                            <option value="Mg">Minas Gerais</option>
                            <option value="Pa">Pará</option>
                            <option value="Pb">Paraíba</option>
                            <option value="Pr">Paraná</option>
                            <option value="Pe">Pernambuco</option>
                            <option value="Pi">Piauí</option>
                            <option value="Rj">Rio de Janeiro</option>
                            <option value="Rn">Rio Grande do Norte</option>
                            <option value="Rs">Rio Grande do Sul</option>
                            <option value="Ro">Rondônia</option>
                            <option value="Rr">Roraima</option>
                            <option value="Sc">Santa Catarina</option>
                            <option value="Sp">São Paulo</option>
                            <option value="Se">Sergipe</option>
                            <option value="To">Tocantins</option>
                            <option value="Df">Distrito Federal</option>
                        </select>
                    </div>
                </div>
                <input type="text" name="reside" placeholder="País de Residência">

                <input type="text" name="cidade" placeholder="Digite sua Cidade">
            </div>

            <br>

            <!-- Conta Nvi importante ter cuidado na hora de colocar para não haver problemas na hora de logar -->
            <h2>Conta N.V.i</h2>
            <div class="input-box info">

                <label>Nome de Usúario</label>
                <input type="text" name="usuario" placeholder="Digite nome do usúario da conta">
                <br><br>
                <label>Email</label>
                <input type="text" name="email" placeholder="exemplo@gmail.com">
                <br><br>
                <label>Senha</label>
                <input type="text" name="senha" placeholder="Digite uma senha de 3 a 8 caracteres" id="password">
                <div class="password-strength"></div>
                <div class="password-strength"></div>
                <div class="password-strength"></div>
            </div>

            <center>
                <button type="submit"> Enviar </button>
            </center>
            <br>
            <center>
                <span>Já tem conta? <a href="./login.php">clique aqui</a></span>
            </center>                
        </form>
    </section>

    <script> 
        const passwordInput = document.getElementById("password");
        passwordInput.addEventListener('input', function(event) {
        const password = event.target.value;
        const strength = Math.min(password.length, 12);
    const degree = strength * 30; // calcula o valor do grau baseado na força da senha

    const gradientColor = strength < 4 ? '#ff2c1c' :
                          (strength < 8 ? '#ff9800' : '#11f2f1');
    const strengthText = strength < 4 ? 'Weak' :
                         (strength < 8 ? 'Medium' : 'Strong');

    passwordStrengths.forEach(passwordStrength => {
        passwordStrength.style.background = 
            `conic-gradient(${gradientColor} ${degree}deg, #1115 ${degree}deg)`;
    });

    text.textContent = strengthText;
    text.style.color = gradientColor;
});

    </script>
</body>

</html>