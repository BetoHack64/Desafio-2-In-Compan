-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2021 às 16:19
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `incompanybd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` int(11) NOT NULL,
  `curso` varchar(150) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `email`, `telefone`, `curso`, `foto`) VALUES
(1, 'Bruno Sandande', 'brunosanda63gmail.com', 946846021, 'Engenharia Informatica', 'avatar7.png'),
(2, 'Valdunice Sandande', 'val33gmail.com', 946846021, 'Contabilidade', 'avatar3.png'),
(3, 'Ana Sandande', 'brunosanda63gmail.com', 946846021, 'Engenharia Informatica', 'avatar3.png'),
(4, 'Fabio Sandande', 'brunosanda63gmail.com', 946846021, 'Medicina', 'avatar1.png'),
(5, 'Beto Sandande', 'brunosanda63gmail.com', 946846021, 'Engenharia Mecanica', 'avatar6.png'),
(6, 'Otchili Sandande', 'brunosanda63gmail.com', 946846021, 'Ciencia da Computacao', 'avatar7.png'),
(7, 'Walter Sandande', 'walter63gmail.com', 946846021, 'Quimica', 'avatar1.png'),
(8, 'Elsa Sandande', 'elsasanda63gmail.com', 946846021, 'Matematica', 'avatar3.png'),
(9, 'Sandro Sandande', 'ssanda63gmail.com', 946876083, 'Matematica', 'avatar7.png'),
(10, 'Ricardo Sandande', 'ricardosanda63gmail.com', 946846021, 'Fisica', 'avatar6.png'),
(11, 'Otchali Sandande', 'osanda63gmail.com', 946846021, 'Enfermagem', 'avatar2.png'),
(12, 'Alfredo Sandande', 'alfredo.sandandegmail.com', 946846021, 'Medicina', 'avatar1.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `idDoc` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `horas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `ficheiroCaminho` varchar(200) NOT NULL,
  `dataEnviado` datetime NOT NULL DEFAULT current_timestamp(),
  `idAluno` int(11) NOT NULL,
  `obs` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`idDoc`, `nome`, `tipo`, `horas`, `status`, `ficheiroCaminho`, `dataEnviado`, `idAluno`, `obs`) VALUES
(1, 'Primeiros passos com Dart', 'Curso', 60, 0, 'data/0CE5F009.pdf', '2021-10-18 21:07:31', 12, 'Curso de Dart'),
(2, 'Cloud Data Engineer', 'Workshop', 4, 1, 'data/2D3B40C0.pdf', '2021-10-18 21:07:31', 12, 'Boas-vindas ao Bootcamp Cognizant Cloud Data Engineer'),
(3, 'Construcao de API em Java', 'Curso', 70, 1, 'data/33C02A9C.pdf', '2021-10-19 00:06:29', 1, 'Resolvendo Desafios de Código\r\nem Java'),
(4, 'Dart', 'Curso', 60, 0, 'data/36A25EFD.pdf', '2021-10-18 21:07:31', 9, 'Trabalhando com variáveis e\r\ncondicionais no Dart'),
(5, 'Java', 'Conferencia', 4, 1, 'data/33829EBA.pdf', '2021-10-18 21:07:31', 1, 'Boas-vindas ao Bootcamp everis New Talents #3\r\nJava'),
(6, 'Construcao de API em Java', 'Curso', 70, 1, 'data/33C02A9C.pdf', '2021-10-19 00:06:29', 11, 'Resolvendo Desafios de Código\r\nem Java'),
(7, 'Java', 'Conferencia', 4, 1, 'data/33829EBA.pdf', '2021-10-18 21:07:31', 11, 'Boas-vindas ao Bootcamp everis New Talents #3\r\nJava'),
(8, 'Dart', 'Curso', 60, 0, 'data/36A25EFD.pdf', '2021-10-18 21:07:31', 11, 'Trabalhando com variáveis e\r\ncondicionais no Dart'),
(9, 'Primeiros passos com Dart', 'Curso', 60, 0, 'data/0CE5F009.pdf', '2021-10-18 21:07:31', 10, 'Curso de Dart'),
(10, 'Cloud Data Engineer', 'Workshop', 4, 1, 'data/2D3B40C0.pdf', '2021-10-18 21:07:31', 5, 'Boas-vindas ao Bootcamp Cognizant Cloud Data Engineer'),
(11, 'Construcao de API em Java', 'Curso', 70, 1, 'data/33C02A9C.pdf', '2021-10-19 00:06:29', 3, 'Resolvendo Desafios de Código\r\nem Java'),
(12, 'Java', 'Conferencia', 4, 1, 'data/33829EBA.pdf', '2021-10-18 21:07:31', 2, 'Boas-vindas ao Bootcamp everis New Talents #3\r\nJava'),
(13, 'Cloud Data Engineer', 'Workshop', 4, 1, 'data/2D3B40C0.pdf', '2021-10-18 21:07:31', 6, 'Boas-vindas ao Bootcamp Cognizant Cloud Data Engineer'),
(14, 'Dart', 'Curso', 60, 0, 'data/36A25EFD.pdf', '2021-10-18 21:07:31', 12, 'Trabalhando com variáveis e\r\ncondicionais no Dart'),
(15, 'Primeiros passos com Dart', 'Curso', 60, 0, 'data/0CE5F009.pdf', '2021-10-18 21:07:31', 8, 'Curso de Dart'),
(16, 'Construcao de API em Java', 'Curso', 70, 1, 'data/33C02A9C.pdf', '2021-10-19 00:06:29', 4, 'Resolvendo Desafios de Código\r\nem Java'),
(17, 'Java', 'Conferencia', 4, 1, 'data/33829EBA.pdf', '2021-10-18 21:07:31', 10, 'Boas-vindas ao Bootcamp everis New Talents #3\r\nJava'),
(18, 'Dart', 'Curso', 60, 0, 'data/36A25EFD.pdf', '2021-10-18 21:07:31', 2, 'Trabalhando com variáveis e\r\ncondicionais no Dart'),
(19, 'Primeiros passos com Dart', 'Curso', 60, 0, 'data/0CE5F009.pdf', '2021-10-18 21:07:31', 3, 'Curso de Dart'),
(20, 'Cloud Data Engineer', 'Workshop', 4, 1, 'data/2D3B40C0.pdf', '2021-10-18 21:07:31', 10, 'Boas-vindas ao Bootcamp Cognizant Cloud Data Engineer'),
(21, 'Construcao de API em Java', 'Curso', 70, 1, 'data/33C02A9C.pdf', '2021-10-19 00:06:29', 12, 'Resolvendo Desafios de Código\r\nem Java'),
(22, 'Java', 'Conferencia', 4, 1, 'data/33829EBA.pdf', '2021-10-18 21:07:31', 12, 'Boas-vindas ao Bootcamp everis New Talents #3\r\nJava'),
(23, 'SCRUM', 'Curso', 30, 0, 'data/DEF15C02.pdf', '2021-10-19 00:22:21', 1, 'Projetos ágeis com SCRUM'),
(24, 'Java & AWS Developer', 'Curso', 60, 1, 'data/E7155A24.pdf', '2021-10-19 00:22:21', 1, 'Boas-vindas ao Bootcamp GFT Java & AWS\r\nDeveloper'),
(25, 'SCRUM', 'Curso', 30, 0, 'data/DEF15C02.pdf', '2021-10-19 00:22:21', 12, 'Projetos ágeis com SCRUM'),
(26, 'Java & AWS Developer', 'Curso', 60, 1, 'data/E7155A24.pdf', '2021-10-19 00:22:21', 12, 'Boas-vindas ao Bootcamp GFT Java & AWS\r\nDeveloper');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`idDoc`),
  ADD KEY `AlunoDoc` (`idAluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `documento`
--
ALTER TABLE `documento`
  MODIFY `idDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `AlunoDoc` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
