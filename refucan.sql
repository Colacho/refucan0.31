-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2022 a las 19:15:36
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `refucan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `animal_id` int(25) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `sexo` varchar(25) DEFAULT NULL,
  `raza` varchar(25) DEFAULT NULL,
  `porte` varchar(25) DEFAULT NULL,
  `manto` varchar(25) DEFAULT NULL,
  `rasgos` mediumtext DEFAULT NULL,
  `foto` varchar(200) NOT NULL,
  `protectora` varchar(200) DEFAULT NULL,
  `nombre_persona` varchar(200) NOT NULL,
  `apellido_persona` varchar(200) NOT NULL,
  `dni` varchar(200) NOT NULL,
  `domicilio_persona` varchar(200) NOT NULL,
  `telefono_persona` varchar(200) NOT NULL,
  `buscado` varchar(2) NOT NULL,
  `buscado_datos` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`animal_id`, `nombre`, `sexo`, `raza`, `porte`, `manto`, `rasgos`, `foto`, `protectora`, `nombre_persona`, `apellido_persona`, `dni`, `domicilio_persona`, `telefono_persona`, `buscado`, `buscado_datos`) VALUES
(1, 'Beleg', 'macho', 'Pastor Belga', 'grande', 'negro', 'No le gusta que lo toquen', 'Belegbelga.jpg', 'Sin protectora', 'Fernando', 'Colacilli', '29771505', 'America 271', '0336154493694', 'No', ''),
(2, 'Chizza', 'hembra', 'Callejero', 'pequeño', 'negro', 'Le falta una mano', 'Chizzaperro3.jpg', 'Sin protectora', 'Angeles', 'Genzano', '33499499', 'America 271', '0336154495678', 'No', ''),
(3, 'Jorge', 'macho', 'Pastor Aleman', 'grande', 'marron', 'Sobrepeso', 'Jorgeperro2.jpeg', 'Sin protectora', 'Bill', 'Gates', '10371337', 'Av. Savio 17', '0336154595678', 'Si', 'Ultima vez visto por la zona de la plaza Mitre\r\nLlamar 0336154698245'),
(4, 'Hilda', 'hembra', 'Callejero', 'mediano', 'negro', '', 'Hildaperro.jpeg', 'Hogar Perruno', '', '', '', '', '', 'Si', 'Ultima vez visto por la plaza Sarmiento\r\nLlamar al 0336493694'),
(5, 'Tiburcio', 'macho', 'Callejero', 'mediano', 'blanco', '', 'perroDefault.jpg', 'Perros Felices', '', '', '', '', '', 'Si', ''),
(6, 'Chicha', 'hembra', 'Callejero', 'pequeño', 'gris', 'Miedo a las tormentas', 'perroDefault.jpg', 'San Roque', '', '', '', '', '', 'No', ''),
(7, 'Uma', 'hembra', 'Chihuahua', 'pequeño', 'blanco', '', 'Umachihuahua.jpg', 'Sin protectora', 'Angeles', 'Genzano', '33499499', 'America 271', '0336154495678', 'No', ''),
(8, 'Alaraca', 'hembra', 'Callejero', 'pequeño', 'marron', '', 'perroDefault.jpg', 'Perros Felices', '', '', '', '', '', 'Si', ''),
(9, 'Borromeo', 'macho', 'Callejero', 'grande', 'dorado', '', 'perroDefault.jpg', 'Hogar Perruno', '', '', '', '', '', 'No', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `cargo_id` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`cargo_id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Protectora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_clinica`
--

CREATE TABLE `historia_clinica` (
  `clinica_id` int(25) NOT NULL,
  `parvovirus` date DEFAULT NULL,
  `antirrabica` date DEFAULT NULL,
  `hepatitis` date DEFAULT NULL,
  `moquillo` date DEFAULT NULL,
  `leptospirosis` date DEFAULT NULL,
  `castrado` date DEFAULT NULL,
  `vivo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historia_clinica`
--

INSERT INTO `historia_clinica` (`clinica_id`, `parvovirus`, `antirrabica`, `hepatitis`, `moquillo`, `leptospirosis`, `castrado`, `vivo`) VALUES
(1, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Si'),
(2, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Si'),
(3, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Si'),
(4, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Si'),
(5, '0000-00-00', '2022-10-29', '2022-10-29', '2022-10-29', '0000-00-00', '0000-00-00', 'Si'),
(6, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Si'),
(7, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Si'),
(8, '0000-00-00', '0000-00-00', '2022-10-29', '2022-10-29', '0000-00-00', '0000-00-00', 'Si'),
(9, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `noticia_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`noticia_id`, `fecha`, `texto`) VALUES
(1, '2022-10-29', 'Vacunacion en Parque Sarmiento de 14 a 18'),
(2, '2022-10-29', 'Castraciones del 18/02/23 al 18/03/23 Barrio Mitre\r\nde 11 a 17 '),
(3, '2022-10-29', 'Adiestramiento gratiuto grupal todos los sabados de \r\n8 a 12 en plaza San Martín'),
(4, '2022-10-29', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protectoras`
--

CREATE TABLE `protectoras` (
  `protectora_id` int(11) NOT NULL,
  `protectora_nombre` varchar(200) NOT NULL,
  `responsable_nombre` varchar(200) NOT NULL,
  `responsable_apellido` varchar(200) NOT NULL,
  `responsable_dni` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `activo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `protectoras`
--

INSERT INTO `protectoras` (`protectora_id`, `protectora_nombre`, `responsable_nombre`, `responsable_apellido`, `responsable_dni`, `telefono`, `activo`) VALUES
(1, 'Sin protectora', '', '', '', '', ''),
(2, 'San Roque', 'Rogelio', 'Santos', '23786945', '0341154694278', 'Si'),
(3, 'Hogar Perruno', 'Juan', 'Gomez', '55698732', '0341693495', 'Si'),
(4, 'Perros Felices', 'Tamara', 'Gimenez', '62875294', '0341693495', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `pass` text NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `usuario`, `pass`, `cargo_id`) VALUES
(1, 'Fernando', 'AdminF', 'perro', 1),
(2, 'Protectora1', 'Protectora1', 'perro', 2),
(3, 'Nicolas', '', 'perro', 1),
(4, 'Maria', 'AdminM', 'perro', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`animal_id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cargo_id`);

--
-- Indices de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD PRIMARY KEY (`clinica_id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`noticia_id`);

--
-- Indices de la tabla `protectoras`
--
ALTER TABLE `protectoras`
  ADD PRIMARY KEY (`protectora_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `cargo_id` (`cargo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `animal_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cargo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  MODIFY `clinica_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `noticia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `protectoras`
--
ALTER TABLE `protectoras`
  MODIFY `protectora_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`cargo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
