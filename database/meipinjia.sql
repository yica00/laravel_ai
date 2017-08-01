/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : meipinjia

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-01 17:43:15
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
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2017-07-31 10:27:03', '2017-07-31 11:16:55', null);
INSERT INTO `articles` VALUES ('2', '关于我们', null, null, null, '0', '1', '0', '/about', '2017-07-31 10:27:13', '2017-07-31 11:17:51', null);
INSERT INTO `articles` VALUES ('3', '装修风格', null, null, null, '0', '1', '0', '/case', '2017-07-31 10:27:40', '2017-07-31 11:18:03', null);
INSERT INTO `articles` VALUES ('4', '设计团队', null, null, null, '0', '1', '0', '/team', '2017-07-31 10:27:50', '2017-07-31 11:18:18', null);
INSERT INTO `articles` VALUES ('5', '金牌服务', null, null, null, '0', '1', '0', '/service', '2017-07-31 10:28:01', '2017-07-31 11:18:30', null);
INSERT INTO `articles` VALUES ('6', '优质选材', null, null, null, '0', '1', '0', '/product', '2017-07-31 10:28:14', '2017-07-31 11:18:42', null);
INSERT INTO `articles` VALUES ('7', '新闻中心', null, null, null, '0', '1', '0', '/news', '2017-07-31 10:28:24', '2017-07-31 11:18:52', null);
INSERT INTO `articles` VALUES ('8', '联系我们', null, null, null, '0', '1', '0', '/contact', '2017-07-31 10:28:30', '2017-07-31 11:19:04', null);
INSERT INTO `articles` VALUES ('9', '公司简介', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 \r\n，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '2', '1', '0', null, '2017-07-31 10:32:05', '2017-07-31 10:32:05', null);
INSERT INTO `articles` VALUES ('10', '企业文化', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 \r\n，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '2', '1', '0', null, '2017-07-31 10:32:28', '2017-07-31 10:32:28', null);
INSERT INTO `articles` VALUES ('11', '组织机构', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 \r\n，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '2', '1', '0', null, '2017-07-31 10:32:44', '2017-07-31 10:32:44', null);
INSERT INTO `articles` VALUES ('12', '总经理致辞', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 \r\n，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '2', '1', '0', null, '2017-07-31 10:33:51', '2017-07-31 10:33:51', null);
INSERT INTO `articles` VALUES ('13', '核心竞争力', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 \r\n，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '2', '1', '0', null, '2017-07-31 10:34:08', '2017-07-31 10:34:08', null);
INSERT INTO `articles` VALUES ('14', 'VR实景装修效果图', null, null, null, '3', '1', '0', 'https://yun.kujiale.com/design/3FO4IH45QOMK/show?fromqrcode=true', '2017-07-31 15:21:28', '2017-07-31 15:21:28', null);
INSERT INTO `articles` VALUES ('15', '经典案例', null, null, null, '3', '1', '0', '/case', '2017-07-31 15:22:13', '2017-07-31 15:22:13', null);
INSERT INTO `articles` VALUES ('16', '现代', null, null, null, '15', '0', '30', null, '2017-07-31 17:17:19', '2017-07-31 17:43:16', null);
INSERT INTO `articles` VALUES ('17', '田园', null, null, null, '15', '0', '25', null, '2017-07-31 17:17:30', '2017-07-31 17:43:27', null);
INSERT INTO `articles` VALUES ('18', '简约', null, null, null, '15', '0', '20', null, '2017-07-31 17:17:35', '2017-07-31 17:43:33', null);
INSERT INTO `articles` VALUES ('19', '欧式', null, null, null, '15', '0', '15', null, '2017-07-31 17:18:01', '2017-07-31 17:43:40', null);
INSERT INTO `articles` VALUES ('20', '其他', null, null, null, '15', '0', '10', null, '2017-07-31 17:18:04', '2017-07-31 17:43:46', null);
INSERT INTO `articles` VALUES ('21', '时尚雅致三居室时尚雅致三居室时尚雅致三居室', '/images/1501492916985.jpg', '风格特点新古典主义的设计风格是经过改良的古典主义风格。欧洲文化丰富的艺术底蕴，开放、创新的设计思想……家居特征所有的家具式样精炼、简朴，雅致；作工讲究，装饰文雅。曲线少，平直表面多，显得更加轻盈优美。配饰特征以雕刻，镀金，嵌木，镶嵌陶瓷及金属等装饰方法为主，装饰题材有玫瑰、水果、叶形、火炬……', '<p><img src=\"/Uploads/image/150149284482087426.jpg\"/></p><p><img src=\"/Uploads/image/150149284413786952.jpg\"/></p><p><img src=\"/Uploads/image/150149284410823783.jpg\"/></p><p><img src=\"/Uploads/image/150149284410739441.jpg\"/></p><p><br/></p>', '16', '0', '0', null, '2017-07-31 17:21:56', '2017-07-31 17:21:56', null);
INSERT INTO `articles` VALUES ('22', '金玉丽都雅致三居室', '/images/1501492994202.jpg', '风格特点新古典主义的设计风格是经过改良的古典主义风格。欧洲文化丰富的艺术底蕴，开放、创新的设计思想……家居特征所有的家具式样精炼、简朴，雅致；作工讲究，装饰文雅。曲线少，平直表面多，显得更加轻盈优美。配饰特征以雕刻，镀金，嵌木，镶嵌陶瓷及金属等装饰方法为主，装饰题材有玫瑰、水果、叶形、火炬……', '<p><img src=\"/Uploads/image/150149284482087426.jpg\"/></p><p><img src=\"/Uploads/image/150149284413786952.jpg\"/></p><p><img src=\"/Uploads/image/150149284410823783.jpg\"/></p><p><img src=\"/Uploads/image/150149284410739441.jpg\"/></p><p><br/></p>', '16', '0', '0', null, '2017-07-31 17:23:14', '2017-07-31 17:23:14', null);
INSERT INTO `articles` VALUES ('23', '蓝光二居室', '/images/1501493046583.jpg', '风格特点新古典主义的设计风格是经过改良的古典主义风格。欧洲文化丰富的艺术底蕴，开放、创新的设计思想……家居特征所有的家具式样精炼、简朴，雅致；作工讲究，装饰文雅。曲线少……', '<p><img src=\"/Uploads/image/150149284482087426.jpg\"/></p><p><img src=\"/Uploads/image/150149284413786952.jpg\"/></p><p><img src=\"/Uploads/image/150149284410823783.jpg\"/></p><p><br/></p>', '17', '0', '0', null, '2017-07-31 17:24:06', '2017-07-31 17:24:06', null);
INSERT INTO `articles` VALUES ('24', '不限', null, null, null, '15', '0', '100', null, '2017-07-31 17:45:19', '2017-07-31 17:45:42', null);
INSERT INTO `articles` VALUES ('25', '一站式服务', null, null, '<p style=\"color: red; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 ，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '5', '1', '0', null, '2017-08-01 09:17:15', '2017-08-01 09:17:15', null);
INSERT INTO `articles` VALUES ('26', '服务流程', null, null, '<p style=\"color: red; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 ，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '5', '1', '0', null, '2017-08-01 09:17:35', '2017-08-01 09:17:35', null);
INSERT INTO `articles` VALUES ('27', '售后服务', null, null, '<p style=\"color: red; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p>南充美品佳装饰工程有限公司（以下简称“美品佳”）成立于2017年3月2日，位于南充市顺庆区潆华工业园区博雅豪庭3幢-102铺 ，占地200平方米，注册资金100万人民币。主要经营室内外装饰、装修、设计、施工；销售：建筑材料、装饰材料、家具家电、五金配件、木塑材料、灯饰；建筑劳务分包等。本着“倡导家居生活、宣扬价值空间”的设计理念，凭借时尚的精品设计、合理的预算报价、统一的施工管理、优质的施工质量，完善的售后服务，真诚的为每一位顾客量身打造温馨、优雅、环保、舒适的家居空间。</p><p><br/></p>', '5', '1', '0', null, '2017-08-01 09:17:51', '2017-08-01 09:17:51', null);
INSERT INTO `articles` VALUES ('28', '客户见证', null, null, null, '5', '1', '0', '/witness', '2017-08-01 09:18:34', '2017-08-01 09:18:34', null);
INSERT INTO `articles` VALUES ('29', '金牌小区客户见证', '/images/1501552928955.jpg', '风格特点新古典主义的设计风格是经过改良的古典主义风格。欧洲文化丰富的艺术底蕴，开放、创新的设计思想……家居特征所有的家具式样精炼、简朴，雅致；作工讲究，装饰文雅。曲线少，平直表面多，显得更加轻盈优美。配饰特征以雕刻，镀金，嵌木，镶嵌陶瓷及金属等装饰方法为主，装饰题材有玫瑰、水果、叶形、火炬……', '<p><img src=\"/Uploads/image/150149284482087426.jpg\"/></p><p><img src=\"/Uploads/image/150149284413786952.jpg\"/></p><p><img src=\"/Uploads/image/150149284410823783.jpg\"/></p><p><img src=\"/Uploads/image/150149284410739441.jpg\"/></p><p><br/></p>', '28', '0', '0', null, '2017-08-01 10:02:08', '2017-08-01 10:02:08', null);
INSERT INTO `articles` VALUES ('30', '金牌小区客户见证2', '/images/1501552962486.jpg', '风格特点新古典主义的设计风格是经过改良的古典主义风格。欧洲文化丰富的艺术底蕴，开放、创新的设计思想……家居特征所有的家具式样精炼、简朴，雅致；作工讲究，装饰文雅。曲线少，平直表面多，显得更加轻盈优美。配饰特征以雕刻，镀金，嵌木，镶嵌陶瓷及金属等装饰方法为主，装饰题材有玫瑰、水果、叶形、火炬……', '<p><img src=\"/Uploads/image/150149284482087426.jpg\"/></p><p><img src=\"/Uploads/image/150149284413786952.jpg\"/></p><p><img src=\"/Uploads/image/150149284410823783.jpg\"/></p><p><img src=\"/Uploads/image/150149284410739441.jpg\"/></p><p><br/></p>', '28', '0', '0', null, '2017-08-01 10:02:42', '2017-08-01 10:02:42', null);
INSERT INTO `articles` VALUES ('31', '沙发', '/images/1501554424643.jpg', '品号：UPH-SOFWOO-23A,\r\n主材：桦木,\r\n简介：当色彩专家Leatrice Eiseman坐在这款无与伦比的沙发上时，她认为它散发着超凡的艺术的气息，同时这也是她所钟爱的色调之一。The cat\'s meow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。', '<p><img src=\"/Uploads/image/150149284482087426.jpg\"/></p><p><img src=\"/Uploads/image/150149284413786952.jpg\"/></p><p><img src=\"/Uploads/image/150149284410823783.jpg\"/></p><p><img src=\"/Uploads/image/150149284410739441.jpg\"/></p><p><br/></p>', '6', '0', '0', 'Caracole', '2017-08-01 10:27:04', '2017-08-01 10:27:04', null);
INSERT INTO `articles` VALUES ('32', '瓷砖', '/images/1501554597224.jpg', '品号：UPH-SOFWOO-23A,\r\n主材：桦木,\r\n简介：当色彩专家Leatrice Eiseman坐在这款无与伦比的沙发上时，她认为它散发着超凡的艺术的气息，同时这也是她所钟爱的色调之一。The cat\'s meow三人沙发的纹理和颜色流露着自然的气息，而沙发的外形线条跳出常规，新颖别致。这款沙发不建议靠墙摆放，因为沙发背部线条同样有着极强的吸引力。', '<p><img src=\"/Uploads/image/150149284482087426.jpg\"/></p><p><img src=\"/Uploads/image/150149284413786952.jpg\"/></p><p><img src=\"/Uploads/image/150149284410823783.jpg\"/></p><p><img src=\"/Uploads/image/150149284410739441.jpg\"/></p><p><br/></p>', '6', '0', '0', '马可波罗', '2017-08-01 10:29:57', '2017-08-01 10:29:57', null);
INSERT INTO `articles` VALUES ('33', '公司新闻', null, null, null, '7', '1', '0', null, '2017-08-01 10:40:11', '2017-08-01 10:40:11', null);
INSERT INTO `articles` VALUES ('34', '行业新闻', null, null, null, '7', '1', '0', null, '2017-08-01 10:40:18', '2017-08-01 10:40:18', null);
INSERT INTO `articles` VALUES ('35', '媒体资讯', null, null, null, '7', '1', '0', null, '2017-08-01 10:40:25', '2017-08-01 10:40:25', null);
INSERT INTO `articles` VALUES ('36', '联系方式', null, null, null, '8', '1', '0', '/contact', '2017-08-01 10:41:43', '2017-08-01 10:41:43', null);
INSERT INTO `articles` VALUES ('37', '在线留言', null, null, null, '8', '1', '0', '/contact/message', '2017-08-01 10:42:17', '2017-08-01 10:42:17', null);
INSERT INTO `articles` VALUES ('38', '家庭装修报价你需要看些什么?', '/images/1501555963126.jpg', '在日常的家居装修中，或者是正在准备打算装修的业主朋友来说，家装装修报价', '<p>&nbsp;<img src=\"/Uploads/image/150149284413786952.jpg\" alt=\"150149284413786952.jpg\"/></p><p>在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '33', '0', '0', null, '2017-08-01 10:52:43', '2017-08-01 10:52:43', null);
INSERT INTO `articles` VALUES ('39', '现代农业示范园为民增收', '/images/1501556029671.jpg', '在日常的家居装修中，或者是正在准备打算装修的业主朋友来说，家装装修报价', '<p>&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。<img src=\"/Uploads/image/150149284410739441.jpg\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '33', '0', '0', null, '2017-08-01 10:53:49', '2017-08-01 10:53:49', null);
INSERT INTO `articles` VALUES ('40', '现代农业示范园为民增收', '/images/1501556077415.jpg', '在日常的家居装修中，或者是正在准备打算装修的业主朋友来说，家装装修报价', '<p>在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><img src=\"/Uploads/image/150149284410739441.jpg\" alt=\"150149284410739441.jpg\"/></p>', '34', '0', '0', null, '2017-08-01 10:54:37', '2017-08-01 10:54:37', null);
INSERT INTO `articles` VALUES ('41', '首页轮播图', null, null, null, '1', '0', '0', null, '2017-08-01 12:00:20', '2017-08-01 12:00:20', null);
INSERT INTO `articles` VALUES ('42', '友情链接', null, null, null, '1', '0', '0', null, '2017-08-01 12:00:51', '2017-08-01 12:00:51', null);
INSERT INTO `articles` VALUES ('43', '轮播图1', '/images/1501569057634.jpg', null, null, '41', '0', '0', null, '2017-08-01 14:30:57', '2017-08-01 14:30:57', null);
INSERT INTO `articles` VALUES ('44', '轮播图2', '/images/1501569063154.jpg', null, null, '41', '0', '0', null, '2017-08-01 14:31:03', '2017-08-01 14:31:03', null);
INSERT INTO `articles` VALUES ('45', '轮播图3', '/images/1501569068281.jpg', null, null, '41', '0', '0', null, '2017-08-01 14:31:08', '2017-08-01 14:31:08', null);

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
  `address` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `badget` decimal(8,2) DEFAULT NULL,
  `category` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '王小强', '15882323011', '花絮路1102', '100', '3.00', '跃层装修设计', 'yaoqiu', '2017-08-01 11:39:02', '2017-08-01 11:39:02', null);
INSERT INTO `messages` VALUES ('2', 'zhang', '158265656', null, '100', null, null, null, '2017-08-01 17:39:02', '2017-08-01 17:39:02', null);
INSERT INTO `messages` VALUES ('3', '张三', '1548752455', '金玉丽都', '150', null, null, null, '2017-08-01 17:40:04', '2017-08-01 17:40:04', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_06_26_154310_create_teams_table', '2');
INSERT INTO `migrations` VALUES ('9', '2017_06_28_144157_create_messages_table', '3');
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
  `work_age` int(11) DEFAULT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_at` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_concept` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '王小飞', '6', '首席设计师', '四川大学', '现代简约 中式 欧式 美式 地中海', '设计源于生活、细节成就品质', '/images/1501497996783.jpg', '保利狮子湖、蓝润锦江春天、中铁城 锦南汇、金茂悦龙山、保利叶语、置信国色天乡鹭湖宫8区、万科魅力广场、保利城、我的巷子、恒大帝景、卓锦城六期紫郡、西班牙森林、中铁塔米亚、保利百合花园、益州国际广场、西锦国际广场、万泉阳光华庭、驷马康城、邻居、合能珍宝琥珀、领都、铂雅苑、莱茵北郡、和信孔雀城', '23,22', '2017-07-31 18:46:36', '2017-08-01 09:08:15', null);
INSERT INTO `teams` VALUES ('2', '郭美美', '5', '设计师', '北京大学', '现代简约 中式 欧式 美式 地中海', '设计源于生活、细节成就品质', '/images/1501498085936.jpg', '保利狮子湖、蓝润锦江春天、中铁城 锦南汇、金茂悦龙山、保利叶语、置信国色天乡鹭湖宫8区、万科魅力广场、保利城、我的巷子、恒大帝景、卓锦城六期紫郡、西班牙森林、中铁塔米亚、保利百合花园、益州国际广场、西锦国际广场、万泉阳光华庭、驷马康城、邻居、合能珍宝琥珀、领都、铂雅苑、莱茵北郡、和信孔雀城。', '22,21', '2017-07-31 18:48:05', '2017-08-01 09:08:05', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$Tgs1aGtv8PrPxOAI12cR6OUzsZzAD6zNU9n/xLrcsqXYSdvhEsAaC', null, null, null, null);
