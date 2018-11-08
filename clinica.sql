-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2018 a las 07:10:34
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alergias`
--

CREATE TABLE `alergias` (
  `idAlergias` int(11) NOT NULL,
  `NombreAlergia` varchar(145) DEFAULT NULL,
  `Descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alergias`
--

INSERT INTO `alergias` (`idAlergias`, `NombreAlergia`, `Descripcion`) VALUES
(1, 'Prueba nombre', 'Descripcion de prueba'),
(2, 'Alergia #2', 'Descripcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alergias_has_paciente`
--

CREATE TABLE `alergias_has_paciente` (
  `Alergias_idAlergias` int(11) NOT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  `fecha` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alergias_has_paciente`
--

INSERT INTO `alergias_has_paciente` (`Alergias_idAlergias`, `Paciente_idPaciente`, `fecha`) VALUES
(1, 1, '24/09/2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes`
--

CREATE TABLE `antecedentes` (
  `idAntecedentes` int(11) NOT NULL,
  `Medicos` text,
  `Quirurgicos` text,
  `Traumaticos` text,
  `Familiares` text,
  `Ginecologicos` text,
  `Nacimiento` text,
  `Paciente_idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `antecedentes`
--

INSERT INTO `antecedentes` (`idAntecedentes`, `Medicos`, `Quirurgicos`, `Traumaticos`, `Familiares`, `Ginecologicos`, `Nacimiento`, `Paciente_idPaciente`) VALUES
(1, '', 'Operado por Apendisitis', 'Ninguno', 'Diabetes', 'Ninguno', 'asdfghjkl', 1),
(6, 'Saber', 'Ninguno', 'Adriana', 'Peligro de extincion (calentamiento Global)', 'Ninguno', 'Ninguno', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL,
  `FechaConsuta` varchar(10) DEFAULT NULL,
  `MotivoConsulta` text,
  `HistoriaEnfermedad` text,
  `Diagnostico` text,
  `TratamientoRecomendado` text,
  `Observaciones` text,
  `Paciente_idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`idConsulta`, `FechaConsuta`, `MotivoConsulta`, `HistoriaEnfermedad`, `Diagnostico`, `TratamientoRecomendado`, `Observaciones`, `Paciente_idPaciente`) VALUES
(1, '18/09/2018', 'Nueva Consulta, motivo', 'Nueva Historia', 'Nuevo Diagnostico', 'Tratamiento recomendado', NULL, 1),
(2, '19/09/2018', 'Consulta 2', 'Historia', 'Diagnostico', 'Tratamiento', NULL, 1),
(3, '18/09/2018', 'adsfasdf', 'adfkl', 'gdfg', 'gdfg', '', 2),
(4, '18/09/2018', 'adfad', 'fsdf', 'gdfg', 'hghfjhgjghj', NULL, 2),
(5, '18/09/2018', 'Probando el formulario largo', '', '', '', 'UhfFLO1ei7', 1),
(6, '18/09/2018', '', '', '', '', 'I5qjPPPsFH', 1),
(7, '26/09/2018', '', '', '', 'Tomer en sus tiempos, no comida con excesiva grasa o condimentos', 'jSlvxFZYgX', 1),
(8, '26/09/2018', '', '', '', 'Comer en sus tiempos, comida con poca grasa y poco condimento', 'J326vK5C5f', 1),
(9, '29/09/2018', '', '', '', 'Esomeprazol todos los dias', 'yDOD0xXHJg', 1),
(10, '', '', '', '', '1.- Cicatren  40 mgs. \r\n1 capsula en ayunas y antes d acostarse.\r\n\r\nMosaflat 5 mgs.\r\n1 tableta antes de cada comida por dos meses.', 'cYfDAzOum4', 1),
(11, '29/09/2018', '', '', '', 'dksdjskeeioaioieio\r\njkshadhajkejk\r\nklasjklaskjdkjlasdlk', 'vI58BdbUBw', 1),
(12, '', '', '', '', '', NULL, 1),
(13, '', '', '', '', '', 'OX4vKeC7NY', 1),
(14, '', '', '', '', '', NULL, 1),
(15, '05/10/2018', '', '', '', 'Probando receta normal', NULL, 1),
(16, '', '', '', '', '', NULL, 1),
(17, '', '', '', '', '', NULL, 1),
(18, '05/10/2018', '', '', '', 'esto', NULL, 1),
(19, '05/10/2018', '', '', '', 'Probando ventana emergente', NULL, 1),
(20, '05/10/2018', '', '', '', 'Ventana emergente v2', NULL, 1),
(21, '05/10/2018', '', '', '', 'Probando nuevamente, ventana emergente', NULL, 1),
(22, '05/10/2018', '', '', '', 'Probando nuevamente, ventana emergente x2', NULL, 1),
(23, '05/10/2018', '', '', '', 'Probando nuevamente, ventana emergente x2 Consulta extensa', 'Ao4CEWtAzx', 1),
(24, '05/10/2018', '', '', '', 'Probando nuevamente, ventana emergente x3 Consulta extensa', '5TCw44z8HE', 1),
(25, '07/11/2018', 'Mucho stres por entrega de proyecto', 'Se le hizo tarde hoy para arreglarse bien', 'Coordinarse mejor en sus horarios', '', NULL, 1),
(26, '', '', '', '', '', NULL, 1),
(27, '07/11/2018', '', '', '', '', NULL, 1),
(28, '07/11/2018', '', '', '', '', NULL, 1),
(29, '07/11/2018', '', '', '', '', NULL, 1),
(30, '07/11/2018', '', '', '', '', NULL, 1),
(31, '07/11/2018', '', '', 'Nueva consulta', '', NULL, 1),
(32, '07/11/2018', '', '', '', '', NULL, 1),
(33, '07/11/2018', '', '', '', '', NULL, 1),
(34, '', '', '', '', '', NULL, 1),
(35, '07/11/2018', '', '', '', '<h3><font color=\"#FF0000\">adsfasdfasfasfasdfasdfa</font></h3><h3>asdfasdfasdfasdf<br><font color=\"#FF0000\"></font><br></h3>', NULL, 1),
(36, '07/11/2018', '', '', '', '<p>asdfasdfasdf</p><p>asdfasdfasdf</p><p><font color=\"#FF0000\">asdfasdfasdfasdfsadfasf</font><br><p><br></p></p>', NULL, 1),
(37, '07/11/2018', '', '', '', '<p>123123123123123asdfasdfa<font color=\"#FF0000\">sdfasfasdfasdfasdf</font><br></p>', NULL, 1),
(38, '07/11/2018', '', '', '', '<p>123123123123123asdfasdfa<font color=\"#FF0000\">sdfasfasdfasdfasdf</font><br></p>', NULL, 1),
(39, '07/11/2018', '', '', '', 'asdasdasdsad', NULL, 1),
(40, '07/11/2018', 'asdfasdfas', 'asdfasdfasdf', 'asdfasdf', 'asdfasdfasdfasdfasdfasdfasdf24234234234234', NULL, 1),
(41, '07/11/2018', '', '', '', '1.- Cicatren 40 mgs. \r\n1 capsula en ayunas y antes de acostarse. \r\n\r\n2.-Mosaflat 5 mgs. \r\n1 tableta antes de cada comida por dos meses.', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenfisico`
--

CREATE TABLE `examenfisico` (
  `idExamenfisico` int(11) NOT NULL,
  `PresionArterial` varchar(45) DEFAULT NULL,
  `FrecuenciaCardiaca` varchar(45) DEFAULT NULL,
  `Temperatura` int(11) DEFAULT NULL,
  `SaturacionOxigeno` varchar(45) DEFAULT NULL,
  `FrecuenciaRespiratoria` int(11) DEFAULT NULL,
  `PielFameras` varchar(235) DEFAULT NULL,
  `Cabeza` varchar(235) DEFAULT NULL,
  `Cuello` varchar(235) DEFAULT NULL,
  `Torax` varchar(235) DEFAULT NULL,
  `Pulmones` varchar(235) DEFAULT NULL,
  `Corazon` varchar(235) DEFAULT NULL,
  `Abdomen` varchar(235) DEFAULT NULL,
  `Ginecologico` varchar(235) DEFAULT NULL,
  `Extremidades` varchar(235) DEFAULT NULL,
  `Neurologico` varchar(45) DEFAULT NULL,
  `Consulta_idConsulta` int(11) NOT NULL,
  `Consulta_Paciente_idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `examenfisico`
--

INSERT INTO `examenfisico` (`idExamenfisico`, `PresionArterial`, `FrecuenciaCardiaca`, `Temperatura`, `SaturacionOxigeno`, `FrecuenciaRespiratoria`, `PielFameras`, `Cabeza`, `Cuello`, `Torax`, `Pulmones`, `Corazon`, `Abdomen`, `Ginecologico`, `Extremidades`, `Neurologico`, `Consulta_idConsulta`, `Consulta_Paciente_idPaciente`) VALUES
(1, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 7, 1),
(2, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 8, 1),
(3, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 9, 1),
(4, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 10, 1),
(5, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 11, 1),
(6, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 13, 1),
(7, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 23, 1),
(8, '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 24, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `Direccion` varchar(245) DEFAULT NULL,
  `EstadoCivil` varchar(45) DEFAULT NULL,
  `Religion` varchar(45) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Originario` varchar(45) DEFAULT NULL,
  `Residente` varchar(45) DEFAULT NULL,
  `nacimiento` varchar(45) DEFAULT NULL,
  `primeraVisita` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `Nombre`, `Apellido`, `Sexo`, `Direccion`, `EstadoCivil`, `Religion`, `Telefono`, `Originario`, `Residente`, `nacimiento`, `primeraVisita`) VALUES
(1, 'Jean Oswaldo', 'Linares Guerra', 'Masculino', 'Pinares del Norte,Zona 18', 'Soltero', 'Otra', 23423233, 'Guatemala', 'Guatemala', '20/01/1997', NULL),
(2, 'Luis Guillermo', 'Ortiz Urrutia', 'Masculino', 'Zona 6', 'Soltero', 'Otra', 44448888, 'Guatemala', 'Guatemala', '19/09/1995', NULL),
(3, 'Paciente de prueba', 'Apellidos ', 'Masculino', 'Guatemala', 'Soltero', 'CatÃ³lica', 44448888, 'Guatemala', 'Guatemala', '05/10/2018', '05/10/2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `Descripcion`) VALUES
(1, 'Super Usuario'),
(2, 'Ingresar,Consultar'),
(3, 'Consultar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nombre` varchar(65) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Password` text,
  `Correo` varchar(45) DEFAULT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  `pregunta` varchar(45) DEFAULT NULL,
  `respuesta` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Nombre`, `Usuario`, `Password`, `Correo`, `TipoUsuario_idTipoUsuario`, `pregunta`, `respuesta`) VALUES
(1, 'Oswaldo Linares', 'olinares', '*18249A23AAFC007E87C3A27505EE5E93DDC0F584', 'linares.guerra@gmail.com', 1, 'mascota', 'Hachiko'),
(2, 'Oswaldo Guerra', 'Olinares', '*18249A23AAFC007E87C3A27505EE5E93DDC0F584', 'jean_linares@hotmail.es', 3, 'adfasdfa', 'afdadf'),
(4, 'Guillermo', 'guille', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'guille@gmail.com', 1, NULL, NULL),
(5, 'David', 'david', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'david@david.com', 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alergias`
--
ALTER TABLE `alergias`
  ADD PRIMARY KEY (`idAlergias`);

--
-- Indices de la tabla `alergias_has_paciente`
--
ALTER TABLE `alergias_has_paciente`
  ADD PRIMARY KEY (`Alergias_idAlergias`,`Paciente_idPaciente`),
  ADD KEY `fk_Alergias_has_Paciente_Paciente1_idx` (`Paciente_idPaciente`),
  ADD KEY `fk_Alergias_has_Paciente_Alergias1_idx` (`Alergias_idAlergias`);

--
-- Indices de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD PRIMARY KEY (`idAntecedentes`,`Paciente_idPaciente`),
  ADD KEY `fk_Antecedentes_Paciente1_idx` (`Paciente_idPaciente`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`,`Paciente_idPaciente`),
  ADD KEY `fk_Consulta_Paciente_idx` (`Paciente_idPaciente`);

--
-- Indices de la tabla `examenfisico`
--
ALTER TABLE `examenfisico`
  ADD PRIMARY KEY (`idExamenfisico`,`Consulta_idConsulta`,`Consulta_Paciente_idPaciente`),
  ADD KEY `fk_Examenfisico_Consulta1_idx` (`Consulta_idConsulta`,`Consulta_Paciente_idPaciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`,`TipoUsuario_idTipoUsuario`),
  ADD KEY `fk_Usuarios_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alergias`
--
ALTER TABLE `alergias`
  MODIFY `idAlergias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  MODIFY `idAntecedentes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `examenfisico`
--
ALTER TABLE `examenfisico`
  MODIFY `idExamenfisico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alergias_has_paciente`
--
ALTER TABLE `alergias_has_paciente`
  ADD CONSTRAINT `fk_Alergias_has_Paciente_Alergias1` FOREIGN KEY (`Alergias_idAlergias`) REFERENCES `alergias` (`idAlergias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alergias_has_Paciente_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD CONSTRAINT `fk_Antecedentes_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_Consulta_Paciente` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `examenfisico`
--
ALTER TABLE `examenfisico`
  ADD CONSTRAINT `fk_Examenfisico_Consulta1` FOREIGN KEY (`Consulta_idConsulta`,`Consulta_Paciente_idPaciente`) REFERENCES `consulta` (`idConsulta`, `Paciente_idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
