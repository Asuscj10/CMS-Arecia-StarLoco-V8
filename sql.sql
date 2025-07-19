/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : 00--login

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 01/11/2021 14:21:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for web_posts
-- ----------------------------
DROP TABLE IF EXISTS `web_posts`;
CREATE TABLE `web_posts`  (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` datetime(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of web_posts
-- ----------------------------
INSERT INTO `web_posts` VALUES (1, 1, 'Première annonce du site !', 'Les deux gardes du corps personnels de David le prirent par le bras et suivirent le général. Les militaires s‘étaient mis au « garde à vous » sur les côtés du couloir. Celui-ci menait à un ascenseur. Le général inséra à nouveau son badge et la porte s’ouvrit. Il y montèrent tous les quatre. Il n’y avait pas de niveau d’indiqué.', '1', '2021-10-31 15:59:05.0000');
INSERT INTO `web_posts` VALUES (2, 2, 'Application du patch 0.0.1', 'Les deux gardes du corps personnels de David le prirent par le bras et suivirent le général. Les militaires s‘étaient mis au « garde à vous » sur les côté', '2', '2021-11-01 10:23:05.0000');
INSERT INTO `web_posts` VALUES (3, 3, 'Recrutement Modérateur', 'Les deux gardes du corps personnels de David le prirent par le bras et suivirent le général. Les militaires s‘étaient mis au « garde à vous » sur les côté', '3', '2021-11-02 10:23:49.0000');

-- ----------------------------
-- Table structure for web_posts_comments
-- ----------------------------
DROP TABLE IF EXISTS `web_posts_comments`;
CREATE TABLE `web_posts_comments`  (
  `post` int(11) NULL DEFAULT NULL,
  `author` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date` datetime(4) NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of web_posts_comments
-- ----------------------------

-- ----------------------------
-- Table structure for web_screenshots
-- ----------------------------
DROP TABLE IF EXISTS `web_screenshots`;
CREATE TABLE `web_screenshots`  (
  `src` int(11) NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of web_screenshots
-- ----------------------------
INSERT INTO `web_screenshots` VALUES (1);
INSERT INTO `web_screenshots` VALUES (2);
INSERT INTO `web_screenshots` VALUES (3);
INSERT INTO `web_screenshots` VALUES (4);
INSERT INTO `web_screenshots` VALUES (5);
INSERT INTO `web_screenshots` VALUES (6);
INSERT INTO `web_screenshots` VALUES (7);
INSERT INTO `web_screenshots` VALUES (8);
INSERT INTO `web_screenshots` VALUES (9);
INSERT INTO `web_screenshots` VALUES (10);

-- ----------------------------
-- Table structure for web_staffs
-- ----------------------------
DROP TABLE IF EXISTS `web_staffs`;
CREATE TABLE `web_staffs`  (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of web_staffs
-- ----------------------------

-- ----------------------------
-- Table structure for web_updates
-- ----------------------------
DROP TABLE IF EXISTS `web_updates`;
CREATE TABLE `web_updates`  (
  `id` int(11) NOT NULL,
  `version` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of web_updates
-- ----------------------------
INSERT INTO `web_updates` VALUES (1, '1', '1', 'ajout des maisons');
INSERT INTO `web_updates` VALUES (2, '1.1', '2', 'correction du site');

SET FOREIGN_KEY_CHECKS = 1;
