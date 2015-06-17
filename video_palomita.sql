-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2015 a las 16:52:57
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `video_palomita`
--
CREATE DATABASE IF NOT EXISTS `video_palomita` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `video_palomita`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `id_pelicula` int(10) NOT NULL,
  `num` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `id_usuario`, `id_pelicula`, `num`) VALUES
(39, 4, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE IF NOT EXISTS `pelicula` (
  `titulo` varchar(50) NOT NULL,
  `sinopsis` text NOT NULL,
  `personaje` text NOT NULL,
  `director` varchar(50) NOT NULL,
  `duracion` varchar(20) NOT NULL,
  `anio` int(4) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `protagonista` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `foto` text NOT NULL,
  `code` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`titulo`, `sinopsis`, `personaje`, `director`, `duracion`, `anio`, `genero`, `protagonista`, `precio`, `foto`, `code`) VALUES
('Interstellar', 'En un futuro cercano, la Tierra ya no es capaz de sostener a la humanidad. Los cultivos son devastados por plagas que consumen el ox&#237;geno terrestre de manera definitiva, y tormentas de polvo que asolan el planeta, haciendo que la humanidad haya retrocedido a una sociedad agraria. Joseph Cooper (Matthew McConaughey), un ex piloto de pruebas de la NASA e ingeniero convertido en granjero vive con su familia: su suegro, Donald (John Lithgow); su hijo, Tom (Timothee Chalamet); y su hija de 10 a&#241;os, Murphy - mejor conocida como "Murph" - (Mackenzie Foy) que cree que su casa est&#225; embrujada por un fantasma que est&#225; tratando de comunicarse con ella. Cooper desaf&#237;a a Murph para que pruebe la existencia del fantasma a trav&#233;s de la investigaci&#243;n cient&#237;fica. M&#225;s tarde se descubre que "el fantasma" es una forma desconocida de inteligencia envi&#225;ndoles mensajes codificados por medio de ondas gravitacionales, alterando el polvo en el suelo en un patr&#243;n binario que los dirige a las coordenadas de una instalaci&#243;n secreta de la NASA dirigida por el profesor Brand (Michael Caine), quien fue anteriormente uno de los profesores de Cooper.', 'Andrew Borba, Francis X. McCarthy, Collette Wolfe, Timoth&#233;e Chalamet, Mackenzie Foy, Bill Irwin, Ellen Burstyn, David Oyelowo, Matthew McConaughey, John Lithgow, Wes Bentley, Michael Caine, Anne Hathaway, David Gyasi\r\n', 'Christopher Nolan', '169 min', 2014, 'C. ficcion, Drama', 'William Devane', 15, 'assets\\images\\interstellar.jpg', 1),
('Divergente', 'La historia sigue a Beatrice Prior, una chica de 16 a&#241;os, que vive en una sociedad que ha decidido agrupar a las personas en cinco facciones que tratan de erradicar los males que les llevaron a la guerra: quienes culpaban a la agresividad, crearon Cordialidad; los que culpaban a la ignorancia, se agruparon en Erudici&#243;n; Verdad surgi&#243; de aquellos que estaban en contra del enga&#241;o; contra el ego&#237;smo se fund&#243; Abnegaci&#243;n, y contra la cobard&#237;a, Osad&#237;a. A los diecis&#233;is a&#241;os, los chicos deben hacer una prueba que determinar&#225; a cu&#225;l de las cinco facciones pertenecen; Beatrice decide abandonar su facci&#243;n (Abnegaci&#243;n) pues no sabe si es lo suficientemente altruista como para dedicar su vida a los dem&#225;s. La dif&#237;cil elecci&#243;n de Beatrice marca el inicio de la historia, ya que ahora ella debe hacer frente a las pruebas de iniciaci&#243;n de la facci&#243;n que ha elegido (Osad&#237;a), donde har&#225; aliados y poderosos enemigos, a&#250;n as&#237;, Beatrice debe cuidar que nadie conozca que ella en realidad es una Divergente, es decir, pertenece a m&#225;s de dos facciones y representa un peligro para la sociedad.', 'Amy Newbold, Christian Madsen, Ben Lloyd-Hughes, Mekhi Phifer, Maggie Q, Ansel Elgort,Zoë Kravitz, Ray Stevenson, Jai Courtney, Tony Goldwyn, Kate Winslet, Miles Teller, Ashley Judd, Theo James', 'Neil Burger', '139 min', 2014, 'Ciencia Ficci&#243;n', 'Shailene Woodley', 12, 'assets\\images\\divergente.jpg', 2),
('Lucy', 'Lucy (Scarlett Johansson) es una joven estadounidense que reside en Taiw&#225;n como estudiante. Cuando es embaucada por su &#250;ltimo novio para entregarle una maleta de la que desconoce el contenido al cabecilla de la mafia coreana (Choi Min-sik) el cual pretende traficar con una nueva droga a la que llaman CPH4, la cual resulta ser el contenido de la maleta. Para distribuirlo por Am&#233;rica y Europa sin problemas opta por esconder las bolsas (a kilo cada una) en el abdomen de cuatro ciudadanos occidentales (entre las que se encuentra la propia Lucy). Mientras permanece cautiva, uno de los captores apaliza a la joven en el estomago con la consecuente rotura de la bolsa liberando una significante cantidad de droga que empieza a recorrer su sistema nervioso. Como resultado su capacidad cerebral empieza a incrementarse por momentos hasta alcanzar casi el 40% neuronal adquiriendo as&#237; capacidades tanto f&#237;sicas como ps&#237;quicas de las que no duda en hacer uso para librarse de los miembros de la mafia, a los que liquida con gran facilidad.', 'Pascal Loison, Bertrand Quoniam, Pierre Poirot, Pierre Grammont, Loïc Brabant, Luca Angeletti, Jan Oliver Schroeder, Nicolas Phongpheth, Analeigh Tipton, Pilou Asbæk, Julian Rhind-Tutt, Min-sik Choi, Amr Waked, Morgan Freeman', 'Luc Besson', '89 min.', 2014, 'Ciencia Ficci&#243;n', 'Scarlett Johansson', 12, 'assets\\images\\lucy.jpg', 3),
('Cuando te encuentre', 'Un soldado americano destinado en Irak encuentra la fotograf&#237;a de una mujer de la que queda prendado. Considera que el hallazgo es una prueba irrefutable de su buena suerte, as&#237; que, cuando regresa a su pa&#237;s, busca a la chica y la encuentra: se trata de una madre divorciada. Adaptaci&#243;n de una novela de Nicholas Sparks (El diario de Noa).', 'Kendal Tuttle, Ann McKenzie, Sharon Morris, Russell Durham Comegys, Joe Chrest, Robert Hayes, Adam LeFevre, Jay R. Ferguson, Riley Thomas Stewart,Taylor Schilling, Blythe Danner', 'Scott Hicks', '101 min', 2012, 'Drama', 'Zac Efron', 16, 'assets\\images\\cuando_te_encuentre.jpg', 4),
('Tengo Ganas de Ti ', 'Secuela de "Tres metros sobre el cielo". La sexy Gin (Clara Lago) es el nuevo amor de Hache (Mario Casas), pero &#233;ste no puede olvidar a su antigua novia, Babi (Mar&#237;a Valverde). Hache ha vuelto a casa tras pasar una temporada en Londres, alejado del recuerdo imborrable de aquel primer amor. Para poder reconstruir su vida y olvidar el pasado, Gin parece perfecta, pues es una chica de esp&#237;ritu descarado, efervescente y vital que le hace creer que es posible revivir aquella magia. Pero tarde o temprano tendr&#225; que encontrarse de nuevo con Babi.', 'Carme El&#237;as, Ferr&#225;n Vilajosana, Antonio Vel&#225;zquez, Luis Fern&#225;ndez,Marina Salas, Andrea Duro, Diego Mart&#237;n, Nerea Camacho, Mar&#237;a Valverde, Clara Lago, &#225;lvaro Cervantes', 'Fernando Gonz&#225;lez Molina', '124 min.', 2013, 'romance', 'Mario Casas', 10, 'assets\\images\\tengo-ganas-de-ti.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

DROP TABLE IF EXISTS `personaje`;
CREATE TABLE IF NOT EXISTS `personaje` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `lugarNacimiento` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `lugarMuerte` varchar(50) NOT NULL,
  `fechaMuerte` date NOT NULL,
  `generoPelicula` varchar(50) NOT NULL,
  `biografia` text NOT NULL,
  `oscar` int(5) NOT NULL,
  `foto` text NOT NULL,
  `pareja` varchar(50) NOT NULL,
  `es_actor` tinyint(1) NOT NULL,
  `es_director` tinyint(1) NOT NULL,
  `code` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`nombre`, `apellido`, `lugarNacimiento`, `fechaNacimiento`, `lugarMuerte`, `fechaMuerte`, `generoPelicula`, `biografia`, `oscar`, `foto`, `pareja`, `es_actor`, `es_director`, `code`) VALUES
('Paul William (Paul Walker)', 'Walker IV', 'Glendale, California', '1973-09-12', 'Santa Clarita, California', '2013-11-30', 'Acci&#243;n', 'Paul naci&#243; en Glendale, California pero se cri&#243; en el Valle de San Fernando en Los &#225;ngeles.Era hijo de Paul Walker III, un contratista de alcantarillado y de Cheryl Crabtree, una exmodelo.Paul era el segundo de cinco hermanos (dos hombres, Caleb y Cody, y dos mujeres, Ashlie y Amie).\r\n\r\nSu abuelo Paul William Walker, Jr. alias "Irish" Billy Walker fue un boxeador profesional. Walker se gradu&#243; del Village Christian High School en 1991. Antes de convertirse en actor quer&#237;a ser bi&#243;logo marino. Paul ten&#237;a entre sus aficiones el surfeo y la pr&#225;ctica de artes marciales como el jiu-jitsu brasile&#241;o y muay thai kickboxing.\r\n\r\nEn 2001, Paul fue nombrado por la revista People como una de las personas m&#225;s sexys. En marzo de 2010, Paul visit&#243; Chile, en especial la ciudad de Constituci&#243;n, para ayudar a las personas damnificadas por el terremoto de magnitud 8,8, el cual golpe&#243; ese pa&#237;s el 27 de febrero del mismo a&#241;o. Paul acudi&#243; junto a param&#233;dicos y ayudas[cita requerida].\r\n\r\nEl 30 de noviembre de 2013, Paul Walker falleci&#243; en un accidente automovil&#237;stico, yendo como copiloto, tras chocar contra un &#225;rbol en el barrio de Valencia de la ciudad de Santa Clarita, California, cuando &#233;ste se encontraba de camino a un evento de caridad realizado por Reach Out Worldwide para las v&#237;ctimas del tif&#243;n Haiyan en Filipinas.', 0, 'assets\\images\\paul-walker.jpg', 'Jasmine Pilchard-Gosnell', 1, 0, 1),
('Brandon Bruce', 'Lee', 'Oakland, California', '1965-02-01', ' Wilmington, Carolina del Norte', '1993-03-31', 'Acci&#243;n', 'Brandon fue hijo de Linda Emery y Bruce Lee. Desde peque&#241;o, Bruce, se encarg&#243; de ense&#241;arle t&#233;cnicas de artes marciales y a los 4 a&#241;os sab&#237;a dar patadas laterales. Con solo 8 a&#241;os qued&#243; hu&#233;rfano de padre y pas&#243; a ser "el hombre de la casa". Brandon era muy aficionado al motociclismo, practicaba las artes marciales y pose&#237;a un carisma similar al de Bruce.\r\n\r\nInici&#243; su carrera como modelo y en anuncios de televisi&#243;n, pero r&#225;pidamente se enfoc&#243; en la actuaci&#243;n. Su primera pel&#237;cula, Kung-F&#250;, recibi&#243; buenas cr&#237;ticas. Lleg&#243; a ser aclamado con la pel&#237;cula Rapid Fire, por lo que declar&#243;, llorando, que seguramente su padre, al verlo, le estar&#237;a sonriendo.', 0, 'assets\\images\\brandon-lee.jpg', 'Eliza Hutton', 1, 0, 2),
('Dennis', 'Hopper', ' Dodge City', '1916-06-23', ' Nueva York', '2010-09-28', 'romance', 'Nacido en Dodge City, Dennis Lee Hopper era hijo de Marjorie Mae (nacida Davis, 12 de julio de 1917 - 12 de enero de 20075 6 ) y James Millard Hopper (23 de junio de 1916 – 7 de agosto de 1982). Hopper y su familia se instalaron en Kansas City (Misuri) tras finalizar la Segunda Guerra Mundial. Sigui&#243; los cursos de pintura de Thomas Hart Benton en el Kansas City Art Institute. Ten&#237;a 13 a&#241;os cuando su familia se traslad&#243; a San Diego en California. En la universidad desarroll&#243; un inter&#233;s por el teatro, interes&#225;ndose particularmente por las obras de William Shakespeare.', 1, 'assets\\images\\dennis-hopper.jpeg', 'Victoria Duffy', 0, 1, 3),
('Vicente Aranda', 'Ezquerra', 'Barcelona, Espa&#241;a', '1926-11-09', 'Madrid, Espa&#241;a', '2015-05-26', 'Romance', 'Est&#225; ligado a la llamada Escuela de Barcelona, cuya refinada est&#233;tica fue una novedad en el cine espa&#241;ol. Fata Morgana (pel&#237;cula) (1966) es una de sus obras m&#225;s representativas y encuadradas en esta corriente.\r\n\r\nAbord&#243; despu&#233;s g&#233;neros m&#225;s comerciales, de cine fant&#225;stico y cine er&#243;tico: Las crueles (1969), La novia ensangrentada (1972), Clara es el precio (1974).\r\n\r\nDespu&#233;s, con m&#225;s rigor, trat&#243; la transexualidad en Cambio de sexo (1977) y llev&#243; a la pantalla, con talento, La muchacha de las bragas de oro (1980), adaptaci&#243;n de la obra de Juan Mars&#233; (incursi&#243;n de un escritor franquista en su pasado). Ambos filmes contribuyeron al despegue profesional de Victoria Abril.\r\n\r\nLuego Aranda dirigi&#243; Asesinato en el Comit&#233; Central (1982), basada en la novela de Manuel V&#225;zquez Montalb&#225;n, pel&#237;cula polic&#237;aca ir&#243;nicamente te&#241;ida de pol&#237;tica; y Fanny Pelopaja (1983), retrato sin concesiones de una joven de suburbio y de un polic&#237;a corrompido.\r\n\r\nA finales de los a&#241;os 80 Aranda alcanz&#243; sus mayores &#233;xitos comerciales. En 1987-88 rod&#243; dos filmes sobre el personaje de El Lute que lanzaron al estrellato a su protagonista Imanol Arias y alcanzaron buena acogida de cr&#237;tica y p&#250;blico. Amantes (1991) fue tal vez el mayor triunfo de Aranda: caus&#243; sensaci&#243;n por su audaces escenas sexuales, gan&#243; los dos principales premios Goya (mejor pel&#237;cula y mejor director), as&#237; como el Oso de Plata a la mejor actriz en Berl&#237;n para Victoria Abril, y contribuy&#243; a la consagraci&#243;n de unos j&#243;venes Maribel Verd&#250; y Jorge Sanz.\r\n\r\nNuevamente con uno de sus actores fetiche, Imanol Arias, a principios de la d&#233;cada de 1990 Aranda rod&#243; El amante biling&#220;e (con Ornella Muti) e Intruso (con &#225;ngel Valero y Victoria Abril). En 1994 le sigui&#243; La pasi&#243;n turca, con Ana Bel&#233;n y Georges Corraface.\r\n\r\nEn 1996, Libertarias, sobre un grupo de mujeres anarquistas en plena revoluci&#243;n espa&#241;ola, re&#250;ne uno de los mayores repartos del cine espa&#241;ol: Ana Bel&#233;n, Victoria Abril, Ariadna Gil, Loles Le&#243;n, Jorge Sanz, Jos&#233; Sancho, Miguel Bos&#233;...\r\n\r\nEn 2001 llev&#243; a la fama a Pilar L&#243;pez de Ayala en el papel principal de Juana La Loca (Premio Goya a la mejor interpretaci&#243;n femenina protagonista). En 2003 dirigi&#243; Carmen, pel&#237;cula protagonizada por Paz Vega y basada en Carmen, la novela de Prosper M&#233;rim&#233;e.\r\n\r\nInsistiendo en el drama de ra&#237;z hist&#243;rica, Aranda abord&#243; posteriormente una adaptaci&#243;n de la narraci&#243;n medieval, Tirante el Blanco, con un reparto internacional y heterog&#233;neo: desde Victoria Abril y Rafael Amargo hasta Giancarlo Giannini y Charlie Cox.', 1, 'assets\\images\\vicente_aranda.jpg', 'sin esposa', 0, 1, 4),
('Robin', 'McLaurin Williams', 'Chicago, Illinois', '1951-07-21', 'Paradise Cay, California,', '2014-08-11', 'Comedia', 'Naci&#243; en Chicago, en el estado de Illinois, como hijo (con otros dos hermanos) de un ejecutivo de la industria del autom&#243;vil. Creci&#243; en un ambiente econ&#243;micamente holgado y no mostr&#243; en su infancia y primera adolescencia inter&#233;s por la interpretaci&#243;n. Se concentr&#243; en cambio en sus estudios y en la pr&#225;ctica de deportes.', 1, 'assets\\images\\robin-williams.jpg', 'Susan Schneider', 1, 0, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `codigoPostal` int(5) NOT NULL,
  `poblacion` varchar(30) NOT NULL,
  `provincia` varchar(2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `fechaNacimiento`, `sexo`, `direccion`, `numero`, `codigoPostal`, `poblacion`, `provincia`, `email`, `username`, `password`, `admin`, `id`) VALUES
('Hector', 'Gonzalez', '1993-10-07', 'M', 'Calle Salatiel', 23, 24007, 'leon', 'ES', 'hector_gon@gmail.com', 'hector23', '1234AAAA', 1, 1),
('Bruno', 'Diaz', '1992-06-16', 'M', 'Calle Felipe II', 8, 24007, 'Leon', 'ES', 'bruno_diaz@hotmail.com', 'batman', '2407brun324', 0, 2),
('Iza', 'Mendoza', '1990-10-23', 'F', 'Calle Reina Zaida', 2, 24007, 'Leon ', 'ES', 'iza@hotmail.es', 'iza24', 're73241jshdg9', 1, 3),
('dkuf', 'dktdky', '2011-04-29', 'm', 'dfghhh', 6, 98524, 'dfghj', 'df', 'cdxsetxrgchfb@nbhvc.iy', 'pinode', 'cf661d9e4e7111610c7681e1bcc24865', 0, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_usuario` (`id_usuario`,`id_pelicula`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`code`);

--
-- Indices de la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD PRIMARY KEY (`code`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `code` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `code` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
