-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 03:04 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exchange`
--

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--






CREATE TABLE `utilisateurs` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confpass` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reg_statut` int(11) NOT NULL DEFAULT '0',
  `num_tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `fname`, `lname`, `city`, `pin`, `email`, `password`,`confpass`, `type`, `reg_statut`, `num_tel`) VALUES
(1, 'mehdi', 'mekouar', 'casa', 123, 'mehdi@gmail.com', '123456789', '123456789', 'admin', '2018-07-08 21:45:08', 1, '0666666666');



ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);




--
-- Indexes for dumped tables
--


CREATE TABLE `etablissement` (
  `id_etab` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `etablissement` (`id_etab`, `nom`, `email`, `tel`, `website`, `address`, `ville`, `desc`, `photo`) VALUES
(1, 'Ecole supérieure de technologie', 'est@gmail.com', '0643941571', 'www.est-uh2c.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'L Ecole Supérieure de Technologie de Casablanca ESTC est un établissement public d enseignement supérieur à finalité professionnalisant.','1.jpg'),
(2, 'ensem', 'ensem@gmail.com', '0643941571', 'www.ensem.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'Formation d’ingénieur de haut niveau scientifique et technique dans les domaines de l’ELECTRICITE, et de la MECANIQUE, de l’INFORMATIQUE et du génie INDUSTRIEL.','2.jpg'),
(3, 'Faculté des Sciences Ben M Sik', 'science_ben_msik@gmail.com', '0643941571', 'www.fsb.univh2c.ma', 'Sidi Othmane Casablanca B.P 7955 Maroc', 'casablanca', 'La Faculté des Sciences Ben M Sik a pour mission de former des étudiants compétents, capables de mettre leurs connaissances et leur savoir-faire','3.jpg'),
(4, 'fsjes ain chock', 'fsjes@gmail.com', '0643941571', 'www.fdc.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'La fsjes a pour mission de former des étudiants compétents, capables de mettre leurs connaissances dans l environnement économique et social','4.jpg'),
(5, 'FMPC casablanca', 'medecine@gmail.com', '0643941571', 'www.fmpc.ac.ma', '19, Rue Tarik Ibnou Ziad B.P. 9154, Casablanca, MAROC', 'casablanca', 'la Faculté de Médecine et Pharmacie de Casablanca a pour mission de dispenser une Formation médicale de base et continue des médecins afin de les rendre capables de répondre aux besoins sanitaires de la population ','5.jpg'),
(6, 'Esith', 'esith@gmail.com', '0643941571', 'www.esith.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'La formation à l ESITH s inscrit dans le cadre de l amélioration de l organisation des entreprises et l amélioration de la qualité de leurs ressources humaines.','6.jpg'),
(7, 'ISEM', 'isem@gmail.com', '0643941571', 'www.isem.ac.ma', 'Route d Eljadida, KM 7 CASABLANCA Maroc', 'casablanca', 'Intégrer les exigences de l’enseignement supérieur et de l’Organisation Maritime Internationale et de Développer l’offre de formation continue et répondre aux besoins des partenaires nationaux et africains','7.jpg'),
(8, 'ENSAM casablanca', 'ensam@gmail.com', '0643941571', 'www.ensam-casa.ma', '150 Avenue Nile Sidi Othman Dar-el-Beida 20670 CASABLANCA Maroc', 'casablanca', ' l’ENSAM de Casablanca a pour missions de Offrir des formations évolutives en adéquation permanente avec les métiers et professions générés par les mutations technologiques','8.jpg'),
(9, 'Université Internationale de Casablanca', 'UI@gmail.com', '0643941571', 'www.uic.ac.ma', 'CASA GREEN TOWN - ROUTE PROVINCIALE 3020, CASABLANCA BP 50169 CASA GHANDI', 'casablanca', 'La Faculté des Sciences de la Santé a pour vocation de former des professionnels de la santé hautement qualifiés et immédiatement opérationnels, nécessaires au système médical et paramédical au Maroc','9.jpg');




















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

INSERT INTO `encadrant` (`id_encadrant`, `fname`, `lname`, `email`, `tel`, `address`, `photo`, `desc`,`id_etab`) VALUES
(1, 'ghali', 'saadani', 'ghali@gmail.com', '0666666666', '95.hay saada casablanca', '1.jpg ', 'professeur : Laboratoire de Recherche sur l Artisanat',1),
(2, 'mohammed', 'el guennouni', 'mohamed@gmail.com', '0666666666', '16.hay oulfa casablanca', '2.jpg ', 'professeur : Laboratoire de Coordination des Etudes et de Recherche en Analyse et Prévision économiques(CERAPE)',1),
(3, 'fouad', 'mohammed amine', 'fouad@gmail.com', '0666666666', '19.hay dakar casablanca', '3.jpg ', 'encadrant : labortoire de recherche sur l Entreprise et le développement local (LAREDEL)',2),
(4, 'idrissi', 'ouafa', 'idrissi@gmail.com', '0666666666', '13.hay karii casablanca', '4.jpg ', 'encadrant : de Equipe de recherche et études en stratégie d entreprise et développement durable (ERESEDD)',3),
(5, 'rochdi', 'saadani', 'rochdi@gmail.com', '0666666666', '45.hay oulfa casablanca', '5.jpg ', 'encadrant : de Equipe de recherche sur l’innovation et l’Entrepreneuriat (ERIE)',3),
(6, 'aziz', 'yamlahi', 'aziz@gmail.com', '0666666666', '69.hay riad casablanca', '6.jpg ', 'encadrant : Valorisation des algues marines: Application d’une approche biotechnologique',6),
(7, 'mohamed', 'bakha', 'mohamed@gmail.com', '0666666666', '23.hay errahma casablanca', '7.jpg ', 'professeur : Phylogénétique, cytogénétique, dispersion géographique et diversité chimique des espèces d’Origanum du Maroc',7),
(8, 'anas', 'hariri', 'anas@gmail.com', '0666666666', '19.hay kalima casablanca', '8.jpg ', 'professeur : à l École polytechnique fédérale de Zurich, connu dans le monde du développement logiciel',1),
(9, 'karim', 'benrabi', 'karim@gmail.com', '0666666666', '95.hay saada casablanca', '9.jpg ', 'encadrant : informaticien marocain qui travaille dans les laboratoires il est professeur d informatique à l université hassan 2.',8),
(10, 'said', 'ghadid', 'said@gmail.com', '0666666666', '95.hay saada casablanca', '10.jpg ', 'professeur : émérite à l’université des sciences hassan 2, membre de l Académie des sciences.',1);



ALTER TABLE `encadrant`
  ADD PRIMARY KEY (`id_encadrant`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `encadrant`
  ADD CONSTRAINT `id_etab_1` FOREIGN KEY (`id_etab`) REFERENCES `etablissement` (`id_etab`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;



















/*table filiere */

CREATE TABLE `filiere` (
  `id_fil` int(11) NOT NULL AUTO_INCREMENT,
  `nom_fil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `filiere` (`id_fil`, `nom_fil`) VALUES
(1, 'genie electrique'),
(2, 'genie mecanique'),
(3, 'genie infotmatique'),
(4, ' Génie Logiciel'),
(5, 'genie industriel'),
(6, 'genie des procedes'),
(7, 'gestion des entreprises'),
(8, 'comptabilité'),
(9, 'technique de management'),
(10, 'energie renouvelable'),
(11, 'administration Bases de données'),
(12, 'systeme informatique'),
(13, 'reseau informatique'),
(14, 'Informatique Décisionnelle'),
(15, 'science mathematique'),
(16, 'science de l ingenieur'),
(17, 'science de la santé'),
(18, 'autre');



ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id_fil`),
  ADD UNIQUE KEY `nom_fil` (`nom_fil`);
  
  
  
  
  
  
  
  
  
  
  





CREATE TABLE `restaurant` (
  `id_resto` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `website` varchar(100) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `restaurant` (`id_resto`, `nom`, `ville`, `email`, `address`, `website`, `desc`, `menu`, `photo`) VALUES
(1, 'L ATELIER ORIENTAL', 'casablanca', 'orien@gmail.com','Hôtel Sofitel Casablanca Tour Blanche Rue Sidi Belyout - Casablanca', 'www.sofitel.com', 'C est dans une salle cosy et feutree, au sein du Sofitel Casablanca Tour Blanche, que L Atelier Oriental est situé. Un véritable voyage culinaire le chef proposant une carte mêlant un large éventail de la cuisine libanaise avec des touches marocaines authentiques.', '1.jpg','1.jpg'),
(2, 'BASMANE', 'casablanca', 'BASMANE@gmail.com','Hôtel Club Val d Anfa Angle bd Océan Atlantique et bd de la Corniche - Casablanca', 'www.basmane-restaurant.com', 'Vous dégustez ici une cuisine gastronomique marocaine traditionnelle, maîtrisée dans un décor somptueux typiquement marocain avec stuc, boiseries et mosaïques. Les salles à manger sont chaleureuses et confortables avec leurs multiples fleurs.', '1.jpg','2.jpg'),
(3, 'BAZAAR', 'casablanca', 'BAZAAR@gmail.com','57, avenue Hassan Souktani - Quartier Gauthier - Casablanca', 'www.BAZAAR.com', 'Au BazAar, tout est original : des salières aux verres, des murs aux luminaires, en passant même par la bouteille d’huile d’olive. A l’instant où l’on passe la porte, on se sent immédiatement à l’aise, l’accueil est impeccable.', '2.jpg','3.jpg'),
(4, 'McDONALD s', 'casablanca', 'McDONALD@gmail.com','Boulevard Moulay Ismaïl, Casablanca 20250, Maroc ', 'www.mcdonalds.ma', 'Le McDrive vous permet de passer commande directement de votre véhicule auprès des restaurants équipés du dispositif. Avec un personnel et une caisse spécialement dédiés', '6.jpg','4.jpg'),
(5, 'o-tacos', 'casablanca', 'tacos@gmail.com','Boulevard Mohamed Zerktouni, Casablanca 20250', 'www.o-tacos.fr', 'Dans chaque otacos, retrouvez notre recette originale de sauce fromagère et choisissez parmi 5 viandes certifiées HALAL, rigoureusement sélectionnées pour leur qualité premium.', '7.jpg','5.jpg');



ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id_resto`),
  ADD UNIQUE KEY `email` (`email`);
  







CREATE TABLE `food`(
  `id_food` int(11) NOT NULL AUTO_INCREMENT,
  `meal` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `price` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `food` (`id_food`, `meal`, `heure`, `price`) VALUES
(1, 'breakfast', '08h00', '20.00'),
(2, 'lunch', '12h00', '80.00'),
(1, 'dinner', '20h00', '60.00');



ALTER TABLE `food`
  ADD PRIMARY KEY (`id_food`);












CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `date_cours` varchar(255) NOT NULL,
  `heure_cours` varchar(255) NOT NULL,
  `id_encadrant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `cours` (`id_cours`, `nom`, `date_cours`, `heure_cours`, `id_encadrant`) VALUES
(1, 'arabic', 'from monday to thursday', '8h - 12h',1),
(1, 'french', 'from monday to thursday', '13h - 16h',2),
(1, 'arabic/french', 'friday', '8h - 12h',3);






ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`);
  
  ALTER TABLE `cours`
  ADD CONSTRAINT `id_encad_1` FOREIGN KEY (`id_encadrant`) REFERENCES `encadrant` (`id_encadrant`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
  
  
  





CREATE TABLE `formulaire` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
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
  `field` varchar(255) NOT NULL,
  `degsought` varchar(255) NOT NULL,
  `cycle` varchar(255) NOT NULL,
  `formation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id_form`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cin` (`cin`),
  ADD UNIQUE KEY `cne` (`cne`);



 ALTER TABLE `formulaire`
  ADD CONSTRAINT `id_user_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;





CREATE TABLE `transport`(
  `id_tansport` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `price` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `transport` (`id_tansport`, `libelle`, `tarif`) VALUES
(1, 'taxi', '100.00'),
(2, 'bus', '200.00'),
(3, 'tramway', '254.00'),
(4, 'airplane', '1000.00');




ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_tansport`);
  
  
  
  











CREATE TABLE `accomodation` (
  `id_acc` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `accomodation` (`id_acc`, `libelle`, `ville`, `price`) VALUES
(1, 'hotel', 'casablanca', '400.00'),
(2, 'chambre', 'casablanca', '200.00');



ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`id_acc`);








CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `activite` (`id_activite`, `type`,`libelle`, `ville`, `address`, `photo`, `id_acc`) VALUES
(1, 'trip','voyage', 'rabat', 'Kasbah of the Oudaias', '1.jpg',1),
(2, 'trip','voyage', 'el jadida', 'Sidi Bouzid beach ', '2.jpg',1),
(3, 'trip','voyage', 'tanger', 'Tangier-Ibn Battouta', '3.jpg',1),
(4, 'trip','voyage', 'tetouan', 'Musée d’Art Marocain', '4.jpg',1),
(5, 'trip','voyage', 'chafchaouen', 'An alleyway in the medina', '5.jpg',1),
(6, 'trip','voyage', 'meknes', 'Palais Al-Mansour.', '6.jpg',1),
(7, 'trip','voyage', 'fes', 'Moulay Idriss II shrine', '7.jpg',1),
(8, 'trip','voyage', 'ifran', 'Al Akhawayn University', '8.jpg',1),
(9, 'trip','voyage', 'marrakech', 'Koutoubia Mosque', '9.jpg',1),
(10, 'trip','voyage', 'essaouira', 'Mogador island', '10.jpg',1),
(11, 'promenade', 'corniche','casablanca', 'ain diab', '11.jpg',2),
(12, 'promenade', 'anfaplace','casablanca', 'ain diab', '12.jpg',2),
(13, 'promenade', 'hassan II mosque','casablanca', 'ain diab', '13.jpg',2),
(14, 'promenade', 'habous','casablanca', 'habous', '14.jpg',2),
(15, 'promenade', 'villa des arts museum ','casablanca', '30 boulevard Brahim Roudani Rue Abou El Kacem', '15.jpg',2),
(16, 'promenade', 'parc sindibad','casablanca', 'ain diab', '16.jpg',2),
(17, 'promenade', 'morocco mall','casablanca', 'sidi abderrahman,ain diab', '17.jpg',2),
(18, 'musique', 'dar al ala (musique andalouse)','casablanca', 'ain diab', '18.jpg',2);





ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`);

ALTER TABLE `activite`
  ADD CONSTRAINT `id_acc_1` FOREIGN KEY (`id_acc`) REFERENCES `accomodation` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;












CREATE TABLE `emploi` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
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



ALTER TABLE `emploi`
  ADD CONSTRAINT `id_user_2` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_enc_2` FOREIGN KEY (`id_encadrant`) REFERENCES `encadrant` (`id_encadrant`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_fil_2` FOREIGN KEY (`id_fil`) REFERENCES `filiere` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_etab_2` FOREIGN KEY (`id_etab`) REFERENCES `etablissement` (`id_etab`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_resto_2` FOREIGN KEY (`id_resto`) REFERENCES `restaurant` (`id_resto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_food_2` FOREIGN KEY (`id_food`) REFERENCES `food` (`id_food`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_cours_2` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_tansport_2` FOREIGN KEY (`id_tansport`) REFERENCES `transport` (`id_tansport`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_acc_2` FOREIGN KEY (`id_acc`) REFERENCES `accomodation` (`id_acc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


ALTER TABLE `emploi`
  ADD CONSTRAINT `id_activite_2` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

