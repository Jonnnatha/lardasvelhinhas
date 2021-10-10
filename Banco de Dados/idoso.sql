-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10-Out-2021 às 14:30
-- Versão do servidor: 5.7.33
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `idoso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_idoso`
--

CREATE TABLE `cad_idoso` (
  `ID` int(100) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `data` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `documento` varchar(100) DEFAULT NULL,
  `idade` varchar(100) DEFAULT NULL,
  `rg` varchar(100) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `beneficio` varchar(100) DEFAULT NULL,
  `munnasc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_idoso`
--

INSERT INTO `cad_idoso` (`ID`, `nome`, `data`, `genero`, `documento`, `idade`, `rg`, `cpf`, `beneficio`, `munnasc`) VALUES
(1, 'Jonnatha Gustavo Carvalho Borges', '07/09/1996', 'Masculino', 'Sim', '25', '26262626', '61698156151', 'Benefício de Prestação Continuada', 'Janauba'),
(2, 'teste', '10/11/2021', 'Feminino', 'Sim', '25', '557', '75757', 'Pensão', '7575');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_idoso`
--
ALTER TABLE `cad_idoso`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_idoso`
--
ALTER TABLE `cad_idoso`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
