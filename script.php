<?php 

include_once("conexao.php");

if ($_POST['acao']=="cadastrar_cliente") {
    $nome = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $senha = $_POST['senha_cliente'];
    $termos = $_POST['cad_termos_aceitar'];

    $sql_add = "INSERT INTO cadastro_clientes (nome, email, senha, termos) values ('". $nome . "', '". $email . "', '". md5($senha) . "', '". $termos . "')";
    
    
    if ($ponte->query($sql_add) === TRUE) {
        echo '<div class="sucesso-cadastro">
        <span>Cliente cadastro com sucesso!</span>
        <div>
            X
        </div>
        </div>';
    } else {
        echo "Error: " . $sql_add . "<br>" . $ponte->error;
    }
    
    
}

// var_dump($_POST);
?>


<div>
    <a href="index.php">Voltar ao cadastro</a>
</div>