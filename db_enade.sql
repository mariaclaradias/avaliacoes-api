-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jul-2018 às 01:21
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_enade`
--
CREATE DATABASE IF NOT EXISTS `db_enade` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_enade`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`) VALUES
(1, 'Ciência da Computação'),
(2, 'Administração '),
(3, 'Direito '),
(4, 'Ciências Contábeis '),
(5, 'Turismo '),
(6, 'Jornalismo '),
(7, 'Odontologia ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursoavaliacao`
--

CREATE TABLE `cursoavaliacao` (
  `ano` int(11) NOT NULL,
  `idInstituicao` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `nota` decimal(7,4) DEFAULT NULL,
  `notaMedia` decimal(7,4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursoavaliacao`
--

INSERT INTO `cursoavaliacao` (`ano`, `idInstituicao`, `idCurso`, `nota`, `notaMedia`) VALUES
(2018, 2, 1, '55.0000', '55.9800'),
(2018, 2, 2, '55.0000', '45.0000'),
(2018, 4, 2, '90.0000', '56.0000'),
(2018, 3, 2, '78.0000', '65.0000'),
(2013, 3, 3, '67.0000', '89.0000'),
(2018, 2, 5, '56.0000', '57.0000'),
(2018, 2, 7, '65.0000', '56.0000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id` int(11) NOT NULL COMMENT 'id da instituição',
  `nome` varchar(200) NOT NULL COMMENT 'nome da instituição',
  `sigla` varchar(20) NOT NULL COMMENT 'sigla da instituição'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id`, `nome`, `sigla`) VALUES
(2, 'Pontifícia Universidade Católica de Minas Gerais', 'PUCMG'),
(3, 'Universidade de Brasilia ', 'UNB'),
(4, 'Universidade de Caxias do Sul', 'UCS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicaoavaliacao`
--

CREATE TABLE `instituicaoavaliacao` (
  `ano` int(11) NOT NULL,
  `idInstituicao` int(11) NOT NULL,
  `notaGeral` decimal(7,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `instituicaoavaliacao`
--

INSERT INTO `instituicaoavaliacao` (`ano`, `idInstituicao`, `notaGeral`) VALUES
(2013, 2, '54.0000'),
(2013, 3, '65.0000'),
(2013, 4, '60.0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursoavaliacao`
--
ALTER TABLE `cursoavaliacao`
  ADD PRIMARY KEY (`ano`,`idInstituicao`,`idCurso`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instituicaoavaliacao`
--
ALTER TABLE `instituicaoavaliacao`
  ADD PRIMARY KEY (`ano`,`idInstituicao`),
  ADD KEY `c_idEnadeInstituicao` (`idInstituicao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id da instituição', AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `instituicaoavaliacao`
--
ALTER TABLE `instituicaoavaliacao`
  ADD CONSTRAINT `c_idEnadeInstituicao` FOREIGN KEY (`idInstituicao`) REFERENCES `instituicao` (`id`);
