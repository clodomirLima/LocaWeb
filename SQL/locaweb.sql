-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 14-Abr-2019 às 15:30
-- Versão do servidor: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.0.33-6+ubuntu18.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locaweb`
--
CREATE DATABASE locaweb;

USE locaweb;
-- --------------------------------------------------------

--
-- Estrutura da tabela `alugados`
--

CREATE TABLE `alugados` (
  `idAlugado` int(11) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `codigo` int(4) NOT NULL,
  `filme` varchar(60) NOT NULL,
  `dtAlugado` date NOT NULL,
  `hrAlugado` char(5) NOT NULL,
  `clientes_idCliente` int(11) NOT NULL,
  `catalogo_idCatalogo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alugados`
--

INSERT INTO `alugados` (`idAlugado`, `cliente`, `codigo`, `filme`, `dtAlugado`, `hrAlugado`, `clientes_idCliente`, `catalogo_idCatalogo`) VALUES
(1, 'felipe', 3356, 'Dumbo', '2019-04-14', '15:18', 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `catalogo`
--

CREATE TABLE `catalogo` (
  `idCatalogo` int(11) NOT NULL,
  `codigo` int(6) NOT NULL,
  `filme` varchar(60) NOT NULL,
  `imagen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `catalogo`
--

INSERT INTO `catalogo` (`idCatalogo`, `codigo`, `filme`, `imagen`) VALUES
(1, 324205, 'Shazan', '../imagensCatalogo/bda198afe1618f199be637ff102fe0dc.jpeg'),
(2, 407820, 'Capta marvel', '../imagensCatalogo/34ecc531451bb35c3543e3dda17aedcc.jpeg'),
(3, 351893, 'Dumbo', '../imagensCatalogo/b778d1293eb736e0ee991575ebd82572.jpeg'),
(4, 471978, 'Logan', '../imagensCatalogo/bb07312b151f579a8801b5ab828ab28a.jpeg'),
(5, 738590, 'Mad Maz', '../imagensCatalogo/680c9dd28a660301566eea25be0c4254.jpeg'),
(6, 673233, 'Jona hex', '../imagensCatalogo/ecd9563a4656b3d99d99566ad01fb9e3.jpeg'),
(7, 495509, 'Vingadores', '../imagensCatalogo/42a11648b8dc9e2e10240526fd6823f3.jpeg'),
(8, 299392, 'Thor', '../imagensCatalogo/702b3cedaefe1bdd4deaaaaad35d3208.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `codigo` int(4) NOT NULL,
  `funcionarios_idFuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `cpf`, `codigo`, `funcionarios_idFuncionario`) VALUES
(2, 'felipe', '161.038.280-31', 3356, 1),
(3, 'Leticia', '565.993.110-32', 4638, 1),
(5, 'Lucas', '000.208.210-18', 3879, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `codigo` int(4) NOT NULL,
  `perfil` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idFuncionario`, `nome`, `codigo`, `perfil`) VALUES
(1, 'Joel', 1212, 'Administrador'),
(2, 'Ana', 1111, 'Funcionario'),
(3, 'Caio', 1998, 'Funcionario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alugados`
--
ALTER TABLE `alugados`
  ADD PRIMARY KEY (`idAlugado`),
  ADD KEY `clientes_idCliente` (`clientes_idCliente`),
  ADD KEY `catalogo_idCatalogo` (`catalogo_idCatalogo`);

--
-- Indexes for table `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`idCatalogo`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `funcionarios_idFuncionario` (`funcionarios_idFuncionario`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alugados`
--
ALTER TABLE `alugados`
  MODIFY `idAlugado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `idCatalogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alugados`
--
ALTER TABLE `alugados`
  ADD CONSTRAINT `alugados_ibfk_1` FOREIGN KEY (`clientes_idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `alugados_ibfk_2` FOREIGN KEY (`catalogo_idCatalogo`) REFERENCES `catalogo` (`idCatalogo`);

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`funcionarios_idFuncionario`) REFERENCES `funcionarios` (`idFuncionario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
