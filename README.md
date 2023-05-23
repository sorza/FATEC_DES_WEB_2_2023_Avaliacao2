# FATEC_DES_WEB_2_2023_Avaliacao2

Projeto CRUD utilizando PDO
Contexto: Vestibular
Faculdade de Tecnologia de Araras
2º Semestre
Disciplina: Desenvolvimento WEB II

Linguagem utilizada: PHP
SGBD MySQL
Conexão PDO

Funcionalidades limitadas devido ao tempo para trabalho


----------- BASE DE DADOS -----------------

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Maio-2023 às 05:05
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vestibular`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `ensino_publico` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`id`, `nome`, `rg`, `telefone`, `ensino_publico`) VALUES
(1, 'Alexandre Sorza', '409830318', '19997737436', 1),
(3, 'Ana Claudia', '43100736x', '19998852208', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
