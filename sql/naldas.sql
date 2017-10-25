-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2017 às 18:13
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naldas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_log`
--

CREATE TABLE `adm_log` (
  `user_id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm_log`
--

INSERT INTO `adm_log` (`user_id`, `nome`, `email`, `senha`) VALUES
(1, 'inalda', 'naldasmodapet@hotmail.com', 'data009base76');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE `tb_endereco` (
  `cd_end` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `numerocasa` varchar(255) NOT NULL,
  `nm_bairro` varchar(100) NOT NULL,
  `sg_uf` varchar(3) NOT NULL,
  `nm_cidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_endereco`
--

INSERT INTO `tb_endereco` (`cd_end`, `cep`, `rua`, `complemento`, `referencia`, `numerocasa`, `nm_bairro`, `sg_uf`, `nm_cidade`) VALUES
(1, '11713290', 'Av Hermenegildo pereira de franca', 'b', 'kiko', '1319', 'esmeralda', 'sp', 'praia grande'),
(2, '11713240', 'Rua Cuba', NULL, NULL, '769', 'samambaia', 'sp', 'praia grande'),
(3, '11713220', 'Rua dos Ipes', NULL, NULL, '544', 'samambaia', 'sp', 'praia grande'),
(4, '11712200', 'Rua Dois', '', '', '2019', 'Melvi', 'SP', 'Praia Grande'),
(5, '11713200', 'Rua Lorenzo Fernandez', '', '', '2019', 'Samambaia', 'SP', 'Praia Grande'),
(6, '11713290', 'Avenida Hermenegildo Pereira de FranÃ§a', '', '', '238', 'Esmeralda', 'SP', 'Praia Grande'),
(14, '11712300', 'Rua da GraÃ§a', '', '', '2167', 'Melvi', 'SP', 'Praia Grande'),
(15, '11714200', 'Rua Teodoro Sampaio', '', '', '3891', 'RibeirÃ³polis', 'SP', 'Praia Grande');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagem`
--

CREATE TABLE `tb_imagem` (
  `id_imagem` int(11) NOT NULL,
  `imagem` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_imagem`
--

INSERT INTO `tb_imagem` (`id_imagem`, `imagem`) VALUES
(1, 'produto1.jpg'),
(2, 'produto2.jpg'),
(3, 'produto3.jpg'),
(4, 'produto4.jpg'),
(5, 'produto5.jpg'),
(6, 'produto6.jpg'),
(7, 'produto7.jpg'),
(8, 'produto8.jpg'),
(9, 'produto9.jpg'),
(10, 'roupa-de-cachorro-camisa-c-capuz-mousse-'),
(11, 'roupa-de-cachorro-tamanho-grande-e-extra'),
(12, 'Roupas-para-Cachorro-em-Santos-18.jpg'),
(13, 'Roupas-para-Cachorro-em-Santos-18.jpg'),
(15, 'cetim-rosa.png'),
(16, 'roupa1.jpg'),
(17, 'produto1.jpg'),
(18, 'roupa2.jpg'),
(19, 'roupa-de-cachorro-tamanho-grande-e-extra'),
(21, 'produto5.jpg'),
(22, 'produto3.jpg'),
(24, 'produto8.jpg'),
(25, 'soft-cachorro-millie-sport-marinho-01.jp'),
(26, 'produto2.jpg'),
(27, 'produto3.jpg'),
(28, 'roupa1.jpg'),
(29, 'produto1.jpg'),
(30, 'produto6.jpg'),
(31, 'produto7.jpg'),
(32, 'cetim-rosa.png'),
(33, 'produto5.jpg'),
(34, 'foto32.png'),
(35, 'foto56.png'),
(36, 'foto54.png'),
(37, 'foto50.png'),
(38, 'foto47.png'),
(39, 'foto46.png'),
(40, 'foto27.png'),
(41, 'roupa1.jpg'),
(42, 'roupa1.jpg'),
(43, 'foto56.png'),
(44, 'soft-cachorro-millie-sport-marinho-01.jp'),
(45, 'soft-cachorro-millie-sport-marinho-01.jp'),
(46, 'produto3.jpg'),
(47, 'cetim-rosa.png'),
(48, 'produto1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itens_pedido`
--

CREATE TABLE `tb_itens_pedido` (
  `id_itens_pedido` int(11) NOT NULL,
  `itens_pedido_id_pedido` int(11) DEFAULT NULL,
  `itens_pedido_cd_produto` int(11) DEFAULT NULL,
  `itens_pedido_qtd` int(11) DEFAULT NULL,
  `itens_pedido_vl_produto` double(15,2) DEFAULT NULL,
  `itens_pedido_vl_total` double(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_itens_pedido`
--

INSERT INTO `tb_itens_pedido` (`id_itens_pedido`, `itens_pedido_id_pedido`, `itens_pedido_cd_produto`, `itens_pedido_qtd`, `itens_pedido_vl_produto`, `itens_pedido_vl_total`) VALUES
(38, 11, 3, 1, 50.00, 96.00),
(39, 11, 4, 1, 50.00, 96.00),
(40, 12, 13, 1, 54.00, 129.00),
(41, 12, 15, 1, 54.00, 129.00),
(42, 12, 7, 1, 54.00, 129.00),
(45, 15, 5, 1, 35.00, 121.00),
(46, 15, 3, 1, 35.00, 121.00),
(47, 15, 13, 1, 35.00, 121.00),
(48, 13, 13, 1, 54.00, 89.00),
(49, 13, 7, 1, 54.00, 89.00),
(50, 11, 13, 2, 54.00, 124.00),
(51, 11, 7, 1, 54.00, 124.00),
(52, 11, 13, 1, 50.00, 85.00),
(53, 11, 4, 1, 50.00, 85.00),
(54, 11, 7, 1, 46.00, 100.00),
(55, 11, 3, 1, 46.00, 100.00),
(56, 11, 13, 1, 46.00, 81.00),
(57, 11, 3, 1, 46.00, 81.00),
(58, 21, 13, 1, 35.00, 35.00),
(59, 21, 13, 1, 54.00, 135.00),
(60, 21, 3, 1, 54.00, 135.00),
(61, 21, 7, 1, 54.00, 135.00),
(62, 21, 13, 1, 35.00, 35.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id_pedido` int(11) NOT NULL,
  `cd_usuario` int(11) NOT NULL,
  `pedido_data` date DEFAULT NULL,
  `pedido_data_hora` datetime DEFAULT NULL,
  `valor` double(15,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedido`, `cd_usuario`, `pedido_data`, `pedido_data_hora`, `valor`, `status`) VALUES
(11, 1, '2017-06-07', '2017-06-07 19:28:31', 96.00, 0),
(12, 1, '2017-06-07', '2017-06-07 19:28:47', 96.00, 0),
(13, 5, '2017-06-07', '2017-06-07 19:29:26', 129.00, 0),
(14, 1, '2017-06-07', '2017-06-07 21:08:52', 100.00, 0),
(15, 4, '2017-06-07', '2017-06-07 21:23:39', 121.00, 0),
(16, 5, '2017-06-23', '2017-06-23 06:49:33', 89.00, 0),
(17, 1, '2017-06-24', '2017-06-24 02:22:02', 124.00, 0),
(18, 1, '2017-06-24', '2017-06-24 02:28:53', 85.00, 0),
(19, 1, '2017-06-24', '2017-06-24 02:48:51', 100.00, 0),
(20, 1, '2017-06-24', '2017-06-24 03:20:50', 81.00, 0),
(21, 6, '2017-10-06', '2017-10-06 06:19:11', 35.00, 0),
(22, 6, '2017-10-06', '2017-10-06 06:20:46', 135.00, 0),
(23, 6, '2017-10-06', '2017-10-06 06:25:33', 35.00, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `cd_produto` int(11) NOT NULL,
  `id_imagem` int(11) NOT NULL,
  `nm_produto` varchar(255) NOT NULL,
  `qt_produto` int(11) NOT NULL,
  `vl_produto` decimal(9,2) NOT NULL,
  `ds_produto` varchar(255) NOT NULL,
  `ds_especificacoes` varchar(255) NOT NULL,
  `nm_categoria` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`cd_produto`, `id_imagem`, `nm_produto`, `qt_produto`, `vl_produto`, `ds_produto`, `ds_especificacoes`, `nm_categoria`) VALUES
(2, 2, 'Camiseta para cachorro', 5, '42.00', 'ConfortÃ¡vel', '100% algodÃ£o', 'camisetas'),
(3, 3, 'Worldly dog Camisa', 10, '46.00', '', 'Cetim ', 'camisetas'),
(4, 4, 'Vestido Estampado Com Veludo', 5, '50.00', '', 'AlgodÃ£o', 'vestidos'),
(5, 5, 'Vestido Estampado Rosa', 2, '40.00', '', 'AlgodÃ£o', 'vestidos'),
(6, 6, 'Vestido Renda Rosa', 22, '55.00', '', 'AlgodÃ£o', 'vestidos'),
(7, 7, 'Vestido Veludo Vermelho', 1, '54.00', '', 'AlgodÃ£o', 'vestidos'),
(10, 12, 'Vestido para cachorro Vermelho', 2, '25.00', 'Vestido de algodÃ£o com bolinhas', 'AlgodÃ£o', 'vestidos'),
(13, 15, 'Vestido Vinho Cetim', 1, '35.00', 'Vestido vinho cetim ', 'Cetim', 'vestidos'),
(14, 16, 'Moletom para cachorro', 1, '40.00', 'Moletom grosso para cachorro tamanho M. \r\n', 'AlgodÃ£o', 'camisetas'),
(15, 17, 'Moletom para Cachorro Listrado', 2, '40.00', 'Moletom para cachorro, tamanho G, algodÃ£o.', 'AlgodÃ£o', 'camisetas'),
(19, 21, 'Vestido para cachorro', 1, '35.00', '', '', 'vestidos'),
(24, 26, 'Vestido para cachorro', 1, '60.00', '', '', 'vestidos'),
(25, 27, 'Moletom ', 1, '60.00', '', '', 'vestidos'),
(26, 28, 'Vestido para cachorro', 1, '60.00', '', '', 'vestidos'),
(28, 30, 'Vestido para cachorro', 1, '60.00', '', '', 'vestidos'),
(29, 31, 'Vestido para cachorro', 1, '45.00', '', '', 'vestidos'),
(37, 39, 'Coleira para cachorro azul', 1, '20.00', 'Coleira para cachorro tamanho m', 'AlgodÃ£o', 'coleiras'),
(41, 47, 'Vestido', 1, '45.00', 'Legal', 'legal', 'casual'),
(42, 48, 'Vestido', 1, '45.00', 'Legal', 'legal', 'casual');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(11) NOT NULL,
  `cd_end` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `sexo` varchar(5) NOT NULL,
  `dataNasc` date NOT NULL,
  `cpf` varchar(11) NOT NULL DEFAULT '00000000000',
  `telefone` varchar(11) NOT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `cd_end`, `nome`, `sobrenome`, `sexo`, `dataNasc`, `cpf`, `telefone`, `celular`, `email`, `senha`) VALUES
(1, 1, 'Julia Cristina', 'Pantaleao Santos', 'fem', '1999-10-18', '47966834883', '1334778956', NULL, 'juliacristinap.santos@gmail.com', 'yamasterol'),
(2, 2, 'Rejane', 'Santos', 'fem', '1990-08-16', '87746461417', '(13)9978743', '', 'rejanessantos@gmail.com', 'zikamemo'),
(3, 3, 'Josefa Pantaleao ', 'Santos', 'fem', '1972-02-02', '74486737180', '(13)3467787', '', 'josefa_santos@gmail.com', '12344'),
(4, 4, 'Francisco', 'Suarez', 'masc', '1998-05-09', '61971827347', '(13)8728275', '', 'suarezfranc@gmail.com', 'senha'),
(5, 5, 'Gertrudes', 'do Nascimento', 'fem', '1998-01-01', '36612344121', '(13)8787276', '', 'gertrudesnasc@gmail.com', 'senhaa'),
(6, 6, 'veronica', 'Ribeiro', 'fem', '0000-00-00', '45723270842', '(13)3477347', '(13)98188708', 'veronicaribeiro-s@hotmail.com', 'q1w2e3r4t5'),
(14, 14, 'Ariosvaldo', 'Gomes', 'masc', '0000-00-00', '82905671203', '(13)3412412', '', 'ariosvaldogomes@hotmail.com', 'd6fca25667bbbc35bb83d8818d5ccdef8bc2379c'),
(15, 15, 'Giraldo', 'alves', 'masc', '0000-00-00', '41353742121', '(13)3989338', '', 'giraldo@hotmail.com', '6c144321c49f1d6f4d9859a4aaa7896f05d9855d');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_produtos`
-- (See below for the actual view)
--
CREATE TABLE `vw_produtos` (
`cd_produto` int(11)
,`id_imagem` int(11)
,`imagem` varchar(40)
,`nm_produto` varchar(255)
,`qt_produto` int(11)
,`vl_produto` decimal(9,2)
,`ds_produto` varchar(255)
,`ds_especificacoes` varchar(255)
,`nm_categoria` varchar(80)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_produtos`
--
DROP TABLE IF EXISTS `vw_produtos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_produtos`  AS  select `tb_produto`.`cd_produto` AS `cd_produto`,`tb_imagem`.`id_imagem` AS `id_imagem`,`tb_imagem`.`imagem` AS `imagem`,`tb_produto`.`nm_produto` AS `nm_produto`,`tb_produto`.`qt_produto` AS `qt_produto`,`tb_produto`.`vl_produto` AS `vl_produto`,`tb_produto`.`ds_produto` AS `ds_produto`,`tb_produto`.`ds_especificacoes` AS `ds_especificacoes`,`tb_produto`.`nm_categoria` AS `nm_categoria` from (`tb_produto` join `tb_imagem` on((`tb_imagem`.`id_imagem` = `tb_produto`.`id_imagem`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_log`
--
ALTER TABLE `adm_log`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`cd_end`);

--
-- Indexes for table `tb_imagem`
--
ALTER TABLE `tb_imagem`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Indexes for table `tb_itens_pedido`
--
ALTER TABLE `tb_itens_pedido`
  ADD PRIMARY KEY (`id_itens_pedido`),
  ADD KEY `fk_cd_produto` (`itens_pedido_cd_produto`),
  ADD KEY `fk_id_pedido` (`itens_pedido_id_pedido`);

--
-- Indexes for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_usuario` (`cd_usuario`);

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`cd_produto`),
  ADD KEY `fk_id_img` (`id_imagem`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`),
  ADD KEY `cd_end_idx` (`cd_end`),
  ADD KEY `cd_end` (`cd_end`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_log`
--
ALTER TABLE `adm_log`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  MODIFY `cd_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_imagem`
--
ALTER TABLE `tb_imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tb_itens_pedido`
--
ALTER TABLE `tb_itens_pedido`
  MODIFY `id_itens_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `cd_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_itens_pedido`
--
ALTER TABLE `tb_itens_pedido`
  ADD CONSTRAINT `fk_cd_produto` FOREIGN KEY (`itens_pedido_cd_produto`) REFERENCES `tb_produto` (`cd_produto`),
  ADD CONSTRAINT `fk_id_pedido` FOREIGN KEY (`itens_pedido_id_pedido`) REFERENCES `tb_pedido` (`id_pedido`);

--
-- Limitadores para a tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`cd_usuario`) REFERENCES `tb_usuario` (`cd_usuario`);

--
-- Limitadores para a tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `fk_id_img` FOREIGN KEY (`id_imagem`) REFERENCES `tb_imagem` (`id_imagem`);

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `endereco` FOREIGN KEY (`cd_end`) REFERENCES `tb_endereco` (`cd_end`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
