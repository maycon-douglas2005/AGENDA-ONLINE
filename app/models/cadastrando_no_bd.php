<?php 

try{
include('../controllers/config.php');

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$inserindo_dados_de_cadastro_no_bd = $conexao->prepare('INSERT INTO usuarios (primeiro_nome, celular, email, senha, data_cadastro) VALUES (:nome, :celular, :email, :senha, NOW())');

$inserindo_dados_de_cadastro_no_bd->bindParam(':nome', $nome);
$inserindo_dados_de_cadastro_no_bd->bindParam(':celular', $celular);
$inserindo_dados_de_cadastro_no_bd->bindParam(':email', $email);
$inserindo_dados_de_cadastro_no_bd->bindParam(':senha', $senha);

$inserindo_dados_de_cadastro_no_bd->execute();

if($inserindo_dados_de_cadastro_no_bd){
    header('Location: ../views/pagina_inicial_user_logado.php');
}

} catch(PDOException $e) {
    echo 'Erro na inserção de dados do seu cadastro no nosso banco de dados: ' . $e;
}