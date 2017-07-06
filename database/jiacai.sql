/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : jiacai

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-06 14:48:29
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
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '首页轮播大图', null, null, '0', '1', '0', null, '2017-07-05 15:08:20', '2017-07-05 15:08:20', null);
INSERT INTO `articles` VALUES ('2', '网站首页', null, null, '0', '1', '0', '/', '2017-07-05 15:08:42', '2017-07-05 15:11:24', null);
INSERT INTO `articles` VALUES ('3', '关于嘉彩', null, null, '0', '1', '0', null, '2017-07-05 15:08:47', '2017-07-05 15:08:47', null);
INSERT INTO `articles` VALUES ('4', '新闻中心', null, null, '0', '1', '0', null, '2017-07-05 15:09:02', '2017-07-05 15:09:02', null);
INSERT INTO `articles` VALUES ('5', '产品中心', null, null, '0', '1', '0', null, '2017-07-05 15:09:08', '2017-07-05 15:09:08', null);
INSERT INTO `articles` VALUES ('6', '成功案例', null, '<p></p><p><img src=\"/Uploads/image/149930396130819361.jpg\" title=\"149930396130819361.jpg\"/></p><p><img src=\"/Uploads/image/149930396154753638.jpg\" title=\"149930396154753638.jpg\"/></p><p><img src=\"/Uploads/image/149930396112782160.jpg\" title=\"149930396112782160.jpg\"/></p><p><img src=\"/Uploads/image/149930396171957744.jpg\" title=\"149930396171957744.jpg\"/></p><p><img src=\"/Uploads/image/149930396113855372.jpg\" title=\"149930396113855372.jpg\"/></p><p><img src=\"/Uploads/image/149930396180090751.jpg\" title=\"149930396180090751.jpg\"/></p><p><br/></p>', '0', '1', '0', null, '2017-07-05 15:09:38', '2017-07-06 09:19:43', null);
INSERT INTO `articles` VALUES ('7', '专业设备', null, null, '0', '1', '0', null, '2017-07-05 15:09:44', '2017-07-05 15:09:44', null);
INSERT INTO `articles` VALUES ('8', '服务中心', null, null, '0', '1', '0', null, '2017-07-05 15:09:59', '2017-07-05 15:09:59', null);
INSERT INTO `articles` VALUES ('9', '联系我们', null, null, '0', '1', '0', null, '2017-07-05 15:10:04', '2017-07-05 15:10:04', null);
INSERT INTO `articles` VALUES ('10', '　　关于嘉彩', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">南充嘉彩包装印刷有限公司是集创意设计、电脑分色、四色彩印、自动裱瓦、烫金、模切、压光、装订等后加工与一体的专业彩色包装印务公司，公司落座于南充市嘉陵区燕京大道工业园，公司已成立20周年是南充市老字号包装印刷企业，拥有众多的客户资源，产品造型多样、外观精致、材质高品。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">南充嘉彩包装印刷有限公司是集创意设计、电脑分色、四色彩印、自动裱瓦、烫金、模切、压光、装订等后加工与一体的专业彩色包装印务公司，公司落座于南充市嘉陵区燕京大道工业园，公司已成立20周年是南充市老字号包装印刷企业，拥有众多的客户资源，产品造型多样、外观精致、材质高品。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">南充嘉彩包装印刷有限公司是集创意设计、电脑分色、四色彩印、自动裱瓦、烫金、模切、压光、装订等后加工与一体的专业彩色包装印务公司，公司落座于南充市嘉陵区燕京大道工业园，公司已成立20周年是南充市老字号包装印刷企业，拥有众多的客户资源，产品造型多样、外观精致、材质高品。</p><p><br/></p>', '3', '1', '0', '/about', '2017-07-05 15:29:05', '2017-07-05 16:07:20', null);
INSERT INTO `articles` VALUES ('11', '　　企业文化', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">南充嘉彩包装印刷有限公司是集创意设计、电脑分色、四色彩印、自动裱瓦、烫金、模切、压光、装订等后加工与一体的专业彩色包装印务公司，公司落座于南充市嘉陵区燕京大道工业园，公司已成立20周年是南充市老字号包装印刷企业，拥有众多的客户资源，产品造型多样、外观精致、材质高品。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">南充嘉彩包装印刷有限公司是集创意设计、电脑分色、四色彩印、自动裱瓦、烫金、模切、压光、装订等后加工与一体的专业彩色包装印务公司，公司落座于南充市嘉陵区燕京大道工业园，公司已成立20周年是南充市老字号包装印刷企业，拥有众多的客户资源，产品造型多样、外观精致、材质高品。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">南充嘉彩包装印刷有限公司是集创意设计、电脑分色、四色彩印、自动裱瓦、烫金、模切、压光、装订等后加工与一体的专业彩色包装印务公司，公司落座于南充市嘉陵区燕京大道工业园，公司已成立20周年是南充市老字号包装印刷企业，拥有众多的客户资源，产品造型多样、外观精致、材质高品。</p><p><br/></p>', '3', '1', '0', '/culture', '2017-07-05 15:29:43', '2017-07-05 16:07:25', null);
INSERT INTO `articles` VALUES ('12', '　　办公环境', null, null, '3', '1', '0', '/office', '2017-07-05 15:30:12', '2017-07-05 15:30:12', null);
INSERT INTO `articles` VALUES ('13', '　　荣誉资质', null, null, '3', '1', '0', '/honor', '2017-07-05 15:30:48', '2017-07-05 15:30:48', null);
INSERT INTO `articles` VALUES ('14', '　　公司新闻', null, null, '4', '1', '0', '/news', '2017-07-05 15:31:27', '2017-07-05 15:31:27', null);
INSERT INTO `articles` VALUES ('15', '　　行业资讯', null, null, '4', '1', '0', '/industry_news', '2017-07-05 15:31:52', '2017-07-05 15:31:52', null);
INSERT INTO `articles` VALUES ('16', '　　包装盒系列', null, '<p><img src=\"/Uploads/image/149924622558222000.jpg\" title=\"149924622558222000.jpg\"/></p><p><img src=\"/Uploads/image/149924622556134958.jpg\" title=\"149924622556134958.jpg\"/></p><p><img src=\"/Uploads/image/149924622510463177.jpg\" title=\"149924622510463177.jpg\"/></p><p><img src=\"/Uploads/image/149924622510400781.jpg\" title=\"149924622510400781.jpg\"/></p><p><img src=\"/Uploads/image/149924622512320429.jpg\" title=\"149924622512320429.jpg\"/></p><p><img src=\"/Uploads/image/149924622583365469.jpg\" title=\"149924622583365469.jpg\"/></p><p><br/></p>', '5', '1', '0', null, '2017-07-05 15:33:12', '2017-07-05 17:18:34', null);
INSERT INTO `articles` VALUES ('17', '　　手提袋系列', null, null, '5', '1', '0', null, '2017-07-05 15:33:25', '2017-07-05 15:33:25', null);
INSERT INTO `articles` VALUES ('18', '　　礼盒系列', null, null, '5', '1', '0', null, '2017-07-05 15:33:38', '2017-07-05 15:33:38', null);
INSERT INTO `articles` VALUES ('19', '　　包装箱系列', null, null, '5', '1', '0', null, '2017-07-05 15:33:56', '2017-07-05 15:33:56', null);
INSERT INTO `articles` VALUES ('20', '　　食品盒系列', null, null, '5', '1', '0', null, '2017-07-05 15:34:11', '2017-07-05 15:34:11', null);
INSERT INTO `articles` VALUES ('21', '　　茶叶盒系列', null, null, '5', '1', '0', null, '2017-07-05 15:34:25', '2017-07-05 15:34:25', null);
INSERT INTO `articles` VALUES ('22', '　　台历、挂历', null, null, '5', '1', '0', null, '2017-07-05 15:34:38', '2017-07-05 15:34:38', null);
INSERT INTO `articles` VALUES ('23', '　　画册、DM单', null, null, '5', '1', '0', null, '2017-07-05 15:34:50', '2017-07-05 15:34:50', null);
INSERT INTO `articles` VALUES ('24', '　　其他类', null, null, '5', '1', '0', null, '2017-07-05 15:35:02', '2017-07-05 15:35:02', null);
INSERT INTO `articles` VALUES ('25', '　　服务优势', null, '<p>此页面已经设计好，不做修改</p>', '8', '1', '0', '/service', '2017-07-05 15:36:05', '2017-07-06 14:46:30', null);
INSERT INTO `articles` VALUES ('26', '　　合作伙伴', null, null, '8', '1', '0', '/partner', '2017-07-05 15:36:24', '2017-07-05 15:36:24', null);
INSERT INTO `articles` VALUES ('27', '　　在线留言', null, null, '9', '1', '0', '/contact', '2017-07-05 15:37:12', '2017-07-05 15:37:12', null);
INSERT INTO `articles` VALUES ('28', '　　联系方式', null, null, '9', '1', '0', '/way', '2017-07-05 15:37:26', '2017-07-05 15:37:26', null);
INSERT INTO `articles` VALUES ('29', '办公图片1', '/images/1499242119606.jpg', null, '12', '0', '0', null, '2017-07-05 16:08:39', '2017-07-05 16:08:39', null);
INSERT INTO `articles` VALUES ('30', '办公图片2', '/images/1499242125314.jpg', null, '12', '0', '0', null, '2017-07-05 16:08:45', '2017-07-05 16:08:45', null);
INSERT INTO `articles` VALUES ('31', '荣誉图片1', '/images/1499242169468.jpg', null, '13', '0', '0', null, '2017-07-05 16:09:29', '2017-07-05 16:09:29', null);
INSERT INTO `articles` VALUES ('32', '荣誉图片2', '/images/1499242178326.jpg', null, '13', '0', '0', null, '2017-07-05 16:09:38', '2017-07-05 16:09:38', null);
INSERT INTO `articles` VALUES ('33', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1499243122598.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '14', '0', '0', null, '2017-07-05 16:25:22', '2017-07-05 16:25:22', null);
INSERT INTO `articles` VALUES ('34', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1499243141948.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '14', '0', '0', null, '2017-07-05 16:25:41', '2017-07-05 16:25:41', null);
INSERT INTO `articles` VALUES ('35', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1499243180829.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '15', '0', '0', null, '2017-07-05 16:26:20', '2017-07-05 16:26:20', null);
INSERT INTO `articles` VALUES ('36', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1499243202347.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '15', '0', '0', null, '2017-07-05 16:26:42', '2017-07-05 16:26:42', null);
INSERT INTO `articles` VALUES ('37', '包装盒1', '/images/1499245028512.jpg', null, '16', '0', '0', null, '2017-07-05 16:57:08', '2017-07-05 17:15:06', '2017-07-05 17:15:06');
INSERT INTO `articles` VALUES ('38', '包装盒2', '/images/1499245041211.jpg', null, '16', '0', '0', null, '2017-07-05 16:57:21', '2017-07-05 17:15:05', '2017-07-05 17:15:05');
INSERT INTO `articles` VALUES ('39', '包装盒3', '/images/1499245054575.jpg', null, '16', '0', '0', null, '2017-07-05 16:57:34', '2017-07-05 17:15:04', '2017-07-05 17:15:04');
INSERT INTO `articles` VALUES ('40', '裱瓦机', '/images/1499304513654.jpg', null, '7', '0', '0', null, '2017-07-06 09:28:33', '2017-07-06 09:28:33', null);
INSERT INTO `articles` VALUES ('41', '裱瓦机', '/images/1499304519107.jpg', null, '7', '0', '0', null, '2017-07-06 09:28:39', '2017-07-06 09:28:39', null);
INSERT INTO `articles` VALUES ('42', '裱瓦机', '/images/1499304525154.jpg', null, '7', '0', '0', null, '2017-07-06 09:28:45', '2017-07-06 09:28:45', null);
INSERT INTO `articles` VALUES ('43', '裱瓦机', '/images/1499304530110.jpg', null, '7', '0', '0', null, '2017-07-06 09:28:50', '2017-07-06 09:28:50', null);
INSERT INTO `articles` VALUES ('44', '达芙妮', '/images/1499305314865.jpg', null, '26', '0', '0', null, '2017-07-06 09:41:54', '2017-07-06 09:41:54', null);
INSERT INTO `articles` VALUES ('45', '达芙妮', '/images/1499305323194.jpg', null, '26', '0', '0', null, '2017-07-06 09:42:03', '2017-07-06 09:42:03', null);
INSERT INTO `articles` VALUES ('46', '达芙妮', '/images/1499305330859.jpg', null, '26', '0', '0', null, '2017-07-06 09:42:10', '2017-07-06 09:42:10', null);
INSERT INTO `articles` VALUES ('47', '达芙妮', '/images/1499305336582.jpg', null, '26', '0', '0', null, '2017-07-06 09:42:16', '2017-07-06 09:42:16', null);
INSERT INTO `articles` VALUES ('48', '友情链接', null, null, '0', '1', '0', null, '2017-07-06 10:45:46', '2017-07-06 10:45:46', null);
INSERT INTO `articles` VALUES ('49', '百度', null, null, '48', '0', '0', 'https://www.baidu.com', '2017-07-06 10:46:16', '2017-07-06 10:46:16', null);
INSERT INTO `articles` VALUES ('50', '百度', null, null, '48', '0', '0', 'https://www.baidu.com', '2017-07-06 10:46:20', '2017-07-06 10:46:20', null);
INSERT INTO `articles` VALUES ('51', '百度', null, null, '48', '0', '0', 'https://www.baidu.com', '2017-07-06 10:46:27', '2017-07-06 10:46:27', null);
INSERT INTO `articles` VALUES ('52', '轮播图1', '/images/1499309879230.jpg', null, '1', '0', '0', null, '2017-07-06 10:57:59', '2017-07-06 10:57:59', null);
INSERT INTO `articles` VALUES ('53', '轮播图2', '/images/1499309885129.jpg', null, '1', '0', '0', null, '2017-07-06 10:58:05', '2017-07-06 10:58:05', null);
INSERT INTO `articles` VALUES ('54', '轮播图3', '/images/1499309890101.jpg', null, '1', '0', '0', null, '2017-07-06 10:58:10', '2017-07-06 10:58:10', null);
INSERT INTO `articles` VALUES ('55', '首页推荐产品', null, null, '0', '1', '0', null, '2017-07-06 11:50:29', '2017-07-06 11:50:29', null);
INSERT INTO `articles` VALUES ('56', '推荐产品1', '/images/1499313061733.jpg', null, '55', '0', '0', '/product', '2017-07-06 11:51:01', '2017-07-06 11:51:01', null);
INSERT INTO `articles` VALUES ('57', '推荐产品2', '/images/1499313074864.jpg', null, '55', '0', '0', '/product', '2017-07-06 11:51:14', '2017-07-06 11:51:14', null);
INSERT INTO `articles` VALUES ('58', '推荐产品3', '/images/1499313445909.jpg', null, '55', '0', '0', '/product', '2017-07-06 11:51:26', '2017-07-06 11:57:25', null);
INSERT INTO `articles` VALUES ('59', '推荐产品4', '/images/1499313097117.jpg', null, '55', '0', '0', '/product', '2017-07-06 11:51:37', '2017-07-06 11:51:37', null);
INSERT INTO `articles` VALUES ('60', '推荐产品5', '/images/1499313108732.jpg', null, '55', '0', '0', '/product', '2017-07-06 11:51:48', '2017-07-06 11:51:48', null);
INSERT INTO `articles` VALUES ('61', '推荐产品6', '/images/1499313120932.jpg', null, '55', '0', '0', '/product', '2017-07-06 11:52:00', '2017-07-06 11:52:00', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '测试一下', 'hupp@vip.qq.com', '15771251202', '测试一下测试一下测试一下测试一下', '2017-07-06 09:55:54', '2017-07-06 09:55:54', null);

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
INSERT INTO `migrations` VALUES ('7', '2017_06_28_144157_create_messages_table', '2');
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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$2HEb1PkwVHJbdOkIQrCWQeB9AwcM36pwlNpBV.4UrvTZazs6jOZIW', null, null, null, null);
