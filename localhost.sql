-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 04 Juillet 2017 à 09:38
-- Version du serveur :  5.5.52-0+deb8u1
-- Version de PHP :  5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cm_divers`
--

-- --------------------------------------------------------

--
-- Structure de la table `carousel_picture`
--

CREATE TABLE IF NOT EXISTS `carousel_picture` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `carousel_picture`
--

INSERT INTO `carousel_picture` (`id`, `name`, `position`, `length`, `picture`, `date_start`, `date_end`, `type`) VALUES
(26, 'planete des singes', NULL, '10', 'http://tools.cadeau-maestro.com/carousel/582ecaeceac8277337f9c948882a6938.jpg', '2017-07-04', '2017-07-16', 'picture');

-- --------------------------------------------------------

--
-- Structure de la table `carousel_product`
--

CREATE TABLE IF NOT EXISTS `carousel_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_prestashop_product` int(11) DEFAULT NULL,
  `id_prestashop_default_image` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_old` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `carousel_product`
--

INSERT INTO `carousel_product` (`id`, `name`, `id_prestashop_product`, `id_prestashop_default_image`, `picture`, `price`, `price_old`) VALUES
(14, 'Fidget Cube Sensoriel de Bureau', 6656, 38992, 'http://www.cadeau-maestro.com/38992-thickbox_default/fidget-cube-sensoriel-bureau.jpg', '6.9', '6.9'),
(18, 'Lightbox en Bois XL', 6644, 38951, 'http://www.cadeau-maestro.com/38951-thickbox_default/lightbox-en-bois-xl.jpg', '36', '36'),
(20, 'Papa Peropon Chat', 6500, 38294, 'http://www.cadeau-maestro.com/38294-thickbox_default/papa-peropon-chat.jpg', '33.5', '33.5'),
(22, 'Chargeur Snail iPhone et iPad', 6336, 37222, 'http://www.cadeau-maestro.com/37222-thickbox_default/chargeur-snail-iphone-ipad.jpg', '34.9', '34.9'),
(26, 'Lampe Céramique Nuage', 6669, 39083, 'http://www.cadeau-maestro.com/39083-thickbox_default/lampe-ceramique-nuage.jpg', '31', '31'),
(27, 'Tablette de Chocolat Morpion', 3961, 23753, 'http://www.cadeau-maestro.com/3961-23753-thickbox_default/tablette-chocolat-morpion.jpg', '3.25', '6.5'),
(33, 'Kit Bière à Faire Soi-Même Brewbarrel Lager', 5868, 36114, 'http://www.cadeau-maestro.com/36114-thickbox_default/kit-biere-faire-soi-meme-brewbarrel-lager.jpg', '34.9', '34.9'),
(34, 'Vase Heureux', 6751, 39465, 'http://www.cadeau-maestro.com/39465-thickbox_default/vase-heureux.jpg', '57.9', '57.9'),
(35, 'Chaussons Licorne', 6781, 39648, 'http://www.cadeau-maestro.com/39648-thickbox_default/chaussons-licorne.jpg', '13.9', '13.9');

-- --------------------------------------------------------

--
-- Structure de la table `carousel_shop`
--

CREATE TABLE IF NOT EXISTS `carousel_shop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_video` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `carousel_shop`
--

INSERT INTO `carousel_shop` (`id`, `name`, `width`, `height`, `show_video`) VALUES
(1, 'Boutique Saint-Étienne', '1880', '1060', 1),
(2, 'Entrepot Veauche', '1920', '1080', 1);

-- --------------------------------------------------------

--
-- Structure de la table `carousel_video`
--

CREATE TABLE IF NOT EXISTS `carousel_video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `carousel_video`
--

INSERT INTO `carousel_video` (`id`, `name`, `position`, `video_id`, `date_start`, `date_end`, `type`) VALUES
(22, 'Fidget', NULL, '2IFvp939GPI', '2017-04-29', '2017-05-06', 'video');

-- --------------------------------------------------------

--
-- Structure de la table `faulty`
--

CREATE TABLE IF NOT EXISTS `faulty` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `send_mail_at` datetime DEFAULT NULL,
  `reception` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=721 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faulty`
--

INSERT INTO `faulty` (`id`, `user_id`, `id_order`, `status`, `reason`, `created_at`, `updated_at`, `send_mail_at`, `reception`) VALUES
(6, 6, NULL, 'refunded', 'cassé à recep', '2016-12-06 20:29:40', '2016-12-06 20:29:40', '2016-12-08 09:45:21', NULL),
(7, 6, NULL, 'refunded', 'cassé vu à la prep', '2016-12-06 20:31:12', '2016-12-06 20:31:12', '2017-06-09 18:10:32', NULL),
(9, 7, NULL, 'new', 'La base ne tourne pas.', '2016-12-27 12:01:25', '2016-12-27 12:01:25', NULL, NULL),
(10, 7, NULL, 'refunded', 'Modèle rouge, le fil ne tient pas déroulé.', '2016-12-27 14:02:24', '2016-12-27 14:02:24', '2016-12-28 09:24:51', NULL),
(11, 7, NULL, 'refunded', 'Ne s''allume pas, oxydation de spiles', '2016-12-27 14:04:54', '2016-12-27 14:09:49', '2017-02-10 16:27:01', NULL),
(12, 7, NULL, 'refunded', 'Cassée dans emballage en version bleue', '2016-12-27 14:11:23', '2016-12-27 14:11:23', '2017-06-09 18:08:45', NULL),
(13, 7, NULL, 'refunded', 'Verre cassé à l''intérieur, modèle 400 ml', '2016-12-27 14:14:34', '2016-12-27 14:14:34', '2017-01-17 12:39:31', NULL),
(14, 7, NULL, 'refunded', 'Ne s''arrête plus une fois en marche', '2016-12-27 14:27:45', '2016-12-27 14:27:45', '2017-01-16 11:18:42', NULL),
(15, 7, NULL, 'refunded', 'en moyen modèle, une vitre fendue', '2016-12-27 14:32:10', '2016-12-27 14:32:10', '2017-01-17 12:39:42', NULL),
(16, 7, NULL, 'refunded', 'En modèle carré, vitre fendue', '2016-12-27 14:33:20', '2016-12-27 14:33:20', '2017-01-17 12:39:47', NULL),
(17, 7, NULL, 'refunded', 'Retour client, ne s''allume pas.', '2016-12-27 14:34:18', '2016-12-27 14:34:18', '2017-03-01 10:44:05', NULL),
(18, 7, NULL, 'refunded', 'Pot cassé', '2016-12-27 14:45:03', '2016-12-27 14:45:03', '2017-02-20 15:00:48', NULL),
(19, 7, NULL, 'refunded', 'Lumière très faible une fois allumé', '2016-12-27 14:46:12', '2016-12-27 14:46:12', '2017-03-23 16:15:18', NULL),
(20, 7, NULL, 'refunded', 'Eclat sur plastique en façade', '2016-12-27 14:47:41', '2016-12-27 14:47:41', '2017-01-30 14:45:21', NULL),
(22, 7, NULL, 'new', 'Verre cassé à l''intérieur', '2016-12-27 14:50:18', '2016-12-27 14:50:18', NULL, NULL),
(23, 7, NULL, 'new', 'Verre cassé à l''intérieur', '2016-12-27 14:51:11', '2016-12-27 14:51:11', NULL, NULL),
(24, 7, NULL, 'refunded', 'Manque le ketchup !', '2016-12-27 14:52:24', '2016-12-27 14:52:24', '2017-01-17 12:39:53', NULL),
(25, 7, NULL, 'refunded', 'Monté à l''envers !', '2016-12-27 14:53:20', '2016-12-27 14:53:20', '2017-02-08 10:54:10', NULL),
(26, 7, NULL, 'new', 'Eclats sur chaussure', '2016-12-27 14:54:25', '2016-12-27 14:54:25', NULL, NULL),
(27, 7, NULL, 'new', 'Coupelle cassée', '2016-12-27 14:55:28', '2016-12-27 14:55:28', NULL, NULL),
(28, 7, NULL, 'refunded', 'Plusieurs éclats de peinture sur la tirelire', '2016-12-27 14:57:34', '2016-12-27 14:57:34', '2017-05-15 09:25:57', NULL),
(32, 3, 189838, 'refunded', 'Câble brûlé, avec un iPhone 6S', '2016-12-28 11:46:01', '2016-12-28 11:46:01', '2016-12-28 11:56:57', NULL),
(34, 3, 0, 'refunded', 'lentille cassée', '2016-12-28 14:25:20', '2016-12-28 14:25:20', '2017-02-08 10:54:13', NULL),
(39, 7, NULL, 'refunded', 'Manque cache piles + lettres manquantes', '2016-12-28 15:52:25', '2016-12-28 15:54:00', NULL, NULL),
(41, 7, NULL, 'refunded', 'Manque l''encens', '2016-12-28 16:30:03', '2016-12-28 16:30:03', '2017-01-17 12:30:47', NULL),
(45, 3, NULL, 'refunded', 'cartes en triple', '2016-12-28 16:33:51', '2016-12-28 16:33:51', '2017-02-02 11:59:43', NULL),
(46, 7, NULL, 'refunded', 'Emballage éventré', '2016-12-28 16:36:39', '2016-12-28 16:36:39', '2017-02-02 11:59:46', NULL),
(47, 3, 177893, 'new', 'casse', '2016-12-29 09:48:03', '2016-12-29 09:48:03', NULL, NULL),
(48, 3, 177983, 'new', 'casse d''un mug sur les deux, voire des deux mugs...', '2016-12-29 09:52:02', '2016-12-29 09:52:02', NULL, NULL),
(49, 3, 174361, 'new', 'casse des deux mugs renvoyés', '2016-12-29 09:54:07', '2016-12-29 09:54:07', NULL, NULL),
(50, 3, 177776, 'new', 'casse', '2016-12-29 10:18:45', '2016-12-29 10:18:45', NULL, NULL),
(51, 3, 192771, 'new', 'endommagé sur la bulle, câble abîme et support décollé', '2016-12-29 10:33:34', '2016-12-29 10:33:34', NULL, NULL),
(52, 3, 193781, 'refunded', 'carafe cassée', '2016-12-29 10:39:57', '2016-12-29 10:39:57', NULL, NULL),
(53, 3, 193205, 'refunded', 'anse cassée', '2016-12-29 11:09:29', '2016-12-29 11:09:29', '2017-01-16 11:18:51', NULL),
(54, 3, NULL, 'new', 'boite cassée', '2016-12-29 11:31:20', '2016-12-29 11:31:20', NULL, NULL),
(55, 3, 189268, 'refunded', 'manque 1 barre de joueurs et le goal', '2016-12-29 11:49:53', '2016-12-29 11:49:53', '2017-02-02 11:25:30', NULL),
(56, 3, 171874, 'new', 'dessus cassé et manque une partie', '2016-12-29 12:09:41', '2016-12-29 12:09:41', NULL, NULL),
(57, 3, 193304, 'refunded', 'déchiré sur le haut', '2016-12-29 13:22:43', '2016-12-29 13:22:43', NULL, NULL),
(58, 3, 189304, 'refunded', 'périmés depuis 09/2016', '2016-12-29 13:35:28', '2016-12-29 13:35:28', NULL, NULL),
(59, 3, 179245, 'refunded', 'tachés et un verre rayé', '2016-12-29 13:53:04', '2016-12-29 13:53:04', '2017-01-17 12:39:57', NULL),
(60, 7, NULL, 'refunded', 'Manque 1 verre !', '2016-12-29 14:42:57', '2016-12-29 14:42:57', '2017-01-17 12:40:01', NULL),
(61, 3, NULL, 'refunded', 'date périmée', '2016-12-29 15:14:02', '2016-12-29 15:14:02', NULL, NULL),
(62, 3, 175151, 'refunded', 'boite cassée', '2016-12-29 16:08:19', '2016-12-29 16:08:19', NULL, NULL),
(63, 3, 175151, 'refunded', 'enveloppe cornée', '2016-12-29 16:09:00', '2016-12-29 16:09:00', NULL, NULL),
(64, 3, 189878, 'refunded', 'emballage écrasé, boite abimée', '2016-12-29 16:16:59', '2017-05-17 16:48:42', '2017-03-16 14:46:30', NULL),
(65, 3, 179268, 'new', 'reçu seul (1 sur 2)', '2016-12-30 11:00:21', '2016-12-30 11:00:21', NULL, NULL),
(66, 3, 179841, 'refunded', 'texte mal imprimé', '2016-12-30 11:02:54', '2016-12-30 11:02:54', '2017-03-13 13:56:13', NULL),
(67, 3, 179841, 'refunded', 'socle décollé', '2016-12-30 11:03:29', '2016-12-30 11:03:29', '2017-02-02 11:59:48', NULL),
(68, 3, 176922, 'refunded', 'cassé, sans doute dans la boite avant même l''envoi', '2016-12-30 11:05:45', '2016-12-30 11:05:45', NULL, NULL),
(69, 3, 179735, 'mail_send', 'finitions mal faites', '2016-12-30 11:07:46', '2016-12-30 11:07:46', '2017-06-22 14:49:15', NULL),
(70, 3, 176549, 'new', 'cassé', '2016-12-30 11:18:13', '2016-12-30 11:18:13', NULL, NULL),
(71, 3, 173690, 'refunded', 'ne marche pas', '2016-12-30 11:19:58', '2016-12-30 11:29:43', '2017-01-16 11:18:57', NULL),
(72, 3, 183076, 'refunded', 'endommagé', '2016-12-30 11:21:10', '2016-12-30 11:21:10', '2017-01-16 11:19:03', NULL),
(73, 3, 169367, 'refunded', 'insectes vivants dans les chocolats', '2016-12-30 11:22:54', '2016-12-30 11:22:54', '2017-01-10 17:18:00', NULL),
(74, 3, 184218, 'refunded', 'vitre brisée', '2016-12-30 11:25:24', '2016-12-30 11:25:24', '2017-01-17 12:40:05', NULL),
(75, 3, 185913, 'mail_send', 'manque câble audio', '2016-12-30 11:28:34', '2016-12-30 11:28:34', '2017-06-26 16:40:43', NULL),
(76, 3, 179083, 'refunded', 'coup sur le côté', '2016-12-30 11:31:17', '2016-12-30 11:31:17', '2017-02-02 11:25:34', NULL),
(77, 3, 186877, 'refunded', 'ne fonctionne pas', '2016-12-30 11:33:15', '2016-12-30 11:33:15', '2017-01-16 11:19:09', NULL),
(78, 3, 181735, 'refunded', 'boite abimée', '2016-12-30 11:36:19', '2016-12-30 11:36:19', '2017-02-14 17:23:42', NULL),
(79, 3, 169460, 'refunded', 'fêlé', '2016-12-30 11:37:58', '2016-12-30 11:37:58', '2017-05-24 14:23:04', NULL),
(80, 3, 179210, 'refunded', '1 ne fonctionne pas et le second renvoyé n''a pas de bille', '2016-12-30 11:48:44', '2016-12-30 11:48:44', '2017-04-13 14:51:37', NULL),
(81, 3, 178601, 'new', 'cassé', '2016-12-30 12:08:43', '2016-12-30 12:08:43', NULL, NULL),
(82, 3, 192801, 'refunded', 'manque le robinet', '2016-12-30 12:47:10', '2016-12-30 12:47:10', NULL, NULL),
(83, 3, 188266, 'refunded', 'boite endommagée', '2016-12-30 13:59:44', '2016-12-30 13:59:44', '2017-02-08 11:06:57', NULL),
(84, 3, 181335, 'refunded', 'fonctionne par intermittence', '2016-12-30 14:28:37', '2016-12-30 14:28:37', '2017-03-01 10:43:57', NULL),
(86, 3, 170261, 'refunded', 'ne fonctionne pas et compartiment à piles endommagé', '2016-12-30 15:31:07', '2016-12-30 15:31:07', NULL, NULL),
(87, 3, 187456, 'refunded', 'défauts de collage', '2016-12-30 15:45:35', '2017-05-26 18:20:36', '2017-03-16 14:46:34', 0),
(88, 7, NULL, 'new', 'Enregistrement défaillant', '2016-12-30 17:43:36', '2016-12-30 17:43:36', NULL, NULL),
(89, 7, NULL, 'refunded', 'Mauvais ingrédients à l''intérieur', '2016-12-30 18:32:22', '2016-12-30 18:32:22', '2017-02-08 09:38:47', NULL),
(91, 3, 183916, 'refunded', 'molette cassée', '2017-01-02 11:01:20', '2017-01-02 11:01:36', '2017-02-02 11:59:51', NULL),
(92, 3, 173421, 'refunded', 'queues de billard cassées', '2017-01-02 13:13:09', '2017-01-02 13:13:09', '2017-02-02 11:25:44', NULL),
(93, 3, 179694, 'refunded', 'cassé', '2017-01-02 13:22:49', '2017-01-02 13:22:49', '2017-06-19 15:40:10', NULL),
(94, 3, 176762, 'refunded', 'Les trous pour recevoir les balles ne sont pas de la même taille, le cuir a un trou dans l''angle, le tapis est mal fixé ,les baguettes pour faire rebondir les balles sont mal fixées , un pied a de la peinture enlevée ,les "frou frou"jaunes se détachent ..', '2017-01-02 13:48:44', '2017-01-02 13:48:44', '2017-02-02 11:25:48', NULL),
(95, 3, 193929, 'refunded', 'percé', '2017-01-02 14:39:47', '2017-01-02 14:39:47', '2017-01-18 21:17:08', NULL),
(96, 3, 189364, 'mail_send', 'ne marche pas', '2017-01-02 16:16:33', '2017-01-02 16:16:33', '2017-06-26 16:33:30', NULL),
(97, 3, 193838, 'refunded', 'grand modèle un verre cassé', '2017-01-02 17:18:55', '2017-01-02 17:18:55', '2017-02-02 11:25:51', NULL),
(98, 3, 183445, 'refunded', 'molette cassée', '2017-01-02 17:24:28', '2017-01-03 16:46:03', '2017-06-26 16:36:32', NULL),
(99, 3, 185868, 'refunded', 'socle et base cassés', '2017-01-02 17:39:17', '2017-01-02 17:39:17', '2017-05-26 15:40:10', NULL),
(100, 3, 181057, 'refunded', 'ne fonctionne pas', '2017-01-03 11:50:16', '2017-01-03 11:50:16', '2017-05-24 14:23:08', NULL),
(101, 3, 178915, 'refunded', 'un récepteur fonctionne par intermittence', '2017-01-03 11:51:26', '2017-01-03 11:51:26', '2017-01-17 12:40:12', NULL),
(102, 3, 190515, 'new', 'ne fonctionne pas', '2017-01-03 12:06:01', '2017-01-03 12:06:01', NULL, NULL),
(103, 3, 188750, 'refunded', 'ne marche pas', '2017-01-03 12:11:56', '2017-01-03 12:11:56', '2017-02-14 09:23:16', NULL),
(104, 3, NULL, 'refunded', 'sous tasse cassée', '2017-01-03 12:30:49', '2017-01-03 12:30:49', '2017-03-01 14:26:53', NULL),
(105, 3, NULL, 'refunded', 'base du vaporisateur ne tient pas', '2017-01-03 12:33:45', '2017-01-03 12:33:45', '2017-01-17 12:24:51', NULL),
(106, 3, 165892, 'refunded', 'jeux ne fonctionnent pas', '2017-01-03 13:53:55', '2017-01-03 13:53:55', '2017-02-02 12:17:13', NULL),
(107, 3, NULL, 'new', 'boite cassée', '2017-01-03 15:58:34', '2017-01-03 15:58:34', NULL, NULL),
(108, 3, 185018, 'refunded', 'une partie en plastique transparent est fêlée', '2017-01-04 10:36:20', '2017-01-04 10:36:20', '2017-02-02 11:59:53', NULL),
(109, 8, NULL, 'refunded', '1 verre rayé', '2017-01-04 11:21:22', '2017-01-04 11:32:41', NULL, NULL),
(110, 8, NULL, 'refunded', '1 verre rayé, 1 avec éclat, 3 verres cassés, 1 verre cassé', '2017-01-04 11:43:40', '2017-01-04 11:43:40', NULL, NULL),
(111, 8, NULL, 'refunded', 'abimé', '2017-01-04 11:48:49', '2017-01-04 11:48:49', NULL, NULL),
(112, 8, NULL, 'new', 'bougie fondue à cause de la chaleur lors du stockage', '2017-01-04 11:58:07', '2017-01-04 11:58:07', NULL, NULL),
(113, 8, NULL, 'refunded', '1 stylo ne marche pas (perte lors du renvoi)', '2017-01-04 12:04:47', '2017-01-04 12:04:47', NULL, NULL),
(114, 8, NULL, 'refunded', 'plusieurs tâches et saletés', '2017-01-04 12:15:36', '2017-01-04 12:15:36', NULL, NULL),
(115, 8, NULL, 'refunded', 'mug écureuil ebreché', '2017-01-04 12:22:17', '2017-01-04 12:22:17', NULL, NULL),
(116, 3, 182476, 'refunded', 'ne fonctionnent pas', '2017-01-04 12:24:40', '2017-01-05 14:03:21', NULL, NULL),
(117, 8, NULL, 'refunded', 'cassé', '2017-01-04 12:27:21', '2017-01-04 12:27:21', NULL, NULL),
(118, 8, NULL, 'refunded', 'cassé', '2017-01-04 12:30:05', '2017-01-04 12:30:05', NULL, NULL),
(119, 8, NULL, 'new', 'fonctionne par intermittence (1 fois sur 5)', '2017-01-04 12:33:31', '2017-01-04 12:33:31', NULL, NULL),
(120, 8, NULL, 'new', '2 récepteurs marchent en même temps', '2017-01-04 13:30:03', '2017-01-04 13:30:03', NULL, NULL),
(121, 8, NULL, 'new', 'cassé', '2017-01-04 13:34:15', '2017-01-04 14:16:43', NULL, NULL),
(122, 8, NULL, 'new', 'salière cassée', '2017-01-04 13:38:26', '2017-01-04 13:38:26', NULL, NULL),
(123, 8, NULL, 'new', 'cassé', '2017-01-04 13:40:41', '2017-01-04 14:16:17', NULL, NULL),
(124, 8, NULL, 'new', 'manuel froissé', '2017-01-04 13:44:01', '2017-01-05 10:21:01', NULL, NULL),
(125, 8, NULL, 'new', 'manuel froissé', '2017-01-04 13:47:08', '2017-01-05 10:20:17', NULL, NULL),
(126, 8, NULL, 'refunded', 'vitre avec une grosse rayure', '2017-01-04 13:52:16', '2017-01-05 09:45:23', NULL, NULL),
(127, 8, NULL, 'refunded', '2 cassées, 1 ne fonctionne pas', '2017-01-04 13:57:23', '2017-01-04 14:02:37', '2017-04-12 18:03:09', NULL),
(128, 8, NULL, 'new', 'emballage abimé', '2017-01-04 14:05:58', '2017-01-04 14:05:58', NULL, NULL),
(129, 8, NULL, 'refunded', 'cassé', '2017-01-04 14:14:48', '2017-01-04 14:30:32', '2017-01-30 14:39:54', NULL),
(131, 8, NULL, 'refunded', 'miroir cassé', '2017-01-04 14:19:49', '2017-01-04 14:19:49', NULL, NULL),
(132, 8, NULL, 'refunded', 'touche "do" enfoncée', '2017-01-04 14:24:22', '2017-01-04 14:24:22', '2017-05-11 10:15:36', NULL),
(133, 8, NULL, 'refunded', 'rouillé', '2017-01-04 14:26:20', '2017-01-04 14:26:20', '2017-06-09 18:16:13', NULL),
(134, 8, NULL, 'new', 'fendu en 2', '2017-01-04 14:29:47', '2017-01-04 14:29:47', NULL, NULL),
(135, 8, NULL, 'refunded', '1 cassée et 1 tête cassée', '2017-01-04 14:36:52', '2017-01-04 14:36:52', '2017-06-09 18:16:05', NULL),
(136, 8, NULL, 'refunded', 'mauvais aspect du biscuit', '2017-01-04 14:39:56', '2017-01-04 14:39:56', NULL, NULL),
(137, 8, NULL, 'refunded', 'un chocolat a tourné', '2017-01-04 14:43:02', '2017-01-04 14:43:02', NULL, NULL),
(138, 8, NULL, 'refunded', 'cassé', '2017-01-04 14:47:48', '2017-01-05 11:19:57', '2017-03-16 17:05:29', NULL),
(139, 3, 194835, 'refunded', 'boite endommagée', '2017-01-04 14:49:41', '2017-01-04 16:36:54', '2017-01-17 12:22:54', NULL),
(140, 8, NULL, 'refunded', 'fuite de piles, taches sur le cousin', '2017-01-04 15:00:52', '2017-01-04 15:00:52', '2017-02-02 11:25:54', NULL),
(141, 8, NULL, 'refunded', 'ne fonctionne pas', '2017-01-04 15:04:27', '2017-01-04 15:04:27', '2017-02-02 11:59:55', NULL),
(142, 8, NULL, 'refunded', '1 ne fonctionne pas, l''autre fonctionne mal', '2017-01-04 15:08:02', '2017-01-04 15:08:02', '2017-03-27 19:33:39', NULL),
(143, 8, NULL, 'refunded', 'la base ne s''allume pas', '2017-01-04 15:09:05', '2017-01-04 15:09:05', NULL, NULL),
(144, 8, NULL, 'refunded', 'boite décollée', '2017-01-04 15:13:23', '2017-01-04 15:13:23', '2017-01-17 12:09:11', NULL),
(145, 8, NULL, 'new', 'toit fissuré', '2017-01-04 15:20:28', '2017-01-04 15:20:28', NULL, NULL),
(146, 8, NULL, 'refunded', 'fuite de pile, ne fonctionne pas', '2017-01-04 15:24:52', '2017-01-04 15:24:52', '2017-02-10 16:27:06', NULL),
(147, 8, NULL, 'refunded', 'doigt cassé', '2017-01-04 15:27:34', '2017-01-04 15:27:34', NULL, NULL),
(148, 8, NULL, 'refunded', 'déchiré au cutter', '2017-01-04 15:30:14', '2017-01-04 15:30:14', NULL, NULL),
(149, 8, NULL, 'refunded', 'couvercle cassé', '2017-01-04 15:35:20', '2017-01-04 15:35:20', NULL, NULL),
(150, 8, NULL, 'refunded', 'cassé', '2017-01-04 15:43:55', '2017-01-04 15:43:55', NULL, NULL),
(151, 8, NULL, 'refunded', 'ne fonctionne pas', '2017-01-04 15:45:29', '2017-01-04 15:45:29', '2017-02-02 11:59:58', NULL),
(152, 8, NULL, 'refunded', 'corne décollée', '2017-01-04 15:50:16', '2017-01-04 16:23:22', '2017-04-10 17:45:57', NULL),
(153, 8, NULL, 'refunded', 'pas d''encre à l''interieur', '2017-01-04 15:52:04', '2017-01-04 15:52:04', '2017-04-10 17:44:41', NULL),
(154, 8, NULL, 'new', 'ne charge plus', '2017-01-04 15:57:54', '2017-01-04 15:57:54', NULL, NULL),
(155, 3, 178200, 'mail_send', 'ne marche pas', '2017-01-04 16:07:24', '2017-01-04 16:07:24', '2017-06-26 16:40:47', NULL),
(156, 8, NULL, 'refunded', 'structure rouillée', '2017-01-04 16:10:38', '2017-01-05 10:34:40', '2017-02-14 09:26:15', NULL),
(157, 8, NULL, 'refunded', 'ne fonctionne pas', '2017-01-04 16:12:03', '2017-01-04 16:12:03', '2017-02-14 09:23:19', NULL),
(158, 8, NULL, 'refunded', 'motif à l''envers', '2017-01-04 16:13:33', '2017-01-04 16:13:33', '2017-02-14 09:27:12', NULL),
(159, 8, NULL, 'refunded', 'carton abimé', '2017-01-04 16:17:18', '2017-01-04 16:17:18', NULL, NULL),
(160, 8, NULL, 'new', 'explosé durant l''envoi', '2017-01-04 16:20:29', '2017-01-04 16:27:11', NULL, NULL),
(161, 8, NULL, 'refunded', 'fissure le liquide fuit', '2017-01-04 16:22:38', '2017-01-04 16:42:47', NULL, NULL),
(163, 8, NULL, 'refunded', 'froissé', '2017-01-04 16:29:31', '2017-01-04 16:29:31', NULL, NULL),
(164, 8, NULL, 'refunded', 'cassés', '2017-01-04 16:42:25', '2017-01-05 09:56:40', '2017-02-14 17:32:26', NULL),
(165, 8, NULL, 'refunded', 'cassée', '2017-01-04 16:51:26', '2017-01-04 17:05:50', '2017-02-14 17:27:28', NULL),
(166, 8, NULL, 'refunded', 'taché', '2017-01-04 16:52:34', '2017-01-26 09:54:48', '2017-02-14 17:24:15', NULL),
(167, 8, NULL, 'refunded', 'cassée', '2017-01-04 16:56:44', '2017-01-04 16:56:44', '2017-02-02 11:21:22', NULL),
(168, 8, NULL, 'refunded', 'cassé', '2017-01-05 09:24:40', '2017-01-05 09:24:40', '2017-02-14 17:34:03', NULL),
(169, 8, NULL, 'refunded', 'vitre cassée', '2017-01-05 09:28:14', '2017-01-05 09:28:14', '2017-02-02 11:26:01', NULL),
(170, 8, NULL, 'refunded', 'cassés', '2017-01-05 09:31:46', '2017-01-05 09:31:46', '2017-02-14 17:31:59', NULL),
(171, 8, NULL, 'refunded', 'emballage déchiré', '2017-01-05 09:36:00', '2017-01-05 10:06:41', '2017-02-14 17:24:22', NULL),
(172, 8, NULL, 'refunded', 'des trous à des endroits', '2017-01-05 09:39:17', '2017-01-05 09:39:17', '2017-02-02 11:26:10', NULL),
(173, 8, NULL, 'refunded', 'manque le capuchon', '2017-01-05 09:44:01', '2017-01-05 09:44:01', NULL, NULL),
(174, 8, NULL, 'refunded', 'alarme réveil ne sonne pas au réglage', '2017-01-05 10:01:58', '2017-01-05 10:01:58', '2017-02-02 11:26:17', NULL),
(175, 8, NULL, 'refunded', 'pas de magnets', '2017-01-05 10:05:39', '2017-01-05 10:36:59', '2017-02-02 11:26:21', NULL),
(176, 8, NULL, 'refunded', 'ne fonctionne pas', '2017-01-05 10:10:04', '2017-01-05 10:35:50', '2017-02-02 11:26:26', NULL),
(177, 8, NULL, 'refunded', 'cassé à la réception', '2017-01-05 10:15:29', '2017-02-14 17:22:35', '2017-02-02 11:19:19', NULL),
(178, 8, NULL, 'new', 'boite déchirée', '2017-01-05 10:18:44', '2017-01-05 10:18:44', NULL, NULL),
(179, 8, NULL, 'refunded', 'cassé dans le rayon', '2017-01-05 10:24:17', '2017-01-05 10:24:17', '2017-02-14 17:21:51', NULL),
(180, 8, NULL, 'new', 'oreille cassée', '2017-01-05 10:33:31', '2017-01-05 10:33:31', NULL, NULL),
(181, 8, NULL, 'refunded', 'cassé', '2017-01-05 10:40:37', '2017-01-05 10:40:37', NULL, NULL),
(182, 8, NULL, 'new', '1 boite abimée (arrivage), 1 perte de graine', '2017-01-05 10:45:31', '2017-01-05 10:51:36', NULL, NULL),
(183, 8, NULL, 'new', 'farfalle décollé et fendu', '2017-01-05 10:48:16', '2017-01-05 10:48:16', NULL, NULL),
(184, 8, NULL, 'refunded', 'cassé', '2017-01-05 10:53:28', '2017-01-05 10:53:28', '2017-01-18 21:22:54', NULL),
(185, 8, NULL, 'refunded', 'clavier endommagé', '2017-01-05 10:57:30', '2017-01-05 10:57:30', NULL, NULL),
(186, 8, NULL, 'refunded', 'cassé dans le rayon', '2017-01-05 11:00:31', '2017-01-05 11:00:31', NULL, NULL),
(187, 8, NULL, 'refunded', 'faux contact', '2017-01-05 11:03:37', '2017-01-05 11:03:37', '2017-02-10 16:27:11', NULL),
(188, 8, NULL, 'new', 'felé', '2017-01-05 11:07:40', '2017-01-05 11:07:40', NULL, NULL),
(189, 8, NULL, 'new', 'légèrement cabossée en bas', '2017-01-05 11:10:20', '2017-01-05 11:10:20', NULL, NULL),
(190, 8, NULL, 'new', 'emballage abimé', '2017-01-05 11:11:56', '2017-01-05 11:11:56', NULL, NULL),
(191, 8, NULL, 'refunded', 'cassé à la réception', '2017-01-05 11:14:57', '2017-01-05 11:14:57', '2017-01-18 21:23:00', NULL),
(192, 8, NULL, 'refunded', 'cassé à la réception', '2017-01-05 11:16:53', '2017-01-05 11:16:53', NULL, NULL),
(193, 8, NULL, 'refunded', 'cassé à la réception', '2017-01-05 11:17:13', '2017-01-05 11:17:13', NULL, NULL),
(194, 8, NULL, 'refunded', 'cassé à la réception', '2017-01-05 11:17:41', '2017-01-05 11:17:41', NULL, NULL),
(195, 8, NULL, 'refunded', 'cassé à la réception', '2017-01-05 11:18:52', '2017-01-05 11:18:52', '2017-02-02 12:00:00', NULL),
(196, 3, 191986, 'new', 'se déconnecte sans cesse et ne se reconnecte pas automatiquement', '2017-01-05 13:46:05', '2017-01-05 13:46:05', NULL, NULL),
(197, 7, NULL, 'refunded', 'Ne fonctionne pas, juste la lumière.', '2017-01-05 14:25:33', '2017-01-05 14:25:33', '2017-03-01 10:43:26', NULL),
(198, 7, NULL, 'refunded', 'Manque 2 marque-verres !', '2017-01-05 14:30:31', '2017-01-05 14:30:31', '2017-01-17 12:40:16', NULL),
(199, 3, 194960, 'new', 'manque les deux balles', '2017-01-05 14:45:48', '2017-01-05 14:45:48', NULL, NULL),
(200, 3, 195105, 'refunded', 'rayée à l''intérieur', '2017-01-05 15:18:47', '2017-01-05 15:18:47', '2017-02-09 13:39:03', NULL),
(201, 3, 182301, 'refunded', 'tâche', '2017-01-05 15:53:11', '2017-01-05 15:53:11', '2017-02-09 13:39:07', NULL),
(202, 3, 195434, 'refunded', 'fils emmêlés et un fil coupé', '2017-01-05 16:19:33', '2017-01-05 16:19:33', '2017-02-14 09:25:32', NULL),
(203, 10, NULL, 'refunded', 'Cassés  lors de l''inventaire du rayon', '2017-01-06 10:55:27', '2017-01-06 10:57:23', NULL, NULL),
(204, 3, 171177, 'refunded', 'ne marche pas', '2017-01-06 12:19:52', '2017-01-06 12:19:52', NULL, NULL),
(205, 8, NULL, 'new', 'ne fonctionne pas + bouton enfoncé', '2017-01-06 13:30:10', '2017-01-06 13:30:10', NULL, NULL),
(206, 8, NULL, 'refunded', 'dessous décollé, rayures et saletés', '2017-01-06 14:21:00', '2017-01-06 14:21:00', '2017-02-02 12:17:13', NULL),
(207, 3, 175362, 'refunded', 'ne marche pas', '2017-01-06 16:07:50', '2017-01-06 16:07:50', '2017-01-17 12:23:00', NULL),
(208, 3, 186292, 'new', 'une balle endommagée', '2017-01-06 16:09:08', '2017-01-06 16:09:08', NULL, NULL),
(209, 3, 187240, 'mail_send', 'cassé', '2017-01-06 16:18:33', '2017-01-06 16:18:33', '2017-05-12 09:13:16', NULL),
(210, 10, NULL, 'refunded', 'fuite de sable', '2017-01-06 16:19:52', '2017-01-06 16:19:52', '2017-05-11 10:15:43', NULL),
(211, 3, 188962, 'new', 'cassé', '2017-01-06 16:20:44', '2017-01-06 16:20:44', NULL, NULL),
(212, 3, 186764, 'refunded', 'manque les deux côtés', '2017-01-06 16:23:28', '2017-01-06 16:23:28', '2017-02-02 11:26:35', NULL),
(213, 3, 182812, 'refunded', 'deux tasses cassées', '2017-01-06 16:30:37', '2017-01-06 16:30:37', NULL, NULL),
(214, 3, 191466, 'new', 'cassé', '2017-01-06 16:32:08', '2017-01-06 16:32:08', NULL, NULL),
(215, 8, NULL, 'refunded', 'faux contact au niveau de la prise jack', '2017-01-06 16:32:37', '2017-01-06 16:32:37', '2017-05-24 14:23:10', NULL),
(216, 3, 175279, 'refunded', 'cassée', '2017-01-06 16:36:30', '2017-01-06 16:36:30', '2017-01-30 14:45:25', NULL),
(217, 7, NULL, 'refunded', 'Bouton vol- défaillant, modèle noir', '2017-01-07 14:51:51', '2017-01-07 14:51:51', '2017-01-17 12:33:58', NULL),
(218, 7, NULL, 'refunded', 'Ne fonctionne pas, l''aimant se colle même avec une bouteille pleine. Défaut de magnétisme.', '2017-01-07 14:55:16', '2017-01-07 14:55:16', '2017-02-02 12:17:13', NULL),
(219, 7, NULL, 'refunded', 'Modèle Rouge : Chapeau Fissuré', '2017-01-07 18:28:13', '2017-01-07 18:28:13', '2017-02-02 12:17:13', NULL),
(220, 7, NULL, 'refunded', 'Modèle Noir : Leds du bas ne s''allument pas + chapeau fissuré', '2017-01-07 18:30:09', '2017-01-07 18:30:09', '2017-02-02 12:17:13', NULL),
(221, 9, NULL, 'new', 'on a retrouvé la boite vide en rayon...', '2017-01-10 09:40:23', '2017-01-10 09:40:23', NULL, NULL),
(222, 9, NULL, 'new', 'retrouvé cassé au picking', '2017-01-10 09:41:58', '2017-01-10 09:41:58', NULL, NULL),
(223, 3, 188581, 'refunded', '3 flacons cassée et du verre partout !', '2017-01-10 12:15:44', '2017-01-10 12:15:54', NULL, NULL),
(224, 7, NULL, 'refunded', 'Charnière défaillante', '2017-01-10 13:47:32', '2017-01-10 13:47:32', '2017-01-17 12:40:20', NULL),
(225, 7, NULL, 'refunded', 'Manque le terreau !', '2017-01-10 13:48:39', '2017-01-10 13:48:39', NULL, NULL),
(227, 3, 175969, 'refunded', 'ne fonctionne pas', '2017-01-10 14:43:41', '2017-01-10 14:43:50', NULL, NULL),
(229, 8, NULL, 'new', 'manches usées/tissu de moins bonne qualité', '2017-01-10 16:41:04', '2017-01-10 16:41:04', NULL, NULL),
(230, 7, NULL, 'refunded', 'Connecteur cassé', '2017-01-11 10:41:46', '2017-01-11 10:41:46', '2017-03-01 10:42:52', NULL),
(231, 8, NULL, 'refunded', 'il manque le tube d''emballage', '2017-01-11 11:58:12', '2017-01-11 11:58:12', '2017-02-08 10:54:16', NULL),
(232, 8, NULL, 'refunded', 'il manque la carte (tube d''emballage vide et abimé aux extrémités)', '2017-01-11 11:59:56', '2017-01-11 11:59:56', '2017-02-08 10:54:17', NULL),
(233, 9, NULL, 'refunded', 'Emballage cassé', '2017-01-11 17:55:47', '2017-01-11 17:55:47', '2017-01-16 11:19:17', NULL),
(234, 8, NULL, 'refunded', 'manque les deux barres de fixation latérales', '2017-01-12 15:35:23', '2017-01-12 15:35:23', NULL, NULL),
(235, 9, NULL, 'refunded', 'Emballage écrasé', '2017-01-13 16:46:20', '2017-01-13 16:46:20', '2017-01-17 12:09:21', NULL),
(236, 9, NULL, 'refunded', 'Non commandé', '2017-01-13 16:47:59', '2017-01-13 16:47:59', '2017-01-16 12:15:11', NULL),
(237, 9, NULL, 'new', 'Cassé à la réception', '2017-01-13 16:48:50', '2017-01-13 16:48:50', NULL, NULL),
(238, 11, NULL, 'refunded', 'MANQUANT', '2017-01-16 11:25:13', '2017-01-16 11:25:13', '2017-01-16 11:25:24', NULL),
(239, 11, NULL, 'refunded', 'manquant reç 10 au lieu de 12 ds AL16-84902', '2017-01-16 11:35:20', '2017-01-16 11:35:20', NULL, NULL),
(240, 8, NULL, 'refunded', 'fils emmelés, polystyrène endommagé', '2017-01-16 12:33:20', '2017-01-16 12:33:20', '2017-05-04 15:16:45', NULL),
(241, 9, NULL, 'refunded', 'Emballage écrasé', '2017-01-16 16:39:31', '2017-01-16 16:39:31', '2017-02-08 10:52:00', NULL),
(242, 9, NULL, 'new', 'Produit cassé en rayon', '2017-01-16 16:40:35', '2017-01-16 16:40:35', NULL, NULL),
(243, 9, NULL, 'refunded', 'Cassé en rayon', '2017-01-16 16:41:30', '2017-01-16 16:41:46', '2017-02-02 11:22:48', NULL),
(245, 3, NULL, 'refunded', 'n''écrit pas', '2017-01-17 09:50:07', '2017-01-17 09:50:12', NULL, NULL),
(246, 3, 175556, 'refunded', 'le bouton d''éclairage ne fonctionne pas', '2017-01-17 09:51:25', '2017-01-17 09:51:31', NULL, NULL),
(247, 8, NULL, 'new', 'ne fonctionne pas', '2017-01-17 10:17:32', '2017-01-17 10:17:32', NULL, NULL),
(248, 3, 181607, 'refunded', 'un récepteur ne fonctionne pas', '2017-01-17 10:35:26', '2017-01-17 10:35:32', NULL, NULL),
(249, 8, NULL, 'refunded', 'ne fonctionne pas', '2017-01-17 10:40:21', '2017-01-17 10:40:21', '2017-02-02 12:17:13', NULL),
(250, 8, NULL, 'refunded', 'le noir ne fonctionne pas', '2017-01-17 11:15:36', '2017-01-17 11:15:36', NULL, NULL),
(251, 3, 197009, 'refunded', 'un verre avec un défaut et un verre avec un petit bec verseur', '2017-01-17 13:51:27', '2017-01-17 13:51:36', NULL, NULL),
(252, 7, NULL, 'refunded', 'Prend du retard sur heure véritable.', '2017-01-17 14:21:15', '2017-01-17 14:21:15', '2017-03-01 10:42:44', NULL),
(253, 9, NULL, 'refunded', 'Cassé à la réception', '2017-01-17 17:56:07', '2017-01-17 17:56:07', '2017-01-18 21:20:22', NULL),
(254, 9, NULL, 'refunded', 'Manquant à la réception', '2017-01-17 17:56:50', '2017-01-17 17:56:50', '2017-01-18 21:36:08', NULL),
(255, 9, NULL, 'refunded', 'Manquant à la réception', '2017-01-17 17:58:37', '2017-01-17 17:58:37', NULL, NULL),
(256, 3, 196606, 'refunded', 'Bouton ON/OFF est tombé au fond et n''est plus accessible', '2017-01-18 10:04:07', '2017-01-18 10:04:07', '2017-01-30 14:45:27', NULL),
(257, 3, 197485, 'refunded', 'trou au centre', '2017-01-18 11:18:36', '2017-01-18 11:18:36', '2017-02-02 11:26:42', NULL),
(258, 8, NULL, 'refunded', 'ne fonctionne que sur secteur (ne se recharge pas)', '2017-01-18 11:20:19', '2017-01-18 11:20:19', '2017-03-06 16:11:31', NULL),
(259, 3, 196318, 'refunded', 'ne fonctionne pas', '2017-01-18 12:16:32', '2017-01-18 12:16:37', NULL, NULL),
(260, 8, NULL, 'refunded', 'Manque le support autocollant pour smartphone + tube endommagé', '2017-01-18 14:18:18', '2017-01-18 14:18:18', '2017-02-08 10:54:20', NULL),
(261, 11, NULL, 'refunded', 'boite cassée', '2017-01-18 20:34:33', '2017-01-18 20:34:33', '2017-01-18 20:35:23', NULL),
(262, 11, NULL, 'refunded', 'manquant reçu 26 au lieu de 30', '2017-01-18 20:35:13', '2017-01-18 20:35:13', '2017-01-18 20:35:33', NULL),
(263, 11, NULL, 'mail_send', 'produit manquant', '2017-01-18 20:48:31', '2017-01-18 20:48:31', '2017-01-18 20:48:40', NULL),
(264, 11, NULL, 'refunded', 'en attente de livraison deja facture et payé', '2017-01-18 21:09:39', '2017-01-18 21:09:39', '2017-01-18 21:09:55', NULL),
(266, 11, NULL, 'refunded', 'manquant reçu 5 au lieu de 6', '2017-01-18 21:38:14', '2017-01-18 21:38:14', NULL, NULL),
(267, 3, NULL, 'refunded', 'En SAV de la part de Magneticland', '2017-01-19 09:12:22', '2017-01-19 09:12:31', NULL, NULL),
(268, 3, 186227, 'refunded', 'ne fonctionne pas', '2017-01-19 09:19:06', '2017-01-20 09:13:50', NULL, NULL),
(269, 3, 184150, 'refunded', 'brulée', '2017-01-19 09:27:36', '2017-01-19 09:27:36', '2017-02-02 10:53:02', NULL),
(270, 7, NULL, 'refunded', 'Ampoule GU10 défectueuse', '2017-01-19 09:47:01', '2017-01-19 09:47:01', '2017-03-27 19:33:44', NULL),
(271, 3, 197099, 'new', 'mug malin cassé', '2017-01-19 12:14:48', '2017-01-19 12:14:48', NULL, NULL),
(272, 8, NULL, 'new', 'ne fonctionne pas', '2017-01-19 14:25:12', '2017-01-19 14:25:12', NULL, NULL),
(273, 9, NULL, 'refunded', 'Cassé à la réception', '2017-01-19 18:02:36', '2017-01-20 11:04:58', '2017-05-04 15:20:55', NULL),
(274, 9, NULL, 'refunded', 'Percé à la réception', '2017-01-19 18:03:20', '2017-01-19 18:03:20', '2017-05-04 15:24:46', NULL),
(275, 9, NULL, 'refunded', 'Emballage cassé et produit tâché', '2017-01-20 11:06:13', '2017-01-20 11:06:13', '2017-01-31 12:28:19', NULL),
(276, 7, NULL, 'refunded', 'Modèle rose, stylo feutre qui ne fonctionne pas', '2017-01-20 11:34:28', '2017-01-20 11:34:28', '2017-03-01 10:42:35', NULL),
(277, 3, 196522, 'refunded', 'Bouton ON/OFF est tombé au fond et n''est plus accessible', '2017-01-23 11:27:12', '2017-01-23 12:03:16', '2017-01-30 14:45:32', NULL),
(278, 3, 193108, 'new', 'ne fonctionnent pas et un écouteur s''est dévissé', '2017-01-23 13:39:28', '2017-01-23 13:39:28', NULL, NULL),
(279, 3, 196364, 'refunded', 'bout du viseur cassé', '2017-01-23 13:54:19', '2017-01-23 13:54:19', '2017-02-02 12:00:02', NULL),
(280, 3, 188942, 'refunded', 'fonctionne par intermittence', '2017-01-23 16:18:55', '2017-01-23 16:18:55', NULL, NULL),
(281, 9, NULL, 'refunded', 'Emballage cassé', '2017-01-23 16:47:32', '2017-01-23 16:47:53', '2017-01-26 18:22:30', NULL),
(282, 9, NULL, 'refunded', 'Emballage écrasé', '2017-01-23 16:50:17', '2017-01-23 16:50:17', '2017-01-26 18:22:33', NULL),
(283, 9, NULL, 'refunded', 'Emballage cassé', '2017-01-23 16:51:53', '2017-01-23 16:51:53', '2017-01-26 18:22:37', NULL),
(284, 9, NULL, 'refunded', 'Emballage écrasé', '2017-01-23 16:53:13', '2017-01-23 16:53:13', '2017-01-26 18:22:40', NULL),
(285, 9, NULL, 'refunded', 'Emballage écrasé', '2017-01-23 16:54:42', '2017-01-23 16:54:42', '2017-01-26 18:22:43', NULL),
(286, 9, NULL, 'refunded', 'Emballage écrasé', '2017-01-23 17:02:55', '2017-01-23 17:02:55', '2017-01-26 18:23:34', NULL),
(287, 9, NULL, 'refunded', 'Manquant à la réception', '2017-01-23 17:06:05', '2017-01-23 17:06:05', '2017-01-26 18:22:45', NULL),
(288, 9, NULL, 'refunded', 'Manquant à la réception', '2017-01-23 17:07:11', '2017-01-23 17:07:11', '2017-01-26 18:22:47', NULL),
(289, 9, NULL, 'refunded', 'Non commandé', '2017-01-23 17:08:46', '2017-01-23 17:08:46', '2017-01-26 18:22:50', NULL),
(290, 9, NULL, 'refunded', 'Moisi sur les emballages', '2017-01-25 11:39:31', '2017-01-25 11:39:31', '2017-02-02 10:48:05', NULL),
(291, 3, 153056, 'refunded', 's''éteint après fonctionnement', '2017-01-25 14:00:59', '2017-01-25 14:00:59', NULL, NULL),
(292, 3, 197525, 'refunded', 'manque un ressort dans le compartiment à piles ce qui rend impossible le placement de la 3e pile', '2017-01-25 14:22:39', '2017-01-25 14:22:39', '2017-02-02 12:17:13', NULL),
(293, 9, NULL, 'refunded', 'Emballage cassé trouvé en inventaire', '2017-01-25 15:30:11', '2017-01-25 15:30:11', '2017-02-02 10:53:06', NULL),
(294, 3, 171891, 'refunded', 'bol et clapet cassés', '2017-01-26 11:08:59', '2017-01-26 11:08:59', '2017-04-06 15:14:23', NULL),
(295, 7, NULL, 'new', '1 verre cassé à l''intérieur', '2017-01-26 13:09:01', '2017-01-26 13:09:01', NULL, NULL),
(296, 9, 0, 'refunded', 'Emballage écrasé', '2017-01-26 17:12:18', '2017-01-26 17:12:18', '2017-02-02 11:21:58', NULL),
(297, 9, 0, 'refunded', 'Cassé à la réception', '2017-01-26 17:13:55', '2017-01-26 17:13:55', '2017-02-02 11:22:09', NULL),
(298, 3, 193800, 'refunded', 'clous tombés, cadre ne tient pas', '2017-01-27 10:09:01', '2017-01-27 10:09:01', '2017-02-02 12:00:04', NULL),
(299, 3, 195675, 'refunded', 'mug cassé', '2017-01-27 11:19:24', '2017-01-27 11:19:24', NULL, NULL),
(300, 3, 192852, 'refunded', 'écrasé', '2017-01-27 13:55:03', '2017-01-27 13:55:03', NULL, NULL),
(301, 3, 170678, 'refunded', 'manque la partie lumineuse', '2017-01-30 12:23:50', '2017-01-30 12:23:50', '2017-04-06 15:14:28', NULL),
(302, 3, NULL, 'refunded', 'ne s''allume pas', '2017-01-30 14:59:37', '2017-01-30 14:59:37', '2017-02-02 12:17:13', NULL),
(303, 3, NULL, 'refunded', 'ne fonctionne pas', '2017-01-30 15:04:18', '2017-01-30 15:04:18', '2017-02-02 12:17:13', NULL),
(304, 3, NULL, 'refunded', 'ne fonctionne pas', '2017-01-30 16:13:02', '2017-01-30 16:13:02', '2017-02-02 12:17:13', NULL),
(305, 9, NULL, 'refunded', 'Abîmé lors du transport mouillé par du White spirit', '2017-01-30 17:43:22', '2017-01-30 17:43:22', '2017-02-02 11:34:13', NULL),
(306, 9, NULL, 'refunded', 'Abîmé lors du transport mouillé par du White spirit', '2017-01-30 17:45:26', '2017-01-30 17:45:26', '2017-02-02 11:34:17', NULL),
(307, 9, NULL, 'refunded', 'Cassée lors du transport', '2017-01-30 17:46:41', '2017-01-30 17:46:41', '2017-02-02 11:55:10', NULL),
(308, 11, NULL, 'refunded', 'tache de colle en haut à gauche', '2017-01-31 09:30:11', '2017-01-31 09:30:11', '2017-05-04 15:24:50', NULL),
(309, 3, 197910, 'new', 'cassé', '2017-01-31 09:51:51', '2017-01-31 09:51:51', NULL, NULL),
(310, 3, 197905, 'refunded', 'socle cassé', '2017-01-31 09:59:10', '2017-01-31 09:59:10', '2017-05-26 15:40:14', NULL),
(311, 3, 196988, 'new', 'emballage griffé à deux endroits', '2017-01-31 12:01:39', '2017-01-31 12:01:39', NULL, NULL),
(312, 9, NULL, 'refunded', 'Emballage écrasé', '2017-01-31 14:19:33', '2017-01-31 14:19:33', '2017-02-02 11:59:40', NULL),
(313, 3, 198995, 'refunded', 'décollé', '2017-02-01 15:23:25', '2017-02-01 15:23:25', NULL, NULL),
(314, 7, NULL, 'refunded', 'Aiguilles défectueuses.', '2017-02-02 10:41:59', '2017-02-02 10:41:59', '2017-02-02 11:26:38', NULL),
(315, 7, NULL, 'refunded', 'Le fil ne s''enroule plus', '2017-02-02 10:49:07', '2017-02-02 10:49:07', '2017-02-14 15:42:49', NULL),
(316, 7, NULL, 'refunded', 'Ne prend pas la charge.', '2017-02-02 10:49:37', '2017-02-02 10:49:37', '2017-02-14 15:42:51', NULL),
(317, 9, NULL, 'refunded', 'Boite cassée', '2017-02-02 11:49:00', '2017-02-02 11:49:18', '2017-02-02 11:52:51', NULL),
(318, 3, 163117, 'new', 'Bouton ON/OFF ne fonctionne plus', '2017-02-02 14:04:54', '2017-02-02 14:04:54', NULL, 0),
(319, 3, 198722, 'refunded', 'robinet cassé', '2017-02-03 10:02:34', '2017-02-03 10:02:34', '2017-04-26 19:12:51', 0),
(320, 3, 199249, 'refunded', 'bouchon cassé', '2017-02-03 15:06:28', '2017-02-03 15:06:28', '2017-05-04 15:24:53', 0),
(321, 7, NULL, 'refunded', 'Cassé dans le carton', '2017-02-03 15:33:26', '2017-02-03 15:33:26', '2017-02-14 17:32:50', 1),
(322, 11, NULL, 'refunded', 'MANQUANT RE9U 0 AU LEIU DE 24 ET FACTURE DEJA', '2017-02-03 16:59:00', '2017-02-03 16:59:00', NULL, 0),
(323, 11, NULL, 'refunded', 'en attente de livraison deja facture et payé', '2017-02-03 17:11:52', '2017-02-03 17:11:52', NULL, 0),
(324, 3, NULL, 'refunded', 'Manque une capsule', '2017-02-06 11:52:29', '2017-02-06 11:52:40', NULL, 0),
(325, 3, 199271, 'refunded', 'Bouton ON/OFF est tombé au fond et n''est plus accessible', '2017-02-06 14:00:50', '2017-02-06 14:00:50', '2017-03-29 09:15:40', 0),
(326, 3, 170785, 'new', '1 tasse cassée', '2017-02-06 14:06:57', '2017-02-06 14:06:57', NULL, 0),
(327, 3, 199028, 'refunded', 'manque les lettres de T à la fin de l''alphabet', '2017-02-06 14:11:59', '2017-02-06 14:11:59', NULL, 0),
(328, 3, NULL, 'refunded', 'casse coin gauche haut', '2017-02-06 16:05:09', '2017-02-06 16:06:43', '2017-03-16 17:05:32', 1),
(330, 3, NULL, 'refunded', 'carte et enveloppe cornées', '2017-02-06 16:06:25', '2017-02-06 16:06:25', NULL, 1),
(332, 3, 193241, 'new', 'dernière partie du câble ne s''allume pas et il ne charge pas', '2017-02-07 13:23:32', '2017-02-07 13:23:32', NULL, 0),
(333, 3, 196318, 'refunded', 'ne marche pas, ne capte pas les stations', '2017-02-07 14:00:20', '2017-02-07 14:00:20', '2017-03-13 13:56:21', 0),
(334, 7, NULL, 'refunded', 'Champis champis champis et champis !', '2017-02-07 14:03:06', '2017-02-07 14:03:06', '2017-02-08 10:52:03', 0),
(335, 3, NULL, 'refunded', 'boite endommagée', '2017-02-07 14:06:17', '2017-02-07 14:06:17', NULL, 1),
(336, 9, NULL, 'refunded', 'Présence de moisissures', '2017-02-07 16:49:41', '2017-02-07 17:19:49', '2017-02-08 10:52:05', 0),
(337, 9, NULL, 'refunded', 'Verre cassé ou manquant', '2017-02-07 17:23:12', '2017-06-26 11:43:14', '2017-06-30 17:00:20', 0),
(338, 9, NULL, 'refunded', 'Pointe du stylo enfoncé', '2017-02-07 17:25:42', '2017-02-07 17:25:42', '2017-03-13 12:29:35', 0),
(339, 9, NULL, 'refunded', 'Ne fonctionne plus', '2017-02-07 17:28:28', '2017-02-07 17:28:28', '2017-03-13 12:29:38', 0),
(340, 9, NULL, 'refunded', 'Emballage écrasé', '2017-02-07 17:36:08', '2017-02-08 10:49:56', '2017-02-08 11:07:01', 1),
(341, 9, NULL, 'refunded', 'Article Tâché', '2017-02-07 17:51:02', '2017-02-07 17:51:02', '2017-03-23 16:15:21', 0),
(342, 9, NULL, 'refunded', 'Problème vers le bouchon', '2017-02-07 17:53:27', '2017-02-07 17:53:27', '2017-03-23 16:15:23', 0),
(343, 9, NULL, 'refunded', 'Ne fonctionne pas', '2017-02-07 17:56:16', '2017-02-07 17:56:16', '2017-03-23 16:14:13', 0),
(344, 3, 188152, 'new', 'une lentille endommagée', '2017-02-08 09:51:35', '2017-02-08 09:51:43', '2017-04-28 15:26:34', 0),
(345, 3, 192403, 'new', 'affichage défectueux, les chiffres ne s''affichent pas en entier', '2017-02-08 11:19:12', '2017-02-08 11:19:12', NULL, 0),
(347, 9, NULL, 'refunded', 'Chocolat aux couleurs irrégulières', '2017-02-08 14:21:06', '2017-02-08 14:21:06', NULL, 1),
(348, 9, NULL, 'new', 'Trouvé cassé à l expedition', '2017-02-08 17:10:43', '2017-02-08 17:10:43', NULL, 0),
(349, 9, NULL, 'refunded', 'Emballage écrasé', '2017-02-09 09:13:44', '2017-02-09 09:13:59', '2017-02-14 09:21:42', 1),
(350, 7, NULL, 'new', 'Compartiment des piles souci, les ressorts sont dans la même compartiment !', '2017-02-09 11:09:56', '2017-02-09 11:09:56', '2017-04-13 14:51:53', 0),
(351, 11, NULL, 'refunded', 'manquant a la rec', '2017-02-09 17:53:39', '2017-02-09 17:53:39', NULL, 0),
(352, 11, NULL, 'refunded', 'manquant a la rec', '2017-02-09 17:54:08', '2017-02-09 17:54:08', NULL, 0),
(353, 11, NULL, 'refunded', 'manquant a la reception', '2017-02-10 11:25:14', '2017-02-10 11:25:14', '2017-02-14 15:55:43', 0),
(354, 3, 198848, 'refunded', 'Bouton ON/OFF est tombé au fond et n''est plus accessible', '2017-02-10 13:41:20', '2017-02-10 13:41:20', '2017-03-29 09:15:44', 0),
(355, 3, 0, 'refunded', 'pas de trèfle à 4 feuilles, seul 1 trèfle à 3 feuilles a poussé', '2017-02-10 14:55:27', '2017-02-10 14:55:27', NULL, 0),
(356, 9, NULL, 'refunded', 'Cassé à la réception', '2017-02-10 14:57:58', '2017-02-10 14:57:58', '2017-02-15 09:50:56', 1),
(357, 3, 201212, 'refunded', 'manque batonnets encens et porte-encens', '2017-02-10 15:52:59', '2017-02-10 15:52:59', NULL, 0),
(358, 9, NULL, 'refunded', 'Soliflore manquant', '2017-02-10 17:11:12', '2017-02-10 17:11:12', '2017-02-15 09:34:47', 0),
(359, 7, NULL, 'refunded', 'Système main cassé.', '2017-02-11 10:16:21', '2017-02-11 10:16:21', '2017-03-01 10:42:24', 0),
(362, 3, 174697, 'refunded', 'petit trou, fuite', '2017-02-13 16:30:25', '2017-02-13 16:30:33', NULL, 0),
(363, 3, 200750, 'refunded', 'mauvais code EAN', '2017-02-13 16:59:49', '2017-02-13 16:59:49', '2017-02-15 09:34:51', 0),
(364, NULL, NULL, 'refunded', 'Lettre j 1 manquant à la reception', '2017-02-13 17:30:46', '2017-02-13 17:30:46', '2017-02-14 16:03:51', 1),
(365, 3, 201214, 'new', 'casse et défauts sur la base du casque', '2017-02-14 11:19:10', '2017-02-14 11:19:10', NULL, 0),
(366, 9, NULL, 'refunded', 'Emballage cassé', '2017-02-14 12:10:48', '2017-02-14 12:10:48', '2017-02-14 14:38:04', 1),
(367, 3, 192768, 'refunded', 'ne marche pas', '2017-02-14 13:39:52', '2017-02-14 13:39:52', '2017-03-01 10:42:11', 0),
(368, 9, NULL, 'refunded', 'Déclassé suite répression des fraudes', '2017-02-14 13:49:09', '2017-02-14 13:49:09', NULL, 0),
(369, 9, NULL, 'refunded', 'Déclassés suite répression des fraudes', '2017-02-14 13:50:57', '2017-02-14 13:50:57', NULL, 0),
(370, 3, 201575, 'refunded', 'manque un jeu de cartes "l''artiste en vous"', '2017-02-15 10:01:29', '2017-02-17 09:48:20', NULL, 0),
(373, 3, 200093, 'refunded', 'il y a 4 sparadraps blancs pour remplacer les attaches cassées ( il y en avait 6 cassées au départ, plus que 4 car 2 supplémentaires dans le colis) et la seconde photo sur laquelle il manque la vitre dans le cadre du haut à gauche', '2017-02-15 10:51:00', '2017-02-15 10:51:00', '2017-04-13 14:52:03', 0),
(375, 7, NULL, 'refunded', 'Embout de hampe fendu', '2017-02-15 18:18:08', '2017-02-15 18:18:08', '2017-04-28 15:20:17', 0),
(376, 9, NULL, 'refunded', 'Manquant à la réception', '2017-02-16 14:45:50', '2017-02-16 14:45:50', '2017-02-20 15:02:35', 1),
(377, 7, NULL, 'refunded', 'Port micro USb enfoncé et câble micro usb/usb semblant défaillant aussi', '2017-02-17 09:45:07', '2017-02-17 09:45:07', '2017-03-06 16:11:35', 0),
(378, 3, 202318, 'new', 'coupelle cassée', '2017-02-17 15:42:55', '2017-02-17 15:42:55', NULL, 1),
(379, 3, 202241, 'balance', 'casse', '2017-02-17 15:49:58', '2017-02-17 15:49:58', '2017-05-04 14:55:13', 0),
(380, 3, 201276, 'new', '1ère boite : huile a coulé et a mouillé le jeu et les cartes et 2e boite renvoyée : huile a encore coulé et boite de rangement est cassée', '2017-02-17 16:38:34', '2017-02-27 10:25:15', NULL, 0),
(382, 11, NULL, 'refunded', 'manquant a la reception', '2017-02-20 10:29:09', '2017-02-20 10:29:09', NULL, 0),
(383, 11, NULL, 'refunded', 'manquant a la reception', '2017-02-20 10:29:51', '2017-02-20 10:29:51', NULL, 0),
(384, 3, 201702, 'refunded', 'mug fuit liquide coule dans le compartiment à piles', '2017-02-20 13:58:51', '2017-02-20 13:58:51', '2017-04-13 14:52:09', 0),
(385, 3, NULL, 'new', 'coffret mélange torride cassé', '2017-02-20 15:40:42', '2017-02-20 15:40:42', '2017-04-04 19:11:58', 1),
(386, 3, 173912, 'refunded', 'ne fonctionne plus avec iphone après 1 mois d''utilisation', '2017-02-20 16:20:53', '2017-02-20 16:20:53', '2017-03-01 10:42:02', 0),
(387, 3, 199450, 'new', 'cassé', '2017-02-21 10:12:59', '2017-02-21 10:12:59', NULL, 0),
(389, 9, NULL, 'refunded', 'Pas la bonne taille de lampe', '2017-02-21 11:51:57', '2017-02-21 11:51:57', '2017-02-23 11:59:14', 1),
(390, 3, 202481, 'new', '2 lettres L abimées', '2017-02-21 12:19:06', '2017-02-21 12:19:06', NULL, 0),
(391, 7, NULL, 'refunded', 'Problème de couture sur une main', '2017-02-21 14:54:08', '2017-02-21 14:54:08', '2017-04-13 14:52:16', 0),
(392, 3, 202250, 'refunded', 'couvercle cassé', '2017-02-22 09:44:51', '2017-02-22 09:44:51', '2017-05-04 15:24:55', 0),
(393, 3, 202250, 'new', 'fuite', '2017-02-22 09:45:53', '2017-02-22 09:45:53', NULL, 0),
(394, 3, NULL, 'refunded', 's''est arrêté de fonctionner après test 1h', '2017-02-22 11:04:17', '2017-02-22 11:04:17', '2017-04-28 15:20:21', 0),
(395, 3, 196564, 'new', 'manque 1 dé violet lieux propices', '2017-02-22 11:12:04', '2017-02-22 11:12:04', NULL, 0),
(396, 3, 202666, 'refunded', 'cassé', '2017-02-22 14:11:35', '2017-02-22 14:11:35', NULL, 0),
(397, 3, 199460, 'refunded', '3 bocaux cassés, fissurés ou avec fuite', '2017-02-22 14:33:12', '2017-02-22 14:34:07', '2017-06-08 20:40:17', 0),
(398, 3, 202958, 'refunded', 'déchirée sur tout le bas de la carte', '2017-02-23 13:47:22', '2017-02-23 13:50:21', '2017-04-28 15:20:23', 0),
(399, 3, 191873, 'new', 'bruit à l''intérieur, objet qui bouge, ne fonctionnait pas chez la client mais marche chez nous', '2017-02-27 10:12:10', '2017-02-27 10:12:10', NULL, 0),
(400, 10, NULL, 'refunded', 'Cassé à la réception', '2017-02-27 13:29:53', '2017-02-27 13:30:09', '2017-03-01 10:37:57', 1),
(401, 3, 202205, 'refunded', 'robinet fuit, joint non hermétique', '2017-02-27 13:46:52', '2017-02-27 13:46:52', '2017-04-13 14:52:32', 0),
(403, 3, 202293, 'refunded', 'Manque le boulon', '2017-02-27 14:12:11', '2017-02-27 15:13:13', '2017-03-01 10:41:46', 0),
(404, 3, 202933, 'new', 'cassée', '2017-02-27 15:54:01', '2017-02-27 15:54:01', NULL, 0),
(405, 3, 202153, 'new', 'manque la petite balle', '2017-02-28 13:49:52', '2017-02-28 13:49:52', NULL, 0),
(406, 3, NULL, 'new', 'Huile a coulé, sur les cartes et les produits', '2017-03-01 11:51:35', '2017-03-01 11:51:35', NULL, 0),
(407, 3, 0, 'refunded', 'cabanes cassées ou décollées sur chaque guirlande', '2017-03-01 14:33:58', '2017-03-01 14:33:58', '2017-03-23 16:15:27', 0),
(408, 3, 0, 'refunded', 'a brûlé sur le coin allumage', '2017-03-01 14:37:45', '2017-03-01 14:37:45', '2017-03-13 13:56:24', 0),
(409, 9, NULL, 'refunded', 'Pâte manquante', '2017-03-01 16:50:10', '2017-03-01 16:50:10', '2017-05-04 15:24:57', 1),
(410, 9, NULL, 'refunded', 'Emballage et produit écrasé', '2017-03-01 17:18:52', '2017-03-01 17:18:52', '2017-03-06 16:13:56', 1),
(411, 3, 0, 'refunded', 'une fois les piles en place, ne s''arrête plus', '2017-03-02 10:45:02', '2017-03-02 10:45:02', '2017-04-13 14:52:25', 0),
(412, 3, 0, 'refunded', 'cassé', '2017-03-02 10:47:33', '2017-03-02 10:47:33', NULL, 0),
(413, 3, 203239, 'refunded', 'rayures noires sur les yeux', '2017-03-02 11:01:23', '2017-03-02 11:01:23', '2017-05-11 10:15:51', 0),
(414, 9, NULL, 'refunded', 'Tâches jaune sur les stylos blancs', '2017-03-02 12:10:21', '2017-03-02 12:10:21', '2017-03-06 19:32:38', 1),
(415, 9, NULL, 'refunded', 'Début de moisissures (chaque produit a été ouvert et vérifié)', '2017-03-02 12:12:14', '2017-03-02 12:12:14', '2017-03-06 16:02:10', 1),
(416, 9, NULL, 'refunded', 'Cassé à la réception', '2017-03-02 12:17:37', '2017-03-02 12:17:37', NULL, 1),
(417, 9, NULL, 'refunded', 'Emballage écrasé', '2017-03-02 12:18:24', '2017-03-02 12:18:24', NULL, 1),
(418, 3, 203621, 'new', 'manque les lettres', '2017-03-02 12:22:55', '2017-03-02 12:22:55', NULL, 0),
(419, 9, NULL, 'refunded', 'Tâché et percé', '2017-03-02 12:31:20', '2017-03-02 12:31:20', '2017-03-06 16:08:15', 1),
(420, 9, NULL, 'refunded', '1 Connectique manquant', '2017-03-02 13:52:32', '2017-03-02 13:52:32', '2017-03-06 16:04:36', 1),
(421, 3, 203558, 'refunded', 'trous à l''emplacement de l''étiquette, différence de couleur et une petite déchirure sous le "with"', '2017-03-03 10:00:33', '2017-03-03 10:00:33', '2017-05-04 15:25:00', 0),
(422, 3, 203608, 'new', 'soucoupe cassée', '2017-03-06 09:33:50', '2017-03-06 09:33:50', NULL, 0),
(423, 3, 0, 'refunded', 'cassé', '2017-03-06 14:31:40', '2017-03-06 14:31:40', '2017-04-06 15:28:11', 0),
(424, 3, 0, 'refunded', 'cassé sur un côté', '2017-03-06 14:33:51', '2017-03-06 14:33:51', '2017-05-11 10:15:58', 0),
(425, 3, 0, 'refunded', 'manque le câble de chargement et l''embout coeur ne tient pas dans la prise', '2017-03-06 14:37:02', '2017-03-06 14:37:02', '2017-05-04 15:25:03', 0),
(426, 3, 0, 'refunded', 'Un pot fêlé', '2017-03-06 14:40:00', '2017-03-06 14:40:00', '2017-04-06 15:14:31', 0),
(427, 3, 188581, 'refunded', '1 flacon ouvert dans le coffret', '2017-03-07 13:35:41', '2017-03-07 13:35:51', NULL, 0),
(428, 9, NULL, 'refunded', 'Partie du haut cassée', '2017-03-07 14:27:55', '2017-03-07 14:27:55', '2017-03-14 09:39:53', 1),
(429, 9, NULL, 'refunded', 'Produit cassé', '2017-03-07 16:58:35', '2017-03-07 16:58:35', NULL, 1),
(431, 3, 174816, 'refunded', 'manque les capuchons pour fermer', '2017-03-08 11:42:04', '2017-03-08 11:42:04', '2017-05-10 19:21:41', 0),
(432, 3, 201807, 'refunded', 'ne fonctionne pas au-delà du chiffre 9 et celle testée pour remplacement ne fonctionne pas', '2017-03-08 11:50:14', '2017-03-22 14:06:57', '2017-03-23 16:17:19', 0),
(433, 3, 203931, 'refunded', 'dessus cassé', '2017-03-08 16:51:43', '2017-03-08 16:51:43', NULL, 0),
(434, 7, NULL, 'refunded', 'Mécanisme de fonctionne pas. Modèle Bleu', '2017-03-09 11:37:07', '2017-03-09 11:37:07', '2017-04-13 14:52:47', 0),
(435, 7, NULL, 'refunded', 'Socle cassé', '2017-03-09 11:38:03', '2017-03-09 11:38:03', '2017-04-28 15:20:09', 0),
(438, 9, NULL, 'refunded', 'Emballage cassé', '2017-03-10 12:21:35', '2017-03-10 12:21:35', '2017-03-13 12:28:23', 1),
(439, 3, 0, 'refunded', 'couture a lâché sur un côté', '2017-03-10 12:30:29', '2017-03-10 12:30:29', '2017-05-11 10:16:03', 0),
(441, 3, NULL, 'new', 'emballage déchiré', '2017-03-10 16:22:26', '2017-03-10 16:22:26', NULL, 0),
(442, 3, 202194, 'refunded', 'une hélice est mal connectée', '2017-03-13 14:51:17', '2017-03-13 14:51:17', '2017-03-27 15:01:15', 0),
(444, 3, 197332, 'refunded', 'les aiguilles s’arrêtent au bout de quelques minutes', '2017-03-13 14:58:55', '2017-03-13 14:58:55', '2017-03-23 16:17:27', 0),
(445, 3, NULL, 'refunded', 'une qui grésille fort lorsqu''elle est branchée', '2017-03-13 16:35:00', '2017-03-14 14:56:55', '2017-04-28 15:20:11', 0),
(446, 9, NULL, 'refunded', '2 tampons similaires au lieu de 2 differents', '2017-03-13 16:38:00', '2017-03-13 16:38:00', '2017-04-06 15:15:56', 0),
(448, 3, 0, 'refunded', 'fuit', '2017-03-14 10:47:35', '2017-03-14 10:47:35', NULL, 0),
(449, 3, NULL, 'refunded', 'adaptateur chauffe énormément ne peut pas être touché', '2017-03-14 14:57:18', '2017-03-14 14:57:18', NULL, 0);
INSERT INTO `faulty` (`id`, `user_id`, `id_order`, `status`, `reason`, `created_at`, `updated_at`, `send_mail_at`, `reception`) VALUES
(450, 9, NULL, 'refunded', 'Carte cornée sur le haut angle droit', '2017-03-15 12:17:42', '2017-03-15 12:17:42', '2017-03-16 14:02:48', 1),
(451, 7, NULL, 'balance', 'Modèle jaune, clé USB non reconnue une fois connectée.', '2017-03-15 14:03:00', '2017-03-15 14:03:00', '2017-05-03 13:51:34', 0),
(452, 7, NULL, 'refunded', 'Adaptateur HS (n''a fonctionné qu''une journée)', '2017-03-15 14:05:05', '2017-03-15 14:05:05', NULL, 0),
(453, 9, NULL, 'refunded', 'Emballage écrasé', '2017-03-15 14:06:22', '2017-03-15 14:06:22', '2017-03-16 14:05:06', 1),
(454, 7, NULL, 'refunded', 'Sommet écrasé', '2017-03-15 14:07:17', '2017-03-15 14:07:17', NULL, 0),
(455, 9, NULL, 'refunded', 'Produit non commandé', '2017-03-16 14:08:03', '2017-03-16 14:08:03', '2017-03-16 16:23:44', 1),
(456, 3, 204687, 'new', 'clapet cassé', '2017-03-20 09:20:53', '2017-03-20 09:20:53', NULL, 0),
(457, 9, NULL, 'refunded', 'Produit percé', '2017-03-20 17:18:18', '2017-03-20 17:18:18', '2017-03-21 14:12:07', 1),
(458, 3, 204351, 'new', 'casse', '2017-03-21 16:16:38', '2017-03-21 16:16:38', NULL, 0),
(459, 9, NULL, 'refunded', 'Objet cassé', '2017-03-22 16:58:15', '2017-03-22 16:58:15', '2017-03-23 09:07:40', 1),
(460, 9, NULL, 'refunded', 'Emballage écrasé', '2017-03-22 16:59:50', '2017-03-22 16:59:50', '2017-03-23 09:07:43', 1),
(461, 9, NULL, 'refunded', 'Emballage écrasé', '2017-03-22 17:01:01', '2017-03-22 17:01:01', '2017-03-23 09:07:46', 1),
(462, 9, NULL, 'refunded', 'Objet cassé', '2017-03-22 17:02:31', '2017-03-22 17:02:31', '2017-03-23 09:07:49', 1),
(463, 3, 204767, 'new', 'boite déchirée', '2017-03-23 09:12:04', '2017-03-23 09:12:04', NULL, 0),
(464, 3, 205347, 'mail_send', 'défauts et chiffre 8 abîmé', '2017-03-23 11:29:59', '2017-03-23 11:29:59', '2017-06-26 16:33:39', 0),
(465, 3, 203806, 'refunded', 'Grande aiguille ne tourne pas, reste bloquée en bas', '2017-03-23 12:27:43', '2017-03-23 12:27:43', '2017-04-13 14:52:52', 0),
(466, 9, NULL, 'refunded', 'Date de péremption au 18 avril 2017', '2017-03-24 12:15:00', '2017-03-24 12:15:00', '2017-03-27 11:37:04', 1),
(468, 3, 201429, 'refunded', 'manque le tamis en métal', '2017-03-24 13:47:12', '2017-03-24 13:47:12', NULL, 0),
(469, 3, 188809, 'refunded', 'ne marche pas', '2017-03-24 14:36:43', '2017-03-24 14:36:43', '2017-05-24 14:23:13', 0),
(472, 7, NULL, 'refunded', 'oxydé', '2017-03-24 18:46:04', '2017-03-24 18:46:04', '2017-05-11 10:16:08', 0),
(473, 7, NULL, 'refunded', 'Décousu', '2017-03-25 09:35:04', '2017-03-25 09:35:04', '2017-05-11 10:16:12', 0),
(474, 7, NULL, 'mail_send', 'en moyen modèle, une vitre fendue', '2017-03-25 09:50:02', '2017-03-25 09:50:02', '2017-05-04 15:25:06', 0),
(475, 3, 0, 'new', 'embout micro usb ne tient pas', '2017-03-27 11:11:22', '2017-03-27 11:11:22', NULL, 0),
(476, 9, NULL, 'new', 'Trouvé cassé à l expedition', '2017-03-27 13:44:33', '2017-03-27 13:44:33', NULL, 0),
(477, 3, 204793, 'refunded', 'rayé', '2017-03-27 13:57:42', '2017-03-27 13:57:42', '2017-04-13 14:52:57', 0),
(478, 9, NULL, 'refunded', 'Emballage abîmé et déchiré', '2017-03-27 15:21:31', '2017-03-27 15:21:31', '2017-03-29 11:30:44', 1),
(479, 9, NULL, 'refunded', 'Manquant à la réception', '2017-03-28 11:05:21', '2017-03-28 11:05:21', '2017-03-29 09:13:48', 1),
(480, 9, NULL, 'refunded', 'Date de péremption au 18 avril 2017', '2017-03-28 11:26:28', '2017-03-28 11:26:28', '2017-03-29 09:08:45', 1),
(481, 9, NULL, 'refunded', 'Produit cassé', '2017-03-28 11:28:13', '2017-03-28 11:28:13', '2017-03-29 09:14:12', 1),
(482, 3, 190064, 'refunded', 'ne fonctionne plus', '2017-03-30 13:41:33', '2017-03-30 13:41:33', '2017-05-11 10:16:16', 0),
(483, 3, 202968, 'new', 'brisée', '2017-03-30 15:43:01', '2017-03-30 15:43:01', NULL, 0),
(484, 9, NULL, 'refunded', 'Manquant à la réception', '2017-03-30 16:24:26', '2017-03-30 16:24:26', '2017-04-04 11:19:03', 1),
(486, 9, NULL, 'refunded', 'Cassé à la réception', '2017-03-31 11:17:17', '2017-03-31 11:17:17', '2017-04-04 11:21:55', 1),
(487, 9, NULL, 'refunded', 'Cassé à la réception', '2017-03-31 11:20:18', '2017-03-31 11:20:18', '2017-04-04 11:41:10', 1),
(489, 9, NULL, 'refunded', 'Manquant à la réception', '2017-03-31 11:28:10', '2017-03-31 11:28:10', '2017-04-04 11:20:21', 1),
(490, 9, NULL, 'refunded', 'Manquant à la réception', '2017-03-31 11:28:20', '2017-03-31 11:28:20', NULL, 1),
(491, 9, NULL, 'refunded', '2 lignes de 6 unités sur le bl et seulement 6 reçus', '2017-03-31 11:29:59', '2017-03-31 11:29:59', '2017-04-04 11:19:43', 1),
(492, 3, NULL, 'new', 'peinture endommagée sur les oreilles', '2017-04-03 10:40:39', '2017-04-03 10:40:39', NULL, 0),
(495, 3, 204206, 'refunded', 'pied cassé', '2017-04-04 13:45:34', '2017-04-04 13:45:34', '2017-06-09 18:08:50', 0),
(496, 9, NULL, 'refunded', 'Boite écrasée : mug intact', '2017-04-05 15:31:18', '2017-04-05 15:31:18', '2017-04-06 15:28:14', 1),
(497, 7, NULL, 'mail_send', 'bouchons liège cassés', '2017-04-05 16:33:59', '2017-04-05 16:33:59', '2017-05-04 15:25:10', 0),
(498, 7, NULL, 'refunded', 'couture défaillante', '2017-04-05 16:38:12', '2017-04-05 16:38:12', '2017-05-11 10:16:22', 0),
(499, 7, NULL, 'refunded', 'Bouton enfoncé sous la veilleuse', '2017-04-05 16:47:12', '2017-04-05 16:47:12', '2017-05-04 15:07:02', 0),
(500, 7, NULL, 'refunded', 'rivet manquant', '2017-04-05 16:49:59', '2017-04-05 16:50:38', '2017-04-13 14:53:03', 0),
(501, 3, 206765, 'refunded', 'une bille désoudée', '2017-04-10 11:02:14', '2017-04-10 11:02:14', '2017-05-04 15:16:48', 0),
(502, 9, NULL, 'refunded', 'Cassé', '2017-04-10 17:06:48', '2017-04-10 17:06:48', '2017-06-26 16:12:48', 0),
(503, 9, NULL, 'refunded', 'Pile hs', '2017-04-10 17:07:27', '2017-04-10 17:07:27', '2017-06-26 16:12:51', 0),
(504, 3, NULL, 'new', 'emballage déchiré', '2017-04-11 13:37:33', '2017-04-11 13:37:33', NULL, 0),
(505, 9, NULL, 'refunded', 'Emballage écrasé', '2017-04-11 14:01:02', '2017-04-11 14:01:02', '2017-04-13 13:48:05', 1),
(506, 9, NULL, 'refunded', 'Fuite', '2017-04-11 14:14:29', '2017-04-11 14:14:41', NULL, 1),
(507, 3, 167918, 'refunded', 'ne marche pas', '2017-04-12 09:54:57', '2017-04-12 09:54:57', '2017-04-28 15:20:14', 0),
(508, 9, NULL, 'refunded', 'Percé à la réception', '2017-04-12 15:24:50', '2017-04-12 15:24:50', '2017-04-18 16:37:25', 1),
(509, 3, 207329, 'refunded', '2 tasses cassées', '2017-04-14 10:28:32', '2017-04-19 15:13:32', '2017-06-09 19:31:44', 0),
(510, 3, 207234, 'new', 'sale et une fissure', '2017-04-18 10:26:09', '2017-04-18 10:26:09', NULL, 0),
(513, 3, 206567, 'new', 'Huile a coulé', '2017-04-19 10:33:32', '2017-04-19 10:33:32', NULL, 0),
(514, 3, 207534, 'new', 'fissuré et fuit', '2017-04-20 09:48:04', '2017-04-20 09:48:04', NULL, 0),
(515, 3, 207389, 'new', '3 des 6 LEDs sur le dessus ne fonctionnent pas', '2017-04-20 12:00:17', '2017-04-20 12:00:17', NULL, 0),
(516, 9, NULL, 'refunded', 'Emballage abîmé et déchiré', '2017-04-21 11:05:46', '2017-04-21 11:05:46', '2017-04-25 20:21:16', 1),
(517, 3, 205878, 'refunded', 'collent très peu et très mal', '2017-04-21 11:57:09', '2017-05-05 12:25:54', '2017-04-28 15:15:54', 0),
(519, 9, NULL, 'new', 'Cassé à la réception', '2017-04-25 17:08:35', '2017-04-25 17:08:35', '2017-04-26 19:17:36', 1),
(520, 9, NULL, 'refunded', 'Cassé à la réception', '2017-04-25 17:09:41', '2017-04-25 17:09:41', NULL, 1),
(521, 10, NULL, 'refunded', '8 manquants sur 16 à la réception du 25/04', '2017-04-25 17:42:10', '2017-04-25 17:42:10', '2017-04-26 16:28:02', 1),
(522, 3, 207187, 'refunded', 'ne pousse pas après 15 jours', '2017-04-26 10:57:53', '2017-04-26 10:58:04', '2017-04-26 12:06:29', 0),
(523, 9, NULL, 'refunded', 'Fissuré', '2017-04-26 11:29:05', '2017-04-26 11:29:05', '2017-04-28 12:19:47', 1),
(524, 3, NULL, 'refunded', 'un compartiment cassé, remis en place avec de la colle qui a bavé', '2017-04-26 14:16:20', '2017-04-26 14:16:20', '2017-05-11 10:16:28', 0),
(528, 3, 0, 'mail_send', 'ne fonctionne pas, ne s''allume pas', '2017-04-26 15:56:03', '2017-04-26 15:56:03', '2017-05-11 11:43:11', 0),
(529, 9, NULL, 'refunded', 'Manquant à la réception', '2017-04-27 16:14:32', '2017-04-27 16:14:32', NULL, 1),
(530, 9, NULL, 'refunded', 'Manquant à la réception', '2017-04-27 16:15:35', '2017-04-27 16:15:35', NULL, 1),
(531, 9, NULL, 'refunded', 'produits en trop', '2017-04-27 16:16:47', '2017-04-27 16:16:47', NULL, 1),
(533, 9, NULL, 'balance', 'Emballage écrasé', '2017-04-28 15:54:41', '2017-04-28 15:54:41', '2017-05-04 14:53:20', 1),
(535, 9, NULL, 'refunded', 'Cassé à la réception', '2017-04-28 15:55:54', '2017-04-28 15:55:54', '2017-05-04 14:57:17', 1),
(536, 9, NULL, 'refunded', 'Emballage écrasé', '2017-04-28 16:00:29', '2017-04-28 16:00:29', NULL, 1),
(537, 9, NULL, 'balance', 'Emballage écrasé', '2017-04-28 16:01:23', '2017-04-28 16:01:23', '2017-05-04 14:53:53', 1),
(538, 9, NULL, 'refunded', 'Cassé à la réception', '2017-04-28 16:03:22', '2017-04-28 16:03:22', '2017-05-04 15:05:00', 1),
(539, 9, NULL, 'refunded', 'Cassé à la réception', '2017-04-28 16:18:06', '2017-04-28 16:18:06', '2017-05-04 15:15:23', 1),
(540, 3, 201371, 'refunded', 'trou dans un coin', '2017-04-28 16:18:46', '2017-04-28 16:18:46', '2017-06-26 16:38:01', 0),
(541, 9, NULL, 'refunded', 'Cassé à la réception', '2017-04-28 16:19:02', '2017-04-28 16:19:02', '2017-05-04 15:14:55', 1),
(542, 3, NULL, 'new', 'cassé', '2017-04-28 16:20:02', '2017-04-28 16:20:02', NULL, 0),
(545, 7, NULL, 'refunded', 'Pas de vis défectueux partie haute du plateau.', '2017-05-02 14:49:27', '2017-05-02 14:49:27', '2017-05-10 19:28:41', 0),
(546, 7, NULL, 'refunded', 'Ne tient pas ouvert.', '2017-05-02 14:53:39', '2017-05-02 14:53:39', '2017-06-09 19:31:48', 0),
(547, 7, NULL, 'new', 'Bouton déclencheur non opérationnel.', '2017-05-02 14:55:36', '2017-05-02 14:55:36', NULL, 0),
(548, 7, NULL, 'refunded', 'Résine cassée.', '2017-05-02 14:58:14', '2017-05-02 14:58:14', '2017-05-11 09:04:15', 0),
(549, 7, NULL, 'mail_send', 'Manque les 2 cartes love', '2017-05-02 15:02:54', '2017-05-02 15:02:54', '2017-06-30 16:42:02', 0),
(550, 7, NULL, 'refunded', 'Danseuse qui penche vers l''avant.', '2017-05-02 15:12:28', '2017-05-02 15:12:28', '2017-05-04 14:58:40', 0),
(551, 7, NULL, 'balance', 'Ne s''ouvre pas.', '2017-05-02 15:17:49', '2017-05-02 15:17:49', '2017-05-10 19:20:17', 0),
(552, 7, NULL, 'new', 'Défaut de peinture sur les sets', '2017-05-02 15:23:32', '2017-05-02 15:23:32', NULL, 0),
(553, 9, NULL, 'refunded', 'Manque deux robinets et deux couvercle', '2017-05-02 16:49:27', '2017-05-02 16:49:27', '2017-06-08 20:40:00', 0),
(555, 9, NULL, 'new', 'Déchiré à l''expédition', '2017-05-02 16:52:25', '2017-05-02 16:52:25', NULL, 0),
(556, 9, NULL, 'balance', 'Reçu couleur blanche au lieu de noire', '2017-05-02 17:54:37', '2017-05-02 17:54:37', '2017-05-03 13:51:22', 1),
(557, 3, 208631, 'refunded', 'manque le robinet', '2017-05-03 09:24:07', '2017-05-03 09:24:07', '2017-06-08 20:39:45', 0),
(558, 7, NULL, 'new', 'Le fil ne se bloque pas. Modèle rouge.', '2017-05-03 11:40:56', '2017-05-03 11:40:56', NULL, 0),
(559, 3, NULL, 'refunded', 'ne collent pas', '2017-05-03 13:45:40', '2017-05-03 13:45:40', NULL, 0),
(560, 3, 196634, 'refunded', 'lettres pas toutes de la même taille', '2017-05-03 14:27:57', '2017-05-03 14:27:57', NULL, 0),
(561, 3, 207805, 'refunded', 's''arrête de fonctionner au bout de quelques minutes', '2017-05-09 11:44:54', '2017-05-09 11:44:54', '2017-05-10 19:28:26', 0),
(562, 7, NULL, 'refunded', 'Défaut de couture', '2017-05-09 13:47:18', '2017-05-09 13:47:18', '2017-05-11 10:15:28', 0),
(563, 7, NULL, 'new', 'Montant en chrome oxydé', '2017-05-09 14:50:33', '2017-05-09 14:50:33', NULL, 0),
(564, 7, NULL, 'refunded', 'Cassé.', '2017-05-09 14:56:48', '2017-05-09 14:56:48', '2017-05-24 14:21:00', 0),
(565, 3, 208168, 'refunded', 's''arrête de fonctionner au bout de quelques minutes', '2017-05-09 17:30:36', '2017-05-09 17:30:36', '2017-05-10 19:28:29', 0),
(566, 13, NULL, 'refunded', 'Défaut du verre', '2017-05-09 17:37:53', '2017-05-09 17:37:53', '2017-05-10 19:15:52', 1),
(567, 3, 209036, 'mail_send', 'Vitre du coffret noir rayée et décollée', '2017-05-10 09:59:16', '2017-05-10 09:59:16', '2017-06-09 18:44:58', 0),
(568, 13, NULL, 'refunded', '3 carte du monde en anglais', '2017-05-10 16:59:40', '2017-05-11 09:36:18', '2017-05-11 09:04:18', 1),
(569, 13, NULL, 'refunded', '2 livre endommagé', '2017-05-10 17:10:15', '2017-05-11 09:34:48', '2017-05-11 10:05:11', 1),
(570, 13, NULL, 'refunded', '2 emballages endommagés', '2017-05-10 17:11:10', '2017-05-11 09:34:07', '2017-05-11 10:05:16', 1),
(571, 13, NULL, 'refunded', '12 set en trop', '2017-05-10 17:13:04', '2017-05-10 17:13:04', NULL, 1),
(572, 13, NULL, 'refunded', 'Produit cassé', '2017-05-11 16:49:29', '2017-05-11 16:49:29', '2017-05-15 12:06:32', 1),
(575, 13, NULL, 'mail_send', 'Cassé à la réception', '2017-05-11 16:57:08', '2017-05-11 16:57:08', '2017-05-12 09:04:01', 1),
(576, 3, 209484, 'refunded', 'fêlé', '2017-05-12 12:21:05', '2017-05-12 12:21:05', '2017-06-09 14:38:40', 0),
(577, 3, 209438, 'new', 'manque un embout sur un stylo', '2017-05-12 14:14:59', '2017-05-12 14:14:59', NULL, 0),
(578, 7, NULL, 'mail_send', 'Manquent les pinces aimantées, modèle noir', '2017-05-12 15:17:55', '2017-05-12 15:17:55', '2017-06-30 16:47:41', 0),
(579, 13, NULL, 'refunded', 'Produit Cassé', '2017-05-12 15:26:12', '2017-05-12 15:26:12', '2017-05-15 09:26:01', 1),
(580, 13, NULL, 'new', 'Cassée au picking', '2017-05-15 17:08:12', '2017-05-15 17:08:12', NULL, 0),
(581, 3, 187000, 'new', 'lorsque le câble d''alimentation bouge, la station s''éteint', '2017-05-16 11:28:10', '2017-05-16 11:28:10', NULL, 0),
(582, 3, 209080, 'refunded', '3 grands cubes avec vitres brisées', '2017-05-16 16:51:14', '2017-05-16 16:51:14', NULL, 0),
(583, 13, NULL, 'balance', '1 cassé et deux emballages endommagés', '2017-05-16 16:51:42', '2017-05-16 16:51:42', '2017-05-17 11:28:17', 1),
(584, 13, NULL, 'refunded', 'Produit abimé', '2017-05-18 16:17:00', '2017-05-18 16:17:00', '2017-05-19 08:33:59', 1),
(585, 2, 210104, 'refunded', 'défaut peinture', '2017-05-19 10:21:57', '2017-05-19 10:21:57', NULL, 0),
(586, 2, 210443, 'new', 'manque pastille de tourbe', '2017-05-19 11:13:53', '2017-05-19 11:13:53', NULL, 0),
(587, 2, 208210, 'refunded', 'Produit plié à cause de la chaleur dans la voiture', '2017-05-19 13:43:55', '2017-05-19 13:43:55', '2017-06-26 09:51:28', 0),
(588, 2, 210002, 'new', 'Froissée lors de la livraison', '2017-05-19 14:07:45', '2017-05-19 14:07:45', NULL, 0),
(589, 13, NULL, 'mail_send', 'Manquant à la réception', '2017-05-19 16:08:15', '2017-05-19 16:08:15', '2017-05-22 20:17:58', 1),
(590, 7, NULL, 'refunded', 'Pas de mine dans le stylo !', '2017-05-19 17:06:40', '2017-05-19 17:06:40', '2017-06-08 20:39:40', 0),
(591, 3, 210203, 'new', 'cassé', '2017-05-22 09:40:55', '2017-05-22 09:40:55', NULL, 0),
(592, 3, NULL, 'new', 'finitions mal faites', '2017-05-22 12:09:12', '2017-05-22 12:09:12', NULL, 0),
(593, 3, 209653, 'refunded', 'fuite', '2017-05-22 15:36:38', '2017-05-22 15:36:38', '2017-06-08 20:39:32', 0),
(594, 3, 210551, 'new', 'ne s''allume pas', '2017-05-22 16:39:50', '2017-05-23 09:37:59', NULL, 0),
(595, 3, NULL, 'new', 'boite endomagée', '2017-05-23 09:58:28', '2017-05-23 09:58:28', '2017-05-23 11:22:55', 0),
(597, 3, 208722, 'refunded', 'robinet fuit', '2017-05-23 12:31:43', '2017-05-23 12:31:43', '2017-06-08 20:39:21', 0),
(598, 3, 143051, 'refunded', 'ne fonctionne pas', '2017-05-23 16:13:18', '2017-05-23 16:13:18', '2017-06-26 16:11:48', 0),
(599, 13, NULL, 'new', 'Emballage cassé', '2017-05-23 16:41:01', '2017-05-23 16:41:01', NULL, 1),
(600, 13, NULL, 'refunded', 'Bouton qui ce coince dedans', '2017-05-23 16:54:08', '2017-05-23 16:54:08', '2017-05-24 14:21:04', 1),
(601, 3, 210651, 'new', 'ne marche pas', '2017-05-24 09:50:41', '2017-05-24 09:50:41', NULL, 0),
(603, 7, NULL, 'new', 'Coupelle cassée', '2017-05-24 17:01:44', '2017-05-24 17:01:44', NULL, 0),
(604, 7, NULL, 'new', 'Coupelle cassée', '2017-05-24 17:02:21', '2017-05-24 17:02:21', NULL, 0),
(605, 7, NULL, 'new', 'Coupelle cassée', '2017-05-24 17:03:16', '2017-05-24 17:03:16', NULL, 0),
(606, 7, NULL, 'new', 'Coupelle cassée', '2017-05-24 17:05:37', '2017-05-24 17:05:37', NULL, 0),
(611, 3, 210209, 'mail_send', 'tâché et avec petites irrégularités sur le fond', '2017-05-26 13:39:05', '2017-05-26 13:39:05', '2017-06-30 16:47:47', 0),
(612, 3, 211361, 'new', 'fuite', '2017-05-26 13:50:21', '2017-05-26 13:50:21', NULL, 0),
(613, 3, 210653, 'mail_send', 'grand cube ne tourne pas même avec piles neuves', '2017-05-26 15:31:59', '2017-05-26 15:31:59', '2017-06-30 16:47:53', 0),
(614, 3, NULL, 'refunded', 'brisé', '2017-05-26 16:43:53', '2017-05-26 16:43:53', '2017-06-21 16:17:50', 0),
(615, 3, NULL, 'refunded', 'son du singe et pas du panda', '2017-05-29 12:21:47', '2017-05-29 12:21:47', NULL, 0),
(616, 10, NULL, 'refunded', 'Emballage écrasé', '2017-05-29 13:36:39', '2017-05-29 13:36:39', '2017-05-30 08:45:26', 1),
(617, 10, NULL, 'new', 'Emballage écrasé', '2017-05-29 13:37:18', '2017-05-29 13:37:18', NULL, 0),
(618, 10, NULL, 'refunded', 'Manquant à la réception', '2017-05-29 13:40:24', '2017-05-29 13:40:24', '2017-05-30 13:41:16', 1),
(620, 3, 210920, 'refunded', 'câble et base endommagés', '2017-05-29 14:26:19', '2017-05-29 14:26:19', '2017-06-06 17:05:11', 0),
(621, 3, 210335, 'refunded', 'fond et se tord', '2017-05-29 15:12:27', '2017-05-29 15:12:27', '2017-06-26 09:51:31', 0),
(622, 3, 211250, 'new', 'fils décousus', '2017-05-29 15:43:14', '2017-05-29 15:43:14', NULL, 0),
(623, 10, NULL, 'refunded', '2 porte clés vert manquants le 29/05', '2017-05-29 17:14:42', '2017-05-29 17:14:42', '2017-05-30 13:40:21', 1),
(626, 7, NULL, 'mail_send', 'Attache plastique cassée', '2017-05-30 11:35:09', '2017-05-30 11:35:09', '2017-06-30 16:48:08', 0),
(627, 7, NULL, 'new', 'Soucoupe en terre cuite cassée / Fournisseur Radis et Capucine ?', '2017-05-30 11:40:16', '2017-07-01 15:20:50', NULL, 0),
(628, 3, 210464, 'refunded', 'hélice s''arrête de tourner sans raison', '2017-05-30 12:28:54', '2017-05-30 12:28:54', '2017-06-08 20:39:16', 0),
(629, 3, 211345, 'new', 'violet cassé', '2017-05-30 12:39:23', '2017-05-30 12:39:23', NULL, 0),
(630, 3, NULL, 'refunded', 'compartiment pile rouillé et fait beaucoup de bruit', '2017-05-30 13:42:23', '2017-05-30 13:42:23', '2017-06-08 20:39:01', 0),
(631, 6, NULL, 'refunded', 'manquants', '2017-05-30 13:43:52', '2017-05-30 13:43:52', NULL, 0),
(632, 3, 209674, 'refunded', 'ne fonctionne pas', '2017-05-30 14:39:48', '2017-05-30 14:39:48', '2017-06-09 18:14:55', 0),
(633, 3, 211288, 'refunded', 'rose qui s''écaille', '2017-05-30 15:18:40', '2017-05-30 15:18:40', '2017-06-06 17:17:07', 0),
(634, 7, NULL, 'new', 'Ne s''allume pas !', '2017-05-30 16:28:19', '2017-05-30 16:28:19', NULL, 0),
(635, 7, NULL, 'new', 'Queue cassée.', '2017-05-30 17:37:49', '2017-05-30 17:37:49', NULL, 0),
(636, 7, NULL, 'refunded', 'Pas de sous-verre dans le carton', '2017-05-31 11:09:06', '2017-05-31 11:09:06', '2017-06-26 09:50:16', 0),
(637, 10, NULL, 'refunded', 'Couleur rouge au lieu de noire + mauvaise qualité', '2017-06-01 13:42:42', '2017-06-01 13:42:42', '2017-06-06 16:59:10', 0),
(638, 3, 211392, 'refunded', 'vitre brisée', '2017-06-02 10:33:46', '2017-06-02 10:33:46', NULL, 0),
(639, 10, NULL, 'refunded', 'Manquant à la réception du 02/06/17', '2017-06-02 11:36:05', '2017-06-02 11:36:05', '2017-06-06 14:51:30', 1),
(640, 3, 211442, 'new', 'cassée (bleue)', '2017-06-06 09:28:05', '2017-06-06 09:28:05', NULL, 0),
(641, 3, 209727, 'mail_send', 'plastique s''est détérioré', '2017-06-06 10:07:39', '2017-06-06 10:07:39', '2017-06-30 16:48:20', 0),
(642, 14, NULL, 'balance', 'test', '2017-02-06 12:37:05', '2017-02-06 12:37:05', '2017-02-06 12:37:05', 0),
(643, 3, 211452, 'new', 'verre rhum cassé', '2017-06-07 09:24:23', '2017-06-07 09:24:23', NULL, 0),
(644, 13, NULL, 'refunded', 'Emballage écrasé', '2017-06-07 11:53:19', '2017-06-07 11:53:19', '2017-06-08 20:31:00', 1),
(645, 7, NULL, 'new', 'Cassé à la base.', '2017-06-07 14:52:45', '2017-06-07 14:52:45', NULL, 0),
(646, 7, NULL, 'refunded', 'Ne fonctionne pas, papatte bouge pas.', '2017-06-07 14:56:48', '2017-06-07 14:56:48', '2017-06-08 20:38:51', 0),
(647, 7, NULL, 'mail_send', 'Balise verte ne fonctionne pas systématiquement', '2017-06-07 15:23:00', '2017-06-07 15:23:00', '2017-06-30 16:48:24', 0),
(648, 7, NULL, 'refunded', 'Baleine tordue', '2017-06-07 15:33:18', '2017-06-07 15:33:18', NULL, 0),
(649, 7, NULL, 'new', 'Manque le tamis', '2017-06-07 15:34:44', '2017-06-07 15:34:44', NULL, 0),
(650, 7, NULL, 'new', 'Petite pièce qui manque à l''arrière, modèle vert', '2017-06-07 17:31:19', '2017-06-07 17:31:19', '2017-06-08 20:38:46', 0),
(651, 13, NULL, 'refunded', '2 Manquant à la réception', '2017-06-08 12:26:09', '2017-06-08 12:26:09', '2017-06-09 13:31:49', 1),
(652, 13, NULL, 'refunded', 'Cassé à la réception', '2017-06-08 12:28:46', '2017-06-08 12:28:46', '2017-06-09 14:29:17', 1),
(653, 3, 212797, 'new', 'base ne s''allume pas', '2017-06-08 13:39:38', '2017-06-08 13:39:46', NULL, 0),
(654, 3, 207033, 'new', 'manque les deux billes métal', '2017-06-09 09:44:54', '2017-06-09 09:44:54', NULL, 0),
(655, 7, NULL, 'refunded', 'Attache sous bac à charbon décollée', '2017-06-09 10:02:42', '2017-06-09 10:02:42', '2017-06-26 16:11:52', 0),
(656, 7, NULL, 'new', 'Lumière stylo rouge ne fonctionne pas.', '2017-06-09 10:12:37', '2017-06-09 10:12:37', NULL, 0),
(657, 3, NULL, 'new', 'tête cassée', '2017-06-09 11:23:55', '2017-06-09 11:23:55', NULL, 0),
(658, 3, NULL, 'refunded', 'boite abîmée et tâchée et manque le sachet', '2017-06-09 11:27:00', '2017-06-09 11:27:00', '2017-06-09 14:38:44', 0),
(661, 3, 209903, 'refunded', 'traces de résine', '2017-06-09 11:31:36', '2017-06-09 11:31:36', '2017-06-09 14:38:46', 0),
(662, 3, NULL, 'refunded', 's''arrête de fonctionner au bout de quelques heures', '2017-06-09 11:32:46', '2017-06-09 11:32:46', '2017-06-09 14:38:49', 0),
(663, 3, 212968, 'new', 'anse cassée', '2017-06-12 10:20:31', '2017-06-12 10:20:31', NULL, 0),
(664, 3, NULL, 'new', 'tête cassée', '2017-06-12 10:59:00', '2017-06-12 10:59:00', NULL, 0),
(665, 3, NULL, 'new', 'un pied cassé', '2017-06-12 10:59:22', '2017-06-12 10:59:22', NULL, 0),
(666, 3, 212141, 'new', '1 bouteille cassée', '2017-06-12 11:31:09', '2017-06-12 11:31:09', NULL, 0),
(667, 3, 213078, 'new', 'lentille cassée', '2017-06-12 15:18:42', '2017-06-12 15:18:42', NULL, 0),
(668, 3, 212235, 'refunded', 'boite cassée', '2017-06-12 16:07:49', '2017-06-12 16:07:49', NULL, 0),
(669, 13, NULL, 'new', 'Connecteur base défectueux', '2017-06-12 17:06:16', '2017-06-12 17:06:16', NULL, 0),
(670, 13, NULL, 'refunded', 'Mug perplexe cassé', '2017-06-12 17:59:23', '2017-06-12 17:59:23', '2017-06-19 15:39:23', 1),
(671, 3, 208194, 'refunded', 'percé', '2017-06-13 11:33:40', '2017-06-13 11:33:40', '2017-06-21 16:17:54', 0),
(672, 3, 0, 'new', 'manque de très nombreuses lettres', '2017-06-13 16:21:32', '2017-06-13 16:22:04', NULL, 0),
(673, 13, NULL, 'refunded', 'Manquant à la réception', '2017-06-14 17:02:26', '2017-06-14 17:02:26', NULL, 1),
(674, 3, NULL, 'new', 'ne fonctionne pas', '2017-06-15 10:37:54', '2017-06-15 10:37:54', NULL, 0),
(675, 3, 212588, 'new', 'a grillé au bout d''une journée', '2017-06-15 11:51:57', '2017-06-15 11:51:57', NULL, 0),
(676, 3, 0, 'balance', 'batterie', '2017-06-15 15:33:29', '2017-06-15 15:33:46', NULL, 0),
(677, 13, NULL, 'refunded', 'Cassé à la réception', '2017-06-15 16:51:06', '2017-06-15 16:51:06', NULL, 1),
(678, 3, 213641, 'new', 'peinture s''écaille après un lavage à la main', '2017-06-19 10:38:27', '2017-06-19 10:38:27', NULL, 0),
(679, 3, 212904, 'new', 'casse', '2017-06-19 10:56:09', '2017-06-19 10:56:09', NULL, 0),
(680, 3, 213456, 'new', '1 verre fendu et 1 verre éraflé', '2017-06-19 14:50:40', '2017-06-19 14:50:40', NULL, 0),
(681, 3, 212942, 'new', '4 verres rayés avec des défauts', '2017-06-19 16:40:03', '2017-06-19 16:40:03', NULL, 0),
(682, 3, 214359, 'balance', 'un des bouchons fuit', '2017-06-20 10:46:01', '2017-06-20 10:46:23', NULL, 0),
(683, 3, 214016, 'new', 'fils emmêlés', '2017-06-20 14:48:17', '2017-06-20 14:48:17', NULL, 0),
(684, 3, 211895, 'refunded', 'ne marche pas', '2017-06-20 16:15:07', '2017-06-20 16:15:07', '2017-07-03 15:55:43', 0),
(686, 3, NULL, 'new', 'cassé', '2017-06-21 09:12:33', '2017-06-21 09:12:33', NULL, 0),
(687, 3, NULL, 'balance', 'batterie HS', '2017-06-21 09:49:04', '2017-06-21 09:49:18', NULL, 0),
(688, 3, NULL, 'balance', 'manque barre métal', '2017-06-21 10:06:19', '2017-06-21 10:06:26', NULL, 0),
(689, 3, 213692, 'new', 'cassé', '2017-06-21 10:09:32', '2017-06-21 10:09:32', NULL, 0),
(690, 10, NULL, 'refunded', 'Clavier en qwert', '2017-06-21 10:23:38', '2017-06-21 10:23:38', NULL, 0),
(691, 3, 211839, 'new', 'ne marche pas', '2017-06-21 16:51:51', '2017-06-21 16:51:51', NULL, 0),
(692, 3, 213862, 'new', 'ne fait pas de musique', '2017-06-22 10:00:54', '2017-06-22 10:00:54', NULL, 0),
(693, 3, 213799, 'mail_send', 'ne marche pas', '2017-06-22 14:14:37', '2017-06-22 14:14:37', '2017-06-30 17:05:16', 0),
(694, 3, 212403, 'new', 'casse', '2017-06-23 13:59:22', '2017-06-23 13:59:22', NULL, 0),
(695, 13, NULL, 'refunded', 'Manquant à la réception', '2017-06-23 14:36:46', '2017-06-23 14:36:46', '2017-06-26 09:50:13', 1),
(696, 10, NULL, 'new', 'Cassée', '2017-06-26 12:03:34', '2017-06-26 12:04:07', NULL, 0),
(697, 3, 213156, 'new', 'ne se gratte pas, se déchire', '2017-06-26 13:50:09', '2017-06-26 13:55:51', NULL, 0),
(698, 3, 212993, 'refunded', 'ne marche pas, ne capte pratiquement rien', '2017-06-26 16:07:30', '2017-06-26 16:07:30', '2017-06-26 16:36:35', 0),
(699, 3, NULL, 'balance', 'boite et blister déchirés en haut à droite', '2017-06-27 08:58:56', '2017-06-27 08:59:02', NULL, 0),
(700, 7, NULL, 'new', 'Coeur cassé', '2017-06-27 11:08:00', '2017-06-27 11:08:00', NULL, 0),
(701, 7, NULL, 'new', 'Ne fonctionne pas.', '2017-06-27 11:19:13', '2017-06-27 11:19:13', NULL, 0),
(702, 7, NULL, 'new', 'Pied gauche cassé', '2017-06-27 13:47:39', '2017-06-27 13:47:39', NULL, 0),
(703, 7, NULL, 'new', 'Ne focntionne pas, visiblement se charge, mais ne charge pas les portables.', '2017-06-27 13:53:01', '2017-06-27 13:53:01', NULL, 0),
(704, 7, NULL, 'mail_send', 'Problème de fermeture éclair, coince.', '2017-06-27 13:58:36', '2017-06-27 13:58:36', '2017-06-30 16:48:51', 0),
(705, 9, NULL, 'mail_send', 'Manquant lors de la réception du 27/06/17', '2017-06-28 14:10:01', '2017-06-28 14:10:01', '2017-06-29 09:28:22', 1),
(706, 3, 213338, 'new', 'traces blanches', '2017-06-29 09:51:21', '2017-06-29 09:51:21', NULL, 0),
(707, 3, 190405, 'new', 'batterie HS', '2017-06-29 10:33:44', '2017-06-29 10:33:44', NULL, 0),
(709, 10, NULL, 'mail_send', 'Produits abîmés au niveau des lettres', '2017-06-29 11:30:20', '2017-06-29 11:30:20', '2017-06-30 16:54:33', 1),
(710, 10, NULL, 'mail_send', 'Manquant à la réception', '2017-06-29 11:32:19', '2017-06-29 11:32:19', '2017-06-30 16:52:33', 1),
(711, 10, NULL, 'mail_send', 'Manquant à la réception de santex', '2017-06-29 11:34:06', '2017-06-29 11:34:06', '2017-06-30 11:41:24', 1),
(712, 10, NULL, 'mail_send', 'Carte en anglais', '2017-06-29 15:33:30', '2017-06-29 15:33:30', '2017-06-30 16:40:21', 1),
(713, 3, 215111, 'new', 'plante bleue ne marche pas', '2017-06-30 10:02:44', '2017-06-30 10:02:44', NULL, 0),
(714, 3, 213831, 'mail_send', 'ne marche pas, ne capte pratiquement rien', '2017-06-30 11:49:36', '2017-06-30 11:49:36', '2017-06-30 17:04:48', 0),
(715, 10, NULL, 'mail_send', 'Bouton cassé', '2017-06-30 12:06:02', '2017-06-30 12:06:32', '2017-06-30 16:54:37', 1),
(716, 3, 215028, 'mail_send', 'ne marche pas', '2017-06-30 12:33:57', '2017-06-30 12:33:57', '2017-06-30 17:03:28', 0),
(717, 7, NULL, 'new', 'Apparition d''une bulle au sommet', '2017-07-01 14:31:41', '2017-07-01 14:31:41', NULL, 0),
(718, 7, NULL, 'new', 'Ne fonctionne pas. Voyant reste allumée rouge, et pas de transfert de charge sur smartphone', '2017-07-01 16:46:57', '2017-07-01 16:46:57', NULL, 0),
(719, 3, 215461, 'new', 'manque mélange paradis', '2017-07-03 12:16:53', '2017-07-03 12:16:53', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `faulty_action`
--

CREATE TABLE IF NOT EXISTS `faulty_action` (
  `id` int(11) NOT NULL,
  `faulty_id` int(11) DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faulty_action`
--

INSERT INTO `faulty_action` (`id`, `faulty_id`, `message`, `created_at`) VALUES
(1, 308, 'dans sa boite e', '2017-01-31 09:30:11'),
(2, 308, 'photo jointe', '2017-01-31 09:30:11'),
(3, 458, 'néant', '2017-03-21 16:16:38'),
(4, 577, 'renvoi', '2017-05-12 14:14:59');

-- --------------------------------------------------------

--
-- Structure de la table `faulty_mail`
--

CREATE TABLE IF NOT EXISTS `faulty_mail` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faulty_mail`
--

INSERT INTO `faulty_mail` (`id`, `mail`) VALUES
(1, 'sylvain@cadeau-maestro.com');

-- --------------------------------------------------------

--
-- Structure de la table `faulty_product`
--

CREATE TABLE IF NOT EXISTS `faulty_product` (
  `id` int(11) NOT NULL,
  `faulty_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_prestashop_product` int(11) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `supplier_reference` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=707 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faulty_product`
--

INSERT INTO `faulty_product` (`id`, `faulty_id`, `supplier_id`, `name`, `id_prestashop_product`, `link`, `quantity`, `cost_price`, `location`, `supplier_reference`) VALUES
(6, 6, 5, 'Distributeur de Coton Lapin', 3821, 'http://www.cadeau-maestro.com/distributeur-coton-lapin-3821.html', '1', '4.570000', 'at_warehouse', 'PP3059'),
(7, 7, 6, 'Marque-Page Pieds', 2493, 'http://www.cadeau-maestro.com/marque-page-pieds-2493.html', '1', '2.500000', 'at_warehouse', 'ST33-BK'),
(9, 9, 8, 'Présentoir Rotatif Solar Spinner Deluxe', 3896, 'http://www.cadeau-maestro.com/presentoir-rotatif-solar-spinner-deluxe-3896.html', '1', '9.100000', 'at_warehouse', 'SS2'),
(10, 10, 9, 'Chargeur Snail iPhone et iPad', 6336, 'http://www.cadeau-maestro.com/chargeur-snail-iphone-ipad-6336.html', '1', '16.000000', 'at_warehouse', 'SNCL'),
(11, 11, 10, 'Porte-Clés Lampe Torche et Compartiment Secret StashLite', 1145, 'http://www.cadeau-maestro.com/porte-cles-lampe-torche-et-compartiment-secret-stashlite-1145.html', '1', '5.020000', 'at_warehouse', 'TU307'),
(12, 12, 6, 'Figurine Reine d''Angleterre', 2030, 'http://www.cadeau-maestro.com/figurine-reine-angleterre-2030.html', '1', '7.750000', 'at_warehouse', '1601-A'),
(13, 13, 117, 'Verres à Bière Gravity (x2)', 406, 'http://www.cadeau-maestro.com/verres-biere-gravity-406.html', '1', '8.040000', 'at_warehouse', '24057'),
(14, 14, 12, 'Tirelire Chien Gourmand', 5789, 'http://www.cadeau-maestro.com/tirelire-chien-gourmand-5789.html', '1', '8.450000', 'at_warehouse', 'HPB34000'),
(15, 15, 117, 'Cube Photos Pivotant', 479, 'http://www.cadeau-maestro.com/cube-photos-pivotant-479.html', '1', '5.470000', 'at_warehouse', '24824'),
(16, 16, 117, 'Cadre Photo "I Love You"', 4574, 'http://www.cadeau-maestro.com/cadre-photo-i-love-you-4574.html', '1', '3.450000', 'at_warehouse', '25790'),
(17, 17, 6, 'Lampes Vélo Têtes de Mort (x2)', 3236, 'http://www.cadeau-maestro.com/lampes-velo-tetes-mort-x2-3236.html', '1', '3.740000', 'at_warehouse', 'FL24-BK-EU'),
(18, 18, 13, 'Cacahuètes à Faire Pousser - J''amène l''Apéro', 6271, 'http://www.cadeau-maestro.com/cacahuetes-faire-pousser-jamene-lapero-6271.html', '1', '2.450000', 'at_warehouse', '26996'),
(19, 19, 14, 'Veilleuse Hérisson', 5256, 'http://www.cadeau-maestro.com/veilleuse-herisson-5256.html', '1', '2.230000', 'at_warehouse', '24904'),
(20, 20, 15, 'Panneau Lumineux Effaçable Bubble', 5670, 'http://www.cadeau-maestro.com/panneau-lumineux-effacable-bubble-5670.html', '1', '9.510000', 'at_warehouse', '10023'),
(22, 22, 17, 'Bougie Parfumée Bloody Mary', 5479, 'http://www.cadeau-maestro.com/bougie-parfumee-bloody-mary-5479.html', '1', '0.000000', 'at_warehouse', 'TJ0837'),
(23, 23, 17, 'Bougie Parfumée Whisky', 5482, 'http://www.cadeau-maestro.com/bougie-parfumee-whisky-5482.html', '1', '5.740000', 'at_warehouse', 'TJ0836'),
(24, 24, 117, 'Salière et Poivrière Ketchup & Mustard', 3752, 'http://www.cadeau-maestro.com/saliere-et-poivriere-ketchup-mustard-3752.html', '1', '2.500000', 'at_warehouse', '25603'),
(25, 25, 92, 'Projecteur Deluxe pour Smartphone', 3758, 'http://www.cadeau-maestro.com/projecteur-deluxe-pour-smartphone-3758.html', '1', '14.900000', 'at_warehouse', 'LUKPRO2'),
(26, 26, 18, 'Tire-Bouchon Escarpin', 5812, 'http://www.cadeau-maestro.com/tire-bouchon-escarpin-5812.html', '1', '0.000000', 'at_warehouse', '0'),
(27, 27, 19, 'Peropon Chien Trèfle', 5312, 'http://www.cadeau-maestro.com/peropon-chien-trefle-5312.html', '1', '6.610000', 'at_warehouse', '13467'),
(28, 28, 17, 'Tirelire Ananas', 5493, 'http://www.cadeau-maestro.com/tirelire-ananas-5493.html', '1', '8.730000', 'at_warehouse', 'TJ0044'),
(29, 32, 9, 'Chargeur Snail pour Androïd', 6334, 'http://www.cadeau-maestro.com/chargeur-snail-android-6334.html', '1', '14.000000', 'at_customer', 'SNCU'),
(30, 34, 92, 'Projecteur Deluxe pour Smartphone', 3758, 'http://www.cadeau-maestro.com/projecteur-deluxe-pour-smartphone-3758.html', '1', '14.900000', 'at_customer', 'LUKPRO2'),
(31, 39, 28, 'Panneau à Message LightBox A4 (100 caractères)', 5450, 'http://www.cadeau-maestro.com/panneau-message-lightbox-a4-100-caracteres-5450.html', '1', '14.660000', 'at_warehouse', 'LTBOX-B'),
(32, 41, 30, 'Coffret Massage au Chocolat', 794, 'http://www.cadeau-maestro.com/coffret-massage-au-chocolat-794.html', '1', '7.100000', 'at_warehouse', 'OT2034'),
(33, 45, 34, 'Cartes à Jouer Géantes (x54)', 1538, 'http://www.cadeau-maestro.com/cartes-jouer-geantes-x54-1538.html', '1', '4.890000', 'at_warehouse', '08969'),
(34, 46, 34, 'Lampe Fibre Optique', 1163, 'http://www.cadeau-maestro.com/lampe-fibre-optique-1163.html', '1', '4.290000', 'at_warehouse', '10114'),
(35, 47, 3, 'Bol Humeur du Matin Gourmand', 1036, 'http://www.cadeau-maestro.com/bol-humeur-matin-gourmand-1036.html', '1', '7.820000', 'at_customer', '010601'),
(36, 48, 3, 'Set de Mugs Heureux et Perplexe (x2)', 5775, 'http://www.cadeau-maestro.com/set-de-mugs-heureux-et-perplexe-x2-5775.html', '5', '12.230000', 'at_customer', '012801'),
(37, 49, 3, 'Bol Humeur du Matin Gourmand', 1036, 'http://www.cadeau-maestro.com/bol-humeur-matin-gourmand-1036.html', '2', '7.820000', 'at_customer', '010601'),
(38, 50, 3, 'Set de Mugs Grognon et Malin (x2)', 5252, 'http://www.cadeau-maestro.com/set-mugs-grognon-malin-x2-5252.html', '1', '12.260000', 'at_customer', '012701'),
(39, 51, 35, 'Fontaine à Eau Sphère', 2329, 'http://www.cadeau-maestro.com/fontaine-eau-sphere-2329.html', '1', '14.370000', 'at_customer', 'SCFP901'),
(40, 52, 36, 'Coffret Soirée Rhum Arrangé', 4814, 'http://www.cadeau-maestro.com/coffret-soiree-rhum-arrange-4814.html', '1', '14.950000', 'at_customer', '1APRHARVF'),
(41, 53, 12, 'Mug Ampoule Thermoréactif', 4143, 'http://www.cadeau-maestro.com/mug-ampoule-thermoreactif-4143.html', '1', '3.580000', 'at_customer', 'YB70'),
(42, 54, 37, 'Glaçons Binaires', 1878, 'http://www.cadeau-maestro.com/glacons-binaires-1878.html', '1', '3.300000', 'at_warehouse', 'IT02306'),
(43, 55, 7, 'Baby Foot de Table avec Pieds', 5188, 'http://www.cadeau-maestro.com/baby-foot-table-pieds-5188.html', '1', '14.990000', 'at_customer', '63/2998'),
(44, 56, 35, 'Fontaine Yin Yang', 5660, 'http://www.cadeau-maestro.com/fontaine-yin-yang-5660.html', '1', '12.180000', 'at_customer', 'SCFR159'),
(45, 57, 36, 'Coffret Soirée Rhum Arrangé', 4814, 'http://www.cadeau-maestro.com/coffret-soiree-rhum-arrange-4814.html', '1', '14.950000', 'at_customer', '1APRHARVF'),
(46, 58, 38, 'Défis Chocolatés', 352, 'http://www.cadeau-maestro.com/defis-chocolates-352.html', '1', '8.990000', 'at_customer', '50-120'),
(47, 59, 117, 'Set Caïpirinha', 4546, 'http://www.cadeau-maestro.com/set-caipirinha-4546.html', '1', '25.430000', 'at_customer', '24695'),
(48, 60, 117, 'Set Verres à Bière', 4888, 'http://www.cadeau-maestro.com/set-verres-biere-4888.html', '1', '17.480000', 'at_warehouse', '26062'),
(49, 61, 38, 'Défis Chocolatés', 352, 'http://www.cadeau-maestro.com/defis-chocolates-352.html', '2', '8.990000', 'at_customer', '50-120'),
(50, 62, 7, 'Petite Lampe Ananas', 6137, 'http://www.cadeau-maestro.com/petite-lampe-ananas-6137.html', '1', '2.760000', 'at_warehouse', '220353'),
(51, 63, 39, 'Carte Mille Petits Bisous Show Lapin', 3585, 'http://www.cadeau-maestro.com/carte-mille-petits-bisous-show-lapin-3585.html', '1', '1.650000', 'at_warehouse', '9921800007'),
(52, 64, 40, 'Réveil en Bois LED Deluxe', 3454, 'http://www.cadeau-maestro.com/reveil-en-bois-led-xl-3454.html', '1', '20.850000', 'at_warehouse', '11316'),
(53, 65, 6, 'Stylos Cannes pour la Marche (x2)', 4362, 'http://www.cadeau-maestro.com/stylos-cannes-marche-4362.html', '1', '2.990000', 'at_customer', '4340'),
(54, 66, 41, 'Parapluie « Même Pas Mouillé ! »', 4950, 'http://www.cadeau-maestro.com/parapluie-meme-pas-mouille-4950.html', '1', '0.000000', 'at_customer', '85594'),
(55, 67, 34, 'Boîte à Musique en Bois Princesse', 2237, 'http://www.cadeau-maestro.com/boite-musique-en-bois-princesse-2237.html', '1', '7.850000', 'at_customer', '19541'),
(56, 68, 42, 'Sculpture Verre Magique', 3149, 'http://www.cadeau-maestro.com/sculpture-verre-magique-3149.html', '1', '3.300000', 'at_customer', 'EG7860'),
(57, 69, 43, 'Mug Chat Thermoréactif', 5704, 'http://www.cadeau-maestro.com/mug-chat-thermoreactif-5704.html', '1', '5.200000', 'at_warehouse', 'NPW46021'),
(58, 70, 44, 'Mug Cake', 5909, 'http://www.cadeau-maestro.com/mug-cake-5909.html', '1', '4.000000', 'at_customer', '0112.6107.71.03.OCL.OSZ'),
(59, 71, 12, 'Panda Solaire', 4149, 'http://www.cadeau-maestro.com/panda-solaire-4149.html', '2', '3.370000', 'at_customer', 'EP08'),
(60, 72, 12, 'Mug Ampoule Thermoréactif', 4143, 'http://www.cadeau-maestro.com/mug-ampoule-thermoreactif-4143.html', '1', '3.580000', 'at_customer', 'YB70'),
(61, 73, 45, 'Boîte de Rochers', 5849, 'http://www.cadeau-maestro.com/boite-rochers-5849.html', '1', '6.980000', 'at_customer', '21255'),
(62, 74, 117, 'Cube Photo et Horloge Rotatif', 5375, 'http://www.cadeau-maestro.com/cube-photo-horloge-rotatif-5375.html', '1', '4.590000', 'at_customer', '26242'),
(63, 75, 2, 'Casque Audio Fourrure', 3150, 'http://www.cadeau-maestro.com/casque-audio-fourrure-3150.html', '1', '11.630000', 'at_customer', 'GBFH100'),
(64, 76, 7, 'Mug mélangeur automatique', 1268, 'http://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', '1', '4.200000', 'at_customer', '71/2897'),
(65, 77, 12, 'Tirelire Panda Gourmand', 5791, 'http://www.cadeau-maestro.com/tirelire-panda-gourmand-5791.html', '1', '8.030000', 'at_customer', 'HPB45000'),
(66, 78, 7, 'Poisson qui chante Billy Bass', 1537, 'http://www.cadeau-maestro.com/poisson-qui-chante-billy-bass-1537.html', '1', '15.270000', 'at_customer', '61/4090'),
(67, 79, 46, 'Mug Céramique Objectif d''Appareil Photo', 2412, 'http://www.cadeau-maestro.com/mug-ceramique-objectif-appareil-photo-2412.html', '1', '9.950000', 'at_warehouse', '0001202'),
(68, 80, 7, 'Stylo Fronde', 6179, 'http://www.cadeau-maestro.com/stylo-fronde-6179.html', '2', '1.280000', 'at_customer', '29/3034'),
(69, 81, 3, 'Bol Humeur du Matin Heureux', 4312, 'http://www.cadeau-maestro.com/bol-humeur-matin-heureux-4312.html', '1', '7.910000', 'at_customer', '010401'),
(70, 82, 17, 'Fontaine à Boisson Mason Jar 6,5 L', 5826, 'http://www.cadeau-maestro.com/fontaine-boisson-mason-jar-55l-5826.html', '1', '7.730000', 'at_customer', 'TJ0350'),
(71, 83, 38, 'Défis Chocolatés', 352, 'http://www.cadeau-maestro.com/defis-chocolates-352.html', '1', '8.990000', 'at_warehouse', '50-120'),
(72, 84, 6, 'Enceinte en Bois Scrat', 5605, 'http://www.cadeau-maestro.com/enceinte-bois-scrat-5605.html', '1', '0.000000', 'at_warehouse', 'US66L-EU'),
(73, 86, 28, 'Coussin Repose-Tête Massant', 260, 'http://www.cadeau-maestro.com/coussin-repose-tete-massant-260.html', '1', '7.580000', 'at_customer', 'I8015'),
(74, 87, 40, 'Horloge Semainier', 3455, 'http://www.cadeau-maestro.com/horloge-semainier-3455.html', '1', '14.670000', 'at_warehouse', '11597'),
(75, 88, 43, 'Scratch Box', 1285, 'http://www.cadeau-maestro.com/scratch-box-1285.html', '1', '6.300000', 'at_warehouse', 'W7909'),
(76, 89, 48, 'Kit Moléculaire Mojito R-Evolution', 3262, 'http://www.cadeau-maestro.com/kit-moleculaire-mojito-r-evolution-3262.html', '1', '12.050000', 'at_warehouse', '100644'),
(77, 91, 34, 'Pistolet à Elastique en Bois', 521, 'http://www.cadeau-maestro.com/pistolet-elastiques-en-bois-521.html', '1', '7.430000', 'at_customer', '03325'),
(78, 92, 7, 'Billard de Table', 2351, 'http://www.cadeau-maestro.com/billard-table-2351.html', '1', '28.040000', 'at_customer', '63/3013'),
(79, 93, 3, 'Set de Mugs Grognon et Malin (x2)', 5252, 'http://www.cadeau-maestro.com/set-mugs-grognon-malin-x2-5252.html', '1', '12.260000', 'at_customer', '012701'),
(80, 94, 7, 'Billard de Table', 2351, 'http://www.cadeau-maestro.com/billard-table-2351.html', '1', '28.040000', 'at_customer', '63/3013'),
(81, 95, 50, 'Coeurs Chauffants x 3', 1457, 'http://www.cadeau-maestro.com/coeurs-chauffants-x-3-1457.html', '1', '5.340000', 'at_customer', 'E22007'),
(82, 96, 51, 'Lampe "Balloon Dog"', 4600, 'http://www.cadeau-maestro.com/lampe-balloon-dog-4600.html', '1', '8.420000', 'at_warehouse', 'TS0262'),
(83, 97, 7, 'Shooters Morpion', 1368, 'http://www.cadeau-maestro.com/shooters-morpion-1368.html', '1', '1.870000', 'at_customer', '79/3985-67'),
(84, 98, 52, 'Casse-Noix Robot', 4361, 'http://www.cadeau-maestro.com/casse-noix-robot-4361.html', '2', '9.500000', 'at_customer', 'NUTROBOTS1/2'),
(85, 99, 5, 'Lampe Ballon', 5898, 'http://www.cadeau-maestro.com/lampe-ballon-5898.html', '1', '9.440000', 'at_customer', 'PP3051'),
(86, 100, 46, 'Montre à l''envers', 3324, 'http://www.cadeau-maestro.com/montre-envers-3324.html', '1', '12.050000', 'at_warehouse', '0000817'),
(87, 101, 117, 'Localisateur de Clés Sherlock', 614, 'http://www.cadeau-maestro.com/localisateur-cles-sherlock-614.html', '1', '8.250000', 'at_warehouse', '25885'),
(88, 102, 16, 'Montre Tactile Connectée Smartwatch', 5616, 'http://www.cadeau-maestro.com/montre-tactile-connectee-smartwatch-5616.html', '1', '18.890000', 'at_warehouse', '0'),
(89, 103, 53, 'Oreiller Musical MP3', 373, 'http://www.cadeau-maestro.com/oreiller-musical-mp3-373.html', '1', '9.510000', 'at_warehouse', 'WIKIIMUSPIL'),
(90, 104, 3, 'Tasse Expresso Humeur du Matin Heureux', 4326, 'http://www.cadeau-maestro.com/tasse-expresso-humeur-matin-heureux-4326.html', '1', '7.360000', 'at_warehouse', '011601'),
(91, 105, 54, 'Vaporisateur de Sac Pressit', 6368, 'http://www.cadeau-maestro.com/vaporisateur-sac-pressit-6368.html', '1', '5.500000', 'at_warehouse', '0'),
(92, 106, 55, 'Inocub', 1730, 'http://www.cadeau-maestro.com/inocub-1730.html', '1', '10.030000', 'at_warehouse', 'INOCUB'),
(93, 107, 44, 'Mug 6 Constellations Thermoréactif', 5912, 'http://www.cadeau-maestro.com/mug-6-constellations-thermoreactif-5912.html', '1', '5.000000', 'at_warehouse', '0112.6115.71.01.OCL.OSZ'),
(94, 108, 34, 'Mobile Cinétique Atome', 1699, 'http://www.cadeau-maestro.com/mobile-cinetique-atome-1699.html', '1', '8.190000', 'at_warehouse', '16719'),
(95, 109, 56, 'Verres à Vin à l''Envers (x2)', 5301, 'http://www.cadeau-maestro.com/verres-vin-envers-5301.html', '1', '6.450000', 'at_customer', '20058'),
(96, 110, 56, 'Demi-Verres à Vin (x2)', 5304, 'http://www.cadeau-maestro.com/demi-verres-vin-5304.html', '5', '6.450000', 'at_customer', '20049'),
(97, 111, 57, 'Les Loups-Garous de Thiercelieux', 143, 'http://www.cadeau-maestro.com/les-loups-garous-thiercelieux-143.html', '1', '4.950000', 'at_customer', 'KG02'),
(98, 112, 58, 'Pochette Instruments de Plaisir', 1910, 'http://www.cadeau-maestro.com/pochette-instruments-plaisir-1910.html', '14', '6.650000', 'at_customer', '0129'),
(99, 113, 59, 'Stylo Extra-Plat Bobino', 4273, 'http://www.cadeau-maestro.com/stylo-extra-plat-bobino-4273.html', '2', '2.000000', 'at_customer', 'SPB BK'),
(100, 114, 60, 'Maison Souvenirs de Naissance Globe Trotter', 5437, 'http://www.cadeau-maestro.com/maison-souvenirs-naissance-globe-trotter-5437.html', '1', '9.370000', 'at_customer', '116658'),
(101, 115, 60, 'Coffret Deux Mugs Ecureuil et Pingouin', 5431, 'http://www.cadeau-maestro.com/coffret-deux-mugs-ecureuil-pingouin-5431.html', '1', '5.090000', 'at_customer', '117874'),
(102, 116, 61, 'canne à selfie bluetooth deluxe', 4560, 'désactivé', '2', '13.17 €', 'at_warehouse', 'ecclectic'),
(103, 117, 62, 'Mug Répliques de Films', 2857, 'http://www.cadeau-maestro.com/mug-repliques-films-2857.html', '1', '7.810000', 'at_customer', 'UPG2764'),
(104, 118, 62, 'Mug Pink Freud', 2904, 'http://www.cadeau-maestro.com/mug-repliques-films-2904.html', '1', '7.530000', 'at_customer', 'UPG3346'),
(105, 119, 63, 'Localisateur de Clés Smart Finder', 900, 'http://www.cadeau-maestro.com/localisateur-cles-smart-finder-900.html', '2', '6.750000', 'at_customer', 'SFINDERSINGLE'),
(106, 120, 63, 'Kit 4 Localisateurs de Clés Smart Finder V3', 902, 'http://www.cadeau-maestro.com/kit-4-localisateurs-cles-smart-finder-v3-902.html', '1', '14.570000', 'at_customer', 'SFINDER4WAYBOX'),
(107, 121, 18, 'Pot de Fleurs Jimi Hendrix XL', 3696, 'http://www.cadeau-maestro.com/pot-fleurs-jimi-hendrix-3696.html', '1', '9.500000', 'at_customer', '210763'),
(108, 122, 18, 'Salière et Poivrière Graffiti', 2906, 'http://www.cadeau-maestro.com/saliere-et-poivriere-graffiti-2906.html', '1', '6.300000', 'at_customer', '210702'),
(109, 123, 18, 'Pot de Fleurs Audrey Hepburn XL', 3694, 'http://www.cadeau-maestro.com/pot-fleurs-audrey-hepburn-3694.html', '1', '9.500000', 'at_customer', '210762'),
(110, 124, 8, 'Maquette Métal 3D Scorpion', 4355, 'http://www.cadeau-maestro.com/maquette-metal-3d-scorpion-4355.html', '1', '3.690000', 'at_customer', 'MMS070'),
(111, 125, 8, 'Maquette Métal 3D Araignée', 4356, 'http://www.cadeau-maestro.com/maquette-metal-3d-araignee-4356.html', '1', '4.550000', 'at_customer', 'MMS072'),
(112, 126, 8, 'Tirelire Rétrécissante', 1159, 'http://www.cadeau-maestro.com/tirelire-retrecissante-1159.html', '2', '2.090000', 'at_customer', 'MICRO1'),
(113, 127, 42, 'Sculpture Verre Magique', 3149, 'http://www.cadeau-maestro.com/sculpture-verre-magique-3149.html', '3', '3.300000', 'at_customer', 'EG7860'),
(114, 128, 64, 'Trombones Lunettes Geek (x20)', 4762, 'http://www.cadeau-maestro.com/trombones-lunettes-geek-4762.html', '1', '0.000000', 'at_customer', '0'),
(115, 129, 64, 'Distributeur de Savon Baignoire', 2650, 'http://www.cadeau-maestro.com/distributeur-savon-baignoire-2650.html', '1', '4.140000', 'at_customer', '0'),
(117, 131, 66, 'Miroir de Poche Chat Silver Kitty', 4063, 'http://www.cadeau-maestro.com/miroir-poche-chat-silver-kitty-4063.html', '1', '4.000000', 'at_customer', 'SK6MC'),
(118, 132, 6, 'Boîte à Musique à Faire Soi-Même', 582, 'http://www.cadeau-maestro.com/boite-musique-faire-soi-meme-582.html', '1', '9.970000', 'at_customer', '1200'),
(119, 133, 6, 'Porte Tablette Flexible', 4105, 'http://www.cadeau-maestro.com/porte-tablette-flexible-4105.html', '1', '6.870000', 'at_customer', 'US85'),
(120, 134, 6, 'Figurine Einstein Solaire', 3468, 'http://www.cadeau-maestro.com/figurine-einstein-solaire-3468.html', '1', '9.000000', 'at_customer', '1609'),
(121, 135, 6, 'Figurine Reine d''Angleterre', 2030, 'http://www.cadeau-maestro.com/figurine-reine-angleterre-2030.html', '2', '7.750000', 'at_customer', '1601-A'),
(122, 136, 67, 'Choco''Pizza La Bretonne Caramel et Biscuits', 3476, 'http://www.cadeau-maestro.com/choco-pizza-bretonne-caramel-et-biscuits-3476.html', '1', '9.990000', 'at_customer', '3581003'),
(123, 137, 67, 'Coffret Kamasutra Trois Chocolats', 3490, 'http://www.cadeau-maestro.com/coffret-kamasutra-trois-chocolats-3490.html', '1', '7.220000', 'at_customer', '3910066'),
(124, 138, 67, 'Cœur à Casser Chocolat Noir', 3479, 'http://www.cadeau-maestro.com/coeur-casser-chocolat-noir-3479.html', '1', '9.990000', 'at_customer', '3500013'),
(125, 139, 68, 'Kit pour Selfies', 3407, 'http://www.cadeau-maestro.com/kit-pour-selfies-3407.html', '2', '15.500000', 'at_warehouse', 'MW-301/N'),
(126, 140, 7, 'Coussin Massant Nuque', 3274, 'http://www.cadeau-maestro.com/coussin-massant-nuque-3274.html', '1', '5.530000', 'at_customer', '61/1962'),
(127, 141, 34, 'Modulateur de voix', 1777, 'http://www.cadeau-maestro.com/modulateur-voix-1777.html', '1', '7.850000', 'at_customer', '04177'),
(128, 142, 69, 'Lampes Roues de Vélo (x2)', 1322, 'http://www.cadeau-maestro.com/lampes-roues-velo-1322.html', '1', '6.060000', 'at_customer', 'pas de ref'),
(129, 143, 56, 'Lampe Illusion Gyro 3D', 5313, 'http://www.cadeau-maestro.com/lampe-illusion-gyro-3d-5313.html', '1', '7.290000', 'at_customer', '03788.H'),
(130, 144, 70, 'Livre de Flacons Souvenirs', 5657, 'http://www.cadeau-maestro.com/livre-flacons-souvenirs-5657.html', '1', '14.550000', 'at_customer', '03624.SM'),
(131, 145, 71, 'Cabane de rangement pour bureau', 2930, 'http://www.cadeau-maestro.com/cabane-rangement-pour-bureau-2930.html', '1', '6.160000', 'at_customer', 'DSD01'),
(132, 146, 10, 'Porte-Clés Tiny Torch', 3077, 'http://www.cadeau-maestro.com/porte-cles-tiny-torch-3077.html', '1', '3.600000', 'at_customer', 'TU284'),
(133, 147, 72, 'Cadre Photo Main 2 en 1', 103, 'http://www.cadeau-maestro.com/cadre-photo-main-2-en-1-103.html', '1', '4.200000', 'at_customer', 'Dhink122'),
(134, 148, 72, 'Boîte à Mouchoirs Chocolat', 194, 'http://www.cadeau-maestro.com/boite-mouchoirs-chocolat-194.html', '1', '3.240000', 'at_customer', 'Dhink172'),
(135, 149, 73, 'Lunch Box Jeux Vidéo', 5365, 'http://www.cadeau-maestro.com/lunch-box-jeux-video-5365.html', '1', '6.650000', 'at_customer', 'M12019'),
(136, 150, 73, 'Mug à Emporter Panda', 5037, 'http://www.cadeau-maestro.com/mug-emporter-panda-5037.html', '1', '5.820000', 'at_customer', 'M12020A'),
(137, 151, 34, 'Lampe USB Ampoule', 2604, 'http://www.cadeau-maestro.com/lampe-usb-ampoule-2604.html', '1', '3.800000', 'at_customer', '21970'),
(138, 152, 43, 'Bonnet de Douche Licorne', 5331, 'http://www.cadeau-maestro.com/bonnet-douche-licorne-5331.html', '1', '2.600000', 'at_customer', 'NP36633'),
(139, 153, 43, 'Stylo Licorne', 5258, 'http://www.cadeau-maestro.com/stylo-licorne-5258.html', '1', '0.000000', 'at_customer', 'NP32345'),
(140, 154, 43, 'Câble de Charge Lumineux pour Smartphones', 4544, 'http://www.cadeau-maestro.com/cable-charge-lumineux-smartphones-4544.html', '1', '4.320000', 'at_customer', 'pas de ref'),
(141, 155, 2, 'Radio de Douche Robinet Rétro', 3163, 'http://www.cadeau-maestro.com/radio-douche-robinet-retro-3163.html', '1', '8.160000', 'at_warehouse', 'GUSR100'),
(142, 156, 53, 'Pendule de Newton', 338, 'http://www.cadeau-maestro.com/pendule-newton-338.html', '1', '4.510000', 'at_customer', 'EDG102'),
(143, 157, 53, 'Oreiller Musical MP3', 373, 'http://www.cadeau-maestro.com/oreiller-musical-mp3-373.html', '1', '9.510000', 'at_customer', 'WIKIIMUSPIL'),
(144, 158, 53, 'Mug Coeur Thermoréactif', 453, 'http://www.cadeau-maestro.com/mug-coeur-thermoreactif-453.html', '1', '6.200000', 'at_customer', 'GAD00236'),
(145, 159, 53, 'Mug Coeur Ardoise', 3557, 'http://www.cadeau-maestro.com/mug-coeur-ardoise-3557.html', '1', '4.180000', 'at_customer', 'LOVEMUG'),
(146, 160, 53, 'Gel Douche Zombie', 2121, 'http://www.cadeau-maestro.com/gel-douche-zombie-2121.html', '4', '2.730000', 'at_customer', 'ZOMBIESHOWERII'),
(147, 161, 53, 'Mystic Ball', 570, 'http://www.cadeau-maestro.com/mystic-ball-570.html', '2', '4.540000', 'at_customer', 'EDG104'),
(149, 163, 74, 'Rouleau de Coloriage Géant Paris', 3566, 'http://www.cadeau-maestro.com/rouleau-coloriage-geant-paris-3566.html', '1', '8.400000', 'at_customer', '6COLO02'),
(150, 164, 7, 'Coeur LED à Suspendre', 5656, 'http://www.cadeau-maestro.com/coeur-led-suspendre-5656.html', '10', '2.510000', 'at_customer', '260062'),
(151, 165, 7, 'Horloge Mathématiques', 1069, 'http://www.cadeau-maestro.com/horloge-mathematiques-equations-1069.html', '5', '4.380000', 'at_customer', '79/3029'),
(152, 166, 7, 'Coussin microbilles', 1362, 'http://www.cadeau-maestro.com/coussin-microbilles-1362.html', '1', '3.110000', 'at_customer', '-'),
(153, 167, 7, 'Tirelire à casser Cochon', 1222, 'http://www.cadeau-maestro.com/tirelire-casser-cochon-1222.html', '1', '3.720000', 'at_customer', '78/4011'),
(154, 168, 7, 'Pistolet Tapette à Mouches', 37, 'http://www.cadeau-maestro.com/pistolet-tapette-mouches-37.html', '1', '1.540000', 'at_customer', '61/2024'),
(155, 169, 7, 'Horloge à l''envers', 522, 'http://www.cadeau-maestro.com/horloge-envers-522.html', '1', '3.860000', 'at_customer', '79/3174'),
(156, 170, 7, 'Cadre Photo Coeur', 1565, 'http://www.cadeau-maestro.com/cadre-photo-coeur-1565.html', '6', '1.650000', 'at_customer', '94/2179'),
(157, 171, 7, 'Clochette "Ring for Sex"', 1481, 'http://www.cadeau-maestro.com/clochette-ring-for-sex-1481.html', '3', '1.250000', 'at_customer', '61/4182'),
(158, 172, 7, 'Tapis de Salle de Bain Football', 4152, 'http://www.cadeau-maestro.com/tapis-salle-bain-football-4152.html', '1', '3.610000', 'at_customer', '14/2124'),
(159, 173, 73, 'Stylo Flamant Rose', 5333, 'http://www.cadeau-maestro.com/stylo-flamant-rose-5333.html', '1', '1.720000', 'at_customer', 'M 16052'),
(160, 174, 7, 'Réveil Rétro Silicone', 3176, 'http://www.cadeau-maestro.com/reveil-retro-silicone-3176.html', '1', '3.490000', 'at_customer', '79/3213'),
(161, 175, 7, 'Porte-Photos Fil', 1376, 'http://www.cadeau-maestro.com/porte-photos-fil-1376.html', '1', '1.490000', 'at_customer', '76/3046'),
(162, 176, 7, 'Poisson qui chante Billy Bass', 1537, 'http://www.cadeau-maestro.com/poisson-qui-chante-billy-bass-1537.html', '1', '15.270000', 'at_customer', '61/4090'),
(163, 177, 7, 'Plante Solaire Flip Flap', 767, 'http://www.cadeau-maestro.com/plante-solaire-flip-flap-767.html', '2', '0.890000', 'at_customer', '57/9744'),
(164, 178, 7, 'Baby Foot de Table avec Pieds', 5188, 'http://www.cadeau-maestro.com/baby-foot-table-pieds-5188.html', '1', '14.990000', 'at_customer', '63/2998'),
(165, 179, 7, 'Stylo Fronde', 6179, 'http://www.cadeau-maestro.com/stylo-fronde-6179.html', '1', '1.280000', 'at_customer', '29/3034'),
(166, 180, 5, 'Mug Rudolph Thermoréactif', 4006, 'http://www.cadeau-maestro.com/mug-rudolph-thermoreactif-4006.html', '1', '3.820000', 'at_customer', 'PP2563'),
(167, 181, 13, 'Kit Terre Cuite Tournesol Nain', 6295, 'http://www.cadeau-maestro.com/kit-terre-cuite-tournesol-nain-6295.html', '1', '2.950000', 'at_customer', '32847'),
(168, 182, 75, 'Bouillotte Nounours Micro-Ondable', 418, 'http://www.cadeau-maestro.com/bouillotte-nounours-micro-ondable-418.html', '2', '8.330000', 'at_customer', '09-9108'),
(169, 183, 75, 'Couvercle Farfalle en Silicone', 3979, 'http://www.cadeau-maestro.com/couvercle-farfalle-en-silicone-3979.html', '1', '5.250000', 'at_customer', 'pas de ref'),
(170, 184, 76, 'Brosse Bouledogue pour Toilettes', 5698, 'http://www.cadeau-maestro.com/brosse-bouledogue-toilettes-5698.html', '1', '6.900000', 'at_customer', 'BM0055'),
(171, 185, 77, 'Clavier d''ordinateur en Chocolat', 2367, 'http://www.cadeau-maestro.com/clavier-ordinateur-en-chocolat-2367.html', '1', '5.500000', 'at_customer', 'CLAVIER'),
(172, 186, 77, 'Manette de Jeu en Chocolat', 2366, 'http://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', '1', '4.210000', 'at_warehouse', 'MANETTE'),
(173, 187, 10, 'Porte-Clés Lampe Laser', 1143, 'http://www.cadeau-maestro.com/porte-cles-lampe-laser-1143.html', '1', '3.330000', 'at_customer', 'TU211'),
(174, 188, 78, 'Fleur de Thé Abloom en Coffret (x6)', 401, 'http://www.cadeau-maestro.com/fleur-the-abloom-coffret-401.html', '1', '12.500000', 'at_customer', 'Set-Abloom'),
(175, 189, 79, 'Gourde Extincteur Glugg', 494, 'http://www.cadeau-maestro.com/gourde-extincteur-glugg-494.html', '1', '5.200000', 'at_customer', 'MIC001/002'),
(176, 190, 5, 'Lampe Ballon', 5898, 'http://www.cadeau-maestro.com/lampe-ballon-5898.html', '1', '9.440000', 'at_customer', 'PP3051'),
(177, 191, 76, 'Grand Plateau Ardoise', 5760, 'http://www.cadeau-maestro.com/grand-plateau-ardoise-5760.html', '1', '10.820000', 'at_customer', 'KI6445'),
(178, 192, 13, 'Kit Terre Cuite Basilic Parfumé', 6292, 'http://www.cadeau-maestro.com/kit-terre-cuite-basilic-parfume-6292.html', '1', '2.950000', 'at_warehouse', '32843'),
(179, 193, 13, 'Kit Terre Cuite Lavande', 6289, 'http://www.cadeau-maestro.com/kit-terre-cuite-lavande-6289.html', '1', '2.950000', 'at_warehouse', '32850'),
(180, 194, 13, 'Kit Terre Cuite Piment de Cayenne', 6296, 'http://www.cadeau-maestro.com/kit-terre-cuite-piment-cayenne-6296.html', '1', '2.950000', 'at_warehouse', '32848'),
(181, 195, 34, 'Mug Ardoise', 4059, 'http://www.cadeau-maestro.com/mug-ardoise-4059.html', '1', '2.430000', 'at_warehouse', '21190'),
(182, 196, 16, 'Montre Tactile Connectée Smartwatch', 5616, 'http://www.cadeau-maestro.com/montre-tactile-connectee-smartwatch-5616.html', '1', '18.890000', 'at_warehouse', '0'),
(183, 197, 6, 'Porte-Clés Appareil photo', 1171, 'http://www.cadeau-maestro.com/porte-cles-appareil-photo-1171.html', '1', '2.120000', 'at_warehouse', 'KRL15-CDU-EU'),
(184, 198, 117, 'Marque-Verre Ventouse Papillons (x10)', 699, 'http://www.cadeau-maestro.com/marque-verre-ventouse-papillons-699.html', '1', '4.040000', 'at_warehouse', '24604'),
(185, 199, 5, 'Jeu de Beer Pong', 2786, 'http://www.cadeau-maestro.com/jeu-beer-pong-2786.html', '1', '2.300000', 'at_warehouse', 'PP3169'),
(186, 200, 80, 'Carafe Enigme', 2464, 'http://www.cadeau-maestro.com/carafe-enigme-2464.html', '1', '13.600000', 'at_warehouse', 'WDA600'),
(187, 201, 80, 'Carafe Enigme', 2464, 'http://www.cadeau-maestro.com/carafe-enigme-2464.html', '1', '13.600000', 'at_warehouse', 'WDA600'),
(188, 202, 53, 'Pendule de Newton', 338, 'http://www.cadeau-maestro.com/pendule-newton-338.html', '1', '4.510000', 'at_customer', 'EDG102'),
(189, 203, 77, 'Smartphone Chocolat au lait couleur noire', 3484, 'http://www.cadeau-maestro.com/smartphone-chocolat-au-lait-3484.html', '2', '2.700000', 'at_warehouse', 'CHOCOP'),
(190, 204, 117, 'Mini-séchoir à ongles blanc et rose', 4263, 'http://www.cadeau-maestro.com/mini-sechoir-ongles-blanc-rose-4263.html', '1', '7.150000', 'at_customer', '25903'),
(191, 205, 16, 'Montre Tactile Connectée Smartwatch', 5616, 'http://www.cadeau-maestro.com/montre-tactile-connectee-smartwatch-5616.html', '1', '18.890000', 'at_warehouse', '0'),
(192, 206, 55, 'Lampe Lévitation', 1584, 'http://www.cadeau-maestro.com/lampe-levitation-1584.html', '1', '50.080000', 'at_warehouse', 'pas de ref'),
(193, 207, 68, 'Kit pour Selfies', 3407, 'http://www.cadeau-maestro.com/kit-pour-selfies-3407.html', '1', '15.500000', 'at_warehouse', 'MW-301/N'),
(194, 208, 19, 'Balles Anti-Stress Emoji (x3)', 5407, 'http://www.cadeau-maestro.com/balles-anti-stress-emoji-x3-5407.html', '1', '5.030000', 'at_customer', '13587'),
(195, 209, 43, 'Mug Irish Coffee', 4019, 'http://www.cadeau-maestro.com/mug-irish-coffee-4019.html', '1', '5.050000', 'at_customer', 'W16796'),
(196, 210, 6, 'Sablier Magnétique', 4359, 'http://www.cadeau-maestro.com/sablier-magnetique-4359.html', '1', '8.000000', 'at_warehouse', 'ST05'),
(197, 211, 6, 'Mug Printemps Thermoréactif', 2739, 'http://www.cadeau-maestro.com/mug-printemps-thermoreactif-2739.html', '1', '4.980000', 'at_customer', 'CU92'),
(198, 212, 7, 'Baby Foot de Table avec Pieds', 5188, 'http://www.cadeau-maestro.com/baby-foot-table-pieds-5188.html', '1', '14.990000', 'at_customer', '63/2998'),
(199, 213, 81, 'Coffret théière Pétales', 1772, 'http://www.cadeau-maestro.com/coffret-theiere-petales-1772.html', '1', '26.880000', 'at_warehouse', '635'),
(200, 214, 7, 'Cadre Photos LOVE', 1074, 'http://www.cadeau-maestro.com/cadre-photos-love-1074.html', '1', '3.990000', 'at_customer', '94/2245'),
(201, 215, 46, 'Mini Manette 200 Jeux Vidéo', 5326, 'http://www.cadeau-maestro.com/mini-manette-200-jeux-video-5326.html', '1', '0.000000', 'at_warehouse', '0001284'),
(202, 216, 15, 'Panneau à Messages LightBox A4', 5665, 'http://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', '1', '7.790000', 'at_customer', '10022'),
(203, 217, 82, 'Mini Enceinte Radio KD', 3719, 'http://www.cadeau-maestro.com/mini-enceinte-radio-kd-3719.html', '1', '5.240000', 'at_warehouse', '3790'),
(204, 218, 55, 'Porte-bouteille Lévitation Flying Bar', 5593, 'http://www.cadeau-maestro.com/porte-bouteille-levitation-flying-bar-5593.html', '1', '55.320000', 'at_warehouse', 'INOPBF01'),
(205, 219, 55, 'Lampe Lévitation', 1584, 'http://www.cadeau-maestro.com/lampe-levitation-1584.html', '1', '50.080000', 'at_warehouse', 'INOALTR'),
(206, 220, 55, 'Lampe Lévitation', 1584, 'http://www.cadeau-maestro.com/lampe-levitation-1584.html', '1', '50.080000', 'at_warehouse', 'INOALTB'),
(207, 221, 6, 'Porte Tablette Flexible', 4105, 'http://www.cadeau-maestro.com/porte-tablette-flexible-4105.html', '1', '6.870000', 'at_warehouse', 'US85'),
(208, 222, 6, 'Sablier Magnétique', 4359, 'http://www.cadeau-maestro.com/sablier-magnetique-4359.html', '1', '8.000000', 'at_warehouse', 'ST05'),
(209, 223, 83, 'Set 40 Arômes du Vin Pulltex', 5255, 'http://www.cadeau-maestro.com/set-40-aromes-vin-pulltex-5255.html', '1', '80.500000', 'at_warehouse', '1197'),
(210, 224, 117, 'Set Manucure Petit Livre', 2149, 'http://www.cadeau-maestro.com/set-manucure-petit-livre-2149.html', '1', '4.410000', 'at_warehouse', '25371'),
(211, 225, 13, 'Chou à Faire Pousser - Te Prends Pas le Chou', 6281, 'http://www.cadeau-maestro.com/chou-faire-pousser-prend-pas-le-chou-6281.html', '1', '2.450000', 'at_warehouse', '32623'),
(213, 227, 61, 'Radio de Douche  « Alors on chante ? »', 4710, 'inactif', '1', '8.98', 'at_customer', 'incidence'),
(215, 229, 84, 'Snug Rug Deluxe', 176, 'http://www.cadeau-maestro.com/snug-rug-deluxe-176.html', '1', '12.000000', 'at_warehouse', 'GH-SRA3'),
(216, 230, 6, 'Câble Chargement iPhone Ancre Marine', 5741, 'http://www.cadeau-maestro.com/cable-iphone-ancre-marine-5741.html', '1', '3.990000', 'at_customer', 'US127-EU'),
(217, 231, 92, 'Carte du Monde à Gratter XXL', 909, 'http://www.cadeau-maestro.com/carte-du-monde-gratter-xxl-909.html', '1', '10.540000', 'at_warehouse', 'LUSCR'),
(218, 232, 92, 'Carte du Monde à Gratter Luxe Edition Voyage', 3504, 'http://www.cadeau-maestro.com/carte-du-monde-gratter-luxe-edition-voyage-3504.html', '1', '10.720000', 'at_warehouse', 'LUKSDT'),
(219, 233, 12, 'Repose Poignet Chat', 1486, 'http://www.cadeau-maestro.com/repose-poignet-chat-1486.html', '1', '2.790000', 'at_warehouse', 'WS08'),
(220, 234, 34, 'Mobile Planète', 1905, 'http://www.cadeau-maestro.com/mobile-planete-1905.html', '1', '7.450000', 'at_warehouse', '16720'),
(221, 235, 70, 'Coffret Aérateur de vin Deluxe', 1224, 'http://www.cadeau-maestro.com/coffret-aerateur-vin-deluxe-1224.html', '2', '14.510000', 'at_warehouse', '02474'),
(222, 236, 85, 'Plaque de Porte Chambre de Bébé', 3682, 'http://www.cadeau-maestro.com/plaque-porte-chambre-bebe-3682.html', '2', '2.900000', 'at_warehouse', 'PP002'),
(223, 237, 7, 'Coeur LED à Suspendre', 5656, 'http://www.cadeau-maestro.com/coeur-led-suspendre-5656.html', '2', '2.510000', 'at_warehouse', '260062'),
(224, 238, 86, 'Gants de Cuisine Ice Cream', 5055, 'http://www.cadeau-maestro.com/gant-cuisine-ice-cream-5055.html', '8', '5.770000', 'at_warehouse', 'CM150003'),
(225, 239, 7, 'Préservatif Bad Bull', 6154, 'http://www.cadeau-maestro.com/preservatif-bad-bull-6154.html', '2', '0.830000', 'at_warehouse', '61/4287'),
(226, 240, 53, 'Pendule de Newton', 338, 'http://www.cadeau-maestro.com/pendule-newton-338.html', '1', '4.510000', 'at_warehouse', 'EDG102'),
(227, 241, 84, 'Chocolate Body Paint', 1154, 'http://www.cadeau-maestro.com/chocolate-body-paint-1154.html', '1', '3.190000', 'at_warehouse', 'CN90'),
(228, 242, 5, 'Distributeur de Coton Lapin', 3821, 'http://www.cadeau-maestro.com/distributeur-coton-lapin-3821.html', '1', '4.570000', 'at_warehouse', 'PP3059'),
(229, 243, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'http://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_warehouse', '78/7851'),
(231, 245, 117, 'Stylo Clou', 4550, 'http://www.cadeau-maestro.com/stylo-clou-4550.html', '1', '1.990000', 'at_customer', '25605'),
(232, 246, 117, 'Réveil Block', 4591, 'http://www.cadeau-maestro.com/reveil-block-4591.html', '1', '5.270000', 'at_customer', '25889'),
(233, 247, 64, 'Berlin Boombox Haut-Parleurs pour Smartphone', 4255, 'http://www.cadeau-maestro.com/berlin-boombox-haut-parleurs-smartphone-4255.html', '1', '33.330000', 'at_warehouse', 'pas de ref'),
(234, 248, 117, 'Localisateur de Clés Sherlock', 614, 'http://www.cadeau-maestro.com/localisateur-cles-sherlock-614.html', '1', '8.250000', 'at_customer', '25885'),
(235, 249, 55, 'Inocub', 1730, 'http://www.cadeau-maestro.com/inocub-1730.html', '1', '10.030000', 'at_warehouse', 'INOCUB'),
(236, 250, 64, 'Localisateur de Clés Réversible Sherkey', 4237, 'http://www.cadeau-maestro.com/localisateur-cles-reversible-sherkey-4237.html', '1', '14.000000', 'at_warehouse', '0'),
(237, 251, 117, 'Décanteur à Vin Verre à Pied', 5763, 'http://www.cadeau-maestro.com/decanteur-vin-verre-pied-5763.html', '1', '7.340000', 'at_customer', '26063'),
(238, 252, 6, 'Réveil de Voyage Vintage', 5744, 'http://www.cadeau-maestro.com/reveil-voyage-vintage-5744.html', '1', '3.990000', 'at_customer', 'AC10-A-EU'),
(239, 253, 76, 'Grand Plateau Ardoise', 5760, 'http://www.cadeau-maestro.com/grand-plateau-ardoise-5760.html', '1', '7.500000', 'at_warehouse', 'KI6445'),
(240, 254, 87, 'Maquette Métal 3D Tyrannosaurus Rex', 6341, 'http://www.cadeau-maestro.com/maquette-metal-3d-tyrannosaurus-rex-6341.html', '12', '7.280000', 'at_warehouse', '5061099'),
(241, 255, 8, 'Maquette Métal 3D Avion Spirit of Saint Louis', 2394, 'http://www.cadeau-maestro.com/maquette-metal-3d-avion-spirit-of-saint-louis-2394.html', '1', '3.690000', 'at_warehouse', 'MMS043'),
(242, 256, 15, 'Veilleuse Lune Multicolore', 5267, 'http://www.cadeau-maestro.com/veilleuse-lune-multicolore-5267.html', '1', '6.180000', 'at_customer', '9068'),
(243, 257, 7, 'Billard de Table', 2351, 'http://www.cadeau-maestro.com/billard-table-2351.html', '1', '28.040000', 'at_customer', '63/3013'),
(244, 258, 88, 'Enceinte Champignon', 5367, 'http://www.cadeau-maestro.com/enceinte-champignon-5367.html', '1', '11.000000', 'at_warehouse', '0'),
(245, 259, 41, 'Petit Radio Réveil Vintage', 4481, 'http://www.cadeau-maestro.com/petit-radio-reveil-vintage-4481.html', '1', '17.130000', 'at_customer', '31861'),
(246, 260, 92, 'Projecteur pour Smartphone Deluxe Cuivre', 5463, 'http://www.cadeau-maestro.com/projecteur-smartphone-deluxe-cuivre-5463.html', '1', '0.000000', 'at_warehouse', 'LUKPRO2C'),
(247, 261, 12, 'Repose Poignet Chat', 1486, 'http://www.cadeau-maestro.com/repose-poignet-chat-1486.html', '1', '2.790000', 'at_warehouse', 'WS08'),
(248, 262, 12, 'Porte Téléphone Chat', 1487, 'http://www.cadeau-maestro.com/porte-telephone-chat-1487.html', '1', '3.160000', 'at_warehouse', 'EE26'),
(249, 263, 68, 'Perche à Selfie Pocket', 5106, 'http://www.cadeau-maestro.com/perche-selfie-pocket-5106.html', '1', '4.820000', 'at_warehouse', 'MW90/A/C'),
(250, 264, 50, 'Dés Coquins', 1460, 'http://www.cadeau-maestro.com/des-coquins-1460.html', '20', '5.380000', 'at_warehouse', 'E23161'),
(252, 266, 8, 'Maquette Métal 3D Avion Mustang P-51', 2076, 'http://www.cadeau-maestro.com/maquette-metal-3d-avion-mustang-p-51-2076.html', '1', '2.830000', 'at_warehouse', 'MMS003'),
(253, 267, 55, 'Station Météo Projection de L''heure', 3061, 'http://www.cadeau-maestro.com/station-meteo-projection-heure-3061.html', '1', '25.120000', 'at_warehouse', 'INOLT02'),
(254, 268, 12, 'Batterie rechargeable Chocolat', 3496, 'http://www.cadeau-maestro.com/batterie-rechargeable-chocolat-3496.html', '1', '9.720000', 'at_warehouse', 'ZA111'),
(255, 269, 72, 'Bouillotte Chouette Micro-Ondable', 2747, 'http://www.cadeau-maestro.com/bouillotte-chouette-micro-ondable-2747.html', '1', '7.950000', 'at_customer', 'BIT1218'),
(256, 270, 69, 'Lampe à Lave Astro Baby', 5136, 'http://www.cadeau-maestro.com/lampe-lave-astro-baby-5136.html', '1', '33.460000', 'at_customer', 'TEL1202'),
(257, 271, 3, 'Set de Mugs Grognon et Malin (x2)', 5252, 'http://www.cadeau-maestro.com/set-mugs-grognon-malin-x2-5252.html', '1', '12.260000', 'at_customer', '012701'),
(258, 272, 64, 'Montana Boombox Haut-Parleurs à Customiser', 4262, 'http://www.cadeau-maestro.com/montana-boombox-haut-parleurs-customiser-4262.html', '1', '39.000000', 'at_warehouse', 'BBBXMTN'),
(259, 273, 117, 'Porte-Bagues Licorne', 4818, 'http://www.cadeau-maestro.com/porte-bagues-licorne-4818.html', '8', '2.380000', 'at_warehouse', '26102'),
(260, 274, 117, 'Plateau Télé sur Coussin', 627, 'http://www.cadeau-maestro.com/plateau-tele-sur-coussin-627.html', '1', '3.450000', 'at_warehouse', '25169'),
(261, 275, 12, 'Repose Poignet Chat', 1486, 'http://www.cadeau-maestro.com/repose-poignet-chat-1486.html', '1', '2.790000', 'at_warehouse', 'WS08'),
(262, 276, 6, 'Mini Tableau Magnétique Effaçable', 3083, 'http://www.cadeau-maestro.com/mini-tableau-magnetique-effacable-3083.html', '1', '2.990000', 'at_customer', 'MH09-A'),
(263, 277, 15, 'Veilleuse Lune Multicolore', 5267, 'http://www.cadeau-maestro.com/veilleuse-lune-multicolore-5267.html', '1', '6.180000', 'at_customer', '9068'),
(264, 278, 16, 'Écouteurs Bluetooth', 6068, 'http://www.cadeau-maestro.com/ecouteurs-bluetooth-6068.html', '1', '10.920000', 'at_warehouse', 'CA672'),
(265, 279, 34, 'Pistolet à Elastique en Bois', 521, 'http://www.cadeau-maestro.com/pistolet-elastiques-en-bois-521.html', '1', '7.430000', 'at_customer', '03325'),
(266, 280, 64, 'Localisateur de Clés Réversible Sherkey', 4237, 'http://www.cadeau-maestro.com/localisateur-cles-reversible-sherkey-4237.html', '1', '14.000000', 'at_warehouse', '0'),
(267, 281, 61, 'Batterie externe Pink milk', 6398, 'Inconnu', '2', '4', 'at_warehouse', 'P04'),
(268, 282, 61, 'Batterie externe dentifrice', 0, 'Inconnu', '7', '4', 'at_warehouse', 'Inconnu'),
(269, 283, 61, 'Clé usb magnum 8go', 0, 'Inconnu', '10', '4', 'at_warehouse', 'N01'),
(270, 284, 61, 'Clé usb lingot 8go', 0, 'Inconnu', '1', '4', 'at_warehouse', 'N07'),
(271, 285, 61, 'Clé usb banane 8go', 0, 'Inconnu', '1', '4', 'at_warehouse', 'Inconnu'),
(272, 286, 89, 'Batterie Rechargeable Pile', 5451, 'http://www.cadeau-maestro.com/batterie-rechargeable-pile-5451.html', '1', '9.000000', 'at_warehouse', 'P05'),
(273, 287, 61, 'Clé usb molette 8go', 0, 'Inconnu', '1', '4', 'at_warehouse', 'N02'),
(274, 288, 61, 'Clé usb magnum 8go', 0, 'Inconnu', '1', '4', 'at_warehouse', 'N01'),
(275, 289, 61, 'Clé usb lingot 8go', 0, 'Inconnu', '1', '4', 'at_warehouse', 'N07'),
(276, 290, 30, 'Coffret Spa Pierres Chaudes', 312, 'http://www.cadeau-maestro.com/coffret-spa-pierres-chaudes-312.html', '11', '8.440000', 'at_warehouse', 'OT2011'),
(277, 291, 61, 'Horloge Station Météo Crystal', 4460, 'gfgr', '1', '40.08 €', 'at_warehouse', 'INOBA900'),
(278, 292, 55, 'Inocub', 1730, 'http://www.cadeau-maestro.com/inocub-1730.html', '1', '10.030000', 'at_warehouse', 'INOCUB'),
(279, 293, 72, 'Bouillotte Singe Micro-Ondable', 2746, 'http://www.cadeau-maestro.com/bouillotte-singe-micro-ondable-2746.html', '1', '6.900000', 'at_warehouse', 'BIT1022'),
(280, 294, 90, 'Blender Gourde à Smoothie', 5280, 'http://www.cadeau-maestro.com/blender-gourde-smoothie-5280.html', '1', '21.260000', 'at_customer', 'P261.632'),
(281, 295, 81, 'Verres à bière tranchés (x2)', 1092, 'http://www.cadeau-maestro.com/verres-biere-tranches-x2-1092.html', '1', '9.140000', 'at_warehouse', '630'),
(282, 296, 7, 'Jeu d''échecs Viking Kubb', 1779, 'http://www.cadeau-maestro.com/jeu-echecs-viking-kubb-1779.html', '1', '9.790000', 'at_warehouse', '76/6149'),
(283, 297, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'http://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_warehouse', '78/7851'),
(284, 298, 34, 'Mini Sculpture Clous 3D', 4739, 'http://www.cadeau-maestro.com/mini-sculpture-clous-3d-4739.html', '1', '2.780000', 'at_customer', '19460'),
(285, 299, 44, 'Mug 6 Constellations Thermoréactif', 5912, 'http://www.cadeau-maestro.com/mug-6-constellations-thermoreactif-5912.html', '1', '5.000000', 'at_customer', '0112.6115.71.01.OCL.OSZ'),
(286, 300, 91, 'Trèfle à 4 feuilles', 313, 'http://www.cadeau-maestro.com/trefle-4-feuilles-313.html', '1', '1.030000', 'at_warehouse', '4-leaf clover'),
(287, 301, 90, 'Carafe Lumineuse à LED', 3946, 'http://www.cadeau-maestro.com/carafe-lumineuse-led-3946.html', '1', '21.070000', 'at_customer', 'P264.011'),
(288, 302, 55, 'Station Météo Projection de L''heure', 3061, 'http://www.cadeau-maestro.com/station-meteo-projection-heure-3061.html', '1', '25.120000', 'at_warehouse', 'INOLT02'),
(289, 303, 55, 'Lampe Lévitation Pureline', 3216, 'http://www.cadeau-maestro.com/lampe-levitation-pureline-3216.html', '1', '55.100000', 'at_customer', 'pureline'),
(290, 304, 55, 'Porte-bouteille Lévitation Flying Bar', 5593, 'http://www.cadeau-maestro.com/porte-bouteille-levitation-flying-bar-5593.html', '1', '55.320000', 'at_warehouse', 'INOPBF01'),
(291, 305, 92, 'Minuteur en Bois à Monter', 5885, 'http://www.cadeau-maestro.com/minuteur-bois-monter-5885.html', '1', '19.660000', 'at_warehouse', 'UE04477'),
(292, 306, 92, 'Rose en Argent', 5218, 'http://www.cadeau-maestro.com/rose-argent-5218.html', '1', '33.950000', 'at_warehouse', '03261.SL'),
(293, 307, 93, 'Boîte 9 Épices Découverte', 6324, 'http://www.cadeau-maestro.com/boite-9-epices-decouverte-6324.html', '1', '0.000000', 'at_warehouse', '0'),
(294, 308, 117, 'Boite à Bijoux Coeur', 2393, 'http://www.cadeau-maestro.com/boite-bijoux-coeur-2393.html', '1', '9.470000', 'at_warehouse', '25555'),
(295, 309, 76, 'Grand Plateau Ardoise', 5760, 'http://www.cadeau-maestro.com/grand-plateau-ardoise-5760.html', '1', '7.500000', 'at_customer', 'KI6445'),
(296, 310, 5, 'Lampe Ballon', 5898, 'http://www.cadeau-maestro.com/lampe-ballon-5898.html', '1', '9.440000', 'at_customer', 'PP3051'),
(297, 311, 79, 'Magnets Scrabble (x112)', 2730, 'http://www.cadeau-maestro.com/magnets-scrabble-2730.html', '1', '3.780000', 'at_warehouse', 'SCR072'),
(298, 312, 34, 'Pistolet à Elastique en Bois', 521, 'http://www.cadeau-maestro.com/pistolet-elastiques-en-bois-521.html', '1', '7.430000', 'at_warehouse', '03325'),
(299, 313, 117, 'Tabouret Livres', 775, 'http://www.cadeau-maestro.com/tabouret-livres-775.html', '1', '41.060000', 'at_customer', '24454'),
(300, 314, 7, 'Réveil Rétro Silicone', 3176, 'http://www.cadeau-maestro.com/reveil-retro-silicone-3176.html', '1', '3.490000', 'at_customer', '79/3213'),
(301, 315, 9, 'Chargeur Snail iPhone et iPad', 6336, 'http://www.cadeau-maestro.com/chargeur-snail-iphone-ipad-6336.html', '1', '16.000000', 'at_customer', 'SNCL'),
(302, 316, 9, 'Chargeur Snail pour Androïd', 6334, 'http://www.cadeau-maestro.com/chargeur-snail-android-6334.html', '1', '14.000000', 'at_customer', 'SNCU'),
(303, 317, 94, 'Boîte 36 Epices Collection Le Monde en Tube', 1834, 'http://www.cadeau-maestro.com/boite-epices-collection-monde-en-tube-1834.html', '1', '24.760000', 'at_warehouse', 'CL04'),
(304, 318, 55, 'Inocub', 1730, 'http://www.cadeau-maestro.com/inocub-1730.html', '1', '10.030000', 'at_warehouse', 'INOCUB'),
(305, 319, 64, 'Distributeur de Savon Baignoire', 2650, 'http://www.cadeau-maestro.com/distributeur-savon-baignoire-2650.html', '1', '4.370000', 'at_customer', '0'),
(306, 320, 117, 'Huilier Vinaigrier Borosilicate', 319, 'http://www.cadeau-maestro.com/huilier-vinaigrier-borosilicate-319.html', '1', '4.940000', 'at_customer', '23669'),
(307, 321, 7, 'Mug Géant I Am The Boss', 5223, 'http://www.cadeau-maestro.com/mug-geant-i-am-the-boss-5223.html', '1', '3.140000', 'at_warehouse', '78/8179'),
(308, 322, 50, 'Lit de Roses', 19, 'http://www.cadeau-maestro.com/lit-roses-19.html', '24', '3.430000', 'at_warehouse', 'E22000'),
(309, 323, 83, 'Set 40 Arômes du Vin Pulltex', 5255, 'http://www.cadeau-maestro.com/set-40-aromes-vin-pulltex-5255.html', '24', '80.500000', 'at_warehouse', '1197'),
(310, 324, 95, 'Diffuseur de Parfum George Soft', 3725, 'http://www.cadeau-maestro.com/diffuseur-parfum-george-soft-3725.html', '1', '38.700000', 'at_customer', 'george'),
(311, 325, 15, 'Veilleuse Licorne', 5238, 'http://www.cadeau-maestro.com/veilleuse-licorne-5238.html', '1', '3.610000', 'at_customer', '10003'),
(312, 326, 28, 'Set Mugs Amoureux Attrape Baisers', 5803, 'http://www.cadeau-maestro.com/set-mugs-amoureux-attrape-baisers-5803.html', '1', '0.000000', 'at_customer', 'X10711'),
(313, 327, 89, 'Panneau à Messages LightBox A4', 5665, 'http://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', '1', '7.930000', 'at_customer', '0'),
(314, 328, 67, 'Cœur à Casser Chocolat Noir', 3479, 'http://www.cadeau-maestro.com/coeur-casser-chocolat-noir-3479.html', '1', '9.990000', 'at_warehouse', '3500013'),
(316, 330, 39, 'Carte Mille Petits Bisous Show Lapin', 3585, 'http://www.cadeau-maestro.com/carte-mille-petits-bisous-show-lapin-3585.html', '1', '1.650000', 'at_warehouse', '9921800007'),
(318, 332, 43, 'Câble de Charge Lumineux pour Smartphones', 4544, 'http://www.cadeau-maestro.com/cable-charge-lumineux-smartphones-4544.html', '1', '4.320000', 'at_customer', 'câble lumineux'),
(319, 333, 41, 'Petit Radio Réveil Vintage', 4481, 'http://www.cadeau-maestro.com/petit-radio-reveil-vintage-4481.html', '1', '17.130000', 'at_warehouse', '31861'),
(320, 334, 84, 'Chocolate Body Paint', 1154, 'http://www.cadeau-maestro.com/chocolate-body-paint-1154.html', '4', '3.190000', 'at_warehouse', 'CN90'),
(321, 335, 65, 'Pot à Cotons-Tiges Ours Polaire', 5857, 'http://www.cadeau-maestro.com/pot-cotons-tiges-ours-polaire-5857.html', '1', '4.000000', 'at_warehouse', 'QL10222WH'),
(322, 336, 84, 'Chocolate Body Paint', 1154, 'http://www.cadeau-maestro.com/chocolate-body-paint-1154.html', '41', '3.190000', 'at_warehouse', 'CN90'),
(323, 337, 34, 'Jeu d''Apéritif Tour en Bois Shooters', 4065, 'http://www.cadeau-maestro.com/jeu-tour-shooter-4065.html', '2', '5.110000', 'at_warehouse', '20624'),
(324, 338, 34, 'Stylo Lévitation', 5325, 'http://www.cadeau-maestro.com/stylo-levitation-5325.html', '1', '4.110000', 'at_warehouse', '19531'),
(325, 339, 34, 'Bonnet de Noel Chantant et Dansant', 3494, 'http://www.cadeau-maestro.com/bonnet-noel-chantant-et-dansant-3494.html', '1', '5.000000', 'at_warehouse', '18718'),
(326, 340, 38, 'Défis Chocolatés', 352, 'http://www.cadeau-maestro.com/defis-chocolates-352.html', '3', '9.540000', 'at_warehouse', '50-120'),
(327, 341, 14, 'Veilleuse Ecureuil', 5250, 'http://www.cadeau-maestro.com/veilleuse-ecureuil-5250.html', '1', '2.230000', 'at_warehouse', '24903'),
(328, 342, 14, 'Flasque Tableau Périodique des Eléments', 5259, 'http://www.cadeau-maestro.com/flasque-tableau-periodique-elements-5259.html', '1', '5.060000', 'at_warehouse', '26436'),
(329, 343, 61, 'Veilleuse lapin carotte', 5234, 'Inconnu', '1', '2.23', 'at_warehouse', '24902'),
(330, 344, 16, 'Masque de Réalité Virtuelle Confort', 6121, 'http://www.cadeau-maestro.com/masque-de-realite-virtuelle-confort-6121.html', '1', '6.120000', 'at_customer', 'EL1733'),
(331, 345, 55, 'Station Météo Woodstation', 1729, 'http://www.cadeau-maestro.com/station-meteo-woodstation-1729.html', '1', '33.180000', 'at_warehouse', 'INOWDS01'),
(333, 347, 77, 'Clavier d''ordinateur en Chocolat', 2367, 'http://www.cadeau-maestro.com/clavier-ordinateur-en-chocolat-2367.html', '1', '5.500000', 'at_warehouse', 'CLAVIER'),
(334, 348, 7, 'Coeur LED à Suspendre', 5656, 'http://www.cadeau-maestro.com/coeur-led-suspendre-5656.html', '1', '2.510000', 'at_warehouse', '260062');
INSERT INTO `faulty_product` (`id`, `faulty_id`, `supplier_id`, `name`, `id_prestashop_product`, `link`, `quantity`, `cost_price`, `location`, `supplier_reference`) VALUES
(335, 349, 53, 'Mug Coeur Thermoréactif', 453, 'http://www.cadeau-maestro.com/mug-coeur-thermoreactif-453.html', '1', '5.410000', 'at_warehouse', 'GAD00236'),
(336, 350, 7, 'Panneau à Messages LightBox A4', 5665, 'http://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', '1', '7.930000', 'at_customer', '57/6048'),
(337, 351, 96, 'Bloc-Notes Brique de Lait', 4260, 'http://www.cadeau-maestro.com/bloc-notes-brique-lait-4260.html', '8', '4.000000', 'at_warehouse', 'DYMILKBNO'),
(338, 352, 96, 'Parfum d''Intérieur Vacances', 5720, 'http://www.cadeau-maestro.com/parfum-interieur-vacances-5720.html', '6', '4.200000', 'at_warehouse', 'DYSCENTHO'),
(339, 353, 61, 'coeurs gelifies 70 g l''amour ref 14567', 0, 'bonbon', '6', '1.65', 'at_warehouse', '14567'),
(340, 354, 15, 'Veilleuse Licorne', 5238, 'http://www.cadeau-maestro.com/veilleuse-licorne-5238.html', '1', '3.610000', 'at_warehouse', '10003'),
(341, 355, 91, 'Trèfle à 4 feuilles', 313, 'http://www.cadeau-maestro.com/trefle-4-feuilles-313.html', '1', '1.030000', 'at_customer', '4-leaf clover'),
(342, 356, 97, 'Photophore Infinity', 2741, 'http://www.cadeau-maestro.com/photophore-infinity-2741.html', '1', '9.900000', 'at_warehouse', 'QG487'),
(343, 357, 30, 'Coffret Spa Pierres Chaudes', 312, 'http://www.cadeau-maestro.com/coffret-spa-pierres-chaudes-312.html', '1', '8.340000', 'at_customer', 'OT2011'),
(344, 358, 92, 'Rose en Or Deluxe avec Soliflore', 5433, 'http://www.cadeau-maestro.com/rose-or-deluxe-soliflore-5433.html', '5', '45.870000', 'at_warehouse', 'UE04418'),
(345, 359, 6, 'Figurine Einstein Solaire', 3468, 'http://www.cadeau-maestro.com/figurine-einstein-solaire-3468.html', '1', '9.000000', 'at_warehouse', '1609'),
(348, 362, 41, 'Bouillotte Coeur "Réchauffe Moi"', 4497, 'http://www.cadeau-maestro.com/bouillotte-coeur-rechauffe-moi-4497.html', '1', '4.450000', 'at_customer', '3607'),
(349, 363, 92, 'Rose en Or Deluxe avec Soliflore', 5433, 'http://www.cadeau-maestro.com/rose-or-deluxe-soliflore-5433.html', '1', '45.870000', 'at_warehouse', 'UE04418'),
(350, 364, 7, 'Porte-Clés Coeur Initiale', 3078, 'http://www.cadeau-maestro.com/porte-cles-coeur-initiale-3078.html', '1', '0.930000', 'at_warehouse', '24/1060-88'),
(351, 365, 5, 'Boite à Cookies Dark Vador Star Wars', 5903, 'http://www.cadeau-maestro.com/boite-cookies-dark-vador-star-wars-5903.html', '1', '14.170000', 'at_customer', 'PP3142SW'),
(352, 366, 61, 'Verre à vin mrs', 0, 'Inconnu', '1', '1', 'at_warehouse', 'Glee005'),
(353, 367, 6, 'Porte-Clés Chat Sonore et Lumineux', 3912, 'http://www.cadeau-maestro.com/porte-cles-chat-sonore-lumineux-3912.html', '1', '2.170000', 'at_customer', 'KRL21-CDU-EU'),
(354, 368, 61, 'Kit de peinture visage pour enfant', 2664, 'Inconnu', '1', '2,61', 'at_warehouse', 'Inconnu'),
(355, 369, 61, 'Éponges de bain princesse', 1886, 'Inconnu', '6', '4,10', 'at_warehouse', 'Inconnu'),
(356, 370, 98, 'Jeu Sexy Menu', 4158, 'http://www.cadeau-maestro.com/jeu-sexy-menu-4158.html', '1', '19.990000', 'at_customer', 'J-18'),
(359, 373, 7, 'Pêle-Mêle 3D XL', 1619, 'http://www.cadeau-maestro.com/ple-mle-3d-xl-1619.html', '1', '11.300000', 'at_customer', '94/2295'),
(361, 375, 92, 'Coffret Aérateur de vin Deluxe', 1224, 'http://www.cadeau-maestro.com/coffret-aerateur-vin-deluxe-1224.html', '1', '14.820000', 'at_warehouse', '02474'),
(362, 376, 61, 'Gomme coeur pixel', 0, 'Inconnu', '48', 'Inconnu', 'at_warehouse', '80/4042'),
(363, 377, 88, 'Enceinte Portable Waterproof Lyly', 5688, 'http://www.cadeau-maestro.com/enceinte-portable-waterproof-lyly-5688.html', '1', '21.760000', 'at_warehouse', 'lyl'),
(364, 378, 99, 'Peropon Chat Fraise des Bois', 5311, 'http://www.cadeau-maestro.com/peropon-chat-fraise-bois-5311.html', '1', '6.030000', 'at_customer', 'GD645 (assort)'),
(365, 379, 80, 'Verre à Bière Support Bois', 6424, 'http://www.cadeau-maestro.com/verre-biere-support-bois-6424.html', '1', '7.810000', 'at_customer', 'BS/QY'),
(366, 380, 100, 'Jeu Sexy Folies', 1430, 'http://www.cadeau-maestro.com/jeu-sexy-folies-1430.html', '2', '12.000000', 'at_customer', 'jeusexyfolies'),
(368, 382, 50, 'Coffret Voulez-Vous... Saint-Valentin', 436, 'http://www.cadeau-maestro.com/coffret-voulez-vous-saint-valentin-436.html', '1', '13.360000', 'at_warehouse', 'E22896'),
(369, 383, 101, 'Canard Vibrant Paris I Rub My Duckie', 629, 'http://www.cadeau-maestro.com/canard-vibrant-paris-629.html', '2', '14.040000', 'at_warehouse', 'E20880'),
(370, 384, 7, 'Mug Mélangeur Automatique', 1268, 'http://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', '1', '4.230000', 'at_customer', '71/2897'),
(371, 385, 36, 'Coffret Rhum Deluxe', 215, 'http://www.cadeau-maestro.com/new-coffret-rhum-arranges-deluxe-215.html', '1', '12.950000', 'at_customer', '1APBERACF'),
(372, 386, 6, 'Mini Perche à Selfie Soft Touch', 4987, 'http://www.cadeau-maestro.com/mini-perche-selfie-soft-touch-4987.html', '1', '5.000000', 'at_customer', 'US102'),
(373, 387, 6, 'Mug Coeur Pixels Thermoréactif', 4145, 'http://www.cadeau-maestro.com/mug-coeur-pixels-thermoreactif-4145.html', '1', '3.770000', 'at_customer', 'CU44'),
(375, 389, 70, 'Grande Lampe Plasma', 1223, 'http://www.cadeau-maestro.com/grande-lampe-plasma-1223.html', '12', '15.840000', 'at_warehouse', '00541'),
(376, 390, 7, 'Panneau à Messages LightBox A4', 5665, 'http://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', '1', '7.930000', 'at_customer', '57/6048'),
(377, 391, 7, 'Coeur à Serrer', 5676, 'http://www.cadeau-maestro.com/coeur-serrer-5676.html', '1', '2.540000', 'at_warehouse', '62/6066'),
(378, 392, 117, 'Lunch Box Menu', 2024, 'http://www.cadeau-maestro.com/lunch-box-menu-2024.html', '1', '5.260000', 'at_customer', '25173'),
(379, 393, 35, 'Extrait de Parfum Jasmin', 2918, 'http://www.cadeau-maestro.com/extrait-parfum-jasmin-2918.html', '1', '1.150000', 'at_customer', 'EDP-JASMI'),
(380, 394, 92, 'Grande Lampe Plasma', 1223, 'http://www.cadeau-maestro.com/grande-lampe-plasma-1223.html', '1', '15.840000', 'at_warehouse', '00541'),
(381, 395, 102, 'Dés Orgie d''Amour (x5)', 4758, 'http://www.cadeau-maestro.com/des-orgie-amour-4758.html', '1', '4.880000', 'at_customer', 'HL_DICE_FR'),
(382, 396, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'http://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_customer', '78/7851'),
(383, 397, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'http://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '3', '0.000000', 'at_customer', '78/7851'),
(384, 398, 92, 'Carte du Monde à Gratter en Français', 5436, 'http://www.cadeau-maestro.com/carte-monde-gratter-francais-5436.html', '1', '12.880000', 'at_customer', 'UE04360'),
(385, 399, 103, 'Globe Terrestre Constellations Mova', 4680, 'http://www.cadeau-maestro.com/globe-terrestre-constellations-mova-4680.html', '1', '77.710000', 'at_warehouse', 'MG-45-STA'),
(386, 400, 6, 'Pierres d''Eau pour Plantes', 2107, 'http://www.cadeau-maestro.com/pierres-eau-pour-plantes-2107.html', '1', '5.980000', 'at_warehouse', 'WR01'),
(387, 401, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'http://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_customer', '78/7851'),
(389, 403, 6, 'Porte Téléphone Flexible', 4102, 'http://www.cadeau-maestro.com/porte-telephone-flexible-4102.html', '1', '4.380000', 'at_warehouse', 'US84'),
(390, 404, 7, 'Horloge Mathématiques', 1069, 'http://www.cadeau-maestro.com/horloge-mathematiques-equations-1069.html', '1', '4.430000', 'at_customer', '79/3029'),
(391, 405, 19, 'Mug Golf', 4121, 'http://www.cadeau-maestro.com/mug-golf-4121.html', '1', '4.230000', 'at_warehouse', '11910'),
(392, 406, 98, 'Sac Sexy Suprise', 5126, 'http://www.cadeau-maestro.com/sac-sexy-surprise-5126.html', '1', '9.990000', 'at_warehouse', 'SGB-01-F'),
(393, 407, 14, 'Guirlande LED Cabanes à Oiseaux', 3380, 'http://www.cadeau-maestro.com/guirlande-led-cabanes-oiseaux-x10-3380.html', '2', '9.060000', 'at_warehouse', '25126'),
(394, 408, 41, 'Briquet USB P''tite Pause', 6300, 'http://www.cadeau-maestro.com/briquet-usb-petite-pause-6300.html', '1', '2.950000', 'at_warehouse', '0'),
(395, 409, 117, 'Cadre Photo Empreinte Pied pour Bébé', 811, 'http://www.cadeau-maestro.com/cadre-photo-empreinte-pied-bebe-811.html', '1', '8.160000', 'at_warehouse', '24325'),
(396, 410, 74, 'Rouleau de Coloriage Géant Paris', 3566, 'http://www.cadeau-maestro.com/rouleau-coloriage-geant-paris-3566.html', '1', '8.400000', 'at_warehouse', '6COLO02'),
(397, 411, 7, 'Mug Mélangeur Automatique', 1268, 'http://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', '1', '4.230000', 'at_warehouse', '71/2897'),
(398, 412, 104, 'Fontaine de Table Winy Bar 5 Litres', 2727, 'http://www.cadeau-maestro.com/fontaine-table-winy-bar-5-litres-2727.html', '1', '24.900000', 'at_warehouse', 'pas de ref'),
(399, 413, 6, 'Boite pour lentilles de contact Chouette', 1354, 'http://www.cadeau-maestro.com/boite-pour-lentilles-contact-chouette-1354.html', '1', '1.500000', 'at_customer', 'MG00B-A'),
(400, 414, 6, 'Stylo Plume', 4406, 'http://www.cadeau-maestro.com/stylo-plume-4406.html', '19', '1.000000', 'at_warehouse', '4345'),
(401, 415, 84, 'Chocolate Body Paint', 1154, 'http://www.cadeau-maestro.com/chocolate-body-paint-1154.html', '48', '2.830000', 'at_warehouse', 'CN90'),
(402, 416, 7, 'Coeur LED à Suspendre', 5656, 'http://www.cadeau-maestro.com/coeur-led-suspendre-5656.html', '4', '2.510000', 'at_warehouse', '260062'),
(403, 417, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'http://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_warehouse', '78/7851'),
(404, 418, 89, 'Panneau à Messages LightBox A4', 5665, 'http://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', '1', '7.930000', 'at_warehouse', '0'),
(405, 419, 105, 'Bouillotte Licorne Micro-Ondable', 2748, 'http://www.cadeau-maestro.com/bouillotte-licorne-micro-ondable-2748.html', '1', '7.950000', 'at_warehouse', '1321'),
(406, 420, 61, 'Câble magnétique Android', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(407, 421, 117, 'Tapis de Cuisine Caramel', 4881, 'http://www.cadeau-maestro.com/tapis-cuisine-caramel-4881.html', '1', '8.500000', 'at_customer', '26029'),
(408, 422, 13, 'Plante qui Danse à Faire Pousser', 6277, 'http://www.cadeau-maestro.com/plante-danse-faire-pousser-6277.html', '1', '2.600000', 'at_customer', '28733'),
(409, 423, 106, 'Mug Donut', 5179, 'http://www.cadeau-maestro.com/mug-donut-5179.html', '1', '5.550000', 'at_warehouse', 'BM1533'),
(410, 424, 6, 'Pilulier 7 Jours/7 Nuits Orange', 5200, 'http://www.cadeau-maestro.com/pilulier-7-jours-7-nuits-5200.html', '1', '3.990000', 'at_warehouse', 'CD105'),
(411, 425, 117, 'Bouillotte Electrique Coeur', 2327, 'http://www.cadeau-maestro.com/bouillotte-electrique-coeur-2327.html', '1', '5.960000', 'at_warehouse', '24830'),
(412, 426, 90, 'Sel et Poivre Planète', 692, 'http://www.cadeau-maestro.com/sel-poivre-planete-692.html', '1', '12.690000', 'at_warehouse', 'P262.340'),
(413, 427, 83, 'Set 40 Arômes du Vin Pulltex', 5255, 'http://www.cadeau-maestro.com/set-40-aromes-vin-pulltex-5255.html', '1', '80.500000', 'at_warehouse', '1197'),
(414, 428, 41, 'Cendrier "Je suis accro"', 4711, 'http://www.cadeau-maestro.com/cendrier-je-suis-accro-4711.html', '1', '3.370000', 'at_warehouse', '55318'),
(415, 429, 61, 'Os à voeux', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(417, 431, 107, 'Sel et Poivre Guitares', 4029, 'https://www.cadeau-maestro.com/sel-et-poivre-guitares-4029.html', '1', '6.450000', 'at_customer', 'SALTR-OUT-32-REDXX'),
(418, 432, 97, 'Horloge London', 5147, 'https://www.cadeau-maestro.com/horloge-london-5147.html', '2', '20.940000', 'at_warehouse', 'NT05S'),
(419, 433, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'https://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_customer', '78/7851'),
(420, 434, 7, 'Réveil Rétro Silicone', 3176, 'https://www.cadeau-maestro.com/reveil-retro-silicone-3176.html', '1', '3.490000', 'at_warehouse', '79/3213'),
(421, 435, 92, 'Distributeur de Mouchoirs Moai', 4266, 'https://www.cadeau-maestro.com/distributeur-mouchoirs-moai-4266.html', '1', '16.330000', 'at_warehouse', '03001'),
(424, 438, 34, 'Lampe Fibre Optique', 1163, 'https://www.cadeau-maestro.com/lampe-fibre-optique-1163.html', '1', '4.480000', 'at_warehouse', '10114'),
(425, 439, 6, 'Sac Isotherme Osier', 5841, 'https://www.cadeau-maestro.com/sac-isotherme-osier-5841.html', '1', '2.000000', 'at_warehouse', 'CU216'),
(427, 441, 61, 'cristal à faire pousser noble', 0, 'cristal jaune', '1', '4.91 €', 'at_warehouse', 'mikamax'),
(428, 442, 70, 'Mini Drone BuzzBee', 5456, 'https://www.cadeau-maestro.com/mini-drone-buzzbee-5456.html', '1', '18.250000', 'at_customer', '03826'),
(430, 444, 97, 'Horloge Platine Vinyle', 5138, 'https://www.cadeau-maestro.com/horloge-platine-vinyle-5138.html', '1', '20.010000', 'at_warehouse', 'LP69G'),
(431, 445, 92, 'Grande Lampe Plasma', 1223, 'https://www.cadeau-maestro.com/grande-lampe-plasma-1223.html', '1', '17.770000', 'at_warehouse', '00541'),
(432, 446, 108, 'Carte du Monde à Tamponner', 6511, 'https://www.cadeau-maestro.com/carte-monde-tamponner-6511.html', '1', '0.000000', 'at_warehouse', 'LUKSTMP'),
(434, 448, 12, 'Repose Poignet Lapin', 3232, 'https://www.cadeau-maestro.com/repose-poignet-lapin-3232.html', '1', '2.730000', 'at_warehouse', 'WS03 assort'),
(435, 449, 92, 'Grande Lampe Plasma', 1223, 'https://www.cadeau-maestro.com/grande-lampe-plasma-1223.html', '1', '17.770000', 'at_warehouse', '00541'),
(436, 450, 39, 'Carte Géante Ce n''est qu''un au revoir', 4200, 'https://www.cadeau-maestro.com/carte-geante-au-revoir-4200.html', '1', '4.150000', 'at_warehouse', '9992200020'),
(437, 451, 109, 'Clé USB 8Go Vespa', 6301, 'https://www.cadeau-maestro.com/cle-usb-8go-vespa-6301.html', '1', '12.000000', 'at_warehouse', '0'),
(438, 452, 92, 'Grande Lampe Plasma', 1223, 'https://www.cadeau-maestro.com/grande-lampe-plasma-1223.html', '1', '17.770000', 'at_warehouse', '00541'),
(439, 453, 61, 'Horloge monde led', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(440, 454, 60, 'Maison Souvenirs de Naissance Hiboux & Cie', 5434, 'https://www.cadeau-maestro.com/maison-souvenirs-naissance-hiboux-cie-5434.html', '1', '8.700000', 'at_warehouse', '116660'),
(441, 455, 61, 'Carte géante happy birthday', 0, 'Inconnu', '6', 'Inconnu', 'at_warehouse', 'Inconnu'),
(442, 456, 73, 'Lunch Box Frigo', 3070, 'https://www.cadeau-maestro.com/lunch-box-frigo-3070.html', '1', '5.890000', 'at_customer', 'M15010'),
(443, 457, 53, 'Gel Douche Zombie', 2121, 'https://www.cadeau-maestro.com/gel-douche-zombie-2121.html', '2', '2.730000', 'at_warehouse', 'ZOMBIESHOWERII'),
(444, 458, 117, 'Huilier Vinaigrier Gourmet', 4822, 'https://www.cadeau-maestro.com/huilier-vinaigrier-gourmet-4822.html', '1', '5.510000', 'at_customer', '26064'),
(445, 459, 61, 'Ampoule décorative etoile', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(446, 460, 61, 'Lampe céramique ananas bleue', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(447, 461, 61, 'Lampe ananas céramique rose', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(448, 462, 61, 'Light box 3 ligne', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(449, 463, 99, 'Papa Peropon Chat', 6500, 'https://www.cadeau-maestro.com/papa-peropon-chat-6500.html', '1', '13.950000', 'at_customer', 'GD66902'),
(450, 464, 51, 'Boule Mystique', 570, 'https://www.cadeau-maestro.com/boule-mystique-570.html', '1', '4.490000', 'at_customer', '50529'),
(451, 465, 7, 'Horloge Mathématiques', 1069, 'https://www.cadeau-maestro.com/horloge-mathematiques-equations-1069.html', '1', '4.430000', 'at_customer', '79/3029'),
(452, 466, 77, 'Appareil Photo en Chocolat', 2606, 'https://www.cadeau-maestro.com/appareil-photo-en-chocolat-2606.html', '8', '4.240000', 'at_warehouse', 'PHOTO'),
(454, 468, 80, 'Carafe à Décanter Twister', 2811, 'https://www.cadeau-maestro.com/carafe-decanter-twister-2811.html', '1', '32.210000', 'at_warehouse', 'WDA919'),
(455, 469, 46, 'Montre à l''envers', 3324, 'https://www.cadeau-maestro.com/montre-envers-3324.html', '1', '12.050000', 'at_warehouse', '0000817'),
(458, 472, 6, 'Klaxon Rétro Aigu pour Vélo', 4287, 'https://www.cadeau-maestro.com/klaxon-retro-aigu-velo-4287.html', '1', '2.250000', 'at_warehouse', 'BB20'),
(459, 473, 6, 'Sac Isotherme Osier', 5841, 'https://www.cadeau-maestro.com/sac-isotherme-osier-5841.html', '1', '2.000000', 'at_warehouse', 'CU216'),
(460, 474, 117, 'Cube Photos Pivotant', 479, 'https://www.cadeau-maestro.com/cube-photos-pivotant-479.html', '1', '3.450000', 'at_warehouse', '24824'),
(461, 475, 95, 'Diffuseur de Parfum George', 3220, 'https://www.cadeau-maestro.com/diffuseur-parfum-george-3220.html', '1', '34.780000', 'at_warehouse', 'george'),
(462, 476, 110, 'Coffret Fontaine à Punch', 6320, 'https://www.cadeau-maestro.com/coffret-fontaine-punch-6320.html', '1', '8.060000', 'at_warehouse', '15 3213 2'),
(463, 477, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'https://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_warehouse', '78/7851'),
(464, 478, 65, 'Distributeur de Cotons-Tiges Lotus', 3174, 'https://www.cadeau-maestro.com/distributeur-cotons-tiges-lotus-3174.html', '1', '5.800000', 'at_warehouse', 'QL10157'),
(465, 479, 15, 'Gratte-Dos Téléscopique Patte D''ours', 5441, 'https://www.cadeau-maestro.com/gratte-dos-telescopique-patte-ours-5441.html', '6', '1.860000', 'at_warehouse', '3014'),
(466, 480, 77, 'Manette de Jeu en Chocolat', 2366, 'https://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', '8', '4.130000', 'at_warehouse', 'MANETTE'),
(467, 481, 61, 'Mug iridescend', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(468, 482, 6, 'Câble Chargement iPhone Ancre Marine', 5741, 'https://www.cadeau-maestro.com/cable-iphone-ancre-marine-5741.html', '1', '3.990000', 'at_customer', 'US127-EU'),
(469, 483, 92, 'Grande Lampe Plasma', 1223, 'https://www.cadeau-maestro.com/grande-lampe-plasma-1223.html', '1', '17.770000', 'at_warehouse', '00541'),
(470, 484, 61, 'Décapsuleur clé à molette', 0, 'Inconnu', '6', 'Inconnu', 'at_warehouse', 'Inconnu'),
(472, 486, 62, 'Mug Répliques de Films', 2857, 'https://www.cadeau-maestro.com/mug-repliques-films-2857.html', '1', '7.530000', 'at_warehouse', 'UPG2764'),
(473, 487, 43, 'Stylo Licorne', 5258, 'https://www.cadeau-maestro.com/stylo-licorne-5258.html', '1', '2.290000', 'at_warehouse', 'NP32345'),
(475, 489, 62, 'Chaussettes Femme Licorne', 5823, 'https://www.cadeau-maestro.com/chaussette-licorne-5823.html', '12', '4.500000', 'at_warehouse', 'BQSW625'),
(476, 490, 62, 'Chaussettes Femme Licorne', 5823, 'https://www.cadeau-maestro.com/chaussette-licorne-5823.html', '12', '4.500000', 'at_warehouse', 'BQSW625'),
(477, 491, 61, 'Mug math', 0, 'Inconnu', '6', 'Inconnu', 'at_warehouse', 'Inconnu'),
(478, 492, 99, 'Chuppon Panda Basilic', 6478, 'https://www.cadeau-maestro.com/chuppon-panda-basilic-6478.html', '1', '0.000000', 'at_warehouse', 'GD543 (assort)'),
(481, 495, 6, 'Marque-Page Pieds', 2493, 'https://www.cadeau-maestro.com/marque-page-pieds-2493.html', '1', '2.500000', 'at_customer', 'ST33-BK'),
(482, 496, 106, 'Mug Prescription Café', 5183, 'https://www.cadeau-maestro.com/mug-prescription-cafe-5183.html', '1', '5.640000', 'at_warehouse', 'BM1524'),
(483, 497, 117, 'Salière et Poivrière Cochons', 5627, 'https://www.cadeau-maestro.com/saliere-poivriere-cochons-5627.html', '1', '2.930000', 'at_warehouse', '26218'),
(484, 498, 6, 'Sac Isotherme Osier', 5841, 'https://www.cadeau-maestro.com/sac-isotherme-osier-5841.html', '1', '2.000000', 'at_warehouse', 'CU216'),
(485, 499, 15, 'Veilleuse Licorne', 5238, 'https://www.cadeau-maestro.com/veilleuse-licorne-5238.html', '1', '3.610000', 'at_warehouse', '10003'),
(486, 500, 7, 'Seau à Bières Rétro', 5339, 'https://www.cadeau-maestro.com/seau-bieres-retro-5339.html', '1', '3.320000', 'at_warehouse', '71/3079'),
(487, 501, 53, 'Pendule de Newton', 338, 'https://www.cadeau-maestro.com/pendule-newton-338.html', '1', '4.860000', 'at_customer', 'EDG102'),
(488, 502, 90, 'Tire-Bouchon Levier Ora', 2086, 'https://www.cadeau-maestro.com/tire-bouchon-levier-ora-2086.html', '1', '17.000000', 'at_warehouse', 'P911.811'),
(489, 503, 90, 'Pèse-Bagage Digital', 2563, 'https://www.cadeau-maestro.com/pese-bagage-digital-2563.html', '1', '5.370000', 'at_warehouse', '0'),
(490, 504, 111, 'Kit Un Moment à Deux', 6636, 'https://www.cadeau-maestro.com/kit-un-moment-a-deux-6636.html', '1', '9.750000', 'at_warehouse', 'WOM02389'),
(491, 505, 61, 'Plaid sirène 140', 0, 'Inconnu', '2', 'Inconnu', 'at_warehouse', 'Inconnu'),
(492, 506, 42, 'Sculpture Verre Magique', 3149, 'https://www.cadeau-maestro.com/sculpture-verre-magique-3149.html', '1', '3.300000', 'at_warehouse', 'EG7860'),
(493, 507, 92, 'Grande Lampe Plasma', 1223, 'https://www.cadeau-maestro.com/grande-lampe-plasma-1223.html', '1', '17.770000', 'at_warehouse', '00541'),
(494, 508, 19, 'Gel Douche Poche de Sang', 1011, 'https://www.cadeau-maestro.com/gel-douche-poche-sang-1011.html', '2', '3.790000', 'at_warehouse', '10904'),
(495, 509, 112, 'Set Tasses Visages (x4)', 6558, 'https://www.cadeau-maestro.com/set-tasses-visage-6558.html', '1', '5.570000', 'at_warehouse', 'XDC131'),
(496, 510, 70, 'Double Distributeur de Céréales', 6066, 'https://www.cadeau-maestro.com/double-distributeur-de-cereales-6066.html', '1', '14.230000', 'at_customer', '03627'),
(499, 513, 100, 'Jeu Sexy Folies', 1430, 'https://www.cadeau-maestro.com/jeu-sexy-folies-1430.html', '1', '12.000000', 'at_customer', 'jeu sexy folies'),
(500, 514, 7, 'Cadre Photo Coeur', 1565, 'https://www.cadeau-maestro.com/cadre-photo-coeur-1565.html', '1', '1.650000', 'at_customer', '94/2179'),
(501, 515, 55, 'Lampe Lévitation', 1584, 'https://www.cadeau-maestro.com/lampe-levitation-1584.html', '1', '52.370000', 'at_warehouse', 'INOALTBL'),
(502, 516, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'https://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_warehouse', '78/7851'),
(503, 517, 108, 'Stickers Rétro de Voyage pour Valise (x17)', 4117, 'https://www.cadeau-maestro.com/stickers-retro-voyage-valise-4117.html', '2', '5.990000', 'at_warehouse', 'LUKLL'),
(505, 519, 36, 'Coffret Soirée Rhum Arrangé', 4814, 'https://www.cadeau-maestro.com/coffret-soiree-rhum-arrange-4814.html', '1', '14.950000', 'at_warehouse', '1APRHARVF'),
(506, 520, 64, 'Distributeur de Savon Baignoire', 2650, 'https://www.cadeau-maestro.com/distributeur-savon-baignoire-2650.html', '1', '4.370000', 'at_warehouse', '0'),
(507, 521, 77, 'Rouge à Lèvres en Chocolat (x4)', 2368, 'https://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', '8', '3.900000', 'at_warehouse', 'RAL'),
(508, 522, 34, 'Monsieur Gazon', 5318, 'https://www.cadeau-maestro.com/monsieur-gazon-5318.html', '1', '3.050000', 'at_customer', '00748'),
(509, 523, 112, 'Mug Mr ou Mrs', 6552, 'https://www.cadeau-maestro.com/mug-mr-mrs-6552.html', '1', '2.880000', 'at_warehouse', 'EN021 (assort)'),
(510, 524, 6, 'Boîte à Bijoux Livre', 6712, 'https://www.cadeau-maestro.com/boite-a-bijoux-livre-6712.html', '1', '0.000000', 'at_warehouse', 'JK16'),
(514, 528, 64, 'Mini Enceinte Boom Mr Craftsman', 4703, 'https://www.cadeau-maestro.com/mini-enceinte-boom-mr-craftsman-4703.html', '1', '24.000000', 'at_warehouse', '0'),
(515, 529, 114, 'Pochette Ma Maman c''est la Plus Belle', 6545, 'https://www.cadeau-maestro.com/pochette-ma-maman-cest-la-plus-belle-6545.html', '1', '8.000000', 'at_warehouse', '117'),
(516, 530, 115, 'Guimauves Licorne "Borne de Recharge en Bonheur"', 6584, 'https://www.cadeau-maestro.com/guimauves-licorne-borne-recharge-bonheur-6584.html', '3', '0.000000', 'at_warehouse', '18240'),
(517, 531, 115, 'Guimauves Licorne "Quand Je Pète"', 6664, 'https://www.cadeau-maestro.com/guimauves-licorne-quand-pete-paillettes-6664.html', '3', '0.000000', 'at_warehouse', '18247'),
(519, 533, 80, 'Service à Shooters Boules de Billard (x6)', 4905, 'https://www.cadeau-maestro.com/service-shooters-boules-billard-x6-4905.html', '2', '14.420000', 'at_warehouse', 'FTA1836'),
(521, 535, 62, 'Mug Dinosaures Thermoréactif', 3902, 'https://www.cadeau-maestro.com/mug-dinosaures-thermoreactif-3902.html', '1', '7.950000', 'at_warehouse', 'UPG0982'),
(522, 536, 15, 'Veilleuse Licorne', 5238, 'https://www.cadeau-maestro.com/veilleuse-licorne-5238.html', '1', '4.110000', 'at_warehouse', '10003'),
(523, 537, 80, 'Carafe à Whisky Tête de Mort', 5780, 'https://www.cadeau-maestro.com/carafe-whisky-tete-mort-5780.html', '2', '17.450000', 'at_warehouse', 'FTA1864'),
(524, 538, 61, 'Mug cookie dug', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(525, 539, 53, 'Mug Coeur Ardoise', 3557, 'https://www.cadeau-maestro.com/mug-coeur-ardoise-3557.html', '1', '4.180000', 'at_warehouse', 'LOVEMUG'),
(526, 540, 116, 'Lanterne Volante Ballon', 165, 'https://www.cadeau-maestro.com/lanterne-volante-chinoise-165.html', '1', '1.290000', 'at_customer', '299'),
(527, 541, 53, 'Boule Mystique', 570, 'https://www.cadeau-maestro.com/boule-mystique-570.html', '1', '4.490000', 'at_warehouse', 'EDG104'),
(528, 542, 7, 'Stylo Flamant Rose', 5333, 'https://www.cadeau-maestro.com/stylo-flamant-rose-5333.html', '5', '1.720000', 'at_warehouse', '29/3054'),
(531, 545, 28, 'Serviteur 2 Etages en Ardoise', 5156, 'https://www.cadeau-maestro.com/serviteur-2-etages-ardoise-5156.html', '1', '6.720000', 'at_warehouse', 'I1653'),
(532, 546, 112, 'Parapluie Mappemonde', 6570, 'https://www.cadeau-maestro.com/parapluie-mappemonde-6570.html', '1', '5.240000', 'at_warehouse', 'UBA005'),
(533, 547, 84, 'Mini Canne à Selfie Filaire', 4657, 'https://www.cadeau-maestro.com/mini-canne-selfie-filaire-4657.html', '1', '3.690000', 'at_warehouse', 'GH-035'),
(534, 548, 92, 'Distributeur de Mouchoirs Moai', 4266, 'https://www.cadeau-maestro.com/distributeur-mouchoirs-moai-4266.html', '1', '16.330000', 'at_warehouse', '03001'),
(535, 549, 50, 'Coffret Désir Brûlant', 1190, 'https://www.cadeau-maestro.com/coffret-desir-brulant-1190.html', '1', '12.350000', 'at_warehouse', 'E23153'),
(536, 550, 62, 'Danseuse Hawaienne Tableau de Bord', 1306, 'https://www.cadeau-maestro.com/danseuse-hawaienne-tableau-bord-1306.html', '1', '4.100000', 'at_warehouse', 'AC11328'),
(537, 551, 53, 'Kelvin 23', 25, 'https://www.cadeau-maestro.com/kelvin-23-25.html', '1', '15.300000', 'at_warehouse', 'KELVIN23'),
(538, 552, 28, 'Sets de Table Vinyle (x4)', 2312, 'https://www.cadeau-maestro.com/sets-table-vinyle-2312.html', '1', '5.050000', 'at_warehouse', '03716'),
(539, 553, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'https://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '2', '0.000000', 'at_warehouse', '78/7851'),
(541, 555, 79, 'Papier Cadeau Enfant Fantastic', 874, 'https://www.cadeau-maestro.com/papier-cadeau-enfant-fantastic-874.html', '1', '0.750000', 'at_warehouse', 'TIN011'),
(542, 556, 109, 'Lampe de Table Head-Light Vespa', 6310, 'https://www.cadeau-maestro.com/lampe-table-headlight-vespa-6310.html', '2', '88.000000', 'at_warehouse', '0'),
(543, 557, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'https://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '0.000000', 'at_customer', '78/7851'),
(544, 558, 9, 'Chargeur Snail iPhone et iPad', 6336, 'https://www.cadeau-maestro.com/chargeur-snail-iphone-ipad-6336.html', '1', '16.000000', 'at_warehouse', 'SNCL'),
(545, 559, 108, 'Stickers Rétro de Voyage pour Valise (x17)', 4117, 'https://www.cadeau-maestro.com/stickers-retro-voyage-valise-4117.html', '10', '5.990000', 'at_warehouse', 'LUKLL'),
(546, 560, 28, 'Lightbox A5 (100 caractères)', 5806, 'https://www.cadeau-maestro.com/lightbox-a5-85caracteres-5806.html', '1', '9.950000', 'at_customer', 'LTBOX-B-A5'),
(547, 561, 97, 'Horloge London', 5147, 'https://www.cadeau-maestro.com/horloge-london-5147.html', '1', '20.960000', 'at_warehouse', 'NT05S'),
(548, 562, 6, 'Sac Isotherme Osier', 5841, 'https://www.cadeau-maestro.com/sac-isotherme-osier-5841.html', '1', '2.000000', 'at_warehouse', 'CU216'),
(549, 563, 53, 'Pendule de Newton', 338, 'https://www.cadeau-maestro.com/pendule-newton-338.html', '1', '4.860000', 'at_warehouse', 'EDG102'),
(550, 564, 76, 'Brosse Bouledogue pour Toilettes', 5698, 'https://www.cadeau-maestro.com/brosse-bouledogue-toilettes-5698.html', '1', '6.900000', 'at_warehouse', 'BM0055'),
(551, 565, 97, 'Horloge London', 5147, 'https://www.cadeau-maestro.com/horloge-london-5147.html', '1', '20.960000', 'at_warehouse', 'NT05S'),
(552, 566, 56, 'Verres à Vin à l''Envers (x2)', 5301, 'https://www.cadeau-maestro.com/verres-vin-envers-5301.html', '1', '8.100000', 'at_warehouse', '20058'),
(553, 567, 70, 'Rose en Or', 4264, 'https://www.cadeau-maestro.com/rose-en-or-4264.html', '1', '35.650000', 'at_customer', '03261.GO'),
(554, 568, 92, 'Carte du Monde à Gratter en Français', 5436, 'https://www.cadeau-maestro.com/carte-monde-gratter-francais-5436.html', '3', '14.350000', 'at_warehouse', 'UE04360'),
(555, 569, 6, 'Boîte à Bijoux Livre XL', 6712, 'https://www.cadeau-maestro.com/boite-a-bijoux-livre-6712.html', '2', '10.000000', 'at_warehouse', 'JK16'),
(556, 570, 6, 'Tirelire Einstein', 3914, 'https://www.cadeau-maestro.com/tirelire-einstein-3914.html', '2', '6.000000', 'at_warehouse', 'PB22'),
(557, 571, 118, 'Sushezi Set', 6180, 'https://www.cadeau-maestro.com/sushezi-set-6180.html', '12', '11.970000', 'at_warehouse', 'BAI092'),
(558, 572, 52, 'Lampe Cloche en Verre', 5297, 'https://www.cadeau-maestro.com/lampe-cloche-verre-5297.html', '1', '56.530000', 'at_warehouse', 'SK LIGHTBELL1'),
(561, 575, 43, 'Mug Irish Coffee', 4019, 'https://www.cadeau-maestro.com/mug-irish-coffee-4019.html', '1', '5.060000', 'at_warehouse', 'W16796'),
(562, 576, 97, 'Moulin Sel et Poivre Recto Verso', 5723, 'https://www.cadeau-maestro.com/moulin-sel-poivre-recto-verso-5723.html', '1', '6.000000', 'at_customer', 'NH12'),
(563, 577, 10, 'Porte-Clés Stylo/Stylet Téléscopique', 2295, 'https://www.cadeau-maestro.com/porte-cles-stylo-et-stylet-telescopique-2295.html', '1', '4.200000', 'at_customer', 'TU257'),
(564, 578, 117, 'Pêle-Mêle Magnétique Madison', 3289, 'https://www.cadeau-maestro.com/pele-mele-magnetique-madison-3289.html', '1', '9.810000', 'at_warehouse', '25783'),
(565, 579, 17, 'Tirelire Ananas', 5493, 'https://www.cadeau-maestro.com/tirelire-ananas-5493.html', '1', '8.730000', 'at_warehouse', 'TJ0044'),
(566, 580, 43, 'Mug Irish Coffee', 4019, 'https://www.cadeau-maestro.com/mug-irish-coffee-4019.html', '1', '5.060000', 'at_warehouse', 'W16796'),
(567, 581, 55, 'Station Météo Woodstation', 1729, 'https://www.cadeau-maestro.com/station-meteo-woodstation-1729.html', '1', '33.210000', 'at_warehouse', 'INOWDS01'),
(568, 582, 117, 'Cube Photos Pivotant', 479, 'https://www.cadeau-maestro.com/cube-photos-pivotant-479.html', '3', '3.460000', 'at_customer', '24824'),
(569, 583, 111, 'Set 2 Mugs "Ils Furent heureux"', 6637, 'https://www.cadeau-maestro.com/set-2-mugs-ils-furent-heureux-6637.html', '3', '11.900000', 'at_warehouse', 'WOM02987'),
(570, 584, 120, 'EcoCube Lavande', 6474, 'https://www.cadeau-maestro.com/ecocube-lavande-6474.html', '1', '3.600000', 'at_warehouse', '0'),
(571, 585, 6, 'Figurine Garde Canadien Solaire', 5142, 'https://www.cadeau-maestro.com/figurine-garde-canadien-solaire-5142.html', '1', '9.000000', 'at_customer', '1605'),
(572, 586, 99, 'Chuppon Panda Basilic', 6478, 'https://www.cadeau-maestro.com/chuppon-panda-basilic-6478.html', '1', '4.600000', 'at_customer', 'GD543 (assort)'),
(573, 587, 62, 'Danseuse Hawaienne Tableau de Bord', 1306, 'https://www.cadeau-maestro.com/danseuse-hawaienne-tableau-bord-1306.html', '1', '4.100000', 'at_customer', 'AC11328'),
(574, 588, 115, 'Maxi Carte "Pourquoi 18 Ans est un Âge Archi-Génial"', 6571, 'https://www.cadeau-maestro.com/maxi-carte-pourquoi-18-ans-age-archi-genial-6571.html', '1', '2.150000', 'at_customer', '3359074'),
(575, 589, 39, 'Maxi Carte Tu Vas Nous Manquer !', 5224, 'https://www.cadeau-maestro.com/maxi-carte-tu-vas-nous-manquer-5224.html', '1', '3.300000', 'at_warehouse', '9992100022'),
(576, 590, 7, 'Stylo Gant de Boxe', 1951, 'https://www.cadeau-maestro.com/stylo-gant-boxe-1951.html', '1', '0.830000', 'at_warehouse', '29/3011'),
(577, 591, 35, 'Fontaine à Eau de Décoration', 592, 'https://www.cadeau-maestro.com/fontaine-eau-decoration-592.html', '1', '19.080000', 'at_customer', 'SCFV01'),
(578, 592, 108, 'Pot De Fleurs Fusée', 5568, 'https://www.cadeau-maestro.com/pot-fleurs-fusee-5568.html', '1', '9.600000', 'at_warehouse', 'LUKROCK'),
(579, 593, 7, 'Mug Mélangeur Automatique', 1268, 'https://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', '1', '4.230000', 'at_customer', '71/2897'),
(580, 594, 15, 'Panneau Lumineux Effaçable Bubble', 5670, 'https://www.cadeau-maestro.com/panneau-lumineux-effacable-bubble-5670.html', '1', '10.260000', 'at_warehouse', '10023'),
(581, 595, 96, 'Plateau et Couverts Espace', 3564, 'https://www.cadeau-maestro.com/plateau-et-couverts-espace-3564.html', '1', '15.200000', 'at_warehouse', 'DYDINNESP'),
(583, 597, 7, 'Distributeur de Boisson en Verre 3,5L', 5663, 'https://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', '1', '3.970000', 'at_warehouse', '78/7851'),
(584, 598, 79, 'Téléphone Vintage', 299, 'https://www.cadeau-maestro.com/telephone-vintage-299.html', '1', '38.500000', 'at_warehouse', 'TP003/18/29'),
(585, 599, 5, 'Lampe Ballon', 5898, 'https://www.cadeau-maestro.com/lampe-ballon-5898.html', '1', '10.200000', 'at_warehouse', 'PP3051'),
(586, 600, 76, 'Panneau LED Mum''s Diner', 6854, 'https://www.cadeau-maestro.com/panneau-led-mums-diner-6854.html', '1', '23.000000', 'at_warehouse', 'BQ0038'),
(587, 601, 53, 'Oreiller Musical MP3', 373, 'https://www.cadeau-maestro.com/oreiller-musical-mp3-373.html', '1', '9.150000', 'at_customer', 'WIKIIMUSPIL'),
(589, 603, 13, 'Plante Résurrection', 520, 'https://www.cadeau-maestro.com/plante-resurrection-520.html', '1', '2.600000', 'at_warehouse', '31758'),
(590, 604, 13, 'Plante Résurrection', 520, 'https://www.cadeau-maestro.com/plante-resurrection-520.html', '1', '2.600000', 'at_warehouse', '31758'),
(591, 605, 34, 'Plante Résurrection', 520, 'https://www.cadeau-maestro.com/plante-resurrection-520.html', '1', '2.600000', 'at_warehouse', '31758'),
(592, 606, 34, 'Plante Résurrection', 520, 'https://www.cadeau-maestro.com/plante-resurrection-520.html', '1', '2.600000', 'at_warehouse', '31758'),
(597, 611, 117, 'Pêle-Mêle Magnétique Madison', 3289, 'https://www.cadeau-maestro.com/pele-mele-magnetique-madison-3289.html', '1', '9.640000', 'at_warehouse', '25783'),
(598, 612, 42, 'Sculpture Verre Magique', 3149, 'https://www.cadeau-maestro.com/sculpture-verre-magique-3149.html', '1', '3.310000', 'at_customer', 'EG7860'),
(599, 613, 117, 'Cube Photos Pivotant', 479, 'https://www.cadeau-maestro.com/cube-photos-pivotant-479.html', '1', '5.360000', 'at_customer', '24824'),
(600, 614, 46, 'Mug Nuit Jour Thermoréactif', 6875, 'https://www.cadeau-maestro.com/mug-nuit-jour-thermoreactif-6875.html', '1', '8.950000', 'at_warehouse', '0001032'),
(601, 615, 70, 'Tirelire Panda Gourmand', 5791, 'https://www.cadeau-maestro.com/tirelire-panda-gourmand-5791.html', '1', '8.100000', 'at_warehouse', '02462.PA'),
(602, 616, 96, 'Poster 100 Lieux à Visiter Avant de Mourir', 5369, 'https://www.cadeau-maestro.com/poster-100-lieux-visiter-avant-de-mourir-5369.html', '1', '11.990000', 'at_warehouse', 'DYPOSTPLF'),
(603, 617, 96, 'Poster 100 Choses à Faire Avant de Mourir', 5370, 'https://www.cadeau-maestro.com/poster-100-choses-faire-avant-mourir-5370.html', '1', '11.850000', 'at_warehouse', 'DYPOSTTHF'),
(604, 618, 121, 'Bloc Compliments', 2089, 'https://www.cadeau-maestro.com/bloc-compliments-homme-et-femme-2089.html', '8', '3.850000', 'at_warehouse', '020'),
(606, 620, 61, 'Lampe Maman à Personnaliser', 6815, 'https://www.cadeau-maestro.com/lampe-maman-personnaliser-6815.html', '1', '0.000000', 'at_warehouse', 'mikamax'),
(607, 621, 62, 'Danseuse Hawaienne Tableau de Bord', 1306, 'https://www.cadeau-maestro.com/danseuse-hawaienne-tableau-bord-1306.html', '1', '4.100000', 'at_customer', 'AC11328'),
(608, 622, 97, 'Maniques Pattes d''Ours (x2)', 4179, 'https://www.cadeau-maestro.com/maniques-pattes-ours-x2-4179.html', '1', '10.380000', 'at_customer', 'IFR2159'),
(609, 623, 72, 'Porte-Clés Scooter', 274, 'https://www.cadeau-maestro.com/porte-cles-scooter-vespa-274.html', '2', '4.250000', 'at_warehouse', 'MTM934'),
(612, 626, 117, 'Fauteuil Gonflage Rapide Cloud', 6859, 'https://www.cadeau-maestro.com/fauteuil-gonflage-rapide-cloud-6859.html', '1', '24.540000', 'at_warehouse', '26578'),
(613, 627, 13, 'Plante Résurrection', 520, 'https://www.cadeau-maestro.com/plante-resurrection-520.html', '1', '2.600000', 'at_warehouse', '31758'),
(614, 628, 7, 'Mug Mélangeur Automatique', 1268, 'https://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', '1', '4.230000', 'at_customer', '71/2897'),
(615, 629, 42, 'Sculpture Verre Magique', 3149, 'https://www.cadeau-maestro.com/sculpture-verre-magique-3149.html', '1', '3.310000', 'at_customer', 'EG7860'),
(616, 630, 7, 'Mug Mélangeur Automatique', 1268, 'https://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', '1', '4.230000', 'at_warehouse', '71/2897'),
(617, 631, 74, 'Poster Ours Phosphorescent', 4247, 'https://www.cadeau-maestro.com/poster-ours-phosphorescent-4247.html', '6', '5.600000', 'at_warehouse', '6PHOP01'),
(618, 632, 6, 'Figurine Solaire Napoléon', 4757, 'https://www.cadeau-maestro.com/figurine-solaire-napoleon-4757.html', '1', '8.970000', 'at_customer', '1610'),
(619, 633, 61, 'rose en or boite noire', 0, 'Mikamax', '1', '35.65', 'at_customer', '03261.GO'),
(620, 634, 14, 'Guirlande Lumineuse Lapins', 5257, 'https://www.cadeau-maestro.com/guirlande-lumineuse-lapins-5257.html', '2', '9.790000', 'at_warehouse', '24937'),
(621, 635, 12, 'Porte Téléphone Chat', 1487, 'https://www.cadeau-maestro.com/porte-telephone-chat-1487.html', '1', '3.160000', 'at_warehouse', 'HEE26000'),
(622, 636, 62, 'Mug Yoga', 5824, 'https://www.cadeau-maestro.com/mug-yoga-5824.html', '1', '7.950000', 'at_warehouse', 'UPG3464'),
(623, 637, 61, 'Porte bouteille 2 cv', 5232, 'Inconnu', '3', '16,05', 'at_warehouse', '14130'),
(624, 638, 64, 'Boîte à Chocolat', 5452, 'https://www.cadeau-maestro.com/boite-chocolat-5452.html', '1', '6.250000', 'at_customer', 'DEC9881'),
(625, 639, 62, 'Verres à Shooters Bandits (x6)', 2844, 'https://www.cadeau-maestro.com/verres-shooters-bandits-x6-2844.html', '4', '8.100000', 'at_warehouse', 'UPG1838'),
(626, 640, 42, 'Sculpture Verre Magique', 3149, 'https://www.cadeau-maestro.com/sculpture-verre-magique-3149.html', '1', '3.310000', 'at_customer', 'EG7860'),
(627, 641, 117, 'Etui à lunettes et à lentilles', 1444, 'https://www.cadeau-maestro.com/etui-lunettes-et-lentilles-1444.html', '1', '5.400000', 'at_customer', '24557'),
(629, 643, 6, 'Grands Verres à Cocktails (x4)', 5843, 'https://www.cadeau-maestro.com/grands-verres-cocktails-5843.html', '1', '9.970000', 'at_warehouse', 'GL11-L'),
(630, 644, 7, 'Pêle-Mêle 3D XL', 1619, 'https://www.cadeau-maestro.com/ple-mle-3d-xl-1619.html', '1', '11.300000', 'at_warehouse', '94/2295'),
(631, 645, 3, 'Bol Humeur du Matin Heureux', 4312, 'https://www.cadeau-maestro.com/bol-humeur-matin-heureux-4312.html', '1', '7.800000', 'at_warehouse', '010401'),
(632, 646, 7, 'Chat du Bonheur Solaire', 4676, 'https://www.cadeau-maestro.com/chat-bonheur-solaire-4676.html', '1', '2.230000', 'at_warehouse', '57/9750'),
(633, 647, 117, 'Localisateur de Clés Sherlock', 614, 'https://www.cadeau-maestro.com/localisateur-cles-sherlock-614.html', '1', '8.310000', 'at_warehouse', '25885'),
(634, 648, 92, 'Parapluie Fuck the Rain', 1862, 'https://www.cadeau-maestro.com/parapluie-fuck-the-rain-1862.html', '1', '5.880000', 'at_warehouse', 'UE04462'),
(635, 649, 80, 'Carafe à Décanter Twister', 2811, 'https://www.cadeau-maestro.com/carafe-decanter-twister-2811.html', '1', '34.710000', 'at_warehouse', 'WDA919'),
(636, 650, 7, 'Réveil Rétro Silicone', 3176, 'https://www.cadeau-maestro.com/reveil-retro-silicone-3176.html', '1', '3.490000', 'at_warehouse', '79/3068'),
(637, 651, 70, 'Oreiller Éléphant', 6585, 'https://www.cadeau-maestro.com/oreiller-elephant-6585.html', '2', '14.700000', 'at_warehouse', '04109'),
(638, 652, 97, 'Photophore Infinity', 2741, 'https://www.cadeau-maestro.com/photophore-infinity-2741.html', '1', '9.900000', 'at_warehouse', 'QG487'),
(639, 653, 93, 'Lampe 3D Licorne', 5776, 'https://www.cadeau-maestro.com/lampe-licorne-5776.html', '1', '20.500000', 'at_warehouse', '0'),
(640, 654, 15, 'Jeu de Roulette à Boire', 1419, 'https://www.cadeau-maestro.com/jeu-roulette-boire-1419.html', '1', '5.630000', 'at_customer', '3161'),
(641, 655, 79, 'Mallette Barbecue Aventure', 5578, 'https://www.cadeau-maestro.com/mallette-barbecue-aventure-5578.html', '1', '27.500000', 'at_warehouse', 'GEN075'),
(642, 656, 14, 'Stylos à Encre Invisible (x2)', 3348, 'https://www.cadeau-maestro.com/stylos-encre-invisible-3348.html', '1', '2.260000', 'at_warehouse', '26178'),
(643, 657, 64, 'Porte Cure-Dents Voodoo', 48, 'https://www.cadeau-maestro.com/porte-cure-dents-voodoo-48.html', '1', '6.600000', 'at_warehouse', '0'),
(644, 658, 97, 'Pierres à Whisky (x9)', 5154, 'https://www.cadeau-maestro.com/pierres-whisky-x9-5154.html', '1', '5.560000', 'at_warehouse', 'WT09'),
(647, 661, 97, 'Horloge Platine Vinyle', 5138, 'https://www.cadeau-maestro.com/horloge-platine-vinyle-5138.html', '1', '19.790000', 'at_warehouse', 'LP69G'),
(648, 662, 97, 'Horloge London', 5147, 'https://www.cadeau-maestro.com/horloge-london-5147.html', '1', '20.960000', 'at_warehouse', 'NT05S'),
(649, 663, 53, 'Mug Coeur Ardoise', 3557, 'https://www.cadeau-maestro.com/mug-coeur-ardoise-3557.html', '1', '5.000000', 'at_customer', 'LOVEMUG'),
(650, 664, 6, 'Figurine Reine d''Angleterre', 2030, 'https://www.cadeau-maestro.com/figurine-reine-angleterre-2030.html', '1', '7.750000', 'at_warehouse', '1601-A'),
(651, 665, 6, 'Marque-Page Pieds', 2493, 'https://www.cadeau-maestro.com/marque-page-pieds-2493.html', '1', '2.500000', 'at_warehouse', 'ST33-BK'),
(652, 666, 122, 'Kit Gin à Faire Soi-Même', 6686, 'https://www.cadeau-maestro.com/kit-gin-faire-soi-meme-6686.html', '1', '26.090000', 'at_customer', 'WP102'),
(653, 667, 108, 'Projecteur Deluxe pour Smartphone', 3758, 'https://www.cadeau-maestro.com/projecteur-deluxe-pour-smartphone-3758.html', '1', '14.900000', 'at_warehouse', 'LUKPRO2'),
(654, 668, 88, 'Enceinte Bluetooth et Waterproof Bluedive', 3822, 'https://www.cadeau-maestro.com/enceinte-bluetooth-et-waterproof-bluedive-3822.html', '1', '19.720000', 'at_warehouse', 'bluedive'),
(655, 669, 61, 'Base Lampe 3d', 0, 'Inconnu', '1', 'Inconnu', 'at_warehouse', 'Inconnu'),
(656, 670, 3, 'Set de Mugs Grognon et Malin (x2)', 5252, 'https://www.cadeau-maestro.com/set-mugs-grognon-malin-x2-5252.html', '1', '11.670000', 'at_warehouse', '012701'),
(657, 671, 46, 'Fauteuil Ours Gummy', 4749, 'https://www.cadeau-maestro.com/fauteuil-ours-gummy-4749.html', '1', '18.250000', 'at_warehouse', '0001345'),
(658, 672, 123, 'Lightbox en Bois XL 4 lignes', 6650, 'https://www.cadeau-maestro.com/lightbox-en-bois-xl-4-lignes-6650.html', '1', '17.130000', 'at_warehouse', '011283'),
(659, 673, 7, 'Coussin Emoji Love 20cm', 6054, 'https://www.cadeau-maestro.com/coussin-emoji-love-20cm-6054.html', '6', '1.570000', 'at_warehouse', '62/1027'),
(660, 674, 123, 'Lightbox Couleur 1 Ligne', 6968, 'https://www.cadeau-maestro.com/lightbox-couleur-1-ligne-6968.html', '1', '4.270000', 'at_warehouse', '011502'),
(661, 675, 17, 'Ampoule Vintage Larme Metropolis', 5733, 'https://www.cadeau-maestro.com/ampoule-vintage-larme-metropolis-5733.html', '1', '3.360000', 'at_customer', 'TJ0002'),
(662, 676, 95, 'Diffuseur de Parfum George', 3220, 'https://www.cadeau-maestro.com/diffuseur-parfum-george-3220.html', '1', '36.020000', 'at_warehouse', 'george'),
(663, 677, 58, 'Double Sucette Bi', 241, 'https://www.cadeau-maestro.com/double-sucette-bi-241.html', '1', '0.920000', 'at_warehouse', '0033'),
(664, 678, 64, 'Cuillère pour Enfant en Bois Avion', 877, 'https://www.cadeau-maestro.com/cuillere-pour-enfant-en-bois-avion-877.html', '1', '6.250000', 'at_customer', 'cuillère'),
(665, 679, 117, 'Horloge Vinyle', 1181, 'https://www.cadeau-maestro.com/horloge-vinyle-1181.html', '1', '4.890000', 'at_customer', 'vinyle'),
(666, 680, 56, 'Verres à Vin à l''Envers (x2)', 5301, 'https://www.cadeau-maestro.com/verres-vin-envers-5301.html', '2', '8.100000', 'at_customer', '20058'),
(667, 681, 80, 'Set Verres à Whisky Dégustation (x2)', 5785, 'https://www.cadeau-maestro.com/set-verres-whisky-x2-5785.html', '2', '4.500000', 'at_warehouse', 'BS/WR2'),
(668, 682, 117, 'Distributeur Bouteilles', 4538, 'https://www.cadeau-maestro.com/distributeur-bouteilles-4538.html', '1', '18.600000', 'at_customer', '23546'),
(669, 683, 53, 'Pendule de Newton', 338, 'https://www.cadeau-maestro.com/pendule-newton-338.html', '1', '4.360000', 'at_customer', 'EDG102'),
(670, 684, 65, 'Veilleuse Renard César', 5854, 'https://www.cadeau-maestro.com/veilleuse-renard-cesar-5854.html', '1', '13.500000', 'at_warehouse', '0'),
(672, 686, 19, 'Mug Golf', 4121, 'https://www.cadeau-maestro.com/mug-golf-4121.html', '1', '4.430000', 'at_customer', '11910'),
(673, 687, 95, 'Diffuseur de Parfum George', 3220, 'https://www.cadeau-maestro.com/diffuseur-parfum-george-3220.html', '1', '36.020000', 'at_warehouse', 'george'),
(674, 688, 93, 'Guillotine à Saucisson Laguiole', 6789, 'https://www.cadeau-maestro.com/guillotine-saucisson-laguiole-6789.html', '1', '0.000000', 'at_customer', '0'),
(675, 689, 7, 'Pistolet Tapette à Mouches', 37, 'https://www.cadeau-maestro.com/pistolet-tapette-mouches-37.html', '1', '1.540000', 'at_customer', '61/2024'),
(676, 690, 61, 'Clavier laser', 6035, 'Inconnu', '2', '49,95', 'at_warehouse', 'Lkplus'),
(677, 691, 53, 'Oreiller Musical MP3', 373, 'https://www.cadeau-maestro.com/oreiller-musical-mp3-373.html', '1', '9.150000', 'at_customer', 'WIKIIMUSPIL'),
(678, 692, 6, 'Minuteur Mozart', 6909, 'https://www.cadeau-maestro.com/minuteur-mozart-6909.html', '1', '7.000000', 'at_customer', 'KT50-EU'),
(679, 693, 64, 'Radio de Douche  « I Love My Radio »', 4710, 'https://www.cadeau-maestro.com/radio-de-douche-i-love-my-radio-4710.html', '1', '8.980000', 'at_warehouse', '0'),
(680, 694, 76, 'Pot Céramique Ananas', 6852, 'https://www.cadeau-maestro.com/pot-ceramique-ananas-6852.html', '1', '3.950000', 'at_customer', 'OR0707'),
(681, 695, 62, 'Chaussettes Femme Licorne', 5823, 'https://www.cadeau-maestro.com/chaussette-licorne-5823.html', '6', '4.500000', 'at_warehouse', 'BQSW625'),
(682, 696, 7, 'Tête de Mort Gazon', 6860, 'https://www.cadeau-maestro.com/pot-tete-mort-gazon-6860.html', '1', '1.690000', 'at_warehouse', '37/0009'),
(683, 697, 108, 'Carte de France à Gratter Luxe', 3763, 'https://www.cadeau-maestro.com/carte-france-gratter-luxe-3763.html', '1', '13.100000', 'at_customer', 'LUKFR'),
(684, 698, 52, 'Radio en Carton', 780, 'https://www.cadeau-maestro.com/radio-en-carton-780.html', '1', '15.950000', 'at_warehouse', 'SK CARDRADIO1'),
(685, 699, 124, 'Dynamomètre Décision en Bois à Monter', 6568, 'https://www.cadeau-maestro.com/dynamometre-decision-bois-monter-6568.html', '1', '8.560000', 'at_warehouse', '70005'),
(686, 700, 7, 'Coeur LED à Suspendre', 5656, 'https://www.cadeau-maestro.com/coeur-led-suspendre-5656.html', '1', '2.510000', 'at_warehouse', '260062'),
(687, 701, 2, 'Haut-Parleur Salle de Bain Bluetooth', 6744, 'https://www.cadeau-maestro.com/haut-parleur-salle-de-bain-bluetooth-6744.html', '1', '6.640000', 'at_warehouse', '0'),
(688, 702, 6, 'Marque-Page Pieds', 2493, 'https://www.cadeau-maestro.com/marque-page-pieds-2493.html', '1', '2.500000', 'at_warehouse', 'ST33-BK'),
(689, 703, 70, 'Chargeur Externe Emoji Love', 7012, 'https://www.cadeau-maestro.com/chargeur-externe-emoji-love-7012.html', '1', '7.900000', 'at_warehouse', '04212.HC'),
(690, 704, 117, 'Trousse Range-Câbles Vintage', 5767, 'https://www.cadeau-maestro.com/trousse-range-cables-vintage-5767.html', '1', '5.550000', 'at_warehouse', '26455'),
(691, 705, 53, 'Boule Mystique', 570, 'https://www.cadeau-maestro.com/boule-mystique-570.html', '24', '4.840000', 'at_warehouse', 'EDG104'),
(692, 706, 76, 'Globe Terrestre Lumineux Noir 20cm', 6491, 'https://www.cadeau-maestro.com/globe-terrestre-lumineux-noir-20-cm-6491.html', '1', '5.000000', 'at_warehouse', 'OR0581'),
(693, 707, 95, 'Diffuseur de Parfum George Soft', 3725, 'https://www.cadeau-maestro.com/diffuseur-parfum-george-soft-3725.html', '1', '38.700000', 'at_customer', 'george soft'),
(695, 709, 76, 'Panneau LED Mum''s Diner', 6854, 'https://www.cadeau-maestro.com/panneau-led-mums-diner-6854.html', '2', '23.000000', 'at_warehouse', 'BQ0038'),
(696, 710, 53, 'Pendule de Newton', 338, 'https://www.cadeau-maestro.com/pendule-newton-338.html', '12', '4.890000', 'at_warehouse', 'EDG102'),
(697, 711, 61, 'Tirelire livre', 0, 'Inconnu', '25', 'Inconnu', 'at_warehouse', 'Inconnu'),
(698, 712, 92, 'Carte du Monde à Gratter en Français', 5436, 'https://www.cadeau-maestro.com/carte-monde-gratter-francais-5436.html', '4', '13.070000', 'at_warehouse', 'UE04360'),
(699, 713, 7, 'Plante Solaire Flip Flap', 767, 'https://www.cadeau-maestro.com/plante-solaire-flip-flap-767.html', '1', '0.890000', 'at_customer', '57/9744'),
(700, 714, 41, 'Petit Radio Réveil Vintage', 4481, 'https://www.cadeau-maestro.com/petit-radio-reveil-vintage-4481.html', '1', '17.130000', 'at_warehouse', '31861'),
(701, 715, 76, 'Panneau LED Mum''s Diner', 6854, 'https://www.cadeau-maestro.com/panneau-led-mums-diner-6854.html', '6', '23.000000', 'at_warehouse', 'BQ0038'),
(702, 716, 42, 'Gouttes d''Eau Lévitation', 3197, 'https://www.cadeau-maestro.com/gouttes-eau-levitation-3197.html', '1', '120.240000', 'at_warehouse', 'IL7350'),
(703, 717, 103, 'Globe Géopolitique Mova', 6358, 'https://www.cadeau-maestro.com/globe-geopolitique-mova-6358.html', '1', '66.920000', 'at_warehouse', 'MG-45-BOE');
INSERT INTO `faulty_product` (`id`, `faulty_id`, `supplier_id`, `name`, `id_prestashop_product`, `link`, `quantity`, `cost_price`, `location`, `supplier_reference`) VALUES
(704, 718, 12, 'Batterie rechargeable Chocolat', 3496, 'https://www.cadeau-maestro.com/batterie-rechargeable-chocolat-3496.html', '1', '9.720000', 'at_warehouse', 'ZA111'),
(705, 719, 36, 'Coffret Cristal Rhum Arrangé', 4784, 'https://www.cadeau-maestro.com/coffret-cristal-rhum-arrange-4784.html', '1', '12.950000', 'at_warehouse', '1RH4SACCF');

-- --------------------------------------------------------

--
-- Structure de la table `faulty_product_image`
--

CREATE TABLE IF NOT EXISTS `faulty_product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=661 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faulty_product_image`
--

INSERT INTO `faulty_product_image` (`id`, `product_id`, `picture`) VALUES
(4, 11, 'http://tools.cadeau-maestro.com/faulty/b957ef992e77ab7755d7f015243102ad.jpg'),
(5, 11, NULL),
(6, 12, 'http://tools.cadeau-maestro.com/faulty/9ff39120b35efe32081ff9e635cd9271.jpg'),
(7, 13, 'http://tools.cadeau-maestro.com/faulty/96fe175c78e59f759ecfb33b6faa652f.jpg'),
(8, 15, 'http://tools.cadeau-maestro.com/faulty/1dc0ef648d89a0035e14e6d27c14782f.jpg'),
(9, 16, 'http://tools.cadeau-maestro.com/faulty/989ef44a867c5fe12bb2716602cb28d7.jpg'),
(10, 18, 'http://tools.cadeau-maestro.com/faulty/41c984a38cbb8137bcabe0d8349ed698.jpg'),
(11, 19, 'http://tools.cadeau-maestro.com/faulty/b03eacd4305ef31ff5429b90fafe5f0f.jpg'),
(12, 20, 'http://tools.cadeau-maestro.com/faulty/75a736405668c7382535fa64a94dbe08.jpg'),
(14, 22, 'http://tools.cadeau-maestro.com/faulty/de1a9ac827fd817369e615ded6ee0465.jpg'),
(15, 24, 'http://tools.cadeau-maestro.com/faulty/6910f0da60b7c800b2a470d693ce4f8a.jpg'),
(16, 25, 'http://tools.cadeau-maestro.com/faulty/fb85dd80c6315b71a1d758a30d3be0db.jpg'),
(17, 26, 'http://tools.cadeau-maestro.com/faulty/bc0d6da7d83996882df00a5dd025d0f3.jpg'),
(18, 27, 'http://tools.cadeau-maestro.com/faulty/d2ec3edefb37954c902b95c2b62599c4.jpg'),
(19, 28, 'http://tools.cadeau-maestro.com/faulty/58896e031ed3c618bdac9b7b6e02df47.jpg'),
(20, 28, 'http://tools.cadeau-maestro.com/faulty/6f9f1ef988cbf8bf9016f137eb4b0df7.jpg'),
(21, 29, 'http://tools.cadeau-maestro.com/faulty/fe53d30751554024bec285ba00ff44ec.png'),
(22, 29, NULL),
(23, 30, 'http://tools.cadeau-maestro.com/faulty/8f9bf3a95913a268c9a5cbe51fa184db.JPG'),
(24, 31, 'http://tools.cadeau-maestro.com/faulty/00abc28e0dc0f16cd196eb9fd771b331.jpg'),
(25, 32, 'http://tools.cadeau-maestro.com/faulty/a7f365401ef9c07f58067f70d0f09926.jpg'),
(26, 33, 'http://tools.cadeau-maestro.com/faulty/461db6017a537d65d69a2c88f8dee837.JPG'),
(27, 34, 'http://tools.cadeau-maestro.com/faulty/8ccccb9c7ce5d51966df69fc01a42b6c.jpg'),
(28, 35, 'http://tools.cadeau-maestro.com/faulty/4a13a4e413466226dd53e93ad60a77bd.jpg'),
(29, 36, 'http://tools.cadeau-maestro.com/faulty/5e6ce2e2ef265d851ed184faf4eec92e.jpg'),
(30, 36, NULL),
(31, 36, NULL),
(32, 37, 'http://tools.cadeau-maestro.com/faulty/1503c21fcf9b9fa20a5c663f1da01b6d.JPG'),
(33, 38, 'http://tools.cadeau-maestro.com/faulty/b42fcfbafad3d384852d5b774b9f2801.JPG'),
(34, 39, 'http://tools.cadeau-maestro.com/faulty/6c77d826929eb0e4af6d91ee3f4ae1e6.jpg'),
(35, 39, 'http://tools.cadeau-maestro.com/faulty/3bdbca4b24a5ea6802c2c960cbf8b7dc.jpg'),
(36, 39, 'http://tools.cadeau-maestro.com/faulty/760dd978ef41307e54ea30c535374632.jpg'),
(37, 39, 'http://tools.cadeau-maestro.com/faulty/47d73c3fdefdf3cba2cb09a8d38791ab.jpg'),
(38, 39, 'http://tools.cadeau-maestro.com/faulty/471beb1f80b3f6942269a8eff1dcae72.jpg'),
(39, 40, 'http://tools.cadeau-maestro.com/faulty/0c399128911fef666f48a3a0904afdeb.jpg'),
(40, 41, 'http://tools.cadeau-maestro.com/faulty/7dd46aea8f356583a802eaa5b5ddd4f4.jpg'),
(41, 42, 'http://tools.cadeau-maestro.com/faulty/94becd298a17ea9d461e19a9fd9f9154.JPG'),
(42, 43, 'http://tools.cadeau-maestro.com/faulty/3139399dc18dae3b26a5638309e6f31b.jpeg'),
(43, 44, 'http://tools.cadeau-maestro.com/faulty/3e001de729efe53640c8f821e3785b1e.jpg'),
(44, 45, 'http://tools.cadeau-maestro.com/faulty/1b2b080035dfe45105cebeea84d187bb.jpg'),
(45, 46, 'http://tools.cadeau-maestro.com/faulty/a5f2f2e69cd445dbbb11cd3d479fa566.jpg'),
(46, 47, 'http://tools.cadeau-maestro.com/faulty/6fb790bbeb283cd20f92e0c9f6153790.JPG'),
(47, 47, 'http://tools.cadeau-maestro.com/faulty/06a029999d849ad8a1ee38991d199ecc.JPG'),
(48, 47, 'http://tools.cadeau-maestro.com/faulty/5b68e8f9c5a720a4ed77635cf53fa2ad.JPG'),
(49, 48, 'http://tools.cadeau-maestro.com/faulty/ff51fe28b38ad6a5473ec55933fd13e5.jpg'),
(50, 49, 'http://tools.cadeau-maestro.com/faulty/2a00f9359525322afad14c2612823b14.jpg'),
(51, 49, NULL),
(52, 50, 'http://tools.cadeau-maestro.com/faulty/6fce1f06be8c624b99dfbfad6de4b794.JPG'),
(53, 51, 'http://tools.cadeau-maestro.com/faulty/0979a8341577ad62fee2405c345de69a.JPG'),
(54, 52, 'http://tools.cadeau-maestro.com/faulty/6ef7f18747b9e4b643667b54e5ddede0.JPG'),
(55, 53, 'http://tools.cadeau-maestro.com/faulty/ed2d636db66639b5e89f53a8521971ee.JPG'),
(56, 54, 'http://tools.cadeau-maestro.com/faulty/bd6b661a7516865c8b5747a1fcd6edde.jpg'),
(57, 55, 'http://tools.cadeau-maestro.com/faulty/ca0298cf47cb196c336fde4380d5a077.jpg'),
(58, 56, 'http://tools.cadeau-maestro.com/faulty/5b2c7d6e26d2731b5bb768e0b8bc65d3.JPG'),
(59, 57, 'http://tools.cadeau-maestro.com/faulty/db361655f72fdf3bcf0587b3e3dced6b.png'),
(60, 58, 'http://tools.cadeau-maestro.com/faulty/2a3163297a266befdba5e1972111c24a.png'),
(61, 59, 'http://tools.cadeau-maestro.com/faulty/61585b7db1c0d8fd57fb25ccf69f463d.png'),
(62, 60, 'http://tools.cadeau-maestro.com/faulty/a3d00d9a2a931c3d68b167214e89b0a4.png'),
(63, 61, 'http://tools.cadeau-maestro.com/faulty/1add9257f520279ebb708117a720227c.png'),
(64, 62, 'http://tools.cadeau-maestro.com/faulty/059ec41984de4833c04e0c821faeaae8.png'),
(65, 63, 'http://tools.cadeau-maestro.com/faulty/646de58ff2ab9a35ccbf51277b44cb58.png'),
(66, 59, 'http://tools.cadeau-maestro.com/faulty/9d16c24e5826a71554f44cf146616045.png'),
(67, 64, 'http://tools.cadeau-maestro.com/faulty/f6a208a31604b574343dac20e10d2608.png'),
(68, 65, 'http://tools.cadeau-maestro.com/faulty/70c502af46a213d3256629e038964268.png'),
(69, 66, 'http://tools.cadeau-maestro.com/faulty/0d20567de6148d7f7c3737849ede68b4.jpg'),
(70, 67, 'http://tools.cadeau-maestro.com/faulty/028e705d62ed77e1d1f6ed8fc6029049.JPG'),
(71, 68, 'http://tools.cadeau-maestro.com/faulty/cde6513d4bb20eb1a19c6b0b0d0dbdf8.png'),
(72, 69, 'http://tools.cadeau-maestro.com/faulty/5e65d991c56a1633950c8eda1890419d.png'),
(73, 71, 'http://tools.cadeau-maestro.com/faulty/f0b9287ab61205f0326bc4fb1ef237b6.JPG'),
(74, 72, 'http://tools.cadeau-maestro.com/faulty/4454bf18f61925b3be037901643d68c1.JPG'),
(75, 73, 'http://tools.cadeau-maestro.com/faulty/1b28b11dc49abbf53816cb8b2a642ee6.png'),
(76, 73, 'http://tools.cadeau-maestro.com/faulty/d44a797c59e3b98cb644942f9accb287.png'),
(77, 74, 'http://tools.cadeau-maestro.com/faulty/6e3fc73404c1e1ec2505acb0bdc7c4ea.JPG'),
(78, 76, 'http://tools.cadeau-maestro.com/faulty/b589a8e4ac377fad07cddb6e7050056a.jpg'),
(79, 77, 'http://tools.cadeau-maestro.com/faulty/700d417aec9357ced2ca9da421d7c9fc.JPG'),
(80, 77, 'http://tools.cadeau-maestro.com/faulty/f47261ef8bbb7133389a7671f63c7497.JPG'),
(81, 78, 'http://tools.cadeau-maestro.com/faulty/26c81d8871b71b04d6bf14b58ce0e742.jpeg'),
(82, 78, 'http://tools.cadeau-maestro.com/faulty/b78843325d9f3ca245c776ef8d3668f2.jpeg'),
(83, 79, 'http://tools.cadeau-maestro.com/faulty/73a2ade4c26c287c812db0bcfe02c04d.JPG'),
(84, 80, 'http://tools.cadeau-maestro.com/faulty/b856bbaaf29d3e1c66138a2e992f985f.JPG'),
(85, 80, 'http://tools.cadeau-maestro.com/faulty/04217b1bb4f9ca9b95f071e9fe72c015.JPG'),
(86, 80, 'http://tools.cadeau-maestro.com/faulty/7612fc61e716746ed73267f0c48edc23.JPG'),
(87, 80, 'http://tools.cadeau-maestro.com/faulty/a573375ed804f7a10ee0af93182f0bb3.JPG'),
(88, 80, 'http://tools.cadeau-maestro.com/faulty/4d7c1a9ae714de88bb2fa49b3a308e7c.JPG'),
(89, 80, 'http://tools.cadeau-maestro.com/faulty/f8b4131cf5a4c65e022b83356b1a436e.JPG'),
(90, 80, 'http://tools.cadeau-maestro.com/faulty/50e2749d1dfcaf4cfc52a48f3a7fcc8b.JPG'),
(91, 80, 'http://tools.cadeau-maestro.com/faulty/26cc0d22a458bff8a6356d1e9bbbbae4.JPG'),
(92, 81, 'http://tools.cadeau-maestro.com/faulty/1ea0709297f2a929c70220acc15eddc2.jpg'),
(93, 81, 'http://tools.cadeau-maestro.com/faulty/814729ddd7d662b1fe7271c93fac66e8.jpg'),
(94, 83, 'http://tools.cadeau-maestro.com/faulty/ce0ca81b04726ae69668396410a3bc97.jpg'),
(95, 84, 'http://tools.cadeau-maestro.com/faulty/dbdda9de45263a8a3cd40467c9e859c5.jpeg'),
(96, 85, 'http://tools.cadeau-maestro.com/faulty/7f62bc41816587ef397f8ff361518718.JPG'),
(97, 85, 'http://tools.cadeau-maestro.com/faulty/e0b089dc6cb6e79adce6da7efd16d515.JPG'),
(98, 86, NULL),
(99, 89, NULL),
(100, 90, 'http://tools.cadeau-maestro.com/faulty/aae13f941917eaea723d0428feb6671f.JPG'),
(101, 90, NULL),
(102, 91, 'http://tools.cadeau-maestro.com/faulty/037f4153e14d3ad414152c4a1daa1bbf.JPG'),
(103, 92, NULL),
(104, 92, NULL),
(105, 93, 'http://tools.cadeau-maestro.com/faulty/419f6b9418ebfbe7863e45eb8f5898c1.JPG'),
(106, 84, 'http://tools.cadeau-maestro.com/faulty/aae31c83f7fc94d081eb9b0ed7cb766e.jpg'),
(107, 94, 'http://tools.cadeau-maestro.com/faulty/38bd500bbe3593f4573a4b5227ff6c23.JPG'),
(108, 95, 'http://tools.cadeau-maestro.com/faulty/c3735d582450264023a076143be5c89e.jpg'),
(109, 96, 'http://tools.cadeau-maestro.com/faulty/c87bb228769704f0935e359b28eb6d4d.jpg'),
(110, 96, 'http://tools.cadeau-maestro.com/faulty/ed408f6b2eb98b703485d549a6d796a4.jpg'),
(111, 96, 'http://tools.cadeau-maestro.com/faulty/bfe0d1121627d5730ecef92c0883889e.tiff'),
(112, 97, 'http://tools.cadeau-maestro.com/faulty/04be0bcb898f924053e03f32987653f0.jpg'),
(113, 98, 'http://tools.cadeau-maestro.com/faulty/51789482d0e883e63db89571002dc3ea.jpg'),
(114, 100, 'http://tools.cadeau-maestro.com/faulty/4964261b3600948fc39d9d4b5fe0c579.jpg'),
(115, 101, 'http://tools.cadeau-maestro.com/faulty/faae09767386bccbaa227bdd5977cdee.jpg'),
(116, 108, 'http://tools.cadeau-maestro.com/faulty/8848f475a91be92748c6bd46501a0f67.jpg'),
(117, 112, 'http://tools.cadeau-maestro.com/faulty/f412237f4558ed24c28386c228fb785e.JPG'),
(118, 113, 'http://tools.cadeau-maestro.com/faulty/e70a3c0537a2005ca2c94988eb227083.JPG'),
(119, 114, 'http://tools.cadeau-maestro.com/faulty/223397b9ad6e8a61217c9737017b5baa.jpg'),
(120, 109, 'http://tools.cadeau-maestro.com/faulty/b0748193a56e5b22f91313ab9ecd5ebe.jpg'),
(121, 107, 'http://tools.cadeau-maestro.com/faulty/016cf5686b5b43c1b6f60b4335151973.jpg'),
(123, 117, 'http://tools.cadeau-maestro.com/faulty/0511693d4f997491fbfccf672a1be855.JPG'),
(124, 120, 'http://tools.cadeau-maestro.com/faulty/403cc4482a04cb4fa89dbb1b05b49498.jpg'),
(125, 115, 'http://tools.cadeau-maestro.com/faulty/7329dd5210e76199d39cee377a88ff15.JPG'),
(126, 121, 'http://tools.cadeau-maestro.com/faulty/fe147079b278ec24fa875482d14a7d89.jpg'),
(127, 122, 'http://tools.cadeau-maestro.com/faulty/80207d1a8e6dd88e3b3ff6d409aaecaa.jpg'),
(128, 124, 'http://tools.cadeau-maestro.com/faulty/49784b124cfb6255299762e7bbf4b758.jpg'),
(129, 125, 'http://tools.cadeau-maestro.com/faulty/f9519e21428e743a79530f70970572cb.JPG'),
(130, 126, 'http://tools.cadeau-maestro.com/faulty/81602c46772aec81b9039ecfc1afa2a6.jpg'),
(131, 130, 'http://tools.cadeau-maestro.com/faulty/e674e413ade844b49cd48be68da0e1a4.JPG'),
(132, 131, 'http://tools.cadeau-maestro.com/faulty/8096579b945d47969688a1bf1be7f386.jpg'),
(133, 133, 'http://tools.cadeau-maestro.com/faulty/d2fa69fbc5024ac7384dda3037f013b2.JPG'),
(134, 135, 'http://tools.cadeau-maestro.com/faulty/46f4fa72a732af92098110074d28173b.jpeg'),
(135, 139, 'http://tools.cadeau-maestro.com/faulty/7276907e89d641c2c0a08360c724f1f1.jpg'),
(136, 140, 'http://tools.cadeau-maestro.com/faulty/1c85fc384a6794262d234f75c117a26e.jpg'),
(137, 141, NULL),
(138, 143, 'http://tools.cadeau-maestro.com/faulty/d3bb9bb6b944c0f48c6ffba3978a91c4.JPG'),
(139, 144, 'http://tools.cadeau-maestro.com/faulty/886770388555b6046b271fe8660e98ea.jpg'),
(140, 145, 'http://tools.cadeau-maestro.com/faulty/af4114362edfcea73bc735065094177c.jpg'),
(141, 146, 'http://tools.cadeau-maestro.com/faulty/961e846cb0e3a164e3eba0a0344faf7c.jpg'),
(142, 146, 'http://tools.cadeau-maestro.com/faulty/0539ac35468a7a5dcc8fc793285f5db3.jpg'),
(143, 146, 'http://tools.cadeau-maestro.com/faulty/a9b216e52ef64d1ca2e3490233cde0bf.jpg'),
(144, 138, 'http://tools.cadeau-maestro.com/faulty/c23551aa489fa0cc1b0b692ae8ac5862.jpg'),
(145, 146, 'http://tools.cadeau-maestro.com/faulty/329a7edb9da07301df52621d35f6d45f.JPG'),
(146, 151, 'http://tools.cadeau-maestro.com/faulty/6ab7e8fffaf80a11dfaa4445f052bc12.jpg'),
(147, 152, 'http://tools.cadeau-maestro.com/faulty/91eab0e630e75d81d010d3bf767c787f.jpg'),
(148, 153, 'http://tools.cadeau-maestro.com/faulty/a620393da12c560e449781e277db4f57.JPG'),
(149, 151, 'http://tools.cadeau-maestro.com/faulty/d87923c5033ca7f288e3a70c86f261c7.JPG'),
(150, 151, 'http://tools.cadeau-maestro.com/faulty/5bc609bd4adc61d42b5a8c9c79136d73.jpg'),
(151, 156, 'http://tools.cadeau-maestro.com/faulty/9376d3bdd8f0f810b946e0a5e471107b.jpg'),
(152, 158, 'http://tools.cadeau-maestro.com/faulty/b24b9483a8bfa3be03b49d8655799214.JPG'),
(153, 159, 'http://tools.cadeau-maestro.com/faulty/eecc7a997c670840801ddff7976dbebe.png'),
(154, 150, 'http://tools.cadeau-maestro.com/faulty/087c4f7c3cf9e44ac203e65bbbfadc8e.jpg'),
(155, 150, 'http://tools.cadeau-maestro.com/faulty/21a196e1f6b711c234bc9fae8e7505bf.jpg'),
(156, 150, 'http://tools.cadeau-maestro.com/faulty/2dbfe27fac23bd78132c4a2ae09e00c5.JPG'),
(157, 160, 'http://tools.cadeau-maestro.com/faulty/72d36bba59003805a45f2686bc4cdb62.JPG'),
(158, 160, 'http://tools.cadeau-maestro.com/faulty/f9876ec46a325446d1b8b3c66b4bbb8e.jpg'),
(159, 157, 'http://tools.cadeau-maestro.com/faulty/77bf82d22f7a5840dea89c2b3095db48.jpg'),
(160, 163, 'http://tools.cadeau-maestro.com/faulty/20425a8ed85682f6bf28f1aaa6d51a3b.jpg'),
(161, 164, 'http://tools.cadeau-maestro.com/faulty/1bb20d410b3bea53387bcef00a07c925.jpg'),
(162, 111, 'http://tools.cadeau-maestro.com/faulty/444beeeb9698805dae28ed47546dde85.jpg'),
(163, 110, 'http://tools.cadeau-maestro.com/faulty/018313a3ddbb2203b9c2d8f38207000d.jpg'),
(164, 165, 'http://tools.cadeau-maestro.com/faulty/fcf05231cfc7d29a41a04c8d4f3c91af.jpg'),
(165, 166, 'http://tools.cadeau-maestro.com/faulty/a5239f40d2147456417306af7ae63406.jpg'),
(166, 142, 'http://tools.cadeau-maestro.com/faulty/3603dc918a12f7cfc535160b037184b7.JPG'),
(167, 162, 'http://tools.cadeau-maestro.com/faulty/23e9ef793834893e070367fb584b66aa.jpg'),
(168, 161, 'http://tools.cadeau-maestro.com/faulty/ef89320c1d2a68da5937a734ba9bff01.jpg'),
(169, 168, 'http://tools.cadeau-maestro.com/faulty/f11f2533eec325682c99f9f2d0a5dcda.jpg'),
(170, 169, 'http://tools.cadeau-maestro.com/faulty/40bd47726a6c45375884581522441b9c.jpg'),
(171, 171, 'http://tools.cadeau-maestro.com/faulty/54d66f66c9e0896bb3f15e62b488063b.jpg'),
(172, 172, 'http://tools.cadeau-maestro.com/faulty/9d0719a116bafaeab5e7e32413edb035.jpg'),
(173, 174, 'http://tools.cadeau-maestro.com/faulty/7c6914d118f41e7aa673585051731fbc.jpg'),
(174, 175, 'http://tools.cadeau-maestro.com/faulty/9904619d9c63135942b186eece5739b9.JPG'),
(175, 176, 'http://tools.cadeau-maestro.com/faulty/d78a2687f68e22d1b525772bacf8809b.jpg'),
(176, 181, 'http://tools.cadeau-maestro.com/faulty/f420e491e75604edd7a988a052666085.jpg'),
(177, 124, 'http://tools.cadeau-maestro.com/faulty/4303b0a332c2b60109d09ddd2ced7836.jpg'),
(178, 184, 'http://tools.cadeau-maestro.com/faulty/3995c9edfd98424327d2d90eea22809d.jpg'),
(179, 186, 'http://tools.cadeau-maestro.com/faulty/e5f7d54d51d6944313583becd5424dd6.JPG'),
(180, 187, 'http://tools.cadeau-maestro.com/faulty/e0a78083bef7cc47789e6095a5d50708.JPG'),
(181, 188, 'http://tools.cadeau-maestro.com/faulty/5d4e5c0a963414a23f9d764819450108.jpeg'),
(182, 188, 'http://tools.cadeau-maestro.com/faulty/10a7d95b232d0ee99e4db0b565dd50d9.jpeg'),
(183, 189, 'http://tools.cadeau-maestro.com/faulty/05872ed3bf65add6b0d1d436e632fda6.jpg'),
(184, 189, 'http://tools.cadeau-maestro.com/faulty/5302cdae020af25067e77c3c636c0a1c.JPG'),
(185, 190, 'http://tools.cadeau-maestro.com/faulty/8d84665c462846678b0235b7c54320be.jpg'),
(186, 192, 'http://tools.cadeau-maestro.com/faulty/b85f46ef4062a6635bfb79fbb2c06241.jpg'),
(187, 192, 'http://tools.cadeau-maestro.com/faulty/4211a2810cb03650076e41c1bda9dfe6.jpg'),
(188, 194, 'http://tools.cadeau-maestro.com/faulty/6c69f3d8c8f2f51a714fbee62039633f.jpg'),
(189, 197, 'http://tools.cadeau-maestro.com/faulty/e1d27681ce0aaf4f988b163d4a99eabe.png'),
(190, 197, 'http://tools.cadeau-maestro.com/faulty/1f2234af6fd79ea74333906d41ec2de8.png'),
(191, 198, 'http://tools.cadeau-maestro.com/faulty/4f3d512a8ac4eb9fe15c88516cfa43f9.png'),
(192, 198, 'http://tools.cadeau-maestro.com/faulty/fba44657e65e0f87a1873942c4972f3d.png'),
(193, 199, NULL),
(194, 200, 'http://tools.cadeau-maestro.com/faulty/fcc5311a58589e01c4c11124e589691c.jpg'),
(195, 200, 'http://tools.cadeau-maestro.com/faulty/edd8db871302d74171d5e33c02ab6494.jpg'),
(196, 202, 'http://tools.cadeau-maestro.com/faulty/db18334c2940271e27fbee41c1bbf753.JPG'),
(197, 202, 'http://tools.cadeau-maestro.com/faulty/d5e136805ad23ac1161a62294617cd53.JPG'),
(198, 202, 'http://tools.cadeau-maestro.com/faulty/fc5e9e44aa2b1fa4a00f8b1b57d9e2b4.JPG'),
(199, 205, 'http://tools.cadeau-maestro.com/faulty/197f3eb64790f6730ec47cc7a3c9b252.jpg'),
(200, 206, 'http://tools.cadeau-maestro.com/faulty/665b425c370330f21003ad981d047ad4.jpg'),
(201, 206, 'http://tools.cadeau-maestro.com/faulty/6a6f247aada1a2d46aef0bfb4f4802cc.jpg'),
(202, 206, 'http://tools.cadeau-maestro.com/faulty/ed8ade50e8965ed7061e7bbecdfe660f.jpg'),
(203, 209, 'http://tools.cadeau-maestro.com/faulty/3b046e1ff50b8d151405fb58a265acdb.JPG'),
(204, 210, 'http://tools.cadeau-maestro.com/faulty/5e25e24fa5bc4ae6a943bb116a1c8aa5.jpg'),
(205, 211, 'http://tools.cadeau-maestro.com/faulty/ff50ebbd4e6c567908bbdb576fc53def.jpg'),
(207, 213, NULL),
(209, 215, 'http://tools.cadeau-maestro.com/faulty/2d1ac767564ef8cbceb3ca8b9a28b593.JPG'),
(210, 215, 'http://tools.cadeau-maestro.com/faulty/844230c11ee9ac9b55c2f40a064a2d51.JPG'),
(211, 216, 'http://tools.cadeau-maestro.com/faulty/af81958a1fe72c167ebe755692de5fd3.jpg'),
(212, 219, 'http://tools.cadeau-maestro.com/faulty/d1d00c8888ad1173da8a42562f4dbd8a.jpg'),
(213, 221, 'http://tools.cadeau-maestro.com/faulty/e79cb89a47dd65f6c9d92758f4cd213a.jpg'),
(214, 222, 'http://tools.cadeau-maestro.com/faulty/09d0b91f4aa41dc44bf2a45cddd53ce6.jpg'),
(215, 223, 'http://tools.cadeau-maestro.com/faulty/96a1f9cb78813766067b0ffb4c90fcb7.jpg'),
(216, 226, 'http://tools.cadeau-maestro.com/faulty/61cb60e946f79ac1e8cefcaadc102e8e.JPG'),
(217, 226, 'http://tools.cadeau-maestro.com/faulty/308ae7e922ef0797294681e05b2d3850.JPG'),
(218, 227, 'http://tools.cadeau-maestro.com/faulty/cdba77ad91ef8ce975b86b4b537806f8.jpg'),
(219, 228, 'http://tools.cadeau-maestro.com/faulty/e8198e037a04b831fd0c872b1a4963f3.jpg'),
(220, 229, 'http://tools.cadeau-maestro.com/faulty/dcb27e8d9df1a1ee616e1c7fa0194f63.jpg'),
(221, 232, NULL),
(222, 233, 'http://tools.cadeau-maestro.com/faulty/2fa05930371e877a60e5c28924a4abed.JPG'),
(223, 236, 'http://tools.cadeau-maestro.com/faulty/b5f66ad7755c6ad8e76197487ca9b47b.JPG'),
(224, 237, 'http://tools.cadeau-maestro.com/faulty/1a4f577f19dc953ddb7ea2b4e93490e3.jpg'),
(225, 237, 'http://tools.cadeau-maestro.com/faulty/634a43b234d111d0f12a5440a4f71761.jpg'),
(226, 239, 'http://tools.cadeau-maestro.com/faulty/2df3e6133854a696b866c223a6bb013a.jpg'),
(227, 242, 'http://tools.cadeau-maestro.com/faulty/20e58863540c9ec7738147efa8319a03.JPG'),
(228, 242, 'http://tools.cadeau-maestro.com/faulty/7aa2cf453de0f258081af17186bd7aba.JPG'),
(229, 242, 'http://tools.cadeau-maestro.com/faulty/63aa4be3efab81dfe05b19db12125e65.JPG'),
(230, 242, 'http://tools.cadeau-maestro.com/faulty/39d171b3fc305511c7a61b2ac60e05c4.JPG'),
(231, 243, 'http://tools.cadeau-maestro.com/faulty/acfd531b1c3e193fbbd5dc04b691d231.jpg'),
(232, 243, 'http://tools.cadeau-maestro.com/faulty/886abded9a4b6c8f0ea9c264749559a1.jpg'),
(233, 244, 'http://tools.cadeau-maestro.com/faulty/f31a5387f2d1fe8a51cc3d2f4ab2e52a.JPG'),
(234, 246, 'http://tools.cadeau-maestro.com/faulty/b22df8c89a722024b975f66390b7988b.JPG'),
(235, 246, 'http://tools.cadeau-maestro.com/faulty/b4ffa3c4c3605df775afe8f39d772153.JPG'),
(236, 253, NULL),
(237, 255, 'http://tools.cadeau-maestro.com/faulty/edb65ab843838b5d38a3c98657fbab03.jpg'),
(238, 257, 'http://tools.cadeau-maestro.com/faulty/94d6a71a53eb8d69e7ce88e5994d8a25.jpg'),
(239, 258, 'http://tools.cadeau-maestro.com/faulty/2abc75f504e39deeb46c3d49ac67288d.JPG'),
(240, 259, 'http://tools.cadeau-maestro.com/faulty/3dbe9f85e3690a00a10f6061cc3d8491.jpg'),
(241, 260, 'http://tools.cadeau-maestro.com/faulty/48b1ab69c3ec8e0d188e4887ed9487e0.jpg'),
(242, 254, 'http://tools.cadeau-maestro.com/faulty/4765385caf5e2c1c3fa16363e7bcfcc1.jpg'),
(243, 261, 'http://tools.cadeau-maestro.com/faulty/d6011bacbd8ce5bfe7bd15acae62f477.jpg'),
(244, 261, 'http://tools.cadeau-maestro.com/faulty/f0642e5b79636760324d50575125a3ca.jpg'),
(245, 262, 'http://tools.cadeau-maestro.com/faulty/f89cd59127349a8db6ea763903ce7894.jpg'),
(246, 263, 'http://tools.cadeau-maestro.com/faulty/9399fc58b875c0ed4aa77647c8c21231.JPG'),
(247, 265, 'http://tools.cadeau-maestro.com/faulty/ef3277bfbff5fa289b08e23ab1f2849d.jpg'),
(248, 265, 'http://tools.cadeau-maestro.com/faulty/e46122af3339f1da46c99a9327d02e65.jpg'),
(249, 267, 'http://tools.cadeau-maestro.com/faulty/7a9b34c0e900d709ec88ddf77e286056.jpg'),
(250, 267, NULL),
(251, 268, 'http://tools.cadeau-maestro.com/faulty/c66624e1b1a015c29a9bc8034032003e.jpg'),
(252, 269, 'http://tools.cadeau-maestro.com/faulty/3eabc50ad13740537708a98e4bd491fe.jpg'),
(253, 270, 'http://tools.cadeau-maestro.com/faulty/4882efe6e1dec361ad80c1d3d51146f6.jpg'),
(254, 271, 'http://tools.cadeau-maestro.com/faulty/7653c34a7b0f5de83c0c7563082c9941.jpg'),
(255, 272, 'http://tools.cadeau-maestro.com/faulty/231ad2651863eef62914ac98ffa157d3.jpg'),
(256, 276, 'http://tools.cadeau-maestro.com/faulty/f9106c4ed5908bcfd24cae95fe97a4e4.jpg'),
(257, 278, NULL),
(258, 279, 'http://tools.cadeau-maestro.com/faulty/3b794ffe15ff8a49c9f3f9645e01eefb.jpg'),
(259, 280, 'http://tools.cadeau-maestro.com/faulty/f8b514f4ee5e20bb8bedd8db72b52c9c.JPG'),
(260, 281, 'http://tools.cadeau-maestro.com/faulty/4ac214bc7ce618ad8b9a4d734a3d30d6.jpg'),
(261, 282, 'http://tools.cadeau-maestro.com/faulty/7a1d65fe2428dae43b8b777a450cbe99.jpg'),
(262, 283, 'http://tools.cadeau-maestro.com/faulty/08fbefa4329bb59c65591f3c351607d0.jpg'),
(263, 284, 'http://tools.cadeau-maestro.com/faulty/00b6a5e6d2d218390a68e174df47f88a.jpg'),
(264, 285, 'http://tools.cadeau-maestro.com/faulty/4bde67ede240afba5f708f05896a5358.jpg'),
(265, 286, 'http://tools.cadeau-maestro.com/faulty/6aac5cc8f30b634d116af4645e66b063.JPG'),
(266, 287, 'http://tools.cadeau-maestro.com/faulty/6dd3b803f8c0dd3963a9426c3a28a719.jpg'),
(267, 291, 'http://tools.cadeau-maestro.com/faulty/76b06d547bb9317a16dc655004ca4676.jpg'),
(268, 292, 'http://tools.cadeau-maestro.com/faulty/3923a51b2e5e2bd3e0a8a049f1aebc7a.jpg'),
(269, 293, 'http://tools.cadeau-maestro.com/faulty/8e29134d7177057679730b18f4501dff.jpg'),
(270, 294, 'http://tools.cadeau-maestro.com/faulty/c4ea68e691b5d9b12ac0f99151ecbcd1.JPG'),
(271, 295, 'http://tools.cadeau-maestro.com/faulty/e57261fdeba6ff37b41ef81b86ae548c.jpeg'),
(272, 296, 'http://tools.cadeau-maestro.com/faulty/eda25e65d74a33b091a1c67cfd00b3fe.JPG'),
(273, 297, 'http://tools.cadeau-maestro.com/faulty/7c837267e8643891b46dee744d9e75ab.JPG'),
(274, 298, 'http://tools.cadeau-maestro.com/faulty/ad29a0b8d3c7cf3e0e8da0d2bcd90053.jpg'),
(275, 299, 'http://tools.cadeau-maestro.com/faulty/7e121f37ff7c2d2a022cfc782701f829.png'),
(276, 300, 'http://tools.cadeau-maestro.com/faulty/d1c15312b399d41888f689e258d12b35.jpg'),
(277, 301, 'http://tools.cadeau-maestro.com/faulty/37c0f922a50053c280f83b04ef7290c5.jpg'),
(278, 303, 'http://tools.cadeau-maestro.com/faulty/8a4916f00a43ecbc69590131ee6bab7d.jpg'),
(279, 305, 'http://tools.cadeau-maestro.com/faulty/36b69d7c7098a0cbed14553ffb9d22fb.jpg'),
(280, 306, 'http://tools.cadeau-maestro.com/faulty/e8b8b201896c7c9910aaca5168c45115.jpg'),
(281, 307, 'http://tools.cadeau-maestro.com/faulty/509fa681ea91e6a3b1b1ab44f1551f21.jpg'),
(282, 311, 'http://tools.cadeau-maestro.com/faulty/57c35e076e3b70b80b25f93998db2f62.jpg'),
(283, 311, 'http://tools.cadeau-maestro.com/faulty/3053369374284b3686b6e3faff7e7717.jpg'),
(284, 312, 'http://tools.cadeau-maestro.com/faulty/96a12529a33eacf6ec440ff895f5226f.jpg'),
(285, 313, 'http://tools.cadeau-maestro.com/faulty/bd66fa794c79371a086af3a53d603333.JPG'),
(287, 316, 'http://tools.cadeau-maestro.com/faulty/2ecb875f88469b863bbb2732ef95e38b.JPG'),
(288, 314, 'http://tools.cadeau-maestro.com/faulty/ddbe105256e6e6a31ab964ba195fc19c.JPG'),
(290, 318, 'http://tools.cadeau-maestro.com/faulty/106557159c6561c77a6c4a07e07ba93c.jpg'),
(291, 318, 'http://tools.cadeau-maestro.com/faulty/6ece60eb5d80165f9685016566c5ba32.jpg'),
(292, 318, 'http://tools.cadeau-maestro.com/faulty/3df82c5b8c967ee42792ba13607a31ef.jpg'),
(293, 319, NULL),
(294, 320, 'http://tools.cadeau-maestro.com/faulty/734025a76b7f70d49403ba2e694268dc.jpg'),
(295, 321, 'http://tools.cadeau-maestro.com/faulty/59ca4148505799df1d74d1d7029cd7b1.JPG'),
(296, 322, 'http://tools.cadeau-maestro.com/faulty/2bd0b0068f137b8eefdf723e49622ab6.jpg'),
(297, 323, 'http://tools.cadeau-maestro.com/faulty/2dd240e3ce2efb044b0672309844993c.jpg'),
(298, 324, 'http://tools.cadeau-maestro.com/faulty/5ce64d11d4d0c0d4206fef3306ef58aa.jpg'),
(299, 327, 'http://tools.cadeau-maestro.com/faulty/22a4c56cbbaea96472f116fae8bdcc14.jpg'),
(300, 330, 'http://tools.cadeau-maestro.com/faulty/3883f3b673e50e0a98b3c8d68676f038.JPG'),
(301, 326, 'http://tools.cadeau-maestro.com/faulty/09552a1d6fa13c0733e1c7bdd161a6e2.jpg'),
(303, 333, 'http://tools.cadeau-maestro.com/faulty/f9abbabd4c213e5fde7435dc3f8f9490.jpg'),
(304, 334, 'http://tools.cadeau-maestro.com/faulty/2acbd5b0b5668299cad4a86a696ee190.jpg'),
(305, 335, 'http://tools.cadeau-maestro.com/faulty/2075675c617b923e30ff77dee4c265f3.jpg'),
(308, 336, 'http://tools.cadeau-maestro.com/faulty/2c31fc8e4184556956cd3c15bb13e03f.jpg'),
(309, 340, 'http://tools.cadeau-maestro.com/faulty/626ba3aa75c2385912863c2884fc1c84.JPG'),
(310, 341, 'http://tools.cadeau-maestro.com/faulty/e59fc8a96b2a071ffc6a2afe87d32e29.jpeg'),
(311, 342, 'http://tools.cadeau-maestro.com/faulty/a8454fe7115987ae03bd23487e772913.jpg'),
(312, 343, 'http://tools.cadeau-maestro.com/faulty/a387474738382ec6d55e3a57f5a87552.jpg'),
(313, 344, 'http://tools.cadeau-maestro.com/faulty/358634b72d7b3dc050350cb3e6b97f68.jpg'),
(314, 345, 'http://tools.cadeau-maestro.com/faulty/d2ba6bccc61e5745ebdff57869ea5d8a.jpg'),
(316, 348, 'http://tools.cadeau-maestro.com/faulty/7a7f0f44e9f44c322e8f069bd3c3570b.jpg'),
(317, 351, 'http://tools.cadeau-maestro.com/faulty/1056c1e9a02a3bb6dede64f4f467ebe2.JPG'),
(318, 351, 'http://tools.cadeau-maestro.com/faulty/5648582d9591f82e224d7783e535d2b5.JPG'),
(319, 351, 'http://tools.cadeau-maestro.com/faulty/0f2d76045030e34d2bc01536a3131b82.JPG'),
(320, 351, 'http://tools.cadeau-maestro.com/faulty/8fcec1c16e55a5ca077fd4dd41cd3c30.JPG'),
(321, 352, 'http://tools.cadeau-maestro.com/faulty/1c021ffe43a0ea8e8a1b9f5db1e4f291.jpg'),
(322, 353, 'http://tools.cadeau-maestro.com/faulty/5d4514511f6aea239f5ea02ac5f1b8bf.jpeg'),
(323, 359, 'http://tools.cadeau-maestro.com/faulty/e5da00b1e8e3161e5fa7d70fc96276d4.jpg'),
(324, 359, 'http://tools.cadeau-maestro.com/faulty/95523951420d4563048fc7add34308aa.jpg'),
(326, 361, 'http://tools.cadeau-maestro.com/faulty/4888dcf8aa51491faecd9cb051eebf12.jpg'),
(327, 363, 'http://tools.cadeau-maestro.com/faulty/eeb7fa92a85a658337b0932e4cfb37d8.jpg'),
(328, 364, 'http://tools.cadeau-maestro.com/faulty/51e1d10cdb9b7a1dbc18d042cdf63e50.jpg'),
(329, 365, 'http://tools.cadeau-maestro.com/faulty/b64ff510a1e83722afc4801fc654657f.JPG'),
(330, 366, 'http://tools.cadeau-maestro.com/faulty/75474e971a36bfc3cf4a939df113b142.jpg'),
(331, 366, 'http://tools.cadeau-maestro.com/faulty/5cc281a25c9931486c5866839b27ba9f.jpg'),
(332, 366, 'http://tools.cadeau-maestro.com/faulty/7027c3b0e8cc017cd2048cb142b28cf8.jpg'),
(334, 370, 'http://tools.cadeau-maestro.com/faulty/6773afbeb61325b233796b9f0bce1164.jpg'),
(335, 371, 'http://tools.cadeau-maestro.com/faulty/839493b61876d9da3ce9fcbac739cfd1.JPG'),
(336, 371, NULL),
(337, 372, 'http://tools.cadeau-maestro.com/faulty/8b1bb4cc073ae7b924d67b0453a85c95.JPG'),
(338, 373, 'http://tools.cadeau-maestro.com/faulty/9a44961a1798161b48aaf574b127654d.jpg'),
(340, 376, 'http://tools.cadeau-maestro.com/faulty/b06a1b2051de8d750a001b89f4c06496.jpeg'),
(341, 377, 'http://tools.cadeau-maestro.com/faulty/bb50c99c468c202a33837e4e576e6bab.jpg'),
(342, 378, 'http://tools.cadeau-maestro.com/faulty/21ada0a8b02d7b4be34f6f138e23a09a.jpg'),
(343, 379, 'http://tools.cadeau-maestro.com/faulty/eced030f3f3761d2d93953d0a10fe716.jpg'),
(344, 381, 'http://tools.cadeau-maestro.com/faulty/44b352024c85703de6cef917f373b397.JPG'),
(345, 382, 'http://tools.cadeau-maestro.com/faulty/7858abfb139346b91cd818b31c52dce8.JPG'),
(346, 383, 'http://tools.cadeau-maestro.com/faulty/d078794fc0b17b129560a39aee916148.JPG'),
(347, 383, 'http://tools.cadeau-maestro.com/faulty/9ab0cd5c53a122fbf4c1dfa57c84536c.JPG'),
(348, 383, 'http://tools.cadeau-maestro.com/faulty/db4f63e4dab20c34b07cf35c7b37ac7b.JPG'),
(349, 384, 'http://tools.cadeau-maestro.com/faulty/726b1c7d28b5f615c6785e2ebc7a4fb7.jpg'),
(350, 384, 'http://tools.cadeau-maestro.com/faulty/bcef6795de42a002caf7bf1d938b1398.jpg'),
(351, 384, 'http://tools.cadeau-maestro.com/faulty/d6c5f0b049bebbe3758b14991764af22.jpg'),
(352, 385, 'http://tools.cadeau-maestro.com/faulty/bd9cbcb5bc1c1718c5c030efad3eb0eb.JPG'),
(353, 366, 'http://tools.cadeau-maestro.com/faulty/1b3bb1a8d50fc7a722b4c881ccca5e88.jpg'),
(354, 366, 'http://tools.cadeau-maestro.com/faulty/16ffa0addec3a00c0a225b8daaf95157.jpg'),
(355, 386, 'http://tools.cadeau-maestro.com/faulty/897a54d9400cbc7c8f6fbeda496989c0.jpg'),
(356, 387, 'http://tools.cadeau-maestro.com/faulty/b6fd5848c72e183009cf7e304dc78153.JPG'),
(358, 389, 'http://tools.cadeau-maestro.com/faulty/871b211e3efa44aba57589c318b824ac.jpeg'),
(359, 390, 'http://tools.cadeau-maestro.com/faulty/b54f884738727d9c4764187353bd4cc8.jpg'),
(360, 392, 'http://tools.cadeau-maestro.com/faulty/0caf0f2e76f0c131134b23e4cd889275.JPG'),
(361, 392, 'http://tools.cadeau-maestro.com/faulty/f5809422aff3dda8c09db86cc01347eb.JPG'),
(362, 393, 'http://tools.cadeau-maestro.com/faulty/4efca067891d58213db4c1f45594096f.JPG'),
(363, 393, 'http://tools.cadeau-maestro.com/faulty/56a35b9b3c2122a6cada77df93c26d0d.JPG'),
(364, 394, 'http://tools.cadeau-maestro.com/faulty/5ffd03ec04022dcc7ed42ef76cb6baa2.JPG'),
(365, 396, 'http://tools.cadeau-maestro.com/faulty/5b60d2dc403cbf6e4c2fdb0f6baf86a3.jpg'),
(366, 396, 'http://tools.cadeau-maestro.com/faulty/1b08c01a5ef17f02fa154c0248dca4cc.jpg'),
(367, 397, NULL),
(368, 398, 'http://tools.cadeau-maestro.com/faulty/03a064557db4ca5b17797438e43a1300.JPG'),
(369, 399, 'http://tools.cadeau-maestro.com/faulty/4e78bba5bdb9fa70a131c058338d0195.jpeg'),
(370, 400, 'http://tools.cadeau-maestro.com/faulty/fb5d52cc5f9c842a99f0b0451242e333.jpg'),
(371, 401, 'http://tools.cadeau-maestro.com/faulty/6bcccc32dd9a3a259b94d426b8542b4c.jpg'),
(372, 401, 'http://tools.cadeau-maestro.com/faulty/9290a791d00b6f659868a385a6bc5cf3.jpg'),
(373, 402, 'http://tools.cadeau-maestro.com/faulty/de7123b975edb61491089b7d2b0f80e3.jpg'),
(374, 403, 'http://tools.cadeau-maestro.com/faulty/367c14b7affb4369651b2eb2933161ef.jpg'),
(375, 404, 'http://tools.cadeau-maestro.com/faulty/fbc5e862652d997ae4afd054e2c9ca3a.png'),
(376, 405, 'http://tools.cadeau-maestro.com/faulty/e3db9922be2a118272e65c663c8ca303.jpg'),
(377, 406, 'http://tools.cadeau-maestro.com/faulty/bfb8c59ad05f626a3a35b2ecfaa2444e.jpg'),
(378, 407, 'http://tools.cadeau-maestro.com/faulty/65a6bf69d82499df4504ea1072f523a3.JPG'),
(379, 407, 'http://tools.cadeau-maestro.com/faulty/e67b4df2f8eb2557bcce231d2197bbae.JPG'),
(380, 407, 'http://tools.cadeau-maestro.com/faulty/f863bd6987129e09035621db5a9c58f8.JPG'),
(381, 408, 'http://tools.cadeau-maestro.com/faulty/96b7b9c26544958d72508ced5717f0fa.jpg'),
(382, 409, 'http://tools.cadeau-maestro.com/faulty/efa7e83bbcea2705aa0385595975b5b3.JPG'),
(383, 410, 'http://tools.cadeau-maestro.com/faulty/850016187537ede5eb3349baf08bbdc1.JPG'),
(384, 411, 'http://tools.cadeau-maestro.com/faulty/04185a042e1ddc4be3b355d598d97bdb.JPG'),
(385, 412, 'http://tools.cadeau-maestro.com/faulty/dfa2bdb8648d3a903a04b6785a1e7ceb.JPG'),
(386, 414, 'http://tools.cadeau-maestro.com/faulty/13f18fc32a449755a01604999331e0b3.jpg'),
(387, 415, 'http://tools.cadeau-maestro.com/faulty/c19c3294125798435294283ef48c3f37.jpg'),
(389, 417, 'http://tools.cadeau-maestro.com/faulty/4437ad65fa26d26da8b3282c2437c087.JPG'),
(390, 417, 'http://tools.cadeau-maestro.com/faulty/9ae401424dacc7e660e4dac8e1a702f1.JPG'),
(391, 418, 'http://tools.cadeau-maestro.com/faulty/5d36af0d017c5f578a19c75944527727.JPG'),
(392, 419, 'http://tools.cadeau-maestro.com/faulty/378694baae86ec44dd7463724b928f4c.jpg'),
(393, 421, 'http://tools.cadeau-maestro.com/faulty/0d90150dedbc78d8619d9e54583a1739.jpg'),
(396, 424, 'http://tools.cadeau-maestro.com/faulty/13eb5d03e688238b2e558a5e374d6a44.jpg'),
(397, 424, NULL),
(398, 425, 'http://tools.cadeau-maestro.com/faulty/f81e087e52f6cd5efadd6b4202832761.JPG'),
(400, 427, 'http://tools.cadeau-maestro.com/faulty/8ec27d97191cf64e85703cc4ebf21d56.JPG'),
(401, 428, NULL),
(403, 432, 'http://tools.cadeau-maestro.com/faulty/61673c737d55d4d40bcd47fb8066cb8e.jpg'),
(405, 436, 'http://tools.cadeau-maestro.com/faulty/2d209bd49f9b614851be37aacfcf55dc.jpg'),
(406, 439, 'http://tools.cadeau-maestro.com/faulty/bce22ab09a3d678fa725f50d97a3c64f.jpg'),
(407, 439, 'http://tools.cadeau-maestro.com/faulty/e16c4a9a1dab8829360e7518f62cb54a.jpg'),
(408, 440, 'http://tools.cadeau-maestro.com/faulty/e50b202b66781bc38d23d6a88c2e3ed1.jpg'),
(409, 441, 'http://tools.cadeau-maestro.com/faulty/12257905be75c24b0dc17e4cae345709.jpg'),
(410, 442, 'http://tools.cadeau-maestro.com/faulty/fecb464d8570310c13c746c8177327e5.JPG'),
(411, 442, 'http://tools.cadeau-maestro.com/faulty/5ac69efced721724ddeb79b26bf52c04.JPG'),
(412, 442, 'http://tools.cadeau-maestro.com/faulty/07a9290ac8261a5eea8a46652b8112f0.JPG'),
(413, 443, 'http://tools.cadeau-maestro.com/faulty/a74f7904678b2c5b488cef312c3ffec8.jpg'),
(414, 444, 'http://tools.cadeau-maestro.com/faulty/434b953bdb480ce3b5eb60116d5008f3.jpg'),
(415, 445, 'http://tools.cadeau-maestro.com/faulty/6268fd592715124d4a4f7921a8862da0.jpg'),
(416, 445, NULL),
(417, 446, 'http://tools.cadeau-maestro.com/faulty/a760e0d228480bfbb7fd4e52f0f2b46e.jpg'),
(418, 447, 'http://tools.cadeau-maestro.com/faulty/ed332561521d7ab3eea014d8e7fb44ae.jpg'),
(419, 448, 'http://tools.cadeau-maestro.com/faulty/d36ff46783050cfd3fd8d8dfc91a3fdd.jpg'),
(420, 449, 'http://tools.cadeau-maestro.com/faulty/6244d38125dd7f47cd18f7e7cf20fde8.jpg'),
(421, 450, 'http://tools.cadeau-maestro.com/faulty/9d37b38519ea3a7f8cb8f7b5c44d18b3.JPG'),
(422, 450, 'http://tools.cadeau-maestro.com/faulty/5748a2cb0c637dcda75b59431cc09604.JPG'),
(423, 451, 'http://tools.cadeau-maestro.com/faulty/1454c96f8933a22941e6897f24c542a9.jpg'),
(424, 451, 'http://tools.cadeau-maestro.com/faulty/8e18c4e7ba45610563cc357958e60d9a.jpg'),
(425, 452, 'http://tools.cadeau-maestro.com/faulty/a2f4819fbf69ee3f6f31a72a5849b2de.jpg'),
(426, 454, 'http://tools.cadeau-maestro.com/faulty/2c121bfe1841b8d381a13bb352fc9bbd.JPG'),
(429, 458, 'http://tools.cadeau-maestro.com/faulty/b327f4d2ca05fd17cc382eb9daf6e966.jpg'),
(430, 459, 'http://tools.cadeau-maestro.com/faulty/e61856480c947078742b87faa7ec6389.jpg'),
(431, 460, 'http://tools.cadeau-maestro.com/faulty/a6d8624e817b98d271bdeaed38f05459.jpg'),
(432, 461, 'http://tools.cadeau-maestro.com/faulty/0efd80c8238a1f9b3aebb373b1d195df.JPG'),
(433, 462, 'http://tools.cadeau-maestro.com/faulty/1ca1b80e38d318eb7a8552e152e3c51d.jpg'),
(434, 463, 'http://tools.cadeau-maestro.com/faulty/b9be261ef24b1ffbb98fc9fdfcb0856b.JPG'),
(435, 464, 'http://tools.cadeau-maestro.com/faulty/4131635d943b5766e187a0c626c06f92.jpg'),
(436, 465, 'http://tools.cadeau-maestro.com/faulty/d325c004162622cc91f001eab052f213.jpg'),
(437, 466, 'http://tools.cadeau-maestro.com/faulty/9f8f2060b436ae1f350a5a28beaecfdd.jpg'),
(438, 467, 'http://tools.cadeau-maestro.com/faulty/fea78c3b15b38d981f6a4a64d3e7f3a9.jpg'),
(439, 467, NULL),
(440, 468, 'http://tools.cadeau-maestro.com/faulty/ac15c5159525e7b912c3d06b310e003f.JPG'),
(441, 468, 'http://tools.cadeau-maestro.com/faulty/59cae6841e1043cf1a9be2b8362ef638.JPG'),
(442, 469, 'http://tools.cadeau-maestro.com/faulty/52104429cefe2242cee5d2943a14ea90.JPG'),
(444, 472, 'http://tools.cadeau-maestro.com/faulty/cf54d7e5b0897a91a4641abcb45478ec.jpg'),
(445, 473, 'http://tools.cadeau-maestro.com/faulty/90512e600e388d3997a49f17a29d3c5b.jpg'),
(446, 478, 'http://tools.cadeau-maestro.com/faulty/1d0e2fb2d30cb16526164906c799cd36.JPG'),
(447, 481, 'http://tools.cadeau-maestro.com/faulty/05cf24c57b6ebb56111c6f9ab7406a09.JPG'),
(448, 482, 'http://tools.cadeau-maestro.com/faulty/d2256b733d6b650670797db13a62e073.jpg'),
(449, 483, 'http://tools.cadeau-maestro.com/faulty/2b45923f519318c3d06e2fd61f74957e.jpg'),
(450, 484, 'http://tools.cadeau-maestro.com/faulty/59a8a1237200e04efa77fb809f70842d.jpg'),
(451, 485, 'http://tools.cadeau-maestro.com/faulty/8f07481f0278fe7991b98a1b68a2e370.jpg'),
(452, 486, 'http://tools.cadeau-maestro.com/faulty/9d4167f218fd1b8b2be9b3b375b376cb.jpg'),
(453, 486, 'http://tools.cadeau-maestro.com/faulty/711943dd62d6867d4e8022087031b8c8.jpg'),
(454, 487, 'http://tools.cadeau-maestro.com/faulty/edfb79066435e4369ccc85c0da1e3d26.JPG'),
(455, 487, 'http://tools.cadeau-maestro.com/faulty/4bca5bea804ab47548ac91850dab8d19.JPG'),
(456, 488, 'http://tools.cadeau-maestro.com/faulty/94df860cff0ef3d4880512e920675107.jpg'),
(457, 490, 'http://tools.cadeau-maestro.com/faulty/a10a7c9aa0924c0454787618c1837938.JPG'),
(458, 491, 'http://tools.cadeau-maestro.com/faulty/64366ad92abbdb9b1a7b77096999deb5.jpg'),
(459, 494, 'http://tools.cadeau-maestro.com/faulty/e789118e7c6d3c663bc7179663802cda.jpg'),
(460, 494, NULL),
(461, 495, 'http://tools.cadeau-maestro.com/faulty/fe60267b7776543a71e1c6451f036e48.jpg'),
(462, 496, 'http://tools.cadeau-maestro.com/faulty/80aed517188cc43e146ca221f331db12.jpg'),
(463, 496, 'http://tools.cadeau-maestro.com/faulty/3dffaa095ef10cec5802446a5ab7f942.jpg'),
(467, 499, 'http://tools.cadeau-maestro.com/faulty/2d28f571795c5ccb8b58119e880a1c21.jpg'),
(468, 499, 'http://tools.cadeau-maestro.com/faulty/028f1a9d6b08915496ea03d2228774b7.jpg'),
(469, 499, 'http://tools.cadeau-maestro.com/faulty/193b74a7717bad4f499d601be50e196b.jpg'),
(470, 500, 'http://tools.cadeau-maestro.com/faulty/7d196a2f65bf491153178cef988c01e3.JPG'),
(471, 500, 'http://tools.cadeau-maestro.com/faulty/abacb9848d6ce55a02df0b6e8123fa9b.JPG'),
(472, 502, 'http://tools.cadeau-maestro.com/faulty/a406c681f2fd98b33f57b94cbc3da4b2.jpg'),
(473, 503, 'http://tools.cadeau-maestro.com/faulty/cd3e3988f2988d0ec4261a7860aeebfb.JPG'),
(475, 505, NULL),
(476, 505, 'http://tools.cadeau-maestro.com/faulty/36a14b83a4d4464391ccca0c1d8fc7b2.jpg'),
(477, 506, 'http://tools.cadeau-maestro.com/faulty/367ae015a23ace97a0d4651da6a018bd.jpg'),
(478, 508, 'http://tools.cadeau-maestro.com/faulty/6ad36a1dfdf7d4516c0888e9cfc9d212.jpg'),
(479, 509, 'http://tools.cadeau-maestro.com/faulty/3a79c87e710eb6cc3493dee7fad93262.jpg'),
(480, 510, 'http://tools.cadeau-maestro.com/faulty/2cfd4fb7a6d55296985d072db2f62ea5.JPG'),
(483, 519, 'http://tools.cadeau-maestro.com/faulty/d2b59ecfa0b886f1102acb410225edfc.jpg'),
(485, 521, 'http://tools.cadeau-maestro.com/faulty/e6f46db5d14b0d31a0fcbafc0d18ede6.jpg'),
(486, 522, 'http://tools.cadeau-maestro.com/faulty/c8d6a3afcdbbe6b7d74ff8726c3a9b1c.jpg'),
(487, 523, 'http://tools.cadeau-maestro.com/faulty/10f6012f9d182e4b805a1955516bf487.jpg'),
(488, 524, 'http://tools.cadeau-maestro.com/faulty/fe5ab16776eb66930190a2ff2635c7dc.jpg'),
(489, 525, 'http://tools.cadeau-maestro.com/faulty/450b121663a1e7ae179cd1c31fceaa81.jpg'),
(490, 526, 'http://tools.cadeau-maestro.com/faulty/0a125e9cc976e76681a96f140baf8d6a.JPG'),
(491, 527, 'http://tools.cadeau-maestro.com/faulty/4c78da76eab43bb656f12df833c898c2.jpg'),
(492, 528, 'http://tools.cadeau-maestro.com/faulty/06182f867fa26434b2cd739c8e37a047.jpg'),
(497, 531, 'http://tools.cadeau-maestro.com/faulty/aec8aada1d4386b47b3a787173f48417.jpg'),
(498, 532, 'http://tools.cadeau-maestro.com/faulty/43f80e38b9ec533ad3cb4d2c35636fca.jpg'),
(499, 534, 'http://tools.cadeau-maestro.com/faulty/2623915745db41a03d059cba2cb4c580.jpg'),
(500, 535, 'http://tools.cadeau-maestro.com/faulty/6b865f8bd35323bb7d055c7e5ee2e4dc.jpg'),
(501, 536, 'http://tools.cadeau-maestro.com/faulty/72a7150fcda60e81ebfe6473579dac1c.jpg'),
(502, 537, 'http://tools.cadeau-maestro.com/faulty/9b9453dc2e055c1cf1d5c22afd55c668.jpg'),
(503, 538, 'http://tools.cadeau-maestro.com/faulty/6265dd6f8f39961c22debd0e9a330069.jpg'),
(504, 539, 'http://tools.cadeau-maestro.com/faulty/ce0e71ef3f2b116fff21053b3f0a8fe0.jpg'),
(506, 541, 'http://tools.cadeau-maestro.com/faulty/5843b23a18dc2a1d25a6901d39a892b1.jpg'),
(507, 542, 'http://tools.cadeau-maestro.com/faulty/21501400f0473dbb45405ba0af76c13a.jpg'),
(508, 546, 'http://tools.cadeau-maestro.com/faulty/c833be35a63cc0b7e67bedea12636d9b.JPG'),
(509, 546, 'http://tools.cadeau-maestro.com/faulty/ec03e829217f61a8c5a5cb0502176cf8.JPG'),
(510, 548, 'http://tools.cadeau-maestro.com/faulty/e0aae1e2fc222cf63d9eb92b550d3424.jpg'),
(511, 549, 'http://tools.cadeau-maestro.com/faulty/a741aeda34695a58b1363cecab97294f.jpg'),
(512, 550, 'http://tools.cadeau-maestro.com/faulty/edf7f04913a9f7d216f675351e06f2cc.jpg'),
(513, 552, 'http://tools.cadeau-maestro.com/faulty/e61adc8f4dca007d70ca6971a82df743.jpg'),
(514, 553, 'http://tools.cadeau-maestro.com/faulty/4972e70a9dde22dcd360549b822eb475.jpg'),
(515, 556, 'http://tools.cadeau-maestro.com/faulty/c82e97d914f6ab3a91db8423cda3aef5.jpg'),
(516, 555, 'http://tools.cadeau-maestro.com/faulty/4c94740f44faaf634b48cc553e3fcc76.jpg'),
(517, 555, 'http://tools.cadeau-maestro.com/faulty/fee877f04021ae3d512408f203b558ca.jpg'),
(518, 554, 'http://tools.cadeau-maestro.com/faulty/61498c6d7c6ac2c90f763d9bc4d1117b.jpg'),
(519, 558, 'http://tools.cadeau-maestro.com/faulty/b80624b8abe70953ae61b1b93204637c.jpg'),
(522, 561, 'http://tools.cadeau-maestro.com/faulty/e4fdc4afe9e233df18d12392f2f70ba1.jpg'),
(523, 562, 'http://tools.cadeau-maestro.com/faulty/5dd4aa7a3aaf200414e0179151dcec08.jpg'),
(524, 562, 'http://tools.cadeau-maestro.com/faulty/0971d3b26604d8a3f8fcb8c46f4deb68.jpg'),
(525, 563, 'http://tools.cadeau-maestro.com/faulty/339de0a59fc23412becba945136698fd.JPG'),
(526, 565, 'http://tools.cadeau-maestro.com/faulty/8ac32f50091d924abd1dd42f8661c6ca.jpg'),
(527, 566, 'http://tools.cadeau-maestro.com/faulty/819375af4982fe7f6d0aa1672aefa5be.jpg'),
(528, 568, 'http://tools.cadeau-maestro.com/faulty/a361b560a2eed54c8a5e322ece56ba9b.jpg'),
(529, 568, 'http://tools.cadeau-maestro.com/faulty/3713221a1f477960a9f8e06830337c6f.jpg'),
(530, 568, NULL),
(531, 569, NULL),
(532, 569, 'http://tools.cadeau-maestro.com/faulty/eb2f7eb90cabf5a8b0a1b9af1b709f46.jpg'),
(533, 570, 'http://tools.cadeau-maestro.com/faulty/7ad065aed221f774dccc8a4a9e6509ca.jpg'),
(534, 571, 'http://tools.cadeau-maestro.com/faulty/5111fc4f653f7581fc7ef1a7b99c03c1.jpg'),
(535, 571, 'http://tools.cadeau-maestro.com/faulty/28d1276528e7fc610562c6cbc20281b9.jpg'),
(536, 571, NULL),
(537, 573, 'http://tools.cadeau-maestro.com/faulty/2e5e96a4ceb23560836f100b347bc84f.jpg'),
(538, 574, 'http://tools.cadeau-maestro.com/faulty/a72e0355cd08557703cf142815f5cc6a.jpeg'),
(539, 574, 'http://tools.cadeau-maestro.com/faulty/4e9634fac04aa765922d5dccd501f3a8.jpeg'),
(540, 576, 'http://tools.cadeau-maestro.com/faulty/ff72d2056533880d0354021972af173d.jpg'),
(541, 577, 'http://tools.cadeau-maestro.com/faulty/db6a0430ed7b97f346caf3a7c4bf1771.jpg'),
(542, 578, 'http://tools.cadeau-maestro.com/faulty/b5480928bdcf410eba7d2caa66e27c1f.JPG'),
(543, 579, 'http://tools.cadeau-maestro.com/faulty/2abae9d75c8b788a2ca03740a1b2cd8f.JPG'),
(544, 579, 'http://tools.cadeau-maestro.com/faulty/6d03e0ce43eff810c41fe269a74b8204.JPG'),
(545, 580, 'http://tools.cadeau-maestro.com/faulty/2a8533ceb18c1ccce950344e2e519b1d.JPG'),
(546, 581, 'http://tools.cadeau-maestro.com/faulty/ad9373a40bd853595c2571d4fb90b05a.JPG'),
(549, 584, NULL),
(550, 585, 'http://tools.cadeau-maestro.com/faulty/3daceb0e140128bf6ed88a1d9c622048.jpg'),
(551, 587, 'http://tools.cadeau-maestro.com/faulty/983a699c5e385dad35fea11fb0ec1b0c.jpg'),
(552, 589, 'http://tools.cadeau-maestro.com/faulty/469f657e0ca97b0c45f294d15a3a7181.jpg'),
(553, 590, 'http://tools.cadeau-maestro.com/faulty/b5032622117a8436991a85fc7e5dbdf7.jpg'),
(554, 591, 'http://tools.cadeau-maestro.com/faulty/3ade464808ce8582dfb5e3a00ac011fb.jpg'),
(555, 592, 'http://tools.cadeau-maestro.com/faulty/254aa4a9f9980085d7d4a2ba619d568e.jpg'),
(556, 597, 'http://tools.cadeau-maestro.com/faulty/3c4f529207c28ca2e2cf20755dfd3f99.JPG'),
(557, 597, 'http://tools.cadeau-maestro.com/faulty/7a4ee47fd361d143d5464447ad431783.JPG'),
(558, 597, 'http://tools.cadeau-maestro.com/faulty/38aa7898aecf0c52b6d6013064276799.JPG'),
(559, 598, 'http://tools.cadeau-maestro.com/faulty/84bab33c5c48968bdddb5aed7798f8b0.JPG'),
(560, 599, 'http://tools.cadeau-maestro.com/faulty/944153a72054d4f2acdcb6009325e98c.jpg'),
(561, 599, 'http://tools.cadeau-maestro.com/faulty/974df5a1cf97dbe4721a62de26dc0109.jpg'),
(562, 599, 'http://tools.cadeau-maestro.com/faulty/ef6bc3973be38a9df1547bd7d18a2bb2.jpg'),
(563, 600, 'http://tools.cadeau-maestro.com/faulty/cf8d589cae649fa8c59afce5181b591f.JPG'),
(564, 602, 'http://tools.cadeau-maestro.com/faulty/bff6ccade98e37649748c3dea64bf0e0.jpg'),
(565, 603, 'http://tools.cadeau-maestro.com/faulty/f7593db6d2afc7756f4cd8eff7ebcbe1.jpg'),
(566, 604, 'http://tools.cadeau-maestro.com/faulty/faf36a1997155f9b49d87f070b769d09.jpg'),
(569, 606, 'http://tools.cadeau-maestro.com/faulty/dac2d145636319ac58eadcfcc5171162.jpg'),
(570, 606, 'http://tools.cadeau-maestro.com/faulty/54bcf3026ba532f5ac0def3b80460d98.jpg'),
(571, 607, 'http://tools.cadeau-maestro.com/faulty/c25e11592b2b61ecb15de88903fa1c45.JPG'),
(572, 607, 'http://tools.cadeau-maestro.com/faulty/a1b0b727f7268fb751b377775aad7da4.JPG'),
(573, 608, 'http://tools.cadeau-maestro.com/faulty/f8cff02f78aea216b32d4dd7d15afb02.JPG'),
(574, 608, 'http://tools.cadeau-maestro.com/faulty/40b55e26c790df0f6920266f039bf3bb.JPG'),
(575, 608, 'http://tools.cadeau-maestro.com/faulty/7db72c86ee3e5025aeacee716f99a161.JPG'),
(577, 612, 'http://tools.cadeau-maestro.com/faulty/7ee69c6e0c5da3c618e4ad3fb696b377.jpg'),
(578, 613, 'http://tools.cadeau-maestro.com/faulty/c792b450decb947ff22b1e1354282970.jpg'),
(579, 614, 'http://tools.cadeau-maestro.com/faulty/073e4ecf532c7b19132ecccb8aa92f79.JPG'),
(580, 614, 'http://tools.cadeau-maestro.com/faulty/3f7c1620826ba970edf20d550f717e05.JPG'),
(581, 615, 'http://tools.cadeau-maestro.com/faulty/d04799b6dc5e9c661eeef8a6a4ee07d0.jpg'),
(582, 618, 'http://tools.cadeau-maestro.com/faulty/da5631c81c0bf90bd70d90eb595256e6.jpeg'),
(583, 619, 'http://tools.cadeau-maestro.com/faulty/46e18dfa0ff47ebc20871b2009752d93.png'),
(584, 621, 'http://tools.cadeau-maestro.com/faulty/0292589aa93daf9ecf94f4cf71de755f.jpg'),
(585, 622, 'http://tools.cadeau-maestro.com/faulty/adfc9d369bc6dd929bc3324e68a26d60.jpg'),
(586, 623, 'http://tools.cadeau-maestro.com/faulty/8d0d615ec46c804e6ff638313333c590.jpg'),
(587, 623, 'http://tools.cadeau-maestro.com/faulty/38ddcc91b17069f7127f7e1b4537ffe9.jpg'),
(588, 624, 'http://tools.cadeau-maestro.com/faulty/6ac503c5b8ebfde8f88622d4f5a55b6f.JPG'),
(589, 625, 'http://tools.cadeau-maestro.com/faulty/773e70cf21c1284dfbb812994e9e791a.jpg'),
(590, 626, 'http://tools.cadeau-maestro.com/faulty/b5f661180b08e79bb30092b14d9bc025.jpg'),
(591, 627, 'http://tools.cadeau-maestro.com/faulty/7c059dafe10417ebe5006d0e7a7b7097.jpg'),
(592, 627, 'http://tools.cadeau-maestro.com/faulty/5e0459ca9b98702acba5344b38f2434c.jpg'),
(593, 629, 'http://tools.cadeau-maestro.com/faulty/3cc7008918012de44bcc7ac8f08ac86c.JPG'),
(594, 630, 'http://tools.cadeau-maestro.com/faulty/f95ffae93c45161e28f6e1c6c413ba38.jpg'),
(595, 630, NULL),
(596, 631, 'http://tools.cadeau-maestro.com/faulty/0ca717da38ea26caa9e08eafbb950f09.jpg'),
(597, 636, 'http://tools.cadeau-maestro.com/faulty/8ec46279ce2235a6a344f1bfc1dab682.jpg'),
(598, 638, 'http://tools.cadeau-maestro.com/faulty/dd0fef11e59f8abf07912aec1d702a88.jpg'),
(599, 639, 'http://tools.cadeau-maestro.com/faulty/acae498192f504ba313cea803a32d0e4.JPG'),
(600, 640, NULL),
(601, 641, 'http://tools.cadeau-maestro.com/faulty/53f5c7b97a7cda49fb7681a9d6a30fa0.jpg'),
(602, 643, 'http://tools.cadeau-maestro.com/faulty/fbcb77fcba006e52d8e9640f0cfcc0e6.JPG'),
(603, 644, 'http://tools.cadeau-maestro.com/faulty/d1e4b528cb52b75b0dd0cef39ce9d116.JPG'),
(608, 647, 'http://tools.cadeau-maestro.com/faulty/2494b480fbf520e539c50459711edba3.JPG'),
(609, 647, 'http://tools.cadeau-maestro.com/faulty/4eff9b71b87b2523847e92e997e83c8a.jpg'),
(610, 649, 'http://tools.cadeau-maestro.com/faulty/2f00a24128f997fa46d0373a76c76b4a.jpg'),
(611, 650, 'http://tools.cadeau-maestro.com/faulty/0e686632d76288a1f461f23d3cbb26d6.JPG'),
(612, 650, NULL),
(613, 651, 'http://tools.cadeau-maestro.com/faulty/7a4ca1f4cea4c8e03e3cbee4957a226f.JPG'),
(614, 652, 'http://tools.cadeau-maestro.com/faulty/f3791fd2b1b65db595f2d1f592146d5a.jpg'),
(615, 653, 'http://tools.cadeau-maestro.com/faulty/fafdf783cc96b4d8e9f92cff09edf26d.jpg'),
(616, 653, 'http://tools.cadeau-maestro.com/faulty/763e883e4831d45a35dafe366f79ce2e.jpg'),
(617, 653, 'http://tools.cadeau-maestro.com/faulty/983c7ee919a320772f904abeeae2ef6b.jpg'),
(618, 654, 'http://tools.cadeau-maestro.com/faulty/5422c84c2334509709c44db54285769a.JPG'),
(619, 655, 'http://tools.cadeau-maestro.com/faulty/106382ea94fffe774c55702e26bf5c6a.jpg'),
(620, 656, 'http://tools.cadeau-maestro.com/faulty/8d74042ed8cbccef2a15a54a3e5f5d21.jpg'),
(621, 658, 'http://tools.cadeau-maestro.com/faulty/03dceb0d03ba365be25e3ca772d24006.jpg'),
(622, 658, 'http://tools.cadeau-maestro.com/faulty/8a92242e4e9c6e85be803c3afe094f22.jpg'),
(623, 661, 'http://tools.cadeau-maestro.com/faulty/719f2da67d8fcb7cf345e8431ca1dd87.JPG'),
(624, 661, 'http://tools.cadeau-maestro.com/faulty/18f0dfbdc4167741c8880f1dedcd29ac.JPG'),
(625, 664, 'http://tools.cadeau-maestro.com/faulty/b5e13a3731793839b7c57ed9f69ae3f1.jpg'),
(626, 665, 'http://tools.cadeau-maestro.com/faulty/cc372972962a803f59c2337e316b40c5.jpg'),
(627, 666, 'http://tools.cadeau-maestro.com/faulty/35473bb784020f4a834abfdb1c0b5ef8.jpeg'),
(628, 666, 'http://tools.cadeau-maestro.com/faulty/884e0be04b1472a22574512114b65e58.jpeg'),
(629, 667, 'http://tools.cadeau-maestro.com/faulty/59fb82df66d7f0360b702a1980782518.JPG'),
(630, 667, 'http://tools.cadeau-maestro.com/faulty/9c19522aaf333438f8212df507f5a617.JPG'),
(631, 667, 'http://tools.cadeau-maestro.com/faulty/18433685558580f21533da41d78f6724.JPG'),
(632, 669, 'http://tools.cadeau-maestro.com/faulty/7074b703927b6809f8fbb6348e984827.JPG'),
(634, 672, 'http://tools.cadeau-maestro.com/faulty/a364cd81b0029737acc226eb8f57e9d7.jpg'),
(635, 674, 'http://tools.cadeau-maestro.com/faulty/4a85be5b2a2f7b33a7832e0840ef201e.jpg'),
(636, 675, 'http://tools.cadeau-maestro.com/faulty/b0de23d2dfdc33b41bd54ce05ccca377.jpg'),
(637, 676, 'http://tools.cadeau-maestro.com/faulty/337a1e026e1a87144793b4c363339ccc.jpg'),
(638, 677, 'http://tools.cadeau-maestro.com/faulty/513797d80c07175b7507a7566952ad09.jpg'),
(639, 678, 'http://tools.cadeau-maestro.com/faulty/074061a07fb28fffb9ca8443598fba67.jpg'),
(640, 680, 'http://tools.cadeau-maestro.com/faulty/fdd31cd9a53204d0a6087711849e31d0.JPG');
INSERT INTO `faulty_product_image` (`id`, `product_id`, `picture`) VALUES
(641, 682, 'http://tools.cadeau-maestro.com/faulty/14adeccaf1e35a98472d8d299ef01c84.jpg'),
(642, 683, 'http://tools.cadeau-maestro.com/faulty/8dfc3186417ac2e9379d4139609c1402.jpg'),
(643, 683, 'http://tools.cadeau-maestro.com/faulty/cd686c733ac446bfefa7cee34b7bcb4e.jpg'),
(644, 684, NULL),
(645, 686, 'http://tools.cadeau-maestro.com/faulty/5bbe3ea4613cb24b5ca8df97eee3fad4.jpg'),
(646, 688, 'http://tools.cadeau-maestro.com/faulty/663ee4264023c097ab884791303e15ae.jpg'),
(647, 690, 'http://tools.cadeau-maestro.com/faulty/9f108b07d85e0bfc18c194f5733c6bbe.jpg'),
(648, 692, NULL),
(649, 692, 'http://tools.cadeau-maestro.com/faulty/b1ad380b640cf2ad1f01ff485668bf1e.JPG'),
(651, 695, 'http://tools.cadeau-maestro.com/faulty/2d2d2570603c396cb057ed7d324c3101.jpg'),
(652, 698, 'http://tools.cadeau-maestro.com/faulty/e3506d1b52328fd98673fc6791792352.jpg'),
(655, 701, 'http://tools.cadeau-maestro.com/faulty/aac44a5284b1b8f775999deefecdfd14.jpg'),
(656, 701, 'http://tools.cadeau-maestro.com/faulty/7834af48fa737a64602f42fd49ca0287.jpg'),
(657, 701, 'http://tools.cadeau-maestro.com/faulty/1abbfc2d81c23225a6c23ee9624b7460.jpg'),
(658, 703, 'http://tools.cadeau-maestro.com/faulty/3fe9700e6ff679913a8ac9aab1bd2c49.jpg'),
(659, 705, 'http://tools.cadeau-maestro.com/faulty/198b9481202afb4d8eb6bcc1ebee671f.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `faulty_product_supplier`
--

CREATE TABLE IF NOT EXISTS `faulty_product_supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_prestashop_supplier` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `faulty_product_supplier`
--

INSERT INTO `faulty_product_supplier` (`id`, `name`, `id_prestashop_supplier`) VALUES
(2, 'Satzuma', 56),
(3, 'Tassen', 78),
(5, 'Paladone', 77),
(6, 'Kikkerland', 151),
(7, 'OOTB', 65),
(8, 'Fascinations', 43),
(9, 'Snail', 252),
(10, 'MT & Co', 49),
(12, 'ALPA', 16),
(13, 'Radis et Capucine', 248),
(14, 'Rex', 176),
(15, 'Fizz', 228),
(16, 'Passot', 241),
(17, 'Temerity Jones', 238),
(18, 'Donkey Products', 167),
(19, 'Mags Vertrieb', 161),
(28, 'Bergers', 165),
(30, 'Boxer', 59),
(34, 'Tobar', 48),
(35, 'Sun Chine', 29),
(36, 'Quai Sud', 25),
(37, 'Art Lebdev', 110),
(38, 'Spice Love', 34),
(39, 'Editor', 86),
(40, 'AIC International', 175),
(41, 'Incidence', 211),
(42, 'Funtime', 156),
(43, 'NPW', 64),
(44, 'Hacche', 221),
(45, 'Tasty', 247),
(46, 'Thumbs Up', 22),
(48, 'Molécule-R', 170),
(50, 'Eropartner', 47),
(51, 'The Source', 53),
(52, 'Suck UK', 162),
(53, 'Oliphant', 7),
(54, 'Arbre Vert', 240),
(55, 'MagneticLand', 102),
(56, 'Addcore', 230),
(57, 'Asmodée', 14),
(58, 'Bijoux Indiscrets', 30),
(59, 'Bobino', 173),
(60, 'Cadès', 235),
(61, '0', NULL),
(62, 'Cortina', 90),
(63, 'Creative 7', 69),
(64, 'Fin de vie', 147),
(65, 'Stempels', 72),
(66, 'Jellycat', 196),
(67, 'Le Comptoir de Mathilde', 181),
(68, 'Addex', 174),
(69, 'Mathmos', 15),
(70, 'MikaMax', 237),
(71, 'The Monster Factory', 146),
(72, 'MTM', 10),
(73, 'Mustard', 55),
(74, 'OMY', 184),
(75, 'Ryon', 37),
(76, 'SIL', 239),
(77, 'Tiamamy', 130),
(78, 'Vivre Bio', 36),
(79, 'Wild And Wolf', 28),
(80, 'Original Products', 122),
(81, 'PO Design', 79),
(82, 'AOC', 188),
(83, 'Vinolem', 225),
(84, 'Gift House International', 5),
(85, 'Class Déco', 177),
(86, 'Woouf', 100),
(87, 'DAM', 246),
(88, 'Eclectic', 190),
(89, 'Yello Koko', 234),
(90, 'XD Design', 172),
(91, 'Dutch Mini Garden', 41),
(92, 'Channel Distribution', 63),
(93, 'Cadeau Maestro', 155),
(94, 'Le monde en tube', 107),
(95, 'Mr and Mrs', 164),
(96, 'DOIY', 169),
(97, 'Invotis', 232),
(98, 'Ozze', 152),
(99, 'Noted UK', 82),
(100, 'Artecom', 93),
(101, 'Lovely Planet', 9),
(102, 'Lovelanders', 212),
(103, 'MOVA', 199),
(104, 'Winy Bar', 144),
(105, 'Bitten', 266),
(106, 'Big Mouth', 227),
(107, 'Rocket', 197),
(108, 'Luckies', 17),
(109, 'Forme', 253),
(110, 'Marabout', 214),
(111, 'Mr Wonderful', 262),
(112, 'Sass & Belle', 261),
(113, 'Daily Life Lab', 145),
(114, 'Rigolobo', 198),
(115, 'Art Grafik', 265),
(116, 'Sky Lantern', 149),
(117, 'Balvi', 4),
(118, 'BA Innovations', 135),
(119, 'Customized Drinks', 249),
(120, 'Feel Green', 255),
(121, 'Dans sa tête', 115),
(122, 'Men''s society', 200),
(123, 'Opjet', 271),
(124, 'UGears', 267);

-- --------------------------------------------------------

--
-- Structure de la table `model_newsletter`
--

CREATE TABLE IF NOT EXISTS `model_newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path_css` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `model_newsletter`
--

INSERT INTO `model_newsletter` (`id`, `name`, `path`, `path_css`) VALUES
(1, 'Base 2016', '@Marketing/inky/newsletter.model.html', '/home/cadeau-maestro/tools/src/MarketingBundle/Entity/../Resources/public/css/inky//test.css'),
(2, '[PRESSE] Base 2016', '@Marketing/inky/presse.model.html', '/home/cadeau-maestro/tools/src/MarketingBundle/Entity/../Resources/public/css/inky//test.css');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL,
  `model_newsletter_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `model_newsletter_id`, `title`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'Découvrez nos meilleures idées cadeaux du moment', '2016-10-28 09:12:31', '2016-10-28 09:12:30'),
(2, 1, 'Noel-1', '2016-11-04 11:43:14', '2016-11-04 11:43:14'),
(3, 1, '20 pourcent reduction', '2016-11-09 11:19:50', '2016-11-09 11:19:50'),
(4, 1, '20 poucent reduc 2', '2016-11-10 14:51:07', '2016-11-10 14:51:07'),
(6, 2, 'Communiqué de presse deco noel', '2016-11-15 15:15:55', '2016-11-15 15:15:55'),
(7, 2, 'Communiqué de presse deco noel ok', '2016-11-15 15:54:36', '2016-11-15 15:54:36'),
(9, 2, 'Communiqué de presse noel 1', '2016-11-15 16:25:52', '2016-11-15 16:25:52'),
(10, 1, 'Semaine 46', '2016-11-18 14:24:22', '2016-11-18 14:24:22'),
(11, 2, 'Communiqué de presse noel 2', '2016-11-18 16:28:24', '2016-11-18 16:28:24'),
(12, 2, 'CP Noël Femme', '2016-11-22 11:13:50', '2016-11-22 11:13:50'),
(13, 2, 'CP Noël geek', '2016-11-22 14:34:15', '2016-11-22 14:34:15'),
(15, 2, 'CP Noël hitech Cher', '2016-11-22 15:25:58', '2016-11-22 15:25:58'),
(16, 2, 'CP Noel pas cher', '2016-11-23 15:31:53', '2016-11-23 15:31:53'),
(17, 2, 'CP Noel Deco', '2016-11-24 14:27:33', '2016-11-24 14:27:33'),
(27, 2, 'Cp Noel gourmet', '2016-11-29 15:27:54', '2016-11-29 15:27:54'),
(32, 1, 'Calendrier 1', '2016-12-01 13:44:02', '2016-12-01 13:44:02'),
(33, 2, 'CP mode', '2016-12-01 15:27:52', '2016-12-01 15:27:52'),
(34, 2, 'Cp Mardi Gras', '2016-12-02 11:40:33', '2016-12-02 11:40:33'),
(35, 1, 'noel 1', '2016-12-02 12:17:35', '2016-12-02 12:17:34'),
(36, 1, 'Capital', '2016-12-05 09:49:56', '2016-12-05 09:49:56'),
(37, 1, 'noel 2', '2016-12-07 17:38:39', '2016-12-07 17:38:39'),
(38, 1, 'noel 3 hommes', '2016-12-09 17:17:32', '2016-12-09 17:17:32'),
(39, 2, 'cp agriculteur', '2016-12-12 11:53:03', '2016-12-12 11:53:03'),
(40, 2, 'CP noel', '2016-12-13 16:34:46', '2016-12-13 16:34:46'),
(41, 1, 'noel enfant', '2016-12-13 17:55:33', '2016-12-13 17:55:33'),
(42, 2, 'cp etudiant', '2016-12-14 11:54:39', '2016-12-14 11:54:39'),
(43, 1, 'noel 4', '2016-12-16 17:02:46', '2016-12-16 17:02:46'),
(44, 1, 'noel5', '2016-12-20 12:57:54', '2016-12-20 12:57:54'),
(45, 1, 'cadeau assiette', '2016-12-28 09:10:22', '2016-12-28 09:10:21'),
(46, 1, 'Semaine 1 2017', '2016-12-30 16:25:27', '2016-12-30 16:25:27'),
(47, 1, 'Semaine 2 2017', '2017-01-13 14:09:08', '2017-01-13 14:09:08'),
(48, 1, 'boutique event', '2017-01-17 16:43:05', '2017-01-17 16:43:05'),
(53, 2, 'Communiqué Saint Valentin', '2017-01-24 14:05:23', '2017-01-24 14:05:22'),
(54, 1, 'Saint Valentin 1', '2017-01-26 16:49:09', '2017-01-26 16:49:09'),
(55, 2, 'cp st valentin 2', '2017-01-27 12:19:18', '2017-01-27 12:19:18'),
(56, 2, 'Cp pâques', '2017-02-02 14:37:13', '2017-02-02 14:37:12'),
(57, 2, 'Saint Valentin 2', '2017-02-06 12:19:33', '2017-02-06 12:19:33'),
(58, 1, 'Saint Valentin 3', '2017-02-09 16:13:43', '2017-02-09 16:13:43'),
(59, 1, 'Dernières nouveautés', '2017-02-17 16:42:26', '2017-02-17 16:42:26'),
(60, 2, 'fete grands meres', '2017-02-24 13:48:07', '2017-02-24 13:48:07'),
(61, 1, 'fete grands meres 2', '2017-02-28 17:34:05', '2017-02-28 17:34:05'),
(62, 1, 'St Patrick', '2017-03-10 10:10:25', '2017-03-10 10:10:24'),
(63, 1, 'printemps', '2017-03-20 14:46:20', '2017-03-20 14:46:20'),
(64, 1, 'paques 2017', '2017-03-30 16:23:56', '2017-03-30 16:23:56'),
(65, 1, 'paques 2017 - 2', '2017-04-11 17:22:53', '2017-04-11 17:22:52'),
(66, 1, 'meilleures ventes', '2017-04-20 15:17:58', '2017-04-20 15:17:58'),
(67, 1, 'fete-meres-1', '2017-04-28 15:24:42', '2017-04-28 15:24:42'),
(68, 1, 'CP fete des mères', '2017-05-09 11:43:40', '2017-05-09 11:43:40'),
(69, 1, 'fete-meres-2', '2017-05-15 12:36:16', '2017-05-15 12:36:16'),
(70, 1, 'fete-meres-3', '2017-05-19 16:58:22', '2017-05-19 16:58:22'),
(71, 1, 'fete-peres-2', '2017-06-02 16:35:09', '2017-06-02 16:35:09'),
(72, 1, 'fete-peres-3', '2017-06-13 15:53:49', '2017-06-13 15:53:48'),
(73, 1, 'canicule', '2017-06-22 10:15:20', '2017-06-22 10:15:20'),
(74, 1, 'soldes', '2017-06-30 16:46:39', '2017-06-30 16:46:39');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_block`
--

CREATE TABLE IF NOT EXISTS `newsletter_block` (
  `id` int(11) NOT NULL,
  `newsletter_block_type_id` int(11) DEFAULT NULL,
  `newsletter_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `css_title` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter_block`
--

INSERT INTO `newsletter_block` (`id`, `newsletter_block_type_id`, `newsletter_id`, `title`, `css_title`) VALUES
(1, 1, 1, 'Notre sélection du moment', ''),
(2, 2, 1, NULL, ''),
(3, 1, 1, NULL, ''),
(4, 2, 1, 'Nos Promotions Du Moment', 'orange'),
(5, 1, 2, 'Notre sélection du moment', ''),
(6, 2, 2, NULL, ''),
(7, 2, 2, NULL, ''),
(8, 2, 2, 'Nos promotions du moment', ''),
(9, 1, 3, 'Notre sélection du moment', 'orange'),
(10, 2, 3, NULL, 'orange'),
(11, 2, 3, NULL, 'orange'),
(12, 1, 4, NULL, ''),
(13, 2, 4, NULL, 'orange'),
(14, 2, 4, NULL, 'orange'),
(18, 1, 6, 'Notre sélection de Noël', ''),
(19, 2, 6, NULL, ''),
(20, 2, 6, NULL, ''),
(21, 2, 6, NULL, ''),
(22, 1, 7, 'Notre sélection de Noël', ''),
(23, 2, 7, NULL, ''),
(24, 2, 7, NULL, ''),
(26, 1, 9, 'Notre sélection du moment', ''),
(27, 2, 9, NULL, 'orange'),
(28, 2, 9, NULL, ''),
(29, 1, 10, 'Notre sélection du moment', ''),
(30, 2, 10, NULL, 'orange'),
(31, 2, 10, NULL, ''),
(32, 2, 10, 'Nos promotions du moment', 'orange'),
(33, 1, 11, 'Notre sélection du moment', ''),
(34, 2, 11, NULL, ''),
(35, 2, 11, NULL, ''),
(36, 1, 12, 'Notre sélection du moment', ''),
(37, 2, 12, NULL, ''),
(38, 2, 12, NULL, ''),
(39, 1, 13, 'Notre sélection du moment', ''),
(40, 2, 13, NULL, ''),
(41, 2, 13, NULL, ''),
(46, 1, 15, 'Notre sélection du moment', ''),
(47, 2, 15, NULL, ''),
(48, 2, 15, NULL, ''),
(49, 1, 16, 'Notre sélection du moment', ''),
(50, 2, 16, NULL, ''),
(51, 2, 16, NULL, ''),
(52, 1, 17, 'Notre sélection du moment', ''),
(53, 2, 17, NULL, ''),
(54, 2, 17, NULL, ''),
(89, 1, 27, 'Notre sélection du moment', ''),
(90, 2, 27, NULL, ''),
(91, 2, 27, NULL, ''),
(100, 1, 32, NULL, 'orange'),
(101, 1, 33, 'Notre sélection du moment', ''),
(102, 2, 33, NULL, ''),
(103, 2, 33, NULL, ''),
(104, 1, 34, 'Notre sélection du moment', ''),
(105, 2, 34, NULL, ''),
(106, 2, 34, NULL, ''),
(107, 2, 35, 'Pour femme', ''),
(108, 2, 35, 'Pour homme', ''),
(109, 2, 35, 'Pour enfant', ''),
(110, 2, 35, 'Nos promotions du moment', 'orange'),
(111, 1, 36, 'Notre sélection du moment', ''),
(112, 2, 36, NULL, ''),
(113, 2, 36, NULL, ''),
(114, 2, 36, 'Nos promotions du moment', 'red'),
(115, 1, 37, 'Notre sélection du moment', ''),
(116, 2, 37, NULL, ''),
(117, 2, 37, NULL, ''),
(118, 2, 37, 'Nos promotions du moment', 'orange'),
(119, 1, 38, 'Notre sélection du moment', ''),
(120, 2, 38, NULL, ''),
(121, 2, 38, NULL, ''),
(122, 2, 38, 'Nos promotions du moment', 'orange'),
(123, 1, 39, 'Notre sélection de Noël', ''),
(124, 2, 39, NULL, ''),
(125, 2, 39, NULL, ''),
(126, 1, 40, 'Notre sélection du moment', ''),
(127, 2, 40, NULL, ''),
(128, 2, 40, NULL, ''),
(129, 1, 41, 'Notre sélection du moment', ''),
(130, 1, 41, 'Nos Promotions Du Moment', 'orange'),
(131, 2, 41, NULL, ''),
(132, 2, 41, NULL, ''),
(133, 2, 41, 'Nos Promotions de Noël', 'orange'),
(134, 1, 42, 'Notre sélection du moment', ''),
(135, 2, 42, NULL, ''),
(136, 2, 42, NULL, ''),
(137, 1, 43, 'Notre sélection du moment', ''),
(138, 2, 43, NULL, ''),
(139, 2, 43, NULL, ''),
(140, 2, 43, 'Nos promotions du moment', 'orange'),
(141, 1, 44, 'Notre sélection du moment', ''),
(142, 2, 44, NULL, ''),
(143, 2, 44, NULL, ''),
(144, 2, 44, 'Nos promotions du moment', 'orange'),
(145, 1, 45, 'Notre sélection du moment', ''),
(146, 2, 45, NULL, 'orange'),
(147, 2, 45, NULL, ''),
(148, 2, 45, 'Nos promotions du moment', ''),
(149, 1, 46, 'Notre sélection du moment', ''),
(150, 2, 46, NULL, ''),
(151, 2, 46, NULL, ''),
(152, 2, 46, 'Mes Bonnes Résolutions', ''),
(153, 1, 47, 'Notre sélection du moment', ''),
(154, 2, 47, NULL, ''),
(155, 2, 47, NULL, ''),
(156, 2, 47, 'Nos promotions du moment', 'orange'),
(157, 1, 48, 'Mercredi et Samedi', ''),
(174, 1, 53, 'Notre sélection du moment', ''),
(175, 1, 53, 'Nos Promotions Du Moment', 'orange'),
(176, 2, 53, NULL, ''),
(177, 2, 53, NULL, ''),
(178, 2, 54, 'Notre sélection pour lui', ''),
(179, 2, 54, 'Nos sélection pour elle', ''),
(180, 2, 54, 'A moins de 10 euros', ''),
(181, 2, 55, 'Notre sélection pour elle', ''),
(182, 2, 55, NULL, ''),
(183, 2, 55, 'Notre sélection pour lui', ''),
(184, 2, 55, NULL, ''),
(185, 1, 56, 'Notre sélection du moment', ''),
(186, 2, 56, NULL, ''),
(187, 2, 56, NULL, ''),
(188, 2, 57, 'A moins de 20€ pour elle', ''),
(189, 2, 57, NULL, ''),
(190, 2, 57, 'A moins de 20€ pour lui', ''),
(191, 2, 57, NULL, ''),
(192, 1, 58, 'Notre sélection du moment', ''),
(193, 2, 58, NULL, ''),
(194, 2, 58, NULL, ''),
(195, 1, 59, 'Notre sélection du moment', ''),
(196, 2, 59, NULL, 'orange'),
(197, 2, 59, NULL, ''),
(198, 1, 60, 'Notre sélection du moment', ''),
(199, 2, 60, NULL, ''),
(200, 2, 60, NULL, ''),
(201, 2, 60, 'Nos promotions du moment', ''),
(202, 1, 61, 'Notre sélection du moment', ''),
(203, 2, 61, NULL, 'orange'),
(204, 2, 61, NULL, ''),
(205, 1, 62, 'Notre sélection du moment', ''),
(206, 2, 62, NULL, 'orange'),
(207, 2, 62, NULL, ''),
(208, 2, 62, 'Nos promotions du moment', 'orange'),
(209, 1, 63, 'Notre sélection du moment', ''),
(210, 2, 63, NULL, ''),
(211, 2, 63, NULL, ''),
(212, 1, 64, 'Notre sélection du moment', ''),
(213, 2, 64, NULL, ''),
(214, 2, 64, NULL, ''),
(215, 1, 65, 'Notre sélection du moment', ''),
(216, 2, 65, NULL, ''),
(217, 2, 65, NULL, ''),
(218, 1, 66, 'Nos meilleures ventes du moment', ''),
(219, 2, 66, NULL, ''),
(220, 2, 66, NULL, ''),
(221, 2, 66, 'Nos promotions du moment', 'orange'),
(222, 1, 67, 'Notre sélection du moment', ''),
(223, 2, 67, NULL, ''),
(224, 2, 67, NULL, ''),
(225, 2, 67, 'Nos promotions du moment', 'orange'),
(226, 1, 68, 'Juste pour ma maman', ''),
(227, 2, 68, NULL, ''),
(228, 2, 68, NULL, ''),
(229, 1, 69, 'Notre sélection du moment', ''),
(230, 2, 69, NULL, ''),
(231, 2, 69, NULL, ''),
(232, 2, 69, 'Nos Promotions', 'orange'),
(233, 1, 70, 'Notre sélection du moment', ''),
(234, 2, 70, NULL, ''),
(235, 1, 70, NULL, ''),
(236, 1, 71, NULL, ''),
(237, 2, 71, NULL, ''),
(238, 2, 71, 'Nos Promotions', 'orange'),
(239, 2, 71, 'Nos Promotions', 'orange'),
(240, 1, 72, 'Notre sélection du moment', ''),
(241, 2, 72, NULL, ''),
(242, 2, 72, NULL, ''),
(243, 2, 72, NULL, 'orange'),
(244, 1, 73, 'Notre sélection du moment', ''),
(245, 2, 73, NULL, ''),
(246, 2, 73, NULL, ''),
(247, 2, 73, 'Nos Promotions', 'orange'),
(248, 1, 74, 'Notre sélection du moment', 'orange'),
(249, 2, 74, 'Encore plus de soldes', 'orange'),
(250, 2, 74, NULL, 'orange');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_block_type`
--

CREATE TABLE IF NOT EXISTS `newsletter_block_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter_block_type`
--

INSERT INTO `newsletter_block_type` (`id`, `name`, `path`) VALUES
(1, 'Titre + 2 produits', '@Marketing/inky/title_2_products.block.html'),
(2, 'Titre + 3 produits', '@Marketing/inky/title_3_products.block.html');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_header`
--

CREATE TABLE IF NOT EXISTS `newsletter_header` (
  `id` int(11) NOT NULL,
  `newsletter_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_top` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter_header`
--

INSERT INTO `newsletter_header` (`id`, `newsletter_id`, `title`, `text_top`, `text_intro`, `text_description`, `picture`, `link`, `updatedAt`) VALUES
(1, 1, 'Découvrez nos meilleures idées cadeaux du moment', 'Découvrez nos meilleures idées cadeaux du moment', 'voici les présents plébiscités par nos clients !', 'Il est l''heure de découvrir les produits les plus originaux de la semaine.', NULL, NULL, '2016-10-28 09:12:31'),
(2, 2, 'Il est l''heure de commencer vos achats de Noël', 'Il est l''heure de commencer vos achats de Noël', 'Noël approche, il est temps de préparer vos cadeaux !', 'Dans moins de deux mois nous allons fêter Noël avec nos familles. Afin d''avoir les présents les plus beaux au pied du sapin, découvrez la sélection du Maestro !', 'http://www.cadeau-maestro.com/img/newsletter/news/861ada59fc9bd8560b64978574d0c9ad.banner.jpg', 'http://www.cadeau-maestro.com/idee/152-acheter-ses-cadeaux-en-especes', '2016-11-04 11:43:14'),
(3, 3, '20% de réduction pendant 24 heures sur tout Cadeau Maestro', '20% de réduction pendant 24 heures sur tout Cadeau Maestro', 'Il est temps de commencer vos achats pour Noël, quoi de mieux qu''une réduction ?', 'Pendant 24 heures, <strong>-20% de réduction</strong> sur tout Cadeau Maestro, ce serait dommage de ne pas en profiter !\r\nJusqu''au 10/11/16 minuit, profitez d''une réduction exceptionnelle avec le code <strong>NOELDUMAESTRO</strong>.', 'http://www.cadeau-maestro.com/img/newsletter/news/d1017409582cabe0dd5163179cc59e3c.banner.jpg', 'http://www.cadeau-maestro.com/57-cadeau-noel', '2016-11-09 11:19:50'),
(4, 4, '20% de réduction jusqu''à ce soir sur tout Cadeau Maestro', '20% de réduction jusqu''à ce soir sur tout Cadeau Maestro', 'C''est le moment de faire des heureux en faisant vos achats pour Noël', 'Suite à votre inscription, voici votre <strong>code de réduction de 20%</strong>, le Papa Noël va faire des heureux cette année !\r\n\r\nGrâce au code <strong>NOELDUMAESTRO</strong>, obtenez 20% sur tout notre site internet ! Code valide jusqu''au 10/11/16 minuit.', 'http://www.cadeau-maestro.com/img/newsletter/news/1590365996c28616b6e87abed453fb2f.banner.jpg', 'http://www.cadeau-maestro.com/meilleures-ventes', '2016-11-10 14:51:07'),
(6, 6, 'Nos idées cadeaux déco pour un Noël original', 'Nos idées cadeaux déco pour un Noël original', 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël.', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts en matière de décoration, voici de l''idée culte, insolite, drôle et surtout unique !', NULL, NULL, '2016-11-15 15:15:55'),
(7, 7, 'Nos idées cadeaux déco pour un Noël original', 'Nos idées cadeaux déco pour un Noël original', 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël.', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts en matière de décoration, voici de l''idée culte, insolite, drôle et surtout unique !', NULL, NULL, '2016-11-15 15:54:36'),
(9, 9, 'Nos idées cadeaux pour un Noël original', 'Nos idées cadeaux pour un Noël original', 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël.', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts !', NULL, NULL, '2016-11-15 16:25:52'),
(10, 10, 'Toujours pas d''idées pour Noël ? Ne ratez pas notre sélection d''idées cadeaux', 'Toujours pas d''idées pour Noël ? Ne ratez pas notre sélection d''idées cadeaux', 'nous avons sélectionné pour vous les produits préférés de nos clients', '18 Décembre, il est temps de commencer ses achats pour Noël. Vous êtes en manque d''idées ? Heureusement Cadeau Maestro répond présent pour vous aider dans vos recherches avec une bien jolie sélection d''idées cadeaux.', NULL, NULL, '2016-11-18 14:24:22'),
(11, 11, 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël.', 'Nos idées cadeaux pour un Noël original', 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-11-18 16:28:24'),
(12, 12, 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël.', 'Nos idées cadeaux pour un Noël original', 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-11-22 11:13:50'),
(13, 13, 'Nos idées cadeaux pour un Noël Geek et original', 'Nos idées cadeaux pour un Noël Geek et original', 'Cadeau Maestro vous dévoile ses nouveautés hi-tech 2016 spéciales Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-11-22 14:34:15'),
(15, 15, 'Nos idées cadeaux pour un Noël hi-tech', 'Nos idées cadeaux pour un Noël hi-tech', 'Cadeau Maestro vous dévoile ses nouveautés hi-tech 2016 spéciales Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-11-22 15:25:58'),
(16, 16, 'Un Noël pas cher ? Découvrez notre sélection', 'Un Noël pas cher ? Découvrez notre sélection', 'Un budget de moins de 20€ ? Oui mais avec des cadeaux originaux.', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-11-23 15:31:53'),
(17, 17, 'Découvrez notre sélection de cadeau de Noël déco', 'Découvrez notre sélection de cadeau de Noël déco', 'Les meilleures cadeaux décoratifs pour Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-11-24 14:27:33'),
(27, 27, 'Découvrez notre sélection de cadeau de Noël pour les gourmands', 'Découvrez notre sélection de cadeau de Noël pour les gourmands', 'Les meilleures cadeaux culinaires pour Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-11-29 15:27:54'),
(32, 32, 'Découvrez le Calendrier de l''Avent : une offre exceptionnelle chaque jour !', 'Découvrez le Calendrier de l''Avent : une offre exceptionnelle chaque jour !', 'Aujourd''hui, 1er Décembre et seulement jusqu''à minuit', '-25% de réduction sur le sapin de Noël de 75 cm qui souffle de la neige ! Équipé de guirlandes lumineuses, il joue 25 mélodies de Noël.', NULL, NULL, '2016-12-01 13:44:02'),
(33, 33, 'Nos idées cadeaux girly pour un Noël original', 'Nos idées cadeaux girly pour un Noël original', 'Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-12-01 15:27:52'),
(34, 34, 'Sélection Mardi Gras', 'Sélection Mardi Gras', 'Découvrez nos accessoires originaux pour Mardis Gras', 'Cadeau Maestro vous dévoile en avant-première sa sélection spéciale "Mardi Gras".\r\nDes idées cadeaux pour les grands et les petits pour un Mardi Gras toutes en couleurs. Tous les jours Cadeau Maestro propose des nouvelles idées cadeaux pour tous les goûts, tous les budgets...\r\nCadeau Maestro réalise des jolis paquets cadeaux pour un effet de surprise garantit et les frais de port sont offerts dès 40€ d''achat en France Métropolitaine.', NULL, NULL, '2016-12-02 11:40:33'),
(35, 35, 'Noël c''est dans moins d''un mois, découvrez nos idées cadeaux', 'Noël c''est dans moins d''un mois, découvrez nos idées cadeaux', 'Ho ho ho, suivez les conseils des lutins du Papa Noël', 'Noël c''est dans moins d''un mois, avez-vous pensé à effectuer vos achats ? Découvrez notre sélection d''idées cadeaux pour faire plaisir à toute la famille !', NULL, NULL, '2016-12-02 12:17:34'),
(36, 36, '5% de réduction suite à notre passage sur Capital M6', '5% de réduction suite à notre passage sur Capital M6', 'Vous avez pu nous voir dans Capital sur M6, voici un bon de réduction exclusif', 'Gros succès suite à notre passage TV sur M6, vous étiez des milliers à vous rendre sur notre site internet. Mais malheureusement il y a eu un embouteillage et vous n''avez pas pu consulter nos fabuleux produits. Ne vous inquiétez, tout est revenu à la normale, vous pouvez maintenant vous rendre sur le site du Maestro et en plus bénéficier d''une réduction exclusive !\r\nJusqu''au 07/12 minuit, 5% de réduction sur tout le site avec le code CAPITAL', 'http://www.cadeau-maestro.com/img/newsletter/news/53e3cb1d73bc339808dc68c5824e9b88.banner.jpg', 'http://www.cadeau-maestro.com/', '2016-12-05 09:49:56'),
(37, 37, 'Nos idées cadeaux de Noël pour femmes', 'Nos idées cadeaux de Noël pour femmes', 'Envie d''offrir un cadeau original à une femme de votre entourage ?', 'Découvrez sans plus tarder la sélection de Cadeau Maestro. Des cadeaux féminins pour faire plaisir à vos proches.', NULL, NULL, '2016-12-07 17:38:39'),
(38, 38, 'Nos idées cadeaux de Noël pour hommes', 'Nos idées cadeaux de Noël pour hommes', 'Envie d''offrir un cadeau original à un homme de votre entourage ?', 'Papa, chéri, mari, frère, ami, collègue de boulot.... quel cadeau offrir à un homme pour son Noël ? Découvrez nos idées cadeaux afin de faire plaisir et surprendre.', NULL, NULL, '2016-12-09 17:17:32'),
(39, 39, 'Sélection de cadeaux originaux pour les agriculteurs', 'Sélection de cadeaux originaux pour les agriculteurs', 'Noël approche, il est temps de préparer vos cadeaux !', 'Vous souhaitez offrir un cadeau original à un agriculteur ? Et si cette année vous arrêtiez d''offrir un énième panier garni ? Découvrez notre sélection de cadeaux pas comme les autres. Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-12-12 11:53:03'),
(40, 40, 'Il est l''heure de faire ses achats pour Noël', 'Il est l''heure de faire ses achats pour Noël', 'Découvrez les meilleures ventes de Noël', 'Des idées cadeaux signées de designers du monde entier, pour qu''à tout prix Noël soit fêté chaleureusement. Cadeau Maestro vous dévoile ses nouveautés 2016 spéciales Noël. Des cadeaux pour tous les goûts ! Si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-12-13 16:34:46'),
(41, 41, 'Nos idées de cadeaux pour enfants', 'Nos idées de cadeaux pour enfants', 'encore à la recherche du cadeau idéal pour un enfant ?', 'Découvrez notre sélection de cadeaux originaux afin de faire plaisir aux plus jeunes.', 'http://www.cadeau-maestro.com/img/newsletter/news/206679e24728f1ae895a92f4929ad5c6.banner.jpg', 'http://www.cadeau-maestro.com/jeu/', '2016-12-13 17:55:33'),
(42, 42, 'Sélection de cadeaux pas chers pour les étudiants', 'Sélection de cadeaux pas chers pour les étudiants', 'Découvrez notre sélection de cadeaux originaux pour les étudiants', 'Des cadeaux pas chers et originaux pour faire plaisir aux étudiants ! Et si vous le désirez, je peux vous envoyer les articles de votre choix pour vos shootings photos.', NULL, NULL, '2016-12-14 11:54:39'),
(43, 43, 'Nos idées cadeaux pour les retardataires', 'Nos idées cadeaux pour les retardataires', 'Commandez jusqu''au 20/12 16h en Colissimo pour être livré à temps pour Noël', 'Il n''est pas trop tard pour faire vos achats pour Noël ! Le Maestro vient vous apporter de jolies idées pour faire plaisir à vos proches.', NULL, NULL, '2016-12-16 17:02:46'),
(44, 44, 'Il n''est pas trop tard pour recevoir vos cadeaux pour Noël', 'Il n''est pas trop tard pour recevoir vos cadeaux pour Noël', 'Commandez avant mercredi 21/12 16 heures en TNT pour recevoir vos cadeaux à temps', 'Vous n’avez toujours pas terminé vos achats pour Noël ? Rassurez-vous il n''est pas encore trop tard. \r\nCommandez avant ce mercredi 21 Décembre 16 heures en Express (Relais TNT Colis ou chez vous en France métropolitaine) pour recevoir votre commande et ainsi faire des heureux à Noël. A partir de 40€ d''achat, la livraison 24 heures en point relais ne coute que 4€, ce serait dommage de ne pas en profiter !', NULL, NULL, '2016-12-20 12:57:54'),
(45, 45, 'offrez des cadeaux originaux à vos invités pour le réveillon', 'Un bon repas et des cadeaux pour faire plaisir à tous vos convives', 'Un bon repas et des cadeaux pour faire plaisir à tous vos convives', 'Voici comment commencer l''année en beauté : proposer le meilleur des repas accompagné d''un petit cadeau, une attention qui fera plaisir à toute la famille.', NULL, NULL, '2016-12-28 09:10:21'),
(46, 46, 'On commence l''année en se relaxant', 'On commence l''année en se relaxant', 'quoi de mieux que de prendre le temps en début d''année ?', 'Il est l''heure de récupérer après les fêtes de fin d''année. Le Maestro pense à vous avec cette sélection pour prendre soin de vous.', NULL, NULL, '2016-12-30 16:25:27'),
(47, 47, 'Un week-end au chaud à la maison', 'Un week-end au chaud à la maison', 'Il fait froid, voici de quoi passer un week-end au chaud à la maison !', 'Toute l''équipe de Cadeau Maestro vous souhaite de passer une année en or. Quoi de mieux que de commencer l''année au chaud à la maison ? Découvrir nos accessoires pour bien débuter 2017.', 'http://www.cadeau-maestro.com/img/newsletter/news/8daafda0b06386bf898c4c23b5a59467.banner.jpg', NULL, '2017-01-13 14:09:08'),
(48, 48, 'Ne ratez pas nos animations en boutique', 'Ne ratez pas nos animations en boutique', 'Cette semaine, Théo et Tristan, nos gentils stagiaires boutique vous proposent deux animations :', 'Théo vous présentera la magie de la réalité virtuelle à l''aide de notre casque Confort ce mercredi 18 janvier.\r\n\r\nTristan lui vous présentera la puissance et la qualité acoustiques des enceintes Marshall samedi 21 janvier.\r\n\r\nLeurs animations auront lieu de 15h à 17h et plus si affinités.', NULL, NULL, '2017-01-17 16:43:05'),
(53, 53, 'Le top des cadeaux pour la Saint Valentin 2017', 'Le top des cadeaux pour la Saint Valentin 2017', 'Le top des cadeaux pour la Saint Valentin 2017', 'Spécialiste du cadeau original, Cadeau Maestro vous présente sa sélection des meilleures ventes pour la Saint Valentin. Découvrez sans plus tarder notre sélection et si vous avez besoin d''un produit pour des photos, n''hésitez pas à me le faire savoir.', NULL, NULL, '2017-01-24 14:05:22'),
(54, 54, 'Bientôt la Saint Valentin, quel cadeau allez-vous offrir ?', 'Bientôt la Saint Valentin, quel cadeau allez-vous offrir ?', 'envie de faire plaisir à votre chéri(e) ? Découvrez la sélection du Maestro', 'Voici les plus belles idées cadeaux afin de faire plaisir à l''élu(e) de votre coeur. Pour tous les gouts et pour tous les prix, la Saint Valentin édition 2017 s''annonce merveilleuse !', NULL, NULL, '2017-01-26 16:49:09'),
(55, 55, 'Le top des cadeaux pour la Saint Valentin 2017', 'Le top des cadeaux pour la Saint Valentin 2017', 'Les cadeaux plébiscités pour la Saint Valentin', 'Spécialiste du cadeau original, Cadeau Maestro vous présente sa sélection des meilleures ventes pour la Saint Valentin 2017. Découvrez sans plus tarder nos sélections pour lui et elle ! Et si vous avez besoin d''un produit pour des photos, n''hésitez pas à me le faire savoir.', NULL, NULL, '2017-01-27 12:19:18'),
(56, 56, 'Quel cadeau offrir à Pâques ?', 'Quel cadeau offrir à Pâques ?', 'Voici les meilleurs cadeaux du moment pour votre sélection pour Pâques', 'Spécialiste du cadeau original, Cadeau Maestro vous présente sa sélection des présents les plus insolites pour Pâques. Découvrez sans plus tarder notre sélection et si vous avez besoin d''un produit pour des photos, n''hésitez pas à me le faire savoir.', NULL, NULL, '2017-02-02 14:37:13'),
(57, 57, 'Des cadeaux à petits prix', 'Des cadeaux à petits prix', 'Découvrez notre sélection de cadeaux pour la St Valentin à moins de 20€', 'Est-il possible de trouver un joli cadeau pour la Saint Valentin avec moins de 20€ ? La réponse est simple : oui, avec le Maestro. Pour elle et lui, découvrez notre sélection qui va surprendre et surtout faire plaisir.', NULL, NULL, '2017-02-06 12:19:33'),
(58, 58, 'Il n''est pas trop tard pour recevoir vos cadeaux pour la St Valentin', 'Il n''est pas trop tard pour recevoir vos cadeaux pour la St Valentin', 'Commandez jusqu''au lundi 13 Février en TNT', 'Vous n''avez toujours pas trouvé le cadeau idéal pour la Saint Valentin ? Rassurez-vous, il n''est pas encore trop tard pour être livré à temps. Vous avez jusqu''au 13 Février en livraison TNT !\r\nEt en plus, avec le code MASAINTVALENTIN * nous vous offrons un bracelet Daily''s.\r\n* Code valable jusqu''au 13/02/17 pour toute commande sans minimum d''achat', 'http://www.cadeau-maestro.com/img/newsletter/news/c29d4f58b2235c57db5d261cbca05bbf.banner.jpg', 'http://www.cadeau-maestro.com/58-cadeau-saint-valentin', '2017-02-09 16:13:43'),
(59, 59, 'Les dernières nouveautés de Cadeau Maestro', 'Les dernières nouveautés de Cadeau Maestro', 'Ne ratez pas les dernières nouveautés de la semaine', 'Le Maestro vous présente ses dernières idées cadeaux, à offrir à ses proches ou pour se faire plaisir. Impossible de ne pas craquer !', NULL, NULL, '2017-02-17 16:42:26'),
(60, 60, 'La fête des grands-mères c''est dans une semaine', 'La fête des grands-mères c''est dans une semaine', 'Dimanche 5 Mars c''est la fête des grands-mères !', 'Découvrez notre sélection de cadeaux pour votre grand-mère. Avec plus de 4000 idées cadeaux, vous pourrez retrouver le produit qui lui fera plaisir.', NULL, NULL, '2017-02-24 13:48:07'),
(61, 61, 'Découvrez nos idées cadeaux pour vos grands-mères', 'Découvrez nos idées cadeaux pour vos grands-mères', 'Vos Grands-Mères méritent les plus beaux cadeaux', 'La fête des Grands-Mères aura lieu ce dimanche, avez-vous pensé à lui acheter un joli cadeau ? Découvrez sans plus tarder notre sélection pour lui faire plaisir.', NULL, NULL, '2017-02-28 17:34:05'),
(62, 62, 'Découvrez nos accessoires originaux pour la Saint Patrick', 'Découvrez nos accessoires originaux pour la Saint Patrick', 'Vendredi 17 Mars fêtez la Saint-Patrick avec le Maestro', 'Vous avez envie de célébrer la St-Patrick avec vos amis ? Découvrez sans plus tarder notre sélection d''accessoires originaux pour encore plus de fun !', NULL, NULL, '2017-03-10 10:10:24'),
(63, 63, '1er jour du printemps, il est l''heure de se faire plaisir', '1er jour du printemps, il est l''heure de se faire plaisir', 'L''hiver est enfin terminé, découvrez nos accessoires pour accueillir le printemps', 'Le soleil est de retour, allez viens chez le Maestro, il y a le printemps qui chante !', NULL, NULL, '2017-03-20 14:46:20'),
(64, 64, 'Pour Pâques, offrez des chocolats originaux', 'Pour Pâques, offrez des chocolats originaux', 'Ne ratez pas nos promotions pour faire plaisir à vos proches pour Pâques', 'Impossible de résister à la tentation, cette année à Pâques offrez des chocolats qui étonneront vos proches !', NULL, NULL, '2017-03-30 16:23:56'),
(65, 65, 'Notre sélection de chocolats originaux pour Pâques', 'Notre sélection de chocolats originaux pour Pâques', 'Régalez vos amis avec nos succulents chocolats', 'Du chocolat pour toute la famille pour faire plaisir aux petits mais aussi aux grands enfants !', NULL, NULL, '2017-04-11 17:22:52'),
(66, 66, 'Nos meilleures idées cadeaux du moment', 'Nos meilleures idées cadeaux du moment', 'Le meilleur du Maestro afin d''acheter vos cadeaux sans vous tromper', 'Découvrez nos 10 meilleures ventes du moment afin de faire plaisir à vos proches.... et pourquoi pas vous faire plaisir !', NULL, NULL, '2017-04-20 15:17:58'),
(67, 67, 'J-30 avant la fête des Mères !', 'J-30 avant la fête des Mères !', 'Offrez le plus beau des cadeaux pour la Fête des Mères !', 'Cette année, la fête des mères aura lieu le dimanche 28 Mai, il est temps de commencer vos achats. Découvrez nos idées cadeaux pour la meilleure des mamans', NULL, NULL, '2017-04-28 15:24:42'),
(68, 68, 'Fête des Mères : sélection de cadeaux originaux', 'Fête des Mères : sélection de cadeaux originaux', 'A la recherche d''un joli cadeau pour votre maman ?', 'Le Maestro vous a préparé sa sélection des meilleures idées cadeaux pour faire plaisir à votre maman. Des idées pour faire plaisir à toutes les mamans !', NULL, NULL, '2017-05-09 11:43:40'),
(69, 69, 'Les plus beaux cadeaux pour votre maman', 'Les plus beaux cadeaux pour votre maman', 'Découvrez les meilleures idées cadeaux pour faire plaisir à votre maman', 'Dimanche 28 Mai c''est la fête des Mères, découvrez nos plus belles idées pour la meilleure des mamans !', NULL, NULL, '2017-05-15 12:36:16'),
(70, 70, 'Dernier week-end avant la fête des mères', 'Dernier week-end avant la fête des mères', 'Toujours à la recherche d''une idée cadeau pour votre maman ?', 'Alors découvrez sans plus tarder nos dernières idées cadeaux pour lui faire plaisir. N''oubliez pas, cette année la fête des mères aura lieu le dimanche 28 Mai !', NULL, NULL, '2017-05-19 16:58:22'),
(71, 71, 'Découvrez nos cadeaux personnalisés pour votre papa', 'Découvrez nos cadeaux personnalisés pour votre papa', 'Offrez un cadeau inoubliable à votre papa', 'Votre papa c''est vraiment le meilleur, la fête des pères est donc l''occasion idéale pour lui montrer à quel point vous tenez à lui !', NULL, NULL, '2017-06-02 16:35:09'),
(72, 72, 'Il n''est pas trop tard pour recevoir vos cadeaux pour la fête des pères', 'Il n''est pas trop tard pour recevoir vos cadeaux pour la Fête des pères', 'Bonne nouvelle, vous avez encore le temps pour passer commande !', 'Vous êtes encore à la recherche du cadeau de fête des pères pour votre papa ? Ne vous inquiétez pas puisque vous avez jusqu''au 15/06 16h pour vous faire livrer en Colissimo à Domicile. Et pour les retardataires, vous pourrez même passer commande jusqu''au 16/06 16 heures en livraison Express TNT !', NULL, NULL, '2017-06-13 15:53:48'),
(73, 73, 'Un peu d''air frais pour faire plaisir à vos proches', 'Un peu d''air frais pour faire plaisir à vos proches', 'Des idées cadeaux rafraîchissantes pour lutter contre la canicule', 'Plage, bataille d''eau, boire régulièrement de l''eau, ventilateurs, tous les moyens sont bons pour lutter contre la canicule. Découvrez nos idées cadeaux pour vous rafraîchir mais également pour apporter un peu d''air frais à vos proches !', NULL, NULL, '2017-06-22 10:15:20'),
(74, 74, 'Premier week-end de soldes, c''est le moment d''en profiter', 'Premier week-end de soldes, c''est le moment d''en profiter', 'Envie de faire des économies tout en (se) faisant plaisir ?', 'Et bien c''est possible avec le Maestro, découvrez les soldes du moment, il n''y en aura pas pour tout le monde !', NULL, NULL, '2017-06-30 16:46:39');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_menu`
--

CREATE TABLE IF NOT EXISTS `newsletter_menu` (
  `id` int(11) NOT NULL,
  `newsletter_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter_menu`
--

INSERT INTO `newsletter_menu` (`id`, `newsletter_id`, `title`, `link`, `position`) VALUES
(1, 1, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(2, 1, 'Insolite', 'http://www.cadeau-maestro.com/90-cadeau-original', 1),
(3, 1, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(4, 2, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(5, 2, 'Nos nouveautés', 'http://www.cadeau-maestro.com/nouveaux-produits', 1),
(6, 2, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(7, 3, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(8, 3, 'Meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(9, 3, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(10, 4, 'Noel', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(11, 4, 'Nouveautés', 'http://www.cadeau-maestro.com/nouveaux-produits', 1),
(12, 4, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(16, 6, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(17, 6, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(18, 6, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(19, 7, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(20, 7, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(21, 7, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(24, 9, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(25, 9, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(26, 9, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(27, 10, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(28, 10, 'Meilleures ventes', 'http://www.cadeau-maestro.com/meilleur/57-cadeau-noel', 1),
(29, 10, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(30, 11, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(31, 11, 'Meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(32, 11, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(33, 12, 'Noël Femme', 'http://www.cadeau-maestro.com/meilleur/170-cadeau-noel-femme', 0),
(34, 12, 'Top 10', 'http://www.cadeau-maestro.com/blog/top-10-cadeaux-noel/', 1),
(35, 12, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(36, 13, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(37, 13, 'Meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(38, 13, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(42, 15, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(43, 15, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(44, 15, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(45, 16, 'Cadeau pas cher', 'http://www.cadeau-maestro.com/109-cadeau-pas-cher', 0),
(46, 16, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 1),
(47, 16, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(48, 17, 'Cadeau déco', 'http://www.cadeau-maestro.com/6-cadeau-deco', 0),
(49, 17, 'Meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(50, 17, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(77, 27, 'Gourmet', 'http://www.cadeau-maestro.com/10-cadeau-gourmet', 0),
(78, 27, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(79, 27, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(90, 32, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(91, 32, 'Idées cadeaux', 'http://www.cadeau-maestro.com/idees-cadeaux', 1),
(92, 32, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 2),
(93, 33, 'Noel', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(94, 33, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(95, 33, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(96, 34, 'Déguisement', 'http://www.cadeau-maestro.com/1504-deguisements-originaux', 0),
(97, 34, 'Fête', 'http://www.cadeau-maestro.com/208-accessoires-de-fete', 1),
(98, 34, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(99, 35, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(100, 35, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(101, 35, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(102, 36, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(103, 36, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(104, 36, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(105, 37, 'Un Noël féminin', 'http://www.cadeau-maestro.com/170-cadeau-noel-femme', 0),
(106, 37, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(107, 37, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(108, 38, 'Un Noël masculin', 'http://www.cadeau-maestro.com/169-cadeau-noel-homme', 0),
(109, 38, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(110, 38, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(111, 39, 'Agriculteur', 'http://www.cadeau-maestro.com/1460-cadeau-agriculteur', 0),
(112, 39, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(113, 39, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(114, 40, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(115, 40, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(116, 40, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(117, 41, 'Noël enfant', 'http://www.cadeau-maestro.com/171-cadeau-noel-enfant', 0),
(118, 41, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(119, 41, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(120, 42, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(121, 42, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(122, 42, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(123, 43, 'Noël', 'http://www.cadeau-maestro.com/57-cadeau-noel', 0),
(124, 43, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(125, 43, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(126, 44, 'Noël', 'http://www.cadeau-maestro.com/meilleur/57-cadeau-noel', 0),
(127, 44, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(128, 44, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(129, 45, 'Cadeau d''assiette', 'www.cadeau-maestro.com/1515-cadeau-invite-noel', 0),
(130, 45, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(131, 45, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(132, 46, 'Relaxation', 'http://www.cadeau-maestro.com/247-relaxation', 0),
(133, 46, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(134, 46, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(135, 47, 'Cocooning', 'http://www.cadeau-maestro.com/1555-cadeau-cocooning', 0),
(136, 47, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(137, 47, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(138, 48, 'Hi-tech', 'http://www.cadeau-maestro.com/7-cadeau-high-tech', 0),
(139, 48, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(140, 48, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(153, 53, 'Saint Valentin Femme', 'http://www.cadeau-maestro.com/86-cadeau-saint-valentin-femme', 0),
(154, 53, 'Saint Valentin Homme', 'http://www.cadeau-maestro.com/85-cadeau-saint-valentin-homme', 1),
(155, 53, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(156, 54, 'St Valentin Femme', 'http://www.cadeau-maestro.com/86-cadeau-saint-valentin-femme', 0),
(157, 54, 'St Valentin Homme', 'http://www.cadeau-maestro.com/85-cadeau-saint-valentin-homme', 1),
(158, 54, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(159, 55, 'St Valentin Femme', 'http://www.cadeau-maestro.com/86-cadeau-saint-valentin-femme', 0),
(160, 55, 'St Valentin Homme', 'http://www.cadeau-maestro.com/85-cadeau-saint-valentin-homme', 1),
(161, 55, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(162, 56, 'Pâques', 'http://www.cadeau-maestro.com/61-cadeau-paques', 0),
(163, 56, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(164, 56, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(165, 57, 'Pour les amoureux', 'http://www.cadeau-maestro.com/58-cadeau-saint-valentin', 0),
(166, 57, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(167, 57, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(168, 58, 'Saint Valentin', 'http://www.cadeau-maestro.com/58-cadeau-saint-valentin', 0),
(169, 58, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(170, 58, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(171, 59, 'Nos nouveautés', 'http://www.cadeau-maestro.com/nouveaux-produits', 0),
(172, 59, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(173, 59, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(174, 60, 'Grands-Mères', 'http://www.cadeau-maestro.com/87-cadeau-fete-grand-mere', 0),
(175, 60, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(176, 60, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(177, 61, 'Grands-Mères', 'http://www.cadeau-maestro.com/87-cadeau-fete-grand-mere', 0),
(178, 61, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(179, 61, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(180, 62, 'Verre à bière', 'https://www.cadeau-maestro.com/1886-verre-a-biere', 0),
(181, 62, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(182, 62, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(183, 63, 'Loisirs', 'https://www.cadeau-maestro.com/1624-cadeau-loisirs', 0),
(184, 63, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(185, 63, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(186, 64, 'Chocolats', 'https://www.cadeau-maestro.com/242-chocolats', 0),
(187, 64, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(188, 64, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(189, 65, 'Chocolats', 'https://www.cadeau-maestro.com/242-chocolats', 0),
(190, 65, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(191, 65, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(192, 66, 'Fête des Mères', 'https://www.cadeau-maestro.com/60-cadeau-fete-des-meres', 0),
(193, 66, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(194, 66, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(195, 67, 'Fête des Mères', 'https://www.cadeau-maestro.com/60-cadeau-fete-des-meres', 0),
(196, 67, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(197, 67, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(198, 68, 'Pour maman', 'https://www.cadeau-maestro.com/60-cadeau-fete-des-meres', 0),
(199, 68, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(200, 68, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(201, 69, 'Fête des Mères', 'https://www.cadeau-maestro.com/60-cadeau-fete-des-meres', 0),
(202, 69, 'Nos meilleures ventes', 'http://www.cadeau-maestro.com/meilleures-ventes', 1),
(203, 69, 'Trouver une idée cadeau', 'http://www.cadeau-maestro.com/idees-cadeaux', 2),
(204, 70, 'Fête des Mères', 'https://www.cadeau-maestro.com/60-cadeau-fete-des-meres', 0),
(205, 70, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(206, 70, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(207, 71, 'Fête des Pères', 'https://www.cadeau-maestro.com/2003-cadeau-personnalise/idee/fete-des-peres', 0),
(208, 71, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(209, 71, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(210, 72, 'Fête des Pères', 'https://www.cadeau-maestro.com/59-cadeau-fete-des-peres', 0),
(211, 72, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(212, 72, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(213, 73, 'A la plage', 'https://www.cadeau-maestro.com/2250-accessoire-piscine-plage', 0),
(214, 73, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(215, 73, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2),
(216, 74, 'Soldes', 'https://www.cadeau-maestro.com/promotions', 0),
(217, 74, 'Nos meilleures ventes', 'https://www.cadeau-maestro.com/meilleures-ventes', 1),
(218, 74, 'Trouver une idée cadeau', 'https://www.cadeau-maestro.com/idees-cadeaux', 2);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_product`
--

CREATE TABLE IF NOT EXISTS `newsletter_product` (
  `id` int(11) NOT NULL,
  `newsletter_block_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `id_prestashop_product` int(11) NOT NULL,
  `id_prestashop_default_image` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_old` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `css_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter_product`
--

INSERT INTO `newsletter_product` (`id`, `newsletter_block_id`, `position`, `id_prestashop_product`, `id_prestashop_default_image`, `title`, `price`, `price_old`, `link`, `picture`, `css_title`, `updated_at`, `description`) VALUES
(1, 1, 0, 5665, 35177, 'Panneau à Messages LightBox A4 (72 caractères)', '26.9', '26.9', 'http://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5665_35177_big.jpg', '', '2016-10-28 10:15:01', NULL),
(2, 1, 1, 5663, 35173, 'Distributeur de Boisson en Verre 3,5L', '8.9', '8.9', 'http://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5663_35173_big.jpg', '', '2016-10-28 10:15:01', NULL),
(3, 2, 0, 4749, 31413, 'Fauteuil Ours Gummy', '44.9', '44.9', 'http://www.cadeau-maestro.com/fauteuil-ours-gummy-4749.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4749_31413.jpg', '', '2016-10-28 10:15:01', NULL),
(4, 2, 1, 399, 30206, 'Sel et Poivre Robots', '15.9', '15.9', 'http://www.cadeau-maestro.com/sel-et-poivre-robots-399.html', 'http://www.cadeau-maestro.com/img/newsletter/news/399_30206.jpg', '', '2016-10-28 10:15:01', NULL),
(5, 2, 2, 3501, 31452, 'Veilleuse Bébé Lapin', '5.9', '5.9', 'http://www.cadeau-maestro.com/veilleuse-bebe-lapin-3501.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3501_31452.jpg', '', '2016-10-28 10:15:01', NULL),
(6, 3, 0, 2412, 31390, 'Mug Céramique Objectif d''Appareil Photo', '19.95', '19.95', 'http://www.cadeau-maestro.com/mug-ceramique-objectif-appareil-photo-2412.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2412_31390.jpg', '', '2016-10-28 10:15:01', NULL),
(7, 3, 1, 3069, 31704, 'Gant de Cuisine Rayons X', '10.9', '10.9', 'http://www.cadeau-maestro.com/gant-cuisine-rayons-x-3069.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3069_31704.jpg', '', '2016-10-28 10:15:01', NULL),
(8, 3, 2, 4818, 32219, 'Porte-Bagues Licorne', '6.5', '6.5', 'http://www.cadeau-maestro.com/porte-bagues-licorne-4818.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4818_32219.jpg', '', '2016-10-28 10:15:01', NULL),
(9, 4, 0, 1722, 6669, 'Mon Chien est une Star', '10.5', '9.97', 'http://www.cadeau-maestro.com/mon-chien-est-une-star-1722.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1722_6669.jpg', '', '2016-10-28 10:15:01', NULL),
(10, 4, 1, 2350, 13523, 'Pots à Crayons Caisses en Bois (x3)', '22.9', '19.46', 'http://www.cadeau-maestro.com/pots-crayons-caisses-en-bois-2350.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2350_13523.jpg', '', '2016-10-28 10:15:01', NULL),
(11, 4, 2, 3864, 23817, 'Carnet d''Invités "L''art de vivre à la française"', '13.9', '8.9', 'http://www.cadeau-maestro.com/carnet-invites-art-vivre-francaise-3864.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3864_23817.jpg', '', '2016-10-28 10:15:01', NULL),
(12, 5, 0, 5222, 30527, 'Infuseur à Thé P''Tit Biscuit', '14.5', '14.5', 'http://www.cadeau-maestro.com/infuseur-the-ptit-biscuit-5222.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5222_30527_big.jpg', '', '2016-11-04 11:43:14', NULL),
(13, 5, 1, 5854, 36009, 'Veilleuse Renard César', '29.9', '29.9', 'http://www.cadeau-maestro.com/veilleuse-renard-cesar-5854.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5854_36009_big.jpg', '', '2016-11-04 11:43:14', NULL),
(14, 6, 0, 3242, 17372, 'Calendrier de l''Avent Sapin de Noël en Bois', '32', '32', 'http://www.cadeau-maestro.com/calendrier-avent-sapin-noel-en-bois-3242.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3242_17372.jpg', '', '2016-11-04 11:43:14', NULL),
(15, 6, 1, 5803, 35989, 'Set Mugs Amoureux Attrape Baisers', '23.5', '23.5', 'http://www.cadeau-maestro.com/set-mugs-amoureux-attrape-baisers-5803.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5803_35989.jpg', '', '2016-11-04 11:43:14', NULL),
(16, 6, 2, 5805, 35948, 'Néon Love Pour Amoureux', '28.9', '28.9', 'http://www.cadeau-maestro.com/neon-love-5805.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5805_35948.jpg', '', '2016-11-04 11:43:14', NULL),
(17, 7, 0, 614, 25706, 'Localisateur de Clés', '19.9', '19.9', 'http://www.cadeau-maestro.com/localisateur-cles-sherlock-614.html', 'http://www.cadeau-maestro.com/img/newsletter/news/614_25706.jpg', '', '2016-11-04 11:43:14', NULL),
(18, 7, 1, 5246, 31185, 'Sèche-Ongles Carlin', '8.9', '8.9', 'http://www.cadeau-maestro.com/seche-ongles-carlin-5246.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5246_31185.jpg', '', '2016-11-04 11:43:14', NULL),
(19, 7, 2, 1367, 32987, 'Horloge Photos Aluminium', '11.9', '11.9', 'http://www.cadeau-maestro.com/horloge-photos-aluminium-1367.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1367_32987.jpg', '', '2016-11-04 11:43:14', NULL),
(20, 8, 0, 1862, 7450, 'Parapluie Fuck the Rain', '19', '17', 'http://www.cadeau-maestro.com/parapluie-fuck-the-rain-1862.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1862_7450.jpg', '', '2016-11-04 11:43:14', NULL),
(21, 8, 1, 4126, 22943, 'Projecteur pour Smartphone', '25.9', '22.9', 'http://www.cadeau-maestro.com/projecteur-smartphone-4126.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4126_22943.jpg', '', '2016-11-04 11:43:14', NULL),
(22, 8, 2, 2350, 13523, 'Pots à Crayons Caisses en Bois (x3)', '22.9', '19.46', 'http://www.cadeau-maestro.com/pots-crayons-caisses-en-bois-2350.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2350_13523.jpg', '', '2016-11-04 11:43:14', NULL),
(23, 9, 0, 5867, 36110, 'Kit Bière à Faire Soi-Même', '39.9', '31.92', 'http://www.cadeau-maestro.com/kit-biere-faire-soi-meme-brewbarrel-oktoberfest-5867.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5867_36110_big.jpg', '', '2016-11-09 11:19:50', NULL),
(24, 9, 1, 5854, 36009, 'Veilleuse Renard César', '29.9', '23.92', 'http://www.cadeau-maestro.com/veilleuse-renard-cesar-5854.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5854_36009_big.jpg', '', '2016-11-09 11:19:50', NULL),
(25, 10, 0, 5659, 35156, 'Bloc-Couteaux Porte-Tablette', '53.5', '42.8', 'http://www.cadeau-maestro.com/bloc-couteaux-porte-tablette-5659.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5659_35156.jpg', '', '2016-11-09 11:19:50', NULL),
(26, 10, 1, 4330, 32265, 'Tasse à Café Humeur du Matin Heureux', '17.95', '14.36', 'http://www.cadeau-maestro.com/tasse-cafe-humeur-matin-heureux-4330.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4330_32265.jpg', '', '2016-11-09 11:19:50', NULL),
(27, 10, 2, 373, 32917, 'Oreiller Musical MP3', '22.9', '18.32', 'http://www.cadeau-maestro.com/oreiller-musical-mp3-373.html', 'http://www.cadeau-maestro.com/img/newsletter/news/373_32917.jpg', '', '2016-11-09 11:19:50', NULL),
(28, 11, 0, 5581, 34978, 'Boîte 9 Epices L’Essentiel à Personnaliser', '43.9', '35.12', 'http://www.cadeau-maestro.com/boite-9-epices-essentiel-personnaliser-5581.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5581_34978.jpg', '', '2016-11-09 11:19:50', NULL),
(29, 11, 1, 5869, 36120, 'Luge Gonflable Donut', '27.95', '22.36', 'http://www.cadeau-maestro.com/luge-gonflable-donut-5869.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5869_36120.jpg', '', '2016-11-09 11:19:50', NULL),
(30, 11, 2, 5603, 34839, 'Grand Globe Terrestre Cassini Mova', '290', '232', 'http://www.cadeau-maestro.com/grand-globe-terrestre-cassini-mova-5603.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5603_34839.jpg', '', '2016-11-09 11:19:50', NULL),
(31, 13, 0, 4515, 35414, 'Globe Football Mova', '160', '128', 'http://www.cadeau-maestro.com/globe-football-mova-4515.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4515_35414.jpg', '', '2016-11-10 14:51:07', NULL),
(32, 13, 1, 4848, 30908, 'Lunettes Déguisement pour Noël (x10)', '9.9', '7.92', 'http://www.cadeau-maestro.com/lunettes-deguisement-noel-4848.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4848_30908.jpg', '', '2016-11-10 14:51:07', NULL),
(33, 13, 2, 5869, 36120, 'Luge Gonflable Donut', '27.95', '22.36', 'http://www.cadeau-maestro.com/luge-gonflable-donut-5869.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5869_36120.jpg', '', '2016-11-10 14:51:07', NULL),
(34, 14, 0, 5805, 35948, 'Néon Love', '28.9', '23.12', 'http://www.cadeau-maestro.com/neon-love-5805.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5805_35948.jpg', '', '2016-11-10 14:51:07', NULL),
(35, 14, 1, 2241, 31796, 'Carte du Monde à Gratter Luxe', '31.9', '25.52', 'http://www.cadeau-maestro.com/carte-du-monde-gratter-luxe-2241.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2241_31796.jpg', '', '2016-11-10 14:51:07', NULL),
(36, 14, 2, 4377, 32115, 'Petits Bols Humeur Bisou et Malin', '21.9', '17.52', 'http://www.cadeau-maestro.com/petits-bols-humeur-bisou-malin-4377.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4377_32115.jpg', '', '2016-11-10 14:51:07', NULL),
(45, 19, 0, 3504, 31805, 'Carte du Monde à Gratter Luxe Edition Voyage', '25.9', '25.9', 'http://www.cadeau-maestro.com/carte-du-monde-gratter-luxe-edition-voyage-3504.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3504_31805.jpg', '', '2016-11-15 15:15:55', 'Découvrez cette carte du monde à gratter luxe edition voyage, qui vous permettra de visiter des contrées et pays inexplorés, avec style !'),
(46, 19, 1, 6112, 36322, 'Lampe Néon Flamant Rose', '47.9', '47.9', 'http://www.cadeau-maestro.com/lampe-neon-flamant-rose-6112.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6112_36322.jpg', '', '2016-11-15 15:15:55', 'Ambiance Old School'),
(47, 20, 0, 3504, 31805, 'Carte du Monde à Gratter Luxe Edition Voyage', '25.9', '25.9', 'http://www.cadeau-maestro.com/carte-du-monde-gratter-luxe-edition-voyage-3504.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3504_31805.jpg', '', '2016-11-15 15:15:55', 'Découvrez cette carte du monde à gratter luxe edition voyage, qui vous permettra de visiter des contrées et pays inexplorés, avec style !'),
(48, 20, 1, 6112, 36322, 'Lampe Néon Flamant Rose', '47.9', '47.9', 'http://www.cadeau-maestro.com/lampe-neon-flamant-rose-6112.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6112_36322.jpg', '', '2016-11-15 15:15:55', 'Ambiance Old School'),
(49, 20, 2, 4107, 34825, 'Globe Terrestre avec Écritures dorées Mova', '160', '160', 'http://www.cadeau-maestro.com/globe-terrestre-ecritures-dorees-mov-4107.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4107_34825.jpg', '', '2016-11-15 15:15:55', 'Un globe qui tourne comme par magie'),
(50, 21, 0, 3504, 31805, 'Carte du Monde à Gratter Luxe Edition Voyage', '25.9', '25.9', 'http://www.cadeau-maestro.com/carte-du-monde-gratter-luxe-edition-voyage-3504.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3504_31805.jpg', '', '2016-11-15 15:15:55', 'Découvrez cette carte du monde à gratter luxe edition voyage, qui vous permettra de visiter des contrées et pays inexplorés, avec style !'),
(51, 21, 1, 6112, 36322, 'Lampe Néon Flamant Rose', '47.9', '47.9', 'http://www.cadeau-maestro.com/lampe-neon-flamant-rose-6112.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6112_36322.jpg', '', '2016-11-15 15:15:55', 'Ambiance Old School'),
(52, 21, 2, 4107, 34825, 'Globe Terrestre avec Écritures dorées Mova', '160', '160', 'http://www.cadeau-maestro.com/globe-terrestre-ecritures-dorees-mov-4107.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4107_34825.jpg', '', '2016-11-15 15:15:55', 'Un globe qui tourne comme par magie'),
(53, 18, 0, 5854, 36009, 'Veilleuse Renard César', '29.9', '29.9', 'http://www.cadeau-maestro.com/veilleuse-renard-cesar-5854.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5854_36009_big.jpg', '', '2016-11-15 15:32:37', 'Une douce lumière colorée, S’éteint toute seule au bout de 5 minutes'),
(54, 18, 1, 5807, 36176, 'Lightbox A6 (90 caractères)', '19.5', '19.5', 'http://www.cadeau-maestro.com/lightbox-a6-90caracteres-5807.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5807_36176_big.jpg', '', '2016-11-15 15:32:37', 'Petit format trop mignon : 10,5 x 15 cm'),
(55, 19, 2, 4107, 34825, 'Globe Terrestre avec Écritures dorées Mova', '160', '160', 'http://www.cadeau-maestro.com/globe-terrestre-ecritures-dorees-mov-4107.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4107_34825.jpg', '', '2016-11-15 15:32:37', 'Un globe qui tourne comme par magie'),
(56, 22, 0, 5854, 36009, 'Veilleuse Renard César', '29.9', '29.9', 'http://www.cadeau-maestro.com/veilleuse-renard-cesar-5854.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5854_36009_big.jpg', '', '2016-11-15 15:54:36', 'Une douce lumière colorée, S’éteint toute seule au bout de 5 minutes'),
(57, 22, 1, 5807, 36176, 'Lightbox A6 (90 caractères)', '19.5', '19.5', 'http://www.cadeau-maestro.com/lightbox-a6-90caracteres-5807.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5807_36176_big.jpg', '', '2016-11-15 15:54:36', 'Petit format trop mignon : 10,5 x 15 cm'),
(58, 23, 0, 4006, 36109, 'Mug Rudolph Thermoréactif', '12.9', '12.9', 'http://www.cadeau-maestro.com/mug-rudolph-thermoreactif-4006.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4006_36109.jpg', '', '2016-11-15 15:54:36', 'Son nez devient rouge lorsque vous versez une boisson chaude dans la tasse'),
(59, 23, 1, 5800, 35962, 'Taies d''Oreiller Amoureux Bulles (x2)', '43.5', '43.5', 'http://www.cadeau-maestro.com/taies-oreiller-amoureux-bulles-5800.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5800_35962.jpg', '', '2016-11-15 15:54:36', 'Une déco douce et mignonne En coton et polyester'),
(60, 23, 2, 5776, 35715, 'Lampe Licorne', '49.9', '49.9', 'http://www.cadeau-maestro.com/lampe-licorne-5776.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5776_35715.jpg', '', '2016-11-15 15:54:36', 'Une licorne en mode 2.0  Éclairée par une douce lumière'),
(61, 24, 0, 3504, 31805, 'Carte du Monde à Gratter Luxe Edition Voyage', '25.9', '25.9', 'http://www.cadeau-maestro.com/carte-du-monde-gratter-luxe-edition-voyage-3504.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3504_31805.jpg', '', '2016-11-15 15:54:36', 'Découvrez cette carte du monde à gratter luxe edition voyage, qui vous permettra de visiter des contrées et pays inexplorés, avec style !'),
(62, 24, 1, 6112, 36322, 'Lampe Néon Flamant Rose', '47.9', '47.9', 'http://www.cadeau-maestro.com/lampe-neon-flamant-rose-6112.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6112_36322.jpg', '', '2016-11-15 15:54:36', 'Ambiance Old School'),
(63, 24, 2, 4512, 34833, 'Globe Terrestre Mova', '150', '150', 'http://www.cadeau-maestro.com/globe-terrestre-mova-4512.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4512_34833.jpg', '', '2016-11-15 15:54:36', 'Découvrez ce globe terrestre Mova, présenté sur son élégant socle et qui vous surprendra par sa finesse et son raffinement...'),
(64, 26, 0, 4006, 36109, 'Mug Rudolph Thermoréactif', '12.9', '12.9', 'http://www.cadeau-maestro.com/mug-rudolph-thermoreactif-4006.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4006_36109_big.jpg', '', '2016-11-15 16:25:52', 'Son nez devient rouge lorsque vous versez une boisson chaude dans la tasse'),
(65, 26, 1, 2368, 35845, 'Rouge à Lèvres en Chocolat (x4)', '9.5', '9.5', 'http://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2368_35845_big.jpg', '', '2016-11-15 16:25:52', 'Quatre tubes de rouge à lèvres à déguster Pour toutes les gourmandes Un cadeau en chocolat très original'),
(66, 27, 0, 6048, 36357, 'Oreiller Boyfriend', '27.5', '27.5', 'http://www.cadeau-maestro.com/oreiller-boyfriend-6048.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6048_36357.jpg', '', '2016-11-15 16:25:52', 'Besoin d''un calin ? Super moelleux Avec haut de pyjama'),
(67, 27, 1, 6112, 36322, 'Lampe Néon Flamant Rose', '47.9', '47.9', 'http://www.cadeau-maestro.com/lampe-neon-flamant-rose-6112.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6112_36322.jpg', '', '2016-11-15 16:25:52', 'Ambiance Old School'),
(68, 27, 2, 5807, 36176, 'Lightbox A6 (90 caractères)', '19.5', '19.5', 'http://www.cadeau-maestro.com/lightbox-a6-90caracteres-5807.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5807_36176.jpg', '', '2016-11-15 16:25:52', 'Petit format trop mignon : 10,5 x 15 cmLightBox aimantée90 lettres et smileys'),
(69, 28, 0, 5776, 35715, 'Lampe Licorne', '49.9', '49.9', 'http://www.cadeau-maestro.com/lampe-licorne-5776.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5776_35715.jpg', '', '2016-11-15 16:25:52', 'Une licorne en mode 2.0  Éclairée par une douce lumière'),
(70, 28, 1, 5832, 35848, 'Pouf Combi', '85', '85', 'http://www.cadeau-maestro.com/pouf-combi-5832.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5832_35848.jpg', '', '2016-11-15 16:25:52', 'Décorez votre intérieurUn coin confortable Housse amovible résistante à l''eau'),
(71, 28, 2, 6199, 36250, 'Calendrier de l''Avent 24 Bières', '69.9', '69.9', 'http://www.cadeau-maestro.com/calendrier-avent-24-bieres-6199.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6199_36250.jpg', '', '2016-11-15 16:25:52', '24 bières différentes'),
(72, 29, 0, 4006, 36109, 'Mug Rudolph Thermoréactif', '12.9', '12.9', 'http://www.cadeau-maestro.com/mug-rudolph-thermoreactif-4006.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4006_36109_big.jpg', '', '2016-11-18 14:24:22', NULL),
(73, 29, 1, 2366, 33124, 'Manette de Jeu en Chocolat', '9.9', '9.9', 'http://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2366_33124_big.jpg', '', '2016-11-18 14:24:22', NULL),
(74, 30, 0, 313, 36438, 'Trèfle à 4 feuilles', '4', '4', 'http://www.cadeau-maestro.com/trefle-4-feuilles-313.html', 'http://www.cadeau-maestro.com/img/newsletter/news/313_36438.jpg', '', '2016-11-18 14:24:22', NULL),
(75, 30, 1, 6137, 36257, 'Petite Lampe Ananas', '7.5', '7.5', 'http://www.cadeau-maestro.com/petite-lampe-ananas-6137.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6137_36257.jpg', '', '2016-11-18 14:24:22', NULL),
(76, 30, 2, 5820, 35943, 'Calendrier de l''Avent Bières à Faire Soi-Même', '8.9', '8.9', 'http://www.cadeau-maestro.com/calendrier-avant-faire-soi-meme-5820.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5820_35943.jpg', '', '2016-11-18 14:24:22', NULL),
(77, 31, 0, 5898, 36444, 'Lampe Ballon', '24.9', '24.9', 'http://www.cadeau-maestro.com/lampe-ballon-5898.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5898_36444.jpg', '', '2016-11-18 14:24:22', NULL),
(78, 31, 1, 5903, 36447, 'Jarre à Cookies Dark Vador', '35.9', '35.9', 'http://www.cadeau-maestro.com/jarre-cookie-dark-vador-5903.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5903_36447.jpg', '', '2016-11-18 14:24:22', NULL),
(79, 31, 2, 3821, 32568, 'Distributeur de Coton Lapin', '13.5', '13.5', 'http://www.cadeau-maestro.com/distributeur-coton-lapin-3821.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3821_32568.jpg', '', '2016-11-18 14:24:22', NULL),
(80, 32, 0, 1607, 6225, 'Bracelets Daily''s "Pour celle qui est amoureuse"', '4.9', '4.9', 'http://www.cadeau-maestro.com/bracelets-daily-s-pour-celle-qui-est-amoureuse-1607.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1607_6225.jpg', '', '2016-11-18 14:24:22', NULL),
(81, 32, 1, 3670, 20299, 'Gobelets en Carton à Colorier (x8)', '4.5', '4.5', 'http://www.cadeau-maestro.com/gobelets-en-carton-colorier-x8-3670.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3670_20299.jpg', '', '2016-11-18 14:24:22', NULL),
(82, 32, 2, 176, 4533, 'Snug Rug Deluxe', '34.9', '34.9', 'http://www.cadeau-maestro.com/snug-rug-deluxe-176.html', 'http://www.cadeau-maestro.com/img/newsletter/news/176_4533.jpg', '', '2016-11-18 14:24:22', NULL),
(83, 33, 0, 4006, 36109, 'Mug Rudolph Thermoréactif', '12.9', '12.9', 'http://www.cadeau-maestro.com/mug-rudolph-thermoreactif-4006.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4006_36109_big.jpg', '', '2016-11-18 16:28:24', 'Son nez devient rouge lorsque vous versez une boisson chaude dans la tasse'),
(84, 33, 1, 5665, 35177, 'Panneau à Messages LightBox A4', '26.9', '26.9', 'http://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5665_35177_big.jpg', '', '2016-11-18 16:28:24', 'Un support qui s''illumine Fonctionne à l''aide de piles 84 caractères à placer A poser ou à accrocher au mur Grand format A4'),
(85, 34, 0, 6137, 36257, 'Petite Lampe Ananas', '7.5', '7.5', 'http://www.cadeau-maestro.com/petite-lampe-ananas-6137.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6137_36257.jpg', '', '2016-11-18 16:28:24', 'Couleurs changeantesLumière douce et tamiséePiles fournies'),
(86, 34, 1, 5645, 35090, 'Tasse Moustache Chat', '10.5', '10.5', 'http://www.cadeau-maestro.com/tasse-moustache-chat-5645.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5645_35090.jpg', '', '2016-11-18 16:28:24', 'Donnez un côté amusant à vos pauses thé ou caféUne anse pour une bonne prise en mainUne tasse légère en verre'),
(87, 34, 2, 5370, 32016, 'Poster 100 Choses à Faire Avant de Mourir', '27.9', '27.9', 'http://www.cadeau-maestro.com/poster-100-choses-faire-avant-mourir-5370.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5370_32016.jpg', '', '2016-11-18 16:28:24', 'Vous pourrez découvrir toutes les activités que vous avez déjà faites et vous donnez des objectifs sur celles qui restent !'),
(88, 35, 0, 2368, 35845, 'Rouge à Lèvres en Chocolat (x4)', '9.5', '9.5', 'http://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2368_35845.jpg', '', '2016-11-18 16:28:24', 'Quatre tubes de rouge à lèvres à déguster Pour toutes les gourmandes Un cadeau en chocolat très original'),
(89, 35, 1, 4512, 34833, 'Globe Terrestre Mova', '150', '150', 'http://www.cadeau-maestro.com/globe-terrestre-mova-4512.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4512_34833.jpg', '', '2016-11-18 16:28:24', 'Découvrez ce globe terrestre Mova, présenté sur son élégant socle et qui vous surprendra par sa finesse et son raffinement...'),
(90, 35, 2, 5776, 35715, 'Lampe Licorne', '49.9', '49.9', 'http://www.cadeau-maestro.com/lampe-licorne-5776.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5776_35715.jpg', '', '2016-11-18 16:28:24', 'Une licorne en mode 2.0  Éclairée par une douce lumière Un objet design et insolite'),
(91, 36, 0, 5806, 35964, 'Lightbox A5 (100 caractères)', '23.9', '23.9', 'http://www.cadeau-maestro.com/lightbox-a5-85caracteres-5806.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5806_35964_big.jpg', '', '2016-11-22 11:13:50', 'Contient des emojis en couleur. A poser ou à accrocher au mur'),
(92, 36, 1, 3821, 32568, 'Distributeur de Coton Lapin', '13.5', '13.5', 'http://www.cadeau-maestro.com/distributeur-coton-lapin-3821.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3821_32568_big.jpg', '', '2016-11-22 11:13:50', 'Découvrez ce joli distributeur de coton lapin, en céramique, tout droit sorti d''Alice aux pays des Merveilles, et dont la queue sera en coton !'),
(93, 37, 0, 2368, 35845, 'Rouge à Lèvres en Chocolat (x4)', '9.5', '9.5', 'http://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2368_35845.jpg', '', '2016-11-22 11:13:50', 'Quatre tubes de rouge à lèvres à déguster'),
(94, 37, 1, 5369, 32023, 'Poster 100 Lieux à Visiter Avant de Mourir', '27.9', '27.9', 'http://www.cadeau-maestro.com/poster-100-lieux-visiter-avant-de-mourir-5369.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5369_32023.jpg', '', '2016-11-22 11:13:50', 'Vous pourrez découvrir toutes les activités que vous avez déjà faites et vous donnez des objectifs sur celles qui restent !'),
(95, 37, 2, 6137, 36257, 'Petite Lampe Ananas', '7.5', '7.5', 'http://www.cadeau-maestro.com/petite-lampe-ananas-6137.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6137_36257.jpg', '', '2016-11-22 11:13:50', 'Couleurs changeantes. Lumière douce et tamisée.'),
(96, 38, 0, 3821, 32568, 'Distributeur de Coton Lapin', '13.5', '13.5', 'http://www.cadeau-maestro.com/distributeur-coton-lapin-3821.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3821_32568.jpg', '', '2016-11-22 11:13:50', 'Découvrez ce joli distributeur de coton lapin, en céramique, tout droit sorti d''Alice aux pays des Merveilles.'),
(97, 38, 1, 4892, 30992, 'Mug Chat', '14.5', '14.5', 'http://www.cadeau-maestro.com/mug-chat-4892.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4892_30992.jpg', '', '2016-11-22 11:13:50', 'Vous allez tomber sous le charme de ce mug chat trop mignon, qui vous permettra de déguster votre thé, café ou chocolat chaud...'),
(98, 38, 2, 5914, 36201, 'Tablier Super Maman', '30', '30', 'http://www.cadeau-maestro.com/tablier-super-maman-5914.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5914_36201.jpg', '', '2016-11-22 11:13:50', 'Fabriqué en France100 % coton.2 poches sur le devant.'),
(99, 39, 0, 6158, 36428, 'Projecteur Personnalisable pour Smartphone', '35.9', '35.9', 'http://www.cadeau-maestro.com/projecteur-personnalisable-smartphone-6158.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6158_36428_big.jpg', '', '2016-11-22 14:34:15', 'Décorez votre projecteur. Le cinéma dans votre salon'),
(100, 39, 1, 5686, 35278, 'EcoHub De Chargement USB', '54.9', '54.9', 'http://www.cadeau-maestro.com/ecohub-chargement-usb-5686.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5686_35278_big.jpg', '', '2016-11-22 14:34:15', 'Ajoutez une touche de verdure à votre intérieurObjet design et respectueux de l''environnementPlastique recyclé effet bois'),
(101, 40, 0, 6038, 36734, 'Set Chocolats Geek', '19.9', '19.9', 'http://www.cadeau-maestro.com/set-chocolats-geek-6038.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6038_36734.jpg', '', '2016-11-22 14:34:15', 'Un coffret de trois pièces en chocolat'),
(102, 40, 1, 5643, 35083, 'Sous-Verres Super Mario Bros. (x20)', '8.5', '8.5', 'http://www.cadeau-maestro.com/sous-verres-super-mario-bros-x20-5643.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5643_35083.jpg', '', '2016-11-22 14:34:15', 'Sous licence officielle Nintendo.'),
(103, 40, 2, 1290, 32582, 'Lampe Tetris', '39.9', '39.9', 'http://www.cadeau-maestro.com/lampe-tetris-1290.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1290_32582.jpg', '', '2016-11-22 14:34:15', 'Créez vous-même votre propre lampe Tetris à partir des célèbres blocs de couleurs s''emboîtant les uns sur les autres et s''allumant dès qu''ils sont en contact.'),
(104, 41, 0, 4787, 32686, 'Porte-Clés Chargeur de Téléphone à Téléphone', '13.9', '13.9', 'http://www.cadeau-maestro.com/porte-cles-chargeur-telephone-telephone-4787.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4787_32686.jpg', '', '2016-11-22 14:34:15', 'Découvrez un petit accessoire astucieux et très pratique, le porte-clés chargeur de téléphone à téléphone qui permettra de transférer la batterie d''un smartphone à un autre !'),
(105, 41, 1, 2986, 15216, 'Maquette Métal 3D Star Wars R2-D2', '19.9', '19.9', 'http://www.cadeau-maestro.com/maquette-metal-3d-star-wars-r2-d2-2986.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2986_15216.jpg', '', '2016-11-22 14:34:15', 'Retrouvez le droïde le plus célèbre de toute la galaxie qui accompagnait Luke Skywalker dans toutes ses aventures contre l''Empire, cette fois sous la forme d''une maquette très réaliste, en métal...'),
(106, 41, 2, 4145, 23085, 'Mug Coeur Pixels Thermoréactif', '9.9', '9.9', 'http://www.cadeau-maestro.com/mug-coeur-pixels-thermoreactif-4145.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4145_23085.jpg', '', '2016-11-22 14:34:15', 'Geek ou in love, ce mug coeur pixels thermoréactif trônera fièrement sur votre bureau ou dans votre cuisine. Il suffit de mettre une boisson chaude à l''intérieur pour que le rouge de la passion surgisse !'),
(118, 46, 0, 4249, 33167, 'Lampe-Enceinte Lévitation', '139', '139', 'http://www.cadeau-maestro.com/lampe-enceinte-levitation-4249.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4249_33167_big.jpg', '', '2016-11-22 15:25:58', 'Cette lampe-enceinte lévitation est une création française.'),
(119, 46, 1, 3216, 33163, 'Lampe Lévitation Pureline', '119', '119', 'http://www.cadeau-maestro.com/lampe-levitation-pureline-3216.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3216_33163_big.jpg', '', '2016-11-22 15:25:58', 'L''abat-jour lévite au-dessus de la base, pour un effet anti-gravité des plus renversants !'),
(120, 47, 0, 5605, 34952, 'Enceinte en Bois Scrat', '84', '84', 'http://www.cadeau-maestro.com/enceinte-bois-scrat-5605.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5605_34952.jpg', '', '2016-11-22 15:25:58', 'Fonctionne sans fil, en bluetooth, jusqu''à 10 mètres'),
(121, 47, 1, 5593, 34704, 'Porte-bouteille Lévitation Flying Bar', '119.9', '119.9', 'http://www.cadeau-maestro.com/porte-bouteille-levitation-flying-bar-5593.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5593_34704.jpg', '', '2016-11-22 15:25:58', 'Donnez une touche d’élégance à votre cuisine, complétée par un côté mystérieux.'),
(122, 47, 2, 3886, 31074, 'Arbre Solaire', '120', '120', 'http://www.cadeau-maestro.com/arbre-solaire-3886.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3886_31074.jpg', '', '2016-11-22 15:25:58', 'Fabriqué à partir d''éco-matériaux et de bambou'),
(123, 48, 0, 3406, 18524, 'Haut-Parleur Bluetooth Portable Tulipe', '69.9', '69.9', 'http://www.cadeau-maestro.com/haut-parleur-bluetooth-portable-tulipe-3406.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3406_18524.jpg', '', '2016-11-22 15:25:58', 'Le haut-parleur bluetooth portable Tulipe possède des formes élégantes.'),
(124, 48, 1, 5618, 34928, 'Chargeur Smartphone Sans Fil', '59.9', '59.9', 'http://www.cadeau-maestro.com/chargeur-smartphone-sans-fil-5618.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5618_34928.jpg', '', '2016-11-22 15:25:58', 'Posez simplement votre appareil sur ce chargeur smartphone sans fil et la recharge de sa batterie débute.'),
(125, 48, 2, 5686, 35278, 'EcoHub De Chargement USB', '54.9', '54.9', 'http://www.cadeau-maestro.com/ecohub-chargement-usb-5686.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5686_35278.jpg', '', '2016-11-22 15:25:58', 'Objet design et respectueux de l''environnement'),
(126, 49, 0, 2366, 33124, 'Manette de Jeu en Chocolat', '9.9', '9.9', 'http://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2366_33124_big.jpg', '', '2016-11-23 15:31:53', 'Une manette qui plaira à tous les amateurs de jeux vidéo mais aussi à tous les gourmands, puisqu''elle est en chocolat...'),
(127, 49, 1, 6137, 36257, 'Petite Lampe Ananas', '7.5', '7.5', 'http://www.cadeau-maestro.com/petite-lampe-ananas-6137.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6137_36257_big.jpg', '', '2016-11-23 15:31:53', 'Couleurs changeantes. Lumière douce et tamisée. Piles fournies'),
(128, 50, 0, 313, 36438, 'Trèfle à 4 feuilles', '4', '4', 'http://www.cadeau-maestro.com/trefle-4-feuilles-313.html', 'http://www.cadeau-maestro.com/img/newsletter/news/313_36438.jpg', '', '2016-11-23 15:31:53', 'Avec ce petit kit de trèfles à 4 feuilles, faites pousser vous-même jusqu''à 3 véritables trèfles à quatre feuilles en pot, et peut-être vous porteront-ils chance !'),
(129, 50, 1, 5807, 36176, 'Lightbox A6 (90 caractères)', '19.5', '19.5', 'http://www.cadeau-maestro.com/lightbox-a6-90caracteres-5807.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5807_36176.jpg', '', '2016-11-23 15:31:53', 'Petit format trop mignon : 10,5 x 15 cmLightBox aimantée90 lettres et smileys'),
(130, 50, 2, 5724, 36596, 'Parfum d''Intérieur Licorne', '9.9', '9.9', 'http://www.cadeau-maestro.com/parfum-interieur-licorne-5724.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5724_36596.jpg', '', '2016-11-23 15:31:53', 'Un parfum licorne !  Pour voir la vie de toutes les couleurs Pour ajouter de la magie chez soi...'),
(131, 51, 0, 4628, 31411, 'Mug Renard', '15', '15', 'http://www.cadeau-maestro.com/mug-renard-4628.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4628_31411.jpg', '', '2016-11-23 15:31:53', 'Ce très mignon et sympathique mug renard en céramique vous accompagnera lors de vos pauses thé ou café'),
(132, 51, 1, 2368, 35845, 'Rouge à Lèvres en Chocolat (x4)', '9.5', '9.5', 'http://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2368_35845.jpg', '', '2016-11-23 15:31:53', 'Quatre tubes de rouge à lèvres à déguster'),
(133, 51, 2, 5642, 35080, 'Lampe Lune USB', '9.9', '9.9', 'http://www.cadeau-maestro.com/lampe-usb-lune-5642.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5642_35080.jpg', '', '2016-11-23 15:31:53', 'Éclaire votre ordinateurUne alimentation USB'),
(134, 52, 0, 5806, 35964, 'Lightbox A5 (100 caractères)', '23.9', '23.9', 'http://www.cadeau-maestro.com/lightbox-a5-85caracteres-5806.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5806_35964_big.jpg', '', '2016-11-24 14:27:33', '3 rangées pour disposer vos lettres'),
(135, 52, 1, 6137, 36257, 'Petite Lampe Ananas', '7.5', '7.5', 'http://www.cadeau-maestro.com/petite-lampe-ananas-6137.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6137_36257_big.jpg', '', '2016-11-24 14:27:33', 'Lumière douce et tamisée'),
(136, 53, 0, 4266, 36108, 'Distributeur de Mouchoirs Moai', '29.95', '29.95', 'http://www.cadeau-maestro.com/distributeur-mouchoirs-moai-4266.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4266_36108.jpg', '', '2016-11-24 14:27:33', 'Découvrez ce distributeur de mouchoirs Moai, représentant une célèbre statue de l''île de Pâques'),
(137, 53, 1, 5369, 32023, 'Poster 100 Lieux à Visiter Avant de Mourir', '27.9', '27.9', 'http://www.cadeau-maestro.com/poster-100-lieux-visiter-avant-de-mourir-5369.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5369_32023.jpg', '', '2016-11-24 14:27:33', 'Un bel objectif que chacun devrait avoir au cours de sa vie : visiter le plus de pays possible'),
(138, 53, 2, 5749, 35606, 'Porte-Bijoux Chats', '12', '12', 'http://www.cadeau-maestro.com/porte-bijoux-chats-5749.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5749_35606.jpg', '', '2016-11-24 14:27:33', '3 petits chats pour accrocher vos bijoux'),
(139, 54, 0, 4103, 34826, 'Globe Terrestre avec Nuages Mova', '150', '150', 'http://www.cadeau-maestro.com/globe-terrestre-nuages-mova-4103.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4103_34826_big.jpg', '', '2016-11-24 14:27:33', 'Avec son aspect épuré et son mécanisme étonnant, il ne peut échapper aux regards et fascinera tout votre entourage...'),
(140, 54, 1, 3548, 19367, 'Bibliothèque Mouton Mr Pelote Blanc', '59', '59', 'http://www.cadeau-maestro.com/bibliotheque-mouton-mr-pelote-blanc-3548.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3548_19367_big.jpg', '', '2016-11-24 14:27:33', 'Meuble en carton étonnant que cette bibliothèque mouton Mr Pelote Cocorisheep ! Mêêêde in France !'),
(141, 89, 0, 2814, 34586, 'Séparateur d''Oeufs Poisson Rouge', '11.9', '11.9', 'http://www.cadeau-maestro.com/separateur-oeufs-poisson-rouge-2814.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2814_34586_big.jpg', '', '2016-11-29 15:27:54', 'Un petit poisson magique qui saura gober le jaune de votre oeuf pour le séparer du blanc, et le relâcher dans un autre récipient. Très pratique, il fonctionne simplement par vide d''air.'),
(142, 89, 1, 4359, 30409, 'Sablier Magnétique', '19.5', '19.5', 'http://www.cadeau-maestro.com/sablier-magnetique-4359.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4359_30409_big.jpg', '', '2016-11-29 15:27:54', 'Découvrez ce sablier magnétique garni de sable et de poudre de fer, qui, une fois posé sur son socle aimanté, fera apparaître des stalagmites !'),
(143, 90, 0, 5439, 32908, 'Coffret Café Créatif', '8.9', '8.9', 'http://www.cadeau-maestro.com/coffret-cafe-creatif-5439.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5439_32908.jpg', '', '2016-11-29 15:27:54', 'Découvrez ce coffret café créatif tendance, qui sera votre meilleur atout pour épater vos convives !'),
(144, 90, 1, 3465, 30904, 'Mesureur à spaghetti Licorne', '8.9', '8.9', 'http://www.cadeau-maestro.com/mesureur-spaghetti-licorne-3465.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3465_30904.jpg', '', '2016-11-29 15:27:54', 'Découvrez ce mesureur à spaghetti licorne, multicolore et qui vous permettra de doser au plus juste vos pâtes que vous mangiez seul, à deux ou en famille...'),
(145, 90, 2, 5659, 35156, 'Bloc-Couteaux Porte-Tablette', '53.5', '53.5', 'http://www.cadeau-maestro.com/bloc-couteaux-porte-tablette-5659.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5659_35156.jpg', '', '2016-11-29 15:27:54', 'Pour ranger 5 couteaux, 1 aiguiseur et 1 paire de ciseaux Pour poser une tablette ou un livre En bois de chêne Un bloc pivotant Un accessoire pratique Parfait pour un amateur de cuisine'),
(146, 91, 0, 2729, 36683, 'Cuillères à Salade en Bois Guitare (x2)', '15.9', '15.9', 'http://www.cadeau-maestro.com/cuilleres-salade-en-bois-guitare-x2-2729.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2729_36683.jpg', '', '2016-11-29 15:27:54', 'Découvrez ces cuillères à salade en bois en forme de guitares, qui vous permettront de servir avec un style très rock toutes vos salades !'),
(147, 91, 1, 3620, 20186, 'Échappe-Vapeur Langue', '12', '12', 'http://www.cadeau-maestro.com/echappe-vapeur-langue-3620.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3620_20186.jpg', '', '2016-11-29 15:27:54', 'Avec cet échappe-vapeur langue, vous pourrez faire la cuisine sans risque d''accident de cuisson (et avec style), en laissant la chaleur s''évacuer lentement de votre casserole...'),
(148, 91, 2, 3729, 34516, 'Louche Nessie', '13.5', '13.5', 'http://www.cadeau-maestro.com/louche-nessie-3729.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3729_34516.jpg', '', '2016-11-29 15:27:54', 'Si vous n''avez pas peur du gentil monstre du Loch Ness, vous allez adorer cette louche nessie, très pratique pour servir soupes et punchs !'),
(150, 100, 0, 6138, 36576, 'Petit Sapin de Noël Neige et Mélodie', '99.9', '74.93', 'http://www.cadeau-maestro.com/petit-sapin-de-noel-neige-et-melodie-6138.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6138_36576.jpg', '', '2016-12-01 13:44:02', NULL),
(151, 101, 0, 5806, 35964, 'Lightbox A5 (100 caractères)', '23.9', '23.9', 'http://www.cadeau-maestro.com/lightbox-a5-85caracteres-5806.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5806_35964_big.jpg', '', '2016-12-01 15:27:52', 'Lightbox en format mini (20 x 15 cm) 3 rangées pour disposer vos lettres100 caractères'),
(152, 101, 1, 6286, 36628, 'Porte-Bagues Licorne XL', '9.9', '9.9', 'http://www.cadeau-maestro.com/porte-bagues-licorne-xl-6286.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6286_36628_big.jpg', '', '2016-12-01 15:27:52', 'La poésie au service de vos bjiouxParfait pour bagues et petites piècesEn céramique blanche et or15 cm de diamètre'),
(153, 102, 0, 4628, 31411, 'Mug Renard', '15', '15', 'http://www.cadeau-maestro.com/mug-renard-4628.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4628_31411.jpg', '', '2016-12-01 15:27:52', 'Ce très mignon et sympathique mug renard en céramique vous accompagnera lors de vos pauses thé ou café, tout en y apportant une pointe de douceur...'),
(154, 102, 1, 1834, 36891, 'Boîte 36 Epices Collection Le Monde en Tube', '58.9', '58.9', 'http://www.cadeau-maestro.com/boite-epices-collection-monde-en-tube-1834.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1834_36891.jpg', '', '2016-12-01 15:27:52', 'Une boîte en bois qui renferme toutes les épices dont vous pouvez avoir besoin, pour régaler votre famille et vos amis de plats aux saveurs originales !'),
(155, 102, 2, 3887, 34707, 'Lampe à Livre Pince à Linge', '9.9', '9.9', 'http://www.cadeau-maestro.com/lampe-livre-pince-linge-3887.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3887_34707.jpg', '', '2016-12-01 15:27:52', 'Découvrez cette lampe à livre pince à linge que vos pourrez positionner sur votre livre ou votre magazine afin d''éclairer votre lecture...'),
(156, 103, 0, 2372, 36427, 'Mini-séchoir à ongles Singe', '7.9', '7.9', 'http://www.cadeau-maestro.com/mini-sechoir-ongles-singe-2372.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2372_36427.jpg', '', '2016-12-01 15:27:52', 'Un petit séchoir à ongles malin et rigolo, en forme de gentil singe, que vous pourrez glisser dans votre sac pour qu''il vous suive partout !'),
(157, 103, 1, 5369, 32023, 'Poster 100 Lieux à Visiter Avant de Mourir', '27.9', '27.9', 'http://www.cadeau-maestro.com/poster-100-lieux-visiter-avant-de-mourir-5369.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5369_32023.jpg', '', '2016-12-01 15:27:52', 'Avec ce poster 100 choses à faire avant de mourir, vous pourrez découvrir toutes les activités que vous avez déjà faites et vous donnez des objectifs sur celles qui restent !'),
(158, 103, 2, 3501, 31452, 'Veilleuse Bébé Lapin', '5.9', '5.9', 'http://www.cadeau-maestro.com/veilleuse-bebe-lapin-3501.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3501_31452.jpg', '', '2016-12-01 15:27:52', 'Cette veilleuse bébé lapin blanc de 11 cm éclairera doucement une chambre d''enfant grâce à ses LED internes et ses piles fournies.'),
(159, 104, 0, 2695, 35758, 'Masque Tête de Licorne', '34.9', '34.9', 'http://www.cadeau-maestro.com/masque-tete-licorne-2695.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2695_35758_big.jpg', '', '2016-12-02 11:40:33', 'Avec ce masque finement réalisé, vous pourrez devenir, l''espace de quelques heures, une licorne magique et ainsi surprendre tous ceux qui vous croiseront...'),
(160, 104, 1, 1562, 30546, 'Kit d''accessoires pour photo', '14.9', '14.9', 'http://www.cadeau-maestro.com/kit-accessoires-pour-photo-1562.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1562_30546_big.jpg', '', '2016-12-02 11:40:33', 'Adoptez ces accessoires drôles et gentiment rétro qui ajouteront du fun à vos soirées et à vos photos improvisées...'),
(161, 105, 0, 2032, 15771, 'Masques pour Enfants Animaux de la Jungle (x5)', '9.9', '9.9', 'http://www.cadeau-maestro.com/masques-pour-enfants-animaux-jungle-2032.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2032_15771.jpg', '', '2016-12-02 11:40:33', 'De jolis masques des animaux de la Jungle pour tous les enfants qui aiment se déguiser !'),
(162, 105, 1, 3924, 22000, 'Serviette de Bain Fantome', '32', '32', 'http://www.cadeau-maestro.com/serviette-bain-fantome-3924.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3924_22000.jpg', '', '2016-12-02 11:40:33', 'Alliez frissons et sport avec cette serviette de bain fantôme. 2 œillères vous permettront de la mettre sur la tête et de voir tout de même... De quoi faire de belles frayeurs en sortant de la douche...'),
(163, 105, 2, 5454, 32832, 'Pailles Déguisées', '7.9', '7.9', 'http://www.cadeau-maestro.com/pailles-deguisees-5454.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5454_32832.jpg', '', '2016-12-02 11:40:33', 'Tout le monde a connu, au moins une fois en soirée, le fait de ne plus retrouver son verre ou de l''échanger avec celui d''une autre personne.'),
(164, 106, 0, 1301, 4774, 'Fausses Moustaches (x7)', '8.5', '8.5', 'http://www.cadeau-maestro.com/fausses-moustaches-x7-1301.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1301_4774.jpg', '', '2016-12-02 11:40:33', 'Un assortiment de 7 fausses moustaches autocollantes très rétro, correspondantes aux 7 jours de la semaine, pour s''amuser, se déguiser ou jouer, tous les jours !'),
(165, 106, 1, 4473, 25827, 'Tatouages Magiques Fille (x24)', '5.5', '5.5', 'http://www.cadeau-maestro.com/tatouages-magiques-fille-4473.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4473_25827.jpg', '', '2016-12-02 11:40:33', 'Découvrez ces tatouages magiques fille, qui grâce à une application gratuite, pourront s''animer lorsque vous passerez votre téléphone sur eux...'),
(166, 106, 2, 5261, 30877, 'Ballons de Baudruche Confettis (x20)', '9.9', '9.9', 'http://www.cadeau-maestro.com/ballons-baudruche-confettis-x20-5261.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5261_30877.jpg', '', '2016-12-02 11:40:33', 'Apportez une touche de folie à vos fêtesDisposez les ballons sur leurs tigesA décorer à l''aide d''un ruban rose pâle fourniPercez-les pour créer une pluie de confettis'),
(167, 107, 0, 5450, 35327, 'Panneau à Message LightBox A4 (85 caractères)', '34.9', '29.9', 'http://www.cadeau-maestro.com/panneau-message-lightbox-a4-5450.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5450_35327.jpg', '', '2016-12-02 12:17:34', NULL),
(168, 107, 1, 1834, 36891, 'Boîte 36 Epices Collection Le Monde en Tube', '58.9', '58.9', 'http://www.cadeau-maestro.com/boite-epices-collection-monde-en-tube-1834.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1834_36891.jpg', '', '2016-12-02 12:17:34', NULL),
(169, 107, 2, 5704, 35384, 'Mug Chat Thermoréactif', '12.5', '12.5', 'http://www.cadeau-maestro.com/mug-chat-thermoreactif-5704.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5704_35384.jpg', '', '2016-12-02 12:17:34', NULL),
(170, 108, 0, 4126, 22943, 'Projecteur pour Smartphone', '25.9', '22.9', 'http://www.cadeau-maestro.com/projecteur-smartphone-4126.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4126_22943.jpg', '', '2016-12-02 12:17:34', NULL),
(171, 108, 1, 2464, 18298, 'Carafe Enigme', '29.9', '29.9', 'http://www.cadeau-maestro.com/carafe-enigme-2464.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2464_18298.jpg', '', '2016-12-02 12:17:34', NULL),
(172, 108, 2, 530, 30258, 'Mini Billard de Table', '25', '25', 'http://www.cadeau-maestro.com/billard-table-530.html', 'http://www.cadeau-maestro.com/img/newsletter/news/530_30258.jpg', '', '2016-12-02 12:17:34', NULL),
(173, 109, 0, 5791, 35777, 'Tirelire Panda Gourmand', '19.5', '19.5', 'http://www.cadeau-maestro.com/tirelire-panda-gourmand-5791.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5791_35777.jpg', '', '2016-12-02 12:17:34', NULL),
(174, 109, 1, 3309, 34814, 'Lampe 12 Briques Light Stax', '24.9', '24.9', 'http://www.cadeau-maestro.com/lampe-12-briques-light-stax-3309.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3309_34814.jpg', '', '2016-12-02 12:17:34', NULL),
(175, 109, 2, 5238, 35296, 'Veilleuse Licorne', '13.9', '13.9', 'http://www.cadeau-maestro.com/veilleuse-licorne-5238.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5238_35296.jpg', '', '2016-12-02 12:17:34', NULL),
(176, 110, 0, 6272, 36547, 'Costume de Renne pour Chien', '9.9', '8.91', 'http://www.cadeau-maestro.com/costume-renne-chien-6272.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6272_36547.jpg', '', '2016-12-02 12:17:34', NULL),
(177, 110, 1, 3472, 36685, 'Machine à Barbe à Papa', '49.9', '44.9', 'http://www.cadeau-maestro.com/machine-barbe-papa-rouge-3472.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3472_36685.jpg', '', '2016-12-02 12:17:34', NULL),
(178, 110, 2, 4560, 36607, 'Canne à Selfie Bluetooth Deluxe', '34.9', '29.66', 'http://www.cadeau-maestro.com/canne-selfie-bluetooth-deluxe-4560.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4560_36607.jpg', '', '2016-12-02 12:17:34', NULL),
(179, 111, 0, 1834, 36891, 'Boîte 36 Epices Collection Le Monde en Tube', '58.9', '58.9', 'http://www.cadeau-maestro.com/boite-epices-collection-monde-en-tube-1834.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1834_36891_big.jpg', '', '2016-12-05 09:49:56', NULL),
(180, 111, 1, 5450, 35327, 'Panneau à Message LightBox A4 (100 caractères)', '34.9', '29.9', 'http://www.cadeau-maestro.com/panneau-message-lightbox-a4-100-caracteres-5450.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5450_35327_big.jpg', '', '2016-12-05 09:49:56', NULL),
(181, 112, 0, 4126, 22943, 'Projecteur pour Smartphone', '25.9', '22.9', 'http://www.cadeau-maestro.com/projecteur-smartphone-4126.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4126_22943.jpg', '', '2016-12-05 09:49:56', NULL),
(182, 112, 1, 4887, 32213, 'Pantoufles Star High', '21.9', '21.9', 'http://www.cadeau-maestro.com/pantoufles-star-high-4887.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4887_32213.jpg', '', '2016-12-05 09:49:56', NULL),
(183, 112, 2, 5238, 35296, 'Veilleuse Licorne', '13.9', '13.9', 'http://www.cadeau-maestro.com/veilleuse-licorne-5238.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5238_35296.jpg', '', '2016-12-05 09:49:56', NULL),
(184, 113, 0, 5704, 35384, 'Mug Chat Thermoréactif', '12.5', '12.5', 'http://www.cadeau-maestro.com/mug-chat-thermoreactif-5704.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5704_35384.jpg', '', '2016-12-05 09:49:56', NULL),
(185, 113, 1, 2127, 9615, 'Mini Daily''s "30 petits déjeuners en amoureux"', '4.5', '4.5', 'http://www.cadeau-maestro.com/mini-daily-s-30-petits-dejeuners-en-amoureux-2127.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2127_9615.jpg', '', '2016-12-05 09:49:56', NULL),
(186, 113, 2, 5369, 32023, 'Poster 100 Lieux à Visiter Avant de Mourir', '27.9', '27.9', 'http://www.cadeau-maestro.com/poster-100-lieux-visiter-avant-de-mourir-5369.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5369_32023.jpg', '', '2016-12-05 09:49:56', NULL),
(187, 114, 0, 6099, 36519, 'Jouet pour Chien Smile', '3.9', '3.51', 'http://www.cadeau-maestro.com/jouet-chien-smile-6099.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6099_36519.jpg', '', '2016-12-05 09:49:56', NULL);
INSERT INTO `newsletter_product` (`id`, `newsletter_block_id`, `position`, `id_prestashop_product`, `id_prestashop_default_image`, `title`, `price`, `price_old`, `link`, `picture`, `css_title`, `updated_at`, `description`) VALUES
(188, 114, 1, 3472, 36685, 'Machine à Barbe à Papa', '49.9', '44.9', 'http://www.cadeau-maestro.com/machine-barbe-papa-rouge-3472.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3472_36685.jpg', '', '2016-12-05 09:49:56', NULL),
(189, 114, 2, 5826, 35892, 'Fontaine à Boisson Mason Jar 6,5 L', '42.9', '34.32', 'http://www.cadeau-maestro.com/fontaine-boisson-mason-jar-55l-5826.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5826_35892.jpg', '', '2016-12-05 09:49:56', NULL),
(190, 115, 0, 2372, 36427, 'Mini-séchoir à ongles Singe', '7.9', '7.9', 'http://www.cadeau-maestro.com/mini-sechoir-ongles-singe-2372.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2372_36427_big.jpg', '', '2016-12-07 17:38:39', NULL),
(191, 115, 1, 1834, 36891, 'Boîte 36 Epices Collection Le Monde en Tube', '58.9', '58.9', 'http://www.cadeau-maestro.com/boite-epices-collection-monde-en-tube-1834.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1834_36891_big.jpg', '', '2016-12-07 17:38:39', NULL),
(192, 116, 0, 176, 37006, 'Snug Rug Deluxe', '34.9', '27.92', 'http://www.cadeau-maestro.com/snug-rug-deluxe-176.html', 'http://www.cadeau-maestro.com/img/newsletter/news/176_37006.jpg', '', '2016-12-07 17:38:39', NULL),
(193, 116, 1, 5331, 32210, 'Bonnet de Douche Licorne', '6.9', '6.9', 'http://www.cadeau-maestro.com/bonnet-douche-licorne-5331.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5331_32210.jpg', '', '2016-12-07 17:38:39', NULL),
(194, 116, 2, 6287, 36625, 'Porte-Bagues Chat XL', '9.9', '9.9', 'http://www.cadeau-maestro.com/porte-bagues-chat-xl-6287.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6287_36625.jpg', '', '2016-12-07 17:38:39', NULL),
(195, 117, 0, 2729, 36683, 'Cuillères à Salade en Bois Guitare (x2)', '15.9', '15.9', 'http://www.cadeau-maestro.com/cuilleres-salade-en-bois-guitare-x2-2729.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2729_36683.jpg', '', '2016-12-07 17:38:39', NULL),
(196, 117, 1, 5708, 35516, 'Glaçons Flamants Roses Réutilisables (x40)', '14.9', '11.92', 'http://www.cadeau-maestro.com/glacons-flamants-roses-reutilisables-x40-5708.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5708_35516.jpg', '', '2016-12-07 17:38:39', NULL),
(197, 117, 2, 5704, 35384, 'Mug Chat Thermoréactif', '12.5', '12.5', 'http://www.cadeau-maestro.com/mug-chat-thermoreactif-5704.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5704_35384.jpg', '', '2016-12-07 17:38:39', NULL),
(198, 118, 0, 4440, 25714, 'Montre Humeur', '29.9', '23.92', 'http://www.cadeau-maestro.com/montre-humeur-4440.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4440_25714.jpg', '', '2016-12-07 17:38:39', NULL),
(199, 118, 1, 5826, 35892, 'Fontaine à Boisson Mason Jar 6,5 L', '42.9', '34.32', 'http://www.cadeau-maestro.com/fontaine-boisson-mason-jar-55l-5826.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5826_35892.jpg', '', '2016-12-07 17:38:39', NULL),
(200, 118, 2, 5450, 35327, 'Panneau à Message LightBox A4 (100 caractères)', '34.9', '29.9', 'http://www.cadeau-maestro.com/panneau-message-lightbox-a4-100-caracteres-5450.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5450_35327.jpg', '', '2016-12-07 17:38:39', NULL),
(201, 119, 0, 1268, 4522, 'Mug mélangeur automatique', '9.9', '9.9', 'http://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1268_4522_big.jpg', '', '2016-12-09 17:17:32', NULL),
(202, 119, 1, 5868, 36114, 'Kit Bière à Faire Soi-Même Brewbarrel Lager', '34.9', '34.9', 'http://www.cadeau-maestro.com/kit-biere-faire-soi-meme-brewbarrel-lager-5868.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5868_36114_big.jpg', '', '2016-12-09 17:17:32', NULL),
(203, 120, 0, 6158, 36428, 'Projecteur Personnalisable pour Smartphone', '35.9', '35.9', 'http://www.cadeau-maestro.com/projecteur-personnalisable-smartphone-6158.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6158_36428.jpg', '', '2016-12-09 17:17:32', NULL),
(204, 120, 1, 4691, 36546, 'Coffret 4 Verres et Carafe Enigme', '69.9', '69.9', 'http://www.cadeau-maestro.com/coffret-4-verres-carafe-enigme-4691.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4691_36546.jpg', '', '2016-12-09 17:17:32', NULL),
(205, 120, 2, 3488, 36959, 'Boite à Outils Deux Chocolats', '14.9', '14.9', 'http://www.cadeau-maestro.com/boite-outils-deux-chocolats-3488.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3488_36959.jpg', '', '2016-12-09 17:17:32', NULL),
(206, 121, 0, 3470, 31546, 'Plateau Coussin pour Tablette iBed en Bois', '16.9', '16.9', 'http://www.cadeau-maestro.com/plateau-coussin-pour-tablette-ibed-en-bois-3470.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3470_31546.jpg', '', '2016-12-09 17:17:32', NULL),
(207, 121, 1, 1075, 3930, 'Mini golf pour toilettes', '9.9', '9.9', 'http://www.cadeau-maestro.com/mini-golf-pour-toilettes-1075.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1075_3930.jpg', '', '2016-12-09 17:17:32', NULL),
(208, 121, 2, 432, 1385, 'Porte Cartes Dead Bbudd', '10', '8', 'http://www.cadeau-maestro.com/porte-cartes-dead-bbudd-432.html', 'http://www.cadeau-maestro.com/img/newsletter/news/432_1385.jpg', '', '2016-12-09 17:17:32', NULL),
(209, 122, 0, 5490, 34589, 'Mini Set Table de Pique-Nique', '18.9', '13.23', 'http://www.cadeau-maestro.com/mini-set-table-pique-nique-5490.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5490_34589.jpg', '', '2016-12-09 17:17:32', NULL),
(210, 122, 1, 2350, 13523, 'Pots à Crayons Caisses en Bois (x3)', '22.9', '19.46', 'http://www.cadeau-maestro.com/pots-crayons-caisses-en-bois-2350.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2350_13523.jpg', '', '2016-12-09 17:17:32', NULL),
(211, 122, 2, 264, 33006, 'Boîte à Outils Vin', '49.9', '37.42', 'http://www.cadeau-maestro.com/boite-outils-vin-264.html', 'http://www.cadeau-maestro.com/img/newsletter/news/264_33006.jpg', '', '2016-12-09 17:17:32', NULL),
(212, 123, 0, 5677, 35316, 'Petite Tirelire à Casser Cochon', '6.9', '6.9', 'http://www.cadeau-maestro.com/petite-tirelire-casser-cochon-5677.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5677_35316_big.jpg', '', '2016-12-12 11:53:03', 'Un moyen de faire des économies'),
(213, 123, 1, 4557, 26327, 'Pot à Lait Vache', '9.9', '9.9', 'http://www.cadeau-maestro.com/pot-lait-vache-4557.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4557_26327_big.jpg', '', '2016-12-12 11:53:03', 'Un pot à lait vache en céramique très mignon qui apportera un touche de tendresse à votre table à manger lors de vos pauses gourmandes...'),
(214, 124, 0, 6270, 36905, 'Houblon à Faire Pousser - 3ème Mi-Temps', '4.95', '4.95', 'http://www.cadeau-maestro.com/houblon-faire-pousser-3eme-mi-temps-6270.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6270_36905.jpg', '', '2016-12-12 11:53:03', 'Kit de plantation de houblonPlantez vos propres graines de houblon à bière Un cadeau original pour décorer ou déguster'),
(215, 124, 1, 3378, 34404, 'Porte Trombones Lapin', '12', '12', 'http://www.cadeau-maestro.com/porte-trombones-lapin-3378.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3378_34404.jpg', '', '2016-12-12 11:53:03', 'Découvrez ce gentil porte-trombones lapin qui viendra mettre une touche de nature et de douceur sur votre bureau...'),
(216, 124, 2, 5312, 31347, 'Peropon Chien Trèfle', '15.9', '15.9', 'http://www.cadeau-maestro.com/peropon-chien-trefle-5312.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5312_31347.jpg', '', '2016-12-12 11:53:03', NULL),
(217, 125, 0, 2411, 30109, 'Marque-Pages Jeune Pousse (x3)', '6.9', '6.9', 'http://www.cadeau-maestro.com/marque-pages-jeune-pousse-x3-2411.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2411_30109.jpg', '', '2016-12-12 11:53:03', 'Ces 3 jolis marque-pages en forme de jeunes pousse vertes vous permettront garder votre page pour le lendemain, soit par le haut du livre, soit directement à l''intérieur.'),
(218, 125, 1, 3075, 15939, 'Porte-Clés Scissors Plus', '9.9', '9.9', 'http://www.cadeau-maestro.com/porte-cls-scissors-plus-3075.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3075_15939.jpg', '', '2016-12-12 11:53:03', 'Découvrez ce porte-clés scissors en acier inoxydable 3 en 1 très pratique, qui vous offrira une paire de petits ciseaux, deux tournevis ainsi qu''un décapsuleur...'),
(219, 125, 2, 5165, 32214, 'Passoire Cochon', '14.9', '14.9', 'http://www.cadeau-maestro.com/passoire-cochon-5165.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5165_32214.jpg', '', '2016-12-12 11:53:03', NULL),
(220, 126, 0, 5791, 35777, 'Tirelire Panda Gourmand', '19.5', '19.5', 'http://www.cadeau-maestro.com/tirelire-panda-gourmand-5791.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5791_35777_big.jpg', '', '2016-12-13 16:34:46', 'Un petit cri de joie vient remercier votre don'),
(221, 126, 1, 5369, 32023, 'Poster 100 Lieux à Visiter Avant de Mourir', '27.9', '27.9', 'http://www.cadeau-maestro.com/poster-100-lieux-visiter-avant-de-mourir-5369.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5369_32023_big.jpg', '', '2016-12-13 16:34:46', 'Un bel objectif que chacun devrait avoir au cours de sa vie'),
(222, 127, 0, 2368, 35845, 'Rouge à Lèvres en Chocolat (x4)', '9.5', '9.5', 'http://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2368_35845.jpg', '', '2016-12-13 16:34:46', 'Quatre tubes de rouge à lèvres à déguster Pour toutes les gourmandes Un cadeau en chocolat très original'),
(223, 127, 1, 5905, 36441, 'Infinity Cube', '35.9', '35.9', 'http://www.cadeau-maestro.com/infinity-cube-5905.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5905_36441.jpg', '', '2016-12-13 16:34:46', 'La galaxie dans une boite'),
(224, 127, 2, 5743, 35572, 'Porte-Bijoux Ballerine Cuivré', '12', '12', 'http://www.cadeau-maestro.com/porte-bijoux-ballerine-cuivre-5743.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5743_35572.jpg', '', '2016-12-13 16:34:46', 'Mettez en valeur vos parures'),
(225, 128, 0, 6329, 37155, 'Coeur de Noël à Suspendre', '9.9', '9.9', 'http://www.cadeau-maestro.com/cour-noel-suspendre-6329.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6329_37155.jpg', '', '2016-12-13 16:34:46', 'A personnaliser'),
(226, 128, 1, 5650, 35125, 'Magnets Super Mario Bros.(x80)', '6.9', '6.9', 'http://www.cadeau-maestro.com/magnets-super-mario-bros-x80-5650.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5650_35125.jpg', '', '2016-12-13 16:34:46', 'Magnets sous licence Nintendo'),
(227, 128, 2, 1551, 30940, 'Set Thé ou Café Bouteille de Lait', '47.5', '47.5', 'http://www.cadeau-maestro.com/set-the-ou-cafe-bouteille-lait-1551.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1551_30940.jpg', '', '2016-12-13 16:34:46', 'Assortiment de tasses à café'),
(228, 130, 0, 5791, 35777, 'Tirelire Panda Gourmand', '19.5', '19.5', 'http://www.cadeau-maestro.com/tirelire-panda-gourmand-5791.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5791_35777_big.jpg', '', '2016-12-13 17:55:33', NULL),
(229, 130, 1, 5258, 32873, 'Stylo Licorne', '5.9', '5.9', 'http://www.cadeau-maestro.com/stylo-licorne-5258.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5258_32873_big.jpg', '', '2016-12-13 17:55:33', NULL),
(230, 131, 0, 5905, 36441, 'Infinity Cube', '35.9', '35.9', 'http://www.cadeau-maestro.com/infinity-cube-5905.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5905_36441.jpg', '', '2016-12-13 17:55:33', NULL),
(231, 131, 1, 521, 31323, 'Pistolet à Elastique en Bois', '18.9', '18.9', 'http://www.cadeau-maestro.com/pistolet-elastiques-en-bois-521.html', 'http://www.cadeau-maestro.com/img/newsletter/news/521_31323.jpg', '', '2016-12-13 17:55:33', NULL),
(232, 131, 2, 5609, 34803, 'Lampe 36 Briques Light Stax', '44.9', '44.9', 'http://www.cadeau-maestro.com/lampe-36-briques-light-stax-5609.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5609_34803.jpg', '', '2016-12-13 17:55:33', NULL),
(233, 132, 0, 5870, 36134, 'Luge Gonflable Emoji', '27.95', '27.95', 'http://www.cadeau-maestro.com/luge-gonflable-emoji-5870.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5870_36134.jpg', '', '2016-12-13 17:55:33', NULL),
(234, 132, 1, 2547, 11385, 'Coffret Deluxe 12 casse-têtes en bois', '72.9', '72.9', 'http://www.cadeau-maestro.com/coffret-deluxe-12-casse-tetes-en-bois-2547.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2547_11385.jpg', '', '2016-12-13 17:55:33', NULL),
(235, 132, 2, 530, 30258, 'Mini Billard de Table', '25', '25', 'http://www.cadeau-maestro.com/billard-table-530.html', 'http://www.cadeau-maestro.com/img/newsletter/news/530_30258.jpg', '', '2016-12-13 17:55:33', NULL),
(236, 133, 0, 4440, 25714, 'Montre Humeur', '29.9', '23.92', 'http://www.cadeau-maestro.com/montre-humeur-4440.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4440_25714.jpg', '', '2016-12-13 17:55:33', NULL),
(237, 133, 1, 5708, 35516, 'Glaçons Flamants Roses Réutilisables (x40)', '14.9', '11.92', 'http://www.cadeau-maestro.com/glacons-flamants-roses-reutilisables-x40-5708.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5708_35516.jpg', '', '2016-12-13 17:55:33', NULL),
(238, 133, 2, 1722, 6669, 'Mon Chien est une Star', '10.5', '9.97', 'http://www.cadeau-maestro.com/mon-chien-est-une-star-1722.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1722_6669.jpg', '', '2016-12-13 17:55:33', NULL),
(239, 134, 0, 2366, 33124, 'Manette de Jeu en Chocolat', '9.9', '9.9', 'http://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2366_33124_big.jpg', '', '2016-12-14 11:54:39', 'Une manette qui plaira à tous les amateurs de jeux vidéo mais aussi à tous les gourmands, puisqu''elle est en chocolat...'),
(240, 134, 1, 6121, 37252, 'Masque de Réalité Virtuelle Confort', '17.9', '17.9', 'http://www.cadeau-maestro.com/masque-de-realite-virtuelle-confort-6121.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6121_37252_big.jpg', '', '2016-12-14 11:54:39', 'Ne regardez plus vos films, vivez les ! Coussin oculaire pour plus de confort'),
(241, 135, 0, 1186, 6201, 'Mini Daily''s "Pour bien démarrer la journée"', '4.5', '4.5', 'http://www.cadeau-maestro.com/mini-daily-s-pour-bien-demarrer-journee-1186.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1186_6201.jpg', '', '2016-12-14 11:54:39', 'Ces mini Daily''s Fortune vous permettront de bien démarrer la journée, avec un message par jour pendant 30 jours, messages d''encouragement, de conseil, ou d''idée à mettre en pratique !'),
(242, 135, 1, 1492, 33235, 'Carnet Chocolat', '8.5', '8.5', 'http://www.cadeau-maestro.com/carnet-chocolat-1492.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1492_33235.jpg', '', '2016-12-14 11:54:39', 'Un bloc-notes pratique, pour tous les gourmands, sous la forme d''une tablette de chocolat très apétissante...'),
(243, 135, 2, 4145, 23085, 'Mug Coeur Pixels Thermoréactif', '9.9', '9.9', 'http://www.cadeau-maestro.com/mug-coeur-pixels-thermoreactif-4145.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4145_23085.jpg', '', '2016-12-14 11:54:39', 'Geek ou in love, ce mug coeur pixels thermoréactif trônera fièrement sur votre bureau ou dans votre cuisine. Il suffit de mettre une boisson chaude à l''intérieur pour que le rouge de la passion surgisse !'),
(244, 136, 0, 5258, 32873, 'Stylo Licorne', '5.9', '5.9', 'http://www.cadeau-maestro.com/stylo-licorne-5258.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5258_32873.jpg', '', '2016-12-14 11:54:39', 'Trouvez l’inspiration avec ce stylo licorne dont la crinière est aux couleurs de l’arc en ciel, et apportez un côté féérique à vos notes…'),
(245, 136, 1, 1549, 30447, 'Bloc-Notes Salami', '9.9', '9.9', 'http://www.cadeau-maestro.com/bloc-notes-salami-1549.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1549_30447.jpg', '', '2016-12-14 11:54:39', 'Mettez du fun dans toutes vos notes et petits messages, avec ce bloc-notes très fun, en forme de salami...'),
(246, 136, 2, 5709, 35412, 'Dissolvant pour Ongles aux Petits Gâteaux', '3.9', '3.9', 'http://www.cadeau-maestro.com/dissolvant-ongles-petits-gateaux-5709.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5709_35412.jpg', '', '2016-12-14 11:54:39', 'Petit dissolvant Parfum jasmin et petits gâteauxSans acétone, ni alcoolEnlevez votre vernis en un clin d’œil !'),
(247, 137, 0, 2366, 33124, 'Manette de Jeu en Chocolat', '9.9', '9.9', 'http://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2366_33124_big.jpg', '', '2016-12-16 17:02:46', NULL),
(248, 137, 1, 5653, 35378, 'Lampe Dark Vador 3D', '29.9', '29.9', 'http://www.cadeau-maestro.com/lampe-dark-vador-3d-5653.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5653_35378_big.jpg', '', '2016-12-16 17:02:46', NULL),
(249, 138, 0, 5463, 33026, 'Projecteur pour Smartphone Deluxe Cuivre', '35.9', '35.9', 'http://www.cadeau-maestro.com/projecteur-smartphone-deluxe-cuivre-5463.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5463_33026.jpg', '', '2016-12-16 17:02:46', NULL),
(250, 138, 1, 5800, 35962, 'Taies d''Oreiller Amoureux Bulles (x2)', '43.5', '43.5', 'http://www.cadeau-maestro.com/taies-oreiller-amoureux-bulles-5800.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5800_35962.jpg', '', '2016-12-16 17:02:46', NULL),
(251, 138, 2, 5907, 36179, 'Clap de Cinéma Lumineux Effaçable', '43.5', '43.5', 'http://www.cadeau-maestro.com/clap-cinema-lumineux-effacable-5907.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5907_36179.jpg', '', '2016-12-16 17:02:46', NULL),
(252, 139, 0, 936, 6202, 'Mini Daily''s "Pour retrouver une patate d''enfer"', '4.5', '4.5', 'http://www.cadeau-maestro.com/mini-daily-s-fortune-pour-retrouver-une-patate-enfer-936.html', 'http://www.cadeau-maestro.com/img/newsletter/news/936_6202.jpg', '', '2016-12-16 17:02:46', NULL),
(253, 139, 1, 6121, 37286, 'Masque de Réalité Virtuelle Confort', '17.9', '17.9', 'http://www.cadeau-maestro.com/masque-de-realite-virtuelle-confort-6121.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6121_37286.jpg', '', '2016-12-16 17:02:46', NULL),
(254, 139, 2, 6329, 37155, 'Coeur de Noël à Suspendre', '9.9', '9.9', 'http://www.cadeau-maestro.com/cour-noel-suspendre-6329.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6329_37155.jpg', '', '2016-12-16 17:02:46', NULL),
(255, 140, 0, 4126, 37003, 'Projecteur pour Smartphone', '25.9', '22.9', 'http://www.cadeau-maestro.com/projecteur-smartphone-4126.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4126_37003.jpg', '', '2016-12-16 17:02:46', NULL),
(256, 140, 1, 5826, 35892, 'Fontaine à Boisson Mason Jar 6,5 L', '42.9', '34.32', 'http://www.cadeau-maestro.com/fontaine-boisson-mason-jar-55l-5826.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5826_35892.jpg', '', '2016-12-16 17:02:46', NULL),
(257, 140, 2, 372, 15992, 'Bonnet MP3 Noir', '14.5', '13.05', 'http://www.cadeau-maestro.com/bonnet-mp3-ihat-372.html', 'http://www.cadeau-maestro.com/img/newsletter/news/372_15992.jpg', '', '2016-12-16 17:02:46', NULL),
(258, 141, 0, 3799, 36209, 'Globe Terrestre Lumineux', '110', '110', 'http://www.cadeau-maestro.com/globe-terrestre-lumineux-3799.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3799_36209_big.jpg', '', '2016-12-20 12:57:54', NULL),
(259, 141, 1, 3821, 32568, 'Distributeur de Coton Lapin', '13.5', '13.5', 'http://www.cadeau-maestro.com/distributeur-coton-lapin-3821.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3821_32568_big.jpg', '', '2016-12-20 12:57:54', NULL),
(260, 142, 0, 1332, 31703, 'Chauffe-Tasse Biscuit USB', '15.9', '15.9', 'http://www.cadeau-maestro.com/chauffe-tasse-usb-biscuit-1332.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1332_31703.jpg', '', '2016-12-20 12:57:54', NULL),
(261, 142, 1, 5500, 33811, 'Projecteur pour Smartphone Noir et Or', '35.9', '35.9', 'http://www.cadeau-maestro.com/projecteur-smartphone-noir-or-5500.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5500_33811.jpg', '', '2016-12-20 12:57:54', NULL),
(262, 142, 2, 3266, 34305, 'Kit Moléculaire Cocktail R-Evolution', '49.95', '49.95', 'http://www.cadeau-maestro.com/kit-moleculaire-cocktail-r-evolution-3266.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3266_34305.jpg', '', '2016-12-20 12:57:54', NULL),
(263, 143, 0, 5579, 36873, 'Boîte 9 Epices du Sud à Personnaliser', '35.9', '35.9', 'http://www.cadeau-maestro.com/boite-9-epices-sud-personnaliser-5579.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5579_36873.jpg', '', '2016-12-20 12:57:54', NULL),
(264, 143, 1, 2367, 36039, 'Clavier d''ordinateur en Chocolat', '12.9', '12.9', 'http://www.cadeau-maestro.com/clavier-ordinateur-en-chocolat-2367.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2367_36039.jpg', '', '2016-12-20 12:57:54', NULL),
(265, 143, 2, 6340, 37314, 'Boîte à Messages Merci Maman !', '6.99', '6.99', 'http://www.cadeau-maestro.com/boite-messages-merci-maman-6340.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6340_37314.jpg', '', '2016-12-20 12:57:54', NULL),
(266, 144, 0, 6046, 36542, 'Costume de Noël pour Chien', '14.9', '13.41', 'http://www.cadeau-maestro.com/costume-noel-chien-6046.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6046_36542.jpg', '', '2016-12-20 12:57:54', NULL),
(267, 144, 1, 372, 15992, 'Bonnet MP3 Noir', '14.5', '13.05', 'http://www.cadeau-maestro.com/bonnet-mp3-ihat-372.html', 'http://www.cadeau-maestro.com/img/newsletter/news/372_15992.jpg', '', '2016-12-20 12:57:54', NULL),
(268, 144, 2, 2350, 13523, 'Pots à Crayons Caisses en Bois (x3)', '22.9', '19.46', 'http://www.cadeau-maestro.com/pots-crayons-caisses-en-bois-2350.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2350_13523.jpg', '', '2016-12-20 12:57:54', NULL),
(269, 145, 0, 313, 36438, 'Trèfle à 4 feuilles', '3.5', '3.5', 'http://www.cadeau-maestro.com/trefle-4-feuilles-313.html', 'http://www.cadeau-maestro.com/img/newsletter/news/313_36438_big.jpg', '', '2016-12-28 09:10:21', NULL),
(270, 145, 1, 1186, 6201, 'Mini Daily''s "Pour bien démarrer la journée"', '4.5', '4.5', 'http://www.cadeau-maestro.com/mini-daily-s-pour-bien-demarrer-journee-1186.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1186_6201_big.jpg', '', '2016-12-28 09:10:21', NULL),
(271, 146, 0, 6350, 37453, 'Boîte Métal Positivez !', '6.99', '6.99', 'http://www.cadeau-maestro.com/boite-metal-positivez-6350.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6350_37453.jpg', '', '2016-12-28 09:10:21', NULL),
(272, 146, 1, 165, 35895, 'Lanterne Volante Ballon', '3.2', '3.2', 'http://www.cadeau-maestro.com/lanterne-volante-chinoise-165.html', 'http://www.cadeau-maestro.com/img/newsletter/news/165_35895.jpg', '', '2016-12-28 09:10:21', NULL),
(273, 146, 2, 5230, 34059, 'Anti-Goutte Liège (x3)', '10.5', '10.5', 'http://www.cadeau-maestro.com/anti-goutte-liege-x3-5230.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5230_34059.jpg', '', '2016-12-28 09:10:21', NULL),
(274, 147, 0, 3037, 15499, 'Lotus Flottant', '4.1', '4.1', 'http://www.cadeau-maestro.com/lanterne-flottante-nymphea-3037.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3037_15499.jpg', '', '2016-12-28 09:10:21', NULL),
(275, 147, 1, 3518, 19176, 'Mini Daily''s "Pour avoir une vie extra !"', '4.5', '4.5', 'http://www.cadeau-maestro.com/mini-daily-s-pour-avoir-une-vie-extra-3518.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3518_19176.jpg', '', '2016-12-28 09:10:21', NULL),
(276, 147, 2, 3600, 19876, 'Pochettes en Papier à Colorier (x8)', '3.75', '3.75', 'http://www.cadeau-maestro.com/pochettes-papier-colorier-x8-3600.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3600_19876.jpg', '', '2016-12-28 09:10:21', NULL),
(277, 148, 0, 3866, 23269, 'Livre sur le Bien Recevoir', '13.9', '8.9', 'http://www.cadeau-maestro.com/livre-sur-bien-recevoir-3866.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3866_23269.jpg', '', '2016-12-28 09:10:21', NULL),
(278, 148, 1, 4715, 33369, 'Cabas "Petit sac pour un grand bazar"', '4.5', '3.38', 'http://www.cadeau-maestro.com/cabas-petit-sac-pour-grand-bazar-4715.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4715_33369.jpg', '', '2016-12-28 09:10:21', NULL),
(279, 148, 2, 1089, 3965, 'Duo de Coquetiers Clowns', '15.9', '11.93', 'http://www.cadeau-maestro.com/duo-coquetiers-clowns-1089.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1089_3965.jpg', '', '2016-12-28 09:10:21', NULL),
(280, 149, 0, 5000, 35462, 'Gants de Réflexologie (x2)', '9.9', '9.9', 'http://www.cadeau-maestro.com/gants-reflexologie-5000.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5000_35462_big.jpg', '', '2016-12-30 16:25:27', NULL),
(281, 149, 1, 4055, 22649, 'Masseur De Tête Vibrant', '17.5', '17.5', 'http://www.cadeau-maestro.com/masseur-de-tete-vibrant-4055.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4055_22649_big.jpg', '', '2016-12-30 16:25:27', NULL),
(282, 150, 0, 1606, 6220, 'Bracelets Daily''s "Pour celle qui reste zen"', '4.9', '4.9', 'http://www.cadeau-maestro.com/bracelets-daily-s-pour-celle-qui-reste-zen-1606.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1606_6220.jpg', '', '2016-12-30 16:25:27', NULL),
(283, 150, 1, 1644, 31708, 'Brumisateur Vasque Arome', '39', '39', 'http://www.cadeau-maestro.com/brumisateur-vasque-arome-1644.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1644_31708.jpg', '', '2016-12-30 16:25:27', NULL),
(284, 150, 2, 5700, 35376, 'Patchs Pour Les Yeux Relaxant Panda', '5.9', '5.9', 'http://www.cadeau-maestro.com/patchs-yeux-relaxant-panda-5700.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5700_35376.jpg', '', '2016-12-30 16:25:27', NULL),
(285, 151, 0, 5402, 32435, 'Coussin Repose-Tête Chêne', '20.9', '20.9', 'http://www.cadeau-maestro.com/coussin-repose-tete-chene-5402.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5402_32435.jpg', '', '2016-12-30 16:25:27', NULL),
(286, 151, 1, 4992, 31741, 'Chaussettes de Réflexologie (x2)', '9.9', '9.9', 'http://www.cadeau-maestro.com/chaussettes-reflexologie-4992.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4992_31741.jpg', '', '2016-12-30 16:25:27', NULL),
(287, 151, 2, 4793, 36390, 'Thé Paresse', '9', '9', 'http://www.cadeau-maestro.com/the-paresse-4793.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4793_36390.jpg', '', '2016-12-30 16:25:27', NULL),
(288, 152, 0, 4720, 27334, 'Bloc de Bonnes Résolutions', '9.5', '9.5', 'http://www.cadeau-maestro.com/bloc-bonnes-resolutions-4720.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4720_27334.jpg', '', '2016-12-30 16:25:27', NULL),
(289, 152, 1, 5352, 37510, '30 Jours de Défis "Fitness"', '9.9', '9.9', 'http://www.cadeau-maestro.com/30-jours-defis-fitness-5352.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5352_37510.jpg', '', '2016-12-30 16:25:27', NULL),
(290, 152, 2, 2639, 11798, 'Billets d''Humeur "Pour ceux qui restent toujours hyper zen"', '10.5', '10.5', 'http://www.cadeau-maestro.com/billets-humeur-pour-ceux-qui-restent-toujours-hyper-zen-2639.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2639_11798.jpg', '', '2016-12-30 16:25:27', NULL),
(291, 153, 0, 653, 16111, 'Snug Rug Sherpa', '49.9', '49.9', 'http://www.cadeau-maestro.com/snug-rug-sherpa-653.html', 'http://www.cadeau-maestro.com/img/newsletter/news/653_16111_big.jpg', '', '2017-01-13 14:09:08', NULL),
(292, 153, 1, 3607, 31146, 'Set Fondue au Chocolat', '29.9', '29.9', 'http://www.cadeau-maestro.com/set-fondue-au-chocolat-3607.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3607_31146_big.jpg', '', '2017-01-13 14:09:08', NULL),
(293, 154, 0, 6363, 37519, 'Sac de Couchage Orque', '24.5', '24.5', 'http://www.cadeau-maestro.com/sac-couchage-orque-6363.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6363_37519.jpg', '', '2017-01-13 14:09:08', NULL),
(294, 154, 1, 3577, 30758, 'Chaussons Snoozies Vache', '9.95', '9.95', 'http://www.cadeau-maestro.com/chaussons-snoozies-vache-3577.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3577_30758.jpg', '', '2017-01-13 14:09:08', NULL),
(295, 154, 2, 4627, 26694, 'Bonnet MP3 Filaire', '26.9', '26.9', 'http://www.cadeau-maestro.com/bonnet-mp3-filaire-4627.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4627_26694.jpg', '', '2017-01-13 14:09:08', NULL),
(296, 155, 0, 2354, 36606, 'Pot de Crème pour les Mains Chouette', '7.5', '7.5', 'http://www.cadeau-maestro.com/pot-creme-pour-les-mains-chouette-2354.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2354_36606.jpg', '', '2017-01-13 14:09:08', NULL),
(297, 155, 1, 3329, 33783, 'Préparation pour Vin Chaud', '6.9', '6.9', 'http://www.cadeau-maestro.com/preparation-pour-vin-chaud-3329.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3329_33783.jpg', '', '2017-01-13 14:09:08', NULL),
(298, 155, 2, 3613, 32491, 'Bonnet Aviateur Pour Enfant', '29.9', '29.9', 'http://www.cadeau-maestro.com/bonnet-aviateur-pour-enfant-3613.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3613_32491.jpg', '', '2017-01-13 14:09:08', NULL),
(299, 156, 0, 3472, 36685, 'Machine à Barbe à Papa', '49.9', '44.9', 'http://www.cadeau-maestro.com/machine-barbe-papa-rouge-3472.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3472_36685.jpg', '', '2017-01-13 14:09:08', NULL),
(300, 156, 1, 1092, 3977, 'Verres à bière tranchés (x2)', '25', '18.75', 'http://www.cadeau-maestro.com/verres-biere-tranches-x2-1092.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1092_3977.jpg', '', '2017-01-13 14:09:08', NULL),
(301, 156, 2, 2177, 9767, 'Mug Cowgirl', '14.5', '10.87', 'http://www.cadeau-maestro.com/mug-cowgirl-2177.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2177_9767.jpg', '', '2017-01-13 14:09:08', NULL),
(302, 157, 0, 6121, 37286, 'Masque de Réalité Virtuelle Confort', '17.9', '17.9', 'http://www.cadeau-maestro.com/masque-de-realite-virtuelle-confort-6121.html', 'http://www.cadeau-maestro.com/img/newsletter/news/e27550437360bf6fd8a780a3ba3c5c9a.product.jpg', '', '2017-01-17 16:43:05', NULL),
(303, 157, 1, 4631, 26726, 'Enceinte Marshall Acton', '199', '199', 'http://www.cadeau-maestro.com/enceinte-marshall-acton-4631.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4d6e1aa69954d2b0c5c1578aca1ddd9b.product.jpg', '', '2017-01-17 16:43:05', NULL),
(304, 175, 0, 6394, 37723, '69 le Jeu', '40', '40', 'http://www.cadeau-maestro.com/69-le-jeu-6394.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6394_37723_big.jpg', '', '2017-01-24 14:05:22', 'Passez une soirée très sensuelle, 5 catégories de défis'),
(305, 175, 1, 3479, 18924, 'Cœur à Casser Chocolat Noir', '22.9', '22.9', 'http://www.cadeau-maestro.com/coeur-casser-chocolat-noir-3479.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3479_18924_big.jpg', '', '2017-01-24 14:05:22', 'Vous allez pouvoir offrir beaucoup d''amour et de gourmandise'),
(306, 176, 0, 6374, 37584, 'Coeur Saint-Valentin', '9.9', '9.9', 'http://www.cadeau-maestro.com/coeur-saint-valentin-6374.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6374_37584.jpg', '', '2017-01-24 14:05:22', 'Décoration unique spécial Saint-Valentin'),
(307, 176, 1, 4145, 23085, 'Mug Coeur Pixels Thermoréactif', '9.9', '9.9', 'http://www.cadeau-maestro.com/mug-coeur-pixels-thermoreactif-4145.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4145_23085.jpg', '', '2017-01-24 14:05:22', 'Geek ou in love, ce mug coeur pixels thermoréactif trônera fièrement sur votre bureau ou dans votre cuisine. Il suffit de mettre une boisson chaude à l''intérieur pour que le rouge de la passion surgisse !'),
(308, 176, 2, 4580, 26391, 'Chéquier Fantaisies Amoureuses', '10.9', '10.9', 'http://www.cadeau-maestro.com/chequier-fantaisies-amoureuses-4580.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4580_26391.jpg', '', '2017-01-24 14:05:22', '22 incitations dans ce chéquier Fantaisies Amoureuses'),
(309, 177, 0, 1154, 16076, 'Chocolate Body Paint', '10', '10', 'http://www.cadeau-maestro.com/chocolate-body-paint-1154.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1154_16076.jpg', '', '2017-01-24 14:05:22', 'Ce kit au chocolat vous accompagnera dans toutes vos soirées romantiques et escapades amoureuses en ajoutant une touche de gourmandise !'),
(310, 177, 1, 3490, 18959, 'Coffret Kamasutra Trois Chocolats', '14.9', '14.9', 'http://www.cadeau-maestro.com/coffret-kamasutra-trois-chocolats-3490.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3490_18959.jpg', '', '2017-01-24 14:05:22', 'Découvrez avec votre moitié ce coffret Kama Sutra Trois Chocolats, qui vous offrira une pause gourmande, et vous donnera peut-être des idées, à réaliser à deux...'),
(311, 177, 2, 5091, 28956, 'Corps à Cœur Kinky', '14.9', '14.9', 'http://www.cadeau-maestro.com/corps-coeur-kinky-5091.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5091_28956.jpg', '', '2017-01-24 14:05:22', 'Une boîte corps à cœur Kinky, contenant 100 défis pour explorer et découvrir ensemble des plaisirs cachés et inattendus…'),
(312, 178, 0, 2464, 18298, 'Carafe Enigme', '29.9', '29.9', 'http://www.cadeau-maestro.com/carafe-enigme-2464.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2464_18298.jpg', '', '2017-01-26 16:49:09', NULL),
(313, 178, 1, 6319, 37077, 'Tablier Bavoir à Barbe', '14.9', '14.9', 'http://www.cadeau-maestro.com/tablier-bavoir-barbe-6319.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6319_37077.jpg', '', '2017-01-26 16:49:09', NULL),
(314, 178, 2, 1755, 6859, 'Kama Poker', '19.9', '19.9', 'http://www.cadeau-maestro.com/kama-poker-1755.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1755_6859.jpg', '', '2017-01-26 16:49:09', NULL),
(315, 179, 0, 4580, 26391, 'Chéquier Fantaisies Amoureuses', '10.9', '10.9', 'http://www.cadeau-maestro.com/chequier-fantaisies-amoureuses-4580.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4580_26391.jpg', '', '2017-01-26 16:49:09', NULL),
(316, 179, 1, 5807, 36176, 'Lightbox A6 (90 caractères)', '19.5', '19.5', 'http://www.cadeau-maestro.com/lightbox-a6-90caracteres-5807.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5807_36176.jpg', '', '2017-01-26 16:49:09', NULL),
(317, 179, 2, 5113, 37611, 'Box Amoureux Mauve', '39.9', '39.9', 'http://www.cadeau-maestro.com/box-amoureux-mauve-5113.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5113_37611.jpg', '', '2017-01-26 16:49:09', NULL),
(318, 180, 0, 6374, 37584, 'Coeur Saint-Valentin', '9.9', '9.9', 'http://www.cadeau-maestro.com/coeur-saint-valentin-6374.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6374_37584.jpg', '', '2017-01-26 16:49:09', NULL),
(319, 180, 1, 3557, 19432, 'Mug Coeur Ardoise', '9.9', '9.9', 'http://www.cadeau-maestro.com/mug-coeur-ardoise-3557.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3557_19432.jpg', '', '2017-01-26 16:49:09', NULL),
(320, 180, 2, 928, 6204, 'Mini Daily''s "Pour faire craquer mon chéri"', '4.5', '4.5', 'http://www.cadeau-maestro.com/mini-daily-s-fortune-pour-faire-craquer-mon-cheri-928.html', 'http://www.cadeau-maestro.com/img/newsletter/news/928_6204.jpg', '', '2017-01-26 16:49:09', NULL),
(321, 181, 0, 5458, 32952, 'Mug Thermoréactif Panda', '19.9', '19.9', 'http://www.cadeau-maestro.com/mug-thermoreactif-panda-5458.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5458_32952.jpg', '', '2017-01-27 12:19:18', 'Endormi lorsqu''il ne contient pas de boisson chaude, il se réveillera et vous sourira dès que vous le remplirez d''eau chaude ...'),
(322, 181, 1, 3821, 32568, 'Distributeur de Coton Lapin', '13.5', '13.5', 'http://www.cadeau-maestro.com/distributeur-coton-lapin-3821.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3821_32568.jpg', '', '2017-01-27 12:19:18', 'Découvrez ce joli distributeur de coton lapin, en céramique, tout droit sorti d''Alice aux pays des Merveilles, et dont la queue sera en coton !'),
(323, 181, 2, 6374, 37584, 'Coeur Saint-Valentin Personnalisable', '9.9', '9.9', 'http://www.cadeau-maestro.com/coeur-saint-valentin-6374.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6374_37584.jpg', '', '2017-01-27 12:19:18', 'Décoration unique spécial Saint-Valentin a personnaliser'),
(324, 182, 0, 1673, 29996, 'Pouf Cupcake', '89', '89', 'http://www.cadeau-maestro.com/pouf-cupcake-1673.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1673_29996.jpg', '', '2017-01-27 12:19:18', 'Un superbe pouf en microbilles en forme de Cupcake géant à la crème ou au citron pour une déco très gourmande et tendance !'),
(325, 182, 1, 6333, 37173, 'Soins pour le Corps à Faire Soi-Même', '74.9', '74.9', 'http://www.cadeau-maestro.com/soins-corps-faire-soi-meme-6333.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6333_37173.jpg', '', '2017-01-27 12:19:18', 'Ingrédients 100% naturelsOutils haut de gammeLivret de recettesPrenez soin de votre peau'),
(326, 182, 2, 6394, 37723, '69 le Jeu', '40', '40', 'http://www.cadeau-maestro.com/69-le-jeu-6394.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6394_37723.jpg', '', '2017-01-27 12:19:18', 'Passez une soirée très sensuelle avec 5 catégories de défis'),
(327, 183, 0, 6319, 37077, 'Tablier Bavoir à Barbe', '14.9', '14.9', 'http://www.cadeau-maestro.com/tablier-bavoir-barbe-6319.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6319_37077.jpg', '', '2017-01-27 12:19:18', 'Tablier en polyester spécial barbe qui se ventouse à la glace'),
(328, 183, 1, 6038, 36734, 'Set Chocolats Geek', '19.9', '19.9', 'http://www.cadeau-maestro.com/set-chocolats-geek-6038.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6038_36734.jpg', '', '2017-01-27 12:19:18', 'Un coffret de trois pièces en chocolat à partager sans modération'),
(329, 183, 2, 5716, 35515, 'Parapluie pour Amoureux', '33.5', '33.5', 'http://www.cadeau-maestro.com/parapluie-amoureux-5716.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5716_35515.jpg', '', '2017-01-27 12:19:18', 'Égayez votre journée et partagez votre parapluie sans vous mouiller'),
(330, 184, 0, 6395, 37686, 'Oooh ! Le jeu de société osé !', '34.99', '34.99', 'http://www.cadeau-maestro.com/ooooh-jeu-societe-ose-6395.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6395_37686.jpg', '', '2017-01-27 12:19:18', 'De 2 à 12 joueurs avec 300 défis fun et sexy'),
(331, 184, 1, 6121, 37286, 'Masque de Réalité Virtuelle Confort', '17.9', '17.9', 'http://www.cadeau-maestro.com/masque-de-realite-virtuelle-confort-6121.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6121_37286.jpg', '', '2017-01-27 12:19:18', 'Profitez de la 3D, ne regardez plus vos films, vivez les !'),
(332, 184, 2, 6187, 36697, 'Carafe Verre à Vin Géant', '22.9', '22.9', 'http://www.cadeau-maestro.com/carafe-verre-vin-geant-6187.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6187_36697.jpg', '', '2017-01-27 12:19:18', 'Carafe géante pour décanter votre vin avec style'),
(333, 185, 0, 3316, 17954, 'Veilleuse Lapin pour Enfants', '6.9', '6.9', 'http://www.cadeau-maestro.com/veilleuse-lapin-pour-enfants-3316.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3316_17954_big.jpg', '', '2017-02-02 14:37:13', 'Partez pour un monde de douceur et de jolis rêves'),
(334, 185, 1, 2368, 35845, 'Rouge à Lèvres en Chocolat (x4)', '9.5', '9.5', 'http://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2368_35845_big.jpg', '', '2017-02-02 14:37:13', 'Quatre tubes de rouge à lèvres à déguster'),
(335, 186, 0, 4797, 27737, 'Coffret Cocktails So Pink Deluxe', '29.9', '29.9', 'http://www.cadeau-maestro.com/coffret-cocktails-so-pink-deluxe-4797.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4797_27737.jpg', '', '2017-02-02 14:37:13', 'Avec ce coffret cocktails So Pink Deluxe, vous pourrez préparer des cocktails gourmands et sucrés, dont la saveur est dominée par des fruits rouges.'),
(336, 186, 1, 6144, 37358, 'Porte-Éponge Lapin', '13.5', '13.5', 'http://www.cadeau-maestro.com/porte-eponge-lapin-6144.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6144_37358.jpg', '', '2017-02-02 14:37:13', 'Créez une déco mignonne, Éponge fournie et ventouses incluses'),
(337, 186, 2, 2112, 31162, 'Boite à musique Oiseau', '18.9', '18.9', 'http://www.cadeau-maestro.com/boite-musique-oiseau-chanteur-2112.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2112_31162.jpg', '', '2017-02-02 14:37:13', 'Dans cette jolie cage en bambou se cache un oiseau chanteur que vous pourrez entendre en tournant la clé mécanique...'),
(338, 187, 0, 2776, 14666, 'Agrafeuse Lapin', '10.9', '10.9', 'http://www.cadeau-maestro.com/agrafeuse-lapin-2776.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2776_14666.jpg', '', '2017-02-02 14:37:13', 'Ajoutez de la fraîcheur et de la délicatesse sur votre bureau'),
(339, 187, 1, 3476, 28148, 'Choco''Pizza La Bretonne Caramel et Biscuits', '19.9', '19.9', 'http://www.cadeau-maestro.com/choco-pizza-bretonne-caramel-et-biscuits-3476.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3476_28148.jpg', '', '2017-02-02 14:37:13', 'Découvrez cette choco'' pizza La bretonne caramel et biscuits qui changera de la traditionnelle spécialité italienne pour vous offrir des saveurs sucrées à souhait !'),
(340, 187, 2, 2654, 11915, 'Carte Lapins 3D Pop-Up', '8', '8', 'http://www.cadeau-maestro.com/carte-lapins-3d-pop-up-2654.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2654_11915.jpg', '', '2017-02-02 14:37:13', 'Une superbe carte pop-up qui une fois dépliée se balancera et animera ces 6 petits lapins blancs trop mignons en train de jouer dans les bois !'),
(341, 188, 0, 6374, 37584, 'Coeur Saint-Valentin Personnalisable', '9.9', '9.9', 'http://www.cadeau-maestro.com/coeur-saint-valentin-6374.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6374_37584.jpg', '', '2017-02-06 12:19:33', NULL),
(342, 188, 1, 224, 36125, 'Corps à Coeur Romantique', '14.9', '14.9', 'http://www.cadeau-maestro.com/corps-coeur-romantique-224.html', 'http://www.cadeau-maestro.com/img/newsletter/news/224_36125.jpg', '', '2017-02-06 12:19:33', NULL),
(343, 188, 2, 5582, 34862, 'Vaporisateur de Parfum Twist', '19.9', '19.9', 'http://www.cadeau-maestro.com/vaporisateur-parfum-twist-5582.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5582_34862.jpg', '', '2017-02-06 12:19:33', NULL),
(344, 189, 0, 453, 22179, 'Mug Coeur Thermoréactif', '14.5', '14.5', 'http://www.cadeau-maestro.com/mug-coeur-thermoreactif-453.html', 'http://www.cadeau-maestro.com/img/newsletter/news/453_22179.jpg', '', '2017-02-06 12:19:33', NULL),
(345, 189, 1, 4580, 26391, 'Chéquier Fantaisies Amoureuses', '10.9', '10.9', 'http://www.cadeau-maestro.com/chequier-fantaisies-amoureuses-4580.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4580_26391.jpg', '', '2017-02-06 12:19:33', NULL),
(346, 189, 2, 4818, 32219, 'Porte-Bagues Licorne', '6.5', '6.5', 'http://www.cadeau-maestro.com/porte-bagues-licorne-4818.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4818_32219.jpg', '', '2017-02-06 12:19:33', NULL),
(347, 190, 0, 1481, 32175, 'Clochette "Ring for Sex"', '5.9', '5.9', 'http://www.cadeau-maestro.com/clochette-ring-for-sex-1481.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1481_32175.jpg', '', '2017-02-06 12:19:33', NULL),
(348, 190, 1, 3960, 22320, 'Tablette Tactile en Chocolat', '19.9', '19.9', 'http://www.cadeau-maestro.com/tablette-tactile-en-chocolat-3960.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3960_22320.jpg', '', '2017-02-06 12:19:33', NULL),
(349, 190, 2, 3212, 33095, 'Action ou Vérité Edition Erotique', '19.5', '19.5', 'http://www.cadeau-maestro.com/action-ou-verite-edition-erotique-3212.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3212_33095.jpg', '', '2017-02-06 12:19:33', NULL),
(350, 191, 0, 6319, 37077, 'Tablier Bavoir à Barbe', '14.9', '14.9', 'http://www.cadeau-maestro.com/tablier-bavoir-barbe-6319.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6319_37077.jpg', '', '2017-02-06 12:19:33', NULL),
(351, 191, 1, 4758, 27510, 'Dés Orgie d''Amour (x5)', '10.9', '10.9', 'http://www.cadeau-maestro.com/des-orgie-amour-4758.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4758_27510.jpg', '', '2017-02-06 12:19:33', NULL),
(352, 191, 2, 5829, 35830, 'Kit de Rasage de Voyage', '18.9', '18.9', 'http://www.cadeau-maestro.com/kit-rasage-voyage-5829.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5829_35830.jpg', '', '2017-02-06 12:19:33', NULL),
(353, 192, 0, 4580, 26391, 'Chéquier Fantaisies Amoureuses', '10.9', '10.9', 'http://www.cadeau-maestro.com/chequier-fantaisies-amoureuses-4580.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4580_26391_big.jpg', '', '2017-02-09 16:13:43', NULL),
(354, 192, 1, 5218, 37745, 'Rose en Argent', '69.9', '69.9', 'http://www.cadeau-maestro.com/rose-argent-5218.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5218_37745_big.jpg', '', '2017-02-09 16:13:43', NULL),
(355, 193, 0, 5238, 37880, 'Veilleuse Licorne', '13.9', '13.9', 'http://www.cadeau-maestro.com/veilleuse-licorne-5238.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5238_37880.jpg', '', '2017-02-09 16:13:43', NULL),
(356, 193, 1, 453, 22179, 'Mug Coeur Thermoréactif', '14.5', '14.5', 'http://www.cadeau-maestro.com/mug-coeur-thermoreactif-453.html', 'http://www.cadeau-maestro.com/img/newsletter/news/453_22179.jpg', '', '2017-02-09 16:13:43', NULL),
(357, 193, 2, 5749, 35606, 'Porte-Bijoux Chats', '12', '12', 'http://www.cadeau-maestro.com/porte-bijoux-chats-5749.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5749_35606.jpg', '', '2017-02-09 16:13:43', NULL),
(358, 194, 0, 3211, 33094, 'Jeu Mission Intime', '46.9', '46.9', 'http://www.cadeau-maestro.com/jeu-mission-intime-3211.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3211_33094.jpg', '', '2017-02-09 16:13:43', NULL),
(359, 194, 1, 4860, 29960, 'Pouf Donut Coeur', '115', '115', 'http://www.cadeau-maestro.com/pouf-donut-coeur-4860.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4860_29960.jpg', '', '2017-02-09 16:13:43', NULL),
(360, 194, 2, 5450, 35327, 'Panneau à Message LightBox A4 (100 caractères)', '34.9', '29.9', 'http://www.cadeau-maestro.com/panneau-message-lightbox-a4-100-caracteres-5450.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5450_35327.jpg', '', '2017-02-09 16:13:43', NULL),
(361, 195, 0, 6400, 37763, 'Peluche Licorne Veilleuse', '39.9', '39.9', 'http://www.cadeau-maestro.com/peluche-licorne-veilleuse-6400.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6400_37763_big.jpg', '', '2017-02-17 16:42:26', NULL),
(362, 195, 1, 6454, 38071, 'Porte-Clés Cactus Plantochi Spike', '6.9', '6.9', 'http://www.cadeau-maestro.com/porte-cles-cactus-plantochi-spike-6454.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6454_38071_big.jpg', '', '2017-02-17 16:42:26', NULL),
(363, 196, 0, 6460, 38094, 'Carte du Monde à Gratter Ardoise', '33.9', '33.9', 'http://www.cadeau-maestro.com/carte-monde-gratter-ardoise-6460.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6460_38094.jpg', '', '2017-02-17 16:42:26', NULL),
(364, 196, 1, 2209, 9861, 'Tasse à Bec "Baby Duck Coffee"', '7.5', '7.5', 'http://www.cadeau-maestro.com/tasse-a-bec-baby-duck-coffee-2209.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2209_9861.jpg', '', '2017-02-17 16:42:26', NULL),
(365, 196, 2, 739, 37311, 'Gamelle Poisson pour Chat', '28.9', '28.9', 'http://www.cadeau-maestro.com/gamelle-pour-chat-poisson-739.html', 'http://www.cadeau-maestro.com/img/newsletter/news/739_37311.jpg', '', '2017-02-17 16:42:26', NULL),
(366, 197, 0, 1189, 4303, 'Coffret Je fais mes p''tits cocktails', '39.95', '39.95', 'http://www.cadeau-maestro.com/coffret-je-fais-mes-p-tits-cocktails-1189.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1189_4303.jpg', '', '2017-02-17 16:42:26', NULL),
(367, 197, 1, 2748, 38107, 'Bouillotte Licorne Micro-Ondable', '21.9', '21.9', 'http://www.cadeau-maestro.com/bouillotte-licorne-micro-ondable-2748.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2748_38107.jpg', '', '2017-02-17 16:42:26', NULL),
(368, 197, 2, 6448, 38054, 'EcoCube Arbre à Caramel', '7.9', '7.9', 'http://www.cadeau-maestro.com/ecocube-arbre-caramel-6448.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6448_38054.jpg', '', '2017-02-17 16:42:26', NULL),
(369, 198, 0, 5915, 36252, 'Tote Bag Mamie Gâteau', '15', '15', 'http://www.cadeau-maestro.com/sac-toile-mamie-gateau-5915.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5915_36252_big.jpg', '', '2017-02-24 13:48:07', NULL),
(370, 198, 1, 5577, 36876, 'Boîte 9 Epices Découverte à Personnaliser', '35.9', '35.9', 'http://www.cadeau-maestro.com/boite-9-epices-decouverte-personnaliser-5577.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5577_36876_big.jpg', '', '2017-02-24 13:48:07', NULL),
(371, 199, 0, 3768, 20933, 'Carte Géante Ce Grand Message de Notre Part à Tous !!!', '9.95', '9.95', 'http://www.cadeau-maestro.com/carte-geante-ce-grand-message-notre-part-tous-3768.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3768_20933.jpg', '', '2017-02-24 13:48:07', NULL),
(372, 199, 1, 4761, 30435, 'Parapluie Canne de Marche', '43.9', '43.9', 'http://www.cadeau-maestro.com/parapluie-canne-marche-4761.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4761_30435.jpg', '', '2017-02-24 13:48:07', NULL);
INSERT INTO `newsletter_product` (`id`, `newsletter_block_id`, `position`, `id_prestashop_product`, `id_prestashop_default_image`, `title`, `price`, `price_old`, `link`, `picture`, `css_title`, `updated_at`, `description`) VALUES
(373, 199, 2, 4458, 25703, 'Boîte à Pilules Rétro', '21.5', '21.5', 'http://www.cadeau-maestro.com/boite-pilules-retro-4458.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4458_25703.jpg', '', '2017-02-24 13:51:52', NULL),
(374, 200, 0, 5156, 29708, 'Serviteur 2 Etages en Ardoise', '16.9', '16.9', 'http://www.cadeau-maestro.com/serviteur-2-etages-ardoise-5156.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5156_29708.jpg', '', '2017-02-24 13:51:52', NULL),
(375, 200, 1, 4391, 30423, 'Théière en Verre Ora', '41.9', '41.9', 'http://www.cadeau-maestro.com/theiere-en-verre-ora-4391.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4391_30423.jpg', '', '2017-02-24 13:51:52', NULL),
(376, 200, 2, 810, 31707, 'Brumisateur Goutte d''Eau', '49.9', '49.9', 'http://www.cadeau-maestro.com/brumisateur-goutte-eau-810.html', 'http://www.cadeau-maestro.com/img/newsletter/news/810_31707.jpg', '', '2017-02-24 13:51:52', NULL),
(377, 201, 0, 1089, 3965, 'Duo de Coquetiers Clowns', '15.9', '11.93', 'http://www.cadeau-maestro.com/duo-coquetiers-clowns-1089.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1089_3965.jpg', '', '2017-02-24 13:51:52', NULL),
(378, 201, 1, 2350, 13523, 'Pots à Crayons Caisses en Bois (x3)', '22.9', '19.46', 'http://www.cadeau-maestro.com/pots-crayons-caisses-en-bois-2350.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2350_13523.jpg', '', '2017-02-24 13:51:52', NULL),
(379, 201, 2, 4481, 37378, 'Petit Radio Réveil Vintage', '39.9', '29.9', 'http://www.cadeau-maestro.com/petit-radio-reveil-vintage-4481.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4481_37378.jpg', '', '2017-02-24 13:51:52', NULL),
(380, 202, 0, 2817, 34105, 'Téléphone rétro 746', '64.9', '64.9', 'http://www.cadeau-maestro.com/telephone-retro-746-2817.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2817_34105_big.jpg', '', '2017-02-28 17:34:05', NULL),
(381, 202, 1, 4537, 30433, 'Porte-Bijoux Danseuse Ballerine', '9.9', '9.9', 'http://www.cadeau-maestro.com/porte-bijoux-danseuse-ballerine-4537.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4537_30433_big.jpg', '', '2017-02-28 17:34:05', NULL),
(382, 203, 0, 5305, 31218, 'Oeuf à Faire Pousser Eggling Fraise', '9.9', '9.9', 'http://www.cadeau-maestro.com/oeuf-faire-pousser-eggling-fraise-5305.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5305_31218.jpg', '', '2017-02-28 17:34:05', NULL),
(383, 203, 1, 1854, 36870, 'Dessous de Plat Palette', '10.5', '10.5', 'http://www.cadeau-maestro.com/dessous-plat-palette-1854.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1854_36870.jpg', '', '2017-02-28 17:34:05', NULL),
(384, 203, 2, 592, 36673, 'Fontaine à Eau de Décoration', '43', '43', 'http://www.cadeau-maestro.com/fontaine-eau-decoration-592.html', 'http://www.cadeau-maestro.com/img/newsletter/news/592_36673.jpg', '', '2017-02-28 17:34:05', NULL),
(385, 204, 0, 2892, 30267, 'Gratte Dos Téléscopique en Bois', '6.9', '6.9', 'http://www.cadeau-maestro.com/gratte-dos-telescopique-en-bois-2892.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2892_30267.jpg', '', '2017-02-28 17:34:05', NULL),
(386, 204, 1, 6416, 37871, 'Diffuseur d''Ambiance Sissi', '64.9', '64.9', 'http://www.cadeau-maestro.com/diffuseur-d-ambiance-sissi-6416.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6416_37871.jpg', '', '2017-02-28 17:34:05', NULL),
(387, 204, 2, 2293, 30090, 'Livre de Recettes de Famille', '28.9', '28.9', 'http://www.cadeau-maestro.com/livre-recettes-famille-2293.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2293_30090.jpg', '', '2017-02-28 17:34:05', NULL),
(388, 205, 0, 3124, 31417, 'Verre à Bière Demi-Pinte', '14.5', '14.5', 'https://www.cadeau-maestro.com/verre-biere-demi-pinte-3124.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3124_31417_big.jpg', '', '2017-03-10 10:10:24', NULL),
(389, 205, 1, 5867, 36110, 'Kit Bière à Faire Soi-Même Brewbarrel Oktoberfest', '39.9', '39.9', 'https://www.cadeau-maestro.com/kit-biere-faire-soi-meme-brewbarrel-oktoberfest-5867.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5867_36110_big.jpg', '', '2017-03-10 10:10:24', NULL),
(390, 206, 0, 6086, 36566, 'Jeu Beer IQ', '22', '22', 'https://www.cadeau-maestro.com/jeu-beer-iq-6086.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6086_36566.jpg', '', '2017-03-10 10:10:24', NULL),
(391, 206, 1, 1524, 30140, 'Décapsuleur catcheur mexicain', '7.9', '7.9', 'https://www.cadeau-maestro.com/decapsuleur-catcheur-mexicain-1524.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1524_30140.jpg', '', '2017-03-10 10:10:24', NULL),
(392, 206, 2, 5655, 35143, 'Beer Pong Géant', '13', '13', 'https://www.cadeau-maestro.com/beer-pong-geant-5655.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5655_35143.jpg', '', '2017-03-10 10:10:24', NULL),
(393, 207, 0, 313, 36438, 'Trèfle à 4 feuilles', '3.5', '3.5', 'https://www.cadeau-maestro.com/trefle-4-feuilles-313.html', 'http://www.cadeau-maestro.com/img/newsletter/news/313_36438.jpg', '', '2017-03-10 10:10:24', NULL),
(394, 207, 1, 4482, 26001, 'Magnet J''ai Bu', '2.5', '2.5', 'https://www.cadeau-maestro.com/magnet-j-ai-bu-4482.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4482_26001.jpg', '', '2017-03-10 10:10:24', NULL),
(395, 207, 2, 4888, 32229, 'Set Verres à Bière', '42.9', '42.9', 'https://www.cadeau-maestro.com/set-verres-biere-4888.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4888_32229.jpg', '', '2017-03-10 10:10:24', NULL),
(396, 208, 0, 3472, 36685, 'Machine à Barbe à Papa', '49.9', '44.9', 'https://www.cadeau-maestro.com/machine-barbe-papa-rouge-3472.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3472_36685.jpg', '', '2017-03-10 10:10:25', NULL),
(397, 208, 1, 570, 2060, 'Boule Mystique', '12', '9.6', 'https://www.cadeau-maestro.com/boule-mystique-570.html', 'http://www.cadeau-maestro.com/img/newsletter/news/570_2060.jpg', '', '2017-03-10 10:10:25', NULL),
(398, 208, 2, 5443, 35881, 'Matelas Gonflable Beer Pong', '54.9', '41.18', 'https://www.cadeau-maestro.com/matelas-gonflable-beer-pong-5443.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5443_35881.jpg', '', '2017-03-10 10:10:25', NULL),
(399, 209, 0, 2739, 30343, 'Mug Printemps Thermoréactif', '11.9', '11.9', 'https://www.cadeau-maestro.com/mug-printemps-thermoreactif-2739.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2739_30343_big.jpg', '', '2017-03-20 14:46:20', NULL),
(400, 209, 1, 6499, 38292, 'Papa Peropon Chien', '33.5', '33.5', 'https://www.cadeau-maestro.com/papa-peropon-chien-6499.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6499_38292_big.jpg', '', '2017-03-20 14:46:20', NULL),
(401, 210, 0, 6522, 38369, 'Mug Kawaii Friends Renard', '11.5', '11.5', 'https://www.cadeau-maestro.com/mug-kawaii-friends-renard-6522.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6522_38369.jpg', '', '2017-03-20 14:46:20', NULL),
(402, 210, 1, 6485, 38255, 'Oeuf à Faire Pousser Eggling Tournesol', '9.9', '9.9', 'https://www.cadeau-maestro.com/oeuf-faire-pousser-eggling-tournesol-6485.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6485_38255.jpg', '', '2017-03-20 14:46:20', NULL),
(403, 210, 2, 6528, 38393, 'Étui à Lunettes de Soleil Pastèque', '8.5', '8.5', 'https://www.cadeau-maestro.com/etui-a-lunettes-de-soleil-pasteque-6528.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6528_38393.jpg', '', '2017-03-20 14:46:20', NULL),
(404, 211, 0, 3619, 37320, 'Kit Jardin de Bureau', '34', '34', 'https://www.cadeau-maestro.com/kit-jardin-bureau-3619.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3619_37320.jpg', '', '2017-03-20 14:46:20', NULL),
(405, 211, 1, 2467, 11602, 'Carnet du Potager', '8.9', '8.9', 'https://www.cadeau-maestro.com/carnet-du-potager-2467.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2467_11602.jpg', '', '2017-03-20 14:46:20', NULL),
(406, 211, 2, 5233, 30563, 'Guirlande Lumineuse Flamants Roses', '16.9', '16.9', 'https://www.cadeau-maestro.com/guirlande-lumineuse-flamants-roses-5233.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5233_30563.jpg', '', '2017-03-20 14:46:20', NULL),
(407, 212, 0, 3485, 18939, 'Coffret Mini-Tablettes Chocolat', '19.9', '15.92', 'https://www.cadeau-maestro.com/coffret-mini-tablettes-chocolat-3485.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3485_18939_big.jpg', '', '2017-03-30 16:23:56', NULL),
(408, 212, 1, 3961, 23753, 'Tablette de Chocolat Morpion', '6.5', '3.25', 'https://www.cadeau-maestro.com/tablette-chocolat-morpion-3961.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3961_23753_big.jpg', '', '2017-03-30 16:23:56', NULL),
(409, 213, 0, 3488, 36959, 'Boite à Outils Deux Chocolats', '14.9', '14.9', 'https://www.cadeau-maestro.com/boite-outils-deux-chocolats-3488.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3488_36959.jpg', '', '2017-03-30 16:23:56', NULL),
(410, 213, 1, 5850, 36136, 'Boîte de Crêpes Dentelles', '13.95', '6.97', 'https://www.cadeau-maestro.com/boite-crepes-dentelles-5850.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5850_36136.jpg', '', '2017-03-30 16:23:56', NULL),
(411, 213, 2, 6034, 37033, 'Plaque Chocolat Noir Joyeux Anniversaire', '14.9', '10.43', 'https://www.cadeau-maestro.com/plaque-chocolat-noir-joyeux-anniversaire-6034.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6034_37033.jpg', '', '2017-03-30 16:23:56', NULL),
(412, 214, 0, 2366, 33124, 'Manette de Jeu en Chocolat', '9.5', '9.5', 'https://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2366_33124.jpg', '', '2017-03-30 16:23:56', NULL),
(413, 214, 1, 3477, 28150, 'Choco''Pizza L''Italienne Chocolat Noisettes', '19.9', '19.9', 'https://www.cadeau-maestro.com/choco-pizza-italienne-chocolat-noisettes-3477.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3477_28150.jpg', '', '2017-03-30 16:23:56', NULL),
(414, 214, 2, 6531, 38400, 'Grains de Chocolat "Tu es Merveilleux"', '3.95', '3.95', 'https://www.cadeau-maestro.com/grains-chocolat-merveilleux-6531.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6531_38400.jpg', '', '2017-03-30 16:23:56', NULL),
(415, 215, 0, 3961, 23753, 'Tablette de Chocolat Morpion', '6.5', '3.25', 'https://www.cadeau-maestro.com/tablette-chocolat-morpion-3961.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3961_23753_big.jpg', '', '2017-04-11 17:22:52', NULL),
(416, 215, 1, 6039, 36999, 'Coffret du Jardinier en Chocolat', '18', '18', 'https://www.cadeau-maestro.com/coffret-jardinier-chocolat-6039.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6039_36999_big.jpg', '', '2017-04-11 17:22:52', NULL),
(417, 216, 0, 2606, 36049, 'Appareil Photo en Chocolat', '9.5', '9.5', 'https://www.cadeau-maestro.com/appareil-photo-en-chocolat-2606.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2606_36049.jpg', '', '2017-04-11 17:22:52', NULL),
(418, 216, 1, 3485, 18939, 'Coffret Mini-Tablettes Chocolat', '19.9', '15.92', 'https://www.cadeau-maestro.com/coffret-mini-tablettes-chocolat-3485.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3485_18939.jpg', '', '2017-04-11 17:22:52', NULL),
(419, 216, 2, 2368, 35845, 'Rouge à Lèvres en Chocolat (x4)', '9.5', '9.5', 'https://www.cadeau-maestro.com/rouge-levres-chocolat-x4-2368.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2368_35845.jpg', '', '2017-04-11 17:22:52', NULL),
(420, 217, 0, 2366, 33124, 'Manette de Jeu en Chocolat', '9.5', '9.5', 'https://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2366_33124.jpg', '', '2017-04-11 17:22:53', NULL),
(421, 217, 1, 3476, 28148, 'Choco''Pizza La Bretonne Caramel et Biscuits', '19.9', '19.9', 'https://www.cadeau-maestro.com/choco-pizza-bretonne-caramel-et-biscuits-3476.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3476_28148.jpg', '', '2017-04-11 17:22:53', NULL),
(422, 217, 2, 6034, 37033, 'Plaque Chocolat Noir Joyeux Anniversaire', '14.9', '10.43', 'https://www.cadeau-maestro.com/plaque-chocolat-noir-joyeux-anniversaire-6034.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6034_37033.jpg', '', '2017-04-11 17:22:53', NULL),
(423, 218, 0, 313, 36438, 'Trèfle à 4 feuilles', '3.5', '3.5', 'https://www.cadeau-maestro.com/trefle-4-feuilles-313.html', 'http://www.cadeau-maestro.com/img/newsletter/news/313_36438_big.jpg', '', '2017-04-20 15:17:58', NULL),
(424, 218, 1, 2366, 33124, 'Manette de Jeu en Chocolat', '9.5', '9.5', 'https://www.cadeau-maestro.com/manette-jeu-en-chocolat-2366.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2366_33124_big.jpg', '', '2017-04-20 15:17:58', NULL),
(425, 219, 0, 6656, 38992, 'Fidget Cube Sensoriel de Bureau', '6.9', '6.9', 'https://www.cadeau-maestro.com/fidget-cube-sensoriel-bureau-6656.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6656_38992.jpg', '', '2017-04-20 15:17:58', NULL),
(426, 219, 1, 6319, 37077, 'Tablier Bavoir à Barbe', '14.9', '14.9', 'https://www.cadeau-maestro.com/tablier-bavoir-barbe-6319.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6319_37077.jpg', '', '2017-04-20 15:17:58', NULL),
(427, 219, 2, 5370, 32016, 'Poster 100 Choses à Faire Avant de Mourir', '27.9', '27.9', 'https://www.cadeau-maestro.com/poster-100-choses-faire-avant-mourir-5370.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5370_32016.jpg', '', '2017-04-20 15:17:58', NULL),
(428, 220, 0, 1532, 31373, 'Papier à gratter multicolore (x125)', '10.9', '10.9', 'https://www.cadeau-maestro.com/papier-gratter-multicolore-1532.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1532_31373.jpg', '', '2017-04-20 15:17:58', NULL),
(429, 220, 1, 6066, 36778, 'Double Distributeur de Céréales', '36.5', '36.5', 'https://www.cadeau-maestro.com/double-distributeur-de-cereales-6066.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6066_36778.jpg', '', '2017-04-20 15:17:58', NULL),
(430, 220, 2, 6460, 38094, 'Carte du Monde à Gratter Ardoise', '33.9', '33.9', 'https://www.cadeau-maestro.com/carte-monde-gratter-ardoise-6460.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6460_38094.jpg', '', '2017-04-20 15:17:58', NULL),
(431, 221, 0, 5850, 35981, 'Boîte de Crêpes Dentelles', '13.95', '6.97', 'https://www.cadeau-maestro.com/boite-crepes-dentelles-5850.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5850_35981.jpg', '', '2017-04-20 15:17:58', NULL),
(432, 221, 1, 5860, 36132, 'Boîte de Cookies', '13.95', '10.46', 'https://www.cadeau-maestro.com/boite-cookies-5860.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5860_36132.jpg', '', '2017-04-20 15:17:58', NULL),
(433, 221, 2, 3961, 23753, 'Tablette de Chocolat Morpion', '6.5', '3.25', 'https://www.cadeau-maestro.com/tablette-chocolat-morpion-3961.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3961_23753.jpg', '', '2017-04-20 15:17:58', NULL),
(434, 222, 0, 4391, 30423, 'Théière en Verre Ora', '41.9', '41.9', 'https://www.cadeau-maestro.com/theiere-en-verre-ora-4391.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4391_30423_big.jpg', '', '2017-04-28 15:24:42', NULL),
(435, 222, 1, 6738, 39406, 'Porte-Bijoux Main en Bois', '37.9', '37.9', 'https://www.cadeau-maestro.com/porte-bijoux-main-en-bois-6738.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6738_39406_big.jpg', '', '2017-04-28 15:24:42', NULL),
(436, 223, 0, 6315, 37101, 'Soins SPA à Faire Soi-Même', '59.95', '59.95', 'https://www.cadeau-maestro.com/soins-spa-faire-soi-meme-6315.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6315_37101.jpg', '', '2017-04-28 15:24:42', NULL),
(437, 223, 1, 2618, 15676, 'Boule à Thé Mister Tea', '11.9', '11.9', 'https://www.cadeau-maestro.com/boule-the-mister-tea-2618.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2618_15676.jpg', '', '2017-04-28 15:24:42', NULL),
(438, 224, 0, 6721, 39342, 'Porte-Bijoux Birds Cuivré', '12', '12', 'https://www.cadeau-maestro.com/porte-bijoux-birds-cuivre-6721.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6721_39342.jpg', '', '2017-04-28 15:24:42', NULL),
(439, 224, 1, 3725, 37615, 'Diffuseur de Parfum George Soft', '79.9', '79.9', 'https://www.cadeau-maestro.com/diffuseur-parfum-george-soft-3725.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3725_37615.jpg', '', '2017-04-28 15:24:42', NULL),
(440, 224, 2, 6435, 37990, 'Boîte Ingrédients Secrets 36 Epices À Personnaliser', '62.9', '62.9', 'https://www.cadeau-maestro.com/boite-ingredients-secrets-36-epices-personnalisable-6435.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6435_37990.jpg', '', '2017-04-28 15:24:42', NULL),
(441, 225, 0, 5860, 36132, 'Boîte de Cookies', '13.95', '10.46', 'https://www.cadeau-maestro.com/boite-cookies-5860.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5860_36132_big.jpg', '', '2017-04-28 15:24:42', NULL),
(442, 225, 1, 4716, 27296, 'Cabas "Pas de femme sans sac"', '4.5', '3.38', 'https://www.cadeau-maestro.com/cabas-pas-femme-sans-sac-4716.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4716_27296_big.jpg', '', '2017-04-28 15:24:42', NULL),
(443, 223, 2, 5663, 39412, 'Distributeur de Boisson en Verre 3,5L', '8.9', '8.9', 'https://www.cadeau-maestro.com/distributeur-de-boisson-en-verre-35l-5663.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5663_39412.jpg', '', '2017-04-28 15:40:17', NULL),
(444, 226, 0, 5914, 39698, 'Tablier Super Maman', '30', '30', 'https://www.cadeau-maestro.com/tablier-super-maman-5914.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5914_39698_big.jpg', '', '2017-05-09 11:55:06', NULL),
(445, 226, 1, 6787, 39695, 'Cœur Bonne Fête Maman À Personnaliser', '9.9', '9.9', 'https://www.cadeau-maestro.com/coeur-bonne-fete-maman-personnaliser-6787.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6787_39695_big.jpg', '', '2017-05-09 11:55:06', NULL),
(446, 227, 0, 6781, 39648, 'Chaussons Licorne', '13.9', '13.9', 'https://www.cadeau-maestro.com/chaussons-licorne-6781.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6781_39648.jpg', '', '2017-05-09 11:57:14', NULL),
(447, 227, 1, 6743, 39434, '30 Jours de Défis "Cuisine"', '9.9', '9.9', 'https://www.cadeau-maestro.com/30-jours-defi-cuisine-6743.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6743_39434.jpg', '', '2017-05-09 11:57:14', NULL),
(448, 227, 2, 6332, 37165, 'Soins Hydratants pour le Visage à Faire Soi-Même', '74.95', '74.95', 'https://www.cadeau-maestro.com/soins-hydratants-visage-faire-soi-meme-6332.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6332_37165.jpg', '', '2017-05-09 11:57:14', NULL),
(449, 228, 0, 4090, 39674, 'Tote Bag Ma Maman c''est la Plus Belle', '15', '15', 'https://www.cadeau-maestro.com/sac-toile-maman-plus-belle-4090.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4090_39674.jpg', '', '2017-05-09 11:58:24', NULL),
(450, 228, 1, 6751, 39465, 'Vase Heureux', '57.9', '57.9', 'https://www.cadeau-maestro.com/vase-heureux-6751.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6751_39465.jpg', '', '2017-05-09 12:00:47', NULL),
(451, 228, 2, 3887, 34707, 'Lampe à Livre Pince à Linge', '9.9', '9.9', 'https://www.cadeau-maestro.com/lampe-livre-pince-linge-3887.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3887_34707.jpg', '', '2017-05-09 12:00:47', NULL),
(452, 229, 0, 6813, 39837, 'Lampe Fête des Mères à Personnaliser', '49.9', '49.9', 'https://www.cadeau-maestro.com/lampe-fete-meres-personnaliser-6813.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6813_39837_big.jpg', '', '2017-05-15 12:36:16', NULL),
(453, 229, 1, 1091, 3973, 'Vase Mondri', '79.9', '79.9', 'https://www.cadeau-maestro.com/vase-mondri-1091.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1091_3973_big.jpg', '', '2017-05-15 12:36:16', NULL),
(454, 230, 0, 5450, 35327, 'Panneau à Message LightBox A4 USB (100 caractères)', '34.9', '29.9', 'https://www.cadeau-maestro.com/panneau-message-lightbox-a4-100-caracteres-5450.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5450_35327.jpg', '', '2017-05-15 12:36:16', NULL),
(455, 230, 1, 6824, 39846, 'Neon Coeur Socle Ciment', '75', '75', 'https://www.cadeau-maestro.com/neon-flamand-rose-socle-ciment-6824.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6824_39846.jpg', '', '2017-05-15 12:36:16', NULL),
(456, 230, 2, 2732, 31570, 'Nuage Arrosoir Rainy Pot', '35', '35', 'https://www.cadeau-maestro.com/nuage-arrosoir-rainy-pot-2732.html', 'http://www.cadeau-maestro.com/img/newsletter/news/2732_31570.jpg', '', '2017-05-15 12:36:16', NULL),
(457, 231, 0, 6717, 39326, 'Planche à Découper Restaurant Français À Personnaliser', '25.9', '25.9', 'https://www.cadeau-maestro.com/planche-decouper-personnaliser-restaurant-francais-6717.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6717_39326.jpg', '', '2017-05-15 12:36:16', NULL),
(458, 231, 1, 4091, 39680, 'Tote Bag Ma Maman Distributeur de Calins', '15', '15', 'https://www.cadeau-maestro.com/sac-toile-maman-distributeur-calins-4091.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4091_39680.jpg', '', '2017-05-15 12:36:16', NULL),
(459, 231, 2, 5320, 31423, 'Tableau Mappemonde en Liège', '24', '24', 'https://www.cadeau-maestro.com/tableau-mappemonde-liege-5320.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5320_31423.jpg', '', '2017-05-15 12:36:16', NULL),
(460, 232, 0, 3485, 18939, 'Coffret Mini-Tablettes Chocolat', '19.9', '15.92', 'https://www.cadeau-maestro.com/coffret-mini-tablettes-chocolat-3485.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3485_18939.jpg', '', '2017-05-15 12:36:16', NULL),
(461, 232, 1, 5571, 34472, 'Bouée XL Flamant Rose', '52', '41.6', 'https://www.cadeau-maestro.com/bouee-xl-flamant-rose-5571.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5571_34472.jpg', '', '2017-05-15 12:36:16', NULL),
(462, 232, 2, 1749, 13876, 'Carte Graphique 60ties', '4', '2', 'https://www.cadeau-maestro.com/carte-graphique-60ties-1749.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1749_13876.jpg', '', '2017-05-15 12:36:16', NULL),
(463, 233, 0, 6813, 39837, 'Lampe Fête des Mères à Personnaliser', '49.9', '49.9', 'https://www.cadeau-maestro.com/lampe-fete-meres-personnaliser-6813.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6813_39837_big.jpg', '', '2017-05-19 16:58:22', NULL),
(464, 233, 1, 4093, 39684, 'Tote Bag Super Maman', '15', '15', 'https://www.cadeau-maestro.com/sac-toile-super-maman-4093.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4093_39684_big.jpg', '', '2017-05-19 16:58:22', NULL),
(465, 234, 0, 6791, 39778, 'Cœur Maman À Personnaliser', '9.9', '9.9', 'https://www.cadeau-maestro.com/cur-maman-personnaliser-6791.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6791_39778.jpg', '', '2017-05-19 16:58:22', NULL),
(466, 234, 1, 1036, 30531, 'Bol Humeur du Matin Gourmand', '17.95', '17.95', 'https://www.cadeau-maestro.com/bol-humeur-matin-gourmand-1036.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1036_30531.jpg', '', '2017-05-19 16:58:22', NULL),
(467, 234, 2, 6828, 39891, 'Écharpe Maman à Personnaliser', '16.9', '16.9', 'https://www.cadeau-maestro.com/echarpe-maman-a-personnaliser-6828.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6828_39891.jpg', '', '2017-05-19 16:58:22', NULL),
(468, 235, 0, 5603, 34839, 'Grand Globe Terrestre Cassini Mova', '290', '290', 'https://www.cadeau-maestro.com/grand-globe-terrestre-cassini-mova-5603.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5603_34839.jpg', '', '2017-05-19 16:58:22', NULL),
(469, 235, 1, 5329, 31503, 'Chauffe-Tasse Donut USB', '15.9', '15.9', 'https://www.cadeau-maestro.com/chauffe-tasse-donut-usb-5329.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5329_31503.jpg', '', '2017-05-19 16:58:22', NULL),
(470, 235, 2, 6845, 39948, 'Livre "Pour Une Mère en Or"', '9.5', '9.5', 'https://www.cadeau-maestro.com/livre-pour-une-mere-en-or-6845.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6845_39948.jpg', '', '2017-05-19 16:58:22', NULL),
(471, 236, 0, 6945, 40351, 'Flasque Papa À Personnaliser', '19.9', '19.9', 'https://www.cadeau-maestro.com/flasque-papa-personnaliser-6945.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6945_40351_big.jpg', '', '2017-06-02 16:35:09', NULL),
(472, 236, 1, 6925, 40258, 'Lampe Super Papa À Personnaliser', '45', '45', 'https://www.cadeau-maestro.com/lampe-super-papa-personnaliser-6925.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6925_40258_big.jpg', '', '2017-06-02 16:35:09', NULL),
(473, 237, 0, 6947, 40364, 'Boîte 36 Épices Papa à Personnaliser', '62.9', '62.9', 'https://www.cadeau-maestro.com/boite-36-epices-papa-personnaliser-6947.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6947_40364.jpg', '', '2017-06-02 16:35:09', NULL),
(474, 237, 1, 6946, 40353, 'Guillotine à Saucisson Laguiole Papa à Personnaliser', '54.9', '54.9', 'https://www.cadeau-maestro.com/guillotine-saucisson-laguiole-papa-personnaliser-6946.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6946_40353.jpg', '', '2017-06-02 16:35:09', NULL),
(475, 237, 2, 6944, 40356, 'Set à Vin Papa À Personnaliser', '29.9', '29.9', 'https://www.cadeau-maestro.com/set-vin-papa-personnaliser-6944.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6944_40356.jpg', '', '2017-06-02 16:35:09', NULL),
(476, 238, 0, 3485, 18939, 'Coffret Mini-Tablettes Chocolat', '19.9', '9.95', 'https://www.cadeau-maestro.com/coffret-mini-tablettes-chocolat-3485.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3485_18939.jpg', '', '2017-06-02 16:35:09', NULL),
(477, 238, 1, 5860, 36132, 'Boîte de Cookies', '13.95', '6.97', 'https://www.cadeau-maestro.com/boite-cookies-5860.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5860_36132.jpg', '', '2017-06-02 16:35:09', NULL),
(478, 238, 2, 5849, 35979, 'Boîte de Rochers', '13.95', '6.97', 'https://www.cadeau-maestro.com/boite-rochers-5849.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5849_35979.jpg', '', '2017-06-02 16:35:09', NULL),
(479, 239, 0, 3485, 18939, 'Coffret Mini-Tablettes Chocolat', '19.9', '9.95', 'https://www.cadeau-maestro.com/coffret-mini-tablettes-chocolat-3485.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3485_18939.jpg', '', '2017-06-02 16:35:09', NULL),
(480, 239, 1, 5860, 36132, 'Boîte de Cookies', '13.95', '6.97', 'https://www.cadeau-maestro.com/boite-cookies-5860.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5860_36132.jpg', '', '2017-06-02 16:35:09', NULL),
(481, 239, 2, 5849, 35979, 'Boîte de Rochers', '13.95', '6.97', 'https://www.cadeau-maestro.com/boite-rochers-5849.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5849_35979.jpg', '', '2017-06-02 16:35:09', NULL),
(482, 240, 0, 6319, 37077, 'Tablier Bavoir à Barbe', '14.9', '14.9', 'https://www.cadeau-maestro.com/tablier-bavoir-barbe-6319.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6319_37077_big.jpg', '', '2017-06-13 15:53:48', NULL),
(483, 240, 1, 6938, 40321, 'Cœur Papa À Personnaliser', '9.9', '9.9', 'https://www.cadeau-maestro.com/coeur-papa-a-personnaliser-6938.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6938_40321_big.jpg', '', '2017-06-13 15:53:48', NULL),
(484, 241, 0, 5867, 36110, 'Kit Bière à Faire Soi-Même Brewbarrel Oktoberfest', '39.9', '39.9', 'https://www.cadeau-maestro.com/kit-biere-faire-soi-meme-brewbarrel-oktoberfest-5867.html', 'http://www.cadeau-maestro.com/img/newsletter/news/5867_36110.jpg', '', '2017-06-13 15:53:48', NULL),
(485, 241, 1, 1268, 4522, 'Mug Mélangeur Automatique', '11', '11', 'https://www.cadeau-maestro.com/mug-melangeur-automatique-1268.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1268_4522.jpg', '', '2017-06-13 15:53:48', NULL),
(486, 241, 2, 4680, 34830, 'Globe Terrestre Constellations Mova', '160', '160', 'https://www.cadeau-maestro.com/globe-terrestre-constellations-mova-4680.html', 'http://www.cadeau-maestro.com/img/newsletter/news/4680_34830.jpg', '', '2017-06-13 15:53:48', NULL),
(487, 242, 0, 3935, 31105, 'Haut-Parleur Douche Waterproof', '29.9', '29.9', 'https://www.cadeau-maestro.com/haut-parleur-douche-waterproof-3935.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3935_31105.jpg', '', '2017-06-13 15:53:48', NULL),
(488, 242, 1, 6949, 40381, 'Lampe Papa N°1 à Personnaliser', '45', '45', 'https://www.cadeau-maestro.com/lampe-papa-n1-personnaliser-6949.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6949_40381.jpg', '', '2017-06-13 15:53:48', NULL),
(489, 242, 2, 6800, 39757, 'Carafe Globe en Verre', '48.9', '48.9', 'https://www.cadeau-maestro.com/carafe-globe-en-verre-6800.html', 'http://www.cadeau-maestro.com/img/newsletter/news/6800_39757.jpg', '', '2017-06-13 15:53:48', NULL),
(490, 243, 0, 3961, 23753, 'Tablette de Chocolat Morpion', '6.5', '1.3', 'https://www.cadeau-maestro.com/tablette-chocolat-morpion-3961.html', 'http://www.cadeau-maestro.com/img/newsletter/news/3961_23753.jpg', '', '2017-06-13 15:53:48', NULL),
(491, 243, 1, 1060, 16134, 'Ventilateur de Bureau USB', '15.9', '10.9', 'https://www.cadeau-maestro.com/ventilateur-usb-1060.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1060_16134.jpg', '', '2017-06-13 15:53:48', NULL),
(492, 243, 2, 1092, 37726, 'Verres à bière tranchés (x2)', '25', '18.75', 'https://www.cadeau-maestro.com/verres-biere-tranches-x2-1092.html', 'http://www.cadeau-maestro.com/img/newsletter/news/1092_37726.jpg', '', '2017-06-13 15:53:49', NULL),
(493, 244, 0, 4346, 39678, 'Ventilateur USB Rétro Argent', '12', '12', 'https://www.cadeau-maestro.com/ventilateur-usb-retro-4346.html', 'https://www.cadeau-maestro.com/img/newsletter/news/4346_39678_big.jpg', '', '2017-06-22 10:15:20', NULL),
(494, 244, 1, 6966, 40453, 'Bataille de Ballons d''Eau', '14.5', '14.5', 'https://www.cadeau-maestro.com/bataille-ballons-eau-6966.html', 'https://www.cadeau-maestro.com/img/newsletter/news/6966_40453_big.jpg', '', '2017-06-22 10:15:20', NULL),
(495, 245, 0, 5444, 32823, 'Donut Gonflable Géant', '26.9', '26.9', 'https://www.cadeau-maestro.com/donut-gonflable-geant-5444.html', 'https://www.cadeau-maestro.com/img/newsletter/news/5444_32823.jpg', '', '2017-06-22 10:15:20', NULL),
(496, 245, 1, 466, 14341, 'Water Wars', '27.5', '27.5', 'https://www.cadeau-maestro.com/water-wars-suck-uk-466.html', 'https://www.cadeau-maestro.com/img/newsletter/news/466_14341.jpg', '', '2017-06-22 10:15:20', NULL),
(497, 245, 2, 494, 38812, 'Gourde Extincteur Glup', '13.5', '13.5', 'https://www.cadeau-maestro.com/gourde-extincteur-glugg-494.html', 'https://www.cadeau-maestro.com/img/newsletter/news/494_38812.jpg', '', '2017-06-22 10:15:20', NULL),
(498, 246, 0, 3197, 35647, 'Gouttes d''Eau Lévitation', '250', '250', 'https://www.cadeau-maestro.com/gouttes-eau-levitation-3197.html', 'https://www.cadeau-maestro.com/img/newsletter/news/3197_35647.jpg', '', '2017-06-22 10:15:20', NULL),
(499, 246, 1, 5281, 31137, 'Pichet Infusion à Fruits', '33.9', '33.9', 'https://www.cadeau-maestro.com/pichet-infusion-fruits-5281.html', 'https://www.cadeau-maestro.com/img/newsletter/news/5281_31137.jpg', '', '2017-06-22 10:15:20', NULL),
(500, 246, 2, 5446, 32811, 'Serviette de Plage Donut XXL', '29.9', '29.9', 'https://www.cadeau-maestro.com/serviette-plage-donuts-xxl-5446.html', 'https://www.cadeau-maestro.com/img/newsletter/news/5446_32811.jpg', '', '2017-06-22 10:15:20', NULL),
(501, 247, 0, 5571, 34472, 'Bouée XL Flamant Rose', '52', '41.6', 'https://www.cadeau-maestro.com/bouee-xl-flamant-rose-5571.html', 'https://www.cadeau-maestro.com/img/newsletter/news/5571_34472.jpg', '', '2017-06-22 10:15:20', NULL),
(502, 247, 1, 4372, 30113, 'Accroche-Clés Bateaux Retour au Port', '24.9', '17.43', 'https://www.cadeau-maestro.com/accroche-cles-bateaux-retour-port-4372.html', 'https://www.cadeau-maestro.com/img/newsletter/news/4372_30113.jpg', '', '2017-06-22 10:15:20', NULL),
(503, 247, 2, 570, 2060, 'Boule Mystique', '12', '9.6', 'https://www.cadeau-maestro.com/boule-mystique-570.html', 'https://www.cadeau-maestro.com/img/newsletter/news/570_2060.jpg', '', '2017-06-22 10:15:20', NULL),
(504, 248, 0, 6022, 40786, 'Bouée Géante Licorne', '69.9', '59.9', 'https://www.cadeau-maestro.com/bouee-geante-licorne-6022.html', 'https://www.cadeau-maestro.com/img/newsletter/news/6022_40786_big.jpg', '', '2017-06-30 16:46:39', NULL),
(505, 248, 1, 1077, 30049, 'Accroche-Clés Maison', '23.9', '11.95', 'https://www.cadeau-maestro.com/accroche-cles-maison-1077.html', 'https://www.cadeau-maestro.com/img/newsletter/news/1077_30049_big.jpg', '', '2017-06-30 16:46:39', NULL),
(506, 249, 0, 1060, 16134, 'Ventilateur de Bureau USB', '15.9', '10.9', 'https://www.cadeau-maestro.com/ventilateur-usb-1060.html', 'https://www.cadeau-maestro.com/img/newsletter/news/1060_16134.jpg', '', '2017-06-30 16:46:39', NULL),
(507, 249, 1, 2159, 32073, 'Cadre Photo Bye Bye Tétine', '12.9', '6.45', 'https://www.cadeau-maestro.com/cadre-photo-bye-bye-tetine-2159.html', 'https://www.cadeau-maestro.com/img/newsletter/news/2159_32073.jpg', '', '2017-06-30 16:46:39', NULL),
(508, 249, 2, 5665, 36484, 'Panneau à Messages LightBox A4', '26.9', '16.9', 'https://www.cadeau-maestro.com/panneau-a-messages-lightbox-a4-5665.html', 'https://www.cadeau-maestro.com/img/newsletter/news/5665_36484.jpg', '', '2017-06-30 16:46:39', NULL),
(509, 250, 0, 5432, 32727, 'Parfum d''intérieur Cupcake Cannelle', '21.9', '13.14', 'https://www.cadeau-maestro.com/parfum-interieur-cupcake-cannelle-5432.html', 'https://www.cadeau-maestro.com/img/newsletter/news/5432_32727.jpg', '', '2017-06-30 16:46:39', NULL),
(510, 250, 1, 5571, 34472, 'Bouée XL Flamant Rose', '52', '41.6', 'https://www.cadeau-maestro.com/bouee-xl-flamant-rose-5571.html', 'https://www.cadeau-maestro.com/img/newsletter/news/5571_34472.jpg', '', '2017-06-30 16:46:39', NULL),
(511, 250, 2, 3864, 23817, 'Carnet d''Invités "L''art de vivre à la française"', '13.9', '8.9', 'https://www.cadeau-maestro.com/carnet-invites-art-vivre-francaise-3864.html', 'https://www.cadeau-maestro.com/img/newsletter/news/3864_23817.jpg', '', '2017-06-30 16:46:39', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter_provider`
--

CREATE TABLE IF NOT EXISTS `newsletter_provider` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter_provider`
--

INSERT INTO `newsletter_provider` (`id`, `provider_id`, `name`, `value`) VALUES
(1, 1, '##PRENOM##', '{PRENOM}'),
(2, 1, '##NAVIGATEUR##', '[MIRROR]'),
(3, 1, '##DESINSCRIPTION##', '[UNSUBSCRIBE]');

-- --------------------------------------------------------

--
-- Structure de la table `provider`
--

CREATE TABLE IF NOT EXISTS `provider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `provider`
--

INSERT INTO `provider` (`id`, `name`, `is_default`) VALUES
(1, 'SendInBlue', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sc_branch`
--

CREATE TABLE IF NOT EXISTS `sc_branch` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sc_mail`
--

CREATE TABLE IF NOT EXISTS `sc_mail` (
  `id` int(11) NOT NULL,
  `solution_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `text_mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sc_solution`
--

CREATE TABLE IF NOT EXISTS `sc_solution` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `text_solution` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `shop`
--

INSERT INTO `shop` (`id`, `name`, `address1`, `address2`, `postal_code`, `city`, `country`, `mail`, `phone`) VALUES
(1, 'Cadeau Maestro', 'Rue Adrienne Bolland', 'Parc l''Orme les Sources', '42340', 'VEAUCHE', 'France', 'serviceclient@cadeau-maestro.com', '0481640080'),
(2, 'Boutique Saint Etienne', '3 Rue Michelet', NULL, '42000', 'Saint-Etienne', 'France', 'boutique@cadeau-maestro.com', '0983692668');

-- --------------------------------------------------------

--
-- Structure de la table `shop_configuration`
--

CREATE TABLE IF NOT EXISTS `shop_configuration` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `shop_configuration`
--

INSERT INTO `shop_configuration` (`id`, `shop_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 2, '##TXT_TOP_1##', 'DU MARDI AU SAMEDI', '2016-10-21 15:03:46', '2016-10-21 15:03:46'),
(2, 2, '##TXT_TOP_2##', '9H30 -19H', '2016-10-21 15:04:02', '2016-10-21 15:04:02');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roles`, `name`, `surname`, `mail`, `salt`, `token`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rem42', 'g8bsoGmn1sqk6UBLqBlxVKT+4x8hEsH1IFbm4Fyek3Ns4RE3EvqNYXdS+aK1yrE/qIo/qSBySKh4DnOF/+RW/g==', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'Rémy', '', 'remy@cadeau-maestro.com', 'ddc43fa7fb03bde6aecb88c62a67f94a', 'd6b8efd215362718ba451a8be65e41f0', 1, '2016-10-21 15:01:48', '2016-10-21 15:01:48', NULL),
(2, 'nicolas', 'lRxYoHEqkEnSgVZ/TVwitBh0DPtowvpFCjRQLi0ly0s7fL6N+wbpiYtL7fFPJQXq465A6hJ5wrHjydLtcXMCSQ==', 'a:9:{i:0;s:9:"ROLE_USER";i:1;s:15:"ROLE_NEWSLETTER";i:2;s:20:"ROLE_MODERATE_REVIEW";i:3;s:11:"ROLE_FAULTY";i:4;s:19:"ROLE_MAIL_SIGNATURE";i:5;s:9:"ROLE_SHOP";i:6;s:10:"ROLE_ADMIN";i:7;s:22:"ROLE_ALLOWED_TO_SWITCH";i:8;s:16:"ROLE_SUPER_ADMIN";}', 'Nicolas', '', 'nicolas@cadeau-maestro.com', 'f64704121296bd3c602dabcedabe2a3e', 'e2cf18c441e19d151867d1630087aff5', 1, '2016-10-21 15:26:20', '2016-10-21 15:26:20', NULL),
(3, 'candice', '8zaY6Cbalg/nUfJo67xkpA77xLCAj8qD8TF2NVlY4bsK3UA3PpQqbz97fSnENhg7tlICcAYCfpCJXY6OMvnhRA==', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'Candice', '', 'candice@cadeau-maestro.com', '75650e992c23b7987fc7f406583a42d8', 'a42f5605afc5733b113e26da244661a4', 1, '2016-10-24 15:12:16', '2016-10-24 15:12:16', NULL),
(5, 'agathe', 'bX4pfejEWgwc7oxLGLhlG/lmZUCd71iDhB9xWAEoeWwxt81SIRemwxL+7i2lxoNdPyJ0FEt3BV8dE/kzbQr3yw==', 'a:1:{i:0;s:9:"ROLE_USER";}', 'Agathe', NULL, 'agathe@cadeau-maestro.com', '03c1f2b8f63d62e7a9b666b358821372', '5bbf604a5b9e4b16032caa84ca12a1da', 1, '2016-11-02 11:48:51', '2016-11-02 11:48:51', NULL),
(6, 'Sylvain', 'MVfsoJqaOgEM+cjk3oxHg42vqgR2Z17/GQ+g3Wb+E/TZl+YjMfsZHHxztTgk1Xg2MAqm+RASDadQcXmQU6wkWw==', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'Sylvain', '', 'sylvain@cadeau-maestro.com', 'ba4037b9d698d4c07c307c0ffaad2aba', 'ec6beae369a24783ccba3689d57ac30f', 1, '2016-11-30 10:25:59', '2016-11-30 10:25:59', NULL),
(7, 'Romain', 'FFFf5tkXun/XLQc12Ta3GwVRKpKpOStbA/imsSREBqmPqrNAQdGuoSb9WfCrADotx4CdFZ+0kZLNQzofJFnLTA==', 'a:2:{i:0;s:11:"ROLE_FAULTY";i:1;s:9:"ROLE_SHOP";}', 'Romain', '', 'romain@cadeau-maestro.com', '5b42b3c53bd43b75f458f6dcad25962b', '09ecb6a9b3f7f7e26ef0c3ad3aa36e41', 1, '2016-12-27 11:58:50', '2016-12-27 11:58:50', NULL),
(8, 'Mathis', 'yz5LHH4tjEFR3EfMku6eHrqw5iP+NTkxA1IuGN/ZP3Nz8dzdQ+M+/DemGDDeX985w0jJ/dGCC4SWjBaz1q7spA==', 'a:1:{i:0;s:9:"ROLE_USER";}', 'Mathis', NULL, 'mathis.kroll@etu.univ-st-etienne.fr', 'bfa8f04cd9d3022ffecf3907358bd8c4', '0d4e3010cfcfe5d09d5971c58eb0e516', 1, '2017-01-04 10:57:40', '2017-01-04 10:57:40', NULL),
(9, 'flo', '2nhQ/B9sTU8S9BaC1BEckFzBfJZJ6PP3sHFl3yTJmBiCuARIdEZTjiLcmtei8lw3EPxTbxTDpSaGwllpWc4ZiA==', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'Flo', '', 'florent@cadeau-maestro.com', 'd71a518cd47397d69f9906a93faae87d', '9614d3ed7c3dfb8c18e60910fb100a2c', 1, '2017-01-06 10:51:16', '2017-01-06 10:51:16', NULL),
(10, 'mathieu', 'JWgo2SFV15AuhzdNkPEZSNa2kU171xAhxEFuXRMFk0CzueQLrUFFGHZ3uXe+cRqrMt9VAq6bRvWALSSUj0o5fA==', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'Mathieu', '', 'mathieu@cadeau-maestro.com', '4d03db4f5fc6a4ad900254c7a630196e', 'ac9eee8f7c6974900e9725cb1cf5bc5e', 1, '2017-01-06 10:53:20', '2017-01-06 10:53:20', NULL),
(11, 'charline', '7Erx0STKkyfJh/veBQQIlkZAgKTaxoA+552wmtBSrCAnR+dZBNMnOvFngPWnkPD+EbTp0Z1VivC8DwYtyJSdmw==', 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 'Charline', '', 'charline@cadeau-maestro.com', '28ac192c54efc4ad0f4ac0d760da262c', '9f76163dcc5e0b975550ebcc08ab6338', 1, '2017-01-10 15:01:33', '2017-01-10 15:01:33', NULL),
(12, 'pilouface', 'MbYXp/Vrt19n87Cvuq1kNVMhAodXsSW0qI8LaRpNEKUOyVRqPyZVB9h/XS5HLORke49krRNxv56J+MAY5VOMAw==', 'a:1:{i:0;s:9:"ROLE_USER";}', NULL, NULL, 'graillon@gmail.com', 'd6a320beafbe6f3282248f7d1d795d3d', '2eb74b0c74c370c01bddbeae840d006f', 1, '2017-01-24 12:32:35', '2017-01-24 12:32:35', NULL),
(13, 'Quentin', 'xYF+romaPyk5PKkrF2GOMV7pfXoA+NL13oip+o2H5hSzYHhsypZSkv7h9G0i1nBUZ7dKvjQ4Bchs7z/TUOhyMw==', 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 'Quentin', '', 'quentin@cadeau-maestro.com', '8ef85b522a2c86ba239c1f02fde19e61', 'a5546bf32a2bf29ae5e0153f405d498c', 1, '2017-03-10 12:19:18', '2017-03-10 12:19:18', NULL),
(14, 'Antoine', 'oSAUHr2vX6XJNYXrUq9vV2UpTECuAFIOZ+UHWvTsFHrkQ92F6LwGcJpUoJbuDysCVCrrjRVyfYrEbI9hy6YH5g==', 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 'Antoine', NULL, 'antoine@cadeau-maestro.com', 'd4ae50ba83380302a9e496d9918594ec', '335d9a0a1db85f24f0530ff967e9a015', 1, '2017-05-22 14:31:19', '2017-05-22 14:31:19', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `carousel_picture`
--
ALTER TABLE `carousel_picture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carousel_product`
--
ALTER TABLE `carousel_product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carousel_shop`
--
ALTER TABLE `carousel_shop`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carousel_video`
--
ALTER TABLE `carousel_video`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `faulty`
--
ALTER TABLE `faulty`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_B49B0499A76ED395` (`user_id`);

--
-- Index pour la table `faulty_action`
--
ALTER TABLE `faulty_action`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_6BF8D5249732C933` (`faulty_id`);

--
-- Index pour la table `faulty_mail`
--
ALTER TABLE `faulty_mail`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `faulty_product`
--
ALTER TABLE `faulty_product`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_F164264D9732C933` (`faulty_id`), ADD KEY `IDX_F164264D2ADD6D8C` (`supplier_id`);

--
-- Index pour la table `faulty_product_image`
--
ALTER TABLE `faulty_product_image`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_B20052664584665A` (`product_id`);

--
-- Index pour la table `faulty_product_supplier`
--
ALTER TABLE `faulty_product_supplier`
  ADD PRIMARY KEY (`id`), ADD KEY `name` (`name`), ADD KEY `name_2` (`name`);

--
-- Index pour la table `model_newsletter`
--
ALTER TABLE `model_newsletter`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_17BA8E5F5E237E06` (`name`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_7E8585C88F1543FD` (`model_newsletter_id`);

--
-- Index pour la table `newsletter_block`
--
ALTER TABLE `newsletter_block`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_976DBD68D9C967` (`newsletter_block_type_id`), ADD KEY `IDX_976DBD622DB1917` (`newsletter_id`);

--
-- Index pour la table `newsletter_block_type`
--
ALTER TABLE `newsletter_block_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter_header`
--
ALTER TABLE `newsletter_header`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_D428F38822DB1917` (`newsletter_id`);

--
-- Index pour la table `newsletter_menu`
--
ALTER TABLE `newsletter_menu`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_7580228822DB1917` (`newsletter_id`);

--
-- Index pour la table `newsletter_product`
--
ALTER TABLE `newsletter_product`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_DCF0A7C234EF4466` (`newsletter_block_id`);

--
-- Index pour la table `newsletter_provider`
--
ALTER TABLE `newsletter_provider`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_4FC6B5F6A53A8AA` (`provider_id`);

--
-- Index pour la table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sc_branch`
--
ALTER TABLE `sc_branch`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `parent_id_2` (`parent_id`), ADD KEY `parent_id` (`parent_id`);

--
-- Index pour la table `sc_mail`
--
ALTER TABLE `sc_mail`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `solution_id` (`solution_id`), ADD KEY `id` (`solution_id`);

--
-- Index pour la table `sc_solution`
--
ALTER TABLE `sc_solution`
  ADD PRIMARY KEY (`id`), ADD KEY `branch_id` (`branch_id`);

--
-- Index pour la table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_AC6A4CA25E237E06` (`name`);

--
-- Index pour la table `shop_configuration`
--
ALTER TABLE `shop_configuration`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_BBFE32D84D16C4DD` (`shop_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `carousel_picture`
--
ALTER TABLE `carousel_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `carousel_product`
--
ALTER TABLE `carousel_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `carousel_shop`
--
ALTER TABLE `carousel_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `carousel_video`
--
ALTER TABLE `carousel_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `faulty`
--
ALTER TABLE `faulty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=721;
--
-- AUTO_INCREMENT pour la table `faulty_action`
--
ALTER TABLE `faulty_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `faulty_mail`
--
ALTER TABLE `faulty_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `faulty_product`
--
ALTER TABLE `faulty_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=707;
--
-- AUTO_INCREMENT pour la table `faulty_product_image`
--
ALTER TABLE `faulty_product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=661;
--
-- AUTO_INCREMENT pour la table `faulty_product_supplier`
--
ALTER TABLE `faulty_product_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT pour la table `model_newsletter`
--
ALTER TABLE `model_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT pour la table `newsletter_block`
--
ALTER TABLE `newsletter_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT pour la table `newsletter_block_type`
--
ALTER TABLE `newsletter_block_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `newsletter_header`
--
ALTER TABLE `newsletter_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT pour la table `newsletter_menu`
--
ALTER TABLE `newsletter_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT pour la table `newsletter_product`
--
ALTER TABLE `newsletter_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=512;
--
-- AUTO_INCREMENT pour la table `newsletter_provider`
--
ALTER TABLE `newsletter_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `provider`
--
ALTER TABLE `provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sc_branch`
--
ALTER TABLE `sc_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sc_mail`
--
ALTER TABLE `sc_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sc_solution`
--
ALTER TABLE `sc_solution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `shop_configuration`
--
ALTER TABLE `shop_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `faulty`
--
ALTER TABLE `faulty`
ADD CONSTRAINT `FK_B49B0499A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `faulty_action`
--
ALTER TABLE `faulty_action`
ADD CONSTRAINT `FK_6BF8D5249732C933` FOREIGN KEY (`faulty_id`) REFERENCES `faulty` (`id`);

--
-- Contraintes pour la table `faulty_product`
--
ALTER TABLE `faulty_product`
ADD CONSTRAINT `FK_F164264D2ADD6D8C` FOREIGN KEY (`supplier_id`) REFERENCES `faulty_product_supplier` (`id`),
ADD CONSTRAINT `FK_F164264D9732C933` FOREIGN KEY (`faulty_id`) REFERENCES `faulty` (`id`);

--
-- Contraintes pour la table `faulty_product_image`
--
ALTER TABLE `faulty_product_image`
ADD CONSTRAINT `FK_B20052664584665A` FOREIGN KEY (`product_id`) REFERENCES `faulty_product` (`id`);

--
-- Contraintes pour la table `newsletter`
--
ALTER TABLE `newsletter`
ADD CONSTRAINT `FK_7E8585C88F1543FD` FOREIGN KEY (`model_newsletter_id`) REFERENCES `model_newsletter` (`id`);

--
-- Contraintes pour la table `newsletter_block`
--
ALTER TABLE `newsletter_block`
ADD CONSTRAINT `FK_976DBD622DB1917` FOREIGN KEY (`newsletter_id`) REFERENCES `newsletter` (`id`),
ADD CONSTRAINT `FK_976DBD68D9C967` FOREIGN KEY (`newsletter_block_type_id`) REFERENCES `newsletter_block_type` (`id`);

--
-- Contraintes pour la table `newsletter_header`
--
ALTER TABLE `newsletter_header`
ADD CONSTRAINT `FK_D428F38822DB1917` FOREIGN KEY (`newsletter_id`) REFERENCES `newsletter` (`id`);

--
-- Contraintes pour la table `newsletter_menu`
--
ALTER TABLE `newsletter_menu`
ADD CONSTRAINT `FK_7580228822DB1917` FOREIGN KEY (`newsletter_id`) REFERENCES `newsletter` (`id`);

--
-- Contraintes pour la table `newsletter_product`
--
ALTER TABLE `newsletter_product`
ADD CONSTRAINT `FK_DCF0A7C234EF4466` FOREIGN KEY (`newsletter_block_id`) REFERENCES `newsletter_block` (`id`);

--
-- Contraintes pour la table `newsletter_provider`
--
ALTER TABLE `newsletter_provider`
ADD CONSTRAINT `FK_4FC6B5F6A53A8AA` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`id`);

--
-- Contraintes pour la table `sc_branch`
--
ALTER TABLE `sc_branch`
ADD CONSTRAINT `sc_branch_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `sc_branch` (`id`);

--
-- Contraintes pour la table `sc_mail`
--
ALTER TABLE `sc_mail`
ADD CONSTRAINT `sc_mail_ibfk_1` FOREIGN KEY (`solution_id`) REFERENCES `sc_solution` (`id`);

--
-- Contraintes pour la table `sc_solution`
--
ALTER TABLE `sc_solution`
ADD CONSTRAINT `sc_solution_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `sc_branch` (`id`);

--
-- Contraintes pour la table `shop_configuration`
--
ALTER TABLE `shop_configuration`
ADD CONSTRAINT `FK_BBFE32D84D16C4DD` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
