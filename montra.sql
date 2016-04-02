/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.47-0ubuntu0.14.04.1 : Database - montra
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`montra` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `montra`;

/*Table structure for table `transactions` */

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `ID` int(11) DEFAULT NULL,
  `CartNumberFrom` int(19) DEFAULT NULL,
  `CartNumberTo` int(19) DEFAULT NULL,
  `Amount` int(20) DEFAULT NULL,
  `DateCreate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `transactions` */

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`ID`,`FirstName`,`LastName`,`CardNumber`,`CV2`,`ExpirationDate`,`CardHolderName`,`Email`,`Amount`) values (9,'Рыков','Сергеевич','1738292928284637',123,'11/25','RYKOV ARTEM','rykov.artem@gmail.com',600000),(10,'Фурда','Ольга','5338782924584637',524,'11/25','FURDA OLGA','olga.furda@gmail.com',1200000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
