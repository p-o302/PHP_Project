-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 01:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php54_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucdanh`
--

CREATE TABLE `chucdanh` (
  `machucdanh` int(11) NOT NULL,
  `tenchucdanh` varchar(500) NOT NULL,
  `ghichu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chucdanh`
--

INSERT INTO `chucdanh` (`machucdanh`, `tenchucdanh`, `ghichu`) VALUES
(1, 'Giám Đốc', ''),
(2, 'Phó Giám Đốc', ''),
(3, 'Trưởng Phòng', ''),
(4, 'Phó Phòng', ''),
(5, 'Nhân Viên', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manhanvien` int(11) NOT NULL,
  `maphongban` int(11) NOT NULL,
  `machucdanh` int(11) NOT NULL,
  `hoten` varchar(500) NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(500) NOT NULL,
  `luong` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `maphongban`, `machucdanh`, `hoten`, `ngaysinh`, `quequan`, `luong`) VALUES
(1, 1, 1, 'Nguyễn Văn A', '2000-12-08', 'Hà Nội', 20000000),
(2, 1, 5, 'Nguyễn Văn B', '2002-11-23', 'Hà Nội', 15000000),
(3, 2, 5, 'Nguyễn Văn C', '2001-12-20', 'huế', 16000000),
(4, 2, 5, 'Nguyễn Văn D', '2000-06-09', 'Bình Định', 17000000),
(5, 3, 5, 'Nguyễn Văn E', '2000-08-06', 'Khánh Hòa', 16000000);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `maphongban` int(11) NOT NULL,
  `tenphongban` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`maphongban`, `tenphongban`) VALUES
(1, 'phòng phần mềm'),
(2, 'phòng kỹ thuật'),
(3, 'phòng kế toán'),
(4, 'phòng kinh doanh'),
(5, 'phòng bảo vệ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucdanh`
--
ALTER TABLE `chucdanh`
  ADD PRIMARY KEY (`machucdanh`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manhanvien`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`maphongban`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucdanh`
--
ALTER TABLE `chucdanh`
  MODIFY `machucdanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `maphongban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
