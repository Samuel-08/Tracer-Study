/*
 Navicat MySQL Data Transfer

 Source Server         : new
 Source Server Type    : MySQL
 Source Server Version : 100424 (10.4.24-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : universitas

 Target Server Type    : MySQL
 Target Server Version : 100424 (10.4.24-MariaDB)
 File Encoding         : 65001

 Date: 13/08/2022 16:03:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for hasil
-- ----------------------------
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE `hasil`  (
  `id_hasil` int NOT NULL AUTO_INCREMENT,
  `id_kuis` int NOT NULL,
  `id_user` int NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `hasil1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil6` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil7` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil8` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil9` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil10` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil11` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil12` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil13` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil14` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hasil15` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_hasil`) USING BTREE,
  INDEX `id_hasil`(`id_hasil` ASC) USING BTREE,
  INDEX `id_kuis`(`id_kuis` ASC) USING BTREE,
  INDEX `id_kategori`(`id_kategori` ASC) USING BTREE,
  INDEX `id_user`(`id_user` ASC) USING BTREE,
  CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_kuis`) REFERENCES `kuisioner_belajar` (`id_kuis_belajar`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 158 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hasil
-- ----------------------------
INSERT INTO `hasil` VALUES (156, 10251, 39, 'user', 0, 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik', 'sangat baik');
INSERT INTO `hasil` VALUES (157, 10251, 39, 'user', 0, 'baik', 'sangat baik', 'sangat baik', 'cukup', 'sangat baik', 'baik', 'sangat baik', 'sangat baik', 'sangat baik', 'kurang', 'cukup', 'sangat baik', 'cukup', 'sangat baik', 'baik');

-- ----------------------------
-- Table structure for iya_tidak
-- ----------------------------
DROP TABLE IF EXISTS `iya_tidak`;
CREATE TABLE `iya_tidak`  (
  `id_iya_tidak` int NOT NULL AUTO_INCREMENT,
  `opsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_iya_tidak`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of iya_tidak
-- ----------------------------
INSERT INTO `iya_tidak` VALUES (1, 'ya');
INSERT INTO `iya_tidak` VALUES (2, 'tidak');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` int NOT NULL,
  `kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (10, 'belajar');
INSERT INTO `kategori` VALUES (11, 'bekerja');
INSERT INTO `kategori` VALUES (12, 'wirausaha');
INSERT INTO `kategori` VALUES (13, 'tunakarya');

-- ----------------------------
-- Table structure for kuisioner_bekerja
-- ----------------------------
DROP TABLE IF EXISTS `kuisioner_bekerja`;
CREATE TABLE `kuisioner_bekerja`  (
  `id_kuis_bekerja` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_kuis_bekerja`) USING BTREE,
  INDEX `id_kuis`(`id_kuis_bekerja` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 73 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kuisioner_bekerja
-- ----------------------------
INSERT INTO `kuisioner_bekerja` VALUES (66, 'Bagaimana kinerja lulusan kami yang bekerja di instansi/institusi/perusahaan Bapak/Ibu');
INSERT INTO `kuisioner_bekerja` VALUES (67, 'Keahlihan pada bidang ilmu (kompetensi utama)');
INSERT INTO `kuisioner_bekerja` VALUES (68, 'Kemampuan berbahasa asing');
INSERT INTO `kuisioner_bekerja` VALUES (69, 'Penggunaan teknologi informasi\r\n\r\n ');
INSERT INTO `kuisioner_bekerja` VALUES (70, 'Kemampuan berkomunikasi');
INSERT INTO `kuisioner_bekerja` VALUES (71, 'Pengembangan diri');
INSERT INTO `kuisioner_bekerja` VALUES (72, 'Berapa lama saudara bertugas pada pekerjaan yang sekarang?');

-- ----------------------------
-- Table structure for kuisioner_belajar
-- ----------------------------
DROP TABLE IF EXISTS `kuisioner_belajar`;
CREATE TABLE `kuisioner_belajar`  (
  `id_kuis_belajar` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kategoriId` int NOT NULL,
  PRIMARY KEY (`id_kuis_belajar`) USING BTREE,
  INDEX `id_kuis`(`id_kuis_belajar` ASC) USING BTREE,
  INDEX `kategoriId`(`kategoriId` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10252 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kuisioner_belajar
-- ----------------------------
INSERT INTO `kuisioner_belajar` VALUES (10232, 'Keahlihan pada bidang ilmu (kompetensi utama)', 13);
INSERT INTO `kuisioner_belajar` VALUES (10236, 'Kemampuan berbahasa asing', 10);
INSERT INTO `kuisioner_belajar` VALUES (10237, 'Penggunaan teknologi informasi', 10);
INSERT INTO `kuisioner_belajar` VALUES (10238, 'Kemampuan berkomunikasi', 10);
INSERT INTO `kuisioner_belajar` VALUES (10239, 'Pengembangan diri', 12);
INSERT INTO `kuisioner_belajar` VALUES (10240, 'Keahlihan pada bidang ilmu (kompetensi utama)', 0);
INSERT INTO `kuisioner_belajar` VALUES (10241, 'Kemampuan berbahasa asing', 0);
INSERT INTO `kuisioner_belajar` VALUES (10242, 'Kemampuan berbahasa asing', 0);
INSERT INTO `kuisioner_belajar` VALUES (10243, 'Keahlihan pada bidang ilmu (kompetensi utama)', 0);
INSERT INTO `kuisioner_belajar` VALUES (10244, 'Penggunaan teknologi informasi', 0);
INSERT INTO `kuisioner_belajar` VALUES (10245, 'Kemampuan berbahasa asing', 0);
INSERT INTO `kuisioner_belajar` VALUES (10246, 'Penggunaan teknologi informasi', 0);
INSERT INTO `kuisioner_belajar` VALUES (10247, 'Penggunaan teknologi informasi', 0);
INSERT INTO `kuisioner_belajar` VALUES (10248, 'Keahlihan pada bidang ilmu (kompetensi utama)', 0);
INSERT INTO `kuisioner_belajar` VALUES (10251, 'sangat baik\r\nsangat baik\r\nsangat baik\r\nsangat baik\r\nsangat baik', 0);

-- ----------------------------
-- Table structure for kuisioner_lainnya
-- ----------------------------
DROP TABLE IF EXISTS `kuisioner_lainnya`;
CREATE TABLE `kuisioner_lainnya`  (
  `id_kuis_lainnya` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_kuis_lainnya`) USING BTREE,
  INDEX `id_kuis`(`id_kuis_lainnya` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 86 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kuisioner_lainnya
-- ----------------------------
INSERT INTO `kuisioner_lainnya` VALUES (67, 'Tidak Tuliskan Jurusan, Fakultas dan Universitas tempat anda melanjutkan studi saat ini');
INSERT INTO `kuisioner_lainnya` VALUES (68, 'jurusan studi saudara saat ini terkait dengan jurusan yang anda ambil');
INSERT INTO `kuisioner_lainnya` VALUES (69, 'Setelah lulus/wisuda, berapa lama waktu tunggu saudara sampai melanjutkan studi?');
INSERT INTO `kuisioner_lainnya` VALUES (70, 'Setelah lulus/wisuda, apakah ada pekerjaan yang telah dijalani pertama kali sebelum memutuskan untuk melanjutkan studi?');
INSERT INTO `kuisioner_lainnya` VALUES (71, 'Berapa lama saudara telah melanjutkan studi?');
INSERT INTO `kuisioner_lainnya` VALUES (72, 'Darimana saudara mendapatkan informasi tentang pendidikan yang sedang dijalani pada saat ini?');
INSERT INTO `kuisioner_lainnya` VALUES (73, 'Tuliskan kesan selama menjadi mahasiswa');
INSERT INTO `kuisioner_lainnya` VALUES (74, 'Kegiatan apa yang saudara lakukan pada saat ini?\r\n\r\n');
INSERT INTO `kuisioner_lainnya` VALUES (75, 'Apakah saat ini saudara sudah bekerja?');
INSERT INTO `kuisioner_lainnya` VALUES (76, 'Apakah kategori bidang pekerjaan anda saat ini?');
INSERT INTO `kuisioner_lainnya` VALUES (77, 'Matakuliah apa saja yang terkait dengan pekerjaan saudara saat ini ?');
INSERT INTO `kuisioner_lainnya` VALUES (78, 'Setelah lulus/wisuda, berapa lama waktu tunggu saudara untuk mendapatkan pekerjaan pertama?');
INSERT INTO `kuisioner_lainnya` VALUES (79, 'Setelah lulus/wisuda, berapa banyak pekerjaan yang telah dijalani sebelum pekerjaan sekarang?');
INSERT INTO `kuisioner_lainnya` VALUES (80, 'Berapa lama saudara bertugas pada pekerjaan yang sekarang?');
INSERT INTO `kuisioner_lainnya` VALUES (81, 'Darimana saudara mendapatkan informasi tentang pekerjaan?');
INSERT INTO `kuisioner_lainnya` VALUES (82, 'Berapa gaji yang saudara dapatkan dari pekerjaan saudara?');
INSERT INTO `kuisioner_lainnya` VALUES (83, 'Setelah lulus/wisuda, berapa banyak pekerjaan yang telah dijalani sebelum pekerjaan sekarang?');
INSERT INTO `kuisioner_lainnya` VALUES (84, 'Berapa lama saudara bertugas pada pekerjaan yang sekarang?');
INSERT INTO `kuisioner_lainnya` VALUES (85, 'Berapa gaji yang saudara dapatkan dari pekerjaan saudara?');

-- ----------------------------
-- Table structure for kuisioner_wirausaha
-- ----------------------------
DROP TABLE IF EXISTS `kuisioner_wirausaha`;
CREATE TABLE `kuisioner_wirausaha`  (
  `id_kuis_wirausaha` int NOT NULL AUTO_INCREMENT,
  `pertanyaan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_kuis_wirausaha`) USING BTREE,
  INDEX `id_kuis`(`id_kuis_wirausaha` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 65 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kuisioner_wirausaha
-- ----------------------------
INSERT INTO `kuisioner_wirausaha` VALUES (63, 'Kegiatan apa yang saudara lakukan pada saat ini?\r\n\r\n');
INSERT INTO `kuisioner_wirausaha` VALUES (64, 'Tuliskan kesan selama menjadi mahasiswa Tuliskan saran untuk Universitas Mulia');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for radio
-- ----------------------------
DROP TABLE IF EXISTS `radio`;
CREATE TABLE `radio`  (
  `id_radio` int NOT NULL AUTO_INCREMENT,
  `opsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  INDEX `id`(`id_radio` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of radio
-- ----------------------------
INSERT INTO `radio` VALUES (26, 'sangat baik');
INSERT INTO `radio` VALUES (27, 'baik');
INSERT INTO `radio` VALUES (28, 'cukup');
INSERT INTO `radio` VALUES (29, 'kurang');

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` enum('admin','user') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'user',
  `nim` int NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jurusan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota_kelahiran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_lulus` year NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id`(`id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES (38, 'admin', 0, 'Admin', 'admin@mail.com', '$2y$10$OooygM6OSCU35Eqa/WM4AeNqLT3TuLTZ100XIRjhBbEIw279B1EVK', '', '', '', '', '', '2022-08-03', '', 2000, '2022-08-03 18:12:29');
INSERT INTO `tbl_users` VALUES (39, 'user', 0, 'user', 'user@mail.com', '$2y$10$hC7akKCiiphvqJ.U8PmMsOqe5x8DvA1/1103IvLm/0KGRryrsB2bq', '', '', 'Belajar', '', '', '2022-08-03', '', 2000, '2022-08-03 18:12:29');
INSERT INTO `tbl_users` VALUES (40, 'user', 1814048, 'samuel', 'sam@mail.com', '$2y$10$pDOHmYWX6Gd.1OlNvhE3RuB6GAaIJaYspOeZjjF.Xv8qpA7sRi6TW', '0812404861810', 'Sistem Infomasi', 'Bekerja', 'Bontang', 'Pria', '1996-11-23', 'Kristen', 2000, '2022-08-03 18:14:32');
INSERT INTO `tbl_users` VALUES (41, 'user', 1013040, 'christy', 'christy@mail.com', '$2y$10$bEb2eUQ3jKuON58CUZFebOH0ncKByQzfTPAoMcnGSv79lXqsD2kTW', '0852403061833', 'Teknik Informatika', 'Belajar', 'Magelang', 'Perempuan', '1999-08-18', 'Islam', 2022, '2022-08-03 18:20:44');
INSERT INTO `tbl_users` VALUES (42, 'user', 1833048, 'listy', 'listychan@mail.com', '$2y$10$Gncxv1Ufp.C5E3ZR7VT1V.7Tl6vgoDP/GedZC34f87HjGqJr9Rn9W', '0896404864540', 'Farmasi', 'Belajar', 'Kediri', 'Perempuan', '2002-08-15', 'Khatolik', 2016, '2022-08-03 18:23:48');
INSERT INTO `tbl_users` VALUES (43, 'user', 1000040, 'maimunah', 'maimuns@mail.com', '$2y$10$Wuy2z26s/mJZ5Tu.666ng.CSWHQRm0U7D5pL9vVdi/x4msNFgT7mi', '081240505810', 'Farmasi', 'Lainnya', 'Sidoarjo', 'Perempuan', '2014-02-03', 'Islam', 2008, '2022-08-03 18:29:34');
INSERT INTO `tbl_users` VALUES (44, 'user', 321643, 'paijo', 'paijo@google.mail.co.id', '$2y$10$dPJ/HPY68tZ3/YCfVMU1Qe.UY9Lf9JNB4qtVUal/z.ydWfVsNACbe', '0812404753812', 'Hukum', 'Bekerja', 'Kediri', 'Pria', '1996-12-03', 'Islam', 2016, '2022-08-03 18:31:45');
INSERT INTO `tbl_users` VALUES (45, 'user', 140808, 'Bobbay', 'b@b.com', '$2y$10$xd8LdfYqDI9icaBXiwG/C.2N6gwU/R5Z7RTWrNWCpz.ecq8U85AXi', '081255206504', 'Informatika', 'Bekerja', 'balikpapan', 'Pria', '2022-08-11', 'Islam', 2022, '2022-08-12 20:29:07');

SET FOREIGN_KEY_CHECKS = 1;
