/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-22 17:54:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seodescriptions
-- ----------------------------
DROP TABLE IF EXISTS `seodescriptions`;
CREATE TABLE `seodescriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seodescriptions
-- ----------------------------
INSERT INTO `seodescriptions` VALUES ('1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare, libero et feugiat ullamcorper, lectus odio rhoncus nibh, vel sollicitudin purus libero eget velit. Sed tempor turpis vitae urna mattis accumsan. d');
