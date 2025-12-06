-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2025 at 08:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `campos`
--

CREATE TABLE `campos` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cumplio` enum('SI','NO') DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_cumplimiento` date DEFAULT NULL,
  `evidencia_nombre` varchar(255) DEFAULT NULL,
  `evidencia_ruta` varchar(255) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campos`
--

INSERT INTO `campos` (`id`, `item_id`, `cumplio`, `descripcion`, `fecha_cumplimiento`, `evidencia_nombre`, `evidencia_ruta`, `observaciones`, `fecha_registro`) VALUES
(1, 1, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(2, 2, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(3, 3, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(4, 4, '', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(5, 5, '', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(6, 6, '', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(7, 7, '', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(8, 8, '', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(9, 9, '', '', '0000-00-00', NULL, NULL, '', '2025-12-05 06:25:40'),
(10, 10, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(11, 14, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(12, 15, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(13, 16, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(14, 11, 'SI', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(15, 17, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(16, 18, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(17, 19, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(18, 20, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(19, 12, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(20, 13, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(21, 21, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(22, 22, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(23, 23, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(24, 24, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(25, 25, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(26, 26, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(27, 27, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(28, 28, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(29, 29, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(30, 30, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(31, 31, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(32, 32, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(33, 33, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(34, 34, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(35, 35, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(36, 36, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(37, 37, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58'),
(38, 38, '', '', '0000-00-00', NULL, NULL, '', '2025-12-06 05:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `modulo_id`, `codigo`, `nombre`) VALUES
(1, 1, '7.1.1', 'Entradas'),
(2, 1, '7.1.2', 'Herramientas'),
(3, 1, '7.1.3', 'Salidas'),
(4, 2, '7.2.1', 'Entradas'),
(5, 2, '7.2.2', 'Herramientas'),
(6, 2, '7.2.3', 'Salidas'),
(7, 3, '7.3.1', 'Entradas'),
(8, 3, '7.3.2', 'Herramientas'),
(9, 3, '7.3.3', 'Salidas'),
(10, 4, '7.4.1', 'Entradas'),
(11, 4, '7.4.2', 'Herramientas'),
(12, 4, '7.4.3', 'Salidas');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `categoria_id`, `codigo`, `nombre`) VALUES
(1, 1, '7.1.1.1', 'Acta de constitución del \r\nproyecto'),
(2, 1, '7.1.1.2.1', 'Plan de gestión del \r\ncronograma'),
(3, 1, '7.1.1.2.2', 'Plan de gestión de los riesgos'),
(4, 1, '7.1.1.3', 'Factores ambientales de \r\nla empresa'),
(5, 1, '7.1.1.4', 'Activos de los procesos de \r\nla organización'),
(6, 2, '7.1.2.1', 'Juicio de expertos'),
(7, 2, '7.1.2.2', 'Análisis de datos'),
(8, 2, '7.1.2.3', 'Reuniones'),
(9, 3, '7.1.3.1', 'Plan de gestión de los costos'),
(10, 4, '7.2.1.1', 'Plan para la dirección del proyecto'),
(11, 4, '7.2.1.2', 'Documentos del proyecto'),
(12, 4, '7.2.1.3', 'Factores ambientales de la empresa'),
(13, 4, '7.2.1.4', 'Activos de los procesos de la organización'),
(14, 4, '7.2.1.1.1', 'Plan de gestión de los costos'),
(15, 4, '7.2.1.1.2', 'Plan de gestión de la calidad'),
(16, 4, '7.2.1.1.3', 'Línea base del alcance'),
(17, 4, '7.2.1.2.1', 'Registro de lecciones aprendidas'),
(18, 4, '7.2.1.2.2', 'Cronograma del proyecto'),
(19, 4, '7.2.1.2.3', 'Requisitos de recursos'),
(20, 4, '7.2.1.2.4', 'Registro de riesgos'),
(21, 5, '7.2.2.1', 'Juicio de expertos'),
(22, 5, '7.2.2.2', 'Estimación análoga'),
(23, 5, '7.2.2.3', 'Estimación paramétrica'),
(24, 5, '7.2.2.4', 'Estimaciones ascendentes'),
(25, 5, '7.2.2.5', 'Estimaciones basadas en tres valores'),
(26, 5, '7.2.2.6', 'Análisis de datos'),
(27, 5, '7.2.2.6.1', 'Análisis de alternativas'),
(28, 5, '7.2.2.6.2', 'Análisis de reserva'),
(29, 5, '7.2.2.6.3', 'Costo de la calidad'),
(30, 5, '7.2.2.7', 'Sistema de información para la dirección de proyectos'),
(31, 5, '7.2.2.8', 'Toma de decisiones'),
(32, 5, '7.2.2.8.1', 'Votación'),
(33, 6, '7.2.3.1', 'Estimaciones de costos'),
(34, 6, '7.2.3.2', 'Base de las estimaciones'),
(35, 6, '7.2.3.3', 'Actualizaciones a los documentos del proyecto'),
(36, 6, '7.2.3.3.1', 'Registro de supuestos'),
(37, 6, '7.2.3.3.2', 'Registro de lecciones aprendidas'),
(38, 6, '7.2.3.3.3', 'Registro de riesgos'),
(39, 7, '7.3.1.1', 'Plan para la dirección del proyecto'),
(40, 7, '7.3.1.1.1', 'Plan de gestión de los costos'),
(41, 7, '7.3.1.1.2', 'Plan de gestión de los recursos'),
(42, 7, '7.3.1.1.3', 'Línea base del alcance'),
(43, 7, '7.3.1.2', 'Documentos del proyecto'),
(44, 7, '7.3.1.2.1', 'Base de las estimaciones'),
(45, 7, '7.3.1.2.2', 'Estimaciones de costos'),
(46, 7, '7.3.1.2.3', 'Cronograma del proyecto'),
(47, 7, '7.3.1.2.4', 'Registro de riesgos'),
(48, 7, '7.3.1.3', 'Documentos de negocio'),
(49, 7, '7.3.1.3.1', 'Caso de negocio'),
(50, 7, '7.3.1.3.2', 'Plan de gestión de beneficios'),
(51, 7, '7.3.1.4', 'Acuerdos'),
(52, 7, '7.3.1.5', 'Factores ambientales de la empresa'),
(53, 7, '7.3.1.6', 'Activos de los procesos de la organización'),
(54, 8, '7.3.2.1', 'Juicio de expertos'),
(55, 8, '7.3.2.2', 'Costos agregados'),
(56, 8, '7.3.2.3', 'Análisis de datos'),
(57, 8, '7.3.2.3.1', 'Análisis de reserva'),
(58, 8, '7.3.2.4', 'Revisar la información histórica'),
(59, 8, '7.3.2.5', 'Conciliación del límite de financiamiento'),
(60, 8, '7.3.2.6', 'Financiamiento'),
(61, 9, '7.3.3.1', 'Línea base de costos'),
(62, 9, '7.3.3.2', 'Requisitos de financiamiento del proyecto'),
(63, 9, '7.3.3.3', 'Actualizaciones a los documentos del proyecto'),
(64, 9, '7.3.3.3.1', 'Estimaciones de costos'),
(65, 9, '7.3.3.3.2', 'Cronograma del proyecto'),
(66, 9, '7.3.3.3.3', 'Registro de riesgos'),
(67, 10, '7.4.1.1', 'Plan para la dirección del proyecto'),
(68, 10, '7.4.1.1.1', 'Plan de gestión de los costos'),
(69, 10, '7.4.1.1.2', 'Línea base de costos'),
(70, 10, '7.4.1.1.3', 'Línea base para la medición del desempeño'),
(71, 10, '7.4.1.2', 'Documentos del proyecto'),
(72, 10, '7.4.1.2.1', 'Registro de lecciones aprendidas'),
(73, 10, '7.4.1.3', 'Requisitos de financiamiento del proyecto'),
(74, 10, '7.4.1.4', 'Datos de desempeño del trabajo'),
(75, 10, '7.4.1.5', 'Activos de los procesos de la organización'),
(76, 11, '7.4.2.1', 'Juicio de expertos'),
(77, 11, '7.4.2.2', 'Análisis de datos'),
(78, 11, '7.4.2.2.1', 'Análisis del valor ganado'),
(79, 11, '7.4.2.2.2', 'Análisis de variación'),
(80, 11, '7.4.2.2.3', 'Análisis de tendencias'),
(81, 11, '7.4.2.2.4', 'Análisis de reserva'),
(82, 11, '7.4.2.3', 'Para completar el índice de desempeño del trabajo por completar'),
(83, 11, '7.4.2.4', 'Sistema de información para la dirección de proyectos'),
(84, 12, '7.4.3.1', 'Información de desempeño del trabajo'),
(85, 12, '7.4.3.2', 'Pronósticos de costos'),
(86, 12, '7.4.3.3', 'Solicitudes de cambio'),
(87, 12, '7.4.3.4', 'Actualizaciones al plan para la dirección del proyecto'),
(88, 12, '7.4.3.4.1', 'Plan de gestión de los costos'),
(89, 12, '7.4.3.4.2', 'Línea base de costos'),
(90, 12, '7.4.3.4.3', 'Línea base para la medición del desempeño'),
(91, 12, '7.4.3.5', 'Actualizaciones a los documentos del proyecto'),
(92, 12, '7.4.3.5.1', 'Registro de supuestos'),
(93, 12, '7.4.3.5.2', 'Base de las estimaciones'),
(94, 12, '7.4.3.5.3', 'Estimaciones de costos'),
(95, 12, '7.4.3.5.4', 'Registro de lecciones aprendidas'),
(96, 12, '7.4.3.5.5', 'Registro de riesgos');

-- --------------------------------------------------------

--
-- Table structure for table `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modulos`
--

INSERT INTO `modulos` (`id`, `codigo`, `nombre`, `descripcion`) VALUES
(1, '7.1', 'Planificar la Gestión de los Costos', NULL),
(2, '7.2', 'Estimar los Costos', NULL),
(3, '7.3', 'Determinar el Presupuesto', NULL),
(4, '7.4', 'Controlar los Costos', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`, `rol_id`, `creado_en`) VALUES
(1, 'Carlos Peña', 'chamitoLoko', '123', 1, '2025-10-17 23:59:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campos`
--
ALTER TABLE `campos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_campos_items` (`item_id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulo_id` (`modulo_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campos`
--
ALTER TABLE `campos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campos`
--
ALTER TABLE `campos`
  ADD CONSTRAINT `fk_campos_items` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
