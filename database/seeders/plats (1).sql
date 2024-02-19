-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 fév. 2024 à 04:04
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel_10`
--

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

DROP TABLE IF EXISTS `plats`;
CREATE TABLE IF NOT EXISTS `plats` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double(5,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `fichier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categories_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plats_categories_id_foreign` (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `nom`, `prix`, `description`, `fichier`, `created_at`, `updated_at`, `categories_id`) VALUES
(1, 'nisl nunc nisl duis', 38.00, NULL, 'plats.jpg', '2022-04-25 06:49:40', '2023-03-25 15:39:16', 4),
(2, 'rhoncus dui vel sem sed', 3.00, 'nulla sed accumsan felis ut at dolor quis odio consequat varius integer', 'plats.jpg', '2022-09-11 22:44:05', '2023-01-04 04:24:16', 4),
(3, 'nulla eget eros', 26.00, 'lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar', 'plats.jpg', '2022-05-29 17:22:24', '2023-07-15 16:43:57', 4),
(4, 'lectus aliquam sit', 37.00, 'suspendisse ornare consequat lectus in est risus', 'plats.jpg', '2022-07-23 00:19:50', '2023-10-08 08:23:30', 4),
(5, 'semper porta volutpat quam pede', 33.00, 'ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus', 'plats.jpg', '2022-04-23 09:05:40', '2023-11-20 21:24:52', 4),
(6, 'enim sit amet nunc', 20.00, NULL, 'plats.jpg', '2022-03-22 10:14:07', '2023-01-23 21:08:48', 4),
(7, 'hac habitasse platea dictumst aliquam', 5.00, NULL, 'plats.jpg', '2022-10-21 07:59:52', '2022-12-31 17:51:05', 4),
(8, 'vulputate elementum nullam varius nulla', 20.00, 'orci mauris lacinia sapien quis libero nullam sit amet', 'plats.jpg', '2022-05-04 04:20:38', '2023-04-01 01:30:07', 5),
(9, 'eu sapien cursus', 26.00, NULL, 'plats.jpg', '2022-08-02 09:40:40', '2023-05-20 06:18:37', 5),
(10, 'nullam varius nulla facilisi', 37.00, NULL, 'plats.jpg', '2022-08-17 05:55:12', '2023-07-27 20:33:04', 5),
(11, 'leo pellentesque ultrices', 15.00, 'rutrum nulla tellus in sagittis dui vel nisl duis ac nibh', 'plats.jpg', '2022-04-27 17:08:19', '2023-01-16 10:03:25', 5),
(12, 'amet lobortis sapien sapien non', 10.00, NULL, 'plats.jpg', '2022-09-24 12:56:57', '2023-02-18 21:55:13', 5),
(13, 'eleifend quam a odio', 21.00, 'congue diam id ornare imperdiet sapien urna pretium nisl', 'plats.jpg', '2022-11-21 21:55:07', '2023-02-15 00:21:39', 1),
(14, 'curae nulla dapibus dolor vel', 17.00, 'ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at', 'plats.jpg', '2022-03-08 05:42:03', '2023-01-31 14:46:37', 1),
(15, 'massa quis augue luctus tincidunt', 36.00, 'dui vel sem sed sagittis nam congue risus semper porta volutpat', 'plats.jpg', '2022-06-21 13:54:54', '2023-09-30 06:01:56', 1),
(16, 'in hac habitasse platea dictumst', 9.00, 'magnis dis parturient montes nascetur ridiculus mus vivamus', 'plats.jpg', '2022-06-18 14:54:45', '2023-07-11 21:04:02', 1),
(17, 'in blandit ultrices', 40.00, 'ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo', 'plats.jpg', '2022-12-16 14:58:31', '2023-10-21 14:28:17', 1),
(18, 'amet sem fusce', 8.00, 'cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor', 'plats.jpg', '2022-01-05 17:38:12', '2023-10-07 20:28:01', 2),
(19, 'in felis donec', 34.00, NULL, 'plats.jpg', '2022-10-02 10:52:44', '2023-07-26 18:24:10', 2),
(20, 'fermentum donec ut mauris', 13.00, 'sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in', 'plats.jpg', '2022-05-02 00:43:07', '2023-01-29 20:54:04', 2),
(21, 'nullam orci pede', 16.00, NULL, 'plats.jpg', '2022-09-15 17:30:36', '2023-01-26 04:53:39', 2),
(22, 'quam turpis adipiscing lorem', 34.00, 'morbi vestibulum velit id pretium iaculis diam erat fermentum', 'plats.jpg', '2022-07-06 16:25:41', '2023-02-22 20:16:15', 2),
(23, 'massa id nisl venenatis lacinia', 39.00, 'dui vel nisl duis ac nibh fusce lacus purus', 'plats.jpg', '2022-03-12 09:58:04', '2023-08-28 14:51:07', 3),
(24, 'sit amet sapien dignissim', 8.00, NULL, 'plats.jpg', '2022-09-25 07:06:35', '2023-10-09 11:13:53', 3),
(25, 'in felis donec semper sapien', 12.00, NULL, 'plats.jpg', '2022-04-19 15:21:43', '2023-08-05 22:59:33', 3),
(26, 'pretium nisl ut volutpat', 16.00, 'tincidunt lacus at velit vivamus vel nulla eget', 'plats.jpg', '2022-04-17 16:06:33', '2023-07-22 11:34:17', 3),
(27, 'lorem ipsum dolor sit amet', 8.00, 'cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui', 'plats.jpg', '2022-03-22 14:03:03', '2023-03-27 13:20:17', 3),
(28, 'pede justo eu massa donec', 32.00, NULL, 'plats.jpg', '2022-12-11 12:53:11', '2023-10-05 11:59:40', 3),
(29, 'rutrum at lorem', 16.00, NULL, 'plats.jpg', '2022-08-15 15:10:34', '2023-05-06 04:18:46', 1),
(30, 'rutrum at lorem', 16.00, NULL, 'plats.jpg', '2022-08-15 15:10:34', '2023-05-06 04:18:46', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
