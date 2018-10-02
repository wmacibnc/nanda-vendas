-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2018 às 07:09
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle`
--

CREATE TABLE `controle` (
  `id` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `precoCusto` int(5) NOT NULL,
  `precoVenda` int(5) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `controle`
--

INSERT INTO `controle` (`id`, `nome`, `codigo`, `quantidade`, `precoCusto`, `precoVenda`, `data`) VALUES
(5, 'Noel de presente', 'B', 4, 10, 20, '2018-10-02 02:37:38'),
(8, 'Noel de presente', 'B', 4, 23, 40, '2018-10-02 02:50:54'),
(10, 'sd', 'sdf', 3, 3, 3, '2018-10-02 02:59:48'),
(11, 'Noel de barba', 'R', 5, 10, 25, '2018-10-02 03:10:12'),
(12, 'Galinda Rosa', 'D', 4, 25, 50, '2018-10-02 03:26:51'),
(13, 'Noel Sentado', 'G', 30, 60, 150, '2018-10-02 04:02:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(5) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `valor` int(5) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `codigo`, `valor`, `data_hora`) VALUES
(1, 'B1', 50, '2018-10-02 03:56:38'),
(2, 'R1', 50, '2018-10-02 03:57:05'),
(3, 'G29', 140, '2018-10-02 04:02:51'),
(4, 'B4', 20, '2018-10-02 04:03:08'),
(5, 'G5', 60, '2018-10-02 04:35:00'),
(6, 'G8', 90, '2018-10-02 04:35:20'),
(7, 'G10', 150, '2018-10-02 04:35:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controle`
--
ALTER TABLE `controle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controle`
--
ALTER TABLE `controle`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
