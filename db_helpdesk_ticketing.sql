/*
 Navicat Premium Data Transfer

 Source Server         : ARC-V
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : db_helpdesk_ticketing

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 01/02/2023 22:29:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan`  (
  `id_jabatan` int NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_jabatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES (1, 'Manager');
INSERT INTO `jabatan` VALUES (2, 'Supervisor');
INSERT INTO `jabatan` VALUES (4, 'Leader');
INSERT INTO `jabatan` VALUES (5, 'Staff');
INSERT INTO `jabatan` VALUES (7, 'Section Head');
INSERT INTO `jabatan` VALUES (8, 'Marketing');

-- ----------------------------
-- Table structure for tiket
-- ----------------------------
DROP TABLE IF EXISTS `tiket`;
CREATE TABLE `tiket`  (
  `id_tiket` int NOT NULL AUTO_INCREMENT,
  `no_tiket` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_daftar` timestamp NULL DEFAULT current_timestamp,
  `urgency` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subjek` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image_tiket` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `status_tiket` int NOT NULL,
  PRIMARY KEY (`id_tiket`) USING BTREE,
  INDEX `user_id`(`user_id` ASC) USING BTREE,
  CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tiket
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_users` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `divisi_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp,
  `modified` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `image_user` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level_user` int NOT NULL,
  `status_user` int NOT NULL,
  PRIMARY KEY (`id_users`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'test_admin', 'test@gmail.com', '12345', '', '', '2022-12-25 13:26:47', '2022-12-25 17:57:06', '', 1, 1);
INSERT INTO `users` VALUES (3, 'user', 'user@gmail.com', 'hammer03', '', '', '2022-12-26 08:05:15', '2022-12-28 01:34:23', '', 1, 1);
INSERT INTO `users` VALUES (4, 'yusuf.adi', 'muhammadyusufadiwibowo@gmail.com', '$2y$10$vy2IXLG3zTs6nK67M6804.sl6LwQfMGQh46AMC9yc9G8tRMIIigiW', '', '', '2022-12-29 08:27:51', '2022-12-29 08:27:51', '', 1, 1);

SET FOREIGN_KEY_CHECKS = 1;
