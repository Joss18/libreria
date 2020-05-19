-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2020 a las 19:04:48
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_27_191219_create_peliculas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actores` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `año` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `calificacion` int(11) NOT NULL,
  `url_img` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_mov` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `director`, `actores`, `año`, `genero`, `descripcion`, `calificacion`, `url_img`, `url_mov`, `usuario`, `created_at`, `updated_at`) VALUES
(17, 'La Lista de Schindler', 'Steven Spielberg', 'Liam Neeson, Ben Kingsley, Ralph Fiennes, Caroline Goodall', '1993', 'Drama - Nazismo', 'Oskar Schindler (Liam Neeson), un empresario alemán de gran talento para las relaciones públicas, busca ganarse la simpatía de los nazis de cara a su beneficio personal. Después de la invasión de Polonia por los alemanes en 1939, Schindler consigue, gracias a sus relaciones con los altos jerarcas nazis, la propiedad de una fábrica de Cracovia. Allí emplea a cientos de operarios judíos, cuya explotación le hace prosperar rápidamente.', 89, 'lista_shindler.jpg', NULL, 'joss18@gmail.com', '2020-05-01 19:18:32', '2020-05-01 19:18:32'),
(18, 'Corazón Valiente', 'Mel Gibson', 'Mel Gibson, Angus McFadyen, Sophie Marceau, Brian Cox', '1995', 'Drama- Histórico', 'En 1280, el rey Eduardo I de Inglaterra invade y conquista Escocia tras la muerte de Alejandro III de Escocia, que no dejó heredero al trono. El joven William Wallace es testigo de la traición del rey inglés, sobrevive a la muerte de su padre y su hermano, y es llevado al extranjero en una peregrinación por toda Europa por su tío paterno Argyle, donde es educado. Años después, Eduardo I le otorga a sus nobles tierras y privilegios en Escocia, incluida la prima noctis. Mientras tanto, un adulto Wallace regresa a Escocia y se enamora de su amiga de la infancia Murron MacClannough, y los dos se casan en secreto.', 90, 'corazon_valiente.jpg', NULL, 'joss18@gmail.com', '2020-05-01 19:33:02', '2020-05-01 19:33:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Josue Alejandro Velasquez P.', 'josuevel@gmail.com', NULL, '$2y$10$hPCS/qOXXULDe.e/7onI4uh.UVE5JeBJ/ynlEZIrQMiNO.ZJF14hm', NULL, '2020-04-27 23:29:59', '2020-04-27 23:29:59'),
(2, 'Adriana Micaela Velasquez P.', 'adrianamvelasquezp@gmail.com', NULL, '$2y$10$Q/ICs7zc0oonpx5EmARHpu8dtIjAj2lXmHQIHYfl2QkBP/bSPPK2.', NULL, '2020-04-27 23:31:44', '2020-04-27 23:31:44'),
(3, 'Jose Luis', 'joss18@gmail.com', NULL, '$2y$10$PxzA2MPT0WHflSZ6c.Bj8OliTDOmBDMbFjb7DQGEsj.Oo00mSYaMa', NULL, '2020-04-29 04:07:11', '2020-04-29 04:07:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
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
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
