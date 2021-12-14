-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2021 a las 20:04:14
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flujocomite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujocondicionante`
--

CREATE TABLE `flujocondicionante` (
  `flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Si` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `No` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujocondicionante`
--

INSERT INTO `flujocondicionante` (`flujo`, `proceso`, `Si`, `No`) VALUES
('F1', 'P4', 'P5', 'P3'),
('F1', 'P7', 'P8', 'P6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE `flujoproceso` (
  `flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rol` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `procesosiguiente` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `formulario` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`flujo`, `proceso`, `tipo`, `rol`, `procesosiguiente`, `formulario`) VALUES
('F1', 'P1', 'I', 'Comité', 'P2', 'convocatoria'),
('F1', 'P2', 'P', 'Frente', 'P3', 'inscripcion'),
('F1', 'P3', 'P', 'Frente', 'P4', 'presentardoc'),
('F1', 'P4', 'C', 'Comité', NULL, 'verifica'),
('F1', 'P5', 'P', 'Comité', 'P6', 'habilitado'),
('F1', 'P6', 'P', 'Comité', 'P7', 'convocaelec'),
('F1', 'P7', 'C', 'Estudiante', NULL, 'solicitudhab'),
('F1', 'P8', 'P', 'Comité', 'P9', 'notifvotante'),
('F1', 'P9', 'P', 'Estudiante', 'P10', 'votacion'),
('F1', 'P10', 'P', 'Comité', 'P11', 'conteo'),
('F1', 'P11', 'P', 'Comité', 'P12', 'verifvotos'),
('F1', 'P12', 'F', 'Comité', NULL, 'resultados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `notramite` int(11) DEFAULT NULL,
  `usuario` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `flujo` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fechainicio` datetime DEFAULT NULL,
  `fechafin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`notramite`, `usuario`, `flujo`, `proceso`, `fechainicio`, `fechafin`) VALUES
(100, 'German', 'F1', 'P1', '2021-12-01 08:00:00', '2021-12-01 12:00:00'),
(101, 'Frente1', 'F1', 'P3', '2021-12-02 10:00:00', NULL),
(102, 'Frente2', 'F1', 'P2', '2021-12-02 11:00:00', '2021-12-02 12:00:00'),
(103, 'Frente3', 'F1', 'P4', '2021-12-03 11:00:00', '2021-12-14 02:21:55'),
(102, 'Frente2', 'F1', 'P3', '2021-12-03 13:00:00', '2021-12-04 11:00:00'),
(104, 'Frente4', 'F1', 'P4', '2021-12-03 14:00:00', '2021-12-14 03:22:09'),
(102, 'Frente2', 'F1', 'P4', '2021-12-04 12:00:00', '2021-12-04 14:00:00'),
(103, 'Frente3', 'F1', 'P3', '2021-12-04 13:00:00', NULL),
(102, 'Frente2', 'F1', 'P5', '2021-12-05 00:00:00', NULL),
(104, 'Frente4', 'F1', 'P3', '2021-12-05 08:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contrasenia` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rol` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contrasenia`, `rol`) VALUES
('German', '123456', 'C'),
('Marco', '123456', 'C'),
('Frente1', '123', 'F'),
('Frente2', '123', 'F'),
('Frente3', '123', 'F'),
('Frente4', '123', 'F'),
('Est1', '456', 'E'),
('Est2', '456', 'E'),
('Est3', '456', 'E'),
('Est4', '456', 'E'),
('Est5', '456', 'E'),
('Frente9', '123456', 'F'),
('Frente8', '123456', 'F');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
