-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 11:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `mov_type`
--

CREATE TABLE `mov_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `in_screen` tinyint(1) NOT NULL COMMENT '1-dissmissal 2-collect',
  `is_private_internal` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='الحركة علي الخزنة';

--
-- Dumping data for table `mov_type`
--

INSERT INTO `mov_type` (`id`, `name`, `active`, `in_screen`, `is_private_internal`) VALUES
(1, 'مراجعة واستلام نقدية شفت علي نفس الخزنة', 1, 2, 1),
(2, 'مراجعة واستلام نقدية شفت خزنة اخري', 1, 2, 1),
(3, 'صرف مبلغ لحساب مالي', 1, 1, 0),
(4, 'تحصيل مبلغ من حساب مالي', 1, 2, 0),
(5, 'تحصيل ايراد مبيعات', 1, 2, 0),
(6, 'صرف نظير مرتجع مبيعات', 1, 1, 0),
(8, 'صرف سلفة علي راتب موظف', 1, 1, 1),
(9, 'صرف نظير مشتريات من مورد', 1, 1, 0),
(10, 'تحصيل نظير مرتجع مشتريات الي مورد', 1, 2, 0),
(16, 'ايراد زيادة راس المال', 1, 2, 0),
(17, 'مصاريف شراء مثل النولون', 1, 1, 0),
(18, 'صرف للإيداع البنكي', 1, 1, 0),
(21, 'رد سلفة علي راتب موظف', 1, 2, 1),
(22, 'تحصيل خصومات موظفين', 1, 2, 1),
(24, 'صرف مرتب لموظف', 1, 1, 1),
(25, 'سحب من البنك\r\n', 1, 2, 0),
(26, 'صرف لرد رأس المال', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mov_type`
--
ALTER TABLE `mov_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mov_type`
--
ALTER TABLE `mov_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
