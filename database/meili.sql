/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : meili

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-14 18:30:39
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
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2017-11-11 16:55:23', '2017-11-11 16:55:23', null);
INSERT INTO `articles` VALUES ('2', '所有课程', null, null, null, '0', '1', '0', null, '2017-11-11 17:02:57', '2017-11-11 17:02:57', null);
INSERT INTO `articles` VALUES ('3', '明星师资', null, null, null, '0', '1', '0', '/teacher', '2017-11-11 17:03:32', '2017-11-13 11:54:18', null);
INSERT INTO `articles` VALUES ('4', '走进片场', null, null, null, '0', '1', '0', '/star', '2017-11-11 17:04:42', '2017-11-11 17:04:42', null);
INSERT INTO `articles` VALUES ('5', '学员作品', null, null, null, '0', '1', '0', '/work', '2017-11-11 17:05:47', '2017-11-11 17:05:47', null);
INSERT INTO `articles` VALUES ('6', '品牌文化', null, null, null, '0', '1', '0', '/about', '2017-11-11 17:07:09', '2017-11-11 17:07:09', null);
INSERT INTO `articles` VALUES ('7', '联系我们', null, null, null, '0', '1', '0', '/contact', '2017-11-11 17:07:40', '2017-11-11 17:07:40', null);
INSERT INTO `articles` VALUES ('8', '品牌简介', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 20px; color: red; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 20px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">全国拥有近5万平米装饰展示区，包含软装、家具、建材及几十个不同风格实景样板间。上千名经验丰富装饰人，与200多个知名主材品牌紧密合作，并定期对施工团队进行技术、安全服务培训，力求精益求精，为广大业主提供优质装修服务。一键报价全程透明，PC+移动客户端对工地全程监控，建材产品统一集采、仓储、物流、安装。</p><p><br/></p>', '6', '1', '0', '/about', '2017-11-11 17:27:05', '2017-11-13 14:48:23', null);
INSERT INTO `articles` VALUES ('9', '企业文化', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 20px; color: red; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 20px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">全国拥有近5万平米装饰展示区，包含软装、家具、建材及几十个不同风格实景样板间。上千名经验丰富装饰人，与200多个知名主材品牌紧密合作，并定期对施工团队进行技术、安全服务培训，力求精益求精，为广大业主提供优质装修服务。一键报价全程透明，PC+移动客户端对工地全程监控，建材产品统一集采、仓储、物流、安装。</p><p><br/></p>', '6', '1', '0', '/about/culture', '2017-11-11 17:27:26', '2017-11-13 14:48:39', null);
INSERT INTO `articles` VALUES ('10', '视频中心', null, null, null, '6', '1', '0', '/about/video', '2017-11-11 17:27:56', '2017-11-11 17:27:56', null);
INSERT INTO `articles` VALUES ('11', '联合校区', null, null, null, '6', '1', '0', '/about/compus', '2017-11-11 17:28:18', '2017-11-11 17:28:58', null);
INSERT INTO `articles` VALUES ('12', '新闻动态', null, null, null, '6', '1', '0', '/about/news', '2017-11-11 17:29:26', '2017-11-11 17:29:26', null);
INSERT INTO `articles` VALUES ('13', '在线报名', null, null, null, '7', '1', '0', '/contact', '2017-11-11 17:30:07', '2017-11-11 17:30:07', null);
INSERT INTO `articles` VALUES ('14', '联系地址', null, null, null, '7', '1', '0', '/contact/way', '2017-11-11 17:31:03', '2017-11-11 17:31:03', null);
INSERT INTO `articles` VALUES ('15', '形象设计', '/images/1510545632314.png', 'design', '<p><img src=\"/Uploads/image/151039427574514770.jpg\" title=\"151039427574514770.jpg\"/></p><p><img src=\"/Uploads/image/151039427592501831.jpg\" title=\"151039427592501831.jpg\"/></p><p><img src=\"/Uploads/image/151039427511935424.jpg\" title=\"151039427511935424.jpg\"/></p><p><img src=\"/Uploads/image/151039427522451782.jpg\" title=\"151039427522451782.jpg\"/></p><p><img src=\"/Uploads/image/151039427512979125.jpg\" title=\"151039427512979125.jpg\"/></p><p><br/></p>', '2', '1', '0', null, '2017-11-11 17:58:05', '2017-11-13 12:00:32', null);
INSERT INTO `articles` VALUES ('16', '化妆', '/images/1510545643357.png', 'makeup', '<p><img src=\"/Uploads/image/151039427592501831.jpg\"/></p><p><img src=\"/Uploads/image/151039427574514770.jpg\"/></p><p><img src=\"/Uploads/image/151039427522451782.jpg\"/></p><p><img src=\"/Uploads/image/151039427512979125.jpg\"/></p><p><img src=\"/Uploads/image/151039427511935424.jpg\"/></p><p><br/></p>', '2', '1', '0', null, '2017-11-11 17:58:49', '2017-11-13 12:00:43', null);
INSERT INTO `articles` VALUES ('17', '色彩学 款式风格班', '/images/1510542996339.jpg', '1年,¥8900.00,2018-10-25,南充校区', '<p>本课程致力于培养造型设计之专业服装及色彩搭配人才，适合对美感不足或色彩感不强的美业人士。对美有这强烈追求的时尚达人、化妆造型师 或经过专业课程培训人员，以及对服装色彩欠缺者。</p>', '15', '0', '0', null, '2017-11-13 11:16:36', '2017-11-13 11:26:26', null);
INSERT INTO `articles` VALUES ('18', '色彩学 款式风格班2', '/images/1510543049293.jpg', '1年,¥8900.002018-10-25,南充校区', '<p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">形象设计师是行业中最能全面掌握各方面技能的设计主导者，对于设计对象的从头到脚，由内到外的设计必须要熟练掌握各项专业技能包含化妆造型、发型设计、美容护肤、服装设计与搭配，饰品制作等专业技能，并且能将专业技术协调统一</span></p>', '15', '0', '0', null, '2017-11-13 11:17:29', '2017-11-13 11:20:24', '2017-11-13 11:20:24');
INSERT INTO `articles` VALUES ('19', '培养目标', null, '培养时尚舞台及影视方面的高级形象设计师精英', null, '17', '0', '100', null, '2017-11-13 11:18:20', '2017-11-13 11:18:20', null);
INSERT INTO `articles` VALUES ('20', '就业方向', null, '影视剧组、话剧团、歌剧团、电视台、色彩工作室、传媒公司、杂志社、婚纱摄影机构、写真摄影机构、艺人助理、一线彩妆培训师、企业形象培训师、彩妆教育机构、媒体签约造型师，大型活动造型师，平面造型师等。', null, '17', '0', '200', null, '2017-11-13 11:18:32', '2017-11-13 11:18:32', null);
INSERT INTO `articles` VALUES ('21', '教学大纲', null, null, null, '17', '0', '300', null, '2017-11-13 11:18:53', '2017-11-13 11:18:53', null);
INSERT INTO `articles` VALUES ('22', '形象设计原理', '/images/1510543180523.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">形象设计师行业发展史</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">形象设计概论</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">形象设计美学</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">形象设计师自我管理</p><p><br/></p>', '21', '0', '0', null, '2017-11-13 11:19:40', '2017-11-13 11:19:40', null);
INSERT INTO `articles` VALUES ('23', '化妆师职业道德与化妆基础知识', '/images/1510543198975.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">化妆师的职业道德</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">正确认识化妆师职业</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">化妆的分类</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">化妆产品的应用</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">化妆的基本程序</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">基础的皮肤护理与保养</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">消毒与卫生（ITEC标准）</p><p><br/></p>', '21', '0', '0', null, '2017-11-13 11:19:58', '2017-11-13 11:19:58', null);
INSERT INTO `articles` VALUES ('24', '再跨界 | 你还会说化妆美学不是', '/images/1510554916139.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过成都的朋友，一般逛过春熙路</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过春熙路的朋友，一般都拍过那个大熊猫建筑</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">这就是IFS在成都</p><p><img src=\"/Uploads/image/151039427592501831.jpg\"/></p><p><img src=\"/Uploads/image/151039427574514770.jpg\"/></p><p><br/></p>', '4', '0', '0', null, '2017-11-13 14:35:16', '2017-11-13 14:35:16', null);
INSERT INTO `articles` VALUES ('25', '张嘉译', '/images/1510554960162.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过成都的朋友，一般逛过春熙路</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过春熙路的朋友，一般都拍过那个大熊猫建筑</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">这就是IFS在成都</p><p><img src=\"/Uploads/image/151039427512979125.jpg\"/></p><p><img src=\"/Uploads/image/151039427511935424.jpg\"/></p><p><br/></p>', '4', '0', '0', null, '2017-11-13 14:36:00', '2017-11-13 14:36:00', null);
INSERT INTO `articles` VALUES ('26', '彩绘类美甲设计', '/images/1510555517845.jpg', null, '<p><img src=\"/Uploads/image/151039427574514770.jpg\"/></p><p><img src=\"/Uploads/image/151039427522451782.jpg\"/></p><p><br/></p>', '5', '0', '0', null, '2017-11-13 14:45:17', '2017-11-13 14:45:17', null);
INSERT INTO `articles` VALUES ('27', '一碗侣争吵冒菜引发的情', '/images/1510555926392.jpg', null, '<p style=\"text-align: center;\"><iframe frameborder=\"0\" width=\"640\" height=\"498\" src=\"https://v.qq.com/iframe/player.html?vid=a0024viupvw&tiny=0&auto=0\" allowfullscreen=\"\"></iframe></p><p><br/></p><p>测试文字 &nbsp;&nbsp;测试文字测试文字</p>', '10', '0', '0', null, '2017-11-13 14:52:06', '2017-11-13 14:52:06', null);
INSERT INTO `articles` VALUES ('28', '南充校区', null, '0817-2224234,\r\n四川省南充市顺庆区三公街113号,\r\n778632236', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介</span></p>', '11', '0', '0', '106.094239,30.802359', '2017-11-13 14:54:38', '2017-11-14 16:34:41', null);
INSERT INTO `articles` VALUES ('29', '教师图', '/images/1510556106973.jpg', null, null, '28', '0', '0', null, '2017-11-13 14:55:06', '2017-11-13 14:55:06', null);
INSERT INTO `articles` VALUES ('30', '食堂图', '/images/1510556116410.jpg', null, null, '28', '0', '0', null, '2017-11-13 14:55:16', '2017-11-13 14:55:16', null);
INSERT INTO `articles` VALUES ('31', '达州校区', null, '0817-22242341,\r\n四川省南充市顺庆区三公街113号,\r\n778632236', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学校简介学1</span></p>', '11', '0', '0', '106.094239,30.802359', '2017-11-13 15:20:56', '2017-11-14 16:34:47', null);
INSERT INTO `articles` VALUES ('32', '教师', '/images/1510557750703.jpg', null, null, '31', '0', '0', null, '2017-11-13 15:22:30', '2017-11-13 15:22:30', null);
INSERT INTO `articles` VALUES ('33', '电影《恋爱教父》俏佳人全程助力', '/images/1510558044881.jpg', '3月6日下午，电影《恋爱教父》在重庆国泰艺术中心召开电影开机新闻发布会，明道、谢依霖以及“天天兄弟”中的钱枫、矢野浩二...', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过成都的朋友，一般逛过春熙路</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过春熙路的朋友，一般都拍过那个大熊猫建筑</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">这就是IFS在成都</p><p><img src=\"/Uploads/image/151039427592501831.jpg\"/></p><p><img src=\"/Uploads/image/151039427574514770.jpg\"/></p><p><br/></p>', '12', '0', '0', null, '2017-11-13 15:27:24', '2017-11-13 15:27:24', null);
INSERT INTO `articles` VALUES ('34', '电影《恋爱教父》俏佳人全程助力', '/images/1510558239705.jpg', '3月6日下午，电影《恋爱教父》在重庆国泰艺术中心召开电影开机新闻发布会，明道、谢依霖以及“天天兄弟”中的钱枫、矢野浩二...', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过成都的朋友，一般逛过春熙路</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过春熙路的朋友，一般都拍过那个大熊猫建筑</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">这就是IFS在成都</p><p><img src=\"/Uploads/image/151039427592501831.jpg\"/></p><p><img src=\"/Uploads/image/151039427574514770.jpg\"/></p><p><br/></p>', '12', '0', '0', null, '2017-11-13 15:30:39', '2017-11-13 15:30:39', null);
INSERT INTO `articles` VALUES ('35', '缩略图', null, null, null, '1', '0', '0', null, '2017-11-13 17:12:02', '2017-11-13 17:12:02', null);
INSERT INTO `articles` VALUES ('36', '缩略图1', '/images/1510564333247.jpg', null, null, '35', '0', '0', null, '2017-11-13 17:12:13', '2017-11-13 17:12:13', null);
INSERT INTO `articles` VALUES ('37', '缩略图2', '/images/1510564346162.jpg', null, null, '35', '0', '0', null, '2017-11-13 17:12:26', '2017-11-13 17:12:26', null);
INSERT INTO `articles` VALUES ('38', '首页特权', null, null, null, '1', '0', '0', null, '2017-11-13 18:21:02', '2017-11-14 10:12:30', null);
INSERT INTO `articles` VALUES ('39', '韩国免费进修', null, '提供短期韩国免费进修（1-3月）机会，推荐进舞台剧组、影视剧组化妆造型实习。', '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">FREE</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">EDUCATION&nbsp;</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">IN SOUTH KOREA</span></p>', '38', '0', '0', null, '2017-11-14 10:12:58', '2017-11-14 10:12:58', null);
INSERT INTO `articles` VALUES ('40', '包学包会，学会为止', null, '针对所有学员包学包会，学不会可跟下期新班免费继续学习，学会为止。', '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">PACK YOUR&nbsp;</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">BAGS AND&nbsp;</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">LEARN TO DO SO</span></p>', '38', '0', '0', null, '2017-11-14 10:13:23', '2017-11-14 10:13:23', null);
INSERT INTO `articles` VALUES ('41', '终身免费进修', null, '随时可以返回学校免费进修所学专业的新技术，一次学习终身免费升级。', '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">LIFELONG&nbsp;</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">FREE&nbsp;</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">EDUCATION</span></p>', '38', '0', '0', null, '2017-11-14 10:13:42', '2017-11-14 10:13:42', null);
INSERT INTO `articles` VALUES ('42', '尊享优惠，创业支持', null, '凡在美丽俏佳人入学学员，可免费加盟美丽俏佳人作为终身奋斗的事业，公司会提供最大的支持。', '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">FREE&nbsp;</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">EDUCATION&nbsp;</span><br/><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 22px; text-transform: uppercase; background-color: rgb(255, 255, 255);\">IN SOUTH KOREA</span></p>', '38', '0', '0', null, '2017-11-14 10:13:57', '2017-11-14 10:13:57', null);
INSERT INTO `articles` VALUES ('43', '==【以下为部分wap内容】', null, null, null, '0', '1', '0', null, '2017-11-14 10:37:57', '2017-11-14 14:13:23', null);
INSERT INTO `articles` VALUES ('44', '网站首页', null, null, null, '43', '1', '0', null, '2017-11-14 11:19:26', '2017-11-14 11:19:26', null);
INSERT INTO `articles` VALUES ('45', '首页标题图', '/images/1510652208708.jpg', null, null, '44', '0', '10', null, '2017-11-14 17:36:48', '2017-11-14 17:36:48', null);
INSERT INTO `articles` VALUES ('46', '第二个大图', '/images/1510652248247.jpg', null, null, '44', '0', '20', null, '2017-11-14 17:37:28', '2017-11-14 17:37:28', null);
INSERT INTO `articles` VALUES ('47', '在线咨询图', '/images/1510652294276.png', null, null, '44', '0', '30', null, '2017-11-14 17:38:14', '2017-11-14 17:38:14', null);
INSERT INTO `articles` VALUES ('48', '咨询右侧图', '/images/1510652318433.png', null, null, '44', '0', '40', null, '2017-11-14 17:38:38', '2017-11-14 17:38:38', null);
INSERT INTO `articles` VALUES ('49', '最新动态多图', null, null, '<p><img src=\"/Uploads/image/151065249026336670.jpg\" title=\"151065249026336670.jpg\"/></p><p><img src=\"/Uploads/image/151065249072021484.jpg\" title=\"151065249072021484.jpg\"/></p><p><img src=\"/Uploads/image/151065249011297607.jpg\" title=\"151065249011297607.jpg\"/></p><p><br/></p>', '44', '0', '50', null, '2017-11-14 17:41:50', '2017-11-14 17:41:50', null);
INSERT INTO `articles` VALUES ('50', '明星老师多图', '/images/1510652629415.jpg', null, '<p><img src=\"/Uploads/image/151065261363543701.jpg\" title=\"151065261363543701.jpg\"/></p><p><img src=\"/Uploads/image/151065261392562866.jpg\" title=\"151065261392562866.jpg\"/></p><p><br/></p>', '44', '0', '60', null, '2017-11-14 17:43:49', '2017-11-14 17:44:03', null);
INSERT INTO `articles` VALUES ('51', '培训视频图', '/images/1510653137165.jpg', null, null, '44', '0', '70', null, '2017-11-14 17:44:37', '2017-11-14 17:52:17', null);
INSERT INTO `articles` VALUES ('52', '片场图', '/images/1510652713106.jpg', null, null, '44', '0', '80', null, '2017-11-14 17:45:13', '2017-11-14 17:45:13', null);
INSERT INTO `articles` VALUES ('53', '校区环境组图', null, null, '<p><img src=\"/Uploads/image/151065491136535644.jpg\" title=\"151065491136535644.jpg\"/></p><p><img src=\"/Uploads/image/151065491132049560.jpg\" title=\"151065491132049560.jpg\"/></p><p><img src=\"/Uploads/image/151065491135064697.jpg\" title=\"151065491135064697.jpg\"/></p><p><img src=\"/Uploads/image/151065491189990234.jpg\" title=\"151065491189990234.jpg\"/></p><p><img src=\"/Uploads/image/151065491141546630.jpg\" title=\"151065491141546630.jpg\"/></p><p><img src=\"/Uploads/image/151065491146508789.jpg\" title=\"151065491146508789.jpg\"/></p><p><br/></p>', '44', '0', '90', null, '2017-11-14 18:21:54', '2017-11-14 18:21:54', null);

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
  `amount` int(11) DEFAULT NULL,
  `product` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '王小飞', '15882162621', null, null, '校区：南充校区<br>课程：形象设计<br>留言：dscdcd<br>', '127.0.0.1', '2017-11-13 16:42:29', '2017-11-13 16:42:29', null);
INSERT INTO `messages` VALUES ('2', '李城', '15882626026', null, null, '校区：南充校区<br>课程：色彩学 款式风格班<br>留言：<br>', '127.0.0.1', '2017-11-14 12:05:47', '2017-11-14 12:05:47', null);

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
-- Table structure for rcases
-- ----------------------------
DROP TABLE IF EXISTS `rcases`;
CREATE TABLE `rcases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtent` text COLLATE utf8mb4_unicode_ci,
  `serial_number` int(11) DEFAULT '0',
  `style_id` int(11) DEFAULT NULL,
  `house_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `cate` tinyint(4) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rcases
-- ----------------------------
INSERT INTO `rcases` VALUES ('1', '龚尚娥的案例1', '/images/1510390142215.jpg', null, '0', '16', null, '1', '1', '2017-11-11 16:49:02', '2017-11-13 10:04:10', null);
INSERT INTO `rcases` VALUES ('2', '牙齿敏感1', '/images/1510390156429.jpg', null, '0', '16', null, '1', '1', '2017-11-11 16:49:16', '2017-11-11 16:52:07', null);
INSERT INTO `rcases` VALUES ('3', '彩绘类美甲设计', '/images/1510541416130.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过成都的朋友，一般逛过春熙路</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">去过春熙路的朋友，一般都拍过那个大熊猫建筑</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;\">这就是IFS在成都</p><p><img src=\"/Uploads/image/151039427592501831.jpg\"/></p><p><img src=\"/Uploads/image/151039427574514770.jpg\"/></p><p><br/></p>', '0', '15', null, '1', '2', '2017-11-13 10:50:16', '2017-11-13 10:50:16', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '龚尚娥', '资深美容导师', null, null, null, '16', '/images/1510388612682.jpg', 'CIDESCO国际美容导师,\r\n国家高级化妆造型师,\r\n国际化妆造型导师,\r\n94年亚太地区化妆大赛专业幻彩组冠军,\r\n多家媒体及杂志形象造型设计总监', null, '2017-11-11 16:23:32', '2017-11-13 10:41:29', null);
INSERT INTO `teams` VALUES ('2', '王小飞', '资深美容导师', null, null, null, '16', '/images/1510540947647.jpg', 'CIDESCO国际美容导师,\r\n国家高级化妆造型师,\r\n国际化妆造型导师,\r\n94年亚太地区化妆大赛专业幻彩组冠军,\r\n多家媒体及杂志形象造型设计总监', null, '2017-11-13 10:42:27', '2017-11-13 10:43:35', null);
INSERT INTO `teams` VALUES ('3', '王大刚', '牙齿敏感', null, null, null, '15', '/images/1510540999844.jpg', 'CIDESCO国际美容导师,\r\n国家高级化妆造型师,\r\n国际化妆造型导师,\r\n94年亚太地区化妆大赛专业幻彩组冠军,\r\n多家媒体及杂志形象造型设计总监', null, '2017-11-13 10:43:19', '2017-11-13 10:43:19', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$4wTW/vgzFWmQWTqubsZUp.IxbAGKwOV.3/sZdii8b53OHSvIR4t0O', null, null, null, null);
