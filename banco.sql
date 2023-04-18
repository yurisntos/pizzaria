CREATE DATABASE pizzaria;

USE pizzaria;

CREATE TABLE produtos (
    idprodutos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    descricao TEXT NULL,
    ingredientes TEXT NULL
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

CREATE TABLE cliente(
    idcliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(200) NOT NULL,
    telefone INT(11) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    endereco TEXT NOT NULL
    
);

INSERT INTO produtos (
VALUES
  (1, 'Mussarela', 'Molho de tomate, queijo mussarela', 30.00),
  (2, 'Calabresa', 'Molho de tomate, queijo mussarela, calabresa fatiada', 40.00),
  (3, 'Frango com catupiry', 'Molho de tomate, queijo mussarela, frango desfiado, catupiry', 50.00),
  (4, 'Portuguesa', 'Molho de tomate, queijo mussarela, presunto, cebola, ovo cozido, azeitonas', 45.00),
  (5, 'Marguerita', 'Molho de tomate, queijo mussarela, tomate em rodelas, manjericão', 35.00),
  (6, 'Quatro queijos', 'Molho de tomate, queijo mussarela, queijo gorgonzola, queijo parmesão, catupiry', 55.00),
  (7, 'Especial da casa', 'Molho de tomate, queijo mussarela, calabresa fatiada, bacon, cebola, pimentão, azeitonas', 50.00),
  (8, 'Vegetariana', 'Molho de tomate, queijo mussarela, brócolis, champignon, pimentão, cebola, tomate em rodelas', 40.00),
  (9, 'Pepperoni', 'Molho de tomate, queijo mussarela, pepperoni fatiado', 45.00);
)
SELECT * FROM produtos; 