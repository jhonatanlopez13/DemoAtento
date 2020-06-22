-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2020 a las 16:56:54
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `silto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id_oferta` int(11) NOT NULL COMMENT 'Identificación de producto ',
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id_oferta`, `nombre`) VALUES
(1, 'Call center Bancolombia en Chia Cundinamarca'),
(2, 'Supervisor Junior 2'),
(5, 'Call center Bancolombia en Cajica Cundinamarca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL COMMENT 'Id de la solicitud para la ruta.',
  `solicitud` date NOT NULL COMMENT 'Fecha de la solicitudde ruta.',
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripcion de la ruta solicitada.',
  `cantidad_kilos` decimal(10,0) NOT NULL COMMENT 'Cantidad de kilos solicitados para  la ruta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `solicitud`, `descripcion`, `cantidad_kilos`) VALUES
(1234, '2020-05-25', 'Viaje Intermedio doble', '800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `identificacion` bigint(20) NOT NULL COMMENT 'Identificacion de user',
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de user',
  `apellido` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Apellido  de user',
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Email de user',
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de celular',
  `whatsapp` tinyint(1) NOT NULL COMMENT 'Whatsapp',
  `cargo` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Rol de user',
  `estado` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado del User',
  `fecha_ingreso` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Fecha de ingreso user',
  `foto` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`identificacion`, `nombre`, `apellido`, `email`, `telefono`, `whatsapp`, `cargo`, `estado`, `fecha_ingreso`, `foto`, `pass`) VALUES
(16838095, 'eduardo', 'sando', 'victorhoyoscolombia@gmail.com', '3138252764', 1, 'supervisor', 'activo', '2020-06-20 00:00:00', '../../img/upload/fotodigital.png', 'fcea920f7412b5da7be0cf42b8c93759'),
(22656626, 'eduardo', 'sando', 'wamora22@misena.edu.co', '2147483647', 1, 'supervisor', 'activo', '2020-06-20 00:00:00', '../../img/upload/foto estrella.png', 'fcea920f7412b5da7be0cf42b8c93759'),
(124356787, 'jose', 'Mendez', 'luisjoder@gmail.com', '3138252764', 1, 'bodeguero', 'activo', '2020-06-20 00:00:00', '../../img/upload/20200312_083734.jpg', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificación de producto ', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
