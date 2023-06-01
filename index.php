<?php
require 'scripts/helpers/importa.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Piazza </title>
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
            
        }

        .cardapio__info {
            
        }

        .cardapio__nome {
            font-size: large;
            border: 1px solid white;
            width: fit-content;
            padding: 10px 0px;
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

            <div class="side">
                <div class="headerContainer__img">
                    <img src="assepts/pizza icon.png" alt="pizza" class="header__img--icon">
                </div>

                <div class="headerText">
                <h1 class="header__text-logo">La Piazza</h1>
                </div>
            </div>   

            <nav>
                <ul class="navMenu">
                    <li class="navMenu__container">
                        <a class="navMenu__link" href="#cardapio__produtos card p-2r"> Cardápio</a>
                    </li>
                    <li class="navMenu__container">
                        <a class="navMenu__link" href="#footer__container">Contatos</a>
                    </li>
                    <li class="navMenu__container">
                        <a class="navMenu__link" href="#footer__container">Faça parte </a>
                    </li>
                    <li class="navMenu__container">
                        <a class="navMenu__link" href="./admin/login/index.php">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>

        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">

                <?php
                $produtos = listaDados('SELECT * FROM produtos LIMIT 3');

                foreach ($produtos as $produto) { ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="produtos">
                            <h2 class="produtos__nome"><?= $produto['nome'] ?> </h2>
                            <img src="assepts/pizzaMenor2.jpeg" class="produtos__img--pizza" alt="pizza">
                            <div class="produtos__info d-flex justify-content-between align-items-center">
                                <p class="flex-shrink-1 mb-0"> 
                                    <?= $produto['descricao'] ?>
                                </p>
                                <p class=" produtos__preco flex-shrink-0">
                                    R$ <?= $produto['valor'] ?>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>

        <div class=" cardapio__container container my-5 p-4">
            <h1 class="display-2">Todas pizzas</h1>
            <div class="row g-3">
                <?php

                $produtos = listaDados('SELECT * FROM produtos');

                foreach ($produtos as $produto) { ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="cardapio__produtos card p-2">
                            <div class="w-100 text-center">
                                <img src="assepts/pizzaMenor2.jpeg" class="img-fluid" alt="pizza">
                            </div>
                            <div class="cardapio_title">
                                <p class="cardapio__nome fw-bold mb-0"><?= $produto['nome'] ?> </p>
                            </div>
                            <div class="cardapio__text-infos flex-grow-1 w-100 d-flex flex-column justify-content-between">
                                <p class="cardapio__info mb-0"><?= $produto['descricao'] ?></p>
                                <p class="cardapio__preco ms-auto">R$ <?= $produto['valor'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </main>
    <footer>
        <div id="footer__container">
            <div class="footer__txt">
                <h1 class="footer__txt--principal">Contate-nos</h1>
                <p class="footer__txt--secondtxt">Fique a vontade para entrar em contato conosco.Estamos sempre abertos para discutir novos projetos ideias criativas ou oportunidades de fazer parte de suas visões.</p>
            </div>
            <div class="banner">
                <div class="footer__email">
                    <p class="footer__email--title">Envie-nos</p>
                    <img src="assepts/o-email.png" alt="iconEmail" class="footer__email--img">
                </div>
                <div class="footer__telefone">
                    <p class="footer__telefone--title">Ligue para nós</p>
                    <img src="assepts/telefone.png" alt="iconTel" class="footer__telefone--img">
                </div>
            </div>
        </div>



        <form action="cadastro.php" method="post">
            <h1 class="tituloForm">Faça já seu pedido!</h1>
            <div class="inputFooter">
                <input type="text" placeholder="Digite seu nome" class="inputStyle" name="nome" class="nome inputStyle " id="nome" required>

                <input type="email" placeholder="Digite seu e-mail" name="email" id="email" class="emails inputStyle" required>

                <input type="password" placeholder="digite sua senha" name="senha" id="senha" class="numerotelefone inputStyle" required>

                <input type="submit" class="botaofo" value="Cadastrar">
            </div>

        </form>

    </footer>
    <script type="module" src="./index.js"></script>

</body>

</html>