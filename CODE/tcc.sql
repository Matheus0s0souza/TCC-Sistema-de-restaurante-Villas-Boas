-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Abr-2024 às 02:49
-- Versão do servidor: 10.10.2-MariaDB
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70),
  `email` varchar(100),
  `senha` varchar(100),
  `nasc` date,
  `tel` int(11),
  `ende` varchar(70),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`, `nasc`, `tel`, `ende`) VALUES
(1, 'marco', 'marco@gmail.com', '123', '2024-03-01', 123, 'hehe'),
(2, 'vic', 'vic@email', '123', '2024-03-01', 123, 'hehe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_funcionario`
--

DROP TABLE IF EXISTS `login_funcionario`;
CREATE TABLE IF NOT EXISTS `login_funcionario` (
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `nm_func` varchar(50) ,
  `email_func` varchar(50) ,
  `senha_func` varchar(50) ,
  `cpf_func` int(50) ,
  `cargo` varchar(50) ,
  `hierarquia` varchar(50) ,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `login_funcionario`
--

INSERT INTO `login_funcionario` (`id_func`, `nm_func`, `email_func`, `senha_func`, `cpf_func`, `cargo`, `hierarquia`, `img`) VALUES
(1, 'vic', 'vic@email', 'senha123', 123, 'adm', '1', 'vic.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ingredientes`
--

DROP TABLE IF EXISTS `tb_ingredientes`;
CREATE TABLE IF NOT EXISTS `tb_ingredientes` (
  `id_ingr` int(11) NOT NULL AUTO_INCREMENT,
  `nm_ingr` varchar(100),
  `gra_ingr` int(100),
  `desc_ingr` text,
  PRIMARY KEY (`id_ingr`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_ingredientes`
--

INSERT INTO `tb_ingredientes` (`id_ingr`, `nm_ingr`, `gra_ingr`, `desc_ingr`) VALUES
(1, 'frango', 100, 'frango assado a vapor e ervas'),
(2, 'salada de tomate', 50, 'salada de tomates com azeite'),
(3, 'peixe grelhado', 100, 'peixe assado na grelha'),
(5, 'macarrao', 50, 'macarrao cozido'),
(6, 'arroz', 50, 'arroz cozido com cenoura'),
(7, 'batata frita', 50, 'batatas fritas pequenas'),
(10, 'gilo', 50, 'salada de gilo com vinagrete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pratos`
--

DROP TABLE IF EXISTS `tb_pratos`;
CREATE TABLE IF NOT EXISTS `tb_pratos` (
  `id_prato` int(11) NOT NULL AUTO_INCREMENT,
  `nm_prato` varchar(100) DEFAULT NULL,
  `prato_ingr_1` varchar(100) DEFAULT NULL,
  `prato_ingr_2` varchar(100) DEFAULT NULL,
  `prato_ingr_3` varchar(100) DEFAULT NULL,
  `preco_prato` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prato`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
