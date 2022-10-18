-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 oct. 2022 à 13:49
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `poisson`
--

-- --------------------------------------------------------

--
-- Structure de la table `poisson`
--

DROP TABLE IF EXISTS `poisson`;
CREATE TABLE IF NOT EXISTS `poisson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poisson` varchar(64) NOT NULL,
  `description` varchar(256) NOT NULL,
  `age` int(11) NOT NULL,
  `couleur` varchar(64) NOT NULL,
  `size` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poisson`
--

INSERT INTO `poisson` (`id`, `poisson`, `description`, `age`, `couleur`, `size`) VALUES
(1, 'Oscar', 'L\'Oscar est un poisson de la famille des cichlidés originaire d\'Amérique du Sud et populaire dans les aquariums.', 20, 'noir', 36),
(2, 'Corydora nain', 'Le corydoras pygmée ou poisson-chat pygmée est un poisson tropical et d\'eau douce appartenant à la sous-famille des Corydoradinae de la famille des Callichthyidae.', 5, 'beige', 4),
(3, 'Silure de verre', 'Le genre Kryptopterus regroupe plusieurs espèces de poissons asiatiques de la famille des Siluridés.', 5, 'transparent', 10),
(4, 'Nez rouge', 'Le Nez rouge, Tétra à bouche rouge ou Tétra au nez rouge, est une espèce de poissons d\'eau douce de la famille des Characidés.', 5, 'beige', 5),
(5, 'Veuve noire', 'Le Tétra noir ou Veuve noire est un poisson de la famille des Characidés originaire d\'Amérique du Sud.', 6, 'gris', 7),
(6, 'Néon du pauvre', 'Le Vairon de Chine, Cardinal ou Néon du pauvre est une espèce de poissons de la famille des Cyprinidae.', 3, 'argenté', 4),
(7, 'Poisson-chat otocinclus', 'Le genre Otocinclus regroupe plusieurs espèces de poissons d\'eau douce de la famille des Loricariidae et originaires d\'Amérique du Sud.', 8, 'beige', 5),
(8, 'Tetra diamant', 'Le Tétra diamant est une espèce de poissons d\'eau douce de la famille des Characidés originaire d\'Amérique du Sud. ', 5, 'blanc', 5),
(9, 'Tetra fantôme noir', 'Le tétra fantôme noir est un petit poisson de la famille des Characidés originaire d\'Amérique du Sud.', 5, 'noir', 5),
(10, 'Yeux bleus', 'Longtemps rangé parmi les Aplocheilichthys, Poropanchax normani est un petit poisson originaire de la ceinture tropicale africaine.', 4, 'bleu', 4),
(11, 'Apisto perroquet', 'Apistogramma cacatuoides est une espèce de poissons de la famille des Cichlidae. Elle a été décrite par le docteur Jacobus Johannes Hoedeman en 1951.', 5, 'jaune', 8),
(12, 'Néon rouge', 'Paracheirodon axelrodi, communément appelé Cardinalis mais aussi appelé Néon rouge, Tétra cardinal et néon cardinalis.', 5, 'beige', 4),
(13, 'Barbu rosé', 'Le barbus rosé est un poisson vivant en banc qui réside naturellement à proximité du fond. ', 4, 'rosé', 15),
(14, 'Barbus doré', 'Puntius semifasciolatus, également appelé barbus doré ou barbus de schubert est une espèce de poisson de la famille des Cyprinidae. ', 5, 'doré', 7),
(15, 'Arc en ciel de boeseman', 'Melanotaenia boesemani, ou Arc-en-ciel de Boeseman, est un poisson de la famille des Melanotaeniidés.', 5, 'multicolore ', 10),
(16, 'Corydora bronze', 'Le Corydoras bronze ou Corydoras cuivré est une espèce de poissons d\'eau douce', 8, 'bronze', 7),
(17, 'Microrasbora galaxy', 'Danio margaritatus est une espèce de poissons d\'eau douce.', 5, 'gris', 2),
(18, 'Rasbora orné', 'Le rasbora orné est un tout petit poisson d’à peine deux centimètre, rouge vif avec une bande noire.', 8, 'rouge', 3),
(19, 'Rasbora arlequin', 'Le rasbora arlequin est un petit poisson de couleur rose à rouge, avec un triangle noir sur les côtés de la queue. ', 5, 'rosé', 4),
(20, 'Botia clown\r\n', 'Le botia clown est un poisson de fonds qui peut devenir très grand : il atteint jusqu’à 25 centimètres de long à l’âge adulte !', 20, 'orange', 30),
(21, 'Ramirezi', 'Le ramirezi est un cichlidé nain très coloré qu’il convient de maintenir en couple.', 4, 'bleuté', 4),
(22, 'Poisson hachette marbré', 'Le poisson hachette marbré est originale par sa forme et son comportement. Il est impossible de le confondre avec un autre poisson ! ', 5, 'vert', 4),
(23, 'Scalaire', 'Les scalaires sont un des symboles de l’aquariophilie, reconnaissable à sa forme de demi-lune. ', 9, 'multicolore', 20),
(24, 'Discus', 'Tous les aquariophiles ont en tête un grand aquarium et son groupe de discus colorés, souvent vus comme un graal.', 12, 'multicolore', 20),
(25, 'Gourami perlé', 'Le gourami perlé doit son nom à sa robe constellée de points blancs. C’est un poisson sublime qui attire les regards à tous les coups.', 8, 'blanc', 13),
(26, 'Platy', 'Le platy est un classique des aquariums d’eau douce, résistant et disponible avec une certaine variété de couleurs.', 5, 'rouge', 7),
(27, 'Corydora poivré', 'Les corydoras sont des petits poissons chats qui occupent le fonds de l’aquarium et passent leurs journées à fouiller le sable à la recherche de nourriture.', 10, '', 8),
(28, 'Barbu cerise', 'Voilà un poisson à la couleur éclatante et au comportement vif.', 7, 'cerise', 5),
(29, 'Pleco', 'Le pléco est un poisson d’aquarium emblématique, qui en animalerie semble similaire à l’ancistrus.', 20, 'noir', 20),
(30, 'Tétra étincelle', 'Le tétra étincelle est un petit poisson orangé toujours en activité.', 4, 'orange', 2),
(31, 'kuhlii', 'Le kuhlii est un poisson original tant par son apparence que par son comportement.', 16, 'jaune', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
