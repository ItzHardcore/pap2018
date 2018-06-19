-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Maio-2018 às 12:12
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fnac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `categoria` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` float NOT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_unidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `categoria`, `nome`, `marca`, `preco`, `descricao`, `stock`, `qtd_unidades`) VALUES
(5, 'Telemóveis e Conectáveis', 'Future Classics', 'Vini Vici Productions', 21, 'Cd de música Genero: Psytrance', 'Sim', 260),
(6, 'Bilheteira, Concertos, Espetáculos', 'Nos Alive 2018', 'Fnac', 125, 'PASSEIO MARÍTIMO DE ALGÉS,\r\nOeiras, 17:00\r\nPasse 2 Dias (12 e 13 de Julho)', 'Sim', 35),
(9, 'Jogos, Brinquedos e Puericultura', 'My Little Pony Amiguinhas', 'Hasbro', 7, 'São as ponis da série My Little Pony com 7,5 cm', 'Sim', 100),
(11, 'Telemóveis e Conectáveis', 'P20', 'Huawei', 890, 'Dimensão do Ecrã: 6,1 Memória Interna: 128 GB Memória RAM: 6 GB', 'Sim', 250),
(12, 'Informática, Portáteis, Tablets', 'Apple MacBook Pro 13', 'Apple', 1319, 'Processador: Intel® Core™ i5 Dual Core Memória RAM:8 GB Disco SSD: 128 GB', 'Sim', 50),
(13, 'Fotografia, Vídeo, Lab Foto', 'Pack Fnac Panasonic Lumix DMC-TZ80 ', 'Panasonic', 300, 'Resolução Foto: 18.1 MP Resolução Máxima de Vídeo: Ultra HD 4K 3840 x 2160, 25fps Ecrã: LCD 3 fixo, 1,040,000 px ISO: 80-6400', 'Sim', 25),
(14, 'Gaming, Jogos, Consolas', 'PS4 Fifa 18', 'Sony', 399.99, 'Consola PS4 com um comando original PS\r\nInclui jogo Fifa 18 (CR7 Edition)\r\n', 'Sim', 20),
(42, 'Informática, Portáteis, Tablets', 'Headset', 'Razer', 149.99, 'Headset da Razer 7.1 Chroma\r\nCompatível com Windows 7,8,10\r\nIdeal para jogos\r\n', 'Sim', 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id_utilizador` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
