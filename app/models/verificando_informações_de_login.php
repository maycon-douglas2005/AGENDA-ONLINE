<?php
try{
    include('../controllers/config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $verificando_email_e_senha = $conexao->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :senha');

    $verificando_email_e_senha->bindParam(':email', $email);
    $verificando_email_e_senha->bindParam(':senha', $senha);

    $verificando_email_e_senha->execute();


    if($verificando_email_e_senha->rowCount()){
        header('Location: ../views/pagina_inicial_user_logado.php');
    } else {
        echo 'Usuário NÂO Cadastrado';
    }
} catch(PDOException $e){
    echo 'Erro ao verificar informações de login: ' . $e;
}