-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 02-Out-2018 às 06:07
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7337092_nanda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTROLE`
--

CREATE TABLE `CONTROLE` (
  `ID` int(5) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CODIGO` varchar(20) NOT NULL,
  `QUANTIDADE` int(5) NOT NULL,
  `PRECOCUSTO` int(5) NOT NULL,
  `PRECOVENDA` int(5) NOT NULL,
  `DATA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CONTROLE`
--

INSERT INTO `CONTROLE` (`ID`, `NOME`, `CODIGO`, `QUANTIDADE`, `PRECOCUSTO`, `PRECOVENDA`, `DATA`) VALUES
(15, 'Anjo Pequeno', 'A', 13, 5, 10, '2018-10-02 05:51:57'),
(16, 'Anjo Grande', 'B', 6, 5, 13, '2018-10-02 05:52:31'),
(17, 'Coelho', 'C', 8, 22, 50, '2018-10-02 05:53:29'),
(18, 'Boneca Pitica', 'D', 5, 7, 25, '2018-10-02 05:54:00'),
(19, 'Boneca Julieta P', 'E', 2, 15, 35, '2018-10-02 05:54:40'),
(20, 'Boneca Julieta M', 'F', 5, 20, 60, '2018-10-02 05:55:08'),
(21, 'Boneca Julieta G', 'G', 5, 45, 100, '2018-10-02 05:55:39'),
(22, 'Noel Barbudão Sentado', 'H', 6, 15, 35, '2018-10-02 05:56:14'),
(23, 'Noel Porta Garrafa', 'J', 4, 20, 50, '2018-10-02 05:56:52'),
(24, 'Boneca Princesa Gigida', 'K', 4, 10, 35, '2018-10-02 05:57:23'),
(25, 'Anjo dos Zoião', 'L', 5, 15, 35, '2018-10-02 05:57:52'),
(26, 'Noel Porta Colher', 'M', 6, 25, 65, '2018-10-02 05:58:37'),
(27, 'Noel Pingente', 'N', 15, 8, 20, '2018-10-02 05:59:01'),
(28, 'Africana Bujão', 'O', 8, 20, 40, '2018-10-02 05:59:49'),
(29, 'Africana Olivia', 'P', 7, 20, 40, '2018-10-02 06:00:14'),
(30, 'Galinda', 'Q', 4, 15, 35, '2018-10-02 06:00:51'),
(31, 'Cachorrinho', 'R', 9, 6, 15, '2018-10-02 06:01:28'),
(32, 'Ponteira de Flôr', 'S', 45, 4, 10, '2018-10-02 06:02:11'),
(33, 'Bebê Miminha', 'T', 6, 20, 45, '2018-10-02 06:02:39'),
(34, 'Pingente de Arvoré', 'U', 6, 3, 5, '2018-10-02 06:03:31'),
(35, 'Boneca Moranguinho', 'V', 10, 4, 10, '2018-10-02 06:04:02'),
(36, 'Trio Noel', 'X', 5, 40, 100, '2018-10-02 06:04:53'),
(37, 'Noel Gigante', 'Y', 4, 25, 55, '2018-10-02 06:05:19'),
(38, 'Mamãe Noel', 'Z', 2, 25, 50, '2018-10-02 06:05:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `VENDA`
--

CREATE TABLE `VENDA` (
  `ID_VENDA` int(5) NOT NULL,
  `CODIGO` varchar(20) NOT NULL,
  `VALOR` int(5) NOT NULL,
  `DATA_HORA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CONTROLE`
--
ALTER TABLE `CONTROLE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `VENDA`
--
ALTER TABLE `VENDA`
  ADD PRIMARY KEY (`ID_VENDA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CONTROLE`
--
ALTER TABLE `CONTROLE`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `VENDA`
--
ALTER TABLE `VENDA`
  MODIFY `ID_VENDA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
