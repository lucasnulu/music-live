-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/12/2023 às 22:24
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
-- Banco de dados: `bdmusica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `musica`
--

CREATE TABLE `musica` (
  `musica_favorita` varchar(100) NOT NULL,
  `artista_favorito` varchar(100) DEFAULT NULL,
  `estilo_favorito` varchar(100) DEFAULT NULL,
  `banda_favorita` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `musica`
--

INSERT INTO `musica` (`musica_favorita`, `artista_favorito`, `estilo_favorito`, `banda_favorita`) VALUES
('A cara do crime 3', 'Poze do rodo', 'Rap', 'Mainstreet'),
('Alarm', 'Yunk Vino', 'Trapp', '30praum'),
('Até que durou', 'Pericles', 'Samba', 'Rolling Stones'),
('Maturidade', 'Kayblack', 'Rap', '30praum'),
('Melhor eu ir', 'Pericles', 'Samba', 'QueenPink Floyd'),
('Morte do Autotune', 'Matue', 'Trapp', 'Queen'),
('Pesquiso no google', 'Zeca pagodinho', 'pagode', 'Turma do pagode'),
('Princesinha mandona', 'Ze Neto', 'Sertanejo', 'Imagine Dragons'),
('Sonar', 'Yunk Vino', 'Trapp', 'Beatles'),
('Specialzs', 'King gru', 'K-pop', 'BTS'),
('Sunflowers', 'Post malone', 'Pop', 'Nenhuma'),
('Your Love', 'The Outfield', 'Rock', 'Nirvana');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`login`, `senha`) VALUES
('Célia Menezes', '1012'),
('Eduardo', '3232323'),
('Francisco de Oliveira', '1001'),
('Geremias Luccoti Bani', '123333'),
('Hector Calefi', '1233'),
('Janaína Albuquerque', '1008'),
('Josefina Sarmento', '1015'),
('Lindomar Sampaio', '1011'),
('Lucas', '1111'),
('Luis Silva', '4027'),
('Manoel Trindade', '1005'),
('Marcos', '3333'),
('Maria Abelarda da Silva', '1004'),
('Maria Andrade', '2'),
('Roberto Silva Junior', '1009'),
('Rosana Campoy', '1007'),
('Thiago o Brabo', '23122');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`musica_favorita`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
