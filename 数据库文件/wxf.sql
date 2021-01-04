# Host: localhost  (Version: 5.7.26)
# Date: 2020-07-07 09:50:35
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "stu"
#

CREATE TABLE `stu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `mima` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT 'username',
  `img` varchar(255) DEFAULT 'img\\logo\\用户.png',
  `zy` varchar(255) DEFAULT NULL,
  `grjj` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `tel` (`tel`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "stu"
#

INSERT INTO `stu` VALUES (1,'上海风景！SONY索尼4K','Some quick example text to build on the card title and make up the bulk of the card\'s content','sp\\1.mp4',NULL,NULL,NULL,NULL,NULL,NULL),(2,'《你是此生最美的风景》',NULL,'sp\\2.mp4','13896460235','123456                      ','无情铁手','20200611\\6678249cd6d9115d3f5884d1078d931c.png','摄影师','哈哈哈哈'),(5,'风景','好看的风景','20200706\\d7b5ae6e3e52fc88345afd3ae605ae23.mp4','1801608','1801608','欧青拉少','20200613\\7920b598ef03351ba364b51bb52e0dc0.gif','老八','哈哈哈'),(6,'枫叶秋天唯美风景',NULL,'sp\\5.mp4',NULL,NULL,'username','img\\logo\\用户.png',NULL,NULL),(7,'战争世界歌曲MV','ioji欧几哦；','sp\\6.mp4','123456','123456','username','img\\logo\\用户.png','学生','哈哈哈哈'),(9,'机车高清',NULL,'sp\\8.mp4',NULL,NULL,'username','img\\logo\\用户.png',NULL,NULL),(12,'黎明破晓',NULL,'sp\\11.mp4',NULL,NULL,'username','img\\logo\\用户.png',NULL,NULL),(13,'CyberNeon ',NULL,'sp\\12.mp4',NULL,NULL,'username','img\\logo\\用户.png',NULL,NULL),(16,'afa','affaaf','20200630\\f3e6980d49ae097cb10bab93247e6ca2.mp4','123456789','123456','bb','img\\logo\\用户.png','程序员','哈哈哈哈');
