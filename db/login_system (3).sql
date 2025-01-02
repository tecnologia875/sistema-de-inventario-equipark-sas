-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-01-2025 a las 23:33:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_general_equipark`
--

CREATE TABLE `inventario_general_equipark` (
  `id` int(11) NOT NULL,
  `codigo_centro_costos` varchar(20) NOT NULL,
  `centro_costos` varchar(11) NOT NULL,
  `regional_a_cargo` varchar(100) DEFAULT NULL,
  `responsable_operativo` varchar(100) DEFAULT NULL,
  `responsable_tecnico` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `imei` varchar(50) DEFAULT NULL,
  `serial_equipo` varchar(50) DEFAULT NULL,
  `linea_celular` varchar(20) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `perfil_equipo` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `equipamiento` text DEFAULT NULL,
  `licencia_carmob` tinyint(1) DEFAULT NULL,
  `acceso_remoto` tinyint(1) DEFAULT NULL,
  `bloqueo_applock` tinyint(1) DEFAULT NULL,
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario_general_equipark`
--

INSERT INTO `inventario_general_equipark` (`id`, `codigo_centro_costos`, `centro_costos`, `regional_a_cargo`, `responsable_operativo`, `responsable_tecnico`, `ciudad`, `direccion`, `imei`, `serial_equipo`, `linea_celular`, `marca`, `fecha_entrega`, `perfil_equipo`, `estado`, `equipamiento`, `licencia_carmob`, `acceso_remoto`, `bloqueo_applock`, `observaciones`) VALUES
(1, '0', 'Bancolombia', 'Leidy Escobar', 'Eduardo Gomez', 'Jhon Jairo Eraso ', 'Medellín', 'Carrera 48 # 26 -85', '350290615361360', 'R7AX6005XFT', '3245536892', 'Samsung Galaxy A05', '0000-00-00', 'Funcionario administrativo', 'Operativo', '', 0, 0, 0, 'Sin funda protectora - Asignado a Leidy Johana Escobar - Directora cuenta Bancolombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `role`) VALUES
(3, 'soportecali@equipark.com.co', 'ee0e1b9824cc0b1da4e8701e88f805bc6b4d1dac7f3293f4c8033e5399a63f1a', 'Administrador'),
(4, 'jeraso@equipark.com.co', '29a63ae53eecb765fb177f7c016773b8a554edd6d5f0f8e7eae4b2661f0df280', 'Superadministrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario_general_equipark`
--
ALTER TABLE `inventario_general_equipark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario_general_equipark`
--
ALTER TABLE `inventario_general_equipark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
