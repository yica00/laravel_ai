/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : yimeier

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-01-19 10:13:50
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
  `serial_number` int(10) unsigned DEFAULT '0',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `is_nav` tinyint(4) DEFAULT NULL,
  `imgs` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '首页轮播图', null, '0', '0', '1', null, null, '2018-01-18 17:27:15', '2018-01-18 17:27:15', null);
INSERT INTO `articles` VALUES ('2', '轮播图1', '/images/1516267919923.png', '0', '1', '0', null, null, '2018-01-18 17:31:59', '2018-01-18 17:31:59', null);
INSERT INTO `articles` VALUES ('3', '轮播图2', '/images/1516267929394.png', '0', '1', '0', null, null, '2018-01-18 17:32:09', '2018-01-18 17:32:09', null);
INSERT INTO `articles` VALUES ('4', '首页项目分类', null, '0', '0', '1', null, null, '2018-01-18 17:40:30', '2018-01-18 17:40:30', null);
INSERT INTO `articles` VALUES ('5', '美丽预约', '/images/1516268704161.png', '0', '4', '0', null, null, '2018-01-18 17:45:04', '2018-01-18 17:45:04', null);
INSERT INTO `articles` VALUES ('6', '案例展示', '/images/1516268736787.png', '0', '4', '0', null, null, '2018-01-18 17:45:36', '2018-01-18 17:45:36', null);
INSERT INTO `articles` VALUES ('7', '最新活动', '/images/1516268750389.png', '0', '4', '0', null, null, '2018-01-18 17:45:50', '2018-01-18 17:45:50', null);
INSERT INTO `articles` VALUES ('8', '联系我们', '/images/1516268778381.png', '0', '4', '0', null, null, '2018-01-18 17:46:18', '2018-01-18 17:46:18', null);
INSERT INTO `articles` VALUES ('9', '案例', null, '0', '0', '1', null, null, '2018-01-18 17:56:25', '2018-01-18 17:56:25', null);
INSERT INTO `articles` VALUES ('10', '活动资讯', null, '0', '0', '1', null, null, '2018-01-18 17:56:39', '2018-01-18 17:56:39', null);
INSERT INTO `articles` VALUES ('11', '案例1', '/images/1516271589926.png', '0', '9', '0', '/images/15162715895747.jpg,/images/15162715893772.png', '案例介绍\r\n案例介绍\r\n案例介绍 案例介绍\r\n案例介绍', '2018-01-18 18:33:09', '2018-01-18 18:33:09', null);
INSERT INTO `articles` VALUES ('12', '案例22', '/images/1516271622434.png', '0', '9', '0', '/images/15162716226920.jpg,/images/15162716222401.png', '案例介绍\r\n案例介绍\r\n案例介绍 案例介绍\r\n案例介绍', '2018-01-18 18:33:42', '2018-01-19 09:43:05', null);
INSERT INTO `articles` VALUES ('13', '活动1', '/images/1516326284195.jpg', '0', '10', '0', '/images/15163262844170.jpg,/images/15163262848102.png', '活动1的介绍\r\n活动1的介绍\r\n活动1的介绍\r\n活动1的介绍\r\n活动1的介绍\r\n活动1的介绍 活动1的介绍', '2018-01-19 09:44:44', '2018-01-19 09:44:44', null);
INSERT INTO `articles` VALUES ('14', '活动2', '/images/1516326284195.jpg', '0', '10', '0', '/images/15163262844170.jpg,/images/15163262848102.png', '活动1的介绍\r\n活动1的介绍\r\n活动1的介绍\r\n活动1的介绍\r\n活动1的介绍\r\n活动1的介绍 活动1的介绍', '2018-01-19 09:44:44', '2018-01-19 09:44:44', null);

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of cars
-- ----------------------------

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('2', '李肇星', '15882223232', null, null, '预约时间：2017-10-29<br>预约项目：高贵飘逸眼<br>留言：的房地产<br>', '127.0.0.1', '2017-11-19 13:50:13', '2017-11-19 13:50:13', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('11', '2017_06_24_170051_create_article_table', '2');
INSERT INTO `migrations` VALUES ('4', '2017_06_26_154310_create_teams_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_07_01_115424_create_car_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_07_18_144831_create_order_lists_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_11_06_110957_create_rcases_table', '1');

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of rcases
-- ----------------------------

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `honor` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtent` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '徐海', '依美整形美容主任', '全身各部位的烧、烫伤瘢痕整形；畸形纠正、容貌恢复；严重烧伤后功能重建;各种外伤所致的疤痕整形及仪表恢复等。', '中国医疗美容整形协会会员,\r\n国家认证整形外科副主任,\r\n香港依美医疗美容集团总裁,\r\n\'恒久美美雕\'医疗美容系列项目创始人', '/images/1510819768314.jpg', '徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。\r\n徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。', '<p></p><p><img src=\"/Uploads/image/151081973260281372.jpg\" title=\"151081973260281372.jpg\"/></p><p><img src=\"/Uploads/image/151081973279928588.jpg\" title=\"151081973279928588.jpg\"/></p><p><img src=\"/Uploads/image/151081973254473876.jpg\" title=\"151081973254473876.jpg\"/></p><p><img src=\"/Uploads/image/151081973214761352.jpg\" title=\"151081973214761352.jpg\"/></p><p><br/></p>', '2017-11-16 16:09:28', '2017-11-17 15:30:25', null);
INSERT INTO `teams` VALUES ('2', '郭美美', '南充医疗美容医院副院长', '全身各部位的烧、烫伤瘢痕整形；畸形纠正、容貌恢复；严重烧伤后功能重建;各种外伤所致的疤痕整形及仪表恢复等。', '中国医疗美容整形协会会员,\r\n国家认证整形外科副主任,\r\n香港依美医疗美容集团总裁,\r\n\'恒久美美雕\'医疗美容系列项目创始人', '/images/1510819943308.jpg', '徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。\r\n徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。', '<p><img src=\"/Uploads/image/151081973279928588.jpg\"/></p><p><img src=\"/Uploads/image/151081973260281372.jpg\"/></p><p><img src=\"/Uploads/image/151081973254473876.jpg\"/></p><p><br/></p>', '2017-11-16 16:12:23', '2017-11-16 16:12:23', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_name_unique` (`name`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$YDh6gHpb9kzuerQn0Mk9xeeQlXfBpkPgteEF7vsL9Ff70QzmIWwH2', null, null, null, null);
