-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/06/2025 às 14:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetobaska`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `conferencias_leste`
--

CREATE TABLE `conferencias_leste` (
  `ID_CONFERÊNCIA1` int(11) NOT NULL,
  `TIMES_LESTE` varchar(1000) DEFAULT NULL,
  `MAIORES_CAMPEOES_LESTE` varchar(100) DEFAULT NULL,
  `PRINCIPAIS_JOGADORES` varchar(1000) DEFAULT NULL,
  `MELHORES_RIVALIDADES` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `conferencias_oeste`
--

CREATE TABLE `conferencias_oeste` (
  `ID_CONFERENCIA` int(11) NOT NULL,
  `TIMES_OESTE` varchar(1000) DEFAULT NULL,
  `MAIORES_CAMPEOES_OESTE` varchar(100) DEFAULT NULL,
  `PRINCIPAIS_JOGADORES` varchar(1000) DEFAULT NULL,
  `MELHORES_RIVALIDADES` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `draft`
--

CREATE TABLE `draft` (
  `ID_DRAFT` int(11) NOT NULL,
  `MELHORES_DRAFTS` varchar(1000) DEFAULT NULL,
  `DRAFTS_MARCANTES` varchar(1000) DEFAULT NULL,
  `ANO_DRAFT` date DEFAULT NULL,
  `TIMES_FIRSTPICK_DRAFT` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `estatísticas`
--

CREATE TABLE `estatísticas` (
  `ID_ESTATÍSTICA` int(11) NOT NULL,
  `MAIORES_CAMPEOES` varchar(1000) DEFAULT NULL,
  `MAIORES_PONTUADORES` varchar(1000) DEFAULT NULL,
  `LIDER_ASSISTENCIA` varchar(1000) DEFAULT NULL,
  `LIDER_3_PONTOS` varchar(1000) DEFAULT NULL,
  `LIDER_BLOCKS` varchar(1000) DEFAULT NULL,
  `LIDER_TURNOUVERS` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `franquias`
--

CREATE TABLE `franquias` (
  `ID_TIMES` int(11) NOT NULL,
  `NOME_DOS_TIMES` varchar(100) DEFAULT NULL,
  `ANO_INICIO` date DEFAULT NULL,
  `CIDADE_NATAL` varchar(100) DEFAULT NULL,
  `QUANTIDADE_DE_TÍTULOS` varchar(100) DEFAULT NULL,
  `MASCOTE` varchar(1000) DEFAULT NULL,
  `ID_CONFERÊNCIA1` int(11) DEFAULT NULL,
  `ID_CONFERENCIA` int(11) DEFAULT NULL,
  `ID_GINASIOS` int(11) DEFAULT NULL,
  `ID_ESTATÍSTICA` int(11) DEFAULT NULL,
  `ID_JOGADORES` int(11) DEFAULT NULL,
  `ID_DRAFT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ginásios`
--

CREATE TABLE `ginásios` (
  `ID_GINASIOS` int(11) NOT NULL,
  `NOME_GINASIOS` varchar(1000) DEFAULT NULL,
  `LOCALIZAÇÃO_GINÁSIOS` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `ID_JOGADORES` int(11) NOT NULL,
  `NOME_DOS_JOGADORES` text DEFAULT NULL,
  `SOBRENOME` text DEFAULT NULL,
  `DATANASCIMENTO` text DEFAULT NULL,
  `ALTURA` decimal(10,2) DEFAULT NULL,
  `PESO` double DEFAULT NULL,
  `POSICAO` text DEFAULT NULL,
  `ID_TITULOS` int(11) DEFAULT NULL,
  `TITULO_NOME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogadores`
--

INSERT INTO `jogadores` (`ID_JOGADORES`, `NOME_DOS_JOGADORES`, `SOBRENOME`, `DATANASCIMENTO`, `ALTURA`, `PESO`, `POSICAO`, `ID_TITULOS`, `TITULO_NOME`) VALUES
(16, 'Ryan ', 'Dias', '2005-12-21', 188.00, 70, 'Armador', 6, 'ROOKIE-THE-YEAR');

-- --------------------------------------------------------

--
-- Estrutura para tabela `posicoes`
--

CREATE TABLE `posicoes` (
  `ID_POSICOES` int(11) NOT NULL,
  `POSICAO_NOME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `titulos`
--

CREATE TABLE `titulos` (
  `ID_TITULOS` int(11) NOT NULL,
  `TITULOS_INDIVIDUAIS` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `titulos`
--

INSERT INTO `titulos` (`ID_TITULOS`, `TITULOS_INDIVIDUAIS`) VALUES
(1, 'MVP Finals'),
(2, 'MVP-FINALS'),
(3, 'MMVP-TEMPORADA-REGULAR'),
(4, 'MVP-CONFEREÊNCIA-LESTE'),
(5, 'MVP-CONFERêNCIA-OESTE'),
(6, 'ROOKIE-THE-YEAR'),
(7, 'SEXTO-HOMEM'),
(8, 'MVP-DEFENSIVO');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conferencias_leste`
--
ALTER TABLE `conferencias_leste`
  ADD PRIMARY KEY (`ID_CONFERÊNCIA1`);

--
-- Índices de tabela `conferencias_oeste`
--
ALTER TABLE `conferencias_oeste`
  ADD PRIMARY KEY (`ID_CONFERENCIA`);

--
-- Índices de tabela `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`ID_DRAFT`);

--
-- Índices de tabela `estatísticas`
--
ALTER TABLE `estatísticas`
  ADD PRIMARY KEY (`ID_ESTATÍSTICA`);

--
-- Índices de tabela `franquias`
--
ALTER TABLE `franquias`
  ADD PRIMARY KEY (`ID_TIMES`),
  ADD KEY `FK_CONFERENCIAS_LESTE` (`ID_CONFERÊNCIA1`),
  ADD KEY `FK_CONFERENCIAS_OESTE` (`ID_CONFERENCIA`),
  ADD KEY `FK_GINÁSIOS` (`ID_GINASIOS`),
  ADD KEY `FK_ESTATÍSTICA` (`ID_ESTATÍSTICA`),
  ADD KEY `FK_JOGADORES` (`ID_JOGADORES`),
  ADD KEY `FK_DRAFT` (`ID_DRAFT`);

--
-- Índices de tabela `ginásios`
--
ALTER TABLE `ginásios`
  ADD PRIMARY KEY (`ID_GINASIOS`);

--
-- Índices de tabela `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`ID_JOGADORES`),
  ADD KEY `FK_TITULOS` (`ID_TITULOS`);

--
-- Índices de tabela `posicoes`
--
ALTER TABLE `posicoes`
  ADD PRIMARY KEY (`ID_POSICOES`);

--
-- Índices de tabela `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`ID_TITULOS`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conferencias_leste`
--
ALTER TABLE `conferencias_leste`
  MODIFY `ID_CONFERÊNCIA1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `conferencias_oeste`
--
ALTER TABLE `conferencias_oeste`
  MODIFY `ID_CONFERENCIA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `draft`
--
ALTER TABLE `draft`
  MODIFY `ID_DRAFT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estatísticas`
--
ALTER TABLE `estatísticas`
  MODIFY `ID_ESTATÍSTICA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `franquias`
--
ALTER TABLE `franquias`
  MODIFY `ID_TIMES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ginásios`
--
ALTER TABLE `ginásios`
  MODIFY `ID_GINASIOS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `ID_JOGADORES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `posicoes`
--
ALTER TABLE `posicoes`
  MODIFY `ID_POSICOES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `titulos`
--
ALTER TABLE `titulos`
  MODIFY `ID_TITULOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `franquias`
--
ALTER TABLE `franquias`
  ADD CONSTRAINT `FK_CONFERENCIAS_LESTE` FOREIGN KEY (`ID_CONFERÊNCIA1`) REFERENCES `conferencias_leste` (`ID_CONFERÊNCIA1`),
  ADD CONSTRAINT `FK_CONFERENCIAS_OESTE` FOREIGN KEY (`ID_CONFERENCIA`) REFERENCES `conferencias_oeste` (`ID_CONFERENCIA`),
  ADD CONSTRAINT `FK_DRAFT` FOREIGN KEY (`ID_DRAFT`) REFERENCES `draft` (`ID_DRAFT`),
  ADD CONSTRAINT `FK_ESTATÍSTICA` FOREIGN KEY (`ID_ESTATÍSTICA`) REFERENCES `estatísticas` (`ID_ESTATÍSTICA`),
  ADD CONSTRAINT `FK_GINÁSIOS` FOREIGN KEY (`ID_GINASIOS`) REFERENCES `ginásios` (`ID_GINASIOS`),
  ADD CONSTRAINT `FK_JOGADORES` FOREIGN KEY (`ID_JOGADORES`) REFERENCES `jogadores` (`ID_JOGADORES`);

--
-- Restrições para tabelas `jogadores`
--
ALTER TABLE `jogadores`
  ADD CONSTRAINT `FK_TITULOS` FOREIGN KEY (`ID_TITULOS`) REFERENCES `titulos` (`ID_TITULOS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
