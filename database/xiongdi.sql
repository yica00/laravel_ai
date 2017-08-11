/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : xiongdi

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-11 09:24:45
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
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2017-08-09 18:13:22', '2017-08-09 18:13:48', null);
INSERT INTO `articles` VALUES ('2', '关于我们', null, null, null, '0', '1', '0', '/about', '2017-08-09 18:14:25', '2017-08-09 18:14:25', null);
INSERT INTO `articles` VALUES ('3', '新闻中心', null, null, null, '0', '1', '0', '/news', '2017-08-09 18:15:29', '2017-08-09 18:15:29', null);
INSERT INTO `articles` VALUES ('4', '产品中心', null, null, null, '0', '1', '0', '/product', '2017-08-09 18:15:47', '2017-08-09 18:15:47', null);
INSERT INTO `articles` VALUES ('5', '经典案例', null, null, null, '0', '1', '0', '/case', '2017-08-09 18:16:11', '2017-08-09 18:16:11', null);
INSERT INTO `articles` VALUES ('6', '合作品牌', null, null, null, '0', '1', '0', '/brand', '2017-08-09 18:16:30', '2017-08-09 18:16:30', null);
INSERT INTO `articles` VALUES ('7', '服务中心', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p>', '0', '1', '0', '/service', '2017-08-09 18:16:53', '2017-08-10 14:37:47', null);
INSERT INTO `articles` VALUES ('8', '联系我们', null, null, null, '0', '1', '0', '/contact', '2017-08-09 18:17:10', '2017-08-09 18:17:10', null);
INSERT INTO `articles` VALUES ('9', '公司简介', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p>', '2', '1', '0', '/about', '2017-08-09 18:45:16', '2017-08-10 09:07:22', null);
INSERT INTO `articles` VALUES ('10', '企业文化', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p>', '2', '1', '0', '/about/culture', '2017-08-09 18:46:22', '2017-08-10 09:07:36', null);
INSERT INTO `articles` VALUES ('11', '荣誉资质', null, null, null, '2', '1', '0', '/about/honor', '2017-08-09 18:47:23', '2017-08-09 18:47:23', null);
INSERT INTO `articles` VALUES ('12', '办公环境', null, null, null, '2', '1', '0', '/about/env', '2017-08-09 18:48:01', '2017-08-09 18:48:01', null);
INSERT INTO `articles` VALUES ('13', '最新资讯', '/images/1502355052848.jpg', null, null, '3', '1', '0', null, '2017-08-09 18:49:24', '2017-08-10 16:50:52', null);
INSERT INTO `articles` VALUES ('14', '兄弟动态', '/images/1502355063204.jpg', null, null, '3', '1', '0', null, '2017-08-09 18:49:37', '2017-08-10 16:51:03', null);
INSERT INTO `articles` VALUES ('15', '材料知识', '/images/1502355084369.jpg', null, null, '3', '1', '0', null, '2017-08-09 18:49:50', '2017-08-10 16:51:24', null);
INSERT INTO `articles` VALUES ('16', '装修风水', '/images/1502355099599.jpg', null, null, '3', '1', '0', null, '2017-08-09 18:50:03', '2017-08-10 16:51:39', null);
INSERT INTO `articles` VALUES ('17', '瓷砖', '/images/1502358844651.jpg', null, null, '4', '1', '0', null, '2017-08-09 18:50:30', '2017-08-10 17:54:04', null);
INSERT INTO `articles` VALUES ('18', '吊灯', '/images/1502358854859.jpg', null, null, '4', '1', '0', null, '2017-08-09 18:50:39', '2017-08-10 17:54:14', null);
INSERT INTO `articles` VALUES ('19', '联系方式', null, null, null, '8', '1', '0', '/contact', '2017-08-09 18:51:26', '2017-08-09 18:51:26', null);
INSERT INTO `articles` VALUES ('20', '在线留言', null, null, null, '8', '1', '0', '/contact/message', '2017-08-09 18:51:46', '2017-08-09 18:51:46', null);
INSERT INTO `articles` VALUES ('21', '办公环境、荣誉资质均为相册板式', '/images/1502327295551.jpg', null, null, '11', '0', '0', null, '2017-08-10 09:08:15', '2017-08-10 09:08:15', null);
INSERT INTO `articles` VALUES ('22', '办公环境、荣誉资质均为相册板式', '/images/1502327301617.jpg', null, null, '11', '0', '0', null, '2017-08-10 09:08:21', '2017-08-10 09:08:21', null);
INSERT INTO `articles` VALUES ('23', '办公环境、荣誉资质均为相册板式', '/images/1502327307121.jpg', null, null, '11', '0', '0', null, '2017-08-10 09:08:27', '2017-08-10 09:08:27', null);
INSERT INTO `articles` VALUES ('24', '办公环境1', '/images/1502327351906.jpg', null, null, '12', '0', '0', null, '2017-08-10 09:09:11', '2017-08-10 09:09:11', null);
INSERT INTO `articles` VALUES ('25', '办公环境2', '/images/1502327357387.jpg', null, null, '12', '0', '0', null, '2017-08-10 09:09:17', '2017-08-10 09:09:17', null);
INSERT INTO `articles` VALUES ('26', '家居必备小知识', '/images/1502329528608.jpg', null, '<p><img src=\"/Uploads/image/150232947416472565.jpg\" title=\"150232947416472565.jpg\"/></p><p>在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '13', '0', '0', null, '2017-08-10 09:45:28', '2017-08-10 09:45:28', null);
INSERT INTO `articles` VALUES ('27', '推动临沭农业创新发展', '/images/1502329562104.jpg', null, '<p>&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><img src=\"/Uploads/image/150232947441336329.jpg\" alt=\"150232947441336329.jpg\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '13', '0', '0', null, '2017-08-10 09:46:02', '2017-08-10 09:46:02', null);
INSERT INTO `articles` VALUES ('28', '现代农业示范园为民增收', '/images/1502330276443.jpg', null, '<p>&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><img src=\"/Uploads/image/150232947411212360.jpg\" alt=\"150232947411212360.jpg\"/></p>', '15', '0', '0', null, '2017-08-10 09:46:41', '2017-08-10 09:57:56', null);
INSERT INTO `articles` VALUES ('29', '马可波罗瓷砖', '/images/1502332740306.jpg', '300x600', '<p>简介：当色彩专家Leatrice \r\nEiseman坐在这款无与伦比的沙发上时，她认为它散发着超凡的艺术的气息，同时这也是她所钟爱的色调之一。The cat&#39;s \r\nmeow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。</p>', '17', '0', '100', '马可波罗', '2017-08-10 10:37:02', '2017-08-10 18:46:26', null);
INSERT INTO `articles` VALUES ('30', 'Caracole瓷砖', '/images/1502332730809.jpg', '300x600', '<p>简介：当色彩专家Leatrice \r\nEiseman坐在这款无与伦比的沙发上时，她认为它散发着超凡的艺术的气息，同时这也是她所钟爱的色调之一。The cat&#39;s \r\nmeow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。</p>', '17', '0', '100', '瓷砖', '2017-08-10 10:37:29', '2017-08-10 18:46:10', null);
INSERT INTO `articles` VALUES ('31', 'Caracole吊灯', '/images/1502332715553.jpg', '400x700', '<p>简介：当色彩专家Leatrice \r\nEiseman坐在这款无与伦比的沙发上时，她认为它散发着超凡的艺术的气息，同时这也是她所钟爱的色调之一。The cat&#39;s \r\nmeow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。</p>', '18', '0', '100', 'Caracole', '2017-08-10 10:38:35', '2017-08-10 18:48:43', null);
INSERT INTO `articles` VALUES ('32', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1502337235257.jpg', null, '<p>在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><img src=\"/Uploads/image/150232947481545225.jpg\" alt=\"150232947481545225.jpg\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '5', '0', '0', null, '2017-08-10 11:53:55', '2017-08-10 11:53:55', null);
INSERT INTO `articles` VALUES ('33', '在距离临沭县约十公里的周庄', '/images/1502337269325.jpg', null, '<p><img src=\"/Uploads/image/150232947411212360.jpg\" alt=\"150232947411212360.jpg\"/></p><p>，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '5', '0', '0', null, '2017-08-10 11:54:29', '2017-08-10 11:54:29', null);
INSERT INTO `articles` VALUES ('34', '有悦无限', '/images/1502346785266.jpg', null, null, '6', '0', '0', null, '2017-08-10 14:33:05', '2017-08-10 14:33:05', null);
INSERT INTO `articles` VALUES ('35', '贝来丽', '/images/1502346800241.jpg', null, null, '6', '0', '0', null, '2017-08-10 14:33:20', '2017-08-10 14:33:20', null);
INSERT INTO `articles` VALUES ('36', '首页轮播图', null, null, null, '1', '0', '0', null, '2017-08-10 15:36:21', '2017-08-10 15:36:21', null);
INSERT INTO `articles` VALUES ('37', '轮播图1', '/images/1502350614747.jpg', null, null, '36', '0', '0', null, '2017-08-10 15:36:54', '2017-08-10 15:36:54', null);
INSERT INTO `articles` VALUES ('38', '轮播图2', '/images/1502350621571.jpg', null, null, '36', '0', '0', null, '2017-08-10 15:37:01', '2017-08-10 15:37:01', null);
INSERT INTO `articles` VALUES ('39', '轮播图3', '/images/1502350630951.jpg', null, null, '36', '0', '0', null, '2017-08-10 15:37:10', '2017-08-10 15:37:10', null);
INSERT INTO `articles` VALUES ('40', '欧式古典欧式古典欧', '/images/1502353149348.jpg', null, '<p>欧式古典欧式古典欧</p><p><br/></p><p><br/></p><p>欧式古典欧式古典欧</p><p><img src=\"/Uploads/image/150232947441336329.jpg\" alt=\"150232947441336329.jpg\"/></p>', '5', '0', '0', null, '2017-08-10 16:19:09', '2017-08-10 16:19:09', null);
INSERT INTO `articles` VALUES ('41', '欧式古典欧式古典欧2', '/images/1502353177709.jpg', null, '<p>欧式古典欧式古典欧</p><p>欧式古典欧式古典欧</p><p>欧式古典欧式古典欧</p><p>欧式古典欧式古典欧</p><p><img src=\"/Uploads/image/150232947441336329.jpg\" alt=\"150232947441336329.jpg\"/></p>', '5', '0', '0', null, '2017-08-10 16:19:37', '2017-08-10 16:19:37', null);
INSERT INTO `articles` VALUES ('42', '欧式古典欧式古典欧4', '/images/1502353198127.jpg', null, '<p>欧式古典欧式古典欧</p><p>欧式古典欧式古典欧</p>', '5', '0', '0', null, '2017-08-10 16:19:58', '2017-08-10 16:19:58', null);
INSERT INTO `articles` VALUES ('43', '欧式古典欧式古典欧4', '/images/1502353198679.jpg', null, '<p>欧式古典欧式古典欧</p><p>欧式古典欧式古典欧欧式古典欧式古典欧</p><p><img src=\"/Uploads/image/150232947481545225.jpg\" alt=\"150232947481545225.jpg\"/></p>', '5', '0', '0', null, '2017-08-10 16:19:58', '2017-08-10 16:20:13', null);
INSERT INTO `articles` VALUES ('44', '首页服务中心', null, null, null, '1', '0', '0', null, '2017-08-10 16:31:01', '2017-08-10 16:31:01', null);
INSERT INTO `articles` VALUES ('45', '品牌保障', null, '真爱筑家18年致力客户满意建材', null, '44', '0', '0', null, '2017-08-10 16:31:38', '2017-08-10 16:31:38', null);
INSERT INTO `articles` VALUES ('46', '专业保障', null, '资深设计、材料、安装、客服专业团队', null, '44', '0', '0', null, '2017-08-10 16:31:52', '2017-08-10 16:31:52', null);
INSERT INTO `articles` VALUES ('47', '质量保障', null, '德系工艺、品质保证', null, '44', '0', '0', null, '2017-08-10 16:32:04', '2017-08-10 16:32:04', null);
INSERT INTO `articles` VALUES ('48', '服务保障', null, '专业系统的安装服务及售后保障', null, '44', '0', '0', null, '2017-08-10 16:32:20', '2017-08-10 16:32:20', null);
INSERT INTO `articles` VALUES ('49', '材料保障', null, '厂家直供、公司深度整合，全面捍卫建材品质、品牌', null, '44', '0', '0', null, '2017-08-10 16:32:32', '2017-08-10 16:32:32', null);
INSERT INTO `articles` VALUES ('50', '友情链接', null, null, null, '1', '0', '0', null, '2017-08-10 16:54:00', '2017-08-10 16:54:00', null);
INSERT INTO `articles` VALUES ('51', '百度', null, null, null, '50', '0', '0', 'https://www.baidu.com/', '2017-08-10 16:54:18', '2017-08-10 16:54:18', null);
INSERT INTO `articles` VALUES ('52', '百度', null, null, null, '50', '0', '0', 'https://www.baidu.com/', '2017-08-10 16:54:26', '2017-08-10 16:54:26', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '测试', '15771251202', 'hupp@vip.qq.com', '测试', '127.0.0.1', '2017-08-10 15:26:10', '2017-08-10 15:26:10', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$vZkXYiMc/FYvj0xvpHz5aOWpm9bHxfNE8hTTb6EqBwjIhfsOVhhra', null, null, null, null);
