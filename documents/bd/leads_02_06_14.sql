-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Servidor: mysql.praquerumo.com.br
-- Tempo de Geração: Jun 02, 2014 as 05:02 PM
-- Versão do Servidor: 5.1.56
-- Versão do PHP: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `praquerumo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` double NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

--
-- Extraindo dados da tabela `leads`
--

INSERT INTO `leads` (`id`, `email`) VALUES
(73, 'thalita_rmoura@hotmail.com'),
(27, 'aceleradora@fabriq.com.br'),
(26, 'rbbernardino@gmail.com'),
(6, 'goettezinho@gmail.com'),
(25, 'thulioqueiroz@gmail.com'),
(24, 's.f.bruno@gmail.com'),
(9, 'orangemarques@gmail.com'),
(10, 'rafaelsiza@gmail.com'),
(23, 'neyandrade2005@gmail.com'),
(72, 'marcus.junioor@gmail.com'),
(71, 'nivaldo.viana@gmail.com'),
(70, 'ewerton.larry.ferreira@gmail.com'),
(29, 'fredson.encarnacao@gmail.com'),
(35, 'daniel.tadeu@gmail.com'),
(36, 'imanaus@outlook.com'),
(106, 'minegabriele@gmail.com'),
(42, 'fabiano.box@gmail.com'),
(43, 'pgquintao@gmail.com'),
(45, 'cabralff@gmail.com'),
(47, 'paulo@futura.ws'),
(48, 'rhedson@gmail.com'),
(49, 'fabiolabess@gmail.com'),
(50, 'amaury.cavalcante@hotmail.com'),
(52, 'the00ball@gmail.com'),
(53, 'ant.aluado@gmail.com'),
(54, 'eulergms@yahoo.com.br'),
(55, 'james_junior@uol.com.br'),
(56, 'cehasli@yahoo.com.br'),
(57, 'hermantony@hotmail.com'),
(58, 'fernandadecastro2013@gmail.com'),
(59, 'claraffer@gmail.com'),
(60, 'felipe.p.barcellos@gmail.com'),
(69, 'awdrenfontao@live.com'),
(74, 'shirley.violin@gmail.com'),
(75, 'smonteiro.sabrina@hotmail.com'),
(105, 'jessicavicentini@gmail.com'),
(77, 'cicerovls@hotmail.com'),
(78, 'rudamarques@gmail.com'),
(79, 'kathlenbrun@gmail.com'),
(80, 'sarah.mao.br@gmail.com'),
(85, 'comercial@praquerumo.com.br'),
(86, 'marcela.pinheiro@gmail.com'),
(87, 'larisselam@gmail.com'),
(88, 'rodrigonlau@hotmail.com'),
(89, 'Ezequiasvargas@outlook.com'),
(90, 'claudiaasimao@gmail.com'),
(91, 'juhanada@gmail.com'),
(92, 'gilmaramaquine@gmail.com'),
(93, 'kenia.castelo@gmail.com'),
(94, 'daniel.goettenauer@gmail.com'),
(95, 'fesdonascimento@gmail.com'),
(96, 'thalisson.dinelli@yahoo.com.br'),
(97, 'madiel.it@gmail.com'),
(98, 'eburgers8@gmail.com'),
(99, 'wadsonmelo@gmail.com'),
(100, 'luisaugusto@gmail.com'),
(101, 'lilissaalmeida@gmail.com'),
(102, 'arivano@live.com.pt'),
(103, 'brunu.costa@gmail.com'),
(104, 'Edasaturno@hotmail.com'),
(107, 'clic22@gmail.com'),
(108, 'taynara.tcb@gmail.com'),
(109, 'erlan.binda@gmail.com'),
(110, 'robertajacauna@gmail.com'),
(111, 'Renatoborges.souza@gmail.com'),
(112, 'caioschramm@yahoo.com'),
(113, 'taylatenorio@gmail.com'),
(114, 'aclarissarp@gmail.com'),
(115, 'e_cossetin@hotmail.com'),
(116, 'camilonetto@gmail.com'),
(117, 'kmcomitti@gmail.com'),
(118, 'rosasjr@uol.com.br'),
(119, 'unaisacona@gmail.com'),
(120, 'andreza.dy@gmail.com'),
(121, 'veronicasampaio@hotmail.com'),
(122, 'acarolineuea@gmail.com'),
(123, 'uli.totti@gmail.com'),
(124, 'raphael7283@gmail.com'),
(125, 'mds.joyce@gmail.com'),
(126, 'jarmi_@hotmail.com'),
(127, 'ideiasfera@gmail.com'),
(128, 'jfernandes.info@gmail.com'),
(129, 'pimentel_jp@hotmail.com'),
(130, 'acadaf@gmail.com'),
(131, 'dirce.quintino@gmail.com'),
(132, 'caiodao@gmail.com'),
(133, 'fannytatiane@gmail.com'),
(134, 'nicolazhaz@gmail.com'),
(135, 'izabelasm@outlook.com'),
(136, 'esmoura2004@hotmail.com'),
(137, 'iuryfernando03@hotmail.com'),
(138, 'liza_matias@hotmail.com'),
(139, 'tuliortp@hotmail.com'),
(140, 'Marcus.brasileiro@gmail.com'),
(141, 'hoshihara_adria@hotmail.com'),
(142, 'emanuelleavelino@hotmail.com'),
(143, 'alda.pmi@gmail.com'),
(144, 'andrade86jorge@gmail.com'),
(145, 'idemax@gmail.com'),
(146, 'danielfreire@gmail.com'),
(147, 'rafallante@yahoo.com.br'),
(148, 'gongonxa@hotmail.com'),
(149, 'diegorodrigues.computacao@gmail.com'),
(150, 'ismsantos@hotmail.com'),
(151, 'manudedeus@gmail.com'),
(152, 'rai.rlima@hotmail.com'),
(153, 'suellen.fo.vieira@gmail.com'),
(154, 'emillyagc@gmail.com'),
(155, 'palomafju@gmail.com'),
(156, 'mao@amazon-Nature-tours.com'),
(157, 'tayke.monteiro@praquerumo.com.br'),
(158, 'alberpp@gmail.com'),
(159, 'jgeraldorneto@gmail.com'),
(160, 'Danilo.mpe@gmail.com'),
(161, 'toni_gorgonha@hotmail.com'),
(162, 'evndeveloper@hotmail.com'),
(163, 'Asb.drica@yahoo.com.br'),
(164, 'Claudemirfrotta@gmail.com'),
(165, 'patriciafallcao@gmail.com'),
(166, 'Kasuo_wkl@hotmail.com'),
(167, 'Elenfpara@gmail.com'),
(168, 'pauloroberto.rpg@gmail.com'),
(169, 'hannonbenigno@hotmail.com'),
(170, 'renanciza@gmail.com'),
(171, 'expertisetri@hotmail.com'),
(172, 'cezarvidaboa@gmail.com'),
(173, 'ruana.holanda@bol.com.br'),
(174, 'nadia.oliveira@amazonprint.com.br'),
(175, 'carol_odagiri@hotmail.com'),
(176, 'paty_odagiri@hotmail.com'),
(177, 'fredavalondasilva@gmail.com'),
(178, 'andbrain@gmail.com'),
(179, 'Natachapicanco@gmail.com'),
(180, 'Sidianecunha26@hotmail.com'),
(181, 'joshuaneman@gmail.com'),
(182, 'Januariojonas@gmail.com'),
(183, 'Jadson_gb@hotmail.com'),
(184, 'amanda.guerreiro@gmail.com'),
(185, 'rosielmendonca@gmail.com'),
(186, 'jorge.demarco@microsoft.com'),
(187, 'Paulomarquesbioquimico@gmail.com'),
(188, 'Celso@actionam.com.br'),
(189, 'Michaelhgp@gmail.com'),
(190, 'gabrielribeiro.turismo@hotmail.com'),
(191, 'ecologu@gmail.com'),
(192, 'admdeyvison@gmail.com'),
(193, 'kamilalima.mel@gmail.com'),
(194, 'simonecarolferreira@hotmail.com'),
(195, 'Sidney-ms2008@hotmail.com'),
(196, 'mota_jessica22@hotmail.com'),
(197, 'Silvyakaren@gmail.com'),
(198, 'ca_iquematos@hotmail.com'),
(199, 'lazaroluiz@gmail.com'),
(200, 'irauna.douglas.monteiro@gmail.com'),
(201, 'erika.mey@hotmail.com'),
(202, 'elias.andrey@gmail.com'),
(203, 'fredericomen@yahoo.com.br'),
(204, 'alessandro.barbosa@conatussoftware.com.br'),
(205, 'josebenchimol@gmail.com'),
(206, 'gabriellribeiro.turismo@hotmail.com'),
(207, 'julio@gbnorte.com'),
(208, 'julio@gbnorte.com.br'),
(209, 'leandrucoimbra@hotmail.com'),
(210, 'danterbj@gmail.com.br'),
(211, 'paulo.marques.bioquimico@gmail.com'),
(212, 'ju.arend@bol.com.br'),
(213, 'farohi12@hotmail.com'),
(214, 'jcnoriega.melo@gmail.com'),
(215, 'leal.lucas2@gmail.com'),
(216, 'mc.sarkis31@gmail.com'),
(217, 'vip_rs1@hotmail.com'),
(218, 'victor_22honda@hotmail.com'),
(219, 'dr_dmo@hotmail.com'),
(220, 'andtec@hotmail.com'),
(221, 'gilcarlos7@hotmail.com'),
(222, 'thaiscastrosilva@hotmail.com'),
(223, 'felipe-os@hotmail.com'),
(224, 'rodrigo_ibrahim@hotmail.com'),
(225, 'alessandra33.moreno@hotmail.com'),
(226, 'alexandrefg_@hotmail.com'),
(227, 'jr.sanchezc@hotmail.com'),
(228, 'etzel.santos@gmail.com'),
(229, 'suzy.menezeslp@yahoo.com.br'),
(230, 'persilenne.marques@gmail.com'),
(231, 'daniel.erasmo@gmail.com'),
(232, 'taatix3@live.com'),
(233, 'camilotp@gmail.com'),
(234, 'herbert_gil@hotmail.com'),
(235, 'asdjkr@hotmail.com'),
(236, 'pollyanna_vinhorte@hotmail.com'),
(237, 'rodriguesfilho95@gmail.com'),
(238, 'salomao.ferreira@gmail.com'),
(239, 'luanaaleixo@gmail.com');
