-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2022 a las 17:06:28
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `nombre_categoria` varchar(50) NOT NULL,
  `imagen_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`nombre_categoria`, `imagen_categoria`) VALUES
('Kilometro0', 'view/img/categorias/k0.jpg'),
('Renting', 'view/img/categorias/renting.jpg'),
('Seminuevo', 'view/img/categorias/segunda_mano.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `ID` int(11) NOT NULL,
  `NBast` int(11) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Motor` varchar(30) NOT NULL,
  `Caballos` varchar(30) NOT NULL,
  `Kilometros` int(10) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `DatosAd` varchar(1000) DEFAULT NULL,
  `fecha` varchar(20) NOT NULL,
  `EXTRA` varchar(200) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `precio` varchar(12) DEFAULT NULL,
  `lat` varchar(25) NOT NULL,
  `lon` varchar(25) NOT NULL,
  `city` varchar(50) NOT NULL,
  `count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`ID`, `NBast`, `Marca`, `Modelo`, `Motor`, `Caballos`, `Kilometros`, `Matricula`, `DatosAd`, `fecha`, `EXTRA`, `imagen`, `Categoria`, `Tipo`, `precio`, `lat`, `lon`, `city`, `count`) VALUES
(1, 123123124, 'Mercedes', 'GT5', 'Mercedes V4', '450', 1000, '9990 HFH', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla:', 'view/img/cars/mercedesgt5.jpeg', 'Kilometro0', 'Diesel', '88000', '38.823120047553765', '-0.551015', 'Agullent', 109),
(2, 123456764, 'Alpine', 'A12', 'Renaul12', '450', 123, '1256 HYA', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'view/img/cars/alpinea12.jpg', 'Kilometro0', 'Gasolina', '65000', '38.82176799798619', '-0.6073255965028', 'Ontinyent', 53),
(3, 432342342, 'Toyota', 'Supra GT5', 'Toyota V4', '760', 12000, '4580 GFR', 'A', '13/06/2021', 'Cristales Tintados:Papeleo en regla', 'view/img/cars/toyotasupragt5.jpg', 'Kilometro0', 'Diesel', '75000', '38.839549198050726', '-0.5227501809889717', 'Albaida', 24),
(4, 756847321, 'Cupra', 'Formentor', 'CUPRA FORMENTOR 2.0 TDI 110KW', '150', 100000, '9990 HKJ', 'A', '13/06/2022', '', 'view/img/cars/cupraformentor.jpg', 'Seminuevo', 'Diesel', '45000', '38.822574', '-0.553371', 'Agullent', 332),
(5, 237645879, 'Mercedes', 'Clase A', 'Mercedes', '210', 0, '6457 HFK', 'A', '16/02/2022', '', 'view/img/cars/mercedesclasea.jpg', 'Kilometro0', 'Diesel', '36000', '38.762950', '-0.610994', 'Bocairent', 80),
(6, 879456321, 'Cupra', 'Leon', 'Cupra', '140', 0, '3245 HFL', 'A', '12/03/2022', '', 'view/img/cars/cupraleon.jpg', 'Kilometro0', 'Diesel', '28000', '38.877965', '-0.587656', 'Ayelo de Malferit', 47),
(7, 453333222, 'Cupra', 'Leon ST', 'Cupra', '124', 0, '4568 URF', 'A', '14/06/2021', '', 'view/img/cars/cupraleonsport.jpg', 'Kilometro0', 'Diesel', '42000', '38.854298823741445', '-0.4999300378606435', 'Palomar', 81),
(8, 659368475, 'Cupra', 'Ateca', 'Cupra', '180', 0, '6834 ULF', 'A', '20/03/2022', '', 'view/img/cars/cupraateca.jpg', 'Kilometro0', 'Electrico', '34000', '38.96640472510502', '-0.588255574398274', 'Canals', 33),
(9, 695524910, 'Cupra', 'Born', 'Cupra', '120', 0, '1234 FGT', 'A', '', '', 'view/img/cars/cupraborn.jpg', 'Kilometro0', 'Diesel', '24000', '38.911343', '-0.546582', 'Ollería', 31),
(10, 894093746, 'Cupra', 'e-Racer', 'Cupra', '480', 0, '3452 LKF', 'A', '', '', 'view/img/cars/cupraeracer.jpg', 'Kilometro0', 'Gasolina', '124000', '38.889352', '-0.494056', 'Montaverner', 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exceptions`
--

CREATE TABLE `exceptions` (
  `ID` int(11) NOT NULL,
  `TYPE` varchar(100) NOT NULL,
  `DESCR` varchar(360) DEFAULT NULL,
  `DATE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `exceptions`
--

INSERT INTO `exceptions` (`ID`, `TYPE`, `DESCR`, `DATE`) VALUES
(1, '503', '', '2022-01-17 10:36:14'),
(2, '503', '', '2022-01-17 10:36:20'),
(3, '503', '', '2022-01-17 10:36:22'),
(4, '503', '', '2022-01-17 10:37:44'),
(5, '503', '', '2022-01-17 10:37:47'),
(6, '503', '', '2022-01-17 10:38:19'),
(7, '503', 'Error_en_el_SQL', '2022-01-17 10:39:45'),
(8, '503', 'Error_en_el_SQL', '2022-01-17 10:39:50'),
(9, '503', 'Error_en_el_SQL', '2022-01-17 10:40:39'),
(10, '503', 'Error_en_el_SQL', '2022-01-17 10:40:41'),
(11, '503', 'Error_en_el_SQL', '2022-01-17 10:42:50'),
(12, '503', 'Error_en_el_SQL', '2022-01-17 10:43:15'),
(13, '503', 'Error_en_el_SQL', '2022-01-17 10:43:22'),
(14, '503', 'Error_en_el_SQL', '2022-01-17 10:52:15'),
(15, '503', 'Error_en_el_SQL', '2022-01-17 10:52:26'),
(16, '503', 'Error_en_el_SQL', '2022-01-17 10:52:27'),
(17, '503', 'Error_en_el_SQL', '2022-01-17 10:53:05'),
(18, '503', 'Error_en_el_SQL', '2022-01-17 10:53:25'),
(19, '503', 'Error_en_el_SQL', '2022-01-18 20:36:50'),
(20, '503', 'Error_en_el_SQL', '2022-01-18 20:37:49'),
(21, '503', 'Error_en_el_SQL', '2022-01-18 20:45:36'),
(22, '503', 'Error_en_el_SQL', '2022-01-18 20:46:29'),
(23, '503', 'Error_en_el_$ajax', '2022-01-31 16:59:52'),
(24, '503', 'Error_en_el_$ajax', '2022-01-31 17:01:37'),
(25, '503', 'Error_en_el_$ajax', '2022-01-31 17:01:39'),
(26, '503', 'Error_en_el_$ajax', '2022-01-31 17:01:40'),
(27, '503', 'Error_en_el_$ajax', '2022-01-31 17:01:40'),
(28, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:09'),
(29, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:09'),
(30, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:10'),
(31, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:10'),
(32, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:11'),
(33, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:12'),
(34, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:13'),
(35, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:54'),
(36, '503', 'Error_en_el_$ajax', '2022-01-31 17:03:55'),
(37, '503', 'Error_en_el_$ajax', '2022-01-31 17:04:41'),
(38, '503', 'Error_en_el_$ajax', '2022-01-31 17:04:42'),
(39, '503', 'Error_en_el_$ajax', '2022-01-31 18:50:33'),
(40, '503', 'Error_en_el_$ajax', '2022-01-31 18:54:14'),
(41, '503', 'Error_en_el_$ajax', '2022-01-31 19:00:51'),
(42, '503', 'Error_en_el_$ajax', '2022-01-31 19:00:53'),
(43, '503', 'Error_en_el_$ajax', '2022-01-31 19:01:13'),
(44, '503', 'Error_en_el_$ajax', '2022-01-31 19:03:35'),
(45, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:28'),
(46, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:28'),
(47, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:28'),
(48, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:28'),
(49, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:29'),
(50, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:29'),
(51, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:29'),
(52, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:29'),
(53, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:30'),
(54, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:30'),
(55, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:30'),
(56, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:30'),
(57, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:31'),
(58, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:31'),
(59, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:31'),
(60, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:31'),
(61, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:31'),
(62, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:32'),
(63, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:32'),
(64, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:32'),
(65, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:32'),
(66, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:33'),
(67, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:33'),
(68, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:33'),
(69, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:33'),
(70, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:34'),
(71, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:34'),
(72, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:35'),
(73, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:35'),
(74, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:35'),
(75, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:35'),
(76, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:36'),
(77, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:36'),
(78, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:36'),
(79, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:36'),
(80, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:37'),
(81, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:37'),
(82, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:37'),
(83, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:37'),
(84, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:38'),
(85, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:38'),
(86, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:38'),
(87, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:38'),
(88, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:39'),
(89, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:39'),
(90, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:39'),
(91, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:39'),
(92, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:40'),
(93, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:40'),
(94, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:40'),
(95, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:40'),
(96, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:41'),
(97, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:41'),
(98, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:41'),
(99, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:41'),
(100, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:42'),
(101, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:42'),
(102, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:42'),
(103, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:42'),
(104, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:43'),
(105, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:43'),
(106, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:43'),
(107, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:43'),
(108, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:44'),
(109, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:44'),
(110, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:44'),
(111, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:44'),
(112, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:45'),
(113, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:45'),
(114, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:45'),
(115, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:45'),
(116, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:46'),
(117, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:46'),
(118, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:46'),
(119, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:46'),
(120, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:46'),
(121, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:47'),
(122, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:47'),
(123, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:47'),
(124, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:48'),
(125, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:48'),
(126, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:48'),
(127, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:48'),
(128, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:48'),
(129, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:49'),
(130, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:49'),
(131, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:49'),
(132, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:49'),
(133, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:50'),
(134, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:50'),
(135, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:50'),
(136, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:50'),
(137, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:51'),
(138, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:51'),
(139, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:51'),
(140, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:51'),
(141, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:52'),
(142, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:52'),
(143, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:52'),
(144, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:52'),
(145, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:53'),
(146, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:53'),
(147, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:53'),
(148, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:53'),
(149, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:54'),
(150, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:55'),
(151, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:55'),
(152, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:55'),
(153, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:55'),
(154, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:55'),
(155, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:56'),
(156, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:56'),
(157, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:56'),
(158, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:56'),
(159, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:57'),
(160, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:57'),
(161, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:57'),
(162, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:57'),
(163, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:58'),
(164, '503', 'Error_en_el_$ajax', '2022-01-31 19:05:58'),
(165, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:49'),
(166, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:49'),
(167, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:50'),
(168, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:50'),
(169, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:50'),
(170, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:50'),
(171, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:51'),
(172, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:51'),
(173, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:51'),
(174, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:51'),
(175, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:52'),
(176, '503', 'Error_en_el_$ajax', '2022-01-31 19:06:52'),
(177, '503', 'Error_en_el_$ajax', '2022-01-31 19:07:35'),
(178, '503', 'Error_en_el_$ajax', '2022-01-31 19:07:35'),
(179, '503', 'Error_en_el_$ajax', '2022-01-31 19:07:36'),
(180, '503', 'Error_en_el_$ajax', '2022-01-31 19:07:36'),
(181, '503', 'Error_en_el_$ajax', '2022-01-31 19:07:36'),
(182, '503', 'Error_en_el_$ajax', '2022-01-31 19:07:36'),
(208, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:24'),
(209, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:24'),
(210, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:25'),
(211, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:25'),
(212, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:25'),
(213, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:25'),
(214, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:26'),
(215, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:26'),
(216, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:26'),
(217, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:31'),
(218, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:31'),
(219, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:31'),
(220, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:32'),
(221, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:32'),
(222, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:32'),
(223, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:32'),
(224, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:33'),
(225, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:33'),
(226, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:33'),
(227, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:33'),
(228, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:34'),
(229, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:34'),
(230, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:34'),
(231, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:34'),
(232, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:35'),
(233, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:35'),
(234, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:35'),
(235, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:35'),
(236, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:35'),
(237, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:36'),
(238, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:36'),
(239, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:36'),
(240, '503', 'Error_en_el_$ajax', '2022-01-31 19:11:59'),
(241, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:00'),
(242, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:00'),
(243, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:00'),
(244, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:00'),
(245, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:00'),
(246, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:01'),
(247, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:21'),
(248, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:21'),
(249, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:21'),
(250, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:21'),
(251, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:22'),
(252, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:22'),
(253, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:22'),
(254, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:23'),
(255, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:23'),
(256, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:23'),
(257, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:23'),
(258, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:23'),
(259, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:24'),
(260, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:25'),
(261, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:25'),
(262, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:25'),
(263, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:25'),
(264, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:26'),
(265, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:26'),
(266, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:26'),
(267, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:26'),
(268, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:26'),
(269, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:27'),
(270, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:27'),
(271, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:27'),
(272, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:27'),
(273, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:32'),
(274, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:33'),
(275, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:33'),
(276, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:33'),
(277, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:33'),
(278, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:34'),
(279, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:34'),
(280, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:34'),
(281, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:38'),
(282, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:39'),
(283, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:39'),
(284, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:39'),
(285, '503', 'Error_en_el_$ajax', '2022-01-31 19:12:39'),
(286, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:11'),
(287, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:12'),
(288, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:12'),
(289, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:12'),
(290, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:12'),
(291, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:13'),
(292, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:32'),
(293, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:34'),
(294, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:35'),
(295, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:35'),
(296, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:35'),
(297, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:35'),
(298, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:35'),
(299, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:36'),
(300, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:36'),
(301, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:36'),
(302, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:36'),
(303, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:36'),
(304, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:37'),
(305, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:37'),
(306, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:37'),
(307, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:37'),
(308, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:37'),
(309, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:38'),
(310, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:38'),
(311, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:38'),
(312, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:38'),
(313, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:38'),
(314, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:39'),
(315, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:39'),
(316, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:39'),
(317, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:39'),
(318, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:39'),
(319, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:40'),
(320, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:40'),
(321, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:40'),
(322, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:40'),
(323, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:40'),
(324, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:41'),
(325, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:41'),
(326, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:41'),
(327, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:41'),
(328, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:41'),
(329, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:42'),
(330, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:42'),
(331, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:42'),
(332, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:42'),
(333, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:42'),
(334, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:43'),
(335, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:43'),
(336, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:43'),
(337, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:43'),
(338, '503', 'Error_en_el_$ajax', '2022-01-31 19:13:44'),
(339, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:29'),
(340, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:29'),
(341, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:30'),
(342, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:30'),
(343, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:30'),
(344, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:30'),
(345, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:31'),
(346, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:31'),
(347, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:31'),
(348, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:31'),
(349, '503', 'Error_en_el_$ajax', '2022-01-31 19:16:31'),
(350, '503', 'Error_en_el_$ajax', '2022-01-31 19:17:59'),
(351, '503', 'Error_en_el_$ajax', '2022-01-31 19:17:59'),
(352, '503', 'Error_en_el_$ajax', '2022-01-31 19:17:59'),
(353, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:00'),
(354, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:00'),
(355, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:00'),
(356, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:00'),
(357, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:01'),
(358, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:01'),
(359, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:01'),
(360, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:01'),
(361, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:02'),
(362, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:02'),
(363, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:02'),
(364, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:02'),
(365, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:02'),
(366, '503', 'Error_en_el_$ajax', '2022-01-31 19:18:43'),
(367, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:53'),
(368, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:54'),
(369, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:54'),
(370, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:54'),
(371, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:54'),
(372, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:54'),
(373, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:55'),
(374, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:55'),
(375, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:55'),
(376, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:55'),
(377, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:55'),
(378, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:56'),
(379, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:56'),
(380, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:56'),
(381, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:56'),
(382, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:57'),
(383, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:57'),
(384, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:57'),
(385, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:57'),
(386, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:57'),
(387, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:58'),
(388, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:58'),
(389, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:58'),
(390, '503', 'Error_en_el_$ajax', '2022-02-01 18:39:58'),
(391, '503', 'Error_en_el_$ajax', '2022-02-01 18:40:44'),
(392, '503', 'Error_en_el_$ajax', '2022-02-01 19:45:02'),
(393, '503', 'Error_en_el_$ajax', '2022-02-01 19:45:27'),
(394, '503', 'Error_en_el_$ajax', '2022-02-01 19:49:38'),
(395, '503', 'Error_en_el_controller_home', '2022-02-03 21:51:04'),
(396, '503', 'Error_en_el_controller_home', '2022-02-03 21:51:13'),
(397, '503', 'Error_en_el_controller_home', '2022-02-03 21:51:21'),
(398, '503', 'Error_en_el_controller_home', '2022-02-03 21:52:36'),
(399, '503', 'Error_en_el_controller_home', '2022-02-17 15:25:47'),
(400, '503', 'Error_en_el_controller_home', '2022-02-17 15:46:54'),
(401, '503', 'Error_en_el_controller_home', '2022-02-28 15:22:49'),
(402, '503', 'Error_en_el_controller_home', '2022-02-28 15:23:22'),
(403, '503', 'Error_en_el_controller_home', '2022-02-28 15:23:29'),
(404, '503', 'Error_en_el_controller_home', '2022-02-28 15:28:20'),
(405, '503', 'Error_en_el_controller_home', '2022-02-28 15:28:46'),
(406, '503', 'Error_en_el_controller_home', '2022-02-28 15:32:18'),
(407, '503', 'Error_en_el_controller_home', '2022-02-28 15:34:43'),
(408, '503', 'Error_en_el_controller_home', '2022-02-28 15:51:19'),
(409, '503', 'Error_en_el_controller_home', '2022-03-01 18:58:08'),
(410, '503', 'Error_en_el_controller_home', '2022-03-01 19:00:58'),
(411, '503', 'Error_en_el_controller_home', '2022-03-01 19:05:52'),
(412, '503', 'Error_en_el_controller_shop', '2022-03-03 16:13:07'),
(413, '503', 'Error_en_el_controller_shop', '2022-03-03 16:16:05'),
(414, '503', 'Error_en_el_controller_shop', '2022-03-03 16:16:53'),
(415, '503', 'Error_en_el_controller_home', '2022-03-24 20:01:25'),
(416, '503', 'Error_en_el_controller_home', '2022-03-24 20:01:32'),
(417, '503', 'Error_en_el_controller_home', '2022-03-24 20:02:14'),
(418, '503', 'Error_en_el_controller_home', '2022-03-24 20:02:28'),
(419, '503', 'Error_en_el_controller_home', '2022-03-24 20:11:21'),
(420, '503', 'Error_en_el_controller_home', '2022-03-24 20:13:34'),
(421, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:10'),
(422, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:10'),
(423, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:10'),
(424, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:11'),
(425, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:11'),
(426, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:11'),
(427, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:11'),
(428, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:11'),
(429, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:12'),
(430, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:12'),
(431, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:12'),
(432, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:12'),
(433, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:12'),
(434, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:13'),
(435, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:13'),
(436, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:13'),
(437, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:13'),
(438, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:13'),
(439, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:23'),
(440, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:29'),
(441, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:29'),
(442, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:29'),
(443, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:29'),
(444, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:30'),
(445, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:30'),
(446, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:30'),
(447, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:30'),
(448, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:30'),
(449, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:31'),
(450, '503', 'Error_en_el_controller_home', '2022-03-24 20:58:31'),
(451, '503', 'Error_en_el_controller_home', '2022-03-24 20:59:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `id_coche` int(11) NOT NULL,
  `ruta_imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `id_coche`, `ruta_imagen`) VALUES
(1, 1, 'view/img/cars/cars_preview/mercedesgt51.jpeg'),
(2, 1, 'view/img/cars/cars_preview/mercedesgt52.jpeg'),
(3, 1, 'view/img/cars/cars_preview/mercedesgt53.jpg'),
(4, 2, 'view/img/cars/cars_preview/alpinea121.jpeg'),
(5, 2, 'view/img/cars/cars_preview/alpinea122.jpg'),
(6, 2, 'view/img/cars/cars_preview/alpinea123.jpg'),
(7, 3, 'view/img/cars/cars_preview/supragt51.jpg'),
(8, 3, 'view/img/cars/cars_preview/supragt52.jpg'),
(9, 3, 'view/img/cars/cars_preview/supragt53.jpg'),
(10, 4, 'view/img/cars/cars_preview/cupraformentor1.jpg'),
(11, 4, 'view/img/cars/cars_preview/cupraformentor2.jpeg'),
(12, 5, 'view/img/cars/cars_preview/mercedesclasea1.jpg'),
(13, 5, 'view/img/cars/cars_preview/mercedesclasea2.jpg'),
(14, 6, 'view/img/cars/cars_preview/cupraleon1.jpeg'),
(15, 6, 'view/img/cars/cars_preview/cupraleon2.jpeg'),
(16, 8, 'view/img/cars/cars_preview/cupraateca1.jpg'),
(17, 8, 'view/img/cars/cars_preview/cupraateca2.jpg'),
(18, 9, 'view/img/cars/cars_preview/cupraborn1.jpg'),
(19, 9, 'view/img/cars/cars_preview/cupraborn2.jpg'),
(20, 10, 'view/img/cars/cars_preview/cupraeracer1.jpg'),
(21, 10, 'view/img/cars/cars_preview/cupraeracer2.jpg'),
(24, 7, 'view/img/cars/cars_preview/cupraleonsport1.jpg'),
(25, 7, 'view/img/cars/cars_preview/cupraleonsport2.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `ID_like` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ID_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`ID_like`, `username`, `ID_car`) VALUES
(163, 'acabidasales', 4),
(164, 'acabidasales', 6),
(166, 'acabidasales', 8),
(167, 'acabidasales', 9),
(168, 'acabidasales', 10),
(169, 'acabidasales', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `nombre_marca` varchar(50) NOT NULL,
  `imagen_marca` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`nombre_marca`, `imagen_marca`) VALUES
('Alpine', 'view/img/marcas/alpine.png'),
('Cupra', 'view/img/marcas/cupra.png'),
('Mercedes', 'view/img/marcas/mercedes.png'),
('Toyota', 'view/img/marcas/toyota.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `nombre_tipo` varchar(50) NOT NULL,
  `imagen_tipo` varchar(200) NOT NULL,
  `emision` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`nombre_tipo`, `imagen_tipo`, `emision`) VALUES
('Diesel', 'view/img/tipo/diesel.png', '5'),
('Electrico', 'view/img/tipo/electric.png', '1'),
('Gasolina', 'view/img/tipo/gasolina.png', '4'),
('Hidrogeno', 'view/img/tipo/hidrogeno.png', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(12) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `type`, `avatar`) VALUES
('acabidasales', '$2y$12$.Sq8uj3Oq7oQJiFdCsM8telmLBKylXQcUhN7sFwQCsbTOzEvYFyzS', 'acabidasales@gmail.com', 'client', 'https://robohash.org/c53d00d6da113ac6d2e13e2e60cdb4a9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`nombre_categoria`);

--
-- Indices de la tabla `coches`
--
ALTER TABLE `coches`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Matricula` (`Matricula`),
  ADD UNIQUE KEY `NBast` (`NBast`),
  ADD KEY `Marca` (`Marca`),
  ADD KEY `Categoria` (`Categoria`),
  ADD KEY `Tipo` (`Tipo`);

--
-- Indices de la tabla `exceptions`
--
ALTER TABLE `exceptions`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_coche` (`id_coche`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`ID_like`),
  ADD KEY `username` (`username`),
  ADD KEY `ID_car` (`ID_car`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`nombre_marca`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`nombre_tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coches`
--
ALTER TABLE `coches`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `exceptions`
--
ALTER TABLE `exceptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `ID_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coches`
--
ALTER TABLE `coches`
  ADD CONSTRAINT `coches_ibfk_1` FOREIGN KEY (`Marca`) REFERENCES `marca` (`nombre_marca`),
  ADD CONSTRAINT `coches_ibfk_2` FOREIGN KEY (`Categoria`) REFERENCES `categoria` (`nombre_categoria`),
  ADD CONSTRAINT `coches_ibfk_3` FOREIGN KEY (`Tipo`) REFERENCES `tipo` (`nombre_tipo`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_coche`) REFERENCES `coches` (`ID`);

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`ID_car`) REFERENCES `coches` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
