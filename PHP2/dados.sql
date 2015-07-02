-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2015 às 05:05
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `progweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE IF NOT EXISTS `dados` (
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sexo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `comentarios` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`nome`, `sexo`, `comentarios`) VALUES
('Larissa Maia Ayres', 'feminino', 'Este Ã© um simples comentÃ¡rio de teste.'),
('JosÃ© Alberto', 'masculin', 'Este Ã© um simples comentÃ¡rio de teste.'),
('JosÃ© Alberto', 'masculino', 'Teste');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
