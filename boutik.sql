-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 25 Février 2017 à 08:10
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutik`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `reference` int(3) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `descriptif` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `prix` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`reference`, `categorie`, `nom`, `descriptif`, `photo`, `prix`) VALUES
(1, 'affiches', 'Le Déclic ', 'Edition : Démons et Merveilles\r\nImpression : Affiche offset\r\nIllustrateur : Milo MANARA\r\nDescription : Affiche Édition d\'Art de Milo MANARA\r\n"Le Déclic"', 'declic.jpg', '14.99'),
(2, 'affiches', 'Eros', 'Edition : Démons et Merveilles\r\nImpression : Affiche offset\r\nIllustrateur : Milo MANARA\r\nDescription : Affiche Édition d\'Art de Milo MANARA\r\n"Eros"', 'eros.jpg', '14.99'),
(3, 'affiches', 'Levres', 'Edition : Démons et Merveilles\r\nImpression : Affiche offset\r\nIllustrateur : Milo MANARA\r\nDescription : Affiche Édition d\'Art de Milo MANARA\r\n"Levres"', 'levres.jpg', '12.99'),
(4, 'affiches', 'Sepia', 'Edition : Démons et Merveilles\r\nImpression : Affiche offset\r\nIllustrateur : Milo MANARA\r\nDescription : Affiche Édition d\'Art de Milo MANARA\r\n"Sepia"', 'sepia.jpg', '9.99'),
(5, 'affiches', 'zanardi', 'Edition : Démons et Merveilles\r\nImpression : Affiche offset\r\nIllustrateur : Milo MANARA\r\nDescription : Affiche Édition d\'Art de Milo MANARA\r\n"Zanardi"', 'zanardi.jpg', '0.00'),
(6, 'figurines', 'Claudia', 'Fumetti 3D Collection Claudia Figurine Manara 15 cm', 'Claudia.jpg', '12.99'),
(7, 'figurines', 'Gulliveriana', 'Fumetti 3D Collection Gulliveriana Figurine Manara 15 cm', 'Gulliveriana.jpg', '12.99'),
(8, 'figurines', 'Marilyn', 'Fumetti 3D Collection Marilyn Figurine Manara 15 cm', 'Marilyn.jpg', '13.99'),
(9, 'figurines', 'Miele', 'Fumetti 3D Collection Miele Figurine Manara 15 cm', 'Miele.jpg', '12.99'),
(10, 'figurines', 'Pandora', 'Fumetti 3D Collection Pandora Figurine Manara 15 cm', 'Pandora.jpg', '13.99');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`reference`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `reference` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
