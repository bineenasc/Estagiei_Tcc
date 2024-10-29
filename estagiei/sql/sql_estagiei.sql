USE estagiei;

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Perfil` int(11) NOT NULL DEFAULT 2
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`idAdmin`, `Nome`, `Email`, `Senha`, `Perfil`) VALUES
(1, 'Administrador', 'admin@adm.com', 'adm1', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidatar`
--

CREATE TABLE `candidatar` (
  `idCandidatar` int(11) NOT NULL,
  `idVaga` int(11) NOT NULL,
  `idEstagiario` int(11) NOT NULL,
  `Registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `candidatar`
--

INSERT INTO `candidatar` (`idCandidatar`, `idVaga`, `idEstagiario`, `Registro`) VALUES
(10, 4, 12, '2022-11-10 06:16:47'),
(9, 6, 12, '2022-11-10 06:16:43'),
(16, 4, 2, '2022-11-23 13:08:26'),
(7, 6, 2, '2022-11-10 05:36:21'),
(5, 1, 2, '2022-10-27 13:17:14'),
(6, 1, 12, '2022-10-27 14:27:51'),
(14, 9, 2, '2022-11-21 07:14:04'),
(13, 9, 12, '2022-11-17 16:14:57'),
(17, 14, 2, '2022-11-24 07:55:26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `NomeResp` varchar(50) NOT NULL,
  `End` varchar(50) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `CNPJ` int(20) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `TelFixo` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CEP` int(10) NOT NULL,
  `NomeUser` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Perfil` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `Nome`, `NomeResp`, `End`, `Bairro`, `Cidade`, `UF`, `CNPJ`, `Tel`, `TelFixo`, `Email`, `CEP`, `NomeUser`, `Senha`, `Perfil`) VALUES
(1, 'Estagiei', 'Pablines', 'Rua taltal', 'palmeiras', 'Nova Resende', 'MG', 0, '35999999999', '35623562', 'pablineduda@gmail.com', 37860000, 'binelinda', '123', 1),
(5, 'OrgCV', 'amanda', 'rua tal', 'tal', 'cv', 'mg', 2147483647, '3565552486', '35354546', 'amanda@gmail.com', 37880000, 'amandavpereira', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estagiario`
--

CREATE TABLE `estagiario` (
  `idEstagiario` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Sobrenome` varchar(50) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `Ende` varchar(50) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `Tel` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Curso` varchar(50) NOT NULL,
  `Consid` varchar(100) NOT NULL,
  `NomeUser` varchar(15) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  `Perfil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `estagiario`
--

INSERT INTO `estagiario` (`idEstagiario`, `Nome`, `Sobrenome`, `CPF`, `Ende`, `Bairro`, `Cidade`, `UF`, `Tel`, `Email`, `Curso`, `Consid`, `NomeUser`, `Senha`, `Perfil`) VALUES
(2, 'Pabline Eduarda', 'Nascimento', '118.782.476-38', 'Rua Manoel custÃ³dio', 'LAVAPES', 'NOVA RESENDE', '', '35998061573', 'pablineduda@gmail.com', 'as', '', 'asasas', 'asd', 0),
(12, 'amandaaaaa', 'pereira', '058568898568', 'no seu coraÃ§Ã£o', 'o meu', 'green cable', 'mg', '3565552486', 'amandinha@hotmail', 'direito', '', 'amandavpereira', '123', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vaga`
--

CREATE TABLE `vaga` (
  `idVaga` int(11) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `NomeEmpresa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Funcao` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Area` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Remunerado` text CHARACTER SET latin1 NOT NULL,
  `Valor` varchar(50) CHARACTER SET latin1 NOT NULL,
  `TempoEstudo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `PeriodoTrabalho` text CHARACTER SET latin1 NOT NULL,
  `Site` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `vaga`
--

INSERT INTO `vaga` (`idVaga`, `idEmpresa`, `NomeEmpresa`, `Funcao`, `Area`, `Remunerado`, `Valor`, `TempoEstudo`, `PeriodoTrabalho`, `Site`) VALUES
(4, 5, 'orgcv', 'limpar chÃ£o', 'direito', 'nao', 'sem valor', '3 anos ', 'Manhã', 'https://gartic.com.br/01375755'),
(6, 1, 'ESTAGIEI', '', 'informatica', 'simmm', 'R$30,00', '2 anos', 'manha', 'https://presencial.muz.ifsuldeminas.edu.br/'),
(14, 1, 'limpar', 'limpar', 'limpar', 'NÃ£o Remunerado', '0', '2 anos', 'Tarde', 'https://www.youtube.com/');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices de tabela `candidatar`
--
ALTER TABLE `candidatar`
  ADD PRIMARY KEY (`idCandidatar`),
  ADD KEY `FK_Vaga` (`idVaga`),
  ADD KEY `FK_Estagiario` (`idEstagiario`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Índices de tabela `estagiario`
--
ALTER TABLE `estagiario`
  ADD PRIMARY KEY (`idEstagiario`);

--
-- Índices de tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`idVaga`),
  ADD KEY `FK_Empresa` (`idEmpresa`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `candidatar`
--
ALTER TABLE `candidatar`
  MODIFY `idCandidatar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `estagiario`
--
ALTER TABLE `estagiario`
  MODIFY `idEstagiario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
