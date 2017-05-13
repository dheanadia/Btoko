-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for toko_sembako
CREATE DATABASE IF NOT EXISTS `toko_sembako` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `toko_sembako`;


-- Dumping structure for table toko_sembako.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `kode_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `karyawan_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_barang`),
  KEY `FK_barang_karyawan` (`karyawan_id`),
  CONSTRAINT `FK_barang_karyawan` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`Id_Karyawan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table toko_sembako.barang: ~0 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;


-- Dumping structure for table toko_sembako.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `status` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table toko_sembako.karyawan: ~2 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`id_karyawan`, `password`, `nama`, `alamat`, `status`) VALUES
	('k001', '12345', 'Afsal', 'cikutra', 'tetap'),
	('k002', '210696', 'daus', 'pahlawan', 'tetap');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
