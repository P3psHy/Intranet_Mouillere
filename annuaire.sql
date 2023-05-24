-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 24 mai 2023 à 15:47
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `annuaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `mail` varchar(50) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`mail`, `psw`) VALUES
('admin@local.fr', '$2y$10$4hHfWzQlKyxF73.08VYxA.hE6mMIF.OnWpSbLXS56dsHpR4hn/P2C');

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

CREATE TABLE `groupes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id`, `nom`, `telephone`, `mail`) VALUES
(1, 'Groupe 1', '11 11 11 11 11', 'groupe1@mail.com'),
(2, 'Groupe 2', '22 22 22 22 22', 'groupe2@gmail.com'),
(3, 'Groupe 3', '33 33 33 33 33', 'groupe3@gmail.com'),
(4, 'Groupe 4', '44 44 44 44 44', 'groupe4@gmail.com'),
(5, 'Groupe 5', '55 55 55 55 55', NULL);

--
-- Déclencheurs `groupes`
--
DELIMITER $$
CREATE TRIGGER `test_delete_personnes` BEFORE DELETE ON `groupes` FOR EACH ROW BEGIN
    DELETE FROM personnes WHERE personnes.groupeId = old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `mail` varchar(150) DEFAULT NULL,
  `telephone` varchar(150) DEFAULT NULL,
  `groupeId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `mail`, `telephone`, `groupeId`) VALUES
(1, 'Michel Berger', 'm.berger@gmail.com', '12 12 12 12 12', 1),
(2, 'Michel Platza', 'm.platza@gmail.com', '13 13 13 13 13', 1),
(3, 'Patrick Bibel', 'p.bibel@gmail.com', '14 14 14 14 14', 2),
(4, 'Harry Potter', 'h.potter@gmail.com', '15 15 15 15 15', 2),
(5, 'Jason Statam', 'j.statam@gmail.com', '99 99 99 99 99', 3),
(6, 'Benjamin Lajoie', 'b.lajoie@gmail.com', '17 17 17 17 17', 3),
(7, 'Jean-Luc Mouchard', 'jl.mouchard@gmail.com', '18 18 18 18 18', 4),
(8, 'Tata Ayrault', NULL, '19 19 19 19 19', 4),
(9, 'Jeremy Michtouille', 'j.michtouille@gmail.com', NULL, 5),
(10, 'LeGars Anonyme', 'g.anonyme@gmail.com', '21 21 21 21 21', 5),
(11, 'Romy TheCat', 'r.thecat@gmail.com', '16 16 16 16 16', 5),
(12, 'test', 'test', 'test', NULL),
(13, 'test', 'test@test.fr', '123', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idUser` int(11) NOT NULL,
  `idVehicule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idReservation`, `dateDebut`, `dateFin`, `idUser`, `idVehicule`) VALUES
(21, '2023-06-06', '2023-06-08', 6, 1),
(23, '2023-06-07', '2023-06-09', 4, 2),
(24, '2023-06-11', '2023-06-14', 4, 3),
(25, '2023-06-09', '2023-06-10', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `psw` varchar(255) DEFAULT NULL,
  `aPermis` tinyint(1) DEFAULT NULL,
  `nomUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `nom`, `prenom`, `psw`, `aPermis`, `nomUser`) VALUES
(1, 'Platza', 'Michel', '$2y$10$QTllS1gIp6LcfXK0hAvfyOluQreo9YbWqIXgBq4b4KZknIvU2liVu', 0, 'michel.platza'),
(4, 'Ayrault', 'Super', '$2y$10$bE71xPuEiazRLJ3t9v9CcuiEJ3hMi0Jj.Aq70lmOfZ8w02JWLDJQe', 1, 'super.ayrault'),
(5, 'De Oliveira', 'Vincent', '$2y$10$6Gwh/xMZwP4wzePld1aFTeDxoRltmnToqvgoX6Bv0RdyZRZm4YAUa', 0, 'vincent.de-oliveira'),
(6, 'Chanudet', 'Martin', '$2y$10$SDFPNX5FdpfvllKosrFdBuYloyWPr0qGqifAR9qhDUBi33soP9k9m', 1, 'martin.chanudet'),
(7, 'Ragu', 'Jules', '$2y$10$ARaKojzbmEYFsFbjGdS6DOB.GgrXgkoo3qqbPgWz6lRYZCBkMG5WW', 0, 'jules.ragu'),
(8, 'Batista', 'Ugo', '$2y$10$mwx9ywKATBTxKHzOvEeBp.jHV/6VEQIoIYjoLe1lTtRxKYYytmYJ2', 0, 'ugo.batista'),
(11, 'Manceau', 'Arthur', '$2y$10$6wT7GHR/7FTMqynuyZiSXu489linb/n3MS5tCzbHomwKmhJG0Gdce', 1, 'arthur.manceau');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `idVehicule` int(11) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`idVehicule`, `marque`, `modele`) VALUES
(1, 'Peugeot', '407'),
(2, 'Renault', 'Kangoo'),
(3, 'Porsche', '911'),
(4, 'Citroën', 'C15'),
(5, 'Renault', 'Express');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `groupes`
--
ALTER TABLE `groupes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupeId` (`groupeId`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `Reservation_Utilisateur_FK` (`idUser`),
  ADD KEY `Reservation_Vehicule0_FK` (`idVehicule`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idVehicule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groupes`
--
ALTER TABLE `groupes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `idVehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Reservation_Utilisateur_FK` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`),
  ADD CONSTRAINT `Reservation_Vehicule0_FK` FOREIGN KEY (`idVehicule`) REFERENCES `vehicule` (`idVehicule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
