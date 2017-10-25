/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : suancaiji

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-10-25 14:01:22
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
  `serial_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2017-10-24 15:28:10', '2017-10-24 15:35:06', null);
INSERT INTO `articles` VALUES ('2', '品牌故事', null, null, null, '0', '1', '0', '/about', '2017-10-24 15:28:27', '2017-10-24 15:35:28', null);
INSERT INTO `articles` VALUES ('3', '美味菜单', null, null, null, '0', '1', '0', '/menu', '2017-10-24 15:28:46', '2017-10-24 15:36:02', null);
INSERT INTO `articles` VALUES ('4', '门店风采', null, null, null, '0', '1', '0', '/store', '2017-10-24 15:29:17', '2017-10-24 15:36:40', null);
INSERT INTO `articles` VALUES ('5', '优惠活动', null, null, null, '0', '1', '0', '/active', '2017-10-24 15:29:29', '2017-10-24 15:37:16', null);
INSERT INTO `articles` VALUES ('6', '招商加盟', null, null, null, '0', '1', '0', '/join', '2017-10-24 15:29:50', '2017-10-24 15:37:34', null);
INSERT INTO `articles` VALUES ('7', '营养健康', null, null, null, '0', '1', '0', '/news', '2017-10-24 15:30:06', '2017-10-24 15:37:56', null);
INSERT INTO `articles` VALUES ('8', '联系我们', null, null, null, '0', '1', '0', '/contact', '2017-10-24 15:30:16', '2017-10-24 15:38:13', null);
INSERT INTO `articles` VALUES ('9', '品牌简介', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>李记酸菜鸡是一家从事铝单板幕墙，铝质家装集成吊顶、室内外工程吊顶，外墙保温装饰一体板、彩涂铝卷系列产品研发、生产、销售与应用技术指导的国内大型企业。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>公司创立于1995年5月，制造本部位于四川省安岳工业园区，占地面积150余亩，注册资金3900万元，固定资产2.78亿元，年销售收入达5亿元人民币以上。企业设备精良，工艺先进：拥有进口意大利数控钣金加工生产线22台（套）、国内先进自动冲压生产线四条、日本兰氏静电金属表面喷涂生产线两条、1250mm全自动数控铝板彩涂、覆膜生产线一条、外墙保温装饰一体板产品加工生产线46台（套）；可年产各类铝单板幕墙产品80万平方米、保温装饰一体板产品120万平方米、室内外工程吊顶产品500万平方米；家装集成吊顶产品200万平方米、彩涂与覆膜铝卷10000吨；企业经过22年的发展，目前已成为中国最具影响力和竞争力的大型金属装饰建筑材料企业之一。</p><p><br/></p>', '2', '1', '0', '/about', '2017-10-24 15:38:49', '2017-10-24 15:51:56', null);
INSERT INTO `articles` VALUES ('10', '品牌文化', null, null, '<p style=\"color:red;font-size:24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>李记酸菜鸡是一家从事铝单板幕墙，铝质家装集成吊顶、室内外工程吊顶，外墙保温装饰一体板、彩涂铝卷系列产品研发、生产、销售与应用技术指导的国内大型企业。</p><p><br/>\r\n &nbsp; &nbsp;</p><p>公司创立于1995年5月，制造本部位于四川省安岳工业园区，占地面积150余亩，注册资金3900万元，固定资产2.78亿元，年销售收入达5亿元人民币以上。企业设备精良，工艺先进：拥有进口意大利数控钣金加工生产线22台（套）、国内先进自动冲压生产线四条、日本兰氏静电金属表面喷涂生产线两条、1250mm全自动数控铝板彩涂、覆膜生产线一条、外墙保温装饰一体板产品加工生产线46台（套）；可年产各类铝单板幕墙产品80万平方米、保温装饰一体板产品120万平方米、室内外工程吊顶产品500万平方米；家装集成吊顶产品200万平方米、彩涂与覆膜铝卷10000吨；企业经过22年的发展，目前已成为中国最具影响力和竞争力的大型金属装饰建筑材料企业之一。</p><p><br/></p>', '2', '1', '0', '/about/culture', '2017-10-24 15:39:15', '2017-10-24 15:52:03', null);
INSERT INTO `articles` VALUES ('11', '锦云会所', null, '地处拱墅区信义坊(大舞台斜对面二楼),装修雅致,干净卫生,有超大的落地玻璃,能够感受春天的气息,同时服务态度好,家常菜卫生可口实惠,既能休闲娱乐,又能和三两朋友小坐,是个休闲娱乐的好去处! 棋牌室很一般了，新装修的也没什么特色出来。不过牌还是比较干净的，但是烟雾问题太严重了，四个人抽烟整一房间都乌烟瘴气的，都是没窗的包厢，排烟系统不想想办法的话很难做回头客生意。明天还是杀回老根据地。感觉比较差。', '<p><br/></p><p><img src=\"/Uploads/image/150883248753430175.jpg\" title=\"150883248753430175.jpg\"/></p><p><img src=\"/Uploads/image/150883248758990478.jpg\" title=\"150883248758990478.jpg\"/></p><p><img src=\"/Uploads/image/150883248852197265.jpg\" title=\"150883248852197265.jpg\"/></p><p><br/></p>', '2', '1', '0817-2866062', '/about/brand', '2017-10-24 15:40:55', '2017-10-25 10:05:21', null);
INSERT INTO `articles` VALUES ('12', '美味视频', null, null, null, '2', '1', '0', '/about/video', '2017-10-24 15:41:23', '2017-10-24 15:41:23', null);
INSERT INTO `articles` VALUES ('13', '加盟优势', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显示，我国手机上网用户达到5亿。那么，我们该如何解救被视屏绑架的眼睛？本期特邀北京大学人民医院眼科钱彤医生，教大家如何科学护眼。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;钱医生说：“据不完全统计，中小学生的近视人群达到80%以上，眼睛劳损以及近视问题已经低龄化。”在2014年谷歌发布的中国智能手机使用情况调查报告中，智能手机几乎出现在所有的生活场景中：在家使用手机的人最多，高达94%；其次就是公共交通工具上，达到89%；餐馆和工作场合的比例一样高，为86%。眼睛疲劳跟长时间视屏关系很大。</p><p><br/></p>', '6', '1', '0', null, '2017-10-24 15:42:36', '2017-10-25 10:15:06', null);
INSERT INTO `articles` VALUES ('14', '加盟条件', null, null, null, '6', '1', '0', null, '2017-10-24 15:42:45', '2017-10-24 15:42:45', null);
INSERT INTO `articles` VALUES ('15', '加盟流程', null, null, null, '6', '1', '0', null, '2017-10-24 15:42:54', '2017-10-24 15:42:54', null);
INSERT INTO `articles` VALUES ('16', '加盟申请', null, null, null, '6', '1', '0', '/join/suply', '2017-10-24 15:43:26', '2017-10-24 15:43:26', null);
INSERT INTO `articles` VALUES ('17', '一碗冒菜引发的情侣争吵', '/images/1508834893369.jpg', null, '<p style=\"text-align: center;\"><iframe frameborder=\"0\" width=\"640\" height=\"498\" src=\"https://v.qq.com/iframe/player.html?vid=a0024viupvw&tiny=0&auto=0\" allowfullscreen=\"\"></iframe></p><p><br/></p><p>测试文字 &nbsp;&nbsp;测试文字测试文字</p>', '12', '0', '0', null, '2017-10-24 16:32:38', '2017-10-24 17:32:49', null);
INSERT INTO `articles` VALUES ('18', '视频2', '/images/1508834884878.jpg', null, '<p style=\"text-align: center;\"><iframe frameborder=\"0\" width=\"640\" height=\"498\" src=\"https://v.qq.com/iframe/player.html?vid=a0024viupvw&tiny=0&auto=0\" allowfullscreen=\"\"></iframe></p><p><br/></p><p>测试文字 &nbsp;&nbsp;测试文字测试文字</p>', '12', '0', '0', null, '2017-10-24 16:47:00', '2017-10-24 17:28:25', null);
INSERT INTO `articles` VALUES ('19', '花溪牛肉', '/images/1508838163904.jpg', null, null, '3', '0', '0', null, '2017-10-24 17:42:43', '2017-10-24 17:42:43', null);
INSERT INTO `articles` VALUES ('20', '酸菜鸡', '/images/1508838181632.jpg', null, null, '3', '0', '0', null, '2017-10-24 17:43:01', '2017-10-24 17:43:01', null);
INSERT INTO `articles` VALUES ('21', '李记酸菜鸡总店', '/images/1508839054770.jpg', '地处拱墅区信义坊(大舞台斜对面二楼),装修雅致,干净卫生,有超大的落地玻璃,能够感受春天的气息,同时服务态度好,家常菜卫生可口实惠,既能休闲娱乐,又能和三两朋友小坐,是个休闲娱乐的好去处! 棋牌室很一般了，新装修的也没什么特色出来。不过牌还是比较干净的，但是烟雾问题太严重了，四个人抽烟整一房间都乌烟瘴气的，都是没窗的包厢，排烟系统不想想办法的话很难做回头客生意。明天还是杀回老根据地。感觉比较差。', '<p><img src=\"/Uploads/image/150883248852197265.jpg\"/></p><p><img src=\"/Uploads/image/150883248758990478.jpg\"/></p><p><img src=\"/Uploads/image/150883248753430175.jpg\"/></p><p><br/></p>', '4', '0', '0817-1234567', '四川省南充市北湖路376', '2017-10-24 17:57:34', '2017-10-24 17:57:34', null);
INSERT INTO `articles` VALUES ('22', '第一分店', '/images/1508839138718.jpg', '地处拱墅区信义坊(大舞台斜对面二楼),装修雅致,干净卫生,有超大的落地玻璃,能够感受春天的气息,同时服务态度好,家常菜卫生可口实惠,既能休闲娱乐,又能和三两朋友小坐,是个休闲娱乐的好去处! 棋牌室很一般了，新装修的也没什么特色出来。不过牌还是比较干净的，但是烟雾问题太严重了，四个人抽烟整一房间都乌烟瘴气的，都是没窗的包厢，排烟系统不想想办法的话很难做回头客生意。明天还是杀回老根据地。感觉比较差。', '<p><img src=\"/Uploads/image/150883248852197265.jpg\"/></p><p><img src=\"/Uploads/image/150883248758990478.jpg\"/></p><p><br/></p>', '4', '0', '0817-1234567', '四川省南充市北湖路376', '2017-10-24 17:58:58', '2017-10-24 17:58:58', null);
INSERT INTO `articles` VALUES ('23', '李记酸菜鸡首条视频广告正式发布', '/images/1508840638996.jpg', null, '<p>&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '5', '0', '0', null, '2017-10-24 18:23:58', '2017-10-24 18:23:58', null);
INSERT INTO `articles` VALUES ('24', '李记酸菜鸡首条', '/images/1508840734299.jpg', null, '<p>&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '5', '0', '0', null, '2017-10-24 18:25:34', '2017-10-24 18:26:13', null);
INSERT INTO `articles` VALUES ('25', '李记酸菜鸡首条视频广告正式发布', '/images/1508898330246.jpg', null, '<p><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</span></p><p><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</span></span></p>', '7', '0', '0', null, '2017-10-25 10:25:30', '2017-10-25 10:25:30', null);
INSERT INTO `articles` VALUES ('26', '友情链接', null, null, null, '1', '0', '0', null, '2017-10-25 11:00:35', '2017-10-25 11:00:35', null);
INSERT INTO `articles` VALUES ('27', '轮播图', null, null, null, '1', '0', '0', null, '2017-10-25 11:00:43', '2017-10-25 11:00:43', null);
INSERT INTO `articles` VALUES ('28', '李记酸菜鸡加盟', null, null, null, '26', '0', '0', '/', '2017-10-25 11:01:27', '2017-10-25 11:01:27', null);
INSERT INTO `articles` VALUES ('29', '李记酸菜鸡加盟', null, null, null, '26', '0', '0', '/', '2017-10-25 11:01:33', '2017-10-25 11:01:33', null);
INSERT INTO `articles` VALUES ('30', '轮播图1', '/images/1508900527342.jpg', null, null, '27', '0', '0', null, '2017-10-25 11:02:07', '2017-10-25 11:02:07', null);
INSERT INTO `articles` VALUES ('31', '轮播图2', '/images/1508900538197.jpg', null, null, '27', '0', '0', null, '2017-10-25 11:02:18', '2017-10-25 11:02:18', null);
INSERT INTO `articles` VALUES ('32', '轮播图3', '/images/1508900544957.jpg', null, null, '27', '0', '0', null, '2017-10-25 11:02:24', '2017-10-25 11:02:24', null);
INSERT INTO `articles` VALUES ('33', '品牌故事', '/images/1508900671603.jpg', '　　简单、便捷、快速，化繁锁为简化，是我们一直追求的目标! 推崇“快速”简餐，“蜀烩”冒菜以快速，便捷的自选形式，顾客在3-5分钟即可享受到可口美味； First第一 打造“冒菜第一品牌，在同类别的冒菜企业处于第一，以明星提升知名度、大师技术革新，强强联手为契机点，在进入的市场找到自己的领导者位置，塑造优秀的企业形象和服务形象。', null, '1', '0', '0', null, '2017-10-25 11:04:31', '2017-10-25 11:04:31', null);

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

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('5', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('6', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_06_26_154310_create_teams_table', '1');
INSERT INTO `migrations` VALUES ('9', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('10', '2017_07_01_115424_create_car_table', '1');
INSERT INTO `migrations` VALUES ('11', '2017_07_18_144831_create_order_lists_table', '1');

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$Ck.f1u6h7ViqA8gwoAz0W./cLfUg4lrDKWyRs0GjIMA.2A3AhXaYy', null, null, null, null);
