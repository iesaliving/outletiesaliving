-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para iesa
CREATE DATABASE IF NOT EXISTS `iesa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `iesa`;

-- Volcando estructura para tabla iesa.about_us
DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `imag_obj` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_obj` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_obj` mediumtext COLLATE utf8mb4_unicode_ci,
  `title_d` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_d` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.about_us: ~0 rows (aproximadamente)
DELETE FROM `about_us`;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` (`id`, `title`, `description`, `imag_obj`, `title_obj`, `description_obj`, `title_d`, `description_d`, `created_at`, `updated_at`) VALUES
	(1, 'SU FUTURA COCINA EMPIEZA AQUÍ', 'Empiece en uno de nuestros showrooms Sub-Zero, Wolf, Cove y Asko. Aquí lo atenderá un consultor dedicado a ayudarlo durante cada fase de su proyecto - desde el entender esa inspiración inicial hasta el aprovechar al máximo los equipos que seleccione cuidadosamente una vez que estén en su casa. Nosotros proveeremos todo lo que necesita para empezar, asegurando que la experiencia total este amoldada específicamente a usted.', 'img/nosotros/objetivo.jpg', 'NUESTRO OBJETIVO', '<p>Un lugar para empezar, experimentar y hacer realidad su visión. <br>Este no es un día de compras normal.</p>\r\n                        <p>Es una experiencia inmersiva para ayudarlo a visualizar las posibilidades de su futura cocina en una ambiente libre de presión donde usted puede descubrir cómo se va a sentir, ver y hasta como va a saber su futura cocina - guiado(a) por un consultor experto cuyo enfoque es amoldar la visita a sus necesidades.</p>', '¿TE GUSTARÍA FORMAR PARTE DE NUESTRO EQUIPO DE TRABAJO?', '<p>Piensa en lo emocionante que sería trabajar para una compañía dedicada a vender los mejores enseres de lujo del mundo, mejorando la vida en la cocina para miles de clientes. Somos una empresa impulsada por la innovación y la integridad, que se esfuerza por ser el mejor y brindar el mejor ambiente de trabajo. Si quieres trabajar con un líder, has llegado al lugar correcto. Envíanos tu curriculum a: <a href="mailto:cflores@iesa.cc">cflores@iesa.cc</a> adjuntando en el subject el puesto de tu interés.</p>', NULL, '2020-03-19 13:33:08');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.brands
DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_txt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` mediumtext COLLATE utf8mb4_unicode_ci,
  `social_network` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_txt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_name_unique` (`name`),
  UNIQUE KEY `brands_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.brands: ~7 rows (aproximadamente)
DELETE FROM `brands`;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` (`id`, `active`, `name`, `slug`, `logo`, `logo_txt`, `intro`, `social_network`, `social_img`, `social_txt`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Sub-Zero', 'sub-zero', 'img/subzero/sub-zero.png', '<p>EL ESPECIALISTA ENCONSERVACIÓN</p>', '<p>Mientras Sub-Zero exista, los alimentos resistirán el paso del tiempo, lo mismo que la belleza y el rendimiento de su cocina. Construido y probado con los más altos estándares, Sub-Zero es algo más que sólo un refrigerador. Se trata de un sistema de conservación de los alimentos, con más de 70 años de pensamiento innovador que lo avalan. Mientras exista Sub-Zero, la comida tendrá un delicioso futuro.</p>', 'https://www.facebook.com/subzerowolf/', 'img/sub-zero/facebook.jpg', 'SUB-ZERO WOLF MÉXICO Y LATINOAMERICA', NULL, '2020-03-23 11:49:09'),
	(3, 1, 'Wolf', 'wolf', 'img/wolf/logo.png', '<p>EL ESPECIALISTA</p><p>EN <strong>COCCIÓN</strong></p>', '<p>Disfrute toda una vida cocinando con más emoción y satisfacción. Wolf destila una legendaria herencia profesional, potencia y clase en equipo de cocina, cuyo control preciso garantiza que el plato que tiene en mente, sea el plato que llegue a la mesa.</p>', 'https://www.facebook.com/subzerowolf/', 'img/wolf/facebook.jpg', 'SUB-ZERO WOLF MÉXICO Y LATINOAMÉRICA', NULL, '2020-03-24 06:36:15'),
	(4, 1, 'cove', 'cove', 'img/cove/logo.png', '<p>LA ÚNICA LAVAVAJILLAS CON <strong>SUBZERO Y WOLF</strong> EN SU <strong>ADN</strong></p>', '<p>Las lavavajillas Cove proviene de los pioneros en conservación de alimentos Sub-Zero y cocción a precisión Wolf. Los electrodomésticos Cove están diseñados para adaptarse a los platos que más limpia – con ciclos que garantizan resultados impecables y un funcionamiento silencioso. Diseñado cuidadosamente con interiores ajustables, acabados exteriores personalizables y la mejor garantía y servicio disponibles. Cove es simplemente una forma más inteligente de lavar.</p>', 'https://www.facebook.com/subzerowolf/', 'img/cove/facebook.jpg', 'COVE', NULL, '2020-03-24 09:52:11'),
	(5, 1, 'Asko', 'asko', 'img/asko/logo.png', '<p>INSPIRADO EN ESCANDINAVIA</p>', '<p>Electrodomésticos escandinavos ASKO; productos durables y de máxima calidad con soluciones innovadoras respetuosas con el medio ambiente y el uso económico de los recursos como agua y energía.</p>', 'https://www.facebook.com/asko.russia/', 'img/asko/facebook.jpg', 'ASKO MÉXICO Y LATINOAMERICA', NULL, '2020-03-24 10:01:15'),
	(6, 1, 'Dexa', 'dexa', 'img/dexa/logo.png', '<p>DEXA NON É NORMALE<strong> ...COME TE!</strong>&nbsp;</p><p>DISEÑOS Y ELEMENTOS QUE EXPRESAN UNA PERSONALIDAD DIFERENTE</p>', '<h3><strong>CREAMOS LO EXTRAORDINARIO</strong></h3><p>&nbsp;Lo mejor de Italia en tu cocina.</p><p>Una marca propia de IESA, cuenta con productos de calidad con diseño italiano. Una Marca joven, audaz y divertida, aquí creamos nuestras experiencias rompiendo las reglas y reinventando lo cotidiano</p>', 'https://www.facebook.com/DEXA.MX/', 'img/dexa/facebook.jpg', 'DEXA', NULL, '2020-03-24 10:05:28'),
	(7, 1, 'Scotsman', 'scotsman', 'img/scotsman/logo.png', '<p>EL HIELO IDEAL <strong>EL LUJO DEFINITIVO</strong></p>', '<p>Cuando se trata de lujo, los detalles marcan la diferencia. Tu bebida favorita no es la excepción. La adición de el hielo ideal, hace que una bebida se mantenga más fría y el sabor dure y dure. No importa qué bebida prefiera, una cosa puede mejorarla: el hielo Scotsman, el ingrediente ideal.</p>', NULL, NULL, NULL, NULL, '2020-03-24 10:21:55'),
	(8, 1, 'Cocina exterior', 'cocina-exterior', 'img/cintillos/SubZero.png', '<p>COCINA EXTERIOR</p>', '<p>Todo sabe mejor al aire libre. Sin embargo, el control del calor en la mayoría de los asadores puede convertir el cocinar en exteriores en una tarea imprecisa. Los asadores Wolf cambiar todo eso. Le dan el mismo tipo de control de precisión y facilidad de uso que sus contrapartes de interiores, las estufas, hornos y parrillas Wolf. Imagínese las jugosas posibilidades.</p>', 'https://www.facebook.com/subzerowolf/', 'img/exteriores/facebook.jpg', 'SUB-ZERO WOLF MÉXICO Y LATINOAMERICA', NULL, '2020-03-24 10:27:11');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.brand_details
DROP TABLE IF EXISTS `brand_details`;
CREATE TABLE IF NOT EXISTS `brand_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `brand_id` int(10) unsigned NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `features` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.brand_details: ~42 rows (aproximadamente)
DELETE FROM `brand_details`;
/*!40000 ALTER TABLE `brand_details` DISABLE KEYS */;
INSERT INTO `brand_details` (`id`, `active`, `brand_id`, `image`, `title`, `url_cat`, `description`, `features`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'img/subzero/subzero1.jpg', 'REFRIGERACIÓN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_REFRIGERACION_Download.htm', 'Desde hace casi 70 años, nada ha mantenido los alimentos más frescos durante más tiempo que un refrigerador Sub-Zero. Elija refrigeradores empotrados con el aspecto clásico del acero inoxidable o terminados en paneles personalizados. Las unidades integradas se funden con la decoración. También tenemos el poderoso PRO 48 - una pieza central imponente para cualquier cocina.', 0, NULL, '2020-03-24 08:39:29'),
	(2, 1, 1, 'img/subzero/subzero2.jpg', 'REFRIGERACIÓN BAJO CUBIERTA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_SUB-ZERO_REFRI_BAJO_CUBIERTA.htm', 'Productos frescos en la isla de la cocina, bebidas frías en el gimnasio y hielo en abundancia cerca de la piscina. La refrigeración Sub-Zero está en todos lados. Ya sea que elija cajones integrados, centros de bebidas, refrigeradores bajo cubierta o máquinas de hielo, nuestras unidades encajan a la perfección, sin interrumpir el flujo de su casa y la forma en que vive.', 0, NULL, '2020-03-24 08:39:29'),
	(3, 1, 1, 'img/subzero/subzero3.jpg', 'CONSERVADORES DE VINO', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_CONSERVADORES_DE_VINO.htm', 'Un mejor almacenamiento de la botella significa disfrutarlo más en la copa. Las unidades de conservación de vino Sub-Zero actúan no sólo como refrigeradores, sino como guardianes contra el calor, la humedad, la vibración y la luz, los cuatro enemigos que pueden robar al vino su complejidad y carácter. Disponible en tres grosores, de 18” 24” 30”, con 46 a 147 botellas de capacidad, que le permiten llevar los placeres del vino a cualquier habitación de la casa', 0, NULL, '2020-03-24 08:39:29'),
	(4, 1, 3, 'img/wolf/estufas.jpg', 'ESTUFAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Wolf_Estufas.htm', 'De a su cocina una pieza icónica central. Las estufas de gas y estufas duales de Wolf han sido la elección de los profesionales durante ocho décadas y ahora son los preferidos de los más exigentes cocineros del hogar. Los quemadores duales sellados y apilados ofrecen emocionante precisión y rendimiento, mientras que el horno de convección proporciona calor constante para asar, y hornear de manera perfecta.', 0, NULL, '2020-03-24 08:51:05'),
	(5, 1, 3, 'img/wolf/horno_empotrado.jpg', 'HORNOS EMPOTRABLES', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__WOLF_HORNOS_EMPOTRABLES.htm', 'Hornee, rostice y ase con la confianza de los hornos empotrados Wolf. Los hornos de convección Wolf, o los hornos combinados con convección y vapor, ofrecen controles intuitivos y temperaturas constantes para garantizar que cada comida sea previsiblemente notable.', 0, NULL, NULL),
	(6, 1, 3, 'img/wolf/parrillas.jpg', 'PARRILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_PARRILLAS.htm', 'Independientemente del método de cocción que prefiera (gas, electricidad o inducción), hay una parrilla Wolf elegante, aerodinámica y bien diseñada para usted. Tenga la seguridad de que cada uno ofrece el control de temperatura de precisión y el rendimiento comprobado que espera de Wolf.', 0, NULL, NULL),
	(7, 1, 3, 'img/wolf/microondas.jpg', 'MICROONDAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_MICROONDAS.htm', 'Un microondas Wolf es un verdadero instrumento de cocción, uno que está diseñado para hacer mucho más que recalentar las sobras. De hecho, los diseños innovadores de hoy pueden llevar a la preparación de comidas completas. Equipe su cocina con una de la extensa selección de microondas de Wolf (incluidos los modelos de convección), con cajones, puertas abatibles y modelos de giro lateral disponibles', 0, NULL, NULL),
	(8, 1, 3, 'img/wolf/horno_convecion_vapor.jpg', 'HORNOS DE CONVECCIÓN Y VAPOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_HORNOS_DE_CONVECCION_VAPOR.htm', 'Cocinar con vapor tiene infinitos beneficios. Diseñados con un sensor de clima, los hornos de vapor de convección Wolf garantizan resultados sabrosos que siempre están libres de conjeturas. Disponible en anchos de 24 “y 30”.', 0, NULL, NULL),
	(9, 1, 3, 'img/wolf/speed_oven.jpg', 'SPEED OVEN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_SPEED_OVEN.htm', 'El rendimiento que espera de los hornos Wolf, solo que más rápido y más pequeño. Combina la potencia del microondas con las capacidades de convección y asado en un dispositivo fácil de usar. Ofrece versatilidad de horno todo en uno, preparando una amplia variedad de alimentos en un tiempo reducido. Disponible en anchos de 24 “y 30”', 0, NULL, NULL),
	(10, 1, 3, 'img/wolf/modulos.jpg', 'MÓDULOS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_MODULOS.htm', 'Personalice su cocina con módulos de cocina que se adaptan a su estilo de cocina único. Los módulos Wolf significan flexibilidad de diseño modular, en otras palabras, la opción de incorporar de manera perfecta y hermosa herramientas como vaporera, parrillas y freidoras en su hogar entre otros.', 0, NULL, NULL),
	(11, 1, 3, 'img/wolf/ventilacion.jpg', 'VENTILACIÓN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_VENTILACION.htm', 'Con potentes motores de varias velocidades para eliminar el humo y los olores, junto con iluminación halógena para iluminar con elegancia las áreas de cocción, Wolf ventilación ofrece una amplia gama de opciones útiles y atractivas diseñadas para mejorar cualquier diseño de cocina.', 0, NULL, NULL),
	(12, 1, 3, 'img/wolf/calentadores.jpg', 'CAJONES CALENTADORES', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_CAJONES_CALENTADORES.htm', 'Sirva cada plato a su temperatura adecuada con los cajones calentadores de Wolf. Diseñados para preservar la temperatura y la calidad de los alimentos sin comprometer el sabor o la consistencia, los cajones calefactores Wolf garantizan resultados deliciosos para sus invitados, sin importar cuándo lleguen a su mesa.', 0, NULL, NULL),
	(13, 1, 3, 'img/wolf/sellado_vacio.jpg', 'CAJÓN DE SELLADO AL VACÍO', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_CAJON_DE_SELLADO_AL_ACÍO.htm', 'Los cajones de sellado al vacío Wolf eliminan el aire y sellan los alimentos o líquidos para un fácil almacenamiento, marinado y cocción. Disfruta de una mirada de nuevas posibilidades creativas de cocina, incluidos los resultados consistentemente deliciosos de preparaciones sous vide, con Wolf.', 0, NULL, NULL),
	(14, 1, 3, 'img/wolf/cafetera.jpg', 'CAFETERAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_CAFETERAS.htm', 'Con la cafetera Wolf, haga café de calidad profesional, espresso, cappuccino, latte y más precisamente a su gusto, con granos de café reales, al toque de un botón. Instálelo en cualquier lugar en su hogar u oficina-pues no se requiere ninguna plomería.', 0, NULL, NULL),
	(15, 1, 3, 'img/wolf/wolf_gourmet.jpg', 'WOLF GOURMET', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_WOLF_GOURMET.htm', 'Los electrodomésticos Wolf Gourmet se fabrican con la gran atención a los detalles que usted espera de la marca Wolf. Creemos que el gusto por cocinar no comienza con la finalización de la comida, sino con su preparación. Disfrute cada paso del proceso usando nuestros electrodomésticos de alto rendimiento diseñados para soportar los rigores de cualquier cocina.', 0, NULL, NULL),
	(16, 1, 4, 'img/cove/vajilla.jpg', 'UNA FORMA MÁS INTELIGENTE DE LAVAR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Cove_Download.htm', '¿Una mejor manera de lavar? Desde interiores completamente flexibles hasta un funcionamiento casi silencioso, Cove fue rediseñado, desde cero, para garantizar platos limpios y secos impecables con cada carga, en todo momento.', 0, NULL, '2020-03-24 09:26:24'),
	(17, 1, 4, 'img/cove/limpie.png', 'LIMPIE CON CONFIANZA', NULL, 'Con aspersores de agua colocados estratégicamente en todo el lavavajillas, los platos se vuelven más limpios. No es necesario lavar previamente, volver a lavar ni quitar las manchas.', 1, NULL, '2020-03-24 09:43:37'),
	(18, 1, 4, 'img/cove/personalice.png', 'PERSONALICE SU LIMPIEZA', NULL, 'Los modos de lavado y secado preprogramados y personalizados y tres brazos rociadores separados limpian expertamente cada plato, desde porcelana fina hasta sartenes de alta resistencia.', 1, NULL, '2020-03-24 09:30:57'),
	(19, 1, 4, 'img/cove/silencio.png', 'LIMPIEZA EN SILENCIO', NULL, 'Una operación casi silenciosa permite que la conversación de la cena siga fluyendo mientras se limpian los platos.', 1, NULL, '2020-03-24 09:43:27'),
	(20, 1, 4, 'img/cove/ajuste.png', 'SE AJUSTA A CUALQUIER (Y CADA) PLATO', NULL, 'Con alturas y dientes ajustables, y dos opciones para limpiar los cubiertos (tanto la rejilla como la canasta), no hay utensilios, herramientas o sartenes que Cove no pueda conquistar.', 1, NULL, '2020-03-24 09:30:57'),
	(21, 1, 4, 'img/cove/asegura.png', 'ASEGURA DÉCADAS DE FIABILIDAD', NULL, 'Los electrodomésticos Cove se someten a rigurosas pruebas de resistencia para que funcionen durante más de veinte años de uso diario y están respaldados por la garantía más sólida de la industria.', 1, NULL, '2020-03-24 09:43:27'),
	(22, 1, 5, 'img/asko/asko_hornos.jpg', 'HORNOS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_HORNOS.htm', 'Los hornos de ASKO vienen con una filosofía de interacción única basada en una pantalla táctil TFT con las funciones de uso más frecuente accesibles de inmediato. La interfaz es fácil de usar y lo alentará a explorar todas las características y funciones de su horno.\r\n\r\nSi es principiante en su cocina, seleccione cualquiera de los programas automáticos de su horno ASKO. Simplemente seleccione un plato de una lista de platillos preprogramados y la intensidad si es necesario. La interfaz está repleta de información útil que lo alienta a explorar la funcionalidad completa del horno.', 0, NULL, NULL),
	(23, 1, 5, 'img/asko/asko_parrillas.jpg', 'PARRILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_PARRILLAS.htm', '¿Gas o inducción? Una difícil elección para muchos entusiastas de la cocina. No importa lo que elija, con una parrilla de inducción ASKO en la cocina tendrá un control perfecto del calor. Las parrillas de gas cuentan con el exclusivo quemador Wok Volcano con una llama altamente concentrada y un soporte estable para la sartén wok; las parrillas de inducción están equipadas con zonas Bridge Induction™ que permiten combinar sartenes de diferentes tamaños. Elija lo que quiera, pero debe ser un equipo ASKO.', 0, NULL, NULL),
	(24, 1, 5, 'img/asko/asko_campanas.jpg', 'CAMPANAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_CAMPANAS.htm', 'El Sistema Air Logic™garantiza que toda la superficie de la campana se utilice para la extracción de humos. Esto es posible gracias al uso exclusivo de su patrón de orificios cerca del motor y orificios más grandes en los bordes exteriores, lo que hace que la cubierta sea extremadamente eficiente también en configuraciones más bajas. Así tanto silencioso como eficiente.', 0, NULL, NULL),
	(25, 1, 5, 'img/asko/asko_cafetera.jpg', 'CAFETERA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_CAFETERA.htm', 'Con una filosofía única de interacción y control basada en una interfaz TFT touch, tiene todas las posibilidades para preparar su café de manera perfecta, justo como usted lo desea. La interfaz cuenta con programas, opciones y configuraciones diferentes. Por ejemplo, tamaño de bebida personalizable, selección de idioma, enjuague automático, ajuste de agua caliente y programa de descalcificación.\r\nTodos sus componentes son desmontables y fáciles de limpiar', 0, NULL, NULL),
	(26, 1, 5, 'img/asko/asko_cajon.jpg', 'CAJÓN CALENTADOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__ASKO_CAJON_CALENTADOR.htm', 'Utilice el cajón calentador para mantener la comida caliente, para calentar platos y tazas o simplemente para guardar las cosas.', 0, NULL, NULL),
	(27, 1, 5, 'img/asko/asko_congelador.jpg', 'REFRIGERADOR / CONGELADOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__ASKO_REFRIGERADOR.htm', 'Simplemente enfriar los alimentos frescos no es suficiente para conservarlos durante mucho tiempo. Varios alimentos frescos requieren diferentes temperaturas, niveles de humedad e incluso luz. También pensamos que debería ser fácil para usted colocar sus alimentos frescos y luego encontrarlos, antes de que se vuelvan demasiado viejos.', 0, NULL, NULL),
	(28, 1, 5, 'img/asko/asko_lavavajillas.jpg', 'LAVAVAJILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_LAVAVAJILLAS.htm', 'Las lavavajillas ASKO están hechas de acero. Este ha sido un hecho bien conocido durante décadas y cuando abra la puerta, verá más acero que en cualquier otro lavavajillas del mercado. Con nuestra nueva generación de lavavajillas queremos enfatizar este hecho aún más. Eche un vistazo a la puerta y verá solo acero de alta calidad sin división entre la puerta y el panel. Se expresa a sí misma como un electrodoméstico confiable y robusta, que conserva líneas elegantes y sofisticadas derivadas del minimalismo y la mentalidad escandinava', 0, NULL, NULL),
	(29, 1, 5, 'img/asko/asko_lavadora.jpg', 'LAVADORA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_LAVADORA.htm', 'Esta lavadora blanca de nuestra gama Logic con detalles en acero inoxidable presenta nuestra exclusiva Quattro Construction ™. Cuatro amortiguadores transfieren vibraciones a la placa inferior, haciendo que la lavadora esté prácticamente libre de vibraciones, incluso a velocidades de centrifugado de 1400 rpm. 21 programas cuidadosamente diseñados y 5 modos de funcionamiento significan que siempre hay una configuración que se adapta solo a sus necesidades de lavado.', 0, NULL, NULL),
	(30, 1, 5, 'img/asko/asko_secadora.jpg', 'SECADORA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_SECADORA.htm', 'Esta secadora blanca de nuestra gama Logic presenta Butterfly Drying ™ que minimiza las arrugas de su ropa al permitir que el aire circule uniformemente a través de la ropa. 13 programas y varias opciones lo ayudarán a secar su ropa de manera efectiva en todo momento. El motor sin escobillas es confiable y silencioso con sus 65 dB (A).', 0, NULL, '2020-03-24 10:01:15'),
	(31, 1, 6, 'img/dexa/estufas.jpg', 'ESTUFAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_ESTUFAS.htm', 'Las estufas DEXA te ofrecen un gran diseño y personalidad tomadas de la mano con un sistema de cocción y seguridad.', 0, NULL, NULL),
	(32, 1, 6, 'img/dexa/parrillas.jpg', 'PARRILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_PARRILLAS.htm', 'Las parrillas de DEXA cuentan con materiales de alta calidad y con una variedad de tamaños, también cuentan con diferentes niveles de cocción y con un gran diseño italiano.', 0, NULL, NULL),
	(33, 1, 6, 'img/dexa/hornos.jpg', 'HORNOS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__Dexa__HORNOS.htm', 'La gama de hornos DEXA ofrece una gran cantidad de prestaciones, sin prescindir de un diseño moderno en todos sus modelos. Sus características brindan seguridad, precisión y facilidad de uso. Para cocinar sus platillos favoritos, con resultados asombrosos.', 0, NULL, '2020-03-24 10:12:42'),
	(34, 1, 6, 'img/dexa/campanas.jpg', 'CAMPANAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_CAMPANAS.htm', 'Las campanas DEXA están dotadas con una gran capacidad de extracción y algunos modelos con re-circulación del aire. Proporcionando ambientes confortables en tu cocina, evitando olores.', 0, NULL, '2020-03-24 10:12:42'),
	(35, 1, 6, 'img/dexa/lavavajillas.jpg', 'LAVAVAJILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_LAVAVAJILLAS.htm', '¡Con la lavavajillas DEXA no tendrás más platos sucios! Contamos con tres modelos que facilitarán tu vida y las labores domésticas.', 0, NULL, '2020-03-24 10:12:42'),
	(36, 1, 6, 'img/dexa/llaves.jpg', 'TARJAS Y LLAVES', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_TARJAS_LLAVES.htm', 'DEXA ofrece una variada selección de llaves y tarjas para cocina cuidadosamente diseñadas para brindar la mejor combinación posible entre estilo, calidad y precio', 0, NULL, '2020-03-24 10:12:42'),
	(37, 1, 7, 'img/scotsman/hielo.jpg', 'MÁQUINAS DE HIELO', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Scotsman_Download.htm', '<p>El hielo debería mejorar el sabor de las bebidas, no diluirlo. Las máquinas de hielo Scotsman producen hielo que no cambia ni reduce los sabores, contrario a lo que hace el hielo de un refrigerador regular.</p>', 0, NULL, '2020-03-24 10:21:27'),
	(38, 1, 7, 'img/scotsman/hielo-gourmet.png', 'HIELO GOURMET', NULL, '<ul><li>Forma: Pequeño vaso tipo "shot"</li><li>Ideal para: Bebidas y<br>bebidas tipo gourmet</li><li>Ventajas:</li></ul><p>-Se derrite lentamente</p><p>-Ideal para la casa</p><p>-Hielo duro en forma única</p><p>-No tiene sabor ni olor</p><p>-No diluye el sabor de las bebidas</p>', 1, NULL, '2020-03-24 10:21:27'),
	(39, 1, 7, 'img/scotsman/hielo-nugget.png', 'HIELO NUGGET', NULL, '<ul><li><strong>Forma: Pequeño cilindro</strong></li><li><strong>Ideal para: Bebidas de</strong><br><strong>sabores / carbonatadas</strong></li><li><strong>Ventajas:</strong></li></ul><p>-Se derrite lentamente</p><p>-Enfría las bebidas más rápido</p><p>-Hielo Suave y masticable</p><p>-Absorbe el sabor de la bebida</p>', 1, NULL, '2020-03-24 10:21:27'),
	(40, 1, 8, 'img/exteriores/asadores.jpg', 'ASADORES', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_COCINA_EXTERIOR_ASADORES.htm', '<p>Con funciones fáciles de usar. Controles de temperatura de precisión. Y resultados jugosos, y tiernos, los asadores para exterior de Wolf son fabricados en acero inoxidable y soldados con precisión para que no se oxiden o guarden agua. Cada uno de los cuatro modelos de asadores vienen en gas natural o LP, y se puede integrar a su espacio al aire libre.<br><br>Encuentre carritos opcionales disponibles para los modelos de 30", 36" y 42"</p>', 0, NULL, '2020-03-24 10:27:11'),
	(41, 1, 8, 'img/exteriores/refrigeracion.jpg', 'REFRIGERACIÓN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_COCINA_EXTERIOR_REFRIGERACION.htm', '<p>Nuestros productos para el exterior - entre ellos un refrigerador bajo cubierta de 24” y una máquina de hielos de 15” - están diseñados para temperaturas arriba de 110°F (43 °C) y revestidos con acero inoxidable de alto calibre que soporta el tipo de elementos que corroen materiales menos resistentes.</p>', 0, NULL, '2020-03-24 10:27:11'),
	(42, 1, 8, 'img/exteriores/calentadores.jpg', 'CAJÓN CALENTADOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_COCINA_EXTERIOR_CAJON_CALENTADOR.htm', '<p>Con el cajón calentador para exterior de Wolf , los platillos que termine en diferentes momentos se mantienen calientes, húmedos y listos para ser servidos a la hora que desee. ¿Se toma el fin de semana para no cocinar? Use el cajón para mantener las toallas calientes en la piscina.</p>', 0, NULL, '2020-03-24 10:27:11');
/*!40000 ALTER TABLE `brand_details` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.contacts: ~0 rows (aproximadamente)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'img/hero-contacto.jpg', 'YA SEA QUE ESTÉ COMPRANDO ELECTRODOMÉSTICOS O TENGA PREGUNTAS SOBRE AQUELLOS QUE YA POSEE', '<p>Nuestro equipo de Atención al cliente tiene una reputación de servicio tan excepcional como nuestros productos</p>', '2020-03-19 14:00:14', '2020-03-19 12:59:18');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.faqs
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.faqs: ~3 rows (aproximadamente)
DELETE FROM `faqs`;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` (`id`, `image`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'img/faq/marketing.png', 'Marketing', 'marketing', '<h5 style="margin-top:35px">¿Cómo solicito un catálogo?</h5>\r\n                <p>DIGITAL: Puede solicitar un catálogo digital al correo electrónico <b>marketing@iesa.cc</b></p>\r\n                <p>IMPRESO: Durante la visita a nuestros showrooms o a un Distribuidor Autorizado IESA puede solicitar un catálogo impreso.</p>', NULL, NULL),
	(2, 'img/faq/servicio.png', 'CONCIERGE DE SERVICIO', 'servicio', '<p><strong>¿Cuánto tiempo de garantía tienen los equipos?</strong></p><p>Todas las marcas del GRUPO IESA tienen 2 años de garantía completa (partes y mano de obra). Sub-Zero, Wolf y Cove extiende la garantía en algunos componentes hasta 5 años.</p><p><strong>¿Quién hace la conexión de los equipos?</strong></p><p>Recomendamos que la conexión de los equipos la haga uno de nuestros Centros Autorizados de Servicio (CAS) que han sido certificados por la fábrica.</p><p><strong>¿Cómo hago válida mi garantía?</strong></p><p>Para activar la garantía de su equipo, existen las siguientes opciones:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul><p><strong>¿Qué incluye la conexión de mis equipos?</strong></p><p>La conexión de sus equipos incluye dos visitas; La primera es para hacer una inspección del espacio donde van a ser instalados los equipos y verificar que cumpla con la guía mecánica del fabricante. La segunda para la conexión de los equipos.</p><p>Es importante asegurarse que el espacio esté preparado para recibir a los equipos de acuerdo a las especificaciones de las guías mecánicas de cada modelo. Las guías mecánicas de sus equipos pueden conseguirse en el website, ser solicitadas con quien compró sus equipos o al concierge de servicio. Los equipos Sub-Zero incluyen sin costo adicional un kit de instalación que consiste de uno o más de los siguientes elementos: regulador de voltaje, mangueras conectoras y/o válvulas.</p><p><strong>¿La conexión de mis equipos incluye el traslado del técnico?</strong></p><p>No se genera cargo de traslado del personal de servicio en las capitales de los estados, así como en destinos turísticos importantes (Los Cabos, Puerto Vallarta y Cancún) dentro de México. En las capitales de los países en el resto de América Latina tampoco se genera cargos adicionales.</p><p>Fuera de los destinos mencionados arriba, puede haber un cargo de traslado. Para solicitar un estimado existen las siguientes opciones:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul><p><strong>¿Cómo puedo saber si lo que me está cobrando el técnico es lo correcto?</strong></p><p>Las tarifas de servicio para nuestros Centros Autorizados de Servicios están estipuladas por un tabulador</p><p>Si desea saber el costo de la reparación de su equipo con gusto lo puede solicitar a nuestro concierge de servicio:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul><p><strong>¿El servicio llega a mi ciudad?</strong></p><p>Grupo IESA proporciona servicio en toda América Latina, algunos lugares podrían generar un cargo por traslado del técnico.</p><p>No se genera cargo por traslado del personal de servicio en las capitales de los estados, así como en destinos turísticos importantes (Los Cabos, Puerto Vallarta y Cancún) dentro de México, y las capitales de los países en el resto de América Latina.</p><p>Fuera de los destinos mencionados arriba, puede haber un cargo por traslado. Para solicitar un estimado existen las siguientes opciones:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul>', NULL, '2020-03-20 09:42:24'),
	(3, 'img/faq/entregas.png', 'Entregas', 'entregas', '<p><strong>¿En cuánto tiempo puedo recibir mis equipos?</strong></p><p>Nuestro centro de distribución para México se encuentra en Monterrey y cuenta con un amplio inventario de productos para entrega inmediata.</p><p>Dependiendo del lugar de la República en donde se encuentre puede variar el tiempo de entrega de los equipos entre 2 y 5 días hábiles a partir de que el Distribuidor Autorizado nos haya hecho el pedido si los equipos están en existencia.</p><p>Si los productos que seleccionó fueron pedidos especiales, el tiempo de entrega puede variar entre 4 a 8 semanas.</p><p>El centro de distribución para el resto de América Latina está en ubicado en Miami. Los traslados marítimos normalmente demoran entre 2 y 5 semanas adicionales a lo que demora en México..</p><p><strong>¿La entrega de mis equipos me genera un cargo?</strong></p><p>Estamos complacidos de llevar sus electrodomésticos hasta la puerta de su hogar sin ningún costo en Monterrey, CDMX y Guadalajara.</p><p>El resto de las entregas se surten de nuestro Centro de Distribución en Monterrey. Nuestro equipo de Logística de Embarque se puede coordinar con usted para entregarlo a la fletera de su preferencia.</p><p>Para embarques fuera de México, se surtirán desde nuestro Centro de Distribucion en Miami. Nuestro equipo de Logística de Embarque puede coordinar el envío al forwarder de su preferencia en Miami y ayudarle a coordinar el envío hasta el puerto de entrada de su país.</p><p><strong>¿Qué hago si mi equipo llega dañado o presenta algún golpe?</strong></p><p>Hemos invertido en herramientas que nos permiten manipular los equipos con gran cuidado minimizando daños, sin embargo es importante que revise cuidadosamente sus equipos al recibirlos.</p><p>En caso de detectar algún daño en algún equipo le sugerimos no recibirlo, nuestros camiones de entrega o la compañía fletera se encargarán de regresarlo a nuestro almacén y nuestro equipo logístico se encargará de tramitar la entrega de un sustituto.</p><p>Si no tuvo oportunidad de verificarlo durante la recepción, tiene 24 hrs adicionales para reportarlo a nuestro equipo de Concierge de Servicio</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul>', '2020-03-20 09:50:25', '2020-03-20 10:00:46');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.headquarters
DROP TABLE IF EXISTS `headquarters`;
CREATE TABLE IF NOT EXISTS `headquarters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `headquarters_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.headquarters: ~2 rows (aproximadamente)
DELETE FROM `headquarters`;
/*!40000 ALTER TABLE `headquarters` DISABLE KEYS */;
INSERT INTO `headquarters` (`id`, `active`, `name`, `address`, `phone`, `email`, `schedule`, `map`, `created_at`, `updated_at`) VALUES
	(1, 1, 'MONTERREY', 'Carr. Monterrey – Saltillo 3061 Fracc. Bosques del Poniente Santa Catarina, NL 66350', '+52 (1) 81 8389 4372', 'recepción@iesa.cc', '09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#Cerrado#Cerrado', 'https://www.google.co.ve/maps/place/Importaciones+Electrodom%C3%A9sticas,+S.A.+De+C.V./@25.682615,-100.4560607,17z/data=!3m1!4b1!4m5!3m4!1s0x86629816d52a561b:0x708d48dbe192e667!8m2!3d25.682615!4d-100.453872', NULL, '2020-03-18 13:53:48'),
	(2, 1, 'CIUDAD DE MÉXICO', 'Galileo 8 Segundo piso Col. Polanco Chapultepec México, DF 11560<span style="color:#fff ">blanco blanco blanco blanco</span>', '+52 (1) 55 5280 9648', 'showroom@iesa.cc', '09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#Cerrado#Cerrado', 'https://www.google.co.ve/maps/place/IESA/@19.4284845,-99.1956162,17z/data=!3m1!4b1!4m5!3m4!1s0x85d201ff11a77f6d:0x18848b36c0d7d2d9!8m2!3d19.4284845!4d-99.1934275', NULL, '2020-03-18 13:53:48');
/*!40000 ALTER TABLE `headquarters` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.home_pages
DROP TABLE IF EXISTS `home_pages`;
CREATE TABLE IF NOT EXISTS `home_pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.home_pages: ~5 rows (aproximadamente)
DELETE FROM `home_pages`;
/*!40000 ALTER TABLE `home_pages` DISABLE KEYS */;
INSERT INTO `home_pages` (`id`, `active`, `image`, `title`, `text`, `created_at`, `updated_at`) VALUES
	(1, 1, 'img/home/1.jpg', 'DESCUBRA NUESTROS LEGENDARIOS PRODUCTOS', 'Desde 1945, Sub-Zero ha sido el pionero en la ciencia de la refrigeración doméstica al mismo tiempo que transformaba el diseño de equipos integrados y empotrados. Wolf tiene una tradición de innovación aún mayor, con ingeniería que proviene de más de 80 años de experiencia de equipos de cocción comercial. Junto con la tecnología de lavavajillas de Cove, Sub-Zero y Wolf están dedicados a ayudarlo a crear la cocina funcional y flexible de sus sueños.', NULL, '2020-03-17 15:06:40'),
	(2, 1, 'img/home/2.jpg', 'COCINA EXTERIOR', 'Todo sabe mejor al aire libre. Sin embargo, el control del calor en la mayoría de los asadores puede convertir el cocinar en exteriores en una tarea imprecisa. Los asadores Wolf cambiar todo eso. Le dan el mismo tipo de control de precisión y facilidad de uso que sus contrapartes de interiores, las estufas, hornos y parrillas Wolf. Imagínese las jugosas posibilidades.', NULL, NULL),
	(3, 1, 'img/home/3.jpg', 'ENSERES DE LUJO INSPIRADOS EN ESCANDINAVIA', 'Electrodomésticos escandinavos ASKO; productos durables y de máxima calidad con soluciones innovadoras respetuosas con el medio ambiente y el uso económico de los recursos como agua y energía.', NULL, NULL),
	(4, 1, 'img/home/4.jpg', 'Diseños y elementos que expresan una Personalidad diferente', 'Diseños espectaculares y funcionalidad sin igual, son los atributos de los productos de DEXA. Nuestra línea está pensada para integrarse al diseño de tu cocina ideal, pues con su variedad en estufas, parrillas, hornos, tarjas, campanas y llaves, le darás esa personalidad que tu cocina necesita.', NULL, NULL),
	(5, 1, 'img/home/5.jpg', 'EL HIELO IDEAL EL LUJO DEFINITIVO', 'Cuando se trata de lujo, los detalles marcan la diferencia. Tu bebida favorita no es la excepción. La adición de un detalle, el hielo ideal, hace que una bebida se mantenga más fría y el sabor dure más tiempo. No importa qué bebida prefiera, una cosa puede mejorarla: el hielo Scotsman, el ingrediente ideal.', NULL, NULL);
/*!40000 ALTER TABLE `home_pages` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'HERO',
  `source` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'HOME',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.images: ~32 rows (aproximadamente)
DELETE FROM `images`;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `type`, `source`, `url`, `name`, `img_text`, `created_at`, `updated_at`) VALUES
	(1, 'HERO', 'HOME', 'img/home/', 'hero.jpg', '.', NULL, NULL),
	(2, 'MOBIL', 'HOME', 'img/home/', 'mobile.jpg', NULL, NULL, NULL),
	(3, 'HERO', 'SHOWROOM', 'img/showrooms/', 'hero.jpg', NULL, NULL, NULL),
	(4, 'MOBIL', 'SHOWROOM', 'img/showrooms/', 'mobile.jpg', NULL, NULL, NULL),
	(12, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'carrusel_12.jpg', NULL, '2020-03-18 12:54:18', '2020-03-18 12:57:27'),
	(14, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'carrusel_14.jpg', NULL, '2020-03-18 12:58:04', '2020-03-18 12:58:05'),
	(15, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'carrusel_15.jpg', NULL, '2020-03-18 12:58:05', '2020-03-18 12:58:05'),
	(16, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'carrusel_16.jpg', NULL, '2020-03-18 13:00:34', '2020-03-18 13:00:34'),
	(17, 'HERO', 'ABOUTUS', 'img/nosotros/', 'hero.jpg', NULL, NULL, '2020-03-19 15:15:16'),
	(18, 'MOBIL', 'ABOUTUS', 'img/nosotros/', 'mobile.jpg', NULL, NULL, '2020-03-19 15:16:06'),
	(19, 'HERO', 'CONTACT', 'img/', 'hero-contacto.jpg', NULL, NULL, NULL),
	(20, 'MOBIL', 'CONTACT', 'img/', 'ero-contacto-mobile.jpg', NULL, NULL, NULL),
	(21, 'HERO', 'FAQ', 'img/faq/', 'hero.jpg', NULL, NULL, NULL),
	(22, 'MOBIL', 'FAQ', 'img/faq/', 'mobile.jpg', NULL, NULL, '2020-03-20 11:07:49'),
	(23, 'HERO', 'SERVICES', 'img/servicios/', 'hero.jpg', '', '2020-03-23 09:16:27', '2020-03-23 09:16:55'),
	(24, 'MOBIL', 'SERVICES', 'img/servicios/', 'mobile.jpg', '', '2020-03-23 09:16:32', '2020-03-23 09:16:57'),
	(25, 'HERO', 'sub-zero', 'img/subzero/', 'hero.jpg', NULL, NULL, '2020-03-23 13:57:00'),
	(26, 'MOBIL', 'sub-zero', 'img/subzero/', 'mobile.jpg', NULL, NULL, '2020-03-23 13:56:58'),
	(27, 'HERO', 'wolf', 'img/wolf/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:30:43'),
	(28, 'MOBIL', 'wolf', 'img/wolf/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:30:46'),
	(29, 'HERO', 'cove', 'img/cove/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:31:49'),
	(30, 'MOBIL', 'cove', 'img/cove/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:31:52'),
	(31, 'HERO', 'asko', 'img/asko/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:34:01'),
	(32, 'MOBIL', 'asko', 'img/asko/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:32:33'),
	(33, 'HERO', 'dexa', 'img/dexa/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:34:06'),
	(34, 'MOBIL', 'dexa', 'img/dexa/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:33:28'),
	(35, 'HERO', 'dexa', 'img/dexa/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:34:06'),
	(36, 'MOBIL', 'dexa', 'img/dexa/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:33:28'),
	(37, 'HERO', 'scotsman', 'img/scotsman/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:35:20'),
	(38, 'MOBIL', 'scotsman', 'img/scotsman/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:35:23'),
	(39, 'HERO', 'cocina-exterior', 'img/exteriores/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:37:02'),
	(40, 'MOBIL', 'cocina-exterior', 'img/exteriores/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:37:06');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.migrations: ~15 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2019_04_15_191331679173_create_1555355612601_permissions_table', 1),
	(3, '2019_04_15_191331731390_create_1555355612581_roles_table', 1),
	(4, '2019_04_15_191331779537_create_1555355612782_users_table', 1),
	(5, '2019_04_15_191332603432_create_1555355612603_permission_role_pivot_table', 1),
	(6, '2019_04_15_191332791021_create_1555355612790_role_user_pivot_table', 1),
	(7, '2019_08_19_000000_create_failed_jobs_table', 1),
	(8, '2020_03_12_191742_create_heroes_table', 1),
	(9, '2020_03_12_192652_create_home_pages_table', 1),
	(10, '2020_03_12_213055_create_testimonies_table', 1),
	(11, '2020_03_17_020033_create_showrooms_table', 1),
	(12, '2020_03_17_020402_create_showroom_details_table', 1),
	(13, '2020_03_17_124219_create_brands_table', 1),
	(14, '2020_03_17_124330_create_brand_details_table', 1),
	(15, '2020_03_17_140152_create_headquarters_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.permissions: ~46 rows (aproximadamente)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'user_management_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(2, 'permission_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(3, 'permission_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(4, 'permission_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(5, 'permission_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(6, 'permission_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(7, 'role_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(8, 'role_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(9, 'role_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(10, 'role_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(11, 'role_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(12, 'user_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(13, 'user_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(14, 'user_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(15, 'user_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(16, 'user_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(17, 'product_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(18, 'product_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(19, 'product_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(20, 'product_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(21, 'product_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(22, 'tag_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(23, 'tag_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(24, 'tag_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(25, 'tag_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(26, 'tag_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(27, 'post_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(28, 'post_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(29, 'post_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(30, 'post_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(31, 'post_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(32, 'partner_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(33, 'partner_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(34, 'partner_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(35, 'partner_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(36, 'partner_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(37, 'service_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(38, 'service_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(39, 'service_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(40, 'service_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(41, 'service_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(42, 'contact_create', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(43, 'contact_edit', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(44, 'contact_show', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(45, 'contact_delete', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
	(46, 'contact_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.permission_role
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `role_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  KEY `permission_role_role_id_foreign` (`role_id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.permission_role: ~76 rows (aproximadamente)
DELETE FROM `permission_role`;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(1, 5),
	(1, 6),
	(1, 7),
	(1, 8),
	(1, 9),
	(1, 10),
	(1, 11),
	(1, 12),
	(1, 13),
	(1, 14),
	(1, 15),
	(1, 16),
	(1, 17),
	(1, 18),
	(1, 19),
	(1, 20),
	(1, 21),
	(1, 22),
	(1, 23),
	(1, 24),
	(1, 25),
	(1, 26),
	(1, 27),
	(1, 28),
	(1, 29),
	(1, 30),
	(1, 31),
	(1, 32),
	(1, 33),
	(1, 34),
	(1, 35),
	(1, 36),
	(1, 37),
	(1, 38),
	(1, 39),
	(1, 40),
	(1, 41),
	(1, 42),
	(1, 43),
	(1, 44),
	(1, 45),
	(1, 46),
	(2, 17),
	(2, 18),
	(2, 19),
	(2, 20),
	(2, 21),
	(2, 22),
	(2, 23),
	(2, 24),
	(2, 25),
	(2, 26),
	(2, 27),
	(2, 28),
	(2, 29),
	(2, 30),
	(2, 31),
	(2, 32),
	(2, 33),
	(2, 34),
	(2, 35),
	(2, 36),
	(2, 37),
	(2, 38),
	(2, 39),
	(2, 40),
	(2, 41),
	(2, 42),
	(2, 43),
	(2, 44),
	(2, 45),
	(2, 46);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.roles: ~2 rows (aproximadamente)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Admin', '2019-04-15 19:13:32', '2019-04-15 19:13:32', NULL),
	(2, 'User', '2019-04-15 19:13:32', '2019-04-15 19:13:32', NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.role_user
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  KEY `role_user_user_id_foreign` (`user_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.role_user: ~0 rows (aproximadamente)
DELETE FROM `role_user`;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.services
DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `imag_st` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_st` text COLLATE utf8mb4_unicode_ci,
  `telf_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telw_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `imag_cs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_cs` text COLLATE utf8mb4_unicode_ci,
  `telf_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telw_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.services: ~0 rows (aproximadamente)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `description`, `imag_st`, `title_st`, `description_st`, `telf_st`, `telw_st`, `email_st`, `title2`, `description2`, `imag_cs`, `title_cs`, `description_cs`, `telf_cs`, `telw_cs`, `email_cs`, `title3`, `description3`, `created_at`, `updated_at`) VALUES
	(1, 'RECIBA LA AYUDA DE EXPERTOS', '<p>Ya sea que desee programar una conexión, solicitar un servicio para sus electrodomésticos, tiene dudas de como preparar sus espacios para recibir sus nuevos equipos, o simplemente tiene preguntas acerca de los que ya tiene, tenemos los recursos que usted necesita. Hable directamente con un experto de servicio al cliente.</p>', 'img/servicios/servicio.jpg', 'CONCIERGE DE SERVICIO TÉCNICO', 'Obtenga respuestas en línea rápidamente; nuestro equipo está listo para atender todas sus dudas, ya sea que necesite la guía mecánica de algún electrodoméstico, agendar una conexión o servicio, saber sobre la garantía de su equipo o simplemente verificar que su taller sea uno de nuestros talleres autorizados por la fábrica.', '+52 (1) 800 400 IESA (4372)', '+52 (1) 811 803 6339', 'atencionalcliente@iesa.cc', 'EL SERVICIO QUE USTED Y SUS ELECTRODOMÉSTICOS MERECEN', 'Como especialistas en equipos sub-Zero, Wolf, Cove, Asko ,Dexa apreciamos y sabemos lo valioso de su tiempo por lo que hacemos lo posible para minimizar las interrupciones en su hogar y horario.', 'img/servicios/agenda.jpg', 'AGENDE UNA CITA DE SERVICIO', 'Nuestros técnicos cuidadosamente seleccionados y entrenados directamente en fábrica, cuentan con altos estándares de rendimiento en la realización de mantenimiento, diagnóstico y reparación de nuestros electrodomésticos.\r\nAgende su cita y viva la experiencia de un servicio de guantes blancos.', '+52 (1) 800 400 IESA (4372)', '+5218118036339', 'atencionalcliente@iesa.cc', 'CENTROS AUTORIZADOS DE SERVICIO', 'GRUPO IESA cuenta con una amplia red de Centros Autorizados de Servicio, en México y Latinoamérica.</p>\r\n                <p>Nuestro Concierge de Servicio puede brindarle los datos del CAS más cercano a usted. Contáctenos al<a class="cyan" href="tel:+528183894372"> +52 (1) (81) 8389 4372</a> , llamada sin costo dentro de la República Mexicana al <a class="cyan" href="tel:018004004372">+52 (1) 800 400 4372</a>, por WhatsApp al <a target="_blank" class="cyan" href="https://wa.me/528118036339">811.803.6339</a> o al correo electrónico <a class="cyan" href="mailto:atencionalcliente@iesa.cc"> atencionalcliente@iesa.cc</a> ', '2020-03-20 13:53:01', '2020-03-23 08:01:26');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.service_details
DROP TABLE IF EXISTS `service_details`;
CREATE TABLE IF NOT EXISTS `service_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.service_details: ~5 rows (aproximadamente)
DELETE FROM `service_details`;
/*!40000 ALTER TABLE `service_details` DISABLE KEYS */;
INSERT INTO `service_details` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'img/servicios/1.jpg', 'Servicio autorizado de Fábrica', '<p>Brindamos servicio y mantenimiento a las marcas Sub-Zero, Wolf, Cove,  Asko y Dexa  en toda la República Mexicana y Latinoamérica</p>\r\n                        <p>Sus electrodomésticos de lujo merecen un servicio de lujo. Usted  merece la atención  de los técnicos de Grupo IESA.</p>', NULL, '2020-03-23 08:01:26'),
	(2, 'img/servicios/2.jpg', 'Brindamos servicio de garantía', 'Comencemos con el beneficio obvio de elegir a nuestros técnicos autorizados:\r\n\r\nGrupo IESA es el proveedor de servicios certificados de fábrica que está capacitado exclusivamente para trabajar solo en las marcas Sub-Zero, Wolf, Cove, ASKO Y Dexa. Como resultado, brindamos un servicio experto para todas sus necesidades de garantía.', NULL, '2020-03-23 08:01:26'),
	(3, 'img/servicios/guantes.jpg', 'Garantizamos el servicio de guantes blancos', '<p>Como parte de nuestra misión de brindar atención al cliente acorde con los electrodomésticos de lujo que atendemos:<br>Nos esforzamos por llegar cuando está programado para que nuestros clientes no tengan que lidiar con frustrantes ventanas de servicio de tres horas como lo requieren otras compañías de servicios.</p>\r\n                        <p>Nuestros técnicos, equipados con cubre zapatos, esterillas, tapetes y bolsas de herramientas blandas, siempre tratan su hermosa casa con cuidado, limpiando después para no dejar rastro.</p>\r\n                        <p>\r\n                            Nuestros técnicos están capacitados para ser amigables y comunicativos, para que siempre sepa lo que sucede con sus electrodomésticos.\r\n                        </p>', NULL, '2020-03-23 08:01:26'),
	(4, 'img/servicios/capacitacion.jpg', 'Recibimos una amplia capacitación directamente de Sub-Zero', 'Estamos tan familiarizados con los equipos Sub-Zero, Wolf, Covey Asko que generalmente podemos diagnosticar un problema incluso antes de salir, asegurando que su problema se resuelva mucho más rápido.\r\n\r\nNo todos los problemas son mecánicos, por lo que utilizamos el software patentado Sub-Zero para ejecutar diagnósticos que revelan problemas ocultos.\r\n\r\nLos dispositivos integrados de Sub-Zero ofrecen un desafío único que nuestros técnicos capacitados pueden manejar con confianza y experiencia.', NULL, '2020-03-23 08:01:27'),
	(5, 'img/servicios/fabricante.jpg', 'Utilizamos sólo piezas del fabricante', 'Las piezas certificadas de fábrica están cubiertas por una garantía integral de reemplazo de un año y se garantiza que funcionarán mejor y durarán más.\r\n\r\nNuestro almacén está abastecido con un gran surtido de piezas para todos los electrodomésticos que manejamos.', NULL, '2020-03-23 08:01:27');
/*!40000 ALTER TABLE `service_details` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.showrooms
DROP TABLE IF EXISTS `showrooms`;
CREATE TABLE IF NOT EXISTS `showrooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.showrooms: ~2 rows (aproximadamente)
DELETE FROM `showrooms`;
/*!40000 ALTER TABLE `showrooms` DISABLE KEYS */;
INSERT INTO `showrooms` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'VISITE NUESTRO SHOWROOM', '<p>Un lugar para comenzar, experimentar y dar vida a la visión de su cocina.</p><p>Visitar nuestro showroom no es un día de compras ordinario, es una experiencia interactiva que le ayuda a visualizar las posibilidades de su futura cocina. En un ambiente sin presiones, puede descubrir cómo se va a sentir, ver y a qué va a saber su cocina - guiado por un cordial experto en equipos que se enfoca a atender sus necesidades.</p>', NULL, '2020-03-17 18:42:11'),
	(2, 'UN LUGAR PARA COMENZAR, EXPERIMENTAR Y DAR VIDA A LA VISIÓN DE SU COCINA', 'Esta no es una compra ordinaria. Es una experiencia inmersiva para ayudarlo a darse cuenta de las posibilidades de su futura cocina. En un entorno sin presión, puede descubrir cómo se siente, se ve y sabe su cocina, guiado por un experto asesor cuyo único objetivo es atender la visita a sus necesidades.', '2020-03-17 16:20:28', '2020-03-17 18:17:55');
/*!40000 ALTER TABLE `showrooms` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.showroom_details
DROP TABLE IF EXISTS `showroom_details`;
CREATE TABLE IF NOT EXISTS `showroom_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `showroom_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.showroom_details: ~10 rows (aproximadamente)
DELETE FROM `showroom_details`;
/*!40000 ALTER TABLE `showroom_details` DISABLE KEYS */;
INSERT INTO `showroom_details` (`id`, `showroom_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 1, 'CONSULTE A LOS EXPERTOS', 'Haga que nuestro equipo de expertos en productos, personal capacitado y chefs del showroom respondan a todas sus preguntas.', 'img/SHOWROOM_HOME1.jpg', NULL, NULL),
	(2, 1, 'HAGA UN TEST DRIVE', 'Gire las perillas. Abra los cajones. Encienda el quemador. Y traiga su delantal: siempre está invitado a cocinar en nuestras salas de exhibición para conocer nuestros electrodomésticos.', 'img/SHOWROOM_HOME2.jpg', NULL, NULL),
	(3, 1, '.', '.', 'img/SHOWROOM_HOME3.jpg', NULL, NULL),
	(4, 2, 'CONSULTE A LOS EXPERTOS', 'Haga que nuestro equipo de expertos en productos, personal capacitado y chefs del showroom respondan a todas sus preguntas.', 'img/showrooms/4.jpg', NULL, '2020-03-17 12:01:23'),
	(5, 2, 'HAGA UN TEST DRIVE', 'Gire las perillas. Abra los cajones. Encienda el quemador. Y traiga su delantal: siempre está invitado a cocinar en nuestras salas de exhibición para conocer nuestros electrodomésticos.', 'img/showrooms/test.jpg', NULL, '2020-03-17 12:00:53'),
	(6, 2, 'SABOREE CADA BOCADO', 'Disfrute de comidas hechas por nuestro chef y experimente todos los beneficios de nuestros equipos con deliciosas demostraciones de productos para apreciar verdaderamente nuestros electrodomésticos con suculentos platillos dulces y salados.', 'img/showrooms/sabor.jpg', NULL, '2020-03-17 12:00:53'),
	(7, 2, 'HAGA REALIDAD SUS SUEÑOS', 'Encuentre su estilo, vea la línea completa de productos y compare características en una inspiradora variedad de exhibiciones de cocina y hogar decoradas artísticamente.', 'img/showrooms/sueno.jpg', NULL, '2020-03-17 12:00:53'),
	(8, 2, 'SEA NUESTRO INVITADO', 'En nuestras salas de exhibición, no hay un vendedor a la vista, solo nuestro amable personal, listo para brindarle asesoría y orientación de expertos. Verdaderamente. Así que por favor, solo venga, conozca y disfrute.', 'img/showrooms/invitado.jpg', NULL, '2020-03-17 12:00:53'),
	(9, 2, 'ÚNETE A NUESTRA FAMILIA ', 'Su relación con la sala de exposición no termina después de instalar sus electrodomésticos. Puede esperar toda una vida de soporte y recursos útiles para ayudarlo a aprovechar al máximo sus nuevos dispositivos.', 'img/showrooms/familia.jpg', NULL, '2020-03-17 12:00:53'),
	(10, 0, 'COOKING DEMO', 'Experimente el alto rendimiento y los deliciosos resultados de los electrodomésticos en persona, y obtenga consejos confiables de los chefs que usan productos Sub-Zero, Wolf, Cove y Asko todos los días. Las demostraciones son solo una forma más de descubrir la cocina adecuada para usted.', 'img/showrooms/demo.jpg', NULL, '2020-03-19 06:28:59');
/*!40000 ALTER TABLE `showroom_details` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.testimonies
DROP TABLE IF EXISTS `testimonies`;
CREATE TABLE IF NOT EXISTS `testimonies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.testimonies: ~2 rows (aproximadamente)
DELETE FROM `testimonies`;
/*!40000 ALTER TABLE `testimonies` DISABLE KEYS */;
INSERT INTO `testimonies` (`id`, `active`, `image`, `name`, `text`, `created_at`, `updated_at`) VALUES
	(1, 1, 'img/testimonies/1.jpg', 'Ilse Ocampo', 'Visitar su showroom es una experiencia increíble, todos te atienden con mucha calidez desde que se abren las puertas del elevador, un excelente servicio al cliente, resuelven tus dudas y siempre están dispuestos a ayudar.\r\n                            <br>\r\n                            100% recomendado, las marcas se dan a relucir tienen los mejores estándares de calidad', '2020-03-17 15:15:11', '2020-03-17 15:15:12'),
	(2, 1, 'img/testimonies/2.jpg', 'Fernando Pacheco - Boa Lab', 'Llevo más de 10 años en contacto con IESA y sus trabajadores, me encuentro totalmente satisfecho con el trato que he recibido por parte de ellos, facilitan siempre la solución a cualquier problema que se presente y siempre lo hacen con una sonrisa y profesionalismo. Los recomiendo ampliamente, es una empresa en la que se puede confiar. Esto hablando de la empresa, si tocamos el de tema de las marcas que representan, no tengo más que decir que son', '2020-03-17 15:16:19', '2020-03-17 15:16:19');
/*!40000 ALTER TABLE `testimonies` ENABLE KEYS */;

-- Volcando estructura para tabla iesa.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blocked_date` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_user_name_unique` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla iesa.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `session_id`, `name`, `user_name`, `email`, `email_verified_at`, `last_login`, `ip`, `blocked_date`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'ciGte9U1AqYryQ4SBc07yUujJkZ7baX2kcKFRoin', 'Admin', 'Admin', 'admin@admin.com', NULL, '2020-03-24 16:16:08', '127.0.0.1', NULL, 1, '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO', NULL, '2019-04-15 19:13:32', '2020-03-24 16:16:08', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
