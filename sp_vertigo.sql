/*
 Navicat Premium Data Transfer

 Source Server         : localhost mysql
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : sp_vertigo

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 24/06/2023 19:09:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_login` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', 'admin@gmail.com', 'admin', '0896660722919', 'cirebon', 'laki-laki', '$2y$10$L4zXv9/dscZqbem34beK1uAlnlblqoIkEGFqFVU5eJtjAwsde.YQC', '2023-06-24 11:28:32');
INSERT INTO `admin` VALUES (2, 'user', NULL, 'user', NULL, NULL, NULL, '$2y$10$L4zXv9/dscZqbem34beK1uAlnlblqoIkEGFqFVU5eJtjAwsde.YQC', '2023-06-22 11:23:34');
INSERT INTO `admin` VALUES (3, 'user2', NULL, 'user2', NULL, NULL, NULL, '$2y$10$5cljAHM9rKBkIUbtZmYAk.wWyriucifF750E2SXmMKVBJmtr8NmVy', '2023-06-22 11:25:42');

-- ----------------------------
-- Table structure for detail_hasil
-- ----------------------------
DROP TABLE IF EXISTS `detail_hasil`;
CREATE TABLE `detail_hasil`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pasien` int NULL DEFAULT NULL,
  `id_penyakit` int NOT NULL,
  `presentase` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_pasien`(`id_pasien` ASC) USING BTREE,
  INDEX `id_penyakit`(`id_penyakit` ASC) USING BTREE,
  CONSTRAINT `id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detail_hasil
-- ----------------------------
INSERT INTO `detail_hasil` VALUES (5, 2, 8, '90');
INSERT INTO `detail_hasil` VALUES (6, 2, 11, '90');
INSERT INTO `detail_hasil` VALUES (7, 2, 9, '88');
INSERT INTO `detail_hasil` VALUES (8, 2, 10, '98.08');
INSERT INTO `detail_hasil` VALUES (9, 3, 8, '97.6');
INSERT INTO `detail_hasil` VALUES (10, 3, 10, '99.232');
INSERT INTO `detail_hasil` VALUES (11, 3, 11, '80');
INSERT INTO `detail_hasil` VALUES (12, 3, 9, '60');
INSERT INTO `detail_hasil` VALUES (13, 3, 12, '70');
INSERT INTO `detail_hasil` VALUES (14, 3, 8, '97.6');
INSERT INTO `detail_hasil` VALUES (15, 3, 10, '99.232');
INSERT INTO `detail_hasil` VALUES (16, 3, 11, '80');
INSERT INTO `detail_hasil` VALUES (17, 3, 9, '60');
INSERT INTO `detail_hasil` VALUES (18, 3, 12, '70');
INSERT INTO `detail_hasil` VALUES (19, 4, 8, '98.32');
INSERT INTO `detail_hasil` VALUES (20, 4, 10, '98.656');
INSERT INTO `detail_hasil` VALUES (21, 4, 11, '86');
INSERT INTO `detail_hasil` VALUES (22, 4, 9, '60');
INSERT INTO `detail_hasil` VALUES (23, 4, 12, '60');
INSERT INTO `detail_hasil` VALUES (24, 8, 8, '98.74');
INSERT INTO `detail_hasil` VALUES (25, 8, 10, '97.984');
INSERT INTO `detail_hasil` VALUES (26, 8, 11, '93');
INSERT INTO `detail_hasil` VALUES (27, 8, 9, '88');
INSERT INTO `detail_hasil` VALUES (28, 8, 12, '60');
INSERT INTO `detail_hasil` VALUES (29, 9, 8, '79');
INSERT INTO `detail_hasil` VALUES (30, 9, 10, '91.6');
INSERT INTO `detail_hasil` VALUES (31, 9, 11, '79');
INSERT INTO `detail_hasil` VALUES (32, 9, 9, '70');
INSERT INTO `detail_hasil` VALUES (33, 9, 12, '70');
INSERT INTO `detail_hasil` VALUES (34, 10, 8, '93.7');
INSERT INTO `detail_hasil` VALUES (35, 10, 10, '97.48');
INSERT INTO `detail_hasil` VALUES (36, 10, 11, '65');
INSERT INTO `detail_hasil` VALUES (37, 10, 9, '70');

-- ----------------------------
-- Table structure for gejala
-- ----------------------------
DROP TABLE IF EXISTS `gejala`;
CREATE TABLE `gejala`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_gejala` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gejala
-- ----------------------------
INSERT INTO `gejala` VALUES (8, 'Mual', 0.4);
INSERT INTO `gejala` VALUES (9, 'Muntah', 0.6);
INSERT INTO `gejala` VALUES (10, 'Pandangan Kabur', 0.3);
INSERT INTO `gejala` VALUES (11, 'Seperti Mabok Perjalanan', 0.7);
INSERT INTO `gejala` VALUES (12, 'Tidak Mampu Berderi Tegak', 0.5);
INSERT INTO `gejala` VALUES (13, 'Sensasi Kepala Berputar', 0.8);
INSERT INTO `gejala` VALUES (14, 'Tidak mampu berdiri atau berjalan', 0.7);
INSERT INTO `gejala` VALUES (15, 'Kehilangan pendegaran sementara', 0.6);
INSERT INTO `gejala` VALUES (16, 'Terjadi dalam beberapa menit', 0.5);
INSERT INTO `gejala` VALUES (17, 'telinga berdengung', 0.6);
INSERT INTO `gejala` VALUES (18, 'sensitif terhadap cahaya dan bunyi', 0.6);
INSERT INTO `gejala` VALUES (19, 'Kepala pusing', 0.7);
INSERT INTO `gejala` VALUES (20, 'Faktor Genetik', 0.4);
INSERT INTO `gejala` VALUES (21, 'Pandangan Sulit fokus', 0.6);
INSERT INTO `gejala` VALUES (22, 'Lingkungan berputar 2 arah', 0.7);

-- ----------------------------
-- Table structure for hasil
-- ----------------------------
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_detail_hasil` int NULL DEFAULT NULL,
  `tanggal` timestamp NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_detail_hasil`(`id_detail_hasil` ASC) USING BTREE,
  CONSTRAINT `id_detail_hasil` FOREIGN KEY (`id_detail_hasil`) REFERENCES `detail_hasil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hasil
-- ----------------------------

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_kategori` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'K1', 'Vertigo Perifer', 'Vertigo Perifer');
INSERT INTO `kategori` VALUES (2, 'K2', 'Vertigo Sentral', 'Vertigo Sentral');

-- ----------------------------
-- Table structure for pasien
-- ----------------------------
DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `JK` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pasien
-- ----------------------------
INSERT INTO `pasien` VALUES (1, 'yuyun', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (2, 'Supri', 'Kuningan', 'laki-laki', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (3, 'Desi', 'Cirebon', 'perempuan', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (4, 'Rangga', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (5, 'Gugun', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (6, 'yuni', 'Majalengka', 'perempuan', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (7, 'yuni', 'Majalengka', 'laki-laki', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (8, 'goni', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (9, 'Agus', 'Cirebon', 'laki-laki', '2023-06-21 13:23:27');
INSERT INTO `pasien` VALUES (10, 'Sandi', 'Cirebon', 'laki-laki', '2023-06-22 18:45:58');

-- ----------------------------
-- Table structure for penyakit
-- ----------------------------
DROP TABLE IF EXISTS `penyakit`;
CREATE TABLE `penyakit`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_kategori` int NOT NULL,
  `solusi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_penyakit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_kategori`(`id_kategori` ASC) USING BTREE,
  CONSTRAINT `penyakit_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penyakit
-- ----------------------------
INSERT INTO `penyakit` VALUES (8, 1, 'Vertigo Sentral', 'Bening Parazosysmal Position Vertigo', 'Bening Parazosysmal Position Vertigo');
INSERT INTO `penyakit` VALUES (9, 2, 'Maniere', 'Maniere', 'Maniere\r\n');
INSERT INTO `penyakit` VALUES (10, 2, 'Migren Vestibular', 'Migren Vestibular', 'Migren Vestibular');
INSERT INTO `penyakit` VALUES (11, 1, 'Multiple Sclerosis', 'Multiple Sclerosis', 'Multiple Sclerosis\r\n');
INSERT INTO `penyakit` VALUES (12, 2, 'Vertigo Serebeleum', 'Vertigo Serebeleum', 'Vertigo Serebeleum');

-- ----------------------------
-- Table structure for penyakit_gejala
-- ----------------------------
DROP TABLE IF EXISTS `penyakit_gejala`;
CREATE TABLE `penyakit_gejala`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_penyakit` int NOT NULL,
  `id_gejala` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_penyakit`(`id_penyakit` ASC) USING BTREE,
  INDEX `id_gejala`(`id_gejala` ASC) USING BTREE,
  CONSTRAINT `penyakit_gejala_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `penyakit_gejala_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penyakit_gejala
-- ----------------------------
INSERT INTO `penyakit_gejala` VALUES (20, 8, 8);
INSERT INTO `penyakit_gejala` VALUES (21, 8, 9);
INSERT INTO `penyakit_gejala` VALUES (22, 8, 10);
INSERT INTO `penyakit_gejala` VALUES (23, 8, 11);
INSERT INTO `penyakit_gejala` VALUES (24, 8, 12);
INSERT INTO `penyakit_gejala` VALUES (25, 8, 13);
INSERT INTO `penyakit_gejala` VALUES (26, 9, 14);
INSERT INTO `penyakit_gejala` VALUES (27, 9, 15);
INSERT INTO `penyakit_gejala` VALUES (28, 10, 8);
INSERT INTO `penyakit_gejala` VALUES (29, 10, 9);
INSERT INTO `penyakit_gejala` VALUES (30, 10, 10);
INSERT INTO `penyakit_gejala` VALUES (31, 10, 15);
INSERT INTO `penyakit_gejala` VALUES (32, 10, 16);
INSERT INTO `penyakit_gejala` VALUES (33, 10, 17);
INSERT INTO `penyakit_gejala` VALUES (34, 10, 18);
INSERT INTO `penyakit_gejala` VALUES (35, 10, 19);
INSERT INTO `penyakit_gejala` VALUES (39, 11, 10);
INSERT INTO `penyakit_gejala` VALUES (40, 11, 12);
INSERT INTO `penyakit_gejala` VALUES (41, 11, 13);
INSERT INTO `penyakit_gejala` VALUES (42, 11, 20);
INSERT INTO `penyakit_gejala` VALUES (43, 12, 21);
INSERT INTO `penyakit_gejala` VALUES (44, 12, 22);

-- ----------------------------
-- Table structure for pertanyaan
-- ----------------------------
DROP TABLE IF EXISTS `pertanyaan`;
CREATE TABLE `pertanyaan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_gejala` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pertanyaan
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
