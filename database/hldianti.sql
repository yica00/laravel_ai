/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : hldianti

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-18 17:24:28
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
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, '0', '1', '0', null, '2017-07-17 17:37:16', '2017-07-17 17:37:16', null);
INSERT INTO `articles` VALUES ('2', '关于我们', null, '<p>四川虹霖西奥电梯有限公司成立于2000年6月，注册资本508万元，法人代表蒲虹霖。营业执照办公地址位于南充市顺庆区北湖路99号罗曼威森大厦308室，公司现有员工80余人，其中取得资质的安装/维保技术人员有42人。2013年初，经四川省质量技术监督局审核，取得了中华人民共和国特种设备（电梯）安装改造维修许可证（安装维修编号：TS3351080-2021）。具有电梯、自动扶梯、自动人行道安装、维修A级资质。公司组织机构健全，技术力量雄厚，管理规范严谨，销售和安装、改造、维修业绩突出，在川东北地区专业电梯销售、安装、改造及维修公司中名列前茅。</p>', '0', '1', '0', null, '2017-07-17 17:37:31', '2017-07-18 16:30:12', null);
INSERT INTO `articles` VALUES ('3', '新闻中心', null, null, '0', '1', '0', null, '2017-07-17 17:37:44', '2017-07-17 17:37:44', null);
INSERT INTO `articles` VALUES ('4', '电梯展示', null, null, '0', '1', '0', null, '2017-07-17 17:37:54', '2017-07-17 17:37:54', null);
INSERT INTO `articles` VALUES ('5', '配件库房', null, null, '0', '1', '0', null, '2017-07-17 17:38:11', '2017-07-17 17:38:11', null);
INSERT INTO `articles` VALUES ('6', '工程案例', null, null, '0', '1', '0', null, '2017-07-17 17:38:25', '2017-07-17 17:38:25', null);
INSERT INTO `articles` VALUES ('7', '合作品牌', null, null, '0', '1', '0', null, '2017-07-17 17:38:37', '2017-07-17 17:38:37', null);
INSERT INTO `articles` VALUES ('8', '服务中心', null, null, '0', '1', '0', null, '2017-07-17 17:38:53', '2017-07-17 17:38:53', null);
INSERT INTO `articles` VALUES ('9', '联系我们', null, null, '0', '1', '0', null, '2017-07-17 17:38:59', '2017-07-17 17:38:59', null);
INSERT INTO `articles` VALUES ('10', '　　公司简介', null, '<p style=\"color: red; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p>四川虹霖西奥电梯有限公司成立于2000年6月，注册资本508万元，法人代表蒲虹霖。营业执照办公地址位于南充市顺庆区北湖路99号罗曼威森大厦308室，公司现有员工80余人，其中取得资质的安装/维保技术人员有42人。2013年初，经四川省质量技术监督局审核，取得了中华人民共和国特种设备（电梯）安装改造维修许可证（安装维修编号：TS3351080-2021）。具有电梯、自动扶梯、自动人行道安装、维修A级资质。公司组织机构健全，技术力量雄厚，管理规范严谨，销售和安装、改造、维修业绩突出，在川东北地区专业电梯销售、安装、改造及维修公司中名列前茅。</p><p><br/></p>', '2', '1', '0', '/about', '2017-07-17 17:40:13', '2017-07-17 18:28:52', null);
INSERT INTO `articles` VALUES ('11', '　　企业文化', null, '<p style=\"white-space: normal; color: red; font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p style=\"white-space: normal;\"><br/></p><p style=\"white-space: normal;\">四川虹霖西奥电梯有限公司成立于2000年6月，注册资本508万元，法人代表蒲虹霖。营业执照办公地址位于南充市顺庆区北湖路99号罗曼威森大厦308室，公司现有员工80余人，其中取得资质的安装/维保技术人员有42人。2013年初，经四川省质量技术监督局审核，取得了中华人民共和国特种设备（电梯）安装改造维修许可证（安装维修编号：TS3351080-2021）。具有电梯、自动扶梯、自动人行道安装、维修A级资质。公司组织机构健全，技术力量雄厚，管理规范严谨，销售和安装、改造、维修业绩突出，在川东北地区专业电梯销售、安装、改造及维修公司中名列前茅。</p><p><br/></p>', '2', '1', '0', '/culture', '2017-07-17 17:40:47', '2017-07-17 18:29:22', null);
INSERT INTO `articles` VALUES ('12', '　　组织机构', null, '<pre style=\"background-color: rgb(255, 255, 255); font-family: 宋体; font-size: 11.3pt;\"></pre>说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。<br/><br/>四川虹霖西奥电梯有限公司成立于2000年6月，注册资本508万元，法人代表蒲虹霖。营业执照办公地址位于南充市顺庆区北湖路99号罗曼威森大厦308室，公司现有员工80余人，其中取得资质的安装/维保技术人员有42人。2013年初，经四川省质量技术监督局审核，取得了中华人民共和国特种设备（电梯）安装改造维修许可证（安装维修编号：TS3351080-2021）。具有电梯、自动扶梯、自动人行道安装、维修A级资质。公司组织机构健全，技术力量雄厚，管理规范严谨，销售和安装、改造、维修业绩突出，在川东北地区专业电梯销售、安装、改造及维修公司中名列前茅。<p><br/></p>', '2', '1', '0', '/organization', '2017-07-17 17:41:43', '2017-07-17 18:32:42', null);
INSERT INTO `articles` VALUES ('13', '　　总裁致辞', null, '<p style=\"color: red; font-size: 24px; white-space: normal;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p style=\"white-space: normal;\"><br/></p><p style=\"white-space: normal;\">四川虹霖西奥电梯有限公司成立于2000年6月，注册资本508万元，法人代表蒲虹霖。营业执照办公地址位于南充市顺庆区北湖路99号罗曼威森大厦308室，公司现有员工80余人，其中取得资质的安装/维保技术人员有42人。2013年初，经四川省质量技术监督局审核，取得了中华人民共和国特种设备（电梯）安装改造维修许可证（安装维修编号：TS3351080-2021）。具有电梯、自动扶梯、自动人行道安装、维修A级资质。公司组织机构健全，技术力量雄厚，管理规范严谨，销售和安装、改造、维修业绩突出，在川东北地区专业电梯销售、安装、改造及维修公司中名列前茅。</p><p><br/></p>', '2', '1', '0', '/speech', '2017-07-17 17:44:22', '2017-07-17 18:32:53', null);
INSERT INTO `articles` VALUES ('14', '　　发展历程', null, null, '2', '1', '0', '/history', '2017-07-17 17:45:28', '2017-07-17 17:45:28', null);
INSERT INTO `articles` VALUES ('15', '　　优秀团队', null, null, '2', '1', '0', '/team', '2017-07-17 17:46:22', '2017-07-18 09:02:25', null);
INSERT INTO `articles` VALUES ('16', '　　荣誉资质', null, null, '2', '1', '0', '/honor', '2017-07-17 17:46:48', '2017-07-17 17:46:48', null);
INSERT INTO `articles` VALUES ('17', '　　公司新闻', null, null, '3', '1', '0', '/news', '2017-07-17 17:48:04', '2017-07-17 17:48:04', null);
INSERT INTO `articles` VALUES ('18', '　　行业资讯', null, null, '3', '1', '0', '/industry_news', '2017-07-17 17:48:38', '2017-07-17 17:48:38', null);
INSERT INTO `articles` VALUES ('19', '　　电梯百科', null, null, '3', '1', '0', '/wikipedia', '2017-07-17 17:49:45', '2017-07-17 17:49:45', null);
INSERT INTO `articles` VALUES ('20', '　　载货电梯', '/images/1500366382914.png', null, '4', '1', '0', null, '2017-07-17 17:50:56', '2017-07-18 16:26:22', null);
INSERT INTO `articles` VALUES ('21', '　　乘客电梯', '/images/1500366395758.png', null, '4', '1', '0', null, '2017-07-17 17:51:18', '2017-07-18 16:26:35', null);
INSERT INTO `articles` VALUES ('22', '　　合作品牌', null, null, '7', '1', '0', '/brand', '2017-07-17 17:53:32', '2017-07-17 17:53:32', null);
INSERT INTO `articles` VALUES ('23', '　　业绩清单', null, null, '7', '1', '0', '/sales_list', '2017-07-17 17:54:44', '2017-07-17 17:54:44', null);
INSERT INTO `articles` VALUES ('24', '　　售前服务', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p>', '8', '1', '0', null, '2017-07-17 17:56:59', '2017-07-18 15:45:53', null);
INSERT INTO `articles` VALUES ('25', '　　售中服务', null, null, '8', '1', '0', null, '2017-07-17 17:57:42', '2017-07-17 17:57:42', null);
INSERT INTO `articles` VALUES ('26', '　　售后服务', null, null, '8', '1', '0', null, '2017-07-17 17:57:49', '2017-07-17 17:57:49', null);
INSERT INTO `articles` VALUES ('27', '　　电梯安装', null, null, '8', '1', '0', null, '2017-07-17 17:57:58', '2017-07-17 17:57:58', null);
INSERT INTO `articles` VALUES ('28', '　　电梯维修', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p>', '8', '1', '0', null, '2017-07-17 17:58:05', '2017-07-18 15:46:11', null);
INSERT INTO `articles` VALUES ('29', '　　在线留言', null, null, '9', '1', '0', '/contact', '2017-07-17 17:59:01', '2017-07-17 17:59:01', null);
INSERT INTO `articles` VALUES ('30', '　　联系方式', null, null, '9', '1', '0', '/way', '2017-07-17 17:59:36', '2017-07-17 17:59:36', null);
INSERT INTO `articles` VALUES ('31', '2006年5月', '', '<p><img src=\"/Uploads/image/150028856413628595.jpg\" title=\"150028856413628595.jpg\" alt=\"ser_it_1.jpg\"/></p><p>四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨，坚持遵守法律、法规、持续地进行质量改进和开发、尽心尽职、提供顾客和我们都满意的产品与服务，为社会做贡献的质量方针和明确的质量目标，竭诚让用户满意。四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨，坚持遵守法律、法规、持续地进行质量改进和开发、尽心尽职、提供顾客和我们都满意的产品与服务，为社会做贡献的质量方针和明确的质量目标，竭诚让用户满意。四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨，坚持遵守法律、法规、持续地进行质量改进和开发、尽心尽职、提供顾客和我们都满意的产品与服务，为社会做贡献的质量方针和明确的质量目标，竭诚让用户满意。</p>', '14', '0', '0', null, '2017-07-17 18:47:18', '2017-07-17 18:49:29', null);
INSERT INTO `articles` VALUES ('32', '2006年6月', null, '<p>四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨，坚持遵守法律、法规、持续地进行质量改进和开发、尽心尽职、提供顾客和我们都满意的产品与服务，为社会做贡献的质量方针和明确的质量目标，竭诚让用户满意。四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨，坚持遵守法律、法规、持续地进行质量改进和开发、尽心尽职、提供顾客和我们都满意的产品与服务，为社会做贡献的质量方针和明确的质量目标，竭诚让用户满意。</p>', '14', '0', '0', null, '2017-07-17 18:48:13', '2017-07-17 18:48:13', null);
INSERT INTO `articles` VALUES ('33', '2006年8月', null, '<p>四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨.</p>', '14', '0', '0', null, '2017-07-17 18:48:29', '2017-07-17 18:52:52', null);
INSERT INTO `articles` VALUES ('36', '团队照片2', '/images/1500339875962.jpg', null, '15', '0', '0', null, '2017-07-18 09:04:35', '2017-07-18 09:04:35', null);
INSERT INTO `articles` VALUES ('37', '团队照片3', '/images/1500339881598.jpg', null, '15', '0', '0', null, '2017-07-18 09:04:41', '2017-07-18 09:04:41', null);
INSERT INTO `articles` VALUES ('38', '团队照片4', '/images/1500339888453.jpg', null, '15', '0', '0', null, '2017-07-18 09:04:48', '2017-07-18 09:04:48', null);
INSERT INTO `articles` VALUES ('39', '荣誉资质１', '/images/1500339928702.jpg', null, '16', '0', '0', null, '2017-07-18 09:05:28', '2017-07-18 09:05:28', null);
INSERT INTO `articles` VALUES ('40', '荣誉图片2', '/images/1500339933895.jpg', null, '16', '0', '0', null, '2017-07-18 09:05:33', '2017-07-18 09:06:22', null);
INSERT INTO `articles` VALUES ('41', '荣誉图片3', '/images/1500339957694.jpg', null, '16', '0', '0', null, '2017-07-18 09:05:57', '2017-07-18 09:05:57', null);
INSERT INTO `articles` VALUES ('34', '2006年11月', null, '<p>四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨，坚持遵守法律、法规、持续地进行质量改进和开发、尽心尽职、提供顾客和我们都满意的产品与服务，为社会做贡献的质量方针和明确的质量目标，竭诚让用户满意。四川虹霖西奥电梯有限公司一直秉承“全心全意为用户服务”的企业宗旨，坚持遵守法律、法规、持续地进行质量改进和开发、尽心尽职、提供顾客和我们都满意的产品与服务，为社会做贡献的质量方针和明确的质量目标，竭诚让用户满意。</p>', '14', '0', '0', null, '2017-07-17 18:48:41', '2017-07-17 18:48:41', null);
INSERT INTO `articles` VALUES ('35', '团队照片1', '/images/1500339866631.jpg', null, '15', '0', '0', null, '2017-07-18 09:04:26', '2017-07-18 09:04:26', null);
INSERT INTO `articles` VALUES ('42', '公司成功中标昆明•爱尚苑3m/s乘客电梯项目', '/images/1500341499565.jpg', '<p>新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</p><p><img src=\"/Uploads/image/150034148662008797.jpg\" title=\"150034148662008797.jpg\" alt=\"news_1.jpg\"/></p>', '17', '0', '0', '1', '2017-07-18 09:31:39', '2017-07-18 09:31:39', null);
INSERT INTO `articles` VALUES ('43', '现代农业示范园为民增收 推动临沭农业创新发展', '/images/1500341524176.jpg', '<p>新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</p><p><img src=\"/Uploads/image/150034152198792363.jpg\" title=\"150034152198792363.jpg\" alt=\"news_2.jpg\"/></p>', '17', '0', '0', '1', '2017-07-18 09:32:04', '2017-07-18 09:32:04', null);
INSERT INTO `articles` VALUES ('44', '现代农业示范园为民增收', '/images/1500341614968.jpg', '<p>新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</p><p><img src=\"/Uploads/image/150034161242145326.jpg\" title=\"150034161242145326.jpg\" alt=\"a4.jpg\"/></p>', '17', '0', '0', null, '2017-07-18 09:33:34', '2017-07-18 09:33:34', null);
INSERT INTO `articles` VALUES ('45', '载货电梯轿厢WTT-4117', '/images/1500344887546.jpg', null, '20', '0', '0', null, '2017-07-18 10:21:01', '2017-07-18 10:28:07', null);
INSERT INTO `articles` VALUES ('46', '载货电梯轿厢WTT-0212', '/images/1500344975765.jpg', null, '20', '0', '0', null, '2017-07-18 10:21:10', '2017-07-18 10:29:35', null);
INSERT INTO `articles` VALUES ('47', '电梯图片集合', null, '<p><img src=\"/Uploads/image/150034452093103562.jpg\" title=\"150034452093103562.jpg\"/></p><p><img src=\"/Uploads/image/150034452044761658.jpg\" title=\"150034452044761658.jpg\"/></p><p><img src=\"/Uploads/image/150034452058316670.jpg\" title=\"150034452058316670.jpg\"/></p><p><img src=\"/Uploads/image/150034452096825811.jpg\" title=\"150034452096825811.jpg\"/></p><p><img src=\"/Uploads/image/150034452037601170.jpg\" title=\"150034452037601170.jpg\"/></p><p><br/></p>', '45', '0', '0', null, '2017-07-18 10:22:10', '2017-07-18 10:22:10', null);
INSERT INTO `articles` VALUES ('48', '详细介绍', null, '<p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p><p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p><p>安全可靠：迈高电梯满足各地安全规范，在遵循严格的欧洲安全标准（CE）的基础上，努力探索和创新安全技术，把保证人员安全和设备安全，作为我们最高的标准，不断提高电梯的安全性和可靠性。经久耐用</p>', '45', '0', '0', null, '2017-07-18 10:22:56', '2017-07-18 10:22:56', null);
INSERT INTO `articles` VALUES ('49', '右侧简介', null, '<p>虹霖公司根据各使用单位的不同需求，结合货用电梯的大容量，大载货、运行条件恶劣等特点，调集整合国际国内优势资源，引进世界先进电梯驱动和控制技术，紧密携手，推出全新迈高MH11 &nbsp;、MH12、 MH22 等系列货用电梯，是广大工厂、仓库、商场等各类商业建筑和工业建筑货物运输的最佳选择。</p>', '45', '0', '0', null, '2017-07-18 10:23:48', '2017-07-18 10:23:48', null);
INSERT INTO `articles` VALUES ('50', '图片集合', null, '<p><img src=\"/Uploads/image/150034452096825811.jpg\"/></p><p><img src=\"/Uploads/image/150034452093103562.jpg\"/></p><p><img src=\"/Uploads/image/150034452058316670.jpg\"/></p><p><br/></p>', '46', '0', '0', null, '2017-07-18 11:03:19', '2017-07-18 11:03:19', null);
INSERT INTO `articles` VALUES ('51', '详细介绍', null, '<p>详细介绍详细介绍详细介绍</p>', '46', '0', '0', null, '2017-07-18 11:03:29', '2017-07-18 11:03:29', null);
INSERT INTO `articles` VALUES ('52', '右侧介绍', null, '<p>右侧介绍右侧介绍右侧介绍右侧介绍右侧介绍</p>', '46', '0', '0', null, '2017-07-18 11:03:41', '2017-07-18 11:03:41', null);
INSERT INTO `articles` VALUES ('53', '载货电梯轿厢WTT-1111', '/images/1500347704415.jpg', null, '21', '0', '0', null, '2017-07-18 11:15:04', '2017-07-18 11:15:04', null);
INSERT INTO `articles` VALUES ('54', '载货电梯轿厢WTT-4117', '/images/1500348084276.jpg', null, '5', '0', '0', null, '2017-07-18 11:21:24', '2017-07-18 11:21:24', null);
INSERT INTO `articles` VALUES ('55', '载货电梯轿厢WTT-4117', '/images/1500348092199.jpg', null, '5', '0', '0', null, '2017-07-18 11:21:32', '2017-07-18 11:21:32', null);
INSERT INTO `articles` VALUES ('56', '配件图集', null, '<p><img src=\"/Uploads/image/150034452096825811.jpg\"/></p><p><img src=\"/Uploads/image/150034452093103562.jpg\"/></p><p><img src=\"/Uploads/image/150034452058316670.jpg\"/></p><p><img src=\"/Uploads/image/150034452044761658.jpg\"/></p><p><img src=\"/Uploads/image/150034452037601170.jpg\"/></p><p><br/></p>', '55', '0', '0', null, '2017-07-18 11:22:41', '2017-07-18 11:22:41', null);
INSERT INTO `articles` VALUES ('57', '详细介绍', null, '<h2 class=\"tit\" style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: normal; transition: all 320ms ease-out 0s; line-height: 60px; border-bottom: 1px dashed rgb(240, 240, 240); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">详细介绍</h2><h2 class=\"tit\" style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: normal; transition: all 320ms ease-out 0s; line-height: 60px; border-bottom: 1px dashed rgb(240, 240, 240); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">详细介绍</h2><h2 class=\"tit\" style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: normal; transition: all 320ms ease-out 0s; line-height: 60px; border-bottom: 1px dashed rgb(240, 240, 240); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">详细介绍</h2><h2 class=\"tit\" style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: normal; transition: all 320ms ease-out 0s; line-height: 60px; border-bottom: 1px dashed rgb(240, 240, 240); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">详细介绍</h2><h2 class=\"tit\" style=\"margin: 0px; padding: 0px; font-size: 18px; font-weight: normal; transition: all 320ms ease-out 0s; line-height: 60px; border-bottom: 1px dashed rgb(240, 240, 240); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">详细</h2>', '55', '0', '0', null, '2017-07-18 11:23:03', '2017-07-18 11:23:03', null);
INSERT INTO `articles` VALUES ('58', '右侧介绍', null, '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">虹霖公司根据各使用单位的不同需求，结合货用电梯的大容量，大载货、运行条件恶劣等特点，调集整合国际国内优势资源，引进世界先进电梯驱动和控制技术，紧密携手，推出全新迈高MH11 、MH12、 MH22 等系列货用电梯，是广大工厂、仓库、商场等各类商业建筑和工业建筑货物运输的最佳选择。</span></p>', '55', '0', '0', null, '2017-07-18 11:23:23', '2017-07-18 11:23:23', null);
INSERT INTO `articles` VALUES ('59', '配件图集', null, '<p><img src=\"/Uploads/image/150034452096825811.jpg\"/></p><p><img src=\"/Uploads/image/150034452093103562.jpg\"/></p><p><img src=\"/Uploads/image/150034452058316670.jpg\"/></p><p><img src=\"/Uploads/image/150034452044761658.jpg\"/></p><p><br/></p>', '54', '0', '0', null, '2017-07-18 11:23:57', '2017-07-18 11:23:57', null);
INSERT INTO `articles` VALUES ('60', '详细介绍', null, '<p>详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍详细介绍</p>', '54', '0', '0', null, '2017-07-18 11:24:10', '2017-07-18 11:24:10', null);
INSERT INTO `articles` VALUES ('61', '右侧架少', null, '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">虹霖公司根据各使用单位的不同需求，结合货用电梯的大容量，大载货、运行条件恶劣等特点，调集整合国际国内优势资源，引进世界先进电梯驱动和控制技术，紧密携手，推出全新迈高MH11 、MH12、 MH22 等系列货用电梯，是广大工厂、仓库、商场等各类商业建筑和工业建筑货物运输的最佳选择。</span></p>', '54', '0', '0', null, '2017-07-18 11:24:25', '2017-07-18 11:24:25', null);
INSERT INTO `articles` VALUES ('62', '达州江南世家小区', '/images/1500348996899.jpg', '<p>新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</p><p><img src=\"/Uploads/image/150034899089820237.jpg\" title=\"150034899089820237.jpg\" alt=\"case_3.jpg\"/></p>', '6', '0', '0', null, '2017-07-18 11:36:36', '2017-07-18 11:36:36', null);
INSERT INTO `articles` VALUES ('63', '达州江南世家小区', '/images/1500349036173.jpg', '<p>新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</p><p><img src=\"/Uploads/image/150034901611647842.jpg\" title=\"150034901611647842.jpg\" alt=\"case_2.jpg\"/></p>', '6', '0', '0', null, '2017-07-18 11:37:16', '2017-07-18 11:37:16', null);
INSERT INTO `articles` VALUES ('64', '达芙妮', '/images/1500349620738.jpg', null, '22', '0', '0', null, '2017-07-18 11:47:00', '2017-07-18 11:47:00', null);
INSERT INTO `articles` VALUES ('65', '贝莱丽', '/images/1500349635481.jpg', null, '22', '0', '0', null, '2017-07-18 11:47:15', '2017-07-18 11:47:15', null);
INSERT INTO `articles` VALUES ('66', '百丽', '/images/1500349647642.jpg', null, '22', '0', '0', null, '2017-07-18 11:47:27', '2017-07-18 11:47:27', null);
INSERT INTO `articles` VALUES ('67', '党政机关', null, null, '23', '0', '0', null, '2017-07-18 11:53:46', '2017-07-18 11:53:46', null);
INSERT INTO `articles` VALUES ('68', '医院', null, null, '23', '0', '0', null, '2017-07-18 11:53:55', '2017-07-18 11:53:55', null);
INSERT INTO `articles` VALUES ('69', '学校', null, null, '23', '0', '0', null, '2017-07-18 11:54:00', '2017-07-18 11:54:00', null);
INSERT INTO `articles` VALUES ('70', '轮播图', null, null, '1', '0', '0', null, '2017-07-18 16:13:31', '2017-07-18 16:13:31', null);
INSERT INTO `articles` VALUES ('71', '轮播图1', '/images/1500365629563.jpg', null, '70', '0', '0', null, '2017-07-18 16:13:49', '2017-07-18 16:13:49', null);
INSERT INTO `articles` VALUES ('72', '轮播图2', '/images/1500365635538.jpg', null, '70', '0', '0', null, '2017-07-18 16:13:55', '2017-07-18 16:13:55', null);
INSERT INTO `articles` VALUES ('73', '轮播图3', '/images/1500365640613.jpg', null, '70', '0', '0', null, '2017-07-18 16:14:00', '2017-07-18 16:14:00', null);
INSERT INTO `articles` VALUES ('74', '首页服务项目', null, null, '1', '0', '0', null, '2017-07-18 16:42:40', '2017-07-18 16:42:40', null);
INSERT INTO `articles` VALUES ('75', '电梯销售', '/images/1500367402238.jpg', null, '74', '0', '0', '/service', '2017-07-18 16:43:22', '2017-07-18 16:43:22', null);
INSERT INTO `articles` VALUES ('76', '电梯安装', '/images/1500367424686.jpg', null, '74', '0', '0', '/service', '2017-07-18 16:43:44', '2017-07-18 16:43:44', null);
INSERT INTO `articles` VALUES ('77', '电梯维护', '/images/1500367435825.jpg', null, '74', '0', '0', '/service', '2017-07-18 16:43:55', '2017-07-18 16:43:55', null);

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
INSERT INTO `messages` VALUES ('1', '测试一', 'hupp@vip.qq.com', '152-2812-1788', '小娃·测试', '2017-07-18 15:47:58', '2017-07-18 15:47:58', null);

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
INSERT INTO `migrations` VALUES ('4', '2017_06_26_154310_create_teams_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_07_01_115424_create_car_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_07_18_144831_create_order_lists_table', '2');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of order_lists
-- ----------------------------
INSERT INTO `order_lists` VALUES ('1', '南充市委', '南充北湖路', '2004-07-12 00:00:00', '客梯', '1000kg/1.0/7/7/7', '3', '南充质监局', '67', '2017-07-18 15:17:10', '2017-07-18 15:17:10', null);
INSERT INTO `order_lists` VALUES ('2', '南充市委', '南充北湖路', '2014-07-12 00:00:00', '客梯', '1000kg/1.0/7/7/7', '5', '南充质监局', '67', '2017-07-18 15:18:04', '2017-07-18 15:23:01', null);
INSERT INTO `order_lists` VALUES ('3', '川北医学院', '南充北湖路', '2017-07-12 00:00:00', '客梯', '1000kg/1.0/7/7/7', '51', '南充质监局', '68', '2017-07-18 15:18:42', '2017-07-18 15:18:42', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$4BHfBrXkRuyeMThreb83O.WQ4G9JPUR.lgdr8sW97AN/ySLcVw/Fa', null, null, null, null);
