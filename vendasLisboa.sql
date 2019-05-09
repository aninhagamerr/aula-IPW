-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/05/2019 às 14:52
-- Versão do servidor: 10.1.38-MariaDB
-- Versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vendasLisboa`
--
CREATE DATABASE IF NOT EXISTS `vendasLisboa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vendasLisboa`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `celular`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `cep`) VALUES
(12, 'Valdemar', '40028922', '97318319', 'estrada para a felicidade', 69, 'casa', 'jardim do millos', 'cafelandia', '08006666'),
(13, 'louize jacinto pinto', '6666444222', '9765342', 'izeu volpato', 205, 'casa', 'real II', 'sarandi', '08007777');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `valor_venda` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor_venda`) VALUES
(11, 'café', 'puro pó', '3'),
(33, 'paçoca', 'amendoim recheado', '6'),
(45, 'pão de queijo', 'pão de queijo com muito queijo de minas gerais ', '2'),
(65, 'cachaça', 'bebida alcoólica ', '15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas_itens`
--

CREATE TABLE `vendas_itens` (
  `id` int(11) NOT NULL,
  `id_vendas` int(11) NOT NULL,
  `id_produtos` int(11) NOT NULL,
  `quantidade` decimal(10,0) NOT NULL,
  `valor_unitario` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Vendedores`
--

CREATE TABLE `Vendedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comissao` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Vendedores`
--

INSERT INTO `Vendedores` (`id`, `nome`, `celular`, `email`, `comissao`) VALUES
(69, 'jhonathan garibel', '776535382', 'jhonathangaribel@hotmail.com', '99'),
(77, 'maycon aguiar', '09867443', 'maycaoaguiar@gmail.com', '30');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_cliente` (`id_cliente`),
  ADD KEY `fk_id_vendedor` (`id_vendedor`);

--
-- Índices de tabela `vendas_itens`
--
ALTER TABLE `vendas_itens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_vendas` (`id_vendas`);

--
-- Índices de tabela `Vendedores`
--
ALTER TABLE `Vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendas_itens`
--
ALTER TABLE `vendas_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Vendedores`
--
ALTER TABLE `Vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_id_vendedor` FOREIGN KEY (`id_vendedor`) REFERENCES `Vendedores` (`id`);

--
-- Restrições para tabelas `vendas_itens`
--
ALTER TABLE `vendas_itens`
  ADD CONSTRAINT `fk_id_vendas` FOREIGN KEY (`id_vendas`) REFERENCES `vendas_itens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
