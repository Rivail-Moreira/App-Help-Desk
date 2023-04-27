-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27/04/2023 às 18:48
-- Versão do servidor: 8.0.32
-- Versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_helpdesk`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int NOT NULL,
  `nome_categoria` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_chamado`
--

CREATE TABLE `tb_chamado` (
  `id_chamado` int NOT NULL,
  `titulo_chamado` varchar(100) DEFAULT NULL,
  `descricao_chamado` varchar(300) DEFAULT NULL,
  `id_categoria` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_perfil`
--

CREATE TABLE `tb_perfil` (
  `id_perfil` int NOT NULL,
  `nome_perfil` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_perfil`
--

INSERT INTO `tb_perfil` (`id_perfil`, `nome_perfil`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int NOT NULL,
  `nome_usuario` varchar(50) DEFAULT NULL,
  `email_usuario` varchar(50) DEFAULT NULL,
  `senha_usuario` varchar(20) DEFAULT NULL,
  `id_perfil` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `id_perfil`) VALUES
(1, 'teste', 'teste@gmail', '111', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `tb_chamado`
--
ALTER TABLE `tb_chamado`
  ADD PRIMARY KEY (`id_chamado`),
  ADD KEY `fk_id_categoria` (`id_categoria`);

--
-- Índices de tabela `tb_perfil`
--
ALTER TABLE `tb_perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_perfil_2` (`id_perfil`),
  ADD KEY `id_perfil` (`id_perfil`),
  ADD KEY `id_perfil_3` (`id_perfil`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_chamado`
--
ALTER TABLE `tb_chamado`
  MODIFY `id_chamado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_perfil`
--
ALTER TABLE `tb_perfil`
  MODIFY `id_perfil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_chamado`
--
ALTER TABLE `tb_chamado`
  ADD CONSTRAINT `fk_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id_categoria`);

--
-- Restrições para tabelas `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `fk_id_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
