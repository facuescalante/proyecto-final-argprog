-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 14:33:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automotores`
--

CREATE TABLE `automotores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `patente` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `titulares_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `automotores`
--

INSERT INTO `automotores` (`id`, `marca`, `modelo`, `patente`, `tipo`, `titulares_id`, `created_at`, `updated_at`) VALUES
(9, 'renault', '18', 'piu-464', 'sedan', 3, '2023-11-20 23:50:51', '2023-11-25 16:28:27'),
(10, 'peugeot', '208', 'top-789', 'sedan', 4, '2023-11-22 16:19:19', '2023-11-22 16:19:19'),
(11, 'mercedes', '550-t', '698-iol', 'sedan', 5, '2023-11-22 17:10:18', '2023-11-22 17:10:18'),
(14, 'toyota', 'hilux', 'lkp-566', '4x4', 7, '2023-11-25 15:41:47', '2023-11-25 15:41:47'),
(15, 'toyota', 'hilux', 'TIP-755', '4x4', 4, '2023-11-25 15:48:33', '2023-11-25 15:48:33'),
(16, 'ford', 'falcon', 'TRE-475', 'sedan', 8, '2023-11-25 16:00:58', '2023-11-25 16:00:58'),
(17, 'honda', 'motovehiculo', 'TUG-101', 'cross', 5, '2023-11-25 16:30:43', '2023-11-25 16:30:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infracciones`
--

CREATE TABLE `infracciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `automotores_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `infracciones`
--

INSERT INTO `infracciones` (`id`, `fecha`, `descripcion`, `automotores_id`, `created_at`, `updated_at`) VALUES
(9, '22/11/2023', 'alcoholemia positiva', 10, '2023-11-22 16:21:04', '2023-11-22 16:21:04'),
(10, '22/11/2023', 'alcoholemia positiva', 11, '2023-11-22 17:11:20', '2023-11-22 17:11:20'),
(11, '23/11/2023', 'luz roja', 11, '2023-11-23 07:16:31', '2023-11-23 07:16:31'),
(72, '24/11/2023', 'mal estacionado', 10, '2023-11-25 15:36:54', '2023-11-25 15:36:54'),
(73, '24/11/2022', 'doping positivo', 14, '2023-11-25 15:42:40', '2023-11-25 16:27:01'),
(74, '24/11/2023', 'alcoholemia positiva', 9, '2023-11-25 15:53:56', '2023-11-25 15:53:56'),
(75, '24/11/2023', 'alcoholemia positiva', 11, '2023-11-25 15:55:40', '2023-11-25 15:55:40'),
(76, '24/11/2023', 'exceso velocidad', 16, '2023-11-25 16:01:20', '2023-11-25 16:01:20'),
(77, '24/11/2023', 'exceso velocidad', 17, '2023-11-25 16:31:09', '2023-11-25 16:31:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_20_194154_create_titulares_table', 2),
(7, '2023_11_20_194306_create_automotores_table', 3),
(8, '2023_11_20_194320_create_infracciones_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulares`
--

CREATE TABLE `titulares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `edad` varchar(255) NOT NULL,
  `nrolicencia` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `titulares`
--

INSERT INTO `titulares` (`id`, `nombre`, `apellido`, `dni`, `edad`, `nrolicencia`, `created_at`, `updated_at`) VALUES
(3, 'jose', 'perez', '26366999', '84', '54545', '2023-11-20 23:49:59', '2023-11-20 23:49:59'),
(4, 'mercedez', 'guzman', '22125369', '34', '565565', '2023-11-22 16:09:58', '2023-11-25 16:29:36'),
(5, 'sebastian', 'first', '23698745', '46', '88yu878', '2023-11-22 17:08:28', '2023-11-22 17:08:28'),
(7, 'jose maria', 'muñoz', '7.589.658', '75', '4656879898', '2023-11-25 15:40:58', '2023-11-25 15:40:58'),
(8, 'olga', 'capparelli', '93568588', '46', '8987987jhj', '2023-11-25 16:00:01', '2023-11-25 16:00:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'facundo escalante', 'facumax@live.com', NULL, '$2y$12$dyd9lkpw6hJjcqRiArjuzex/SG/pbk1kXZVMvggXKO8c6FlKJivgq', 'vfhtc734aUygybM190Iq6KJJloRVMgm7uwAUIqBU3xf4Hc8JJjBGvXxNy4dP', '2023-11-20 23:26:49', '2023-11-20 23:26:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automotores`
--
ALTER TABLE `automotores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `automotores_titulares_id_foreign` (`titulares_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `infracciones`
--
ALTER TABLE `infracciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infracciones_automotores_id_foreign` (`automotores_id`);

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
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `titulares`
--
ALTER TABLE `titulares`
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
-- AUTO_INCREMENT de la tabla `automotores`
--
ALTER TABLE `automotores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infracciones`
--
ALTER TABLE `infracciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `titulares`
--
ALTER TABLE `titulares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automotores`
--
ALTER TABLE `automotores`
  ADD CONSTRAINT `automotores_titulares_id_foreign` FOREIGN KEY (`titulares_id`) REFERENCES `titulares` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `infracciones`
--
ALTER TABLE `infracciones`
  ADD CONSTRAINT `infracciones_automotores_id_foreign` FOREIGN KEY (`automotores_id`) REFERENCES `automotores` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
