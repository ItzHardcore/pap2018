-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jan-2018 às 17:32
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vigillance`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gravacoes`
--

CREATE TABLE `gravacoes` (
  `id_gravacao` int(11) NOT NULL,
  `id_utilizador` int(11) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `caminho` varchar(30) DEFAULT NULL,
  `agendada` tinyint(1) NOT NULL,
  `alarme` tinyint(1) NOT NULL,
  `sensoresmov` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gravacoes`
--

INSERT INTO `gravacoes` (`id_gravacao`, `id_utilizador`, `nome`, `caminho`, `agendada`, `alarme`, `sensoresmov`) VALUES
(1, 1, 'gravacao1', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registos`
--

CREATE TABLE `registos` (
  `id_registo` int(11) NOT NULL,
  `id_utilizador` int(11) NOT NULL,
  `tipo_registo` varchar(30) NOT NULL,
  `descricaoreg` varchar(100) DEFAULT NULL,
  `alarme` tinyint(1) NOT NULL,
  `sensoresmov` tinyint(1) NOT NULL,
  `gravacao` tinyint(1) NOT NULL,
  `id_gravacao` int(11) NOT NULL,
  `horareg` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registos`
--

INSERT INTO `registos` (`id_registo`, `id_utilizador`, `tipo_registo`, `descricaoreg`, `alarme`, `sensoresmov`, `gravacao`, `id_gravacao`, `horareg`) VALUES
(5, 1, 'Alarme', 'Alarme disparou.', 1, 1, 0, 1, '2018-01-26 16:19:36.045441');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id_utilizador` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `apelido` varchar(30) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telemovel` int(11) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `morada` varchar(40) DEFAULT NULL,
  `localidade` varchar(30) DEFAULT NULL,
  `codpostal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id_utilizador`, `nome`, `apelido`, `data_nasc`, `email`, `password`, `telemovel`, `genero`, `morada`, `localidade`, `codpostal`) VALUES
(1, 'Bruno', 'Silva', '1999-03-24', 'bruno.vp.1999@gmail.com', 'Bruno123', 915347297, 'Masculino', NULL, NULL, '2665-569'),
(3, 'Rafael', 'Carmo', '2000-06-14', 'rafafixe4321@gmail.com', 'Rafael123', 927696431, 'Masculino', NULL, NULL, '2715-622');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gravacoes`
--
ALTER TABLE `gravacoes`
  ADD PRIMARY KEY (`id_gravacao`),
  ADD KEY `id_utilizador` (`id_utilizador`);

--
-- Indexes for table `registos`
--
ALTER TABLE `registos`
  ADD PRIMARY KEY (`id_registo`),
  ADD KEY `id_utilizador` (`id_utilizador`),
  ADD KEY `id_gravacao` (`id_gravacao`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gravacoes`
--
ALTER TABLE `gravacoes`
  MODIFY `id_gravacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registos`
--
ALTER TABLE `registos`
  MODIFY `id_registo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `gravacoes`
--
ALTER TABLE `gravacoes`
  ADD CONSTRAINT `gravacoes_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizadores` (`id_utilizador`);

--
-- Limitadores para a tabela `registos`
--
ALTER TABLE `registos`
  ADD CONSTRAINT `registos_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizadores` (`id_utilizador`),
  ADD CONSTRAINT `registos_ibfk_2` FOREIGN KEY (`id_gravacao`) REFERENCES `gravacoes` (`id_gravacao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
