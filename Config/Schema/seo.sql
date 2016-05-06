/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:40:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_uris
-- ----------------------------
DROP TABLE IF EXISTS `seo_uris`;
CREATE TABLE `seo_uris` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uri` (`uri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_uris
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:39:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_a_b_tests
-- ----------------------------
DROP TABLE IF EXISTS `seo_a_b_tests`;
CREATE TABLE `seo_a_b_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seo_uri_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_a_b_tests
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:39:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_blacklists
-- ----------------------------
DROP TABLE IF EXISTS `seo_blacklists`;
CREATE TABLE `seo_blacklists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_range_start` bigint(20) unsigned NOT NULL,
  `ip_range_end` bigint(20) unsigned NOT NULL,
  `note` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ip_range_start` (`ip_range_start`),
  KEY `ip_range_end` (`ip_range_end`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_blacklists
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:40:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_canonicals
-- ----------------------------
DROP TABLE IF EXISTS `seo_canonicals`;
CREATE TABLE `seo_canonicals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `canonical` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `seo_uri_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_canonicals
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:40:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_honeypot_visits
-- ----------------------------
DROP TABLE IF EXISTS `seo_honeypot_visits`;
CREATE TABLE `seo_honeypot_visits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` bigint(20) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_honeypot_visits
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:40:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_meta_tags
-- ----------------------------
DROP TABLE IF EXISTS `seo_meta_tags`;
CREATE TABLE `seo_meta_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seo_uri_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `is_http_equiv` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seo_uri_id` (`seo_uri_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_meta_tags
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:40:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_redirects
-- ----------------------------
DROP TABLE IF EXISTS `seo_redirects`;
CREATE TABLE `seo_redirects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seo_uri_id` int(11) NOT NULL,
  `redirect` varchar(255) DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '100',
  `is_nocache` tinyint(4) DEFAULT '1',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `callback` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seo_uri_id` (`seo_uri_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_redirects
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:40:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_status_codes
-- ----------------------------
DROP TABLE IF EXISTS `seo_status_codes`;
CREATE TABLE `seo_status_codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_code` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT '100',
  `seo_uri_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_status_codes
-- ----------------------------
/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : bricks

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2016-04-21 00:40:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for seo_titles
-- ----------------------------
DROP TABLE IF EXISTS `seo_titles`;
CREATE TABLE `seo_titles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seo_uri_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seo_uri_id` (`seo_uri_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seo_titles
-- ----------------------------
