/*
Navicat MySQL Data Transfer

Source Server         : SIMTIK
Source Server Version : 50562
Source Host           : 76.76.76.99:3306
Source Database       : nic_datasim

Target Server Type    : MYSQL
Target Server Version : 50562
File Encoding         : 65001

Date: 2025-10-20 20:34:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `nilai`
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `idn` int(10) NOT NULL AUTO_INCREMENT,
  `huruf` varchar(10) DEFAULT NULL,
  `angka` varchar(10) DEFAULT NULL,
  `stt` int(5) DEFAULT '1',
  PRIMARY KEY (`idn`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES ('1', 'A', '4', '1');
INSERT INTO `nilai` VALUES ('2', 'A-', '3.5', '1');
INSERT INTO `nilai` VALUES ('3', 'B', '3', '1');
INSERT INTO `nilai` VALUES ('4', 'B-', '2.5', '1');
INSERT INTO `nilai` VALUES ('5', 'C', '2', '1');
INSERT INTO `nilai` VALUES ('6', 'D', '1', '1');
INSERT INTO `nilai` VALUES ('7', 'E', '0', '1');
