CREATE DATABASE IF NOT EXISTS `loja`;
USE `loja`;

CREATE TABLE IF NOT EXISTS `adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(20) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(30) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `senha` char(50) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `celular` char(14) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT 1,
  `sta` int(1) DEFAULT 0,
  `prod` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `idProduto` (`idProduto`),
  KEY `idCliente` (`idCliente`),
  CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `idProduto` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `quant` int(11) DEFAULT 1,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
