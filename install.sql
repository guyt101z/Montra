/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 5.5.47-0ubuntu0.14.04.1 : Database - montra
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `transactions` */

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CartNumberFrom` varchar(19) DEFAULT NULL,
  `CartNumberTo` varchar(19) DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  `DateCreate` datetime DEFAULT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `transactions` */

insert  into `transactions`(`ID`,`CartNumberFrom`,`CartNumberTo`,`Amount`,`DateCreate`) values (4,'1738292928284637','4111111111111111',1000,'2016-04-02 10:10:06'),(5,'4111111111111111','6759649826438453',7000,'2016-04-02 10:14:59');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `CardNumber` varchar(19) DEFAULT NULL,
  `CV2` int(4) DEFAULT NULL,
  `ExpirationDate` varchar(5) DEFAULT NULL,
  `CardHolderName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`ID`,`FirstName`,`LastName`,`CardNumber`,`CV2`,`ExpirationDate`,`CardHolderName`,`Email`,`Amount`) values (9,'Роло','Армо','1738292928284637',123,'11/25','ROLO ARMO','rolo.armo@gmail.com',599000),(10,'Фурия','Звезда','6759649826438453',524,'11/25','FURIA STAR','furia.star@gmail.com',1207000),(11,'Test','DEMO','4111111111111111',123,'06/20','TEST DEMO','test@demo.com',250000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
