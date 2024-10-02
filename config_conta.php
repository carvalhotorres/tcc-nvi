<!-- php usado para fazer o update sincronizado ao banco de dados

    obs: tem que estar conectado a um servidor usando localhost-->
<?php
include('conexao.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updates = [];
    $session_fields = [
        'Nome' => 'nome',
        'Telefone' => 'telefone',
        'email' => 'email',
        'Nascimento' => 'nascimento',
        'genero' => 'genero',
        'estado' => 'estado',
        'Cidade' => 'cidade',
        'residencia' => 'residencia',
        'usuario' => 'usuario'
    ];


    if (isset($_POST['senha_antiga'], $_POST['nsenha'], $_POST['confirma'])) {
        $senha_antiga = $_POST['senha_antiga'];
        $nova_senha = $_POST['nsenha'];
        $confirma_senha = $_POST['confirma'];

        $query = "SELECT Senha FROM loginn WHERE id = '{$_SESSION['id']}'";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();

        if ($senha_antiga === $row["Senha"]) {

            if ($nova_senha === $confirma_senha) {

                $mysqli->query("UPDATE loginn SET Senha = '$nova_senha' WHERE id = '{$_SESSION['id']}'");
            } else {
            }
        } else {
        }
    }

    foreach ($session_fields as $field) {
        $form_field = strtolower($field);

        if (isset($_POST[$form_field]) && $_POST[$form_field] !== $_SESSION[$field]) {
            $updates[$form_field] = $_POST[$form_field];
        }
    }


    if (!empty($updates)) {
        $update_parts = [];


        foreach ($updates as $field => $value) {
            $update_parts[] = "$field = '{$mysqli->real_escape_string($value)}'";
        }


        $update_query = "UPDATE loginn SET " . implode(", ", $update_parts) . " WHERE id = '{$_SESSION['id']}'";


        if ($mysqli->query($update_query)) {

            foreach ($updates as $field => $value) {
                $session_key = array_search($field, $session_fields);
                $_SESSION[$session_key] = $value;
            }


            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Erro ao atualizar: " . $mysqli->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configuração de conta</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/ec6885e69b.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/inicio.png" type="image/x-icon">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

  body {
    margin-top: 20px;
    background: #fff;
  }

  h4 {
    color: #000000;
  }

  label {
    font-family: "Poppins", sans-serif;
  }

  .ui-w-80 {
    width: 80px !important;
    height: auto;
  }

  .btn-default {
    border-color: rgba(24, 28, 33, 0.1);
    background: rgba(0, 0, 0, 0);
    color: #4E5155;
  }

  label.btn {
    margin-bottom: 0;

  }

  .conatainer input {
    border: transparent;
    background-color: #970a0a;
  }

  section {
    position: relative;
    display: flex;

  }

  .form .gender-box {
    margin-top: 20px;
  }

  .form .gender-box h3 {
    color: #333;
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 8px;
  }

  .gender input {
    accent-color: #B40000;
  }


  .form {
    position: relative;
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 1rem;
    color: black;
    margin-top: 8px;
    border: 1px solid #000000;
    border-radius: 6px;
    padding: 0 15px;
    transition: 0.3s ease-in-out;
  }

  .botao {
    height: 40px;
    width: 20%;
    font-size: 16px;
    border: none;
    margin-top: 30px;
    cursor: pointer;
    border-radius: 6px;
    font-weight: 300;
    background-color: #B40000;
    color: #ddd;
    transition: all 0, 2s ease;
    gap: 30px;
    font-family: "Poppins", sans-serif;
  }

  .botao:disabled {
    background-color: #4E5155;
  }


  .btn_cancel {
    margin-left: 30px;
    height: 40px;
    width: 20%;
    font-size: 16px;
    border: none;
    margin-top: 30px;
    cursor: pointer;
    border-radius: 6px;
    font-weight: 400;
    background-color: #B40000;
    color: #ddd;
    font-family: "Poppins", sans-serif;
  }

  .text-light {
    color: #babbbc !important;
  }

  .card {
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
  }

  .row-bordered {
    overflow: hidden;
  }

  .account-settings-fileinput {
    position: absolute;
    visibility: hidden;
    width: 1px;
    height: 1px;
    opacity: 0;
  }

  .account-settings-links .list-group-item.active {
    font-weight: bold !important;
  }

  html:not(.dark-style) .account-settings-links .list-group-item.active {
    background: transparent !important;
  }

  .account-settings-multiselect~.select2-container {
    width: 100% !important;
  }

  .light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: #970a0a !important;
  }

  .light-style .account-settings-links .list-group-item.active {
    color: #B40000 !important;
  }

  .material-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: #970a0a !important;
  }

  .material-style .account-settings-links .list-group-item.active {
    color: #B40000 !important;
  }

  .dark-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(255, 255, 255, 0.03) !important;
  }

  .dark-style .account-settings-links .list-group-item.active {
    color: #fff !important;
  }

  .light-style .account-settings-links .list-group-item.active {
    color: #B40000 !important;
  }

  .light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
  }

  input.form-control:focus {
    border: 2px solid #B40000;
    box-shadow: none;
    outline: none;
  }

  ::-webkit-scrollbar {
    width: 12px;
  }

  ::-webkit-scrollbar-track {
    background: #fff;
  }

  ::-webkit-scrollbar-thumb {
    background: linear-gradient(transparent, transparent, transparent, #B40000, #B40000);
    border-radius: 6px;
  }

  .btn-outline-secondary {
    border: none;
    border-radius: 100px;
    background-color: #fff;
    color: #ddd;
  }

  .btn-outline-secondary:hover {
    background-color: #fff;
    color: #ddd;
    border: none;
    transition: none;
  }

  .btn-outline-secondary:focus,
  .btn-outline-secondary:active {
    background-color: #fff;
    color: #B40000;
    border: none;
    box-shadow: none;
  }

  i {
    color: #B40000;
  }
  </style>
</head>

<body>
  <div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">
      Configurações da Conta
    </h4>
    <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list"
              href="#account-general">Perfil</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Mudar
              senha</a>
          </div>
        </div>


        <!-- formulario de Update da conta criada pelo usuário -->
        <form class="col-md-9" id="form-perfil" method="POST" action="">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">
              <div class="card-body">
                <div class="form-group">
                  <label class="form-label">Nome</label>
                  <div class="input-group">
                    <input type="text" name="nome" class="form-control" disabled
                      value="<?php echo $_SESSION['Nome']; ?>" data-original="<?php echo $_SESSION['Nome']; ?>">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Telefone</label>
                  <div class="input-group">
                    <input type="number" name="telefone" class="form-control" disabled
                      value="<?php echo $_SESSION['Telefone']; ?>" data-original="<?php echo $_SESSION['Telefone']; ?>">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">E-mail</label>
                  <div class="input-group">
                    <input type="email" name="email" class="form-control" disabled
                      value="<?php echo $_SESSION['email']; ?>" data-original="<?php echo $_SESSION['email']; ?>">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Nascimento</label>
                  <div class="input-group">
                    <input type="date" name="nascimento" class="form-control" disabled
                      value="<?php echo $_SESSION['Nascimento']; ?>"
                      data-original="<?php echo $_SESSION['Nascimento']; ?>">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Genêro</label>
                  <div class="input-group">
                    <input type="text" name="genero" class="form-control" disabled
                      value="<?php echo $_SESSION['genero']; ?>" data-original="<?php echo $_SESSION['genero']; ?>">
                    <div class=" input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Estado</label>
                  <div class="input-group">
                    <input type="text" name="estado" class="form-control" disabled
                      value="<?php echo $_SESSION['estado']; ?>" data-original="<?php echo $_SESSION['estado']; ?>">
                    <div class=" input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">País Residente</label>
                  <div class="input-group">
                    <input type="text" name="residencia" class="form-control" disabled
                      value="<?php echo $_SESSION['residencia']; ?>"
                      data-original="<?php echo $_SESSION['residencia']; ?>">
                    <div class=" input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Usuário</label>
                  <div class="input-group">
                    <input type="text" name="usuario" class="form-control" disabled
                      value="<?php echo $_SESSION['usuario']; ?>" data-original="<?php echo $_SESSION['usuario']; ?>">
                    <div class=" input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Cidade</label>
                  <div class="input-group">
                    <input type="text" name="cidade" class="form-control" disabled value="<?php echo $_SESSION['Cidade']; ?>
                                                " data-original=" <?php echo $_SESSION['Cidade']; ?>">
                    <div class=" input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="enableEdit(this)"><i
                          class="fa-solid fa-pencil"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">
                <div class="form-group">
                  <label class="form-label">Senha Atual</label>
                  <div class="input-group">
                    <input type="text" name="senha_antiga" class="form-control" id="senha_antiga">
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Nova senha</label>
                  <div class="input-group">
                    <input type="password" placeholder="Digite uma senha no máximo 8 caracteres" name="nsenha"
                      class="form-control" id="nsenha" disabled>
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Confirmar senha</label>
                  <div class="input-group">
                    <input type="password" name="confirma" placeholder="Digite uma senha no máximo 8 caracteres"
                      class="form-control" id="confirma" disabled>
                  </div>
                </div>
              </div>

            </div>

            <!-- botões de cancelar e enviar mudanças da conta -->
            <button class="botao" id="saveChanges" disabled>Salvar mudanças</button>

            <button class="btn_cancel" type="button" onclick="window.location.href='index.php'">Cancelar</button>
            <br><br>
        </form>
      </div>

      <!-- Scripts para funcionalidades adicionais -->
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
      const form = document.querySelector("form");
      const saveBtn = document.getElementById('saveChanges');

      saveBtn.disabled = true;

      function checkChanges() {
        const inputs = document.querySelectorAll('input');
        let hasChanges = false;

        inputs.forEach(input => {

          if (input.value !== input.getAttribute('data-original')) {
            hasChanges = true;
          }
        });


        saveBtn.disabled = !hasChanges;
      }

      function enableEdit(button) {
        let input = button.closest('.input-group').querySelector('input');


        input.disabled = false;
        input.focus();


        input.addEventListener("input", function() {
          checkChanges();
        });
      }
      const senhaAntiga = document.getElementById('senha_antiga');
      const novaSenha = document.getElementById('nsenha');
      const confirmaSenha = document.getElementById('confirma');
      senhaAntiga.addEventListener('input', function() {
        if (senhaAntiga.value !== '') {
          novaSenha.disabled = false;
        }
      });

      novaSenha.addEventListener('input', function() {
        if (novaSenha.value !== '') {
          confirmaSenha.disabled = false;
        }
      });

      confirmaSenha.addEventListener('input', function() {
        if (novaSenha.value === confirmaSenha.value) {
          saveBtn.disabled = false;
        } else {
          saveBtn.disabled = true;
        }
      });
      </script>
</body>

</html>
