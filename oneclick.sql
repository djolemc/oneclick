/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.7.21 : Database - oneclick
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`oneclick` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `oneclick`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) NOT NULL,
  `comment_text` longtext,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_enabled` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `profile_id_idx` (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `comments` */

insert  into `comments`(`comment_id`,`profile_id`,`comment_text`,`created`,`is_enabled`) values 
(1,1,'Sve naše Zelene stranke se uopšte ne bave sa ekologijom kao svuda u svetu , nego su čisto političke stranke i zato treba oformiti čisto Ekološku stranku . Inače i naš predsednik je nedavno otvorio dve fabrike za izradu guma za automobile i kamione , jednu u Zrenjaninu a drugu u Inđiji i pevao hvalospeve o tome a uopšte nije razmišljao da takve ogromne zagađivače vazduha niko neće i da mogu biti srećni što smo im mi to u Srbiji dozvolili .','2020-01-22 12:46:02',1),
(2,1,'Ovo je smesno kako ce nam tek biti! Nije nama vazduh samo zagadjen, sve je zagadjeno, reke, zemljiste, sume... bukvalno sve. Mi toliko otpada proizvodimo da ne znamo sta cemo sa njim, nasa priroda je prepuna plasticnih flasa i kesa, zemlja prepuna pesticida i kojekakvih otrova, a najgore u svemu ovome je sto nadlezne to ne dotice, kao da zive u norveskoj ili u svedskoj. Nasa deca, a bogami i odrasli nemaju osnovnu kulturu odnosa prema prirodi koja ih okruzuje, gradovi i ulice su pune mini deponija, opusaka od cigareta, plastike i svakog drugog otpada. Ukoliko se hitno ekologija i zastita zivotne sredine ne podigne na prioritetnu lestvicu, a ne da bude zadnja rupa na svirali, Srbija ce biti jedna velika deponija i smetliste. Pod hitno u skole treba uvesti nastavni predmet koji ce se baviti ovom problematikom, jer mi ukoliko zelimo da nam u buducnosti bude bolje, moramo nasu decu vaspitavati na taj nacin.','2020-01-22 12:46:10',1),
(3,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 12:46:30',1),
(4,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 12:46:36',1),
(5,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 12:46:39',1),
(6,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 12:46:44',1),
(7,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 12:54:03',1),
(8,3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 14:06:54',1),
(9,3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 14:07:05',1),
(10,2,'Sve naše Zelene stranke se uopšte ne bave sa ekologijom kao svuda u svetu , nego su čisto političke stranke i zato treba oformiti čisto Ekološku stranku . Inače i naš predsednik je nedavno otvorio dve fabrike za izradu guma za automobile i kamione , jednu u Zrenjaninu a drugu u Inđiji i pevao hvalospeve o tome a uopšte nije razmišljao da takve ogromne zagađivače vazduha niko neće i da mogu biti srećni što smo im mi to u Srbiji dozvolili .','2020-01-22 14:07:19',1),
(11,8,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 14:36:51',1),
(12,8,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 14:36:54',1),
(17,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 15:04:44',0),
(15,8,'Ovo je smesno kako ce nam tek biti! Nije nama vazduh samo zagadjen, sve je zagadjeno, reke, zemljiste, sume... bukvalno sve. Mi toliko otpada proizvodimo da ne znamo sta cemo sa njim, nasa priroda je prepuna plasticnih flasa i kesa, zemlja prepuna pesticida i kojekakvih otrova, a najgore u svemu ovome je sto nadlezne to ne dotice, kao da zive u norveskoj ili u svedskoj. Nasa deca, a bogami i odrasli nemaju osnovnu kulturu odnosa prema prirodi koja ih okruzuje, gradovi i ulice su pune mini deponija, opusaka od cigareta, plastike i svakog drugog otpada. Ukoliko se hitno ekologija i zastita zivotne sredine ne podigne na prioritetnu lestvicu, a ne da bude zadnja rupa na svirali, Srbija ce biti jedna velika deponija i smetliste. Pod hitno u skole treba uvesti nastavni predmet koji ce se baviti ovom problematikom, jer mi ukoliko zelimo da nam u buducnosti bude bolje, moramo nasu decu vaspitavati na taj nacin.','2020-01-22 15:02:02',1),
(16,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 15:04:11',1),
(18,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2020-01-22 15:04:48',0);

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_name` varchar(50) DEFAULT NULL,
  `profile_price` int(11) DEFAULT NULL,
  `profile_description` longtext,
  `profile_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `profiles` */

insert  into `profiles`(`profile_id`,`profile_name`,`profile_price`,`profile_description`,`profile_image`) values 
(1,'Dragoljub Djordjevic',50,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2.jpg'),
(9,'Tamara Ćirić',11,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2.jpg'),
(4,'Petar Petrović',10,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','1.jpg'),
(7,'Nenad Petrović',22,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2.jpg'),
(6,'Milica Antic',11,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','3.jpg'),
(8,'Kemal Monteno',50,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','3.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
