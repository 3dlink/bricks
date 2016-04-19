/*
Navicat MySQL Data Transfer

Source Server         : conexion
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-02-25 21:02:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `question1` varchar(255) DEFAULT NULL,
  `answer1` varchar(255) DEFAULT NULL,
  `question2` varchar(255) DEFAULT NULL,
  `answer2` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `font` varchar(255) DEFAULT NULL,
  `terms` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Administrador', '', '1', '1', '', '2015-11-24 23:46:40', '2015-11-24 23:46:40', null, null, null, null, null, null, null, null, null);
