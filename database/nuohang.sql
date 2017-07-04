/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : nuohang

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-04 18:13:49
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
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '首页轮播大图', null, null, '0', '1', '0', null, '2017-07-03 14:29:05', '2017-07-03 14:29:05', null);
INSERT INTO `articles` VALUES ('2', '首页', null, null, '0', '1', '0', '/', '2017-07-03 14:29:24', '2017-07-03 14:29:24', null);
INSERT INTO `articles` VALUES ('3', '关于', null, '<p>诺航科技有限公司成立于2017年5月，专注于企业电子商务的深入服务，并与纵多国内知名网络服务商形成紧密合作，<br/>截至目前，我们为知名企业定制个性化互联网营策划方案，企业品牌营销得到了显著的提升。<br/>我们公司的定位：“专业的企业互联网策划商”，我们的经营理念：“客户的成功才是我们的成功”。<br/>我们在不断适应和挖掘企业的商务需求，在稳定老市场和老客户的基础上，不断发展，形成多元化的业务运作体系</p>', '0', '1', '0', '/about', '2017-07-03 14:29:39', '2017-07-04 11:49:51', null);
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
INSERT INTO `articles` VALUES ('34', '电视背景墙的装修设计你知道多少！！', '/images/1499078083616.jpg', '<p><span style=\"color: rgb(34, 34, 34); font-size: 18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;古语有云：“开门见灶，钱财多耗”。意思是说炉灶火口与正大门形成了一条直线，以致有刑克，这种厨房布局不仅对主人家的财运有很大的破坏，而且还会损害家人的健康。需注意肠胃病。这种情况只有将炉灶移往他处方可破解。</span></p>', '25', '0', '0', null, '2017-07-03 18:34:43', '2017-07-04 11:07:48', null);
INSERT INTO `articles` VALUES ('35', '助您找到最契合家装需求的完美白色', '/images/1499137731747.jpg', '<p><span style=\"color: rgb(34, 34, 34); font-size: 18px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;古语有云：“开门见灶，钱财多耗”。意思是说炉灶火口与正大门形成了一条直线，以致有刑克，这种厨房布局不仅对主人家的财运有很大的破坏，而且还会损害家人的健康。需注意肠胃病。这种情况只有将炉灶移往他处方可破解。</span></p>', '25', '0', '0', null, '2017-07-03 18:36:13', '2017-07-04 11:08:51', null);
INSERT INTO `articles` VALUES ('36', '企业网站定制', null, '<p>主要针对企业宣传型网站</p><p>专业策划师策划网站，输出专业架构，创意广告文案等，后由高端设计师定制</p><p>客户有个性化要求，对网站设计要求较高</p><p>PC端、移动端全包含，也可自选，纯PC端5800元,纯手机端5800元</p><p>含网站管理系统，赠送10G空间，1个域名，备案服务，企业邮箱</p><p>制作周期，确认效果图后15个工作日</p><p>专业售后一对一免费服务2年再赠送1年，次年续费1200元.</p>', '21', '0', '0', '6888', '2017-07-04 09:58:48', '2017-07-04 10:03:20', null);
INSERT INTO `articles` VALUES ('37', '平台网站定制', null, '<p>主要针对企业宣传型网站</p><p>专业策划师策划网站，输出专业架构，创意广告文案等，后由高端设计师定制</p><p>客户有个性化要求，对网站设计要求较高</p><p>PC端、移动端全包含，也可自选，纯PC端5800元,纯手机端5800元</p><p>含网站管理系统，赠送10G空间，1个域名，备案服务，企业邮箱</p><p>制作周期，确认效果图后15个工作日</p><p>专业售后一对一免费服务2年再赠送1年，次年续费1200元</p>', '21', '0', '0', '6880', '2017-07-04 09:59:22', '2017-07-04 09:59:22', null);
INSERT INTO `articles` VALUES ('38', '商城网站定制', null, '<p>主要针对企业宣传型网站</p><p>专业策划师策划网站，输出专业架构，创意广告文案等，后由高端设计师定制</p><p>客户有个性化要求，对网站设计要求较高</p><p>PC端、移动端全包含，也可自选，纯PC端5800元,纯手机端5800元</p><p>含网站管理系统，赠送10G空间，1个域名，备案服务，企业邮箱</p><p>制作周期，确认效果图后15个工作日</p><p>专业售后一对一免费服务2年再赠送1年，次年续费1200元</p>', '21', '0', '0', '6880', '2017-07-04 09:59:49', '2017-07-04 09:59:49', null);
INSERT INTO `articles` VALUES ('39', '软件开发', null, '<p>主要针对企业宣传型网站</p><p>专业策划师策划网站，输出专业架构，创意广告文案等，后由高端设计师定制</p><p>客户有个性化要求，对网站设计要求较高</p><p>PC端、移动端全包含，也可自选，纯PC端5800元,纯手机端5800元</p><p>含网站管理系统，赠送10G空间，1个域名，备案服务，企业邮箱</p><p>制作周期，确认效果图后15个工作日</p><p>专业售后一对一免费服务2年再赠送1年，次年续费1200元</p>', '21', '0', '0', '6880', '2017-07-04 10:00:22', '2017-07-04 10:00:22', null);
INSERT INTO `articles` VALUES ('40', '林芝华庭房地产', '/images/1499134187257.jpg', '<p><img src=\"/Uploads/image/149913417548406450.jpg\" title=\"149913417548406450.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:09:47', '2017-07-04 10:30:53', null);
INSERT INTO `articles` VALUES ('41', '林芝华庭房地产', '/images/1499134222714.jpg', '<p><img src=\"/Uploads/image/149913421758678137.jpg\" title=\"149913421758678137.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:10:22', '2017-07-04 10:31:06', null);
INSERT INTO `articles` VALUES ('42', '林芝华庭房地产', '/images/1499134238581.jpg', '<p><img src=\"/Uploads/image/149913423611813514.jpg\" title=\"149913423611813514.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:10:38', '2017-07-04 10:32:19', null);
INSERT INTO `articles` VALUES ('43', '林芝华庭房地产', '/images/1499134251290.jpg', '<p><img src=\"/Uploads/image/149913424914021475.jpg\" title=\"149913424914021475.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:10:51', '2017-07-04 10:32:29', null);
INSERT INTO `articles` VALUES ('44', '林芝华庭房地产', '/images/1499134266832.jpg', '<p><img src=\"/Uploads/image/149913426471548942.jpg\" title=\"149913426471548942.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:11:06', '2017-07-04 10:32:43', null);
INSERT INTO `articles` VALUES ('45', '林芝华庭房地产', '/images/1499134277434.jpg', '<p><img src=\"/Uploads/image/149913427533310901.jpg\" title=\"149913427533310901.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:11:17', '2017-07-04 10:32:53', null);
INSERT INTO `articles` VALUES ('46', '林芝华庭房地产', '/images/1499134287403.jpg', '<p><img src=\"/Uploads/image/149913428363644005.jpg\" title=\"149913428363644005.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:11:27', '2017-07-04 10:33:00', null);
INSERT INTO `articles` VALUES ('47', '林芝华庭房地产', '/images/1499134297883.jpg', '<p><img src=\"/Uploads/image/149913429410748478.jpg\" title=\"149913429410748478.jpg\" alt=\"case.jpg\"/></p>', '28', '0', '0', '大蓉和餐饮公司成立于2000年，位于南充市汉中市天汉大道魅力之城，拥有独家外景摄影基地，并创建多组室内豪华实景拍摄主题，是一家集婚纱摄影、艺术写真、广告等多元化发展的摄影机构。', '2017-07-04 10:11:37', '2017-07-04 10:33:08', null);
INSERT INTO `articles` VALUES ('48', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1499137265486.jpg', '<p>古语有云：“开门见灶，钱财多耗”。意思是说炉灶火口与正大门形成了一条直线，以致有刑克，这种厨房布局不仅对主人家的财运有很大的破坏，而且还会损害家人的健康。需注意肠胃病。这种情况只有将炉灶移往他处方可破解</p>', '25', '0', '0', null, '2017-07-04 11:01:05', '2017-07-04 11:01:05', null);
INSERT INTO `articles` VALUES ('49', '首页策划商内容', null, null, '0', '1', '0', null, '2017-07-04 14:41:48', '2017-07-04 14:41:48', null);
INSERT INTO `articles` VALUES ('50', '定制建站', '/images/1499151301697.png', '<p>诺航网络设计师团队为您量身<br/>定制企业官网，让视觉力量助力企业的<br/>影响力</p>', '49', '0', '0', '企业网站定制,平台网站定制,商城网站定制,软件开发', '2017-07-04 14:55:01', '2017-07-04 14:55:01', null);
INSERT INTO `articles` VALUES ('51', '移动端开发', '/images/1499154581952.png', '<p>拥抱移动互联网，开发移动端应用，<br/>将用户和企业进行移动连接</p>', '49', '0', '0', '手机网站建设,微信官网建设,APP定制开发,小程序开发', '2017-07-04 14:56:03', '2017-07-04 15:49:41', null);
INSERT INTO `articles` VALUES ('52', '网络整合营销', '/images/1499154661837.png', '<p>锁定企业的目标客户群体，对其<br/>进行前期的数据分析，整合更直接有效的<br/>网络推广方式</p>', '49', '0', '0', '微信代运营,搜索引擎SEO,网络公关,口碑营销策划', '2017-07-04 15:51:01', '2017-07-04 15:51:01', null);
INSERT INTO `articles` VALUES ('53', '网络基础服务', '/images/1499154714760.png', '<p>帮助客户选择适配域名，开通快速、<br/>安全的网络空间以及网站<br/>日常维护</p>', '49', '0', '0', '域名注册,后台培训,日常维护,网站空间', '2017-07-04 15:51:54', '2017-07-04 15:51:54', null);
INSERT INTO `articles` VALUES ('54', '轮播背景图片1', '/images/1499159639962.jpg', null, '1', '0', '0', null, '2017-07-04 17:13:59', '2017-07-04 17:13:59', null);
INSERT INTO `articles` VALUES ('55', '轮播背景图片2', '/images/1499159645249.jpg', null, '1', '0', '0', null, '2017-07-04 17:14:05', '2017-07-04 17:14:05', null);
INSERT INTO `articles` VALUES ('56', '轮播背景图片3', '/images/1499159651639.jpg', null, '1', '0', '0', null, '2017-07-04 17:14:11', '2017-07-04 17:14:11', null);
INSERT INTO `articles` VALUES ('57', '图片1', '/images/1499159780703.png', null, '54', '0', '0', null, '2017-07-04 17:16:20', '2017-07-04 17:16:20', null);
INSERT INTO `articles` VALUES ('58', '图片2', '/images/1499159792192.png', null, '54', '0', '0', null, '2017-07-04 17:16:32', '2017-07-04 17:16:32', null);
INSERT INTO `articles` VALUES ('59', '图片3', '/images/1499159804522.png', null, '54', '0', '0', null, '2017-07-04 17:16:44', '2017-07-04 17:16:44', null);
INSERT INTO `articles` VALUES ('60', '图片1', '/images/1499159829134.png', null, '55', '0', '0', null, '2017-07-04 17:17:09', '2017-07-04 17:17:09', null);
INSERT INTO `articles` VALUES ('61', '图片2', '/images/1499159839822.png', null, '55', '0', '0', null, '2017-07-04 17:17:19', '2017-07-04 17:17:19', null);
INSERT INTO `articles` VALUES ('62', '图片3', '/images/1499159850335.png', null, '55', '0', '0', null, '2017-07-04 17:17:30', '2017-07-04 17:17:30', null);
INSERT INTO `articles` VALUES ('63', '图片1', '/images/1499159871954.png', null, '56', '0', '0', null, '2017-07-04 17:17:51', '2017-07-04 17:17:51', null);
INSERT INTO `articles` VALUES ('64', '图片2', '/images/1499159881940.png', null, '56', '0', '0', null, '2017-07-04 17:18:01', '2017-07-04 17:18:01', null);
INSERT INTO `articles` VALUES ('65', '图片3', '/images/1499159889630.png', null, '56', '0', '0', null, '2017-07-04 17:18:09', '2017-07-04 17:18:09', null);

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
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_province` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_city` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fix_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '李城', '15882626026', '山东省', '济宁市', '死蹿红你', '10561451515', '2017-07-04 16:51:10', '2017-07-04 16:51:10', null);
INSERT INTO `messages` VALUES ('2', '历程', '1582621511', '山西省', '阳泉市', '成都话剧', '515541514514', '2017-07-04 17:08:51', '2017-07-04 17:08:51', null);

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
INSERT INTO `migrations` VALUES ('7', '2017_06_26_154310_create_teams_table', '2');
INSERT INTO `migrations` VALUES ('8', '2017_06_28_144157_create_messages_table', '3');
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
