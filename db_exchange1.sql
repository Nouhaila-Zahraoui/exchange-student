-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 08 mars 2019 à 15:58
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_exchange1`
--

-- --------------------------------------------------------

--
-- Structure de la table `accomodation`
--

CREATE TABLE `accomodation` (
  `id_acc` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `id_prest` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accomodation`
--

INSERT INTO `accomodation` (`id_acc`, `type`, `libelle`, `ville`, `price`, `address`, `photo`, `website`, `email`, `tel`, `id_prest`) VALUES
(1, 'hotel', 'Casa diamond', 'casablanca', 4000, 'centre ville casablanca', '16.jpg', 'www.diamand.com', 'casa.diamand@gmail.com', '0634455678', 1),
(2, 'hotel', 'relax hotel', 'casablanca', 4000, '2,4 km du centre', '17.jpg', 'www.relax.ma', 'hotel.relax@gmail.com', '0634455678', 2),
(3, 'hotel', 'down town hotel', 'casablanca', 4000, 'elmaarif', '18.jpg', 'www.down-town.ma', 'hotel.down@gmail.com', '0634455678', 2),
(4, 'hotel', 'melliber appart hotel', 'casablanca', 4000, '2 kmde centre', '19.jpg', 'www.melliber.ma', 'hotel.milleber@gmail.com', '0634455678', 3),
(5, 'hotel', 'kenzi tower hotel', 'casablanca', 4000, '1,6 km du centre', '20.jpg', 'www.kenzi.ma', 'hotel.kenzi@gmail.com', '0634455678', 1),
(6, 'hotel', 'kenzi bassma ', 'casablanca', 4000, '450 m du centre', '21.jpg', 'www.bassma.ma', 'hotel.bassma@gmail.com', '0634455678', 1),
(7, 'guest houses', 'casablanca guest house', 'casablanca', 4000, 'le centre de black pool', '22.jpg', 'www.guest-casa.ma', 'guest.casa@gmail.com', '0634455678', 3),
(8, 'guest houses', 'norbreck castle hotel & spa', 'casablanca', 4000, 'quelques minutes de tramway de centre ville', '23.jpg', 'www.noebreck.ma', 'norbreck@gmail.com', '0634455678', 4),
(9, 'guest house', 'southview ', 'casablanca', 4000, '150 m du centre', '24.jpg', 'www.soutview.ma', 'guest.southviewa@gmail.com', '0634455678', 5),
(10, 'guest house', 'shirley hights ', 'casablanca', 4000, 'pres de tour blackpool', '25.jpg', 'www.shirley-houses.ma', 'guest.shirley@gmail.com', '0634455678', 6),
(11, 'guest house', 'the address ', 'casablanca', 4000, '450m de centre', '26.jpg', 'www.TheAddress.ma', 'guest.Address@gmail.com', '0634455678', 6),
(12, 'cite universitaire', 'faculte Hassan2 ', 'casablanca', 4000, 'Route el jadida', '27.jpg', 'www.uh2c.ma', 'cite_casa@gmail.com', '0634455678', 7),
(13, 'cite universitaire', 'faculte moulay smail', 'RABAT', 4000, 'AVENUE DE LA RESISTANCE(bp: 1063)', '28.jpg', 'www.cite moulay ismail.ma', 'cite_rabat@gmail.com', '0634455678', 7),
(14, 'cite universitaire', 'cite universitaire dagdal', 'RABAT', 4000, 'AVEnue des nations unis', '29.jpg', 'www.agdal.ma', 'cite_rabat@gmail.com', '0634455678', 8),
(15, 'cite universitaire', 'bayt almaarifa', 'casablanca', 4000, 'route d eljadida 7 km casablanca', '30.jpg', 'www.bayt-el-maarifa.ma', 'bayt.elmaarifa@gmail.com', '0634455678', 9),
(16, 'internat', 'Ecole superieur de casablanca', 'casablanca', 4000, 'route d eljadida 7 km casablanca', '31.jpg', 'www.est-uh2c.ac.ma', 'ESTC@gmail.com', '0634455678', 9);

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `type`, `libelle`, `ville`, `address`, `photo`, `id_acc`) VALUES
(1, 'trip', 'voyage', 'rabat', 'Kasbah of the Oudaias', '1.jpg', 1),
(2, 'trip', 'voyage', 'el jadida', 'Sidi Bouzid beach ', '2.jpg', 1),
(3, 'trip', 'voyage', 'tanger', 'Tangier-Ibn Battouta', '3.jpg', 1),
(4, 'trip', 'voyage', 'tetouan', 'Musée d’Art Marocain', '4.jpg', 1),
(5, 'trip', 'voyage', 'chafchaouen', 'An alleyway in the medina', '5.jpg', 1),
(6, 'trip', 'voyage', 'meknes', 'Palais Al-Mansour.', '6.jpg', 1),
(7, 'trip', 'voyage', 'fes', 'Moulay Idriss II shrine', '7.jpg', 1),
(8, 'trip', 'voyage', 'ifran', 'Al Akhawayn University', '8.jpg', 1),
(9, 'trip', 'voyage', 'marrakech', 'Koutoubia Mosque', '9.jpg', 1),
(10, 'trip', 'voyage', 'essaouira', 'Mogador island', '10.jpg', 1),
(11, 'promenade', 'corniche', 'casablanca', 'ain diab', '11.jpg', 2),
(12, 'promenade', 'anfaplace', 'casablanca', 'ain diab', '12.jpg', 2),
(13, 'promenade', 'hassan II mosque', 'casablanca', 'ain diab', '13.jpg', 2),
(14, 'promenade', 'habous', 'casablanca', 'habous', '14.jpg', 2),
(15, 'promenade', 'villa des arts museum ', 'casablanca', '30 boulevard Brahim Roudani Rue Abou El Kacem', '15.jpg', 2),
(16, 'promenade', 'parc sindibad', 'casablanca', 'ain diab', '16.jpg', 2),
(17, 'promenade', 'morocco mall', 'casablanca', 'sidi abderrahman,ain diab', '17.jpg', 2),
(18, 'musique', 'dar al ala (musique andalouse)', 'casablanca', 'ain diab', '18.jpg', 2),
(19, 'promenade', 'Musée Abderrahman Slaoui', 'casablanca', '12 Rue Du Parc, Casablanca 20070, Maroc', '19.jpg', 2),
(20, 'others', 'theatre', 'casablanca', 'Ecole superieur de casablanca route el jadida', '20.jpg', 16),
(21, 'others', 'musique', 'casablanca', 'Ecole superieur de casablanca route el jadida', '21.jpg', 16),
(22, 'others', 'football', 'casablanca', 'Ecole superieur de casablanca route el jadida', '22.jpg', 16),
(23, 'others', 'musculation', 'casablanca', 'Ecole superieur de casablanca route el jadida', '23.jpg', 16),
(24, 'others', 'poesie', 'casablanca', 'Ecole superieur de casablanca route el jadida', '24.jpg', 16);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_cours` varchar(255) NOT NULL,
  `heure_cours` varchar(255) NOT NULL,
  `id_encadrant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `nom`, `date_cours`, `heure_cours`, `id_encadrant`) VALUES
(1, 'arabic', 'from monday to thursday', '8h - 12h', 1),
(2, 'french', 'from monday to thursday', '13h - 16h', 2),
(3, 'arabic/french', 'friday', '8h - 12h', 3);

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE `emploi` (
  `id_emp` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_encadrant` int(11) NOT NULL,
  `id_fil` int(11) NOT NULL,
  `id_etab` int(11) NOT NULL,
  `id_resto` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `id_tansport` int(11) NOT NULL,
  `id_acc` int(11) NOT NULL,
  `id_activite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `encadrant`
--

CREATE TABLE `encadrant` (
  `id_encadrant` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `id_etab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `encadrant`
--

INSERT INTO `encadrant` (`id_encadrant`, `fname`, `lname`, `email`, `tel`, `address`, `photo`, `desc`, `id_etab`) VALUES
(1, 'ghali', 'saadani', 'ghali@gmail.com', '0666666666', '95.hay saada casablanca', '1.jpg ', 'professeur : Laboratoire de Recherche sur l Artisanat', 1),
(2, 'mohammed', 'el guennouni', 'mohamed@gmail.com', '0666666666', '16.hay oulfa casablanca', '2.jpg ', 'professeur : Laboratoire de Coordination des Etudes et de Recherche en Analyse et Prévision économiques(CERAPE)', 1),
(3, 'fouad', 'mohammed amine', 'fouad@gmail.com', '0666666666', '19.hay dakar casablanca', '3.jpg ', 'encadrant : labortoire de recherche sur l Entreprise et le développement local (LAREDEL)', 2),
(4, 'idrissi', 'ouafa', 'idrissi@gmail.com', '0666666666', '13.hay karii casablanca', '4.jpg ', 'encadrant : de Equipe de recherche et études en stratégie d entreprise et développement durable (ERESEDD)', 3),
(5, 'rochdi', 'saadani', 'rochdi@gmail.com', '0666666666', '45.hay oulfa casablanca', '5.jpg ', 'encadrant : de Equipe de recherche sur l’innovation et l’Entrepreneuriat (ERIE)', 3),
(6, 'aziz', 'yamlahi', 'aziz@gmail.com', '0666666666', '69.hay riad casablanca', '6.jpg ', 'encadrant : Valorisation des algues marines: Application d’une approche biotechnologique', 6),
(7, 'mohamed', 'bakha', 'mohammed@gmail.com', '0666666666', '23.hay errahma casablanca', '7.jpg ', 'professeur : Phylogénétique, cytogénétique, dispersion géographique et diversité chimique des espèces d’Origanum du Maroc', 7),
(8, 'anas', 'hariri', 'anas@gmail.com', '0666666666', '19.hay kalima casablanca', '8.jpg ', 'professeur : à l École polytechnique fédérale de Zurich, connu dans le monde du développement logiciel', 1),
(9, 'karim', 'benrabi', 'karim@gmail.com', '0666666666', '95.hay saada casablanca', '9.jpg ', 'encadrant : informaticien marocain qui travaille dans les laboratoires il est professeur d informatique à l université hassan 2.', 8),
(10, 'said', 'ghadid', 'said@gmail.com', '0666666666', '95.hay saada casablanca', '10.jpg ', 'professeur : émérite à l’université des sciences hassan 2, membre de l Académie des sciences.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `id_etab` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `maps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`id_etab`, `nom`, `email`, `tel`, `website`, `address`, `ville`, `desc`, `photo`, `maps`) VALUES
(1, 'Ecole supérieure de technologie', 'est@gmail.com', '0643941571', 'www.est-uh2c.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'L Ecole Supérieure de Technologie de Casablanca ESTC est un établissement public d enseignement supérieur à finalité professionnalisant.', '1.jpg', '1.jpg'),
(2, 'ensem', 'ensem@gmail.com', '0643941571', 'www.ensem.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'Formation d’ingénieur de haut niveau scientifique et technique dans les domaines de l’ELECTRICITE, et de la MECANIQUE, de l’INFORMATIQUE et du génie INDUSTRIEL.', '2.jpg', '2.jpg'),
(3, 'Faculté des Sciences Ben M Sik', 'science_ben_msik@gmail.com', '0643941571', 'www.fsb.univh2c.ma', 'Sidi Othmane Casablanca B.P 7955 Maroc', 'casablanca', 'La Faculté des Sciences Ben M Sik a pour mission de former des étudiants compétents, capables de mettre leurs connaissances et leur savoir-faire', '3.jpg', '3.jpg'),
(4, 'fsjes ain chock', 'fsjes@gmail.com', '0643941571', 'www.fdc.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'La fsjes a pour mission de former des étudiants compétents, capables de mettre leurs connaissances dans l environnement économique et social', '4.jpg', '4.jpg'),
(5, 'FMPC casablanca', 'medecine@gmail.com', '0643941571', 'www.fmpc.ac.ma', '19, Rue Tarik Ibnou Ziad B.P. 9154, Casablanca, MAROC', 'casablanca', 'la Faculté de Médecine et Pharmacie de Casablanca a pour mission de dispenser une Formation médicale de base et continue des médecins afin de les rendre capables de répondre aux besoins sanitaires de la population ', '5.jpg', '5.jpg'),
(6, 'Esith', 'esith@gmail.com', '0643941571', 'www.esith.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'La formation à l ESITH s inscrit dans le cadre de l amélioration de l organisation des entreprises et l amélioration de la qualité de leurs ressources humaines.', '6.jpg', '6.jpg'),
(7, 'ISEM', 'isem@gmail.com', '0643941571', 'www.isem.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'Intégrer les exigences de l’enseignement supérieur et de l’Organisation Maritime Internationale et de Développer l’offre de formation continue et répondre aux besoins des partenaires nationaux et africains', '7.jpg', '7.jpg'),
(8, 'ENSAM casablanca', 'ensam@gmail.com', '0643941571', 'www.ensam-casa.ma', '150 Avenue Nile Sidi Othman Dar-el-Beida 20670 CASABLANCA Maroc', 'casablanca', ' l’ENSAM de Casablanca a pour missions de Offrir des formations évolutives en adéquation permanente avec les métiers et professions générés par les mutations technologiques', '8.jpg', '8.jpg'),
(9, 'Université Internationale de Casablanca', 'UI@gmail.com', '0643941571', 'www.uic.ac.ma', 'CASA GREEN TOWN - ROUTE PROVINCIALE 3020, CASABLANCA BP 50169 CASA GHANDI', 'casablanca', 'La Faculté des Sciences de la Santé a pour vocation de former des professionnels de la santé hautement qualifiés et immédiatement opérationnels, nécessaires au système médical et paramédical au Maroc', '9.jpg', '9.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id_fil` int(11) NOT NULL,
  `nom_fil` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id_fil`, `nom_fil`) VALUES
(4, ' Génie Logiciel'),
(11, 'administration Bases de données'),
(18, 'autre'),
(8, 'comptabilité'),
(10, 'energie renouvelable'),
(6, 'genie des procedes'),
(1, 'genie electrique'),
(5, 'genie industriel'),
(3, 'genie infotmatique'),
(2, 'genie mecanique'),
(7, 'gestion des entreprises'),
(14, 'Informatique Décisionnelle'),
(13, 'reseau informatique'),
(16, 'science de l ingenieur'),
(17, 'science de la santé'),
(15, 'science mathematique'),
(12, 'systeme informatique'),
(9, 'technique de management');

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

CREATE TABLE `food` (
  `id_food` int(11) NOT NULL,
  `meal` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `price` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`id_food`, `meal`, `heure`, `price`) VALUES
(1, 'breakfast', '08h00', '20.00'),
(2, 'lunch', '12h00', '80.00'),
(3, 'dinner', '20h00', '60.00');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `id_form` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `datenaiss` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` int(30) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `cne` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `id_fil` int(11) NOT NULL,
  `degsought` varchar(255) NOT NULL,
  `cycle` varchar(255) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_arr` varchar(100) NOT NULL,
  `carriere` varchar(100) NOT NULL,
  `type_act` varchar(100) DEFAULT NULL,
  `act1` varchar(100) DEFAULT NULL,
  `act2` varchar(100) DEFAULT NULL,
  `act3` varchar(100) DEFAULT NULL,
  `lieu_act` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `nom_acc` varchar(100) DEFAULT NULL,
  `lieu_acc` varchar(100) DEFAULT NULL,
  `resto_name` varchar(100) DEFAULT NULL,
  `food` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id_form`, `fname`, `lname`, `email`, `job`, `institution`, `gender`, `nationality`, `datenaiss`, `address1`, `address2`, `city`, `country`, `zip`, `tel`, `cin`, `cne`, `degree`, `id_fil`, `degsought`, `cycle`, `formation`, `photo`, `resume`, `id_user`, `date_arr`, `carriere`, `type_act`, `act1`, `act2`, `act3`, `lieu_act`, `type`, `nom_acc`, `lieu_acc`, `resto_name`, `food`) VALUES
(3, 'meriem', 'nasih', 'meriem@gmail.com', 'commercante', 'estc', 'Female', 'moroccan', '12/10/1992', 'el fida casa', 'derb sultan casa', 'casablanca', 'Italy', 123456, '+212625579544', 'bl192355', 'r1303031326', 'dut', 11, 'dut', 'ingenieure', 'ingenieur_etat', '1.jpeg', '', 5, '11/11/1984', 'etude', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `prestateurs`
--

CREATE TABLE `prestateurs` (
  `id_prest` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prestateurs`
--

INSERT INTO `prestateurs` (`id_prest`, `fname`, `lname`, `email`, `tel`, `address`, `photo`, `desc`) VALUES
(1, 'ghali', 'saadani', 'ghali@gmail.com', '0666666666', '95.hay saada casablanca', '1.jpg ', 'professeur : Laboratoire de Recherche sur l Artisanat'),
(2, 'mohammed', 'el guennouni', 'mohamed@gmail.com', '0666666666', '16.hay oulfa casablanca', '2.jpg ', 'professeur : Laboratoire de Coordination des Etudes et de Recherche en Analyse et Prévision économiques(CERAPE)'),
(3, 'fouad', 'mohammed amine', 'fouad@gmail.com', '0666666666', '19.hay dakar casablanca', '3.jpg ', 'encadrant : labortoire de recherche sur l Entreprise et le développement local (LAREDEL)'),
(4, 'idrissi', 'ouafa', 'idrissi@gmail.com', '0666666666', '13.hay karii casablanca', '4.jpg ', 'encadrant : de Equipe de recherche et études en stratégie d entreprise et développement durable (ERESEDD)'),
(5, 'rochdi', 'saadani', 'rochdi@gmail.com', '0666666666', '45.hay oulfa casablanca', '5.jpg ', 'encadrant : de Equipe de recherche sur l’innovation et l’Entrepreneuriat (ERIE)'),
(6, 'aziz', 'yamlahi', 'aziz@gmail.com', '0666666666', '69.hay riad casablanca', '6.jpg ', 'encadrant : Valorisation des algues marines: Application d’une approche biotechnologique'),
(7, 'mohamed', 'bakha', 'mohammed@gmail.com', '0666666666', '23.hay errahma casablanca', '7.jpg ', 'professeur : Phylogénétique, cytogénétique, dispersion géographique et diversité chimique des espèces d’Origanum du Maroc'),
(8, 'anas', 'hariri', 'anas@gmail.com', '0666666666', '19.hay kalima casablanca', '8.jpg ', 'professeur : à l École polytechnique fédérale de Zurich, connu dans le monde du développement logiciel'),
(9, 'karim', 'benrabi', 'karim@gmail.com', '0666666666', '95.hay saada casablanca', '9.jpg ', 'encadrant : informaticien marocain qui travaille dans les laboratoires il est professeur d informatique à l université hassan 2.'),
(10, 'said', 'ghadid', 'said@gmail.com', '0666666666', '95.hay saada casablanca', '10.jpg ', 'professeur : émérite à l’université des sciences hassan 2, membre de l Académie des sciences.');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id_resto` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(100) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `id_prest` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id_resto`, `nom`, `ville`, `email`, `address`, `website`, `desc`, `menu`, `photo`, `id_prest`) VALUES
(1, 'L ATELIER ORIENTAL', 'casablanca', 'orien@gmail.com', 'Hôtel Sofitel Casablanca Tour Blanche Rue Sidi Belyout - Casablanca', 'www.sofitel.com', 'C est dans une salle cosy et feutree, au sein du Sofitel Casablanca Tour Blanche, que L Atelier Oriental est situé. Un véritable voyage culinaire le chef proposant une carte mêlant un large éventail de la cuisine libanaise avec des touches marocaines auth', '1.jpg', '1.jpg', 1),
(2, 'BASMANE', 'casablanca', 'BASMANE@gmail.com', 'Hôtel Club Val d Anfa Angle bd Océan Atlantique et bd de la Corniche - Casablanca', 'www.basmane-restaurant.com', 'Vous dégustez ici une cuisine gastronomique marocaine traditionnelle, maîtrisée dans un décor somptueux typiquement marocain avec stuc, boiseries et mosaïques. Les salles à manger sont chaleureuses et confortables avec leurs multiples fleurs.', '1.jpg', '2.jpg', 3),
(3, 'BAZAAR', 'casablanca', 'BAZAAR@gmail.com', '57, avenue Hassan Souktani - Quartier Gauthier - Casablanca', 'www.BAZAAR.com', 'Au BazAar, tout est original : des salières aux verres, des murs aux luminaires, en passant même par la bouteille d’huile d’olive. A l’instant où l’on passe la porte, on se sent immédiatement à l’aise, l’accueil est impeccable.', '2.jpg', '3.jpg', 6),
(4, 'McDONALD s', 'casablanca', 'McDONALD@gmail.com', 'Boulevard Moulay Ismaïl, Casablanca 20250, Maroc ', 'www.mcdonalds.ma', 'Le McDrive vous permet de passer commande directement de votre véhicule auprès des restaurants équipés du dispositif. Avec un personnel et une caisse spécialement dédiés', '6.jpg', '4.jpg', 8),
(5, 'o-tacos', 'casablanca', 'tacos@gmail.com', 'Boulevard Mohamed Zerktouni, Casablanca 20250', 'www.o-tacos.fr', 'Dans chaque otacos, retrouvez notre recette originale de sauce fromagère et choisissez parmi 5 viandes certifiées HALAL, rigoureusement sélectionnées pour leur qualité premium.', '7.jpg', '5.jpg', 9);

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

CREATE TABLE `transport` (
  `id_tansport` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `price` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`id_tansport`, `libelle`, `price`) VALUES
(1, 'taxi', '100.00'),
(2, 'bus', '200.00'),
(3, 'tramway', '254.00'),
(4, 'airplane', '1000.00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_user` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confpass` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reg_statut` int(30) NOT NULL DEFAULT '0',
  `num_tel` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ex_statut` int(30) NOT NULL DEFAULT '0',
  `ex_serv` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `fname`, `lname`, `city`, `email`, `password`, `confpass`, `type`, `date`, `reg_statut`, `num_tel`, `ex_statut`, `ex_serv`) VALUES
(4, 'mehdi', 'mekouar', 'casablanca', 'mehdi@gmail.com', '123456789', '123456789', 'user', '2019-03-07 23:28:19', 1, '0666666666', 1, 0),
(5, 'meriem', 'nasih', 'el jadida', 'meriem@gmail.com', '123456789', '123456789', 'user', '2019-03-08 12:03:55', 0, '0666666666', 1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`id_acc`),
  ADD KEY `id_prest_1` (`id_prest`);

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD KEY `id_acc_1` (`id_acc`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD KEY `id_encad_1` (`id_encadrant`);

--
-- Index pour la table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`id_emp`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_enc_2` (`id_encadrant`),
  ADD KEY `id_fil_2` (`id_fil`),
  ADD KEY `id_etab_2` (`id_etab`),
  ADD KEY `id_resto_2` (`id_resto`),
  ADD KEY `id_food_2` (`id_food`),
  ADD KEY `id_cours_2` (`id_cours`),
  ADD KEY `id_tansport_2` (`id_tansport`),
  ADD KEY `id_acc_2` (`id_acc`),
  ADD KEY `id_activite_2` (`id_activite`);

--
-- Index pour la table `encadrant`
--
ALTER TABLE `encadrant`
  ADD PRIMARY KEY (`id_encadrant`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_etab_1` (`id_etab`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`id_etab`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id_fil`),
  ADD UNIQUE KEY `nom_fil` (`nom_fil`);

--
-- Index pour la table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id_food`),
  ADD UNIQUE KEY `meal` (`meal`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id_form`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cne` (`cne`),
  ADD UNIQUE KEY `cin` (`cin`),
  ADD UNIQUE KEY `id_fil` (`id_fil`),
  ADD KEY `id_user_1` (`id_user`);

--
-- Index pour la table `prestateurs`
--
ALTER TABLE `prestateurs`
  ADD PRIMARY KEY (`id_prest`),
  ADD KEY `id_prest_4` (`id_prest`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id_resto`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_prest_3` (`id_prest`);

--
-- Index pour la table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_tansport`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `prestateurs`
ALTER TABLE `prestateurs`
  MODIFY `id_prest` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `encadrant`
--
ALTER TABLE `encadrant`
  MODIFY `id_encadrant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `etablissement`
--
ALTER TABLE `etablissement`
  MODIFY `id_etab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accomodation`
--
ALTER TABLE `accomodation`
  ADD CONSTRAINT `id_prest_1` FOREIGN KEY (`id_prest`) REFERENCES `prestateurs` (`id_prest`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `id_prest_3` FOREIGN KEY (`id_prest`) REFERENCES `prestateurs` (`id_prest`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
