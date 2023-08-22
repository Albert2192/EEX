/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 5.7.36 : Database - heimdall
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`heimdall` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `heimdall`;

/*Table structure for table `ciudades` */

DROP TABLE IF EXISTS `ciudades`;

CREATE TABLE `ciudades` (
  `ciudad_id` int(11) NOT NULL AUTO_INCREMENT,
  `pais_id` int(11) NOT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ciudad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ciudades` */

insert  into `ciudades`(`ciudad_id`,`pais_id`,`ciudad`) values 
(1,1,'Asunción'),
(2,1,'Fernando de la Mora');

/*Table structure for table `config` */

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(250) DEFAULT NULL,
  `ruc` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `config` */

insert  into `config`(`config_id`,`empresa`,`ruc`,`icon`,`logo`) values 
(1,'Becko Mecánica Integral','1363950-1',NULL,NULL);

/*Table structure for table `paises` */

DROP TABLE IF EXISTS `paises`;

CREATE TABLE `paises` (
  `pais_id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(150) NOT NULL,
  PRIMARY KEY (`pais_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `paises` */

insert  into `paises`(`pais_id`,`pais`) values 
(1,'Paraguay'),
(2,'Argentina'),
(3,'Brasil'),
(4,'Bolivia'),
(5,'Chile'),
(6,'Uruguay'),
(7,'Colombia'),
(8,'Perú'),
(9,'Venezuela'),
(10,'Ecuador');

/*Table structure for table `rol_user` */

DROP TABLE IF EXISTS `rol_user`;

CREATE TABLE `rol_user` (
  `rol_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) NOT NULL,
  `estado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`rol_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rol_user` */

insert  into `rol_user`(`rol_user_id`,`rol`,`estado`) values 
(1,'Administrador',1),
(2,'Vendedor',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(150) NOT NULL,
  `nick` varchar(150) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `rol_user_id` int(11) NOT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `password_master` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  `token` varchar(250) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `system_status` tinyint(1) DEFAULT '0' COMMENT '0: Offline | 1: Online',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`user_name`,`nick`,`email`,`rol_user_id`,`ciudad_id`,`password`,`password_master`,`status`,`last_login`,`token`,`photo`,`system_status`) values 
(1,'Admin','ADMIN','admin@gmail.com',1,2,'2479b1e874bf3dbd63b08a6acba8dcaff0182995848a5b51122af654246c2abb','af855a42dec8f548844a33b1168c119e631b3b97fbf419cbc1f4bdb6626d64c9',1,'2023-08-20 20:54:44','da394c64061b1a5c89075d7436ca76b07d11470a414b17bb8eda4fa40ef51ea0','1_admin.png',1),
(2,'Alberto Aquino','BECKO','albertoaquino2192@gmail.com',2,2,'2479b1e874bf3dbd63b08a6acba8dcaff0182995848a5b51122af654246c2abb','af855a42dec8f548844a33b1168c119e631b3b97fbf419cbc1f4bdb6626d64c9',1,'2023-08-20 20:35:52','198f63f2d649e50d5b6c64abcf38f90ca4273826c735f5c5ece2a9ffef75b321','2_becko.png',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
