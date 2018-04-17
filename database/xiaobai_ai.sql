/*
Navicat MySQL Data Transfer

Source Server         : wamp本机
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : xiaobai_ai

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-04-17 11:27:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorys
-- ----------------------------
DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categorys
-- ----------------------------
INSERT INTO `categorys` VALUES ('1', '黄种人', '2018-04-16 14:23:27', '2018-04-16 14:24:23', null);
INSERT INTO `categorys` VALUES ('2', '白种人', '2018-04-16 14:23:33', '2018-04-16 14:23:33', null);
INSERT INTO `categorys` VALUES ('3', '蓝种人', '2018-04-16 14:23:51', '2018-04-16 14:29:16', null);

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blov` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('7', '李开复', null, '2018-04-17 10:52:45', '2018-04-17 10:52:45', null, '2', '3', '测试');
INSERT INTO `customers` VALUES ('6', '陈世旭', null, '2018-04-17 10:49:44', '2018-04-17 10:49:44', null, '1', '1', null);

-- ----------------------------
-- Table structure for imgs
-- ----------------------------
DROP TABLE IF EXISTS `imgs`;
CREATE TABLE `imgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `url` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blov` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of imgs
-- ----------------------------
INSERT INTO `imgs` VALUES ('1', '6', '/images/15239333847831.jpg', 'bISCdnSad3p+jnmAbpt0ioB/kISVeXR9iGyBhHmMi4qDh4FliWN6goh/fnh+fImPenyAe3eEiYFwhoiJlXyFg4qHhYeAaHBzdnaBhnqNdnyIhpNtf5J0eYB+eH90eoyFg3yNh31yf5GCfoN4hYlwg3SDhYSEhI2HcYp3kHyUc2k=', '2018-04-17 10:49:45', '2018-04-17 10:49:45', null);
INSERT INTO `imgs` VALUES ('2', '7', '/images/15239335651891.jpg', 'fYpzfIaEfYiRd3B+dIp/fHuIjXmKcXd6k3CAjX6Sf5F/gIOAf2t+iZaPe4JybIiUgYSCen2EfniDioCHinmEfXKQc4CQb3aBkI6Ke353gG16kod3eIJ4g3Z8bYNvcH11gHaPdX+Je414j3yRfoB9YXeQfYR7fnh8g4l+e5eBf38=', '2018-04-17 10:52:45', '2018-04-17 10:52:45', null);
INSERT INTO `imgs` VALUES ('3', '7', '/images/15239335652849.jpg', 'bISCdnSad3p+jnmAbpt0ioB/kISVeXR9iGyBhHmMi4qDh4FliWN6goh/fnh+fImPenyAe3eEiYFwhoiJlXyFg4qHhYeAaHBzdnaBhnqNdnyIhpNtf5J0eYB+eH90eoyFg3yNh31yf5GCfoN4hYlwg3SDhYSEhI2HcYp3kHyUc2k=', '2018-04-17 10:52:46', '2018-04-17 10:52:46', null);
INSERT INTO `imgs` VALUES ('4', '6', '/images/15239351781621.jpg', 'fYpzfIaEfYiRd3B+dIp/fHuIjXmKcXd6k3CAjX6Sf5F/gIOAf2t+iZaPe4JybIiUgYSCen2EfniDioCHinmEfXKQc4CQb3aBkI6Ke353gG16kod3eIJ4g3Z8bYNvcH11gHaPdX+Je414j3yRfoB9YXeQfYR7fnh8g4l+e5eBf38=', '2018-04-17 11:19:38', '2018-04-17 11:19:38', null);

-- ----------------------------
-- Table structure for levels
-- ----------------------------
DROP TABLE IF EXISTS `levels`;
CREATE TABLE `levels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of levels
-- ----------------------------
INSERT INTO `levels` VALUES ('1', '黑道1段', '2018-04-16 14:26:24', '2018-04-16 14:26:24', null);
INSERT INTO `levels` VALUES ('2', '黑道2段', '2018-04-16 14:26:31', '2018-04-16 14:26:53', null);
INSERT INTO `levels` VALUES ('3', '黑道三段', '2018-04-16 14:26:35', '2018-04-16 14:29:23', null);

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
INSERT INTO `managers` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$.juv9q4fNybVssMu3iV4q.02JyF..iiNBl.q2WAY6ldcU10Fsfivi', null, null, '2018-04-16 11:25:28', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_06_26_154310_create_teams_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_07_01_115424_create_car_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_07_18_144831_create_order_lists_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_11_06_110957_create_rcases_table', '1');
INSERT INTO `migrations` VALUES ('9', '2018_04_04_171612_create_reports_table', '1');
INSERT INTO `migrations` VALUES ('10', '2018_04_08_110206_create_managers_table', '1');
INSERT INTO `migrations` VALUES ('11', '2018_04_16_103226_create_customers_table', '1');
INSERT INTO `migrations` VALUES ('12', '2018_04_16_140948_create_categorys_table', '2');
INSERT INTO `migrations` VALUES ('13', '2018_04_16_141002_create_levels_table', '2');
INSERT INTO `migrations` VALUES ('14', '2018_04_17_102032_create_imgs_table', '3');

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
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
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
