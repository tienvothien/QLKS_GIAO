-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 08:00 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlykhachsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cogia`
--

CREATE TABLE `cogia` (
  `MA_LOAI_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAY_BAT_DAU` date NOT NULL,
  `NGAY_KET_THUC` date NOT NULL,
  `GIA` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cothietbi`
--

CREATE TABLE `cothietbi` (
  `MA_LOAI_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOAI_THIET_BI` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dondatphong`
--

CREATE TABLE `dondatphong` (
  `MA_DON_DAT_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOAI_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_KH` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_NV` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAY` date NOT NULL,
  `GIO` time(4) NOT NULL,
  `DUYET` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MA_HOA_DON` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TEN_HOA_DON` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SO_TIEN` int(7) NOT NULL,
  `NGAY` date NOT NULL,
  `GIO` time(4) NOT NULL,
  `MA_NV` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MA_KH` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HO_KH` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TEN_KH` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SO_CMND` int(12) NOT NULL,
  `DIA_CHI` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GIOI_TINH` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAY_SINH` date NOT NULL,
  `QUOC_TICH` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `MA_LOAI_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TEN_LOAI_PHONG` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DIEN_TICH` float NOT NULL,
  `SL_NGUOI_O` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`MA_LOAI_PHONG`, `TEN_LOAI_PHONG`, `DIEN_TICH`, `SL_NGUOI_O`) VALUES
('LP111', 'Phòng thường đơ', 20, 2),
('LP222', 'Phòng vip', 35, 2),
('LP333', 'Phòng gia đình', 30, 5),
('LP444', 'Phòng tập thể', 35, 8);

-- --------------------------------------------------------

--
-- Table structure for table `loaithietbi`
--

CREATE TABLE `loaithietbi` (
  `MA_LOAI_THIET_BI` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TEN_LOAI_THIET_BI` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvienletan`
--

CREATE TABLE `nhanvienletan` (
  `MA_NV` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HO_NV` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TEN_NV` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DIA_CHI` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GIOI_TINH` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAY_SINH` date NOT NULL,
  `SDT` int(12) NOT NULL,
  `EMAIL` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phieuthuephong`
--

CREATE TABLE `phieuthuephong` (
  `MA_PHIEU_THUE_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_KH` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_DON_DAT_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_NV` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_HOA_DON` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `MA_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MA_LOAI_PHONG` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`MA_PHONG`, `MA_LOAI_PHONG`) VALUES
('PH100', 'LP111'),
('PH101', 'LP111'),
('PH102', 'LP222'),
('PH103', 'LP222'),
('PH104', 'LP333'),
('PH105', 'LP333');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtk` int(2) NOT NULL,
  `tendangnhap` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capdotruycap` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idtk`, `tendangnhap`, `matkhau`, `capdotruycap`) VALUES
(1, 'admin', 'admin', 0),
(2, 'giao', 'giao', 1),
(3, 'tien', 'tien', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cothietbi`
--
ALTER TABLE `cothietbi`
  ADD KEY `MA_LOAI_PHONG` (`MA_LOAI_PHONG`),
  ADD KEY `MA_LOAI_THIET_BI` (`MA_LOAI_THIET_BI`);

--
-- Indexes for table `dondatphong`
--
ALTER TABLE `dondatphong`
  ADD PRIMARY KEY (`MA_DON_DAT_PHONG`),
  ADD KEY `MA_PHONG` (`MA_PHONG`),
  ADD KEY `MA_KH` (`MA_KH`),
  ADD KEY `MA_LOAI_PHONG` (`MA_LOAI_PHONG`),
  ADD KEY `MA_NV` (`MA_NV`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MA_HOA_DON`),
  ADD KEY `MA_NV` (`MA_NV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MA_KH`),
  ADD UNIQUE KEY `SO_CMND` (`SO_CMND`),
  ADD UNIQUE KEY `SDT` (`SDT`);

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`MA_LOAI_PHONG`);

--
-- Indexes for table `loaithietbi`
--
ALTER TABLE `loaithietbi`
  ADD PRIMARY KEY (`MA_LOAI_THIET_BI`);

--
-- Indexes for table `nhanvienletan`
--
ALTER TABLE `nhanvienletan`
  ADD PRIMARY KEY (`MA_NV`),
  ADD UNIQUE KEY `SDT` (`SDT`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `phieuthuephong`
--
ALTER TABLE `phieuthuephong`
  ADD PRIMARY KEY (`MA_PHIEU_THUE_PHONG`),
  ADD KEY `MA_DON_DAT_PHONG` (`MA_DON_DAT_PHONG`),
  ADD KEY `MA_HOA_DON` (`MA_HOA_DON`),
  ADD KEY `MA_KH` (`MA_KH`),
  ADD KEY `MA_NV` (`MA_NV`),
  ADD KEY `MA_PHONG` (`MA_PHONG`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MA_PHONG`),
  ADD KEY `MA_LOAI_PHONG` (`MA_LOAI_PHONG`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtk`),
  ADD UNIQUE KEY `matkhau` (`matkhau`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtk` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cothietbi`
--
ALTER TABLE `cothietbi`
  ADD CONSTRAINT `cothietbi_ibfk_1` FOREIGN KEY (`MA_LOAI_PHONG`) REFERENCES `loaiphong` (`MA_LOAI_PHONG`),
  ADD CONSTRAINT `cothietbi_ibfk_2` FOREIGN KEY (`MA_LOAI_THIET_BI`) REFERENCES `loaithietbi` (`MA_LOAI_THIET_BI`);

--
-- Constraints for table `dondatphong`
--
ALTER TABLE `dondatphong`
  ADD CONSTRAINT `dondatphong_ibfk_1` FOREIGN KEY (`MA_PHONG`) REFERENCES `phong` (`MA_PHONG`),
  ADD CONSTRAINT `dondatphong_ibfk_2` FOREIGN KEY (`MA_KH`) REFERENCES `khachhang` (`MA_KH`),
  ADD CONSTRAINT `dondatphong_ibfk_3` FOREIGN KEY (`MA_LOAI_PHONG`) REFERENCES `loaiphong` (`MA_LOAI_PHONG`),
  ADD CONSTRAINT `dondatphong_ibfk_4` FOREIGN KEY (`MA_NV`) REFERENCES `nhanvienletan` (`MA_NV`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MA_NV`) REFERENCES `nhanvienletan` (`MA_NV`);

--
-- Constraints for table `phieuthuephong`
--
ALTER TABLE `phieuthuephong`
  ADD CONSTRAINT `phieuthuephong_ibfk_1` FOREIGN KEY (`MA_DON_DAT_PHONG`) REFERENCES `dondatphong` (`MA_DON_DAT_PHONG`),
  ADD CONSTRAINT `phieuthuephong_ibfk_2` FOREIGN KEY (`MA_HOA_DON`) REFERENCES `hoadon` (`MA_HOA_DON`),
  ADD CONSTRAINT `phieuthuephong_ibfk_3` FOREIGN KEY (`MA_KH`) REFERENCES `khachhang` (`MA_KH`),
  ADD CONSTRAINT `phieuthuephong_ibfk_4` FOREIGN KEY (`MA_NV`) REFERENCES `nhanvienletan` (`MA_NV`),
  ADD CONSTRAINT `phieuthuephong_ibfk_5` FOREIGN KEY (`MA_PHONG`) REFERENCES `phong` (`MA_PHONG`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`MA_LOAI_PHONG`) REFERENCES `loaiphong` (`MA_LOAI_PHONG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
