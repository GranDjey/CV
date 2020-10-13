-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : db776287041.hosting-data.io
-- Généré le :  mar. 01 oct. 2019 à 14:41
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db776287041`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `apparence`
--

CREATE TABLE `apparence` (
  `id` int(11) NOT NULL,
  `text_footer` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_footer` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_1` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_2` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_3` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_4` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_4` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_5` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_5` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_6` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_6` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_7` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_7` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_lien_8` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_8` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apparence`
--

INSERT INTO `apparence` (`id`, `text_footer`, `info_footer`, `titre_lien_1`, `lien_1`, `titre_lien_2`, `lien_2`, `titre_lien_3`, `lien_3`, `titre_lien_4`, `lien_4`, `titre_lien_5`, `lien_5`, `titre_lien_6`, `lien_6`, `titre_lien_7`, `lien_7`, `titre_lien_8`, `lien_8`) VALUES
(1, 'Programmes de prévention santé par l\'activité physique adaptée pour les personnes seniors.', '© OJ2B - SAS au capital de 1000€ enregistrée au RCS de Sedan sous le numéro de SIRET 827 524 737 00018 <br>Siège social : 111 boulevard                                Gambetta                                08000                                Charleville Mézières', 'Précautions', 'https://www.ete-indien-editions.fr/precautions/', 'Comment regarder sur votre TV ?', 'https://www.ete-indien-editions.fr/regarder-seances-television/', 'Contact', 'https://www.ete-indien-editions.fr/contact/', 'Protection des données personnelles', 'https://www.ete-indien-editions.fr/protection-donnees-personnelles/', 'Mentions Légales', 'https://www.ete-indien-editions.fr/mentions-legales/', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Gym douce'),
(2, 'Prévention des chutes'),
(3, 'Maladies cardio-vasculaires'),
(4, 'Arthrose'),
(5, 'Qi gong'),
(6, 'Gi gong sur chaise'),
(7, 'Gym sur chaise'),
(8, 'Gym douce pour aidants');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190731074457', '2019-07-31 08:09:55'),
('20190809123740', '2019-08-20 12:01:33'),
('20190820121748', '2019-08-20 12:21:24'),
('20190820123506', '2019-08-20 12:35:41'),
('20190821100120', '2019-08-21 10:02:44'),
('20190821123834', '2019-08-21 12:38:59'),
('20190918073245', '2019-09-18 07:33:39'),
('20190927122738', '2019-09-27 12:28:01');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mutuelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mutuelle`, `password`, `img`, `description`, `tel`) VALUES
(18, 'uneo', 'uneo', 'uneo.png', 'Unéo agit au quotidien pour préserver votre santé. Santé psychique du militaire, sommeil et hygiène de vie, santé des familles. 1,1M personnes protégées. 1e mutuelle de la Défense.', 'Tel:+336262628');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `titre_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree_video` time NOT NULL,
  `adresse_video` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_video` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `titre_video`, `duree_video`, `adresse_video`, `img_video`, `description_video`, `genre_id`) VALUES
(28, 'Présentation du programme Corpore Sano', '00:04:00', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1),
(29, 'Programme de gym douce - semaine 2', '00:36:34', '', '../upload/12.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.                                Lorem ipsum dolor sit amet, consectetur ', 1),
(30, 'Programme de gym douce - semaine 3', '00:34:26', '', '../upload/13.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 1),
(33, 'Séance de gym sur chaise - mobilisation des membres inferieurs', '00:32:51', '../upload/Séance de gym sur chaise - mobilisation des membres inferieurs.mp4', '../upload/33.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 7),
(43, 'Séance de gym sur chaise - mobilisation des membres supérieurs', '00:29:10', '../upload/Séance de gym sur chaise - mobilisation des membres supérieurs.mp4', '../upload/33.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 7),
(44, 'Séance de prévention de l\'arthrose -  Membres inférieurs', '00:31:05', '../upload/Séance de prévention de l\'arthrose -  Membres inférieurs.mp4', '../upload/34.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 4),
(45, 'Séance de prévention de l\'arthrose -  Membres supérieurs', '00:27:20', '../upload/Séance de prévention de l\'arthrose -  Membres inférieurs.mp4', '../upload/22.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 4),
(46, 'Séance de prévention des risques de chute', '00:36:27', '../upload/Séance de prévention des risques de chute.mp4', '../upload/23.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 2),
(47, 'Séance de prévention et d\'éducation des risques cardiovasculaires', '00:32:15', '../upload/Séance de prévention et d\'éducation des risques cardiovasculaires.mp4', '../upload/24.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 3),
(48, 'Séance de Qi Gong sur chaise', '00:27:28', '../upload/Séance de Qi Gong sur chaise.mp4', '../upload/25.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 5),
(49, 'Séance de Qi Gong', '00:27:28', '../upload/Séance de Qi Gong.mp4', '../upload/35.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 5),
(50, 'Semaine 1 - 6 semaines pour les aidants', '00:32:57', '../upload/Semaine 1_6semaines pour les aidants.mp4', '../upload/26.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 8),
(51, 'Semaine 2 - 6 semaines pour les aidants', '00:32:57', '../upload/Semaine 2_6semaines pour les aidants (1).mp4', '../upload/28.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 8),
(52, 'Semaine 3 - 6 semaines pour les aidants', '00:29:56', '../upload/Semaine 3_6semaines pour les aidants.mp4', '../upload/29.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 8),
(53, 'Semaine 4 - 6 semaines pour les aidants', '00:32:41', '../upload/Semaine 4_6semaines pour les aidants.mp4', '../upload/30.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 8),
(54, 'Semaine 5 - 6 semaines pour les aidants', '00:29:02', '../upload/Semaine 5_6semaines pour les aidants.mp4', '../upload/31.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.', 8),
(61, 'Semaine 6 - 6 semaines pour les aidants', '00:35:19', '../upload/Semaine 5_6semaines pour les aidants.mp4', '../upload/32.png', 'Lorem ipsum', 8),
(107, 'Programme de gym douce - semaine 1', '00:36:34', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.                                Lorem ipsum dolor sit amet, consectetur ', 1),
(108, 'Programme de gym douce - semaine 4', '00:36:34', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quisquam optio animi mollitia dolore quaerat, facere vel velit, rem illo modi in eum accusantium dolor sunt earum doloremque facilis numquam cum incidunt? Odit at repudiandae alias laborum, vero perferendis nesciunt.                                Lorem ipsum dolor sit amet, consectetur ', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `apparence`
--
ALTER TABLE `apparence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CC7DA2C4296D31F` (`genre_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `apparence`
--
ALTER TABLE `apparence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_7CC7DA2C4296D31F` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
