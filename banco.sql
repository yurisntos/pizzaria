CREATE DATABASE pizzaria;

USE pizzaria;

CREATE TABLE produtos (
    idprodutos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    descricao TEXT NULL,
    imagem VARCHAR(255) NULL
); 
CREATE TABLE pedidos (
    idpedidos INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    cliente_id INT NOT NULL,
    total DECIMAL(10,2),
    data_pedido DATE NOT NULL
);

CREATE TABLE itenspedidos (
    iditenspedidos INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    produto_id INT NOT NULL,
    pedido_id INT NOT NULL, 
    quantidade INT NOT NULL, 
    observacao TEXT NULL,
    valor DECIMAL(10,2) NOT NULL
);

CREATE TABLE administrador (
    idadm INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL, 
    email TEXT NULL, 
    senha VARCHAR(50) NOT NULL
);

CREATE TABLE usuario(
    iduser INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL, 
    email TEXT NULL, 
    senha VARCHAR(50) NOT NULL
    
);

INSERT INTO produtos ( nome, descricao, valor)
VALUES

  ( 'Mussarela', 'Molho de tomate, queijo mussarela', 30.00),
  ( 'Calabresa', 'Molho de tomate, queijo mussarela, calabresa fatiada', 40.00),
  ( 'Frango com catupiry', 'Molho de tomate, queijo mussarela, frango desfiado, catupiry', 50.00),
  ( 'Portuguesa', 'Molho de tomate, queijo mussarela, presunto, cebola, ovo cozido, azeitonas', 45.00),
  ( 'Marguerita', 'Molho de tomate, queijo mussarela, tomate em rodelas, manjericão', 35.00),
  ( 'Quatro queijos', 'Molho de tomate, queijo mussarela, queijo gorgonzola, queijo parmesão, catupiry', 55.00),
  ( 'Especial da casa', 'Molho de tomate, queijo mussarela, calabresa fatiada, bacon, cebola, pimentão, azeitonas', 50.00),
  ( 'Vegetariana', 'Molho de tomate, queijo mussarela, brócolis, champignon, pimentão, cebola, tomate em rodelas', 40.00),
  ( 'Pepperoni', 'Molho de tomate, queijo mussarela, pepperoni fatiado', 45.00);

SELECT * FROM produtos; 


