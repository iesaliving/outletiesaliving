-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2020 at 01:25 PM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lafamiliap_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imag_obj` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_obj` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_obj` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_d` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_d` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `imag_obj`, `title_obj`, `description_obj`, `title_d`, `description_d`, `created_at`, `updated_at`) VALUES
(1, 'SU FUTURA COCINA EMPIEZA AQUÍ', '<p>Un lugar para empezar, experimentar y hacer realidad su visión.&nbsp;<br>Este no es un día de compras normal.</p><p>Es una experiencia inmersiva para ayudarlo a visualizar las posibilidades de su futura cocina en una ambiente libre de presión donde usted puede descubrir cómo se va a sentir, ver y hasta como va a saber su futura cocina - guiado(a) por un consultor experto cuyo enfoque es amoldar la visita a sus necesidades.</p>', 'img/nosotros/objetivo.jpg', 'NUESTRO OBJETIVO', '<p>Un lugar para empezar, experimentar y hacer realidad su visión. <br>Este no es un día de compras normal.</p>\r\n                        <p>Es una experiencia inmersiva para ayudarlo a visualizar las posibilidades de su futura cocina en una ambiente libre de presión donde usted puede descubrir cómo se va a sentir, ver y hasta como va a saber su futura cocina - guiado(a) por un consultor experto cuyo enfoque es amoldar la visita a sus necesidades.</p>', '¿TE GUSTARÍA FORMAR PARTE DE NUESTRO EQUIPO DE TRABAJO?', '<p>Piensa en lo emocionante que sería trabajar para una compañía dedicada a vender los mejores enseres de lujo del mundo, mejorando la vida en la cocina para miles de clientes. Somos una empresa impulsada por la innovación y la integridad, que se esfuerza por ser el mejor y brindar el mejor ambiente de trabajo. Si quieres trabajar con un líder, has llegado al lugar correcto. Envíanos tu curriculum a: <a href=\"mailto:cflores@iesa.cc\">cflores@iesa.cc</a> adjuntando en el subject el puesto de tu interés.</p>', NULL, '2020-04-07 19:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_txt` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_network` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_txt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `active`, `name`, `slug`, `logo`, `logo_txt`, `intro`, `social_network`, `social_img`, `social_txt`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sub-Zero', 'sub-zero', 'img/subzero/sub-zero.png', '<h2>EL ESPECIALISTA</h2><h2>EN<i><strong>CONSERVACIÓN</strong></i></h2>', '<p>Mientras Sub-Zero exista, los alimentos resistirán el paso del tiempo, lo mismo que la belleza y el rendimiento de su cocina. Construido y probado con los más altos estándares, Sub-Zero es algo más que sólo un refrigerador. Se trata de un sistema de conservación de los alimentos, con más de 70 años de pensamiento innovador que lo avalan. Mientras exista Sub-Zero, la comida tendrá un delicioso futuro.</p>', 'https://www.facebook.com/subzerowolf/', 'img/sub-zero/facebook.jpg', 'SUB-ZERO WOLF MÉXICO Y LATINOAMERICA', NULL, '2020-04-08 16:14:25'),
(3, 1, 'Wolf', 'wolf', 'img/wolf/logo.png', '<h2>EL ESPECIALISTA</h2><h2>EN <i><strong>COCCIÓN</strong></i></h2>', '<p>Disfrute toda una vida cocinando con más emoción y satisfacción. Wolf destila una legendaria herencia profesional, potencia y clase en equipo de cocina, cuyo control preciso garantiza que el plato que tiene en mente, sea el plato que llegue a la mesa.</p>', 'https://www.facebook.com/subzerowolf/', 'img/wolf/facebook.jpg', 'SUB-ZERO WOLF MÉXICO Y LATINOAMÉRICA', NULL, '2020-04-08 16:14:13'),
(4, 1, 'cove', 'cove', 'img/cove/logo.png', '<h2>LA ÚNICA</h2><h2>LAVAVAJILLAS CON</h2><h2><i><strong>SUBZERO Y WOLF</strong></i></h2><h2>EN SU <i><strong>ADN&nbsp;</strong></i></h2>', '<p>Las lavavajillas Cove proviene de los pioneros en conservación de alimentos Sub-Zero y cocción a precisión Wolf. Los electrodomésticos Cove están diseñados para adaptarse a los platos que más limpia – con ciclos que garantizan resultados impecables y un funcionamiento silencioso. Diseñado cuidadosamente con interiores ajustables, acabados exteriores personalizables y la mejor garantía y servicio disponibles. Cove es simplemente una forma más inteligente de lavar.</p>', 'https://www.facebook.com/subzerowolf/', 'img/cove/facebook.jpg', NULL, NULL, '2020-04-08 16:40:42'),
(5, 1, 'Asko', 'asko', 'img/asko/logo.png', '<h2>INSPIRADO EN</h2><h2><i><strong>ESCANDINAVIA</strong></i></h2>', '<p>Electrodomésticos escandinavos ASKO; productos durables y de máxima calidad con soluciones innovadoras respetuosas con el medio ambiente y el uso económico de los recursos como agua y energía.</p>', 'https://es-la.facebook.com/ASKO.MX.LATAM/', 'img/asko/facebook.jpg', 'ASKO MÉXICO Y LATINOAMERICA', NULL, '2020-04-14 18:29:39'),
(6, 1, 'Dexa', 'dexa', 'img/dexa/logo.png', '<h2>DEXA NON É</h2><h2>NORMALE...<i><strong>COME TE!</strong></i></h2><p>DISEÑOS Y ELEMENTOS QUE EXPRESAN&nbsp;<br>UNA PERSONALIDAD DIFERENTE</p>', '<h4>CREAMOS LO EXTRAORDINARIO</h4><p>&nbsp;Lo mejor de Italia en tu cocina.</p><p>Una marca propia de IESA, cuenta con productos de calidad con diseño italiano. Una Marca joven, audaz y divertida, aquí creamos nuestras experiencias rompiendo las reglas y reinventando lo cotidiano</p>', 'https://www.facebook.com/DEXA.MX/', 'img/dexa/facebook.jpg', 'DEXA', NULL, '2020-04-08 16:13:37'),
(7, 1, 'Scotsman', 'scotsman', 'img/scotsman/logo.png', '<h2>EL HIELO IDEAL</h2><h2><i><strong>EL LUJO DEFINITIVO&nbsp;</strong></i></h2>', '<p>Cuando se trata de lujo, los detalles marcan la diferencia. Tu bebida favorita no es la excepción. La adición de el hielo ideal, hace que una bebida se mantenga más fría y el sabor dure y dure. No importa qué bebida prefiera, una cosa puede mejorarla: el hielo Scotsman, el ingrediente ideal.</p>', NULL, NULL, NULL, NULL, '2020-04-08 16:42:46'),
(8, 1, 'Cocina exterior', 'cocina-exterior', 'img/subzero/sub-zero.png', '<h2>COCINA <i><strong>EXTERIOR</strong></i></h2>', '<p>Todo sabe mejor al aire libre. Sin embargo, el control del calor en la mayoría de los asadores puede convertir el cocinar en exteriores en una tarea imprecisa. Los asadores Wolf cambiar todo eso. Le dan el mismo tipo de control de precisión y facilidad de uso que sus contrapartes de interiores, las estufas, hornos y parrillas Wolf. Imagínese las jugosas posibilidades.</p>', 'https://www.facebook.com/subzerowolf/', 'img/exteriores/facebook.jpg', 'SUB-ZERO WOLF MÉXICO Y LATINOAMERICA', NULL, '2020-04-08 16:12:15'),
(9, 1, 'Plum wine', 'plum-wine', 'img/plum-wine/logo.png', '<h2>UNA COPA DE VINO</h2><h2>EN EL<i><strong> MOMENTO</strong></i></h2><h2><i><strong>PERFECTO</strong></i></h2>', '<p>Plum es el primer electrodoméstico totalmente automático que conserva y enfría perfectamente el vino para que puedas disfrutarlo una copa a la vez.**</p>', 'https://www.facebook.com/PlumAppliance/', 'img/plum-wine/facebook.jpg', 'PLUM WINE', '2020-03-31 08:29:12', '2020-04-08 16:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `brand_details`
--

CREATE TABLE `brand_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_details`
--

INSERT INTO `brand_details` (`id`, `active`, `brand_id`, `image`, `title`, `url_cat`, `description`, `features`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'img/subzero/subzero1.jpg', 'REFRIGERACIÓN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_REFRIGERACION_Download.htm', '<p>Desde hace casi 70 años, nada ha mantenido los alimentos más frescos durante más tiempo que un refrigerador Sub-Zero. Elija refrigeradores empotrados con el aspecto clásico del acero inoxidable o terminados en paneles personalizados. Las unidades integradas se funden con la decoración. También tenemos el poderoso PRO 48 - una pieza central imponente para cualquier cocina.</p>', 0, NULL, '2020-04-07 19:33:12'),
(2, 1, 1, 'img/subzero/subzero2.jpg', 'REFRIGERACIÓN BAJO CUBIERTA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_SUB-ZERO_REFRI_BAJO_CUBIERTA.htm', '<p>Productos frescos en la isla de la cocina, bebidas frías en el gimnasio y hielo en abundancia cerca de la piscina. La refrigeración Sub-Zero está en todos lados. Ya sea que elija cajones integrados, centros de bebidas, refrigeradores bajo cubierta o máquinas de hielo, nuestras unidades encajan a la perfección, sin interrumpir el flujo de su casa y la forma en que vive.</p>', 0, NULL, '2020-04-07 19:33:12'),
(3, 1, 1, 'img/subzero/subzero3.jpg', 'CONSERVADORES DE VINO', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Sub-Zero_CONSERVADORES_DE_VINO.htm', '<p>Un mejor almacenamiento de la botella significa disfrutarlo más en la copa. Las unidades de conservación de vino Sub-Zero actúan no sólo como refrigeradores, sino como guardianes contra el calor, la humedad, la vibración y la luz, los cuatro enemigos que pueden robar al vino su complejidad y carácter. Disponible en tres grosores, de 18” 24” 30”, con 46 a 147 botellas de capacidad, que le permiten llevar los placeres del vino a cualquier habitación de la casa</p>', 0, NULL, '2020-04-07 19:33:12'),
(4, 1, 3, 'img/wolf/estufas.jpg', 'ESTUFAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Wolf_Estufas.htm', '<p>De a su cocina una pieza icónica central. Las estufas de gas y estufas duales de Wolf han sido la elección de los profesionales durante ocho décadas y ahora son los preferidos de los más exigentes cocineros del hogar. Los quemadores duales sellados y apilados ofrecen emocionante precisión y rendimiento, mientras que el horno de convección proporciona calor constante para asar, y hornear de manera perfecta.</p>', 0, NULL, '2020-04-07 19:37:25'),
(5, 1, 3, 'img/wolf/horno_empotrado.jpg', 'HORNOS EMPOTRABLES', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__WOLF_HORNOS_EMPOTRABLES.htm', '<p>Hornee, rostice y ase con la confianza de los hornos empotrados Wolf. Los hornos de convección Wolf, o los hornos combinados con convección y vapor, ofrecen controles intuitivos y temperaturas constantes para garantizar que cada comida sea previsiblemente notable.</p>', 0, NULL, '2020-04-07 19:37:25'),
(6, 1, 3, 'img/wolf/6-202004080516.jpg', 'PARRILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_PARRILLAS.htm', '<p>Independientemente del método de cocción que prefiera (gas, electricidad o inducción), hay una parrilla Wolf elegante, aerodinámica y bien diseñada para usted. Tenga la seguridad de que cada uno ofrece el control de temperatura de precisión y el rendimiento comprobado que espera de Wolf.</p>', 0, NULL, '2020-04-08 10:16:01'),
(7, 1, 3, 'img/wolf/microondas.jpg', 'MICROONDAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_MICROONDAS.htm', '<p>Un microondas Wolf es un verdadero instrumento de cocción, uno que está diseñado para hacer mucho más que recalentar las sobras. De hecho, los diseños innovadores de hoy pueden llevar a la preparación de comidas completas. Equipe su cocina con una de la extensa selección de microondas de Wolf (incluidos los modelos de convección), con cajones, puertas abatibles y modelos de giro lateral disponibles</p>', 0, NULL, '2020-04-07 19:37:25'),
(8, 1, 3, 'img/wolf/horno_convecion_vapor.jpg', 'HORNOS DE CONVECCIÓN Y VAPOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_HORNOS_DE_CONVECCION_VAPOR.htm', '<p>Cocinar con vapor tiene infinitos beneficios. Diseñados con un sensor de clima, los hornos de vapor de convección Wolf garantizan resultados sabrosos que siempre están libres de conjeturas. Disponible en anchos de 24 “y 30”.</p>', 0, NULL, '2020-04-07 19:37:25'),
(9, 1, 3, 'img/wolf/speed_oven.jpg', 'SPEED OVEN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_SPEED_OVEN.htm', '<p>El rendimiento que espera de los hornos Wolf, solo que más rápido y más pequeño. Combina la potencia del microondas con las capacidades de convección y asado en un dispositivo fácil de usar. Ofrece versatilidad de horno todo en uno, preparando una amplia variedad de alimentos en un tiempo reducido. Disponible en anchos de 24 “y 30”</p>', 0, NULL, '2020-04-07 19:37:25'),
(10, 1, 3, 'img/wolf/modulos.jpg', 'MÓDULOS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_MODULOS.htm', '<p>Personalice su cocina con módulos de cocina que se adaptan a su estilo de cocina único. Los módulos Wolf significan flexibilidad de diseño modular, en otras palabras, la opción de incorporar de manera perfecta y hermosa herramientas como vaporera, parrillas y freidoras en su hogar entre otros.</p>', 0, NULL, '2020-04-07 19:37:25'),
(11, 1, 3, 'img/wolf/ventilacion.jpg', 'VENTILACIÓN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_VENTILACION.htm', '<p>Con potentes motores de varias velocidades para eliminar el humo y los olores, junto con iluminación halógena para iluminar con elegancia las áreas de cocción, Wolf ventilación ofrece una amplia gama de opciones útiles y atractivas diseñadas para mejorar cualquier diseño de cocina.</p>', 0, NULL, '2020-04-07 19:37:25'),
(12, 1, 3, 'img/wolf/calentadores.jpg', 'CAJONES CALENTADORES*', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_CAJONES_CALENTADORES.htm', '<p>Sirva cada plato a su temperatura adecuada con los cajones calentadores de Wolf. Diseñados para preservar la temperatura y la calidad de los alimentos sin comprometer el sabor o la consistencia, los cajones calefactores Wolf garantizan resultados deliciosos para sus invitados, sin importar cuándo lleguen a su mesa.</p>', 0, NULL, '2020-04-07 19:37:25'),
(13, 1, 3, 'img/wolf/sellado_vacio.jpg', 'CAJÓN DE SELLADO AL VACÍO', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_CAJON_DE_SELLADO_AL_ACÍO.htm', '<p>Los cajones de sellado al vacío Wolf eliminan el aire y sellan los alimentos o líquidos para un fácil almacenamiento, marinado y cocción. Disfruta de una mirada de nuevas posibilidades creativas de cocina, incluidos los resultados consistentemente deliciosos de preparaciones sous vide, con Wolf.</p>', 0, NULL, '2020-04-07 19:37:25'),
(14, 1, 3, 'img/wolf/cafetera.jpg', 'CAFETERAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_CAFETERAS.htm', '<p>Con la cafetera Wolf, haga café de calidad profesional, espresso, cappuccino, latte y más precisamente a su gusto, con granos de café reales, al toque de un botón. Instálelo en cualquier lugar en su hogar u oficina-pues no se requiere ninguna plomería.</p>', 0, NULL, '2020-04-07 19:37:25'),
(15, 1, 3, 'img/wolf/wolf_gourmet.jpg', 'WOLF GOURMET', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_WOLF_WOLF_GOURMET.htm', '<p>Los electrodomésticos Wolf Gourmet se fabrican con la gran atención a los detalles que usted espera de la marca Wolf. Creemos que el gusto por cocinar no comienza con la finalización de la comida, sino con su preparación. Disfrute cada paso del proceso usando nuestros electrodomésticos de alto rendimiento diseñados para soportar los rigores de cualquier cocina.</p>', 0, NULL, '2020-04-07 19:37:25'),
(16, 1, 4, 'img/cove/vajilla.jpg', 'UNA FORMA MÁS INTELIGENTE DE LAVAR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Cove_Download.htm', '¿Una mejor manera de lavar? Desde interiores completamente flexibles hasta un funcionamiento casi silencioso, Cove fue rediseñado, desde cero, para garantizar platos limpios y secos impecables con cada carga, en todo momento.', 0, NULL, '2020-04-07 19:41:14'),
(17, 1, 4, 'img/cove/limpie.png', 'LIMPIE CON CONFIANZA', NULL, 'Con aspersores de agua colocados estratégicamente en todo el lavavajillas, los platos se vuelven más limpios. No es necesario lavar previamente, volver a lavar ni quitar las manchas.', 1, NULL, '2020-04-07 19:41:14'),
(18, 1, 4, 'img/cove/personalice.png', 'PERSONALICE SU LIMPIEZA', NULL, 'Los modos de lavado y secado pre-programados y personalizados y tres brazos rociadores separados limpian expertamente cada plato, desde porcelana fina hasta sartenes de alta resistencia.', 1, NULL, '2020-04-07 19:41:14'),
(19, 1, 4, 'img/cove/19-202004071059.png', 'LIMPIEZA EN SILENCIO', NULL, 'Una operación casi silenciosa permite que la conversación de la cena siga fluyendo mientras se limpian los platos.', 1, NULL, '2020-04-07 19:41:14'),
(20, 1, 4, 'img/cove/ajuste.png', 'SE AJUSTA A CUALQUIER (Y CADA) PLATO', NULL, 'Con alturas y dientes ajustables, y dos opciones para limpiar los cubiertos (tanto la rejilla como la canasta), no hay utensilios, herramientas o sartenes que Cove no pueda conquistar.', 1, NULL, '2020-04-07 19:41:14'),
(21, 1, 4, 'img/cove/asegura.png', 'ASEGURA DÉCADAS DE FIABILIDAD', NULL, 'Los electrodomésticos Cove se someten a rigurosas pruebas de resistencia para que funcionen durante más de veinte años de uso diario y están respaldados por la garantía más sólida de la industria.', 1, NULL, '2020-04-07 19:41:14'),
(22, 1, 5, 'img/asko/asko_hornos.jpg', 'HORNOS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_HORNOS.htm', '<p>Los hornos de ASKO vienen con una filosofía de interacción única basada en una pantalla táctil TFT con las funciones de uso más frecuente accesibles de inmediato. La interfaz es fácil de usar y lo alentará a explorar todas las características y funciones de su horno.</p><p>Si es principiante en su cocina, seleccione cualquiera de los programas automáticos de su horno ASKO. Simplemente seleccione un plato de una lista de platillos preprogramados y la intensidad si es necesario. La interfaz está repleta de información útil que lo alienta a explorar la funcionalidad completa del horno.</p>', 0, NULL, '2020-04-07 19:44:06'),
(23, 1, 5, 'img/asko/asko_parrillas.jpg', 'PARRILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_PARRILLAS.htm', '<p>¿Gas o inducción? Una difícil elección para muchos entusiastas de la cocina. No importa lo que elija, con una parrilla de inducción ASKO en la cocina tendrá un control perfecto del calor. Las parrillas de gas cuentan con el exclusivo quemador Wok Volcano con una llama altamente concentrada y un soporte estable para la sartén wok; las parrillas de inducción están equipadas con zonas Bridge Induction™ que permiten combinar sartenes de diferentes tamaños. Elija lo que quiera, pero debe ser un equipo ASKO.</p>', 0, NULL, '2020-04-07 19:44:06'),
(24, 1, 5, 'img/asko/asko_campanas.jpg', 'CAMPANAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_CAMPANAS.htm', '<p>El Sistema Air Logic™garantiza que toda la superficie de la campana se utilice para la extracción de humos. Esto es posible gracias al uso exclusivo de su patrón de orificios cerca del motor y orificios más grandes en los bordes exteriores, lo que hace que la cubierta sea extremadamente eficiente también en configuraciones más bajas. Así tanto silencioso como eficiente.</p>', 0, NULL, '2020-04-07 19:44:06'),
(25, 1, 5, 'img/asko/asko_cafetera.jpg', 'CAFETERA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_CAFETERA.htm', '<p>Con una filosofía única de interacción y control basada en una interfaz TFT touch, tiene todas las posibilidades para preparar su café de manera perfecta, justo como usted lo desea. La interfaz cuenta con programas, opciones y configuraciones diferentes. Por ejemplo, tamaño de bebida personalizable, selección de idioma, enjuague automático, ajuste de agua caliente y programa de descalcificación. Todos sus componentes son desmontables y fáciles de limpiar</p>', 0, NULL, '2020-04-07 19:44:06'),
(26, 1, 5, 'img/asko/asko_cajon.jpg', 'CAJÓN CALENTADOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__ASKO_CAJON_CALENTADOR.htm', '<p>Utilice el cajón calentador para mantener la comida caliente, para calentar platos y tazas o simplemente para guardar las cosas.</p>', 0, NULL, '2020-04-07 19:44:06'),
(27, 1, 5, 'img/asko/asko_congelador.jpg', 'REFRIGERADOR / CONGELADOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__ASKO_REFRIGERADOR.htm', '<p>Simplemente enfriar los alimentos frescos no es suficiente para conservarlos durante mucho tiempo. Varios alimentos frescos requieren diferentes temperaturas, niveles de humedad e incluso luz. También pensamos que debería ser fácil para usted colocar sus alimentos frescos y luego encontrarlos, antes de que se vuelvan demasiado viejos.</p>', 0, NULL, '2020-04-07 19:44:06'),
(28, 1, 5, 'img/asko/asko_lavavajillas.jpg', 'LAVAVAJILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_LAVAVAJILLAS.htm', '<p>Las lavavajillas ASKO están hechas de acero. Este ha sido un hecho bien conocido durante décadas y cuando abra la puerta, verá más acero que en cualquier otro lavavajillas del mercado. Con nuestra nueva generación de lavavajillas queremos enfatizar este hecho aún más. Eche un vistazo a la puerta y verá solo acero de alta calidad sin división entre la puerta y el panel. Se expresa a sí misma como un electrodoméstico confiable y robusta, que conserva líneas elegantes y sofisticadas derivadas del minimalismo y la mentalidad escandinava</p>', 0, NULL, '2020-04-07 19:44:06'),
(29, 1, 5, 'img/asko/asko_lavadora.jpg', 'LAVADORA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_LAVADORA.htm', '<p>Esta lavadora blanca de nuestra gama Logic con detalles en acero inoxidable presenta nuestra exclusiva Quattro Construction ™. Cuatro amortiguadores transfieren vibraciones a la placa inferior, haciendo que la lavadora esté prácticamente libre de vibraciones, incluso a velocidades de centrifugado de 1400 rpm. 21 programas cuidadosamente diseñados y 5 modos de funcionamiento significan que siempre hay una configuración que se adapta solo a sus necesidades de lavado.</p>', 0, NULL, '2020-04-07 19:44:06'),
(30, 1, 5, 'img/asko/asko_secadora.jpg', 'SECADORA', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_ASKO_SECADORA.htm', '<p>Esta secadora blanca de nuestra gama Logic presenta Butterfly Drying ™ que minimiza las arrugas de su ropa al permitir que el aire circule uniformemente a través de la ropa. 13 programas y varias opciones lo ayudarán a secar su ropa de manera efectiva en todo momento. El motor sin escobillas es confiable y silencioso con sus 65 dB (A).</p>', 0, NULL, '2020-04-07 19:44:06'),
(31, 1, 6, 'img/dexa/estufas.jpg', 'ESTUFAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_ESTUFAS.htm', '<p>Las estufas DEXA te ofrecen un gran diseño y personalidad tomadas de la mano con un sistema de cocción y seguridad.</p>', 0, NULL, '2020-04-07 19:45:58'),
(32, 1, 6, 'img/dexa/parrillas.jpg', 'PARRILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_PARRILLAS.htm', '<p>Las parrillas de DEXA cuentan con materiales de alta calidad y con una variedad de tamaños, también cuentan con diferentes niveles de cocción y con un gran diseño italiano.</p>', 0, NULL, '2020-04-07 19:45:58'),
(33, 1, 6, 'img/dexa/hornos.jpg', 'HORNOS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo__Dexa__HORNOS.htm', '<p>La gama de hornos DEXA ofrece una gran cantidad de prestaciones, sin prescindir de un diseño moderno en todos sus modelos. Sus características brindan seguridad, precisión y facilidad de uso. Para cocinar sus platillos favoritos, con resultados asombrosos.</p>', 0, NULL, '2020-04-07 19:45:58'),
(34, 1, 6, 'img/dexa/campanas.jpg', 'CAMPANAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_CAMPANAS.htm', '<p>Las campanas DEXA están dotadas con una gran capacidad de extracción y algunos modelos con re-circulación del aire. Proporcionando ambientes confortables en tu cocina, evitando olores.</p>', 0, NULL, '2020-04-07 19:45:58'),
(35, 1, 6, 'img/dexa/lavavajillas.jpg', 'LAVAVAJILLAS', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_LAVAVAJILLAS.htm', '<p>¡Con la lavavajillas DEXA no tendrás más platos sucios! Contamos con tres modelos que facilitarán tu vida y las labores domésticas.</p>', 0, NULL, '2020-04-07 19:45:58'),
(36, 1, 6, 'img/dexa/llaves.jpg', 'TARJAS Y LLAVES', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Dexa_TARJAS_LLAVES.htm', '<p>DEXA ofrece una variada selección de llaves y tarjas para cocina cuidadosamente diseñadas para brindar la mejor combinación posible entre estilo, calidad y precio</p>', 0, NULL, '2020-04-07 19:45:58'),
(37, 1, 7, 'img/scotsman/hielo.jpg', 'MÁQUINAS DE HIELO', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Scotsman_Download.htm', '<p>El hielo debería mejorar el sabor de las bebidas, no diluirlo. Las máquinas de hielo Scotsman producen hielo que no cambia ni reduce los sabores, contrario a lo que hace el hielo de un refrigerador regular.</p>', 0, NULL, '2020-04-07 19:47:15'),
(38, 1, 7, 'img/scotsman/38-202004081143.png', 'HIELO GOURMET*', NULL, '<ul><li>Forma: Pequeño vaso tipo \"shot\"</li><li>Ideal para: Bebidas y bebidas tipo gourmet</li><li>Ventajas:</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -Se derrite lentamente</p><p>-Ideal para la casa</p><p>-Hielo duro en forma única</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-No tiene sabor ni olor</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -No diluye el sabor de las bebidas</p>', 1, NULL, '2020-04-08 16:43:19'),
(39, 1, 7, 'img/scotsman/hielo-nugget.png', 'HIELO NUGGET', NULL, '<ul><li>Forma: Pequeño cilindro</li><li>Ideal para: Bebidas de sabores / carbonatadas</li><li>Ventajas:</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-Se derrite lentamente</p><p>&nbsp; &nbsp; &nbsp; -Enfría las bebidas más rápido</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-Hielo Suave y masticable</p><p>&nbsp; &nbsp; &nbsp; &nbsp;-Absorbe el sabor de la bebida</p>', 1, NULL, '2020-04-07 19:47:15'),
(40, 1, 8, 'img/exteriores/asadores.jpg', 'ASADORES', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_COCINA_EXTERIOR_ASADORES.htm', '<p>Con funciones fáciles de usar. Controles de temperatura de precisión. Y resultados jugosos, y tiernos, los asadores para exterior de Wolf son fabricados en acero inoxidable y soldados con precisión para que no se oxiden o guarden agua. Cada uno de los cuatro modelos de asadores vienen en gas natural o LP, y se puede integrar a su espacio al aire libre.<br><br>Encuentre carritos opcionales disponibles para los modelos de 30\", 36\" y 42\"</p>', 0, NULL, '2020-04-07 19:48:29'),
(41, 1, 8, 'img/exteriores/refrigeracion.jpg', 'REFRIGERACIÓN', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_COCINA_EXTERIOR_REFRIGERACION.htm', '<p>Nuestros productos para el exterior - entre ellos un refrigerador bajo cubierta de 24” y una máquina de hielos de 15” - están diseñados para temperaturas arriba de 110°F (43 °C) y revestidos con acero inoxidable de alto calibre que soporta el tipo de elementos que corroen materiales menos resistentes.</p>', 0, NULL, '2020-04-07 19:48:29'),
(42, 1, 8, 'img/exteriores/calentadores.jpg', 'CAJÓN CALENTADOR', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_COCINA_EXTERIOR_CAJON_CALENTADOR.htm', '<p>Con el cajón calentador para exterior de Wolf , los platillos que termine en diferentes momentos se mantienen calientes, húmedos y listos para ser servidos a la hora que desee. ¿Se toma el fin de semana para no cocinar? Use el cajón para mantener las toallas calientes en la piscina.</p>', 0, NULL, '2020-04-07 19:48:29'),
(43, 1, 9, 'img/plum-wine/relajese.jpg', 'Relájese con una copa de vino al final del día', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm', 'Después de un largo día, disfrute de una copa de vino blanco o tinto sin desperdiciar ni una gota. Plum le permite poner dos botellas y servirse tanto como usted desee.', 0, NULL, '2020-04-07 19:50:11'),
(44, 1, 9, 'img/plum-wine/44-202003311125.jpg', 'La temperatura importa', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm', 'Usted no aceptaría una taza de café tibia o un filete frío. El vino sabe mejor cuando está en la temperatura correcta. Plum maximiza el sabor de su vino al servirlo a la temperatura ideal.', 0, NULL, '2020-04-07 19:50:11'),
(45, 1, 9, 'img/plum-wine/pausa.jpg', 'Una pausa en el tiempo, su botella de vino esperará su regreso', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm', 'Ya sea que esté viajando por trabajo o solo por el fin de semana, disfrute de la copa perfecta antes de partir y disfrute del resto de la botella cuando regrese.', 0, NULL, '2020-04-07 19:50:11'),
(46, 1, 9, 'img/plum-wine/botella.jpg', 'Usted merece esa<br>botella \"especial\"', 'https://app3.salesmanago.pl/mscf/o28qhomp7m09zozm/default/Catalogo_Plum_Wine_Download.htm', 'Todos tenemos botellas esperando por una ocasión especial que nunca llega. Con Plum, usted podrá disfrutar ese atesorado Bordeaux durante algunos días o incluso semanas.', 0, NULL, '2020-04-07 19:50:11'),
(47, 1, 9, 'img/plum-wine/47-202003311124.png', '...', '', 'Agujas motorizadas automáticamente perforan la tapa o corcho, preservando su vino con gas Argón. Un recipiente de argón recargable integrado conserva hasta 150 botellas.', 1, NULL, '2020-04-07 19:50:11'),
(48, 1, 9, 'img/plum-wine/botella.png', '...', '', 'Plum trabaja con cualquier botella estándar de 750ml, de cualquier tipo de tapa o corcho, incluyendo corcho natural, corcho artificial o tapones de metal.', 1, NULL, '2020-04-07 19:50:11'),
(49, 1, 9, 'img/plum-wine/descorche.png', '...', '', 'Las dos cámaras de enfriamiento de Plum están configuradas automáticamente para servir cada variedad de vino a la temperatura perfecta, por lo que puede tener Chardonnay a 10 grados y un Cabernet a 18 grados sin ningún problema.', 1, NULL, '2020-04-07 19:50:11'),
(50, 1, 9, 'img/plum-wine/botellas.png', '...', '', 'Plum automáticamente identifica el año de producción, la variedad, la región, el lagar y el vino, creando una conexión directa con el arte de degustar sin salir de su hogar.', 1, NULL, '2020-04-07 19:50:11'),
(51, 1, 9, 'img/plum-wine/tactil.png', '...', '', 'La pantalla táctil de 7 pulgadas a full color de Plum se enciende cuando usted se acerca, mostrándole los diferentes vinos y permitiéndole servirse una copa o solo degustar el vino.', 1, NULL, '2020-04-07 19:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'img/hero-contacto.jpg', 'YA SEA QUE ESTÉ COMPRANDO ELECTRODOMÉSTICOS O TENGA PREGUNTAS SOBRE AQUELLOS QUE YA POSEE', '<p>Nuestro equipo de Atención al cliente tiene una reputación de servicio tan excepcional como nuestros productos</p>', '2020-03-19 14:00:14', '2020-04-07 19:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `image`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'img/faq/marketing.png', 'Marketing', 'marketing', '<h5 style=\"margin-top:35px\">¿Cómo solicito un catálogo?</h5>\r\n                <p>DIGITAL: Puede solicitar un catálogo digital al correo electrónico <b>marketing@iesa.cc</b></p>\r\n                <p>IMPRESO: Durante la visita a nuestros showrooms o a un Distribuidor Autorizado IESA puede solicitar un catálogo impreso.</p>', NULL, NULL),
(2, 'img/faq/servicio.png', 'CONCIERGE DE SERVICIO', 'servicio', '<p><strong>¿Cuánto tiempo de garantía tienen los equipos?</strong></p><p>Todas las marcas del GRUPO IESA tienen 2 años de garantía completa (partes y mano de obra). Sub-Zero, Wolf y Cove extiende la garantía en algunos componentes hasta 5 años.</p><p><strong>¿Quién hace la conexión de los equipos?</strong></p><p>Recomendamos que la conexión de los equipos la haga uno de nuestros Centros Autorizados de Servicio (CAS) que han sido certificados por la fábrica.</p><p><strong>¿Cómo hago válida mi garantía?</strong></p><p>Para activar la garantía de su equipo, existen las siguientes opciones:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul><p><strong>¿Qué incluye la conexión de mis equipos?</strong></p><p>La conexión de sus equipos incluye dos visitas; La primera es para hacer una inspección del espacio donde van a ser instalados los equipos y verificar que cumpla con la guía mecánica del fabricante. La segunda para la conexión de los equipos.</p><p>Es importante asegurarse que el espacio esté preparado para recibir a los equipos de acuerdo a las especificaciones de las guías mecánicas de cada modelo. Las guías mecánicas de sus equipos pueden conseguirse en el website, ser solicitadas con quien compró sus equipos o al concierge de servicio. Los equipos Sub-Zero incluyen sin costo adicional un kit de instalación que consiste de uno o más de los siguientes elementos: regulador de voltaje, mangueras conectoras y/o válvulas.</p><p><strong>¿La conexión de mis equipos incluye el traslado del técnico?</strong></p><p>No se genera cargo de traslado del personal de servicio en las capitales de los estados, así como en destinos turísticos importantes (Los Cabos, Puerto Vallarta y Cancún) dentro de México. En las capitales de los países en el resto de América Latina tampoco se genera cargos adicionales.</p><p>Fuera de los destinos mencionados arriba, puede haber un cargo de traslado. Para solicitar un estimado existen las siguientes opciones:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul><p><strong>¿Cómo puedo saber si lo que me está cobrando el técnico es lo correcto?</strong></p><p>Las tarifas de servicio para nuestros Centros Autorizados de Servicios están estipuladas por un tabulador</p><p>Si desea saber el costo de la reparación de su equipo con gusto lo puede solicitar a nuestro concierge de servicio:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul><p><strong>¿El servicio llega a mi ciudad?</strong></p><p>Grupo IESA proporciona servicio en toda América Latina, algunos lugares podrían generar un cargo por traslado del técnico.</p><p>No se genera cargo por traslado del personal de servicio en las capitales de los estados, así como en destinos turísticos importantes (Los Cabos, Puerto Vallarta y Cancún) dentro de México, y las capitales de los países en el resto de América Latina.</p><p>Fuera de los destinos mencionados arriba, puede haber un cargo por traslado. Para solicitar un estimado existen las siguientes opciones:</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul>', NULL, '2020-04-07 19:54:44'),
(3, 'img/faq/entregas-202004030748.png', 'Entregas', 'entregas', '<p><strong>¿En cuánto tiempo puedo recibir mis equipos?</strong></p><p>Nuestro centro de distribución para México se encuentra en Monterrey y cuenta con un amplio inventario de productos para entrega inmediata.</p><p>Dependiendo del lugar de la República en donde se encuentre puede variar el tiempo de entrega de los equipos entre 2 y 5 días hábiles a partir de que el Distribuidor Autorizado nos haya hecho el pedido si los equipos están en existencia.</p><p>Si los productos que seleccionó fueron pedidos especiales, el tiempo de entrega puede variar entre 4 a 8 semanas.</p><p>El centro de distribución para el resto de América Latina está en ubicado en Miami. Los traslados marítimos normalmente demoran entre 2 y 5 semanas adicionales a lo que demora en México..</p><p><strong>¿La entrega de mis equipos me genera un cargo?</strong></p><p>Estamos complacidos de llevar sus electrodomésticos hasta la puerta de su hogar sin ningún costo en Monterrey, CDMX y Guadalajara.</p><p>El resto de las entregas se surten de nuestro Centro de Distribución en Monterrey. Nuestro equipo de Logística de Embarque se puede coordinar con usted para entregarlo a la fletera de su preferencia.</p><p>Para embarques fuera de México, se surtirán desde nuestro Centro de Distribucion en Miami. Nuestro equipo de Logística de Embarque puede coordinar el envío al forwarder de su preferencia en Miami y ayudarle a coordinar el envío hasta el puerto de entrada de su país.</p><p><strong>¿Qué hago si mi equipo llega dañado o presenta algún golpe?</strong></p><p>Hemos invertido en herramientas que nos permiten manipular los equipos con gran cuidado minimizando daños, sin embargo es importante que revise cuidadosamente sus equipos al recibirlos.</p><p>En caso de detectar algún daño en algún equipo le sugerimos no recibirlo, nuestros camiones de entrega o la compañía fletera se encargarán de regresarlo a nuestro almacén y nuestro equipo logístico se encargará de tramitar la entrega de un sustituto.</p><p>Si no tuvo oportunidad de verificarlo durante la recepción, tiene 24 hrs adicionales para reportarlo a nuestro equipo de Concierge de Servicio</p><ul><li>Llamar nuestro concierge de servicio al +52 (1) (81) 8389 4372</li><li>Llamar por lada sin costo dentro de la República Mexicana al 01 800 400 4372</li><li>Por whatsapp al +52 (1) (81) 1803 6339 o enviando un correo electrónico a atencionalcliente@iesa.cc</li></ul>', '2020-03-20 09:50:25', '2020-04-03 07:48:55'),
(4, NULL, 'FAQ', 'faq', 'Encuentre respuestas en línea a sus preguntas\r\n\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `headquarters`
--

CREATE TABLE `headquarters` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headquarters`
--

INSERT INTO `headquarters` (`id`, `active`, `name`, `address`, `phone`, `email`, `schedule`, `map`, `created_at`, `updated_at`) VALUES
(1, 1, 'MONTERREY', 'Carr. Monterrey – Saltillo 3061 Fracc. Bosques del Poniente Santa Catarina, NL 66350', '+52 (1) 81 8389 4372', 'recepción@iesa.cc', '09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#Cerrado#Cerrado', 'https://www.google.co.ve/maps/place/Importaciones+Electrodom%C3%A9sticas,+S.A.+De+C.V./@25.682615,-100.4560607,17z/data=!3m1!4b1!4m5!3m4!1s0x86629816d52a561b:0x708d48dbe192e667!8m2!3d25.682615!4d-100.453872', NULL, '2020-03-18 13:53:48'),
(2, 1, 'CIUDAD DE MÉXICO', 'Galileo 8 Segundo piso Col. Polanco Chapultepec México, DF 11560<span style=\"color:#fff \">blanco blanco blanco blanco</span>', '+52 (1) 55 5280 9648', 'showroom@iesa.cc', '09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#09:00-19:00#Cerrado#Cerrado', 'https://www.google.co.ve/maps/place/IESA/@19.4284845,-99.1956162,17z/data=!3m1!4b1!4m5!3m4!1s0x85d201ff11a77f6d:0x18848b36c0d7d2d9!8m2!3d19.4284845!4d-99.1934275', NULL, '2020-03-18 13:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `active`, `image`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/home/1.jpg', 'DESCUBRA NUESTROS LEGENDARIOS PRODUCTOS**', 'Desde 1945, Sub-Zero ha sido el pionero en la ciencia de la refrigeración doméstica al mismo tiempo que transformaba el diseño de equipos integrados y empotrados. Wolf tiene una tradición de innovación aún mayor, con ingeniería que proviene de más de 80 años de experiencia de equipos de cocción comercial. Junto con la tecnología de lavavajillas de Cove, Sub-Zero y Wolf están dedicados a ayudarlo a crear la cocina funcional y flexible de sus sueños.**', NULL, '2020-04-08 22:14:03'),
(2, 1, 'img/home/2.jpg', 'COCINA EXTERIOR', 'Todo sabe mejor al aire libre. Sin embargo, el control del calor en la mayoría de los asadores puede convertir el cocinar en exteriores en una tarea imprecisa. Los asadores Wolf cambiar todo eso. Le dan el mismo tipo de control de precisión y facilidad de uso que sus contrapartes de interiores, las estufas, hornos y parrillas Wolf. Imagínese las jugosas posibilidades.', NULL, '2020-04-07 19:30:48'),
(3, 1, 'img/home/3.jpg', 'ENSERES DE LUJO INSPIRADOS EN ESCANDINAVIA', 'Electrodomésticos escandinavos ASKO; productos durables y de máxima calidad con soluciones innovadoras respetuosas con el medio ambiente y el uso económico de los recursos como agua y energía.', NULL, '2020-04-07 19:30:48'),
(4, 1, 'img/home/4.jpg', 'Diseños y elementos que expresan una Personalidad diferente', 'Diseños espectaculares y funcionalidad sin igual, son los atributos de los productos de DEXA. Nuestra línea está pensada para integrarse al diseño de tu cocina ideal, pues con su variedad en estufas, parrillas, hornos, tarjas, campanas y llaves, le darás esa personalidad que tu cocina necesita.', NULL, '2020-04-07 19:30:48'),
(5, 1, 'img/home/5.jpg', 'EL HIELO IDEAL EL LUJO DEFINITIVO', 'Cuando se trata de lujo, los detalles marcan la diferencia. Tu bebida favorita no es la excepción. La adición de un detalle, el hielo ideal, hace que una bebida se mantenga más fría y el sabor dure más tiempo. No importa qué bebida prefiera, una cosa puede mejorarla: el hielo Scotsman, el ingrediente ideal.', NULL, '2020-04-07 19:30:48'),
(6, 1, 'img/home/6.jpg', 'PERFECTO PARA LOS AMANTES DEL VINO', 'Plum, un artefacto diseñado para uso diario que preserva, identifica, enfría y sirve el vino que más le guste. Mediante la aguja de doble núcleo, Plum perfora automáticamente la lámina y el corcho de la botella extrayendo simultaneamente el vino e inyectando gas argón para evitar la oxidación.', NULL, '2020-04-07 19:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'HERO',
  `source` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'HOME',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `type`, `source`, `url`, `name`, `img_text`, `created_at`, `updated_at`) VALUES
(1, 'HERO', 'HOME', 'img/triband/', 'hero.jpg', '.', NULL, '2020-04-02 18:20:07'),
(2, 'MOBIL', 'HOME', 'img/triband/', 'mobile.jpg', NULL, NULL, '2020-04-02 15:25:30'),
(3, 'HERO', 'SHOWROOM', 'img/showrooms/', 'hero202004021222.jpg', NULL, NULL, '2020-04-02 12:22:59'),
(4, 'MOBIL', 'SHOWROOM', 'img/showrooms/', 'mobile202004021222.jpg', NULL, NULL, '2020-04-02 12:22:59'),
(12, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'Carrusel 1.jpg', NULL, '2020-03-18 12:54:18', '2020-04-02 12:45:31'),
(14, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'carrusel_14.jpg', NULL, '2020-03-18 12:58:04', '2020-03-18 12:58:05'),
(15, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'carrusel_15202004080517.jpg', NULL, '2020-03-18 12:58:05', '2020-04-08 10:17:52'),
(16, 'SLIDE', 'SHOWROOM', 'img/showrooms/', 'carrusel_16.jpg', NULL, '2020-03-18 13:00:34', '2020-03-18 13:00:34'),
(17, 'HERO', 'ABOUTUS', 'img/nosotros/', 'hero.jpg', NULL, NULL, '2020-03-19 15:15:16'),
(18, 'MOBIL', 'ABOUTUS', 'img/nosotros/', 'mobile.jpg', NULL, NULL, '2020-03-19 15:16:06'),
(19, 'HERO', 'CONTACT', 'img/', 'hero-contacto.jpg', NULL, NULL, NULL),
(20, 'MOBIL', 'CONTACT', 'img/', 'hero-contacto-mobile.jpg', NULL, NULL, NULL),
(21, 'HERO', 'FAQ', 'img/faq/', 'hero202004030735.jpg', NULL, NULL, '2020-04-03 13:35:12'),
(22, 'MOBIL', 'FAQ', 'img/faq/', 'mobile202004030735.jpg', NULL, NULL, '2020-04-03 13:35:12'),
(23, 'HERO', 'SERVICES', 'img/servicios/', 'hero202004071052.jpg', '', '2020-03-23 09:16:27', '2020-04-07 15:52:10'),
(24, 'MOBIL', 'SERVICES', 'img/servicios/', 'mobile202004071052.jpg', '', '2020-03-23 09:16:32', '2020-04-07 15:52:10'),
(25, 'HERO', 'sub-zero', 'img/subzero/', 'hero.jpg', NULL, NULL, '2020-03-23 13:57:00'),
(26, 'MOBIL', 'sub-zero', 'img/subzero/', 'mobile.jpg', NULL, NULL, '2020-03-23 13:56:58'),
(27, 'HERO', 'wolf', 'img/wolf/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:30:43'),
(28, 'MOBIL', 'wolf', 'img/wolf/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:30:46'),
(29, 'HERO', 'cove', 'img/cove/', 'hero202004080509.jpg', '', '2020-03-24 12:29:28', '2020-04-08 10:09:54'),
(30, 'MOBIL', 'cove', 'img/cove/', 'mobile202004081205.jpg', '', '2020-03-24 12:29:31', '2020-04-08 17:05:24'),
(31, 'HERO', 'asko', 'img/asko/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:34:01'),
(32, 'MOBIL', 'asko', 'img/asko/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:32:33'),
(33, 'HERO', 'dexa', 'img/dexa/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:34:06'),
(34, 'MOBIL', 'dexa', 'img/dexa/', 'mobile202004081200.jpg', '', '2020-03-24 12:29:31', '2020-04-08 17:00:01'),
(37, 'HERO', 'scotsman', 'img/scotsman/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:35:20'),
(38, 'MOBIL', 'scotsman', 'img/scotsman/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:35:23'),
(39, 'HERO', 'cocina-exterior', 'img/exteriores/', 'hero.jpg', '', '2020-03-24 12:29:28', '2020-03-24 12:37:02'),
(40, 'MOBIL', 'cocina-exterior', 'img/exteriores/', 'mobile.jpg', '', '2020-03-24 12:29:31', '2020-03-24 12:37:06'),
(41, 'HERO', 'plum-wine', 'img/plum-wine/', 'hero202003311124.jpg', 'plum-wine', '2020-03-24 12:29:28', '2020-03-31 17:24:41'),
(42, 'MOBIL', 'plum-wine', 'img/plum-wine/', 'mobile202003311124.jpg', 'plum-wine', '2020-03-24 12:29:31', '2020-03-31 17:24:41'),
(43, 'SLIDE', 'ABOUTUS', 'img/nosotros/', 'SubZero.jpg', 'sub-zero', '2020-03-26 13:10:59', '2020-03-26 13:35:02'),
(44, 'SLIDE', 'ABOUTUS', 'img/nosotros/', 'Wolf.jpg', 'wolf', '2020-03-26 13:11:03', '2020-03-26 13:35:06'),
(45, 'SLIDE', 'ABOUTUS', 'img/nosotros/', 'Cove.jpg', 'cove', '2020-03-26 13:10:59', '2020-03-26 13:35:11'),
(46, 'SLIDE', 'ABOUTUS', 'img/nosotros/', 'carrusel_46202004071126.jpg', 'asko', '2020-03-26 13:11:03', '2020-04-07 16:26:18'),
(47, 'SLIDE', 'ABOUTUS', 'img/nosotros/', 'Dexa.jpg', 'dexa', '2020-03-26 13:10:59', '2020-03-26 13:35:17'),
(48, 'SLIDE', 'ABOUTUS', 'img/nosotros/', 'Scotsman.jpg', 'scotsman', '2020-03-26 13:11:03', '2020-03-26 13:35:20'),
(49, 'SLIDE', 'ABOUTUS', 'img/nosotros/', 'Plum.jpg', 'plum-wine', '2020-03-26 13:11:03', '2020-04-02 14:06:38'),
(50, 'HERO', 'AVISO', 'img/', 'hero-aviso.jpg', '', '2020-03-24 12:29:28', '2020-04-03 17:29:40'),
(51, 'MOBIL', 'AVISO', 'img/', 'hero-aviso-mobile.jpg', '', '2020-03-24 12:29:31', '2020-04-03 17:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `notice_privacy`
--

CREATE TABLE `notice_privacy` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `intro` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_privacy`
--

INSERT INTO `notice_privacy` (`id`, `title`, `intro`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AVISO DE PRIVACIDAD', '<p><strong>IESA</strong> utiliza diferentes tecnologías de Internet (Ej. Cookies, Java-Script) con el único propósito de hacer más fácil el uso de las diferentes aplicaciones de Internet. Para mejorar la imagen de nuestra página y hacerla más atractiva la información se despliega de forma automática en un número limitado de casos (Ej. navegador, sistema operativo, número de clicks, tiempo por página). Dicha información se recolecta de una forma que no proporciona identificación personal.</p>', '<h2>Hipervínculos a otras páginas de Internet</h2><p>Algunos hipervínculos del sitio de Internet de La Familia Perfecta puede conectar a otras páginas que pertenecen a empresas ajenas a nosotros. Por lo tanto, <strong>IESA</strong> no se hace responsable del contenido de dichos sitios o de sus políticas de seguridad.</p><h2>Responsabilidades</h2><ol><li>La información y descargas proporcionadas no contienen garantía de vínculos, promesas o representaciones.</li><li><strong>IESA</strong> no asume la responsabilidad de que la información esté completa o correcta, ni garantiza la calidad o fiabilidad de la información o los resultados producidos por la misma. <strong>IESA</strong> no se hace responsable de ninguna manera por daños directos, consecuenciales o incidentales que resulten de las descargas, tales como la interrupción del servicio y la pérdida de datos o información. Las descargas que Iesa proporciona sólo deben ser utilizadas después de una consulta previa con <strong>IESA</strong>.</li><li><strong>IESA</strong> no asume la responsabilidad del uso o falta de uso de sus descargas, hardware, software o problemás con la configuración del sistema. El uso de las descargas queda bajo responsabilidad y discreción del usuario. <strong>IESA</strong> no asume responsabilidades sobre el software o la información, en particular con respecto a cubrir un propósito específico, la validez de sus contenidos o la ausencia de virus.</li><li><strong>IESA</strong> no asume la responsabilidad por los daños causados por virus, troyanos, hoax o cualquier otro código que manifieste propiedades destructivas o dañinas; ni por programas, partes de programas, códigos o la interrupción de servicios resultante de datos o información corrupta. Se espera que el usuario tenga medidas de protección antivirus e información destructiva.</li><li><strong>IESA</strong> no se hace responsable por errores en la transmisión de datos a <strong>IESA</strong>, la manipulación de dichos datos por terceros no autorizados en particular mediante el acceso a la red y a los sistemás de <strong>IESA</strong>.</li><li>Esto no incluye casos de negligencia y no aplica en los casos en los que las garantías sobre las propiedades de las descargas fueron hechas, ni si se cometen infracciones contra obligaciones contractuales sustanciales. Lo mismo aplica para los casos de daños físicos así como a responsabilidades resultantes del producto.</li><li>Los daños resultantes por la infracción de obligaciones contractuales sustanciales está limitada a daños que se estimen previsibles y típicos en el contexto de contratos similares. Lo anterior, no implica el reverso de una carga de prueba en detrimento del usuario.</li><li>Toda la información de nuestro sitio de Internet puede estar sujeta a errores y omisiones de los que <strong>IESA</strong> no se hace responsable. Las especificaciones de los productos están sujetas a cambios sin previo aviso.</li></ol><h2>AVISO DE PRIVACIDAD</h2><p><strong>IMPORTACIONES ELECTRODOMÉSTICAS, S.A. DE C.V.(“IESA” (lA Familia Perfecta)</strong> es una sociedad constituida de conformidad con las leyes mexicanas y tiene su domicilio ubicado en Carretera Monterrey-Saltillo No. 3061, Fracc. Bosques del Poniente en Santa Catarina, N.L. C.P. 66362, México . Para efectos del presente Aviso de Privacidad <strong>IESA</strong> es responsable de recabar y tratar sus datos personales de conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su Reglamento, los Lineamientos del Aviso de Privacidad del INAI y el contenido de este documento.</p><p><strong>IESA</strong> constantemente realiza, patrocina u organiza lanzamientos y presentaciones de sus productos, clases de cocina, cenas, catas de vinos y café (los “Eventos”), a través de los cuales <strong>IESA</strong> da a conocer a sus invitados, interesados, participantes, clientes y prospecto de clientes sobre sus productos, su aprovechamiento al máximo y el estilo de vida que ofrecen los mismos. Adicionalmente, <strong>IESA</strong> realiza publicaciones sobre sus productos y Eventos (las “Publicaciones”), para mantener actualizados a sus clientes y para informar e interesar a sus invitados y participantes a ser clientes de <strong>IESA</strong>.</p><p>En virtud de lo anterior y con la finalidad de (i) invitarlo a los Eventos, y (ii) hacerle llegar la información de los productos de <strong>IESA</strong> y las Publicaciones que realice o en las que participe <strong>IESA</strong>, <strong>IESA</strong> solicita a sus clientes, prospecto de clientes, invitados, interesados y participantes (los “Usuarios”) los siguientes datos personales: nombre completo, teléfono (hogar, oficina y/o celular), domicilio y correo electrónico.</p><p>Al proporcionar dichos datos personales, cada uno de los Usuarios consiente que <strong>IESA</strong> trate los mismos dentro o fuera de los Estados Unidos Mexicanos y otorga su consentimiento, lo cual se acreditará mediante la firma del presente Aviso de Privacidad, que podrán ser tratados directa o indirectamente por <strong>IESA</strong>, el importador o sus distribuidores y centro de servicio , quienes en su caso tendrán acceso y podrán usar los datos personales de los Usuarios para enviarles Publicaciones de los productos y eventos internacionales de <strong>IESA</strong>. En caso de que no se recabe su firma en el presente aviso de privacidad y si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. El tratamiento de los datos personales que efectúe cualquiera los terceros receptores se ajustará al contenido del presente Aviso de Privacidad.</p><p>Si alguno de los Usuarios (i) considera que no es necesario alguno de los datos personales que <strong>IESA</strong> recaba para las finalidades antes señaladas, o (ii) desea acceder a sus datos personales en posesión de <strong>IESA</strong>, rectificar o corregir algún dato que haya sido modificado o que sea erróneo, cancelar, oponerse o limitar el tratamiento que <strong>IESA</strong> le da a sus datos personales, revocar el consentimiento otorgado para el tratamiento de los mismos e inclusive limitar el uso o divulgación de sus datos personales podrá solicitarlo al área de Atención a Clientes, que se encuentra ubicada en el domicilio de <strong>IESA</strong>, el cual se menciona en el primer párrafo de este Aviso de Privacidad y deberá presentar:</p><ol><li>Su solicitud por escrito, señalando nombre completo, el domicilio o cualquier otro medio por el cual desea que sea contactado por <strong>IESA</strong> para recibir la respuesta a su solicitud y la descripción clara y precisa de los datos personales respecto de los busca ejercer alguno de los derechos antes mencionados.</li><li>Original y copia para cotejo, de su identificación oficial (Usuarios o representantes legales) y de la escritura donde consten los poderes y facultades del representante legal, cuando aplique</li><li>Copia de cualquier documento o elemento que facilite la localización de los datos personales.</li></ol><p>Tome en cuenta que en el supuesto de que usted desee oponerse al tratamiento de sus datos personales, cancelar los mismos de la base de datos de <strong>IESA</strong>, revocar el consentimiento otorgado a <strong>IESA</strong> para el tratamiento de los mismos o bien limitar el uso o divulgación de los mismos, la relación entre usted y <strong>IESA</strong> podrá verse afectada.</p><p>Cualquier pregunta o duda en relación al ejercicio de sus derechos o los procedimientos para la atención y respuesta a sus solicitudes, podrán los Usuarios contactar directamente al área de Atención a Clientes de <strong>IESA</strong> en el teléfono <strong>01800 400 IESA (4372)</strong> . Escribir un mail y/encargado de atención al usuario. <strong>(iesa@iesa.cc)</strong>. Asimismo le informamos que <strong>IESA</strong> no utiliza cookies ni medios remotos que permitan recabar datos personales de manera automática.</p><p>Este aviso de privacidad podrá ser modificado de tiempo en tiempo por <strong>IESA</strong>. Dichas modificaciones serán oportunamente informadas a través de nuestra página de internet <strong>www.lafamiliaperfecta.com</strong>, o cualquier otro medio de comunicación oral, impreso o electrónico que Iesa determine para tal efecto.</p>', '2020-03-25 10:16:49', '2020-04-07 20:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

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
(46, 'contact_access', '2019-04-15 19:14:42', '2019-04-15 19:14:42', NULL),
(47, 'web_administrator', '2020-05-07 07:00:13', NULL, NULL),
(48, 'admin_zoho', '2020-05-07 07:08:15', NULL, NULL),
(49, 'user_zoho', '2020-05-07 07:08:54', '2020-05-07 07:08:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

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
(2, 46),
(3, 49),
(4, 48),
(4, 49),
(4, 16),
(4, 12),
(4, 15),
(4, 13),
(4, 14),
(4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2019-04-15 19:13:32', '2019-04-15 19:13:32', NULL),
(2, 'User', '2019-04-15 19:13:32', '2019-04-15 19:13:32', NULL),
(3, 'CRM Ventas', '2020-05-07 06:54:21', NULL, NULL),
(4, 'CRM Admin', '2020-05-07 06:54:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 4),
(4, 4),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(9, 1),
(9, 2),
(9, 4),
(2, 4),
(10, 1),
(10, 4),
(11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imag_st` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_st` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telf_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telw_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_st` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imag_cs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_cs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telf_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telw_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `imag_st`, `title_st`, `description_st`, `telf_st`, `telw_st`, `email_st`, `title2`, `description2`, `imag_cs`, `title_cs`, `description_cs`, `telf_cs`, `telw_cs`, `email_cs`, `title3`, `description3`, `created_at`, `updated_at`) VALUES
(1, 'RECIBA LA AYUDA DE EXPERTOS', '<p>Ya sea que desee programar una conexión, solicitar un servicio para sus electrodomésticos, tiene dudas de como preparar sus espacios para recibir sus nuevos equipos, o simplemente tiene preguntas acerca de los que ya tiene, tenemos los recursos que usted necesita. Hable directamente con un experto de servicio al cliente.</p>', 'img/servicios/servicio202004081758.jpg', 'CONCIERGE DE SERVICIO TÉCNICO', 'Obtenga respuestas en línea rápidamente; nuestro equipo está listo para atender todas sus dudas, ya sea que necesite la guía mecánica de algún electrodoméstico, agendar una conexión o servicio, saber sobre la garantía de su equipo o simplemente verificar que su taller sea uno de nuestros talleres autorizados por la fábrica.', '+52 (1) 800 400 IESA (4372)', '+52 (1) 811 803 6339', 'atencionalcliente@iesa.cc', 'EL SERVICIO QUE USTED Y SUS ELECTRODOMÉSTICOS MERECEN', 'Como especialistas en equipos sub-Zero, Wolf, Cove, Asko ,Dexa apreciamos y sabemos lo valioso de su tiempo por lo que hacemos lo posible para minimizar las interrupciones en su hogar y horario.', 'img/servicios/agenda.jpg', 'AGENDE UNA CITA DE SERVICIO', 'Nuestros técnicos cuidadosamente seleccionados y entrenados directamente en fábrica, cuentan con altos estándares de rendimiento en la realización de mantenimiento, diagnóstico y reparación de nuestros electrodomésticos.\r\nAgende su cita y viva la experiencia de un servicio de guantes blancos.', '+52 (1) 800 400 IESA (4372)', '+5218118036339', 'atencionalcliente@iesa.cc', 'CENTROS AUTORIZADOS DE SERVICIO*', '<p>GRUPO IESA cuenta con una amplia red de Centros Autorizados de Servicio, en México y Latinoamérica.</p><p>&nbsp;</p><p>Nuestro Concierge de Servicio puede brindarle los datos del CAS más cercano a usted. Contáctenos al<a href=\"tel:+528183894372\"> +52 (1) (81) 8389 4372</a> , llamada sin costo dentro de la República Mexicana al <a href=\"tel:018004004372\">+52 (1) 800 400 4372</a>, por WhatsApp al <a href=\"https://wa.me/528118036339\">811.803.6339</a> o al correo electrónico <a href=\"mailto:atencionalcliente@iesa.cc\">atencionalcliente@iesa.cc</a></p>', '2020-03-20 13:53:01', '2020-04-08 22:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'img/servicios/1.jpg', 'Servicio autorizado de Fábrica', '<p>Brindamos servicio y mantenimiento a las marcas Sub-Zero, Wolf, Cove,  Asko y Dexa  en toda la República Mexicana y Latinoamérica</p>\r\n                        <p>Sus electrodomésticos de lujo merecen un servicio de lujo. Usted  merece la atención  de los técnicos de Grupo IESA.</p>', NULL, '2020-04-08 22:58:44'),
(2, 'img/servicios/2.jpg', 'Brindamos servicio de garantía', 'Comencemos con el beneficio obvio de elegir a nuestros técnicos autorizados:\r\n\r\nGrupo IESA es el proveedor de servicios certificados de fábrica que está capacitado exclusivamente para trabajar solo en las marcas Sub-Zero, Wolf, Cove, ASKO Y Dexa. Como resultado, brindamos un servicio experto para todas sus necesidades de garantía.', NULL, '2020-04-08 22:58:44'),
(3, 'img/servicios/guantes.jpg', 'Garantizamos el servicio de guantes blancos', '<p>Como parte de nuestra misión de brindar atención al cliente acorde con los electrodomésticos de lujo que atendemos:<br>Nos esforzamos por llegar cuando está programado para que nuestros clientes no tengan que lidiar con frustrantes ventanas de servicio de tres horas como lo requieren otras compañías de servicios.</p>\r\n                        <p>Nuestros técnicos, equipados con cubre zapatos, esterillas, tapetes y bolsas de herramientas blandas, siempre tratan su hermosa casa con cuidado, limpiando después para no dejar rastro.</p>\r\n                        <p>\r\n                            Nuestros técnicos están capacitados para ser amigables y comunicativos, para que siempre sepa lo que sucede con sus electrodomésticos.\r\n                        </p>', NULL, '2020-04-08 22:58:44'),
(4, 'img/servicios/capacitacion.jpg', 'Recibimos una amplia capacitación directamente de Sub-Zero', 'Estamos tan familiarizados con los equipos Sub-Zero, Wolf, Covey Asko que generalmente podemos diagnosticar un problema incluso antes de salir, asegurando que su problema se resuelva mucho más rápido.\r\n\r\nNo todos los problemas son mecánicos, por lo que utilizamos el software patentado Sub-Zero para ejecutar diagnósticos que revelan problemas ocultos.\r\n\r\nLos dispositivos integrados de Sub-Zero ofrecen un desafío único que nuestros técnicos capacitados pueden manejar con confianza y experiencia.', NULL, '2020-04-08 22:58:44'),
(5, 'img/servicios/fabricante.jpg', 'Utilizamos sólo piezas del fabricante', 'Las piezas certificadas de fábrica están cubiertas por una garantía integral de reemplazo de un año y se garantiza que funcionarán mejor y durarán más.\r\n\r\nNuestro almacén está abastecido con un gran surtido de piezas para todos los electrodomésticos que manejamos.', NULL, '2020-04-08 22:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `showrooms`
--

CREATE TABLE `showrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showrooms`
--

INSERT INTO `showrooms` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'VISITE NUESTRO SHOWROOM', '<p>Un lugar para comenzar, experimentar y dar vida a la visión de su cocina.</p><p>Visitar nuestro showroom no es un día de compras ordinario, es una experiencia interactiva que le ayuda a visualizar las posibilidades de su futura cocina. En un ambiente sin presiones, puede descubrir cómo se va a sentir, ver y a qué va a saber su cocina - guiado por un cordial experto en equipos que se enfoca a atender sus necesidades.</p>', NULL, '2020-03-31 12:37:27'),
(2, 'UN LUGAR PARA COMENZAR, EXPERIMENTAR Y DAR VIDA A LA VISIÓN DE SU COCINA', '<p>Esta no es una compra ordinaria. Es una experiencia inmersiva para ayudarlo a darse cuenta de las posibilidades de su futura cocina. En un entorno sin presión, puede descubrir cómo se siente, se ve y sabe su cocina, guiado por un experto asesor cuyo único objetivo es atender la visita a sus necesidades.</p>', '2020-03-17 16:20:28', '2020-04-07 19:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `showroom_details`
--

CREATE TABLE `showroom_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `showroom_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showroom_details`
--

INSERT INTO `showroom_details` (`id`, `showroom_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'img/showrooms/1202003311237.jpg', NULL, '2020-03-31 12:37:27'),
(2, 1, NULL, NULL, 'img/showrooms/2202004080512.jpg', NULL, '2020-04-08 10:12:15'),
(3, 1, NULL, NULL, 'img/SHOWROOM_HOME3.jpg', NULL, '2020-03-31 12:36:53'),
(4, 2, 'CONSULTE A LOS EXPERTOS', 'Haga que nuestro equipo de expertos en productos, personal capacitado y chefs del showroom respondan a todas sus preguntas.', 'img/showrooms/4.jpg', NULL, '2020-04-07 19:52:39'),
(5, 2, 'HAGA UN TEST DRIVE', 'Gire las perillas. Abra los cajones. Encienda el quemador. Y traiga su delantal: siempre está invitado a cocinar en nuestras salas de exhibición para conocer nuestros electrodomésticos.', 'img/showrooms/test.jpg', NULL, '2020-04-07 19:52:39'),
(6, 2, 'SABOREE CADA BOCADO', 'Disfrute de comidas hechas por nuestro chef y experimente todos los beneficios de nuestros equipos con deliciosas demostraciones de productos para apreciar verdaderamente nuestros electrodomésticos con suculentos platillos dulces y salados.', 'img/showrooms/sabor.jpg', NULL, '2020-04-07 19:52:39'),
(7, 2, 'HAGA REALIDAD SUS SUEÑOS', 'Encuentre su estilo, vea la línea completa de productos y compare características en una inspiradora variedad de exhibiciones de cocina y hogar decoradas artísticamente.', 'img/showrooms/sueno.jpg', NULL, '2020-04-07 19:52:39'),
(8, 2, 'SEA NUESTRO INVITADO', 'En nuestras salas de exhibición, no hay un vendedor a la vista, solo nuestro amable personal, listo para brindarle asesoría y orientación de expertos. Verdaderamente. Así que por favor, solo venga, conozca y disfrute.', 'img/showrooms/invitado.jpg', NULL, '2020-04-07 19:52:39'),
(9, 2, 'ÚNETE A NUESTRA FAMILIA', 'Su relación con la sala de exposición no termina después de instalar sus electrodomésticos. Puede esperar toda una vida de soporte y recursos útiles para ayudarlo a aprovechar al máximo sus nuevos dispositivos.', 'img/showrooms/familia.jpg', NULL, '2020-04-07 19:52:39'),
(10, 0, 'COOKING DEMO', 'Experimente el alto rendimiento y los deliciosos resultados de los electrodomésticos en persona, y obtenga consejos confiables de los chefs que usan productos Sub-Zero, Wolf, Cove y Asko todos los días. Las demostraciones son solo una forma más de descubrir la cocina adecuada para usted.', 'img/showrooms/demo202004030720.jpg', NULL, '2020-04-07 19:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `active`, `image`, `name`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'img/testimonies/1.png', 'Ilse Ocampo', 'Visitar su showroom es una experiencia increíble, todos te atienden con mucha calidez desde que se abren las puertas del elevador, un excelente servicio al cliente, resuelven tus dudas y siempre están dispuestos a ayudar.\r\n                            <br>\r\n                            100% recomendado, las marcas se dan a relucir tienen los mejores estándares de calidad', '2020-03-17 15:15:11', '2020-03-17 15:15:12'),
(2, 1, 'img/testimonies/2.png', 'Fernando Pacheco - Boa Lab', 'Llevo más de 10 años en contacto con IESA y sus trabajadores, me encuentro totalmente satisfecho con el trato que he recibido por parte de ellos, facilitan siempre la solución a cualquier problema que se presente y siempre lo hacen con una sonrisa y profesionalismo. Los recomiendo ampliamente, es una empresa en la que se puede confiar. Esto hablando de la empresa, si tocamos el de tema de las marcas que representan, no tengo más que decir que son', '2020-03-17 15:16:19', '2020-03-17 15:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blocked_date` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `session_id`, `name`, `user_name`, `email`, `email_verified_at`, `last_login`, `ip`, `blocked_date`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ClwwRgFnCi9Z7rSCigiSjCkBte5AQe3DmfA3jfhC', 'Admin', 'Admin', 'admin@admin.com', NULL, '2020-06-08 12:55:47', '85.141.177.245', NULL, 1, '$2y$10$HNCGmlBRr/FkVb/zxJYYgO8GXSVxaNnuHqk7BtEfkRMFyv/yRf4la', 'DxR9NmFfPsnLRirf1QIsT8bGtm1KxOktkUFyCKhEubOlceqKmfUPPrMeMAv5', '2019-04-15 19:13:32', '2020-06-08 17:55:47', NULL),
(2, 'fIc4xG3zsvWDeYwmde0Nphnd8gDit9yMKI7iWnfA', 'Marketing IESA', NULL, 'auxiliarmkt@iesa.cc', NULL, '2020-05-18 23:28:05', '187.161.243.223', NULL, 1, '$2y$10$3L0mV.MRXis/JoKiujWPZ.E1dcP2t49myxItydQzsir6gQI6UiHPa', 'RAk5uuoPhyhVwBGHVsraN9VMao7rqTB8PpEu0HQyk8gpOhhcEa9ep1IO5DmU', '2020-04-08 22:47:10', '2020-06-04 16:30:01', '2020-06-04 16:30:01'),
(3, 'HLBnFYTBNvQZIL6T6Lv5TnKMdKLdyebtwsYKmgUS', 'Aministrador ZOHO', NULL, 'admin_zoho@admin.com', NULL, '2020-06-10 09:00:17', '187.163.141.227', NULL, 1, '$2y$10$tzB8VtpGY8//YAC7dfcXjODgHpQHKlCekszlcnOkrKdZOlv892U6W', NULL, '2020-05-07 07:18:29', '2020-06-10 14:00:17', NULL),
(4, 'ndNHnSQuksLI0cv3Y5tiew4Iu7xosBS2haUGlQbp', 'Alfoso Campaña', NULL, 'acampana@iesa.cc', NULL, '2020-06-04 11:29:08', '187.189.240.9', NULL, 1, '$2y$10$kazQl5R7JTGTGFglkWmfEOsTtCBqmDq6o0G5bAy.CtBcIgdr/3S0u', NULL, '2020-05-21 09:12:15', '2020-06-04 16:29:08', NULL),
(5, 'IcHrROpcj4JZsSVeHlcZxG79HWQ0L30sXRJTk0nq', 'Raúl Mendoza', NULL, 'rmendoza@iesa.cc', NULL, '2020-06-10 10:27:01', '177.241.33.174', NULL, 1, '$2y$10$ZmLITXnmPHpz8OPH0gfB9easL7UGCc4diiQob46o97kht3PbAIepi', NULL, '2020-05-21 09:13:42', '2020-06-10 15:27:01', NULL),
(6, 'WPuGp3EC97AHZcuv3V0vTTNEkKesd7SBRPp6rUsc', 'César Martínez', NULL, 'cmartinez@iesa.cc', NULL, '2020-05-27 11:55:22', '187.161.242.95', NULL, 1, '$2y$10$MYPjvA9X2NAC08Pi0QcPWO336F6JxSRE/5r.jlZrJ9pXkHQDGDIFm', NULL, '2020-05-21 09:14:15', '2020-05-27 16:55:22', NULL),
(7, 'fAMY1AWcSgaR7BlmZ8XODmT0SAzmbaDTei8bxH3l', 'Fernanda Martínez', NULL, 'fmartinez@iesa.cc', NULL, '2020-06-08 17:44:19', '189.216.65.101', NULL, 1, '$2y$10$s3rHgX869mG0StgT5RUYAefCkkywsAdqCMyLTqxeepqTmvc9hajaK', NULL, '2020-05-21 09:14:43', '2020-06-08 22:44:19', NULL),
(8, '4l5Eos3D6SN3Dc7lCm6MOe0UhMIiq5hbxPtCdhS3', 'Claudia Genel', NULL, 'cgenel@iesa.cc', NULL, '2020-06-09 13:58:08', '189.216.105.42', NULL, 1, '$2y$10$7/3d6EOCq3qddU3KanvBp.3TIrX5iKo0NSo.nmMSHtB7IK476ISa.', 'eIvRmWzBVZd6IhLAN14gyI5CmxP6cdzmP3z0UhJexn42conimwJLi36V5UiH', '2020-05-21 09:15:10', '2020-06-09 18:58:08', NULL),
(9, 'IrAnd3E6vflN7JK5FtZLB8dLYc0q2Bt0cKiJyihH', 'test Name', NULL, 'test@mail.com', NULL, '2020-05-22 11:02:36', '190.153.47.110', NULL, 1, '$2y$10$sLkxfv/taOWhSsODfZ92n.27tjjb/P9GYPU4u0PF9KKVGeeOxGl8y', NULL, '2020-05-22 15:59:49', '2020-05-22 16:47:26', '2020-05-22 16:47:26'),
(10, 'YOromNUcddfWqdY0ukjDYQsGjt4Ki4jFWcw7QD4h', 'Sebastian Leal', NULL, 'sleal@iesa.cc', NULL, '2020-06-04 11:26:15', '187.151.193.186', NULL, 1, '$2y$10$ZH3lieO8O2wPCRjbii0hAeGYCVVBRp0l3FuyDJb61iwE/4g4MqV0a', NULL, '2020-05-25 08:01:24', '2020-06-04 16:26:15', NULL),
(11, '6ihb5imYDmf8eJALKtwODnWwifbgVT2uQa0dyUBg', 'Oswaldo Zayas', NULL, 'ozayas@iesa.cc', NULL, '2020-06-10 10:44:38', '187.223.19.139', NULL, 1, '$2y$10$zdAMy5T3D4FZASWOrCaQce.kv7cNWihDxWtoMRaaZAfTJ4j.KEeNe', NULL, '2020-05-25 08:26:30', '2020-06-10 15:44:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `brand_details`
--
ALTER TABLE `brand_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headquarters`
--
ALTER TABLE `headquarters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `headquarters_name_unique` (`name`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_privacy`
--
ALTER TABLE `notice_privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showrooms`
--
ALTER TABLE `showrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showroom_details`
--
ALTER TABLE `showroom_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brand_details`
--
ALTER TABLE `brand_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `headquarters`
--
ALTER TABLE `headquarters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notice_privacy`
--
ALTER TABLE `notice_privacy`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `showrooms`
--
ALTER TABLE `showrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `showroom_details`
--
ALTER TABLE `showroom_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
