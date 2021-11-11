-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/11/2021 às 23:09
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imovel_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `apartamento`
--

CREATE TABLE `apartamento` (
  `id` int(200) NOT NULL,
  `cep` int(20) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` int(20) NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `apartamento`
--

INSERT INTO `apartamento` (`id`, `cep`, `tipo`, `telefone`, `rua`, `bairro`, `cidade`, `estado`) VALUES
(1, 30285, '2 quartos', 2147483647, 'astolfo dutra', 'Pompéia', 'Belo Horizonte', 'MG'),
(3, 11111111, 'triplex', 2147483647, 'blablabla', 'oiaoa', 'rio das ostras', 'BA'),
(4, 30280300, 'Duplex', 123456, 'Rua Pirite', 'Esplanada', 'Belo Horizonte', 'MG'),
(5, 30285100, ' 4 quartos', 333333333, 'Rua Arcos', 'Vera Cruz', 'Belo Horizonte', 'MG'),
(6, 30280500, 'triplex', 1234567899, 'Rua Ouro Branco', 'Pompéia', 'Belo Horizonte', 'MG'),
(7, 30280200, 'triplex duas vagas', 2147483647, 'Rua Tulipa', 'Esplanada', 'Belo Horizonte', 'MG'),
(8, 30285170, 'triplex duas vagas', 2147483647, 'Rua Desembargador Bráulio', 'Vera Cruz', 'Belo Horizonte', 'MG'),
(9, 30285180, 'duas vagas', 1212121212, 'Rua Itaipu', 'Vera Cruz', 'Belo Horizonte', 'MG'),
(10, 30285360, 'casa', 909090909, 'Rua Padre Júlio Maria', 'Vera Cruz', 'Belo Horizonte', 'MG'),
(11, 30285140, ' vagas carro', 88888888, 'Rua Doutor Brochado', 'Vera Cruz', 'Belo Horizonte', 'MG'),
(12, 30285240, 'kitinet', 2147483647, 'Rua Marzagânia', 'Granja de Freitas', 'Belo Horizonte', 'MG');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `apartamento`
--
ALTER TABLE `apartamento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `apartamento`
--
ALTER TABLE `apartamento`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
