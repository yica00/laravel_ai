/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : nuohang

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-03 19:04:28
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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '首页轮播大图', null, null, '0', '1', '0', null, '2017-07-03 14:29:05', '2017-07-03 14:29:05', null);
INSERT INTO `articles` VALUES ('2', '首页', null, null, '0', '1', '0', '/', '2017-07-03 14:29:24', '2017-07-03 14:29:24', null);
INSERT INTO `articles` VALUES ('3', '关于', null, null, '0', '1', '0', '/about', '2017-07-03 14:29:39', '2017-07-03 14:29:39', null);
INSERT INTO `articles` VALUES ('4', '技术', null, null, '0', '1', '0', '/technology', '2017-07-03 14:30:18', '2017-07-03 14:30:18', null);
INSERT INTO `articles` VALUES ('5', '案例', null, '<p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p><p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p>', '0', '1', '0', '/case', '2017-07-03 14:30:38', '2017-07-03 16:26:23', null);
INSERT INTO `articles` VALUES ('6', '新闻', null, null, '0', '1', '0', '/news', '2017-07-03 14:30:57', '2017-07-03 14:30:57', null);
INSERT INTO `articles` VALUES ('7', '联系', null, null, '0', '1', '0', '/contact', '2017-07-03 14:31:20', '2017-07-03 14:31:56', null);
INSERT INTO `articles` VALUES ('8', '　　公司简介', '/images/1499066024921.jpg', '<p>诺航科技有限公司成立于2017年5月，专注于企业电子商务的深入服务，并与纵多国内知名网络服务商形成紧密合作，<br/>截至目前，我们为知名企业定制个性化互联网营策划方案，企业品牌营销得到了显著的提升。<br/>我们公司的定位：“专业的企业互联网策划商”，我们的经营理念：“客户的成功才是我们的成功”。<br/>我们在不断适应和挖掘企业的商务需求，在稳定老市场和老客户的基础上，不断发展，形成多元化的业务运作体系。</p>', '3', '1', '0', '/about#abt_company', '2017-07-03 15:09:24', '2017-07-03 15:13:44', null);
INSERT INTO `articles` VALUES ('9', '　　企业文化', '/images/1499066043697.png', null, '3', '1', '0', '/about#abt_culture', '2017-07-03 15:09:52', '2017-07-03 15:14:03', null);
INSERT INTO `articles` VALUES ('10', '　　诺航团队', null, null, '3', '1', '0', '/about#abt_team', '2017-07-03 15:10:38', '2017-07-03 15:10:38', null);
INSERT INTO `articles` VALUES ('11', '　　合作伙伴', null, null, '3', '1', '0', '/about#abt_partner', '2017-07-03 15:11:28', '2017-07-03 15:11:28', null);
INSERT INTO `articles` VALUES ('12', '快乐兄弟', '/images/1499066414477.jpg', null, '11', '0', '0', null, '2017-07-03 15:16:48', '2017-07-03 15:20:14', null);
INSERT INTO `articles` VALUES ('13', '乐贝佳', '/images/1499066234783.jpg', null, '11', '0', '0', null, '2017-07-03 15:17:14', '2017-07-03 15:17:14', null);
INSERT INTO `articles` VALUES ('14', '申龙科技', '/images/1499066273126.jpg', null, '11', '0', '0', null, '2017-07-03 15:17:53', '2017-07-03 15:17:53', null);
INSERT INTO `articles` VALUES ('15', '业之峰装饰', '/images/1499066296613.jpg', null, '11', '0', '0', null, '2017-07-03 15:18:16', '2017-07-03 15:18:16', null);
INSERT INTO `articles` VALUES ('16', '忘情水', '/images/1499066316326.jpg', null, '11', '0', '0', null, '2017-07-03 15:18:36', '2017-07-03 15:18:36', null);
INSERT INTO `articles` VALUES ('17', '龙申科技', '/images/1499066348652.jpg', null, '11', '0', '0', null, '2017-07-03 15:19:08', '2017-07-03 15:19:08', null);
INSERT INTO `articles` VALUES ('18', '业之峰装饰', '/images/1499066366296.jpg', null, '11', '0', '0', null, '2017-07-03 15:19:26', '2017-07-03 15:19:26', null);
INSERT INTO `articles` VALUES ('19', '快乐兄弟', '/images/1499066381969.jpg', null, '11', '0', '0', null, '2017-07-03 15:19:41', '2017-07-03 15:19:41', null);
INSERT INTO `articles` VALUES ('20', '乐贝家', '/images/1499066397116.jpg', null, '11', '0', '0', null, '2017-07-03 15:19:57', '2017-07-03 15:19:57', null);
INSERT INTO `articles` VALUES ('21', '　　定制建站', null, '<p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p><p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的</p>', '4', '1', '0', '/technology', '2017-07-03 16:24:19', '2017-07-03 17:33:46', null);
INSERT INTO `articles` VALUES ('22', '　　移动端开发', null, '<p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p><p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p>', '4', '1', '0', '/mobile', '2017-07-03 16:24:40', '2017-07-03 16:26:36', null);
INSERT INTO `articles` VALUES ('23', '　　网络整合营销', null, '<p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p><p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p>', '4', '1', '0', '/marketing', '2017-07-03 16:25:03', '2017-07-03 16:26:50', null);
INSERT INTO `articles` VALUES ('24', '　　网络基础服务', null, '<p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p><p>我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。我们以用户体验为核心，以市场需求为导向，为用户进行网站品牌策划与创意交互设计；我们提供最适合用户的网站设计方案，用专业创新的网站定制开发技术实现品牌商业价值！品牌的塑造基于我们高于行业的建站标准，敏锐的设计团队，创新的网站建设与技术服务体系。诚意出品的网站是最好的，也是最适合用户的。</p>', '4', '1', '0', '/network', '2017-07-03 16:25:56', '2017-07-03 16:25:56', null);
INSERT INTO `articles` VALUES ('25', '　　公司资讯', null, null, '6', '1', '0', '/news', '2017-07-03 16:36:01', '2017-07-03 16:36:01', null);
INSERT INTO `articles` VALUES ('26', '　　行业媒体', null, null, '6', '1', '0', '/industry_news', '2017-07-03 16:36:25', '2017-07-03 16:36:25', null);
INSERT INTO `articles` VALUES ('27', '全部', null, null, '5', '0', '0', null, '2017-07-03 17:38:52', '2017-07-03 17:38:52', null);
INSERT INTO `articles` VALUES ('28', '企业网站定制', null, null, '5', '0', '0', null, '2017-07-03 17:38:58', '2017-07-03 17:38:58', null);
INSERT INTO `articles` VALUES ('29', '平台&商城定制', null, null, '5', '0', '0', null, '2017-07-03 17:39:06', '2017-07-03 17:39:06', null);
INSERT INTO `articles` VALUES ('30', '手机&微信定制', null, null, '5', '0', '0', null, '2017-07-03 17:39:11', '2017-07-03 17:39:11', null);
INSERT INTO `articles` VALUES ('31', 'APP定制开发', null, null, '5', '0', '0', null, '2017-07-03 17:39:16', '2017-07-03 17:39:16', null);
INSERT INTO `articles` VALUES ('32', '软件开发', null, null, '5', '0', '0', null, '2017-07-03 17:39:21', '2017-07-03 17:39:21', null);
INSERT INTO `articles` VALUES ('33', '小程序开发', null, null, '5', '0', '0', null, '2017-07-03 17:39:28', '2017-07-03 17:39:28', null);
INSERT INTO `articles` VALUES ('34', '电视背景墙的装修设计你知道多少！！', '/images/1499078083616.jpg', '<p><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;正所谓“水火不相容”，厨房中水槽所产生的水汽，与瓦斯炉的火气是相冲突的。所以瓦斯炉不可与水槽或冰箱对冲，也不可紧邻水槽。另外，炉也不宜独立在厨房中央，因为厨房中心位置火气过旺，会导致家庭失合。</span></p>', '25', '0', '0', null, '2017-07-03 18:34:43', '2017-07-03 18:34:43', null);
INSERT INTO `articles` VALUES ('35', '助您找到最契合家装需求的完美白色', null, '<p><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;古语有云：“开门见灶，钱财多耗”。意思是说炉灶火口与正大门形成了一条直线，以致有刑克，这种厨房布局不仅对主人家的财运有很大的破坏，而且还会损害家人的健康。需注意肠胃病。这种情况只有将炉灶移往他处方可破解。</span></p>', '25', '0', '0', null, '2017-07-03 18:36:13', '2017-07-03 18:36:13', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_06_26_154310_create_teams_table', '2');
INSERT INTO `migrations` VALUES ('5', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_07_01_115424_create_car_table', '1');

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
  `iterm` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '甘赵乐', '总经理', '5', '/images/1499067129352.jpg', '这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介', '大蓉和,快乐宝贝,大融城,名典', '2017-07-03 15:31:11', '2017-07-03 15:32:17', null);
INSERT INTO `teams` VALUES ('2', '甘赵乐', '总经理', '5', '/images/1499067172426.jpg', '这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介', '大蓉和,快乐宝贝,大融城,名典1', '2017-07-03 15:32:52', '2017-07-03 15:32:52', null);
INSERT INTO `teams` VALUES ('3', '甘赵乐', '总经理', '5', '/images/1499067195165.jpg', '这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介', '大蓉和,快乐宝贝,大融城,名典', '2017-07-03 15:33:15', '2017-07-03 15:33:15', null);
INSERT INTO `teams` VALUES ('4', '甘赵乐', '总经理', '5', '/images/1499067213702.jpg', '这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介，这里是个人简介，这里是个人简介，这里是个人这里是个人简介简介简介', '大蓉和,快乐宝贝,大融城,名典', '2017-07-03 15:33:33', '2017-07-03 15:33:33', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$.ttxB7bcIkHu/6KY92V.c.y0IjtBSags6LnB122.eMQVxEhZiZVSO', null, null, null, null);
SET FOREIGN_KEY_CHECKS=1;
