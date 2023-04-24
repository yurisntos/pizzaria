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
    <link rel="stylesheet" href="styles/globais.css" >
    <link rel="stylesheet" href="styles/index.css" >
</head>
<body>

<style> .cardapio__container{
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
            <img src="assepts/pizzaMenor2.jpeg" class="produtos__img--pizza"  alt="pizza">
            <p class="produtos__info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet adipisci nemo magni, libero harum vitae nobis laborum ipsum fugit eos quisquam necessitatibus quibusdam, similique cumque nulla facere, nesciunt dolores doloremque?</p>
            <p class="produtos__preco">$45</p>
        </div>
        <div class="produtos">
            <h2 class="produtos__nome">Produto 3</h2>
            <img src="assepts/pizzaMenor2.jpeg" class="produtos__img--pizza"  alt="pizza">
            <p class="produtos__info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam neque ea voluptatibus officiis, odit voluptatem nesciunt accusantium libero. Nulla corporis voluptatum blanditiis nam vitae omnis doloribus aperiam doloremque dolorum incidunt.</p>
            <p class="produtos__preco">$60</p>
        </div>
    </div>
    <div class="cardapio__container">


        <?php

            $produtos = listaDados('SELECT * FROM produtos');

            foreach ($produtos as $produto) { ?>
            <div class="cardapio__produtos">
                <p class="cardapio__nome"><?= $produto['nome'] ?> </p>
                <p class="cardapio__info"><?= $produto['descricao'] ?></p>

                <p class="cardapio__preco">R$ <?= $produto['valor'] ?></p>
            </div>
            <?php } ?>
            
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

    
    <form action="POST">
        <h1 class="tituloForm">Faça já seu pedido!</h1>
        <div class="inputFooter">
            <input type="text"placeholder="Digite seu nome" name="nome" class="nome inputStyle ">
            
    
            <input type="text" placeholder="Digite seu sobrenome" name="sobrenome" class="sobrenome inputStyle">
            
        
            <input type="email" placeholder="Informe-nos seu e-mail" name="email" class="emails inputStyle">
            
        
        
            <input type="tel" placeholder="Digite seu telefone" name="telefone" class="numerotelefone inputStyle">
        
        <div class="check">
            <input type="checkbox" name="newsletter" id="newsletter">
            <label class="txtcheck" for="newsletter">Assine nosso newsletter! </label>
        </div>
        <div class="check">
            <input type="checkbox" name="politica" id="politica">
            <label  class="txtcheck" for="politica">Concordo com a politica de segurança</label>
            
        </div>
        <div class="botaoF">
        <button for="form" class="botaofo">Enviar</button>
        </div>

    </form>
    
</footer>

</body>
</html>