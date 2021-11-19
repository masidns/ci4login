# Host: localhost  (Version 5.5.5-10.4.21-MariaDB)
# Date: 2021-11-19 10:58:41
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'denimalik207','denimalik20@gmail.com',1,'12345'),(2,'denimalik208','denimalik208@gmail.com',2,'12345'),(3,'denimalik209','denimalik207@gmail.com',2,'$2y$10$BU35n7Vlrc7pe6WCC5Izuu87CnCUhJKUIn4vhJ1UH.Im5M5Ri.msG'),(5,'testing','testing@gmail.com',2,'$2y$10$ocPlWQ/EA4rNDH3BBPasnealgr9aqRh1fY27sUsSapqbROHSX7egC'),(6,'mae','mae@gmail.com',2,'$2y$10$lWZEt6xTxthu7gQFeB8dV.RltlgrmUC.xSFIQVa.q8IUiv0OBrmQO'),(7,'fdfdfda','maeku@gmail.com',2,'$2y$10$6rGMsYzYXqTV5p2pQSXCruOKKMtaWq4evIckOlRSTg7LzUGu/wTbS'),(8,'AING','aing@gmail.com',2,'$2y$10$mbVFnNMqGmqXm6cvqgB3.enjv5oVn/Jid6lozkZCxo9aw4wfQOiZa'),(9,'apip','apip@gmail.com',2,'$2y$10$Eeq44BgsQb.cfYA/rZyGw.rsSuZl5pGV0/dRzbTr2keSjU9/Jguiu');
