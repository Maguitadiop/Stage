-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 juin 2021 à 12:04
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetstage`
--
-- On a crée un utilisateur admin : il a comme email : admin@gmail.com et comme mot de passe : 12345678. Si vous voulez vous pouvez créer un autre 
-- utilisateur mais le mot de passe doit contenir au moins 8 caractéres.
-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$B6w64D0d7Ds0y/BWplByf.KdoLS5URBReosiRyQ6nM0aWBLS8v8Ei', NULL, NULL, NULL, NULL, NULL, '2021-05-09 18:39:40', '2021-05-09 18:39:40');


-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `intitule`, `created_at`, `updated_at`) VALUES
(1, 'aliment', NULL, NULL),
(2, 'textilt', NULL, NULL),
(3, 'monnaie', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `aliments`
--

CREATE TABLE `aliments` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `aliments`
--

INSERT INTO `aliments` (`id`, `libelle`, `quantite`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'lait', 2, 1, '2021-05-09 18:40:25', '2021-06-09 07:13:25'),
(2, 'Farine', 13, 1, '2021-05-09 18:40:36', '2021-06-09 07:13:25'),
(3, 'riz', 6, 1, '2021-05-10 18:41:58', '2021-06-01 09:26:35');

-- --------------------------------------------------------
--
-- Structure de la table `familles`
--

CREATE TABLE `familles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `familles`
--

INSERT INTO `familles` (`id`, `nom`, `adresse`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Fall', '3 impasse gala', 987654321, 'fall@gmail.com', '2021-05-09 18:41:39', '2021-05-09 18:41:39'),
(2, 'Kaly', '1 rue jules valles, 62-2', 123456789, 'kaly@gmail.com', '2021-05-09 19:13:05', '2021-05-09 19:13:05');

-- --------------------------------------------------------
--
-- Structure de la table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `famille_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `aliment_id` int(10) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `monnaies`
--

CREATE TABLE `monnaies` (
  `id` int(10) UNSIGNED NOT NULL,
  `devise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` int(11) NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `monnaies`
--

INSERT INTO `monnaies` (`id`, `devise`, `montant`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'euros', 60, 3, '2021-05-10 19:45:46', '2021-06-09 07:35:48'),
(2, 'dollars', 77, 3, '2021-05-10 19:46:07', '2021-05-11 22:23:20');

-- --------------------------------------------------------

--
-- Structure de la table `donation_monnaies`
--

CREATE TABLE `donation_monnaies` (
  `id` int(10) UNSIGNED NOT NULL,
  `famille_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `monnaie_id` int(10) UNSIGNED NOT NULL,
  `devise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `textiles`
--

CREATE TABLE `textiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Déchargement des données de la table `textiles`
--

INSERT INTO `textiles` (`id`, `type`, `taille`, `couleur`, `categorie_id`, `created_at`, `updated_at`) VALUES
(1, 'robe', 'xl', 'vert', 2, '2021-06-09 08:31:57', '2021-06-09 08:31:57'),
(2, 'chemise', 'M', 'jaune', 2, '2021-06-09 08:32:35', '2021-06-09 08:32:35');

-- --------------------------------------------------------

--
-- Structure de la table `donation_textiles`
--

CREATE TABLE `donation_textiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `famille_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `famille_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `prenom`, `date_naiss`, `age`, `sexe`, `famille_id`, `created_at`, `updated_at`) VALUES
(1, 'kaly', 'Max', '2021-05-29', 1, 'feminin', 2, '2021-05-09 19:13:38', '2021-05-09 19:13:38'),
(2, 'dupont', 'dupont', '1996-02-29', 25, 'masculin', 1, '2021-06-09 07:18:12', '2021-06-09 07:18:12');

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
(21, '2021_04_27_204040_create_textiles', 3),
(26, '2014_10_12_000000_create_users_table', 4),
(27, '2014_10_12_100000_create_password_resets_table', 4),
(28, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(29, '2019_08_19_000000_create_failed_jobs_table', 4),
(30, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(31, '2021_04_19_194530_create_sessions_table', 4),
(32, '2021_04_20_145736_create_familles', 4),
(33, '2021_04_27_203050_create_categories', 4),
(34, '2021_04_27_203611_create_aliments', 4),
(35, '2021_04_27_204217_create_monnaies', 4),
(36, '2021_04_27_204324_create_personnes', 4),
(37, '2021_04_27_204408_create_donations', 4),
(38, '2021_04_27_220121_create_textiles', 4),
(39, '2021_05_10_201128_create_donations', 5),
(40, '2021_05_10_203353_create_donation_aliments', 6),
(41, '2021_05_10_203547_create_donations', 7),
(42, '2021_05_10_221013_create_donation_textiles', 8),
(43, '2021_05_11_223621_create_donation_monnaies', 9),
(44, '2021_05_12_000333_create_donation_monnaies', 10),
(45, '2021_05_31_181246_create_donation_textiles', 11);

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
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `familles`
--
ALTER TABLE `familles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aliments`
--
ALTER TABLE `aliments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aliments_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `textiles`
--
ALTER TABLE `textiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `textiles_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `monnaies`
--
ALTER TABLE `monnaies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `monnaies_devise_unique` (`devise`),
  ADD KEY `monnaies_categorie_id_foreign` (`categorie_id`);



--
-- Index pour la table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donations_famille_id_foreign` (`famille_id`),
  ADD KEY `donations_categorie_id_foreign` (`categorie_id`),
  ADD KEY `donations_aliment_id_foreign` (`aliment_id`);

--
-- Index pour la table `donation_monnaies`
--
ALTER TABLE `donation_monnaies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donation_monnaies_famille_id_foreign` (`famille_id`),
  ADD KEY `donation_monnaies_categorie_id_foreign` (`categorie_id`),
  ADD KEY `donation_monnaies_monnaie_id_foreign` (`monnaie_id`);

--
-- Index pour la table `donation_textiles`
--
ALTER TABLE `donation_textiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donation_textiles_famille_id_foreign` (`famille_id`),
  ADD KEY `donation_textiles_categorie_id_foreign` (`categorie_id`);

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
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personnes_famille_id_foreign` (`famille_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT pour la table `aliments`
--
ALTER TABLE `aliments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `donation_monnaies`
--
ALTER TABLE `donation_monnaies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `donation_textiles`
--
ALTER TABLE `donation_textiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `familles`
--
ALTER TABLE `familles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `monnaies`
--
ALTER TABLE `monnaies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `textiles`
--
ALTER TABLE `textiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aliments`
--
ALTER TABLE `aliments`
  ADD CONSTRAINT `aliments_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_aliment_id_foreign` FOREIGN KEY (`aliment_id`) REFERENCES `aliments` (`id`),
  ADD CONSTRAINT `donations_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `donations_famille_id_foreign` FOREIGN KEY (`famille_id`) REFERENCES `familles` (`id`);

--
-- Contraintes pour la table `donation_monnaies`
--
ALTER TABLE `donation_monnaies`
  ADD CONSTRAINT `donation_monnaies_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `donation_monnaies_famille_id_foreign` FOREIGN KEY (`famille_id`) REFERENCES `familles` (`id`),
  ADD CONSTRAINT `donation_monnaies_monnaie_id_foreign` FOREIGN KEY (`monnaie_id`) REFERENCES `monnaies` (`id`);

--
-- Contraintes pour la table `donation_textiles`
--
ALTER TABLE `donation_textiles`
  ADD CONSTRAINT `donation_textiles_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `donation_textiles_famille_id_foreign` FOREIGN KEY (`famille_id`) REFERENCES `familles` (`id`);

--
-- Contraintes pour la table `monnaies`
--
ALTER TABLE `monnaies`
  ADD CONSTRAINT `monnaies_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD CONSTRAINT `personnes_famille_id_foreign` FOREIGN KEY (`famille_id`) REFERENCES `familles` (`id`);

--
-- Contraintes pour la table `textiles`
--
ALTER TABLE `textiles`
  ADD CONSTRAINT `textiles_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
