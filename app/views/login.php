<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/login.css">
</head>
<body>
    <?php include('partials/header.html'); ?>

    <main>
        <section class="painel">
            <section class="bemVindoDeVolta">
                <div class="bemvindo">
                    <h3>Seja bem-vindo de volta!</h3>
                    <p>Venha conosco e nos deixe te ajudar a 
                        organizar a sua rotina!
                    </p>
                </div>

                <div class="naoPossuiUmaConta">
                    <h3>Não possui uma conta?</h3>
                    <button>Cadastre-Se</button>
                </div>
            </section>

            <section class="preenchaSeusDados">
                <h4>Preencha seus dados!</h4>

                <form action="../models/verificando_informações_de_login.php" method="POST">
                    <input type="email" name="email" id="" placeholder="E-mail">
                    <input type="password" name="senha" id="" placeholder="Senha">
                    <button>Logar!</button>
                </form>
            </section>
        </section>
    </main>
</body>
</html>