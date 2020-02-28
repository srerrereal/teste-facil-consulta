-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Fev-2020 às 08:57
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco-dados`
--

CREATE TABLE `banco-dados` (
  `id` int(100) NOT NULL,
  `nome` varchar(112) NOT NULL,
  `email` varchar(112) NOT NULL,
  `senha` varchar(112) NOT NULL,
  `endereco_consultorio` varchar(112) NOT NULL,
  `data_criacao` datetime(6) DEFAULT current_timestamp(6),
  `data_alteracao` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `banco-dados`
--

INSERT INTO `banco-dados` (`id`, `nome`, `email`, `senha`, `endereco_consultorio`, `data_criacao`, `data_alteracao`) VALUES
(32, 'Rafael Rodrigues Real ', 'rafael.real94@gmail.com', '100461Iqe@9010', 'Avenida Presidente Juscelino Kubitschek de Oliveira', '2020-02-28 07:55:09.999618', '2020-02-28 07:57:00.000000'),
(33, 'Joao Guilherme', 'rafael.real94@gmail.com', '123ewqewqew', 'Avenida Presidente Juscelino Kubitschek de Oliveira', '2020-02-28 07:41:50.658731', '0000-00-00 00:00:00.000000'),
(34, 'ASDAAADD2', 'dasdsadsadsa@sdaas', 'dsadasdsadas', 'dsadsadsa', '2020-02-28 07:46:43.822183', '0000-00-00 00:00:00.000000'),
(35, 'Rafael Real', 'email@email', '1234qwe123', 'Rua dois e tres1', '2020-02-28 07:54:31.843100', '2020-02-28 07:54:31.000000');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banco-dados`
--
ALTER TABLE `banco-dados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banco-dados`
--
ALTER TABLE `banco-dados`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
