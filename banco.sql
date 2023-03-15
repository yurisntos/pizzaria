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