-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2018 a las 15:45:02
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `botanicqr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualizacion`
--

CREATE TABLE `actualizacion` (
  `id` int(11) NOT NULL,
  `tabla` int(11) DEFAULT NULL,
  `fila` int(11) NOT NULL,
  `tipo_actualizacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(4000) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantas`
--

CREATE TABLE `plantas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cientifico` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `taxonomia` varchar(300) NOT NULL,
  `aplicaciones` varchar(600) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `qr` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plantas`
--

INSERT INTO `plantas` (`id`, `codigo`, `nombre`, `cientifico`, `descripcion`, `taxonomia`, `aplicaciones`, `imagen`, `qr`) VALUES
(1, 'UPQROO_P_1', 'Sábila', 'Áloe Vera', 'Aloe vera también conocido como sábila, áloe de Barbados o áloe de Curazao, entre otros, es una planta suculenta de la subfamilia Asphodeloideae dentro de la familia Xanthorrhoeaceae.', 'Reino: Plantae División: Magnoliophyta Clase: Liliopsida Subclase: Liliidae Orden: Asparagales Familia: Asfodeláceas Género: Aloe', 'Algunas especies, Áloe maculata, Áloe arborescens y en especial Áloe vera, se utilizan en medicina alternativa por contener el principio activo aloina y como botiquín doméstico de primeros auxilios. Tanto la pulpa transparente interior como la resina amarilla exudada al cortar unas hojas se usa externamente para aliviar dolencias de piel.', 'images/plantas/Sabila.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_1'),
(2, 'UPQROO_P_2', 'Orégano', 'Origanum Vulgare', 'El orégano, es una planta de la familia Lamiáceas —antes llamada Labiadas— . Se usa como condimento. La parte utilizada son las brácteas de la inflorescencia, tanto frescas como secas, aunque secas poseen mucho más sabor y aroma.', 'Reino: Plantae División: Magnoliophyta Clase: Magnoliopsida Orden: Lamiales Familia: Lamiaceae Subfamilia: Nepetoideae Tribu: Mentheae Género: Origanum Especie: Origanum vulgare', 'Sus propiedades han sido ampliamente estudiadas, siendo las más importantes su actividad antioxidante, antimicrobiana y, en estudios bastante primarios, antitumoral, antiséptica y también se la considera tónica y digestiva. En la medicina popular, la infusión de orégano ha sido utilizado como un auxiliar en el tratamiento de la tos.', 'images/plantas/Oregano.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_2'),
(3, 'UPQROO_P_3', 'Chile Piquín', 'Capsicum annuum var. glabriusculum', 'Conocidas comúnmente como chiles “chiltepines”, son plantas perennes, herbáceas o tipo arbusto, pequeños, de 0.5 a 2 m de altura, con un solo tallo y muchas ramas ascendente y extendidas; tallos verdes, castillados, pubescentes con pelos incurvados de 0.4 mm de largo o casi lisos.', 'Reino: Plantae División: Magnoliophyta Clase: Magnoliopsida Subclase: Asteridae Orden: Solanales Familia: Solanaceae Género: Capsicum Especie: C. annuum var. glabriusculum', 'Gastronomía Debido a su versatilidad, el chile amashito, es muy utilizado en la cocina tabasqueña, para elaborar salsas y para acompañar sopas y muchos otros platillos típicos del estado.', 'images/plantas/ChilePiquin.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_3'),
(4, 'UPQROO_P_4', 'Tomate', 'Solanum lycopersicum', 'Planta herbácea anual o perenne. Tallo erguido y cilíndrico en planta joven, a medida que ésta crece, el tallo cae y se vuelve anguloso, presenta vellosidades en la mayor parte de sus órganos y glándulas que segregan una sustancia de color verde aromática, puede llegar a medir hasta 2.50 m, ramifica de forma abundante y tiene yemas axilares.', 'Reino: Plantae División: Magnoliophyta Clase: Magnoliopsida Subclase: Asteridae Orden: Solanales Familia: Solanaceae Género: Solanum Subgénero: Potatoe Sección: Petota Especie: Solanum lycopersicum', 'El tomate es un alimento con escasa cantidad de calorías. De hecho, 100 gramos de tomate aportan solamente 18 kcal. La mayor parte de su peso es agua y el segundo constituyente en importancia son los hidratos de carbono. Contiene azúcares simples que le confieren un ligero sabor dulce y algunos ácidos orgánicos que le otorgan el sabor ácido característico. El tomate es una fuente importante de ciertos minerales (como el potasio y el magnesio). De su contenido en vitaminas destacan la B1, B2, B5 y la C.', 'images/plantas/Tomate.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_4'),
(5, 'UPQROO_P_5', 'Romero', 'Rosmarinus officinalis', 'El romero es un arbusto aromático, leñoso, de hojas perennes, muy ramificado y ocasionalmente achaparrado y que puede llegar a medir 2 metros de altura. Los tallos jóvenes están cubiertos de borra -que desaparece al crecer- y tallos añosos de color rojizo y con la corteza resquebrajada.', 'Reino: Plantae División: Magnoliophyta Clase: Magnoliopsida Subclase: Asteridae Orden: Lamiales Familia: Lamiaceae Subfamilia: Nepetoideae Tribu: Mentheae Subtribu: Salviinae Género: Rosmarinus Especie: Rosmarinus officinalis', 'Del romero se utilizan sobre todo las hojas y a veces, las flores. Es una planta rica en principios activos. Con el aceite esencial que se extrae directamente de las hojas, se prepara alcohol de romero. Ha demostrado efectividad para paliar el dolor y la inflamación en personas con artrosis o artritis reumatoide, pero no en personas con fibromialgia. Es eficaz como protector gástrico, en la prevención frente a las úlceras, incluso con mayor potencial que el Omeprazol.', 'images/plantas/Romero.jpg', 'https://firebasestorage.googleapis.com/v0/b/viveros-test.appspot.com/o/Plantas%2FRomero.jpg?alt=media&token=d490267d-03e4-4d3c-8879-eca97e55d78a'),
(6, 'UPQROO_P_6', 'Ruda', 'Ruta graveolens', 'La ruda se emplea en la cocina debido a su ligero toque entre picante y amargo, aunque su aroma es empleado en diferentes salsas o mezclas alcohólicas. Existen ciertos riesgos al cocinar con ruda debido a su fuerte toxicidad. En cualquier caso se debe emplear de esta planta las hojas frescas las secas son un pobre sustituto. La ruda es una planta con gran contenido de vitamina C y por esta razón se considera antiescorbútica, si bien no es tan apropiada como la del limón.', 'Reino: Plantae División: Magnoliophyta Clase: Magnoliopsida Orden: Sapindales Familia: Rutaceae Subfamilia: Rutoideae Género: Ruta Especie: Ruta graveolens', 'La ruda se emplea en la cocina debido a su ligero toque entre picante y amargo, aunque su aroma es empleado en diferentes salsas o mezclas alcohólicas. Existen ciertos riesgos al cocinar con ruda debido a su fuerte toxicidad. En cualquier caso se debe emplear de esta planta las hojas frescas las secas son un pobre sustituto. La ruda es una planta con gran contenido de vitamina C y por esta razón se considera antiescorbútica, si bien no es tan apropiada como la del limón.', 'images/plantas/Ruda.jpg', '\"https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_6\"'),
(7, 'UPQROO_P_7', 'Chaya', 'Cnidoscolus aconitifolius', 'La chaya también conocida como el árbol espinaca, es un arbusto robusto de hojas perennes, perteneciente a la familia de las Euphorbiaceae, nativo de Mesoamérica. Sus hojas se utilizan como una berza, que son cocinadas y preparadas como las espinacas. El nombre de chaya, deriva del vocablo maya Chay.', 'Reino: Plantae División: Magnoliophyta Clase: Magnoliopsida Orden: Malpighiales Familia: Euphorbiaceae Subfamilia: Crotonoideae Tribu: Manihoteae Género: Cnidoscolus Especie: Cnidoscolus aconitifolius (Mill.) I.M.Johnst.', 'La chaya proporciona enormes ventajas al organismo humano, pues contiene una notable cantidad de vitaminas, sales minerales, oligoelementos y enzima; se trata de sustancias que forman un fitocomplejo que actúa favorablemente el organismo, sin producir efectos negativos conocidos. Entre sus beneficios están la regulación de la presión arterial, el mejoramiento de la circulación sanguínea y la desinflamación de las venas y hemorroides.', 'images/plantas/Chaya.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_7'),
(8, 'UPQROO_P_8', 'Perejil', 'Petroselinum crispum', 'Planta herbácea bienal, aunque puede cultivarse también como anual. Forma una roseta empenachada de hojas muy divididas, alcanza los 15 cm de altura y posee tallos floríferos que pueden llegar a rebasar los 60 cm con pequeñas flores verde amarillentas.', 'Reino: Plantae División: Magnoliophyta Clase: Magnoliopsida Orden: Apiales Familia: Apiaceae Subfamilia: Apioideae Género: Petroselinum Especie: Petroselinum crispum', 'Una infusión de perejil se puede usar como diurético. Los herboristas chinos y alemanes recomiendan tomarlo como un té para regular la hipertensión, y los indios Cherokee lo usan como medicamento tónico para mejorar el rendimiento de la vejiga urinaria. También se usa frecuentemente como emenagogo. El perejil también es conocido por sus propiedades estimulantes de la digestión y los riñones, eliminación de toxinas, y la protección de los riñones contra la formación de piedras. El perejil tiene propiedades antiinflamantes que ayudan con problemas de reumatismo y artritis.', 'images/plantas/Perejil.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_8'),
(9, 'UPQROO_P_9', 'Orégano Francés', 'Plectranthus amboinicus', 'El orégano francés, tomillo español, menta mexicana, orégano brujo o borraja india es una planta perenne de la familia Lamiaceae. Puede alcanzar hasta 1 m de altura; presenta hojas con peciolos de 1,5 a 4,5 cm, con láminas suborbiculares, romboides, reniformes, tiernas y carnudas, de 5 a 10 cm de longitud, cuyo sabor y aroma se parecen al del orégano.', 'Reino: Plantae Subreino: Tracheobionta División: Magnoliophyta Clase: Magnoliopsida Subclase: Asteridae Orden: Lamiales Familia: Lamiaceae Subfamilia: Nepetoideae Tribu: Ocimeae Género: Plectranthus Especie: Plectranthus amboinicus', 'La medicina tradicional le ha atribuido al orégano francés diversas propiedades y lo ha usado, por ejemplo, para aliviar los ataques de epilepsia, como desinfectante, antimicótico y estimulante muscular. Recientemente se han multiplicado las investigaciones científicas sobre su acción y toxicidad. Se ha demostrado que tabletas 100 mg de P. amboinicus provocaron contracción de la musculatura lisa en cobayos.', 'images/plantas/OreganoFrances.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_9'),
(10, 'UPQROO_P_10', 'Chayote', 'Sechium edule', 'La especie Sechium edule es una trepadora perenne, monoica y vivípara de tallos aristados y lisos, hasta de 15 m de largo, muy ramificados. Los tallos tienen cordones de fibras largas y fuertes, los bejucos crecen de una cepa permanente y duran de uno a dos años.', 'Reino: Plantae Subreino: Tracheobionta División: Magnoliophyta Clase: Magnoliopsida Subclase: Dilleniidae Orden: Cucurbitales Familia: Cucurbitaceae Subfamilia: Cucurbitoideae Tribu: Sicyeae Subtribu: Sicyinae Género: Sechium Especie: Sechium edule (Jacq.) Sw.', 'Las puntas de guía de esta planta se pueden cocinar y comer o agregar a sopas. También sus raíces son comestibles y presentan semejanza con las papas. Tiene una apariencia tosca y suave sabor. En Colombia, en general se usa como cualquier tubérculo reemplazando a la papa, en algunas partes no es usado como comestible para humanos pero sí para los animales domésticos como ganado o cerdos. Algunas de las preparaciones incluyen sopas (sancocho), tortas, verdura en acompañamientos y jugos.', 'images/plantas/Chayote.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_10'),
(11, 'UPQROO_P_11', 'Césped Limón', 'Cymbopogon', 'Son plantas perennes cespitosas polígamas con tallos sólidos. Hojas generalmente aromáticas con olor a limón cuando trituradas, una membrana ciliolada lígula, láminas lineares, aplanadas.', 'Reino: Plantae División: Magnoliophyta Clase: Liliopsida Subclase: Commelinidae Orden: Poales Familia: Poaceae Subfamilia: Panicoideae Tribu: Andropogoneae Género: Cymbopogon', 'Gastronomía\\nSe usa comúnmente en infusiones de té, sopas y currys, lo mismo que\\nen pescados y mariscos. \\nSe usa más frecuentemente como té en los países africanos.\\nAquellas especies son usadas para la producción de aceite de citronela, el cual es usado en jabones, como repelente de mosquitos, insecticidas, y velas, también aromaterapia, la cual es famosa en Bintan, Indonesia.', 'images/plantas/CespedLimon.jpg', 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=UPQROO_P_11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantas_zona`
--

CREATE TABLE `plantas_zona` (
  `id` int(11) NOT NULL,
  `planta` int(11) DEFAULT NULL,
  `zona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablas`
--

CREATE TABLE `tablas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualizacion`
--
ALTER TABLE `actualizacion`
  ADD KEY `id` (`id`,`tabla`,`fila`,`tipo_actualizacion`),
  ADD KEY `tabla` (`tabla`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantas`
--
ALTER TABLE `plantas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantas_zona`
--
ALTER TABLE `plantas_zona`
  ADD KEY `id` (`id`,`planta`,`zona`),
  ADD KEY `planta` (`planta`),
  ADD KEY `zona` (`zona`);

--
-- Indices de la tabla `tablas`
--
ALTER TABLE `tablas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plantas`
--
ALTER TABLE `plantas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tablas`
--
ALTER TABLE `tablas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualizacion`
--
ALTER TABLE `actualizacion`
  ADD CONSTRAINT `actualizacion_ibfk_1` FOREIGN KEY (`tabla`) REFERENCES `tablas` (`id`);

--
-- Filtros para la tabla `plantas_zona`
--
ALTER TABLE `plantas_zona`
  ADD CONSTRAINT `plantas_zona_ibfk_1` FOREIGN KEY (`planta`) REFERENCES `plantas` (`id`),
  ADD CONSTRAINT `plantas_zona_ibfk_2` FOREIGN KEY (`zona`) REFERENCES `zonas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
