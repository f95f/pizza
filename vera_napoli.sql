-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Maio-2023 às 19:07
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vera_napoli`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
CREATE TABLE IF NOT EXISTS `ingredientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `medida` varchar(16) NOT NULL,
  `estoque` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `nome`, `valor`, `medida`, `estoque`) VALUES
(1, 'Farinha de Trigo', '10.00', 'Kg', 1),
(2, 'Tomate', '15.00', 'Kg', 1),
(3, 'Açucar', '8.00', 'Kg', 1),
(4, 'Azeitona', '25.00', 'Kg', 1),
(5, 'Oregano', '25.00', 'Kg', 1),
(6, 'Azeite', '35.89', 'L', 1),
(7, 'Água', '2.99', 'L', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sabor` varchar(64) NOT NULL,
  `tipo` varchar(64) NOT NULL,
  `imagem` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'no_icon',
  `descricao` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '"Sem descrição."',
  `valor` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pizza`
--

INSERT INTO `pizza` (`id`, `sabor`, `tipo`, `imagem`, `descricao`, `valor`) VALUES
(1, 'Mussarela', 'Tradicional', 'mussarela', 'Tradicional de queijo mussarela com tomates frescos, azeitonas e orégano.', '38.99'),
(2, 'Mac & Cheese', 'Internacional', 'mac_n_cheese', 'Pizza com mussarela especial, parmesão e massa fusili.', '49.99'),
(3, 'Banana com Canela', 'Doce', 'banana', 'Pizza doce de banana com doce de leite e canela.', '45.59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
