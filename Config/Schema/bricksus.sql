/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bricksus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-10 09:20:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for equipos
-- ----------------------------
DROP TABLE IF EXISTS `equipos`;
CREATE TABLE `equipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of equipos
-- ----------------------------
INSERT INTO `equipos` VALUES ('2', 'Alberto AzpÃºrua Lara', 'CEO', 'https://mx.linkedin.com/in/aazpurua', 'img1457567614I8G.jpg');
INSERT INTO `equipos` VALUES ('3', 'Diego Gonzalez Romano', 'CFO', 'https://mx.linkedin.com/in/diego-g-romano-2b409033', 'img1457567648L3J.jpg');
INSERT INTO `equipos` VALUES ('4', 'Mauricio Zapiain Lomelin', 'IRO', 'https://mx.linkedin.com/in/mauricio-zapiain-a8166013/es', 'img145756767943K.jpg');

-- ----------------------------
-- Table structure for faqs
-- ----------------------------
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ask` varchar(255) DEFAULT NULL,
  `answer` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of faqs
-- ----------------------------
INSERT INTO `faqs` VALUES ('1', 'Â¿QuÃ© es Bricks?', 'BRICKS es un fondo de inversiÃ³n inmnobiliario planeado para adquirir, poseer, construir, arrendar yoperar un amplio rango de inmuebles comerciales en MÃ©xico.');
INSERT INTO `faqs` VALUES ('2', 'Â¿QuÃ© tipo de inversiones hace Bricks?', 'Bricks tiene su foco en inversiones patrimoniales en bien raÃ­z comercial, sÃ³lo invertimos en propiedades que estÃ¡n estabilizadas, con contratos de largo plazo, tipo NNN el inquilino paga â€œpredial, seguro y mantenimiento mayor y menor\", por un mÃ­nimo de cinco aÃ±os.');
INSERT INTO `faqs` VALUES ('3', 'Â¿QuÃ© tipo de inquilinos busca Bricks?', 'Con inquilinos que tengan calificaciÃ³n de grado de inversiÃ³n B por calificaciÃ³n Standar & Poor`s o superior. El precio de las propiedades que adquirimos son desde US$1.500.000 hasta US$20.000.000.');
INSERT INTO `faqs` VALUES ('4', 'Â¿CuÃ¡l es el plazo de las inversiones?', 'Nuestras inversiones son planteadas desde un inicio a un mÃ­nimo de diez aÃ±os a un mÃ¡ximo de 20 aÃ±os, planeando su venta a partir del ultimo aÃ±o de inversiÃ³n, excepto que los socios deseen seguir recibiendo rentas de dicha propiedad.');
INSERT INTO `faqs` VALUES ('5', 'Â¿QuiÃ©n administra?', 'Bricks Asset Management LLC es responsable de la administraciÃ³n de la propiedad. Sus obligaciones comprenden:\r\n\r\n- AnÃ¡lisis Financiero.\r\n- AnÃ¡lisis fÃ­sico y ambiental.\r\n- BÃºsqueda de deuda para la adquisiciÃ³n de la propiedad.\r\n- Cobros de renta.\r\n- Manejo de relaciÃ³n con los inquilinos.\r\n- Pagos a proveedores e impuestos de propiedad.\r\n- Apoyo en la estructura Fiscal y contable mÃ¡s idÃ³nea para nuestros inversionistas.');
INSERT INTO `faqs` VALUES ('6', 'Â¿CuÃ¡les son los honorarios de Bricks?', 'Bricks Asset Management LLC cobra tres honorarios:\r\n\r\n-10% De las amortizaciones de capital y plusvalÃ­a de la propiedad.\r\n-Entre un 10% y 20% del  flujo de caja libre de las rentas dependiendo de la complejidad de los contratos.\r\n-3% del valor de la propiedad pagadero al momento de la compra.');
INSERT INTO `faqs` VALUES ('7', 'Â¿Por quÃ© las propiedades se compran siempre con deuda?', 'Bricks Asset Management LLC cobra tres honorarios:\r\n\r\nNuestras propiedades se adquieren con un endeudamiento del 70% del costo de adquisiciÃ³n de la propiedad, esto se busca ya que del flujo de las rentas la deuda se paga sola, siendo Bricks Asset Management LLC avalista de dicha deuda, con esto se logra:\r\n\r\nUn mejor retorno sobre el capital invertido y una importante ganancia en el patrimonio ya que al momento de la venta la propiedad esta pagada en al menos un 60%, cuando al inicio de la inversiÃ³n solo estaba pagada al 30%.');
INSERT INTO `faqs` VALUES ('8', 'Â¿CuÃ¡nto es la inversiÃ³n mÃ­nima?', 'La inversiÃ³n mÃ­nima en nuestras adquisiciones es de US$25.000 mÃ¡s mÃºltiplos de US$1000. Si la inversiÃ³n es de un 15% o superior del capital requerido se pedirÃ¡ aval al inversionista de la deuda, esto por disposiciones bancarias.');
INSERT INTO `faqs` VALUES ('9', 'Â¿CuÃ¡l es la estructura legal de la inversiÃ³n?', 'Para la mÃ¡s eficiente estructura Fiscal de nuestros inversionistas, se crea una empresa de propÃ³sito especializado LLC â€œLimited Liability Companyâ€ ej. Bricks 1 LLC.\r\n\r\nEsta empresa de la cual es accionista es propietaria del inmueble y deudora de la hipoteca de compra de la propiedad.\r\n\r\nEl inversionista posee acciones de la empresa y paga impuestos segÃºn la figura legal que use el inversionista.');
INSERT INTO `faqs` VALUES ('10', 'Â¿Bricks Asset Management LLC recibe dinero de inversionistas?', 'NO, Todos los fondos de la operaciÃ³n son siempre depositados en la cuenta escrow â€œgarantÃ­aâ€ en el despacho de abogados que hace el titulo de propiedad.\r\n\r\nEn Estados Unidos tanto el capital, dinero de deuda bancaria y gastos relacionados de la operaciÃ³n son depositados en dicha cuenta y el emisor del titulo es responsable del pago a todos los involucrados. Bricks solo puede cobrar sus respectivos honorarios contemplados');
INSERT INTO `faqs` VALUES ('11', 'Seguridad jurÃ­dica', 'Nuestras inversiones son planteadas desde un inicio a un mÃ­nimo de diez aÃ±os a un mÃ¡ximo de 20 aÃ±os, planeando su venta a partir del ultimo aÃ±o de inversiÃ³n, excepto que los socios deseen seguir recibiendo rentas de dicha propiedad.');
INSERT INTO `faqs` VALUES ('12', 'Â¿Con quÃ© periodicidad recibirÃ© mis rentas?', 'Mensualmente');
INSERT INTO `faqs` VALUES ('13', 'Â¿CuÃ¡l es mi responsabilidad del pago de impuestos en USA?', 'En Estados Unidos el inversionista debe ser persona fÃ­sica o moral nacional o extranjera, presentar una declaraciÃ³n anual y dependiendo de las ganancias recibidas es la tasa fiscal que paga.\r\n\r\nEs muy importante considerar que si la  inversiÃ³n es hecha a nombre de una  persona fÃ­sica pagarÃ¡ en caso de fallecimiento un 40% de impuesto a la herencia, por eso importante hacerlo a nombre de una persona moral lo cual bajarÃ¡ su tasa de impuestos a las ganancias de capital del 40% al 20% al final de la inversiÃ³n.');
INSERT INTO `faqs` VALUES ('14', 'Â¿Puedo vender mi participaciÃ³n en Bricks?', 'SI, Bricks ofrece primero a los socios en la empresa la participaciÃ³n que esta vendiendo el inversionista. Si ninguno quisiera comprarla Bricks la ofrecerÃ¡ a sus inversionistas, cobrando una comisiÃ³n del 5%.\r\n\r\nSi el inversionista la vende por su cuenta no se incurre en ningÃºn gasto, solo debe notificar a Bricks para hacer la documentaciÃ³n de cesiÃ³n de sus acciones.');
INSERT INTO `faqs` VALUES ('16', 'Rendimientos', 'Los rendimientos varÃ­an dependiendo de la propiedad.');

-- ----------------------------
-- Table structure for homes
-- ----------------------------
DROP TABLE IF EXISTS `homes`;
CREATE TABLE `homes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of homes
-- ----------------------------
INSERT INTO `homes` VALUES ('5', 'img1457544802QJ6.jpg', 'asdas', 'Fondo de inversiÃ³n inmobiliario <br>planeado para adquirir, poseer, construir, arrendar y operar un <br> amplio rango de inmuebles  comerciales en Estados Unidos.', 'item 1');
INSERT INTO `homes` VALUES ('6', 'img1457544919I6V.jpg', 'asdasd', 'Fondo de inversiÃ³n inmobiliario <br>planeado para adquirir, poseer, construir, arrendar y operar un <br> amplio rango de inmuebles  comerciales en Estados Unidos.', 'item 2');

-- ----------------------------
-- Table structure for login_tokens
-- ----------------------------
DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for propierties
-- ----------------------------
DROP TABLE IF EXISTS `propierties`;
CREATE TABLE `propierties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `tenencia` int(11) DEFAULT NULL,
  `retorno_cash` float DEFAULT NULL,
  `tir` float DEFAULT NULL,
  `status_percent` float DEFAULT NULL,
  `status_top` float DEFAULT NULL,
  `info` text,
  `retorno_nominal` float DEFAULT NULL,
  `xls` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ubicacion` text,
  `valor` float DEFAULT NULL,
  `recaudado` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of propierties
-- ----------------------------
INSERT INTO `propierties` VALUES ('18', 'Propiedad de prueba 1', '10', '9.9', '11.55', '100', '575000', 'Agencia bancaria rentada a Citibank, sub arrendada a Cadence Bank, es un banco con 128 aÃ±os de tradiciÃ³n bancaria y 80 agencias en el Sureste de Estados Unidos Agencia bancaria rentada a Citibank, sub arrendada a Cadence Bank, es un banco con sdl asdk asd askdajsldk asldkaj sdlkasjd alskd alskdja sl', '10.51', null, null, '2016-03-09 16:03:12', '2016-04-12 15:51:14', 'Florida', '1550000', '575000');
INSERT INTO `propierties` VALUES ('19', 'Propiedad de prueba 2', '123', '123', '123', '100', '12000000', 'sdkj', '123', null, null, '2016-03-09 16:14:01', '2016-03-30 01:24:31', 'Louisiana', '12000000', '12000000');
INSERT INTO `propierties` VALUES ('20', 'Propiedad de prueba 3', '12', '6', '6', '50', '10000000', 'info adicional', '12', null, null, '2016-03-15 16:19:04', '2016-04-06 03:08:05', 'San Luis PotosÃ­', '12000000', '5000000');

-- ----------------------------
-- Table structure for seodescriptions
-- ----------------------------
DROP TABLE IF EXISTS `seodescriptions`;
CREATE TABLE `seodescriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seodescriptions
-- ----------------------------
INSERT INTO `seodescriptions` VALUES ('1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare, libero et feugiat ullamcorper, lectus odio rhoncus nibh, vel sollicitudin purus libero eget velit. Sed tempor turpis vitae urna mattis accumsan. d');

-- ----------------------------
-- Table structure for seokeywords
-- ----------------------------
DROP TABLE IF EXISTS `seokeywords`;
CREATE TABLE `seokeywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seokeywords
-- ----------------------------
INSERT INTO `seokeywords` VALUES ('2', 'diego');
INSERT INTO `seokeywords` VALUES ('3', 'brito');
INSERT INTO `seokeywords` VALUES ('4', 'eduardo');

-- ----------------------------
-- Table structure for testimonios
-- ----------------------------
DROP TABLE IF EXISTS `testimonios`;
CREATE TABLE `testimonios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testimonio` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of testimonios
-- ----------------------------
INSERT INTO `testimonios` VALUES ('2', 'Para el dinero que tenÃ­a ahorrado en dÃ³lares, no habÃ­a conseguido este nivel de rendimiento y seguridad', 'Eitan, MÃ©xico.');
INSERT INTO `testimonios` VALUES ('3', 'Me encanta que puedo ir diversificando mi portafolio, en distintas propiedades', 'Luisa Elena, MÃ©xico.');
INSERT INTO `testimonios` VALUES ('4', 'El nivel de transparencia con que presentan las transacciones es similar al fondo en donde trabajo, claro yo no tengo el capital mÃ­nimo que exigen en este fondo', 'Miguel, MÃ©xico.');

-- ----------------------------
-- Table structure for uploads
-- ----------------------------
DROP TABLE IF EXISTS `uploads`;
CREATE TABLE `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `propierty_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of uploads
-- ----------------------------
INSERT INTO `uploads` VALUES ('73', 'img1457074050S2W.jpg', '13');
INSERT INTO `uploads` VALUES ('74', 'img1457466985BYZ.jpg', '14');
INSERT INTO `uploads` VALUES ('75', 'img14574669851YK.jpg', '14');
INSERT INTO `uploads` VALUES ('76', 'img1457466985C7D.jpg', '14');
INSERT INTO `uploads` VALUES ('77', 'img14574669868UA.jpg', '14');
INSERT INTO `uploads` VALUES ('78', 'img1457467658X1Z.jpg', '15');
INSERT INTO `uploads` VALUES ('79', 'img1457467658P1C.jpg', '15');
INSERT INTO `uploads` VALUES ('80', 'img1457467658ARP.jpg', '15');
INSERT INTO `uploads` VALUES ('81', 'img14574676585RO.jpg', '15');
INSERT INTO `uploads` VALUES ('82', 'img1457474518HAU.jpg', '16');
INSERT INTO `uploads` VALUES ('83', 'img1457474518DND.jpg', '16');
INSERT INTO `uploads` VALUES ('84', 'img1457544105G9T.jpg', '17');
INSERT INTO `uploads` VALUES ('85', 'img1457544105KDB.jpg', '17');
INSERT INTO `uploads` VALUES ('86', 'img1457544105LWC.jpg', '17');
INSERT INTO `uploads` VALUES ('87', 'img1457544105N9S.jpg', '17');
INSERT INTO `uploads` VALUES ('88', 'img145755738823J.jpg', '18');
INSERT INTO `uploads` VALUES ('89', 'img14575573880BY.jpg', '18');
INSERT INTO `uploads` VALUES ('90', 'img1457557388Z4L.jpg', '18');
INSERT INTO `uploads` VALUES ('91', 'img1457557388MYK.jpg', '18');
INSERT INTO `uploads` VALUES ('92', 'img1457557388XGW.jpg', '18');
INSERT INTO `uploads` VALUES ('93', 'img14575580405H5.jpg', '19');
INSERT INTO `uploads` VALUES ('94', 'img1458073141JCP.jpg', '20');
INSERT INTO `uploads` VALUES ('95', 'img1458073141UEU.jpg', '20');
INSERT INTO `uploads` VALUES ('96', 'img14580731418Q8.jpg', '20');
INSERT INTO `uploads` VALUES ('97', 'img1458073141CMV.jpg', '20');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `question1` varchar(255) DEFAULT NULL,
  `answer1` varchar(255) DEFAULT NULL,
  `question2` varchar(255) DEFAULT NULL,
  `answer2` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `font` varchar(255) DEFAULT NULL,
  `terms` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT 'default.png',
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'admin@admin.com', 'b77717e9045c811113ba693806c95570', 'ce6e74490b475c8a779ff830f756a9c5', 'admin@admin.com', 'Administrador', '', '1', '1', '', '2015-11-24 23:46:40', '2016-04-06 01:17:40', null, null, null, null, null, null, null, null, null, 'img1457507066J85.JPG');
INSERT INTO `users` VALUES ('17', '2', 'diego', '180eec6ab16ba038cabc084c4e0cc795', '46a2c22d1721a83e0d0c4cc5e9497cc9', 'diegobritop.9@gmail.com', 'Diego', 'Brito', '1', '1', null, '2016-03-09 22:11:33', '2016-03-31 03:52:50', 'Sr', 'Â¿ProfesiÃ³n de su padre?', 'd', 'Â¿ProfesiÃ³n de su padre?', 'f', '04242011692', 'Venezuela', 'Lo refiriÃ³ un amigo', '1', 'default.png');

-- ----------------------------
-- Table structure for user_groups
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO `user_groups` VALUES ('1', 'Admin', 'Admin', '0', '2015-11-24 23:46:40', '2015-11-24 23:46:40');
INSERT INTO `user_groups` VALUES ('2', 'User', 'User', '1', '2015-11-24 23:46:40', '2015-11-24 23:46:40');
INSERT INTO `user_groups` VALUES ('3', 'Guest', 'Guest', '0', '2015-11-24 23:46:40', '2015-11-24 23:46:40');

-- ----------------------------
-- Table structure for user_group_permissions
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO `user_group_permissions` VALUES ('1', '1', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('2', '2', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('3', '3', 'Pages', 'display', '1');
INSERT INTO `user_group_permissions` VALUES ('4', '1', 'UserGroupPermissions', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('5', '2', 'UserGroupPermissions', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('6', '3', 'UserGroupPermissions', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('7', '1', 'UserGroupPermissions', 'update', '1');
INSERT INTO `user_group_permissions` VALUES ('8', '2', 'UserGroupPermissions', 'update', '0');
INSERT INTO `user_group_permissions` VALUES ('9', '3', 'UserGroupPermissions', 'update', '0');
INSERT INTO `user_group_permissions` VALUES ('10', '1', 'UserGroups', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('11', '2', 'UserGroups', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('12', '3', 'UserGroups', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('13', '1', 'UserGroups', 'addGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('14', '2', 'UserGroups', 'addGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('15', '3', 'UserGroups', 'addGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('16', '1', 'UserGroups', 'editGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('17', '2', 'UserGroups', 'editGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('18', '3', 'UserGroups', 'editGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('19', '1', 'UserGroups', 'deleteGroup', '1');
INSERT INTO `user_group_permissions` VALUES ('20', '2', 'UserGroups', 'deleteGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('21', '3', 'UserGroups', 'deleteGroup', '0');
INSERT INTO `user_group_permissions` VALUES ('22', '1', 'Users', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('23', '2', 'Users', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('24', '3', 'Users', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('25', '1', 'Users', 'viewUser', '1');
INSERT INTO `user_group_permissions` VALUES ('26', '2', 'Users', 'viewUser', '1');
INSERT INTO `user_group_permissions` VALUES ('27', '3', 'Users', 'viewUser', '1');
INSERT INTO `user_group_permissions` VALUES ('28', '1', 'Users', 'myprofile', '1');
INSERT INTO `user_group_permissions` VALUES ('29', '2', 'Users', 'myprofile', '1');
INSERT INTO `user_group_permissions` VALUES ('30', '3', 'Users', 'myprofile', '0');
INSERT INTO `user_group_permissions` VALUES ('31', '1', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('32', '2', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('33', '3', 'Users', 'login', '1');
INSERT INTO `user_group_permissions` VALUES ('34', '1', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('35', '2', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('36', '3', 'Users', 'logout', '1');
INSERT INTO `user_group_permissions` VALUES ('37', '1', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('38', '2', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('39', '3', 'Users', 'register', '1');
INSERT INTO `user_group_permissions` VALUES ('40', '1', 'Users', 'changePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('41', '2', 'Users', 'changePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('42', '3', 'Users', 'changePassword', '0');
INSERT INTO `user_group_permissions` VALUES ('43', '1', 'Users', 'changeUserPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('44', '2', 'Users', 'changeUserPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('45', '3', 'Users', 'changeUserPassword', '0');
INSERT INTO `user_group_permissions` VALUES ('46', '1', 'Users', 'addUser', '1');
INSERT INTO `user_group_permissions` VALUES ('47', '2', 'Users', 'addUser', '0');
INSERT INTO `user_group_permissions` VALUES ('48', '3', 'Users', 'addUser', '0');
INSERT INTO `user_group_permissions` VALUES ('49', '1', 'Users', 'editUser', '1');
INSERT INTO `user_group_permissions` VALUES ('50', '2', 'Users', 'editUser', '1');
INSERT INTO `user_group_permissions` VALUES ('51', '3', 'Users', 'editUser', '0');
INSERT INTO `user_group_permissions` VALUES ('52', '1', 'Users', 'dashboard', '1');
INSERT INTO `user_group_permissions` VALUES ('53', '2', 'Users', 'dashboard', '1');
INSERT INTO `user_group_permissions` VALUES ('54', '3', 'Users', 'dashboard', '0');
INSERT INTO `user_group_permissions` VALUES ('55', '1', 'Users', 'deleteUser', '1');
INSERT INTO `user_group_permissions` VALUES ('56', '2', 'Users', 'deleteUser', '0');
INSERT INTO `user_group_permissions` VALUES ('57', '3', 'Users', 'deleteUser', '0');
INSERT INTO `user_group_permissions` VALUES ('58', '1', 'Users', 'makeActive', '1');
INSERT INTO `user_group_permissions` VALUES ('59', '2', 'Users', 'makeActive', '0');
INSERT INTO `user_group_permissions` VALUES ('60', '3', 'Users', 'makeActive', '0');
INSERT INTO `user_group_permissions` VALUES ('61', '1', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('62', '2', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('63', '3', 'Users', 'accessDenied', '1');
INSERT INTO `user_group_permissions` VALUES ('64', '1', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('65', '2', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('66', '3', 'Users', 'userVerification', '1');
INSERT INTO `user_group_permissions` VALUES ('67', '1', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('68', '2', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('69', '3', 'Users', 'forgotPassword', '1');
INSERT INTO `user_group_permissions` VALUES ('70', '1', 'Users', 'makeActiveInactive', '1');
INSERT INTO `user_group_permissions` VALUES ('71', '2', 'Users', 'makeActiveInactive', '0');
INSERT INTO `user_group_permissions` VALUES ('72', '3', 'Users', 'makeActiveInactive', '0');
INSERT INTO `user_group_permissions` VALUES ('73', '1', 'Users', 'verifyEmail', '1');
INSERT INTO `user_group_permissions` VALUES ('74', '2', 'Users', 'verifyEmail', '0');
INSERT INTO `user_group_permissions` VALUES ('75', '3', 'Users', 'verifyEmail', '0');
INSERT INTO `user_group_permissions` VALUES ('76', '1', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('77', '2', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('78', '3', 'Users', 'activatePassword', '1');
INSERT INTO `user_group_permissions` VALUES ('139', '1', 'Pages', 'nosotros', '1');
INSERT INTO `user_group_permissions` VALUES ('140', '2', 'Pages', 'nosotros', '1');
INSERT INTO `user_group_permissions` VALUES ('141', '3', 'Pages', 'nosotros', '1');
INSERT INTO `user_group_permissions` VALUES ('142', '1', 'Pages', 'contacto', '1');
INSERT INTO `user_group_permissions` VALUES ('143', '2', 'Pages', 'contacto', '1');
INSERT INTO `user_group_permissions` VALUES ('144', '3', 'Pages', 'contacto', '1');
INSERT INTO `user_group_permissions` VALUES ('145', '1', 'Pages', 'como_funciona', '1');
INSERT INTO `user_group_permissions` VALUES ('146', '2', 'Pages', 'como_funciona', '1');
INSERT INTO `user_group_permissions` VALUES ('147', '3', 'Pages', 'como_funciona', '1');
INSERT INTO `user_group_permissions` VALUES ('148', '1', 'Propierties', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('149', '2', 'Propierties', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('150', '3', 'Propierties', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('151', '1', 'Propierties', 'view', '1');
INSERT INTO `user_group_permissions` VALUES ('152', '2', 'Propierties', 'view', '1');
INSERT INTO `user_group_permissions` VALUES ('153', '3', 'Propierties', 'view', '0');
INSERT INTO `user_group_permissions` VALUES ('154', '1', 'Propierties', 'all', '1');
INSERT INTO `user_group_permissions` VALUES ('155', '2', 'Propierties', 'all', '1');
INSERT INTO `user_group_permissions` VALUES ('156', '3', 'Propierties', 'all', '1');
INSERT INTO `user_group_permissions` VALUES ('157', '1', 'Propierties', 'delete', '1');
INSERT INTO `user_group_permissions` VALUES ('158', '2', 'Propierties', 'delete', '0');
INSERT INTO `user_group_permissions` VALUES ('159', '3', 'Propierties', 'delete', '0');
INSERT INTO `user_group_permissions` VALUES ('160', '1', 'Propierties', 'edit', '1');
INSERT INTO `user_group_permissions` VALUES ('161', '2', 'Propierties', 'edit', '0');
INSERT INTO `user_group_permissions` VALUES ('162', '3', 'Propierties', 'edit', '0');
INSERT INTO `user_group_permissions` VALUES ('163', '1', 'Propierties', 'add', '1');
INSERT INTO `user_group_permissions` VALUES ('164', '2', 'Propierties', 'add', '0');
INSERT INTO `user_group_permissions` VALUES ('165', '3', 'Propierties', 'add', '0');
INSERT INTO `user_group_permissions` VALUES ('166', '1', 'Pages', 'preguntas_frecuentes', '1');
INSERT INTO `user_group_permissions` VALUES ('167', '2', 'Pages', 'preguntas_frecuentes', '1');
INSERT INTO `user_group_permissions` VALUES ('168', '3', 'Pages', 'preguntas_frecuentes', '1');
INSERT INTO `user_group_permissions` VALUES ('169', '1', 'Pages', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('170', '2', 'Pages', 'upload', '1');
INSERT INTO `user_group_permissions` VALUES ('171', '3', 'Pages', 'upload', '0');
INSERT INTO `user_group_permissions` VALUES ('172', '1', 'Homes', 'delete', '1');
INSERT INTO `user_group_permissions` VALUES ('173', '2', 'Homes', 'delete', '0');
INSERT INTO `user_group_permissions` VALUES ('174', '3', 'Homes', 'delete', '0');
INSERT INTO `user_group_permissions` VALUES ('175', '1', 'Homes', 'index', '1');
INSERT INTO `user_group_permissions` VALUES ('176', '2', 'Homes', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('177', '3', 'Homes', 'index', '0');
INSERT INTO `user_group_permissions` VALUES ('178', '1', 'Homes', 'view', '1');
INSERT INTO `user_group_permissions` VALUES ('179', '2', 'Homes', 'view', '0');
INSERT INTO `user_group_permissions` VALUES ('180', '3', 'Homes', 'view', '0');
INSERT INTO `user_group_permissions` VALUES ('181', '1', 'Homes', 'add', '1');
INSERT INTO `user_group_permissions` VALUES ('182', '2', 'Homes', 'add', '0');
INSERT INTO `user_group_permissions` VALUES ('183', '3', 'Homes', 'add', '0');
INSERT INTO `user_group_permissions` VALUES ('184', '1', 'Homes', 'edit', '1');
INSERT INTO `user_group_permissions` VALUES ('185', '2', 'Homes', 'edit', '0');
INSERT INTO `user_group_permissions` VALUES ('186', '3', 'Homes', 'edit', '0');

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO `videos` VALUES ('2', 'Video Principal', 'https://youtu.be/BSOjHjfLu3I');
INSERT INTO `videos` VALUES ('3', 'musica', '-ZZCuMzuTY8');
INSERT INTO `videos` VALUES ('4', 'te soÃ±e', 'fDXYmW217bM');
INSERT INTO `videos` VALUES ('5', 'can', '8SWnndN6drE');
INSERT INTO `videos` VALUES ('6', 'mundito', 'm3Nr7DyDdvs');
INSERT INTO `videos` VALUES ('7', 'diogo', '-bCTV5CZbcw');

-- ----------------------------
-- Table structure for works
-- ----------------------------
DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of works
-- ----------------------------
INSERT INTO `works` VALUES ('1', 'https://youtu.be/BSOjHjfLu3I', 'Video Principal');
