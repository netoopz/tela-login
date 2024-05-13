<?php 
include_once("conexao.php");

// if ($_POST['acao']=="cadastrar_cliente") {
    $nome = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $senha = $_POST['senha_cliente'];
    $termos = $_POST['cad_termos_aceitar'];

    $sql_add = "INSERT INTO cadastro_clientes (nome, email, senha, termos) values ('". $nome . "', '". $email . "', '". md5($senha) . "', '". $termos . "')";
    
    
    if ($ponte->query($sql_add) === TRUE) {
        echo '<div class="sucesso-cadastro">
        <span>Cliente cadastrado com sucesso!</span>
        <div class="close-msg">
            X
        </div>
        </div>';
    } else {
        echo "Error: " . $sql_add . "<br>" . $ponte->error;
    }
    
    
// }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Painel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <?php include_once("conexao.php"); ?>

</head>
<body>
    <main>
        <div class="container-p">
            <div class="container-login">
                <div class="container-side-login">
                    <h2 class="subtitle">Soluções <br> que movem <br> o mundo.</h2>
                    <div class="sociais">
                    <i class="icons fa-brands fa-instagram"></i>
                    <i class="icons fa-brands fa-facebook"></i>
                    <i class="icons fa-brands fa-x-twitter"></i>
                    </div>
                    <div class="ja-tem-conta">
                        <div class="texto-login"><h6>Já possui uma conta? <span><a href="">Faça login</a></span></h3></div>
                    </div>
                </div>
                <div class="login">
                    <h3 class="text-singup">Crie sua conta e faça parte!</h3>
                    <div class="formulario-cadastro">
                        <form class="form-cadastro" action="index.php" method="POST">
                            <label for="">Qual o seu nome?</label>
                            <input name="nome_cliente" class="nome-input" type="text" required value="neto">
                            <label for="">Seu melhor e-mail:</label>
                            <input name="email_cliente" type="email" name="user-email" required value="top@gmail.com">
                            <label for="">Uma senha bem segura:</label>
                            <input name="senha_cliente" type="password" required value="123">
                            <div class="termos">
                                  <input id="termos_aceitar" name="cad_termos_aceitar" type="checkbox" checked required>
                                  <input hidden id="termos" type="checkbox" checked>
                                <label for="termos">Concordo com os termos de serviço</label>
                            </div>

                            <!-- <input name="acao" value="cadastrar_cliente" type="hidden"> -->

                           
                            <button >Cadastre-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>



</html>
<script>

let isChecked = false;
let checkbox = document.getElementById("termos_aceitar");
isChecked = checkbox.checked;

if (isChecked){
    document.getElementById("termos_aceitar").value = 1
} else {
    document.getElementById("termos_aceitar").value = 0
}

</script>
