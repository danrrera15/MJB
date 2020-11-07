-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2020 a las 01:14:13
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mjb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blg_id` int(11) NOT NULL,
  `blg_nombre` varchar(300) NOT NULL,
  `blg_url` varchar(300) NOT NULL,
  `blg_contenido` text NOT NULL,
  `blg_img1` text NOT NULL,
  `blg_img2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_blog`
--

INSERT INTO `tbl_blog` (`blg_id`, `blg_nombre`, `blg_url`, `blg_contenido`, `blg_img1`, `blg_img2`) VALUES
(6, 'DIY de muebles', 'diy-de-muebles', '<h1 style=\"text-align:justify\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>&iquest;Qu&eacute; es Lorem Ipsum?</strong></span></h1>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><strong>Lorem Ipsum</strong>&nbsp;es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas &quot;Letraset&quot;, las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente con software de autoedici&oacute;n, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span></p>\r\n\r\n<hr />\r\n<h2 style=\"font-style:italic\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\">Lorem Ipsum.</span></h2>\r\n', 'mjb_blog_portada_diy-de-muebles.jpg', 'mjb_blog_diy-de-mueblesBlogContent_.jpg'),
(7, 'Â¿Como se obtiene la madera?', 'como-se-obtiene-la-madera', '<h1 style=\"text-align:justify\"><br />\r\nLorem ipsum dolor sit amet</h1>\r\n\r\n<p style=\"text-align:justify\">consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'mjb_blog_portada_como-se-obtiene-la-madera.jpg', 'mjb_blog_como-se-obtiene-la-maderaBlogContent_.jpg'),
(8, 'RenovaciÃ³n de casas, 10 tips.', 'renovacion-de-casas-10-tips', '<p style=\"text-align:justify\"><strong>Recomendaciones a tener en cuenta a la hora de remodelar tu hogar&hellip;</strong></p>\r\n\r\n<ol style=\"margin-left:40px\">\r\n	<li style=\"text-align: justify;\"><strong>T&oacute;mate el tiempo suficiente para pensar en lo que debes tener en cuenta para ejecutar el proyecto de remodelaci&oacute;n.&nbsp;</strong>Busca muchas ideas y ejemplos de lo que quieres hacer, internet es una buena herramienta para buscar im&aacute;genes con nuevas tendencias en remodelaci&oacute;n del hogar.</li>\r\n	<li style=\"text-align: justify;\">&nbsp;<strong>S&eacute; consciente de la importancia de contar con personal y profesionales capacitados para elaborar las reformas&nbsp;</strong>en tu hogar, no te tomes las cosas por tu cuenta creyendo que lo puedes hacer s&oacute;lo. Este trabajo es importante y no querr&aacute;s que las cosas se salgan de su cauce, te traiga m&aacute;s gastos y se demore m&aacute;s tiempo del que ten&iacute;as planeado.</li>\r\n	<li style=\"text-align: justify;\">&nbsp;<strong>Investiga, indaga y pide cotizaciones en varias partes, a distintos constructores o ingenieros, y almacenes.</strong>&nbsp;As&iacute; podr&aacute;s comparar cu&aacute;l es mejor, pero recuerda que no siempre lo m&aacute;s econ&oacute;mico es lo mejor. A veces por querer disminuir el costo de algo se adquieren materiales que no son los mejores.</li>\r\n	<li style=\"text-align: justify;\">&nbsp;Si est&aacute;s pensando en&nbsp;<strong>remodelar tu cocina, puedes hacerlo cambiando el&nbsp;mes&oacute;n, la cubierta, la nevera, o simplemente los electrodom&eacute;sticos menores</strong>, a veces con hacer peque&ntilde;os cambios, podr&aacute;s sentir un gran cambio<strong>.<a href=\"http://www.haceb.com/\" target=\"_blank\">&nbsp;Conoce las propuestas que Haceb tiene para tu cocina.</a></strong></li>\r\n	<li style=\"text-align: justify;\">&nbsp;<strong>Incluye dentro de tu presupuesto un valor para imprevistos</strong>, siempre o casi siempre salen cosas que no se ten&iacute;an pensadas generando m&aacute;s costos. As&iacute; que es mejor si dejas un parte de tu dinero para esto.</li>\r\n	<li style=\"text-align: justify;\">&nbsp;<strong>Aseg&uacute;rate que la empresa o persona que contrataste tenga los permisos y mecanismos adecuados para trabajar con cierto tipo de riesgos</strong>&nbsp;tales como: alturas, con manipulaci&oacute;n de energ&iacute;a, entre otras.</li>\r\n	<li style=\"text-align: justify;\">&nbsp;Por &uacute;ltimo, recuerda que&nbsp;<strong>la iluminaci&oacute;n natural, la distribuci&oacute;n de los objetos, una circulaci&oacute;n inteligente por las &aacute;reas de tu casa y el almacenamiento, son algunos criterios que debes tener en cuenta</strong>&nbsp;a la hora de tomar las decisiones para ese cambio que est&aacute;s buscando darle a tu hogar.&nbsp;&nbsp;</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/heeding/ckfinder/userfiles/images/post-single-1.jpg\" style=\"float:left; height:175px; width:350px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp; &nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<hr />\r\n<h2 style=\"font-style:italic\"><em>Maderas MJB</em></h2>\r\n', 'mjb_blog_portada_renovacion-de-casas-10-tips.jpg', 'mjb_blog_renovacion-de-casas-10-tipsBlogContent_.jpg'),
(9, 'DIY Segunda parte', 'diy-segunda-parte', '<p style=\"text-align:justify\">El contrachapado, tambi&eacute;n conocido como multilaminado, plywood, triplay o madera terciada, es un tablero elaborado con finas chapas de madera pegadas con las fibras transversalmente una sobre la otra con resinas sint&eacute;ticas mediante fuerte presi&oacute;n y calor.El contrachapado, tambi&eacute;n conocido como multilaminado, plywood, triplay o madera terciada, es un tablero elaborado con finas chapas de madera pegadas con las fibras transversalmente una sobre la otra con resinas sint&eacute;ticas mediante fuerte presi&oacute;n y calor.</p>\r\n\r\n<p style=\"text-align:justify\">El contrachapado, tambi&eacute;n conocido como multilaminado, plywood, triplay o madera terciada, es un tablero elaborado con finas chapas de madera pegadas con las fibras transversalmente una sobre la otra con resinas sint&eacute;ticas mediante fuerte presi&oacute;n y calor.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'mjb_blog_portada_diy-segunda-parte.jpg', 'mjb_blog_diy-segunda-parteBlogContent_.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_diapositivas`
--

CREATE TABLE `tbl_diapositivas` (
  `diap_id` int(11) NOT NULL,
  `diap_imagen` varchar(650) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_diapositivas`
--

INSERT INTO `tbl_diapositivas` (`diap_id`, `diap_imagen`) VALUES
(1, 'mjb_diapositivas_1_diap.jpg'),
(2, 'mjb_diapositivas_2_diap.jpg'),
(3, 'mjb_diapositivas_3_diap.jpg'),
(4, 'mjb_diapositivas_4_diap.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_maquinaria`
--

CREATE TABLE `tbl_maquinaria` (
  `maq_id` int(11) NOT NULL,
  `maq_nombre` varchar(250) NOT NULL,
  `maq_modelo` varchar(250) NOT NULL,
  `maq_descripcion` text NOT NULL,
  `maq_imagen` text NOT NULL,
  `maq_video` text NOT NULL,
  `maq_img1` text NOT NULL,
  `maq_img2` text NOT NULL,
  `maq_img3` text NOT NULL,
  `maq_img4` text NOT NULL,
  `maq_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_maquinaria`
--

INSERT INTO `tbl_maquinaria` (`maq_id`, `maq_nombre`, `maq_modelo`, `maq_descripcion`, `maq_imagen`, `maq_video`, `maq_img1`, `maq_img2`, `maq_img3`, `maq_img4`, `maq_url`) VALUES
(4, 'CNC Router ', '1325', '<p style=\"text-align:justify\">Contar con un equipo Router CNC en tu negocio ser&aacute; un parte aguas y nuestro modelo&nbsp;<em><strong>SR1325</strong></em>&nbsp;es la inversi&oacute;n precisa para tu empresa, este modelo se presenta con un precio muy bajo y prestaciones industriales, para que tu emprendimiento pueda crecer y llegar al siguiente nivel que sabemos est&aacute;s buscando.</p>\r\n\r\n<h4 style=\"text-align:justify\">Caracter&iacute;sticas</h4>\r\n\r\n<ol>\r\n	<li style=\"text-align: justify;\"><strong>Info:&nbsp;</strong>Loremp ipsum color</li>\r\n	<li style=\"text-align: justify;\"><strong>Info:&nbsp;</strong>Loremp ipsum color</li>\r\n	<li style=\"text-align: justify;\"><strong>Info:&nbsp;</strong>Loremp ipsum color</li>\r\n	<li style=\"text-align: justify;\"><strong>Info:&nbsp;</strong>Loremp ipsum color</li>\r\n	<li style=\"text-align: justify;\"><strong>Info:&nbsp;</strong>Lorem ipsum color</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'maderas_mjb_cnc-router.jpg', '<iframe width=\"345\" height=\"315\" src=\"https://www.youtube.com/embed/HjGnXDbdtio\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen>\r\n              </iframe>', 'maderas_mjb_cnc-router_slider1.png', 'maderas_mjb_cnc-router_slider2.png', 'maderas_mjb_cnc-router_slider3.png', 'maderas_mjb_cnc-router_slider4.png', 'cnc-router'),
(5, 'CNC Router R1325', 'STM-R1325-SE', '<h1 style=\"text-align:justify\"><strong><span style=\"font-size:16px\">CNC Router</span></strong></h1>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">STM-R1325-SE</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\">&Aacute;rea de trabajo</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\">1300 x 2500 mm</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\">Potencia de motor de corte (Spindle)</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\">4.3HP a 24,000 RPM</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\">Sujecion de material</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-size:16px\">Sistema de rodillos</span></li>\r\n</ul>\r\n', 'maderas_mjb_prueba.png', '<iframe width=\"345\" height=\"315\" src=\"https://www.youtube.com/embed/9-sSEhyTo8g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'maderas_mjb_prueba_slider1.png', 'maderas_mjb_prueba_slider2.png', 'maderas_mjb_prueba_slider3.png', 'maderas_mjb_prueba_slider4.png', 'cnc-router-r1325');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `prod_id` int(11) NOT NULL,
  `prod_nombre` varchar(300) NOT NULL,
  `prod_url` varchar(300) NOT NULL,
  `prod_descripcion` text NOT NULL,
  `prod_lista` text NOT NULL,
  `prod_imgmain` varchar(300) NOT NULL,
  `prod_imghome` varchar(300) NOT NULL,
  `prod_imgslider` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`prod_id`, `prod_nombre`, `prod_url`, `prod_descripcion`, `prod_lista`, `prod_imgmain`, `prod_imghome`, `prod_imgslider`) VALUES
(1, 'Construccion', 'construccion', '<p>El contrachapado, tambi&eacute;n conocido como multilaminado, plywood, triplay o madera terciada, es un tablero elaborado con finas chapas de madera pegadas con las fibras transversalmente una sobre la otra con resinas sint&eacute;ticas mediante fuerte presi&oacute;n y calor.</p>\r\n\r\n<p>Espesores</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>- 3.0 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 4.5 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 5.5 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 9.0 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 12.0 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 15.0 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 18.0 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 25.0 mm</p>\r\n	</li>\r\n	<li>\r\n	<p>- 30.0 mm</p>\r\n	</li>\r\n</ul>\r\n', 'Triplay Arauco,Triplay blanco,Triplay de ebano', 'maderas_mjb_construccion.jpg', 'maderas_mjb_construccion_home.jpg', 'maderas_mjb_construccion_slider.jpg'),
(2, 'Aglomerados', 'aglomerados', '<h3>&iquest;QU&Eacute; ES AGLOMERADO?</h3>\r\n\r\n<p>Est&aacute; compuesto por part&iacute;culas de madera de diferentes tama&ntilde;os, unidas entre s&iacute; por alg&uacute;n tipo de resina, cola u otro material y posteriormente prensada a temperatura y presi&oacute;n controlada formando el tablero.</p>\r\n', 'Aglomerado natural,Aglomerado Duraplay', 'maderas_mjb_aglomerados.jpg', 'maderas_mjb_aglomerados_home.jpg', 'maderas_mjb_aglomerados_slider.jpg'),
(3, 'Enchapados', 'enchapados', '<p style=\"text-align:justify\">Enchapados, contamos con tableros de MDF, Aglomerado y Triplay enchapados en todas las especies, desde Okoume, Maple o Encino hasta Nogal, Parota, Tzalam o cualquier chapa compuesta que se desee. En MDF y aglomerado contamos con formatos de 4&rdquo; x 8&rdquo;, 4&rdquo; x 10&rdquo; y 4&rdquo; x 12&rdquo;, Triplay se puede enchapar en 4&rdquo; x 8&rdquo; y 4&rdquo; x 10&rdquo;. Enchapados es una l&iacute;nea de tableros perfectamente recubiertos en ambas caras con chapas de maderas naturales.</p>\r\n\r\n<p style=\"text-align:justify\">Nuestros productos estan disponibles en tableros MDF o Triplay.</p>\r\n\r\n<p style=\"text-align:justify\">Su alta calidad y excelente pulido, permiten una amplia gama de acabados, brindando a todos los elementos arquitect&oacute;nicos un terminado de madera natural.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Triplay enchapado,Tablero MDF', 'maderas_mjb_enchapados.jpg', 'maderas_mjb_enchapados_home.jpg', 'maderas_mjb_enchapados_slider.jpg'),
(4, 'Triplay', 'triplay', '<p>Triplay</p>\r\n\r\n<p>Es un tablero elaborado con finas chapas de madera pegadas con las fibras transversalmente una sobre la otra con resinas sint&eacute;ticas mediante fuerte presi&oacute;n y calor.</p>\r\n\r\n<p>Puede aplicarse en decoraci&oacute;n residencial, industrial, oficinas y mas.</p>\r\n\r\n<p>No dude en contactarnos.</p>\r\n\r\n<p>Estamos a sus &oacute;rdenes.</p>\r\n', 'Triplay Arauco,Triplay pino,Triplay para construccion', 'maderas_mjb_triplay.jpg', 'maderas_mjb_triplay_home.jpg', 'maderas_mjb_triplay_slider.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_desk` varchar(300) NOT NULL,
  `slider_movil` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_desk`, `slider_movil`) VALUES
(1, 'maderas_mjb_1_desk.jpg', 'maderas_mjb_1_movil.jpg'),
(2, 'maderas_mjb_2_desk.jpg', 'maderas_mjb_2_movil.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_sesion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_sesion`, `user_name`, `user_pass`) VALUES
(1, 'soporte@netweb.com.mx', 'Netweb', '154f8639573f1e2f5d9ffb7cbfa013ec'),
(2, 'webmaster@netweb.com.mx', 'Webmaster', '154f8639573f1e2f5d9ffb7cbfa013ec');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blg_id`);

--
-- Indices de la tabla `tbl_diapositivas`
--
ALTER TABLE `tbl_diapositivas`
  ADD PRIMARY KEY (`diap_id`);

--
-- Indices de la tabla `tbl_maquinaria`
--
ALTER TABLE `tbl_maquinaria`
  ADD PRIMARY KEY (`maq_id`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indices de la tabla `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_diapositivas`
--
ALTER TABLE `tbl_diapositivas`
  MODIFY `diap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_maquinaria`
--
ALTER TABLE `tbl_maquinaria`
  MODIFY `maq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
