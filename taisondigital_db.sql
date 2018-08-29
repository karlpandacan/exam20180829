/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.14 : Database - taisondigital_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`taisondigital_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `taisondigital_db`;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `code` int(4) NOT NULL,
  `price` double DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `quantity` int(21) DEFAULT NULL,
  `size` varchar(8) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`code`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`code`,`price`,`name`,`quantity`,`size`,`image`,`created_at`,`updated_at`) values (12,1003,1003,'Sample 1003',5,'Medium','images/uploads/products/20180829143929000000media-share-0-02-08-051ed0748d38175129ba2def41a4c25d1c47eb0d0d9b32d35997e14d2b955cc7-ea477fed-b175-4b96-8ce5-e5eff2f688c6.jpg','2018-08-29 14:36:02','2018-08-29 14:39:29'),(11,1002,1002,'Sample 1002',3,'Big','images/uploads/products/20180829143454000000Ovation-of-the-Seas.jpg','2018-08-29 14:34:54','2018-08-29 14:34:54'),(10,1001,1001,'Sample 1001',3,'Small','images/uploads/products/201808291422270000001487827150_AR2_6683e.jpg','2018-08-29 14:21:40','2018-08-29 14:22:27'),(9,1000,1000,'Sample',1,'Small','images/uploads/products/20180829141926000000framgia.png','2018-08-29 14:19:26','2018-08-29 14:19:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
