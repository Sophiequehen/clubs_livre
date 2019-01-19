-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2019 at 09:45 PM
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
(2, 'Alcools', 'Guillaume Apollinaire', 'Club du meilleur livre', 'Poésie', '', 1953, '5000', 'Offset', 'Tournon & Cie', 'Babouot Paris', 'Robert Massin', 'Égyptienne corps 9', '17 x 20', 'Acétate sérigraphiée rose. Couverture entoilée blanche, sérigraphiée noire. Livret imprimé sur pages roses encarté à la fin.', 'Jean-Marc Saint-Paul'),
(3, 'Cette mer qui nous entoure', 'Rachel Carson', 'Club du meilleur livre', '', '', 1954, '5500', 'Vélin des papeteries Condat', 'George Lang', '', 'Jeanine Fricker', 'Plantin gras corps 10', '', 'Couverture reliée toilée, sérigraphiée.\r\nSérigraphie sur rhodoïd, dessins imprimés sur papiers colorés', 'Arthur Epineau'),
(4, 'Le facteur sonne toujours deux fois', 'James Cain', 'Club français du livre', 'Romans', '292', 1964, '8000', '', 'Paul Dupont', 'Engel, Malakoff', 'Jacques Daniel', 'Égyptienne large corps 12', '13,9 x 21,5', '', 'Arthur Epineau'),
(5, 'Port Royal', 'Henry de Montherlant', 'Club du meilleur livre', 'Théâtre', '', 1958, '6000', 'Bouffant de Condat', 'Imprimerie Tournon ', 'Péghaire', 'Robert Massin', 'PLantin corps 12', '13,9 x 21,2', '', 'Arthur Epineau'),
(6, 'La case de l\'oncle Tom', 'Harriet Beecher Stowe', 'Club français du livre', 'Romans', '259', 1960, '9000', '', 'Paul Dupont, Paris', 'Engel, Malakoff', 'Jacques Daniel', 'Égyptienne corps 10', '13,9 x 21,4', '', 'Arthur Epineau'),
(7, 'Les croix des rois', 'Roland Dorgeles', 'Club français du livre', 'Romans', '143', 1953, '9000', 'Papier offset mat', 'Paul Dupont, Paris', 'Engel, Malakoff', 'Jean Latour', 'Bodoni corps 12', '13,9 x 21,4', '', 'Arthur Epineau'),
(8, 'Le pont de la rivière Kwai', 'Pierre Boule', 'Club du meilleur livre', '', '', 1953, '5000', 'Alfa Cellunaf', 'Georges Lang, Paris', 'L\'atelier du livre, Paris', 'Robert Massin', 'Didot corps 10', '13,4 x 20', '', 'Arthur Epineau'),
(9, 'Comme le temps passe... ', 'Robert Brasillacb', 'Club du meilleur livre', 'Romans', '', 1958, '6000', 'Vélin des papeteries Condat', 'Imprimerie Savernoise', 'Atelier Savernois', 'Robert Massin', 'Garamond corps 10', '13,9 x 19,9', '', 'Arthur Epineau'),
(10, 'La casa de Bernarda Alba', 'Frederico Garcia Lorca', 'Club français du livre', 'Théâtre', '1', 1947, '1374', 'Vélin filigrané', 'Presses de F. Bouchy, Paris', 'Engel, Malakoff', 'Jacques Braille', 'Elzevir corps 9', '13,5 x 21,5', '', 'Arthur Epineau'),
(11, 'Raboliot', 'Maurice Genevoix', 'Club français du livre', 'Romans', '92', 1951, '4000', 'Bouffant alpha', 'Paul Dupont, Paris', 'Engel, Malakoff', 'Robert Massin', 'Garamond gras corps 10', '13,5 x 21,5', '', 'Arthur Epineau'),
(12, 'La fille du capitaine', 'Alexandre Pouchkine', 'Club français du livre', 'Romans', '269', 1961, '7000', 'Albion', 'Silic, La Madelainelez-Lille', 'Shmitt, Strasbourg', 'Jacques Daniel', 'Romains corps 13', '13,5 x 21,5', '', 'Arthur Epineau'),
(13, 'Lac aux dames', 'Vicki Baum', 'Club français du livre', 'Romans', '208', 1957, '8000', 'Bouffant', 'Presses de Firmin Didot', 'Engel, Malakoff', 'Jacques Daniel', 'Didot corps 9', '13,5 x 21,5', '', 'Arthur Epineau'),
(14, 'L\'éloge de la folie', 'Érasme', 'Club français du livre', 'Classiques', '53', 1957, '8000', 'Offset sirène', 'Paul Dupont, Paris', 'Engel, Malakoff', 'Pierre Faucheux', 'Baskerville coprs 18', '13,9 x 21,2', '', 'Arthur Epineau'),
(15, 'La modification', 'Michel Butor', 'Club français du livre', 'Romans', '242', 1959, '8000', '', 'Lang Grandemange', 'Schmitt, Strasbourg', 'Jacques Daniel', 'Bodoni corps 10', '13,9 x 21,2', '', 'Arthur Epineau'),
(16, 'Le désert des Tartares', 'Dino Buzzati', 'Club français du livre', 'Romans', '184', 1955, '5000', 'Offset sirène', 'Paul Dupont, Paris', 'Engel, Malakoff', 'Jacques Darche', 'Égyptienne corps 9', '13,9 x 21,2', '', 'Arthur Epineau'),
(17, 'De la Terre à la Lune', 'Jules Verne', 'Club français du livre', 'Merveilles', '', 1955, '10000', 'Offset sirène', 'Paul Dupont, Paris', 'Engel, Malakoff', 'Jacques Darche', 'French Round face corps 10', '13,9 x 21,2', '', 'Jeanne Hervé-Maley'),
(18, 'Le meilleur des mondes', 'Aldous Huxley', 'Club du meilleur livre', 'Romans', '242', 1959, '4200', '', 'Imprimerie nationale de Monaco', 'Tonnelier, La flèche', 'Jeanine Fricker', 'Times romain corps 10', '13,2 x 20', '', 'Jeanne Hervé-Maley');

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
  MODIFY `id_livre` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
