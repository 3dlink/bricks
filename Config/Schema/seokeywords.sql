/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-22 17:55:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seokeywords
-- ----------------------------
DROP TABLE IF EXISTS `seokeywords`;
CREATE TABLE `seokeywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seokeywords
-- ----------------------------
INSERT INTO `seokeywords` VALUES ('2', 'diego');
INSERT INTO `seokeywords` VALUES ('3', 'brito');
INSERT INTO `seokeywords` VALUES ('4', 'eduardo');
