-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table crud.penduduk
CREATE TABLE IF NOT EXISTS `penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table crud.penduduk: ~0 rows (approximately)
/*!40000 ALTER TABLE `penduduk` DISABLE KEYS */;
/*!40000 ALTER TABLE `penduduk` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
