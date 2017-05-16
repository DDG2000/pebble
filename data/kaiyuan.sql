/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : kaiyuan

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-05-16 18:24:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for addons_putong_demo_config
-- ----------------------------
DROP TABLE IF EXISTS `addons_putong_demo_config`;
CREATE TABLE `addons_putong_demo_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT '活动名称',
  `file_id` int(11) NOT NULL COMMENT '活动图片',
  `sub` text NOT NULL COMMENT '活动描述',
  `detail` text NOT NULL COMMENT '活动详情',
  `timerange` text NOT NULL COMMENT '活动时间',
  `remark` text NOT NULL COMMENT '备注',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1:开启0:关闭',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of addons_putong_demo_config
-- ----------------------------
INSERT INTO `addons_putong_demo_config` VALUES ('1', '活动名称', '1', '这里是活动描述', '', '2017-05-01 12:00:00 --- 2017-05-25 11:59:59', '', '1', '2017-05-01 18:25:26', '2017-05-01 20:12:04');
INSERT INTO `addons_putong_demo_config` VALUES ('2', '活动2', '1', '活动描述', '<p>111</p>', '2017-05-01 12:00:00 --- 2017-05-11 11:59:59', '', '1', '2017-05-01 18:37:35', '2017-05-01 20:11:06');

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `group_id` int(11) NOT NULL DEFAULT '1' COMMENT '用户组id',
  `username` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` char(32) NOT NULL COMMENT '用户邮箱',
  `mobile` char(15) NOT NULL DEFAULT '' COMMENT '用户手机',
  `reg_ip` varchar(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `last_login_time` timestamp NULL DEFAULT NULL COMMENT '最后登录时间',
  `last_login_ip` text COMMENT '最后登录IP',
  `status` tinyint(4) DEFAULT '0' COMMENT '用户状态',
  `remark` text NOT NULL COMMENT '备注',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', '1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '296720094@qq.com', '18053449656', '0', '2017-05-16 18:19:51', '127.0.0.1', '1', '1', '0000-00-00 00:00:00', '2017-05-16 18:19:51');
INSERT INTO `admin` VALUES ('2', '2', '1', 'c4ca4238a0b923820dcc509a6f75849b', '1604583867@qq.com', '18538753627', '0', '2017-05-01 18:03:14', '0.0.0.0', '1', '1', '2017-05-01 17:47:46', '2017-05-01 18:03:14');

-- ----------------------------
-- Table structure for analysis
-- ----------------------------
DROP TABLE IF EXISTS `analysis`;
CREATE TABLE `analysis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orders` int(11) NOT NULL,
  `trades` float NOT NULL,
  `registers` int(11) NOT NULL,
  `users` int(11) NOT NULL COMMENT '当天购买人数',
  `date` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of analysis
-- ----------------------------
INSERT INTO `analysis` VALUES ('1', '0', '0', '1', '0', '2017-05-01', '2017-05-01 07:22:28', null);
INSERT INTO `analysis` VALUES ('2', '0', '0', '1', '0', '2017-05-02', '2017-05-02 05:21:32', null);

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL COMMENT '作者',
  `sub` text NOT NULL,
  `content` text NOT NULL,
  `remark` text,
  `visiter` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL COMMENT '1:开启0:关闭',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', '文章功能测试', '2222', '2222', '<p>22222222</p>', '1', '11', '1', '2016-01-05 22:41:14', '2017-03-02 14:52:09');
INSERT INTO `article` VALUES ('2', '2', '2222', '222', '222', '<p>222</p>', '1', '2', '1', '2017-01-14 15:06:18', '2017-03-02 14:52:01');
INSERT INTO `article` VALUES ('3', '1', '121', '12', '122', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0016.gif\"/></p>', '12', '9', '0', '2017-02-17 10:27:38', '2017-05-01 21:29:14');

-- ----------------------------
-- Table structure for article_category
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '上级',
  `name` text NOT NULL COMMENT '类型',
  `status` int(11) NOT NULL COMMENT '1:开启0:关闭',
  `remark` text NOT NULL COMMENT '备注',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='文章类型';

-- ----------------------------
-- Records of article_category
-- ----------------------------
INSERT INTO `article_category` VALUES ('1', '0', '类型1', '1', '1211', '2016-12-09 07:17:30', '2017-05-01 21:17:02');
INSERT INTO `article_category` VALUES ('2', '0', '类型2', '1', '', '2016-12-10 10:18:40', '2017-01-14 09:44:13');
INSERT INTO `article_category` VALUES ('3', '2', '类型3', '1', '233232', '2016-12-11 12:13:00', '2017-03-02 14:51:21');
INSERT INTO `article_category` VALUES ('4', '1', '222234', '1', '34444', '2017-03-02 14:50:51', '2017-03-02 14:51:12');

-- ----------------------------
-- Table structure for auth_group
-- ----------------------------
DROP TABLE IF EXISTS `auth_group`;
CREATE TABLE `auth_group` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1:启用0:禁用',
  `rules` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_group
-- ----------------------------
INSERT INTO `auth_group` VALUES ('1', '超级管理员', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,', '2017-01-16 09:28:11', '0000-00-00 00:00:00');
INSERT INTO `auth_group` VALUES ('2', '普通管理员', '1', '1,2,3,4,5,6,7', '2017-01-16 14:59:52', '2017-05-01 17:59:09');

-- ----------------------------
-- Table structure for auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `auth_group_access`;
CREATE TABLE `auth_group_access` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_group_access
-- ----------------------------
INSERT INTO `auth_group_access` VALUES ('1', '1', '1');
INSERT INTO `auth_group_access` VALUES ('2', '2', '2');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` int(11) NOT NULL DEFAULT '1',
  `rank` int(11) NOT NULL COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------
INSERT INTO `auth_rule` VALUES ('1', 'admin/index/index', '系统首页', '1', '0', '1', '', '2017-01-09 16:37:37', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('2', 'admin/auth.group/index', '管理员用户组', '1', '0', '1', null, '2017-05-01 15:30:02', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('3', 'admin/auth.group/add', '新增修改用户组', '1', '0', '1', null, '2017-05-01 15:31:00', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('4', 'admin/auth.group/del', '删除用户组', '1', '0', '1', null, '2017-05-01 15:32:35', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('5', 'admin/auth.group/update', '开启关闭用户组', '1', '0', '1', null, '2017-05-01 15:33:01', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('6', 'admin/auth.admin/index', '管理员列表', '1', '0', '1', null, '2017-05-01 15:33:38', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('7', 'admin/auth.admin/add', '新增修改管理员', '1', '0', '1', null, '2017-05-01 15:34:02', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('8', 'admin/auth.admin/del', '删除管理员', '1', '0', '1', null, '2017-05-01 15:34:31', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('9', 'admin/auth.admin/update', '开启关闭管理员', '1', '0', '1', null, '2017-05-01 15:34:56', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('10', 'admin/addons/index', '插件管理', '1', '0', '1', null, '2017-05-01 18:08:37', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('11', 'admin/addons/shop', '插件商店', '1', '0', '1', null, '2017-05-01 18:09:15', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('12', 'admin/file/index', '图片管理', '1', '0', '1', null, '2017-05-01 19:07:22', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('13', 'admin/file/upload', '图片上传', '1', '0', '1', null, '2017-05-01 19:07:51', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('14', 'admin/user.index/index', '用户列表', '1', '0', '1', null, '2017-05-01 20:27:54', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('15', 'admin/user.index/add', '修改用户信息', '1', '0', '1', null, '2017-05-01 20:38:14', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('16', 'admin/user.index/update', '更新用户状态', '1', '0', '1', null, '2017-05-01 20:42:54', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('17', 'admin/user.index/export', '导出用户信息', '1', '0', '1', null, '2017-05-01 20:46:02', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('18', 'admin/user.level/index', '会员等级管理', '1', '0', '1', null, '2017-05-01 20:52:42', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('19', 'admin/user.level/add', '新增修改会员等级', '1', '0', '1', null, '2017-05-01 20:55:40', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('20', 'admin/article.category/index', '文章分类管理', '1', '0', '1', null, '2017-05-01 21:03:30', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('21', 'admin/article.category/add', '新增修改文章分类', '1', '0', '1', null, '2017-05-01 21:07:14', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('22', 'admin/article.category/update', '更改文章分类状态', '1', '0', '1', null, '2017-05-01 21:21:59', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('23', 'admin/article.index/index', '文章列表', '1', '0', '1', null, '2017-05-01 21:25:27', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('24', 'admin/article.index/add', '新增修改文章', '1', '0', '1', null, '2017-05-01 21:26:03', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('25', 'admin/article.index/update', '更新文章状态', '1', '0', '1', null, '2017-05-01 21:26:24', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('26', 'admin/config.site/index', '站点设置', '1', '0', '1', null, '2017-05-02 10:45:54', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('27', 'admin/wx.config/index', '微信配置', '1', '0', '1', null, '2017-05-03 16:02:56', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('28', 'admin/wx.menu/index', '微信菜单设置', '1', '0', '1', null, '2017-05-03 17:02:06', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('29', 'admin/wx.menu/add', '新增修改微信菜单', '1', '0', '1', null, '2017-05-03 17:02:32', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('30', 'admin/wx.menu/del', '删除微信菜单', '1', '0', '1', null, '2017-05-03 17:03:02', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('31', 'admin/wx.reply/index', '微信自定义回复设置', '1', '0', '1', null, '2017-05-03 17:03:37', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('32', 'admin/wx.reply/add', '新增修改微信自定义回复', '1', '0', '1', null, '2017-05-03 17:04:13', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('33', 'admin/wx.reply/del', '删除微信自定义回复', '1', '0', '1', null, '2017-05-03 17:04:52', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('34', 'admin/wx.tplmsg/index', '模版消息列表', '1', '0', '1', null, '2017-05-03 17:06:01', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('35', 'admin/wx.tplmsg/add', '新增修改模版消息', '1', '0', '1', null, '2017-05-03 17:06:25', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('36', 'admin/wx.tplmsg/update', '开启关闭模版消息', '1', '0', '1', null, '2017-05-03 17:06:51', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('37', 'admin/wx.kefu/index', '多客服设置', '1', '0', '1', null, '2017-05-03 17:07:38', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('38', 'admin/wx.print/index', '微信打印机设置', '1', '0', '1', null, '2017-05-03 17:08:02', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('39', 'admin/tpl.shop/index', '模版设置', '1', '0', '1', null, '2017-05-03 17:11:42', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('40', 'admin/tpl.mail/index', '邮件模版列表', '1', '0', '1', null, '2017-05-03 17:14:42', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('41', 'admin/tpl.mail/add', '新增修改邮件模版', '1', '0', '1', null, '2017-05-03 17:15:03', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('42', 'admin/tpl.mail/update', '更新邮件模版状态', '1', '0', '1', null, '2017-05-03 17:15:27', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('43', 'admin/tpl.mail/send', '测试邮件模版', '1', '0', '1', null, '2017-05-03 17:18:28', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('44', 'admin/tpl.sms/index', '短信模版列表', '1', '0', '1', null, '2017-05-03 17:18:55', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('45', 'admin/tpl.sms/add', '编辑短信模版', '1', '0', '1', null, '2017-05-03 17:20:38', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('46', 'admin/tpl.sms/update', '开启关闭短信模版', '1', '0', '1', null, '2017-05-03 17:21:15', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('47', 'admin/tpl.sms/send', '短信模版测试发送', '1', '0', '1', null, '2017-05-03 17:21:41', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('48', 'admin/config.sms/index', '短信配置', '1', '0', '1', null, '2017-05-03 17:25:38', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('49', 'admin/config.mail/index', '邮件配置', '1', '0', '1', null, '2017-05-03 17:26:19', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('50', 'admin/goods.index/index', '商品列表', '1', '0', '1', null, '2017-05-16 11:29:32', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('51', 'admin/goods.index/add', '新增商品', '1', '0', '1', null, '2017-05-16 11:30:35', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('52', 'admin/goods.index/update', '更新商品状态', '1', '0', '1', null, '2017-05-16 11:31:05', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('53', 'admin/goods.category/index', '商品分类列表', '1', '0', '1', null, '2017-05-16 11:37:30', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('54', 'admin/goods.category/add', '新增商品分类', '1', '0', '1', null, '2017-05-16 11:38:13', '0000-00-00 00:00:00');
INSERT INTO `auth_rule` VALUES ('55', 'admin/goods.category/update', '更新商品分类', '1', '0', '1', null, '2017-05-16 11:38:32', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL COMMENT '标题',
  `keywords` text NOT NULL COMMENT '关键词',
  `logo_id` int(11) NOT NULL COMMENT 'Logo',
  `description` text NOT NULL COMMENT '描述',
  `copyright` text NOT NULL COMMENT '版权',
  `theme` text NOT NULL COMMENT '模版',
  `tongji_code` text COMMENT '统计代码',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', '单用户微商城', 'wemall', '2', '111111', 'Copyright © 2015 wemallshop.com All Rights Reserved 豫ICP备16009619号', 'default', '1111121', '2017-01-10 21:30:26', '2017-05-16 16:06:33');

-- ----------------------------
-- Table structure for file
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `ext` text NOT NULL,
  `type` text NOT NULL,
  `savename` text NOT NULL,
  `savepath` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of file
-- ----------------------------
INSERT INTO `file` VALUES ('1', 'U4530P18DT20110710182825.jpg', '', 'image/jpeg', '8245f8334edabfa0bd90e8b9ab116093.jpg', '20170501/', '2017-05-01 19:10:01');
INSERT INTO `file` VALUES ('2', '20150929171727279.jpg', '', 'image/jpeg', '7385833557ff4cde113fcff71f510452.jpg', '20170516/', '2017-05-16 16:04:28');
INSERT INTO `file` VALUES ('3', 'banner_1.jpg', '', 'image/jpeg', '733a7ec81447bc7a9d425d564dec91b2.jpg', '20170516/', '2017-05-16 16:04:28');
INSERT INTO `file` VALUES ('4', 'banner_2.jpg', '', 'image/jpeg', '4ae52558ebe693f661bd923c4eb09fc9.jpg', '20170516/', '2017-05-16 16:04:28');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `category_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `goods_sn` varchar(60) NOT NULL DEFAULT '' COMMENT '商品编号',
  `goods_name` varchar(120) NOT NULL DEFAULT '' COMMENT '商品名称',
  `click_count` int(10) unsigned DEFAULT '0' COMMENT '点击数',
  `store_count` smallint(5) unsigned NOT NULL DEFAULT '10' COMMENT '库存数量',
  `comment_count` smallint(5) DEFAULT '0' COMMENT '商品评论数',
  `amount` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '重量数量',
  `unit` int(11) unsigned DEFAULT '1' COMMENT '商品单位',
  `market_price` decimal(10,2) unsigned DEFAULT '0.00' COMMENT '市场价',
  `shop_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '本店价',
  `cost_price` decimal(10,2) DEFAULT '0.00' COMMENT '商品成本价',
  `keywords` varchar(255) DEFAULT '' COMMENT '商品关键词',
  `goods_remark` varchar(255) DEFAULT '' COMMENT '商品简单描述',
  `status` int(11) DEFAULT NULL COMMENT '状态',
  `goods_content` text COMMENT '商品详细描述',
  `original_img` varchar(255) NOT NULL DEFAULT '' COMMENT '商品上传原始图',
  `is_on_sale` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否上架',
  `is_free_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否包邮0否1是',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '商品上架时间',
  `sort` smallint(4) unsigned NOT NULL DEFAULT '50' COMMENT '商品排序',
  `is_recommend` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否新品',
  `is_hot` tinyint(1) DEFAULT '0' COMMENT '是否热卖',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后更新时间',
  `sales_sum` int(11) DEFAULT '0' COMMENT '商品销量',
  `shipping_area_ids` varchar(255) DEFAULT '' COMMENT '配送物流shipping_area_id,以/分隔',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', '1', '50005001', '山东红富士', '0', '10', '0', '0', '1', '0.00', '0.00', '0.00', '', '', '1', null, '', '1', '0', '0000-00-00 00:00:00', '50', '0', '0', '0', '0000-00-00 00:00:00', '0', '');

-- ----------------------------
-- Table structure for goods_binsn
-- ----------------------------
DROP TABLE IF EXISTS `goods_binsn`;
CREATE TABLE `goods_binsn` (
  `id` int(11) NOT NULL COMMENT '最新id',
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_binsn
-- ----------------------------
INSERT INTO `goods_binsn` VALUES ('1', '2');

-- ----------------------------
-- Table structure for goods_category
-- ----------------------------
DROP TABLE IF EXISTS `goods_category`;
CREATE TABLE `goods_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品分类id',
  `name` varchar(90) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT '商品分类名称',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50' COMMENT '顺序排序',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `image` varchar(512) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '' COMMENT '分类图片',
  `is_hot` tinyint(1) DEFAULT '0' COMMENT '是否推荐为热门分类',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_category
-- ----------------------------
INSERT INTO `goods_category` VALUES ('1', '苹果', '50', '1', '', '0', '2017-05-16 13:13:51', '0000-00-00 00:00:00');
INSERT INTO `goods_category` VALUES ('2', '葡萄', '50', '1', '', '0', '2017-05-16 15:49:29', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for mail
-- ----------------------------
DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `host` text NOT NULL COMMENT '服务器地址',
  `port` int(11) NOT NULL COMMENT '服务器端口',
  `secure` double NOT NULL COMMENT '1:加密0:不加密',
  `replyTo` text NOT NULL COMMENT '回信地址',
  `user` text NOT NULL COMMENT '发送邮箱',
  `pass` text NOT NULL COMMENT '授权码,通过QQ获取',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mail
-- ----------------------------
INSERT INTO `mail` VALUES ('1', 'smtpdm.aliyun.com', '465', '1', 'koahub@163.com', '1', '1', '2017-02-16 09:52:41', '2017-05-03 18:33:38');

-- ----------------------------
-- Table structure for mail_tpl
-- ----------------------------
DROP TABLE IF EXISTS `mail_tpl`;
CREATE TABLE `mail_tpl` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL COMMENT '类型',
  `name` text NOT NULL COMMENT '模版名',
  `content` text NOT NULL COMMENT '内容',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态1:开启0:关闭',
  `mail` text NOT NULL COMMENT '测试发送邮箱',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mail_tpl
-- ----------------------------
INSERT INTO `mail_tpl` VALUES ('1', 'register', '注册模版', '<p>您好，欢迎您注册wemallshop微信商城，您的验证码是：$code</p>', '1', '1604583867@qq.com', '0000-00-00 00:00:00', '2017-02-18 17:38:44');

-- ----------------------------
-- Table structure for sms
-- ----------------------------
DROP TABLE IF EXISTS `sms`;
CREATE TABLE `sms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_key` text NOT NULL,
  `app_secret` text NOT NULL,
  `sign` text NOT NULL COMMENT '短信签名',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sms
-- ----------------------------
INSERT INTO `sms` VALUES ('1', '23643041', '17f711feb8fd1a0f3c376d4eaaa2710b', 'tp商城', '2016-07-19 17:38:40', '2017-05-03 18:33:31');

-- ----------------------------
-- Table structure for sms_tpl
-- ----------------------------
DROP TABLE IF EXISTS `sms_tpl`;
CREATE TABLE `sms_tpl` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL COMMENT '类型',
  `name` text NOT NULL COMMENT '模版名',
  `template_code` text NOT NULL COMMENT '模版ID',
  `content` text NOT NULL COMMENT '内容',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态1:开启0:关闭',
  `phone` text NOT NULL COMMENT '测试发送邮箱',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sms_tpl
-- ----------------------------
INSERT INTO `sms_tpl` VALUES ('1', 'register', '短信验证码', 'SMS_47900069', '您的本次验证码${code}，10分钟内输入有效，感谢使用平台', '1', '15238027761', '0000-00-00 00:00:00', '2017-02-18 17:13:21');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL COMMENT '默认地址',
  `avater_id` int(11) NOT NULL COMMENT '头像',
  `nickname` text,
  `username` text NOT NULL,
  `phone` text,
  `password` text NOT NULL,
  `token` text,
  `money` float NOT NULL DEFAULT '0',
  `score` float NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1:启用0:禁用',
  `buy_num` int(11) NOT NULL COMMENT '用户购买量',
  `remark` text,
  `last_login_ip` text,
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '3', '78', null, 'wemall', '1', 'c4ca4238a0b923820dcc509a6f75849b', '', '2', '420', '1', '192', '1211', '192.168.0.120', '2017-05-02 11:17:11', '2017-05-01 10:14:20', '2017-05-01 20:38:32');
INSERT INTO `user` VALUES ('2', '1', '1', '清月曦', '清月曦', '', '', null, '0', '0', '1', '0', '1', null, '2017-05-02 00:00:00', '2017-05-02 20:40:38', '2017-05-01 20:40:55');

-- ----------------------------
-- Table structure for user_level
-- ----------------------------
DROP TABLE IF EXISTS `user_level`;
CREATE TABLE `user_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `score` float NOT NULL COMMENT '达到积分',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_level
-- ----------------------------
INSERT INTO `user_level` VALUES ('1', '基础会员', '0', '2017-02-15 17:58:33', '2017-03-02 17:42:02');
INSERT INTO `user_level` VALUES ('2', '初级会员', '50', '2016-12-26 23:53:37', '2017-02-15 18:37:28');
INSERT INTO `user_level` VALUES ('3', '白金会员', '100', '2017-01-06 07:03:20', '2017-02-15 18:37:37');
INSERT INTO `user_level` VALUES ('4', '铂金会员', '500', '2017-01-06 07:05:46', '2017-02-15 18:37:53');
INSERT INTO `user_level` VALUES ('5', '黄金会员', '1000', '2017-03-02 15:12:29', '2017-05-01 20:56:15');

-- ----------------------------
-- Table structure for wx_config
-- ----------------------------
DROP TABLE IF EXISTS `wx_config`;
CREATE TABLE `wx_config` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `token` text NOT NULL,
  `appid` text NOT NULL,
  `appsecret` text NOT NULL,
  `encodingaeskey` text NOT NULL,
  `x_appid` text NOT NULL COMMENT '小程序',
  `x_appsecret` text NOT NULL COMMENT '小程序',
  `old_id` text NOT NULL COMMENT '原始id',
  `switch` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_config
-- ----------------------------
INSERT INTO `wx_config` VALUES ('1', 'wemall', 'wx6d040141df50d2113', '523c93731918e84766114ca8f73133824', 'vkG6JOKy7f2f1nejqJalOJkjJEK5JJlNaJjjSQ6Q2gM', 'wx5f1a51823b8371ae8', '8e157d2823fb72dcb17f9762308b8333', 'gh_6f79b1a839f1', '1', '2016-01-05 10:16:16', '2017-05-03 18:33:43');

-- ----------------------------
-- Table structure for wx_kefu
-- ----------------------------
DROP TABLE IF EXISTS `wx_kefu`;
CREATE TABLE `wx_kefu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `kefu` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_kefu
-- ----------------------------
INSERT INTO `wx_kefu` VALUES ('1', '1', 'biyuehun', '0000-00-00 00:00:00', '2017-05-03 18:34:06');

-- ----------------------------
-- Table structure for wx_menu
-- ----------------------------
DROP TABLE IF EXISTS `wx_menu`;
CREATE TABLE `wx_menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL DEFAULT '0',
  `type` text,
  `name` text NOT NULL,
  `key` text NOT NULL,
  `url` text NOT NULL,
  `rank` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `remark` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_menu
-- ----------------------------
INSERT INTO `wx_menu` VALUES ('1', '0', 'view', '商业版', '111', 'http://www.wemallshop.com/wemall/index.php/App/Index/index', '1', '0', '2', '2016-02-18 14:46:22', '2017-01-11 18:28:43');
INSERT INTO `wx_menu` VALUES ('2', '1', 'view', '分销版', '', 'http://www.wemallshop.com/wfx/App/Shop/index', '4', '0', '1213', '2015-11-06 17:25:28', '2017-02-16 18:17:00');
INSERT INTO `wx_menu` VALUES ('3', '0', 'click', 'QQ客服', 'qqkf', '', '3', '0', '2034210985', '2015-12-31 16:19:22', '2017-05-03 17:03:10');

-- ----------------------------
-- Table structure for wx_print
-- ----------------------------
DROP TABLE IF EXISTS `wx_print`;
CREATE TABLE `wx_print` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apikey` varchar(100) DEFAULT NULL COMMENT 'apikey',
  `mkey` varchar(100) DEFAULT NULL COMMENT '秘钥',
  `partner` varchar(100) DEFAULT NULL COMMENT '用户id',
  `machine_code` varchar(100) DEFAULT NULL COMMENT '机器码',
  `switch` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_print
-- ----------------------------
INSERT INTO `wx_print` VALUES ('1', '61', '31', '16', '16', '0', '2016-08-07 19:49:22', '2017-05-03 18:34:09');

-- ----------------------------
-- Table structure for wx_reply
-- ----------------------------
DROP TABLE IF EXISTS `wx_reply`;
CREATE TABLE `wx_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `file_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `key` text NOT NULL,
  `remark` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_reply
-- ----------------------------
INSERT INTO `wx_reply` VALUES ('1', 'news', '恭喜你加入WeMall，欢迎体验WeMall商业版，WeMall分销版和WeMall开源版。WeMall商业版更新，速度提升30%，致力于打造世界上最快，体验最好的微商城。客服QQ：2034210985', '1111', '29', '', 'subscribe', '1212', '2016-01-05 10:19:53', '2017-03-02 14:49:04');
INSERT INTO `wx_reply` VALUES ('2', 'news', '欢迎来到商业版wemall商城', '欢迎来到商业版wemall商城11111', '103', 'http://www.wemallshop.com/3/App/Index/index', '商城', '', '2016-01-05 10:23:41', '2017-03-02 14:49:49');
INSERT INTO `wx_reply` VALUES ('3', 'news', '2222222', '111', '103', '1111', '11111', '1111', '2017-01-12 17:27:57', '2017-03-02 14:49:41');

-- ----------------------------
-- Table structure for wx_tplmsg
-- ----------------------------
DROP TABLE IF EXISTS `wx_tplmsg`;
CREATE TABLE `wx_tplmsg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `title` text NOT NULL,
  `status` int(11) NOT NULL,
  `remark` text NOT NULL,
  `template_id_short` text NOT NULL,
  `template_id` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_tplmsg
-- ----------------------------
INSERT INTO `wx_tplmsg` VALUES ('1', '订单提醒(新订单通知)', 'order', '尊敬的客户,您的订单已成功提交！', '1', '666', 'OPENTM201785396', '', '2016-08-07 19:50:16', '2017-01-13 07:07:32');
INSERT INTO `wx_tplmsg` VALUES ('2', '支付提醒(订单支付成功通知)', 'pay', '您已成功支付', '1', '3333', 'OPENTM207791277', '', '2016-08-07 19:50:16', '2017-01-13 07:07:35');
INSERT INTO `wx_tplmsg` VALUES ('3', '发货提醒(订单发货提醒)', 'delivery', '尊敬的客户,您的订单已发货！', '1', '33312', 'OPENTM207763419', '', '2016-08-07 19:50:16', '2017-02-16 19:04:46');
