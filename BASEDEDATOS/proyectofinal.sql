-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2019 a las 12:55:36
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `Comentario_ID` int(11) NOT NULL,
  `Fecha_Hora_C` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Descripcion` varchar(500) COLLATE ucs2_spanish_ci NOT NULL,
  `Usuario_Cliente_ID` int(11) NOT NULL,
  `Producto_Producto_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`Comentario_ID`, `Fecha_Hora_C`, `Descripcion`, `Usuario_Cliente_ID`, `Producto_Producto_ID`) VALUES
(1, '2019-11-27 10:52:22', 'Buena calidad', 9, 1),
(2, '2019-11-28 09:33:44', 'buena calidad y buen precio', 9, 1),
(3, '2019-11-28 09:34:24', '.....', 10, 1),
(15, '2019-12-03 12:32:16', 'Hola Hola Hola', 9, 2),
(16, '2019-12-03 12:34:11', 'Buen producto', 9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Pedido_ID` int(11) NOT NULL,
  `Fecha_Hora_P` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usuario_Cliente_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_has_producto`
--

CREATE TABLE `pedido_has_producto` (
  `Pedido_Pedido_ID` int(11) NOT NULL,
  `Pedido_Usuario_Cliente_ID` int(11) NOT NULL,
  `Producto_Producto_ID` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `enlace` varchar(120) NOT NULL DEFAULT '',
  `tiempo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `titulo`, `descripcion`, `enlace`, `tiempo`) VALUES
(5, 'Plugin jQuery Fortaleza de una clave', 'Cómo crear un plugin con JQuery para mostrar la fortaleza de una clave.', 'http://www.desarrolloweb.com/articulos/fortaleza-clave-jquery.html', '1271683937'),
(6, 'Introducción al taller de jQuery', 'Introducción al nuevo taller de JQuery que publicamos en Desarrolloweb.com', 'http://www.desarrolloweb.com/articulos/introduccion-taller-jquery.html', '1271748424'),
(7, 'Taller de JQuery', 'Nuevo taller para aprender jQuery practicando con los diversos plugins que realicemos.', 'http://www.desarrolloweb.com/manuales/taller-jquery.html', '1271748482'),
(8, 'Plugins en el Taller de JQuery', 'Cómo crear un plugin JQuery para añadir campos en un formulario HTML.', 'http://www.desarrolloweb.com/articulos/jquery-anadir-campo-formulario.html', '1271855592'),
(9, 'Vídeo: Práctica de Maquetación CSS', 'Vídeo que nos muestra un ejemplo práctico sobre la maquetación CSS.', 'http://www.desarrolloweb.com/articulos/video-practica-maquetacion-css.html', '1272007101'),
(10, 'Insertar archivos de texto con FPDF', 'Cómo añadir un archivo de texto a nuestro PDF con FPDF.', 'http://www.desarrolloweb.com/articulos/insertar-archivo-txt-fpdf.html', '1272291946'),
(11, 'Helpers en CodeIgniter', 'Qué son y como se utilizan los helpers en CodeIgniter.', 'http://www.desarrolloweb.com/articulos/helpers-codeigniter.html', '1272353021'),
(12, 'Ejemplo de Helper en CodeIgniter', 'Un ejemplo de usu de helper en el framework PHP CodeIgniter.', 'http://www.desarrolloweb.com/articulos/ejemplo-helper-codeigniter.html', '1272433566'),
(13, 'Herramienta cuentagotas de Photoshop', 'Qué es y cómo utilizar la herramienta cuentagotas de Photoshop.', 'http://www.desarrolloweb.com/articulos/herramienta-cuentagotas-photoshop.html', '1272524338'),
(14, 'Diseño web con Photoshop usando texturas', 'Cuarto vídeo sobre el diseño web con uso de texturas en Photoshop.', 'http://www.desarrolloweb.com/articulos/video-photoshop-texturas.html', '1272613076'),
(15, 'Botón de compartir en Facebook', 'Cómo crear un botón para compartir contenido en Facebook.', 'http://www.desarrolloweb.com/articulos/boton-compartir-facebook.html', '1272957998'),
(16, 'Botón de compartir en Twitter', 'Cómo hacer un botón para compartir el contenido en Twitter.', 'http://www.desarrolloweb.com/articulos/boton-compartir-twitter.html', '1272960719');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Producto_ID` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `Precio` decimal(11,2) NOT NULL,
  `Unidades` int(11) NOT NULL,
  `Descripcion` varchar(200) COLLATE ucs2_spanish_ci NOT NULL,
  `Imagen` varchar(200) COLLATE ucs2_spanish_ci NOT NULL,
  `Categoria` varchar(100) COLLATE ucs2_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Producto_ID`, `Nombre`, `Precio`, `Unidades`, `Descripcion`, `Imagen`, `Categoria`) VALUES
(1, 'Ragbaia', '99.99', 10, 'Colores Rojo y negro!', 'imagen_hombre_1.jpg', 'Cubus'),
(2, 'Candora', '17.99', 50, 'Colores blanco y crema', 'imagen_hombre_2.jpg', 'HombreHombreHombreHombreHombreHombreHombreHombreHombreHombreHombreHombre'),
(3, 'Gorritos', '9.99', 25, 'De todos los colores', 'Imagen6.jpg', 'Gorros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Cliente_ID` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `Apellido` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `DNI` varchar(9) COLLATE ucs2_spanish_ci NOT NULL,
  `Direccion` varchar(100) COLLATE ucs2_spanish_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Contras` varchar(200) COLLATE ucs2_spanish_ci NOT NULL,
  `Correo_Electronico` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  `Usuario_Nick` varchar(45) COLLATE ucs2_spanish_ci NOT NULL,
  `Roll` varchar(50) COLLATE ucs2_spanish_ci NOT NULL DEFAULT 'Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Cliente_ID`, `Nombre`, `Apellido`, `DNI`, `Direccion`, `Telefono`, `Contras`, `Correo_Electronico`, `Usuario_Nick`, `Roll`) VALUES
(9, 'Mohamed', 'Razzouki Hossain', '45300402q', 'Alonso de ercilla Nº11', 672695432, 'ae30f7376492cbef054681c91e019ccc', 'rzluck@gmail.com', 'rzluck', 'Admin'),
(10, 'YusefYusef', 'El basri belghazi', '45322413q', 'Albaro de bazan', 672695432, 'c6865cf98b133f1f3de596a4a2894630', 'yusef@gmail.com', 'Yusef', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`Comentario_ID`,`Usuario_Cliente_ID`,`Producto_Producto_ID`),
  ADD UNIQUE KEY `Comentario_ID_UNIQUE` (`Comentario_ID`),
  ADD KEY `fk_Comentario_Usuario1_idx` (`Usuario_Cliente_ID`),
  ADD KEY `fk_Comentario_Producto1_idx` (`Producto_Producto_ID`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Pedido_ID`,`Usuario_Cliente_ID`),
  ADD UNIQUE KEY `Pedido_ID_UNIQUE` (`Pedido_ID`),
  ADD KEY `fk_Pedido_Usuario_idx` (`Usuario_Cliente_ID`);

--
-- Indices de la tabla `pedido_has_producto`
--
ALTER TABLE `pedido_has_producto`
  ADD PRIMARY KEY (`Pedido_Pedido_ID`,`Pedido_Usuario_Cliente_ID`,`Producto_Producto_ID`),
  ADD KEY `fk_Pedido_has_Producto_Producto1_idx` (`Producto_Producto_ID`),
  ADD KEY `fk_Pedido_has_Producto_Pedido1_idx` (`Pedido_Pedido_ID`,`Pedido_Usuario_Cliente_ID`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Producto_ID`),
  ADD UNIQUE KEY `Producto_ID_UNIQUE` (`Producto_ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Cliente_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `Comentario_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Pedido_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Producto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Cliente_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_Comentario_Producto1` FOREIGN KEY (`Producto_Producto_ID`) REFERENCES `producto` (`Producto_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comentario_Usuario1` FOREIGN KEY (`Usuario_Cliente_ID`) REFERENCES `usuario` (`Cliente_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Usuario` FOREIGN KEY (`Usuario_Cliente_ID`) REFERENCES `usuario` (`Cliente_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido_has_producto`
--
ALTER TABLE `pedido_has_producto`
  ADD CONSTRAINT `fk_Pedido_has_Producto_Pedido1` FOREIGN KEY (`Pedido_Pedido_ID`,`Pedido_Usuario_Cliente_ID`) REFERENCES `pedido` (`Pedido_ID`, `Usuario_Cliente_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pedido_has_Producto_Producto1` FOREIGN KEY (`Producto_Producto_ID`) REFERENCES `producto` (`Producto_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
