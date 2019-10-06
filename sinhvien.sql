-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2019 at 01:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passWord` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userLevel` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `userName` (`userName`),
  UNIQUE KEY `passWord` (`passWord`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `userName`, `passWord`, `email`, `userLevel`) VALUES
(1, 'admin', '$2y$10$fyRRw30Uv/O7rIEqPERsAOO62Va1x5l9FEBOKTZRp4dIyxNensA7W', 'trangnt72@wru.vn', 1),
(2, 'Nguyễn Trang', '$2y$10$EybI5bpY7Ifffb9JzQloZ.O5Le1qftrzWaW4VB6G.62yanS2Bx.4.', 'trang@gmail.com', 0),
(4, 'Thuy0205', '$2y$10$r01clCsX5HDQcxT93k182.FL5/oLM3XZrR3od8aFIWug1TXH/8p4u', 'thuytt72@wru.vn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

DROP TABLE IF EXISTS `diem`;
CREATE TABLE IF NOT EXISTS `diem` (
  `masv` int(10) NOT NULL,
  `idmon` int(5) NOT NULL,
  `diem` float NOT NULL,
  PRIMARY KEY (`masv`,`idmon`),
  KEY `idmon` (`idmon`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`masv`, `idmon`, `diem`) VALUES
(1, 1, 9.1),
(1, 2, 8.5),
(1, 3, 8),
(1, 4, 8.5),
(1, 5, 8),
(1, 6, 8.7),
(1, 7, 9.5),
(2, 1, 8),
(2, 2, 8.1),
(2, 3, 7.8),
(2, 4, 8.1),
(2, 5, 7.6),
(2, 6, 9.3),
(2, 7, 8.9),
(3, 1, 9),
(3, 2, 8.6),
(3, 3, 7),
(3, 4, 6.7),
(3, 5, 9.2),
(3, 6, 8),
(3, 7, 8.7),
(4, 1, 7),
(4, 2, 8.6),
(4, 3, 7),
(4, 4, 6.7),
(4, 5, 9.2),
(4, 6, 8),
(4, 7, 7),
(5, 1, 6),
(5, 2, 9.6),
(5, 3, 8),
(5, 4, 6.7),
(5, 5, 9.2),
(5, 6, 8),
(5, 7, 8),
(6, 1, 9),
(6, 2, 8),
(6, 3, 7),
(6, 4, 7),
(6, 5, 6),
(6, 6, 9),
(6, 7, 8),
(7, 1, 7.7),
(7, 2, 8.6),
(7, 3, 7),
(7, 4, 9),
(7, 5, 9),
(7, 6, 7.9),
(7, 7, 5),
(8, 1, 9),
(8, 2, 6),
(8, 3, 9),
(8, 4, 6.7),
(8, 5, 6.8),
(8, 6, 8.1),
(8, 7, 8),
(9, 1, 7),
(9, 2, 5),
(9, 3, 7.2),
(9, 4, 9.5),
(9, 5, 9.2),
(9, 6, 9),
(9, 7, 5.7),
(10, 1, 8),
(10, 2, 6),
(10, 3, 9.5),
(10, 4, 7.4),
(10, 5, 9),
(10, 6, 6.8),
(10, 7, 7),
(11, 1, 7),
(11, 2, 6.4),
(11, 3, 7),
(11, 4, 6.7),
(11, 5, 8.4),
(11, 6, 8.1),
(11, 7, 7.3),
(12, 1, 9),
(12, 2, 8),
(12, 3, 5.7),
(12, 4, 8.3),
(12, 5, 6.2),
(12, 6, 8),
(12, 7, 8.7);

-- --------------------------------------------------------

--
-- Table structure for table `list_sv`
--

DROP TABLE IF EXISTS `list_sv`;
CREATE TABLE IF NOT EXISTS `list_sv` (
  `masv` int(10) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `lop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`masv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_sv`
--

INSERT INTO `list_sv` (`masv`, `hoten`, `gioitinh`, `ngaysinh`, `lop`) VALUES
(1, 'Nguyễn Thị Trang', 'Nữ', '1999-10-29', '20HT'),
(2, 'Trần Thu Thủy', 'Nữ', '1999-05-02', '20HT'),
(3, 'Trần Đình Nam', 'Nam', '1999-09-07', '20HT'),
(4, 'Nguyễn Thị Loan', 'Nữ', '1999-01-17', '20HT'),
(5, 'Nguyễn Thị Huế', 'Nữ', '1999-03-15', '20HT'),
(6, 'Hoàng Thị Ngọc Ánh', 'Nữ', '1999-08-10', '20HT'),
(7, 'Nguyễn Tuấn Anh', 'Nam', '1999-09-09', '20HT'),
(8, 'Nguyễn Văn Nam', 'Nam', '1999-09-19', '20TH1'),
(9, 'Nguyễn Thị Ánh Tuyết', 'Nữ', '1999-12-01', '20TH1'),
(10, 'Nguyễn Thị Thu Lý', 'Nữ', '1999-12-09', '20TH1'),
(11, 'Đỗ Thùy Linh', 'Nữ', '1999-09-09', '20TH1'),
(12, 'Hoàng Văn Hùng', 'Nam', '1999-09-23', '20TH1');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

DROP TABLE IF EXISTS `mon`;
CREATE TABLE IF NOT EXISTS `mon` (
  `idmon` int(5) NOT NULL,
  `tenmon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dot` int(5) NOT NULL,
  PRIMARY KEY (`idmon`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`idmon`, `tenmon`, `dot`) VALUES
(1, 'Công nghệ web', 1),
(2, 'Hệ quản trị cơ sở dữ liệu', 1),
(3, 'Hệ điều hành', 1),
(4, 'Thống kê ứng dụng', 1),
(5, 'An toàn bảo mật thông tin', 2),
(6, 'Phân tích thiết kế hệ thống thông tin', 2),
(7, 'Trí tuệ nhân tạo', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
