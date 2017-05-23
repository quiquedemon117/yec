-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2017 a las 23:09:47
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`) VALUES
(1, 'Luis Enrique', 'Bautista David'),
(2, 'Luis Enrique', 'Bautista David'),
(3, 'Karina', 'Escalona Cruz'),
(4, 'lol', 'lol'),
(5, 'asd', 'asd'),
(6, 'lol', 'lol'),
(7, 'aisudaisudh', 'iuhasiudhisaudhfc'),
(8, 'lkhgilhihblihigblihblhb', 'sdcsdc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `pass` blob NOT NULL,
  `privilegios` int(10) NOT NULL,
  `tipo` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `fecharegistrousu` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `ultimaconexion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `idsesion` varchar(150) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `privilegios`, `tipo`, `fecharegistrousu`, `ultimaconexion`, `idsesion`) VALUES
(4, '1234@gmail.com', 0x7c2c535cdae09c83951b63aca659710a0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 0, '', '12/10/2016', 'no login', 'no login'),
(10, 'quiquedemon117@gmail.com', 0x4c65626432333031, 0, '', '14/11/2016', 'no login', 'no login'),
(11, 'ing_lebd@hotmail.com', 0x4c65626432333031, 0, 'Captura Contable', '17-05-2017 (16:37:28)', 'no login', 'no login'),
(12, 'quiquedemon117@outlook.com', 0x4c65626432333031, 0, 'Captura Contable', '19-05-2017 (14:26:39)', 'no login', 'no login'),
(13, 'ing_escalona@hotmail.com', 0x4c65626432333031, 0, 'Captura Contable', '19-05-2017 (18:25:41)', 'no login', 'no login'),
(14, 'servero@lol.com', 0x6c6f6c, 0, 'Captura Contable', '19-05-2017 (18:36:57)', 'no login', 'no login'),
(15, 'lol@lol.com', 0x617364, 0, 'Captura Contable', '19-05-2017 (18:49:45)', 'no login', 'no login'),
(16, 'kike@lol.com', 0x6c6f6c, 0, 'Captura Contable', '19-05-2017 (18:53:48)', 'no login', 'no login'),
(17, 'lol@lol.com', 0x736173, 0, 'Captura Contable', '19-05-2017 (19:00:41)', 'no login', 'no login'),
(18, 'lol@lol.com', 0x69686769796867, 0, 'Captura Contable', '19-05-2017 (19:03:58)', 'no login', 'no login');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
