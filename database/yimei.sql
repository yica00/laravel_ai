/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : yimei

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-18 14:48:45
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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2017-11-16 11:27:59', '2017-11-16 11:29:39', null);
INSERT INTO `articles` VALUES ('2', '品牌', '/images/1510804070929.jpg', null, null, '0', '1', '0', '/brand', '2017-11-16 11:29:58', '2017-11-16 11:47:50', null);
INSERT INTO `articles` VALUES ('3', '项目', null, null, null, '0', '1', '0', '/item', '2017-11-16 11:30:22', '2017-11-16 11:30:22', null);
INSERT INTO `articles` VALUES ('4', '案例', null, null, null, '0', '1', '0', '/case', '2017-11-16 11:30:35', '2017-11-16 11:30:35', null);
INSERT INTO `articles` VALUES ('5', '专家', null, null, null, '0', '1', '0', '/team', '2017-11-16 11:30:53', '2017-11-16 11:30:53', null);
INSERT INTO `articles` VALUES ('6', '咨询', null, null, null, '0', '1', '0', 'tencent://message/?uin=2010988627&Menu=yes', '2017-11-16 11:32:40', '2017-11-16 11:32:40', null);
INSERT INTO `articles` VALUES ('7', '品牌故事', '/images/1510804044758.png', null, '<p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">香港依美医疗美容集团总部在中国香港，集团主营事业是医疗美容新技术研发，医疗美容新产品推广及医疗美容教育。香港依美医疗美容集团总部在中国香港，集团主营事业是医疗美容新技术研发，医疗美容新产品推广及医疗美容教育。香港依美医疗美容集团总部在中国香港，集团主营事业是医疗美容新技术研发，医疗美容新产品推广及医疗美容教育。香港依美医疗美容集团总部在中国香港，集团主营事业是医疗美容新技术研发，医疗美容新产品推广及医疗美容教育。香港依美医疗美容集团总部在中国香港，集团主营事业是医疗美容新技术研发，医疗美容新产品推广及医疗美容教育。</span></p>', '2', '1', '0', '/brand#story', '2017-11-16 11:43:31', '2017-11-16 11:47:24', null);
INSERT INTO `articles` VALUES ('8', '企业文化', '/images/1510804008912.png', null, null, '2', '1', '0', '/brand#culture', '2017-11-16 11:46:48', '2017-11-16 11:46:48', null);
INSERT INTO `articles` VALUES ('9', '尖端设备', '/images/1510804143672.png', null, null, '2', '1', '0', 'brand#equip', '2017-11-16 11:49:03', '2017-11-16 11:49:03', null);
INSERT INTO `articles` VALUES ('10', '典雅环境', '/images/1510804289865.png', null, '<p><img src=\"/Uploads/image/151080427696740722.jpg\" title=\"151080427696740722.jpg\"/></p><p><img src=\"/Uploads/image/151080427655993652.jpg\" title=\"151080427655993652.jpg\"/></p><p><img src=\"/Uploads/image/151080427690655517.jpg\" title=\"151080427690655517.jpg\"/></p><p><img src=\"/Uploads/image/151080427623974609.jpg\" title=\"151080427623974609.jpg\"/></p><p><br/></p>', '2', '1', '0', '/brand#environ', '2017-11-16 11:51:29', '2017-11-16 11:51:29', null);
INSERT INTO `articles` VALUES ('11', '伊美荣誉', '/images/1510804359455.png', null, '<p><img src=\"/Uploads/image/151080435633731079.jpg\" title=\"151080435633731079.jpg\"/></p><p><img src=\"/Uploads/image/151080435647930908.jpg\" title=\"151080435647930908.jpg\"/></p><p><img src=\"/Uploads/image/151080435678442382.jpg\" title=\"151080435678442382.jpg\"/></p><p><br/></p>', '2', '1', '0', '/brand#honor', '2017-11-16 11:52:39', '2017-11-16 11:52:39', null);
INSERT INTO `articles` VALUES ('12', '新闻动态', '/images/1510804480176.png', null, null, '2', '1', '0', '/news', '2017-11-16 11:54:40', '2017-11-16 11:54:40', null);
INSERT INTO `articles` VALUES ('13', '在线预约', '/images/1510804509598.png', null, null, '2', '1', '0', '/order', '2017-11-16 11:55:09', '2017-11-16 11:55:09', null);
INSERT INTO `articles` VALUES ('14', '联系我们', '/images/1510804565193.png', null, null, '2', '1', '0', '/order#contact', '2017-11-16 11:56:05', '2017-11-16 11:56:05', null);
INSERT INTO `articles` VALUES ('15', '高贵飘逸眼', '/images/1510804623776.png', null, '<p><br/></p><p><img src=\"/Uploads/image/151091118180108642.png\" title=\"151091118180108642.png\"/></p><p><img src=\"/Uploads/image/151091118132104492.png\" title=\"151091118132104492.png\"/></p><p><img src=\"http://yimei.com/Uploads/image/151091118149774170.png\" title=\"151091118149774170.png\"/></p><p><br/></p>', '3', '1', '0', null, '2017-11-16 11:57:03', '2017-11-17 17:33:26', null);
INSERT INTO `articles` VALUES ('16', '恒久时尚鼻', '/images/1510804636811.png', null, null, '3', '1', '0', null, '2017-11-16 11:57:16', '2017-11-17 15:01:15', '2017-11-17 15:01:15');
INSERT INTO `articles` VALUES ('17', '内眼角眼综合整形手术', '/images/1510816745284.jpg', '妮阳　37岁职业：家庭主妇,\r\n蝶变项目：高贵飘逸眼,\r\n医生名字：陈秋思,\r\n手术日期：2016年11月', '<p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">单眼皮往往让人眼神呆滞、脸部寡淡，而且显得像小孩子一点都不成熟，除此之外单眼皮往往伴随着内眦现象，所以去医院做了眼综合整形手术，包括割双眼皮和开内眼角手术两项，想让自己变得好看也变得成熟一点。</span></p><p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><img src=\"/Uploads/image/151081667963934326.jpg\" title=\"151081667963934326.jpg\" alt=\"ca3.jpg\"/></span></p><p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><br/></span><br/></p>', '4', '0', '0', '高贵飘逸眼', '2017-11-16 15:18:03', '2017-11-17 11:48:13', null);
INSERT INTO `articles` VALUES ('18', '包括割双眼皮和开', '/images/1510816733189.jpg', '妮阳　37岁职业：家庭主妇,\r\n蝶变项目：高贵飘逸眼,\r\n医生名字：陈秋思,\r\n手术日期：2016年11月', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">手术前做了很多了解，陈医生有多年的临床经验，面诊时给人一种专业的稳重和细致感，于是选择了陈医生。(整形选择正规医院权威医生是整形成功的前提保证，了解全国医生、医院综合资讯)</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">眼综合整形当天</p><p><img src=\"/Uploads/image/151081667963934326.jpg\" alt=\"151081667963934326.jpg\"/></p>', '4', '0', '0', '高贵飘逸眼', '2017-11-16 15:18:53', '2017-11-17 11:48:20', null);
INSERT INTO `articles` VALUES ('19', '对比图组1', null, null, '<p><img src=\"/Uploads/image/151081665295611572.jpg\"/></p><p><img src=\"/Uploads/image/151081665278152465.jpg\"/></p><p><br/></p>', '17', '0', '0', null, '2017-11-16 15:20:17', '2017-11-16 15:20:17', null);
INSERT INTO `articles` VALUES ('20', '对比图组2', null, null, '<p><img src=\"/Uploads/image/151081685166522216.jpg\" title=\"151081685166522216.jpg\"/></p><p><img src=\"/Uploads/image/151081685173397827.jpg\" title=\"151081685173397827.jpg\"/></p><p><br/></p>', '17', '0', '0', null, '2017-11-16 15:20:53', '2017-11-16 15:20:53', null);
INSERT INTO `articles` VALUES ('21', '对比图组1', null, null, '<p><img src=\"/Uploads/image/151081685166522216.jpg\"/></p><p><img src=\"/Uploads/image/151081667963934326.jpg\"/></p><p><br/></p>', '18', '0', '0', null, '2017-11-16 15:21:08', '2017-11-16 15:21:08', null);
INSERT INTO `articles` VALUES ('22', '依美医者', '/images/1510817402768.jpg', '匠心雕琢恒久美', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">源自徐教授的整形理念，深谙东方美学的审美高度，</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">依美整形，汇聚了来自北京、上海、台湾等国际国内著名整形大师，</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">他们以娴熟的技艺，匠心雕琢眼、鼻、面、皮肤，</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">精心为顾客打造S身材，为100000余顾客找到了美的自信。</p><p><br/></p>', '5', '0', '0', null, '2017-11-16 15:30:02', '2017-11-16 15:30:02', null);
INSERT INTO `articles` VALUES ('23', '医者态度', '/images/1510817438576.jpg', '胸怀仁心追寻韵味之美', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">源自徐教授的整形理念，深谙东方美学的审美高度，</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">依美整形，汇聚了来自北京、上海、台湾等国际国内著名整形大师，</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">他们以娴熟的技艺，匠心雕琢眼、鼻、面、皮肤，</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(102, 102, 102); line-height: 30px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">精心为顾客打造S身材，为100000余顾客找到了美的自信。</p><p><br/></p>', '5', '0', '0', null, '2017-11-16 15:30:38', '2017-11-16 15:30:38', null);
INSERT INTO `articles` VALUES ('24', '定位', '/images/1510823054271.jpg', '恒久美，让你的魅力永恒', null, '8', '0', '0', 'localize', '2017-11-16 17:04:14', '2017-11-16 17:04:14', null);
INSERT INTO `articles` VALUES ('25', '愿景', '/images/1510823087435.jpg', '让每一个女人永远恒久美\r\n让我们未来的美好生活有依靠', null, '8', '0', '0', 'vision', '2017-11-16 17:04:47', '2017-11-16 17:04:47', null);
INSERT INTO `articles` VALUES ('26', '雅光射频', '/images/1510823158375.jpg', null, '<ul style=\"margin: 0px 0px 30px; padding: 0px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\" class=\" list-paddingleft-2\"><li style=\"\"><p>设备简介</p></li><li style=\"\"><p>美国Slimager雅光射频皮肤治疗仪是美国雅光光学美容技术有限公司新推出的一种非手术、非侵入的全新医学美容设备，代表当今医疗美容微创无痛的发展潮流。它利用特定频率40.68MHz的射频波，实现面部祛皱紧肤、身体溶脂塑形的疗效。</p></li></ul><ul style=\"margin: 0px 0px 30px; padding: 0px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\" class=\" list-paddingleft-2\"><li style=\"\"><p>主要用途</p></li><li style=\"\"><p>减肥失败者的“救命稻草”：使细胞中的水分子产生强烈的共振旋转，加速体内脂肪的动员，迅速分解多余的脂肪，能快速解决水桶腰、大象腿、将军肚、小腹婆等肥胖。减肥失败者的“救命稻草”：使细胞中的水分子产生强烈的共振旋转，加速体内脂肪的动员，迅速分解多余的脂肪，能快速解决水桶腰、大象腿、将军肚、小腹婆等肥胖。</p></li></ul><ul style=\"margin: 0px 0px 30px; padding: 0px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\" class=\" list-paddingleft-2\"><li style=\"\"><p>适用范围</p></li><li style=\"\"><p>唇部、背部、胸部、肩部、腿部、比基尼区域</p></li></ul><p><br/></p>', '9', '0', '0', null, '2017-11-16 17:05:58', '2017-11-16 17:05:58', null);
INSERT INTO `articles` VALUES ('27', '雅光射频', '/images/1510823171737.jpg', null, '<ul class=\" list-paddingleft-2\" style=\"margin-bottom: 30px; width: 839.797px; padding: 0px; white-space: normal; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><li><p>设备简介</p></li><li><p>美国Slimager雅光射频皮肤治疗仪是美国雅光光学美容技术有限公司新推出的一种非手术、非侵入的全新医学美容设备，代表当今医疗美容微创无痛的发展潮流。它利用特定频率40.68MHz的射频波，实现面部祛皱紧肤、身体溶脂塑形的疗效。</p></li></ul><ul class=\" list-paddingleft-2\" style=\"margin-bottom: 30px; width: 839.797px; padding: 0px; white-space: normal; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><li><p>主要用途</p></li><li><p>减肥失败者的“救命稻草”：使细胞中的水分子产生强烈的共振旋转，加速体内脂肪的动员，迅速分解多余的脂肪，能快速解决水桶腰、大象腿、将军肚、小腹婆等肥胖。减肥失败者的“救命稻草”：使细胞中的水分子产生强烈的共振旋转，加速体内脂肪的动员，迅速分解多余的脂肪，能快速解决水桶腰、大象腿、将军肚、小腹婆等肥胖。</p></li></ul><ul class=\" list-paddingleft-2\" style=\"margin-bottom: 30px; width: 839.797px; padding: 0px; white-space: normal; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><li><p>适用范围</p></li><li><p>唇部、背部、胸部、肩部、腿部、比基尼区域</p></li></ul><p><br/></p>', '9', '0', '0', null, '2017-11-16 17:06:11', '2017-11-16 17:06:11', null);
INSERT INTO `articles` VALUES ('28', '你的眼睛是否过度疲劳？', '/images/1510825048946.jpg', '平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”....', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; 平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显示，我国手机上网用户达到5亿。那么，我们该如何解救被视屏绑架的眼睛？本期特邀北京大学人民医院眼科钱彤医生，教大家如何科学护眼。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;钱医生说：“据不完全统计，中小学生的近视人群达到80%以上，眼睛劳损以及近视问题已经低龄化。”在2014年谷歌发布的中国智能手机使用情况调查报告中，智能手机几乎出现在所有的生活场景中：在家使用手机的人最多，高达94%；其次就是公共交通工具上，达到89%；餐馆和工作场合的比例一样高，为86%。眼睛疲劳跟长时间视屏关系很大。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上面的数据无疑表明了当代人对手机的依赖，这是很可怕的。作为20 世纪最伟大的产物之一，手机也让眼睛的疲劳程度翻倍。手机屏幕的光线和眼睛与手机过近的距离，让眼肌的调节能力退化，使眼睛常处在高度紧张的状态下，非常易于疲劳。</p><p><br/></p>', '12', '0', '0', null, '2017-11-16 17:37:28', '2017-11-17 17:51:33', null);
INSERT INTO `articles` VALUES ('29', '过度疲劳？', '/images/1510825066996.jpg', '平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”..', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; 平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显示，我国手机上网用户达到5亿。那么，我们该如何解救被视屏绑架的眼睛？本期特邀北京大学人民医院眼科钱彤医生，教大家如何科学护眼。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p><br/></p>', '12', '0', '0', null, '2017-11-16 17:37:46', '2017-11-17 17:51:40', null);
INSERT INTO `articles` VALUES ('30', '头部大图', '/images/1510881441796.jpg', null, null, '15', '0', '100', null, '2017-11-17 09:17:21', '2017-11-17 09:17:21', null);
INSERT INTO `articles` VALUES ('31', '恒久美美雕·恒久时尚隆鼻', null, '抚平6大鼻型问题', null, '15', '0', '200', null, '2017-11-17 09:19:33', '2017-11-17 09:19:33', null);
INSERT INTO `articles` VALUES ('32', '鞍鼻', '/images/1510881603364.png', '鼻部凹陷呈马鞍型，形成矮鼻的假象，使面部比例失调', null, '31', '0', '0', null, '2017-11-17 09:20:03', '2017-11-17 09:20:03', null);
INSERT INTO `articles` VALUES ('33', '歪鼻', '/images/1510881620633.png', '先天或者外伤等原因导致鼻梁偏离中线部位', null, '31', '0', '0', null, '2017-11-17 09:20:20', '2017-11-17 09:20:20', null);
INSERT INTO `articles` VALUES ('34', '设计理念', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 60px; font-size: 26px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: right; white-space: normal; \">鼻背直线、鼻小柱直线、</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 60px; font-size: 26px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: right; white-space: normal; \">鼻尖圆线、鼻翼圆线、鼻眼双侧反C圆线的<span style=\"font-size: 36px;\">鼻部美学设计</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 60px; font-size: 26px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: right; white-space: normal;\">展示<span style=\"font-size: 36px;\">立体、简介、明快、飘逸的永恒时尚</span></p><p><br/></p>', '15', '0', '300', null, '2017-11-17 09:24:33', '2017-11-17 10:14:17', null);
INSERT INTO `articles` VALUES ('35', '恒久美美雕·恒久时尚隆鼻', null, '了解4大隆鼻优势', null, '15', '0', '400', null, '2017-11-17 09:25:50', '2017-11-17 09:25:50', null);
INSERT INTO `articles` VALUES ('36', '汇聚韩国经典美鼻精髓', '/images/1510881981450.jpg', '伊美引进的韩式真鼻子整形技术，源自韩国整形界美鼻50年的精髓提炼。注重鼻梁、鼻额角、鼻翼、鼻头、鼻小柱等整体美学设计，遵照三庭五眼等黄金美学比例，钱角度综合设计，一步到位气质美鼻。', null, '35', '0', '0', null, '2017-11-17 09:26:21', '2017-11-17 09:26:21', null);
INSERT INTO `articles` VALUES ('37', '汇聚韩国经典美鼻精髓', '/images/1510882010502.jpg', '伊美引进的韩式真鼻子整形技术，源自韩国整形界美鼻50年的精髓提炼。注重鼻梁、鼻额角、鼻翼、鼻头、鼻小柱等整体美学设计，遵照三庭五眼等黄金美学比例，钱角度综合设计，一步到位气质美鼻。', null, '35', '0', '0', null, '2017-11-17 09:26:50', '2017-11-17 09:26:50', null);
INSERT INTO `articles` VALUES ('38', '恒久美美雕·恒久时尚隆鼻', null, '鼻部修复手术方案', null, '15', '0', '500', '定制我的专属隆鼻方案 >>', '2017-11-17 09:27:21', '2017-11-17 10:32:20', null);
INSERT INTO `articles` VALUES ('39', '鼻子过高或过低', null, '手术方案：通过调整假体厚度、重新排列软骨的方法进行调节和完善。', null, '38', '0', '0', null, '2017-11-17 09:28:53', '2017-11-17 09:28:53', null);
INSERT INTO `articles` VALUES ('40', '鼻子过高或过低', null, '手术方案：通过调整假体厚度、重新排列软骨的方法进行调节和完善。', null, '38', '0', '0', null, '2017-11-17 09:29:03', '2017-11-17 09:29:03', null);
INSERT INTO `articles` VALUES ('41', '恒久美美雕·恒久时尚隆鼻', null, '立体美雕材料隆鼻', null, '15', '0', '600', null, '2017-11-17 09:29:31', '2017-11-17 09:29:31', null);
INSERT INTO `articles` VALUES ('42', '抗张强度能力增强', '/images/1510882197584.jpg', '带刺线体能起固定线体位置作用，而两端又呈伞状分叉，增加了接触面积，避免支撑点张力过大，稳固性更好。', null, '41', '0', '0', null, '2017-11-17 09:29:57', '2017-11-17 09:29:57', null);
INSERT INTO `articles` VALUES ('43', '抗张强度能力增强', '/images/1510882212892.jpg', '带刺线体能起固定线体位置作用，而两端又呈伞状分叉，增加了接触面积，避免支撑点张力过大，稳固性更好。', null, '41', '0', '0', null, '2017-11-17 09:30:12', '2017-11-17 09:30:12', null);
INSERT INTO `articles` VALUES ('44', '恒久美美雕·恒久时尚隆鼻', '/images/1510882351685.jpg', '南充医疗美容医院院长', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal;\">中国医疗美容整形协会会员</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; \">国家认证整形外科副主任</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; \">香港依美医疗美容集团总裁</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; \">“恒久美美雕”医疗美容系列项目创始人</p><p><br/></p>', '15', '0', '700', '徐海', '2017-11-17 09:32:31', '2017-11-17 10:39:53', null);
INSERT INTO `articles` VALUES ('45', '资质', null, '副主任医师以上级别或,\r\n知名学府教授', null, '44', '0', '0', null, '2017-11-17 09:33:28', '2017-11-17 10:51:43', null);
INSERT INTO `articles` VALUES ('46', '技术', null, '专业细致手法，拥有,\r\n卓越的审美观', null, '44', '0', '0', null, '2017-11-17 09:33:45', '2017-11-17 10:51:49', null);
INSERT INTO `articles` VALUES ('47', '资历', null, '20年以上临床经验，每月,\r\n手术不少于20台', null, '44', '0', '0', null, '2017-11-17 09:33:56', '2017-11-17 10:52:07', null);
INSERT INTO `articles` VALUES ('48', '学术', null, '定期主持或参加鼻整形,\r\n学术研讨会', null, '44', '0', '0', null, '2017-11-17 09:34:06', '2017-11-17 10:52:13', null);
INSERT INTO `articles` VALUES ('49', '恒久美美雕·恒久时尚隆鼻', null, '真人蜕变之旅', null, '15', '0', '800', null, '2017-11-17 09:35:29', '2017-11-17 09:36:09', null);
INSERT INTO `articles` VALUES ('50', '恒久美美雕·恒久时尚隆鼻', null, '关于隆鼻猜你想问', null, '15', '0', '900', '不再犹豫，我要隆鼻 >>', '2017-11-17 09:36:23', '2017-11-17 11:10:56', null);
INSERT INTO `articles` VALUES ('51', '你的眼睛是否过度疲劳？', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; 平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显示，我国手机上网用户达到5亿。那么，我们该如何解救被视屏绑架的眼睛？本期特邀北京大学人民医院眼科钱彤医生，教大家如何科学护眼。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;钱医生说：“据不完全统计，中小学生的近视人群达到80%以上，眼睛劳损以及近视问题已经低龄化。”在2014年谷歌发布的中国智能手机使用情况调查报告中，智能手机几乎出现在所有的生活场景中：在家使用手机的人最多，高达94%；其次就是公共交通工具上，达到89%；餐馆和工作场合的比例一样高，为86%。眼睛疲劳跟长时间视屏关系很大。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上面的数据无疑表明了当代人对手机的依赖，这是很可怕的。作为20 世纪最伟大的产物之一，手机也让眼睛的疲劳程度翻倍。手机屏幕的光线和眼睛与手机过近的距离，让眼肌的调节能力退化，使眼睛常处在高度紧张的状态下，非常易于疲劳。</p><p><br/></p>', '50', '0', '0', null, '2017-11-17 09:37:52', '2017-11-17 09:37:52', null);
INSERT INTO `articles` VALUES ('52', '你的眼睛是否过度2？', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显示，我国手机上网用户达到5亿。那么，我们该如何解救被视屏绑架的眼睛？本期特邀北京大学人民医院眼科钱彤医生，教大家如何科学护眼。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;钱医生说：“据不完全统计，中小学生的近视人群达到80%以上，眼睛劳损以及近视问题已经低龄化。”在2014年谷歌发布的中国智能手机使用情况调查报告中，智能手机几乎出现在所有的生活场景中：在家使用手机的人最多，高达94%；其次就是公共交通工具上，达到89%；餐馆和工作场合的比例一样高，为86%。眼睛疲劳跟长时间视屏关系很大。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上面的数据无疑表明了当代人对手机的依赖，这是很可怕的。作为20 世纪最伟大的产物之一，手机也让眼睛的疲劳程度翻倍。手机屏幕的光线和眼睛与手机过近的距离，让眼肌的调节能力退化，使眼睛常处在高度紧张的状态下，非常易于疲劳。</p><p><br/></p>', '50', '0', '0', null, '2017-11-17 09:38:07', '2017-11-17 09:38:15', null);
INSERT INTO `articles` VALUES ('53', '做了割双眼皮和开内眼角', null, '妮阳　　37岁职业：家庭主妇,\r\n蝶变项目：高贵飘逸眼,\r\n医生名字：陈秋思,\r\n手术日期：2016年11月', '<p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">单眼皮往往让人眼神呆滞、脸部寡淡，而且显得像小孩子一点都不成熟，除此之外单眼皮往往伴随着内眦现象，所以去医院做了眼综合整形手术，包括割双眼皮和开内眼角手术两项，想让自己变得好看也变得成熟一点。</span></p><p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><img src=\"/Uploads/image/151081685173397827.jpg\" alt=\"151081685173397827.jpg\"/></span></p>', '49', '0', '0', null, '2017-11-17 09:43:34', '2017-11-17 11:30:23', null);
INSERT INTO `articles` VALUES ('54', '案例对比', null, null, '<p><br/></p><p><img src=\"/Uploads/image/151081685166522216.jpg\"/>&nbsp; &nbsp; &nbsp;<img src=\"http://yimei.com/Uploads/image/151081685173397827.jpg\"/></p><p><br/></p>', '49', '0', '100', null, '2017-11-17 09:45:13', '2017-11-17 09:45:13', null);
INSERT INTO `articles` VALUES ('55', '案例对比2', null, null, '<p><br/></p><p><img src=\"/Uploads/image/151081685166522216.jpg\"/>&nbsp; &nbsp; &nbsp;<img src=\"http://yimei.com/Uploads/image/151081685173397827.jpg\"/></p><p><br/></p>', '49', '0', '100', null, '2017-11-17 09:45:32', '2017-11-17 09:45:32', null);
INSERT INTO `articles` VALUES ('56', '首页轮播图', null, null, null, '1', '0', '0', null, '2017-11-17 15:31:44', '2017-11-17 15:31:44', null);
INSERT INTO `articles` VALUES ('57', '轮播图1', '/images/1510903936456.jpg', null, null, '56', '0', '0', null, '2017-11-17 15:32:16', '2017-11-17 15:32:16', null);
INSERT INTO `articles` VALUES ('58', '轮播图2', '/images/1510903942577.jpg', null, null, '56', '0', '0', null, '2017-11-17 15:32:22', '2017-11-17 15:32:22', null);
INSERT INTO `articles` VALUES ('59', '南充医疗美容医院院长', '/images/1510910616767.png', '徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(162, 20, 23); line-height: 30px; font-size: 18px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: right; white-space: normal;\">中国医疗美容整形协会会员</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(162, 20, 23); line-height: 30px; font-size: 18px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: right; white-space: normal; \">国家认证整形外科副主任</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(162, 20, 23); line-height: 30px; font-size: 18px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: right; white-space: normal; \">香港依美医疗美容集团总裁</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(162, 20, 23); line-height: 30px; font-size: 18px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: right; white-space: normal; \">“恒久美美雕”医疗美容系列项目创始人</p><p><br/></p>', '1', '0', '0', null, '2017-11-17 17:05:40', '2017-11-17 17:26:01', null);
INSERT INTO `articles` VALUES ('60', '==【以下为部分wap内容】', null, null, null, '0', '1', '0', null, '2017-11-18 14:14:12', '2017-11-18 14:14:12', null);
INSERT INTO `articles` VALUES ('61', '首页内容', null, null, null, '60', '1', '0', null, '2017-11-18 14:18:51', '2017-11-18 14:18:51', null);
INSERT INTO `articles` VALUES ('62', '项目', null, null, null, '60', '1', '0', null, '2017-11-18 14:19:08', '2017-11-18 14:19:08', null);
INSERT INTO `articles` VALUES ('63', '高贵飘逸眼', null, null, '<p><img src=\"/Uploads/image/151091118132104492.png\" alt=\"151091118132104492.png\"/></p><p><img src=\"/Uploads/image/151091118149774170.png\"/></p><p><br/></p>', '62', '0', '0', null, '2017-11-18 14:27:12', '2017-11-18 14:27:12', null);
INSERT INTO `articles` VALUES ('64', '项目简介', null, '美国Slimager雅光射频皮肤治疗仪是美国雅光光学美容技术有限公司新推出的一种非手术、非侵入的全新医学美容设备，代表当今医疗美容微创无痛的发展潮流。它利用特定频率40.68MHz的射频波，实现面部祛皱紧肤、身体溶脂塑形的疗效。', null, '63', '0', '0', null, '2017-11-18 14:27:46', '2017-11-18 14:27:46', null);
INSERT INTO `articles` VALUES ('65', '设计理念', null, '美国Slimager雅光射频皮肤治疗仪是美国雅光光学美容技术有限公司新推出的一种非手术、非侵入的全新医学美容设备，代表当今医疗美容微创无痛的发展潮流。它利用特定频率40.68MHz的射频波，实现面部祛皱紧肤、身体溶脂塑形的疗效。', null, '63', '0', '0', null, '2017-11-18 14:27:55', '2017-11-18 14:27:55', null);
INSERT INTO `articles` VALUES ('66', '项目优势', null, '唇部、背部、胸部、肩部、腿部、比基尼区域', null, '63', '0', '0', null, '2017-11-18 14:28:04', '2017-11-18 14:28:04', null);
INSERT INTO `articles` VALUES ('67', '手术方案', null, '唇部、背部、胸部、肩部、腿部、比基尼区域', null, '63', '0', '0', null, '2017-11-18 14:28:13', '2017-11-18 14:28:13', null);
INSERT INTO `articles` VALUES ('68', '成功案例', null, null, null, '63', '0', '100', null, '2017-11-18 14:28:40', '2017-11-18 14:28:40', null);
INSERT INTO `articles` VALUES ('69', '案例1', null, null, '<p><img src=\"/Uploads/image/151081665295611572.jpg\"/></p><p><img src=\"/Uploads/image/151081665278152465.jpg\"/></p><p><br/></p>', '68', '0', '0', null, '2017-11-18 14:29:14', '2017-11-18 14:29:14', null);
INSERT INTO `articles` VALUES ('70', '案例2', null, null, '<p><img src=\"/Uploads/image/151081685166522216.jpg\"/></p><p><img src=\"/Uploads/image/151081667963934326.jpg\"/></p><p><br/></p>', '68', '0', '0', null, '2017-11-18 14:29:28', '2017-11-18 14:29:28', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '王晓晓', '15882162621', null, null, '预约时间：2017-10-29<br>预约项目：高贵飘逸眼<br>留言：测试<br>', '127.0.0.1', '2017-11-16 18:09:01', '2017-11-16 18:09:01', null);

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
  `serial_number` int(11) NOT NULL DEFAULT '0',
  `style_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rcases
-- ----------------------------

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `honor` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtent` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '徐海', '依美整形美容主任', '全身各部位的烧、烫伤瘢痕整形；畸形纠正、容貌恢复；严重烧伤后功能重建;各种外伤所致的疤痕整形及仪表恢复等。', '中国医疗美容整形协会会员,\r\n国家认证整形外科副主任,\r\n香港依美医疗美容集团总裁,\r\n\'恒久美美雕\'医疗美容系列项目创始人', '/images/1510819768314.jpg', '徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。\r\n徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。', '<p></p><p><img src=\"/Uploads/image/151081973260281372.jpg\" title=\"151081973260281372.jpg\"/></p><p><img src=\"/Uploads/image/151081973279928588.jpg\" title=\"151081973279928588.jpg\"/></p><p><img src=\"/Uploads/image/151081973254473876.jpg\" title=\"151081973254473876.jpg\"/></p><p><img src=\"/Uploads/image/151081973214761352.jpg\" title=\"151081973214761352.jpg\"/></p><p><br/></p>', '2017-11-16 16:09:28', '2017-11-17 15:30:25', null);
INSERT INTO `teams` VALUES ('2', '郭美美', '南充医疗美容医院副院长', '全身各部位的烧、烫伤瘢痕整形；畸形纠正、容貌恢复；严重烧伤后功能重建;各种外伤所致的疤痕整形及仪表恢复等。', '中国医疗美容整形协会会员,\r\n国家认证整形外科副主任,\r\n香港依美医疗美容集团总裁,\r\n\'恒久美美雕\'医疗美容系列项目创始人', '/images/1510819943308.jpg', '徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。\r\n徐海教授医科大学毕业后一直从事临床医学工作，先后在医院的皮肤科与烧伤科担任医师，他从事的医学工作一直与人的形象和美有关。徐海教授是一个完美主义者,在他的临床实践中，他感觉到无论他多么的努力，也很难把一个皮肤破损的病人修饰成心中理想的形象，为此他非常痛苦，最终他毅然下决心放弃了医院的临床工作，走向了他心中的理想，创造完美形象的医疗美容之路。', '<p><img src=\"/Uploads/image/151081973279928588.jpg\"/></p><p><img src=\"/Uploads/image/151081973260281372.jpg\"/></p><p><img src=\"/Uploads/image/151081973254473876.jpg\"/></p><p><br/></p>', '2017-11-16 16:12:23', '2017-11-16 16:12:23', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$YDh6gHpb9kzuerQn0Mk9xeeQlXfBpkPgteEF7vsL9Ff70QzmIWwH2', null, null, null, null);
