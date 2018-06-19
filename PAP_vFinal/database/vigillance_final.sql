-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jun-2018 às 21:45
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vigillance_final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ipcams`
--

CREATE TABLE `ipcams` (
  `id_cam` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `nome_cam` varchar(30) NOT NULL,
  `ip_cam` varchar(20) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registos`
--

CREATE TABLE `registos` (
  `id_registo` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `apelido` varchar(40) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `telemovel` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `morada` varchar(100) DEFAULT NULL,
  `localidade` varchar(30) DEFAULT NULL,
  `codpostal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipcams`
--
ALTER TABLE `ipcams`
  ADD PRIMARY KEY (`id_cam`),
  ADD KEY `id_utilizador` (`id_utilizador`);

--
-- Indexes for table `registos`
--
ALTER TABLE `registos`
  ADD PRIMARY KEY (`id_registo`),
  ADD KEY `id_utilizador` (`id_utilizador`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipcams`
--
ALTER TABLE `ipcams`
  MODIFY `id_cam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registos`
--
ALTER TABLE `registos`
  MODIFY `id_registo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ipcams`
--
ALTER TABLE `ipcams`
  ADD CONSTRAINT `ipcams_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizadores` (`id`);

--
-- Limitadores para a tabela `registos`
--
ALTER TABLE `registos`
  ADD CONSTRAINT `registos_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizadores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
