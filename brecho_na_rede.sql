-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jun-2017 às 06:30
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brecho_na_rede`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--
CREATE DATABASE brecho_na_rede;
use brecho_na_rede;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sexo` char(9) DEFAULT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `localidade` varchar(20) NOT NULL,
  `cep` int(11) NOT NULL,
  `telefone1` int(11) NOT NULL,
  `telefone2` int(11) DEFAULT NULL,
  `senha` varchar(10) NOT NULL,
  `perfil` int(3) NOT NULL,
  `logradouro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `cpf`, `email`, `sexo`, `bairro`, `cidade`, `localidade`, `cep`, `telefone1`, `telefone2`, `senha`, `perfil`, `logradouro`) VALUES
(18, 'Bruna Alves Silva', 5209687421, 'bruna5@hotmail.com', 'Feminino', 'Patrimonio Novo', 'Votuporanga', 'São Paulo', 15557895, 9638252, 3658552, 'ra85421', 3, 'CB C12'),
(19, 'Ruth Oliveira Santos', 7502898712, 'ruth876@gmail.com', 'Feminino', 'Pérola II', 'Aguas Lindas de Goiás', 'Goiás', 72962785, 9241552, 9263532, '4212abgc', 3, 'Q20 C12'),
(20, 'Raquel Alves Sousa', 6542631415, 'raquelas5@gmail.com', 'Feminino', 'Taguatinga Norte', 'Taguatinga', 'Distrito Federal', 72820414, 9852222, 9854252, '8985421', 3, 'QNM 06 CJ C23'),
(21, 'Marcelo Soares Lima', 4141041445, 'marcelo8j@hotmail.com', 'Masculino', 'Ceilândia Sul', 'Ceilândia', 'Distrito Federal', 7258454, 98533225, 9521565, 'nja82908', 3, 'QNN07 CJ C23'),
(22, 'Raquel Felipe Souza', 6545625223, 'raquelas5@gmail.com', 'Feminino', 'Taguatinga Norte', 'Taguatinga', 'Distrito Federal', 72820, 98532255, 9966536, '8985421', 3, 'QNM 06 CJ C23'),
(23, 'Suyanne Silva Freitas', 7815952256, 'suy15@gmail.com', 'Feminino', 'Passagem Amazonas', 'Nossa Senhora das Graças', 'Amazonas', 69053, 98521452, 9545525, '@hnku987', 3, 'Q20 CB C23'),
(24, 'Lucas Matias Oliveira', 2621254153, 'lucas67@gmail.com', 'Masculino', 'Santo Amaro', 'Recife', 'Pernambuco', 50110, 98545232, 9856325, '$%&nhisar', 3, 'Q14 CG C12'),
(25, 'Tiago Moreira Sousa', 8528523235, 'tiago985@gmail.com', 'Masculino', 'Taguatinga Norte', 'Taguatinga', 'Distrito Federal', 7297, 98553523, 36412565, '%3338908', 3, 'QNM 14 CB C23'),
(26, 'Rodolfo Abrantes Costa', 1425455225, 'rodolfoa5@gmail.com', 'Masculino', 'Samambaia Sul', 'Samambaia', 'Distrito Federal', 72963, 98542232, 3654152, '5215224', 3, 'QNM 06 CJ C23'),
(27, 'Fabricio Moura Carvalho', 1225441212, 'mourafabricio@gmail.com', 'Masculino', 'Avenida Alagados', 'Santa Maria', 'Distrito Federal', 72952, 98542223, 98542233, '88888888', 3, 'QNS 12 CA C20'),
(28, 'Alef Alves Sousa', 1415412121, 'alef@gmail.com', 'Masculino', 'Avenida Governador J', 'Belém', 'Pará', 66040, 98452423, 36162554, '67892134', 3, 'Q34 CA C01'),
(29, 'Aurilia Silva Santos', 2096811322, 'aurilia34@gmail.com', 'Feminino', 'Avenida Maranhão ', 'Balsas', 'Maranhão', 65800, 96545232, 98452323, '24285214', 3, 'Q12 CJ C12'),
(30, 'Joyce Silva Santos', 1598711121, 'joyce25@gmail.com', 'Feminino', 'PSul', 'Ceilândia', 'Distrito Federal', 72820, 95636212, 854123545, '12412631', 3, 'EQNM06 CR C05'),
(31, 'Daniel Freitas Gomes', 2542545425, 'danielfrt@gmail.com', 'Masculino', 'Gama Oeste', 'Gama', 'Distrito Federal', 72820, 95552356, 985223546, '78912345', 3, 'Q17 CT C02'),
(32, 'Rafael Lucas Sousa', 4114756352, 'lucasfael@gmail.com', 'Masculino', 'Mundo Novo', 'Mundo Novo', 'Goias', 72145, 98523232, 855232141, '74125896', 3, 'Q16 C22'),
(33, 'Mateus Santos Morais', 4578953532, 'mateus@gmail.com', 'Masculino', 'Condominio 7', 'Riacho Fundo II', 'Distrito Federal', 72147, 98523223, 984232328, '898542n', 3, 'QN5A C9 BT AP009'),
(34, 'Raiane Pereira Costa', 7526556322, 'raiane5@gmail.com', 'Feminino', 'Anchieta', 'Porto Alegre', 'Rio Grande do Sul', 90200, 98452332, 898565242, '45741547', 3, 'Q14 CH C20'),
(35, 'Mateus Danilo Morais', 1577923232, 'mateusdan@gmail.com', 'Masculino', 'Condominio 8', 'Riacho Fundo I', 'Distrito Federal', 71147, 42313123, 98535232, '898542a', 3, 'QN4A C9 BH AP008'),
(36, 'Sara Souza Cordeiro', 1596513232, 'sarasc85@gmail.com', 'Feminino', 'Taguatinga Sul', 'Taguatinga', 'Distrito Federal', 72820, 9865232, 98656355, '8985421', 3, 'CSG06 L1'),
(38, 'administrador', 0, 'admin@gmail.com', 'masculino', 'ceilandia sul', 'brasilia', 'df', 72222, 0, 0, 'mar', 1, 'qnn20conjhcasa'),
(39, 'cliente', 0, 'cliente@gmail.com', NULL, '', '', '', 0, 0, NULL, '123', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `idCompras` int(3) NOT NULL,
  `idCliente` int(3) NOT NULL,
  `idProdutos` int(3) NOT NULL,
  `quantidade` int(4) NOT NULL,
  `formasdepagamento` varchar(25) DEFAULT NULL,
  `valordecompra` decimal(2,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idFornecedor` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `logradouro` varchar(20) NOT NULL,
  `cnpj` int(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `localidade` varchar(20) NOT NULL,
  `cep` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idFornecedor`, `nome`, `logradouro`, `cnpj`, `email`, `telefone`, `cpf`, `cidade`, `bairro`, `localidade`, `cep`, `sexo`) VALUES
(1, 'Souza e Filho', 'Rua das Palmeiras s/', 65675, 'souzaefilho@gmail.com', 99993456, NULL, '', '', 'lkokokds', 0, ''),
(2, 'Confecções Pessoa', 'Rua 25 de Março s/n ', 34692, 'ivopessoa@yahoo.com', 46193701, NULL, '', '', '', 0, ''),
(3, 'Goiano Modas', 'Av. Anhanguera Loja ', 43738, 'gomodas@gmail.com', 64602745, NULL, '', '', '', 0, ''),
(4, 'Rogerio Freitas Boutique', 'QCN14 CJ Loja10 Come', 85213, 'rogeriofreitas@gmail.com', 98654172, NULL, '', '', '', 0, ''),
(5, 'Margarida Moda Feminina', ' Bloco B Loja 04 SHC', 52461, 'rmargarida@gmail.com', 98520348, NULL, '', '', '', 0, ''),
(6, 'testeagrkkk', '', NULL, 'sdsdwewssdsd@hotmail.com', 0, 96751, 'brasilia', 'ceilandia sul', 'df', 72222, 'masculino'),
(7, 'marcos', '', NULL, 'sdsdwewssdsd@hotmail.com', 0, 0, 'brasilia', 'ddwwdew', 'df', 72222, 'masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` bigint(20) DEFAULT NULL,
  `cargo` varchar(20) NOT NULL,
  `sexo` enum('masculino','feminino') DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `localidade` varchar(20) NOT NULL,
  `cep` int(11) NOT NULL,
  `telefone1` int(11) NOT NULL,
  `telefone2` int(11) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `perfil` int(3) NOT NULL,
  `salario` decimal(5,2) NOT NULL,
  `logradouro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `cpf`, `cargo`, `sexo`, `email`, `cidade`, `localidade`, `cep`, `telefone1`, `telefone2`, `bairro`, `senha`, `perfil`, `salario`, `logradouro`) VALUES
(1, 'MarcosTÃ©rcio', 8596185298, 'Administrador', 'masculino', 'marcostercio@gmail.com', 'Brasilia', 'DF', 7927857, 99568210, 98632472, '', '123', 1, '0.00', ''),
(2, 'Martina Kralco', 8596314752, 'Gerente', 'feminino', 'tinakralco@gmail.com', 'Porto Alegre', 'RS', 4567322, 98521632, 98212303, '', '123', 0, '0.00', ''),
(4, 'Max Alves', 7392047630, 'Auxiliar Operacional', 'masculino', 'maxalves@gmail.com', 'Morpara', 'BA', 47580000, 56652452, 71410052, '', '', 0, '0.00', ''),
(5, 'marcos', 44, 'adm', 'masculino', 'masa', 'BR', '', 332, 232, 23323, 'sdsds', '12321', 1, '999.99', 'wewwe'),
(8, 'administrador', 12, 'Administrador', 'masculino', 'administrador@gmail.com', 'brasilia', 'df', 21313, 0, 0, 'ceilandia sul', '123', 1, '999.99', 'qnn20conjhcasa'),
(9, 'funcionario', 96751, 'Gerente', 'masculino', 'funcionario@gmail.com', 'exemplo', 'df', 72222, 0, 0, 'ceilandia sul', '123', 2, '999.99', 'qnn20conjhcasa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(3) NOT NULL,
  `funcao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `cor` char(20) NOT NULL,
  `genero` enum('masculino','feminino') NOT NULL,
  `preco` decimal(4,2) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `foto` varchar(40) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nome`, `tamanho`, `cor`, `genero`, `preco`, `tipo`, `foto`, `descricao`, `quantidade`) VALUES
(1, 'All Star Branco ', 36, 'Branco', 'feminino', '47.00', 'Tênis', 'All Star Branco', '', 10),
(2, 'Bolsa verde com Spikes ', 0, 'Verde', 'feminino', '30.00', 'Bolsa', 'Bolsa Verde com Spikes', 'Bolsa Verde com Spikes', 16),
(3, 'Jaqueta Jeans Masculina ', 0, 'Jeans', 'masculino', '30.00', 'Jaqueta', 'Jaqueta Jeans Masculina', 'Jaqueta Jeans Masculina', 16),
(4, 'Camisa Social Masculina ', 40, 'lilï¿½s', 'masculino', '27.00', 'Camisa', 'Camisa Social Masculina', 'Camisa Social', 16),
(5, 'Cinto Masculino Marrom ', 40, 'marrom', 'masculino', '5.00', 'Cinto', 'Cinto Masculino Marrom', 'Cinto', 16),
(6, 'Gravatas', 20, 'Azul, vermelha e Bra', 'masculino', '0.00', 'Acessórios', 'Gravatas', 'Gravatas', 16),
(7, 'Saia Xadrez Vermelha', 40, 'Vermelho', 'feminino', '0.00', 'Saia', 'Saia Xadrez Vermelha', 'Saia Xadrez', 16),
(8, 'Blusa Manga Longa Feminina', 0, 'Azul', 'feminino', '15.00', 'Blusa', 'Blusa Manga Longa Feminina', 'Blusa Manga Longa Estampa Florida', 16),
(9, 'Blusa Feminina Imdiana', 0, 'Branco', 'feminino', '0.00', 'Blusa', 'Blusa Feminina ', 'Blusa Feminina Estampa Indiana', 16),
(10, 'Blusa Feminina Artesanal', 0, 'Amarelo', 'feminino', '25.00', 'Blusa', 'Blusa Feminina ', 'Blusa Feminina Detalhes Artesanais', 16),
(11, 'Salto Listrado', 36, 'Preto', 'feminino', '17.00', 'Sapato', 'Salto Listrado', 'Salto 12cm Listrado', 16),
(12, 'Sandalia Vermelha', 36, 'Vermelho', 'feminino', '25.00', 'Sapato', 'SandÃ¡lia Vermelha', 'Sandalia Salto 10cm Vermelha', 16),
(14, 'Camisa Xadrez Capuz Masculina', 0, 'Azul e Branco', 'masculino', '17.00', 'Camisa', 'Camisa Xadrez Masculina', 'Camisa Xadrez Capuz', 16),
(15, 'Bermuda Xadrez Masculina', 0, 'Branco e Preto', 'masculino', '25.00', 'Bermuda', 'Bermuda Xadrez Masculina', 'Bermuda Xadrez Branco e Preto', 16),
(16, 'Bota Masculina', 42, 'Marrom', 'masculino', '45.00', 'Sapato', 'Bota Masculina', 'Bota Masculina Marrom', 16),
(17, 'oculos', 0, 'Marrom, Preto e Prat', 'masculino', '10.00', 'Acessórios', 'oculos', 'Oculos', 16),
(18, 'LenÃ§os Variados', 0, 'Azul, Branco e Verme', 'feminino', '10.00', 'Acessórios', 'LencosVariados', '', 16),
(19, 'Cinto Feminino Prata', 0, 'Prata', 'feminino', '10.00', 'Acessórios', 'Cinto Feminino Prata', 'Cinto Prata', 16),
(20, 'SandÃ¡lia de Feminina Couro', 37, 'Marrom', 'feminino', '30.00', 'Sapato', 'sandaliaFemininaCouro', '', 16),
(21, 'RelÃ³gio', 40, 'Amarelo e Preto', 'masculino', '25.00', 'Acessórios', 'Relogios', 'Relï¿½gios ', 16),
(22, 'Bone Cinza', 0, 'Cinza', 'masculino', '15.00', 'Acessórios', 'Bone', 'Bonï¿½ Cinza', 16),
(23, 'SapatÃªnis', 42, 'Branco', 'masculino', '35.00', 'Sapato', 'Sapatenis', 'Sapatï¿½nis Branco', 16),
(24, 'Bata Feminina', 0, 'Vinho', 'feminino', '10.00', 'Blusa', 'bataFeminina', 'Bata Detalhes Artesanais', 16),
(25, 'Salto Listrado Borboleta', 36, 'Vermelho', 'feminino', '25.00', 'Sapato', 'Salto Listrado Borboleta', 'Salto 12cm Listrado Detalhe Borboleta', 16),
(26, 'Bermuda Tactel Listrada Mascul', 0, 'Preto, Azul e Branco', 'masculino', '10.00', 'Bermuda', 'Bermuda Tactel Listrada Masculina', 'Bermuda Tactel Listrada', 16),
(27, 'Sandalia LaÃ§o', 37, 'Preto', 'feminino', '10.00', 'R$25,00', 'sandalialaco', 'isso', 16),
(28, 'terno', 0, 'preto', 'masculino', '99.99', 'vestimentos', 'exemplo', 'terno', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompras`),
  ADD KEY `idProduto` (`idProdutos`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idFornecedor`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompras` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idFornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idProdutos`) REFERENCES `produto` (`idProduto`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
