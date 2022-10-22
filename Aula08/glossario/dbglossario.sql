-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Out-2022 às 00:27
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbglossario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpalavra`
--

DROP TABLE IF EXISTS `tbpalavra`;
CREATE TABLE IF NOT EXISTS `tbpalavra` (
  `idPalavra` int(11) NOT NULL AUTO_INCREMENT,
  `tituloPalavra` varchar(50) DEFAULT NULL,
  `descricaoPalavra` varchar(500) DEFAULT NULL,
  `caminhoImagem` varchar(500) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idPalavra`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbpalavra`
--

INSERT INTO `tbpalavra` (`idPalavra`, `tituloPalavra`, `descricaoPalavra`, `caminhoImagem`, `link`) VALUES
(1, 'USB', 'descr usb', 'caminho img usb', 'link usb'),
(2, 'VGA', 'descr VGA', 'caminho img VGA', 'link VGA'),
(3, 'Vídeo', 'descr vídeo', 'caminho img vídeo', 'link vídeo'),
(4, 'Host', 'descr Host', 'caminho img host', 'link host');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
