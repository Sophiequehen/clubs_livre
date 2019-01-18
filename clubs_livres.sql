-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2019 at 10:42 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clubs_livres`
--

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id_livre` int(50) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `collection` varchar(50) NOT NULL,
  `numero_volume` varchar(10) NOT NULL,
  `annee` int(5) NOT NULL,
  `nombre_exemplaires` varchar(10) NOT NULL,
  `papier` varchar(50) NOT NULL,
  `imprimeur` varchar(100) NOT NULL,
  `relieur` varchar(100) NOT NULL,
  `maquettiste` varchar(100) NOT NULL,
  `caractere` varchar(100) NOT NULL,
  `format` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `proprietaire` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id_livre`, `titre`, `auteur`, `club`, `collection`, `numero_volume`, `annee`, `nombre_exemplaires`, `papier`, `imprimeur`, `relieur`, `maquettiste`, `caractere`, `format`, `notes`, `proprietaire`) VALUES
(1, 'Ubu roi', 'Alfred Jarry', 'Club français du livre', 'Théâtre', '6', 1955, '', 'Bouffant alpha', 'Paul Dupont Paris', 'Engel à Malakoff', 'Pierre Faucheux', 'Plantin corps 14 et 24', '18,2 x 21,7', 'Couverture entoilée et sérigraphiée', 'Jean-Marc Saint-Paul'),
(2, 'Alcools', 'Guillaume Apollinaire', 'Club du meilleur livre', 'Poésie', '', 1953, '5000', 'Offset', 'Tournon & Cie', 'Babouot Paris', 'Robert Massin', 'Égyptienne corps 9', '17 x 20', 'Acétate sérigraphiée rose. Couverture entoilée blanche, sérigraphiée noire. Livret imprimé sur pages roses encarté à la fin.', 'Jean-Marc Saint-Paul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id_livre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id_livre` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
