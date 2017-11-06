/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : jiaohuan

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-06 18:32:56
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
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '��վ��ҳ', null, null, null, '0', '1', '0', '/', '2017-11-03 17:01:10', '2017-11-03 17:01:10', null);
INSERT INTO `articles` VALUES ('2', 'װ�ް���', null, null, null, '0', '1', '0', '/case', '2017-11-03 17:01:57', '2017-11-03 17:01:57', null);
INSERT INTO `articles` VALUES ('3', '�����Ŷ�', null, null, null, '0', '1', '0', '/team', '2017-11-03 17:05:55', '2017-11-03 17:05:55', null);
INSERT INTO `articles` VALUES ('4', 'Ʒ�ʹ���', null, null, null, '0', '1', '0', '/quality', '2017-11-03 17:07:38', '2017-11-03 17:07:38', null);
INSERT INTO `articles` VALUES ('5', '�ڽ�����', null, null, null, '0', '1', '0', '/project', '2017-11-03 17:08:14', '2017-11-03 17:08:14', null);
INSERT INTO `articles` VALUES ('6', 'װ��֪ʶ', null, null, null, '0', '1', '0', '/guide', '2017-11-03 17:08:44', '2017-11-03 17:08:44', null);
INSERT INTO `articles` VALUES ('7', '�Żݻ', null, null, null, '0', '1', '0', '/news', '2017-11-03 17:09:01', '2017-11-03 17:09:01', null);
INSERT INTO `articles` VALUES ('8', '��������', null, null, null, '0', '1', '0', '/about', '2017-11-03 17:09:25', '2017-11-03 17:09:25', null);
INSERT INTO `articles` VALUES ('9', '����Ŷ�', null, null, null, '3', '1', '0', '/team/design', '2017-11-03 17:17:57', '2017-11-03 17:17:57', null);
INSERT INTO `articles` VALUES ('10', '���̼���', null, null, null, '3', '1', '0', '/team/supervise', '2017-11-03 17:20:26', '2017-11-03 17:20:26', null);
INSERT INTO `articles` VALUES ('11', 'Ʒ�ʼ�װ', null, null, '<p><span style=\"color: rgb(103, 106, 109); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px; background-color: rgb(173, 255, 47);\">��Ʒ�ʼ�װ</span></p>', '4', '1', '0', null, '2017-11-03 17:21:10', '2017-11-06 17:01:59', null);
INSERT INTO `articles` VALUES ('12', 'ʩ������', null, null, null, '4', '1', '0', null, '2017-11-03 17:21:19', '2017-11-03 17:21:19', null);
INSERT INTO `articles` VALUES ('13', '������ϵ', null, null, null, '4', '1', '0', null, '2017-11-03 17:21:31', '2017-11-03 17:21:31', null);
INSERT INTO `articles` VALUES ('14', '��������', null, null, null, '4', '1', '0', null, '2017-11-03 17:21:40', '2017-11-03 17:21:40', null);
INSERT INTO `articles` VALUES ('15', '��������', null, null, null, '4', '1', '0', null, '2017-11-03 17:21:51', '2017-11-03 17:21:51', null);
INSERT INTO `articles` VALUES ('16', 'װ��֪ʶ', null, null, null, '6', '1', '0', null, '2017-11-03 17:22:35', '2017-11-03 17:22:35', null);
INSERT INTO `articles` VALUES ('17', '���֪ʶ', null, null, null, '6', '1', '0', null, '2017-11-03 17:22:43', '2017-11-03 17:22:43', null);
INSERT INTO `articles` VALUES ('18', '����֪ʶ', null, null, null, '6', '1', '0', null, '2017-11-03 17:22:51', '2017-11-03 17:22:51', null);
INSERT INTO `articles` VALUES ('19', 'װ�޷�ˮ', null, null, null, '6', '1', '0', null, '2017-11-03 17:22:59', '2017-11-03 17:22:59', null);
INSERT INTO `articles` VALUES ('20', '��˾���', null, null, null, '8', '1', '0', '/about', '2017-11-03 17:24:53', '2017-11-03 17:24:53', null);
INSERT INTO `articles` VALUES ('21', '��ҵ�Ļ�', null, null, null, '8', '1', '0', '/about/culture', '2017-11-03 17:25:27', '2017-11-03 17:25:27', null);
INSERT INTO `articles` VALUES ('22', '��������', null, null, null, '8', '1', '0', '/about/honor', '2017-11-03 17:26:14', '2017-11-03 17:26:14', null);
INSERT INTO `articles` VALUES ('23', '��ϵ��ʽ', null, null, null, '8', '1', '0', '/about/contact', '2017-11-03 17:26:36', '2017-11-03 17:26:36', null);
INSERT INTO `articles` VALUES ('24', '���߱���', null, null, null, '8', '1', '0', '/about/offer', '2017-11-03 17:27:13', '2017-11-03 17:27:13', null);
INSERT INTO `articles` VALUES ('25', '����', null, null, null, '2', '0', '0', null, '2017-11-06 11:04:16', '2017-11-06 11:04:48', null);
INSERT INTO `articles` VALUES ('26', '���', null, null, null, '2', '0', '0', null, '2017-11-06 11:04:20', '2017-11-06 11:04:20', null);
INSERT INTO `articles` VALUES ('27', '����', null, null, null, '2', '0', '0', null, '2017-11-06 11:04:24', '2017-11-06 11:20:25', '2017-11-06 11:20:25');
INSERT INTO `articles` VALUES ('28', '����', null, null, null, '25', '0', '0', null, '2017-11-06 11:05:17', '2017-11-06 11:05:17', null);
INSERT INTO `articles` VALUES ('29', '����', null, null, null, '25', '0', '0', null, '2017-11-06 11:05:22', '2017-11-06 11:05:22', null);
INSERT INTO `articles` VALUES ('30', '�ִ���', null, null, null, '26', '0', '0', null, '2017-11-06 11:05:36', '2017-11-06 11:05:36', null);
INSERT INTO `articles` VALUES ('31', '��ŷ', null, null, null, '26', '0', '0', null, '2017-11-06 11:05:41', '2017-11-06 11:05:41', null);
INSERT INTO `articles` VALUES ('32', '¥�̣�����ͥ԰  92�O ��ʽ�����', '/images/1509958293817.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ</p><p><br/></p>', '5', '0', '0', null, '2017-11-06 16:51:33', '2017-11-06 16:51:33', null);
INSERT INTO `articles` VALUES ('33', '�ھ���������Լʮ�������ׯ', '/images/1509958317743.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ</p><p>22</p>', '5', '0', '0', null, '2017-11-06 16:51:57', '2017-11-06 16:51:57', null);
INSERT INTO `articles` VALUES ('34', '԰Ϊ������ �ƶ�����ũҵ���·�չ', '/images/1509960152273.jpg', '���ճ��ļҾ�װ���У�����������׼���������ճ��ļҾ�װ���У�����������׼��װ�޵�ҵ��������˵����װװ�ޱ���', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp; &nbsp; &nbsp; &nbsp; �ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ��</p><p><br/></p>', '17', '0', '0', null, '2017-11-06 17:22:32', '2017-11-06 17:22:32', null);
INSERT INTO `articles` VALUES ('35', '����1', '/images/1509960534101.jpg', '����1����', '<p>����1����</p>', '7', '0', '0', null, '2017-11-06 17:28:54', '2017-11-06 17:28:54', null);
INSERT INTO `articles` VALUES ('36', '����1', '/images/1509961295687.jpg', null, null, '22', '0', '0', null, '2017-11-06 17:41:35', '2017-11-06 17:41:35', null);
INSERT INTO `articles` VALUES ('37', '����2', '/images/1509961300471.jpg', null, null, '22', '0', '0', null, '2017-11-06 17:41:40', '2017-11-06 17:41:40', null);
INSERT INTO `articles` VALUES ('38', '����ͼ', null, null, null, '1', '0', '0', null, '2017-11-06 18:25:14', '2017-11-06 18:25:14', null);
INSERT INTO `articles` VALUES ('39', '����ͼ1', '/images/1509964009408.jpg', null, null, '38', '0', '0', null, '2017-11-06 18:26:49', '2017-11-06 18:26:49', null);
INSERT INTO `articles` VALUES ('40', '����ͼ2', '/images/1509964015663.jpg', null, null, '38', '0', '0', null, '2017-11-06 18:26:55', '2017-11-06 18:26:55', null);

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
INSERT INTO `messages` VALUES ('1', '��С��', '15882162621', null, null, 'С����д����<br>Ԥ�㣺34232<br>�����33<br>������ִ���', '127.0.0.1', '2017-11-06 18:01:41', '2017-11-06 18:01:41', null);

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
INSERT INTO `migrations` VALUES ('7', '2017_07_18_144831_create_order_lists_table', '1');
INSERT INTO `migrations` VALUES ('9', '2017_11_06_110957_create_rcases_table', '2');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of rcases
-- ----------------------------
INSERT INTO `rcases` VALUES ('1', '��԰���94ƽ����������������', '/images/1509952345767.jpg', '<p><img src=\"/Uploads/image/150995193511727905.jpg\" title=\"150995193511727905.jpg\" alt=\"cp_9.jpg\"/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px;  line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���</p>', '0', '30', '28', '1', '2017-11-06 15:06:57', '2017-11-06 15:06:57', null);
INSERT INTO `rcases` VALUES ('2', '��԰���94ƽ��', '/images/1509952345767.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p><br/></p>', '0', '31', '29', '1', '2017-11-06 15:09:25', '2017-11-06 15:09:25', null);
INSERT INTO `rcases` VALUES ('3', '�׽���������θ������Ӱ��', '/images/1509952345767.jpg', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(255, 255, 255); line-height: 24px; font-family: ΢���ź�, Verdana, Arial, Helvetica, sans-serif; white-space: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ھ���������Լʮ�������ׯ����һƬԼռ��327Ķ��ʷ�������������ִ�ũҵʾ��԰�����ｻͨ��������̬�������ã���԰������������õ����ľ�������������ȼ��⽻���ӳ��ӵ�зḻ��ũҵ�����������Դ��29�գ�ȫ��ý�������вɷ��ż���������������ִ�ũҵ��������</p><p><br/></p>', '0', '30', '28', '3', '2017-11-06 15:12:25', '2017-11-06 15:12:25', null);

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
  `wx_img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `cate` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '��С��', '��ϯ���ʦ', '�Ĵ���ѧ', '�ִ���Լ ��ʽ ŷʽ ��ʽ ���к�', '���Դ�����ϸ�ڳɾ�Ʒ��', '6', '/images/1509941003699.jpg', '/images/1509941003130.jpg', '����ʨ�Ӻ�������������졢������ ���ϻ㡢��ï����ɽ������Ҷ����Ź�ɫ�����غ���8������������㳡�������ǡ��ҵ����ӡ����۾���׿���������Ͽ���������ɭ�֡����������ǡ������ٺϻ�԰�����ݹ��ʹ㳡���������ʹ㳡����Ȫ���⻪ͥ�������ǡ��ھӡ������䱦���ꡢ�춼������Է�����𱱿������ſ�ȸ�ǡ�', '', '2017-11-06 12:03:23', '2017-11-06 13:58:10', null, '1');
INSERT INTO `teams` VALUES ('2', '������', '���ʦ', '�Ĵ���ѧ', '�ִ���Լ ��ʽ ŷʽ ��ʽ ���к�', '���Դ�����ϸ�ڳɾ�Ʒ��', '6', '/images/1509956062725.jpg', '/images/1509956062513.jpg', '����ʨ�Ӻ�������������졢������ ���ϻ㡢��ï����ɽ������Ҷ����Ź�ɫ�����غ���8������������㳡�������ǡ��ҵ����ӡ����۾���׿���������Ͽ���������ɭ�֡����������ǡ������ٺϻ�԰�����ݹ��ʹ㳡���������ʹ㳡����Ȫ���⻪ͥ�������ǡ��ھӡ������䱦���ꡢ�춼������Է�����𱱿������ſ�ȸ�ǡ�', '', '2017-11-06 16:14:22', '2017-11-06 16:14:22', null, '1');
INSERT INTO `teams` VALUES ('3', '�����', '���Ƽ���', null, null, '���Դ�����ϸ�ڳɾ�Ʒ��', '2', null, '/images/1509957469871.jpg', '����ʨ�Ӻ�������������졢������ ���ϻ�', '', '2017-11-06 16:37:49', '2017-11-06 16:38:05', null, '2');

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$YNGbZ8mxGQzlansFbAoGrOk5HB3FZkvfYfGZySLs5ziICehTMYy1.', null, null, null, null);
