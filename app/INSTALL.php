<?php
require_once __DIR__ . "/init.php";

// Check tables exist
echo "==== BdT database installer ====\n";
echo "[i] Checking existing tables . . .\n";
$tables = DB::query('SHOW TABLES');
if (count($tables['rows']) > 0) {
	echo "[i] Database is not empty. Exiting installer...\n";
	exit;
}

// Create tables
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2017 a las 16:35:45
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco_del_tiempo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceptservice`
--

CREATE TABLE `acceptservice` (
  `acceptService_user_id` int(11) NOT NULL,
  `acceptService_service_id` int(11) NOT NULL,
  `acceptService_done` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commentary`
--

CREATE TABLE `commentary` (
  `commentary_id` int(11) NOT NULL,
  `commentary_opinion` varchar(5000) NOT NULL,
  `commentary_user_id` int(11) NOT NULL,
  `commentary_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidence`
--

CREATE TABLE `incidence` (
  `incidence_id` int(11) NOT NULL,
  `incidence_subject` char(100) NOT NULL,
  `incidence_commentary` mediumtext NOT NULL,
  `incidence_state` tinyint(11) NOT NULL,
  `incidence_resolution` char(50) NOT NULL,
  `incidence_user_id` int(11) NOT NULL,
  `incidence_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` char(50) NOT NULL,
  `service_description` varchar(5000) NOT NULL,
  `service_category` tinyint(4) NOT NULL,
  `service_number_voters` int(11) NOT NULL,
  `service_qualitymark` int(11) NOT NULL,
  `service_metadata` varchar(5000) NOT NULL,
  `service_cancel` tinyint(4) NOT NULL,
  `service_date` char(20) NOT NULL,
  `service_user_id` int(11) NOT NULL,
  `service_time` int(11) NOT NULL,
  `service_endDate` int(11) NOT NULL,
  `service_cancelationDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nick` char(50) NOT NULL,
  `user_name` char(50) NOT NULL,
  `user_lastname` char(50) NOT NULL,
  `user_dni` char(50) NOT NULL,
  `user_password` char(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_superuser` tinyint(1) NOT NULL,
  `user_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `user_expelled` tinyint(1) NOT NULL,
  `user_time` int(11) NOT NULL,
  `user_metadata` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceptservice`
--
ALTER TABLE `acceptservice`
  ADD PRIMARY KEY (`acceptService_service_id`);

--
-- Indices de la tabla `commentary`
--
ALTER TABLE `commentary`
  ADD PRIMARY KEY (`commentary_id`);

--
-- Indices de la tabla `incidence`
--
ALTER TABLE `incidence`
  ADD PRIMARY KEY (`incidence_id`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

// Exit installer
echo "[i] Finished installing database. Exiting...\n";
?>
