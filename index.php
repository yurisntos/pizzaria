<?php
require 'scripts/helpers/importa.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto</title>
    <link rel="stylesheet" href="styles/globais.css">
    <link rel="stylesheet" href="styles/index.css">

    <!-- Import bootstrap 5.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>

<body>

    <style>
        .cardapio__container {
            background-color: #f6c637;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 30px;
        }

        .cardapio__preco {
            margin-left: 10px;
        }

        .cardapio__info {
            margin-left: 10px;
        }

        .cardapio__nome {
            font-size: large;
            margin-left: 9px;
            border: 1px solid white;
            width: fit-content;
            padding: 5px;
            border-radius: 17px;
        }

        .cardapio__produtos {
            display: flex;
            flex-direction: column;
            align-items: baseline;
        }

        button.cardapio__add {
            border-radius: 10px;
            border: none;
            margin-top: 1rem;
        }
    </style>
    <header>
        <div class="HeaderContainer">
            <div class="headerContainer__img">
                <img src="assepts/pizza icon.png" alt="pizza" class="header__img--icon">
            </div>

            <nav>
                <ul class="navMenu">
                    <li class="navMenu__container">
                        <a class="navMenu__link" href="#"> Cardápio</a>
                    </li>
                    <li class="navMenu__container">
                        <a class="navMenu__link" href="#">Contatos</a>
                    </li>
                    <li class="navMenu__container">
                        <a class="navMenu__link" href="#">Faça parte </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="produtos__container">

            <div class="produtos">
                <h2 class="produtos__nome">Produto 1</h2>
                <img src="assepts/pizzaMenor2.jpeg" class="produtos__img--pizza" alt="pizza">
                <p class="produtos__info">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, quisquam? Accusamus provident dolorem harum sit? Numquam asperiores pariatur aliquam, quaerat commodi accusantium, amet, optio consequatur deserunt consectetur sapiente natus est.</p>
                <p class="produtos__preco">$60</p>
            </div>
            <div class="produtos">
                <h2 class="produtos__nome">Produto 2</h2>
                <img src="assepts/pizzaMenor2.jpeg" class="produtos__img--pizza" alt="pizza">
                <p class="produtos__info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet adipisci nemo magni, libero harum vitae nobis laborum ipsum fugit eos quisquam necessitatibus quibusdam, similique cumque nulla facere, nesciunt dolores doloremque?</p>
                <p class="produtos__preco">$45</p>
            </div>
            <div class="produtos">
                <h2 class="produtos__nome">Produto 3</h2>
                <img src="assepts/pizzaMenor2.jpeg" class="produtos__img--pizza" alt="pizza">
                <p class="produtos__info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam neque ea voluptatibus officiis, odit voluptatem nesciunt accusantium libero. Nulla corporis voluptatum blanditiis nam vitae omnis doloribus aperiam doloremque dolorum incidunt.</p>
                <p class="produtos__preco">$60</p>
            </div>
        </div>
        <div class="cardapio__container container my-5 p-4">
            <h1 class="display-2">Todas pizzas</h1>
            <div class="row g-3">
                <?php

                $produtos = listaDados('SELECT * FROM produtos');

                foreach ($produtos as $produto) { ?>
                    <div class="col col-sm-12 col-md-6 col-lg-3">
                        <div class="cardapio__produtos card p-2">
                            <div class="cardapio_title">
                                <p class="cardapio__nome"><?= $produto['nome'] ?> </p>
                            </div>
                            <div class="cardapio__text-infos">
                                <p class="cardapio__info"><?= $produto['descricao'] ?></p>
                                <p class="cardapio__preco">R$ <?= $produto['valor'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

        <!--<aside>
        <p>PROMO</p>
    </aside>
     
    section class="sobre">
    <p>OLA</p>
    </section>
-->
    </main>
    <footer>
        <div class="footer__container">
            <div class="footer__txt">
                <p class="footer__txt--principal">Contate-nos</p>
                <p class="footer__txt--secondtxt">Fique a vontade para entrar em contato conosco. <br>Estamos sempre abertos para discutir novos projetos<br> ideias criativas ou oportunidades de fazer parte de suas visões.</p>
            </div>
            <div class="footer__email">
                <h2 class="footer__email--title">Envie-nos</h2>
                <img src="assepts/o-email.png" alt="iconEmail" class="footer__email--img">
            </div>
            <div class="footer__telefone">
                <h2 class="footer__telefone--title">Ligue para nós</h2>
                <img src="assepts/telefone.png" alt="iconTel" class="footer__telefone--img">
            </div>
        </div>



        <form action="cadastro.php" method="post">
            <h1 class="tituloForm">Faça já seu pedido!</h1>
            <div class="inputFooter">
                <input type="text" placeholder="Digite seu nome" class="" name="nome" class="nome inputStyle " id="nome" required>

                <input type="email" placeholder="Digite seu e-mail" name="email" id="email" class="emails inputStyle" required>

                <input type="password" placeholder="digite sua senha" name="senha" id="senha" class="numerotelefone inputStyle" required>

                <input type="submit" class="botaofo" value="Cadastrar">
            </div>

        </form>

    </footer>
    <script type="module" src="./index.js"></script>

</body>

</html>