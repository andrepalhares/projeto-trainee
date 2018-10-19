-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Out-2018 às 00:47
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancodedados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE `musicas` (
  `ID_M` int(11) NOT NULL,
  `Nome` text,
  `Duracao` text,
  `Genero` text,
  `Album` text,
  `Artista` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pertence`
--

CREATE TABLE `pertence` (
  `ID_P` int(11) NOT NULL,
  `ID_M` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlist`
--

CREATE TABLE `playlist` (
  `ID_P` int(11) NOT NULL,
  `Nome` text,
  `Descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`ID_M`);

--
-- Indexes for table `pertence`
--
ALTER TABLE `pertence`
  ADD KEY `ID_P` (`ID_P`),
  ADD KEY `ID_M` (`ID_M`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`ID_P`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pertence`
--
ALTER TABLE `pertence`
  ADD CONSTRAINT `pertence_ibfk_1` FOREIGN KEY (`ID_P`) REFERENCES `playlist` (`ID_P`),
  ADD CONSTRAINT `pertence_ibfk_2` FOREIGN KEY (`ID_M`) REFERENCES `musicas` (`ID_M`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
