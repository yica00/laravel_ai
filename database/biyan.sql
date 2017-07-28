/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : biyan

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-28 17:25:34
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
  `introduce` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtent` text COLLATE utf8mb4_unicode_ci,
  `pid` int(11) NOT NULL,
  `is_nav` tinyint(4) NOT NULL DEFAULT '1',
  `serial_number` int(11) NOT NULL DEFAULT '0',
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', null, '2017-07-28 09:01:28', '2017-07-28 09:25:47', null);
INSERT INTO `articles` VALUES ('2', '杨氏鼻炎', null, null, null, '0', '1', '0', null, '2017-07-28 09:02:01', '2017-07-28 09:25:47', null);
INSERT INTO `articles` VALUES ('3', '特色治疗', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">成都华西医院（华西医院）锦江春色来天地玉垒浮云变古今在历史文化名城成都市锦江万里桥头有<br/>一座闻名遐迩的医学城她就是四川大学华西临床医学院/华西医院。<br/>成都华西医院追溯历史起源于由美国英国加拿大等国的基督教会年在成都创建的仁济存仁医院<br/>年华西协合大学建立医科将其作为教学医院年抗战爆发中央大学金陵大学金陵女子文理学院燕京大学齐鲁大学内迁<br/>成都与华西协合大学联合办学办医是时华西坝大师云集名家汇萃盛况空前年月组建“华大中大齐大三大学联合医院”<br/>年华西协合大学新医院在现址建成简称大学医院或华西医院</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">成都华西医院（华西医院）锦江春色来天地玉垒浮云变古今在历史文化名城成都市锦江万里桥头有<br/>一座闻名遐迩的医学城她就是四川大学华西临床医学院/华西医院。<br/>成都华西医院追溯历史起源于由美国英国加拿大等国的基督教会年在成都创建的仁济存仁医院<br/>年华西协合大学建立医科将其作为教学医院年抗战爆发中央大学金陵大学金陵女子文理学院燕京大学齐鲁大学内迁<br/>成都与华西协合大学联合办学办医是时华西坝大师云集名家汇萃盛况空前年月组建“华大中大齐大三大学联合医院”<br/>年华西协合大学新医院在现址建成简称大学医院或华西医院</p><p><br/></p>', '0', '1', '0', null, '2017-07-28 09:02:37', '2017-07-28 10:32:00', null);
INSERT INTO `articles` VALUES ('4', '祖传医师', '/images/1501214313613.png', '杨氏家族第192代传人,\r\n中国神经科学学会神经损伤与修复分会主任委员,\r\n中华医学会神经外科分会常委兼神经创伤学组组长,\r\n北京市医师协会神经外科专家委员会副主任委员', null, '0', '1', '0', '每周一下午，周四上午', '2017-07-28 09:02:45', '2017-07-28 17:00:34', null);
INSERT INTO `articles` VALUES ('5', '成功案例', null, null, null, '0', '1', '0', null, '2017-07-28 09:02:55', '2017-07-28 09:25:47', null);
INSERT INTO `articles` VALUES ('6', '保养须知', null, null, null, '0', '1', '0', null, '2017-07-28 09:03:07', '2017-07-28 09:25:47', null);
INSERT INTO `articles` VALUES ('7', '联系我们', null, null, null, '0', '1', '0', null, '2017-07-28 09:03:24', '2017-07-28 09:25:47', null);
INSERT INTO `articles` VALUES ('8', '医院简介', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">成都华西医院（华西医院）锦江春色来天地玉垒浮云变古今在历史文化名城成都市锦江万里桥头有<br/>一座闻名遐迩的医学城她就是四川大学华西临床医学院/华西医院。<br/>成都华西医院追溯历史起源于由美国英国加拿大等国的基督教会年在成都创建的仁济存仁医院<br/>年华西协合大学建立医科将其作为教学医院年抗战爆发中央大学金陵大学金陵女子文理学院燕京大学齐鲁大学内迁<br/>成都与华西协合大学联合办学办医是时华西坝大师云集名家汇萃盛况空前年月组建“华大中大齐大三大学联合医院”<br/>年华西协合大学新医院在现址建成简称大学医院或华西医院</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; white-space: normal; background-color: rgb(255, 255, 255);\">成都华西医院（华西医院）锦江春色来天地玉垒浮云变古今在历史文化名城成都市锦江万里桥头有<br/>一座闻名遐迩的医学城她就是四川大学华西临床医学院/华西医院。<br/>成都华西医院追溯历史起源于由美国英国加拿大等国的基督教会年在成都创建的仁济存仁医院<br/>年华西协合大学建立医科将其作为教学医院年抗战爆发中央大学金陵大学金陵女子文理学院燕京大学齐鲁大学内迁<br/>成都与华西协合大学联合办学办医是时华西坝大师云集名家汇萃盛况空前年月组建“华大中大齐大三大学联合医院”<br/>年华西协合大学新医院在现址建成简称大学医院或华西医院</p><p><br/></p>', '2', '0', '0', null, '2017-07-28 09:08:26', '2017-07-28 10:15:17', null);
INSERT INTO `articles` VALUES ('9', '医院环境', null, null, '<p><img src=\"/Uploads/image/150120420342442245.jpg\" title=\"150120420342442245.jpg\"/></p><p><img src=\"/Uploads/image/150120420325621122.jpg\" title=\"150120420325621122.jpg\"/></p><p><img src=\"/Uploads/image/150120420393155200.jpg\" title=\"150120420393155200.jpg\"/></p><p><img src=\"/Uploads/image/150120420328491342.jpg\" title=\"150120420328491342.jpg\"/></p><p><img src=\"/Uploads/image/150120420311187402.jpg\" title=\"150120420311187402.jpg\"/></p><p><img src=\"/Uploads/image/150120420325621122.jpg\" alt=\"150120420325621122.jpg\"/></p>', '2', '0', '0', null, '2017-07-28 09:10:35', '2017-07-28 09:25:47', null);
INSERT INTO `articles` VALUES ('10', '臀部贴墙法', '/images/1501209188354.jpg', '躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀</span></p>', '3', '0', '0', null, '2017-07-28 10:33:08', '2017-07-28 16:31:15', null);
INSERT INTO `articles` VALUES ('11', '臀部贴墙法', '/images/1501209212529.jpg', '躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀</span></p>', '3', '0', '0', null, '2017-07-28 10:33:32', '2017-07-28 16:31:22', null);
INSERT INTO `articles` VALUES ('12', '臀部贴墙法', '/images/1501209403935.jpg', '躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与躯干也是90度直角。躺在床上，臀部贴墙，不是背靠墙，而是面朝天花板。脚没地方放了，只好放到墙上去，墙与床成90度直角，那我们的身体下肢与</span></p>', '3', '0', '0', null, '2017-07-28 10:36:43', '2017-07-28 16:31:27', null);
INSERT INTO `articles` VALUES ('13', '医师介绍', null, '脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(232, 242, 255);\">脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。</span></p>', '4', '0', '0', null, '2017-07-28 11:58:57', '2017-07-28 17:16:24', null);
INSERT INTO `articles` VALUES ('14', '擅长领域', null, '脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(232, 242, 255);\">脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。</span></p>', '4', '0', '0', null, '2017-07-28 11:59:10', '2017-07-28 17:16:40', null);
INSERT INTO `articles` VALUES ('15', '张先生', '/images/1501226108503.jpg', '药浴、熏蒸、311窄谱UVB照射治疗', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(232, 242, 255);\">脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损</span></p>', '5', '0', '0', '鼻子、双眼或许喉咙发痒', '2017-07-28 15:15:08', '2017-07-28 15:15:08', null);
INSERT INTO `articles` VALUES ('16', '王先生', '/images/1501226610866.jpg', '药浴、熏蒸、311窄谱UVB照射治疗', '<p><span style=\"color: rgb(102, 102, 102); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(232, 242, 255);\">脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、截瘫、智力障碍、失语等)的治疗。脑瘫，小儿脑瘫，脑发育迟缓、智力低下以及重型脑损伤、脑与脊髓神经损害(创伤、出血、梗塞所致的偏瘫、</span></p>', '5', '0', '0', '鼻子、双眼或许喉咙发痒', '2017-07-28 15:23:30', '2017-07-28 15:23:30', null);
INSERT INTO `articles` VALUES ('17', '公司成功中标昆明•爱尚苑3m/s乘客电梯项目', '/images/1501228154393.jpg', '昆明·爱尚苑电扶梯采购项目招投标活动盛大启幕，业主单位组织评标委员对入围的电扶梯品牌进行了全方位的综合考察和精心比对', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\"><img src=\"/Uploads/image/150120420325621122.jpg\" alt=\"150120420325621122.jpg\"/></span></p>', '6', '0', '0', '1', '2017-07-28 15:49:14', '2017-07-28 15:49:14', null);
INSERT INTO `articles` VALUES ('18', '世界那么大，带你去淘宝2', '/images/1501228207940.jpg', '8月18日，新重庆小商品菜园坝电商配送中心迎来开业盛典新重庆小商品菜园坝电商配送中心迎来开业盛典', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\"><img src=\"/Uploads/image/150120420328491342.jpg\" alt=\"150120420328491342.jpg\"/></span></p>', '6', '0', '0', '1', '2017-07-28 15:50:07', '2017-07-28 15:50:07', null);
INSERT INTO `articles` VALUES ('19', '世界那么大，带你去淘宝2', '/images/1501228254964.jpg', '8月18日，新重庆小商品菜园坝电商配送中心迎来开业盛典新重庆小商品菜园坝电商配送中心迎来开业盛典', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">新设备到货后，由设备管理部门，会同购置单位，使用单位(或接收单位)进行开箱验收，检查设备在运输过程中有无损坏、丢失，附件、随机备件。专用工具、技术资料等是否与合同。装箱单相符，并填写设备开箱验收单，存入设备档案，若有缺损及不合格现象应立即向有关单位交涉处理，索取或索赔。</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\"></span></p><p><img src=\"/Uploads/image/150120420393155200.jpg\"/></p><p><img src=\"/Uploads/image/150120420342442245.jpg\"/></p><p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\"><br/></span><br/></p>', '6', '0', '0', null, '2017-07-28 15:50:54', '2017-07-28 15:50:54', null);
INSERT INTO `articles` VALUES ('20', '轮播图', null, null, null, '1', '0', '0', null, '2017-07-28 16:22:35', '2017-07-28 16:22:35', null);
INSERT INTO `articles` VALUES ('21', '轮播图1', '/images/1501230208530.jpg', null, null, '20', '0', '0', null, '2017-07-28 16:23:28', '2017-07-28 16:23:28', null);
INSERT INTO `articles` VALUES ('22', '轮播图2', '/images/1501230216638.jpg', null, null, '20', '0', '0', null, '2017-07-28 16:23:36', '2017-07-28 16:23:36', null);
INSERT INTO `articles` VALUES ('23', '轮播图3', '/images/1501230223506.jpg', null, null, '20', '0', '0', null, '2017-07-28 16:23:43', '2017-07-28 16:23:43', null);
INSERT INTO `articles` VALUES ('24', '首页简介', null, null, '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">成都华西医院（华西医院）锦江春色来天地玉垒浮云变古今在历史文化名城成都市锦江万里桥头有</span><br/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">一座闻名遐迩的医学城她就是四川大学华西临床医学院/华西医院。</span><br/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">成都华西医院追溯历史起源于由美国英国加拿大等国的基督教会年在成都创建的仁济存仁医院</span><br/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">年华西协合大学建立医科将其作为教学医院年抗战爆发中央大学金陵大学金陵女子文理学院燕京大学齐鲁大学内迁</span><br/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">成都与华西协合大学联合办学办医是时华西坝大师云集名家汇萃盛况空前年月组建“华大中大齐大三大学联合医院”</span><br/><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; text-align: center; background-color: rgb(255, 255, 255);\">年华西协合大学新医院在现址建成简称大学医院或华西医院</span></p>', '1', '0', '0', null, '2017-07-28 16:28:46', '2017-07-28 16:28:46', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$kjDSJpPcooa3M80.dxk8DO3PNfHka1cqCBgTR7vlDXNdPCsJWaBlu', null, null, null, null);
