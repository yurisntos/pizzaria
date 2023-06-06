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
                            <a class="navMenu__link" href="">Sobre!</a>
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
                <h2 class="produtos__container-title"> Conheça nossos produtos destaques! </h2>
                <div class="row gap-2 justify-content-center align-items-center">

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
            <div class="container__info">
                
                <div class="container__info-text">
                <h2>Sobre nossa historia!</h2>
                    <p class="info__text">Havia uma pequena pizzaria na encantadora cidade italiana de Nápoles chamada La Piazza. Fundada em 1939 pelo talentoso pizzaiolo Giovanni Rossi, a pizzaria rapidamente se tornou conhecida por suas deliciosas pizzas, feitas com ingredientes frescos e a receita de família secreta, passada de geração em geração.

                        No entanto, durante a Segunda Guerra Mundial, a tranquila vida de La Piazza foi brutalmente interrompida. Nápoles se tornou um campo de batalha, e as bombas e os tiroteios se tornaram uma ameaça constante. Temendo pela segurança de sua família e do negócio que tanto amavam, Giovanni e sua esposa, Isabella, tomaram a difícil decisão de deixar a Itália e procurar refúgio em um lugar seguro.

                        Em 1942, eles embarcaram em um navio com destino ao Brasil, país conhecido por suas belezas naturais e receptividade calorosa. Giovanni trouxe consigo os segredos de sua pizzaria, incluindo sua preciosa massa de fermentação lenta e aperfeiçoada ao longo de décadas.

                        Ao chegarem ao Brasil, Giovanni e Isabella estabeleceram-se na cidade do Rio de Janeiro. Com coragem e determinação, eles abriram uma pequena pizzaria em um bairro movimentado, que decidiram chamar de La Piazza, em homenagem à sua amada pizzaria em Nápoles.

                        No início, os desafios eram muitos. A cultura brasileira era diferente, e a pizza ainda era uma novidade para muitos. No entanto, a dedicação de Giovanni e Isabella, combinada com o sabor inigualável de suas pizzas, logo conquistaram os corações dos moradores locais.

                        Com o passar dos anos, La Piazza se tornou um ponto de referência na cidade. A pizzaria era frequentada por famílias, grupos de amigos e até mesmo por celebridades em busca de uma experiência gastronômica única. A reputação de La Piazza se espalhou, e as filas começaram a se formar do lado de fora, com pessoas ansiosas para provar as autênticas e saborosas pizzas napolitanas.

                        O segredo do sucesso de La Piazza estava na paixão de Giovanni por sua arte e no cuidado minucioso dado a cada detalhe. Ele importava os melhores ingredientes diretamente da Itália, como o tomate San Marzano, o queijo mozzarella de búfala e o azeite de oliva extravirgem. A massa, preparada com a mesma técnica que seu pai e avô haviam ensinado a ele, era leve, crocante e cheia de sabor.

                        Ao longo dos anos, La Piazza expandiu-se para outros bairros e cidades do Brasil, mas manteve sua essência familiar. Giovanni e Isabella passaram o legado para seus filhos, que compartilhavam o amor pela pizzaria e pela tradição familiar. A pizzaria continuou a crescer, com mais filiais sendo abertas, mas cada uma delas mantendo a qualidade e a autenticidade da receita original.

                        Hoje, La Piazza é uma das pizzarias mais renomadas do Brasil. É um lugar onde os clientes sabore
                    
                    </p>
                    <p>Localizado em Araçatuba-SP</p>
                </div>
                <div class="container__info-img">
                    <img src="./assepts/info-img.jpg" class="img-info" alt="imagem pizzaoilo preparando pizzas ">
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



            <form action="./admin/contato/salvaContato.php" method="POST">
                <h1 class="tituloForm">Participe de nossas promoções!</h1>
                <div class="inputFooter">
                    <input type="text" placeholder="Digite seu nome" class="inputStyle" name="nome" class="nome inputStyle " id="nome" required>

                    <input type="email" placeholder="Digite seu e-mail" name="email" id="email" class="emails inputStyle" required>

                    <input type="tel" placeholder="digite seu numero" name="telefone" id="telefone" class="numerotelefone inputStyle" required>

                    <input type="submit" class="botaofo" value="Cadastrar">
                </div>

            </form>

        </footer>
        
    <script type="module" src="./index.js"></script>

</body>

</html>