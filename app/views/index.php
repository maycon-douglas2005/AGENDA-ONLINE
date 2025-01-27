<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo!</title>
    <link rel="stylesheet" href="../../public/css/index.css">
    <link rel="stylesheet" href="../../public/css/header.css">
</head>
<body>
    <?php include('partials/header.html') ?>
    
    <main>
        <section class="apresentacao">
            <div class="container">
                <div class="textoDeApresentacao">
                    <h1>SEU DIA A DIA</h1>
                    <p>de forma mais prática e detalhada!</p>
                    <hr>
                    <h2>ORGANIZE AGORA</h2>
                    <p>sua rotina, utilizando AGENDA ONLINE!</p>
                </div>
                <img src="../../public/img/agenda.png" alt="imagem de agenda meramente ilustrativa">
            </div>
        </section>

        <section class="secaoBeneficios">
            <h2>BENEFÍCIOS DE POSSUIR UMA AGENDA</h2>
            <hr>
            <p>Ter uma agenda pode te trazer inumeros beneficios, e entre eles estão:</p>
            <section class="subSecaoTopicos">
                <div class="topico">
                    <h4>Organização das Tarefas</h4>
                    <p>Uma agenda ajuda a manter todas as 
                        tarefas e compromissos organizados 
                        em um único lugar. Isso facilita a 
                        visualização do que precisa ser feito 
                        no dia, semana ou mês, garantindo que 
                        nada importante seja esquecido.
                    </p>
                </div>
                <div class="topico">
                    <h4>Redução do Estresse</h4>
                    <p>Saber que seus compromissos e prazos 
                        estão registrados e organizados 
                        proporciona tranquilidade. Uma agenda 
                        reduz a ansiedade causada por tentar 
                        lembrar tudo de cabeça.
                    </p>
                </div>
                <div class="topico">
                    <h4>Gestão de Tempo Mais Eficiente</h4>
                    <p>Com uma agenda, é possível planejar 
                        como distribuir o tempo entre as 
                        atividades. Isso ajuda a evitar 
                        desperdícios, aumenta a produtividade 
                        e reduz a sensação de sobrecarga.
                    </p>
                </div>
                <div class="topico">
                    <h4>Acompanhamento de Metas e Projetos</h4>
                    <p>Uma agenda permite registrar objetivos 
                        e monitorar o progresso em direção a 
                        eles. Isso ajuda a manter o foco e a 
                        motivação para alcançar resultados.
                    </p>
                </div>
            </section>
        </section>

        <section class="secaoCrieUmaConta">
            <h2>CRIE UMA CONTA E TENHA ACESSO A TUDO</h2>
            <hr>
            <p>Ao criar uma conta você terá acesso á:</p>
            <ul>
                <li>Listagem personalizada de tarefas</li>
                <li>Gráficos que mostram sua consistência na realização das tarefas</li>
                <li>Alertas de consistência para ajudar a se lembrar das tarefas</li>
                <li>Entre outras funcionalidades que vão facilitar a organização do seu dia a dia...</li>
            </ul>
            <button id="botaoCriarConta">Criar Conta!</button>
        </section>
    </main>
    <script src="../../public/js/redirecionamento_criar_conta.js"></script>
</body>
</html>