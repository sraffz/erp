/*
 Navicat Premium Data Transfer

 Source Server         : php7.0
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : bpsm_epp21

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 14/10/2021 12:09:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for epp_waris
-- ----------------------------
DROP TABLE IF EXISTS `epp_waris`;
CREATE TABLE `epp_waris`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idPesara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jantina` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikhLahir` date NOT NULL,
  `hubungan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idPendaftar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of epp_waris
-- ----------------------------
INSERT INTO `epp_waris` VALUES (1, '80', 'Nor Azira Binti Mohammad', '751023035896', 'Perempuan', '1975-02-23', '2', '54');
INSERT INTO `epp_waris` VALUES (2, '123', 'CHE BIDAH BINTI JUSOH ', '450617035018', 'Perempuan', '1945-06-17', '2', '54');
INSERT INTO `epp_waris` VALUES (3, '126', 'NOOR SILAWATI BINTI SETAPA ', '610601035822', 'Perempuan', '1961-06-01', '2', '54');
INSERT INTO `epp_waris` VALUES (4, '128', 'NORBAISAH BINTI HUSSIN', '660101035290', 'Perempuan', '1966-01-01', '2', '54');
INSERT INTO `epp_waris` VALUES (5, '130', 'Noriah binti Ja\'afar ', '411130035276', 'Perempuan', '1941-11-13', '2', '54');
INSERT INTO `epp_waris` VALUES (6, '132', 'ROHANI BINTI SALEH ', '580520085452', 'Perempuan', '1958-05-20', '2', '54');
INSERT INTO `epp_waris` VALUES (7, '90', 'SITI JAWAHIR BINTI DAUD ', '461129035426', 'Perempuan', '1946-11-29', '2', '54');
INSERT INTO `epp_waris` VALUES (8, '135', 'Radzan Binti Mat Taib', '540902035366', 'Perempuan', '1954-09-02', '2', '54');
INSERT INTO `epp_waris` VALUES (9, '137', 'Radzan Binti Mat Taib', '560208035110', 'Perempuan', '1956-02-08', '2', '54');
INSERT INTO `epp_waris` VALUES (10, '139', 'NORANI BINTI MAHMOOD', '500225035388', 'Perempuan', '1950-02-25', '2', '54');
INSERT INTO `epp_waris` VALUES (11, '146', 'Siti Meriam Binti Riffin', '530608035016', 'Perempuan', '1953-06-08', '2', '54');
INSERT INTO `epp_waris` VALUES (12, '111', 'RAKIAH BINTI MAHMUD', '581222035486', 'Perempuan', '1958-12-22', '2', '54');
INSERT INTO `epp_waris` VALUES (15, '157', 'KAISARA', '200126031030', 'Perempuan', '2020-01-26', '3', '1');

-- ----------------------------
-- Table structure for epp_waris1
-- ----------------------------
DROP TABLE IF EXISTS `epp_waris1`;
CREATE TABLE `epp_waris1`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idPesara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jantina` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarikhLahir` date NOT NULL,
  `hubungan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idPendaftar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of epp_waris1
-- ----------------------------
INSERT INTO `epp_waris1` VALUES (1, '80', 'Nor Azira Binti Mohammad', '751023035896', 'Perempuan', '1975-02-23', '02', '54');
INSERT INTO `epp_waris1` VALUES (2, '123', 'CHE BIDAH BINTI JUSOH ', '450617035018', 'Perempuan', '1945-06-17', '02', '54');
INSERT INTO `epp_waris1` VALUES (3, '126', 'NOOR SILAWATI BINTI SETAPA ', '610601035822', 'Perempuan', '1961-06-01', '02', '54');
INSERT INTO `epp_waris1` VALUES (4, '128', 'NORBAISAH BINTI HUSSIN', '660101035290', 'Perempuan', '1966-01-01', '02', '54');
INSERT INTO `epp_waris1` VALUES (5, '130', 'Noriah binti Ja\'afar ', '411130035276', 'Perempuan', '1941-11-13', '02', '54');
INSERT INTO `epp_waris1` VALUES (6, '132', 'ROHANI BINTI SALEH ', '580520085452', 'Perempuan', '1958-05-20', '02', '54');
INSERT INTO `epp_waris1` VALUES (7, '90', 'SITI JAWAHIR BINTI DAUD ', '461129035426', 'Perempuan', '1946-11-29', '02', '54');
INSERT INTO `epp_waris1` VALUES (8, '135', 'Radzan Binti Mat Taib', '540902035366', 'Perempuan', '1954-09-02', '02', '54');
INSERT INTO `epp_waris1` VALUES (9, '137', 'Radzan Binti Mat Taib', '560208035110', 'Perempuan', '1956-02-08', '02', '54');
INSERT INTO `epp_waris1` VALUES (10, '139', 'NORANI BINTI MAHMOOD', '500225035388', 'Perempuan', '1950-02-25', '02', '54');
INSERT INTO `epp_waris1` VALUES (11, '146', 'Siti Meriam Binti Riffin', '530608035016', 'Perempuan', '1953-06-08', '02', '54');
INSERT INTO `epp_waris1` VALUES (12, '111', 'RAKIAH BINTI MAHMUD', '581222035486', 'Perempuan', '1958-12-22', '02', '54');
INSERT INTO `epp_waris1` VALUES (13, '80', 'AMIRUL BIN AB PATAH', '900909035019', 'Lelaki', '1990-09-09', '03', '1');

-- ----------------------------
-- Table structure for hospital
-- ----------------------------
DROP TABLE IF EXISTS `hospital`;
CREATE TABLE `hospital`  (
  `idHospital` int(11) NOT NULL AUTO_INCREMENT,
  `namaHospital` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatHospital` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bandar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `poskod` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `negeri` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idHospital`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hospital
-- ----------------------------
INSERT INTO `hospital` VALUES (3, 'DARUL NAIM DIALISIS SDN BHD', '', '', '', '', '', '');
INSERT INTO `hospital` VALUES (5, 'HOSPITAL UNIVERSITI SAINS MALAYSIA', 'KUBANG KERIAN', '', '', 'KOTA BHARU', '15503', 'KELANTAN');
INSERT INTO `hospital` VALUES (6, 'HOSPITAL RAJA PEREMPUAN ZAINAB II', '', '', '', 'KOTA BHARU', '15586', 'KELANTAN');
INSERT INTO `hospital` VALUES (7, 'HOSPITAL UNIVERSITI SAINS MALAYSIA', 'JALAN RAJA PEREMPUAN ZAINAB II', '', '', 'KUBANG KERIAN', '16150', 'KELANTAN');
INSERT INTO `hospital` VALUES (8, 'HOSPITAL SULTAN ISMAIL PETRA', '', '', '', 'KUALA KRAI', '18000', 'KELANTAN');
INSERT INTO `hospital` VALUES (9, 'INSTITUT JANTUNG NEGARA (IJN)', '145 ', 'JALAN TUN RAZAK', '', '', '50400', 'KELANTAN');
INSERT INTO `hospital` VALUES (10, 'HOSPITAL SHAH ALAM', '', '', '', '', '', 'SELANGOR');
INSERT INTO `hospital` VALUES (11, 'hHOSPITAL TANAH MERAH', '', '', '', 'TANAH MERAH', '', 'KELANTAN');

-- ----------------------------
-- Table structure for hubungan
-- ----------------------------
DROP TABLE IF EXISTS `hubungan`;
CREATE TABLE `hubungan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `namaHubungan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hubungan
-- ----------------------------
INSERT INTO `hubungan` VALUES (1, 'Suami');
INSERT INTO `hubungan` VALUES (2, 'Isteri');
INSERT INTO `hubungan` VALUES (3, 'Anak Kandung');
INSERT INTO `hubungan` VALUES (4, 'Anak Tiri');
INSERT INTO `hubungan` VALUES (5, 'Anak Angkat');
INSERT INTO `hubungan` VALUES (6, 'Ibu Kandung');
INSERT INTO `hubungan` VALUES (7, 'Ibu Tiri');
INSERT INTO `hubungan` VALUES (8, 'Ibu Angkat');
INSERT INTO `hubungan` VALUES (9, 'Bapa Kandung');
INSERT INTO `hubungan` VALUES (10, 'Bapa Tiri');
INSERT INTO `hubungan` VALUES (11, 'Bapa Angkat');

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan`  (
  `idJabatan` int(11) NOT NULL AUTO_INCREMENT,
  `singkatanJabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `namaJabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idJabatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES (1, 'BPTM', 'Bahagian Pengurusan Teknologi Maklumat');
INSERT INTO `jabatan` VALUES (2, 'MMK', 'MAJLIS MESYUARAT KERAJAAN');
INSERT INTO `jabatan` VALUES (3, 'BHGKP', 'BAHAGIAN KHIDMAT PENGURUSAN  SUK');
INSERT INTO `jabatan` VALUES (4, 'BITU', 'Bahagian Integriti Dan Tadbir Urus');
INSERT INTO `jabatan` VALUES (5, 'BHGKT', 'Bahagian Kerajaan Tempatan');
INSERT INTO `jabatan` VALUES (6, 'KORPORAT', 'BAHAGIAN PENGURUSAN KORPORAT');
INSERT INTO `jabatan` VALUES (7, 'perumahan', 'Bahagian Perumahan');
INSERT INTO `jabatan` VALUES (8, 'PERBENDAHARAAN', 'PEJABAT PERBENDAHARAAN NEGERI KELANTAN');
INSERT INTO `jabatan` VALUES (9, 'UAD', 'Unit Audit Dalam');
INSERT INTO `jabatan` VALUES (10, 'jank', 'Jabatan Air Negeri Kelantan');
INSERT INTO `jabatan` VALUES (11, 'PLANMalaysia', 'PLANMalaysia@Kelantan');
INSERT INTO `jabatan` VALUES (12, 'JAHEAIK', 'Jabatan Hal Ehwal Aagama Islam Negeri Kelantan');
INSERT INTO `jabatan` VALUES (13, 'JKSN', 'Jabatan Kehakiman Syariah Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (15, 'MUFTI', 'Jabatan Mufti Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (16, 'JPS', 'Jabatan Pengairan Dan Saliran Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (17, 'JPNK', 'Jabatan Perhutanan Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (18, 'JPKN', 'Jabatan Pertanian Negeri Kelantan');
INSERT INTO `jabatan` VALUES (19, 'PMBK', 'Pejabat Menteri Besar Kelantan\r\n');
INSERT INTO `jabatan` VALUES (20, 'PPN', 'Pejabat Pembangunan Negeri\r\n');
INSERT INTO `jabatan` VALUES (21, 'PTG', 'Pejabat Pengarah Tanah Dan Galian Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (22, 'SPN', 'Suruhanjaya Perkhidmatan Negeri\r\n');
INSERT INTO `jabatan` VALUES (23, 'PTGB', 'Pejabat Tanah Dan Jajahan Bachok\r\n');
INSERT INTO `jabatan` VALUES (24, 'PTJGM', 'Pejabat Tanah Dan Jajahan Gua Musang\r\n');
INSERT INTO `jabatan` VALUES (25, 'PTJJ', 'Pejabat Tanah Dan Jajahan Jeli\r\n');
INSERT INTO `jabatan` VALUES (26, 'PTJKB', 'Pejabat Tanah Dan Jajahan Kota Bharu\r\n');
INSERT INTO `jabatan` VALUES (27, 'PTJKK', 'Pejabat Tanah Dan Jajahan Kuala Krai\r\n');
INSERT INTO `jabatan` VALUES (28, 'PTJM', 'Pejabat Tanah Dan Jajahan Machang\r\n');
INSERT INTO `jabatan` VALUES (29, 'PTJPM', 'Pejabat Tanah Dan Jajahan Pasir Mas\r\n');
INSERT INTO `jabatan` VALUES (30, 'PTJPP', 'Pejabat Tanah Dan Jajahan Pasir Puteh\r\n');
INSERT INTO `jabatan` VALUES (31, 'PTJTM', 'Pejabat Tanah Dan Jajahan Tanah Merah\r\n');
INSERT INTO `jabatan` VALUES (32, 'PTJT', 'Pejabat Tanah Dan Jajahan Tumpat\r\n');
INSERT INTO `jabatan` VALUES (33, 'MAIK', 'Majlis Agama Islam Dan Adat Istiadat Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (34, 'YIK', 'Yayasan Islam Kelantan\r\n');
INSERT INTO `jabatan` VALUES (35, 'PKINK', 'Perbadanan Kemajuan Iktisad Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (36, 'YAKIN', 'Yayasan Kelantan Darul Naim\r\n');
INSERT INTO `jabatan` VALUES (37, 'MUZIUM', 'Perbadanan Muzium Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (38, 'KELANTANLIBRARY', 'Perbadanan Perpustakaan Awam Negeri Kelantan\r\n');
INSERT INTO `jabatan` VALUES (39, 'MPKBBRI', 'Majlis Perbandaran Kota Bharu Bandar Raya Islam\r\n');
INSERT INTO `jabatan` VALUES (40, 'MDBACHOK', 'Majlis Daerah Bachok\r\n');
INSERT INTO `jabatan` VALUES (41, 'MDDABONG', 'Majlis Daerah Dabong\r\n');
INSERT INTO `jabatan` VALUES (42, 'MDGM', 'Majlis Daerah Gua Musang\r\n');
INSERT INTO `jabatan` VALUES (43, 'MDJELI', 'Majlis Daerah Jeli\r\n');
INSERT INTO `jabatan` VALUES (44, 'MDKETEREH', 'Majlis Daerah Ketereh\r\n');
INSERT INTO `jabatan` VALUES (45, 'MDKKRAI', 'Majlis Daerah Kuala Krai\r\n');
INSERT INTO `jabatan` VALUES (46, 'MDMACHANG', 'Majlis Daerah Machang\r\n');
INSERT INTO `jabatan` VALUES (47, 'MDPMAS', 'Majlis Daerah Pasir Mas\r\n');
INSERT INTO `jabatan` VALUES (48, 'MDPPUTEH', 'Majlis Daerah Pasir Puteh\r\n');
INSERT INTO `jabatan` VALUES (49, 'MDTANAHMERAH', 'Majlis Daerah Tanah Merah\r\n');
INSERT INTO `jabatan` VALUES (50, 'MDTUMPAT', 'Majlis Daerah Tumpat\r\n');
INSERT INTO `jabatan` VALUES (58, 'BPSM', 'BAHAGIAN PENGURUSAN SUMBER MANUSIA');
INSERT INTO `jabatan` VALUES (60, 'JKR', 'Jabatan Kerja Raya');

-- ----------------------------
-- Table structure for jawatan
-- ----------------------------
DROP TABLE IF EXISTS `jawatan`;
CREATE TABLE `jawatan`  (
  `idJawatan` int(11) NOT NULL AUTO_INCREMENT,
  `namaJawatan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idJawatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 520 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jawatan
-- ----------------------------
INSERT INTO `jawatan` VALUES (1, 'MENTERI BESAR KELANTAN');
INSERT INTO `jawatan` VALUES (2, 'SETIAUSAHA SULIT KANAN');
INSERT INTO `jawatan` VALUES (3, 'SETIAUSAHA SULIT');
INSERT INTO `jawatan` VALUES (4, 'SETIAUSAHA POLITIK');
INSERT INTO `jawatan` VALUES (5, 'Setiausaha Akhbar');
INSERT INTO `jawatan` VALUES (6, 'Pengarah (Unit Pemantauan & Pelaksanaan Strategik) (SPARK)');
INSERT INTO `jawatan` VALUES (7, 'Penolong Pengarah (Pentadbiran Awam & Kewangan)(SPARK)');
INSERT INTO `jawatan` VALUES (8, 'Penolong Pengarah (Dasar & Perundangan)');
INSERT INTO `jawatan` VALUES (11, 'Pembantu Khas Menteri Besar');
INSERT INTO `jawatan` VALUES (12, 'Penolong Pengarah (Ekonomi & Pelaburan)');
INSERT INTO `jawatan` VALUES (13, 'Timbalan Menteri Besar Kelantan');
INSERT INTO `jawatan` VALUES (14, 'Pegawai Khas');
INSERT INTO `jawatan` VALUES (15, 'Pembantu Khas ');
INSERT INTO `jawatan` VALUES (16, 'Speaker Dewan Negeri Kelantan');
INSERT INTO `jawatan` VALUES (17, 'Timbalan Speaker');
INSERT INTO `jawatan` VALUES (18, 'Pengerusi Jawatankuasa Pentadbiran Awam, Perancangan Ekonomi, Pelaburan dan Kewangan');
INSERT INTO `jawatan` VALUES (19, 'Timbalan Pengerusi');
INSERT INTO `jawatan` VALUES (20, 'Pengerusi Jawatankuasa Pembangunan Wilayah, Tanah dan Sumber Asli');
INSERT INTO `jawatan` VALUES (21, 'Pengerusi Jawatankuasa Perindustrian Perdagangan, Perpaduan Masyarakat dan Pembangunan Usahawan');
INSERT INTO `jawatan` VALUES (22, 'Pengerusi Jawatankuasa Kerajaan Tempatan, Perumahan, Belia dan Sukan');
INSERT INTO `jawatan` VALUES (23, 'Pengerusi Jawatankuasa Kebudayaan, Pelancongan dan Warisan');
INSERT INTO `jawatan` VALUES (24, 'Pengerusi Jawatankuasa Pertanian, Industri Asas Tani, Bioteknologi dan Teknologi Hijau');
INSERT INTO `jawatan` VALUES (25, 'Pengerusi Jawatankuasa Pembangunan Insan, Pendidikan dan Pengajian Tinggi');
INSERT INTO `jawatan` VALUES (26, 'Pengerusi Jawatankuasa Pembangunan Islam, Dakwah, Penerangan dan Hubungan Serantau');
INSERT INTO `jawatan` VALUES (27, 'Pengerusi Jawatankuasa Kerjaraya, Infrastruktur, Utiliti dan Teknologi Maklumat');
INSERT INTO `jawatan` VALUES (28, 'Pengerusi Jawatankuasa Pembangunan Wanita, Keluarga dan Kebajikan');
INSERT INTO `jawatan` VALUES (29, 'Pengerusi Jawatankuasa Kesejahteraan Rakyat, Kesihatan, Alam sekitar dan NGO');
INSERT INTO `jawatan` VALUES (30, 'Speaker DUN');
INSERT INTO `jawatan` VALUES (32, 'Setiausaha Kerajaan Negeri Kelantan');
INSERT INTO `jawatan` VALUES (33, 'Penasihat Undang-Undang');
INSERT INTO `jawatan` VALUES (35, 'Timbalan Setiausaha Kerajaan (Pengurusan)');
INSERT INTO `jawatan` VALUES (36, 'Timbalan Setiausaha Kerajaan (Pembangunan)/Pengarah UPEN');
INSERT INTO `jawatan` VALUES (37, 'Timbalan Pengarah (Makro)');
INSERT INTO `jawatan` VALUES (38, 'Timbalan Pengarah (Sektoral)');
INSERT INTO `jawatan` VALUES (39, 'Ketua Penolong Pengarah (Penyelidikan & Pembangunan)');
INSERT INTO `jawatan` VALUES (40, 'Penolong Pengarah (Pelaburan I)');
INSERT INTO `jawatan` VALUES (41, 'Pengarah');
INSERT INTO `jawatan` VALUES (42, 'Ketua Penolong Pengarah');
INSERT INTO `jawatan` VALUES (43, 'Penolong Pengarah (Perkhidmatan)');
INSERT INTO `jawatan` VALUES (44, 'Penolong Pengarah (Prestasi & Kaunseling)');
INSERT INTO `jawatan` VALUES (45, 'Penolong Pengarah (Latihan & Kompetensi)');
INSERT INTO `jawatan` VALUES (49, 'Penolong Pegawai Teknologi Maklumat');
INSERT INTO `jawatan` VALUES (54, 'Ketua Penolong Setiausaha');
INSERT INTO `jawatan` VALUES (55, 'Setiausaha Dewan');
INSERT INTO `jawatan` VALUES (56, 'Penolong Setiausaha');
INSERT INTO `jawatan` VALUES (57, 'Penolong Setiausaha (Protokol I)');
INSERT INTO `jawatan` VALUES (58, 'Penolong Setiausaha (Kewangan)');
INSERT INTO `jawatan` VALUES (59, 'Penolong Setiausaha (Pentadbiran)');
INSERT INTO `jawatan` VALUES (60, 'Penolong Setiausaha (Protokol II)');
INSERT INTO `jawatan` VALUES (61, 'Ketua Unit Audit Dalam');
INSERT INTO `jawatan` VALUES (62, 'Juruaudit');
INSERT INTO `jawatan` VALUES (63, 'Penolong Juruaudit Kanan');
INSERT INTO `jawatan` VALUES (64, 'Penolong Setiausaha (Pembangunan & Dasar)');
INSERT INTO `jawatan` VALUES (65, 'Penolong Setiausaha (Pengurusan)');
INSERT INTO `jawatan` VALUES (66, 'Akauntan');
INSERT INTO `jawatan` VALUES (67, 'Pegawai Teknologi Maklumat');
INSERT INTO `jawatan` VALUES (68, 'Penolong Jurutera');
INSERT INTO `jawatan` VALUES (69, 'Penolong Pegawai Undang- Undang');
INSERT INTO `jawatan` VALUES (70, 'Penolong Setiausaha (Penguatkuasa)');
INSERT INTO `jawatan` VALUES (71, 'Penolong Akauntan');
INSERT INTO `jawatan` VALUES (73, 'Timbalan Pengarah');
INSERT INTO `jawatan` VALUES (74, 'Penolong Pengarah (Integriti)');
INSERT INTO `jawatan` VALUES (75, 'Penolong Pegawai Tadbir');
INSERT INTO `jawatan` VALUES (76, 'Ketua Penolong Setiausaha (Pelancongan & Kebudayaan)');
INSERT INTO `jawatan` VALUES (77, 'Ketua Penolong Setiausaha (Pengurusan Korporat)');
INSERT INTO `jawatan` VALUES (78, 'Penolong Setiausaha (Korporat)');
INSERT INTO `jawatan` VALUES (79, 'Penolong Setiausaha (Inovasi)');
INSERT INTO `jawatan` VALUES (80, 'Pengarah Pembangunan Negeri');
INSERT INTO `jawatan` VALUES (81, 'Penolong Pengarah Pembangunan Negeri');
INSERT INTO `jawatan` VALUES (83, 'Pengarah Pendakwaan Negeri');
INSERT INTO `jawatan` VALUES (84, 'Pegawai Undang - Undang (Pendakwaan)');
INSERT INTO `jawatan` VALUES (85, 'Pegawai Syariah');
INSERT INTO `jawatan` VALUES (86, 'Pegawai Undang - Undang (Sivil)');
INSERT INTO `jawatan` VALUES (87, 'Pegawai Undang - Undang (Guaman)');
INSERT INTO `jawatan` VALUES (89, 'Timbalan Pegawai Kewangan Negeri');
INSERT INTO `jawatan` VALUES (91, 'Ketua Penolong Pegawai Kewangan Negeri (Bajet & Pinjaman)');
INSERT INTO `jawatan` VALUES (92, 'Ketua Penolong Pegawai Kewangan Negeri (Perolehan & Pengurusan Aset) (Ditempatkan di Pejabat Tanah dan Jajahan Kota Bharu)');
INSERT INTO `jawatan` VALUES (93, 'Ketua Penolong Pegawai Kewangan Negeri (Analisis Pemantauan Pelaburan) \r\n(Ditempatkan di Jabatan Perhutanan Negeri Kelantan)');
INSERT INTO `jawatan` VALUES (94, 'Penolong Pegawai Kewangan Negeri (Khidmat Pengurusan)');
INSERT INTO `jawatan` VALUES (95, 'Penolong Pegawai Kewangan Negeri (Hasil)');
INSERT INTO `jawatan` VALUES (96, 'Penolong Pegawai Kewangan Negeri (Bajet & Pinjaman)');
INSERT INTO `jawatan` VALUES (97, 'Penolong Pegawai Kewangan Negeri (Peroleh & Pengurusan Aset)');
INSERT INTO `jawatan` VALUES (98, 'Penolong Bendahari');
INSERT INTO `jawatan` VALUES (99, 'Penolong Pengarah (Hasil)');
INSERT INTO `jawatan` VALUES (100, 'Pengawai Eksekutif Kanan');
INSERT INTO `jawatan` VALUES (101, 'Mufti');
INSERT INTO `jawatan` VALUES (102, 'Timbalan Mufti');
INSERT INTO `jawatan` VALUES (103, 'Pegawai Fatwa');
INSERT INTO `jawatan` VALUES (104, 'Pegawai Falak');
INSERT INTO `jawatan` VALUES (105, 'Ketua Hakim Syarie');
INSERT INTO `jawatan` VALUES (106, 'Ketua Mahkamah Tinggi');
INSERT INTO `jawatan` VALUES (108, 'Ketua Pendaftar (Bhg. Pengurusan Sumber Sumber Manusia & Kewangan)');
INSERT INTO `jawatan` VALUES (109, 'Penolong pengarah Kanan Sesyen Bhg. Sokongan Keluarga');
INSERT INTO `jawatan` VALUES (119, 'Hakim Mahkamah Rendah');
INSERT INTO `jawatan` VALUES (120, 'Pegawai Sulh');
INSERT INTO `jawatan` VALUES (123, 'Pegawai Penyelidik');
INSERT INTO `jawatan` VALUES (124, 'Penolong Pegawai Syariah Kanan (MTS Kota Bharu)');
INSERT INTO `jawatan` VALUES (125, 'Pen. Pegawai Tadbir Kanan (Pent. Am)');
INSERT INTO `jawatan` VALUES (130, 'Penolong Pegawai Syariah');
INSERT INTO `jawatan` VALUES (135, 'Pengerusi');
INSERT INTO `jawatan` VALUES (136, 'Setiausaha');
INSERT INTO `jawatan` VALUES (137, 'Pengarah Tanah dan Galian Kelantan');
INSERT INTO `jawatan` VALUES (138, 'Timbalan Pengarah Tanah dan Galian (Pengurusan)');
INSERT INTO `jawatan` VALUES (139, 'Timbalan Pengarah Tanah dan Galian (Pendaftaran)');
INSERT INTO `jawatan` VALUES (140, 'Penolong Pengarah (Pembangunan)');
INSERT INTO `jawatan` VALUES (141, 'Penolong Pengarah (Pendaftaran)');
INSERT INTO `jawatan` VALUES (142, 'Penolong Pengarah (Mineral)');
INSERT INTO `jawatan` VALUES (143, 'Penolong Pengarah (Penguatkuasaan)');
INSERT INTO `jawatan` VALUES (144, 'Penolong Pengarah (Pendakwaan)');
INSERT INTO `jawatan` VALUES (145, 'Penolong Pengarah (Audit Pengurusan)');
INSERT INTO `jawatan` VALUES (146, 'Penolong Pengarah (Pegawai Teknologi Maklumat)');
INSERT INTO `jawatan` VALUES (147, 'Timbalan Pengarah (Operasi)');
INSERT INTO `jawatan` VALUES (149, 'Pen. Pengarah (Pentadbiran & Kewangan)');
INSERT INTO `jawatan` VALUES (150, 'Ketua Penolong Pengarah (Dakwah)');
INSERT INTO `jawatan` VALUES (151, 'Ketua Pen. Pengarah (Pentadbiran Undang- Undang Keluarga Islam)');
INSERT INTO `jawatan` VALUES (152, 'Ketua Penolong Pengarah (Penyelidikan)');
INSERT INTO `jawatan` VALUES (153, 'Ketua Penolong Pengarah (Penguatkuasa)');
INSERT INTO `jawatan` VALUES (154, 'Penolong Pengarah (Pendidikan)');
INSERT INTO `jawatan` VALUES (155, 'Penolong Pengarah (Pengurusan Maslis)');
INSERT INTO `jawatan` VALUES (156, 'Ketua Pengelola Halaqat Negeri Kelantan');
INSERT INTO `jawatan` VALUES (157, 'Pengelola Istana D\'raja');
INSERT INTO `jawatan` VALUES (158, 'Ketua Istiadat Kelantan');
INSERT INTO `jawatan` VALUES (159, 'S/U Sulit kpd KDYMM Sultan Muhammad V');
INSERT INTO `jawatan` VALUES (160, 'Juruiring Tentera kpd KDYMM Sultan Muhammad V');
INSERT INTO `jawatan` VALUES (161, 'Juruiring Polis kpd KDYMM Sultan Muhammad V');
INSERT INTO `jawatan` VALUES (162, 'Pegawai Tadbir (Protokol)');
INSERT INTO `jawatan` VALUES (163, 'Pegawai Tadbir (Khidmat Pengurusan)');
INSERT INTO `jawatan` VALUES (164, 'Pegawai Tadbir (Media)');
INSERT INTO `jawatan` VALUES (165, 'S/U Sulit kpd YTM Tengku Mahkota Kelantan');
INSERT INTO `jawatan` VALUES (166, 'Juruiring Tentera kpd YTM Tengku Mahkota Kelantan');
INSERT INTO `jawatan` VALUES (167, 'Pengarah JKR Kelantan');
INSERT INTO `jawatan` VALUES (168, 'Ketua Penolong Pengarah (Pentadbiran & Kewangan)');
INSERT INTO `jawatan` VALUES (169, 'Ketua Penolong Pengarah (Pengurusan Korporat)');
INSERT INTO `jawatan` VALUES (170, 'Ketua Penolong Pengarah (Kontrak & Ukur Bahan)');
INSERT INTO `jawatan` VALUES (171, 'Ketua Penolong Pengarah (Jalan & Jambatan)');
INSERT INTO `jawatan` VALUES (172, 'Ketua Penolong Pengarah (Projek Khas Jalan)');
INSERT INTO `jawatan` VALUES (173, 'Ketua Penolong Pengarah (Pengurusan Aset Bersepadu)');
INSERT INTO `jawatan` VALUES (174, 'Ketua Penolong Pengarah (Bangunan)');
INSERT INTO `jawatan` VALUES (175, 'Ketua Penolong Pengarah (Pendidikan & Pengajian Tinggi)');
INSERT INTO `jawatan` VALUES (176, 'Ketua Penolong Pengarah (Arkitek)');
INSERT INTO `jawatan` VALUES (177, 'Ketua Penolong Pengarah (Unit Kerja Tentera)');
INSERT INTO `jawatan` VALUES (178, 'Ketua Jurutera (Eletrik)');
INSERT INTO `jawatan` VALUES (179, 'Ketua Penolong Pengarah (Mekanikal)');
INSERT INTO `jawatan` VALUES (180, 'Jurutera Jajahan Kota Bharu');
INSERT INTO `jawatan` VALUES (181, 'Jurutera Jajahan Bachok');
INSERT INTO `jawatan` VALUES (182, 'Jurutera Jajahan Tumpat');
INSERT INTO `jawatan` VALUES (183, 'Jurutera Jajahan Machang');
INSERT INTO `jawatan` VALUES (184, 'Jurutera Jajahan Pasir Puteh');
INSERT INTO `jawatan` VALUES (185, 'Jurutera Jajahan Jeli');
INSERT INTO `jawatan` VALUES (186, 'Jurutera Jajahan Pasir Mas');
INSERT INTO `jawatan` VALUES (187, 'Jurutera Jajahan Tanah Merah');
INSERT INTO `jawatan` VALUES (188, 'Jurutera Jajahan Kuala Krai');
INSERT INTO `jawatan` VALUES (189, 'Jurutera Jajahan Gua Musang');
INSERT INTO `jawatan` VALUES (190, 'Pengurus Kuari Bukit Buloh P.Chondong');
INSERT INTO `jawatan` VALUES (191, 'Ketua Penolong Pengarah Kanan Mekanikal Dan Eletrikal');
INSERT INTO `jawatan` VALUES (192, 'Ketua Penolong Pengarah Bahagian Lembangan Sungai Dan Zon Pantai');
INSERT INTO `jawatan` VALUES (193, 'Penolong Pengarah Bahagian Pengurusan Banjir & Mesra Alam');
INSERT INTO `jawatan` VALUES (194, 'Penolong Pengarah Bahagian Korporat');
INSERT INTO `jawatan` VALUES (195, 'Penolong Pengarah Bahagian Saliran Dan Pertanian');
INSERT INTO `jawatan` VALUES (196, 'Penolong Jurutera Bahagian Teknologi Maklumat');
INSERT INTO `jawatan` VALUES (197, 'Penolong Jurutera Bahagian Sumber Air dan Hidrologi');
INSERT INTO `jawatan` VALUES (198, 'Jurutera Jajahan JPS Kota Bharu');
INSERT INTO `jawatan` VALUES (199, 'Jurutera Jajahan JPS Jajahan Pasir Mas');
INSERT INTO `jawatan` VALUES (200, 'Jurutera Jajahan JPS Jajahan Pasir Puteh');
INSERT INTO `jawatan` VALUES (201, 'Jurutera Jajahan JPS Jajahan Machang');
INSERT INTO `jawatan` VALUES (202, 'Jurutera Jajahan JPS Jajahan Tanah Merah');
INSERT INTO `jawatan` VALUES (203, 'Jurutera Jajahan JPS Jajahan Bachok');
INSERT INTO `jawatan` VALUES (204, 'Jurutera Jajahan JPS Jajahan Tumpat');
INSERT INTO `jawatan` VALUES (205, 'Ketua Penolong Jurutera Jajahan JPS Jajahan Kuala Krai');
INSERT INTO `jawatan` VALUES (206, 'Jurutera Jajahan JPS Jajahan Gua Musang');
INSERT INTO `jawatan` VALUES (207, 'Ketua Penolong Jurutera Jajahan JPS Jajahan Jeli');
INSERT INTO `jawatan` VALUES (208, 'Penolong Pengarah (Regulatori)');
INSERT INTO `jawatan` VALUES (209, 'Penolong Pengarah (Kesihatan)');
INSERT INTO `jawatan` VALUES (210, 'Pegawai Penguatkuasa');
INSERT INTO `jawatan` VALUES (211, 'Penolong Pengarah (Khidmat Pegurusan)');
INSERT INTO `jawatan` VALUES (212, 'Penolong Perhutanan Negeri');
INSERT INTO `jawatan` VALUES (213, 'Timbalan Pengarah Perhutanan ');
INSERT INTO `jawatan` VALUES (214, 'Timbalan Pengarah Perhutanan (Pembangunan)');
INSERT INTO `jawatan` VALUES (215, 'Timbalan Pengarah Perhutanan (Sivilkultur & Perlindungan)');
INSERT INTO `jawatan` VALUES (216, 'Penolong Pengarah (Perancangan & Pengurusan Hutan)');
INSERT INTO `jawatan` VALUES (217, 'Timbalan Pengarah Perhutanan (Pentadbiran & Kewangan)');
INSERT INTO `jawatan` VALUES (218, 'Penolong Pengarah Penguatkuasaan (Siasatan)');
INSERT INTO `jawatan` VALUES (219, 'S/U KERJA (MALAYSIAN INDIAN CONGRESS');
INSERT INTO `jawatan` VALUES (220, 'Penolong Pengarah (Operasi & Penguatkuasaan)');
INSERT INTO `jawatan` VALUES (221, 'Penolong Pengarah (Perindustrian & Pengusahasilan)');
INSERT INTO `jawatan` VALUES (222, 'Penolong Pengarah (Hutan Taman Negeri)');
INSERT INTO `jawatan` VALUES (223, 'Pegawai Hutan Jajahan Kelantan Timur (Machang)');
INSERT INTO `jawatan` VALUES (224, 'Pegawai Hutan Jajahan Kelantan Barat (Tanah Merah)');
INSERT INTO `jawatan` VALUES (225, 'Pegawai Hutan Jajahan Kelantan Selatan (Gua Musang)');
INSERT INTO `jawatan` VALUES (226, 'Timbalan Pengarah Pertanian');
INSERT INTO `jawatan` VALUES (227, 'Timbalan Pengarah Pertanian (Operasi)');
INSERT INTO `jawatan` VALUES (228, 'Ketua Penolong Pengarah (Industri Asas Tani)');
INSERT INTO `jawatan` VALUES (229, 'Penolong Pengarah Pertanian (Bahagian Latihan Teknikal)');
INSERT INTO `jawatan` VALUES (230, 'Penolong Pengarah Pertanian (Bahagian Pengembangan)');
INSERT INTO `jawatan` VALUES (231, 'Penolong Pengarah Pertanian (Bahagian Kejuruteraan Pertanian)');
INSERT INTO `jawatan` VALUES (232, 'Pegawai Pertanian Komunikasi');
INSERT INTO `jawatan` VALUES (233, 'Pegawai Pertanian (Unit Perancangan & Penilaian)');
INSERT INTO `jawatan` VALUES (234, 'Pegawai Pertanian (Unit Methologi, Perundingan & Pelaburan)');
INSERT INTO `jawatan` VALUES (235, 'Pegawai Pertanian (Unit Kawalan Kualiti -\r\nIAT)');
INSERT INTO `jawatan` VALUES (236, 'Timbalan Pengarah (Bahagian Kawalan Perancangan)');
INSERT INTO `jawatan` VALUES (237, 'Timbalan Pengarah (Bahagian Rancangan Pemajuan & Projek Khas)');
INSERT INTO `jawatan` VALUES (238, 'Ketua penolong Pengarah (Bahagian Korporat & Lembaga Rayuan)');
INSERT INTO `jawatan` VALUES (239, 'Penolong Pengarah (Bahagian Kawalan Perancangan)');
INSERT INTO `jawatan` VALUES (240, 'Penolong Pengarah (Bahagian Projek Khas & Pengkalan Data)');
INSERT INTO `jawatan` VALUES (241, 'Penolong Pengarah (Bahagian Perancangan Pemajuan)');
INSERT INTO `jawatan` VALUES (242, 'Ketua Penolong Pengarah (Kanak - Kanak & Perintah Khidmat Masyarakat)');
INSERT INTO `jawatan` VALUES (243, 'Ketua Penolong Pengarah (OKU & Warga Emas)');
INSERT INTO `jawatan` VALUES (244, 'Ketua Penolong Pengarah (Kebajikan Produktif & Komuniti)');
INSERT INTO `jawatan` VALUES (245, 'Penolong Pengarah Kanan (Khidmat Pengurusan)');
INSERT INTO `jawatan` VALUES (246, 'Penolong Pengarah (Khidmat Pengurusan)');
INSERT INTO `jawatan` VALUES (247, 'Penolong Pengarah (Pentadbiran)');
INSERT INTO `jawatan` VALUES (248, 'Penolong Pengarah (Teknikal)');
INSERT INTO `jawatan` VALUES (249, 'Pegawai Perikanan');
INSERT INTO `jawatan` VALUES (250, 'Ketua Jajahan');
INSERT INTO `jawatan` VALUES (251, 'Timbalan Ketua Jajahan');
INSERT INTO `jawatan` VALUES (252, 'Ketua Penolong Ketua Jajahan (Khidmat Pengurusan)');
INSERT INTO `jawatan` VALUES (253, 'Ketua Penolong Ketua Jajahan (Pembangunan)');
INSERT INTO `jawatan` VALUES (254, 'Penolong Ketua Jajahan ');
INSERT INTO `jawatan` VALUES (255, 'Penolong Ketua Jajahan (Penguatkuasaan & Teknikal)');
INSERT INTO `jawatan` VALUES (256, 'Penolong Ketua Jajahan (Hasil)');
INSERT INTO `jawatan` VALUES (257, 'Penolong Ketua Jajahan (Penguatkuasaan, Teknikal & Hasil)');
INSERT INTO `jawatan` VALUES (258, 'Penolong Ketua Jajahan (Pembangunan & Pelupusan Tanah)');
INSERT INTO `jawatan` VALUES (259, 'Penolong Ketua Jajahan (Pembangunan Masyarakat)');
INSERT INTO `jawatan` VALUES (260, 'Ketua Penolong Ketua Jajahan (Pembangunan Tanah dan pelupusan)');
INSERT INTO `jawatan` VALUES (261, 'Ketua Penolong Ketua Jajahan (Pembangunan Fizikal)');
INSERT INTO `jawatan` VALUES (262, 'Penolong Ketua Jajahan (Pembangunan Tanah & Pelupusan)');
INSERT INTO `jawatan` VALUES (263, 'Penolong Ketua Jajahan (Penguatkuasa Teknikal & Hasil)');
INSERT INTO `jawatan` VALUES (264, 'Penolong Ketua Jajahan (Pengurusan Tanah)');
INSERT INTO `jawatan` VALUES (265, 'Penolong Pengarah (Penerangan)');
INSERT INTO `jawatan` VALUES (266, 'Penolong Pengarah (Penerbitan)');
INSERT INTO `jawatan` VALUES (267, 'Penolong Pengarah (Multimedia)');
INSERT INTO `jawatan` VALUES (268, 'Penolong Pengarah (Hud Seranta)');
INSERT INTO `jawatan` VALUES (269, 'Ruang Tadbir Am');
INSERT INTO `jawatan` VALUES (270, 'Pengarang');
INSERT INTO `jawatan` VALUES (271, 'Pegawai Sistem Maklumat');
INSERT INTO `jawatan` VALUES (272, 'Pegawai Penyelidik Sosial');
INSERT INTO `jawatan` VALUES (273, 'Pegawai Penyelidik Ekonomi');
INSERT INTO `jawatan` VALUES (274, 'Penolong Pegawai Penyelidik Strategik');
INSERT INTO `jawatan` VALUES (275, 'Penolong Pegawai Penyelidik Sosial');
INSERT INTO `jawatan` VALUES (276, 'Penolong Pegawai Sistem Maklumat');
INSERT INTO `jawatan` VALUES (277, 'Timbalan Pengarah / Pen. Pengarah Unit Pembangunan Sukan');
INSERT INTO `jawatan` VALUES (278, 'Pen. Pengarah Unit Pembangunan Belia');
INSERT INTO `jawatan` VALUES (279, 'Pen. Pengarah Unit Pencegahan Gejala Sosial');
INSERT INTO `jawatan` VALUES (280, 'Pen. Pengarah Unit Pembangunan Beliawanis');
INSERT INTO `jawatan` VALUES (281, 'Pen. Pengarah Unit Multimedia & Dokumentasi');
INSERT INTO `jawatan` VALUES (282, 'Timbalan Pengarah (KPP Kebajikan)');
INSERT INTO `jawatan` VALUES (283, 'Ketua Pen. Pengarah Pembangunan Wanita');
INSERT INTO `jawatan` VALUES (284, 'Ketua Pen. Pengarah Kemahiran Wanita');
INSERT INTO `jawatan` VALUES (285, 'Ketua Pen. Pengarah Pembangunan Keluarga');
INSERT INTO `jawatan` VALUES (286, 'Ketua Pembantu Tadbir');
INSERT INTO `jawatan` VALUES (287, 'Penolong Pengarah');
INSERT INTO `jawatan` VALUES (289, 'Yang Dipertua');
INSERT INTO `jawatan` VALUES (290, 'Pengarah Kejuruteraan, MPKB-BRI');
INSERT INTO `jawatan` VALUES (291, 'Pengarah Perancangan & Kawalan Bangunan');
INSERT INTO `jawatan` VALUES (292, 'Pengarah Kewangan');
INSERT INTO `jawatan` VALUES (293, 'Pengarah Khidmat Pengurusan');
INSERT INTO `jawatan` VALUES (294, 'Pengarah Perkhidmat Pengurusan ');
INSERT INTO `jawatan` VALUES (295, 'Pengarah Perkhidmat Perbandaran & Seni Taman');
INSERT INTO `jawatan` VALUES (296, 'Pengarah Pembangunan Islam');
INSERT INTO `jawatan` VALUES (297, 'Pengarah Pelesenan & Kawalan Perniagaan');
INSERT INTO `jawatan` VALUES (298, 'Yang Teramat Mulia Tengku Mahkota Kelantan Merangkap Yang Dipertua');
INSERT INTO `jawatan` VALUES (299, 'Timbalan Yang Dipertua');
INSERT INTO `jawatan` VALUES (300, 'Bendahari');
INSERT INTO `jawatan` VALUES (301, 'Ketua Pengawai Baitulmal / Pembangunan');
INSERT INTO `jawatan` VALUES (302, 'Ketua Pegawai Agama');
INSERT INTO `jawatan` VALUES (303, 'Imam Besar');
INSERT INTO `jawatan` VALUES (304, 'Pemangku Pegawai Zakat');
INSERT INTO `jawatan` VALUES (305, 'Mudir Maahad Tahfiz Al Quran');
INSERT INTO `jawatan` VALUES (306, 'Pegawai Pengurusan Projek');
INSERT INTO `jawatan` VALUES (307, 'Pegawai Pengurusan Am');
INSERT INTO `jawatan` VALUES (309, 'Pengurus Kompleks Islam Jubli Perak');
INSERT INTO `jawatan` VALUES (310, 'Pegawai Adat Istiadat');
INSERT INTO `jawatan` VALUES (311, 'Pegawai Penerbitan');
INSERT INTO `jawatan` VALUES (312, 'Pegawai Dakwah');
INSERT INTO `jawatan` VALUES (313, 'Pegawai Hal Ehwal Masjid');
INSERT INTO `jawatan` VALUES (314, 'Pegawai Urusan Sumber');
INSERT INTO `jawatan` VALUES (315, 'Pegawai Hal Ehwal Imarah Masjid');
INSERT INTO `jawatan` VALUES (316, 'Pegawai Wakaf');
INSERT INTO `jawatan` VALUES (317, 'Pegawai Aset');
INSERT INTO `jawatan` VALUES (319, 'Pegawai Penyelaras Takmir');
INSERT INTO `jawatan` VALUES (320, 'Pegawai Pengurusan Projek Khas');
INSERT INTO `jawatan` VALUES (321, 'Pegawai Tadbir (Pendidikan)');
INSERT INTO `jawatan` VALUES (322, 'Pegawai Tadbir (Wang Ehsan)');
INSERT INTO `jawatan` VALUES (324, 'Timbalan Ketua Pegawai Eksekutif Kumpulan (Hal Ehwal Korporat)');
INSERT INTO `jawatan` VALUES (325, 'Timbalan Ketua Pegawai Eksekutif Kumpulan (Perancangan & Pembangunan)');
INSERT INTO `jawatan` VALUES (327, 'Pengurus Pengurusan Sumber Manusia Kumpulan');
INSERT INTO `jawatan` VALUES (328, 'Pengurus Usahawan, IKS & Perhubungan Antarabangsa Kumpulan');
INSERT INTO `jawatan` VALUES (329, 'Pengurus Khidmat Teknikal Kumpulan');
INSERT INTO `jawatan` VALUES (330, 'Pengurus Korporat & Teknologi Maklumat Kumpulan');
INSERT INTO `jawatan` VALUES (331, 'Pengurus Projek, Sumber Asli, & Industri Kumpulan');
INSERT INTO `jawatan` VALUES (332, 'Pengurus Audit Dalaman Kumpulan');
INSERT INTO `jawatan` VALUES (333, 'Pengurus Perundangan & Intergriti Kumpulan');
INSERT INTO `jawatan` VALUES (334, 'Ketua Pegawai Eksekutif Kumpulan');
INSERT INTO `jawatan` VALUES (335, 'Ketua Pegawai Operasi');
INSERT INTO `jawatan` VALUES (336, 'Pengurus Kanan Modal Insan & Pentadbiran');
INSERT INTO `jawatan` VALUES (337, 'Pengurus Kanan Hartanah');
INSERT INTO `jawatan` VALUES (338, 'Pengurus Kanan Audit Dalaman');
INSERT INTO `jawatan` VALUES (339, 'Pengurus Kanan Kewangan');
INSERT INTO `jawatan` VALUES (340, 'Pengurus Kanan Perancangan Strategik');
INSERT INTO `jawatan` VALUES (341, 'Pengurus Kanan Pemasaran & Komunikasi');
INSERT INTO `jawatan` VALUES (342, 'Pengurus Pejabat Ketua Pegawai Eksekutif');
INSERT INTO `jawatan` VALUES (343, 'Esekutif Kanan Undang - Undang');
INSERT INTO `jawatan` VALUES (344, 'Pengurus Modul Insan & Pentadbiran');
INSERT INTO `jawatan` VALUES (345, 'Eksekutif Pemantauan Prestasi');
INSERT INTO `jawatan` VALUES (346, 'Pembantu Setiausaha Pejabat');
INSERT INTO `jawatan` VALUES (347, 'Ketua Pegawai Kewangan');
INSERT INTO `jawatan` VALUES (348, 'Pengurus Audit Dalam, Nazirah & Integriti');
INSERT INTO `jawatan` VALUES (349, 'Pengurusan Pembangunan Korporat');
INSERT INTO `jawatan` VALUES (350, 'Pengurus Pembangunan Project');
INSERT INTO `jawatan` VALUES (351, 'Pegawai Pengurusan & Perhubungan Korporat');
INSERT INTO `jawatan` VALUES (352, 'Pegawai Kewangan');
INSERT INTO `jawatan` VALUES (353, 'Pegawai Pengurusan Pelaburan & Hartanah');
INSERT INTO `jawatan` VALUES (354, 'Timbalan Pengarah (Pengurusan)');
INSERT INTO `jawatan` VALUES (355, 'Timbalan Pengarah (Sekolah)');
INSERT INTO `jawatan` VALUES (356, 'Timbalan Pengarah (Akademik)');
INSERT INTO `jawatan` VALUES (357, 'Timbalan Pengarah (Kenaziran)');
INSERT INTO `jawatan` VALUES (358, 'Penolong Pengarah (Khidmat Pengurusan)');
INSERT INTO `jawatan` VALUES (359, 'Penolong Pengarah (Sumber Manusia)');
INSERT INTO `jawatan` VALUES (360, 'Penolong Pengarah (Pelaburan)');
INSERT INTO `jawatan` VALUES (361, 'Penolong Pengarah (Kokurikulum)');
INSERT INTO `jawatan` VALUES (362, 'Penolong Pengarah (Kenaziran)');
INSERT INTO `jawatan` VALUES (363, 'Penolong Pengarah (Pusat Bahasa Arab)');
INSERT INTO `jawatan` VALUES (364, 'Penolong Pengarah (Penilaian & Peperiksaan)');
INSERT INTO `jawatan` VALUES (365, 'Penolong Pengarah (Perkhidmatan Guru)');
INSERT INTO `jawatan` VALUES (366, 'Penolong Pengarah (Hal Ehwal Murid)');
INSERT INTO `jawatan` VALUES (367, 'Penolong Pengarah (Kurikulum)');
INSERT INTO `jawatan` VALUES (370, 'Penolong Pengarah Pelaburan & Penyelidikan');
INSERT INTO `jawatan` VALUES (371, 'Penolong Pengarah Perancangan, Penyelidikan dan Pemantauan Projek');
INSERT INTO `jawatan` VALUES (372, 'Penolong Pengarah Pentadbiran & Sumber Manusia');
INSERT INTO `jawatan` VALUES (373, 'Penolong Pengarah Harta & Modal');
INSERT INTO `jawatan` VALUES (374, 'Penolong Pengarah Hal Ehwal Pelajar');
INSERT INTO `jawatan` VALUES (375, 'Pembantu Pejabat');
INSERT INTO `jawatan` VALUES (377, 'Pegawai Pelaburan');
INSERT INTO `jawatan` VALUES (378, 'Pemangku Pengurus Besar');
INSERT INTO `jawatan` VALUES (379, 'Ketua Jabatan kewangan & Hasil');
INSERT INTO `jawatan` VALUES (380, 'Ketua Jabatan Perniagaan & Korporat');
INSERT INTO `jawatan` VALUES (381, 'Ketua Jabatan Kualiti & Asurans Kualiti');
INSERT INTO `jawatan` VALUES (382, 'Ketua Jabatan Teknikal & Perancangan Pembangunan (Memangku)');
INSERT INTO `jawatan` VALUES (383, 'Ketua Jabatan Latihan & Pembangunan Modal Insan');
INSERT INTO `jawatan` VALUES (384, 'Ketua Jabatan Operasi & Pengeluaran');
INSERT INTO `jawatan` VALUES (385, 'Ketua Jabatan Pengurusan Modal Insan & Pentadbiran');
INSERT INTO `jawatan` VALUES (386, 'Jurutera');
INSERT INTO `jawatan` VALUES (388, 'Penolong Pengawai Tadbir');
INSERT INTO `jawatan` VALUES (394, 'Hakim Makhamah Tinggi ');
INSERT INTO `jawatan` VALUES (395, 'Timbalan Pendaftar');
INSERT INTO `jawatan` VALUES (396, 'Penolong Kanan Pendaftar');
INSERT INTO `jawatan` VALUES (398, 'Pengarah Makhamah Negeri Kelantan');
INSERT INTO `jawatan` VALUES (399, 'Hakim Makhamah Seksyen');
INSERT INTO `jawatan` VALUES (401, 'Ketua Unit Khidmat Pengurusan');
INSERT INTO `jawatan` VALUES (402, 'Ketua Jurutera');
INSERT INTO `jawatan` VALUES (403, 'Pengarah Audit Negeri');
INSERT INTO `jawatan` VALUES (404, 'Pengarah Wilayah');
INSERT INTO `jawatan` VALUES (406, 'Pengarah Keselamatan Negeri');
INSERT INTO `jawatan` VALUES (407, 'Ketua Nazir Negeri Kelantan');
INSERT INTO `jawatan` VALUES (408, 'Timbalan Nazir Negeri Kelantan');
INSERT INTO `jawatan` VALUES (410, 'Pegawai Memerintah');
INSERT INTO `jawatan` VALUES (411, 'Komander AKSEM Kelantan');
INSERT INTO `jawatan` VALUES (412, 'Pegawai Perancang Bandar dan Desa');
INSERT INTO `jawatan` VALUES (413, 'Pengarah Keselamatan Negeri Kelantan');
INSERT INTO `jawatan` VALUES (415, 'Pengurus DCA');
INSERT INTO `jawatan` VALUES (416, 'Timbalan Pengurus DCA');
INSERT INTO `jawatan` VALUES (417, 'Pegawai Pemerintah');
INSERT INTO `jawatan` VALUES (418, 'Ketua Audit Sekolah');
INSERT INTO `jawatan` VALUES (419, 'Penolong Pegawai Laut');
INSERT INTO `jawatan` VALUES (420, 'Pengarah Kampus Kesihatan');
INSERT INTO `jawatan` VALUES (421, 'Rektor');
INSERT INTO `jawatan` VALUES (422, 'Pengurus Besar Negeri');
INSERT INTO `jawatan` VALUES (423, 'Naib Canselor');
INSERT INTO `jawatan` VALUES (424, 'Pengurus Cawangan');
INSERT INTO `jawatan` VALUES (425, 'Ketua Cawangan');
INSERT INTO `jawatan` VALUES (426, 'Pengarah Perniagaan Negeri');
INSERT INTO `jawatan` VALUES (427, 'Pengarah Cawangan');
INSERT INTO `jawatan` VALUES (428, 'Pengurus Besar');
INSERT INTO `jawatan` VALUES (429, 'Pengurus Besar Wilayah');
INSERT INTO `jawatan` VALUES (430, 'Pengurus Besar Wilayah Felcra Berhad Timur');
INSERT INTO `jawatan` VALUES (431, 'Ketua Pengarah');
INSERT INTO `jawatan` VALUES (432, 'Pengarah FAMA Negeri');
INSERT INTO `jawatan` VALUES (433, 'Timbalan Pengarah Operasi');
INSERT INTO `jawatan` VALUES (434, 'Pengurus RTC Kelantan');
INSERT INTO `jawatan` VALUES (437, 'Ketua Kawasan Kelantan/Terengganu');
INSERT INTO `jawatan` VALUES (438, 'Pegawai Kawal Selia Kanan');
INSERT INTO `jawatan` VALUES (439, 'Ketua (Wilayah Timur)');
INSERT INTO `jawatan` VALUES (441, 'Pengurus Perhebat Zon Timur');
INSERT INTO `jawatan` VALUES (442, 'Pengurus Kilang/Ketua Wilayah Timur Kelantan-Terengganu');
INSERT INTO `jawatan` VALUES (444, 'Ketua Negeri');
INSERT INTO `jawatan` VALUES (445, 'Pengurus Wilayah Timur');
INSERT INTO `jawatan` VALUES (446, 'Pengurus Lapangan Terbang');
INSERT INTO `jawatan` VALUES (447, 'Pengurus Negeri');
INSERT INTO `jawatan` VALUES (448, 'Pengurus Pencetakan');
INSERT INTO `jawatan` VALUES (449, 'Ketua Biro Kelantan');
INSERT INTO `jawatan` VALUES (450, 'Pengetua');
INSERT INTO `jawatan` VALUES (451, 'Setiausaha Sulit Kanan (Jawatankuasa Pentadbiran AWwam,Perancangan Ekonomi,Pelaburan dan Kewangan)');
INSERT INTO `jawatan` VALUES (452, 'Setiausaha Sulit Kanan (Jawatankuasa Pembangunan Wilayah,Tanah dan Sumber Asli)');
INSERT INTO `jawatan` VALUES (462, 'ADUN');
INSERT INTO `jawatan` VALUES (463, 'AHLI PARLIMEN NEGERI KELANTAN');
INSERT INTO `jawatan` VALUES (464, 'AHLI DEWAN NEGARA/SENATOR');
INSERT INTO `jawatan` VALUES (465, 'PENYELIA DUN');
INSERT INTO `jawatan` VALUES (466, 'PENYELIA PARLIMEN');
INSERT INTO `jawatan` VALUES (467, 'PERWAKILAN ASING');
INSERT INTO `jawatan` VALUES (468, 'S/U DUN (BADAN PERHUBUNGAN PAS NEGERI KELANTAN)');
INSERT INTO `jawatan` VALUES (469, 'S/U PKR (PEJABAT PKR NEGERI KELANTAN)');
INSERT INTO `jawatan` VALUES (470, 'S/U KERJA (BADAN PERHUBUNGAN UMNO NEGERI KELANTAN)');
INSERT INTO `jawatan` VALUES (471, 'S/U KERJA (MCA KELANTAN STATE LIAISON COMMITTEE)');
INSERT INTO `jawatan` VALUES (472, 'S/U KERJA (PARTI PROGRESIF PENDUDUK MALAYSIA)');
INSERT INTO `jawatan` VALUES (473, 'Pembantu Tadbir(Perkeranian / Operasi)');
INSERT INTO `jawatan` VALUES (474, 'Pemandu Kenderaan');
INSERT INTO `jawatan` VALUES (475, 'Pembantu Operasi');
INSERT INTO `jawatan` VALUES (476, 'Pembantu Am Pejabat');
INSERT INTO `jawatan` VALUES (477, 'Penolong Juruaudit');
INSERT INTO `jawatan` VALUES (478, 'Juruteknik Komputer');
INSERT INTO `jawatan` VALUES (479, 'Pustakawan');
INSERT INTO `jawatan` VALUES (480, 'Penolong Pustakawan');
INSERT INTO `jawatan` VALUES (481, 'Pembantu Pustakawan');
INSERT INTO `jawatan` VALUES (482, 'Pembantu Perpustakaan');
INSERT INTO `jawatan` VALUES (483, 'Kurator');
INSERT INTO `jawatan` VALUES (485, 'Pembantu Muzium');
INSERT INTO `jawatan` VALUES (486, 'Pegawai Pembangunan Masyarakat');
INSERT INTO `jawatan` VALUES (487, 'Penolong Pegawai Tadbir Kanan');
INSERT INTO `jawatan` VALUES (488, 'Pembantu Tadbir (Kewangan)');
INSERT INTO `jawatan` VALUES (489, 'Pegawai Khidmat Pelanggan');
INSERT INTO `jawatan` VALUES (490, 'Penolong Akauntan Kanan');
INSERT INTO `jawatan` VALUES (491, 'Pengarah Kebajikan Masyarakat Negeri');
INSERT INTO `jawatan` VALUES (492, 'Setiausaha Pejabat');
INSERT INTO `jawatan` VALUES (493, 'Pegawai Psikologi');
INSERT INTO `jawatan` VALUES (494, 'Penolong Pegawai Pembangunan Masyarakat');
INSERT INTO `jawatan` VALUES (495, 'Penolong Pegawai Penilaian');
INSERT INTO `jawatan` VALUES (496, 'Pembantu muzium kanan');
INSERT INTO `jawatan` VALUES (497, 'Kurator');
INSERT INTO `jawatan` VALUES (498, 'Penolong Kurator');
INSERT INTO `jawatan` VALUES (499, 'Pembantu Muzium');
INSERT INTO `jawatan` VALUES (500, 'Pengawal Keselamatan');
INSERT INTO `jawatan` VALUES (502, 'Penolong Pegawai Tanah ');
INSERT INTO `jawatan` VALUES (505, 'Timbalan Pengarah (Pendaftaran)');
INSERT INTO `jawatan` VALUES (507, 'Penolong Pegawai Tanah Kanan');
INSERT INTO `jawatan` VALUES (508, 'Ketua Penolong Pegawai Tanah Kanan');
INSERT INTO `jawatan` VALUES (509, 'Penghantar Notis');
INSERT INTO `jawatan` VALUES (510, 'Pembantu Kemahiran');
INSERT INTO `jawatan` VALUES (511, 'Penjaga jentera elektrik');
INSERT INTO `jawatan` VALUES (512, 'Pembantu Awam');
INSERT INTO `jawatan` VALUES (513, 'Kerani Hantar Tambahan');
INSERT INTO `jawatan` VALUES (514, 'Pelukis Pelan');
INSERT INTO `jawatan` VALUES (515, 'Penolong Pegawai Perancang dan Desa');
INSERT INTO `jawatan` VALUES (516, 'Penolong Pegawai Senibina');
INSERT INTO `jawatan` VALUES (519, 'Pembantu Tadbir (P/O)');

-- ----------------------------
-- Table structure for kategorituntutan
-- ----------------------------
DROP TABLE IF EXISTS `kategorituntutan`;
CREATE TABLE `kategorituntutan`  (
  `idKategori` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaKategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idKategori`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kategorituntutan
-- ----------------------------
INSERT INTO `kategorituntutan` VALUES ('01', 'Ubat');
INSERT INTO `kategorituntutan` VALUES ('02', 'Alat Ortopedik');
INSERT INTO `kategorituntutan` VALUES ('03', 'Anggota palsu');
INSERT INTO `kategorituntutan` VALUES ('04', 'Kerusi Roda');
INSERT INTO `kategorituntutan` VALUES ('05', 'Alat Bantu Pendengaran');
INSERT INTO `kategorituntutan` VALUES ('06', 'Alat Rawatan Jantung/ Alat Bantu Pernafasan/ Koklea Implan/ Colostomy Bag/ Urine Bag/ Intraocular Lens');
INSERT INTO `kategorituntutan` VALUES ('07', 'Alat-alat Lain');
INSERT INTO `kategorituntutan` VALUES ('08', 'Perkhidmatan Perubatan');
INSERT INTO `kategorituntutan` VALUES ('09', 'Rawatan Penyakit Buah Pinggang');
INSERT INTO `kategorituntutan` VALUES ('10', 'Rawatan Kemandulan');
INSERT INTO `kategorituntutan` VALUES ('11', 'Rawatan Kepakaran');
INSERT INTO `kategorituntutan` VALUES ('12', 'Rawatan Di Institut Jantung Negara Sdn. Bhd');
INSERT INTO `kategorituntutan` VALUES ('13', 'Haemodialisis');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`(191)) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('ashraff@gmail.com', '$2y$10$.AiFq6V5aPU5ZiITxd1aJeIeRJstq6rL6hZdAi5ilS5mlJ5dDW00u', '2021-09-23 05:24:43');

-- ----------------------------
-- Table structure for pembekal
-- ----------------------------
DROP TABLE IF EXISTS `pembekal`;
CREATE TABLE `pembekal`  (
  `idPembekal` int(11) NOT NULL AUTO_INCREMENT,
  `namaPembekal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamatPembekal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bandar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `poskod` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `negeri` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idPembekal`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pembekal
-- ----------------------------
INSERT INTO `pembekal` VALUES (3, 'Pusat Perubatan Universiti Malaya', '', '', '', '', '', '');
INSERT INTO `pembekal` VALUES (4, 'LOVY PHARMACY', 'DATARAN CHENG HO', '', '', 'KOTA BHARU', '16150', '');
INSERT INTO `pembekal` VALUES (5, 'Biotronik  Medical Devices (Malaysia) Sdn Bhd', '1101, Level 11, Uptown 2', '2 Jalan SS21/37, Damansara Uptown', '', 'Petaling Jaya, Selangor', '47400 ', '');
INSERT INTO `pembekal` VALUES (6, 'PHARMA ENTERPRISE', 'LOT 251.B.LORONG PAKTIH', 'JALAN RAJA PEREMPUAN ZAINAB II, KUBANG KERIAN', '', 'KOTA BHARU', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (7, 'AL-HIJRAH PHARMACY', 'LOT 8006, BANDARAYA SATELIT ISLAM', 'JALAN PONDOK PASIR TUMBUH', '', 'KOTA BHARU', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (8, 'TERAJU FARMA SDN BHD', 'LEVEL 1 NO.1, JALAN NILAM 1/7', 'SUBANG HITECH INDUSTRIAL PARK', '', 'SHAH ALAM', '40000', 'SELANGOR');
INSERT INTO `pembekal` VALUES (9, 'USM APEX', 'HOSPITAL UNIVERSITI SAINS MALAYSIA', '', '', 'KUBANG KERIAN', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (10, 'PUSAT HEMODIALISIS BERKAT SEROJA SDN BHD', 'PT 1793-1794 JALAN KWENG HITAM', '', '', 'MACHANG', '18500', 'KELANTAN');
INSERT INTO `pembekal` VALUES (11, 'FARMASI NON FORMULARI', 'HOSPITAL UNIVERSITI SAINS MALAYSIA', '', '', 'KUBANG KERIAN', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (12, 'DARUL NAIM DIALISIS SDN BHD', '6400-B, JALAN RAJA DEWA HULU 3, TELIPOT', '', '', 'KOTA BHARU', '15150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (13, 'RENAL PURE DIALYSIS SEVICE SDN BHD', 'PT5034 & PT5035,', 'KOMPLEKS PERNIAGAAN SAIDINA ALI, KOK LANAS', '', 'KOTA BHARU', '16450', 'KELANTAN');
INSERT INTO `pembekal` VALUES (14, 'HUDAZ DIALYSIS CENTRE SDN BHD', 'LOT 2635 KOTA KUBANG LABU, BANDAR BARU', 'PASIR PEKAN', '', 'WAKAF BHARU', '16250', 'KELANTAN');
INSERT INTO `pembekal` VALUES (15, 'NexGen Medical Sdn Bhd', '47-01 & 47-02, ', 'JALAN AUSTIN HEIGHT 8/8', 'TMN MT AUSTIN', ' JOHOR BAHRU', '81100', 'JOHOR');
INSERT INTO `pembekal` VALUES (16, 'LIONS CLUB KOTA BUDAYA DIALYSIS CENTRE', 'LOT 1321', 'JLAN WAKAF MEK ZAINAB', 'TAM KOPERATIF', 'KOTA BHARU', '15300', 'KELANTAN');
INSERT INTO `pembekal` VALUES (17, 'Barontrax Services & Trading', 'B-1-1, Vista Amani, ', 'Jalan Tasik Permaisuri 3,', '', 'Bandar Sri Permaisuri', '56100', 'W.P KUALA LUMPUR');
INSERT INTO `pembekal` VALUES (18, 'Rehab Mobility Equipment Sdn Bhd', '59, Lorong Haruanv5/2', '', 'Oakland Commerce Aquare', 'Seremban', '70300', 'NEGERI SEMBILAN');
INSERT INTO `pembekal` VALUES (19, 'ALPRO ALLIANCE (PAHANG) SDN BHD', 'GROUD FLOOR,', 'JALAN RAJA PEREMPUAN ZAINAB II, KUBANG KERIAN', '', 'KOTA BHARU', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (20, 'AIN MEDI SERVICES', 'PT361, KEDAI MELOR', '', '', '', '16400', 'KELANTAN');
INSERT INTO `pembekal` VALUES (21, 'MEDILIANCE (M) SDN BHD', 'HEALTHCARE SOLUTION PROVIDER', 'NO.11-2, SRI MANJA II', 'JALAN PJS 3/59, TAMAN SRI MANJA ', 'Petaling Jaya, Selangor', '46000', 'SELANGOR');
INSERT INTO `pembekal` VALUES (22, 'PRONATURE PHARMACY KELANTAN', 'PT 1558, Tingkat 1, ', 'Jalan KK/6, Kenali', 'Bandar Baru', 'KUBANG KERIAN', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (23, 'SYNERGIC EVOLUTION SDN BHD', '321, JALAN S2 B13', 'UPTOWN AVENUE BUSINESS PARK SEREMBAN 2', '', '', '70300', 'NEGERI SEMBILAN');
INSERT INTO `pembekal` VALUES (24, 'INSTITUT JANTUNG NEGARA (IJN)', '145 ', 'JALAN TUN RAZAK', '', '', '50400', 'W.P KUALA LUMPUR');
INSERT INTO `pembekal` VALUES (25, 'AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD', '540 ', 'JALAN PENGKALAN CHEPA', 'TAMAN UDA MURNI', 'KOTA BHARU', '16100', '');
INSERT INTO `pembekal` VALUES (26, 'MAMA DENT ENTERPRISE', 'K36-222C', 'JALAN BAYAM', '', '', '15200', 'KELANTAN');
INSERT INTO `pembekal` VALUES (27, 'PUSAT KELESTARIAN DIALYSIS SDN BHD', 'LOT8014', '', 'BANDAR SATELIT ISLAM PASIR PUTEH', 'KOTA BHARU', '16150', '');
INSERT INTO `pembekal` VALUES (28, 'Zuellig Pharma', 'No. 15', 'Persiaran Pasak Bumi, Seksyen U8', 'Perindustran Bukit Jelutong', 'SHAH ALAM', '40150', 'SELANGOR');
INSERT INTO `pembekal` VALUES (29, 'AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD', '537', 'JALAN PENGKALAN CHEPA', 'TAMAN UDA MURNI', 'KOTA BHARU', '16100', 'KELANTAN');
INSERT INTO `pembekal` VALUES (30, 'PUSAT HEMODIALISIS PADUKA PASIR MAS', 'PT 432 & PT 433 BANGUNAN MDPM', 'KG JIAS', '', 'PASIR MAS', '17000', 'KELANTAN');
INSERT INTO `pembekal` VALUES (31, 'Prism Plus Medical Supplies Sdn Bhd', 'PT1598, Ground & First Floor', 'Jalan K 6/2,', 'Bandar Baru Kubang Kerian', 'KOTA BHARU', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (32, 'PUSAT RAWATAN DIALISIS ISLAH', 'LOT 1308 & Lot 1309', 'Rumah Kedai, Jalan Kota Bharu', 'Kampung Wakaf Berangan', 'Pasir Puteh', '19800', 'KELANTAN');
INSERT INTO `pembekal` VALUES (33, 'ORTHOKOP BERHAD', 'LOT 1723-A,', 'JALAN RAJA PEREMPUAN ZAINAB II, KUBANG KERIAN', '', 'KUBANG KERIAN', '16150', 'KELANTAN');
INSERT INTO `pembekal` VALUES (34, 'USAINS TECH SERVICES SDN BHD', '', '', '', 'KUANG KERIAN', '16150', 'KELANTAN');

-- ----------------------------
-- Table structure for pentadbir
-- ----------------------------
DROP TABLE IF EXISTS `pentadbir`;
CREATE TABLE `pentadbir`  (
  `idPentadbir` int(100) NOT NULL AUTO_INCREMENT,
  `kad_pengenalan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'Tiada' COMMENT 'Pentadbir Sistem, Pentadbir Pencen, Pentadbir Perubatan, Pentadbir Kewangan',
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Tidak Aktif' COMMENT 'tidak aktif, aktif',
  `status_katalaluan` int(11) NOT NULL DEFAULT 0,
  `logTerakhir` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`idPentadbir`) USING BTREE,
  UNIQUE INDEX `kad_pengenalan`(`kad_pengenalan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pentadbir
-- ----------------------------
INSERT INTO `pentadbir` VALUES (43, '2', '$2y$10$79r1jENWvOGi8Ta8NKAPb.cOeJeXoryec2lWPsg1e0M/eDBXtEloa', 'Pentadbir Pencen', 'Pentadbir Pencen', 'Aktif', 1, '2019-01-30 04:58:07');
INSERT INTO `pentadbir` VALUES (44, '3', '$2y$10$79r1jENWvOGi8Ta8NKAPb.cOeJeXoryec2lWPsg1e0M/eDBXtEloa', 'Pentadbir Perubatan', 'Pentadbir Perubatan', 'Aktif', 1, '2019-01-30 04:58:34');
INSERT INTO `pentadbir` VALUES (47, '4', '$2y$10$79r1jENWvOGi8Ta8NKAPb.cOeJeXoryec2lWPsg1e0M/eDBXtEloa', 'Pentadbir Kewangan', 'Pentadbir Kewangan', 'Aktif', 1, '2019-08-26 14:17:56');
INSERT INTO `pentadbir` VALUES (48, 'superadmin', '$2y$10$79r1jENWvOGi8Ta8NKAPb.cOeJeXoryec2lWPsg1e0M/eDBXtEloa', 'Superadmin', 'Superadmin', 'Aktif', 1, '2019-11-27 11:23:28');
INSERT INTO `pentadbir` VALUES (50, 'admin', '$2y$10$cheqdO1hxEL/2jQEx0F4u.a0nY66bN0oXqi/Ub7CfTGaeoMz8ioKe', 'Pentadbir Sistem', 'Pentadbir Sistem', 'Aktif', 1, '2019-11-27 20:14:28');
INSERT INTO `pentadbir` VALUES (54, '860930295790', '$2y$10$4zTtBqOtonb/In2FtB266enh0nk7BivvhW38tSGSOODC1bTm6XM0m', 'Nurul Ashikin Binti Che Hassan', 'Pentadbir Perubatan', 'Aktif', 0, '2019-11-28 11:26:09');
INSERT INTO `pentadbir` VALUES (55, '840131035206', '$2y$10$5Sl7vawY2nT1UseANOUsF.g5egzvGCgCsxs0zmYrFlrUKq7YrN4ei', 'Nazefah Binti Nawi', 'Pentadbir Sistem', 'Tidak Aktif', 1, '2019-11-28 11:28:16');
INSERT INTO `pentadbir` VALUES (56, '820626035744', '$2y$10$JYoMtaXsLPi7/aZnOyvpB.XxJkUoJdMDLN68fPp4UhCt2f9iihr1G', 'Tg. Hafizah Binti Tg. Mohd Ariffin', 'Pentadbir Pencen', 'Tidak Aktif', 1, '2019-11-28 11:33:53');
INSERT INTO `pentadbir` VALUES (57, '840504035840', '$2y$10$d2Hi/YOkxx.EWc31OmRFBuh3Ct/KsIBhsJcjT8ju7CkuIGLfBb2vm', 'SITI SHAHIDA BINTI ARIFFIN', 'Pentadbir Sistem', 'Tidak Aktif', 1, '2019-11-28 11:35:32');
INSERT INTO `pentadbir` VALUES (58, '800903035710', '$2y$10$WuGO5cCg2IlmNegs50zghOIALcJeTHrtGMqhCsSNtJ/DIqcqM4Zk2', 'syuhaida binti mat saupi', 'Pentadbir Perubatan', 'Tidak Aktif', 1, '2019-11-28 11:35:56');
INSERT INTO `pentadbir` VALUES (59, '860630295932', '$2y$10$Of6goqxUc1C6KnT9GNQG8uO1yp4XobAo8YLUO3DG1.2EfssTG.DF6', 'ANIS NABILAH BINTI ISHA', 'Pentadbir Kewangan', 'Tidak Aktif', 0, '2019-11-28 11:36:29');
INSERT INTO `pentadbir` VALUES (60, '881224035097', '$2y$10$QD6qDL5udOEmLRrlVM/Y0OtFRTAC9pLWtWmqWf2loP11cDFQOJuUm', 'LUQMAN HAKIM BIN SHUKRI', 'Pentadbir Kewangan', 'Tidak Aktif', 1, '2019-11-28 11:42:28');
INSERT INTO `pentadbir` VALUES (61, '810105035977', '$2y$10$J1zw0FBVKMGQlFyZlAGfD.P./jpwD9FMuWyLDWqtuLXGjZb9/UZxC', 'WAN HUSSIN BIN WAN YUSOF', 'Pentadbir Kewangan', 'Tidak Aktif', 1, '2019-11-28 12:07:44');

-- ----------------------------
-- Table structure for peribadi
-- ----------------------------
DROP TABLE IF EXISTS `peribadi`;
CREATE TABLE `peribadi`  (
  `idPeribadi` int(255) NOT NULL AUTO_INCREMENT,
  `kadPengenalan` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jantina` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pesara` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bangsa` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tarikhLahir` date NULL DEFAULT NULL,
  `umur` int(100) NULL DEFAULT NULL,
  `noTelefon` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hubungan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idJawatan` int(100) NULL DEFAULT 0,
  `idGred` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idSkimPerkhidmatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idPendaftar` int(255) NULL DEFAULT NULL,
  `idJabatan` int(100) NULL DEFAULT 0,
  PRIMARY KEY (`idPeribadi`) USING BTREE,
  UNIQUE INDEX `kadPengenalan`(`kadPengenalan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 158 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of peribadi
-- ----------------------------
INSERT INTO `peribadi` VALUES (80, '570928035257', 'AB PATAH BIN GHAZAL', 'Lelaki', 'Ya', '', NULL, '1957-09-28', NULL, '', '', NULL, '', 'pesara', NULL, NULL, NULL, 54, 60);
INSERT INTO `peribadi` VALUES (81, '450826035145', 'ZAWAWI BIN ABU BAKAR', 'Lelaki', 'Ya', '', NULL, '1945-08-26', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (83, '550328035204', 'AINI BINTI KADIR', 'Perempuan', 'Ya', '', NULL, '1955-03-28', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 18);
INSERT INTO `peribadi` VALUES (84, '541220035793', 'NIK ANNUAR BIN NIK ABU BAKAR', 'Lelaki', 'Ya', '', NULL, '1954-12-20', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 58);
INSERT INTO `peribadi` VALUES (85, '461226035057', 'NIK MOHAMED BIN AWANG', 'Lelaki', 'Ya', '', NULL, '1946-11-26', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi` VALUES (88, '580127035467', 'AHMAD KAMIL BIN ABDULLAH', 'Lelaki', 'Ya', '', NULL, '1958-01-27', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (90, '400104035025', 'MUHAMMAD HASAN BIN AHMAD', 'Lelaki', 'Ya', '', NULL, '1940-01-04', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 23);
INSERT INTO `peribadi` VALUES (91, '501211035189', 'SUHAIMI BIN MAT ', 'Lelaki', 'Ya', '', NULL, '1950-12-11', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 18);
INSERT INTO `peribadi` VALUES (92, '560513035475', 'WAN JAMALUDDIN BIN WAN ABDULLAH', 'Lelaki', 'Ya', '', NULL, '1956-05-13', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (94, '510525035127', 'MAT SALLEH BIN MAT NOR', 'Lelaki', 'Ya', '', NULL, '1951-05-25', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 18);
INSERT INTO `peribadi` VALUES (95, '560523035073', 'YUSOFF BIN DAUD', 'Lelaki', 'Ya', '', NULL, '1956-05-23', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi` VALUES (96, '570415035323', 'HAJI MOHD FAUDZI BIN CHE MAMAT', 'Lelaki', 'Ya', '', NULL, '1957-04-15', NULL, '', '', NULL, '', 'pesara', 32, '54', 'N', 54, 3);
INSERT INTO `peribadi` VALUES (97, '490403035297', 'WAN ZAKARIA BIN WAN ALI', 'Lelaki', 'Ya', '', NULL, '1949-04-03', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (98, '531118035149', 'NIK ARIF BIN NIK HASSAN', 'Lelaki', 'Ya', '', NULL, '1953-12-18', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi` VALUES (99, '530318035093', 'Mohamed Ghazali Bin Mohamed', 'Lelaki', 'Ya', '', NULL, '1953-03-18', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (100, '470915035313', 'SHAARI BIN TAHIR', 'Lelaki', 'Ya', '', NULL, '1947-09-15', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 26);
INSERT INTO `peribadi` VALUES (101, '610627035054', 'NORINA BINTI HASSAN', 'Perempuan', 'Ya', '', NULL, '1961-06-27', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 12);
INSERT INTO `peribadi` VALUES (102, '541026035183', 'MOHD SALLEH BIN DAUD', 'Lelaki', 'Ya', '', NULL, '2021-01-25', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi` VALUES (104, '520308035402', 'NIK SEPIAH BINTI YAHYA', 'Perempuan', 'Ya', '', NULL, '1952-03-08', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 8);
INSERT INTO `peribadi` VALUES (105, '591109035459', 'PAUZI BIN MAT SEMAN', 'Lelaki', 'Ya', '', NULL, '1959-11-09', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 12);
INSERT INTO `peribadi` VALUES (106, '470512035132', 'KAMARIAH @ HASSNAH BT DAUD', 'Perempuan', 'Ya', '', NULL, '1947-05-12', NULL, '', '', NULL, '', 'pesara', 519, '19', 'N', 54, NULL);
INSERT INTO `peribadi` VALUES (109, '490331035051', 'MOHD NOOR BIN HAMAT', 'Lelaki', 'Ya', '', NULL, '1949-03-31', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (110, '560805035725', 'NIK KAMIL BIN NIK DAUD', 'Lelaki', 'Ya', '', NULL, '2021-02-10', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (111, '460118035223', 'ARIFFIN BIN MUSA', 'Lelaki', 'Ya', '', NULL, '1946-01-18', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (112, '560430035496', 'NAZIMAH BINTI ABDULLAH', 'Perempuan', 'Ya', '', NULL, '1956-04-30', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 23);
INSERT INTO `peribadi` VALUES (113, '590403035201', 'GHAZALI BIN YAACOB', 'Lelaki', 'Ya', '', NULL, '1959-04-03', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 26);
INSERT INTO `peribadi` VALUES (114, '590712035272', 'NISAH BINTI DAUD', 'Perempuan', 'Ya', '', NULL, '1959-07-12', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 3);
INSERT INTO `peribadi` VALUES (115, '540928035209', 'WAN MAHMUD BIN WAN OMAR', 'Lelaki', 'Ya', '', NULL, '1954-09-28', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 17);
INSERT INTO `peribadi` VALUES (117, '541104035681', 'RAMLI BIN ABDULLAH', 'Lelaki', 'Ya', '', NULL, '1954-11-04', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (119, '490617035129', 'ABDUL AZIZ @ MOHD SALLEH BIN MAT', 'Lelaki', 'Tidak', '', NULL, '1949-06-17', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (121, '580627035201', 'MOHD SAMSUDDIN BIN YUSOFF', 'Lelaki', 'Ya', '', NULL, '1958-06-27', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 23);
INSERT INTO `peribadi` VALUES (123, '440101035317', 'MAT NAWI BIN AWG CHIK', 'Lelaki', 'Ya', '', NULL, '1944-01-01', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (125, '390102035068', 'HAZIZAH BINTI MUHAMMAD -BALU', 'Perempuan', 'Tidak', '', NULL, '1939-01-02', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (126, '550527035119', 'RAHIMIN BIN ARIFFIN', 'Lelaki', 'Ya', '', NULL, '1955-05-27', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 26);
INSERT INTO `peribadi` VALUES (128, '590109035323', 'Abd Aziz Bin Ibrahim', 'Lelaki', 'Ya', '', NULL, '1959-01-09', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi` VALUES (130, '370117035097', 'Yusof bin Sulaiman', 'Lelaki', 'Ya', '', NULL, '1937-01-17', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 21);
INSERT INTO `peribadi` VALUES (132, '530901035349', 'Nik Raha @ Nik Raihan bin Nik Abd Rahman ', 'Lelaki', 'Ya', '', NULL, '1953-09-01', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi` VALUES (135, '481218035127', 'Makhtar Bin Ibrahim ', 'Lelaki', 'Ya', '', NULL, '1948-12-18', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (137, '500921035373', 'SEMAN BIN PIT', 'Lelaki', 'Ya', '', NULL, '1950-09-21', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 17);
INSERT INTO `peribadi` VALUES (139, '381208115053', 'ISMAIL BIN MOHAMED', 'Lelaki', 'Ya', '', NULL, '1938-12-08', NULL, '', '', NULL, '', 'pesara', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi` VALUES (141, '400130035272', 'TENGKU MARIAM BINTI TENGK MUDA', 'Perempuan', 'Ya', '', NULL, '1940-01-30', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 21);
INSERT INTO `peribadi` VALUES (143, '540527035267', 'SAUD BIN AWANG', 'Lelaki', 'Ya', '', NULL, '1954-05-27', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi` VALUES (145, '561208035297', 'MOHAMED YUSOFF BIN MAMAT ', 'Lelaki', 'Ya', '', NULL, '1956-12-08', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi` VALUES (146, '471121035673', 'MOHD SALLEH BIN DERAMAN', 'Lelaki', 'Ya', '', NULL, '1947-11-21', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi` VALUES (148, '501207035370', 'NIK JAH BINTI BIK MAN', 'Perempuan', 'Ya', '', NULL, '1950-12-07', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (149, '530520035257', 'MAT JUSOH BIN HAMZAH', 'Lelaki', 'Ya', '', NULL, '1953-05-20', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (151, '600906035533', 'WAN RAMLI BIN WAN ISMAIL', 'Lelaki', 'Ya', '', NULL, '1960-09-06', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (152, '490522035353', 'MAT NOR BIN DERAMAN', 'Lelaki', 'Ya', '', NULL, '1949-05-22', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 17);
INSERT INTO `peribadi` VALUES (154, '490930035061', 'MUHAMMAD BIN YAACOB', 'Lelaki', 'Ya', '', NULL, '1949-09-30', NULL, '', '', NULL, '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi` VALUES (155, '750505035153', 'MAMAT BIN MAT', 'Lelaki', 'Tidak', NULL, NULL, '1975-05-05', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0);
INSERT INTO `peribadi` VALUES (157, '930116035899', 'KAMARUL ASHRAFF', 'Lelaki', 'Tidak', NULL, NULL, '1993-01-16', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, 0);

-- ----------------------------
-- Table structure for peribadi_copy1
-- ----------------------------
DROP TABLE IF EXISTS `peribadi_copy1`;
CREATE TABLE `peribadi_copy1`  (
  `idPeribadi` int(255) NOT NULL AUTO_INCREMENT,
  `kadPengenalan` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jantina` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pesara` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bangsa` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tarikhLahir` date NULL DEFAULT NULL,
  `umur` int(100) NULL DEFAULT NULL,
  `noTelefon` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hubungan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idPesara` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idJawatan` int(100) NULL DEFAULT 0,
  `idGred` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idSkimPerkhidmatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idPendaftar` int(255) NULL DEFAULT NULL,
  `idJabatan` int(100) NULL DEFAULT 0,
  PRIMARY KEY (`idPeribadi`) USING BTREE,
  UNIQUE INDEX `kadPengenalan`(`kadPengenalan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 157 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of peribadi_copy1
-- ----------------------------
INSERT INTO `peribadi_copy1` VALUES (80, '570928035257', 'AB PATAH BIN GHAZAL', 'Lelaki', 'Ya', '', NULL, '1957-09-28', NULL, '', '', NULL, '', '', 'pesara', NULL, NULL, NULL, 54, 60);
INSERT INTO `peribadi_copy1` VALUES (81, '450826035145', 'ZAWAWI BIN ABU BAKAR', 'Lelaki', 'Ya', '', NULL, '1945-08-26', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (82, '410509035110', 'CHE HABSAH BINTI CHE ABDUL RAHMAN', 'Perempuan', 'Ya', '', NULL, '1941-05-09', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 32);
INSERT INTO `peribadi_copy1` VALUES (83, '550328035204', 'AINI BINTI KADIR', 'Perempuan', 'Ya', '', NULL, '1955-03-28', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 18);
INSERT INTO `peribadi_copy1` VALUES (84, '541220035793', 'NIK ANNUAR BIN NIK ABU BAKAR', 'Lelaki', 'Ya', '', NULL, '1954-12-20', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 58);
INSERT INTO `peribadi_copy1` VALUES (85, '461226035057', 'NIK MOHAMED BIN AWANG', 'Lelaki', 'Ya', '', NULL, '1946-11-26', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi_copy1` VALUES (88, '580127035467', 'AHMAD KAMIL BIN ABDULLAH', 'Lelaki', 'Ya', '', NULL, '1958-01-27', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (90, '400104035025', 'MUHAMMAD HASAN BIN AHMAD', 'Lelaki', 'Ya', '', NULL, '1940-01-04', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 23);
INSERT INTO `peribadi_copy1` VALUES (91, '501211035189', 'SUHAIMI BIN MAT ', 'Lelaki', 'Ya', '', NULL, '1950-12-11', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 18);
INSERT INTO `peribadi_copy1` VALUES (92, '560513035475', 'WAN JAMALUDDIN BIN WAN ABDULLAH', 'Lelaki', 'Ya', '', NULL, '1956-05-13', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (94, '510525035127', 'MAT SALLEH BIN MAT NOR', 'Lelaki', 'Ya', '', NULL, '1951-05-25', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 18);
INSERT INTO `peribadi_copy1` VALUES (95, '560523035073', 'YUSOFF BIN DAUD', 'Lelaki', 'Ya', '', NULL, '1956-05-23', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi_copy1` VALUES (96, '570415035323', 'HAJI MOHD FAUDZI BIN CHE MAMAT', 'Lelaki', 'Ya', '', NULL, '1957-04-15', NULL, '', '', NULL, '', '', 'pesara', 32, '54', 'N', 54, 3);
INSERT INTO `peribadi_copy1` VALUES (97, '490403035297', 'WAN ZAKARIA BIN WAN ALI', 'Lelaki', 'Ya', '', NULL, '1949-04-03', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (98, '531118035149', 'NIK ARIF BIN NIK HASSAN', 'Lelaki', 'Ya', '', NULL, '1953-12-18', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi_copy1` VALUES (99, '530318035093', 'Mohamed Ghazali Bin Mohamed', 'Lelaki', 'Ya', '', NULL, '1953-03-18', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (100, '470915035313', 'SHAARI BIN TAHIR', 'Lelaki', 'Ya', '', NULL, '1947-09-15', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 26);
INSERT INTO `peribadi_copy1` VALUES (101, '610627035054', 'NORINA BINTI HASSAN', 'Perempuan', 'Ya', '', NULL, '1961-06-27', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 12);
INSERT INTO `peribadi_copy1` VALUES (102, '541026035183', 'MOHD SALLEH BIN DAUD', 'Lelaki', 'Ya', '', NULL, '2021-01-25', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi_copy1` VALUES (104, '520308035402', 'NIK SEPIAH BINTI YAHYA', 'Perempuan', 'Ya', '', NULL, '1952-03-08', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 8);
INSERT INTO `peribadi_copy1` VALUES (105, '591109035459', 'PAUZI BIN MAT SEMAN', 'Lelaki', 'Ya', '', NULL, '1959-11-09', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 12);
INSERT INTO `peribadi_copy1` VALUES (106, '470512035132', 'KAMARIAH @ HASSNAH BT DAUD', 'Perempuan', 'Ya', '', NULL, '1947-05-12', NULL, '', '', NULL, '', '', 'pesara', 519, '19', 'N', 54, NULL);
INSERT INTO `peribadi_copy1` VALUES (109, '490331035051', 'MOHD NOOR BIN HAMAT', 'Lelaki', 'Ya', '', NULL, '1949-03-31', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (110, '560805035725', 'NIK KAMIL BIN NIK DAUD', 'Lelaki', 'Ya', '', NULL, '2021-02-10', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (111, '460118035223', 'ARIFFIN BIN MUSA', 'Lelaki', 'Ya', '', NULL, '1946-01-18', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (112, '560430035496', 'NAZIMAH BINTI ABDULLAH', 'Perempuan', 'Ya', '', NULL, '1956-04-30', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 23);
INSERT INTO `peribadi_copy1` VALUES (113, '590403035201', 'GHAZALI BIN YAACOB', 'Lelaki', 'Ya', '', NULL, '1959-04-03', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 26);
INSERT INTO `peribadi_copy1` VALUES (114, '590712035272', 'NISAH BINTI DAUD', 'Perempuan', 'Ya', '', NULL, '1959-07-12', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 3);
INSERT INTO `peribadi_copy1` VALUES (115, '540928035209', 'WAN MAHMUD BIN WAN OMAR', 'Lelaki', 'Ya', '', NULL, '1954-09-28', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 17);
INSERT INTO `peribadi_copy1` VALUES (117, '541104035681', 'RAMLI BIN ABDULLAH', 'Lelaki', 'Ya', '', NULL, '1954-11-04', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (119, '490617035129', 'ABDUL AZIZ @ MOHD SALLEH BIN MAT', 'Lelaki', 'Tidak', '', NULL, '1949-06-17', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (121, '580627035201', 'MOHD SAMSUDDIN BIN YUSOFF', 'Lelaki', 'Ya', '', NULL, '1958-06-27', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 23);
INSERT INTO `peribadi_copy1` VALUES (122, '751023035896', 'Nor Azira Binti Mohammad', 'Perempuan', NULL, '', NULL, '1975-02-23', NULL, '', '', NULL, '02', '80', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (123, '440101035317', 'MAT NAWI BIN AWG CHIK', 'Lelaki', 'Ya', '', NULL, '1944-01-01', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (124, '450617035018', 'CHE BIDAH BINTI JUSOH ', 'Perempuan', NULL, '', NULL, '1945-06-17', NULL, '', '', NULL, '02', '123', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (125, '390102035068', 'HAZIZAH BINTI MUHAMMAD -BALU', 'Perempuan', 'Tidak', '', NULL, '1939-01-02', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (126, '550527035119', 'RAHIMIN BIN ARIFFIN', 'Lelaki', 'Ya', '', NULL, '1955-05-27', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 26);
INSERT INTO `peribadi_copy1` VALUES (127, '610601035822', 'NOOR SILAWATI BINTI SETAPA ', 'Perempuan', NULL, '', NULL, '1961-06-01', NULL, '', '', NULL, '02', '126', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (128, '590109035323', 'Abd Aziz Bin Ibrahim', 'Lelaki', 'Ya', '', NULL, '1959-01-09', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi_copy1` VALUES (129, '660101035290', 'NORBAISAH BINTI HUSSIN', 'Perempuan', NULL, '', NULL, '1966-01-01', NULL, '', '', NULL, '02', '128', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (130, '370117035097', 'Yusof bin Sulaiman', 'Lelaki', 'Ya', '', NULL, '1937-01-17', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 21);
INSERT INTO `peribadi_copy1` VALUES (131, '411130035276', 'Noriah binti Ja\'afar ', 'Perempuan', NULL, '', NULL, '1941-11-13', NULL, '', '', NULL, '02', '130', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (132, '530901035349', 'Nik Raha @ Nik Raihan bin Nik Abd Rahman ', 'Lelaki', 'Ya', '', NULL, '1953-09-01', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi_copy1` VALUES (133, '580520085452', 'ROHANI BINTI SALEH ', 'Perempuan', NULL, '', NULL, '1958-05-20', NULL, '', '', NULL, '02', '132', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (134, '461129035426', 'SITI JAWAHIR BINTI DAUD ', 'Perempuan', NULL, '', NULL, '1946-11-29', NULL, '', '', NULL, '02', '90', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (135, '481218035127', 'Makhtar Bin Ibrahim ', 'Lelaki', 'Ya', '', NULL, '1948-12-18', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (136, '540902035366', 'Radzan Binti Mat Taib', 'Perempuan', NULL, '', NULL, '1954-09-02', NULL, '', '', NULL, '02', '135', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (137, '500921035373', 'SEMAN BIN PIT', 'Lelaki', 'Ya', '', NULL, '1950-09-21', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 17);
INSERT INTO `peribadi_copy1` VALUES (138, '560208035110', 'Radzan Binti Mat Taib', 'Perempuan', NULL, '', NULL, '1956-02-08', NULL, '', '', NULL, '02', '137', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (139, '381208115053', 'ISMAIL BIN MOHAMED', 'Lelaki', 'Ya', '', NULL, '1938-12-08', NULL, '', '', NULL, '', '', 'pesara', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (140, '500225035388', 'NORANI BINTI MAHMOOD', 'Perempuan', NULL, '', NULL, '1950-02-25', NULL, '', '', NULL, '02', '139', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (141, '400130035272', 'TENGKU MARIAM BINTI TENGK MUDA', 'Perempuan', 'Ya', '', NULL, '1940-01-30', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 21);
INSERT INTO `peribadi_copy1` VALUES (143, '540527035267', 'SAUD BIN AWANG', 'Lelaki', 'Ya', '', NULL, '1954-05-27', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi_copy1` VALUES (144, '540310035047', 'ZULKIFLI BIN MOHD NOR', 'Lelaki', 'Ya', '', NULL, '1954-03-10', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 17);
INSERT INTO `peribadi_copy1` VALUES (145, '561208035297', 'MOHAMED YUSOFF BIN MAMAT ', 'Lelaki', 'Ya', '', NULL, '1956-12-08', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 29);
INSERT INTO `peribadi_copy1` VALUES (146, '471121035673', 'MOHD SALLEH BIN DERAMAN', 'Lelaki', 'Ya', '', NULL, '1947-11-21', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 16);
INSERT INTO `peribadi_copy1` VALUES (147, '530608035016', 'Siti Meriam Binti Riffin', 'Perempuan', NULL, '', NULL, '1953-06-08', NULL, '', '', NULL, '02', '146', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (148, '501207035370', 'NIK JAH BINTI BIK MAN', 'Perempuan', 'Ya', '', NULL, '1950-12-07', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (149, '530520035257', 'MAT JUSOH BIN HAMZAH', 'Lelaki', 'Ya', '', NULL, '1953-05-20', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (151, '600906035533', 'WAN RAMLI BIN WAN ISMAIL', 'Lelaki', 'Ya', '', NULL, '1960-09-06', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (152, '490522035353', 'MAT NOR BIN DERAMAN', 'Lelaki', 'Ya', '', NULL, '1949-05-22', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 17);
INSERT INTO `peribadi_copy1` VALUES (153, '581222035486', 'RAKIAH BINTI MAHMUD', 'Perempuan', NULL, '', NULL, '1958-12-22', NULL, '', '', NULL, '02', '111', 'waris', 0, NULL, NULL, 54, 0);
INSERT INTO `peribadi_copy1` VALUES (154, '490930035061', 'MUHAMMAD BIN YAACOB', 'Lelaki', 'Ya', '', NULL, '1949-09-30', NULL, '', '', NULL, '', '', 'pesara', 0, '', '', 54, 60);
INSERT INTO `peribadi_copy1` VALUES (155, '750505035153', 'MAMAT BIN MAT', 'Lelaki', 'Tidak', NULL, NULL, '1975-05-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0);
INSERT INTO `peribadi_copy1` VALUES (156, '930116035899', 'ASHRAFF', 'Lelaki', 'Tidak', NULL, NULL, '1993-01-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, 0);

-- ----------------------------
-- Table structure for rawatan
-- ----------------------------
DROP TABLE IF EXISTS `rawatan`;
CREATE TABLE `rawatan`  (
  `idRawatan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idPeribadi` int(50) NULL DEFAULT NULL,
  `idwaris` int(50) NULL DEFAULT NULL,
  `tarikh_bil` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `jumlah_bil` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `no_bil` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `masa_wujud` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`idRawatan`) USING BTREE,
  INDEX `FK_rawatan_peribadi`(`idPeribadi`) USING BTREE,
  CONSTRAINT `rawatan_ibfk_1` FOREIGN KEY (`idPeribadi`) REFERENCES `peribadi` (`idPeribadi`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rawatan
-- ----------------------------
INSERT INTO `rawatan` VALUES (15, 80, 1, '2017-08-19', '2', '11', '2021-02-01 12:14:26');
INSERT INTO `rawatan` VALUES (16, 123, NULL, '1988-04-23', '21', '30', '2021-02-01 12:17:24');
INSERT INTO `rawatan` VALUES (17, 119, NULL, '1985-02-14', '91', '880', '2021-02-01 12:20:31');
INSERT INTO `rawatan` VALUES (18, 80, NULL, '1981-10-17', '40', '30', '2021-02-01 12:25:36');
INSERT INTO `rawatan` VALUES (19, 119, NULL, '2018-07-27', '81', '96', '2021-02-01 12:27:30');
INSERT INTO `rawatan` VALUES (20, 80, NULL, '2021-10-14', '500', '222', '2021-10-14 11:08:04');
INSERT INTO `rawatan` VALUES (22, 128, NULL, '2021-10-14', '350', '245', '2021-10-14 11:17:53');
INSERT INTO `rawatan` VALUES (23, 128, 4, '2021-10-20', '250', '223', '2021-10-14 11:19:10');

-- ----------------------------
-- Table structure for tuntutan
-- ----------------------------
DROP TABLE IF EXISTS `tuntutan`;
CREATE TABLE `tuntutan`  (
  `idTuntutan` int(11) NOT NULL AUTO_INCREMENT,
  `idpenjawatawam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idwaris` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tarikhRawatan` date NULL DEFAULT NULL,
  `tarikhKemudahanPerubatanDiperolehi` date NULL DEFAULT NULL,
  `detailTuntutan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `noRujukanKewangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlahTuntutan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlahSebenar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `tarikhTerimaPermohonan` date NULL DEFAULT NULL,
  `tarikhKelulusan` date NULL DEFAULT NULL,
  `jenisPermohonan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `catatanPermohonan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noFail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `masa_wujud` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `idHospital` int(255) NULL DEFAULT NULL,
  `idPembekal` int(255) NULL DEFAULT NULL,
  `idKategoriTuntutan` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idTuntutan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 126 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tuntutan
-- ----------------------------
INSERT INTO `tuntutan` VALUES (5, NULL, '', '2019-01-10', '2019-01-09', 'innex', '1234', '5700', '', '2019-12-28', '2019-12-28', 'Permohonan Pembelanjaan', 'Lulus', 'SUK.D.200(01) 703/2 Jld 14(1)', '2021-02-01 09:29:52', 2, 0, '02');
INSERT INTO `tuntutan` VALUES (9, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2020-12-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(2)', '2021-02-01 09:29:52', 3, 3, '01');
INSERT INTO `tuntutan` VALUES (12, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(3)', '2021-02-01 09:29:52', 3, 3, '02');
INSERT INTO `tuntutan` VALUES (13, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(4)', '2021-02-01 09:29:52', 3, 3, '05');
INSERT INTO `tuntutan` VALUES (14, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2019-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(5)', '2021-02-01 09:29:52', 3, 3, '08');
INSERT INTO `tuntutan` VALUES (15, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(7)', '2021-02-01 09:29:52', 3, 3, '02');
INSERT INTO `tuntutan` VALUES (16, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(9)', '2021-02-01 09:29:52', 3, 3, '03');
INSERT INTO `tuntutan` VALUES (20, NULL, '', '2019-12-16', '2019-11-06', 'T.KETOSTERIL', 'SUK.D.200', '350.00', '', '2019-11-24', '2019-12-03', 'Permohonan Pembelanjaan', '', 'SUK.D.200(06)703/2 JLD 19 (50)', '2021-02-01 09:29:52', 5, 4, '01');
INSERT INTO `tuntutan` VALUES (30, NULL, '', '1995-02-27', '1970-02-11', 'Debitis commodo perf', 'Non aliquid eius nec', 'Voluptas aliquip ame', 'Quia enim quis at eu', '2001-12-07', '1989-05-19', 'Pembiayaan Rawatan', 'Dolor et consequatur', 'Asperiores molestias', '2021-02-01 12:25:05', 3, 4, '02');
INSERT INTO `tuntutan` VALUES (31, NULL, '', '1987-11-27', '1980-11-07', 'Aut Nam vitae velit', 'Praesentium iste et ', 'Velit suscipit cons', 'Earum voluptas et de', '1990-01-03', '2006-06-07', 'Tuntutan Bayaran Balik', 'Voluptas sit molest', 'Omnis rem quaerat as', '2021-02-01 12:26:35', 2, 3, '09');
INSERT INTO `tuntutan` VALUES (34, '83', '', '2020-12-05', '2020-12-05', 'BEVACIZUMAB 400MG INJ (2VIAL) DAN 100MG INJ (2VIAL) (AVASTIN INJ)', 'SUK.D.200 (06) 703/2 JLD.24(37)', '16,962.00', '16,962.00', '2020-12-07', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 11:31:15', 6, 8, '01');
INSERT INTO `tuntutan` VALUES (35, '84', '', '2020-09-17', NULL, 'PAZOPANIB 200MG TABLET (VOTRIET)-GLAXO DAN PAZOPANIB 400MG TAB (VOTRIENT FILM COATED 400MG)-GLAXO', 'SUK.D.200 (06) 703/2 JLD.24(41)', '40,780.00 utk 2 ubat', '20,196.00', '2020-10-27', '2021-01-04', 'Permohonan Pembelanjaan', 'LAMBAT ANGKAT PERMOHONAN DISEBABKAN PERMOHONAN TIDAK LENGKAP DENGAN MENGEMUKAKAN SEBUTHARGA BAGI TEMPOH 6 BULAN BERSAMAAN 8 UNIT UBAT. PEJ SUK HANYA MELULUSKAN UBAT BAGI TEMPOH 3 BULAN BERSAMAAN 4 UNIT UBAT SAHAJA', '', '2021-03-29 11:44:30', 7, 8, '01');
INSERT INTO `tuntutan` VALUES (36, '84', '', '2020-09-17', NULL, 'PAZOPANIB 200MG TABLET (VOTRIET)-GLAXO DAN PAZOPANIB 400MG TAB (VOTRIENT FILM COATED 400MG)-GLAXO', 'SUK.D.200 (06) 703/2 JLD.24(41)', '40,780.00 utk 2 ubat', '20,196.00', '2020-10-27', '2021-01-04', 'Permohonan Pembelanjaan', 'LAMBAT ANGKAT PERMOHONAN DISEBABKAN PERMOHONAN TIDAK LENGKAP DENGAN MENGEMUKAKAN SEBUTHARGA BAGI TEMPOH 6 BULAN BERSAMAAN 8 UNIT UBAT. PEJ SUK HANYA MELULUSKAN UBAT BAGI TEMPOH 3 BULAN BERSAMAAN 4 UNIT UBAT SAHAJA', '', '2021-03-29 11:46:16', 7, 8, '01');
INSERT INTO `tuntutan` VALUES (37, '85', '', '2020-11-17', NULL, 'TAB KETOSTERIL X 100\'S\' ', 'SUK.D.200 (06) 703/2 JLD.24(28)', '1,350.00', '1,350.00', '2020-12-09', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 11:55:34', 7, 7, '01');
INSERT INTO `tuntutan` VALUES (38, NULL, '', '2020-08-09', NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(39)', '790.00', '790.00', '2020-12-09', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 12:02:50', 6, 6, '06');
INSERT INTO `tuntutan` VALUES (39, NULL, '', '2020-08-19', '2020-08-19', 'MSM Dan RX Mini / RX TREK', 'SUK.D.200 (06) 703/2 JLD.24(37)', '4,104.00', '4,104.00', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 15:16:07', 7, 9, '06');
INSERT INTO `tuntutan` VALUES (40, '88', '', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(47)', '950.00', '950.00', '2021-12-14', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 15:22:45', 8, 6, '06');
INSERT INTO `tuntutan` VALUES (41, NULL, '', '2020-12-02', NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(46)', '3,920.00', '3,920.00', '2020-12-20', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 15:30:50', 7, 10, '13');
INSERT INTO `tuntutan` VALUES (42, '90', '', '2020-12-02', NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(45)', '3,920.00', '3,920.00', '2020-12-15', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 15:52:13', 7, 10, '13');
INSERT INTO `tuntutan` VALUES (43, '91', '', '2020-11-08', '2020-11-08', 'T.ENRESTO 200MG BD DAN T.CRESTOR 20MG ON', 'SUK.D.200 (06) 703/2 JLD.24(42)', '1,994.60', '1,994.60', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 16:00:56', 7, 11, '01');
INSERT INTO `tuntutan` VALUES (44, '92', '', '2020-12-09', NULL, 'HEMODIALISIS DAN SUNTIKAN IV COSMOFER', 'SUK.D.200 (06) 703/2 JLD.24(52)', '735.00', '735.00', NULL, '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 16:15:46', 7, 12, '13');
INSERT INTO `tuntutan` VALUES (45, '92', '', '2020-12-09', NULL, 'HEMODIALISIS DAN SUNTIKAN IV COSMOFER', 'SUK.D.200 (06) 703/2 JLD.24(52)', '735.00', '735.00', '2021-01-05', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 16:15:56', 7, 12, '13');
INSERT INTO `tuntutan` VALUES (46, NULL, '', '2020-11-24', NULL, 'HEMODIALISIS DAN SUNTIKAN EPO', 'SUK.D.200 (06) 703/2 JLD.24(50)', '3,920.00', '3,920.00', '2020-12-23', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 16:25:56', 6, 13, '13');
INSERT INTO `tuntutan` VALUES (47, '94', '', '2020-11-05', '2020-11-05', 'ROSUVASTATIN 200MG TAB (CRESTOR)', 'SUK.D.200 (06) 703/2 JLD.24(51)', '572.00', '572.00', '2020-12-17', '2021-01-05', '', '', '', '2021-03-30 15:29:52', 7, 11, '01');
INSERT INTO `tuntutan` VALUES (48, '95', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(43)', '3,920.00', '3,920.00', '2020-12-14', '2021-01-05', 'Permohonan Pembelanjaan', 'SAMBUNG DIALISIS BAGI BULAN JAN 2021 HINGGA MAC 2021', '', '2021-03-30 15:45:30', 6, 14, '13');
INSERT INTO `tuntutan` VALUES (49, '96', '', NULL, NULL, 'CRESPINE GEL 2 UNIT', 'SUK.D.200 (06) 703/2 JLD.24(48)', '3,000.00', '3,000.00', '2020-12-14', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:10:02', 7, 15, '01');
INSERT INTO `tuntutan` VALUES (50, '97', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPOETIN-IV MIRCERA 150MCG', 'SUK.D.200 (06) 703/2 JLD.24(53)', '4,200.00 HINGGA 4,400.00', '4,200.00 HINGGA 4,400.00', '2020-12-21', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:17:28', 6, 16, '13');
INSERT INTO `tuntutan` VALUES (51, '97', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPOETIN-IV MIRCERA 150MCG', 'SUK.D.200 (06) 703/2 JLD.24(53)', '4,200.00 HINGGA 4,400.00', '4,200.00 HINGGA 4,400.00', '2020-12-21', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:26:32', 6, 16, '13');
INSERT INTO `tuntutan` VALUES (52, '98', '', NULL, NULL, 'PROMUS PRIMIER STENT (ALL SIZES) -2UNIT DAN EMERGE BALLOON (ALL SIZES)', 'SUK.D.200 (06) 703/2 JLD.24(01)', '9,936.00', '9,936.00', '2020-12-23', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:32:22', 5, 9, '06');
INSERT INTO `tuntutan` VALUES (53, '98', '', NULL, NULL, 'PROMUS PRIMIER STENT (ALL SIZES) -2UNIT DAN EMERGE BALLOON (ALL SIZES)', 'SUK.D.200 (06) 703/2 JLD.24(01)', '9,936.00', '9,936.00', '2020-12-23', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:40:32', 5, 9, '06');
INSERT INTO `tuntutan` VALUES (54, '99', '', NULL, NULL, 'Zenius Spinal Fixation System ', 'SUK.D.200 (06) 703/2 JLD.24(4)', '16,500.00', '16,500.00', '2020-12-30', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 16:06:31', 6, 17, '07');
INSERT INTO `tuntutan` VALUES (55, '100', '', '2020-12-03', '2020-12-03', 'sacubitril / varsartan 100mg', 'SUK.D.200 (06) 703/2 JLD.24(5)', '1,008.00', '1,008.00', '2020-12-28', '2021-01-17', 'Tuntutan Bayaran Balik', '', '', '2021-04-07 16:12:38', 5, 9, '01');
INSERT INTO `tuntutan` VALUES (56, '101', '', NULL, NULL, 'electric wheel chair', 'SUK.D.200 (06) 703/2 JLD.24(6)', '6,150.00', '6,150.00', '2020-12-28', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 16:18:15', 7, 18, '04');
INSERT INTO `tuntutan` VALUES (57, '95', '', NULL, NULL, 'SUNTIKAN IV VENOFER', 'SUK.D.200 (06) 703/2 JLD.24(3)', '370.00', '370.00', '2020-12-30', '2021-01-17', 'Tuntutan Bayaran Balik', '', '', '2021-04-08 08:45:30', 6, 14, '13');
INSERT INTO `tuntutan` VALUES (58, '104', '', '2021-01-02', '2021-01-02', 'BMATE STANDARD WEELCHAIR CA902 BLACK PVC 16KG + ALPRO MEMBERSHIP PACKAGE DAN ASH BRACE 5x1', 'SUK.D.200 (06) 703/2 JLD.24(10)', '829.80', '829.80', '2021-01-10', '2021-01-25', 'Tuntutan Bayaran Balik', '', '', '2021-04-08 09:11:30', 6, 19, '04');
INSERT INTO `tuntutan` VALUES (59, '98', '', NULL, NULL, 'T. EMPAGLIFLOZIN', 'SUK.D.200 (06) 703/2 JLD.24(12)', '357.60', '357.60', '2021-01-11', '2021-01-25', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN JAN 2021 HINGGA MC 2021', '', '2021-04-08 09:15:58', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (60, '105', '', NULL, NULL, 'CORONARY ANGIOGRAM', 'SUK.D.200 (06) 703/2 JLD.24(12)', '9,600.00', '9,600.00', '2021-01-14', '2021-02-01', 'Permohonan Pembelanjaan', 'PROMUS PRIMIER STENT+BALLOON (1SET) DAN SYNERGY STENT + EMERGE BALLOON (1SET)', '', '2021-04-08 09:28:05', 5, 21, '06');
INSERT INTO `tuntutan` VALUES (61, '106', '', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(13)', '808.00', '808.00', '2021-01-13', '2021-02-01', 'Permohonan Pembelanjaan', '', '', '2021-04-08 12:25:18', 5, 22, '06');
INSERT INTO `tuntutan` VALUES (62, NULL, '', NULL, NULL, 'POSTERIOR INSTRUMENTATION', 'SUK.D.200 (06) 703/2 JLD.24(16)', '9,800.00', '9,800.00', '2021-01-19', '2021-02-07', 'Permohonan Pembelanjaan', 'POLYAXIAL GUIDED PEDICLE SCREW + SET SCREW(10UNIT), ROD 6.0MM PRECUT,<=200MM (2UNIT) DAN ROD LINK (1UNIT) ', '', '2021-04-08 14:43:57', 5, 23, '07');
INSERT INTO `tuntutan` VALUES (63, NULL, '', '2020-12-21', NULL, 'yasargii ti perm std clip cvd 8.3mm ref:ft 752 t dan 26040 becker edms ii kit', 'SUK.D.200 (06) 703/2 JLD.24(14)', '1,726.90', '1,726.90', '2021-01-14', '2021-02-01', '', '', '', '2021-04-08 14:49:35', 7, 9, '11');
INSERT INTO `tuntutan` VALUES (64, '109', '', NULL, NULL, 'ELIGARD 22.5 MG/VIAL EVERY 3 MONTHS (2 VIALS)', 'SUK.D.200 (06) 703/2 JLD.24(16)', '2,160.00', '2,160.00', '2021-01-19', '0021-02-07', 'Permohonan Pembelanjaan', '', '', '2021-04-08 14:55:11', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (65, '110', '', NULL, NULL, 'PRESCRIPTION SLIP', 'SUK.D.200 (06) 703/2 JLD.24(19)', 'HARGA UBAT AKAN DIKEMUKAKAN BERSAMA BIL UBAT BERKENAAN', 'HARGA UBAT AKAN DIKEMUKAKAN BERSAMA BIL UBAT BERKENAAN', '2021-02-10', '2021-02-10', 'Permohonan Pembelanjaan', '', '', '2021-04-08 15:04:14', 9, 24, '01');
INSERT INTO `tuntutan` VALUES (66, '111', '', NULL, NULL, 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(15)', '1,110.00', '1,110.00 (370 x 3 )', '2021-01-19', '2021-02-09', 'Permohonan Pembelanjaan', 'KELULUSAN UNTUK BLN JAN 2021 HINGGA MAC 2021', '', '2021-04-11 09:02:10', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (67, '94', '', NULL, NULL, 'T.ROSUVASTATIN 20MG ON', 'SUK.D.200 (06) 703/2 JLD.24(20)', '585.00', '585.00', '2021-01-24', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 10:48:34', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (68, '112', '', NULL, NULL, 'APIXABAN 5MG BD (ELIQUIS)', 'SUK.D.200 (06) 703/2 JLD.24(21)', '865.00', '865.00', '2021-01-21', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-04-11 10:54:54', 5, 11, '01');
INSERT INTO `tuntutan` VALUES (69, '113', '', '2021-01-05', '2021-01-05', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(22)', '871.55', '871.55', '2021-01-28', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-04-11 10:59:28', 5, 9, '06');
INSERT INTO `tuntutan` VALUES (70, '114', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (BINOCRIT) INJECTION 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(23)', '2,080.00', '2.080.00', '2021-02-03', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 11:19:37', 6, 25, '13');
INSERT INTO `tuntutan` VALUES (71, '114', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (BINOCRIT) INJECTION 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(23)', '2,080.00', '2.080.00', '2021-02-03', '2021-02-22', 'Permohonan Pembelanjaan', 'PESAKIT TELAH MENINGGAL DUNIA PADA FEBRUARI 2021', '', '2021-04-11 11:20:26', 6, 25, '13');
INSERT INTO `tuntutan` VALUES (72, '115', '', NULL, NULL, 'OPN3 BTE PP', 'SUK.D.200 (06) 703/2 JLD.24(24)', '7,000.00', '7,000.00 (3,500 X 2)', '2021-01-27', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 11:35:04', 5, 26, '05');
INSERT INTO `tuntutan` VALUES (76, NULL, '', NULL, NULL, 'T.APIXABAN 2.5MG BD', 'SUK.D.200 (06) 703/2 JLD.24(26)', 'RM1,110.00', '1,110.00', '2021-02-22', '2021-02-22', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BLN FEB 2021 HINGGA APRIL 2021', '', '2021-04-11 12:04:01', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (77, '117', '', NULL, NULL, 'INTRA VITREAL RANIBIZUMAB', 'SUK.D.200 (06) 703/2 JLD.24(27)', '3,750.00', '3,750.00', '2021-02-03', '2021-02-23', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BULAN FEB 2021 HINGGA APRIL 2021', '', '2021-04-11 12:10:55', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (78, NULL, '', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800.00', '800.00', '2021-02-02', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 12:14:20', 5, 6, '06');
INSERT INTO `tuntutan` VALUES (79, '119', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTROPOETIN (MIRCERA 150MCG)', 'SUK.D.200 (06) 703/2 JLD.24(29)', '4,200.00', '4,200.00', '2021-02-10', NULL, 'Permohonan Pembelanjaan', 'KELULUSAN UTK BLN JAN 2021 HINGGA MAC 2021', NULL, '2021-04-11 12:25:22', 6, 27, '13');
INSERT INTO `tuntutan` VALUES (80, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTROPOETIN (MIRCERA 150MCG)', 'SUK.D.200 (06) 703/2 JLD.24(30)', '4,200.00', '4,200.00', '2021-02-10', '2021-02-22', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BL JAN 2021 HINGGA MAC 2021', '', '2021-04-11 12:31:03', 6, 27, '13');
INSERT INTO `tuntutan` VALUES (81, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(31)', '4,680.00', '4,680.00', '2021-02-04', '2021-02-23', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD DARULNAIM DIALISIS SDN BHD KE  AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD BERMULA BLN APRIL 2021 HINGGA JUN 2021', '', '2021-04-11 12:49:06', 6, 25, '13');
INSERT INTO `tuntutan` VALUES (82, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(31)', '4,680.00', '4,680.00', '2021-02-04', '2021-02-23', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD DARULNAIM DIALISIS SDN BHD KE  AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD BERMULA BLN APRIL 2021 HINGGA JUN 2021', '', '2021-04-11 13:25:23', 6, 25, '13');
INSERT INTO `tuntutan` VALUES (83, '121', '', NULL, NULL, 'menyewa mesin baxter PD Automated Home Choice Claria dengan Platform Kesambungan Sharesource', 'SUK.D.200 (06) 703/2 JLD.24(32)', '12780', '12780', '2021-02-08', '2021-01-23', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BULAN APRIL 2021 HINGGA JUN 2021', '', '2021-04-26 10:49:37', 5, 28, '13');
INSERT INTO `tuntutan` VALUES (84, '123', '', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800', '800', '2021-02-02', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 11:24:36', 6, 6, '06');
INSERT INTO `tuntutan` VALUES (85, '125', '', NULL, NULL, 'POSTERIOR INSTRUMENTATION', 'SUK.D.200 (06) 703/2 JLD.24(16)', '9800', '9800', '2021-01-19', '2021-02-07', 'Permohonan Pembelanjaan', '', '', '2021-04-26 11:53:35', 7, 23, '02');
INSERT INTO `tuntutan` VALUES (86, '126', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPO', 'SUK.D.200 (06) 703/2 JLD.24(50)', '3920', '3920', '2020-12-21', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-04-26 12:01:22', 6, 13, '13');
INSERT INTO `tuntutan` VALUES (87, '128', '', '2020-12-21', '2020-12-21', 'yasargii ti perm std clip cvd 8.3mm ref:ft 752 t dan 26040 becker edms ii kit', 'SUK.D.200 (06) 703/2 JLD.24(14)', '1726', '1726', '2021-01-14', '2021-02-01', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 12:11:13', 7, 9, '07');
INSERT INTO `tuntutan` VALUES (88, '130', '', NULL, NULL, 'T.APIXABAN 2.5MG BD', 'SUK.D.200 (06) 703/2 JLD.24(26)', '1110', '1110', '2021-01-27', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-26 12:19:55', 7, 20, '01');
INSERT INTO `tuntutan` VALUES (89, '132', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(7)', '3920', '3920', '2021-01-10', '2021-01-25', 'Permohonan Pembelanjaan', 'HARGA BERKENAAN UTK SEBULAN. KELULUSAN BG TEMPOH 3 BLN MULAI JAN 2021 HINGGA MAC 2021', '', '2021-04-26 12:28:53', 6, 12, '13');
INSERT INTO `tuntutan` VALUES (90, '90', '7', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(37)', '3920', '3920', '2020-12-15', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-04-26 12:37:52', 6, 10, '13');
INSERT INTO `tuntutan` VALUES (91, '135', '', '2020-08-19', '2020-08-19', 'DRUG ELUTING STENT (MSM DAN RX MINI TREK/RX TREK', 'SUK.D.200 (06) 703/2 JLD.24(37)', '4101', '4101', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 13:00:37', 7, 9, '06');
INSERT INTO `tuntutan` VALUES (92, '137', '', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(39)', '790', '790', '2020-12-09', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 13:18:54', 6, 0, '06');
INSERT INTO `tuntutan` VALUES (93, '80', '1', NULL, NULL, 'conventional ablation package-SVT', 'SUK.D.200 (06) 703/2 JLD.24(136)', '8550', '8550', NULL, '2020-12-17', 'Permohonan Pembelanjaan', 'PEMBATALAN PERMOHONAN PERUBATAN DISEBABKAN PENDEMIK COVID 19', '', '2021-05-03 08:57:55', 6, 5, '07');
INSERT INTO `tuntutan` VALUES (94, '137', '9', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(39)', '790', '790', '2020-12-19', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-05-03 09:02:34', 6, 0, '06');
INSERT INTO `tuntutan` VALUES (95, '135', '8', '2020-08-19', '2020-08-19', 'DRUG ELUTING STENT (MSM DAN RX MINI TREK/RX TREK', 'SUK.D.200 (06) 703/2 JLD.24(37)', '4104', '4104', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-05-03 09:06:39', 7, 9, '06');
INSERT INTO `tuntutan` VALUES (96, '126', '3', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPO', 'SUK.D.200 (06) 703/2 JLD.24(50)', '3920', '3920', '2020-12-21', '2021-01-05', 'Permohonan Pembelanjaan', 'KELULUSAN BAGI BULAN DISEMBER 2020 SHJ', '', '2021-05-03 09:10:09', 6, 0, '13');
INSERT INTO `tuntutan` VALUES (97, '132', '6', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(7)', '3920', '3920', '2021-01-10', '2021-01-25', 'Permohonan Pembelanjaan', 'PENYAMBUNGAN UBAT BAGI TEMPOH JANUARI 2021 HINGGA MAC 2021', '', '2021-05-03 09:30:10', 6, 12, '13');
INSERT INTO `tuntutan` VALUES (99, '128', '4', '2020-12-21', '2020-12-21', 'yasargii ti perm std clip cvd 8.3mm ref:ft 752 t dan 26040 becker edms ii kit', 'SUK.D.200 (06) 703/2 JLD.24(14)', '1726.90', '1726.90', '2021-01-14', '2021-02-01', 'Pembiayaan Rawatan', NULL, NULL, '2021-05-03 09:41:03', 5, 9, '07');
INSERT INTO `tuntutan` VALUES (100, '130', '5', NULL, NULL, 'TAB APIXABAN 2.5MG', 'SUK.D.200 (06) 703/2 JLD.24(26)', '1110', '1110', '2021-01-27', '2021-02-22', 'Permohonan Pembelanjaan', 'KELULUSAN UBAT BAGI TEMPOH FEBRUARI 2021 HINGGA aPRIL 2021', '', '2021-05-03 09:52:00', 7, 20, '01');
INSERT INTO `tuntutan` VALUES (101, '123', '2', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800', '800', NULL, NULL, '', '', '', '2021-05-03 09:56:11', 6, 6, '06');
INSERT INTO `tuntutan` VALUES (102, '123', '2', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800', '800', '2021-02-02', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-05-03 09:56:37', 6, 6, '06');
INSERT INTO `tuntutan` VALUES (103, '139', '10', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (MIRCERA 150MCG)', 'SUK.D.200 (06) 703/2 JLD.24(30)', '4200', '4200', '2021-02-10', '2021-02-22', 'Permohonan Pembelanjaan', 'SAMBUNG DIALISIS BAGI BULAN JAN 2021 HINGGA MAC 2021', '', '2021-05-03 10:02:50', 6, 27, '13');
INSERT INTO `tuntutan` VALUES (104, '132', '6', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (BINOCRIT) INJECTION 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(31)', '5040', '5040', '2021-02-04', '2021-02-23', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD DARULNAIM DIALISIS SDN BHD KE  AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD BERMULA BLN APRIL 2021 HINGGA JUN 2021', '', '2021-05-03 10:08:30', 6, 29, '13');
INSERT INTO `tuntutan` VALUES (105, '141', '', '2021-10-26', NULL, 'UNCEMENTED BIPOLAR HEMIARTHROPLASTY', 'SUK.D.200 (06) 703/2 JLD.24(25)', '6000', '6000', '2020-01-27', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-05-03 10:58:24', 10, 28, '07');
INSERT INTO `tuntutan` VALUES (106, '143', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPOETIN MIRCERA ', 'SUK.D.200 (06) 703/2 JLD.24(33)', '4400', '4400', '2021-02-09', '2021-03-09', 'Permohonan Pembelanjaan', 'SAMBUNG DIALISIS BAGI BULAN JAN 2021 HINGGA MAC 2021', '', '2021-05-03 11:12:50', 6, 30, '13');
INSERT INTO `tuntutan` VALUES (108, '145', '', NULL, NULL, 'Aluminium Detachable Armrest and Footrest', 'SUK.D.200 (06) 703/2 JLD.24(38)', '995', '995', '2021-02-07', '2021-03-10', 'Permohonan Pembelanjaan', '', '', '2021-05-03 11:40:48', 6, 31, '04');
INSERT INTO `tuntutan` VALUES (109, '145', '', NULL, NULL, 'Aluminium Detachable Armrest and Footrest', 'SUK.D.200 (06) 703/2 JLD.24(38)', '995', '995', '2021-02-07', '2021-03-10', 'Permohonan Pembelanjaan', '', '', '2021-05-03 11:40:54', 6, 31, '04');
INSERT INTO `tuntutan` VALUES (110, '146', '11', NULL, NULL, 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(42)', '1110', '1110', '2021-03-01', '2021-03-18', 'Permohonan Pembelanjaan', 'KELULUSAN UBAT BAGI TEMPOH MAC 2021 HINGGA MEI 2021', '', '2021-05-03 11:48:26', 7, 20, '01');
INSERT INTO `tuntutan` VALUES (111, '98', '', '2020-11-24', NULL, 'CORONARY ANGIOPLASTY', 'SUK.D.200 (06) 703/2 JLD.24(36)', '9600', '9600', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'KELULUSAN KPD 3 SYARIKAT PEMBEKAL ', '', '2021-05-18 08:33:28', 5, 21, '06');
INSERT INTO `tuntutan` VALUES (112, '90', '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(37)', '5040', '5040', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD PUSAT HAEMODIALISIS BERKAT SEROJA SDN BHD KE PUSAT RAWATAN DIALISIS ISLAH BERMULA BLN 25 JAN 2021 HINGGA 31 MAC 2021', '', '2021-05-18 08:44:49', 6, 32, '13');
INSERT INTO `tuntutan` VALUES (113, '90', '7', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(37)', '5040', '5040', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD PUSAT HAEMODIALISIS BERKAT SEROJA SDN BHD KE PUSAT RAWATAN DIALISIS ISLAH BERMULA BLN 25 JAN 2021 HINGGA 31 MAC 2021', '', '2021-05-18 08:46:59', 6, 32, '13');
INSERT INTO `tuntutan` VALUES (114, '148', '', NULL, NULL, 'CRESPINE GEL 2ML INJ', 'SUK.D.200 (06) 703/2 JLD.24(39)', '2600', '2600', '2021-02-15', '2021-03-10', 'Permohonan Pembelanjaan', '', '', '2021-05-18 09:13:50', 5, 33, '02');
INSERT INTO `tuntutan` VALUES (115, '149', '', NULL, '2021-01-06', 'DEPOSIT FISTULA', 'SUK.D.200 (06) 703/2 JLD.24(18)', '2,500.00', '2,500.00', '2021-01-26', '2021-02-09', 'Tuntutan Bayaran Balik', 'TUNTUTAN BAYARAN BALIK', '', '2021-08-29 13:40:48', 11, 34, '07');
INSERT INTO `tuntutan` VALUES (116, '110', '', '2021-06-11', '2021-06-11', 'SP Metoprol 100mg, SP Felodipine er 5mg, SP atorvastatin 10mg, ND paracetamol 500mg, ND Celecoxib 200cap dan rivaroxaban 20mg', 'SUK.D.200 (06) 703/2 JLD.24(19)', '0', '0', '2021-01-26', '2021-02-10', 'Pembiayaan Rawatan', 'SAMBUNG UBAT BAGI BULAN FEB 2021 HINGGA APRIL 2021', '', '2021-08-29 13:47:25', 9, 24, '01');
INSERT INTO `tuntutan` VALUES (117, '112', '', '2021-01-19', '2021-01-19', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(21)', '865', '865', '2021-01-21', '2021-02-22', 'Tuntutan Bayaran Balik', 'ubat apixaban 5mg bagi 3 unit', '', '2021-08-30 09:03:18', 7, 11, '01');
INSERT INTO `tuntutan` VALUES (118, '98', '', '2021-11-24', '2021-11-24', 'PROSEDUR ANGIOPLSTY', 'SUK.D.200 (06) 703/2 JLD.24(36)', '9,600.00', '9,600.00', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'KELULUSAN BAGI 3 SYARIKAT PEMBEKAL MEDILIANCE (M) SDN BHD, DCH AURGA (M) SDN BHD DAN MEDTRONIC (M) SDN BHD', '', '2021-08-30 11:06:01', 5, 21, '06');
INSERT INTO `tuntutan` VALUES (119, '98', '', '2021-11-24', '2021-11-24', 'PROSEDUR ANGIOPLSTY', 'SUK.D.200 (06) 703/2 JLD.24(36)', '9,600.00', '9,600.00', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'KELULUSAN BAGI 3 SYARIKAT PEMBEKAL MEDILIANCE (M) SDN BHD, DCH AURGA (M) SDN BHD DAN MEDTRONIC (M) SDN BHD', '', '2021-08-30 11:12:02', 5, 21, '06');
INSERT INTO `tuntutan` VALUES (120, '151', '', '2021-02-02', '2021-03-15', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(40)', '1110', '1110', '2021-02-09', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-01 14:58:57', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (121, '152', '', '2020-12-07', '2021-03-15', 'ULTIBRO BREEZHALER 110/50 ', 'SUK.D.200 (06) 703/2 JLD.24(41)', '795', '795', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 09:17:25', 7, 20, '01');
INSERT INTO `tuntutan` VALUES (122, '152', '', '2020-12-07', '2021-03-15', 'ULTIBRO BREEZHALER 110/50 ', 'SUK.D.200 (06) 703/2 JLD.24(41)', '795', '795', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 09:39:18', 7, 20, '01');
INSERT INTO `tuntutan` VALUES (123, '152', '', '2020-12-07', '2021-03-15', 'ULTIBRO BREEZHALER 110/50 ', 'SUK.D.200 (06) 703/2 JLD.24(41)', '795', '795', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 09:58:03', 7, 20, '01');
INSERT INTO `tuntutan` VALUES (124, '111', '12', '2021-02-15', '2021-03-15', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(43)', '1110', '1110', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 10:43:45', 5, 20, '01');
INSERT INTO `tuntutan` VALUES (125, '154', '', '0021-01-04', '2021-01-04', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(44)', '790', '790', NULL, '2021-03-16', 'Tuntutan Bayaran Balik', '', '', '2021-09-02 10:58:47', 6, 6, '06');

-- ----------------------------
-- Table structure for tuntutan1
-- ----------------------------
DROP TABLE IF EXISTS `tuntutan1`;
CREATE TABLE `tuntutan1`  (
  `idTuntutan` int(11) NOT NULL AUTO_INCREMENT,
  `idPesakit` int(255) NOT NULL,
  `idpenjawatawam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idwaris` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tarikhRawatan` date NULL DEFAULT NULL,
  `tarikhKemudahanPerubatanDiperolehi` date NULL DEFAULT NULL,
  `detailTuntutan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `noRujukanKewangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlahTuntutan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlahSebenar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `tarikhTerimaPermohonan` date NULL DEFAULT NULL,
  `tarikhKelulusan` date NULL DEFAULT NULL,
  `jenisPermohonan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `catatanPermohonan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noFail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `masa_wujud` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `idHospital` int(255) NULL DEFAULT NULL,
  `idPembekal` int(255) NULL DEFAULT NULL,
  `idKategoriTuntutan` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`idTuntutan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 129 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tuntutan1
-- ----------------------------
INSERT INTO `tuntutan1` VALUES (5, 37, NULL, '', '2019-01-10', '2019-01-09', 'innex', '1234', '5700', '', '2019-12-28', '2019-12-28', 'Permohonan Pembelanjaan', 'Lulus', 'SUK.D.200(01) 703/2 Jld 14(1)', '2021-02-01 09:29:52', 2, 0, '02');
INSERT INTO `tuntutan1` VALUES (9, 46, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2020-12-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(2)', '2021-02-01 09:29:52', 3, 3, '01');
INSERT INTO `tuntutan1` VALUES (12, 35, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(3)', '2021-02-01 09:29:52', 3, 3, '02');
INSERT INTO `tuntutan1` VALUES (13, 36, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(4)', '2021-02-01 09:29:52', 3, 3, '05');
INSERT INTO `tuntutan1` VALUES (14, 38, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2019-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(5)', '2021-02-01 09:29:52', 3, 3, '08');
INSERT INTO `tuntutan1` VALUES (15, 45, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(7)', '2021-02-01 09:29:52', 3, 3, '02');
INSERT INTO `tuntutan1` VALUES (16, 52, NULL, '', '2019-01-22', '2019-01-22', 'Osteoporosis', 'AAAA', '1525.50', '', '2018-01-25', '2019-01-25', 'Tuntutan Bayaran Balik', '', 'SUK.D.200(01) 703/2 Jld 14(9)', '2021-02-01 09:29:52', 3, 3, '03');
INSERT INTO `tuntutan1` VALUES (20, 66, NULL, '', '2019-12-16', '2019-11-06', 'T.KETOSTERIL', 'SUK.D.200', '350.00', '', '2019-11-24', '2019-12-03', 'Permohonan Pembelanjaan', '', 'SUK.D.200(06)703/2 JLD 19 (50)', '2021-02-01 09:29:52', 5, 4, '01');
INSERT INTO `tuntutan1` VALUES (30, 74, NULL, '', '1995-02-27', '1970-02-11', 'Debitis commodo perf', 'Non aliquid eius nec', 'Voluptas aliquip ame', 'Quia enim quis at eu', '2001-12-07', '1989-05-19', 'Pembiayaan Rawatan', 'Dolor et consequatur', 'Asperiores molestias', '2021-02-01 12:25:05', 3, 4, '02');
INSERT INTO `tuntutan1` VALUES (31, 75, NULL, '', '1987-11-27', '1980-11-07', 'Aut Nam vitae velit', 'Praesentium iste et ', 'Velit suscipit cons', 'Earum voluptas et de', '1990-01-03', '2006-06-07', 'Tuntutan Bayaran Balik', 'Voluptas sit molest', 'Omnis rem quaerat as', '2021-02-01 12:26:35', 2, 3, '09');
INSERT INTO `tuntutan1` VALUES (32, 81, NULL, '', '2020-11-08', '2020-11-08', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(35)', '800.00', '800.00', NULL, '2020-12-20', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 11:03:42', 6, 6, '06');
INSERT INTO `tuntutan1` VALUES (33, 82, NULL, '', NULL, NULL, 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(49)', '1080.00 (360X3)', '1080.00 (360X3)', '2020-12-20', '2020-12-30', 'Permohonan Pembelanjaan', 'PENYAMBUNGAN UBAT BAGI TEMPOH JANUARI 2021 HINGGA MAC 2021', '', '2021-03-29 11:21:19', 7, 7, '13');
INSERT INTO `tuntutan1` VALUES (34, 83, NULL, '', '2020-12-05', '2020-12-05', 'BEVACIZUMAB 400MG INJ (2VIAL) DAN 100MG INJ (2VIAL) (AVASTIN INJ)', 'SUK.D.200 (06) 703/2 JLD.24(37)', '16,962.00', '16,962.00', '2020-12-07', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 11:31:15', 6, 8, '01');
INSERT INTO `tuntutan1` VALUES (35, 84, NULL, '', '2020-09-17', NULL, 'PAZOPANIB 200MG TABLET (VOTRIET)-GLAXO DAN PAZOPANIB 400MG TAB (VOTRIENT FILM COATED 400MG)-GLAXO', 'SUK.D.200 (06) 703/2 JLD.24(41)', '40,780.00 utk 2 ubat', '20,196.00', '2020-10-27', '2021-01-04', 'Permohonan Pembelanjaan', 'LAMBAT ANGKAT PERMOHONAN DISEBABKAN PERMOHONAN TIDAK LENGKAP DENGAN MENGEMUKAKAN SEBUTHARGA BAGI TEMPOH 6 BULAN BERSAMAAN 8 UNIT UBAT. PEJ SUK HANYA MELULUSKAN UBAT BAGI TEMPOH 3 BULAN BERSAMAAN 4 UNIT UBAT SAHAJA', '', '2021-03-29 11:44:30', 7, 8, '01');
INSERT INTO `tuntutan1` VALUES (36, 84, NULL, '', '2020-09-17', NULL, 'PAZOPANIB 200MG TABLET (VOTRIET)-GLAXO DAN PAZOPANIB 400MG TAB (VOTRIENT FILM COATED 400MG)-GLAXO', 'SUK.D.200 (06) 703/2 JLD.24(41)', '40,780.00 utk 2 ubat', '20,196.00', '2020-10-27', '2021-01-04', 'Permohonan Pembelanjaan', 'LAMBAT ANGKAT PERMOHONAN DISEBABKAN PERMOHONAN TIDAK LENGKAP DENGAN MENGEMUKAKAN SEBUTHARGA BAGI TEMPOH 6 BULAN BERSAMAAN 8 UNIT UBAT. PEJ SUK HANYA MELULUSKAN UBAT BAGI TEMPOH 3 BULAN BERSAMAAN 4 UNIT UBAT SAHAJA', '', '2021-03-29 11:46:16', 7, 8, '01');
INSERT INTO `tuntutan1` VALUES (37, 85, NULL, '', '2020-11-17', NULL, 'TAB KETOSTERIL X 100\'S\' ', 'SUK.D.200 (06) 703/2 JLD.24(28)', '1,350.00', '1,350.00', '2020-12-09', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 11:55:34', 7, 7, '01');
INSERT INTO `tuntutan1` VALUES (38, 86, NULL, '', '2020-08-09', NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(39)', '790.00', '790.00', '2020-12-09', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 12:02:50', 6, 6, '06');
INSERT INTO `tuntutan1` VALUES (39, 87, NULL, '', '2020-08-19', '2020-08-19', 'MSM Dan RX Mini / RX TREK', 'SUK.D.200 (06) 703/2 JLD.24(37)', '4,104.00', '4,104.00', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 15:16:07', 7, 9, '06');
INSERT INTO `tuntutan1` VALUES (40, 88, NULL, '', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(47)', '950.00', '950.00', '2021-12-14', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 15:22:45', 8, 6, '06');
INSERT INTO `tuntutan1` VALUES (41, 89, NULL, '', '2020-12-02', NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(46)', '3,920.00', '3,920.00', '2020-12-20', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 15:30:50', 7, 10, '13');
INSERT INTO `tuntutan1` VALUES (42, 90, NULL, '', '2020-12-02', NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(45)', '3,920.00', '3,920.00', '2020-12-15', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 15:52:13', 7, 10, '13');
INSERT INTO `tuntutan1` VALUES (43, 91, NULL, '', '2020-11-08', '2020-11-08', 'T.ENRESTO 200MG BD DAN T.CRESTOR 20MG ON', 'SUK.D.200 (06) 703/2 JLD.24(42)', '1,994.60', '1,994.60', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 16:00:56', 7, 11, '01');
INSERT INTO `tuntutan1` VALUES (44, 92, NULL, '', '2020-12-09', NULL, 'HEMODIALISIS DAN SUNTIKAN IV COSMOFER', 'SUK.D.200 (06) 703/2 JLD.24(52)', '735.00', '735.00', NULL, '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 16:15:46', 7, 12, '13');
INSERT INTO `tuntutan1` VALUES (45, 92, NULL, '', '2020-12-09', NULL, 'HEMODIALISIS DAN SUNTIKAN IV COSMOFER', 'SUK.D.200 (06) 703/2 JLD.24(52)', '735.00', '735.00', '2021-01-05', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-03-29 16:15:56', 7, 12, '13');
INSERT INTO `tuntutan1` VALUES (46, 93, NULL, '', '2020-11-24', NULL, 'HEMODIALISIS DAN SUNTIKAN EPO', 'SUK.D.200 (06) 703/2 JLD.24(50)', '3,920.00', '3,920.00', '2020-12-23', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-03-29 16:25:56', 6, 13, '13');
INSERT INTO `tuntutan1` VALUES (47, 94, NULL, '', '2020-11-05', '2020-11-05', 'ROSUVASTATIN 200MG TAB (CRESTOR)', 'SUK.D.200 (06) 703/2 JLD.24(51)', '572.00', '572.00', '2020-12-17', '2021-01-05', '', '', '', '2021-03-30 15:29:52', 7, 11, '01');
INSERT INTO `tuntutan1` VALUES (48, 95, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(43)', '3,920.00', '3,920.00', '2020-12-14', '2021-01-05', 'Permohonan Pembelanjaan', 'SAMBUNG DIALISIS BAGI BULAN JAN 2021 HINGGA MAC 2021', '', '2021-03-30 15:45:30', 6, 14, '13');
INSERT INTO `tuntutan1` VALUES (49, 96, NULL, '', NULL, NULL, 'CRESPINE GEL 2 UNIT', 'SUK.D.200 (06) 703/2 JLD.24(48)', '3,000.00', '3,000.00', '2020-12-14', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:10:02', 7, 15, '01');
INSERT INTO `tuntutan1` VALUES (50, 97, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPOETIN-IV MIRCERA 150MCG', 'SUK.D.200 (06) 703/2 JLD.24(53)', '4,200.00 HINGGA 4,400.00', '4,200.00 HINGGA 4,400.00', '2020-12-21', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:17:28', 6, 16, '13');
INSERT INTO `tuntutan1` VALUES (51, 97, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPOETIN-IV MIRCERA 150MCG', 'SUK.D.200 (06) 703/2 JLD.24(53)', '4,200.00 HINGGA 4,400.00', '4,200.00 HINGGA 4,400.00', '2020-12-21', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:26:32', 6, 16, '13');
INSERT INTO `tuntutan1` VALUES (52, 98, NULL, '', NULL, NULL, 'PROMUS PRIMIER STENT (ALL SIZES) -2UNIT DAN EMERGE BALLOON (ALL SIZES)', 'SUK.D.200 (06) 703/2 JLD.24(01)', '9,936.00', '9,936.00', '2020-12-23', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:32:22', 5, 9, '06');
INSERT INTO `tuntutan1` VALUES (53, 98, NULL, '', NULL, NULL, 'PROMUS PRIMIER STENT (ALL SIZES) -2UNIT DAN EMERGE BALLOON (ALL SIZES)', 'SUK.D.200 (06) 703/2 JLD.24(01)', '9,936.00', '9,936.00', '2020-12-23', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 12:40:32', 5, 9, '06');
INSERT INTO `tuntutan1` VALUES (54, 99, NULL, '', NULL, NULL, 'Zenius Spinal Fixation System ', 'SUK.D.200 (06) 703/2 JLD.24(4)', '16,500.00', '16,500.00', '2020-12-30', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 16:06:31', 6, 17, '07');
INSERT INTO `tuntutan1` VALUES (55, 100, NULL, '', '2020-12-03', '2020-12-03', 'sacubitril / varsartan 100mg', 'SUK.D.200 (06) 703/2 JLD.24(5)', '1,008.00', '1,008.00', '2020-12-28', '2021-01-17', 'Tuntutan Bayaran Balik', '', '', '2021-04-07 16:12:38', 5, 9, '01');
INSERT INTO `tuntutan1` VALUES (56, 101, NULL, '', NULL, NULL, 'electric wheel chair', 'SUK.D.200 (06) 703/2 JLD.24(6)', '6,150.00', '6,150.00', '2020-12-28', '2021-01-17', 'Permohonan Pembelanjaan', '', '', '2021-04-07 16:18:15', 7, 18, '04');
INSERT INTO `tuntutan1` VALUES (57, 95, NULL, '', NULL, NULL, 'SUNTIKAN IV VENOFER', 'SUK.D.200 (06) 703/2 JLD.24(3)', '370.00', '370.00', '2020-12-30', '2021-01-17', 'Tuntutan Bayaran Balik', '', '', '2021-04-08 08:45:30', 6, 14, '13');
INSERT INTO `tuntutan1` VALUES (58, 104, NULL, '', '2021-01-02', '2021-01-02', 'BMATE STANDARD WEELCHAIR CA902 BLACK PVC 16KG + ALPRO MEMBERSHIP PACKAGE DAN ASH BRACE 5x1', 'SUK.D.200 (06) 703/2 JLD.24(10)', '829.80', '829.80', '2021-01-10', '2021-01-25', 'Tuntutan Bayaran Balik', '', '', '2021-04-08 09:11:30', 6, 19, '04');
INSERT INTO `tuntutan1` VALUES (59, 98, NULL, '', NULL, NULL, 'T. EMPAGLIFLOZIN', 'SUK.D.200 (06) 703/2 JLD.24(12)', '357.60', '357.60', '2021-01-11', '2021-01-25', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN JAN 2021 HINGGA MC 2021', '', '2021-04-08 09:15:58', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (60, 105, NULL, '', NULL, NULL, 'CORONARY ANGIOGRAM', 'SUK.D.200 (06) 703/2 JLD.24(12)', '9,600.00', '9,600.00', '2021-01-14', '2021-02-01', 'Permohonan Pembelanjaan', 'PROMUS PRIMIER STENT+BALLOON (1SET) DAN SYNERGY STENT + EMERGE BALLOON (1SET)', '', '2021-04-08 09:28:05', 5, 21, '06');
INSERT INTO `tuntutan1` VALUES (61, 106, NULL, '', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(13)', '808.00', '808.00', '2021-01-13', '2021-02-01', 'Permohonan Pembelanjaan', '', '', '2021-04-08 12:25:18', 5, 22, '06');
INSERT INTO `tuntutan1` VALUES (62, 107, NULL, '', NULL, NULL, 'POSTERIOR INSTRUMENTATION', 'SUK.D.200 (06) 703/2 JLD.24(16)', '9,800.00', '9,800.00', '2021-01-19', '2021-02-07', 'Permohonan Pembelanjaan', 'POLYAXIAL GUIDED PEDICLE SCREW + SET SCREW(10UNIT), ROD 6.0MM PRECUT,<=200MM (2UNIT) DAN ROD LINK (1UNIT) ', '', '2021-04-08 14:43:57', 5, 23, '07');
INSERT INTO `tuntutan1` VALUES (63, 108, NULL, '', '2020-12-21', NULL, 'yasargii ti perm std clip cvd 8.3mm ref:ft 752 t dan 26040 becker edms ii kit', 'SUK.D.200 (06) 703/2 JLD.24(14)', '1,726.90', '1,726.90', '2021-01-14', '2021-02-01', '', '', '', '2021-04-08 14:49:35', 7, 9, '11');
INSERT INTO `tuntutan1` VALUES (64, 109, NULL, '', NULL, NULL, 'ELIGARD 22.5 MG/VIAL EVERY 3 MONTHS (2 VIALS)', 'SUK.D.200 (06) 703/2 JLD.24(16)', '2,160.00', '2,160.00', '2021-01-19', '0021-02-07', 'Permohonan Pembelanjaan', '', '', '2021-04-08 14:55:11', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (65, 110, NULL, '', NULL, NULL, 'PRESCRIPTION SLIP', 'SUK.D.200 (06) 703/2 JLD.24(19)', 'HARGA UBAT AKAN DIKEMUKAKAN BERSAMA BIL UBAT BERKENAAN', 'HARGA UBAT AKAN DIKEMUKAKAN BERSAMA BIL UBAT BERKENAAN', '2021-02-10', '2021-02-10', 'Permohonan Pembelanjaan', '', '', '2021-04-08 15:04:14', 9, 24, '01');
INSERT INTO `tuntutan1` VALUES (66, 111, NULL, '', NULL, NULL, 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(15)', '1,110.00', '1,110.00 (370 x 3 )', '2021-01-19', '2021-02-09', 'Permohonan Pembelanjaan', 'KELULUSAN UNTUK BLN JAN 2021 HINGGA MAC 2021', '', '2021-04-11 09:02:10', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (67, 94, NULL, '', NULL, NULL, 'T.ROSUVASTATIN 20MG ON', 'SUK.D.200 (06) 703/2 JLD.24(20)', '585.00', '585.00', '2021-01-24', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 10:48:34', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (68, 112, NULL, '', NULL, NULL, 'APIXABAN 5MG BD (ELIQUIS)', 'SUK.D.200 (06) 703/2 JLD.24(21)', '865.00', '865.00', '2021-01-21', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-04-11 10:54:54', 5, 11, '01');
INSERT INTO `tuntutan1` VALUES (69, 113, NULL, '', '2021-01-05', '2021-01-05', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(22)', '871.55', '871.55', '2021-01-28', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-04-11 10:59:28', 5, 9, '06');
INSERT INTO `tuntutan1` VALUES (70, 114, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (BINOCRIT) INJECTION 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(23)', '2,080.00', '2.080.00', '2021-02-03', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 11:19:37', 6, 25, '13');
INSERT INTO `tuntutan1` VALUES (71, 114, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (BINOCRIT) INJECTION 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(23)', '2,080.00', '2.080.00', '2021-02-03', '2021-02-22', 'Permohonan Pembelanjaan', 'PESAKIT TELAH MENINGGAL DUNIA PADA FEBRUARI 2021', '', '2021-04-11 11:20:26', 6, 25, '13');
INSERT INTO `tuntutan1` VALUES (72, 115, NULL, '', NULL, NULL, 'OPN3 BTE PP', 'SUK.D.200 (06) 703/2 JLD.24(24)', '7,000.00', '7,000.00 (3,500 X 2)', '2021-01-27', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 11:35:04', 5, 26, '05');
INSERT INTO `tuntutan1` VALUES (76, 116, NULL, '', NULL, NULL, 'T.APIXABAN 2.5MG BD', 'SUK.D.200 (06) 703/2 JLD.24(26)', 'RM1,110.00', '1,110.00', '2021-02-22', '2021-02-22', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BLN FEB 2021 HINGGA APRIL 2021', '', '2021-04-11 12:04:01', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (77, 117, NULL, '', NULL, NULL, 'INTRA VITREAL RANIBIZUMAB', 'SUK.D.200 (06) 703/2 JLD.24(27)', '3,750.00', '3,750.00', '2021-02-03', '2021-02-23', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BULAN FEB 2021 HINGGA APRIL 2021', '', '2021-04-11 12:10:55', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (78, 118, NULL, '', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800.00', '800.00', '2021-02-02', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-11 12:14:20', 5, 6, '06');
INSERT INTO `tuntutan1` VALUES (79, 119, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTROPOETIN (MIRCERA 150MCG)', 'SUK.D.200 (06) 703/2 JLD.24(29)', '4,200.00', '4,200.00', '2021-02-10', NULL, 'Permohonan Pembelanjaan', 'KELULUSAN UTK BLN JAN 2021 HINGGA MAC 2021', '', '2021-04-11 12:25:22', 6, 27, '13');
INSERT INTO `tuntutan1` VALUES (80, 120, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTROPOETIN (MIRCERA 150MCG)', 'SUK.D.200 (06) 703/2 JLD.24(30)', '4,200.00', '4,200.00', '2021-02-10', '2021-02-22', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BL JAN 2021 HINGGA MAC 2021', '', '2021-04-11 12:31:03', 6, 27, '13');
INSERT INTO `tuntutan1` VALUES (81, 103, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(31)', '4,680.00', '4,680.00', '2021-02-04', '2021-02-23', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD DARULNAIM DIALISIS SDN BHD KE  AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD BERMULA BLN APRIL 2021 HINGGA JUN 2021', '', '2021-04-11 12:49:06', 6, 25, '13');
INSERT INTO `tuntutan1` VALUES (82, 103, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(31)', '4,680.00', '4,680.00', '2021-02-04', '2021-02-23', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD DARULNAIM DIALISIS SDN BHD KE  AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD BERMULA BLN APRIL 2021 HINGGA JUN 2021', '', '2021-04-11 13:25:23', 6, 25, '13');
INSERT INTO `tuntutan1` VALUES (83, 121, NULL, '', NULL, NULL, 'menyewa mesin baxter PD Automated Home Choice Claria dengan Platform Kesambungan Sharesource', 'SUK.D.200 (06) 703/2 JLD.24(32)', '12780', '12780', '2021-02-08', '2021-01-23', 'Permohonan Pembelanjaan', 'KELULUSAN UTK BULAN APRIL 2021 HINGGA JUN 2021', '', '2021-04-26 10:49:37', 5, 28, '13');
INSERT INTO `tuntutan1` VALUES (84, 123, NULL, '', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800', '800', '2021-02-02', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 11:24:36', 6, 6, '06');
INSERT INTO `tuntutan1` VALUES (85, 125, NULL, '', NULL, NULL, 'POSTERIOR INSTRUMENTATION', 'SUK.D.200 (06) 703/2 JLD.24(16)', '9800', '9800', '2021-01-19', '2021-02-07', 'Permohonan Pembelanjaan', '', '', '2021-04-26 11:53:35', 7, 23, '02');
INSERT INTO `tuntutan1` VALUES (86, 126, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPO', 'SUK.D.200 (06) 703/2 JLD.24(50)', '3920', '3920', '2020-12-21', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-04-26 12:01:22', 6, 13, '13');
INSERT INTO `tuntutan1` VALUES (87, 128, NULL, '', '2020-12-21', '2020-12-21', 'yasargii ti perm std clip cvd 8.3mm ref:ft 752 t dan 26040 becker edms ii kit', 'SUK.D.200 (06) 703/2 JLD.24(14)', '1726', '1726', '2021-01-14', '2021-02-01', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 12:11:13', 7, 9, '07');
INSERT INTO `tuntutan1` VALUES (88, 130, NULL, '', NULL, NULL, 'T.APIXABAN 2.5MG BD', 'SUK.D.200 (06) 703/2 JLD.24(26)', '1110', '1110', '2021-01-27', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-04-26 12:19:55', 7, 20, '01');
INSERT INTO `tuntutan1` VALUES (89, 132, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(7)', '3920', '3920', '2021-01-10', '2021-01-25', 'Permohonan Pembelanjaan', 'HARGA BERKENAAN UTK SEBULAN. KELULUSAN BG TEMPOH 3 BLN MULAI JAN 2021 HINGGA MAC 2021', '', '2021-04-26 12:28:53', 6, 12, '13');
INSERT INTO `tuntutan1` VALUES (90, 134, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(37)', '3920', '3920', '2020-12-15', '2021-01-05', 'Permohonan Pembelanjaan', '', '', '2021-04-26 12:37:52', 6, 10, '13');
INSERT INTO `tuntutan1` VALUES (91, 135, NULL, '', '2020-08-19', '2020-08-19', 'DRUG ELUTING STENT (MSM DAN RX MINI TREK/RX TREK', 'SUK.D.200 (06) 703/2 JLD.24(37)', '4101', '4101', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 13:00:37', 7, 9, '06');
INSERT INTO `tuntutan1` VALUES (92, 137, NULL, '', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(39)', '790', '790', '2020-12-09', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-04-26 13:18:54', 6, 0, '06');
INSERT INTO `tuntutan1` VALUES (93, 122, NULL, '', NULL, NULL, 'conventional ablation package-SVT', 'SUK.D.200 (06) 703/2 JLD.24(136)', '8550', '8550', NULL, '2020-12-17', 'Permohonan Pembelanjaan', 'PEMBATALAN PERMOHONAN PERUBATAN DISEBABKAN PENDEMIK COVID 19', '', '2021-05-03 08:57:55', 6, 5, '07');
INSERT INTO `tuntutan1` VALUES (94, 138, NULL, '', NULL, NULL, 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(39)', '790', '790', '2020-12-19', '2021-01-04', 'Tuntutan Bayaran Balik', '', '', '2021-05-03 09:02:34', 6, 0, '06');
INSERT INTO `tuntutan1` VALUES (95, 136, NULL, '', '2020-08-19', '2020-08-19', 'DRUG ELUTING STENT (MSM DAN RX MINI TREK/RX TREK', 'SUK.D.200 (06) 703/2 JLD.24(37)', '4104', '4104', '2020-12-14', '2021-01-05', 'Tuntutan Bayaran Balik', '', '', '2021-05-03 09:06:39', 7, 9, '06');
INSERT INTO `tuntutan1` VALUES (96, 127, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPO', 'SUK.D.200 (06) 703/2 JLD.24(50)', '3920', '3920', '2020-12-21', '2021-01-05', 'Permohonan Pembelanjaan', 'KELULUSAN BAGI BULAN DISEMBER 2020 SHJ', '', '2021-05-03 09:10:09', 6, 0, '13');
INSERT INTO `tuntutan1` VALUES (97, 133, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(7)', '3920', '3920', '2021-01-10', '2021-01-25', 'Permohonan Pembelanjaan', 'PENYAMBUNGAN UBAT BAGI TEMPOH JANUARI 2021 HINGGA MAC 2021', '', '2021-05-03 09:30:10', 6, 12, '13');
INSERT INTO `tuntutan1` VALUES (99, 129, NULL, '', '2020-12-21', '2020-12-21', 'yasargii ti perm std clip cvd 8.3mm ref:ft 752 t dan 26040 becker edms ii kit', 'SUK.D.200 (06) 703/2 JLD.24(14)', '1726.90', '1726.90', '2021-01-14', '2021-02-01', 'Tuntutan Bayaran Balik', '', '', '2021-05-03 09:41:03', 5, 9, '07');
INSERT INTO `tuntutan1` VALUES (100, 131, NULL, '', NULL, NULL, 'TAB APIXABAN 2.5MG', 'SUK.D.200 (06) 703/2 JLD.24(26)', '1110', '1110', '2021-01-27', '2021-02-22', 'Permohonan Pembelanjaan', 'KELULUSAN UBAT BAGI TEMPOH FEBRUARI 2021 HINGGA aPRIL 2021', '', '2021-05-03 09:52:00', 7, 20, '01');
INSERT INTO `tuntutan1` VALUES (101, 124, NULL, '', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800', '800', NULL, NULL, '', '', '', '2021-05-03 09:56:11', 6, 6, '06');
INSERT INTO `tuntutan1` VALUES (102, 124, NULL, '', '2021-01-21', '2021-01-21', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(28)', '800', '800', '2021-02-02', '2021-02-22', 'Permohonan Pembelanjaan', '', '', '2021-05-03 09:56:37', 6, 6, '06');
INSERT INTO `tuntutan1` VALUES (103, 140, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (MIRCERA 150MCG)', 'SUK.D.200 (06) 703/2 JLD.24(30)', '4200', '4200', '2021-02-10', '2021-02-22', 'Permohonan Pembelanjaan', 'SAMBUNG DIALISIS BAGI BULAN JAN 2021 HINGGA MAC 2021', '', '2021-05-03 10:02:50', 6, 27, '13');
INSERT INTO `tuntutan1` VALUES (104, 133, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN (BINOCRIT) INJECTION 2000IU', 'SUK.D.200 (06) 703/2 JLD.24(31)', '5040', '5040', '2021-02-04', '2021-02-23', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD DARULNAIM DIALISIS SDN BHD KE  AL-MUSOFFA HAEMODIALYSIS CENTRE SDN BHD BERMULA BLN APRIL 2021 HINGGA JUN 2021', '', '2021-05-03 10:08:30', 6, 29, '13');
INSERT INTO `tuntutan1` VALUES (105, 141, NULL, '', '2021-10-26', NULL, 'UNCEMENTED BIPOLAR HEMIARTHROPLASTY', 'SUK.D.200 (06) 703/2 JLD.24(25)', '6000', '6000', '2020-01-27', '2021-02-22', 'Tuntutan Bayaran Balik', '', '', '2021-05-03 10:58:24', 10, 28, '07');
INSERT INTO `tuntutan1` VALUES (106, 143, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN EPOETIN MIRCERA ', 'SUK.D.200 (06) 703/2 JLD.24(33)', '4400', '4400', '2021-02-09', '2021-03-09', 'Permohonan Pembelanjaan', 'SAMBUNG DIALISIS BAGI BULAN JAN 2021 HINGGA MAC 2021', '', '2021-05-03 11:12:50', 6, 30, '13');
INSERT INTO `tuntutan1` VALUES (107, 144, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN MIRCERA ', 'SUK.D.200 (06) 703/2 JLD.24(34)', '4400', '4400', '2021-02-09', '2021-03-09', 'Permohonan Pembelanjaan', 'SAMBUNG DIALISIS BAGI BULAN JAN 2021 HINGGA MAC 2021', '', '2021-05-03 11:23:54', 6, 30, '13');
INSERT INTO `tuntutan1` VALUES (108, 145, NULL, '', NULL, NULL, 'Aluminium Detachable Armrest and Footrest', 'SUK.D.200 (06) 703/2 JLD.24(38)', '995', '995', '2021-02-07', '2021-03-10', 'Permohonan Pembelanjaan', '', '', '2021-05-03 11:40:48', 6, 31, '04');
INSERT INTO `tuntutan1` VALUES (109, 145, NULL, '', NULL, NULL, 'Aluminium Detachable Armrest and Footrest', 'SUK.D.200 (06) 703/2 JLD.24(38)', '995', '995', '2021-02-07', '2021-03-10', 'Permohonan Pembelanjaan', '', '', '2021-05-03 11:40:54', 6, 31, '04');
INSERT INTO `tuntutan1` VALUES (110, 147, NULL, '', NULL, NULL, 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(42)', '1110', '1110', '2021-03-01', '2021-03-18', 'Permohonan Pembelanjaan', 'KELULUSAN UBAT BAGI TEMPOH MAC 2021 HINGGA MEI 2021', '', '2021-05-03 11:48:26', 7, 20, '01');
INSERT INTO `tuntutan1` VALUES (111, 98, NULL, '', '2020-11-24', NULL, 'CORONARY ANGIOPLASTY', 'SUK.D.200 (06) 703/2 JLD.24(36)', '9600', '9600', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'KELULUSAN KPD 3 SYARIKAT PEMBEKAL ', '', '2021-05-18 08:33:28', 5, 21, '06');
INSERT INTO `tuntutan1` VALUES (112, 90, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(37)', '5040', '5040', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD PUSAT HAEMODIALISIS BERKAT SEROJA SDN BHD KE PUSAT RAWATAN DIALISIS ISLAH BERMULA BLN 25 JAN 2021 HINGGA 31 MAC 2021', '', '2021-05-18 08:44:49', 6, 32, '13');
INSERT INTO `tuntutan1` VALUES (113, 134, NULL, '', NULL, NULL, 'HEMODIALISIS DAN SUNTIKAN ERYTHROPOETIN', 'SUK.D.200 (06) 703/2 JLD.24(37)', '5040', '5040', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'PERTUKARAN PUSAT DIALISIS DRPD PUSAT HAEMODIALISIS BERKAT SEROJA SDN BHD KE PUSAT RAWATAN DIALISIS ISLAH BERMULA BLN 25 JAN 2021 HINGGA 31 MAC 2021', '', '2021-05-18 08:46:59', 6, 32, '13');
INSERT INTO `tuntutan1` VALUES (114, 148, NULL, '', NULL, NULL, 'CRESPINE GEL 2ML INJ', 'SUK.D.200 (06) 703/2 JLD.24(39)', '2600', '2600', '2021-02-15', '2021-03-10', 'Permohonan Pembelanjaan', '', '', '2021-05-18 09:13:50', 5, 33, '02');
INSERT INTO `tuntutan1` VALUES (115, 149, NULL, '', NULL, '2021-01-06', 'DEPOSIT FISTULA', 'SUK.D.200 (06) 703/2 JLD.24(18)', '2,500.00', '2,500.00', '2021-01-26', '2021-02-09', 'Tuntutan Bayaran Balik', 'TUNTUTAN BAYARAN BALIK', '', '2021-08-29 13:40:48', 11, 34, '07');
INSERT INTO `tuntutan1` VALUES (116, 110, NULL, '', '2021-06-11', '2021-06-11', 'SP Metoprol 100mg, SP Felodipine er 5mg, SP atorvastatin 10mg, ND paracetamol 500mg, ND Celecoxib 200cap dan rivaroxaban 20mg', 'SUK.D.200 (06) 703/2 JLD.24(19)', '0', '0', '2021-01-26', '2021-02-10', 'Pembiayaan Rawatan', 'SAMBUNG UBAT BAGI BULAN FEB 2021 HINGGA APRIL 2021', '', '2021-08-29 13:47:25', 9, 24, '01');
INSERT INTO `tuntutan1` VALUES (117, 112, NULL, '', '2021-01-19', '2021-01-19', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(21)', '865', '865', '2021-01-21', '2021-02-22', 'Tuntutan Bayaran Balik', 'ubat apixaban 5mg bagi 3 unit', '', '2021-08-30 09:03:18', 7, 11, '01');
INSERT INTO `tuntutan1` VALUES (118, 98, NULL, '', '2021-11-24', '2021-11-24', 'PROSEDUR ANGIOPLSTY', 'SUK.D.200 (06) 703/2 JLD.24(36)', '9,600.00', '9,600.00', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'KELULUSAN BAGI 3 SYARIKAT PEMBEKAL MEDILIANCE (M) SDN BHD, DCH AURGA (M) SDN BHD DAN MEDTRONIC (M) SDN BHD', '', '2021-08-30 11:06:01', 5, 21, '06');
INSERT INTO `tuntutan1` VALUES (119, 98, NULL, '', '2021-11-24', '2021-11-24', 'PROSEDUR ANGIOPLSTY', 'SUK.D.200 (06) 703/2 JLD.24(36)', '9,600.00', '9,600.00', '2021-02-21', '2021-03-10', 'Permohonan Pembelanjaan', 'KELULUSAN BAGI 3 SYARIKAT PEMBEKAL MEDILIANCE (M) SDN BHD, DCH AURGA (M) SDN BHD DAN MEDTRONIC (M) SDN BHD', '', '2021-08-30 11:12:02', 5, 21, '06');
INSERT INTO `tuntutan1` VALUES (120, 151, NULL, '', '2021-02-02', '2021-03-15', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(40)', '1110', '1110', '2021-02-09', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-01 14:58:57', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (121, 152, NULL, '', '2020-12-07', '2021-03-15', 'ULTIBRO BREEZHALER 110/50 ', 'SUK.D.200 (06) 703/2 JLD.24(41)', '795', '795', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 09:17:25', 7, 20, '01');
INSERT INTO `tuntutan1` VALUES (122, 152, NULL, '', '2020-12-07', '2021-03-15', 'ULTIBRO BREEZHALER 110/50 ', 'SUK.D.200 (06) 703/2 JLD.24(41)', '795', '795', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 09:39:18', 7, 20, '01');
INSERT INTO `tuntutan1` VALUES (123, 152, NULL, '', '2020-12-07', '2021-03-15', 'ULTIBRO BREEZHALER 110/50 ', 'SUK.D.200 (06) 703/2 JLD.24(41)', '795', '795', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 09:58:03', 7, 20, '01');
INSERT INTO `tuntutan1` VALUES (124, 153, NULL, '', '2021-02-15', '2021-03-15', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(43)', '1110', '1110', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'DILULUSKAN SELAMA 3 BLN MULAI BULAN MAC 2021 HINGGA MEI 2021', '', '2021-09-02 10:43:45', 5, 20, '01');
INSERT INTO `tuntutan1` VALUES (125, 154, NULL, '', '0021-01-04', '2021-01-04', 'INTRAOCULAR LENS', 'SUK.D.200 (06) 703/2 JLD.24(44)', '790', '790', NULL, '2021-03-16', 'Tuntutan Bayaran Balik', '', '', '2021-09-02 10:58:47', 6, 6, '06');
INSERT INTO `tuntutan1` VALUES (126, 82, NULL, '', NULL, NULL, 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(45)', '1080', '1080', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'SAMBUNG UBAT BAGI BULAN APRIL 2021 HINGGA JUN 2021', '', '2021-09-02 11:04:56', 5, 0, '01');
INSERT INTO `tuntutan1` VALUES (127, 82, NULL, '', NULL, '2021-03-15', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(45)', '1080', '1080', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'SAMBUNG UBAT BAGI BULAN APRIL 2021 HINGGA JUN 2021', '', '2021-09-02 11:05:22', 5, 7, '01');
INSERT INTO `tuntutan1` VALUES (128, 82, NULL, '', NULL, '2021-03-15', 'TAB APIXABAN 5MG', 'SUK.D.200 (06) 703/2 JLD.24(45)', '1080', '1080', '2021-03-01', '2021-03-15', 'Permohonan Pembelanjaan', 'SAMBUNG UBAT BAGI BULAN APRIL 2021 HINGGA JUN 2021', '', '2021-09-02 11:05:28', 5, 7, '01');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'sraff', 'sraffzkakz@gmail.com', '$2y$10$v/jtAlkINAnRU7rwu1kJ3eiICDRvjVzY0oy0F3xBp3xxgVf2jsBu2', '14fAt6RjPkIbbeGi6HqVSQajZ88xAfHd50gXHEgbwtEJQl7biJXhcRTxqlxn', '2021-09-28 00:44:22', '2021-09-28 00:44:22');

-- ----------------------------
-- View structure for papar_bil_rawatan
-- ----------------------------
DROP VIEW IF EXISTS `papar_bil_rawatan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `papar_bil_rawatan` AS SELECT
	rawatan.idRawatan, 
	rawatan.idPeribadi, 
	rawatan.idwaris AS id_waris,
	peribadi.kadPengenalan, 
	peribadi.nama, 
	epp_waris.nama AS nama_waris, 
	epp_waris.nokp AS nokp_waris, 
	jawatan.namaJawatan, 
	rawatan.tarikh_bil, 
	rawatan.jumlah_bil, 
	rawatan.no_bil, 
	rawatan.masa_wujud, 
	jabatan.namaJabatan
	
FROM
	peribadi
	LEFT JOIN
	epp_waris
	ON 
		peribadi.idPeribadi = epp_waris.idPesara
	LEFT JOIN
	jawatan
	ON 
		peribadi.idJawatan = jawatan.idJawatan
	INNER JOIN
	rawatan
	ON 
		peribadi.idPeribadi = rawatan.idPeribadi
	LEFT JOIN
	jabatan
	ON 
		peribadi.idJabatan = jabatan.idJabatan ;

-- ----------------------------
-- View structure for papar_butiran_perubatan
-- ----------------------------
DROP VIEW IF EXISTS `papar_butiran_perubatan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `papar_butiran_perubatan` AS select `tuntutan`.`idTuntutan` AS `idTuntutan`,`peribadi`.`nama` AS `nama`,`peribadi`.`kadPengenalan` AS `kadPengenalan`,`epp_waris`.`nama` AS `nama_waris`,`epp_waris`.`nokp` AS `nokp_waris`,`hospital`.`idHospital` AS `idHospital`,`hospital`.`namaHospital` AS `namaHospital`,`pembekal`.`idPembekal` AS `idPembekal`,`pembekal`.`namaPembekal` AS `namaPembekal`,`tuntutan`.`tarikhRawatan` AS `tarikhRawatan`,`tuntutan`.`tarikhKemudahanPerubatanDiperolehi` AS `tarikhKemudahanPerubatanDiperolehi`,`tuntutan`.`detailTuntutan` AS `detailTuntutan`,`tuntutan`.`noRujukanKewangan` AS `noRujukanKewangan`,`tuntutan`.`jumlahTuntutan` AS `jumlahTuntutan`,`tuntutan`.`jumlahSebenar` AS `jumlahSebenar`,`tuntutan`.`tarikhTerimaPermohonan` AS `tarikhTerimaPermohonan`,`tuntutan`.`tarikhKelulusan` AS `tarikhKelulusan`,`tuntutan`.`jenisPermohonan` AS `jenisPermohonan`,`tuntutan`.`catatanPermohonan` AS `catatanPermohonan`,`tuntutan`.`noFail` AS `noFail`,`tuntutan`.`masa_wujud` AS `masa_wujud`,`kategorituntutan`.`namaKategori` AS `namaKategori`,`kategorituntutan`.`idKategori` AS `idKategori`,`tuntutan`.`idwaris` AS `idwaris`,`tuntutan`.`idpenjawatawam` AS `idpenjawatawam` from (((((`tuntutan` left join `pembekal` on((`tuntutan`.`idPembekal` = `pembekal`.`idPembekal`))) left join `hospital` on((`tuntutan`.`idHospital` = `hospital`.`idHospital`))) left join `epp_waris` on((`tuntutan`.`idwaris` = `epp_waris`.`id`))) join `peribadi` on((`tuntutan`.`idpenjawatawam` = `peribadi`.`idPeribadi`))) join `kategorituntutan` on((`tuntutan`.`idKategoriTuntutan` = `kategorituntutan`.`idKategori`))); ;

-- ----------------------------
-- View structure for papar_peribadi
-- ----------------------------
DROP VIEW IF EXISTS `papar_peribadi`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `papar_peribadi` AS select `peribadi`.`nama` AS `nama`,`peribadi`.`jantina` AS `jantina`,`peribadi`.`idPeribadi` AS `id`,`peribadi`.`tarikhLahir` AS `tarikhLahir`,`peribadi`.`kadPengenalan` AS `ic` from `peribadi`; ;

-- ----------------------------
-- View structure for papar_perkhidmatan
-- ----------------------------
DROP VIEW IF EXISTS `papar_perkhidmatan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `papar_perkhidmatan` AS select `jabatan`.`namaJabatan` AS `jabatan`,`jabatan`.`singkatanJabatan` AS `singkatanJabatan`,`jawatan`.`namaJawatan` AS `jawatan`,`peribadi`.`idPeribadi` AS `id`,`peribadi`.`nama` AS `nama`,`peribadi`.`kadPengenalan` AS `ic`,`peribadi`.`pesara` AS `pesara`,`jabatan`.`idJabatan` AS `idJabatan`,`jawatan`.`idJawatan` AS `idJawatan` from ((`peribadi` left join `jabatan` on((`jabatan`.`idJabatan` = `peribadi`.`idJabatan`))) left join `jawatan` on((`jawatan`.`idJawatan` = `peribadi`.`idJawatan`))); ;

-- ----------------------------
-- View structure for papar_perkhidmatan_pesara
-- ----------------------------
DROP VIEW IF EXISTS `papar_perkhidmatan_pesara`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `papar_perkhidmatan_pesara` AS select `peribadi`.`idPeribadi` AS `id`,`peribadi`.`nama` AS `nama`,`peribadi`.`kadPengenalan` AS `ic`,`jabatan`.`namaJabatan` AS `jabatan`,`jabatan`.`singkatanJabatan` AS `singkatanJabatan`,`jawatan`.`namaJawatan` AS `jawatan` from ((`peribadi` left join `jabatan` on((`jabatan`.`idJabatan` = `peribadi`.`idJabatan`))) left join `jawatan` on((`jawatan`.`idJawatan` = `peribadi`.`idJawatan`))) where (`peribadi`.`pesara` = 'Ya'); ;

-- ----------------------------
-- View structure for papar_perkhidmatan_sedang berkhidmat
-- ----------------------------
DROP VIEW IF EXISTS `papar_perkhidmatan_sedang berkhidmat`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `papar_perkhidmatan_sedang berkhidmat` AS select `jabatan`.`namaJabatan` AS `jabatan`,`jabatan`.`singkatanJabatan` AS `singkatanJabatan`,`jawatan`.`namaJawatan` AS `jawatan`,`peribadi`.`idPeribadi` AS `id`,`peribadi`.`nama` AS `nama`,`peribadi`.`kadPengenalan` AS `ic` from ((`peribadi` left join `jabatan` on((`jabatan`.`idJabatan` = `peribadi`.`idJabatan`))) left join `jawatan` on((`jawatan`.`idJawatan` = `peribadi`.`idJawatan`))) where (`peribadi`.`pesara` = 'Tidak');

-- ----------------------------
-- View structure for papar_perubatan2
-- ----------------------------
DROP VIEW IF EXISTS `papar_perubatan2`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `papar_perubatan2` AS select `tuntutan`.`idTuntutan` AS `idTuntutan`,`peribadi`.`idPeribadi` AS `idPeribadi`,`epp_waris`.`id` AS `id`,`peribadi`.`nama` AS `nama`,`peribadi`.`kadPengenalan` AS `kadPengenalan`,`epp_waris`.`nama` AS `nama_waris`,`epp_waris`.`nokp` AS `ic_waris`,`peribadi`.`pesara` AS `pesara`,`tuntutan`.`jenisPermohonan` AS `jenisPermohonan`,`tuntutan`.`tarikhTerimaPermohonan` AS `tarikhTerimaPermohonan`,`tuntutan`.`tarikhKelulusan` AS `tarikhKelulusan`,`tuntutan`.`jumlahTuntutan` AS `jumlahTuntutan`,`tuntutan`.`jumlahSebenar` AS `jumlahSebenar`,`tuntutan`.`catatanPermohonan` AS `catatanPermohonan`,`tuntutan`.`noFail` AS `noFail`,`jabatan`.`namaJabatan` AS `namaJabatan`,`hubungan`.`namaHubungan` AS `hubungan` from ((((`peribadi` left join `epp_waris` on((`peribadi`.`idPeribadi` = `epp_waris`.`idPesara`))) join `tuntutan` on((`peribadi`.`idPeribadi` = `tuntutan`.`idpenjawatawam`))) join `jabatan` on((`peribadi`.`idJabatan` = `jabatan`.`idJabatan`))) left join `hubungan` on((`epp_waris`.`hubungan` = `hubungan`.`id`))); ;

SET FOREIGN_KEY_CHECKS = 1;
