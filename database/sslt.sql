/*
Navicat MySQL Data Transfer

Source Server         : wamp本机
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : sslt

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-04-08 15:18:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `is_nav` int(10) unsigned NOT NULL DEFAULT '0',
  `imgs` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '首页', null, '0', '0', '1', null, null, '2018-04-08 14:54:50', '2018-04-08 14:54:50', null);
INSERT INTO `articles` VALUES ('2', '关于我们', null, '0', '0', '1', null, null, '2018-04-08 14:58:23', '2018-04-08 14:58:23', null);
INSERT INTO `articles` VALUES ('3', '服务项目', null, '0', '0', '1', null, null, '2018-04-08 14:58:35', '2018-04-08 14:58:35', null);
INSERT INTO `articles` VALUES ('4', '专业设备', null, '0', '0', '1', null, null, '2018-04-08 14:58:50', '2018-04-08 14:58:50', null);
INSERT INTO `articles` VALUES ('5', '公司简介', '/images/1523171007524.jpg', '0', '2', '0', null, '南充市盛世蓝图广告有限责任公司位于四川省南充市顺庆区师大路二段，成立于2015年5月，注册资金300万元人民币。公司成立就秉承团结协作、务实高效、合作共赢的经营理念，经过6年不懈的努力，公司现占地面积4000余平方米，拥正式有员工60余人，主要生产设备30余台。已发展成为集广告设计、制作、安装、售后为一体的综合型专业化广告公司，真正做到广告一站式服务。\r\n为满足客户多元化、高效率、高品质的需求，公司一直非常关于行业动态，每年都拿出专项资金做技术交流和设备更新。现在拥有星光1024喷绘机、户内外写真机、热升华旗帜机、UV平板机（7色）、UV卷材机（7色）、激光切割机、雕刻机、激光焊接机、开槽折弯一体机等设备，公司现日产喷绘14000平方米，写真3500平方，在满足常规广告制作需求的同时，公司不断引进高端设备，真正做到高中低端全覆盖，满足客户的差异化需求。', '2018-04-08 15:00:45', '2018-04-08 15:03:27', null);
INSERT INTO `articles` VALUES ('6', '企业文化', null, '0', '2', '0', null, '南充市盛世蓝图广告有限责任公司位于四川省南充市顺庆区师大路二段，成立于2015年5月，注册资金300万元人民币。公司成立就秉承团结协作、务实高效、合作共赢的经营理念，经过6年不懈的努力，公司现占地面积4000余平方米，拥正式有员工60余人，主要生产设备30余台。已发展成为集广告设计、制作、安装、售后为一体的综合型专业化广告公司，真正做到广告一站式服务。\r\n为满足客户多元化、高效率、高品质的需求，公司一直非常关于行业动态，每年都拿出专项资金做技术交流和设备更新。现在拥有星光1024喷绘机、户内外写真机、热升华旗帜机、UV平板机（7色）、UV卷材机（7色）、激光切割机、雕刻机、激光焊接机、开槽折弯一体机等设备，公司现日产喷绘14000平方米，写真3500平方，在满足常规广告制作需求的同时，公司不断引进高端设备，真正做到高中低端全覆盖，满足客户的差异化需求。', '2018-04-08 15:00:50', '2018-04-08 15:02:21', null);
INSERT INTO `articles` VALUES ('7', '经营理念', null, '0', '2', '0', null, '南充市盛世蓝图广告有限责任公司位于四川省南充市顺庆区师大路二段，成立于2015年5月，注册资金300万元人民币。公司成立就秉承团结协作、务实高效、合作共赢的经营理念，经过6年不懈的努力，公司现占地面积4000余平方米，拥正式有员工60余人，主要生产设备30余台。已发展成为集广告设计、制作、安装、售后为一体的综合型专业化广告公司，真正做到广告一站式服务。\r\n为满足客户多元化、高效率、高品质的需求，公司一直非常关于行业动态，每年都拿出专项资金做技术交流和设备更新。现在拥有星光1024喷绘机、户内外写真机、热升华旗帜机、UV平板机（7色）、UV卷材机（7色）、激光切割机、雕刻机、激光焊接机、开槽折弯一体机等设备，公司现日产喷绘14000平方米，写真3500平方，在满足常规广告制作需求的同时，公司不断引进高端设备，真正做到高中低端全覆盖，满足客户的差异化需求。', '2018-04-08 15:01:01', '2018-04-08 15:02:26', null);
INSERT INTO `articles` VALUES ('8', '组织架构', null, '0', '2', '0', null, '南充市盛世蓝图广告有限责任公司位于四川省南充市顺庆区师大路二段，成立于2015年5月，注册资金300万元人民币。公司成立就秉承团结协作、务实高效、合作共赢的经营理念，经过6年不懈的努力，公司现占地面积4000余平方米，拥正式有员工60余人，主要生产设备30余台。已发展成为集广告设计、制作、安装、售后为一体的综合型专业化广告公司，真正做到广告一站式服务。\r\n为满足客户多元化、高效率、高品质的需求，公司一直非常关于行业动态，每年都拿出专项资金做技术交流和设备更新。现在拥有星光1024喷绘机、户内外写真机、热升华旗帜机、UV平板机（7色）、UV卷材机（7色）、激光切割机、雕刻机、激光焊接机、开槽折弯一体机等设备，公司现日产喷绘14000平方米，写真3500平方，在满足常规广告制作需求的同时，公司不断引进高端设备，真正做到高中低端全覆盖，满足客户的差异化需求。', '2018-04-08 15:01:09', '2018-04-08 15:02:31', null);
INSERT INTO `articles` VALUES ('9', '团队风采', null, '0', '2', '0', null, null, '2018-04-08 15:01:22', '2018-04-08 15:01:22', null);
INSERT INTO `articles` VALUES ('10', '厂区环境', null, '0', '2', '0', null, null, '2018-04-08 15:01:39', '2018-04-08 15:01:39', null);
INSERT INTO `articles` VALUES ('11', '团队1', '/images/1523171057514.jpg', '0', '9', '0', null, null, '2018-04-08 15:04:17', '2018-04-08 15:04:17', null);
INSERT INTO `articles` VALUES ('12', '团队2', '/images/1523171065745.jpg', '0', '9', '0', null, null, '2018-04-08 15:04:25', '2018-04-08 15:04:25', null);
INSERT INTO `articles` VALUES ('13', '团队3', '/images/1523171071931.jpg', '0', '9', '0', null, null, '2018-04-08 15:04:31', '2018-04-08 15:04:31', null);
INSERT INTO `articles` VALUES ('14', '仓区1', '/images/1523171146952.jpg', '0', '10', '0', null, null, '2018-04-08 15:05:46', '2018-04-08 15:05:46', null);
INSERT INTO `articles` VALUES ('15', '仓区2', '/images/1523171146952.jpg', '0', '10', '0', null, null, '2018-04-08 15:05:46', '2018-04-08 15:05:46', null);
INSERT INTO `articles` VALUES ('16', '仓区3', '/images/1523171146952.jpg', '0', '10', '0', null, null, '2018-04-08 15:05:46', '2018-04-08 15:05:46', null);
INSERT INTO `articles` VALUES ('17', '仓区4', '/images/1523171146952.jpg', '0', '10', '0', null, null, '2018-04-08 15:05:46', '2018-04-08 15:05:46', null);
INSERT INTO `articles` VALUES ('18', '喷绘', '/images/1523171324202.jpg', '0', '3', '1', null, null, '2018-04-08 15:07:55', '2018-04-08 15:08:44', null);
INSERT INTO `articles` VALUES ('19', '写真', '/images/1523171331803.jpg', '0', '3', '1', null, null, '2018-04-08 15:08:02', '2018-04-08 15:08:51', null);
INSERT INTO `articles` VALUES ('20', '雕刻', '/images/1523171343548.jpg', '0', '3', '1', null, null, '2018-04-08 15:08:10', '2018-04-08 15:09:03', null);
INSERT INTO `articles` VALUES ('21', '布织3.2米宽幅', '/images/1523171409900.jpg', '0', '18', '0', null, null, '2018-04-08 15:10:09', '2018-04-08 15:10:09', null);
INSERT INTO `articles` VALUES ('22', '布织3.2米宽幅', '/images/1523171409900.jpg', '0', '18', '0', null, null, '2018-04-08 15:10:09', '2018-04-08 15:10:09', null);
INSERT INTO `articles` VALUES ('23', '布织3.2米宽幅', '/images/1523171409900.jpg', '0', '18', '0', null, null, '2018-04-08 15:10:09', '2018-04-08 15:10:09', null);
INSERT INTO `articles` VALUES ('24', '布织3.2米宽幅', '/images/1523171409900.jpg', '0', '18', '0', null, null, '2018-04-08 15:10:09', '2018-04-08 15:10:09', null);
INSERT INTO `articles` VALUES ('25', '布织3.2米宽幅', '/images/1523171409900.jpg', '0', '19', '0', null, null, '2018-04-08 15:10:09', '2018-04-08 15:10:09', null);
INSERT INTO `articles` VALUES ('26', '布织3.2米宽幅', '/images/1523171409900.jpg', '0', '19', '0', null, null, '2018-04-08 15:10:09', '2018-04-08 15:10:09', null);
INSERT INTO `articles` VALUES ('27', '设备1', '/images/1523171507846.jpg', '0', '4', '0', null, null, '2018-04-08 15:11:47', '2018-04-08 15:11:47', null);
INSERT INTO `articles` VALUES ('28', '设备2', '/images/1523171534901.jpg', '0', '4', '0', null, null, '2018-04-08 15:12:14', '2018-04-08 15:12:14', null);
INSERT INTO `articles` VALUES ('29', '轮播图', null, '0', '1', '0', null, null, '2018-04-08 15:15:14', '2018-04-08 15:15:14', null);
INSERT INTO `articles` VALUES ('30', '轮播图1', '/images/1523171741686.jpg', '0', '29', '0', null, null, '2018-04-08 15:15:41', '2018-04-08 15:15:41', null);
INSERT INTO `articles` VALUES ('31', '轮播图2', '/images/1523171750451.jpg', '0', '29', '0', null, null, '2018-04-08 15:15:50', '2018-04-08 15:15:50', null);
INSERT INTO `articles` VALUES ('32', '首页简介', '/images/1523171810933.jpg', '0', '1', '0', null, '南充市盛世蓝图广告有限责任公司位于四川省南充市顺庆区师大路二段，成立于2015年5月，注册资金300万元人民币。公司成立就秉承团结...', '2018-04-08 15:16:50', '2018-04-08 15:16:50', null);
INSERT INTO `articles` VALUES ('33', '服务项目图', '/images/1523171867529.jpg', '0', '1', '0', null, null, '2018-04-08 15:17:47', '2018-04-08 15:17:47', null);

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `displacement` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `category` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cars
-- ----------------------------

-- ----------------------------
-- Table structure for managers
-- ----------------------------
DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `managers_name_unique` (`name`),
  UNIQUE KEY `managers_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of managers
-- ----------------------------
INSERT INTO `managers` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$6zxgaKqazwkK4eHAsS1aHuKjrsgbN0ihVYo8ay5AGewgZ6IP4tVBK', null, null, null, null);

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `product` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('10', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('11', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('12', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('13', '2017_06_26_154310_create_teams_table', '1');
INSERT INTO `migrations` VALUES ('14', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('15', '2017_07_01_115424_create_car_table', '1');
INSERT INTO `migrations` VALUES ('16', '2017_07_18_144831_create_order_lists_table', '1');
INSERT INTO `migrations` VALUES ('17', '2017_11_06_110957_create_rcases_table', '1');
INSERT INTO `migrations` VALUES ('18', '2018_04_04_171612_create_reports_table', '1');
INSERT INTO `migrations` VALUES ('19', '2018_04_08_110206_create_managers_table', '1');

-- ----------------------------
-- Table structure for order_lists
-- ----------------------------
DROP TABLE IF EXISTS `order_lists`;
CREATE TABLE `order_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_data` timestamp NULL DEFAULT NULL,
  `category` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `organization` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of order_lists
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for rcases
-- ----------------------------
DROP TABLE IF EXISTS `rcases`;
CREATE TABLE `rcases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtent` text COLLATE utf8mb4_unicode_ci,
  `serial_number` int(11) NOT NULL DEFAULT '0',
  `style_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rcases
-- ----------------------------

-- ----------------------------
-- Table structure for reports
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of reports
-- ----------------------------

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_at` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_concept` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_age` int(11) DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rel_name` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wx_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `openid` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer` int(11) DEFAULT NULL,
  `tatal_fee` decimal(8,2) NOT NULL DEFAULT '0.00',
  `payed_fee` decimal(8,2) NOT NULL DEFAULT '0.00',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
