-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 août 2021 à 17:07
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `banka`
--

-- --------------------------------------------------------

--
-- Structure de la table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` int(11) NOT NULL,
  `amount` double NOT NULL,
  `charge_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_04_152724_create_transfers_table', 1),
(5, '2021_08_04_153321_create_banks_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `transfers`
--

INSERT INTO `transfers` (`id`, `sender_id`, `receiver_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 15, '2021-08-11 12:06:56', '2021-08-11 12:06:56'),
(2, 1, 6, 98, '2021-08-11 12:10:45', '2021-08-11 12:10:45'),
(3, 8, 3, 14, '2021-08-11 12:17:55', '2021-08-11 12:17:55'),
(4, 8, 8, 100, '2021-08-11 12:22:26', '2021-08-11 12:22:26'),
(5, 8, 8, 31, '2021-08-11 12:39:12', '2021-08-11 12:39:12'),
(6, 8, 8, 30, '2021-08-11 12:39:45', '2021-08-11 12:39:45'),
(7, 8, 2, 98, '2021-08-11 12:43:33', '2021-08-11 12:43:33'),
(8, 8, 6, 14, '2021-08-11 12:43:49', '2021-08-11 12:43:49'),
(9, 8, 3, 46, '2021-08-11 12:44:18', '2021-08-11 12:44:18'),
(10, 8, 3, 87, '2021-08-11 12:44:24', '2021-08-11 12:44:24'),
(11, 1, 8, 582222, '2021-08-11 12:46:21', '2021-08-11 12:46:21'),
(12, 1, 8, 582222, '2021-08-11 12:46:22', '2021-08-11 12:46:22'),
(13, 10, 4, 72, '2021-08-11 13:03:37', '2021-08-11 13:03:37'),
(14, 10, 10, 14, '2021-08-11 13:03:43', '2021-08-11 13:03:43');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `rip`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdo abderrazzaq', '1', 'laazir@gmail.com', '69200322253691', 'user.png', NULL, '$2y$10$u244PbQ0Unb7YpoVWR92GOQmWozLmiIa87ITJxdeG8t9rk7EBeTjq', NULL, '2021-08-11 12:02:02', '2021-08-11 12:02:02'),
(3, 'Lev Franklin', '0', 'jirosukob@mailinator.com', '96471024435051', 'user.png', NULL, '$2y$10$Q6AbGOPm5M//hTk0VUZPI.VxhjxSW9dolUxZ.3gi.S9egW0h7VAwm', NULL, '2021-08-11 12:03:58', '2021-08-11 12:03:58'),
(4, 'Reagan Solomon', '1', 'pyguvege@mailinator.com', '90760262099912', 'user.png', NULL, '$2y$10$DiMy7TrBqB3iSMahGAx4Ku41HYbdwzLB./xCd4SGBbhaR12XI4svy', NULL, '2021-08-11 12:04:05', '2021-08-11 12:04:05'),
(5, 'Lunea Mckenzie', '0', 'vymaf@mailinator.com', '43894373044249', 'user.png', NULL, '$2y$10$MTCkNBcWEx7EXSnc7IQgT.YVi20We3KdJ2BQ4v5FpEseNZ1F1CQ9W', NULL, '2021-08-11 12:04:08', '2021-08-11 12:04:08'),
(6, 'Keiko Hunter', '0', 'gemehity@mailinator.com', '96541919378773', 'user.png', NULL, '$2y$10$0/9cQ4xRjNmjk.R7Z67CU.nfM.I4JMNedKNUQNi/pwqOy5t/B6gcm', NULL, '2021-08-11 12:04:12', '2021-08-11 12:04:12'),
(7, 'Dahlia Gilbert', '0', 'nomylab@mailinator.com', '84874135576724', 'user.png', NULL, '$2y$10$EuTqHw0v41/dDl2e8iURQOy1L6/GC3el/X8Il/2F63wZhsGaj5DZu', NULL, '2021-08-11 12:04:15', '2021-08-11 12:04:15'),
(8, 'Celeste Boyle', '0', 'favikokax@mailinator.com', '49542941747830', 'user.png', NULL, '$2y$10$M3HAPz.E/G6BMY/AFOJTceEWU47VVSkHbrgqIfunxBZ4C.FqlEXuy', NULL, '2021-08-11 12:17:36', '2021-08-11 12:17:36'),
(9, 'Benedict Jennings', '0', 'ledemezah@mailinator.com', '36668728005074', 'user.png', NULL, '$2y$10$M5ZfWvg5okfcFYgge8NywuU9cmPPswQA3Yp587czM/xzP3bg6slLu', NULL, '2021-08-11 12:57:03', '2021-08-11 12:57:03'),
(10, 'Odessa Young', '0', 'lerupaher@mailinator.com', '14128813573049', 'user.png', NULL, '$2y$10$YKaXubSXiv4E5ChTnGCWJOgq9.cd7l.KCs1VHlNQjn4EpSyjvDZIu', NULL, '2021-08-11 12:58:29', '2021-08-11 12:58:29'),
(11, 'Jamal Davis', '0', 'fahypuru@mailinator.com', '79721681222118', 'user.png', NULL, '$2y$10$lohPhlgJK871sVfxyYuUwe6LqrH1b586xMwLc7T9123FQtXKGQoSm', NULL, '2021-08-11 13:20:34', '2021-08-11 13:20:34');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
