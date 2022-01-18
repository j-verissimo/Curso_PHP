-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jan-2022 às 14:27
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_products`
--

CREATE TABLE `tb_products` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `product_stock` int(7) NOT NULL,
  `product_provider` varchar(30) NOT NULL,
  `product_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_products`
--

INSERT INTO `tb_products` (`id_product`, `product_name`, `product_category`, `product_stock`, `product_provider`, `product_created`) VALUES
(1, 'Arroz Camil 1kg', 'Cereais', 100, 'FORNECEDOR 01 LTDA', '2022-01-15 12:43:15'),
(3, 'Açucar Cristal', 'Cereais', 100, 'FORNECEDOR 01 LTDA', '2022-01-15 13:03:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(2) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `user_name`, `user_email`, `user_password`, `user_created`) VALUES
(1, 'Administrador Geral', 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-01-10 23:03:41'),
(2, 'Adriana Silva', 'adriana@email.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2022-01-10 23:52:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
