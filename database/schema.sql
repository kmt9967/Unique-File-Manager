-- Unique File Manager: database structure only (no data).
-- Import into an empty MySQL/MariaDB database named `data`
-- (the name used in cloud/connect.php). Create users via the Sign-up page.

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `files` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `relation` (
  `idd` bigint(50) NOT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_unique` (`username`);

ALTER TABLE `relation`
  ADD PRIMARY KEY (`idd`);

ALTER TABLE `files`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `relation`
  MODIFY `idd` bigint(50) NOT NULL AUTO_INCREMENT;
