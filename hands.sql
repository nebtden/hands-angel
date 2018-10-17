/*
Navicat MySQL Data Transfer


Date: 2018-10-10 23:17:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES ('1', '0', '1', 'Index', 'fa-bar-chart', '/', null, null);
INSERT INTO `admin_menu` VALUES ('2', '0', '2', 'Admin', 'fa-tasks', '', null, null);
INSERT INTO `admin_menu` VALUES ('3', '2', '3', 'Users', 'fa-users', 'auth/users', null, null);
INSERT INTO `admin_menu` VALUES ('4', '2', '4', 'Roles', 'fa-user', 'auth/roles', null, null);
INSERT INTO `admin_menu` VALUES ('5', '2', '5', 'Permission', 'fa-ban', 'auth/permissions', null, null);
INSERT INTO `admin_menu` VALUES ('6', '2', '6', 'Menu', 'fa-bars', 'auth/menu', null, null);
INSERT INTO `admin_menu` VALUES ('7', '2', '7', 'Operation log', 'fa-history', 'auth/logs', null, null);

-- ----------------------------
-- Table structure for admin_operation_log
-- ----------------------------
DROP TABLE IF EXISTS `admin_operation_log`;
CREATE TABLE `admin_operation_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_operation_log_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_operation_log
-- ----------------------------
INSERT INTO `admin_operation_log` VALUES ('1', '1', 'admin', 'GET', '127.0.0.1', '[]', '2018-10-09 14:59:35', '2018-10-09 14:59:35');

-- ----------------------------
-- Table structure for admin_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_permissions`;
CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_permissions
-- ----------------------------
INSERT INTO `admin_permissions` VALUES ('1', 'All permission', '*', '', '*', null, null);
INSERT INTO `admin_permissions` VALUES ('2', 'Dashboard', 'dashboard', 'GET', '/', null, null);
INSERT INTO `admin_permissions` VALUES ('3', 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', null, null);
INSERT INTO `admin_permissions` VALUES ('4', 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', null, null);
INSERT INTO `admin_permissions` VALUES ('5', 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', null, null);

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
INSERT INTO `admin_roles` VALUES ('1', 'Administrator', 'administrator', '2018-10-09 14:59:06', '2018-10-09 14:59:06');

-- ----------------------------
-- Table structure for admin_role_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_menu`;
CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_role_menu
-- ----------------------------
INSERT INTO `admin_role_menu` VALUES ('1', '2', null, null);

-- ----------------------------
-- Table structure for admin_role_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_permissions`;
CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_role_permissions
-- ----------------------------
INSERT INTO `admin_role_permissions` VALUES ('1', '1', null, null);

-- ----------------------------
-- Table structure for admin_role_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_users`;
CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_role_users
-- ----------------------------
INSERT INTO `admin_role_users` VALUES ('1', '1', null, null);

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES ('1', 'admin', '$2y$10$WPFbwsAEyaqD50NgjTxZheAVLG0ryg37zDiOMnlx9/xXpeMC2V7oe', 'Administrator', null, null, '2018-10-09 14:59:06', '2018-10-09 14:59:06');

-- ----------------------------
-- Table structure for admin_user_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_user_permissions`;
CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_user_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for area_cities
-- ----------------------------
DROP TABLE IF EXISTS `area_cities`;
CREATE TABLE `area_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `province_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6591 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of area_cities
-- ----------------------------
INSERT INTO `area_cities` VALUES ('1101', '市辖区', '11');
INSERT INTO `area_cities` VALUES ('1201', '市辖区', '12');
INSERT INTO `area_cities` VALUES ('1301', '石家庄市', '13');
INSERT INTO `area_cities` VALUES ('1302', '唐山市', '13');
INSERT INTO `area_cities` VALUES ('1303', '秦皇岛市', '13');
INSERT INTO `area_cities` VALUES ('1304', '邯郸市', '13');
INSERT INTO `area_cities` VALUES ('1305', '邢台市', '13');
INSERT INTO `area_cities` VALUES ('1306', '保定市', '13');
INSERT INTO `area_cities` VALUES ('1307', '张家口市', '13');
INSERT INTO `area_cities` VALUES ('1308', '承德市', '13');
INSERT INTO `area_cities` VALUES ('1309', '沧州市', '13');
INSERT INTO `area_cities` VALUES ('1310', '廊坊市', '13');
INSERT INTO `area_cities` VALUES ('1311', '衡水市', '13');
INSERT INTO `area_cities` VALUES ('1401', '太原市', '14');
INSERT INTO `area_cities` VALUES ('1402', '大同市', '14');
INSERT INTO `area_cities` VALUES ('1403', '阳泉市', '14');
INSERT INTO `area_cities` VALUES ('1404', '长治市', '14');
INSERT INTO `area_cities` VALUES ('1405', '晋城市', '14');
INSERT INTO `area_cities` VALUES ('1406', '朔州市', '14');
INSERT INTO `area_cities` VALUES ('1407', '晋中市', '14');
INSERT INTO `area_cities` VALUES ('1408', '运城市', '14');
INSERT INTO `area_cities` VALUES ('1409', '忻州市', '14');
INSERT INTO `area_cities` VALUES ('1410', '临汾市', '14');
INSERT INTO `area_cities` VALUES ('1411', '吕梁市', '14');
INSERT INTO `area_cities` VALUES ('1501', '呼和浩特市', '15');
INSERT INTO `area_cities` VALUES ('1502', '包头市', '15');
INSERT INTO `area_cities` VALUES ('1503', '乌海市', '15');
INSERT INTO `area_cities` VALUES ('1504', '赤峰市', '15');
INSERT INTO `area_cities` VALUES ('1505', '通辽市', '15');
INSERT INTO `area_cities` VALUES ('1506', '鄂尔多斯市', '15');
INSERT INTO `area_cities` VALUES ('1507', '呼伦贝尔市', '15');
INSERT INTO `area_cities` VALUES ('1508', '巴彦淖尔市', '15');
INSERT INTO `area_cities` VALUES ('1509', '乌兰察布市', '15');
INSERT INTO `area_cities` VALUES ('1522', '兴安盟', '15');
INSERT INTO `area_cities` VALUES ('1525', '锡林郭勒盟', '15');
INSERT INTO `area_cities` VALUES ('1529', '阿拉善盟', '15');
INSERT INTO `area_cities` VALUES ('2101', '沈阳市', '21');
INSERT INTO `area_cities` VALUES ('2102', '大连市', '21');
INSERT INTO `area_cities` VALUES ('2103', '鞍山市', '21');
INSERT INTO `area_cities` VALUES ('2104', '抚顺市', '21');
INSERT INTO `area_cities` VALUES ('2105', '本溪市', '21');
INSERT INTO `area_cities` VALUES ('2106', '丹东市', '21');
INSERT INTO `area_cities` VALUES ('2107', '锦州市', '21');
INSERT INTO `area_cities` VALUES ('2108', '营口市', '21');
INSERT INTO `area_cities` VALUES ('2109', '阜新市', '21');
INSERT INTO `area_cities` VALUES ('2110', '辽阳市', '21');
INSERT INTO `area_cities` VALUES ('2111', '盘锦市', '21');
INSERT INTO `area_cities` VALUES ('2112', '铁岭市', '21');
INSERT INTO `area_cities` VALUES ('2113', '朝阳市', '21');
INSERT INTO `area_cities` VALUES ('2114', '葫芦岛市', '21');
INSERT INTO `area_cities` VALUES ('2201', '长春市', '22');
INSERT INTO `area_cities` VALUES ('2202', '吉林市', '22');
INSERT INTO `area_cities` VALUES ('2203', '四平市', '22');
INSERT INTO `area_cities` VALUES ('2204', '辽源市', '22');
INSERT INTO `area_cities` VALUES ('2205', '通化市', '22');
INSERT INTO `area_cities` VALUES ('2206', '白山市', '22');
INSERT INTO `area_cities` VALUES ('2207', '松原市', '22');
INSERT INTO `area_cities` VALUES ('2208', '白城市', '22');
INSERT INTO `area_cities` VALUES ('2224', '延边朝鲜族自治州', '22');
INSERT INTO `area_cities` VALUES ('2301', '哈尔滨市', '23');
INSERT INTO `area_cities` VALUES ('2302', '齐齐哈尔市', '23');
INSERT INTO `area_cities` VALUES ('2303', '鸡西市', '23');
INSERT INTO `area_cities` VALUES ('2304', '鹤岗市', '23');
INSERT INTO `area_cities` VALUES ('2305', '双鸭山市', '23');
INSERT INTO `area_cities` VALUES ('2306', '大庆市', '23');
INSERT INTO `area_cities` VALUES ('2307', '伊春市', '23');
INSERT INTO `area_cities` VALUES ('2308', '佳木斯市', '23');
INSERT INTO `area_cities` VALUES ('2309', '七台河市', '23');
INSERT INTO `area_cities` VALUES ('2310', '牡丹江市', '23');
INSERT INTO `area_cities` VALUES ('2311', '黑河市', '23');
INSERT INTO `area_cities` VALUES ('2312', '绥化市', '23');
INSERT INTO `area_cities` VALUES ('2327', '大兴安岭地区', '23');
INSERT INTO `area_cities` VALUES ('3101', '市辖区', '31');
INSERT INTO `area_cities` VALUES ('3201', '南京市', '32');
INSERT INTO `area_cities` VALUES ('3202', '无锡市', '32');
INSERT INTO `area_cities` VALUES ('3203', '徐州市', '32');
INSERT INTO `area_cities` VALUES ('3204', '常州市', '32');
INSERT INTO `area_cities` VALUES ('3205', '苏州市', '32');
INSERT INTO `area_cities` VALUES ('3206', '南通市', '32');
INSERT INTO `area_cities` VALUES ('3207', '连云港市', '32');
INSERT INTO `area_cities` VALUES ('3208', '淮安市', '32');
INSERT INTO `area_cities` VALUES ('3209', '盐城市', '32');
INSERT INTO `area_cities` VALUES ('3210', '扬州市', '32');
INSERT INTO `area_cities` VALUES ('3211', '镇江市', '32');
INSERT INTO `area_cities` VALUES ('3212', '泰州市', '32');
INSERT INTO `area_cities` VALUES ('3213', '宿迁市', '32');
INSERT INTO `area_cities` VALUES ('3301', '杭州市', '33');
INSERT INTO `area_cities` VALUES ('3302', '宁波市', '33');
INSERT INTO `area_cities` VALUES ('3303', '温州市', '33');
INSERT INTO `area_cities` VALUES ('3304', '嘉兴市', '33');
INSERT INTO `area_cities` VALUES ('3305', '湖州市', '33');
INSERT INTO `area_cities` VALUES ('3306', '绍兴市', '33');
INSERT INTO `area_cities` VALUES ('3307', '金华市', '33');
INSERT INTO `area_cities` VALUES ('3308', '衢州市', '33');
INSERT INTO `area_cities` VALUES ('3309', '舟山市', '33');
INSERT INTO `area_cities` VALUES ('3310', '台州市', '33');
INSERT INTO `area_cities` VALUES ('3311', '丽水市', '33');
INSERT INTO `area_cities` VALUES ('3401', '合肥市', '34');
INSERT INTO `area_cities` VALUES ('3402', '芜湖市', '34');
INSERT INTO `area_cities` VALUES ('3403', '蚌埠市', '34');
INSERT INTO `area_cities` VALUES ('3404', '淮南市', '34');
INSERT INTO `area_cities` VALUES ('3405', '马鞍山市', '34');
INSERT INTO `area_cities` VALUES ('3406', '淮北市', '34');
INSERT INTO `area_cities` VALUES ('3407', '铜陵市', '34');
INSERT INTO `area_cities` VALUES ('3408', '安庆市', '34');
INSERT INTO `area_cities` VALUES ('3410', '黄山市', '34');
INSERT INTO `area_cities` VALUES ('3411', '滁州市', '34');
INSERT INTO `area_cities` VALUES ('3412', '阜阳市', '34');
INSERT INTO `area_cities` VALUES ('3413', '宿州市', '34');
INSERT INTO `area_cities` VALUES ('3415', '六安市', '34');
INSERT INTO `area_cities` VALUES ('3416', '亳州市', '34');
INSERT INTO `area_cities` VALUES ('3417', '池州市', '34');
INSERT INTO `area_cities` VALUES ('3418', '宣城市', '34');
INSERT INTO `area_cities` VALUES ('3501', '福州市', '35');
INSERT INTO `area_cities` VALUES ('3502', '厦门市', '35');
INSERT INTO `area_cities` VALUES ('3503', '莆田市', '35');
INSERT INTO `area_cities` VALUES ('3504', '三明市', '35');
INSERT INTO `area_cities` VALUES ('3505', '泉州市', '35');
INSERT INTO `area_cities` VALUES ('3506', '漳州市', '35');
INSERT INTO `area_cities` VALUES ('3507', '南平市', '35');
INSERT INTO `area_cities` VALUES ('3508', '龙岩市', '35');
INSERT INTO `area_cities` VALUES ('3509', '宁德市', '35');
INSERT INTO `area_cities` VALUES ('3601', '南昌市', '36');
INSERT INTO `area_cities` VALUES ('3602', '景德镇市', '36');
INSERT INTO `area_cities` VALUES ('3603', '萍乡市', '36');
INSERT INTO `area_cities` VALUES ('3604', '九江市', '36');
INSERT INTO `area_cities` VALUES ('3605', '新余市', '36');
INSERT INTO `area_cities` VALUES ('3606', '鹰潭市', '36');
INSERT INTO `area_cities` VALUES ('3607', '赣州市', '36');
INSERT INTO `area_cities` VALUES ('3608', '吉安市', '36');
INSERT INTO `area_cities` VALUES ('3609', '宜春市', '36');
INSERT INTO `area_cities` VALUES ('3610', '抚州市', '36');
INSERT INTO `area_cities` VALUES ('3611', '上饶市', '36');
INSERT INTO `area_cities` VALUES ('3701', '济南市', '37');
INSERT INTO `area_cities` VALUES ('3702', '青岛市', '37');
INSERT INTO `area_cities` VALUES ('3703', '淄博市', '37');
INSERT INTO `area_cities` VALUES ('3704', '枣庄市', '37');
INSERT INTO `area_cities` VALUES ('3705', '东营市', '37');
INSERT INTO `area_cities` VALUES ('3706', '烟台市', '37');
INSERT INTO `area_cities` VALUES ('3707', '潍坊市', '37');
INSERT INTO `area_cities` VALUES ('3708', '济宁市', '37');
INSERT INTO `area_cities` VALUES ('3709', '泰安市', '37');
INSERT INTO `area_cities` VALUES ('3710', '威海市', '37');
INSERT INTO `area_cities` VALUES ('3711', '日照市', '37');
INSERT INTO `area_cities` VALUES ('3712', '莱芜市', '37');
INSERT INTO `area_cities` VALUES ('3713', '临沂市', '37');
INSERT INTO `area_cities` VALUES ('3714', '德州市', '37');
INSERT INTO `area_cities` VALUES ('3715', '聊城市', '37');
INSERT INTO `area_cities` VALUES ('3716', '滨州市', '37');
INSERT INTO `area_cities` VALUES ('3717', '菏泽市', '37');
INSERT INTO `area_cities` VALUES ('4101', '郑州市', '41');
INSERT INTO `area_cities` VALUES ('4102', '开封市', '41');
INSERT INTO `area_cities` VALUES ('4103', '洛阳市', '41');
INSERT INTO `area_cities` VALUES ('4104', '平顶山市', '41');
INSERT INTO `area_cities` VALUES ('4105', '安阳市', '41');
INSERT INTO `area_cities` VALUES ('4106', '鹤壁市', '41');
INSERT INTO `area_cities` VALUES ('4107', '新乡市', '41');
INSERT INTO `area_cities` VALUES ('4108', '焦作市', '41');
INSERT INTO `area_cities` VALUES ('4109', '濮阳市', '41');
INSERT INTO `area_cities` VALUES ('4110', '许昌市', '41');
INSERT INTO `area_cities` VALUES ('4111', '漯河市', '41');
INSERT INTO `area_cities` VALUES ('4112', '三门峡市', '41');
INSERT INTO `area_cities` VALUES ('4113', '南阳市', '41');
INSERT INTO `area_cities` VALUES ('4114', '商丘市', '41');
INSERT INTO `area_cities` VALUES ('4115', '信阳市', '41');
INSERT INTO `area_cities` VALUES ('4116', '周口市', '41');
INSERT INTO `area_cities` VALUES ('4117', '驻马店市', '41');
INSERT INTO `area_cities` VALUES ('4190', '省直辖县级行政区划', '41');
INSERT INTO `area_cities` VALUES ('4201', '武汉市', '42');
INSERT INTO `area_cities` VALUES ('4202', '黄石市', '42');
INSERT INTO `area_cities` VALUES ('4203', '十堰市', '42');
INSERT INTO `area_cities` VALUES ('4205', '宜昌市', '42');
INSERT INTO `area_cities` VALUES ('4206', '襄阳市', '42');
INSERT INTO `area_cities` VALUES ('4207', '鄂州市', '42');
INSERT INTO `area_cities` VALUES ('4208', '荆门市', '42');
INSERT INTO `area_cities` VALUES ('4209', '孝感市', '42');
INSERT INTO `area_cities` VALUES ('4210', '荆州市', '42');
INSERT INTO `area_cities` VALUES ('4211', '黄冈市', '42');
INSERT INTO `area_cities` VALUES ('4212', '咸宁市', '42');
INSERT INTO `area_cities` VALUES ('4213', '随州市', '42');
INSERT INTO `area_cities` VALUES ('4228', '恩施土家族苗族自治州', '42');
INSERT INTO `area_cities` VALUES ('4290', '省直辖县级行政区划', '42');
INSERT INTO `area_cities` VALUES ('4301', '长沙市', '43');
INSERT INTO `area_cities` VALUES ('4302', '株洲市', '43');
INSERT INTO `area_cities` VALUES ('4303', '湘潭市', '43');
INSERT INTO `area_cities` VALUES ('4304', '衡阳市', '43');
INSERT INTO `area_cities` VALUES ('4305', '邵阳市', '43');
INSERT INTO `area_cities` VALUES ('4306', '岳阳市', '43');
INSERT INTO `area_cities` VALUES ('4307', '常德市', '43');
INSERT INTO `area_cities` VALUES ('4308', '张家界市', '43');
INSERT INTO `area_cities` VALUES ('4309', '益阳市', '43');
INSERT INTO `area_cities` VALUES ('4310', '郴州市', '43');
INSERT INTO `area_cities` VALUES ('4311', '永州市', '43');
INSERT INTO `area_cities` VALUES ('4312', '怀化市', '43');
INSERT INTO `area_cities` VALUES ('4313', '娄底市', '43');
INSERT INTO `area_cities` VALUES ('4331', '湘西土家族苗族自治州', '43');
INSERT INTO `area_cities` VALUES ('4401', '广州市', '44');
INSERT INTO `area_cities` VALUES ('4402', '韶关市', '44');
INSERT INTO `area_cities` VALUES ('4403', '深圳市', '44');
INSERT INTO `area_cities` VALUES ('4404', '珠海市', '44');
INSERT INTO `area_cities` VALUES ('4405', '汕头市', '44');
INSERT INTO `area_cities` VALUES ('4406', '佛山市', '44');
INSERT INTO `area_cities` VALUES ('4407', '江门市', '44');
INSERT INTO `area_cities` VALUES ('4408', '湛江市', '44');
INSERT INTO `area_cities` VALUES ('4409', '茂名市', '44');
INSERT INTO `area_cities` VALUES ('4412', '肇庆市', '44');
INSERT INTO `area_cities` VALUES ('4413', '惠州市', '44');
INSERT INTO `area_cities` VALUES ('4414', '梅州市', '44');
INSERT INTO `area_cities` VALUES ('4415', '汕尾市', '44');
INSERT INTO `area_cities` VALUES ('4416', '河源市', '44');
INSERT INTO `area_cities` VALUES ('4417', '阳江市', '44');
INSERT INTO `area_cities` VALUES ('4418', '清远市', '44');
INSERT INTO `area_cities` VALUES ('4419', '东莞市', '44');
INSERT INTO `area_cities` VALUES ('4420', '中山市', '44');
INSERT INTO `area_cities` VALUES ('4451', '潮州市', '44');
INSERT INTO `area_cities` VALUES ('4452', '揭阳市', '44');
INSERT INTO `area_cities` VALUES ('4453', '云浮市', '44');
INSERT INTO `area_cities` VALUES ('4501', '南宁市', '45');
INSERT INTO `area_cities` VALUES ('4502', '柳州市', '45');
INSERT INTO `area_cities` VALUES ('4503', '桂林市', '45');
INSERT INTO `area_cities` VALUES ('4504', '梧州市', '45');
INSERT INTO `area_cities` VALUES ('4505', '北海市', '45');
INSERT INTO `area_cities` VALUES ('4506', '防城港市', '45');
INSERT INTO `area_cities` VALUES ('4507', '钦州市', '45');
INSERT INTO `area_cities` VALUES ('4508', '贵港市', '45');
INSERT INTO `area_cities` VALUES ('4509', '玉林市', '45');
INSERT INTO `area_cities` VALUES ('4510', '百色市', '45');
INSERT INTO `area_cities` VALUES ('4511', '贺州市', '45');
INSERT INTO `area_cities` VALUES ('4512', '河池市', '45');
INSERT INTO `area_cities` VALUES ('4513', '来宾市', '45');
INSERT INTO `area_cities` VALUES ('4514', '崇左市', '45');
INSERT INTO `area_cities` VALUES ('4601', '海口市', '46');
INSERT INTO `area_cities` VALUES ('4602', '三亚市', '46');
INSERT INTO `area_cities` VALUES ('4603', '三沙市', '46');
INSERT INTO `area_cities` VALUES ('4604', '儋州市', '46');
INSERT INTO `area_cities` VALUES ('4690', '省直辖县级行政区划', '46');
INSERT INTO `area_cities` VALUES ('5001', '市辖区', '50');
INSERT INTO `area_cities` VALUES ('5002', '县', '50');
INSERT INTO `area_cities` VALUES ('5101', '成都市', '51');
INSERT INTO `area_cities` VALUES ('5103', '自贡市', '51');
INSERT INTO `area_cities` VALUES ('5104', '攀枝花市', '51');
INSERT INTO `area_cities` VALUES ('5105', '泸州市', '51');
INSERT INTO `area_cities` VALUES ('5106', '德阳市', '51');
INSERT INTO `area_cities` VALUES ('5107', '绵阳市', '51');
INSERT INTO `area_cities` VALUES ('5108', '广元市', '51');
INSERT INTO `area_cities` VALUES ('5109', '遂宁市', '51');
INSERT INTO `area_cities` VALUES ('5110', '内江市', '51');
INSERT INTO `area_cities` VALUES ('5111', '乐山市', '51');
INSERT INTO `area_cities` VALUES ('5113', '南充市', '51');
INSERT INTO `area_cities` VALUES ('5114', '眉山市', '51');
INSERT INTO `area_cities` VALUES ('5115', '宜宾市', '51');
INSERT INTO `area_cities` VALUES ('5116', '广安市', '51');
INSERT INTO `area_cities` VALUES ('5117', '达州市', '51');
INSERT INTO `area_cities` VALUES ('5118', '雅安市', '51');
INSERT INTO `area_cities` VALUES ('5119', '巴中市', '51');
INSERT INTO `area_cities` VALUES ('5120', '资阳市', '51');
INSERT INTO `area_cities` VALUES ('5132', '阿坝藏族羌族自治州', '51');
INSERT INTO `area_cities` VALUES ('5133', '甘孜藏族自治州', '51');
INSERT INTO `area_cities` VALUES ('5134', '凉山彝族自治州', '51');
INSERT INTO `area_cities` VALUES ('5201', '贵阳市', '52');
INSERT INTO `area_cities` VALUES ('5202', '六盘水市', '52');
INSERT INTO `area_cities` VALUES ('5203', '遵义市', '52');
INSERT INTO `area_cities` VALUES ('5204', '安顺市', '52');
INSERT INTO `area_cities` VALUES ('5205', '毕节市', '52');
INSERT INTO `area_cities` VALUES ('5206', '铜仁市', '52');
INSERT INTO `area_cities` VALUES ('5223', '黔西南布依族苗族自治州', '52');
INSERT INTO `area_cities` VALUES ('5226', '黔东南苗族侗族自治州', '52');
INSERT INTO `area_cities` VALUES ('5227', '黔南布依族苗族自治州', '52');
INSERT INTO `area_cities` VALUES ('5301', '昆明市', '53');
INSERT INTO `area_cities` VALUES ('5303', '曲靖市', '53');
INSERT INTO `area_cities` VALUES ('5304', '玉溪市', '53');
INSERT INTO `area_cities` VALUES ('5305', '保山市', '53');
INSERT INTO `area_cities` VALUES ('5306', '昭通市', '53');
INSERT INTO `area_cities` VALUES ('5307', '丽江市', '53');
INSERT INTO `area_cities` VALUES ('5308', '普洱市', '53');
INSERT INTO `area_cities` VALUES ('5309', '临沧市', '53');
INSERT INTO `area_cities` VALUES ('5323', '楚雄彝族自治州', '53');
INSERT INTO `area_cities` VALUES ('5325', '红河哈尼族彝族自治州', '53');
INSERT INTO `area_cities` VALUES ('5326', '文山壮族苗族自治州', '53');
INSERT INTO `area_cities` VALUES ('5328', '西双版纳傣族自治州', '53');
INSERT INTO `area_cities` VALUES ('5329', '大理白族自治州', '53');
INSERT INTO `area_cities` VALUES ('5331', '德宏傣族景颇族自治州', '53');
INSERT INTO `area_cities` VALUES ('5333', '怒江傈僳族自治州', '53');
INSERT INTO `area_cities` VALUES ('5334', '迪庆藏族自治州', '53');
INSERT INTO `area_cities` VALUES ('5401', '拉萨市', '54');
INSERT INTO `area_cities` VALUES ('5402', '日喀则市', '54');
INSERT INTO `area_cities` VALUES ('5403', '昌都市', '54');
INSERT INTO `area_cities` VALUES ('5404', '林芝市', '54');
INSERT INTO `area_cities` VALUES ('5405', '山南市', '54');
INSERT INTO `area_cities` VALUES ('5424', '那曲地区', '54');
INSERT INTO `area_cities` VALUES ('5425', '阿里地区', '54');
INSERT INTO `area_cities` VALUES ('6101', '西安市', '61');
INSERT INTO `area_cities` VALUES ('6102', '铜川市', '61');
INSERT INTO `area_cities` VALUES ('6103', '宝鸡市', '61');
INSERT INTO `area_cities` VALUES ('6104', '咸阳市', '61');
INSERT INTO `area_cities` VALUES ('6105', '渭南市', '61');
INSERT INTO `area_cities` VALUES ('6106', '延安市', '61');
INSERT INTO `area_cities` VALUES ('6107', '汉中市', '61');
INSERT INTO `area_cities` VALUES ('6108', '榆林市', '61');
INSERT INTO `area_cities` VALUES ('6109', '安康市', '61');
INSERT INTO `area_cities` VALUES ('6110', '商洛市', '61');
INSERT INTO `area_cities` VALUES ('6201', '兰州市', '62');
INSERT INTO `area_cities` VALUES ('6202', '嘉峪关市', '62');
INSERT INTO `area_cities` VALUES ('6203', '金昌市', '62');
INSERT INTO `area_cities` VALUES ('6204', '白银市', '62');
INSERT INTO `area_cities` VALUES ('6205', '天水市', '62');
INSERT INTO `area_cities` VALUES ('6206', '武威市', '62');
INSERT INTO `area_cities` VALUES ('6207', '张掖市', '62');
INSERT INTO `area_cities` VALUES ('6208', '平凉市', '62');
INSERT INTO `area_cities` VALUES ('6209', '酒泉市', '62');
INSERT INTO `area_cities` VALUES ('6210', '庆阳市', '62');
INSERT INTO `area_cities` VALUES ('6211', '定西市', '62');
INSERT INTO `area_cities` VALUES ('6212', '陇南市', '62');
INSERT INTO `area_cities` VALUES ('6229', '临夏回族自治州', '62');
INSERT INTO `area_cities` VALUES ('6230', '甘南藏族自治州', '62');
INSERT INTO `area_cities` VALUES ('6301', '西宁市', '63');
INSERT INTO `area_cities` VALUES ('6302', '海东市', '63');
INSERT INTO `area_cities` VALUES ('6322', '海北藏族自治州', '63');
INSERT INTO `area_cities` VALUES ('6323', '黄南藏族自治州', '63');
INSERT INTO `area_cities` VALUES ('6325', '海南藏族自治州', '63');
INSERT INTO `area_cities` VALUES ('6326', '果洛藏族自治州', '63');
INSERT INTO `area_cities` VALUES ('6327', '玉树藏族自治州', '63');
INSERT INTO `area_cities` VALUES ('6328', '海西蒙古族藏族自治州', '63');
INSERT INTO `area_cities` VALUES ('6401', '银川市', '64');
INSERT INTO `area_cities` VALUES ('6402', '石嘴山市', '64');
INSERT INTO `area_cities` VALUES ('6403', '吴忠市', '64');
INSERT INTO `area_cities` VALUES ('6404', '固原市', '64');
INSERT INTO `area_cities` VALUES ('6405', '中卫市', '64');
INSERT INTO `area_cities` VALUES ('6501', '乌鲁木齐市', '65');
INSERT INTO `area_cities` VALUES ('6502', '克拉玛依市', '65');
INSERT INTO `area_cities` VALUES ('6504', '吐鲁番市', '65');
INSERT INTO `area_cities` VALUES ('6505', '哈密市', '65');
INSERT INTO `area_cities` VALUES ('6523', '昌吉回族自治州', '65');
INSERT INTO `area_cities` VALUES ('6527', '博尔塔拉蒙古自治州', '65');
INSERT INTO `area_cities` VALUES ('6528', '巴音郭楞蒙古自治州', '65');
INSERT INTO `area_cities` VALUES ('6529', '阿克苏地区', '65');
INSERT INTO `area_cities` VALUES ('6530', '克孜勒苏柯尔克孜自治州', '65');
INSERT INTO `area_cities` VALUES ('6531', '喀什地区', '65');
INSERT INTO `area_cities` VALUES ('6532', '和田地区', '65');
INSERT INTO `area_cities` VALUES ('6540', '伊犁哈萨克自治州', '65');
INSERT INTO `area_cities` VALUES ('6542', '塔城地区', '65');
INSERT INTO `area_cities` VALUES ('6543', '阿勒泰地区', '65');
INSERT INTO `area_cities` VALUES ('6590', '自治区直辖县级行政区划', '65');

-- ----------------------------
-- Table structure for area_provinces
-- ----------------------------
DROP TABLE IF EXISTS `area_provinces`;
CREATE TABLE `area_provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of area_provinces
-- ----------------------------
INSERT INTO `area_provinces` VALUES ('11', '北京市');
INSERT INTO `area_provinces` VALUES ('12', '天津市');
INSERT INTO `area_provinces` VALUES ('13', '河北省');
INSERT INTO `area_provinces` VALUES ('14', '山西省');
INSERT INTO `area_provinces` VALUES ('15', '内蒙古自治区');
INSERT INTO `area_provinces` VALUES ('21', '辽宁省');
INSERT INTO `area_provinces` VALUES ('22', '吉林省');
INSERT INTO `area_provinces` VALUES ('23', '黑龙江省');
INSERT INTO `area_provinces` VALUES ('31', '上海市');
INSERT INTO `area_provinces` VALUES ('32', '江苏省');
INSERT INTO `area_provinces` VALUES ('33', '浙江省');
INSERT INTO `area_provinces` VALUES ('34', '安徽省');
INSERT INTO `area_provinces` VALUES ('35', '福建省');
INSERT INTO `area_provinces` VALUES ('36', '江西省');
INSERT INTO `area_provinces` VALUES ('37', '山东省');
INSERT INTO `area_provinces` VALUES ('41', '河南省');
INSERT INTO `area_provinces` VALUES ('42', '湖北省');
INSERT INTO `area_provinces` VALUES ('43', '湖南省');
INSERT INTO `area_provinces` VALUES ('44', '广东省');
INSERT INTO `area_provinces` VALUES ('45', '广西壮族自治区');
INSERT INTO `area_provinces` VALUES ('46', '海南省');
INSERT INTO `area_provinces` VALUES ('50', '重庆市');
INSERT INTO `area_provinces` VALUES ('51', '四川省');
INSERT INTO `area_provinces` VALUES ('52', '贵州省');
INSERT INTO `area_provinces` VALUES ('53', '云南省');
INSERT INTO `area_provinces` VALUES ('54', '西藏自治区');
INSERT INTO `area_provinces` VALUES ('61', '陕西省');
INSERT INTO `area_provinces` VALUES ('62', '甘肃省');
INSERT INTO `area_provinces` VALUES ('63', '青海省');
INSERT INTO `area_provinces` VALUES ('64', '宁夏回族自治区');
INSERT INTO `area_provinces` VALUES ('65', '新疆维吾尔自治区');

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `title` varchar(255) NOT NULL COMMENT '文章内容',
  `img` varchar(255) DEFAULT '' COMMENT '存储的地址，用于列表页显示',
  `content` text COMMENT '内容',
  `category_id` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '状态',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of articles

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '公司新闻', '/admin/menu/index', '1');
INSERT INTO `category` VALUES ('2', '鼎翰文化', '/admin/role/index', '1');
INSERT INTO `category` VALUES ('3', '精英人物', null, '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '菜单列表', null, '/admin/menu/index', '1', null);
INSERT INTO `menu` VALUES ('2', '角色列表', null, '/admin/role/index', '1', null);
INSERT INTO `menu` VALUES ('3', '文章列表', null, '/article/index', null, null);
INSERT INTO `menu` VALUES ('4', '任务列表', null, '/task/index', null, null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2016_01_04_173148_create_admin_tables', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `user_id` int(11) NOT NULL DEFAULT '0' ,
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容相关',
  `reply` text COMMENT '回复,也即评价',
  `type_id` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型  1：视频   2：偷窥   3：文爱    4：手天使',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态 0 取消  1默认，开放   2自动关闭    3完成',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('6', '0', 'simon', '1029928870@qq.com', null, '1', '1', '1535082103', '1535082103');

-- ----------------------------
-- Table structure for tasks_apply_log
-- ----------------------------
DROP TABLE IF EXISTS `tasks_apply_log`;
CREATE TABLE `tasks_apply_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `user_id` int(11) NOT NULL COMMENT '申请人id',
  `task_id` varchar(255) NOT NULL COMMENT '标题',
  `apply_user_id` int(11) NOT NULL COMMENT '申请人id',
  `applied_user_id` int(11) NOT NULL COMMENT '接收人id，冗余字段',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '信息是否读取',
  `msg` text NOT NULL COMMENT '内容相关',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of tasks_apply_log
-- ----------------------------
INSERT INTO `tasks_apply_log` VALUES ('6', '0', 'simon', '0', '0', '1029928870@qq.com', '1535082103', '1535082103');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) NOT NULL COMMENT '自动登录key',
  `password` varchar(255) DEFAULT NULL COMMENT '密码，明文存储',
  `password_hash` varchar(255) NOT NULL COMMENT '加密密码',
  `password_reset_token` varchar(255) DEFAULT NULL COMMENT '重置密码token',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `type` smallint(1) NOT NULL DEFAULT '0' COMMENT '0：申请者  1完成者  ',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('7', 'simon', 'Qk5mclmUzomIkB33nsOsguZu_nskC6SS', null, '$2y$13$v8uRf0qHkaGW8QXY0YHkW.KeNVcRyGOQxjO.tkHqMKNvdPB3FyYwG', null, '278203533@qq.com', '10', '10', '1536302493', '1536302493');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否关闭此用户',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer_user_id`  int(11) NOT NULL DEFAULT 0 COMMENT '推荐人id' AFTER `remember_token`;
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('19', 'test', 'akothissheila@gmail.com', '2018-10-09 22:08:01', '$2y$10$iqZIp82igtuIEf8dNXW3XOYVk0GUy0.TU1LdIn4Ggbl.9McOXBdbi','', 1,null, null, null);
INSERT INTO `users` VALUES ('20', 'simon', 'simon@qq.com', null, '$2y$10$MWoYqcSSck3Dcqgzg9pic.NQHxDGe5b0MeQwp4M0ve6Hb8yEWoH..','',1, null, '2018-10-10 14:24:43', '2018-10-10 14:24:43');

-- ----------------------------
-- Table structure for user_images
-- ----------------------------
DROP TABLE IF EXISTS `user_images`;
CREATE TABLE `user_images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `src` varchar(255) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '类型  1  头像  2 生活照  3弟弟妹妹照   4个人照',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Records of user_images
-- ----------------------------

-- ----------------------------
-- Table structure for user_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 启用 0 没启动',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `user_menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_menu
-- ----------------------------
INSERT INTO `user_menu` VALUES ('1', '11', null, '/admin/menu/index', '1', null, '1');
INSERT INTO `user_menu` VALUES ('2', '22', null, '/admin/role/index', '1', null, '1');
INSERT INTO `user_menu` VALUES ('3', '33', null, '/article/index', null, null, '1');
INSERT INTO `user_menu` VALUES ('4', '33', null, '/task/index', null, null, '1');


-- ----------------------------
-- Table structure for user_message
-- ----------------------------
DROP TABLE IF EXISTS `user_messages`;
CREATE TABLE `user_messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `real_name` varchar(40) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `introduce` text ,
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '手机',
  `is_married` tinyint(1) DEFAULT '0' COMMENT '0  未结婚   1结婚',
  `email` varchar(120) NOT NULL DEFAULT '' COMMENT '邮箱',
  `sex` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0、未知，1、男，2、女，3、女改男，4、男改女',
  `birth_day` date DEFAULT NULL,
  `age` int(11) NOT NULL DEFAULT '0' COMMENT '年龄,此处根据出生日期计算',
  `qq` varchar(120)  NULL DEFAULT '' COMMENT 'QQ',
  `wechat` varchar(120)  NULL DEFAULT '' COMMENT 'wechat',
  `head_image` varchar(255) DEFAULT '' COMMENT '需上传地址，头像地址',
  `have_sex` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否有性经验',
  `disease` text COMMENT '疾病',
  `remark` text,
  `province_id` int(11) NOT NULL DEFAULT '0' COMMENT '城市id',
  `city_id` int(11) NOT NULL DEFAULT '0' COMMENT '城市id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Records of user_message
-- ----------------------------

-- update.sql

ALTER TABLE `users`
ADD COLUMN `referrer_user_id`  int(11) NOT NULL DEFAULT 0 COMMENT '推荐人id' AFTER `remember_token`;


CREATE TABLE `users_relations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apply_user_id` int(11) NOT NULL DEFAULT '0',
  `applied_user_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否关闭此用户  1 开放  0 取消',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`applied_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


//新增用户关系表
