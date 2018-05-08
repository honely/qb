/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : localhost:3306
 Source Schema         : qbl

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 08/05/2018 17:31:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for qbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `qbl_admin`;
CREATE TABLE `qbl_admin`  (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `ad_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '密码',
  `ad_realname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '员工真实姓名',
  `ad_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员邮箱，用于登录',
  `ad_branch` int(10) DEFAULT NULL COMMENT '归属站点，对应站点id',
  `ad_p_id` int(11) DEFAULT NULL COMMENT '管理员省份id',
  `ad_c_id` int(11) DEFAULT NULL COMMENT '管理员城市id',
  `ad_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '管理员手机号，用于登录',
  `ad_qq` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员QQ号码',
  `ad_birth` int(11) DEFAULT NULL COMMENT '出生年月日',
  `ad_sex` tinyint(2) DEFAULT 3 COMMENT '性别；1 男；2 女； 3 未知',
  `ad_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '管理员图像',
  `ad_createtime` int(11) DEFAULT NULL COMMENT '开通时间',
  `ad_isable` tinyint(2) DEFAULT NULL COMMENT '是否开启 1 开启；2 禁止',
  `ad_role` int(11) DEFAULT NULL COMMENT '权限，对应权限的id',
  PRIMARY KEY (`ad_id`, `ad_phone`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_admin
-- ----------------------------
INSERT INTO `qbl_admin` VALUES (5, 'e10adc3949ba59abbe56e057f20f883e', '救世扁鹊', '1549089944@qq.com', 22, 1, 3, '17691074991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525592904, 1, 1);
INSERT INTO `qbl_admin` VALUES (6, 'e10adc3949ba59abbe56e057f20f883e', '安琪拉111', '114905454548@qq.com', 22, 1, 3, '18222223333', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525767570, 1, 6);
INSERT INTO `qbl_admin` VALUES (4, 'e10adc3949ba59abbe56e057f20f883e', '党萌萌', '1149054548@qq.com', 22, 1, 3, '18220995991', NULL, NULL, 1, NULL, 1525592644, 1, 9);
INSERT INTO `qbl_admin` VALUES (7, 'e10adc3949ba59abbe56e057f20f883e', '房腾飞', '17688889999@qq.com', 22, 1, 3, '17688889999', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525767805, 1, NULL);
INSERT INTO `qbl_admin` VALUES (17, 'e10adc3949ba59abbe56e057f20f883e', '12', '11m@qq.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770667, 1, NULL);
INSERT INTO `qbl_admin` VALUES (9, 'e10adc3949ba59abbe56e057f20f883e', '神经病', '4@163.com', 22, 1, 3, '13555554444', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770048, 1, NULL);
INSERT INTO `qbl_admin` VALUES (10, 'e10adc3949ba59abbe56e057f20f883e', 'shenjingb', '44@163.com', 22, 1, 3, '13655555555', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770078, 1, NULL);
INSERT INTO `qbl_admin` VALUES (11, 'e10adc3949ba59abbe56e057f20f883e', 'fff', '44@163.com', 22, 1, 3, '13566666666', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770109, 1, NULL);
INSERT INTO `qbl_admin` VALUES (12, 'e10adc3949ba59abbe56e057f20f883e', '123123', 'qqq@qwe.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770194, 1, NULL);
INSERT INTO `qbl_admin` VALUES (13, 'e10adc3949ba59abbe56e057f20f883e', 'qqqqqqqqqqqq', '12222222223@123.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770347, 1, NULL);
INSERT INTO `qbl_admin` VALUES (14, 'e10adc3949ba59abbe56e057f20f883e', '123', '123123123@qq.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770374, 1, NULL);
INSERT INTO `qbl_admin` VALUES (15, 'e10adc3949ba59abbe56e057f20f883e', '123123123', '11qaqw.@qq.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770460, 1, NULL);
INSERT INTO `qbl_admin` VALUES (16, 'e10adc3949ba59abbe56e057f20f883e', '123123123', '1312@qq.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770572, 1, NULL);
INSERT INTO `qbl_admin` VALUES (18, 'e10adc3949ba59abbe56e057f20f883e', '小短腿', '110@qq.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525770933, 1, NULL);
INSERT INTO `qbl_admin` VALUES (19, 'e10adc3949ba59abbe56e057f20f883e', 'hahah', '110@qq.com', 22, 1, 3, '18220995991', NULL, NULL, 1, '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', 1525771141, 1, 8);

-- ----------------------------
-- Table structure for qbl_article
-- ----------------------------
DROP TABLE IF EXISTS `qbl_article`;
CREATE TABLE `qbl_article`  (
  `art_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `art_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '文章标题',
  `art_subtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '文章子标题',
  `art_type` tinyint(2) DEFAULT NULL COMMENT '文章分类：1.媒体资讯；2.装修知识',
  `art_img` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '文章封面图',
  `art_img_alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '封面图alt',
  `art_content` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '文章内容',
  `art_createtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `art_view` int(11) DEFAULT 0 COMMENT '浏览量',
  `art_isable` tinyint(2) DEFAULT 1 COMMENT '是否显示',
  `art_seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo标题',
  `art_seo_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo关键词，多个用，号隔开',
  `art_seo_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo描述',
  `art_admin` int(10) DEFAULT NULL COMMENT '发布人，对应管理员的id',
  PRIMARY KEY (`art_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '文章' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_article
-- ----------------------------
INSERT INTO `qbl_article` VALUES (3, '千百炼装饰', '千百炼装饰千百炼装饰千百炼装饰千百炼装饰', 1, '/uploads/20180428/83140f428729db00bb758fd619264365.png', NULL, '<p><img src=\"/uploads/20180428/5cc350b485acab949482c89c5e08d055.png\" alt=\"undefined\">千百炼装饰品牌创立于2013年，是一家集咨询、设计、施工、建材、家具、家电、软装于一体，专注于整体家装服务的集团化公司，旨在为业主提供整体家装一站式服务的完美解决方案。发展至今在全国已拥有多家整装旗舰店，包括西安、贵阳、成都、昆明、武汉、宝鸡等城市，拥有千余名来自全国各地的专业整装设计团队，近百支经验丰富、认真负责的专业施工团队，超过2000名训练有素，敬业爱岗，专业热枕的员工。截止2017年，千百炼家装集团已服务全国业主超过120000户，每家旗舰店均拥有超大面积的集基材、主材、家具、家电、软饰为一体的综合性豪华卖场，并拥有集合了各种风格的实景样板体验间。看的到、摸得到的高品质家装，让用户更真实的体验千百炼带来的装修效果。</p><p>千百炼自成立以来，以专业的整装产品和优质的服务体验形成了良好的口碑效应，深受全国当地老百姓的关注与支持。千百炼家装集团将继续在为业主创造美好家园的道路上前行，创一百年好口碑，做一辈子好装修。</p><p>千百炼家装集团荟萃了全国各地装饰建材行业的设计、施工、产品、经营管理等领域精英人士，不断深入探索、研究以“客户服务为导向”的整体装修发展模式，立足于“质量求生存，诚信求发展”的经营方针，“千锤百炼，钻石品质”的产品理念，想客户之所想，做客户想做的家装。</p><p>千百炼家装集团视工程质量为企业的生命，独家引进全数控化工程管理体系，严格执行《德系钻石工艺管理白皮书》。以125个质量点的施工标准及验收标准，对所有施工工地从开工到验收进行全过程数字化管理，把德系钻石工艺的具体要求简化成准确的验收数据，为客户提供“零缺陷”装修服务。</p><p>历经五年，千百炼用自己的努力，收货了一个又一个的成绩：&nbsp;<br>荣获昆明市住宅装饰协会乙级设计资质企业单位&nbsp;<br>荣获昆明市住宅装饰协会乙级设计施工资质企业单位&nbsp;<br>荣获315诚信企业单位称号&nbsp;<br>荣获昆明广播电视台推荐整装领导品牌&nbsp;<br>荣获云南省企业信用促进会副会长单位&nbsp;<br>荣获昆明市建筑装饰行业协会先进企业&nbsp;<br>荣获昆明市建筑装饰行业协会常务理事单位&nbsp;<br>荣获昆明市建筑装饰行业协会十大整装领导企业&nbsp;<br>荣获云南省AAAAA信用企业单位称号&nbsp;<br></p><p>千百炼家装集团致力于打造让客户拎包入住的整体装修模式，努力践行 “千锤百炼，钻石品质” 的企业承诺，为客户提供省力、省心又省钱的装修体验势在必行！</p>', 1524909776, 0, 1, '千百炼装饰', '千百炼装饰千百炼装饰千百炼装饰千百炼装饰', '千百炼装饰千百炼装饰千百炼装饰千百炼装饰千百炼装饰千百炼装饰', NULL);
INSERT INTO `qbl_article` VALUES (2, '千百炼家装集团', '千百炼家装集千百炼家装集团千百炼家装集团', 2, '/uploads/20180428/7db12044dc2f500bada4f156a05ffeec.jpg', NULL, '<p>千百炼装饰品牌创立于2013年，是一家集咨询、设计、施工、建材、家具、家电、软装于一体，专注于整体家装服务的集团化公司，旨在为业主提供整体家装一站式服务的完美解决方案。发展至今在全国已拥有多家整装旗舰店，包括西安、贵阳、成都、昆明、武汉、宝鸡等城市，拥有千余名来自全国各地的专业整装设计团队，近百支经验丰富、认真负责的专业施工团队，超过2000名训练有素，敬业爱岗，专业热枕的员工。截止2017年，千百炼家装集团已服务全国业主超过120000户，每家旗舰店均拥有超大面积的集基材、主材、家具、家电、软饰为一体的综合性豪华卖场，并拥有集合了各种风格的实景样板体验间。看的到、摸得到的高品质家装，让用户更真实的体验千百炼带来的装修效果。</p><p>千百炼自成立以来，以专业的整装产品和优质的服务体验形成了良好的口碑效应，深受全国当地老百姓的关注与支持。千百炼家装集团将继续在为业主创造美好家园的道路上前行，创一百年好口碑，做一辈子好装修。</p><p>千百炼家装集团荟萃了全国各地装饰建材行业的设计、施工、产品、经营管理等领域精英人士，不断深入探索、研究以“客户服务为导向”的整体装修发展模式，立足于“质量求生存，诚信求发展”的经营方针，“千锤百炼，钻石品质”的产品理念，想客户之所想，做客户想做的家装。</p><p>千百炼家装集团视工程质量为企业的生命，独家引进全数控化工程管理体系，严格执行《德系钻石工艺管理白皮书》。以125个质量点的施工标准及验收标准，对所有施工工地从开工到验收进行全过程数字化管理，把德系钻石工艺的具体要求简化成准确的验收数据，为客户提供“零缺陷”装修服务。</p><p></p><p style=\"text-align: center;\">历经五年，千百炼用自己的努力，收货了一个又一个的成绩：&nbsp;<br>荣获昆明市住宅装饰协会乙级设计资质企业单位&nbsp;</p>荣获昆明市住宅装饰协会乙级设计施工资质企业单位&nbsp;<br>荣获315诚信企业单位称号&nbsp;<img src=\"http://www.qblaaa.com/layui/src/images/face/65.gif\" alt=\"[威武]\"><img src=\"http://www.qblaaa.com/layui/src/images/face/65.gif\" alt=\"[威武]\"><br>荣获昆明广播电视台推荐整装领导品牌&nbsp;<br>荣获云南省企业信用促进会副会长单位&nbsp;<img src=\"http://www.qblaaa.com/layui/src/images/face/64.gif\" alt=\"[围观]\"><br>荣获昆明市建筑装饰行业协会先进企业&nbsp;<br>荣获昆明市建筑装饰行业协会常务理事单位&nbsp;<br>荣获昆明市建筑装饰行业协会十大整装领导企业&nbsp;<br>荣获云南省AAAAA信用企业单位称号&nbsp;<br><p></p><p>千百炼家装集团致力于打造让客户拎包入住的整体装修模式，努力践行 “千锤百炼，钻石品质” 的企业承诺，为客户提供省力、省心又省钱的装修体验势在必行！</p>', 1524905145, 0, 1, '获云南省AAAAA信用企业单位称号 ', '获云南省AAAAA信用企业单位称号 ', '获云南省AAAAA信用企业单位称号 获云南省AAAAA信用企业单位称号 获云南省AAAAA信用企业单位称号 ', NULL);

-- ----------------------------
-- Table structure for qbl_banner
-- ----------------------------
DROP TABLE IF EXISTS `qbl_banner`;
CREATE TABLE `qbl_banner`  (
  `ba_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'banner轮播ID',
  `ba_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'banner主题',
  `ba_img` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'banner 图片路径',
  `ba_alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'banner图片alt',
  `ba_p_id` int(11) DEFAULT NULL COMMENT '显示省份',
  `ba_c_id` int(11) DEFAULT NULL COMMENT '显示城市',
  `ba_branch` int(11) DEFAULT 1 COMMENT '显示站点；分站的id',
  `ba_createtime` int(11) DEFAULT NULL COMMENT 'banner 添加时间',
  `ba_via` tinyint(2) DEFAULT NULL COMMENT '显示端：1 PC端； 2 移动端',
  `ba_type` tinyint(4) DEFAULT NULL,
  `ba_isable` tinyint(2) DEFAULT 1 COMMENT '是否显示：1 显示：2隐藏',
  PRIMARY KEY (`ba_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_banner
-- ----------------------------
INSERT INTO `qbl_banner` VALUES (1, '会呼吸的话', '/uploads/20180427/507d39fe3ab26eb604ca07b6fb609e66.jpg', NULL, NULL, NULL, 0, 1524795449, 1, NULL, 1);
INSERT INTO `qbl_banner` VALUES (7, '123123', '/uploads/20180503/cbdbd3fee3b7d297d791757f4a4829e6.png', NULL, NULL, NULL, 12, 1525336744, 1, NULL, 1);
INSERT INTO `qbl_banner` VALUES (3, '竞价123123', '/uploads/20180427/38e3c37c3abe5ba623df30267582d98d.png', NULL, NULL, NULL, 0, 1524798210, 2, NULL, 1);
INSERT INTO `qbl_banner` VALUES (5, '哈哈哈123123', '/uploads/20180427/a374277e61337942c13bb00bb9b7cb1d.png', NULL, NULL, NULL, 12, 1524798239, 1, NULL, 2);
INSERT INTO `qbl_banner` VALUES (8, '123123123', '/uploads/20180503/be5684673aba3aae7b8937e9e29fbfa1.png', NULL, NULL, NULL, 12, 1525336816, 1, NULL, 1);
INSERT INTO `qbl_banner` VALUES (9, '哈哈哈哈哈哈', '/uploads/20180505/2aa31f27b8c498aa77a65299b7343cc7.png', '这是图片alt', NULL, NULL, 12, 1525513549, 2, NULL, 1);
INSERT INTO `qbl_banner` VALUES (10, '123123', '/uploads/20180506/46271e711452dfd105525898517db3dd.png', '123123', 1, 3, 12, 1525578964, 1, NULL, 1);

-- ----------------------------
-- Table structure for qbl_branch
-- ----------------------------
DROP TABLE IF EXISTS `qbl_branch`;
CREATE TABLE `qbl_branch`  (
  `b_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '站点id',
  `b_toweb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '快速访问分站网址',
  `b_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点名称',
  `b_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点logo',
  `b_logo_alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '图片alt',
  `b_prex` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点域名前缀',
  `b_tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点电话（装修咨询）',
  `b_weichat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '微信二维码',
  `b_weibo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '微博二维码',
  `b_province` int(10) DEFAULT NULL COMMENT '所属省份id',
  `b_city` int(10) DEFAULT NULL COMMENT '城市id',
  `b_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点地址',
  `b_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点地理坐标',
  `b_record` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点备案号',
  `b_codecount` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '统计代码',
  `b_thridcode` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '客服代码',
  `b_othercode` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '其他代码',
  `b_serviceurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '客服链接',
  `b_createtime` int(11) DEFAULT NULL COMMENT '站点开通时间',
  `b_adminphone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '站点管理员手机号(接受预约短信)',
  `b_isopen` tinyint(2) DEFAULT NULL COMMENT '是否开通：1.是：2 否',
  PRIMARY KEY (`b_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '站点管理' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_branch
-- ----------------------------
INSERT INTO `qbl_branch` VALUES (22, NULL, '西安千百炼', '/uploads/20180501/6e0a0db9352f790d25e8bebd8f934bf4.png', NULL, 'xa', '400-800-5212', '/uploads/20180501/2d1e9f3a7c6d2cea9238d06948619320.jpg', '/uploads/20180501/7aa97faa55a29d2562f6ddfd6643778b.jpg', 1, 3, '未央区辛家庙', '123123', NULL, '123', '去问问', '123', '确认 ', 1525925541, '18220995991', 1);
INSERT INTO `qbl_branch` VALUES (23, NULL, '武汉千百炼', '/uploads/20180501/c1c2e4aed9f585a6210284bf9019bd2f.png', 'qqqqqqqqqqqqqqqqq', 'wh', '4000000000000', '/uploads/20180501/f68aa516d3f7bf6140df9e1b320fe4ec.png', '/uploads/20180501/f68aa516d3f7bf6140df9e1b320fe4ec.png', 6, 7, '12', '12', NULL, '123', '123', '123', '123', 1525147941, '123', 1);

-- ----------------------------
-- Table structure for qbl_buildings
-- ----------------------------
DROP TABLE IF EXISTS `qbl_buildings`;
CREATE TABLE `qbl_buildings`  (
  `bu_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '楼盘小区表',
  `bu_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '楼盘名称',
  `bu_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '楼盘描述',
  `bu_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '楼盘地理坐标',
  `bu_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '楼盘封面图',
  `bu_img_alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '图片alt',
  `bu_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '楼盘地址',
  `bu_p_id` int(11) DEFAULT NULL COMMENT '省份id',
  `bu_c_id` int(11) DEFAULT NULL COMMENT '城市id',
  `bu_seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo标题',
  `bu_seo_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo关键词',
  `bu_seo_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'seo描述',
  `bu_activity` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '优惠活动内容',
  `bu_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '活动链接',
  `bu_isable` tinyint(2) UNSIGNED ZEROFILL DEFAULT NULL COMMENT '是否显示：1，显示；2，隐藏',
  PRIMARY KEY (`bu_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '楼盘小区表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_buildings
-- ----------------------------
INSERT INTO `qbl_buildings` VALUES (1, '梨园公馆1', '去去去去去去群群群群群群', '123', '', NULL, '12', 4, 53, '12222222222222222', '2222222222', '22222222222222', '122222222222222', '111111111111111111', 01);
INSERT INTO `qbl_buildings` VALUES (2, '华苑海盐城', '23区4入t78uoipm', '权为啥太多人', '', NULL, '324eyu23请问二', 1, 2, '234千万让退款', '2权威阿尔等同于哦', '2犬瘟热生日当天幅员辽阔', '2权354热推两款', '区无rrtyfu', 01);
INSERT INTO `qbl_buildings` VALUES (3, '炕底寨小区', '1222222222222222', '111111111111111111', '', NULL, '12222222222222222222', 4, 6, '1111111111111111', '1111111111111111', '111111111111111', '1111111111111111111111', '11111111111111', 01);
INSERT INTO `qbl_buildings` VALUES (4, '曲江会展国际', '111111111111111', '1222222222222222222', '/uploads/20180502/43ed3ca55640b33505e7526047ede691.png', NULL, '11111111111111', 4, 53, '111111111111111111', '1111111111111', '11111111111111111111', '111111111111111111111', '11111111111', 01);
INSERT INTO `qbl_buildings` VALUES (6, '高新第五季', '1222222222222222', '1222222222222222222', '/uploads/20180503/3b805a9a98d5ea13d87edd3fd26d6376.png', '有道云笔记', '11111111111111', 4, 53, '111111111111111111', '1111111111111', '11111111111111111111', '111111111111111111111', '11111111111', 01);
INSERT INTO `qbl_buildings` VALUES (7, '地矿小区', '地矿小区地矿小区地矿小区地矿小区地矿小区地矿小区地矿小区地矿小区地矿小区地矿小区', '123123', '/uploads/20180506/2c7fdefd1594020b66ab2c921dc05725.png', '1234', '驱蚊器翁', 1, 3, '123', '123', '123', '12222222223123', '123', 01);

-- ----------------------------
-- Table structure for qbl_case
-- ----------------------------
DROP TABLE IF EXISTS `qbl_case`;
CREATE TABLE `qbl_case`  (
  `case_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '案例id',
  `case_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '案例名称',
  `case_style` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '案例风格',
  `case_p_id` int(10) DEFAULT NULL COMMENT '省份id',
  `case_c_id` int(10) DEFAULT NULL COMMENT '城市id',
  `case_price` decimal(10, 2) DEFAULT NULL COMMENT '案例造价（单位：万元）',
  `case_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '案例户型',
  `case_type_iamge` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '户型图',
  `case_type_alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '户型图alt',
  `case_type_title` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '户型标题',
  `case_type_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '户型描述',
  `case_bulid` int(11) DEFAULT NULL COMMENT '楼盘id 对应楼盘表（小区）',
  `case_decotime` int(11) DEFAULT NULL COMMENT '案例发布日期',
  `case_view` int(10) DEFAULT 0 COMMENT '浏览量',
  `case_url` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '案例全景URL',
  `case_img` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '图片,多张图用‘，’分割',
  `case_img_title` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '案例图片描述，个数同图片数量，多个用“，”隔开',
  `case_img_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '图片的描述，个数同图片，多个用“，”分割',
  `case_area` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '面积',
  `case_remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '案例简介',
  `case_designer` int(11) DEFAULT NULL COMMENT '案例设计师id对应设计师表id',
  `case_seo_tilte` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo标题',
  `case_seo_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo关键词',
  `case_seo_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo描述',
  `case_istop` tinyint(4) DEFAULT NULL COMMENT '置顶',
  `case_isable` tinyint(2) DEFAULT NULL COMMENT '是否显示：1，显示；2，隐藏',
  `case_admin` int(10) DEFAULT NULL COMMENT '案例发布人，对应管理员的id',
  PRIMARY KEY (`case_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '装修案例表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_case
-- ----------------------------
INSERT INTO `qbl_case` VALUES (1, '111111111111111111111', '31', NULL, NULL, 99999999.99, '三厅,四室,四卫', '', NULL, '1111111111111111', NULL, 1, 1525329983, NULL, '1111111111111111', NULL, '11111111111111,111111111111111,1111111111111,1111111111111111111,11111111111111,1111111111111111', NULL, '1111111111111', '111111111111111', 9, '111111111111111111111', '111111111111111', '111111111111', 1, 1, NULL);
INSERT INTO `qbl_case` VALUES (3, '华盛顿开1', '31', 4, 6, 123.00, '二厅,二室,三卫', '/uploads/20180503/6489df418a3882d51004951e2dd0d3d0.png', NULL, '122223', '123', 3, 1525331860, 0, '123', NULL, '11111111111111,111111111111111,1222222222222222222222,111111111111,2222222222w,123123', '111111111111111111,1111111111111111,122222222222223,111122222222222222, 12我            恶女的说从,123123', '123', '123', 9, '1222222222222222', '2122222222223', '是是是是是是所所所所所所所', 1, 1, NULL);
INSERT INTO `qbl_case` VALUES (4, '哈哈哈哈哈哈或或或或1', '31', 4, 6, 0.00, '一厅,一室,一卫', '/uploads/20180503/eb66df2224b6aac1db94813e76c39bd8.png', NULL, '11111111哈哈哈哈哈哈或或或或1', '哈哈哈哈哈哈或或或或1', 1, 1525336059, 0, '哈哈哈哈哈哈或或或或1', '/uploads/20180503/e2337eb283aeec696cb76198706616a0.jpg,/uploads/20180503/d486ff2a63ae1eef1a5e63b65dfbffe6.jpg,/uploads/20180503/e069aab9e1c56d00b2058e6bbf8aa249.jpg,/uploads/20180503/9a36429aec6e4b9cbf07e6fe9808bd4a.jpg,/uploads/20180503/0e94aed3cd748715f889fe8777b992a3.jpg,/uploads/20180503/effc51a103d8cefd7bccfb5737b32982.png', '哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1', '哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1,哈哈哈哈哈哈或或或或1', '哈哈哈哈哈哈或或或或1', '哈哈哈哈哈哈或或或或1', 9, '哈哈哈哈哈哈或或或或1', '哈哈哈哈哈哈或或或或1', '哈哈哈哈哈哈或或或或1', 2, 2, NULL);

-- ----------------------------
-- Table structure for qbl_city
-- ----------------------------
DROP TABLE IF EXISTS `qbl_city`;
CREATE TABLE `qbl_city`  (
  `c_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '城市id',
  `p_id` int(10) DEFAULT NULL COMMENT '省份id对应省份表的id',
  `c_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '城市名称',
  `c_q_id` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '装修品质，对应品质id，多个id用\'，\'隔开',
  `c_q_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '品质单价，与装修id对应，多个用‘，’隔开',
  PRIMARY KEY (`c_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 54 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_city
-- ----------------------------
INSERT INTO `qbl_city` VALUES (2, 1, '宝鸡', NULL, NULL);
INSERT INTO `qbl_city` VALUES (3, 1, '西安', NULL, NULL);
INSERT INTO `qbl_city` VALUES (4, 5, '贵阳', NULL, NULL);
INSERT INTO `qbl_city` VALUES (5, 3, '武汉', NULL, NULL);
INSERT INTO `qbl_city` VALUES (6, 4, '昆明', NULL, NULL);
INSERT INTO `qbl_city` VALUES (7, 6, '武汉', NULL, NULL);
INSERT INTO `qbl_city` VALUES (53, 4, '洱海', '36,39,40', '444,555,666');
INSERT INTO `qbl_city` VALUES (52, 4, '洱海', '36,39,40', '112,223,334');
INSERT INTO `qbl_city` VALUES (50, 1, '123', '36,39,40', '123,123,123');
INSERT INTO `qbl_city` VALUES (48, 1, '未满', '36,39,40,', '111,222,333,');
INSERT INTO `qbl_city` VALUES (47, 1, '铜川', '36,39,40,', '111,222,333,');

-- ----------------------------
-- Table structure for qbl_customer
-- ----------------------------
DROP TABLE IF EXISTS `qbl_customer`;
CREATE TABLE `qbl_customer`  (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '客户id',
  `cus_bid` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '客户编号系统生成的编号，做客户唯一标识生成规则，如：“201804210001”,前面8位是年与日，后面4位1-9999；不够的用0补空位。',
  `cus_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '客户名字',
  `cus_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '客户电话',
  `cus_phone2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '备用联系方式',
  `cus_sex` tinyint(2) DEFAULT NULL COMMENT '性别：1 男； 2 女； 3 不明',
  `cus_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '用户邮箱',
  `cus_provid` int(10) DEFAULT 0 COMMENT '省份id，对应省份表id',
  `cus_cityid` int(10) DEFAULT NULL COMMENT '城市id，对应城市表id',
  `cus_branchid` int(10) DEFAULT NULL COMMENT '站点id，对应分站id',
  `cus_area` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '房屋面积',
  `cus_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '房屋类型：1：新房；2：二手房',
  `cus_style` tinyint(4) DEFAULT NULL COMMENT '装修风格对应 风格表ID',
  `cus_quality` tinyint(4) DEFAULT NULL COMMENT '装修品质（档次）对应档次表ID',
  `cus_house_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '房屋户型：如：两室一厅，存储文字；',
  `cus_build` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '小区名称',
  `cus_promoney` int(10) DEFAULT NULL COMMENT '预估消费',
  `cus_sys` tinyint(2) NOT NULL COMMENT '来源系统：1 手机端 ；2 PC端',
  `cus_link` longtext CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '网址入口',
  `cus_via` tinyint(4) DEFAULT NULL COMMENT '推广渠道，对应渠道id',
  `cus_position` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '预约页面位置',
  `cus_ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '用户IP',
  `cus_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '推广关键词',
  `cus_from` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '推广来源',
  `cus_origin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '推广创意',
  `cus_status` tinyint(2) DEFAULT NULL COMMENT '标记id 对应  标记类型表id',
  `cus_seetime` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '预估见面时间',
  `cus_opptime` int(11) DEFAULT NULL COMMENT '预约时间',
  `cus_backtime` int(11) DEFAULT NULL COMMENT '回访时间',
  `cus_remarks` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '回访备注',
  `cus_opeater` int(10) DEFAULT NULL COMMENT '操作人id 对应登陆管理员id',
  `cus_isdelete` tinyint(2) DEFAULT 1 COMMENT '是否删除，1正常 2 已删除  用于回收站功能',
  PRIMARY KEY (`cus_id`, `cus_bid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 94 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '客户预约表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_customer
-- ----------------------------
INSERT INTO `qbl_customer` VALUES (15, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (25, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (23, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (24, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (14, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (26, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (27, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (28, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (29, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 3, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (30, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (31, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (32, '', '放腾飞11111', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 2, 0, '90', '1', 0, 0, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1525244606, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (16, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 8, 0, '120', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '123谁一颦一笑摇曳了星云1231231233', 123, 1);
INSERT INTO `qbl_customer` VALUES (41, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (42, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (43, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (44, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (45, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (46, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (47, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (48, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (49, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (50, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (51, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (52, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (53, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 8, 0, '120', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '123谁一颦一笑摇曳了星云1231231233', 123, 1);
INSERT INTO `qbl_customer` VALUES (64, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (65, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 1);
INSERT INTO `qbl_customer` VALUES (93, '201805060001', 'dmm', '18220995991', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'http://www.qblaaa.com/home/index/index.html', NULL, '首页banner大屏幕', '127.0.0.1', NULL, '', '', NULL, NULL, 1525600765, NULL, NULL, NULL, 1);
INSERT INTO `qbl_customer` VALUES (68, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (69, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (70, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (71, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (72, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (73, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 8, 0, '120', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '123谁一颦一笑摇曳了星云1231231233', 123, 2);
INSERT INTO `qbl_customer` VALUES (74, '', '放腾飞', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (75, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (76, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (77, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (78, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (79, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (80, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (81, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (82, '', '倾世温柔温柔2132', '18220995991', '18888888888', 1, '1149054548@qq.com', 3, 5, 0, '90', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 2, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '这个 客户说五月穷好赛随便你了123', 123, 2);
INSERT INTO `qbl_customer` VALUES (83, '', '夜微凉夜微凉', '18220995991', '18888888888', 1, '1149054548@qq.com', 1, 8, 0, '120', '1', 3, 2, '两室一厅', '炕底寨小区', 100, 1, 'http://www.qblzs.com/#6d', 1, '顶部banner', '127.0.0.1', '装修', '123', '123', 22, '2018-05-10', 1524110459, 1524110459, '123谁一颦一笑摇曳了星云1231231233', 123, 2);

-- ----------------------------
-- Table structure for qbl_designer
-- ----------------------------
DROP TABLE IF EXISTS `qbl_designer`;
CREATE TABLE `qbl_designer`  (
  `des_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '设计师id',
  `des_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '设计师名称',
  `des_img` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '设计师头像',
  `des_img_alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '图片alt',
  `des_age` tinyint(4) DEFAULT NULL COMMENT '年龄',
  `des_exp` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '从业经验',
  `des_tanlent` varchar(255) CHARACTER SET ujis COLLATE ujis_japanese_ci DEFAULT '' COMMENT '擅长风格',
  `des_guand` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '毕业院校',
  `des_remarks` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '设计师简介',
  `des_isable` tinyint(2) DEFAULT NULL COMMENT '是否显示： 1 是；2 否',
  `des_p_id` int(11) DEFAULT NULL COMMENT '省份id',
  `des_c_id` int(11) DEFAULT NULL COMMENT '城市id',
  `des_createtime` int(11) DEFAULT NULL COMMENT '发布时间',
  `dec_admin` int(11) DEFAULT NULL COMMENT '发布人，对应管理员的id',
  PRIMARY KEY (`des_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_designer
-- ----------------------------
INSERT INTO `qbl_designer` VALUES (9, '倾国倾城安琪拉', '/uploads/20180502/b54099895f0c6ca026f1a409319d1ec5.png', NULL, 21, '21', '31,32', '12', '122223', 1, 1, 2, NULL, NULL);
INSERT INTO `qbl_designer` VALUES (10, '宫本武藏11', '/uploads/20180503/8f29dc65f19801309e6e894db75e175d.jpg', 'QQ音乐', 123, '123', '34', '123', '123', 1, 1, 3, NULL, NULL);
INSERT INTO `qbl_designer` VALUES (11, 'hahha', '/uploads/20180506/2eb695a99f106b4265100dd3d9ebee14.jpg', '123', 12, '12', '31,32', '123', '123123', 1, 1, 2, NULL, NULL);

-- ----------------------------
-- Table structure for qbl_loginlog
-- ----------------------------
DROP TABLE IF EXISTS `qbl_loginlog`;
CREATE TABLE `qbl_loginlog`  (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_admin` int(11) DEFAULT NULL COMMENT '管理员，对应admin_id',
  `log_time` int(11) DEFAULT NULL COMMENT '登录时间',
  `log_ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '登录ip',
  PRIMARY KEY (`log_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '登录日志表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for qbl_menu
-- ----------------------------
DROP TABLE IF EXISTS `qbl_menu`;
CREATE TABLE `qbl_menu`  (
  `m_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '菜单id',
  `m_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '菜单名称',
  `m_fid` int(11) DEFAULT NULL COMMENT '菜单父级id',
  `m_control` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '控制器名称，小写',
  `m_action` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '方法名，小写',
  `m_sort` int(10) DEFAULT NULL COMMENT '排序',
  `m_type` int(10) DEFAULT NULL COMMENT '菜单类型1.菜单；2.操作',
  `m_icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '菜单图标',
  PRIMARY KEY (`m_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 39 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = '菜单表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_menu
-- ----------------------------
INSERT INTO `qbl_menu` VALUES (1, '管理员设置', 0, 'admin', 'admin', 1, 1, '1');
INSERT INTO `qbl_menu` VALUES (2, '管理员列表', 1, 'admin', 'admin', 1, 1, '1');
INSERT INTO `qbl_menu` VALUES (3, '后台管理', 1, 'admin', 'menu', 1, 1, '1');
INSERT INTO `qbl_menu` VALUES (4, '角色列表', 1, 'admin', 'role', 1, 1, '1');
INSERT INTO `qbl_menu` VALUES (34, '修改banner', 31, 'banner', 'editBanner', 0, 2, '1');
INSERT INTO `qbl_menu` VALUES (33, '添加banner', 31, 'banner', 'addBanner', 0, 2, '1');
INSERT INTO `qbl_menu` VALUES (35, '删除banner', 31, 'banner', 'delBanner', 0, 2, '1');
INSERT INTO `qbl_menu` VALUES (10, '系统配置', 0, 'setinfo', 'setlist', 0, 1, '123');
INSERT INTO `qbl_menu` VALUES (11, '基础配置', 10, 'setinfo', 'setlist', 0, 1, '123');
INSERT INTO `qbl_menu` VALUES (12, '分站管理', 10, 'setinfo', 'branch', 0, 1, '123');
INSERT INTO `qbl_menu` VALUES (13, '开通分站', 12, 'setinfo', 'addbranch', 0, 2, '1');
INSERT INTO `qbl_menu` VALUES (14, '客户管理', 0, 'user', 'userlist', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (15, '客户列表', 14, 'user', 'userlist', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (16, '信息回收站', 14, 'user', 'userback', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (17, '批量删除', 15, 'user', 'delBatch', 0, 2, '1');
INSERT INTO `qbl_menu` VALUES (18, '单个删除', 15, 'user', 'delUser', 0, 2, '1');
INSERT INTO `qbl_menu` VALUES (19, '类型参数', 10, 'setinfo', 'typelist', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (20, '短信配置', 10, '1111', '111111111', 0, 1, '11111');
INSERT INTO `qbl_menu` VALUES (21, '区域管理', 10, 'district', 'district', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (22, '内容管理', 0, 'article', 'article', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (23, '文章管理', 22, 'article', 'article', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (24, '案例列表', 22, 'example', 'example', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (25, '楼盘管理', 22, 'building', 'builds', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (26, '设计团队', 22, 'designer', 'team', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (27, '专题模板1', 22, 'topic', 'topic', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (28, '专题模板2', 22, 'topics', 'topics', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (29, '导航管理', 0, 'nav', 'nav', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (30, '导航列表', 29, 'nav', 'navlist', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (31, '广告管理', 0, 'banner', 'bannerlist', 0, 1, '1');
INSERT INTO `qbl_menu` VALUES (32, 'banner列表', 31, 'banner', 'bannerlist', 0, 1, '2');
INSERT INTO `qbl_menu` VALUES (36, '后台管理', 0, 'admin', 'menu', 0, 1, '123');
INSERT INTO `qbl_menu` VALUES (37, '菜单管理', 36, 'admin', 'menu', 0, 1, '1');

-- ----------------------------
-- Table structure for qbl_nav
-- ----------------------------
DROP TABLE IF EXISTS `qbl_nav`;
CREATE TABLE `qbl_nav`  (
  `nav_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `nav_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '导航标题',
  `nav_seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo标题',
  `nav_seo_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo关键词',
  `nav_seo_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo描述',
  `nav_order` tinyint(255) DEFAULT NULL COMMENT '导航排序数字越小越靠前',
  `nav_isable` tinyint(4) DEFAULT NULL COMMENT '是否显示：1 显示；2 隐藏',
  `nav_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '导航链接',
  PRIMARY KEY (`nav_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '前端网站导航' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_nav
-- ----------------------------
INSERT INTO `qbl_nav` VALUES (10, '首页', NULL, NULL, NULL, NULL, 1, NULL);

-- ----------------------------
-- Table structure for qbl_province
-- ----------------------------
DROP TABLE IF EXISTS `qbl_province`;
CREATE TABLE `qbl_province`  (
  `p_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '省份id',
  `p_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '省份名称',
  PRIMARY KEY (`p_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of qbl_province
-- ----------------------------
INSERT INTO `qbl_province` VALUES (1, '陕西省');
INSERT INTO `qbl_province` VALUES (4, '云南省');
INSERT INTO `qbl_province` VALUES (5, '贵阳市');
INSERT INTO `qbl_province` VALUES (6, '湖北省');

-- ----------------------------
-- Table structure for qbl_role
-- ----------------------------
DROP TABLE IF EXISTS `qbl_role`;
CREATE TABLE `qbl_role`  (
  `r_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限id',
  `r_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '权限名称',
  `r_power` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '权限设置，对应菜单的id',
  PRIMARY KEY (`r_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = '管理员权限表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_role
-- ----------------------------
INSERT INTO `qbl_role` VALUES (1, '超级管理员', '36,37,31,32,34,33,35,1,2,3,4,');
INSERT INTO `qbl_role` VALUES (6, '分站站长', '36,37,31,32,34,33,35,');
INSERT INTO `qbl_role` VALUES (8, '客户服务', '36,37,31,32,34,33,35,');
INSERT INTO `qbl_role` VALUES (9, '内容运营', '36,37,31,32,34,33,35,22,23,24,25,26,27,28,14,15,16,');
INSERT INTO `qbl_role` VALUES (12, '推广专员', '14,15,16,10,11,12,19,20,21');

-- ----------------------------
-- Table structure for qbl_setinfo
-- ----------------------------
DROP TABLE IF EXISTS `qbl_setinfo`;
CREATE TABLE `qbl_setinfo`  (
  `s_id` int(100) NOT NULL AUTO_INCREMENT COMMENT '基本配置自增键',
  `s_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '系统配置key',
  `s_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '配置值',
  `s_is_able` tinyint(2) DEFAULT 1 COMMENT '是否可用',
  PRIMARY KEY (`s_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '系统配置表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_setinfo
-- ----------------------------
INSERT INTO `qbl_setinfo` VALUES (1, 'key123', 'vale123', 1);
INSERT INTO `qbl_setinfo` VALUES (2, 'hello', 'hello,how are u ?', 1);
INSERT INTO `qbl_setinfo` VALUES (3, 'setrecord', '版权信息', 1);

-- ----------------------------
-- Table structure for qbl_topic
-- ----------------------------
DROP TABLE IF EXISTS `qbl_topic`;
CREATE TABLE `qbl_topic`  (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '专题id',
  `tp_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '专题名称',
  `tp_p_id` int(10) DEFAULT NULL COMMENT '省份',
  `tp_c_id` int(10) DEFAULT NULL COMMENT '城市',
  `tp_content` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '专题内容（万能编辑器）',
  `tp_view` int(11) DEFAULT 0 COMMENT '浏览量',
  `tp_seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo标题',
  `tp_seo_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo关键词',
  `tp_seo_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo描述',
  `tp_isable` tinyint(2) DEFAULT 1 COMMENT '是否显示',
  `tp_createtime` int(11) DEFAULT NULL COMMENT '发布时间',
  `tp_admin` int(10) DEFAULT NULL COMMENT '发布人，对应管理员的id',
  PRIMARY KEY (`tp_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '专题文章' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_topic
-- ----------------------------
INSERT INTO `qbl_topic` VALUES (2, '灌灌灌灌灌过过过过过过过过过', 1, 2, '<p><img src=\"/ueditor/php/upload/image/20180502/1525253936206853.png\" title=\"1525253936206853.png\" alt=\"QQ截图20180419113340.png\"/>这里写专题内容的点点滴滴多多多多多多多多多多多多<img src=\"http://img.baidu.com/hi/jx2/j_0025.gif\"/><img src=\"http://img.baidu.com/hi/tsj/t_0014.gif\"/>111</p>', 0, '吾问无为谓无无无无无无', 'wwwwwwwwww', '吾问无为谓无无无无无无', 1, 1525255501, NULL);

-- ----------------------------
-- Table structure for qbl_topics
-- ----------------------------
DROP TABLE IF EXISTS `qbl_topics`;
CREATE TABLE `qbl_topics`  (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '专题id',
  `tp_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '专题名称',
  `tp_p_id` int(10) DEFAULT NULL COMMENT '省份',
  `tp_c_id` int(10) DEFAULT NULL COMMENT '城市',
  `tp_content` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '专题内容（万能编辑器）',
  `tp_view` int(11) DEFAULT 0 COMMENT '浏览量',
  `tp_seo_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo标题',
  `tp_seo_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo关键词',
  `tp_seo_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'seo描述',
  `tp_isable` tinyint(2) DEFAULT 1 COMMENT '是否显示',
  `tp_createtime` int(11) DEFAULT NULL COMMENT '发布时间',
  `tp_admin` int(10) DEFAULT NULL COMMENT '发布人，对应管理员的id',
  PRIMARY KEY (`tp_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '专题文章' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_topics
-- ----------------------------
INSERT INTO `qbl_topics` VALUES (2, '灌灌灌灌灌过过过过过过过过过', 1, 2, '<p><img src=\"/ueditor/php/upload/image/20180502/1525253936206853.png\" title=\"1525253936206853.png\" alt=\"QQ截图20180419113340.png\"/>这里写专题内容的点点滴滴多多多多多多多多多多多多<img src=\"http://img.baidu.com/hi/jx2/j_0025.gif\"/><img src=\"http://img.baidu.com/hi/tsj/t_0014.gif\"/></p>', 0, '吾问无为谓无无无无无无', 'wwwwwwwwww', '吾问无为谓无无无无无无', 1, 1525254275, NULL);
INSERT INTO `qbl_topics` VALUES (4, '去玩儿抢人头确认', 1, 3, '<p>这里写专题内容去玩儿</p>', 0, '去去去去去去群群', '去去去去去去群群群群群群', '去去去去去去群群群', 1, 1525255323, NULL);
INSERT INTO `qbl_topics` VALUES (5, '哈哈哈哈哈哈或或或或', 1, 3, '<p>这里写专题内容灌灌灌灌灌过过过过过过过过</p>', 0, '灌灌灌灌灌', '灌灌灌灌灌过过', '灌灌灌灌灌过过过', 1, 1525255427, NULL);

-- ----------------------------
-- Table structure for qbl_type
-- ----------------------------
DROP TABLE IF EXISTS `qbl_type`;
CREATE TABLE `qbl_type`  (
  `type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '类型id',
  `type_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '类型名称',
  `type_branch` int(255) DEFAULT NULL COMMENT '对应的站点ID（仅装修品质）',
  `type_price` int(10) DEFAULT NULL COMMENT '品质单价（仅装修品质）',
  `type_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '封面图',
  `type_remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '类型描述',
  `type_addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `type_sort` tinyint(4) DEFAULT NULL COMMENT '类型分类1，客户标记，2.装修风格；3.装修品质4.房屋类型5.房屋面积',
  `type_isable` tinyint(2) DEFAULT NULL COMMENT '是否可用',
  PRIMARY KEY (`type_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 41 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '各种类型表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qbl_type
-- ----------------------------
INSERT INTO `qbl_type` VALUES (21, '未完成', NULL, NULL, '1b0b09525009fe490b634482b1e7ed40.png', '123123', 1524108900, 1, 1);
INSERT INTO `qbl_type` VALUES (22, '有意向', NULL, NULL, '350135c237131765d736a64278b3bbb9.png', '123', 1524108922, 1, 1);
INSERT INTO `qbl_type` VALUES (23, '已签约', NULL, NULL, '6ea6556cf5e14169c8f151fe44bd3b77.png', '123131', 1524108942, 1, 1);
INSERT INTO `qbl_type` VALUES (24, '转微信', NULL, NULL, '6041818fa03a34201a4f766f4ce0023d.png', '啊啊啊', 1524108968, 1, 1);
INSERT INTO `qbl_type` VALUES (25, '未接通', NULL, NULL, 'f36852cc83db724c69342271079e5548.png', '123', 1524109620, 1, 1);
INSERT INTO `qbl_type` VALUES (26, '已放弃', NULL, NULL, 'e20d3b8b46229d0427542dd06338bd67.png', '12', 1524109674, 1, 1);
INSERT INTO `qbl_type` VALUES (27, '已成交', NULL, NULL, '5e516fbef6fd8edfdbabacfd87fecf6f.png', '123', 1524109695, 1, 1);
INSERT INTO `qbl_type` VALUES (28, '已预约', NULL, NULL, 'fe899bfe993314fea1e22d5e1e2635ba.png', '12', 1524109727, 1, 1);
INSERT INTO `qbl_type` VALUES (29, '无意向', NULL, NULL, '/uploads/20180424/67d15b042965e9ee1171e1c30841067a.png', '实质性变更丰富的', 1524557402, 1, 1);
INSERT INTO `qbl_type` VALUES (31, '美式风格', NULL, NULL, NULL, '高档奢华高档奢华', NULL, 2, 1);
INSERT INTO `qbl_type` VALUES (32, '现代简约', NULL, NULL, NULL, '现代简约现代简约现代简约', NULL, 2, 1);
INSERT INTO `qbl_type` VALUES (37, '一居室', NULL, NULL, NULL, '一居室一居室一居室一居室', NULL, 4, 1);
INSERT INTO `qbl_type` VALUES (34, '中式风格', NULL, NULL, NULL, '哈哈哈哈', NULL, 2, 1);
INSERT INTO `qbl_type` VALUES (36, '经济适用', NULL, NULL, NULL, '经济适用经济适用经济适用经济适用', NULL, 3, 1);
INSERT INTO `qbl_type` VALUES (38, '80-100m²', NULL, NULL, NULL, '80-100m²80-100m²80-100m²80-100m²', NULL, 5, 1);
INSERT INTO `qbl_type` VALUES (39, '高档品质', NULL, NULL, NULL, '驱蚊器翁', NULL, 3, 1);
INSERT INTO `qbl_type` VALUES (40, '高档奢华', NULL, NULL, NULL, '12312', NULL, 3, 1);

SET FOREIGN_KEY_CHECKS = 1;
