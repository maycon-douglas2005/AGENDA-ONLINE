<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Sua Conta!</title>
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/cadastro.css">
</head>
<body>
    <?php include('partials/header.html'); ?>

    <main>
        <section class="painelDeCadastro">

            <section class="sejaBemVindo">
                <div class="sejaBemVindo_Texto">
                    <h3>Seja bem-vindo!</h3>
                    <p>Basta preencher os dados para 
                        criar sua conta e aproveitar 
                        o que nos temos a te oferecer!
                    </p>
                </div>
                
                <div class="jaPossuiConta">
                    <h3>Ja possui uma conta?</h3>
                    <button>Faça Login!</button>
                </div>
            </section>
            
            <section class="camposDeCadastro">
                <h4>Preencha seus dados!</h4>
                <form action="../controllers/recebendo_dados_de_cadastro.php" method="POST">
                    <input type="text" name="nome" id="" placeholder="Primeiro Nome">
                    <input type="tel" name="celular" id="" placeholder="Celular">
                    <input type="email" name="email" id="" placeholder="E-mail">
                    <input type="password" name="senha" id="" placeholder="Senha">

                    <button>Cadastrar-Se!</button>
                </form>
            </section>
        </section>
    </main>
</body>
</html>