-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Maio-2021 às 13:44
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `team1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_burnout`
--

DROP TABLE IF EXISTS `tab_burnout`;
CREATE TABLE IF NOT EXISTS `tab_burnout` (
  `COD_BURNOUT` int NOT NULL AUTO_INCREMENT,
  `COD_FUNCIONARIO` int NOT NULL,
  `DATA_REGISTRO` date NOT NULL,
  `QUESTAO_1` int NOT NULL,
  `QUESTAO_2` int NOT NULL,
  `QUESTAO_3` int NOT NULL,
  `QUESTAO_4` int NOT NULL,
  `QUESTAO_5` int NOT NULL,
  `QUESTAO_6` int NOT NULL,
  `QUESTAO_7` int NOT NULL,
  `QUESTAO_8` int NOT NULL,
  `QUESTAO_9` int NOT NULL,
  `QUESTAO_10` int NOT NULL,
  `QUESTAO_11` int NOT NULL,
  `QUESTAO_12` int NOT NULL,
  `QUESTAO_13` int NOT NULL,
  `QUESTAO_14` int NOT NULL,
  `QUESTAO_15` int NOT NULL,
  `QUESTAO_16` int NOT NULL,
  `QUESTAO_17` int NOT NULL,
  `QUESTAO_18` int NOT NULL,
  `QUESTAO_19` int NOT NULL,
  `QUESTAO_20` int NOT NULL,
  `RESULTADO` int NOT NULL,
  `FLG_PUBLICO` varchar(1) NOT NULL,
  PRIMARY KEY (`COD_BURNOUT`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_conexao`
--

DROP TABLE IF EXISTS `tab_conexao`;
CREATE TABLE IF NOT EXISTS `tab_conexao` (
  `CODIGO` int NOT NULL AUTO_INCREMENT,
  `COD_FUNCINARIO` int NOT NULL,
  `USUARIO` varchar(255) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `FLG_CONEC` varchar(1) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tab_conexao`
--

INSERT INTO `tab_conexao` (`CODIGO`, `COD_FUNCINARIO`, `USUARIO`, `NOME`, `FLG_CONEC`) VALUES
(1, 6, '', '', 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_empresa`
--

DROP TABLE IF EXISTS `tab_empresa`;
CREATE TABLE IF NOT EXISTS `tab_empresa` (
  `COD_EMPRESA` int NOT NULL AUTO_INCREMENT,
  `RAZAO_SOCIAL` varchar(255) NOT NULL,
  `CNPJ` varchar(18) NOT NULL,
  `AREA` varchar(100) NOT NULL,
  PRIMARY KEY (`COD_EMPRESA`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_funcionario`
--

DROP TABLE IF EXISTS `tab_funcionario`;
CREATE TABLE IF NOT EXISTS `tab_funcionario` (
  `COD_FUNCINARIO` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SENHA` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `CELULAR` varchar(14) NOT NULL,
  `COD_EMPRESA` int NOT NULL,
  PRIMARY KEY (`COD_FUNCINARIO`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
