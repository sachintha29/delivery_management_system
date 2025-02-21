-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2025 at 01:25 PM
-- Server version: 5.7.38
-- PHP Version: 5.6.40-81+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `delivery_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery_requests`
--

CREATE TABLE IF NOT EXISTS `delivery_requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pickup_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_goods` enum('Document','Parcel') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_provider` enum('DHL','STARTRACK','ZOOM2U','TGG') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` enum('Standard','Express','Immediate') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipment_pickup_date` date NOT NULL,
  `shipment_pickup_time` time NOT NULL,
  `package_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` decimal(8,2) NOT NULL,
  `height` decimal(8,2) NOT NULL,
  `width` decimal(8,2) NOT NULL,
  `weight` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `delivery_requests`
--

INSERT INTO `delivery_requests` (`id`, `pickup_address`, `pickup_name`, `pickup_contact_no`, `pickup_email`, `delivery_address`, `delivery_name`, `delivery_contact_no`, `delivery_email`, `type_of_goods`, `delivery_provider`, `priority`, `shipment_pickup_date`, `shipment_pickup_time`, `package_description`, `length`, `height`, `width`, `weight`, `created_at`, `updated_at`, `status`) VALUES
(1, '53/2, RANALA ROAD', 'dfsdfsfd', '0778529921', 'sachin133hm@gmail.com', '53/2, RANALA ROAD', 'TEST', '0778529921', 'sachin133hm@gmail.com', 'Document', 'DHL', 'Standard', '2025-02-01', '00:25:00', 'FFDF', '11.10', '13.10', '14.10', '12.10', '2025-02-21 01:24:11', '2025-02-21 01:44:08', 'shipped'),
(3, '53/2, RANALA ROAD', 'dfsdfsfd', '0778529921', 'sachin133hm@gmail.com', '53/2, RANALA ROAD', 'TEST', '0778529921', 'sachin133hm@gmail.com', 'Document', 'STARTRACK', 'Standard', '2025-02-28', '00:53:00', 'sdfdfd', '11.10', '13.10', '14.10', '12.10', '2025-02-21 01:49:38', '2025-02-21 02:17:28', 'processed'),
(4, '53/2, RANALA ROAD', 'dfsdfsfd', '0778529921', 'sachin133hm@gmail.com', '53/2, RANALA ROAD', 'TEST', '0778529921', 'sachin133hm@gmail.com', 'Document', 'DHL', 'Standard', '2025-02-01', '00:01:00', 'asdasdads', '11.10', '13.10', '14.10', '12.10', '2025-02-21 01:58:48', '2025-02-21 01:58:48', 'pending'),
(5, '53/2, RANALA ROAD', 'dfsdfsfd', '0778529921', 'sachin133hm@gmail.com', '53/2, RANALA ROAD', 'TEST', '0778529921', 'sachin133hm@gmail.com', 'Document', 'ZOOM2U', 'Express', '2025-02-01', '18:14:00', 'Package', '1.12', '0.99', '0.11', '1.45', '2025-02-21 02:14:46', '2025-02-21 02:14:46', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
