/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : xinrun

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-03 09:31:54
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
  `comtent` text COLLATE utf8mb4_unicode_ci,
  `pid` int(11) NOT NULL,
  `is_nav` tinyint(4) NOT NULL DEFAULT '1',
  `serial_number` int(11) NOT NULL DEFAULT '0',
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '首页轮播大图', null, null, '0', '1', '0', null, '2017-07-01 10:21:16', '2017-07-01 10:21:16', null);
INSERT INTO `articles` VALUES ('2', '关于我们', null, null, '0', '1', '0', '/about', '2017-07-01 10:32:15', '2017-07-01 10:32:15', null);
INSERT INTO `articles` VALUES ('3', '招募司机', null, '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 18px; text-align: center; background-color: rgb(255, 255, 255);\">有1年及2年以上驾驶经验。驾驶技术娴熟；</span><br/><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 18px; text-align: center; background-color: rgb(255, 255, 255);\">无不良驾驶记录，无重大事故及交通违章，具有较强的安全意识；</span><br/><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 18px; text-align: center; background-color: rgb(255, 255, 255);\">懂商务接待礼仪，具有一定的服务意识；&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 18px; text-align: center; background-color: rgb(255, 255, 255);\">为人踏实、老实忠厚，保密意识强、责任心强。</span></p>', '0', '1', '0', '/driver', '2017-07-01 10:33:22', '2017-07-03 08:59:49', null);
INSERT INTO `articles` VALUES ('4', '司机培训', null, null, '0', '1', '0', '/training', '2017-07-01 10:33:53', '2017-07-01 10:33:53', null);
INSERT INTO `articles` VALUES ('5', '合作车型', null, null, '0', '1', '0', '/models', '2017-07-01 10:34:23', '2017-07-01 10:34:23', null);
INSERT INTO `articles` VALUES ('6', '滴滴授权', '/images/1499044772138.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">滴滴出行是全球领先的一站式多元化出行平台。滴滴在中国400余座城市为近3亿用户提供出租车召车、专车、快车、顺风车、代驾、试驾、巴士和企业级等全面出行服务。多个第三方数据显示，滴滴拥有87%以上的中国专车市场份额； 99%以上的网约出租车市场份额。2015年，滴滴平台共完成14.3亿个订单；成为全球仅次于淘宝的第二大在线交易平台。公司致力于以共享经济实践响应中国互联网创新战略，与不同社群及行业伙伴协作互补，运用大数据驱动的深度学习技术， 解决中国的出行和环保挑战; 提升用户体验，创造社会价值，建设高效、可持续的移动出行新生态。 2015年，滴滴入选达沃斯全球成长型公司</p><p><br/></p>', '0', '1', '0', '/didi', '2017-07-01 10:34:52', '2017-07-03 09:19:32', null);
INSERT INTO `articles` VALUES ('7', '专业培训', null, null, '0', '1', '0', '/teacher', '2017-07-01 10:35:15', '2017-07-01 10:35:15', null);
INSERT INTO `articles` VALUES ('8', '联系我们', null, null, '0', '1', '0', '/contact', '2017-07-01 10:35:47', '2017-07-01 10:35:47', null);
INSERT INTO `articles` VALUES ('9', '　　兴润简介', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">滴滴出行是全球领先的一站式多元化出行平台。滴滴在中国400余座城市为近3亿用户提供出租车召车、专车、快车、顺风车、代驾、试驾、巴士和企业级等全面出行服务。多个第三方数据显示，滴滴拥有87%以上的中国专车市场份额； 99%以上的网约出租车市场份额。2015年，滴滴平台共完成14.3亿个订单；成为全球仅次于淘宝的第二大在线交易平台。公司致力于以共享经济实践响应中国互联网创新战略，与不同社群及行业伙伴协作互补，运用大数据驱动的深度学习技术， 解决中国的出行和环保挑战; 提升用户体验，创造社会价值，建设高效、可持续的移动出行新生态。 2015年，滴滴入选达沃斯全球成长型公司。..</p><p><br/></p>', '2', '1', '0', '/about', '2017-07-01 10:38:12', '2017-07-01 11:25:13', null);
INSERT INTO `articles` VALUES ('10', '　　企业文化', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">滴滴出行是全球领先的一站式多元化出行平台。滴滴在中国400余座城市为近3亿用户提供出租车召车、专车、快车、顺风车、代驾、试驾、巴士和企业级等全面出行服务。多个第三方数据显示，滴滴拥有87%以上的中国专车市场份额； 99%以上的网约出租车市场份额。2015年，滴滴平台共完成14.3亿个订单；成为全球仅次于淘宝的第二大在线交易平台。公司致力于以共享经济实践响应中国互联网创新战略，与不同社群及行业伙伴协作互补，运用大数据驱动的深度学习技术， 解决中国的出行和环保挑战; 提升用户体验，创造社会价值，建设高效、可持续的移动出行新生态。 2015年，滴滴入选达沃斯全球成长型公司。</p><p><br/></p>', '2', '1', '0', '/culture', '2017-07-01 10:38:36', '2017-07-01 11:25:01', null);
INSERT INTO `articles` VALUES ('11', '　　招募要求', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">滴滴出行是全球领先的一站式多元化出行平台。滴滴在中国400余座城市为近3亿用户提供出租车召车、专车、快车、顺风车、代驾、试驾、巴士和企业级等全面出行服务。多个第三方数据显示，滴滴拥有87%以上的中国专车市场份额； 99%以上的网约出租车市场份额。2015年，滴滴平台共完成14.3亿个订单；成为全球仅次于淘宝的第二大在线交易平台。公司致力于以共享经济实践响应中国互联网创新战略，与不同社群及行业伙伴协作互补，运用大数据驱动的深度学习技术， 解决中国的出行和环保挑战; 提升用户体验，创造社会价值，建设高效、可持续的移动出行新生态。 2015年，滴滴入选达沃斯全球成长型公司。...</p><p><br/></p>', '3', '1', '0', '/driver', '2017-07-01 10:41:50', '2017-07-01 11:26:01', null);
INSERT INTO `articles` VALUES ('12', '　　招募流程', null, null, '3', '1', '0', '/process', '2017-07-01 10:44:24', '2017-07-01 16:16:13', null);
INSERT INTO `articles` VALUES ('13', '　　安全培训', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">滴滴出行是全球领先的一站式多元化出行平台。</p><p><br/></p>', '4', '1', '0', '/training', '2017-07-01 10:52:26', '2017-07-01 11:28:57', null);
INSERT INTO `articles` VALUES ('14', '　　服务培训', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">滴滴出行是全球领先的一站式多元化出行平台。11</p><p><br/></p>', '4', '1', '0', '/service_training', '2017-07-01 10:53:07', '2017-07-01 16:20:59', null);
INSERT INTO `articles` VALUES ('15', '　　企事业团体用车', null, '<p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知企事业团体用车须知</span></p>', '5', '1', '0', '/models', '2017-07-01 10:55:15', '2017-07-03 09:07:30', null);
INSERT INTO `articles` VALUES ('16', '　　合租车型', null, null, '5', '1', '0', '/cars', '2017-07-01 10:55:40', '2017-07-01 10:55:40', null);
INSERT INTO `articles` VALUES ('17', '企业长租', '/images/1498880532557.jpg', null, '15', '0', '0', null, '2017-07-01 11:42:12', '2017-07-01 11:42:12', null);
INSERT INTO `articles` VALUES ('18', '机场接送', '/images/1498880671979.jpg', null, '15', '0', '0', null, '2017-07-01 11:44:31', '2017-07-01 11:44:31', null);
INSERT INTO `articles` VALUES ('19', '会务专车', '/images/1498880682371.jpg', null, '15', '0', '0', null, '2017-07-01 11:44:42', '2017-07-01 11:44:42', null);
INSERT INTO `articles` VALUES ('20', '高管用车', '/images/1498880694328.jpg', null, '15', '0', '0', null, '2017-07-01 11:44:54', '2017-07-01 11:44:54', null);
INSERT INTO `articles` VALUES ('21', '差旅用车', '/images/1498880708552.jpg', null, '15', '0', '0', null, '2017-07-01 11:45:08', '2017-07-01 11:45:08', null);
INSERT INTO `articles` VALUES ('22', '出行用车', '/images/1498880723695.jpg', null, '15', '0', '0', null, '2017-07-01 11:45:23', '2017-07-01 11:45:23', null);
INSERT INTO `articles` VALUES ('23', '企业专车', '/images/1498880734249.jpg', null, '15', '0', '0', null, '2017-07-01 11:45:34', '2017-07-01 11:45:34', null);
INSERT INTO `articles` VALUES ('24', '企业整体出行方案', '/images/1498880747556.jpg', null, '15', '0', '0', null, '2017-07-01 11:45:47', '2017-07-01 11:45:47', null);
INSERT INTO `articles` VALUES ('25', '轮播大图1', '/images/1499043871760.jpg', null, '1', '0', '0', null, '2017-07-03 09:04:31', '2017-07-03 09:04:31', null);
INSERT INTO `articles` VALUES ('26', '轮播大图2', '/images/1499043877632.jpg', null, '1', '0', '0', null, '2017-07-03 09:04:37', '2017-07-03 09:04:37', null);
INSERT INTO `articles` VALUES ('27', '轮播大图3', '/images/1499043884342.jpg', null, '1', '0', '0', null, '2017-07-03 09:04:44', '2017-07-03 09:04:44', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cars
-- ----------------------------
INSERT INTO `cars` VALUES ('1', '起亚K3', '2.0T自动', '/images/1498894725488.jpg', '5', '经济型', '188', '2017-07-01 15:36:04', '2017-07-01 15:39:01', null);
INSERT INTO `cars` VALUES ('2', '起亚K3', '2.0T自动', '/images/1498894780275.jpg', '5', '经济型', '188', '2017-07-01 15:39:40', '2017-07-01 15:39:40', null);
INSERT INTO `cars` VALUES ('3', '起亚K3', '2.0T自动', '/images/1498894792673.jpg', '5', '经济型', '188', '2017-07-01 15:39:52', '2017-07-01 15:41:11', '2017-07-01 15:41:11');
INSERT INTO `cars` VALUES ('4', '起亚K3', '2.0T自动', '/images/1499044409470.jpg', '5', '经济型', '188', '2017-07-03 09:13:29', '2017-07-03 09:13:29', null);

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_06_26_154310_create_teams_table', '3');
INSERT INTO `migrations` VALUES ('5', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_07_01_115424_create_car_table', '4');

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
  `work_age` int(11) DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iterm` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgs` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '许老师', '高级培训师', '5', '/images/1498895272972.jpg', '我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人。我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人', '安全培训,服务培训', null, '152-2812-1788', '2017-07-01 15:47:52', '2017-07-01 15:50:02', null);
INSERT INTO `teams` VALUES ('2', '许教练', '高级培训师', '5', '/images/1498895353213.jpg', '我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人。我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人。', '安全培训,服务培训', null, '152-2812-1788', '2017-07-01 15:49:13', '2017-07-01 15:49:13', null);
INSERT INTO `teams` VALUES ('3', '许教练', '销售经理', '5', '/images/1499045220388.jpg', '我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人。我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人。', '安全培训,服务培训', '/images/14989028806536.png,/images/14989028806392.png,/images/14989028802407.png,/images/14989028803214.png', '152-2812-1788', '2017-07-01 17:54:40', '2017-07-03 09:27:00', null);
INSERT INTO `teams` VALUES ('4', '许教练', '销售经理', '5', '/images/1498903166373.jpg', '我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人。我来自郑州，我是一名信息工程大学印刷工程专业应届本科即将毕业的学员。我的性格偏于内向，为人坦率、热情、讲求原则；处事乐观、专心、细致、头脑清醒；富有责任心、乐于助人。', '安全培训,服务培训', '/images/14989031664593.jpg,/images/14989031667629.jpg,/images/14989031664385.jpg,/images/14989031667838.jpg,/images/14989031668235.jpg,/images/14989031662416.png', '15771251202', '2017-07-01 17:59:26', '2017-07-01 17:59:26', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$Nft4Oj2PfiwJ.bJ9/qSGqOnOmpO5Qy81gGVBGm6cjtEqm4I3z8thC', null, null, '2017-07-01 11:05:58', null);
SET FOREIGN_KEY_CHECKS=1;
