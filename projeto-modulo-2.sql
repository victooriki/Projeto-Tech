-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/05/2023 às 18:23
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto-modulo-2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `telefone` varchar(32) NOT NULL,
  `endereco` varchar(128) NOT NULL,
  `limite_de_credito` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `data_de_nascimento`, `telefone`, `endereco`, `limite_de_credito`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Messi', '1990-01-20', '31992374555', 'Avenida Andrade, bloco c, n 455', 30000, '2023-05-02 17:57:39', '2023-05-04 14:32:45', '0000-00-00 00:00:00'),
(13, 'Neymar', '1995-03-03', '31992374555', 'Rua Magnolia, apto 225, bloco d', 150, '2023-05-05 11:55:20', '2023-05-05 11:55:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `rg` varchar(32) NOT NULL,
  `cpf` varchar(32) NOT NULL,
  `telefone` varchar(32) NOT NULL,
  `endereco` varchar(128) NOT NULL,
  `data_de_contratacao` date NOT NULL,
  `cargo` varchar(128) NOT NULL,
  `salario` double NOT NULL,
  `dia_de_pagamento` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `data_de_nascimento`, `rg`, `cpf`, `telefone`, `endereco`, `data_de_contratacao`, `cargo`, `salario`, `dia_de_pagamento`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'Manoel Gomes', '1950-10-10', '20193193', '12312312312', '31945456677', 'Rua Filante, 80, casa b', '2023-04-05', 'Dev', 10000, 5, '2023-05-04 14:32:03', '2023-05-04 14:32:03', '0000-00-00 00:00:00'),
(14, 'Diogo', '1991-03-03', '20193777', '705.487.99944', '31992374646', 'Rua Florenza, 145', '2023-02-08', 'Motorista', 2000, 5, '2023-05-05 12:00:16', '2023-05-05 12:00:16', '0000-00-00 00:00:00'),
(16, 'Defante', '1995-12-12', '20193655', '705.487.444-48', '31992374555', 'Rua Trocaria, 80', '2023-12-12', 'Diretor', 495, 3, '2023-05-05 13:13:41', '2023-05-05 13:13:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `logins`
--

CREATE TABLE `logins` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(128) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `primeiro_nome` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `logins`
--

INSERT INTO `logins` (`id_login`, `usuario`, `senha`, `primeiro_nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Administrador', '2023-05-17 12:27:51', '2023-05-04 18:20:41', '2023-05-17 12:27:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-04-28-120621', 'App\\Database\\Migrations\\Clientes', 'default', 'App', 1682684236, 1),
(2, '2023-05-03-131713', 'App\\Database\\Migrations\\Funcionarios', 'default', 'App', 1683120369, 2),
(3, '2023-05-04-114330', 'App\\Database\\Migrations\\Produtos', 'default', 'App', 1683201151, 3),
(4, '2023-05-04-142143', 'App\\Database\\Migrations\\Logins', 'default', 'App', 1683210467, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `quantidade_minima` int(11) NOT NULL,
  `valor_de_compra` double NOT NULL,
  `valor_de_venda` double NOT NULL,
  `margem_de_lucro` double NOT NULL,
  `validade` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `quantidade`, `quantidade_minima`, `valor_de_compra`, `valor_de_venda`, `margem_de_lucro`, `validade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Notebook Lenovo', 'I5 11000, 32gb RAM, placa de vídeo gtx 1650 ti', 3, 1, 3700, 7400, 100, '0000-00-00', '2023-05-04 14:29:47', '2023-05-04 14:29:47', '0000-00-00 00:00:00'),
(4, 'Iphone 14 Pro', 'Novo de fabrica', 15, 5, 5500, 7500, 25, '0000-00-00', '2023-05-05 12:03:29', '2023-05-05 12:03:29', '0000-00-00 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices de tabela `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `logins`
--
ALTER TABLE `logins`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
