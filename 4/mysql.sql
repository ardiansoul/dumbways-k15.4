-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dumb_sosmed
CREATE DATABASE IF NOT EXISTS `dumb_sosmed` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dumb_sosmed`;

-- Dumping structure for table dumb_sosmed.comment_tb
CREATE TABLE IF NOT EXISTS `comment_tb` (
  `comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `postId` int(5) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment` (`postId`),
  CONSTRAINT `fk_comment` FOREIGN KEY (`postId`) REFERENCES `post_tb` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table dumb_sosmed.comment_tb: ~4 rows (approximately)
DELETE FROM `comment_tb`;
/*!40000 ALTER TABLE `comment_tb` DISABLE KEYS */;
INSERT INTO `comment_tb` (`comment_id`, `comment`, `postId`) VALUES
	(4, 'kenapa harus dirubah?', 2),
	(5, 'ada apa dengan kemdikbud yang sekarang?', 2),
	(6, 'memangnya konsep seperti apa?', 2);
/*!40000 ALTER TABLE `comment_tb` ENABLE KEYS */;

-- Dumping structure for table dumb_sosmed.post_tb
CREATE TABLE IF NOT EXISTS `post_tb` (
  `post_id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `createdBy` int(5) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `content` (`createdBy`),
  CONSTRAINT `fk_post` FOREIGN KEY (`createdBy`) REFERENCES `user_tb` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table dumb_sosmed.post_tb: ~2 rows (approximately)
DELETE FROM `post_tb`;
/*!40000 ALTER TABLE `post_tb` DISABLE KEYS */;
INSERT INTO `post_tb` (`post_id`, `title`, `content`, `createdBy`) VALUES
	(2, 'KPAI Harap Mendikbud Nadiem Kembalikan Konsep Pendidikan ke Pemikiran Ki Hajar Dewantara', 'Liputan6.com, Jakarta Menteri Pendidikan dan Kebudayaan (Mendikbud) Nadiem Makarim diminta untuk mengembalikan konsep pendidikan di Indonesia sesuai dengan pemikiran awal Ki Hajar Dewantara. Hal itu disampaikan oleh Komisi Perlindungan Anak Indonesia.\r\nDalam konferensi persnya pada Rabu kemarin, KPAI menyatakan bahwa pemikiran awal Ki Hajar Dewantara tersebut adalah, pendidikan merupakan proses pembudayaan yakni suatu usaha memberikan nilai-nilai luhur kepada generasi baru dalam masyarakat.', 1),
	(3, 'Diprotes Orangtua, SD di China Berhenti Pakai Alat Deteksi Gelombang Otak Murid', 'Liputan6.com, Beijing - Sebuah uji coba yang mengharuskan para siswa sekolah dasar (SD) di China mengenakan perangkat yang dipasang di kepala guna memantau rentang perhatian mereka telah dihentikan karena kekhawatiran orangtua akan privasi. Atau yang lebih parah lagi, alat tersebut dapat mengendalikan anak-anak mereka. Menurut surat kabar pemerintah, Beijing News, perangkat yang dapat memonitor gelombang otak dan mengirim data ke sistem komputer di sekolah dasar Xiaoshun, di Kota Jinhua, provinsi Zhejiang. Beberapa data tersebut kemudian dibagikan kepada orangtua murid.', 1);
/*!40000 ALTER TABLE `post_tb` ENABLE KEYS */;

-- Dumping structure for table dumb_sosmed.user_tb
CREATE TABLE IF NOT EXISTS `user_tb` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(225) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dumb_sosmed.user_tb: ~0 rows (approximately)
DELETE FROM `user_tb`;
/*!40000 ALTER TABLE `user_tb` DISABLE KEYS */;
INSERT INTO `user_tb` (`user_id`, `user_name`) VALUES
	(1, 'Asep DumbWays');
/*!40000 ALTER TABLE `user_tb` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
