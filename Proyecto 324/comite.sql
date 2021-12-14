-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2021 a las 20:04:24
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
-- Base de datos: `comite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `cn` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ci` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `matricula` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `record` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `certfin` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `noproceso` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rejap` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `antecedentes` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `usuario` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `verificacion` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`cn`, `ci`, `matricula`, `record`, `certfin`, `noproceso`, `rejap`, `antecedentes`, `usuario`, `verificacion`) VALUES
('', '', '', '', 'images1.jpg', '', '', '', 'Frente3', 'SI'),
('', '', '', 'iconos_ti_13.png', '', 'images1.jpg', '', '', 'Frente4', 'NO'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('', '', '', '', '', '', '', '', 'Frente3', 'NN'),
('images1.jpg', '', 'CHAT.jfif', '', '', 'DIAGNOSTICO.jfif', '', '', 'Frente1', 'SI'),
('', '', '', '', '', '', '', '', 'Frente1', 'NN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frente`
--

CREATE TABLE `frente` (
  `usuario` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `frente` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sigla` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `colores` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `candidato` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frente`
--

INSERT INTO `frente` (`usuario`, `frente`, `sigla`, `colores`, `candidato`) VALUES
('Frente1', 'Adelante Informatica', 'AI', 'Rojo y Verde', 'Pepito Perez'),
('Frente2', 'Todos por Informatica', 'TPI', 'Amarillo y Azul', 'Juan Saravia'),
('Frente3', 'Siempre Informatica', 'SI', 'Amarillo y Rojo', 'Teresa Ruiz'),
('Frente4', 'Venceremos Por Informatica', 'VPI', 'Guindo', 'Carlos Villar'),
('Frente1', 'INFORMATICA ADELANTE', 'IA', 'AZUL Y NEGRO', 'MATIAS FERNANDEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padron`
--

CREATE TABLE `padron` (
  `usuario` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ci` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(1) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `padron`
--

INSERT INTO `padron` (`usuario`, `ci`, `nombre`, `estado`) VALUES
('Est1', '11111', 'Juan Carlos Mendoza', '1'),
('Est2', '22222', 'Juan Mendoza Doria', '0'),
('Est1', '11111', 'Juan Carlos Mendoza', '1'),
('Est2', '22222', 'Juan Mendoza Doria', '0'),
('Est3', '33333', 'Ana Funes Urtado', '1'),
('Est4', '44444', 'Loida Perez Soliz', '1'),
('Est3', '33333', 'Ana Funes Urtado', '1'),
('Est4', '44444', 'Loida Perez Soliz', '1'),
('Est5', '55555', 'Lucas Villa Gomez', '0'),
('Est5', '55555', 'Lucas Villa Gomez', '0'),
('Est5', '55555', 'Marcelo Sanchez Lopez', '1'),
('Est6', '66666', 'Andres Lima Paco', '1'),
('Est7', '77777', 'Lucia Ramos Maquera', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `sigla` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`sigla`, `total`) VALUES
('TPI', 3),
('SI', 1),
('AI', 3),
('TPI', 3),
('SI', 1),
('AI', 3),
('TPI', 3),
('SI', 1),
('AI', 3),
('TPI', 3),
('SI', 1),
('AI', 3),
('TPI', 3),
('SI', 1),
('AI', 3),
('TPI', 3),
('SI', 1),
('AI', 3),
('TPI', 3),
('SI', 1),
('AI', 4),
('TPI', 3),
('SI', 1),
('AI', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `usuario` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sigla` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nvotos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`usuario`, `sigla`, `nvotos`) VALUES
('Est1', 'TPI', 1),
('Est1', 'SI', 1),
('Est1', 'AI', 1),
('Est1', 'AI', 1),
('Est1', 'TPI', 1),
('Est1', 'TPI', 1),
('Est3', 'AI', 1),
('Frente1', 'AI', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
