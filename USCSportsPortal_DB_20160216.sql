-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2016 at 07:25 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uscsports`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `ann_id` int(11) NOT NULL,
  `ann_title` varchar(28) NOT NULL,
  `ann_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ann_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slug` varchar(128) NOT NULL,
  `ann_content` text NOT NULL,
  `admin_id` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`ann_id`, `ann_title`, `ann_pub`, `ann_updated`, `slug`, `ann_content`, `admin_id`) VALUES
(10, 'Basketball Tryouts', '2015-11-22 08:54:18', '2015-11-22 08:54:18', 'basketball-tryouts', '<p>ERICKA ENTERPRISE<br />It is an open-source and royalty-free OSEK/VDX Kernel. This RTOS includes also RT-Druid, which is a development environment distributed as a set of Eclipse plugins.<br />Main Features:<br />? Hard Real-Time support with Fixed Priority Scheduling and Immediate Priority Ceiling;<br />? Support for Earliest Deadline First (EDF) and Resource Reservation Schedulers;<br />? 1-4 Kb Flash footprint, suitable for 8 to 32 bit microcontrollers;<br />? Support for multi-core platforms;<br />? Support for stack sharing among tasks;<br />? Easy configuration using RT-Druid with Eclipse plugins;<br />? Open-source: GPL2+Linking exception for the kernel, EPL for the Eclipse plugins.<img class="post-img" src="/uscsportsportal/source/Fresh Camp Logo for White Shirt.png" alt="Fresh Camp Logo for White Shirt" width="1000" height="650"></p>', '09307896'),
(11, 'Tennis Tryouts', '2015-11-22 08:55:35', '2015-11-22 08:55:35', 'tennis-tryouts', '<p>ERICKA ENTERPRISE</p>\r\n<p>It is an open-source and royalty-free OSEK/VDX Kernel. This RTOS includes also RT-Druid, which is a development environment distributed as a set of Eclipse plugins.<br />Main Features:<br />? Hard Real-Time support with Fixed Priority Scheduling and Immediate Priority Ceiling;<br />? Support for Earliest Deadline First (EDF) and Resource Reservation Schedulers;<br />? 1-4 Kb Flash footprint, suitable for 8 to 32 bit microcontrollers;<br />? Support for multi-core platforms;<br />? Support for stack sharing among tasks;<br />? Easy configuration using RT-Druid with Eclipse plugins;<br />? Open-source: GPL2+Linking exception for the kernel, EPL for the Eclipse plugins.</p>', '09307896'),
(12, 'Sample Data', '2016-01-01 07:50:57', '2016-01-01 07:50:57', 'sample-data', '<p>&lt;video src="/uscsportsportal/source/Videos/AllAccess_freshCampTeaser_x264.mp4" controls="controls" width="300" height="150"&gt;AllAccess_freshCampTeaser_x264&lt;/video&gt;</p>', '09307896');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Mixed');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('8349c01be3563bd44987ae0a917410d731e521ed', '::1', 1455455212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353435353231323b),
('40e0b8861ef355a14f7043e623c415f418d43d71', '::1', 1455455552, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353435353531343b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('09d325edbabf77865832964bfc090a4122dac631', '::1', 1455456083, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353435353833323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('1c520dc76dc79e8d3601c8c3834332b59104ac80', '::1', 1455456619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353435363334363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('3dd9de058ba88a74d26813d54f2fe62357f9416d', '::1', 1455457880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353435373831303b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('b51dd58f2489a9f7748c61a79bde9906ba27e187', '::1', 1455458402, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353435383131333b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('a379e266bdb90aaedbf3419c4552444cce313246', '::1', 1455463040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436323736353b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('24b409834174c0e4bb9738bb6c18627642ccdab9', '::1', 1455463252, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436333133323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('ec1f63943d046d2b88132421217021c72208b770', '::1', 1455463877, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436333537373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('a1f1811b341907b0ca292a03521854c36e717b6e', '::1', 1455464179, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436333838333b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('9c27c5eb9915a15767076df409570e4f2419a458', '::1', 1455464334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436343138343b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('99cce8398f75690f8edede2c8af0243a82f9a4e2', '::1', 1455464859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436343535393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('244079da5c7ace5ac5064dadcc7d9ec7c408d0a1', '::1', 1455465021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436353030393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('e429935fb817c90104629cae80da00e0de43f24d', '::1', 1455466120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436353932303b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('310c0c331bdbedc936ff858253047ccdfef379d4', '::1', 1455466320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436363233333b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('9a36b13d64d7d2866ddd90abb0a2b13d4242bd42', '::1', 1455466806, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436363538393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('8ad63785f8e9ebe07de76bb5f61c3cf5e1c68718', '::1', 1455466959, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436363932323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031343a31323a3032223b69735f6c6f676765645f696e7c623a313b),
('16092047f61e635110345bc8cd8e3bf05ed7fc6d', '::1', 1455467708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436373430393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('c355290e96b191000f0cce55a5da45f9506cefc6', '::1', 1455467979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436373731313b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('4477ba45c8bb5730d91787d2d54eda48769aab1b', '::1', 1455468221, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436383033353b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('120c2c3f6168004fb36ee9bf68a83942145d550b', '::1', 1455468706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436383431373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('33cc9bf900ed8f6371320f8cb6e65977b274eb7e', '::1', 1455468762, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436383736313b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('26f1b6037d5ae4f82672ba1848c5faa8d0316936', '::1', 1455469387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436393337363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('859925dd920aa1bc6485b4f927bce1f4ce1d962a', '::1', 1455470024, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353436393738323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('4dc4b934fd45df79978d2bfecad2ba8ad6efba2b', '::1', 1455470399, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353437303134363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('e4c17df2643f4f11cbca85f584d90c75ca0cd125', '::1', 1455470510, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353437303531303b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31342031373a33343a3135223b69735f6c6f676765645f696e7c623a313b),
('333b5e888840dfe90f275ba8f09536c065da5dcc', '127.0.0.1', 1455500086, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530303038353b),
('6fbff16fb0784ec35ab817376f78ccd33bd360ae', '::1', 1455502459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530323435383b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('758c2f1749a8df124cc918b3d973198eaa405095', '::1', 1455503127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530323833323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('3df69e185ede90ac1cb8a2775a757598f592c5fa', '::1', 1455503912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530333930323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('7606e85c1cd588b168e85ea3c85bc3dd22f1f4ec', '::1', 1455505733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530353433383b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('2e7a78fdea28eef258ec5fc6441c1aaa6cc1bfb9', '::1', 1455505906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530353734333b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('92deb9d825b6cf76eb0478214fa4bb2ca2945400', '::1', 1455506432, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530363136363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('bce810647aa85ef24ab4078cf7cab8195b60e9ad', '::1', 1455506845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530363633313b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('edc31c0c43e4238dff07b943883c39a71129a627', '::1', 1455507207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530363935393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('47ef91752339a5a7c74fba64372c70297d972214', '::1', 1455507599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353530373330323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('6eabe8509e0f912793f8e3ade633a7aee61c248e', '::1', 1455514229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531333933353b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('f9c12ae9df8417cc6b403ae5e807342a9e4f4f27', '::1', 1455514386, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531343233373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('9e8e0233e2e7220cdc9d1914606ac61432cdd256', '::1', 1455514784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531343732363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('149a7d23d417cc845ecb1eec7eb539f938fcd218', '::1', 1455515359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531353037333b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('0d5fbb846233361ab71293ed13152e6db7ccdb02', '::1', 1455515819, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531353638373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('93052150aebfcbb61670e338bed71c06c1e93f89', '::1', 1455516425, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531363133303b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('85123e0df1218975114b2769a49a609525462a0d', '::1', 1455516651, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531363437363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('4c9f22e8d8e0ba9749ac87f617e95f64f74ab08e', '::1', 1455517229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531363939303b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b),
('6e0052602af0b4bdb5b83e3f0d029cce54f675a0', '::1', 1455517370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435353531373336393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30322d31352030333a31343a3138223b69735f6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(64) NOT NULL,
  `game_desc` text NOT NULL,
  `game_photo` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `game_desc`, `game_photo`) VALUES
(1, 'Basketball', '<p><img style="float: left;" src="/uscsportsportal/source/basketball.jpg" alt="basketball" /></p>\r\n<p style="text-align: justify;">Basketball is played by 2 teams of 5 players scoring points by shooting the ball through a hoop elevated above the ground at each end of the court. Each game is split into 4 quarters of 10 minutes. There shall be a 2-minute interval between the first and second quarter, and between the third and fourth quarter.<br /><br />There shall also be a half-time of 10 minutes between the second and third quarter. If scores are tied at the end of normal time, extra period(s) of 5 minutes per period may be played until a winner emerges.&nbsp;<br /><br />Each goal shall be counted as 2 or 3 points, depending on the location on the court from which the shot was taken, with the exception of free throws, which are counted as 1 point per successful goal.<br /><br />The team with the most points at the end of the game wins. Basketball is one of the world&rsquo;s most popular and widely viewed sports.<br />There are two events for basketball at the 28th SEA Games.</p>\r\n<ul class="markered">\r\n<li style="text-align: justify;">Men''s Team</li>\r\n<li style="text-align: justify;">Women''s Team</li>\r\n</ul>', ''),
(2, 'Badminton', '<p><img style="float: left;" src="/uscsportsportal/source/badminton.jpg" alt="badminton" /></p>\r\n<p style="text-align: justify;">Badminton is a racquet sport that is usually played between 2 players or 4 players (2 pairs of 2) and a shuttlecock. The shuttlecock is a feathered projectile whose unique aerodynamic properties causes it to react differently from balls that are generally used in most racquet sports; feathers create much higher drag, causing the shuttlecock to decelerate more rapidly than a ball. Each side may only strike the shuttlecock once before it passes over the net.</p>\r\n<p style="text-align: justify;">Each badminton match shall be played according to best-of-three games format. The first player or team to score 21 points shall be the winner. If the score becomes 20-all, the side which gains a 2-point lead shall win that game. If the score becomes 29-all, the side which scores the 30<sup>th</sup> point shall win that game.</p>\r\n<p style="text-align: justify;">A total of seven (7) Badminton events will be featured at the 28<sup>th</sup> SEA Games:</p>\r\n<ul>\r\n<li style="text-align: justify;">Singles (Men&rsquo;s and Women&rsquo;s)</li>\r\n<li style="text-align: justify;">Doubles (Men&rsquo;s, Women&rsquo;s and Mixed)</li>\r\n<li style="text-align: justify;">Team (Men&rsquo;s and Women&rsquo;s)</li>\r\n</ul>', ''),
(3, 'Football', '<p><img style="float: left;" src="/uscsportsportal/source/football.jpg" alt="football" /></p>\r\n<p style="text-align: justify;">Football is played between two teams of 11 players each (including the goalkeeper) on the field of play. Each team tries to score into the opponent''s goal and prevent the other team from scoring. The ball may be passed, tapped, rolled or dribbled in any direction using the feet, headed using the head, as well as thrown from the sidelines in the case of a throw-in.</p>\r\n<p style="text-align: justify;">Playing time, or otherwise termed &lsquo;normal time&rsquo; or &lsquo;regulation time&rsquo;, consists of two halves of 45 minutes with a half-time interval of 15 minutes. In knockout rounds, if the scores remain level after normal time, an extra time consisting of two halves of 15 minutes each shall be played except for the Bronze medal playoff, which shall proceed directly to a penalty shootout in event of a draw after normal time. A penalty shootout shall be conducted if the score still remains even after extra time. A team wins if it scores more goals after the end of normal time, extra time or penalty shootout.</p>\r\n<p style="text-align: justify;">Football is widely recognised as the world''s most popular sport.<br />The 28th SEA Games will have one (1) event in Football:&nbsp;</p>\r\n<ul class="markered">\r\n<li>Men''s Team</li>\r\n</ul>', ''),
(4, 'Volleyball', '<p><img style="float: left;" src="/uscsportsportal/source/volleyball.jpg" alt="volleyball" />Volleyball is an Olympic recognised team sport in which two teams of six active players, separated by a high net, try to score points against one another under organized rules.<br /><br />Volleyball is a game involving common techniques of spiking, passing, blocking, and setting, as well as specialised player positions and offensive and defensive structures. Because many plays are made above the top of the net, vertical jumping is a skill emphasised in volleyball.&nbsp;<br /><br />Points are scored by grounding the ball on the opponents'' court, or when the opponent commits a fault. Each team can contact the ball no more than three times before the ball must cross the net and consecutive contacts must be made by different players. The ball is usually played with the hands or arms, but players can legally contact the ball with any part of the body.<br /><br />The first team to reach at least 25 points wins the set, but which the winning team must win by at least 2 points. In international competitive volleyball, a best of 5 sets format is used whereby the first team to win three sets wins the match.&nbsp;<br /><br />A total of two (2) Volleyball events will be featured in the 28th SEA Games:&nbsp;<br />&bull; Men&rsquo;s Team<br />&bull; Women&rsquo;s Team</p>\r\n<p><span style="color: #484848; font-family: MuseoSans, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 24px;">&nbsp;</span></p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `matchup`
--

CREATE TABLE IF NOT EXISTS `matchup` (
  `match_id` int(11) NOT NULL,
  `team1` int(11) NOT NULL,
  `team2` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `team1_score` varchar(22) NOT NULL DEFAULT '0',
  `team2_score` varchar(22) NOT NULL DEFAULT '0',
  `team1_res` varchar(21) NOT NULL DEFAULT 'Default',
  `team2_res` varchar(21) NOT NULL DEFAULT 'Default',
  `game` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `status` varchar(22) NOT NULL DEFAULT 'Official',
  `match_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchup`
--

INSERT INTO `matchup` (`match_id`, `team1`, `team2`, `time`, `date`, `team1_score`, `team2_score`, `team1_res`, `team2_res`, `game`, `category`, `status`, `match_added`) VALUES
(1, 0, 0, '00:00:00', '0000-00-00', '40', '39', 'Default', 'Default', 0, 0, 'Official', '2016-01-18 19:52:41'),
(2, 15, 11, '12:00:00', '2016-02-29', '12', '13', 'Loss', 'Win', 1, 1, 'Cancelled', '2016-01-28 18:09:11'),
(3, 10, 9, '00:00:00', '2016-02-26', '43', '45', '', '', 1, 1, 'Cancelled', '2016-01-28 18:11:27'),
(4, 9, 9, '00:00:00', '2016-01-30', '43', '44', 'Loss', 'Win', 1, 1, 'Official', '2016-01-28 18:13:56'),
(5, 9, 9, '12:05:00', '2016-02-26', '21', '32', 'Loss', 'Win', 1, 1, 'Official', '2016-01-28 18:13:59'),
(6, 10, 9, '15:23:00', '2016-01-27', '32', '12', 'Default', 'Default', 1, 1, 'Cancelled', '2016-01-28 21:57:15'),
(7, 10, 9, '13:00:00', '2016-01-30', '0', '0', 'Default', 'Default', 1, 3, 'Cancelled', '2016-01-28 22:25:46'),
(8, 10, 9, '13:00:00', '2016-01-30', '20', '21', '', '', 1, 3, 'Official', '2016-01-28 22:28:52'),
(9, 10, 9, '11:59:00', '2016-01-30', '43', '65', 'Loss', 'Win', 1, 1, 'Official', '2016-01-28 22:29:41'),
(10, 10, 9, '11:59:00', '2016-01-30', '60', '20', 'Loss', 'Win', 1, 1, 'Official', '2016-01-28 22:30:36'),
(11, 10, 9, '11:59:00', '2016-02-27', '12', '34', 'Loss', 'Win', 1, 1, 'Cancelled', '2016-01-28 22:32:48'),
(12, 9, 9, '00:54:00', '2016-02-02', '0', '0', 'Default', 'Default', 1, 3, 'Official', '2016-01-28 22:36:33'),
(13, 9, 9, '00:54:00', '2016-02-02', '0', '0', 'Default', 'Default', 1, 3, 'Official', '2016-01-28 22:39:00'),
(14, 9, 9, '00:54:00', '2016-02-02', '0', '0', 'Default', 'Default', 1, 3, 'Official', '2016-01-28 22:44:45'),
(15, 12, 11, '13:00:00', '2016-02-06', '0', '0', 'Default', 'Default', 3, 1, 'Official', '2016-01-28 23:11:32'),
(16, 10, 10, '00:00:00', '2016-01-31', '0', '0', 'Default', 'Default', 1, 2, 'Official', '2016-01-29 21:42:41'),
(17, 10, 9, '01:59:00', '2016-02-26', '0', '0', 'Default', 'Default', 1, 1, 'Official', '2016-02-02 14:46:20'),
(18, 9, 10, '12:30:00', '2016-02-29', '51', '23', 'Default', 'Default', 1, 2, 'Official', '2016-02-03 14:03:27'),
(19, 16, 13, '12:00:00', '2016-02-24', '21', '12', 'Loss', 'Win', 2, 1, 'Official', '2016-02-07 11:34:12'),
(20, 0, 0, '13:59:00', '2016-02-24', '0', '0', 'Default', 'Default', 1, 1, 'Official', '2016-02-13 22:37:47'),
(21, 0, 0, '12:00:00', '2016-02-24', '0', '0', 'Default', 'Default', 1, 1, 'Official', '2016-02-13 22:38:27'),
(22, 15, 11, '23:59:00', '2016-02-25', '0', '0', 'Default', 'Default', 1, 1, 'Official', '2016-02-14 21:50:48'),
(23, 15, 11, '12:59:00', '2016-02-23', '0', '0', 'Default', 'Default', 1, 1, 'Official', '2016-02-14 21:51:20'),
(24, 13, 16, '23:57:00', '2016-02-23', '43', '32', 'Loss', 'Win', 2, 1, 'Official', '2016-02-14 23:33:09'),
(25, 18, 17, '12:59:00', '2016-02-23', '0', '0', 'Default', 'Default', 2, 2, 'Cancelled', '2016-02-14 23:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(128) NOT NULL,
  `news_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slug` varchar(128) NOT NULL,
  `news_content` text NOT NULL,
  `admin_id` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_pub`, `news_updated`, `slug`, `news_content`, `admin_id`) VALUES
(18, 'USC Warriors Made It', '2015-11-22 08:45:11', '2015-11-22 08:45:11', 'usc-warriors-made-it', '<p>ERICKA ENTERPRISE<br />It is an open-source and royalty-free OSEK/VDX Kernel. This RTOS includes also RT-Druid, which is a development environment distributed as a set of Eclipse plugins.<br />Main Features:<br />? Hard Real-Time support with Fixed Priority Scheduling and Immediate Priority Ceiling;<br />? Support for Earliest Deadline First (EDF) and Resource Reservation Schedulers;<br />? 1-4 Kb Flash footprint, suitable for 8 to 32 bit microcontrollers;<br />? Support for multi-core platforms;<br />? Support for stack sharing among tasks;<br />? Easy configuration using RT-Druid with Eclipse plugins;<br />? Open-source: GPL2+Linking exception for the kernel, EPL for the Eclipse plugins.</p>', '09307896'),
(19, 'Warriors On Their Way Congratulations', '2015-12-30 09:08:29', '2015-12-30 09:08:29', 'warriors-on-their-way-congratulations', '<p><img class="post-img" src="/uscsportsportal/source/Fresh Camp Logo for White Shirt.png" alt="Fresh Camp Logo for White Shirt" width="1000" height="650"></p>\r\n<p>ERICKA ENTERPRISE<br />It is an open-source and royalty-free OSEK/VDX Kernel. This RTOS includes also RT-Druid, which is a development environment distributed as a set of Eclipse plugins.<br />Main Features:<br />? Hard Real-Time support with Fixed Priority Scheduling and Immediate Priority Ceiling;<br />? Support for Earliest Deadline First (EDF) and Resource Reservation Schedulers;<br />? 1-4 Kb Flash footprint, suitable for 8 to 32 bit microcontrollers;<br />? Support for multi-core platforms;<br />? Support for stack sharing among tasks;<br />? Easy configuration using RT-Druid with Eclipse plugins;<br />? Open-source: GPL2+Linking exception for the kernel, EPL for the Eclipse plugins.</p>', '09307896'),
(20, 'Sample News 01', '2015-12-30 09:14:25', '2015-12-30 09:14:25', 'sample-news-01', '<p>sample</p>', '09307896'),
(21, 'Sample News 02', '2015-12-30 09:17:12', '2015-12-30 09:17:12', 'sample-news-02', '<p>sample</p>', '09307896'),
(22, 'Sample News 03', '2015-12-30 09:17:26', '2015-12-30 09:17:26', 'sample-news-03', '<p>askasa</p>', '09307896'),
(23, 'Sample News 04', '2015-12-30 09:17:42', '2015-12-30 09:17:42', 'sample-news-04', '<p>asasa</p>', '09307896'),
(24, 'Sample News 05', '2015-12-30 09:23:39', '2015-12-30 09:23:39', 'sample-news-05', '<p>asas</p>', '09307896'),
(25, 'Sample News 06', '2015-12-30 09:23:58', '2015-12-30 09:23:58', 'sample-news-06', '<p>sasa</p>', '09307896'),
(26, 'Sample News 07', '2015-12-30 09:24:08', '2015-12-30 09:24:08', 'sample-news-07', '<p>asaslkj</p>', '09307896'),
(27, 'Sample News 08', '2015-12-30 09:24:21', '2015-12-30 09:24:21', 'sample-news-08', '<p>zzz</p>', '09307896'),
(28, 'Sample News 09', '2015-12-30 09:24:41', '2015-12-30 09:24:41', 'sample-news-09', '<p>salksjdsd</p>', '09307896'),
(29, 'Sample Data', '2016-01-15 02:33:12', '2016-01-15 02:33:12', 'sample-data', '<p><img class="post-img" src="/uscsportsportal/source/post-img.jpg" alt="post-img" width="937" height="305" /></p>\r\n<p style="text-align: center;"><span style="color: #00ff00;">THE MOMENT HAS BEEN DONE</span></p>', '09307896'),
(30, 'SAS', '2016-02-12 12:16:47', '2016-02-12 12:16:47', 'sas', '<p>The School&nbsp;of Arts and Sciences is the home of several nationally accredited undergraduate and graduate programs.&nbsp; Scientific inquiry and historical awareness, social relations, and general welfare are themes flowing through the curriculum, which are imagined, formulated, and implemented by dedicated and accomplished faculty members who constantly seek regular updating, engage in innovative research and artistically creative endeavors.</p>\r\n<p>With two divisions (Arts division and Sciences Division) covering ten academic departments and several affiliated centers and institutes, the College of Arts and Sciences provides an environment where students may both explore a wide range of interests and find their areas of specialization.</p>\r\n<p>The College&rsquo;s curricular offerings teach students to discover knowledge independently, and to think critically, creatively, and analytically.</p>\r\n<ul class="markered" style="list-style-type: circle;">\r\n<li>The College prepares students for professional careers and provides them with the foundation for lifelong learning.&nbsp; It also has the primary responsibility for the two-year general education curriculum required of all students of the university.</li>\r\n</ul>', '09307896'),
(31, 'SBE', '2016-01-15 02:39:47', '2016-01-15 02:39:47', 'sbe', '<p style="text-align: justify;">The School of Business and Economics (SBE) is previously named as the College of Commerce of the University of San Carlos. It has come a long way after it was founded in 1937. Fr. Bernard Bonk, SVD, is the founder and first Dean of the college of the then San Carlos College, now the University of San Carlos. It is currently composed of the following departments: Accountancy, Business Administration, Hospitality Management, Economics, and Graduate Programs.</p>', '09307896');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_desc` text NOT NULL,
  `school_logo` varchar(100) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_desc`, `school_logo`, `points`) VALUES
(1, 'School of Arts and Sciences', '<p style="text-align: justify;">The School&nbsp;of Arts and Sciences is the home of several nationally accredited undergraduate and graduate programs.&nbsp; Scientific inquiry and historical awareness, social relations, and general welfare are themes flowing through the curriculum, which are imagined, formulated, and implemented by dedicated and accomplished faculty members who constantly seek regular updating, engage in innovative research and artistically creative endeavors.</p>\n<p style="text-align: justify;">With two divisions (Arts division and Sciences Division) covering ten academic departments and several affiliated centers and institutes, the College of Arts and Sciences provides an environment where students may both explore a wide range of interests and find their areas of specialization.</p>\n<p style="text-align: justify;">The College&rsquo;s curricular offerings teach students to discover knowledge independently, and to think critically, creatively, and analytically.</p>\n<p style="text-align: justify;">The College prepares students for professional careers and provides them with the foundation for lifelong learning.&nbsp; It also has the primary responsibility for the two-year general education curriculum required of all students of the university.</p>', '<img src="/uscsportsportal/source/cropped-cas1.jpg" alt="cropped-cas1" />', 43),
(2, 'School of Business and Economics', '<p style="text-align: justify;">The School of Business and Economics (SBE) is previously named as the College of Commerce of the University of San Carlos. It has come a long way after it was founded in 1937. Fr. Bernard Bonk, SVD, is the founder and first Dean of the college of the then San Carlos College, now the University of San Carlos. It is currently composed of the following departments: Accountancy, Business Administration, Hospitality Management, Economics, and Graduate Programs.</p>', '<img src="/uscsportsportal/source/sbe.jpg" alt="" />', 57),
(3, 'School of Health Care Profession', '<p style="text-align: justify;">The USC Department of Nursing has some of the most advanced equipment and facilities used in Nursing instruction in the country today. Its affiliation with well-equipped hospitals and other health institutions also exposes the Carolinian interns to procedures and technologies which have become the standards of contemporary Nursing practice here and abroad.\n\nThe Department of Pharmacy is one of the two academic departments under the School of Health Care Professions. A College for over 60 years, we have brought University of San Carlos honor with quality education and training of students to produce a long list of topnotchers in the Pharmacists Licensure Examination. Consistently, the program maintains above national passing percentage in the licensure examination.</p>', '<img src="/uscsportsportal/source/shcp.jpg" alt="" />', 33),
(4, 'School of Education', '<p style="text-align: justify;">In the College of Education, you will find a comprehensive listing of graduate and baccalaureate programs leading to baccalaureate, master and doctorate degrees. These programs are accredited by the Philippine Accrediting Association of Schools, Colleges and Universities (PAASCU). \n\nThe Commission on Higher Education has recognized the College of Education as a Center of Excellence in Teacher Education, an award for exemplary performance in the core functions of instruction, research, and community extension services. While this is a source of pride, it is also a challenge: to sustain the excellence that has been so recognized.</p>', '<img src="/uscsportsportal/source/coed.jpg" alt="" />', 0),
(5, 'School of Law and Governance', '<p style="text-align: justify;">The College of Law is among the top law schools in the country and is a recipient of Award of Excellence in Legal Education from the Legal Education Board, the body tasked to supervise law schools in the country. It is also among the largest law schools in the country, with an average enrollment of close to six hundred students, male and female in almost equal proportion. It also welcomes foreign students and faculty under its various exchange programs. The College is the only one with Staff and Student Exchange Program with Stockholm University, Sweden; Diponegoro University in Semarang, Indonesia and the American Graduate School in Paris, France. It also has a Supreme Court- accredited Clinical Legal Education Program, and is an accredited MCLE provider.\r\nIts facilities include spacious fully air-conditioned library with computer room and perk area, fully air-conditioned classrooms with multi-media instructional facilities, wi-fi connection, two moot courts, separate Clinical Legal Education Program (CLEP) and student organizations office, conference room, and faculty lounge. Its law library was named one of the Model Law Libraries by the Supreme Court, and is the first in the country to provide the bundled services of CDAsia Online and Lexis Nexis to its students.\r\nIts aim is to develop competent and socially responsible lawyers and lifelong learners in an environment that fosters excellence in the academic core processes of teaching-learning, research, and community extension service within a Catholic education that embodies the principles of academic discipline of San Carlos Borromeo and the missionary charism of the Society of the Divine Word (SVD). Its mission is to provide timely, relevant, and transformative academic law programs responsive to the needs of the local, national, and global communities in a rapidly changing world.\r\nFounded in 1937, it celebrates its 75th year as a College this School Year 2012- 2013.</p>', '<img src="/uscsportsportal/source/slg.jpg" alt="" />', 0),
(6, 'School of Engineering', '<p style="text-align: justify;">The College of Engineering considers research as an integral part of the students’ curriculum. Faculty members and students actively engage in research projects. Collaborative projects between the academe and the industry are also carried out by the different departments. The College has established linkages with various national and international research and academic institutions. Integrating quality instruction and research in all aspects of the engineering curriculum remains the commitment of the College. \r\n\r\nThe College’s vision is closely tied to that of the University. It seeks to develop technically-competent, globally-competitive engineers who are socially-responsible and life-long learners. The college aims to provide relevant academic programs responsive to the needs of the local, national, and global communities.</p>', '<img src="/uscsportsportal/source/coe.jpg" alt="" />', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(30) NOT NULL,
  `game_cat` int(11) NOT NULL,
  `team_cat` int(11) NOT NULL,
  `FKschool_id` int(11) NOT NULL,
  `wins` int(11) NOT NULL DEFAULT '0',
  `loss` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `game_cat`, `team_cat`, `FKschool_id`, `wins`, `loss`) VALUES
(9, 'Marvin', 1, 3, 2, 21, 16),
(10, 'SaM', 1, 3, 1, 9, 14),
(11, 'Gama', 1, 1, 3, 0, 0),
(12, 'alpha', 3, 3, 4, 0, 0),
(13, 'usc', 2, 1, 1, 3, 2),
(14, 'arch', 3, 3, 3, 0, 0),
(15, 'SHCP basketman', 1, 1, 3, 0, 0),
(16, 'goodminton', 2, 1, 3, 1, 2),
(17, 'women', 2, 2, 4, 0, 0),
(18, 'girl', 2, 2, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `email_address` varchar(64) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `school` int(11) NOT NULL,
  `home_address` varchar(64) NOT NULL,
  `stud_id` varchar(8) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `user_type` enum('admin','member') NOT NULL DEFAULT 'member',
  `status` enum('Delete','Restore','','') NOT NULL DEFAULT 'Delete',
  `button` enum('EButton','DButton','IButton','') NOT NULL DEFAULT 'DButton'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_address`, `fname`, `lname`, `school`, `home_address`, `stud_id`, `username`, `password`, `contact_no`, `user_type`, `status`, `button`) VALUES
(6, 'marvinzamoras@gmail.com', 'Marvin', 'Zamoras', 1, 'Talamban Campus', '09307896', 'marvinzamoras', 'marvszam', '09395980177', 'admin', 'Delete', 'DButton'),
(7, 'ajmondoy@gmail.com', 'Alji May', 'Ondoy', 5, 'DORM', '09307897', 'ajmondoy', 'admin', '09335980177', 'member', 'Restore', 'EButton'),
(10, 'jay@gmail.com', 'jay', 'csaanas', 1, 'dkfhjdlfkhj', '09306785', 'jay', 'admin', '09123456789', 'member', 'Delete', 'DButton'),
(11, 'martinzamoras@gmail.com', 'Martin', 'Zamoras', 1, 'Cebu City', '09307891', 'martinzamoras', 'admin', '09339867267', 'admin', 'Delete', 'DButton'),
(12, 'ar@yahoo.com', 'archiel', 'larot', 1, 'apas', '11102337', 'archiel', 'admin', '09271536148', 'member', 'Delete', 'DButton'),
(13, 'syvia@yahoo.com', 'Sylvia', 'Zamoras', 1, 'Tabunok', '09307894', 'sylviazamoras', 'marvszam', '09203456789', 'member', 'Delete', 'DButton');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ann_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `matchup`
--
ALTER TABLE `matchup`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`),
  ADD KEY `game_cat` (`game_cat`),
  ADD KEY `team_cat` (`team_cat`),
  ADD KEY `FKschool_id` (`FKschool_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `school` (`school`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `matchup`
--
ALTER TABLE `matchup`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`game_cat`) REFERENCES `game` (`game_id`),
  ADD CONSTRAINT `teams_ibfk_2` FOREIGN KEY (`game_cat`) REFERENCES `game` (`game_id`),
  ADD CONSTRAINT `teams_ibfk_3` FOREIGN KEY (`team_cat`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `teams_ibfk_4` FOREIGN KEY (`FKschool_id`) REFERENCES `school` (`school_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`school`) REFERENCES `school` (`school_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
