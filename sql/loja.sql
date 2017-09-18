-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Set-2017 às 02:34
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cd_produto` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ds_produto` varchar(40) NOT NULL,
  `ds_linha` varchar(20) NOT NULL,
  `ds_cor` text NOT NULL,
  `ds_material` varchar(15) NOT NULL,
  `ds_aplic_produto` text NOT NULL,
  `ds_detalhes` varchar(200) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cd_produto`, `ds_produto`, `ds_linha`, `ds_cor`, `ds_material`, `ds_aplic_produto`, `ds_detalhes`, `imagem`) VALUES
('0001', 'Tubo extensão 35', 'Tubos Plásticos', 'Cinza', 'Plástico', 'Aspirador de pó', 'Desenvolvido em PVC rígido este item é utilizado como alongador para uso em aspiradores de pó.', 'cac288422e8cdc2bf2de8ab993cc0eef.jpg'),
('0002', 'Tubo 58.5 mm', 'Tubos plásticos', 'Marrom', 'Plástico', 'Aspirador', 'O perfil Tubo 58.5 serve como complemento para o produto organizador de filas utilizado em aeroportos, padarias, conveniências entre outros.', '1f0762cc5088bb2be6003ee6484f6c88.jpg'),
('0006', 'Cantoneira 19x19x1,5mm', 'Construção Civil', 'Branco', 'Plástico', 'Colunas, escadas', 'Utilizado para acabamento em cantos de salas limpas, furgões frigoríficos, colunas, escadas etc. O perfil cantoneira é de fácil aplicação e também elimina os cantos vivos, facilitando a limpeza.', 'b176f02f4806b09a094dfd01278e9bbe.jpg'),
('005', 'Tubo 36 x 1,8 mm', 'Eletrodomésticos', 'Preto', 'PVC rigido', 'Aspirador de pó', 'Desenvolvido em PVC rigido este item é utilizado como alongador para uso em aspiradores de pó.', 'b2ad46a369ed1f8014e79a7b3e8d1264.jpg'),
('0118', 'Borda de mesa', 'Moveleiro', 'Prata,Cinza', 'Plástico', 'Bordas de mesa', 'Tendo a função de eliminar o canto vivo e embelezar o móvel, o perfil Borda de Mesa é flexível e de fácil aplicação, possui um encaixe do tipo espiga que entra com pressão no rasgo da madeira.', 'f6b815debb4835213ef84b1c4d907b56.jpg'),
('0431', 'Acabamento ceramico', 'Construção Civil', 'Branco', 'aluminio', 'Hospitais, Residências', 'Excelente para acabamentos onde os cantos de pisos e revestimentos ficam aparentes ou com o visual prejudicado, este produto tem fácil aplicação e como o próprio nome sugere proporciona um ótimo acaba', 'e7236275951c91f1d3840352c9558e5d.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `cd_produto` varchar(10) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `cd_produto`, `quantidade`) VALUES
(1, '0001', 50),
(2, '0002', 91),
(3, '005', 15),
(4, '0006', 88),
(5, '0118', 36),
(6, '0431', 78),
(7, '0001', 50),
(8, '0001', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cd_produto`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `cd_produto` (`cd_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`cd_produto`) REFERENCES `produtos` (`cd_produto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
