-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Set-2024 às 13:46
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nvi`
--

-- --------------------------------------------------------

  create database nvi;

  use nvi;


--
-- Estrutura da tabela `loginn`
--

DROP TABLE IF EXISTS `loginn`;
CREATE TABLE IF NOT EXISTS `loginn` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Telefone` varchar(12) DEFAULT NULL,
  `Nascimento` date DEFAULT NULL,
  `genero` varchar(21) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `residencia` varchar(25) DEFAULT NULL,
  `Cidade` varchar(25) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `Senha` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `loginn`
--

INSERT INTO `loginn` (`id`, `Nome`, `Telefone`, `Nascimento`, `genero`, `estado`, `residencia`, `Cidade`, `usuario`, `email`, `Senha`) VALUES
(1, 'Allan Mendes de Souza ', '11940478469', '2024-09-10', 'Masculino', 'Sp', 'Brasil', 'Poá', 'Lanzin gameplay', 'Allan.m.s.g.01@gmail.com', '123456'),
(2, 'Lucas de Torres Carvalho', '11949243653', '2007-01-06', 'Masculino', 'Sp', 'Brazil', 'Poá', 'Luqeta', 'lucas.carvalho291@etec.sp.gov.br', '12345'),
(3, 'Pablo Henrique', '11969568750', '2006-10-05', 'Masculino', 'Sp', 'Brazil', 'Ferraz de Vasconcelos', 'Pablo Henrique', 'pablohenrique.gato23@gmail.com', '051006Ph'),
(4, 'Robert Pimentel da Silva Amaro', '11993469049', '2006-08-21', 'Masculino', 'Sp', 'Brazil', 'Poá', 'Robert Vidal', 'robertpimenteldasilvaamaro@gmail.com', 'Vidal1!'),
(5, 'João Pedro Serafim de Souza', '11971326013', '2006-12-21', 'Masculino', 'Sp', 'Brazil', 'São Paulo', 'Jhonny', 'joao.souza920@etec.sp.gov.br', 'jhonny'),
(6, 'João Miguel Cardoso', '11993432903', '2006-10-19', 'Masculino', 'Sp', 'Brasil', 'Poá', 'John', 'joaomiguel.cardoso2006@gmail.com', 'j1234567'),
(10, 'teste', '132323242', '2024-09-04', 'Masculino', 'Pa', 'Brasil', 'SUZANO', 'teste', 'teste@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
