-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.33-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table smicro.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(32) NOT NULL,
  `details` text NOT NULL,
  `true` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.answers: 48 rows
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` (`id`, `question_id`, `details`, `true`, `created`, `modified`) VALUES
	(1, 1, 'Jawaban salah', 0, '2011-12-06 19:50:39', '2011-12-06 19:50:39'),
	(2, 1, 'Jawaban salah', 0, '2011-12-06 19:50:39', '2011-12-06 19:50:39'),
	(3, 1, 'Jawaban salah', 1, '2011-12-06 19:50:39', '2012-04-08 18:10:04'),
	(4, 1, 'Jawaban Betul', 0, '2011-12-06 19:50:39', '2012-04-08 18:09:56'),
	(5, 2, 'Jawaban Salah', 0, '2011-12-06 19:53:00', '2011-12-06 19:53:00'),
	(6, 2, 'Jawaban Salah', 0, '2011-12-06 19:53:00', '2011-12-06 19:53:00'),
	(7, 2, 'Jawaban Betul', 1, '2011-12-06 19:53:00', '2011-12-06 19:53:00'),
	(8, 2, 'Jawaban Salah', 0, '2011-12-06 19:53:00', '2011-12-06 19:53:00'),
	(9, 3, 'Jawaban Salah', 0, '2011-12-06 19:53:35', '2011-12-06 19:53:35'),
	(10, 3, 'Jawaban Salah', 0, '2011-12-06 19:53:35', '2011-12-06 19:53:35'),
	(11, 3, 'Jawaban Betul', 1, '2011-12-06 19:53:35', '2011-12-06 19:53:35'),
	(12, 3, 'Jawaban Salah', 0, '2011-12-06 19:53:35', '2011-12-06 19:53:35'),
	(13, 4, 'Ini salah', 0, '2012-07-30 22:24:57', '2012-07-30 22:24:57'),
	(14, 4, 'Ini salah', 0, '2012-07-30 22:24:57', '2012-07-30 22:24:57'),
	(15, 4, 'Ini salah', 0, '2012-07-30 22:24:57', '2012-07-30 22:24:57'),
	(16, 4, 'Ini betul', 1, '2012-07-30 22:24:57', '2012-07-30 22:24:57'),
	(17, 5, 'Ini jawaban', 0, '2012-07-30 22:43:19', '2012-07-30 22:43:19'),
	(18, 5, 'Ini jawaban2', 1, '2012-07-30 22:43:19', '2012-07-30 22:43:19'),
	(19, 5, 'Ini jawaban', 0, '2012-07-30 22:43:19', '2012-07-30 22:43:19'),
	(20, 5, 'Ini jawaban', 0, '2012-07-30 22:43:19', '2012-07-30 22:43:19'),
	(21, 6, 'jawaban 1', 0, '2012-07-30 22:51:48', '2012-07-30 22:51:48'),
	(22, 6, 'jawaban 1', 0, '2012-07-30 22:51:48', '2012-07-30 22:51:48'),
	(23, 6, 'jawaban 1', 0, '2012-07-30 22:51:48', '2012-07-30 22:51:48'),
	(24, 6, 'jawaban 1', 1, '2012-07-30 22:51:48', '2012-07-30 22:51:48'),
	(25, 7, 'jh', 0, '2012-07-31 20:16:58', '2012-07-31 20:16:58'),
	(26, 7, 'jk', 0, '2012-07-31 20:16:58', '2012-07-31 20:16:58'),
	(27, 7, 'k', 0, '2012-07-31 20:16:58', '2012-07-31 20:16:58'),
	(28, 7, 'kl', 1, '2012-07-31 20:16:58', '2012-07-31 20:16:58'),
	(29, 8, 'sdf', 0, '2012-07-31 20:25:37', '2012-07-31 20:25:37'),
	(30, 8, 'sdf', 0, '2012-07-31 20:25:37', '2012-07-31 20:25:37'),
	(31, 8, 'sdf', 0, '2012-07-31 20:25:37', '2012-07-31 20:25:37'),
	(32, 8, 'sdf', 1, '2012-07-31 20:25:37', '2012-07-31 20:25:37'),
	(33, 9, 'Jawab', 0, '2012-07-31 20:26:47', '2012-07-31 20:26:47'),
	(34, 9, 'jawab', 0, '2012-07-31 20:26:47', '2012-07-31 20:26:47'),
	(35, 9, 'jawab', 0, '2012-07-31 20:26:47', '2012-07-31 20:26:47'),
	(36, 9, 'jawab', 1, '2012-07-31 20:26:47', '2012-07-31 20:26:47'),
	(37, 10, 'sfd', 0, '2012-07-31 20:34:20', '2012-07-31 20:34:20'),
	(38, 10, 'sfd', 0, '2012-07-31 20:34:20', '2012-07-31 20:34:20'),
	(39, 10, 'sdf', 0, '2012-07-31 20:34:20', '2012-07-31 20:34:20'),
	(40, 10, 'fsd', 1, '2012-07-31 20:34:20', '2012-07-31 20:34:20'),
	(41, 11, 'asf', 0, '2012-07-31 20:36:38', '2012-07-31 20:36:38'),
	(42, 11, 'sdf', 0, '2012-07-31 20:36:38', '2012-07-31 20:36:38'),
	(43, 11, 'sdf', 1, '2012-07-31 20:36:38', '2012-07-31 20:36:38'),
	(44, 11, 'sdf', 0, '2012-07-31 20:36:38', '2012-07-31 20:36:38'),
	(53, 14, 'Jaawab a', 0, '2012-07-31 22:16:35', '2012-07-31 22:16:35'),
	(54, 14, 'Jaawab a', 0, '2012-07-31 22:16:35', '2012-07-31 22:16:35'),
	(55, 14, 'Jaawab a', 0, '2012-07-31 22:16:35', '2012-07-31 22:16:35'),
	(56, 14, 'Jaawab a', 1, '2012-07-31 22:16:35', '2012-07-31 22:16:35');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;


-- Dumping structure for table smicro.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.categories: 11 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `parentId`, `details`, `cover`, `type`, `created`, `modified`) VALUES
	(1, 'BSE(Buku Sekolah Elektronik)', NULL, NULL, NULL, 1, '2014-04-03', '2014-04-03'),
	(2, 'BSE Non Kemendiknas', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
	(3, 'Character Building', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
	(4, 'Life Skill', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
	(5, 'Komputer', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
	(6, 'Fiksi', NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
	(7, 'Dokumenter Sejarah Indonesia', NULL, 'Dokumenter Sejarah Indonesia', NULL, 2, '0000-00-00', '0000-00-00'),
	(8, 'IPTEK', NULL, 'IPTEK', NULL, 2, '0000-00-00', '0000-00-00'),
	(9, 'Life Skill', NULL, 'Life Skill', NULL, 2, '0000-00-00', '0000-00-00'),
	(10, 'Carachter Building', NULL, 'Carachter Building', NULL, 2, '0000-00-00', '0000-00-00'),
	(40, 'Mata Pelajaran', NULL, NULL, NULL, 2, '2014-05-12', '2014-05-12');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table smicro.ebooks
CREATE TABLE IF NOT EXISTS `ebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) DEFAULT NULL,
  `matapelajaran` int(11) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `produksi` varchar(200) DEFAULT NULL,
  `sutradara` varchar(200) DEFAULT NULL,
  `jumlahhalaman` int(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `pdffile` varchar(255) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=336 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.ebooks: 83 rows
/*!40000 ALTER TABLE `ebooks` DISABLE KEYS */;
INSERT INTO `ebooks` (`id`, `kelas`, `matapelajaran`, `author`, `category_id`, `title`, `penerbit`, `pengarang`, `produksi`, `sutradara`, `jumlahhalaman`, `tahun`, `details`, `cover`, `type`, `file`, `pdffile`, `dir`, `mimetype`, `filesize`, `created`, `modified`) VALUES
	(173, NULL, NULL, 1, 1, 'ILMU PENGETAHUAN SOSIAL', 'Penerbit BSE', 'M. Saleh Muhammad, Ade Munajat', NULL, NULL, 110, '2008', 'ILMU\r\nPENGETAHUAN\r\nSOSIAL\r\n', 'files/ebooks/173/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/173/pdf/kelas03_ilmu-pengetahuan-sosial_saleh-muhammad.pdf', NULL, NULL, NULL, '2014-05-11 23:43:49', '2014-05-12 00:26:05'),
	(172, NULL, NULL, 1, 1, 'Ilmu Pengetahuan Alam dan Lingkunganku', 'Penerbit BSE', 'Mulyati Arifin, Mimin Nurjhani K., dan Muslim', NULL, NULL, 130, '2008', 'Ilmu Pengetahuan Alam dan Lingkunganku\r\n', 'files/ebooks/172/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/172/pdf/kelas03_ipa_mulyati.pdf', NULL, NULL, NULL, '2014-05-11 23:41:52', '2014-05-12 00:26:22'),
	(258, NULL, NULL, 1, 1, 'Tematik 1.1 Diriku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '0000', 'Tematik 1.1 Diriku-Buku Guru\r\n', 'files/ebooks/258/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/258/pdf/tematik_diriku_bukuguru.pdf', NULL, NULL, NULL, '2014-06-15 23:43:49', '2014-07-17 18:09:56'),
	(174, NULL, NULL, 1, 1, 'Cerdas Berhitung MATEMATIKA', 'Penerbit BSE', 'Nur Fajariyah, Defi Triratnawati', NULL, NULL, 220, '2008', 'Cerdas Berhitung\r\nMATEMATIKA\r\n', 'files/ebooks/174/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/174/pdf/kelas03_cerdas-berhitung-mtk_nur.pdf', NULL, NULL, NULL, '2014-05-11 23:47:42', '2014-05-12 00:23:22'),
	(178, NULL, NULL, 1, 1, 'CERDAS PENGETAHUAN SOSIAL', 'Penerbit BSE', 'Retno Heny Pujiati, Umi Yuliati', NULL, NULL, 228, '2008', 'CERDAS\r\nPENGETAHUAN\r\nSOSIAL\r\n', 'files/ebooks/178/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/178/pdf/kelas04_sd_cerdas-pengetahuan-sosial_retno.pdf', NULL, NULL, NULL, '2014-05-11 23:59:33', '2014-05-12 00:27:12'),
	(183, NULL, NULL, 1, 1, 'Ilmu Pengetahuan Alam1', 'Penerbit BSE', 'Heri Sulistyanto, Edy Wiyono', NULL, NULL, 160, '0000', 'Ilmu Pengetahuan Alam\r\n', 'files/ebooks/183/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/183/pdf/kelas06_ilmu-pengetahuan-alam_heri-sulistyanto.pdf', NULL, NULL, NULL, '2014-05-12 00:14:31', '2014-05-12 03:47:28'),
	(184, NULL, NULL, 1, 1, 'Bahasa Indonesia Membuatku Cerdas 6', 'Penerbit BSE', 'Edi Warsidi dan Farika', NULL, NULL, 123, '2008', 'Bahasa Indonesia Membuatku Cerdas 6\r\n', 'files/ebooks/184/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/184/pdf/kelas06_bahasa-indonesia-membuatku-cerdas_edi.pdf', NULL, NULL, NULL, '2014-05-12 00:16:42', '2014-05-12 00:28:56'),
	(262, NULL, NULL, 1, 1, 'Tematik 4.1 Indahnya Kebersamaan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '2014', 'Tematik\r\n4.1\r\nIndahnya Kebersamaan-Buku Guru\r\n', 'files/ebooks/262/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/262/pdf/TEMATIK 4.1_INDAHNYA KEBERSAMAAN_BUKU GURU.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(261, NULL, NULL, 1, 1, 'Tematik 1.4 Keluargaku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '2014', 'Tematik\r\n1.3\r\nKeluargaku-Buku Guru\r\n', 'files/ebooks/261/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/261/pdf/tematik_keluargaku_bukuguru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(260, NULL, NULL, 1, 1, 'Tematik 1.3 Kegiatanku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '2014', 'Tematik\r\n1.3\r\nKegiatanku-Buku Guru\r\n', 'files/ebooks/260/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/260/pdf/tematik_kegiatanku_bukuguru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(259, NULL, NULL, 1, 1, 'Tematik 1.2 Kegemaranku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 110, '2008', 'Tematik\r\n1.2\r\nKegemaranku-Buku Guru\r\n', 'files/ebooks/259/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/259/pdf/tematik_kegemaranku_bukuguru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(263, NULL, NULL, 1, 1, 'Tematik 4.2 Selalu Berhemat Energi', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '2014', 'Tematik\r\n4.2\r\nSelelu Berhemat Energi-Buku Guru\r\n', 'files/ebooks/263/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/263/pdf/TEMATIK 4.2_SELALU BERHEMAT ENERGI_BUKU GURU.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(264, NULL, NULL, 1, 1, 'Tematik 4.3 Peduli Terhadap Makhluk Hidup', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '0000', 'Tematik\r\n4.3\r\nPeduli Terhadap Makhluk Hidup-Buku Guru\r\n', 'files/ebooks/264/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/264/pdf/TEMATIK 4.3_PEDULI TERHADAP MAKHLUK HIDUP_BUKU GURU.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-17 18:55:34'),
	(265, NULL, NULL, 1, 1, 'Tematik 4.4 Berbagai Pekerjaan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 112, '2014', 'Tematik\r\n4.4\r\nBerbagai Pekerjaan-Buku Guru\r\n', 'files/ebooks/265/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/265/pdf/TEMATIK TEMA 4_BUKU_GURU.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(268, NULL, NULL, 1, 1, 'Pendidikan Agama 01 Islam', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 82, '2014', 'Pendidikan Agama 01 Islam-buku siswa', 'files/ebooks/268/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/268/pdf/Kelas_01_SD_Agama_Islam_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(266, NULL, NULL, 1, 1, 'Pendidikan Agama 01 Budha dan Budi Pekerti', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Pendidikan Agama 01 Budha dan Budi Pekerti-buku siswa', 'files/ebooks/266/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/266/pdf/Kelas_01_SD_Agama_Buddha_Siswa', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(267, NULL, NULL, 1, 1, 'Pendidikan Agama 01 Hindu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 82, '2014', 'Pendidikan Agama 01 Hindu-buku siswa', 'files/ebooks/267/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/267/pdf/Kelas_01_SD_Agama_Hindu_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(269, NULL, NULL, 1, 1, 'Pendidikan Agama 01 Katolik', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 114, '2014', 'Pendidikan Agama 01 Katolik-buku siswa', 'files/ebooks/269/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/269/pdf/Kelas_01_SD_Agama_Katolik_Siswa', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(270, NULL, NULL, 1, 1, 'Pendidikan Agama 01 Khonghucu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 130, '2014', 'Pendidikan Agama 01 Khonghucu-buku siswa', 'files/ebooks/270/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/270/pdf/Kelas_01_SD_Agama_Khonghucu_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(271, NULL, NULL, 1, 1, 'Pendidikan Agama 01 Kristen', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 114, '2014', 'Pendidikan Agama 01 Kristen-buku siswa', 'files/ebooks/271/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/271/pdf/Kelas_01_SD_Agama_Kristen_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(272, NULL, NULL, 1, 1, 'Tematik 1.5 Pengalamanku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 114, '2014', 'Tematik 1.5 Pengalamanku-buku siswa', 'files/ebooks/272/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/272/pdf/Kelas_01_SD_Tematik_5_Pengalamanku_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(273, NULL, NULL, 1, 1, 'Tematik 1.6 Lingkungan Bersih Sehat dan Asri', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Tematik 1.6 Lingkungan Bersih Sehat dan Asri-buku siswa', 'files/ebooks/273/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/273/pdf/Kelas_01_SD_Tematik_6_Lingkungan_Bersih_Sehat_dan_Asri_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(274, NULL, NULL, 1, 1, 'Tematik 1.7 Benda Hewan dan Tanaman disekitarku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Tematik 1.7 Benda Hewan dan Tanaman disekitarku-buku siswa', 'files/ebooks/274/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/274/pdf/Kelas_01_SD_Tematik_7_Benda_Hewan_dan_Tanaman_di_Sekitarku_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(275, NULL, NULL, 1, 1, 'Tematik 1.8 Peristiwa Alam', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Tematik 1.8 Tematik 1.8 Peristiwa Alam-buku siswa', 'files/ebooks/275/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/275/pdf/Kelas_01_SD_Tematik_8_Peristiwa_Alam_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(276, NULL, NULL, 1, 1, 'Tematik 2.1 Hidup Rukun', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 168, '2014', 'Tematik 2.1 Hidup Rukun-buku siswa', 'files/ebooks/276/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/276/pdf/Kelas_02_SD_Tematik_1_Hidup_Rukun_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(277, NULL, NULL, 1, 1, 'Tematik 2.3 Tugasku Sehari hari', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 168, '2014', 'Tematik 2.3 Tugasku Sehari hari-buku siswa', 'files/ebooks/277/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/277/pdf/Kelas_02_SD_Tematik_3_Tugasku_Sehari-hari_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(278, NULL, NULL, 1, 1, 'Tematik 2.5 Hidup Bersih dan Sehat', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 153, '2014', 'Tematik 2.5 Hidup Bersih dan Sehat-buku siswa', 'files/ebooks/278/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/278/pdf/Kelas_02_SD_Tematik_5_Hidup_Bersih_dan_Sehat_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(279, NULL, NULL, 1, 1, 'Tematik 2.6 Bumi dan Matahari', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 169, '2014', 'Tematik 2.6 Bumi dan Matahari-buku siswa', 'files/ebooks/279/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/279/pdf/Kelas_02_SD_Tematik_6_Air_Bumi_dan_Matahari_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(280, NULL, NULL, 1, 1, 'Tematik 2.7 Merawat Hewan dan Tumbuhan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 213, '2014', 'Tematik 2.7 Merawat Hewan dan Tumbuhan-buku siswa', 'files/ebooks/280/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/280/pdf/Kelas_02_SD_Tematik_7_Merawat_Hewan_dan_Tumbuhan_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(281, NULL, NULL, 1, 1, 'Tematik 2.8 Keselamatan di Rumah dan Perjalanan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 177, '2014', 'Tematik 2.8 Keselamatan di Rumah dan Perjalanan-buku siswa', 'files/ebooks/281/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/281/pdf/Kelas_02_SD_Tematik_8_Keselamatan_di_Rumah_dan_Perjalanan_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(282, NULL, NULL, 1, 1, 'Pendidikan Agama 04 Budha', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 146, '2014', 'Pendidikan Agama 04 Budha-buku siswa', 'files/ebooks/282/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/282/pdf/Kelas_04_SD_Agama_Buddha_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(283, NULL, NULL, 1, 1, 'Pendidikan Agama 04 Hindu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 98, '2014', 'Pendidikan Agama 04 Hindu-buku siswa', 'files/ebooks/283/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/283/pdf/Kelas_04_SD_Agama_Hindu_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(284, NULL, NULL, 1, 1, 'Pendidikan Agama 04 Islam', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 130, '2014', 'Pendidikan Agama 04 Islam-buku siswa', 'files/ebooks/284/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/284/pdf/Kelas_04_SD_Agama_Islam_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(285, NULL, NULL, 1, 1, 'Pendidikan Agama 04 Katolik', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 145, '2014', 'Pendidikan Agama 04 Katolik-buku siswa', 'files/ebooks/285/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/285/pdf/Kelas_04_SD_Agama_Katolik_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(286, NULL, NULL, 1, 1, 'Pendidikan Agama 04 Khonghucu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 162, '2014', 'Pendidikan Agama 04 Khonghucu-buku siswa', 'files/ebooks/286/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/286/pdf/Kelas_04_SD_Agama_Khonghucu_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(287, NULL, NULL, 1, 1, 'Pendidikan Agama 04 Kristen', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 98, '2014', 'Pendidikan Agama 04 Kristen-buku siswa', 'files/ebooks/287/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/287/pdf/Kelas_04_SD_Agama_Kristen_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(288, NULL, NULL, 1, 1, 'Tematik 4.5 Pahlawanku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Tematik 4.5 Pahlawanku-buku siswa', 'files/ebooks/288/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/288/pdf/Kelas_04_SD_Tematik_5_Pahlawanku_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(289, NULL, NULL, 1, 1, 'Tematik 4.6 Indahnya Negeriku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Tematik 4.6 Indahnya Negeriku-buku siswa', 'files/ebooks/289/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/289/pdf/Kelas_04_SD_Tematik_6_Indahnya_Negeriku_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(290, NULL, NULL, 1, 1, 'Tematik 4.7 Cita Citaku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Tematik 4.7 Cita Citaku', 'files/ebooks/290/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/290/pdf/Kelas_04_SD_Tematik_7_Cita-Citaku_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(291, NULL, NULL, 1, 1, 'Tematik 4.8 Tempat Tinggalku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Tematik 4.8 Tempat Tinggalku', 'files/ebooks/291/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/291/pdf/Kelas_04_SD_Tematik_8_Tempat_Tinggalku_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(292, NULL, NULL, 1, 1, 'Tematik 4.9 Makananku Sehat dan Bergizi', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Tematik 4.9 Makananku Sehat dan Bergizi-buku siswa', 'files/ebooks/292/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/292/pdf/Kelas_04_SD_Tematik_9_Makananku_Sehat_dan_Bergizi_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(293, NULL, NULL, 1, 1, 'Tematik 5.1 Benda Benda di Lingkungan Sekitarku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 177, '2014', 'Tematik 5.1 Benda Benda di Lingkungan Sekitarku', 'files/ebooks/293/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/293/pdf/Kelas_05_SD_Tematik_1_Benda-benda_di_Lingkungan_Sekitarku_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(294, NULL, NULL, 1, 1, 'Tematik 5.2 Peristiwa dalam Kehidupan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 137, '2014', 'Tematik 5.2 Peristiwa dalam Kehidupan-buku siswa', 'files/ebooks/294/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/294/pdf/Kelas_05_SD_Tematik_2_Peristiwa_Dalam_Kehidupan_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(295, NULL, NULL, 1, 1, 'Tematik 5.3 Kerukunan dalam Bermayarakat', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 121, '2014', 'Tematik 5.3 Kerukunan dalam Bermayarakat-buku siswa', 'files/ebooks/295/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/295/pdf/Kelas_05_SD_Tematik_3_Kerukunan_Dalam_Bermasyarakat_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(296, NULL, NULL, 1, 1, 'Tematik 5.4 Sehat itu Penting', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Tematik 5.4 Sehat itu Penting', 'files/ebooks/296/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/296/pdf/Kelas_05_SD_Tematik_4_Sehat_Itu_Penting_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(297, NULL, NULL, 1, 1, 'Tematik 5.5 Bangga Sebagai Bangsa Indonesia', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 145, '2014', 'Tematik 5.5 Bangga Sebagai Bangsa Indonesia-buku siswa', 'files/ebooks/297/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/297/pdf/Kelas_05_SD_Tematik_5_Bangga_Sebagai_Bangsa_Indonesia_Siswa.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(298, NULL, NULL, 1, 1, 'Pendidikan Agama 1 Budha', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 145, '2014', 'Pendidikan Agama 1 Budha-buku guru', 'files/ebooks/298/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/298/pdf/Kelas_01_SD_Agama_Buddha_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(299, NULL, NULL, 1, 1, 'Pendidikan Agama 1 Hindu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Pendidikan Agama 1 Hindu-buku guru', 'files/ebooks/299/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/299/pdf/Kelas_01_SD_Agama_Hindu_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(300, NULL, NULL, 1, 1, 'Pendidikan Agama 1 Islam', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Pendidikan Agama 1 Islam-buku guru', 'files/ebooks/300/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/300/pdf/Kelas_01_SD_Agama_Islam_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(301, NULL, NULL, 1, 1, 'Pendidikan Agama 1 Katolik', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 145, '2014', 'Pendidikan Agama 1 Katolik-buku guru', 'files/ebooks/301/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/301/pdf/Kelas_01_SD_Agama_Katolik_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(302, NULL, NULL, 1, 1, 'Pendidikan Agama 1 Khonghucu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 145, '2014', 'Pendidikan Agama 1 Khonghucu-buku guru', 'files/ebooks/302/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/302/pdf/Kelas_01_SD_Agama_Khonghucu_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(303, NULL, NULL, 1, 1, 'Pendidikan Agama 1 Kristen', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 81, '2014', 'Pendidikan Agama 1 Kristen-buku guru', 'files/ebooks/303/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/303/pdf/Kelas_01_SD_Agama_Kristen_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(304, NULL, NULL, 1, 1, 'Tematik 1.5 Pengalamanku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 137, '2014', 'Tematik 1.5 Pengalamanku-buku guru', 'files/ebooks/304/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/304/pdf/Kelas_01_SD_Tematik_5_Pengalamanku_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(305, NULL, NULL, 1, 1, 'Tematik 1.6 Lingkungan Bersih Sehat dan Asri', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Tematik 1.6 Lingkungan Bersih Sehat dan Asri-buku guru', 'files/ebooks/305/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/305/pdf/Kelas_01_SD_Tematik_6_Lingkungan_Bersih_Sehat_dan_Asri_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(306, NULL, NULL, 1, 1, 'Tematik 1.7 Benda Hewan dan Tanaman di Sekitarku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 137, '2014', 'Tematik 1.7 Benda Hewan dan Tanaman di Sekitarku-buku guru', 'files/ebooks/306/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/306/pdf/Kelas_01_SD_Tematik_7_Benda_Hewan_dan_Tanaman_di_Sekitarku_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(307, NULL, NULL, 1, 1, 'Tematik 1.8 Peristiwa Alam', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 137, '2014', 'Tematik 1.8 Peristiwa Alam-buku guru', 'files/ebooks/307/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/307/pdf/Kelas_01_SD_Tematik_8_Peristiwa_Alam_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(308, NULL, NULL, 1, 1, 'Tematik 2.1 Hidup Rukun', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 209, '2014', 'Tematik 2.1 Hidup Rukun-buku guru', 'files/ebooks/308/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/308/pdf/Kelas_02_SD_Tematik_1_Hidup_Rukun_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(309, NULL, NULL, 1, 1, 'Tematik 2.2 Bermain di Lingkungan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 217, '2014', 'Tematik 2.2 Bermain di Lingkungan-buku guru', 'files/ebooks/309/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/309/pdf/Kelas_02_SD_Tematik_2_Bermain_di_Lingkunganku_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(310, NULL, NULL, 1, 1, 'Tematik 2.3 Tugasku Sehari-hari', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 225, '2014', 'Tematik 2.3 Tugasku Sehari-hari-buku guru', 'files/ebooks/310/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/310/pdf/Kelas_02_SD_Tematik_3_Tugasku_Sehari-hari_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(311, NULL, NULL, 1, 1, 'Tematik 2.4 Aku dan Sekolahku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 201, '2014', 'Tematik 2.4 Aku dan Sekolahku-buku guru', 'files/ebooks/311/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/311/pdf/Kelas_02_SD_Tematik_4_Aku_dan_Sekolahku_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(312, NULL, NULL, 1, 1, 'Tematik 2.5 Hidup Bersih dan Sehat', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 225, '2014', 'Tematik 2.5 Hidup Bersih dan Sehat-buku guru', 'files/ebooks/312/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/312/pdf/Kelas_02_SD_Tematik_5_Hidup_Bersih_dan_Sehat_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(313, NULL, NULL, 1, 1, 'Tematik 2.6 Bumi dan Matahari', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 213, '2014', 'Tematik 2.5 Hidup Bersih dan Sehat-buku guru', 'files/ebooks/313/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/313/pdf/Kelas_02_SD_Tematik_6_Bumi_dan_Matahari_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(314, NULL, NULL, 1, 1, 'Tematik 2.7 Merawat Hewan dan Tumbuhan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 241, '2014', 'Tematik 2.7 Merawat Hewan dan Tumbuhan-buku guru', 'files/ebooks/314/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/314/pdf/Kelas_02_SD_Tematik_7_Merawat_Hewan_dan_Tumbuhan_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(315, NULL, NULL, 1, 1, 'Tematik 2.8 Keselamatan di Rumah dan Perjalanan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 201, '2014', 'Tematik 2.8 Keselamatan di Rumah dan Perjalanan-buku guru', 'files/ebooks/315/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/315/pdf/Kelas_02_SD_Tematik_8_Keselamatan_di_Rumah_dan_Perjalanan_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(316, NULL, NULL, 1, 1, 'Pendidikan Agama 4 Budda', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 177, '2014', 'Pendidikan Agama 4 Budda-buku guru', 'files/ebooks/316/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/316/pdf/Kelas_04_SD_Agama_Buddha_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(317, NULL, NULL, 1, 1, 'Pendidikan Agama 4 Hindu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 113, '2014', 'Pendidikan Agama 4 Hindu-buku guru', 'files/ebooks/317/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/317/pdf/Kelas_04_SD_Agama_Hindu_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(318, NULL, NULL, 1, 1, 'Pendidikan Agama 4 Islam', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Pendidikan Agama 4 Islam-buku guru', 'files/ebooks/318/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/318/pdf/Kelas_04_SD_Agama_Islam_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(319, NULL, NULL, 1, 1, 'Pendidikan Agama 4 Katolik', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 177, '2014', 'Pendidikan Agama 4 Katolik-buku guru', 'files/ebooks/319/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/319/pdf/Kelas_04_SD_Agama_Katolik_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(320, NULL, NULL, 1, 1, 'Pendidikan Agama 4 Khonghucu', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 273, '2014', 'Pendidikan Agama 4 Khonghucu-buku guru', 'files/ebooks/320/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/320/pdf/Kelas_04_SD_Agama_Khonghucu_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(321, NULL, NULL, 1, 1, 'Pendidikan Agama 4 Kristen', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 129, '2014', 'Pendidikan Agama 4 Kristen-buku guru', 'files/ebooks/321/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/321/pdf/Kelas_04_SD_Agama_Kristen_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(322, NULL, NULL, 1, 1, 'Tematik 4.1 Indahnya Kebersamaan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.1 Indahnya Kebersamaan-buku guru', 'files/ebooks/322/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/322/pdf/Kelas_04_SD_Tematik_1_Indahnya_Kebersamaan_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(323, NULL, NULL, 1, 1, 'Tematik 4.2 Selalu Berhemat Energi', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.2 Selalu Berhemat Energi-buku guru', 'files/ebooks/323/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/323/pdf/Kelas_04_SD_Tematik_2_Selalu_Berhemat_Energi_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(324, NULL, NULL, 1, 1, 'Tematik 4.3 Peduli Terhadap Makluk Hidup', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.3 Peduli Terhadap Makluk Hidup-buku guru', 'files/ebooks/324/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/324/pdf/Kelas_04_SD_Tematik_3_Peduli_Terhadap_Makhluk_Hidup_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(325, NULL, NULL, 1, 1, 'Tematik 4.4 Berbagi Pekerjaan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.4 Berbagi Pekerjaan-buku guru', 'files/ebooks/325/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/325/pdf/Kelas_04_SD_Tematik_4_Berbagai_Pekerjaan_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(326, NULL, NULL, 1, 1, 'Tematik 4.5 Pahlawanku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.5 Pahlawanku-buku guru', 'files/ebooks/326/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/326/pdf/Kelas_04_SD_Tematik_5_Pahlawanku_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(327, NULL, NULL, 1, 1, 'Tematik 4.6 Indahnya Negeriku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.6 Indahnya Negeriku-buku guru', 'files/ebooks/327/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/327/pdf/Kelas_04_SD_Tematik_6_Indahnya_Negeriku_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(328, NULL, NULL, 1, 1, 'Tematik 4.7 Cita-citaku', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.7 Cita-citaku-buku guru', 'files/ebooks/328/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/328/pdf/Kelas_04_SD_Tematik_7_Cita-Citaku_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(329, NULL, NULL, 1, 1, 'Tematik 4.9 Makananku Sehat dan Bergizi', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 161, '2014', 'Tematik 4.9 Makananku Sehat dan Bergizi-buku guru', 'files/ebooks/329/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/329/pdf/Kelas_04_SD_Tematik_9_Makananku_Sehat_dan_Bergizi_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(330, NULL, NULL, 1, 1, 'Tematik 5.1 Benda-benda di Lingkungan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 221, '2014', 'Tematik 5.1 Benda-benda di Lingkungan-buku guru', 'files/ebooks/330/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/330/pdf/Kelas_05_SD_Tematik_1_Benda-benda_di_Lingkungan_Sekitar_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(331, NULL, NULL, 1, 1, 'Tematik 5.2 Peristiwa dalam Kehidupan', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 209, '2014', 'Tematik 5.2 Peristiwa dalam Kehidupan-buku guru', 'files/ebooks/331/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/331/pdf/Kelas_05_SD_Tematik_2_Peristiwa_dalam_Kehidupan_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(332, NULL, NULL, 1, 1, 'Tematik 5.3 Kerukunan dalam Bermasyakat', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 189, '2014', 'Kerukunan dalam Bermasyakat-buku guru', 'files/ebooks/332/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/332/pdf/Kelas_05_SD_Tematik_3_Kerukunan_dalam_Bermasyarakat_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(333, NULL, NULL, 1, 1, 'Tematik 5.4 Sehat itu Penting', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 209, '2014', 'Tematik 5.4 Sehat itu Penting-buku guru', 'files/ebooks/333/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/333/pdf/Kelas_05_SD_Tematik_4_Sehat_Itu_Penting_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05'),
	(334, NULL, NULL, 1, 1, 'Tematik 5.5 Bangga Sebagai Bangsa Indonesia', 'Kementrian Pendidikan dan Kebudayaan', 'Kementrian Pendidikan dan Kebudayaan', NULL, NULL, 206, '2014', 'Tematik 5.5 Bangga Sebagai Bangsa Indonesia-buku guru', 'files/ebooks/334/pageflipdata/pages/cover.jpg', 1, '', 'files/ebooks/334/pdf/Kelas_05_SD_Tematik_5_Bangga_Sebagai_Bangsa_Indonesia_Guru.pdf', NULL, NULL, NULL, '2014-07-16 23:43:49', '2014-07-16 00:26:05');
/*!40000 ALTER TABLE `ebooks` ENABLE KEYS */;


-- Dumping structure for table smicro.grades
CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.grades: 6 rows
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
INSERT INTO `grades` (`id`, `title`, `details`, `created`, `modified`) VALUES
	(1, 1, 'Kelas 1 (SD)', NULL, NULL),
	(2, 2, 'Kelas 2 (SD)', NULL, NULL),
	(3, 3, 'Kelas 3 (SD)', '2014-08-24 12:51:35', '2015-08-24 12:51:36'),
	(4, 4, 'Kelas 4 (SD)', '2015-08-24 12:51:48', '2015-08-24 12:51:48'),
	(5, 5, 'Kelas 5 (SD)', '2015-08-24 12:52:09', '2015-08-24 12:52:09'),
	(6, 6, 'Kelas 6 (SD)', '2015-08-24 12:52:24', '2015-08-24 12:52:25');
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;


-- Dumping structure for table smicro.halamen
CREATE TABLE IF NOT EXISTS `halamen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) NOT NULL,
  `template_type` int(11) NOT NULL,
  `content` text,
  `file` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_extension` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.halamen: 3 rows
/*!40000 ALTER TABLE `halamen` DISABLE KEYS */;
INSERT INTO `halamen` (`id`, `lesson_id`, `template_type`, `content`, `file`, `file_type`, `file_extension`, `order`, `created`, `modified`) VALUES
	(125, 192, 1, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', '', '', '', 2, '2015-07-29 19:22:22', '2015-07-29 19:25:03'),
	(126, 0, 0, NULL, NULL, NULL, NULL, 0, '2015-07-29 19:22:28', '2015-07-29 19:22:28'),
	(127, 192, 2, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', 'screen-shot-2015-07-24-at-10.16.48-pm_WxqvIGcg.png', 'image', 'png', 1, '2015-07-29 19:24:48', '2015-07-29 19:25:03'),
	(128, 192, 3, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', 'screen-shot-2015-07-24-at-10.16.48-pm_WxqvIGcg.png', 'image', 'png', 1, '2015-07-29 19:24:48', '2015-07-29 19:25:03'),
	(129, 192, 4, '<h1>Ini Adalah Contoh Judul</h1>\r\n\r\n<p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p>\r\n\r\n<p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<h3><strong>Sub judul</strong></h3>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>\r\n', 'screen-shot-2015-07-24-at-10.16.48-pm_WxqvIGcg.png', 'image', 'png', 1, '2015-07-29 19:24:48', '2015-07-29 19:25:03');
/*!40000 ALTER TABLE `halamen` ENABLE KEYS */;


-- Dumping structure for table smicro.lessons
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL DEFAULT 'blue',
  `description` text NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `kelompok` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=228 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.lessons: 19 rows
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
INSERT INTO `lessons` (`id`, `title`, `author`, `color`, `description`, `pelajaran_id`, `grade_id`, `kelompok`, `created`, `modified`) VALUES
	(192, 'Menghitung Bilangan Bulat', 'Taufiq Ridha', 'blue', 'Ini adalah contoh bahan ajar yang sudah dibuat', 1, 2, '', '2014-06-23 00:58:17', '2014-07-02 09:29:41'),
	(193, 'Menguak Jejak Proklamasi', 'Adden', 'green', 'Ini deskriosi', 11, 6, '', '2014-06-23 12:19:17', '2015-07-29 19:27:12'),
	(207, 'Menari diatas awan', 'Malik Ginting .drs', 'yellow', 'Deskripsi anatomi', 11, 6, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(208, 'Ganda', 'Gultom', 'blue', 'Menjumlah dalam kata', 11, 6, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(209, 'Bla bla bla', 'Adden', 'green', 'Deskripsi bila tertera ajahhh', 1, 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(210, 'Dudidudidam', 'Gultom', 'grey', 'ablalala allgldfll adsfsddff llalala', 3, 3, '', '2015-08-18 11:15:36', '0000-00-00 00:00:00'),
	(211, 'afafsdfasdfsd', 'rrgwg', 'yellow', 'sdfsdsfaasdfasd\r\nsdfsfsfsdf', 3, 3, '', '2015-08-19 14:35:29', '2015-08-19 14:35:29'),
	(216, 'asdsad', 'asdasd', 'blue', 'sadasdasd', 8, 2, '', '2015-08-19 18:29:38', '2015-08-19 18:29:38'),
	(217, 'gultomic', '', 'blue', '', 8, 2, '', '2015-08-19 18:31:02', '2015-08-19 18:31:02'),
	(218, 'asdasdasd', '', 'blue', '', 8, 4, '', '2015-08-19 18:34:41', '2015-08-19 18:34:41'),
	(219, 'asdssdasdasdasd', 'sadasdsad', 'blue', 'asdasd', 4, 5, '', '2015-08-19 18:35:41', '2015-08-19 18:35:41'),
	(220, 'asdasd', 'asdasd', 'blue', 'asdasd', 3, 5, '', '2015-08-19 18:42:13', '2015-08-19 18:42:13'),
	(221, 'Penelitian 1', 'grup 1', 'blue', 'apalah apalah', 3, 4, '', '2015-08-19 18:43:07', '2015-08-19 18:43:07'),
	(222, 'dsht45635', 'asdfsdfgg', 'blue', 'errerergw', 3, 3, 'aegererererer', '2015-08-20 14:44:31', '2015-08-20 14:44:31'),
	(223, '2342454egesggdfgdsgsf', 'erger5353', 'blue', 'sdfg53t43', 4, 2, 'sdfgerge33\r\ngafaergaer\r\nafgaeer', '2015-08-20 14:47:57', '2015-08-20 14:47:57'),
	(224, 'wwfwwefwfwewe', 'WFWefw', 'blue', '34t3frgarg', 6, 3, 'dghfgdfhfdghf\r\nfgh\r\nfgh\r\ngdfh', '2015-08-20 15:23:38', '2015-08-20 15:23:38'),
	(225, 'sasaggfdsfdgs', 'sdfgsdfgdf', 'blue', 'rhwty4tr', 10, 5, 'sgfesg', '2015-08-20 15:34:55', '2015-08-20 15:34:55'),
	(226, 'afafsdfasdfsd', 'grup 1', 'yellow', 'sadasdasd', 9, 4, 'shsrhsrth\r\nsh\r\ns\r\n', '2015-08-20 15:35:31', '2015-08-20 15:35:31'),
	(227, 'gegaegeergerg', 'aegagfag', 'green', 'afgafg', 6, 3, 'afdgafgagfa\r\nafdg\r\nafg\r\nafg\r\nafg', '2015-08-20 16:07:20', '2015-08-20 16:07:20');
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;


-- Dumping structure for table smicro.pelajarans
CREATE TABLE IF NOT EXISTS `pelajarans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.pelajarans: 12 rows
/*!40000 ALTER TABLE `pelajarans` DISABLE KEYS */;
INSERT INTO `pelajarans` (`id`, `nama`, `alias`, `created`, `modified`) VALUES
	(1, 'Matematika', 'matematika', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(2, 'Fisika', 'fisika', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(3, 'Biologi', 'biologi', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(4, 'Bahasa Indonesia', 'bahasa-indonesia', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(5, 'Bahasa Inggris', 'bahasa-inggris ', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(6, 'PPKN', 'ppkn', '2011-11-26 02:10:08', '2011-11-26 02:10:08'),
	(8, 'Kimia', 'kimia', '2012-06-11 04:57:13', '2012-06-11 04:57:13'),
	(9, 'TIK', 'tik', '2012-06-11 04:57:27', '2012-06-11 04:57:27'),
	(10, 'Sosiologi', 'sosiologi', '2012-06-11 04:57:38', '2012-06-11 04:57:38'),
	(11, 'Sejarah', 'sejarah', '2012-06-11 04:58:09', '2012-06-11 04:58:09'),
	(12, 'Geografi', 'geografi', '2012-06-11 04:58:20', '2012-06-11 04:58:20'),
	(13, 'Ekonomi', 'ekonomi', '2012-06-11 04:58:27', '2012-06-11 04:58:27');
/*!40000 ALTER TABLE `pelajarans` ENABLE KEYS */;


-- Dumping structure for table smicro.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(32) DEFAULT NULL,
  `tgl_berdiri` year(4) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `license_key` varchar(100) DEFAULT NULL,
  `val_sync` varchar(100) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `time_ganda_mudah` int(12) NOT NULL,
  `time_ganda_sedang` int(12) NOT NULL,
  `time_ganda_sulit` int(12) NOT NULL,
  `time_essay_mudah` int(12) NOT NULL,
  `time_essay_sedang` int(12) NOT NULL,
  `time_essay_sulit` int(12) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.profiles: 1 rows
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`id`, `name`, `alamat`, `no_tlp`, `tgl_berdiri`, `status`, `email`, `license_key`, `val_sync`, `image`, `time_ganda_mudah`, `time_ganda_sedang`, `time_ganda_sulit`, `time_essay_mudah`, `time_essay_sedang`, `time_essay_sulit`, `created`, `modified`) VALUES
	(1, 'asdfsdfsdfsdfsdfsdfsdfdsf', 'asdfsdfsdfsdfsdfsdfsdfdsf', '324234234234', '1987', 1, 'taufiq.ridha@gmail.com', '1-1189-8-1435909242-c9f0f895', 'd68c6759a1ef6d43dadaeebbda576d2da244babf', 'img/2011-09-01-200407tut-wuri-handayani.png', 1, 2, 3, 1, 2, 3, '2015-07-03 16:46:18', '2015-07-03 16:46:18');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;


-- Dumping structure for table smicro.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quizz_id` int(32) NOT NULL,
  `question` text NOT NULL,
  `tipe` tinyint(2) NOT NULL,
  `level` int(3) NOT NULL,
  `kelas` int(3) NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `target` tinyint(2) NOT NULL,
  `point_nilai` int(11) DEFAULT NULL,
  `answer2` text,
  `answer_a` text NOT NULL,
  `answer_b` text NOT NULL,
  `answer_c` text NOT NULL,
  `answer_d` text NOT NULL,
  `answer_true` tinyint(2) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=239 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.questions: 121 rows
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `quizz_id`, `question`, `tipe`, `level`, `kelas`, `pelajaran_id`, `mapel`, `target`, `point_nilai`, `answer2`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `answer_true`, `images`, `video`, `created`, `modified`) VALUES
	(118, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, 'files/quizz/download_(2).jpg', '', '2014-03-26 12:36:13', '2014-05-13 04:25:34'),
	(117, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13'),
	(116, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13'),
	(115, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13'),
	(114, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13'),
	(113, 0, 'Contoh Soal hasfgsdgfjh', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-03-26 12:36:13', '2014-03-26 12:36:13'),
	(112, 0, 'Ini soal baru sekali', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'ini jawaban a', 'ini jawaban b', 'ini jawaban c', 'ini jawaban d', 2, 'files/quizz/film_ss.png', 'files/quizz/bloodcare_tvc1.flv', '2014-03-26 12:30:57', '2014-05-13 04:55:30'),
	(59, 0, 'entrybaru', 1, 2, 1, 0, 'pkn', 1, NULL, NULL, 'sdf', 'sdf', 'sf', 'dsf', 3, NULL, NULL, '2012-08-11 01:48:31', '2012-08-11 01:48:31'),
	(111, 0, 'Latar belakang lahirnya pemerintahan reformasi adalah ....', 1, 1, 1, 0, 'pkn', 2, NULL, NULL, 'adanya penyimpangan-penyimpangan pemerintah Orde Baru', 'utang luar negeri yang amat besar samliai tidak terbayar', 'para mahasiswa sudah bosan dengan gaya pemerintahan Pak Harto', 'untuk menciptakan pemerintahan yang terbuka, jujur, dan demokratis', 4, NULL, NULL, '2014-03-26 00:34:11', '2014-03-26 00:34:11'),
	(109, 0, 'Contoh soal essay', 2, 1, 1, 0, 'pkn', 1, NULL, 'Ini adalah jawaban essay', '', '', '', '', 0, NULL, NULL, '2014-03-25 22:28:16', '2014-03-25 22:28:26'),
	(110, 0, 'Perubahan suatu bangsa menuju kearah kondisi yang lebih baik atau buruk pada\r\nhakikatnya', 1, 1, 1, 0, 'pkn', 2, NULL, NULL, 'ditentukan dalam kerjsama regional', 'sangat dipengaruhi oleh situasi dunia', 'ditentukan oleh situasi negara-negara tetangga', 'tergantung dari usaha bangsa itu sendiri', 4, NULL, NULL, '2014-03-26 00:33:26', '2014-03-26 00:33:26'),
	(108, 0, 'Keadilan sosial dalam good governance (kebijakan pemerintah yang baik) terimplementasi \r\ndalam:', 1, 1, 1, 0, 'pkn', 2, NULL, NULL, 'pemerataan pembangunan dan hasil-hasilnya', 'pertumbuhan ekonomi yang cukup tinggi', 'stabilitas nasional yang sehat dan dinamis', 'program Inpres Desa Tertinggal (IDT)', 3, NULL, NULL, '2014-03-25 22:21:18', '2014-03-26 00:29:47'),
	(98, 0, 'Dalam mencapai tujuan politik bebas aktif, Indonesia pada dasarnya menjalankan politik ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'netral', 'damai', 'isolasi', 'terpadu', 1, NULL, NULL, '2014-03-25 21:59:37', '2014-03-25 21:59:37'),
	(99, 0, 'Segala kebijakan pemerintah yang berkaitan dengan negara lain atau subjek hukum\r\ninternasional lain guna mewujudkan tujuan nasional, disebut ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'kerja sama intemasional', 'perjanjian internasional', 'hubungan diplomatik', 'hubungan luar negeri', 2, NULL, NULL, '2014-03-25 22:00:23', '2014-03-25 22:00:23'),
	(100, 0, 'Pada dasarnya politik yang dijalankan dalam kebijakan pemerintah Indonesia mengabdi pada kepentingan ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'nasional', 'internasional', 'manusia', 'dunia', 3, NULL, NULL, '2014-03-25 22:01:16', '2014-03-25 22:01:16'),
	(101, 0, 'Menurut ketentuan hukum yang berlaku, lembaga yang mewakili pelaksanaan politik luar \r\nnegeri di negeri asing adalah ...', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Presiden Indonesia', 'Menteri Luar Negeri', 'Dubes Luar Biasa', 'Corp Consulat', 2, NULL, NULL, '2014-03-25 22:01:59', '2014-03-25 22:01:59'),
	(102, 0, 'Arah politik luar negeri bebas aktif berorientasi dan menitikberatkan pada hal', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'solidaritas antara negara-negara persernakmuran', 'peningkatan kemandirian bangsa lain', 'upaya menjadikan Indonesia dikenal dunia', 'kerja sama internasional bagi kesejahteraan pejabat', 3, NULL, NULL, '2014-03-25 22:02:46', '2014-03-25 22:02:46'),
	(103, 0, 'Dalam penjelasan Pasal 32 UUD 1945 yang dimaksud kebudayaan bangsa adalah ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'kebudayaan yang timbul sebagai usaha budi daya rakyat', 'seluruh kebudayaan yang Aa di Indonesia', 'kebudayaan daerah yang masih terpelihara', 'perpaduan unsur budaya daerah dengan budaya asing', 3, NULL, NULL, '2014-03-25 22:03:38', '2014-03-25 22:03:38'),
	(104, 0, 'Pelaksanaan Pembangunan Nasional sebagai pengamalan Pancasila, khususnya\r\nKetuhanan Yang Maha Esa Indonesia bertujuan ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'meningkatkan martabat serta hak dan kewajiban asasi manusia warga negara', 'peningkatan pembinaan bangsa di semua bidang kehidupan', 'mewujudkan masyarakat adil dan makmur', 'memajukan kesejahteraan umum', 3, NULL, NULL, '2014-03-25 22:04:17', '2014-03-25 22:04:17'),
	(105, 0, 'Cita-cita ekonomi nasional yang berdasarkan ekonmi kerakyatan mengutamakan ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'pemenuhan kesejahteraan seluruh rakyat Indonesia', 'tiap-tiap warga negara memperolch apa yang dituntutnya', 'tidak pilih kasih atau tidak berat sebelah', 'dapat menikmati hidup terhormat dan tercukupi kebutuhan-kebutuhan hidupnya', 4, NULL, NULL, '2014-03-25 22:05:06', '2014-03-25 22:05:06'),
	(106, 0, 'Berikut ini merupakan masalah yang rawan yang perlu mendapat perhatian, kecuali ....', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'masalah kesenjangan sosial', 'tingkat pendidikan yang rendah', 'budaya korupsi, kolusi, dan nepotisme', 'ketersediaan lapangan pekerjaan yang telah memadai', 3, NULL, NULL, '2014-03-25 22:05:47', '2014-03-25 22:05:47'),
	(107, 0, 'Berikut ini adalah kebijaksanaan pemerintah yang sesuai dengan usaha mewujudkan \r\nkeadilan sosial, kecuali...', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'tiap-tiap orang memperoleh haknya ', 'pemenuhan kebutuhan materiil bagi seluruh rakyat ', 'unsur pernimpin perusahaan yang bertanggung jawab', 'unsur pengendalian usaha dari negara', 3, NULL, NULL, '2014-03-25 22:06:30', '2014-03-26 00:30:08'),
	(121, 0, 'Contoh soal baru', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'ini jawaban A', 'ini jawaban B', 'ini jawaban C', 'ini jawaban D', 1, 'files/quizz/cover_kelas1_matematika_irwan.jpg', NULL, '2014-05-10 10:27:25', '2014-05-10 10:27:25'),
	(120, 0, 'Tambah soal', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban a', 'jaban b', 'jawaban c', 'jawaban d', 1, 'files/quizz/2014-03-26-070038film_ss.png', NULL, '2014-03-26 07:00:38', '2014-03-26 07:00:38'),
	(122, 0, 'Contoh Soal', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-10 10:30:34', '2014-05-10 10:30:34'),
	(123, 0, 'Ini pertanyaan baru taufiq', 1, 1, 1, 0, 'pkn', 1, NULL, NULL, 'jawaban a', 'jawaban b', 'jawaban c', 'jawaban d', 1, 'files/quizz/PAs_Poto_by_sastroart.jpg', NULL, '2014-05-10 11:12:25', '2014-05-10 11:12:25'),
	(124, 0, 'sdsddssddsds', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'as', 'as', 'asas', 'as', 1, 'files/quizz/Screen_Shot_2014-03-26_at_4.40.18_AM.png', NULL, '2014-05-12 08:26:55', '2014-05-12 08:26:55'),
	(125, 0, 'sdf', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'sdf', 'sdf', 'fsfsdf', 'ghgghgghghghg', 1, NULL, 'files/quizz/Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 08:57:14', '2014-05-13 03:57:17'),
	(126, 0, 'sdf', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'sdf', 'sdf', 'sdf', 'sdf', 3, NULL, NULL, '2014-05-12 08:58:41', '2014-05-13 02:16:20'),
	(127, 0, 'apa sdfhsdhfsdf\r\n', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'iya', 'apa', 'kenapa', 'zzz', 1, 'files/quizz/uut.png', NULL, '2014-05-12 08:59:34', '2014-05-13 04:14:01'),
	(145, 0, 'sdfsdffdsdf', 2, 1, 1, 0, 'ppkn', 2, NULL, 'sdfdsfsfsdf', '', '', '', '', 0, 'files/quizz/cover_kelas1_matematika_irwan.jpg', 'files/quizz/2014-05-12-235703Dokumenter_Earth_Hour_Indonesia_2014.mp4', '2014-05-12 10:07:47', '2014-05-12 23:57:03'),
	(149, 0, 'sdf', 1, 1, 1, 0, 'ppkn', 2, NULL, NULL, 'a', 'c', 'b', 'd', 3, 'files/quizz/Screen_Shot_2014-03-26_at_4.02.59_AM.png', 'files/quizz/bloodcare_tvc.flv', '2014-05-13 04:55:49', '2014-05-13 06:32:37'),
	(150, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-indonesia', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 06:58:05', '2014-05-13 06:58:05'),
	(146, 0, 'asfagfaf', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'avgagF', 'agdgadg', 'agadga', 'adgvadg', 2, 'files/quizz/download_(5).jpg', NULL, '2014-05-13 04:26:05', '2014-05-13 04:26:59'),
	(147, 0, 'yujyejuj', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'ihihih', 'ihihioh', 'hilhih', 'ihilhil', 3, 'files/quizz/3196931-2170304494-22850.jpg', NULL, '2014-05-13 04:29:12', '2014-05-13 04:29:30'),
	(148, 0, 'apa pak?', 2, 2, 1, 0, 'ppkn', 2, NULL, 'tak apaasd', '', '', '', '', 0, NULL, NULL, '2014-05-13 04:36:03', '2014-05-13 04:43:37'),
	(151, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-inggris ', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:01:31', '2014-05-13 07:01:31'),
	(158, 0, 'Contoh Soal', 1, 1, 1, 0, 'bahasa-indonesia', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:18:30', '2014-05-13 07:18:30'),
	(143, 0, 'sdfsdff', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'sf', 'dsf', 'sdf', 'sdf', 1, NULL, 'files/quizz/2014-05-12-033238DAILY_ENGLISH_CONVERSATION_VOLUME_3_(_1_BOOK__1_VCD_).flv', '2014-05-12 03:32:38', '2014-05-12 03:32:38'),
	(153, 0, 'Contoh Soal', 1, 1, 1, 0, 'fisika', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:03:54', '2014-05-13 07:03:54'),
	(159, 0, 'Contoh Soal', 1, 1, 2, 0, 'biologi', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:18:56', '2014-05-13 07:18:56'),
	(157, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:17:08', '2014-05-13 07:17:08'),
	(160, 0, 'Contoh Soal', 1, 2, 3, 0, 'sejarah', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:22:21', '2014-05-13 07:22:21'),
	(161, 0, 'Contoh Soal', 1, 1, 3, 0, 'ekonomi', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-13 07:23:47', '2014-05-13 07:23:47'),
	(162, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(163, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(164, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(165, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(166, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(167, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(168, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(169, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(170, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(171, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(172, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(173, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(174, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(175, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(176, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(177, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(178, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(179, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(180, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(181, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(182, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(183, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(184, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(185, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(186, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(187, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(188, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(189, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(190, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(191, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(192, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(193, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(194, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(195, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(196, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(197, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(198, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(199, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(200, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(201, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(202, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(203, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(204, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(205, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(206, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(207, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(208, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(209, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(210, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(211, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(212, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(213, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(214, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(215, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(216, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(217, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(218, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(219, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(220, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(221, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(222, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(223, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(224, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(225, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(226, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(227, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(228, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(229, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(230, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(231, 0, 'Contoh Soal', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', '', '2014-05-28 10:20:48', '2014-05-28 10:20:48'),
	(232, 0, 'tambah ujian baru', 1, 1, 1, 0, 'ppkn', 2, NULL, NULL, 'sdf', 'dsf', 'sdf', 'dsf', 1, NULL, NULL, '2014-05-28 13:01:13', '2014-05-28 13:01:13'),
	(233, 0, 'soal ujian baru', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'jawaban s', 'asdfjsdf', 'sdfdfsdf', 'sdfsdfsdf', 2, 'files/quizz/icon-user-default.png', 'files/quizz/-eteaching_sd-files-videosDAILY_ENGLISH_CONVERSATION_VOLUME_2_1_BOOK_1_VCD.flv', '2014-06-12 11:23:26', '2014-06-12 11:23:26'),
	(234, 0, 'hdhjzhjdzhchzjxch', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'jzjncznczmnxc', 'zxczxczx', 'zxczxc', 'zxczxczxc', 1, 'files/quizz/2014-06-18-113420icon-user-default.png', 'files/quizz/profile.flv', '2014-06-18 11:34:20', '2014-06-18 11:34:20'),
	(235, 0, 'Contoh Soal kalibata', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', 'files/quizz/contohvideo.jpg', '2014-06-23 12:17:13', '2014-06-23 12:17:13'),
	(236, 0, 'Contoh Soal kalibata', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', 'files/quizz/contohvideo.jpg', '2014-06-23 12:17:13', '2014-06-23 12:17:13'),
	(237, 0, 'Contoh Soal kalibata', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', 'files/quizz/contohvideo.jpg', '2014-06-23 12:17:13', '2014-06-23 12:17:13'),
	(238, 0, 'Contoh Soal kalibata', 1, 1, 1, 0, 'ppkn', 1, NULL, NULL, 'Jawaban option a', 'Jawaban option b', 'Jawaban option c', 'Jawaban option d', 1, '', 'files/quizz/contohvideo.jpg', '2014-06-23 12:17:13', '2014-06-23 12:17:13');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;


-- Dumping structure for table smicro.quizzs
CREATE TABLE IF NOT EXISTS `quizzs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `user_id` int(32) NOT NULL,
  `title` mediumtext NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `time` varchar(32) DEFAULT NULL,
  `details` text NOT NULL,
  `published` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.quizzs: 8 rows
/*!40000 ALTER TABLE `quizzs` DISABLE KEYS */;
INSERT INTO `quizzs` (`id`, `kode`, `user_id`, `title`, `pelajaran_id`, `kelas`, `time`, `details`, `published`, `created`, `modified`) VALUES
	(9, 'borobudur', 1, 'Try out', 1, 2, '50', '', NULL, '2014-05-10 11:14:42', '2014-06-08 04:37:53'),
	(8, 'PG2', 1, 'Try out', 6, 1, '46', '', NULL, '2014-03-25 22:34:24', '2014-03-26 00:30:33'),
	(10, 'sdf', 1, 'Try out', 1, 1, '45', '', NULL, '2014-05-13 09:17:08', '2014-05-13 09:17:08'),
	(11, 'sdfsdfdsf', 1, 'Try out', 2, 1, '46', '', NULL, '2014-05-13 11:01:50', '2014-05-28 12:55:09'),
	(12, 'sdfsdfsdfsdf', 1, 'Try out', 3, 2, '47', '', NULL, '2014-05-13 11:03:51', '2014-05-28 13:01:53'),
	(13, 'hhhh', 1, 'Try out', 1, 1, '46', '', NULL, '2014-05-28 10:18:55', '2014-05-28 12:32:32'),
	(14, 'test', 1, 'Try out', 6, 1, '47', '', NULL, '2014-06-12 11:24:55', '2014-06-12 11:25:27'),
	(15, 'kalibata', 1, 'Try out', 1, 1, '47', '', NULL, '2014-06-23 12:14:10', '2014-06-23 12:14:35');
/*!40000 ALTER TABLE `quizzs` ENABLE KEYS */;


-- Dumping structure for table smicro.quizzs_questions
CREATE TABLE IF NOT EXISTS `quizzs_questions` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `quizz_id` bigint(50) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.quizzs_questions: 57 rows
/*!40000 ALTER TABLE `quizzs_questions` DISABLE KEYS */;
INSERT INTO `quizzs_questions` (`id`, `quizz_id`, `question_id`) VALUES
	(5, 3, 3),
	(10, 1, 12),
	(3, 2, 3),
	(9, 1, 12),
	(8, 4, 14),
	(7, 4, 3),
	(11, 1, 12),
	(12, 1, 12),
	(13, 1, 12),
	(14, 1, 12),
	(15, 1, 12),
	(16, 1, 12),
	(17, 1, 11),
	(18, 1, 12),
	(19, 1, 11),
	(20, 1, 12),
	(21, 1, 11),
	(22, 1, 11),
	(23, 1, 12),
	(24, 1, 11),
	(25, 1, 12),
	(26, 5, 16),
	(27, 1, 12),
	(28, 1, 11),
	(29, 0, 12),
	(30, 1, 12),
	(31, 1, 11),
	(32, 4, 12),
	(33, 7, 16),
	(34, 1, 14),
	(35, 1, 13),
	(36, 2, 17),
	(37, 3, 14),
	(38, 2, 14),
	(39, 2, 13),
	(40, 2, 11),
	(41, 4, 11),
	(42, 2, 12),
	(43, 1, 20),
	(44, 7, 20),
	(45, 2, 20),
	(46, 2, 94),
	(48, 7, 95),
	(49, 8, 108),
	(50, 9, 110),
	(51, 9, 108),
	(52, 9, 111),
	(53, 13, 149),
	(54, 12, 149),
	(55, 11, 149),
	(56, 12, 232),
	(57, 9, 149),
	(58, 9, 232),
	(59, 14, 149),
	(60, 14, 232),
	(61, 15, 232),
	(62, 15, 149);
/*!40000 ALTER TABLE `quizzs_questions` ENABLE KEYS */;


-- Dumping structure for table smicro.uraian_answers
CREATE TABLE IF NOT EXISTS `uraian_answers` (
  `id` bigint(60) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(40) NOT NULL,
  `question_id` bigint(40) NOT NULL,
  `quizz_id` bigint(40) NOT NULL,
  `jawaban_uraian` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.uraian_answers: 1 rows
/*!40000 ALTER TABLE `uraian_answers` DISABLE KEYS */;
INSERT INTO `uraian_answers` (`id`, `user_id`, `question_id`, `quizz_id`, `jawaban_uraian`, `created`, `modified`) VALUES
	(1, 18, 3, 2, 'Jawaban saya bu', '2011-12-06 20:05:41', '2012-06-11 05:45:51');
/*!40000 ALTER TABLE `uraian_answers` ENABLE KEYS */;


-- Dumping structure for table smicro.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` int(11) DEFAULT NULL,
  `matapelajaran` int(11) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  `pengarang` varchar(200) DEFAULT NULL,
  `produksi` varchar(200) DEFAULT NULL,
  `sutradara` varchar(200) DEFAULT NULL,
  `jumlahhalaman` int(10) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `details` text,
  `cover` varchar(300) DEFAULT NULL,
  `type` smallint(1) NOT NULL,
  `file` varchar(100) NOT NULL,
  `dir` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Dumping data for table smicro.videos: 6 rows
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `kelas`, `matapelajaran`, `author`, `category_id`, `title`, `penerbit`, `pengarang`, `produksi`, `sutradara`, `jumlahhalaman`, `tahun`, `details`, `cover`, `type`, `file`, `dir`, `mimetype`, `filesize`, `created`, `modified`) VALUES
	(24, NULL, NULL, 1, 40, 'Kerajaan Hindu Budha di Indonesia', NULL, NULL, 'Courtesy Youtube', 'kelompok 3', NULL, '2011', 'Kerajaan Hindu Budha di Indonesia', 'img/2.png', 1, 'Video_Kerajaan_HINDU_dan_Budha_di_Indonesia.flv', 'files/videos', 'video/x-flv', 24506433, '2014-05-12 01:20:12', '2014-05-12 01:20:12'),
	(22, NULL, NULL, 1, 40, 'Traditional Food and Drink', NULL, NULL, 'Courtesy Youtube', 'Komang Roy Prismayudi', NULL, '2011', 'Traditional Food and Drink', 'img/6.png', 1, 'Animasi_untuk_mengajar_bahasa_Inggris_Animation_for_teaching_english.flv', 'files/videos', 'video/x-flv', 30244369, '2014-05-12 01:14:54', '2014-05-12 01:14:54'),
	(25, NULL, NULL, 1, 40, 'Sejarah Uang dan Sejarah Bank Sentral', NULL, NULL, 'Courtesy Youtube', 'Museum Bank Indonesia', NULL, '2011', 'Sejarah Uang dan Sejarah Bank Sentral', 'img/3.png', 1, 'Sejarah_Uang_dan_Sejarah_Bank_Sentral.flv', 'files/videos', 'video/x-flv', 39124179, '2014-05-12 01:22:29', '2014-05-12 01:22:29'),
	(26, NULL, NULL, 1, 40, 'Rantai Makanan dan Jaring-jaring Makanan', NULL, NULL, 'Courtesy Youtube', 'Ayatullah Hidayat', NULL, '2011', 'Rantai Makanan dan Jaring-jaring Makanan', 'img/4.png', 1, 'Video_Interaktif_Rantai_Makanan_dan_Jaring_Jaring_Makanan_Untuk_Kelas_IV_SD.flv', 'files/videos', 'video/x-flv', 9646544, '2014-05-12 01:28:15', '2014-05-12 01:28:15'),
	(27, NULL, NULL, 1, 40, 'Sistem Peredaran Darah Manusia', NULL, NULL, 'Courtesy Youtube', 'Abdul Kholiq, S.Pd', NULL, '2011', 'Sistem Peredaran Darah Manusia', 'img/5.png', 1, 'Media_Pembelajaran_SD_SISTEM_PEREDARAN_DARAH_MANUSIA_mp4.flv', 'files/videos', 'video/x-flv', 9673208, '2014-05-12 01:30:03', '2014-05-12 01:30:03'),
	(23, NULL, NULL, 1, 40, 'Mari Belajar Matematika', NULL, NULL, 'Courtesy Youtube', 'Reza324', NULL, '2011', 'Mari Belajar Matematika', 'img/1.png', 1, 'animasi_pembelajaran_matematika_1.flv', 'files/videos', 'video/x-flv', 1818477, '2014-05-12 01:18:21', '2014-05-12 01:18:21');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
