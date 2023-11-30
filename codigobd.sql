-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2023 às 22:44
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'Paulo', '$2y$10$ib4VDwljeYtLGWQ56Kg83OmFd0YOkH461Y7oZAJCXNKzMmOszHdOG', '2023-11-30 17:32:45'),
(3, 'mauricio', '$2y$10$HZoXcCpqgKm/CwefDEbfpuj06Ht73rUnEc.3q9oia57uBeXv7UfEO', '2023-11-30 18:23:30'),
(4, 'Vanuza', '$2y$10$p.tFbDdURqhbxSahZuX8Nu6nzutpPfF7Ty6Pg6CmD6R1/hAuvpeXC', '2023-11-30 18:37:30'),
(5, 'Lucas02', '$2y$10$wPL5wJB52aiMtCLVgJ4ST.2HuZGrfTUFRKnSfXheF1E92Y6MXxQJa', '2023-11-30 18:37:57'),
(6, 'jose', '$2y$10$0nCpA0vlIlSicb0JbTLZ5.vnhpx2I//YqjCBD.NCCdGuWxO2u4P3.', '2023-11-30 18:39:13'),
(7, 'paula', '$2y$10$cXkLF4jYmL2zNsrvyNp0n.bOxfEHWCXMOOELNOeYHUvgy9hcliiqO', '2023-11-30 18:39:26'),
(8, 'Minalba', '$2y$10$9bM9c0JiIz9iX2UFeyo7iupxudEJ2ABUVMBDxi.Vym9gzaudxWlcq', '2023-11-30 18:40:00'),
(9, 'Dora', '$2y$10$yuX8ebH6mL2qjrhkjvA.xu1yaW5NT/AqmjI3An.zOuYQOtgiW.7xq', '2023-11-30 18:40:40'),
(10, 'Isadora', '$2y$10$UOTbKShVpQ/CA8WfnpqAf.0t.3PKtQ53Aj9hkCZaTntIfPJRe3ycK', '2023-11-30 18:41:38'),
(11, 'Wagner', '$2y$10$xZ5iy77Cp7dX2Nn6l3N2r.PIeW0i8XxzmfMLUsjt8qv2mGKIqVOsW', '2023-11-30 18:42:04'),
(12, 'Vladimir', '$2y$10$tGa7dxmAYFbZTGAFR442juOaZhTw0Ylzz49wrVjS77ELHtFjr6Zl.', '2023-11-30 18:42:48'),
(13, 'Joao', '$2y$10$ic7R0ItbjvavplLL3eEZCOnctZxvoXGqnVCy7Y2R4pzVfCm8VBxiK', '2023-11-30 18:43:21'),
(14, 'Claudia', '$2y$10$qi7hYscwGvDPr7ddfujuLeysMvQ9x.Cv5hNCGH2K0lN7915d66U0a', '2023-11-30 18:43:38');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;