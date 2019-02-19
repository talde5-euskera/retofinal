-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-02-2019 a las 08:43:57
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bolsatrabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombreapellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `baja` tinyint(1) NOT NULL DEFAULT '0',
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCurriculum` int(10) UNSIGNED DEFAULT NULL,
  `idCurso` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombreapellidos`, `dni`, `email`, `password`, `direccion`, `ciudad`, `telefono`, `baja`, `foto`, `idCurriculum`, `idCurso`, `created_at`, `updated_at`) VALUES
(1, 'Aritz Perez Garcia', '45627795G', 'aritzperezeuskara@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Leon 25 3ºizda', 'Basauri', 688814116, 0, '/images/aritz.png', 1, 1, NULL, '2019-01-31 07:59:10'),
(5, 'Alex Lara Martin', '98765487H', 'alexlara@gmail.com', '$2y$10$kPXAmBjcL4Ju4bJ.sftffe6wOWs/sUix/Dn71Xsf1pMtUnnxBxZRK', 'calle del troll de internet', 'Galdakao', 666555444, 0, 'images/alex.png', NULL, NULL, '2019-01-23 10:56:17', '2019-01-23 10:56:17'),
(39, 'Gotzon Otazua', '98765487G', 'gotzon@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Casa de gotzon', 'Arrieta', 699885544, 0, '/images/gotzon.png', NULL, NULL, '2019-01-28 08:43:28', '2019-01-28 08:43:28'),
(48, 'Andrea Fernandez Velasco', '12345678K', 'andrea@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Calle 1', 'Bilbao', 666666666, 1, '/images/andrea.png', NULL, NULL, '2019-02-04 11:02:23', '2019-02-04 11:02:23'),
(49, 'Jon Benjamin Ahedo', '87654321H', 'jonbenjamin@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Calle 2', 'Bilbao', 123456789, 0, '/images/benjas.png', NULL, NULL, '2019-02-04 11:02:23', '2019-02-04 11:02:23'),
(50, 'Ander Itza', '45278469Q', 'ander@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Calle 3', 'Bilbao', 678745698, 1, '/images/ander.png', NULL, NULL, '2019-02-04 11:02:23', '2019-02-04 11:02:23'),
(51, 'Alexander Mendiluze', '17864985F', 'alex@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Calle 4', 'Bilbao', 628745935, 0, '/images/alexm.png', NULL, NULL, '2019-02-04 11:02:23', '2019-02-04 11:02:23'),
(52, 'Samuel Hidalgo', '57842648N', 'samuel@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Calle 5', 'Bilbao', 628745935, 0, '/images/samuel.png', NULL, NULL, '2019-02-04 11:02:23', '2019-02-04 11:02:23'),
(53, 'Markel Rozas', '75964821V', 'markel@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Calle 6', 'Bilbao', 618753489, 0, '/images/markel.png', NULL, NULL, '2019-02-04 11:02:23', '2019-02-04 11:02:23'),
(54, 'Alvar Alonso', '64851674Z', 'alvar@gmail.com', '$2y$10$q47JZF70zHiROe/vnqs.xutMkkCWdFaLwuzpmLft07h8S97HUU7xi', 'Calle 8', 'Bilbao', 674521842, 0, '/images/osama.png', NULL, NULL, '2019-02-04 11:02:23', '2019-02-05 07:40:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apuntados`
--

CREATE TABLE `apuntados` (
  `idAlumno` int(11) NOT NULL,
  `idOferta` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `apuntados`
--

INSERT INTO `apuntados` (`idAlumno`, `idOferta`, `updated_at`, `created_at`) VALUES
(41, 1, '2019-01-31 08:40:54', '2019-01-31 08:40:54'),
(5, 1, '2019-01-31 08:44:54', '2019-01-31 08:44:54'),
(5, 2, '2019-01-31 08:52:30', '2019-01-31 08:52:30'),
(5, 3, '2019-01-31 10:58:40', '2019-01-31 10:58:40'),
(50, 3, '2019-02-06 07:49:25', '2019-02-06 07:49:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculums`
--

CREATE TABLE `curriculums` (
  `id` int(10) UNSIGNED NOT NULL,
  `archivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curriculums`
--

INSERT INTO `curriculums` (`id`, `archivo`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `departamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `departamento`, `nombre`) VALUES
(1, 'informatica', 'Desarollo de aplicaciones web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_17_085451_create_alumnos_table', 1),
(4, '2019_01_17_091041_create_curriculum_table', 2),
(5, '2019_01_17_091212_create_curso_table', 3),
(6, '2019_01_17_091508_create_curso_table', 4),
(7, '2019_01_17_092009_create_curriculum_table', 5),
(8, '2019_01_17_092325_create_curriculums_table', 6),
(9, '2019_01_17_092643_create_cursos_table', 7),
(10, '2019_01_17_092858_create_profesores_table', 8),
(11, '2019_01_17_093421_create_ofertas_table', 9),
(12, '2019_01_17_094825_create_alumnos_table', 10),
(13, '2019_01_25_071445_create_apuntados_table', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funciones` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requisitos` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idProfesor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `titulo`, `empresa`, `localizacion`, `sector`, `descripcion`, `funciones`, `requisitos`, `idProfesor`, `created_at`, `updated_at`) VALUES
(3, 'Asistente técnico (Química)', 'Noawork ETT, S.L.', 'Castellón de la Plana, Castellón (España)', 'Quimica', 'Noawork selecciona Asistente Técnico (Química) para importante empresa especializada en el desarrollo productos químicos y la comercialización de materias primas para la industria cerámica situada en Castellón.', '- Asistencia Técnica a clientes a nivel internacional, principalmente en zona de Marruecos.', '- Formación en químicas. - Nivel elevado de francés. - Experiencia en puestos similares en empresas del sector - Experiencia en desfloculación de tierras y esmaltes. - Disponibilidad para viajes de lunes a viernes.', NULL, '2019-01-23 07:24:59', '2019-01-23 07:24:59'),
(4, 'Analista de mercado (Administración)', 'Grupo SGS España', 'Barcelona, Barcelona (España)', 'Administración y Finanzas', 'Grupo SGS España selecciona Analista de Mercado (Administración) para importante empresa especializada en controles de aduanas situada en Barcelona.', 'Grado Universitario o calificación profesional equivalente: Comercio Internacional, Administración y/o Economía.- Experiencia en Comercio Internacional (Importación/Exportación) mínimo 1 año.- Experiencia en términos y prácticas comerciales (Incoterms, documentos de exportación, documentos de pago, contratos, etc.)- Conocimiento de Sistemas de Valoración de Mercancías en Aduanas.- Nivel muy alto de Inglés, Francés y Castellano.', '- Formación en químicas. - Nivel elevado de francés. - Experiencia en puestos similares en empresas del sector - Experiencia en desfloculación de tierras y esmaltes. - Disponibilidad para viajes de lunes a viernes.', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41'),
(5, 'Becario/a Digital Marketing y Comercio Online', 'Mumkashoes S.L.', 'Barcelona, Barcelona (España)', 'Comercio y Marketing', 'Mumkashoes S.L. selecciona becario para importante empresa especializada en la venta de calzado orientado a todo el público. Se busca persona para dedicarse a la campaña de Navidad, ubicada en Barcelona.', 'Las tareas a realizar es todo aquello relacionado con las Redes Sociales de la marca (campañas, publicaciones, interacción con seguidores...), la atención al cliente, la gestión de venta online, contacto con proveedores, análisis de mercado...', 'Cursando último año de carrera o postgrado con posibilidad de firmar convenio con Universidad o Centro de Estudios. (Marketing, ADE, comunicación...)\r\n*Trabajos demostrables de proyectos en páginas web, redes sociales, campañas publicitarias...\r\n*Conocimientos de Photoshop, Adobe Ilustrator, RRSS (Twitter, Instagram, Facebook, Youtube...), programas de edición de vídeo, Google Analytics, Marketing, Retail...\r\n*Idiomas: castellano nativo, inglés nivel alto, se valorarán otros idiomas.', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41'),
(6, 'Recién titulados/as FP informática', 'Indra Producción de Software', 'Santiago de Compostela, A Coruña (España)', 'Informática', 'Como parte esencial de nuestro equipo en Santiago de Compostela buscamos incorporar profesionales junior para integrarse en un equipo multidisciplinar de trabajo en nuestros proyectos.', '- Formación continuada en la Indra Open University, además de acceso gratuito a la plataforma Udemy for Business con más de 3.000 cursos especializados..\r\n- Flexibilidad y conciliación laboral, con opción de flexibilidad horaria.', '- Recién titulados de Formación Profesional de la rama informática.', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41'),
(7, 'Electromecánico Gipuzkoa', 'Afron S.L.', 'Andoain, Guipúzcoa/Gipuzkoa (España)', 'Electricidad-Electrónica', 'Afron selecciona electromecánico para su delegación de Gipuzcoa\r\n\r\n-Imprescindible Experiencia como electromecánico al menos 2 años.\r\n-Conocimientos de electrónica, mecánica, hidráulica, electricidad\r\n-Se valorará Carnet de carretillas elevadoras\r\n-Orientación al cliente, trabajo en equipo, polivalente.\r\n-Disponibilidad de incorporación inmediata.\r\n-Puesto estable, temporal con intención Indefinido \r\n-Horario: de Lunes a Jueves de 8 a 18 y Viernes de 8 a 15 horas.', '- Instalación de cableado a domicilio.\r\n- Asistencia técnica a domicilio.\r\n- Asistencia técnica por teléfono.\r\n- Traslado de material.', 'Experiencia mínima 2 años\r\n-Capacidad de Resolución\r\n-Disponibilidad Inmediata', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41'),
(8, 'Operador de planta química\r\n', 'Alcover Química', 'Alcover, Tarragona (España)', 'Quimica', 'Planta industrial química (no farmacéutica), ubicada en Alcover (Tarragona), desea cubrir puesto en producción como OPERADOR DE PLANTA QUÍMICA.', '- Formación a cargo de la EMPRESA.\r\n- Trabajo a TURNOS de MAÑANA, TARDE Y NOCHE.\r\n- Trabajo en EXTERIORES.\r\n- Abastecimiento de materias primas a las líneas de producción.', 'Disponibilidad INMEDIATA.\r\n- Disponibilidad PARA TRABAJAR A TURNOS.\r\n- Estar en posesión del título de la formación acreditada.\r\n- Se valorará estar en posesión del título de Grado Superior de Química Industrial.', NULL, '2019-01-23 07:24:59', '2019-01-23 07:24:59'),
(9, 'Responsable Administración&Finanzas', 'Spring Professional Finance', 'Vilafranca Del Penedès, Barcelona (España)', 'Administración y Finanzas', 'En este puesto tendrás la oportunidad de trabajar en Excelsia, empresa distribuidora de vinos y destilados premium con una amplia cobertura a nivel nacional. ¡Te estamos buscando! Tendrás un plan de carrera que te permitirá seguir creciendo en el sector Vitivinícola, y podrás disfrutar de beneficios que la empresa pone a tu disposición desde el momento de tu incorporación.', 'Análisis de los Estados Financieros\r\nLiderar al equipo del departamento comercial y dar su soporte\r\nGestionar de pedidos y facturación de la Distribuidora\r\nGestionar créditos a clientes\r\nControlar y realizar seguimiento del saldo contable de los clientes\r\nGestionar la morosidad\r\nElaborar y realizar seguimiento de los presupuestos', 'Experiencia mínima de 5 años en un puesto similar\r\nConocimiento de SAP\r\nGestión de equipos\r\nConocimientos de Finanzas\r\nConocimientos de Administración Comercial\r\nAlto dominio de inglés', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41'),
(10, 'Responsable de Marketing - Agencia Comunicación', 'Avansis', 'Badajoz, Badajoz (España)', 'Comercio y Marketing', 'Estamos buscando una persona que ocupe la posición de Responsable de Marketing en una importante agencia de comunicación en Badajoz y que tenga conocimientos para abordar proyectos en las siguientes áreas:\r\n\r\n- Diseño Gráfico\r\n- Diseño Web\r\n- Comercio Electrónico \r\n- Identidad Cooporativa\r\n- Marketing On Line \r\n- Planificación de Medio \r\n- Diseño Editorial\r\n- Fotografía\r\n- Producción Audiovisual', '- Gestionar el área de producción \r\n- Gestionar proyectos con clientes actuales y nuevos \r\n- Preventa \r\n- Responsabilidad sobre cuenta de clientes\r\n- Gestión de equipos', '- Experiencia de más de 3 años en el sector \r\n- Logros en clientes probados\r\n- Actitud proactiva hacia la venta', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41'),
(11, 'Tester de Plugins en Internet Explorer', 'Microsoft Corporation', 'Redmond, Washington, Estados Unidos', 'Informática', 'Microsoft Corporation selecciona candidatos como Beta Tester de Plugins en el navegador Internet Explorer, a jornada completa de Lunes a Domingo.', '- Testeo de plugins.\r\n- Realización de documentación detallada del proceso.\r\n- Reuniones y charlas orientadas al aprendizaje del mismo.', 'Formación en informática y programación básica.\r\n- valorable en experienicia en practicas formativas.', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41'),
(12, 'Recien titulado en Electricidad/electronica (H/M)', 'Manpower', 'Alcorcón, Madrid (España)', 'Electricidad-Electrónica', 'Empresa de ingenieria demanda personas con formación en electricidad/electronica para la fabricación de armarios electricos, montaje de prototipos, cableado, pequeñas soldaduras, interpretación de planos, etc.', 'Horario de lunes a viernes de 8.30 a 14.30 y de 16 a 18h.\r\nJornada intensiva en julio y agosto de 7 a 15h.\r\nSalario de 8.20€/h.\r\nContrato de ETT + posterior incorporación en plantilla, posibilidades reales de estabilidad.', 'Formación en electricidad/electronica.\r\n- valorable en experienicia en practicas formativas.', NULL, '2019-01-23 07:24:59', '2019-02-04 12:50:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departamento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombreapellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baja` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `foto`, `departamento`, `nombreapellidos`, `dni`, `direccion`, `ciudad`, `telefono`, `email`, `password`, `baja`, `admin`, `created_at`, `updated_at`) VALUES
(3, '/images/obama.png', 'Administración y Finanzas', 'Barack Obama', '26587421F', 'La cañada real chabola nº1', 'EEUU', 647851234, 'obama@gmail.com', '$2y$10$kPXAmBjcL4Ju4bJ.sftffe6wOWs/sUix/Dn71Xsf1pMtUnnxBxZRK', 0, 0, NULL, '2019-01-31 10:08:17'),
(4, '/images/clint.png', 'Electricidad-Electrónica', 'Clint Eastwood', '45678912K', 'La cañada real chabola nº2', 'EEUU', 685214789, 'clint@gmail.com', '$2y$10$kPXAmBjcL4Ju4bJ.sftffe6wOWs/sUix/Dn71Xsf1pMtUnnxBxZRK', 0, 0, NULL, '2019-01-31 10:08:17'),
(5, '/images/dross.png', 'Comercio y Marketing', 'Dross Rotzank', '67458921Y', 'La cañada real chabola nº2', 'Latinoamérica', 625478521, 'dross@gmail.com', '$2y$10$kPXAmBjcL4Ju4bJ.sftffe6wOWs/sUix/Dn71Xsf1pMtUnnxBxZRK', 0, 0, NULL, '2019-01-31 10:08:17'),
(6, '/images/sheldon.png', 'Química', 'Sheldon Cooper', '52147896Ñ', 'Nave de Star Trek 1892', 'Big Bang', 685479654, 'sheldon@gmail.com', '$2y$10$kPXAmBjcL4Ju4bJ.sftffe6wOWs/sUix/Dn71Xsf1pMtUnnxBxZRK', 0, 0, NULL, '2019-01-31 10:08:17'),
(7, '/images/morgan.png', 'Informática', 'Morgan Freeman', '57741264B', 'Chabolilla nº3', 'EEUU', 625874123, 'morgan@gmail.com', '$2y$10$kPXAmBjcL4Ju4bJ.sftffe6wOWs/sUix/Dn71Xsf1pMtUnnxBxZRK', 1, 0, NULL, '2019-01-31 10:08:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnos_idcurriculum_foreign` (`idCurriculum`),
  ADD KEY `alumnos_idcurso_foreign` (`idCurso`);

--
-- Indices de la tabla `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ofertas_idprofesor_foreign` (`idProfesor`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `curriculums`
--
ALTER TABLE `curriculums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_idcurriculum_foreign` FOREIGN KEY (`idCurriculum`) REFERENCES `curriculums` (`id`),
  ADD CONSTRAINT `alumnos_idcurso_foreign` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_idprofesor_foreign` FOREIGN KEY (`idProfesor`) REFERENCES `profesores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
