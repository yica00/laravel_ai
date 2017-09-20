/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : huangshi

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-20 15:43:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtent` text COLLATE utf8mb4_unicode_ci,
  `pid` int(11) NOT NULL,
  `is_nav` tinyint(4) NOT NULL DEFAULT '1',
  `serial_number` int(11) NOT NULL DEFAULT '0',
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, 'home', null, '0', '1', '0', '/', '2017-09-20 09:18:05', '2017-09-20 09:32:01', null);
INSERT INTO `articles` VALUES ('2', '皇室御品', null, 'royal supplies', null, '0', '1', '0', '/about', '2017-09-20 09:18:41', '2017-09-20 09:32:15', null);
INSERT INTO `articles` VALUES ('3', '皇室石材', null, 'royal stone', null, '0', '1', '0', '/product', '2017-09-20 09:19:04', '2017-09-20 09:32:27', null);
INSERT INTO `articles` VALUES ('4', '皇室案例', null, 'royal cases', null, '0', '1', '0', '/case', '2017-09-20 09:19:30', '2017-09-20 09:32:38', null);
INSERT INTO `articles` VALUES ('5', '皇室报价', null, 'Budget quotation', null, '0', '1', '0', '/budge', '2017-09-20 09:19:55', '2017-09-20 09:32:51', null);
INSERT INTO `articles` VALUES ('6', '皇室动态', null, 'royal news', null, '0', '1', '0', '/news', '2017-09-20 09:20:15', '2017-09-20 09:33:09', null);
INSERT INTO `articles` VALUES ('7', '联系我们', null, 'contact us', null, '0', '1', '0', '/contact', '2017-09-20 09:20:30', '2017-09-20 09:33:25', null);
INSERT INTO `articles` VALUES ('8', '首页轮播图', null, null, null, '1', '0', '0', null, '2017-09-20 09:20:50', '2017-09-20 09:20:50', null);
INSERT INTO `articles` VALUES ('9', '品牌介绍', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><br/>\r\n &nbsp; &nbsp;<p>皇室御品于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p>', '2', '1', '0', '/about', '2017-09-20 09:21:52', '2017-09-20 10:05:54', null);
INSERT INTO `articles` VALUES ('10', '企业文化', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><br/>\r\n &nbsp; &nbsp;<p>皇室御品于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p>', '2', '1', '0', '/about/culture', '2017-09-20 09:22:16', '2017-09-20 10:06:07', null);
INSERT INTO `articles` VALUES ('11', '荣誉资质', null, null, null, '2', '1', '0', '/about/honor', '2017-09-20 09:22:43', '2017-09-20 09:22:43', null);
INSERT INTO `articles` VALUES ('12', '办公环境', null, null, null, '2', '1', '0', '/about/env', '2017-09-20 09:23:03', '2017-09-20 09:23:03', null);
INSERT INTO `articles` VALUES ('13', '友情链接', null, null, null, '1', '0', '0', null, '2017-09-20 09:52:26', '2017-09-20 09:52:26', null);
INSERT INTO `articles` VALUES ('14', '百度', null, null, null, '13', '0', '0', 'https://www.baidu.com/', '2017-09-20 09:52:39', '2017-09-20 09:52:39', null);
INSERT INTO `articles` VALUES ('15', '荣誉图片1', '/images/1505873243217.jpg', null, null, '11', '0', '0', null, '2017-09-20 10:07:23', '2017-09-20 10:07:23', null);
INSERT INTO `articles` VALUES ('16', '荣誉图片2', '/images/1505873249302.jpg', null, null, '11', '0', '0', null, '2017-09-20 10:07:29', '2017-09-20 10:07:29', null);
INSERT INTO `articles` VALUES ('17', '办公环境1', '/images/1505873271467.jpg', null, null, '12', '0', '0', null, '2017-09-20 10:07:51', '2017-09-20 10:07:51', null);
INSERT INTO `articles` VALUES ('18', '办公环境2', '/images/1505873278940.jpg', null, null, '12', '0', '0', null, '2017-09-20 10:07:58', '2017-09-20 10:07:58', null);
INSERT INTO `articles` VALUES ('19', 'Caracole', '/images/1505874302823.jpg', '当色彩专家Leatrice Eiseman坐在这款无与伦比的沙发上时，她认为它散发着超凡的艺术的气息，同时这也是她所钟爱的色调之一。The cat\'s meow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。', '<p><img src=\"/Uploads/image/150587399039189043.jpg\" title=\"150587399039189043.jpg\"/></p><p><img src=\"/Uploads/image/150587399096864540.jpg\" title=\"150587399096864540.jpg\"/></p><p><img src=\"/Uploads/image/150587399030608506.jpg\" title=\"150587399030608506.jpg\"/></p><p><img src=\"/Uploads/image/150587399087857987.jpg\" title=\"150587399087857987.jpg\"/></p><p><br/></p>', '3', '0', '0', 'UPH-SOFWOO-23A', '2017-09-20 10:19:53', '2017-09-20 10:25:02', null);
INSERT INTO `articles` VALUES ('20', 'Hjdjd', '/images/1505874311621.jpg', 'The cat\'s meow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。', '<p><img src=\"/Uploads/image/150587399087857987.jpg\"/></p><p><img src=\"/Uploads/image/150587399039189043.jpg\"/></p><p><img src=\"/Uploads/image/150587399030608506.jpg\"/></p><p><br/></p>', '3', '0', '0', 'UPH-SOFWOO-22A', '2017-09-20 10:21:30', '2017-09-20 10:25:11', null);
INSERT INTO `articles` VALUES ('21', '常熟琴湖壹号住宅', '/images/1505875471959.jpg', null, '<p>&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p>', '4', '0', '0', null, '2017-09-20 10:44:31', '2017-09-20 10:44:31', null);
INSERT INTO `articles` VALUES ('22', '常熟琴湖壹号住宅2', '/images/1505875495152.jpg', null, '<p>&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p>', '4', '0', '0', null, '2017-09-20 10:44:55', '2017-09-20 10:44:55', null);
INSERT INTO `articles` VALUES ('23', '家居必备小知识', '/images/1505876071782.jpg', '新闻简介新闻简介新闻简介新闻简介新闻简介新闻简介', '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>皇室御品于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p>', '6', '0', '0', null, '2017-09-20 10:54:31', '2017-09-20 15:05:44', null);
INSERT INTO `articles` VALUES ('24', '皇室新闻222', '/images/1505876094829.jpg', '新闻简介新闻简介新闻简介新闻简介新闻简介', '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>皇室御品于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p>', '6', '0', '0', null, '2017-09-20 10:54:54', '2017-09-20 15:05:52', null);
INSERT INTO `articles` VALUES ('25', '轮播图1', '/images/1505890070785.jpg', null, null, '8', '0', '0', null, '2017-09-20 14:47:50', '2017-09-20 14:47:50', null);
INSERT INTO `articles` VALUES ('26', '轮播图2', '/images/1505890076640.jpg', null, null, '8', '0', '0', null, '2017-09-20 14:47:56', '2017-09-20 14:47:56', null);
INSERT INTO `articles` VALUES ('27', '轮播图3', '/images/1505890081869.jpg', null, null, '8', '0', '0', null, '2017-09-20 14:48:01', '2017-09-20 14:48:01', null);
INSERT INTO `articles` VALUES ('28', '常熟琴湖壹号住宅3', '/images/1505890640634.jpg', null, '<p>在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p>', '4', '0', '0', null, '2017-09-20 14:57:20', '2017-09-20 14:57:20', null);
INSERT INTO `articles` VALUES ('29', '常熟琴湖壹号住宅4', '/images/1505890651357.jpg', null, '<p>在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p>', '4', '0', '0', null, '2017-09-20 14:57:31', '2017-09-20 14:57:31', null);

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
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '留言测试', '15882626026', null, '产品数量：100<br>产品名字：Caracole <br>留言详情：留言测试是', '127.0.0.1', '2017-09-20 11:24:10', '2017-09-20 11:24:10', null);
INSERT INTO `messages` VALUES ('6', '测试2', '15882626026', null, '产品数量：100<br>产品名字：Caracole<br>留言详情：测试2测试2测试2测试2测试2', '127.0.0.1', '2017-09-20 15:14:11', '2017-09-20 15:14:11', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$kaU2aOZP8yGU7Neus0oj5e00YM2g.du10GCos.G9O6n5Z9yDsBqUG', null, null, null, null);
