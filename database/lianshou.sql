/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : lianshou

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-06-30 17:46:38
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
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '首页缩略图', null, null, '0', '1', '0', null, '2017-06-30 09:17:03', '2017-06-30 09:17:03', null);
INSERT INTO `articles` VALUES ('2', '网站首页', null, null, '0', '1', '0', null, '2017-06-30 09:17:51', '2017-06-30 09:17:51', null);
INSERT INTO `articles` VALUES ('3', '关于联手', null, null, '0', '1', '0', '/about', '2017-06-30 09:18:20', '2017-06-30 09:18:20', null);
INSERT INTO `articles` VALUES ('4', '产品中心', null, null, '0', '1', '0', '/product', '2017-06-30 09:18:47', '2017-06-30 09:18:47', null);
INSERT INTO `articles` VALUES ('5', '案例中心', null, null, '0', '1', '0', '/case', '2017-06-30 09:19:14', '2017-06-30 09:19:14', null);
INSERT INTO `articles` VALUES ('6', '新闻中心', null, null, '0', '1', '0', '/news', '2017-06-30 09:19:34', '2017-06-30 09:19:34', null);
INSERT INTO `articles` VALUES ('7', '服务中心', null, null, '0', '1', '0', '/service', '2017-06-30 09:19:57', '2017-06-30 09:19:57', null);
INSERT INTO `articles` VALUES ('8', '招贤纳士', '/images/1498809823158.png', null, '0', '1', '0', '/recruit', '2017-06-30 09:20:35', '2017-06-30 16:03:43', null);
INSERT INTO `articles` VALUES ('9', '联系我们', null, null, '0', '1', '0', '/contact', '2017-06-30 09:20:54', '2017-06-30 09:20:54', null);
INSERT INTO `articles` VALUES ('10', '　　品牌介绍', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; transition: all 320ms ease-out 0s;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。。。</p><p><span class=\"bk60\" style=\"width: 1302px; overflow: hidden; clear: both; display: block; height: 60px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">&nbsp;</span></p>', '3', '1', '0', '/about', '2017-06-30 09:36:42', '2017-06-30 10:32:43', null);
INSERT INTO `articles` VALUES ('11', '　　企业文化', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; transition: all 320ms ease-out 0s;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><span class=\"bk60\" style=\"width: 1302px; overflow: hidden; clear: both; display: block; height: 60px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">&nbsp;</span></p>', '3', '1', '0', '/culture', '2017-06-30 09:36:56', '2017-06-30 10:33:04', null);
INSERT INTO `articles` VALUES ('12', '　　发展历程', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; transition: all 320ms ease-out 0s;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><span class=\"bk60\" style=\"width: 1302px; overflow: hidden; clear: both; display: block; height: 60px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">&nbsp;</span></p>', '3', '1', '0', '/dev_history', '2017-06-30 09:37:05', '2017-06-30 10:44:40', null);
INSERT INTO `articles` VALUES ('13', '　　组织架构', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; transition: all 320ms ease-out 0s;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><span class=\"bk60\" style=\"width: 1302px; overflow: hidden; clear: both; display: block; height: 60px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">&nbsp;</span></p>', '3', '1', '0', '/organization', '2017-06-30 09:37:13', '2017-06-30 10:44:56', null);
INSERT INTO `articles` VALUES ('14', '　　领导致辞', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; transition: all 320ms ease-out 0s;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px;\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><span class=\"bk60\" style=\"width: 1302px; overflow: hidden; clear: both; display: block; height: 60px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">&nbsp;</span></p>', '3', '1', '0', '/speak', '2017-06-30 09:37:21', '2017-06-30 10:45:12', null);
INSERT INTO `articles` VALUES ('15', '　　风采展示', null, null, '3', '1', '0', '/view', '2017-06-30 09:37:29', '2017-06-30 10:46:26', null);
INSERT INTO `articles` VALUES ('16', '　　沙发', '/images/1498813378757.png', null, '4', '1', '0', null, '2017-06-30 09:38:41', '2017-06-30 17:02:58', null);
INSERT INTO `articles` VALUES ('17', '　　酒柜', '/images/1498813390478.png', null, '4', '1', '0', null, '2017-06-30 09:38:48', '2017-06-30 17:03:10', null);
INSERT INTO `articles` VALUES ('18', '　　衣柜', '/images/1498813402987.png', null, '4', '1', '0', null, '2017-06-30 09:38:56', '2017-06-30 17:03:22', null);
INSERT INTO `articles` VALUES ('19', '　　床', '/images/1498813412897.png', null, '4', '1', '0', null, '2017-06-30 09:39:03', '2017-06-30 17:03:32', null);
INSERT INTO `articles` VALUES ('20', '　　桌椅', '/images/1498813429766.png', null, '4', '1', '0', null, '2017-06-30 09:39:10', '2017-06-30 17:03:49', null);
INSERT INTO `articles` VALUES ('21', '　　鞋柜', '/images/1498813442812.png', null, '4', '1', '0', null, '2017-06-30 09:39:16', '2017-06-30 17:04:02', null);
INSERT INTO `articles` VALUES ('22', '　　橱柜', '/images/1498813462606.png', null, '4', '1', '0', null, '2017-06-30 09:39:23', '2017-06-30 17:04:22', null);
INSERT INTO `articles` VALUES ('23', '　　书柜', '/images/1498813473923.png', null, '4', '1', '0', null, '2017-06-30 09:39:31', '2017-06-30 17:04:33', null);
INSERT INTO `articles` VALUES ('24', '　　茶几', '/images/1498813052836.png', null, '4', '1', '0', null, '2017-06-30 09:39:38', '2017-06-30 16:57:32', null);
INSERT INTO `articles` VALUES ('25', '　　电视柜', null, null, '4', '1', '0', null, '2017-06-30 09:39:45', '2017-06-30 09:39:45', null);
INSERT INTO `articles` VALUES ('26', '　　梳妆台', null, null, '4', '1', '0', null, '2017-06-30 09:39:51', '2017-06-30 09:39:51', null);
INSERT INTO `articles` VALUES ('27', '　　窗帘', null, null, '4', '1', '0', null, '2017-06-30 09:39:57', '2017-06-30 09:39:57', null);
INSERT INTO `articles` VALUES ('28', '　　公司新闻', null, null, '6', '1', '0', '/company_news', '2017-06-30 09:42:27', '2017-06-30 11:03:53', null);
INSERT INTO `articles` VALUES ('29', '　　行业动态', null, null, '6', '1', '0', '/industy_news', '2017-06-30 09:42:36', '2017-06-30 11:04:08', null);
INSERT INTO `articles` VALUES ('30', '　　服务流程', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方</p><p><br/></p>', '7', '1', '0', '/service', '2017-06-30 09:43:07', '2017-06-30 15:46:01', null);
INSERT INTO `articles` VALUES ('31', '　　承诺保障', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">宜宾星维生物科技有限公司于2015年6月15日成立的全资公司，注册资金2000万元，座落于中国酒都、西南半壁古戎州的宜宾市江安县。是一家集新型肥料研究，复合肥生产运营的大型现代化科技企业。公司立志于中国现代农业产业化发展及新型肥料研究，以持续科学改良中国的土壤现状，帮助老百姓增产增收为己任。与西南大学、四川农业科学研究院等多家国内知名科研院校深度合作，成功研发出肥料行业国内领先、国际一流的高科技产品——强化专用肥（专利产品）。该项技术集有机、无机、中微量元素于一体，并根据不同作物的养分需求，专业配方，从而使产品具备了土壤疏松、抗寒耐旱、减少作物土传病害、抗倒伏等功效。按照测土配方，科学施肥的原则，针对不同地区土壤特点，针对作物不同时期的生长特点和营养需求，采用优质原材料和科学配方，研制出高，中，低浓度复合肥，有机肥，控释肥，冲施肥四大系列，总计一百余种产品投放市场。</p><p><br/></p>', '7', '1', '0', '/promise', '2017-06-30 09:43:17', '2017-06-30 15:46:20', null);
INSERT INTO `articles` VALUES ('32', '　　安装现场', null, null, '7', '1', '0', '/scence', '2017-06-30 09:43:26', '2017-06-30 11:28:36', null);
INSERT INTO `articles` VALUES ('33', '　　在线留言', null, null, '9', '1', '0', '/contact', '2017-06-30 09:44:16', '2017-06-30 11:28:59', null);
INSERT INTO `articles` VALUES ('34', '　　联系我们', null, null, '9', '1', '0', '/way', '2017-06-30 09:44:31', '2017-06-30 11:29:11', null);
INSERT INTO `articles` VALUES ('35', '风采展示图1', '/images/1498804247249.jpg', null, '15', '0', '0', null, '2017-06-30 14:30:47', '2017-06-30 14:30:47', null);
INSERT INTO `articles` VALUES ('36', '风采展示图2', '/images/1498804253613.jpg', null, '15', '0', '0', null, '2017-06-30 14:30:53', '2017-06-30 14:30:53', null);
INSERT INTO `articles` VALUES ('37', '风采展示图3', '/images/1498804259961.jpg', null, '15', '0', '0', null, '2017-06-30 14:30:59', '2017-06-30 14:30:59', null);
INSERT INTO `articles` VALUES ('38', '风采展示图4', '/images/1498804274609.jpg', null, '15', '0', '0', null, '2017-06-30 14:31:14', '2017-06-30 14:31:14', null);
INSERT INTO `articles` VALUES ('39', '风采展示图5', '/images/1498804281640.jpg', null, '15', '0', '0', null, '2017-06-30 14:31:21', '2017-06-30 14:31:21', null);
INSERT INTO `articles` VALUES ('40', '时尚雅致 布艺沙发', '/images/1498805018636.jpg', null, '5', '0', '0', '110平米二居室', '2017-06-30 14:43:38', '2017-06-30 14:43:38', null);
INSERT INTO `articles` VALUES ('41', '时尚雅致 布艺沙发', '/images/1498805033111.jpg', null, '5', '0', '0', '110平米二居室', '2017-06-30 14:43:53', '2017-06-30 14:43:53', null);
INSERT INTO `articles` VALUES ('42', '时尚雅致 布艺沙发', '/images/1498805055708.jpg', null, '5', '0', '0', '110平米二居室', '2017-06-30 14:44:15', '2017-06-30 14:44:15', null);
INSERT INTO `articles` VALUES ('43', '时尚雅致 布艺沙发', '/images/1498805069564.jpg', null, '5', '0', '0', '110平米二居室', '2017-06-30 14:44:29', '2017-06-30 14:44:29', null);
INSERT INTO `articles` VALUES ('44', '时尚雅致 布艺沙发', '/images/1498805080704.jpg', null, '5', '0', '0', '110平米二居室', '2017-06-30 14:44:40', '2017-06-30 14:44:40', null);
INSERT INTO `articles` VALUES ('45', '时尚雅致 布艺沙发', '/images/1498805115737.jpg', null, '5', '0', '0', '110平米二居室', '2017-06-30 14:45:15', '2017-06-30 14:45:15', null);
INSERT INTO `articles` VALUES ('46', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1498806342450.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '28', '0', '0', '联手家居', '2017-06-30 15:05:42', '2017-06-30 15:05:42', null);
INSERT INTO `articles` VALUES ('47', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1498806384444.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '28', '0', '0', '联手家居', '2017-06-30 15:06:24', '2017-06-30 15:06:24', null);
INSERT INTO `articles` VALUES ('48', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1498806399915.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; 在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '28', '0', '0', '联手家居', '2017-06-30 15:06:39', '2017-06-30 15:06:39', null);
INSERT INTO `articles` VALUES ('49', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1498806434705.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; 在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '29', '0', '0', '联手家居', '2017-06-30 15:07:14', '2017-06-30 15:07:14', null);
INSERT INTO `articles` VALUES ('50', '保利东滨', '/images/1498809185270.jpg', null, '32', '0', '0', '地址：青华路153号', '2017-06-30 15:53:05', '2017-06-30 15:53:05', null);
INSERT INTO `articles` VALUES ('51', '保利东滨', '/images/1498809200650.jpg', null, '32', '0', '0', '地址：青华路153号', '2017-06-30 15:53:20', '2017-06-30 15:53:20', null);
INSERT INTO `articles` VALUES ('52', '保利东滨', '/images/1498809210604.jpg', null, '32', '0', '0', '地址：青华路153号', '2017-06-30 15:53:30', '2017-06-30 15:53:30', null);
INSERT INTO `articles` VALUES ('53', '保利东滨', '/images/1498809267155.jpg', null, '32', '0', '0', '地址：青华路153号', '2017-06-30 15:54:27', '2017-06-30 15:54:27', null);
INSERT INTO `articles` VALUES ('54', '保利东滨', '/images/1498809294585.jpg', null, '32', '0', '0', '地址：青华路153号', '2017-06-30 15:54:54', '2017-06-30 15:54:54', null);
INSERT INTO `articles` VALUES ('55', '销售经理', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">待遇：4000-6000元/月+提成+年底双薪+年终奖金</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">要求：年龄18-30岁以下，限女性，身高1.60以上，性格活泼开朗，形象气质佳。</p><p><br/></p>', '8', '0', '0', null, '2017-06-30 16:04:29', '2017-06-30 16:04:29', null);
INSERT INTO `articles` VALUES ('56', '销售经理', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">待遇：4000-6000元/月+提成+年底双薪+年终奖金</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">要求：年龄18-30岁以下，限女性，身高1.60以上，性格活泼开朗，形象气质佳。</p><p><br/></p>', '8', '0', '0', null, '2017-06-30 16:04:38', '2017-06-30 16:04:38', null);
INSERT INTO `articles` VALUES ('57', '销售', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">待遇：4000-6000元/月+提成+年底双薪+年终奖金</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">要求：年龄18-30岁以下，限女性，身高1.60以上，性格活泼开朗，形象气质佳。</p><p><br/></p>', '8', '0', '0', null, '2017-06-30 16:04:44', '2017-06-30 16:04:44', null);
INSERT INTO `articles` VALUES ('58', '销售经理', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">待遇：4000-6000元/月+提成+年底双薪+年终奖金</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">要求：年龄18-30岁以下，限女性，身高1.60以上，性格活泼开朗，形象气质佳。</p><p><br/></p>', '8', '0', '0', null, '2017-06-30 16:04:51', '2017-06-30 16:04:51', null);
INSERT INTO `articles` VALUES ('59', '沙发1', '/images/1498810611351.jpg', null, '16', '0', '0', null, '2017-06-30 16:16:51', '2017-06-30 16:16:51', null);
INSERT INTO `articles` VALUES ('60', '沙发2', '/images/1498810617255.jpg', null, '16', '0', '0', null, '2017-06-30 16:16:57', '2017-06-30 16:16:57', null);
INSERT INTO `articles` VALUES ('61', '沙发3', '/images/1498810623980.jpg', null, '16', '0', '0', null, '2017-06-30 16:17:03', '2017-06-30 16:17:03', null);
INSERT INTO `articles` VALUES ('62', '沙发5', '/images/1498810629599.jpg', null, '16', '0', '0', null, '2017-06-30 16:17:09', '2017-06-30 16:17:09', null);
INSERT INTO `articles` VALUES ('63', '酒柜1', '/images/1498810824430.jpg', null, '17', '0', '0', null, '2017-06-30 16:20:24', '2017-06-30 16:20:24', null);
INSERT INTO `articles` VALUES ('64', '酒柜2', '/images/1498810830257.jpg', null, '17', '0', '0', null, '2017-06-30 16:20:30', '2017-06-30 16:20:30', null);
INSERT INTO `articles` VALUES ('67', '轮播图1', '/images/1498811354188.jpg', null, '1', '0', '0', null, '2017-06-30 16:29:14', '2017-06-30 16:29:14', null);
INSERT INTO `articles` VALUES ('68', '轮播图2', '/images/1498811359404.jpg', null, '1', '0', '0', null, '2017-06-30 16:29:19', '2017-06-30 16:29:19', null);
INSERT INTO `articles` VALUES ('69', '轮播图3', '/images/1498811364629.jpg', null, '1', '0', '0', null, '2017-06-30 16:29:24', '2017-06-30 16:29:24', null);
INSERT INTO `articles` VALUES ('70', '沙发5', '/images/1498814589685.jpg', null, '62', '0', '0', null, '2017-06-30 17:23:09', '2017-06-30 17:23:09', null);
INSERT INTO `articles` VALUES ('71', '沙发6', '/images/1498814658165.jpg', null, '16', '0', '0', null, '2017-06-30 17:24:18', '2017-06-30 17:24:18', null);
INSERT INTO `articles` VALUES ('72', '首页推荐产品', null, null, '0', '1', '0', null, '2017-06-30 17:32:05', '2017-06-30 17:32:05', null);
INSERT INTO `articles` VALUES ('73', '推荐产品1', '/images/1498815282342.jpg', null, '72', '0', '0', '/product/category/16', '2017-06-30 17:34:42', '2017-06-30 17:34:42', null);
INSERT INTO `articles` VALUES ('74', '推荐产品2', '/images/1498815302754.jpg', null, '72', '0', '0', '/product/category/16', '2017-06-30 17:35:02', '2017-06-30 17:35:02', null);
INSERT INTO `articles` VALUES ('75', '推荐产品3', '/images/1498815314786.jpg', null, '72', '0', '0', '/product/category/16', '2017-06-30 17:35:14', '2017-06-30 17:35:14', null);
INSERT INTO `articles` VALUES ('76', '推荐产品4', '/images/1498815326603.jpg', null, '72', '0', '0', '/product/category/16', '2017-06-30 17:35:26', '2017-06-30 17:35:26', null);
INSERT INTO `articles` VALUES ('77', '推荐产品5', '/images/1498815338940.jpg', null, '72', '0', '0', '/product/category/16', '2017-06-30 17:35:38', '2017-06-30 17:35:38', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '测试一下', 'hupp@vip.qq.com', '15771251202', '测试一下测试一下测试一下测试一下测试一下测试一下', '2017-06-30 10:03:00', '2017-06-30 10:03:00', null);
INSERT INTO `messages` VALUES ('2', '测试', 'hupp@vip.qq.com', '152-2812-1788', '的四川成都成都', '2017-06-30 16:06:58', '2017-06-30 16:06:58', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('6', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('7', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('9', '2017_06_26_154310_create_teams_table', '1');
INSERT INTO `migrations` VALUES ('10', '2017_06_28_144157_create_messages_table', '1');

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
  `belong_to` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iterm` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$g4KuesF3zTH4birqvXyE7..lV04J6lnLQLE2ZPctIKL7CtDp78QEO', null, null, null, null);
SET FOREIGN_KEY_CHECKS=1;
