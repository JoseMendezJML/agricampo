-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.15.0.7171
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla agricampo.cache: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.cache_locks: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.climas: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.cultivos: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.failed_jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.job_batches: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.migrations: ~6 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_07_13_032838_create_cultivos_table', 1),
	(5, '2026_07_13_032847_create_productos_table', 1),
	(6, '2026_07_13_032854_create_parcelas_table', 1),
	(7, '2026_07_13_202835_create_climas_table', 2);

-- Volcando datos para la tabla agricampo.parcelas: ~0 rows (aproximadamente)
INSERT INTO `parcelas` (`id`, `nombre`, `ubicacion`, `hectareas`, `tipo_suelo`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'parcela norte', 'ocosingo, chiapas', 12.50, 'franco', 'disponible', '2026-07-14 01:25:18', '2026-07-14 01:25:18');

-- Volcando datos para la tabla agricampo.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla agricampo.productos: ~0 rows (aproximadamente)
INSERT INTO `productos` (`id`, `nombre`, `categoria`, `descripcion`, `precio`, `stock`, `created_at`, `updated_at`) VALUES
	(1, 'fertilizando organico', 'fertilizante', 'Semilla mejorada para cultivo de maíz', 85.00, 100, '2026-07-14 01:31:27', '2026-07-14 01:31:27');

-- Volcando datos para la tabla agricampo.sessions: ~2 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('Pb5JFOwqaw8M02vUjQTGhUSgsDWQZhXgU92glDST', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.127.0 Chrome/148.0.7778.97 Electron/42.2.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibmNYODd0RHZjczFFbzk1UmNTVUF0Q2l1VkJaeVhxUEtoTjZZaEpidiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjtzOjU6InJvdXRlIjtzOjk6ImRhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1783993817),
	('PJHphEQunIj1OiTSbxKxZv5NMy3USr2r8PczuBIU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY3RMQXJFcGtmQ2trTnRIM25Hajk5ZG1SaXdmQXdOOVBkaEdkSWpicCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6OToiZGFzaGJvYXJkIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1783993880);

-- Volcando datos para la tabla agricampo.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'valeria', 'vjimenezaguilar24@gmail.com', NULL, '$2y$12$Vov4VuC3zAKAqKNtq/CMJ.SOEzec2t4P8o4eaMfFjrrrqlh7Oqwe2', NULL, '2026-07-14 01:49:44', '2026-07-14 01:49:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
