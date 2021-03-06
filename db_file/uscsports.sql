-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2016 at 12:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uscsports`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `ann_id` int(11) NOT NULL AUTO_INCREMENT,
  `ann_title` varchar(28) NOT NULL,
  `ann_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ann_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slug` varchar(128) NOT NULL,
  `ann_content` text NOT NULL,
  `admin_id` varchar(8) NOT NULL,
  PRIMARY KEY (`ann_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`ann_id`, `ann_title`, `ann_pub`, `ann_updated`, `slug`, `ann_content`, `admin_id`) VALUES
(10, 'Basketball Tryouts', '2015-11-22 08:54:18', '2015-11-22 08:54:18', 'basketball-tryouts', '<p>ERICKA ENTERPRISE<br />It is an open-source and royalty-free OSEK/VDX Kernel. This RTOS includes also RT-Druid, which is a development environment distributed as a set of Eclipse plugins.<br />Main Features:<br />? Hard Real-Time support with Fixed Priority Scheduling and Immediate Priority Ceiling;<br />? Support for Earliest Deadline First (EDF) and Resource Reservation Schedulers;<br />? 1-4 Kb Flash footprint, suitable for 8 to 32 bit microcontrollers;<br />? Support for multi-core platforms;<br />? Support for stack sharing among tasks;<br />? Easy configuration using RT-Druid with Eclipse plugins;<br />? Open-source: GPL2+Linking exception for the kernel, EPL for the Eclipse plugins.<img class="post-img" src="/uscsportsportal/source/Fresh Camp Logo for White Shirt.png" alt="Fresh Camp Logo for White Shirt" width="1000" height="650"></p>', '09307896'),
(11, 'Tennis Tryouts', '2015-11-22 08:55:35', '2015-11-22 08:55:35', 'tennis-tryouts', '<p>ERICKA ENTERPRISE</p>\r\n<p>It is an open-source and royalty-free OSEK/VDX Kernel. This RTOS includes also RT-Druid, which is a development environment distributed as a set of Eclipse plugins.<br />Main Features:<br />? Hard Real-Time support with Fixed Priority Scheduling and Immediate Priority Ceiling;<br />? Support for Earliest Deadline First (EDF) and Resource Reservation Schedulers;<br />? 1-4 Kb Flash footprint, suitable for 8 to 32 bit microcontrollers;<br />? Support for multi-core platforms;<br />? Support for stack sharing among tasks;<br />? Easy configuration using RT-Druid with Eclipse plugins;<br />? Open-source: GPL2+Linking exception for the kernel, EPL for the Eclipse plugins.</p>', '09307896'),
(12, 'Sample Data', '2016-01-01 07:50:57', '2016-01-01 07:50:57', 'sample-data', '<p>&lt;video src="/uscsportsportal/source/Videos/AllAccess_freshCampTeaser_x264.mp4" controls="controls" width="300" height="150"&gt;AllAccess_freshCampTeaser_x264&lt;/video&gt;</p>', '09307896');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9cd694322291a0afd50db293ca63f68376300fde', '::1', 1452907453, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323930373236393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('e594fcd100598397108d2f768cb0d193d4e8cd90', '::1', 1452907803, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323930373631353b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('16bc4094ee65fbc6b0a35165ba2a074bff4b1653', '::1', 1452908610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323930383332333b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('1bf318873922b71ea071943f18b19751b1fdd575', '::1', 1452909118, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323930383932303b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('4407ded1f5e1dab6162a5d1007e9d1945f888249', '::1', 1452909278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323930393236393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('3fe8e3709f036f6136cc76e827d3538f36a1c804', '::1', 1452910068, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323930393939323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('1311804512baedd12cfc2006f5cdc49787d5af43', '::1', 1452910662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931303630363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('06cdb4858ac4c7f5d96e70243ba166f7bfed4bee', '::1', 1452911307, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931313033323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('b834834d0295bd6ba42ef8da17d554f30219356c', '::1', 1452911371, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931313334373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('ac9e35111ed8db5f495c277ac67d96b8ffbbc34b', '::1', 1452912228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931313936373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('b8db42b159c778d7d75506d0b2a138da1707a702', '::1', 1452912599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931323332363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('5fd570dd694acf062ba9591fb87e7b341afb5e8f', '::1', 1452912660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931323635323b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('b30dc680a2399c945d3641270b96e79a77771dca', '::1', 1452913855, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931333732313b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('433afc7a8bdf110aba3b80472a0f304fd380b0a5', '::1', 1452914819, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931343732393b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('42ceb1a9e6e0d1c9902540c08a7a1db92f90fb0c', '::1', 1452915523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931353232353b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('407d59b693cfec06eae0474c25b84bf48bbc8442', '::1', 1452915724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931353532363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('7770cbf2379334db880cd1919524bfabe9fc7d50', '::1', 1452918831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323931383830373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030323a32313a3234223b69735f6c6f676765645f696e7c623a313b),
('7b6fb8f52b94ef3b93d1627fc9fa8f7db59dbd04', '::1', 1452929539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323932393533383b),
('9b97f45f2d8bc290a8810315b36c7991b589e533', '::1', 1452931069, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323933303738363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030383a35333a3036223b69735f6c6f676765645f696e7c623a313b),
('56e31e79b3ef3d4867b33cacfad6fa10c36e3587', '::1', 1452931423, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323933313133383b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030383a35333a3036223b69735f6c6f676765645f696e7c623a313b),
('832007f48f5ffd204806a5929a3aa738c7ec6b04', '::1', 1452931541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323933313434373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030383a35333a3036223b69735f6c6f676765645f696e7c623a313b),
('6d561f66a1935a78ca989d4d57fc69c6cd96e511', '::1', 1452932142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323933313834343b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030383a35333a3036223b69735f6c6f676765645f696e7c623a313b),
('051ef508cfe873e56e1b0b862b40fc7f6b1b79ca', '::1', 1452932344, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323933323136373b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030383a35333a3036223b69735f6c6f676765645f696e7c623a313b),
('21d1b3ef2111a3fbeda719a451f5233caa043720', '::1', 1452933647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323933333633363b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362030383a35333a3036223b69735f6c6f676765645f696e7c623a313b),
('1544057df6147ee2d7126ad5e822dd7d636667c3', '::1', 1452942697, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323934323635333b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362031323a31313a3336223b69735f6c6f676765645f696e7c623a313b),
('11dbe7285311ea6f7a9827dace8f0ab1f0af71f3', '::1', 1452942654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323934323635333b),
('42caa8ff561c0f79c22a017b9b3eaf7465d70a23', '::1', 1452943479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323934333139343b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362031323a31313a3336223b69735f6c6f676765645f696e7c623a313b),
('c8ebeb894aa87f289b24596f1a11c6f027d8e1dc', '::1', 1452943566, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323934333536353b737475645f69647c733a383a223039333037383936223b74696d657c733a31393a22323031362d30312d31362031323a31313a3336223b69735f6c6f676765645f696e7c623a313b),
('5ec79f40d8beda4c2ca8ef5b6186f136525dac62', '::1', 1452943983, 0x5f5f63695f6c6173745f726567656e65726174657c693a313435323934333938333b);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(64) NOT NULL,
  `game_desc` text NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`game_id`, `game_name`, `game_desc`) VALUES
(1, 'basketball', '<p><img class="post-img" src="/uscsportsportal/source/Fresh%20Camp%20Logo%20for%20White%20Shirt.png" alt="Fresh Camp Logo for White Shirt" width="50%" height="50%" />asasasasa</p>'),
(2, 'badminton', 'asas'),
(3, 'Patintero', '<p>sampkadsfdsf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(128) NOT NULL,
  `news_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `news_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slug` varchar(128) NOT NULL,
  `news_content` text NOT NULL,
  `admin_id` varchar(8) NOT NULL,
  PRIMARY KEY (`news_id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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
(30, 'SAS', '2016-01-16 01:29:40', '2016-01-16 01:29:40', 'sas', '<p style="text-align: justify;">The School&nbsp;of Arts and Sciences is the home of several nationally accredited undergraduate and graduate programs.&nbsp; Scientific inquiry and historical awareness, social relations, and general welfare are themes flowing through the curriculum, which are imagined, formulated, and implemented by dedicated and accomplished faculty members who constantly seek regular updating, engage in innovative research and artistically creative endeavors.</p>\n<p style="text-align: justify;">With two divisions (Arts division and Sciences Division) covering ten academic departments and several affiliated centers and institutes, the College of Arts and Sciences provides an environment where students may both explore a wide range of interests and find their areas of specialization.</p>\n<p style="text-align: justify;">The College&rsquo;s curricular offerings teach students to discover knowledge independently, and to think critically, creatively, and analytically.</p>\n<p style="text-align: justify;">The College prepares students for professional careers and provides them with the foundation for lifelong learning.&nbsp; It also has the primary responsibility for the two-year general education curriculum required of all students of the university.</p>', '09307896'),
(31, 'SBE', '2016-01-15 02:39:47', '2016-01-15 02:39:47', 'sbe', '<p style="text-align: justify;">The School of Business and Economics (SBE) is previously named as the College of Commerce of the University of San Carlos. It has come a long way after it was founded in 1937. Fr. Bernard Bonk, SVD, is the founder and first Dean of the college of the then San Carlos College, now the University of San Carlos. It is currently composed of the following departments: Accountancy, Business Administration, Hospitality Management, Economics, and Graduate Programs.</p>', '09307896');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(50) NOT NULL,
  `school_desc` text NOT NULL,
  `school_logo` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_desc`, `school_logo`, `rank`) VALUES
(1, 'School of Arts and Sciences', '<p style="text-align: justify;">The School&nbsp;of Arts and Sciences is the home of several nationally accredited undergraduate and graduate programs.&nbsp; Scientific inquiry and historical awareness, social relations, and general welfare are themes flowing through the curriculum, which are imagined, formulated, and implemented by dedicated and accomplished faculty members who constantly seek regular updating, engage in innovative research and artistically creative endeavors.</p>\n<p style="text-align: justify;">With two divisions (Arts division and Sciences Division) covering ten academic departments and several affiliated centers and institutes, the College of Arts and Sciences provides an environment where students may both explore a wide range of interests and find their areas of specialization.</p>\n<p style="text-align: justify;">The College&rsquo;s curricular offerings teach students to discover knowledge independently, and to think critically, creatively, and analytically.</p>\n<p style="text-align: justify;">The College prepares students for professional careers and provides them with the foundation for lifelong learning.&nbsp; It also has the primary responsibility for the two-year general education curriculum required of all students of the university.</p>', 'none', 0),
(2, 'School of Business and Economics', '<p style="text-align: justify;">The School of Business and Economics (SBE) is previously named as the College of Commerce of the University of San Carlos. It has come a long way after it was founded in 1937. Fr. Bernard Bonk, SVD, is the founder and first Dean of the college of the then San Carlos College, now the University of San Carlos. It is currently composed of the following departments: Accountancy, Business Administration, Hospitality Management, Economics, and Graduate Programs.</p>', 'none', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(30) NOT NULL,
  `game_cat` varchar(30) NOT NULL,
  `team_cat` enum('Singles','Doubles','Group','') NOT NULL DEFAULT '',
  `school_id` varchar(50) NOT NULL,
  `wins` int(11) NOT NULL DEFAULT '0',
  `loss` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `game_cat`, `team_cat`, `school_id`, `wins`, `loss`) VALUES
(9, 'Sample', 'basketball', 'Singles', 'School of Business and Economics', 0, 0),
(10, 'SaM', 'basketball', 'Singles', 'School of Arts and Sciences', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(64) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `school` varchar(64) NOT NULL,
  `home_address` varchar(64) NOT NULL,
  `stud_id` varchar(8) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `user_type` enum('admin','member') NOT NULL DEFAULT 'member',
  `status` enum('Delete','Restore','','') NOT NULL DEFAULT 'Delete',
  `button` enum('EButton','DButton','IButton','') NOT NULL DEFAULT 'DButton',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_address`, `fname`, `lname`, `school`, `home_address`, `stud_id`, `username`, `password`, `contact_no`, `user_type`, `status`, `button`) VALUES
(6, 'marvinzamoras@gmail.com', 'Marvin', 'Zamoras', 'SAS', 'Talamban Campus', '09307896', 'marvinzamoras', 'marvszam', '09395980177', 'admin', 'Delete', 'DButton'),
(7, 'ajmondoy@gmail.com', 'Alji May', 'Ondoy', 'SAS', 'DORM', '09307897', 'ajmondoy', 'admin', '09335980177', 'member', 'Restore', 'EButton'),
(10, 'jay@gmail.com', 'jay', 'csaanas', 'SAS', 'dkfhjdlfkhj', '09306785', 'jay', 'admin', '09123456789', 'member', 'Delete', 'DButton'),
(11, 'martinzamoras@gmail.com', 'Martin', 'Zamoras', 'SAS', 'Cebu City', '09307891', 'martinzamoras', 'admin', '09339867267', 'admin', 'Delete', 'DButton'),
(12, 'ar@yahoo.com', 'archiel', 'larot', 'SAS', 'apas', '11102337', 'archiel', 'admin', '09271536148', 'member', 'Delete', 'DButton'),
(13, 'syvia@yahoo.com', 'Sylvia', 'Zamoras', 'SAS', 'Tabunok', '09307894', 'sylviazamoras', 'marvszam', '09203456789', 'member', 'Delete', 'DButton');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
