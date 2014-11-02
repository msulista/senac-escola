-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Nov-2014 às 23:58
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `matricula` smallint(9) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `curso` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12692 ;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `email`, `curso`) VALUES
(12688, 'Marcus Rodrigues', 'marcus.rodrigues81@gmail.com', 'Análise e desenvolvimento de sistemas'),
(12689, 'Abilio', 'abilio@gmail.com', 'Analise e Desenvolvimento de Sistemas'),
(12690, 'Vinicius Medeiros', 'vinicius@hotmail.com', 'Analise e Desenvolvimento de Sistemas'),
(12691, 'Juquinha', 'juquinha@hotmail.com', 'Sistema Informacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `codigo` smallint(9) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `data_admissao` date DEFAULT NULL,
  `disciplina` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11116 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`codigo`, `nome`, `data_admissao`, `disciplina`) VALUES
(11111, 'Sirlei Isaias', '2014-11-01', 'Programacao para Internet I'),
(11112, 'Casacurta', '2014-10-02', 'Organizacao de Computadores'),
(11113, 'Thiago Mota', '2014-06-17', 'Algoritimo e Programacao II'),
(11114, 'Leda', '2011-02-08', ''),
(11115, 'Leda', '2014-08-06', 'Matematica Aplicada');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
