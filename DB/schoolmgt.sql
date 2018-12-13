-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 02:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `active` tinyint(11) NOT NULL,
  `regdate` date NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `username`, `password`, `phone`, `picture`, `code`, `active`, `regdate`, `user_status`, `rank`) VALUES
(10, 'Itafor Francis', 'itaforfrancis@gmail.com', 'admin', 'itafor', '07065907948', 'images/francisimage.jpg', '1', 1, '2018-04-28', 'Active', 'admin'),
(11, 'FREEDOM MAN', 'john@gmail.com', 'frank', '26253c50741faa9c2e2b836773c69fe6', '07065907940', 'n', '1', 0, '2018-07-02', 'Active', 'staff'),
(12, 'Laura  Bose', 'frank@gmail.com', 'franko', 'frank', '07065907977', 'n', '1', 0, '2018-07-02', 'Active', 'staff'),
(13, 'Joy Nwake', 'itaforfrancis1@gmail.com', 'frankis', 'frankis', '07065907911', 'n', '1', 1, '2018-07-02', 'Active', 'staff'),
(14, 'mr Admin 2', 'john1@gmail.com', 'good', 'frank', '07065907943', 'n', '1', 1, '2018-07-02', 'Active', 'admin'),
(15, 'Mr. Alen', 'allen@gmail.com', 'allen', 'allen', '09076555555', 'n', '1', 1, '2018-07-03', 'Active', 'staff'),
(16, 'Adeoye Samuel', 'alleno20001@yahoo.com', 'adminhead', 'admin1', '07032270276', 'n', '1', 1, '2018-07-10', 'Active', 'admin'),
(17, 'egbetokun', 'wallex200607@yahoo.com', 'egbetokun', 'araire', '08034678972', 'n', '1', 1, '2018-07-10', 'Active', 'admin'),
(18, 'Adeoye Allen', 'alleno@yahoo.com', 'admin1', 'temitope4me@', '07032270278', 'images/bolson logo.png', '1', 1, '2018-11-13', 'Active', 'admin'),
(19, 'Itafor Francis', 'mathematicsmadeasy@gmail.com', '08/50053', 'francis', '+2347065907948', 'n', '1', 1, '2018-11-14', 'Active', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admname` varchar(32) NOT NULL,
  `admpassword` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admname`, `admpassword`) VALUES
('frank', '26253c50741faa9c2e2b836773c69fe6'),
('root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `anouncement`
--

CREATE TABLE `anouncement` (
  `id` int(11) NOT NULL,
  `mes` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matricno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anouncement`
--

INSERT INTO `anouncement` (`id`, `mes`, `subject`, `date`, `status`, `name`, `matricno`) VALUES
(38, 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election\r\nFemi Otedola Denies Declaring Intention To Run For Lagos Governorship Election by FlirtyKaren(f): 5:32am\r\nNigerian Billionaire, Femi Otedola, has countered claims that he declared his intention to run for the Governor of Lagos State in the 2019 elections. This is coming after a parody account claimed that the billionaire businessman declared his interest in the election, with his Lagos deserves better tweet. The Parody account\'s post reads; \r\n\r\nHowever in new tweets, Femi Otedola who noted that he is a man of the people and will always be on the side of the masses, countered claims of contesting in the 2019 Lagos State Governorship polls. His tweets reads; \r\n\r\nMy attention has been drawn to a news piece where false information from a parody account was posted. I am a man of the people and I will always be on the side of the masses but I am stating clearly via this medium that I am not running for office.\r\n\r\nThe Governor of Lagos State is doing a commendable job and Lagosians should be proud of him.', 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election', '2018-05-18', 'unread', 'Francis Itafor', '08/5444'),
(39, 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election\r\nFemi Otedola Denies Declaring Intention To Run For Lagos Governorship Election by FlirtyKaren(f): 5:32am\r\nNigerian Billionaire, Femi Otedola, has countered claims that he declared his intention to run for the Governor of Lagos State in the 2019 elections. This is coming after a parody account claimed that the billionaire businessman declared his interest in the election, with his Lagos deserves better tweet. The Parody account\'s post reads; \r\n\r\nHowever in new tweets, Femi Otedola who noted that he is a man of the people and will always be on the side of the masses, countered claims of contesting in the 2019 Lagos State Governorship polls. His tweets reads; \r\n\r\nMy attention has been drawn to a news piece where false information from a parody account was posted. I am a man of the people and I will always be on the side of the masses but I am stating clearly via this medium that I am not running for office.\r\n\r\nThe Governor of Lagos State is doing a commendable job and Lagosians should be proud of him.', 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election', '2018-05-18', 'read', 'Francis Itafor', '00217'),
(41, 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election\r\nFemi Otedola Denies Declaring Intention To Run For Lagos Governorship Election by FlirtyKaren(f): 5:32am\r\nNigerian Billionaire, Femi Otedola, has countered claims that he declared his intention to run for the Governor of Lagos State in the 2019 elections. This is coming after a parody account claimed that the billionaire businessman declared his interest in the election, with his Lagos deserves better tweet. The Parody account\'s post reads; \r\n\r\nHowever in new tweets, Femi Otedola who noted that he is a man of the people and will always be on the side of the masses, countered claims of contesting in the 2019 Lagos State Governorship polls. His tweets reads; \r\n\r\nMy attention has been drawn to a news piece where false information from a parody account was posted. I am a man of the people and I will always be on the side of the masses but I am stating clearly via this medium that I am not running for office.\r\n\r\nThe Governor of Lagos State is doing a commendable job and Lagosians should be proud of him.', 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election', '2018-05-18', 'unread', 'Francis Itafor', '08/5000'),
(42, 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election\r\nFemi Otedola Denies Declaring Intention To Run For Lagos Governorship Election by FlirtyKaren(f): 5:32am\r\nNigerian Billionaire, Femi Otedola, has countered claims that he declared his intention to run for the Governor of Lagos State in the 2019 elections. This is coming after a parody account claimed that the billionaire businessman declared his interest in the election, with his Lagos deserves better tweet. The Parody account\'s post reads; \r\n\r\nHowever in new tweets, Femi Otedola who noted that he is a man of the people and will always be on the side of the masses, countered claims of contesting in the 2019 Lagos State Governorship polls. His tweets reads; \r\n\r\nMy attention has been drawn to a news piece where false information from a parody account was posted. I am a man of the people and I will always be on the side of the masses but I am stating clearly via this medium that I am not running for office.\r\n\r\nThe Governor of Lagos State is doing a commendable job and Lagosians should be proud of him.', 'Femi Otedola Denies Declaring Intention To Run For Lagos Governorship Election', '2018-05-18', 'unread', 'Francis Itafor', '09/0001'),
(43, 'Minister of of Power, Works and Housing, Babatunde Fashola inspect the ongoing Rehabilitation and Reconstruction of Enugu-Port Harcourt dual carriageway section, Umuahia tower, Abia State. During his inspection, he spoke with artisans working on the Rehabilitation and Reconstruction of the roads.', 'Fashola Inspects Reconstruction Of Enugu - Port Harcourt Road', '2018-05-18', 'unread', 'Francis Itafor', '08/5444'),
(44, 'Minister of of Power, Works and Housing, Babatunde Fashola inspect the ongoing Rehabilitation and Reconstruction of Enugu-Port Harcourt dual carriageway section, Umuahia tower, Abia State. During his inspection, he spoke with artisans working on the Rehabilitation and Reconstruction of the roads.', 'Fashola Inspects Reconstruction Of Enugu - Port Harcourt Road', '2018-05-18', 'read', 'Francis Itafor', '00217'),
(46, 'Minister of of Power, Works and Housing, Babatunde Fashola inspect the ongoing Rehabilitation and Reconstruction of Enugu-Port Harcourt dual carriageway section, Umuahia tower, Abia State. During his inspection, he spoke with artisans working on the Rehabilitation and Reconstruction of the roads.', 'Fashola Inspects Reconstruction Of Enugu - Port Harcourt Road', '2018-05-18', 'unread', 'Francis Itafor', '08/5000'),
(47, 'Minister of of Power, Works and Housing, Babatunde Fashola inspect the ongoing Rehabilitation and Reconstruction of Enugu-Port Harcourt dual carriageway section, Umuahia tower, Abia State. During his inspection, he spoke with artisans working on the Rehabilitation and Reconstruction of the roads.', 'Fashola Inspects Reconstruction Of Enugu - Port Harcourt Road', '2018-05-18', 'unread', 'Francis Itafor', '09/0001'),
(48, 'It was an enthusiastic welcome for VP Osinbajo who just arrived Enugu to launch N-Power Build where 10,000 young Nigerians have been engaged as we revive Nigeria\'s apprenticeship culture again. The amiable Gov Ugwuanyi led the welcome at the airport', 'PHOTOS: VP Osinbajo Arrives Enugu Amid Great Cheers', '2018-05-18', 'unread', 'Francis Itafor', '08/5444'),
(49, 'It was an enthusiastic welcome for VP Osinbajo who just arrived Enugu to launch N-Power Build where 10,000 young Nigerians have been engaged as we revive Nigeria\'s apprenticeship culture again. The amiable Gov Ugwuanyi led the welcome at the airport', 'PHOTOS: VP Osinbajo Arrives Enugu Amid Great Cheers', '2018-05-18', 'read', 'Francis Itafor', '00217'),
(51, 'It was an enthusiastic welcome for VP Osinbajo who just arrived Enugu to launch N-Power Build where 10,000 young Nigerians have been engaged as we revive Nigeria\'s apprenticeship culture again. The amiable Gov Ugwuanyi led the welcome at the airport', 'PHOTOS: VP Osinbajo Arrives Enugu Amid Great Cheers', '2018-05-18', 'unread', 'Francis Itafor', '08/5000'),
(52, 'It was an enthusiastic welcome for VP Osinbajo who just arrived Enugu to launch N-Power Build where 10,000 young Nigerians have been engaged as we revive Nigeria\'s apprenticeship culture again. The amiable Gov Ugwuanyi led the welcome at the airport', 'PHOTOS: VP Osinbajo Arrives Enugu Amid Great Cheers', '2018-05-18', 'unread', 'Francis Itafor', '09/0001'),
(53, 'This trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '08/5444'),
(54, 'This trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'read', 'joy egbe', '00217'),
(56, 'This trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '08/5000'),
(57, 'This trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '09/0001'),
(58, '\r\n\r\nThis trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '08/5444'),
(59, '\r\n\r\nThis trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '00217'),
(61, '\r\n\r\nThis trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '08/5000'),
(62, '\r\n\r\nThis trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '09/0001'),
(63, '\r\n\r\nThis trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'read', 'joy egbe', '08/50034'),
(64, '\r\n\r\nThis trend has been going on for years in Catholic churches but one can only look aside on any thing pertaining Roman catholic idealogies of their long aged magnitude of haphazard kind of worship.\r\nBut recently Redeemed churches too joined the age lond trend and the occassion is a sight to behold seeing different people with cultural attires displaying all manner of antics in church.\r\nA man even demonstrated some usage of charms and herbs on stage citing it as a cultural believe before christianity and at the end cultural dance was exhibited by various groups.\r\n\r\nMy question is,&quot;where has some of these churches lost it?', 'Is It Right For Churches To Celebrate Cultural Day In Church? ', '2018-05-20', 'unread', 'joy egbe', '08/50011'),
(66, 'You can actually share your personal computer with your kids and friends without worrying about the privacy of your information by setting up computer parental control option in your PC. This option allows you to select which applications, games and website a user should access using your PC.\r\n\r\nNow letÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s get started:\r\n\r\nFirst, youÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ll have to create a different user account for this purpose. IÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢m using Windows 8 operating system for my illustration. From your start menu, go to Settings from the settings icon, choose Users and click on add a user. Add the new user with an optional password and click next.\r\n\r\nIn the final page check ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œIs this a child account? Turn on family safety to get report of their PC useÃƒÂ¢Ã¢â€šÂ¬Ã‚Â.\r\n\r\nHead up to your Control Panel, if you control panel ÃƒÂ¢Ã¢â€šÂ¬Ã‹Å“view byÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ option is set to large icons, this is what you will see below:\r\n\r\nClick on Family Safety\r\n\r\nIf you control panel is set to view by category, you see this type of settings below, click on ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œSet up family safety for any userÃƒÂ¢Ã¢â€šÂ¬Ã‚Â under User Accounts &amp; Family Safety.\r\n\r\nSelect the user you want to apply family safety settings to.\r\n\r\nIn the next page that opens, under family safety, check on, enforce current settings and also recommended for kids, check on, collect information about PC usage.\r\n\r\nClick on apps restriction to select apps you wish to allow or restrict the user from accessing on that computer. You can also set time limit and period where the user should make use of the PC by clicking on time limit. ThereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s also an option available for restriction of windows store and games restriction incase the computer is connection to a WiFi.\r\n\r\nWith the steps above, you can set computer parental control for your child or setup privacy for your documents and applications on your computer.\r\n', 'How To Set Computer Parental Control In PC For Your Child', '2018-05-20', 'unread', 'Francis Itafor', '08/5444'),
(67, 'You can actually share your personal computer with your kids and friends without worrying about the privacy of your information by setting up computer parental control option in your PC. This option allows you to select which applications, games and website a user should access using your PC.\r\n\r\nNow letÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s get started:\r\n\r\nFirst, youÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ll have to create a different user account for this purpose. IÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢m using Windows 8 operating system for my illustration. From your start menu, go to Settings from the settings icon, choose Users and click on add a user. Add the new user with an optional password and click next.\r\n\r\nIn the final page check ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œIs this a child account? Turn on family safety to get report of their PC useÃƒÂ¢Ã¢â€šÂ¬Ã‚Â.\r\n\r\nHead up to your Control Panel, if you control panel ÃƒÂ¢Ã¢â€šÂ¬Ã‹Å“view byÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ option is set to large icons, this is what you will see below:\r\n\r\nClick on Family Safety\r\n\r\nIf you control panel is set to view by category, you see this type of settings below, click on ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œSet up family safety for any userÃƒÂ¢Ã¢â€šÂ¬Ã‚Â under User Accounts &amp; Family Safety.\r\n\r\nSelect the user you want to apply family safety settings to.\r\n\r\nIn the next page that opens, under family safety, check on, enforce current settings and also recommended for kids, check on, collect information about PC usage.\r\n\r\nClick on apps restriction to select apps you wish to allow or restrict the user from accessing on that computer. You can also set time limit and period where the user should make use of the PC by clicking on time limit. ThereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s also an option available for restriction of windows store and games restriction incase the computer is connection to a WiFi.\r\n\r\nWith the steps above, you can set computer parental control for your child or setup privacy for your documents and applications on your computer.\r\n', 'How To Set Computer Parental Control In PC For Your Child', '2018-05-20', 'unread', 'Francis Itafor', '00217'),
(69, 'You can actually share your personal computer with your kids and friends without worrying about the privacy of your information by setting up computer parental control option in your PC. This option allows you to select which applications, games and website a user should access using your PC.\r\n\r\nNow letÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s get started:\r\n\r\nFirst, youÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ll have to create a different user account for this purpose. IÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢m using Windows 8 operating system for my illustration. From your start menu, go to Settings from the settings icon, choose Users and click on add a user. Add the new user with an optional password and click next.\r\n\r\nIn the final page check ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œIs this a child account? Turn on family safety to get report of their PC useÃƒÂ¢Ã¢â€šÂ¬Ã‚Â.\r\n\r\nHead up to your Control Panel, if you control panel ÃƒÂ¢Ã¢â€šÂ¬Ã‹Å“view byÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ option is set to large icons, this is what you will see below:\r\n\r\nClick on Family Safety\r\n\r\nIf you control panel is set to view by category, you see this type of settings below, click on ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œSet up family safety for any userÃƒÂ¢Ã¢â€šÂ¬Ã‚Â under User Accounts &amp; Family Safety.\r\n\r\nSelect the user you want to apply family safety settings to.\r\n\r\nIn the next page that opens, under family safety, check on, enforce current settings and also recommended for kids, check on, collect information about PC usage.\r\n\r\nClick on apps restriction to select apps you wish to allow or restrict the user from accessing on that computer. You can also set time limit and period where the user should make use of the PC by clicking on time limit. ThereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s also an option available for restriction of windows store and games restriction incase the computer is connection to a WiFi.\r\n\r\nWith the steps above, you can set computer parental control for your child or setup privacy for your documents and applications on your computer.\r\n', 'How To Set Computer Parental Control In PC For Your Child', '2018-05-20', 'unread', 'Francis Itafor', '08/5000'),
(70, 'You can actually share your personal computer with your kids and friends without worrying about the privacy of your information by setting up computer parental control option in your PC. This option allows you to select which applications, games and website a user should access using your PC.\r\n\r\nNow letÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s get started:\r\n\r\nFirst, youÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ll have to create a different user account for this purpose. IÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢m using Windows 8 operating system for my illustration. From your start menu, go to Settings from the settings icon, choose Users and click on add a user. Add the new user with an optional password and click next.\r\n\r\nIn the final page check ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œIs this a child account? Turn on family safety to get report of their PC useÃƒÂ¢Ã¢â€šÂ¬Ã‚Â.\r\n\r\nHead up to your Control Panel, if you control panel ÃƒÂ¢Ã¢â€šÂ¬Ã‹Å“view byÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ option is set to large icons, this is what you will see below:\r\n\r\nClick on Family Safety\r\n\r\nIf you control panel is set to view by category, you see this type of settings below, click on ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œSet up family safety for any userÃƒÂ¢Ã¢â€šÂ¬Ã‚Â under User Accounts &amp; Family Safety.\r\n\r\nSelect the user you want to apply family safety settings to.\r\n\r\nIn the next page that opens, under family safety, check on, enforce current settings and also recommended for kids, check on, collect information about PC usage.\r\n\r\nClick on apps restriction to select apps you wish to allow or restrict the user from accessing on that computer. You can also set time limit and period where the user should make use of the PC by clicking on time limit. ThereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s also an option available for restriction of windows store and games restriction incase the computer is connection to a WiFi.\r\n\r\nWith the steps above, you can set computer parental control for your child or setup privacy for your documents and applications on your computer.\r\n', 'How To Set Computer Parental Control In PC For Your Child', '2018-05-20', 'unread', 'Francis Itafor', '09/0001'),
(71, 'You can actually share your personal computer with your kids and friends without worrying about the privacy of your information by setting up computer parental control option in your PC. This option allows you to select which applications, games and website a user should access using your PC.\r\n\r\nNow letÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s get started:\r\n\r\nFirst, youÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ll have to create a different user account for this purpose. IÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢m using Windows 8 operating system for my illustration. From your start menu, go to Settings from the settings icon, choose Users and click on add a user. Add the new user with an optional password and click next.\r\n\r\nIn the final page check ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œIs this a child account? Turn on family safety to get report of their PC useÃƒÂ¢Ã¢â€šÂ¬Ã‚Â.\r\n\r\nHead up to your Control Panel, if you control panel ÃƒÂ¢Ã¢â€šÂ¬Ã‹Å“view byÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ option is set to large icons, this is what you will see below:\r\n\r\nClick on Family Safety\r\n\r\nIf you control panel is set to view by category, you see this type of settings below, click on ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œSet up family safety for any userÃƒÂ¢Ã¢â€šÂ¬Ã‚Â under User Accounts &amp; Family Safety.\r\n\r\nSelect the user you want to apply family safety settings to.\r\n\r\nIn the next page that opens, under family safety, check on, enforce current settings and also recommended for kids, check on, collect information about PC usage.\r\n\r\nClick on apps restriction to select apps you wish to allow or restrict the user from accessing on that computer. You can also set time limit and period where the user should make use of the PC by clicking on time limit. ThereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s also an option available for restriction of windows store and games restriction incase the computer is connection to a WiFi.\r\n\r\nWith the steps above, you can set computer parental control for your child or setup privacy for your documents and applications on your computer.\r\n', 'How To Set Computer Parental Control In PC For Your Child', '2018-05-20', 'unread', 'Francis Itafor', '08/50034'),
(72, 'You can actually share your personal computer with your kids and friends without worrying about the privacy of your information by setting up computer parental control option in your PC. This option allows you to select which applications, games and website a user should access using your PC.\r\n\r\nNow letÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s get started:\r\n\r\nFirst, youÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ll have to create a different user account for this purpose. IÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢m using Windows 8 operating system for my illustration. From your start menu, go to Settings from the settings icon, choose Users and click on add a user. Add the new user with an optional password and click next.\r\n\r\nIn the final page check ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œIs this a child account? Turn on family safety to get report of their PC useÃƒÂ¢Ã¢â€šÂ¬Ã‚Â.\r\n\r\nHead up to your Control Panel, if you control panel ÃƒÂ¢Ã¢â€šÂ¬Ã‹Å“view byÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ option is set to large icons, this is what you will see below:\r\n\r\nClick on Family Safety\r\n\r\nIf you control panel is set to view by category, you see this type of settings below, click on ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œSet up family safety for any userÃƒÂ¢Ã¢â€šÂ¬Ã‚Â under User Accounts &amp; Family Safety.\r\n\r\nSelect the user you want to apply family safety settings to.\r\n\r\nIn the next page that opens, under family safety, check on, enforce current settings and also recommended for kids, check on, collect information about PC usage.\r\n\r\nClick on apps restriction to select apps you wish to allow or restrict the user from accessing on that computer. You can also set time limit and period where the user should make use of the PC by clicking on time limit. ThereÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s also an option available for restriction of windows store and games restriction incase the computer is connection to a WiFi.\r\n\r\nWith the steps above, you can set computer parental control for your child or setup privacy for your documents and applications on your computer.\r\n', 'How To Set Computer Parental Control In PC For Your Child', '2018-05-20', 'unread', 'Francis Itafor', '08/50011'),
(74, 'At an elaborate ceremony in LG showroom Lekki Lagos, LG Electronics officially signed on Nigerian International Football player, Alex Iwobi as its official brand ambassador.\r\n\r\nIt was witnessed by officials of LG Electronics, Fouani Nig. Limited, members of the press and general public. As a promising football star for both club and country, Alex Iwobi has endeared himself to fans both at home and abroad due to his sterling performances.\r\n\r\nIt is on record, he played a crucial role in ensuring that the Super Eagles of Nigeria qualified for the forthcoming World Cup tournament. He is skillful and full of youthful energy, an inspiration to millions of youth who one day long to play football; he indeed represents the future of football; a quality that made him the preferred choice as a brand ambassador for LG Electronics.', 'Alex Iwobi Becomes LG Electronics\' Brand Ambassador ', '2018-05-20', 'unread', 'Francis Itafor', '08/5444'),
(75, 'At an elaborate ceremony in LG showroom Lekki Lagos, LG Electronics officially signed on Nigerian International Football player, Alex Iwobi as its official brand ambassador.\r\n\r\nIt was witnessed by officials of LG Electronics, Fouani Nig. Limited, members of the press and general public. As a promising football star for both club and country, Alex Iwobi has endeared himself to fans both at home and abroad due to his sterling performances.\r\n\r\nIt is on record, he played a crucial role in ensuring that the Super Eagles of Nigeria qualified for the forthcoming World Cup tournament. He is skillful and full of youthful energy, an inspiration to millions of youth who one day long to play football; he indeed represents the future of football; a quality that made him the preferred choice as a brand ambassador for LG Electronics.', 'Alex Iwobi Becomes LG Electronics\' Brand Ambassador ', '2018-05-20', 'unread', 'Francis Itafor', '00217'),
(77, 'At an elaborate ceremony in LG showroom Lekki Lagos, LG Electronics officially signed on Nigerian International Football player, Alex Iwobi as its official brand ambassador.\r\n\r\nIt was witnessed by officials of LG Electronics, Fouani Nig. Limited, members of the press and general public. As a promising football star for both club and country, Alex Iwobi has endeared himself to fans both at home and abroad due to his sterling performances.\r\n\r\nIt is on record, he played a crucial role in ensuring that the Super Eagles of Nigeria qualified for the forthcoming World Cup tournament. He is skillful and full of youthful energy, an inspiration to millions of youth who one day long to play football; he indeed represents the future of football; a quality that made him the preferred choice as a brand ambassador for LG Electronics.', 'Alex Iwobi Becomes LG Electronics\' Brand Ambassador ', '2018-05-20', 'unread', 'Francis Itafor', '08/5000'),
(78, 'At an elaborate ceremony in LG showroom Lekki Lagos, LG Electronics officially signed on Nigerian International Football player, Alex Iwobi as its official brand ambassador.\r\n\r\nIt was witnessed by officials of LG Electronics, Fouani Nig. Limited, members of the press and general public. As a promising football star for both club and country, Alex Iwobi has endeared himself to fans both at home and abroad due to his sterling performances.\r\n\r\nIt is on record, he played a crucial role in ensuring that the Super Eagles of Nigeria qualified for the forthcoming World Cup tournament. He is skillful and full of youthful energy, an inspiration to millions of youth who one day long to play football; he indeed represents the future of football; a quality that made him the preferred choice as a brand ambassador for LG Electronics.', 'Alex Iwobi Becomes LG Electronics\' Brand Ambassador ', '2018-05-20', 'unread', 'Francis Itafor', '09/0001'),
(79, 'At an elaborate ceremony in LG showroom Lekki Lagos, LG Electronics officially signed on Nigerian International Football player, Alex Iwobi as its official brand ambassador.\r\n\r\nIt was witnessed by officials of LG Electronics, Fouani Nig. Limited, members of the press and general public. As a promising football star for both club and country, Alex Iwobi has endeared himself to fans both at home and abroad due to his sterling performances.\r\n\r\nIt is on record, he played a crucial role in ensuring that the Super Eagles of Nigeria qualified for the forthcoming World Cup tournament. He is skillful and full of youthful energy, an inspiration to millions of youth who one day long to play football; he indeed represents the future of football; a quality that made him the preferred choice as a brand ambassador for LG Electronics.', 'Alex Iwobi Becomes LG Electronics\' Brand Ambassador ', '2018-05-20', 'unread', 'Francis Itafor', '08/50034'),
(80, 'At an elaborate ceremony in LG showroom Lekki Lagos, LG Electronics officially signed on Nigerian International Football player, Alex Iwobi as its official brand ambassador.\r\n\r\nIt was witnessed by officials of LG Electronics, Fouani Nig. Limited, members of the press and general public. As a promising football star for both club and country, Alex Iwobi has endeared himself to fans both at home and abroad due to his sterling performances.\r\n\r\nIt is on record, he played a crucial role in ensuring that the Super Eagles of Nigeria qualified for the forthcoming World Cup tournament. He is skillful and full of youthful energy, an inspiration to millions of youth who one day long to play football; he indeed represents the future of football; a quality that made him the preferred choice as a brand ambassador for LG Electronics.', 'Alex Iwobi Becomes LG Electronics\' Brand Ambassador ', '2018-05-20', 'unread', 'Francis Itafor', '08/50011'),
(82, 'This is to inform all students that, the dead line for school fee for this semester is 30th June, 2018, any student who fail to pay on or before the stipulated date will have his / her account disabled.\r\n\r\nAdmin\r\nDepotter College \r\n', 'TESTING  ANNOUNCEMENT', '2018-06-08', 'unread', 'Admin', '00217'),
(83, 'This is to inform all students that, the dead line for school fee for this semester is 30th June, 2018, any student who fail to pay on or before the stipulated date will have his / her account disabled.\r\n\r\nAdmin\r\nDepotter College \r\n', 'TESTING  ANNOUNCEMENT', '2018-06-08', 'unread', 'Admin', '08/50011'),
(86, 'This is to inform all students that, the dead line for school fee for this semester is 30th June, 2018, any student who fail to pay on or before the stipulated date will have his / her account disabled.\r\n\r\nAdmin\r\nDepotter College \r\n', 'TESTING  ANNOUNCEMENT', '2018-06-08', 'unread', 'Admin', 'dph2016/1212'),
(87, 'This is to inform all students that, the dead line for school fee for this semester is 30th June, 2018, any student who fail to pay on or before the stipulated date will have his / her account disabled.\r\n\r\nAdmin\r\nDepotter College \r\n', 'TESTING  ANNOUNCEMENT', '2018-06-08', 'unread', 'Admin', '02006020258');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appId` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `maritalStatus` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `sponsoraddress` varchar(255) NOT NULL,
  `sponsorphone` varchar(255) NOT NULL,
  `sponsoremail` varchar(255) NOT NULL,
  `sponsoroccupation` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `disability` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `nokname` varchar(255) NOT NULL,
  `nokaddress` varchar(255) NOT NULL,
  `nokphone` varchar(255) NOT NULL,
  `eduname` varchar(255) NOT NULL,
  `edudate` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `firstchoice` varchar(255) NOT NULL,
  `secondchoice` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `picture` varchar(255) NOT NULL,
  `bankslipno` varchar(255) NOT NULL,
  `totalatm` varchar(255) NOT NULL,
  `bankname` varchar(255) NOT NULL,
  `transdate` varchar(255) NOT NULL,
  `paymentitem` varchar(255) NOT NULL,
  `transid` varchar(255) NOT NULL,
  `processedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appId`, `surname`, `middlename`, `lastname`, `email`, `phone`, `address`, `state`, `lga`, `gender`, `dob`, `religion`, `maritalStatus`, `fullname`, `relationship`, `sponsoraddress`, `sponsorphone`, `sponsoremail`, `sponsoroccupation`, `hobbies`, `disability`, `language`, `nokname`, `nokaddress`, `nokphone`, `eduname`, `edudate`, `certificate`, `firstchoice`, `secondchoice`, `code`, `date`, `picture`, `bankslipno`, `totalatm`, `bankname`, `transdate`, `paymentitem`, `transid`, `processedate`) VALUES
(30, 'Itafor ', 'Francis', 'CLEMENT', 'itaforfrancis@gmail.com', '07065907948', 'no. 30, Arikewuyo, Orile Iganmu,Lagos', '9', '738', 'Male', '2018/05/03 02:48', 'Christainity', 'single', 'Bimbo Adebayo', 'Brother', 'Ekureku', '09065907900', 'free22@gmail.com', 'Banker', 'BasketBall', 'null', 'English Language', 'Bro David', 'Arolambo', '09060432000', 'Godswill college,gIwa, Oke Aro ', '2000-2006', ' SSCE', 'Computer Science', 'Political science', 'depotter9707128Itafor ', '2018-05-21', 'images/Ita42.jpg', 'n', 'n', 'n', 'n', 'n', 'n', '2018-05-21'),
(31, 'AKINOLA', 'James', 'KEMI', 'balasaliaha2018@yahoo.com', '07063038955', '5, imowo Ijebu-Ode', '16', '268', 'Male', '1998/05/06 09:18', 'Islam', 'single', 'Ade', 'Brother', 'same as above', '07063038955', 'kkg@gmail.com', 'teacher', 'singing', 'none', 'yoruba', 'Ade', 'isale pastor', '08155355922', 'Wesley College Ibadan', '2009-2013', 'SSCE', 'Dental Health', 'Nursing', 'depotter5307916AKINOLA', '2018-05-21', 'images/Usman bello Aiman.jpg', 'n', 'n', 'n', 'n', 'n', 'n', '2018-05-21'),
(32, 'Itafor', 'Rita', 'CLEMENT', 'joynwaka116@gmail.com', '07065907940', 'Ikorodu, Lagos Nigeria', '9', '738', 'Female', '2018/05/02 11:44', 'Christainity', 'single', 'Itafor Francis', 'Brother', 'Ekureku', '09065777957', 'freedom@gmail.com', 'Banker', 'Ludo game', 'null', 'English Language', 'Bro David', 'Arolambo', '09065432077', 'Godswill Succes College giwa, Oke-Aro, Ifo, Ogun State ', '2008-2012', 'GCE ', 'Computer Science', 'Nursing Science', 'depotter1540065Itafor', '2018-06-07', 'images/20160225_145312.jpg', 'n', 'n', 'n', 'n', 'n', 'n', '2018-06-07'),
(33, 'Esimobi', 'John', 'Esimobi', 'tola@gmail.com', '07065907321', 'no. 30, Arikewuyo, Orile Iganmu,Lagos', '16', '267', 'Male', '2018/05/03 02:48', 'Christainity', 'single', 'Bimbo Adebayo', 'Brother', 'Ekureku', '09065777976', 'fre@gmail.com', 'Trader', 'BasketBall', 'null', 'English Language', 'Bro David', 'Arolambo', '09065432099', 'ytgvnyu  ', 'uy ghyugygb', 'uy bgyu g  ', 'JSS2', 'JSS2', 'depotter7061805Esimobi', '2018-06-28', 'images/ita1.jpg', 'n', 'n', 'n', 'n', 'n', 'n', '2018-06-28'),
(34, 'tolani', 'galami', 'esimobi', 'tola2@gmail.com', '07065907320', 'no. 30, Arikewuyo, Orile Iganmu,Lagos', '14', '249', 'Male', '2018/05/03 02:48', 'Christainity', 'single', 'Bimbo Adebayo', 'Brother', 'Ekureku', '09065777973', 'fre@gmail.com', 'Trader', 'BasketBall', 'null', 'English Language', 'Bro David', 'Arolambo', '09065432001', 'ytgvnyu  ', 'uy ghyugygb', 'uy bgyu g  ', 'JSS2', 'JSS2', 'depotter8100749tolani', '2018-06-28', 'images/ita1.jpg', 'n', 'n', 'n', 'n', 'n', 'n', '2018-06-28'),
(35, 'ruth', 'galami', 'esimobi', 'ruth@gmail.com', '07065909320', 'no. 30, Arikewuyo, Orile Iganmu,Lagos', '15', '263', 'Male', '2018/05/03 02:48', 'Christainity', 'single', 'Bimbo Adebayo', 'Brother', 'Ekureku', '09065777973', 'fra@gmail.com', 'Trader', 'BasketBall', 'null', 'English Language', 'bro David', 'arolambo', '09065002000', 'ytgvnyu  ', 'uy ghyugygb', 'uy bgyu g  ', 'SS3', 'SS2', 'depotter6187703ruth', '2018-06-28', 'images/ita1.jpg', 'n', 'n', 'n', 'n', 'n', 'n', '2018-06-28'),
(36, 'yuth', 'talami', 'fsimobi', 'ruth1@gmail.com', '07065909328', 'no. 30, Arikewuyo, Orile Iganmu,Lagos', '18', '316', 'Male', '2018/05/03 02:48', 'Christainity', 'single', 'Bimbo Adebayo', 'Brother', 'Ekureku', '09065777970', 'fra1@gmail.com', 'Trader', 'BasketBall', 'null', 'English Language', 'bro David', 'arolambo', '09069002009', 'ytgvnyu  ', 'uy ghyugygb', 'uy bgyu g  ', 'SS3', 'SS2', 'depotter4190064yuth', '2018-06-28', 'images/ita1.jpg', 'n', 'n', 'n', 'n', 'n', 'n', '2018-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `BTITLE` varchar(255) NOT NULL,
  `KEYWORDS` varchar(255) NOT NULL,
  `FILE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `BTITLE`, `KEYWORDS`, `FILE`) VALUES
(13, 'Ajax Programming Language Tutorial', 'Ajax', 'books/ajax_xml.pdf'),
(14, 'Cascading Style Sheet PDF', 'css', 'books/CSS.pdf'),
(15, 'Structured Query Language tutorial', 'sql', 'books/sql_tutorial.pdf'),
(16, 'Hypertext Preprocessor (php)', 'php', 'books/php_tutorial.docx'),
(17, 'Hypertext Preprocessor (php pdf file)', 'php2', 'books/php_tutorial1.pdf'),
(18, 'MEDICAL ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ SURGICAL NURSING 1 ', 'NURSING 212 ', 'books/N212__course_packet_Spring_2009_V2[1].pdf'),
(19, 'MEDICAL ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Å“ SURGICAL NURSING 2', 'SURGICAL NURSING 211', 'books/Medical-Surgical-Nursing-Demystified.pdf'),
(21, 'Environmental Health Course', 'EHT', 'books/IMG-20180531-WA0002.jpg'),
(22, 'Environmental Health Course 1', 'EHT1', 'books/IMG-20180531-WA0001.jpg'),
(23, 'Environmental Health Course 2', 'EHT2', 'books/IMG-20180531-WA0000.jpg'),
(24, 'Environmental Health Course 3', 'Eht3', 'books/IMG-20180531-WA0004.jpg'),
(25, 'Environmental Health Course 5', 'Eht5', 'books/IMG-20180531-WA0003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subjcode` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subjcode` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `username`, `password`, `phone`, `name`, `subjcode`, `subject`, `date`) VALUES
(7, ' akim ', 'akim ', '09066774432 ', 'Mr Akim ', '899 ', 'math ', '2018-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 2, 'hi', '2018-07-12 17:59:09', 0),
(2, 2, 1, 'good', '2018-07-12 18:01:19', 0),
(3, 1, 2, 'ok', '2018-07-12 18:01:49', 0),
(4, 1, 2, 'who is they', '2018-07-12 18:02:20', 0),
(5, 2, 1, 'good morning', '2018-07-13 05:06:25', 0),
(6, 1, 2, 'morning hw was ur nit', '2018-07-13 05:07:02', 0),
(7, 1, 2, 'frank r u still there', '2018-07-13 05:16:48', 0),
(8, 1, 2, '', '2018-07-13 05:16:52', 0),
(9, 1, 2, 'pls say somethinh', '2018-07-13 05:18:17', 0),
(10, 1, 2, 'helo', '2018-07-13 05:19:48', 0),
(11, 2, 1, 'sorry for the delay in rspond', '2018-07-13 05:20:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CID` int(11) NOT NULL,
  `BID` int(11) NOT NULL,
  `matricno` varchar(255) NOT NULL,
  `COMM` text NOT NULL,
  `LOGS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CID`, `BID`, `matricno`, `COMM`, `LOGS`) VALUES
(1, 5, 'interesting', 'interesting', '2018-05-14'),
(2, 2, 'what a wonderfull tutoria', 'what a wonderfull tutoria', '2018-05-14'),
(3, 2, 'i need more of this type', 'i need more of this type', '2018-05-14'),
(4, 2, 'fantastic', 'fantastic', '2018-05-14'),
(5, 2, 'fantastic', 'fantastic', '2018-05-14'),
(6, 2, 'fantastic', 'fantastic', '2018-05-14'),
(7, 2, 'I need a book on php with mysql', 'I need a book on php with mysql', '2018-05-14'),
(8, 2, 'this is wonserful', 'this is wonserful', '2018-05-14'),
(9, 5, 'how can i download this book', 'how can i download this book', '2018-05-14'),
(10, 2, 'php rule the world', 'php rule the world', '2018-05-14'),
(11, 5, 'what is the stuff for?', 'what is the stuff for?', '2018-05-14'),
(12, 7, 'why the slash before the name of the book', 'why the slash before the name of the book', '2018-05-14'),
(13, 7, 'wonderfully made', 'wonderfully made', '2018-05-14'),
(14, 7, 'tremendious', 'tremendious', '2018-05-14'),
(15, 9, 'test', 'test', '2018-05-14'),
(16, 7, 'test1', 'test1', '2018-05-14'),
(17, 10, 'very concise book, thanks to the author', 'very concise book, thanks to the author', '2018-05-14'),
(18, 2, 'hi', 'hi', '2018-05-14'),
(19, 6, 'why', 'why', '2018-05-14'),
(20, 6, 'it suppose show', 'it suppose show', '2018-05-14'),
(21, 11, 'wow! ', 'wow! ', '2018-05-14'),
(22, 11, 'wow!', 'wow!', '2018-05-15'),
(23, 11, 'what?', 'what?', '2018-05-15'),
(24, 11, 'test', 'test', '2018-05-15'),
(25, 2, 'yes', 'yes', '2018-05-15'),
(26, 5, 'wow!', 'wow!', '2018-05-18'),
(27, 10, 'working fine', 'working fine', '2018-05-19'),
(28, 10, 'working fine', 'working fine', '2018-05-19'),
(29, 9, 'good', 'good', '2018-05-21'),
(30, 15, 'Very concise material', 'Very concise material', '2018-05-21'),
(31, 19, 'This is purely for medical students', 'This is purely for medical students', '2018-05-21'),
(32, 13, 'One of the most asynchronous tools used in retrieving data ', 'One of the most asynchronous tools used in retrieving data ', '2018-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `matricno` varchar(255) NOT NULL,
  `MES` text NOT NULL,
  `LOGS` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `matricno`, `MES`, `LOGS`, `status`, `name`, `username`) VALUES
(28, '08/50053', 'Good evening sir, can school fee be paid in installment?\r\nThanks', '2018-06-10', 'unread', 'Victor  Ejomo', 'james'),
(29, '08/50053', 'Good evening sir, can school fee be paid in installment?\r\nThanks', '2018-06-10', 'read', 'Victor  Ejomo', 'admin'),
(30, '08/50053', 'Good evening sir, can school fee be paid in installment?\r\nThanks', '2018-06-10', 'unread', 'Victor  Ejomo', 'wale'),
(31, '08/50053', 'Good evening sir, can school fee be paid in installment?\r\nThanks', '2018-06-10', 'unread', 'Victor  Ejomo', 'depotter'),
(33, '08/50053', 'Good evening sir, can school fee be paid in installment?\r\nThanks', '2018-06-10', 'unread', 'Victor  Ejomo', 'nwaka'),
(34, '08/50053', ' Good day sir, pls help me out, my CA score in CSC 101 has not been recorded. ', '2018-06-10', 'unread', 'Victor  Ejomo', 'james'),
(35, '08/50053', ' Good day sir, pls help me out, my CA score in CSC 101 has not been recorded. ', '2018-06-10', 'read', 'Victor  Ejomo', 'admin'),
(36, '08/50053', ' Good day sir, pls help me out, my CA score in CSC 101 has not been recorded. ', '2018-06-10', 'unread', 'Victor  Ejomo', 'wale'),
(37, '08/50053', ' Good day sir, pls help me out, my CA score in CSC 101 has not been recorded. ', '2018-06-10', 'unread', 'Victor  Ejomo', 'depotter'),
(38, '08/50053', ' Good day sir, pls help me out, my CA score in CSC 101 has not been recorded. ', '2018-06-10', 'unread', 'Victor  Ejomo', 'maths'),
(39, '08/50053', ' Good day sir, pls help me out, my CA score in CSC 101 has not been recorded. ', '2018-06-10', 'unread', 'Victor  Ejomo', 'nwaka'),
(40, '00217', 'Sir, is it posible for one to change course after admission?', '2018-06-10', 'unread', 'FRANO FREEDOM', 'james'),
(41, '00217', 'Sir, is it posible for one to change course after admission?', '2018-06-10', 'read', 'FRANO FREEDOM', 'admin'),
(42, '00217', 'Sir, is it posible for one to change course after admission?', '2018-06-10', 'unread', 'FRANO FREEDOM', 'wale'),
(43, '00217', 'Sir, is it posible for one to change course after admission?', '2018-06-10', 'unread', 'FRANO FREEDOM', 'depotter'),
(44, '00217', 'Sir, is it posible for one to change course after admission?', '2018-06-10', 'unread', 'FRANO FREEDOM', 'maths'),
(45, '00217', 'Sir, is it posible for one to change course after admission?', '2018-06-10', 'unread', 'FRANO FREEDOM', 'nwaka'),
(46, '00217', 'testing deletion', '2018-06-12', 'unread', 'FRANO FREEDOM', 'james'),
(47, '00217', 'testing deletion', '2018-06-12', 'read', 'FRANO FREEDOM', 'admin'),
(48, '00217', 'testing deletion', '2018-06-12', 'unread', 'FRANO FREEDOM', 'wale'),
(49, '00217', 'testing deletion', '2018-06-12', 'unread', 'FRANO FREEDOM', 'depotter'),
(50, '00217', 'testing deletion', '2018-06-12', 'unread', 'FRANO FREEDOM', 'maths'),
(51, 'GWSC/2300/David', 'hi', '2018-06-25', 'unread', 'David Favour', 'james'),
(52, 'GWSC/2300/David', 'hi', '2018-06-25', 'read', 'David Favour', 'admin'),
(53, 'GWSC/2300/David', 'hi', '2018-06-25', 'unread', 'David Favour', 'wale'),
(54, 'GWSC/2300/David', 'hi', '2018-06-25', 'unread', 'David Favour', 'depotter'),
(55, 'GWSC/2300/David', 'hi', '2018-06-25', 'unread', 'David Favour', 'maths');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `coursetitle` varchar(255) NOT NULL,
  `creditunit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `semester_id`, `coursetitle`, `creditunit`) VALUES
(43, 'EHT 101', 88, 'Introduction to Medical Sociology', '2'),
(44, 'CSC 101', 88, 'Introduction to Computer Science', '3'),
(45, 'MTH 101', 88, 'General Mathematics', '3'),
(46, 'STA 101', 88, 'Introduction to Statistics', '2'),
(47, 'GLT 101', 88, 'General Laboratory Techniques', '3'),
(48, 'PHY101', 88, 'General Physics', '3'),
(49, 'CHM 101', 88, 'General Chemistry', '3'),
(50, 'GST 101', 88, 'Use of English', '2'),
(51, 'PTD 111', 89, 'Technical Drawing', '2'),
(52, 'BQS 103', 89, 'Building Construction', '3'),
(53, 'STB 211', 89, 'Introduction to Microbiology', '3'),
(54, 'EHT 102', 89, 'Introduction to Demography', '2'),
(55, 'EHT 103', 89, 'Introduction to Biochemistry', '2'),
(56, 'EHT 104', 89, 'Introduction to Environmental Health', '2'),
(57, 'EHT 105', 89, ' Environmental Scanning', '1'),
(58, 'DTH 115', 89, 'Human Anatomy and Physiology', '2'),
(59, 'PHM 101', 89, 'Introduction to Pharmacology', '2'),
(61, 'EHT 106', 89, 'Health Ecology', '2');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_tmp` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `file_name`, `file_tmp`, `file_type`, `phone`) VALUES
(8, 'Application form.docx', 'C:xampp	mpphp2E95.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07005907998'),
(9, 'de potter assesment sheet.docx', 'C:xampp	mpphp2EC5.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07005907998'),
(10, 'de potter.docx', 'C:xampp	mpphp2F23.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07005907998'),
(11, 'id4101158_depotter.sql', 'C:xampp	mpphp2F53.tmp', 'application/octet-stream', '07005907998'),
(12, '20160225_145312.jpg', 'C:xampp	mpphpA4FD.tmp', 'image/jpeg', '07005907918'),
(13, '20160531_104229.jpg', 'C:xampp	mpphpA55C.tmp', 'image/jpeg', '07005907918'),
(14, '20160531_104710.jpg', 'C:xampp	mpphpA58C.tmp', 'image/jpeg', '07005907918'),
(15, '20160620_081733.jpg', 'C:xampp	mpphpA5CB.tmp', 'image/jpeg', '07005907918'),
(16, '20160620_081737.jpg', 'C:xampp	mpphpA61A.tmp', 'image/jpeg', '07005907918'),
(17, '20160822_183836.jpg', 'C:xampp	mpphpA64A.tmp', 'image/jpeg', '07005907918'),
(18, '20160824_171155.jpg', 'C:xampp	mpphpA68A.tmp', 'image/jpeg', '07005907918'),
(19, '20160824_171454.jpg', 'C:xampp	mpphpA6B9.tmp', 'image/jpeg', '07005907918'),
(20, 'Application form.docx', 'C:xampp	mpphp1745.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(21, 'de potter assesment sheet.docx', 'C:xampp	mpphp1785.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(22, 'de potter.docx', 'C:xampp	mpphp17C4.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(23, 'id4101158_depotter.sql', 'C:xampp	mpphp17F4.tmp', 'application/octet-stream', '07065907988'),
(24, 'Application form.docx', 'C:xampp	mpphp3DA2.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(25, 'de potter assesment sheet.docx', 'C:xampp	mpphp3E4F.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(26, 'de potter.docx', 'C:xampp	mpphp3E9E.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(27, 'id4101158_depotter.sql', 'C:xampp	mpphp3ECE.tmp', 'application/octet-stream', '07065907988'),
(28, 'Application form.docx', 'C:xampp	mpphp64C7.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(29, 'de potter assesment sheet.docx', 'C:xampp	mpphp64E7.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(30, 'de potter.docx', 'C:xampp	mpphp6536.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(31, 'id4101158_depotter.sql', 'C:xampp	mpphp6576.tmp', 'application/octet-stream', '07065907988'),
(32, 'Application form.docx', 'C:xampp	mpphpF9C3.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(33, 'de potter assesment sheet.docx', 'C:xampp	mpphpFA02.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(34, 'de potter.docx', 'C:xampp	mpphpFA51.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907988'),
(35, 'id4101158_depotter.sql', 'C:xampp	mpphpFA91.tmp', 'application/octet-stream', '07065907988'),
(36, 'Application form.docx', 'C:xampp	mpphp12D1.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907911'),
(37, 'de potter assesment sheet.docx', 'C:xampp	mpphp12F1.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907911'),
(38, 'de potter.docx', 'C:xampp	mpphp1331.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907911'),
(39, 'id4101158_depotter.sql', 'C:xampp	mpphp1360.tmp', 'application/octet-stream', '07065907911'),
(40, 'uploads/Application form.docx', 'C:xampp	mpphp330.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00065907948'),
(41, 'uploads/de potter assesment sheet.docx', 'C:xampp	mpphp350.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00065907948'),
(42, 'uploads/de potter.docx', 'C:xampp	mpphp3AF.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00065907948'),
(43, 'uploads/id4101158_depotter.sql', 'C:xampp	mpphp3DF.tmp', 'application/octet-stream', '00065907948'),
(44, '../uploads/Application form.docx', 'C:xampp	mpphp56C5.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00065907944'),
(45, '../uploads/de potter assesment sheet.docx', 'C:xampp	mpphp5705.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00065907944'),
(46, '../uploads/de potter.docx', 'C:xampp	mpphp5744.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00065907944'),
(47, '../uploads/id4101158_depotter.sql', 'C:xampp	mpphp5774.tmp', 'application/octet-stream', '00065907944'),
(48, '../uploads/Application form.docx', 'C:xampp	mpphpA594.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00005907944'),
(49, '../uploads/de potter assesment sheet.docx', 'C:xampp	mpphpA5B4.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00005907944'),
(50, '../uploads/de potter.docx', 'C:xampp	mpphpA604.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00005907944'),
(51, '../uploads/id4101158_depotter.sql', 'C:xampp	mpphpA633.tmp', 'application/octet-stream', '00005907944'),
(52, '../uploads/Application form 1.docx', 'C:xampp	mpphpB973.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00000907944'),
(53, '../uploads/de potter assesment sheet i.docx', 'C:xampp	mpphpB994.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00000907944'),
(54, '../uploads/depotter stuff.docx', 'C:xampp	mpphpB9D3.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00000907944'),
(55, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphp87A3.tmp', 'application/pdf', '00000007944'),
(56, '../uploads/php_tutorial.docx', 'C:xampp	mpphp88AD.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00000007944'),
(57, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphp914C.tmp', 'application/pdf', '00000007944'),
(58, '../uploads/php_tutorial.docx', 'C:xampp	mpphp9237.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00000007944'),
(59, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphpEA81.tmp', 'application/pdf', '07065907948'),
(60, '../uploads/php_tutorial.docx', 'C:xampp	mpphpEB8C.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907948'),
(61, 'uploads/php_tutorial 2.pdf', 'C:xampp	mpphpAB0B.tmp', 'application/pdf', '07065907555'),
(62, 'uploads/php_tutorial.docx', 'C:xampp	mpphpABE7.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907555'),
(63, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphp810A.tmp', 'application/pdf', '00065907555'),
(64, '../uploads/php_tutorial.docx', 'C:xampp	mpphp8214.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '00065907555'),
(65, '../uploads/Application form 1.docx', 'C:xampp	mpphp22B1.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907224'),
(66, '../uploads/de potter assesment sheet i.docx', 'C:xampp	mpphp231F.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907224'),
(67, '../uploads/depotter stuff.docx', 'C:xampp	mpphp235F.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907224'),
(68, '../uploads/id4101158_depotter.sql', 'C:xampp	mpphp239E.tmp', 'application/octet-stream', '07065907224'),
(69, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphp23CE.tmp', 'application/pdf', '07065907224'),
(70, '../uploads/php_tutorial.docx', 'C:xampp	mpphp24C9.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907224'),
(71, '../uploads/depotter stuff.docx', 'C:xampp	mpphpDFBB.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065901111'),
(72, '../uploads/id4101158_depotter.sql', 'C:xampp	mpphpDFFA.tmp', 'application/octet-stream', '07065901111'),
(73, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphpE049.tmp', 'application/pdf', '07065901111'),
(74, '../uploads/php_tutorial.docx', 'C:xampp	mpphpE2CB.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065901111'),
(75, '../uploads/de potter assesment sheet i.docx', 'C:xampp	mpphp6C65.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065988888'),
(76, '../uploads/depotter stuff.docx', 'C:xampp	mpphp6CA5.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065988888'),
(77, '../uploads/id4101158_depotter.sql', 'C:xampp	mpphp6CD4.tmp', 'application/octet-stream', '07065988888'),
(78, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphp6D04.tmp', 'application/pdf', '07065988888'),
(79, '../uploads/php_tutorial.docx', 'C:xampp	mpphp6DF0.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065988888'),
(80, '../uploads/Application form 3.docx', 'C:xampp	mpphp57FA.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907103'),
(81, '../uploads/depotter stuff.docx', 'C:xampp	mpphp582A.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907103'),
(82, '../uploads/php_tutorial 2.pdf', 'C:xampp	mpphp585A.tmp', 'application/pdf', '07065907103'),
(83, '../uploads/php_tutorial.docx', 'C:xampp	mpphp59C2.tmp', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907103'),
(84, '../uploads/sql_tutorial.pdf', 'C:xampp	mpphp59F2.tmp', 'application/pdf', '07065907103'),
(85, '../uploads/Application form 3.docx', '/storage/ssd1/158/4101158/tmp/phplXOImr', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '08087097532'),
(86, '../uploads/de potter assesment sheet (1).docx', '/storage/ssd1/158/4101158/tmp/phpSSy7wH', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '08087097532'),
(87, '../uploads/de potter.docx', '/storage/ssd1/158/4101158/tmp/phpQWtNHX', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '08087097532'),
(88, '../uploads/de potter assesment sheet.docx', '/storage/ssd1/158/4101158/tmp/phpjoDuSd', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '08087097532'),
(89, '../uploads/ajax_xml.pdf', '/storage/ssd1/158/4101158/tmp/php27meHn', 'application/pdf', '07065907948'),
(90, '../uploads/CSS.pdf', '/storage/ssd1/158/4101158/tmp/phpCIhngu', 'application/pdf', '07065907948'),
(91, '../uploads/HTML_Basics.pdf', '/storage/ssd1/158/4101158/tmp/phpTA8MSA', 'application/pdf', '07065907948'),
(92, '../uploads/php_tutorial.docx', '/storage/ssd1/158/4101158/tmp/phpAYCyvH', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907948'),
(93, '../uploads/_Adebowale_Ayomide.htm', '/storage/ssd1/158/4101158/tmp/phpOZinH8', 'text/html', '07063038955'),
(94, '../uploads/ajax_xml.pdf', '/tmp/phpnPjTcJ', 'application/pdf', '07065907940'),
(95, '../uploads/Application form 3.docx', '/tmp/php3pvmjJ', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '07065907940'),
(96, '../uploads/CSS.pdf', '/tmp/phpB3JRpJ', 'application/pdf', '07065907940'),
(97, '../uploads/HTML_Basics.pdf', '/tmp/phpxvwXm5', 'application/pdf', '07065907940'),
(98, '../uploads/CSS.pdf', '', '', '07065907321'),
(99, '../uploads/CSS.pdf', '', '', '07065907320'),
(100, '../uploads/CSS.pdf', '', '', '07065909320'),
(101, '../uploads/Medical-Surgical-Nursing-Demystified.pdf', '', '', '07065909328');

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `name`, `faculty_id`) VALUES
(25, 'JSS1 Department', 25),
(26, 'JSS2 Department', 26),
(27, 'JSS3 Department', 27),
(28, 'SS1 Science Department', 28),
(29, 'SS2 Science Department', 29),
(30, 'SS3 Science Department', 30),
(31, 'SS1 Commercial  Department', 28),
(32, 'SS2 Commercial  Department', 29),
(33, 'SS3 Commercial  Department', 30),
(34, 'SS1 Art  Department', 28),
(35, 'SS2 Art  Department', 29),
(36, 'SS3 Art  Department', 30);

-- --------------------------------------------------------

--
-- Table structure for table `emaillist`
--

CREATE TABLE `emaillist` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emaillist`
--

INSERT INTO `emaillist` (`id`, `email`) VALUES
(26, 'mathematicsmadeasy@gmail.com'),
(27, 'itaforfrancis@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`) VALUES
(25, 'JSS1'),
(26, 'JSS2'),
(27, 'JSS3'),
(28, 'SS1'),
(29, 'SS2'),
(30, 'SS3'),
(31, 'maths'),
(32, 'phy'),
(33, 'chem'),
(34, 'bio');

-- --------------------------------------------------------

--
-- Table structure for table `footersetting`
--

CREATE TABLE `footersetting` (
  `id` int(11) NOT NULL,
  `schname` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `copywright` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footersetting`
--

INSERT INTO `footersetting` (`id`, `schname`, `year`, `copywright`, `logo`) VALUES
(1, 'Messial Praise Schools', '2018', 'Copyright @ ', 'images/IMG-20181121-WA0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `headersetting`
--

CREATE TABLE `headersetting` (
  `id` int(11) NOT NULL,
  `schname` varchar(255) NOT NULL,
  `schaddress` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headersetting`
--

INSERT INTO `headersetting` (`id`, `schname`, `schaddress`, `phone`, `email`, `website`, `logo`) VALUES
(1, 'Messial Praise Schools', '30, Arikewoyu, Orile Iganmu, Lagos state, Nigeria', '+2347065907948', 'itaforfrancis@gmail.com', 'www.messialpraice.com.ng', 'images/IMG-20181121-WA0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jss_subjs`
--

CREATE TABLE `jss_subjs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jss_subjs`
--

INSERT INTO `jss_subjs` (`id`, `name`) VALUES
(54, 'Mathematics'),
(55, 'English Language'),
(56, 'Yoruba'),
(58, 'Social Studies'),
(59, 'Business Studies'),
(60, 'C.R.S'),
(61, 'Civic Education'),
(62, 'Security Education'),
(63, 'Agric.Science'),
(64, 'P.H.E'),
(65, 'Basic Science'),
(66, 'Basic Technology'),
(67, 'Computer Science'),
(71, 'French'),
(72, 'Music'),
(73, 'Home Economics'),
(74, 'Fine Art');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`, `dept_id`) VALUES
(65, 'First Term', 25),
(66, 'Second Term', 25),
(67, 'Third Term', 25),
(68, 'First Term', 26),
(69, 'Second Term', 26),
(70, 'Third Term', 26),
(71, 'First Term', 27),
(72, 'Second Term', 27),
(73, 'Third Term', 27),
(74, 'First Term', 28),
(75, 'Second Term', 28),
(76, 'Third Term', 28),
(77, 'First Term', 31),
(78, 'Second Term', 31),
(79, 'Third Term', 31),
(80, 'First Term', 34),
(81, 'Second Term', 34),
(82, 'Third Term', 34),
(83, 'First Term', 29),
(84, 'Second Term', 29),
(85, 'Third Term', 29),
(86, 'First Term', 32),
(87, 'Second Term', 32),
(88, 'Third Term', 32),
(89, 'First Term', 30),
(90, 'Second Term', 30),
(91, 'First Term', 35),
(92, 'Second Term', 35),
(93, 'Third Term', 35),
(94, 'First Term', 33),
(95, 'Second Term', 33),
(96, 'First Term', 36),
(97, 'Second Term', 36);

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

CREATE TABLE `locals` (
  `local_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `local_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`local_id`, `state_id`, `local_name`) VALUES
(1, 1, 'Aba North'),
(2, 1, 'Arochukwu'),
(3, 1, 'Bende'),
(4, 1, 'Ikwuano'),
(5, 1, 'Isiala Ngwa North'),
(6, 1, 'Isiala Ngwa South'),
(7, 1, 'Isuikwuato'),
(8, 1, 'Obi Ngwa'),
(9, 1, 'Ohafia'),
(10, 1, 'Osisioma'),
(11, 1, 'Ugwunagbo'),
(12, 1, 'Ukwa East'),
(13, 1, 'Ukwa West'),
(14, 1, 'Umuahia North'),
(15, 1, 'Umuahia South'),
(16, 1, 'Umu Nneochi'),
(17, 2, 'Fufure'),
(18, 2, 'Ganye'),
(19, 2, 'Gayuk'),
(20, 2, 'Gombi'),
(21, 2, 'Grie'),
(22, 2, 'Hong'),
(23, 2, 'Jada'),
(24, 2, 'Lamurde'),
(25, 2, 'Madagali'),
(26, 2, 'Maiha'),
(27, 2, 'Mayo Belwa'),
(28, 2, 'Michika'),
(29, 2, 'Mubi North'),
(30, 2, 'Mubi South'),
(31, 2, 'Numan'),
(32, 2, 'Shelleng'),
(33, 2, 'Song'),
(34, 2, 'Toungo'),
(35, 2, 'Yola North'),
(36, 2, 'Yola South'),
(37, 3, 'Eastern Obolo'),
(38, 3, 'Eket'),
(39, 3, 'Esit Eket'),
(40, 3, 'Essien Udim'),
(41, 3, 'Etim Ekpo'),
(42, 3, 'Etinan'),
(43, 3, 'Ibeno'),
(44, 3, 'Ibesikpo Asutan'),
(45, 3, 'Ibiono-Ibom'),
(46, 3, 'Ika'),
(47, 3, 'Ikono'),
(48, 3, 'Ikot Abasi'),
(49, 3, 'Ikot Ekpene'),
(50, 3, 'Ini'),
(51, 3, 'Itu'),
(52, 3, 'Mbo'),
(53, 3, 'Mkpat-Enin'),
(54, 3, 'Nsit-Atai'),
(55, 3, 'Nsit-Ibom'),
(56, 3, 'Nsit-Ubium'),
(57, 3, 'Obot Akara'),
(58, 3, 'Okobo'),
(59, 3, 'Onna'),
(60, 3, 'Oron'),
(61, 3, 'Oruk Anam'),
(62, 3, 'Udung-Uko'),
(63, 3, 'Ukanafun'),
(64, 3, 'Uruan'),
(65, 3, 'Urue-Offong/Oruko'),
(66, 3, 'Uyo'),
(67, 4, 'Anambra East'),
(68, 4, 'Anambra West'),
(69, 4, 'Anaocha'),
(70, 4, 'Awka North'),
(71, 4, 'Awka South'),
(72, 4, 'Ayamelum'),
(73, 4, 'Dunukofia'),
(74, 4, 'Ekwusigo'),
(75, 4, 'Idemili North'),
(76, 4, 'Idemili South'),
(77, 4, 'Ihiala'),
(78, 4, 'Njikoka'),
(79, 4, 'Nnewi North'),
(80, 4, 'Nnewi South'),
(81, 4, 'Ogbaru'),
(82, 4, 'Onitsha North'),
(83, 4, 'Onitsha South'),
(84, 4, 'Orumba North'),
(85, 4, 'Orumba South'),
(86, 4, 'Oyi'),
(87, 5, 'Bauchi'),
(88, 5, 'Bogoro'),
(89, 5, 'Damban'),
(90, 5, 'Darazo'),
(91, 5, 'Dass'),
(92, 5, 'Gamawa'),
(93, 5, 'Ganjuwa'),
(94, 5, 'Giade'),
(95, 5, 'Itas/Gadau'),
(96, 5, 'Jama\'are'),
(97, 5, 'Katagum'),
(98, 5, 'Kirfi'),
(99, 5, 'Misau'),
(100, 5, 'Ningi'),
(101, 5, 'Shira'),
(102, 5, 'Tafawa Balewa'),
(103, 5, 'Toro'),
(104, 5, 'Warji'),
(105, 5, 'Zaki'),
(106, 6, 'Ekeremor'),
(107, 6, 'Kolokuma/Opokuma'),
(108, 6, 'Nembe'),
(109, 6, 'Ogbia'),
(110, 6, 'Sagbama'),
(111, 6, 'Southern Ijaw'),
(112, 6, 'Yenagoa'),
(113, 7, 'Apa'),
(114, 7, 'Ado'),
(115, 7, 'Buruku'),
(116, 7, 'Gboko'),
(117, 7, 'Guma'),
(118, 7, 'Gwer East'),
(119, 7, 'Gwer West'),
(120, 7, 'Katsina-Ala'),
(121, 7, 'Konshisha'),
(122, 7, 'Kwande'),
(123, 7, 'Logo'),
(124, 7, 'Makurdi'),
(125, 7, 'Obi'),
(126, 7, 'Ogbadibo'),
(127, 7, 'Ohimini'),
(128, 7, 'Oju'),
(129, 7, 'Okpokwu'),
(130, 7, 'Oturkpo'),
(131, 7, 'Tarka'),
(132, 7, 'Ukum'),
(133, 7, 'Ushongo'),
(134, 7, 'Vandeikya'),
(135, 8, 'Askira/Uba'),
(136, 8, 'Bama'),
(137, 8, 'Bayo'),
(138, 8, 'Biu'),
(139, 8, 'Chibok'),
(140, 8, 'Damboa'),
(141, 8, 'Dikwa'),
(142, 8, 'Gubio'),
(143, 8, 'Guzamala'),
(144, 8, 'Gwoza'),
(145, 8, 'Hawul'),
(146, 8, 'Jere'),
(147, 8, 'Kaga'),
(148, 8, 'Kala/Balge'),
(149, 8, 'Konduga'),
(150, 8, 'Kukawa'),
(151, 8, 'Kwaya Kusar'),
(152, 8, 'Mafa'),
(153, 8, 'Magumeri'),
(154, 8, 'Maiduguri'),
(155, 8, 'Marte'),
(156, 8, 'Mobbar'),
(157, 8, 'Monguno'),
(158, 8, 'Ngala'),
(159, 8, 'Nganzai'),
(160, 8, 'Shani'),
(161, 9, 'Akamkpa'),
(162, 9, 'Akpabuyo'),
(163, 9, 'Bakassi'),
(164, 9, 'Bekwarra'),
(165, 9, 'Biase'),
(166, 9, 'Boki'),
(167, 9, 'Calabar Municipal'),
(168, 9, 'Calabar South'),
(169, 9, 'Etung'),
(170, 9, 'Ikom'),
(171, 9, 'Obanliku'),
(172, 9, 'Obubra'),
(173, 9, 'Obudu'),
(174, 9, 'Odukpani'),
(175, 9, 'Ogoja'),
(176, 9, 'Yakuur'),
(177, 9, 'Yala'),
(178, 10, 'Aniocha South'),
(179, 10, 'Bomadi'),
(180, 10, 'Burutu'),
(181, 10, 'Ethiope East'),
(182, 10, 'Ethiope West'),
(183, 10, 'Ika North East'),
(184, 10, 'Ika South'),
(185, 10, 'Isoko North'),
(186, 10, 'Isoko South'),
(187, 10, 'Ndokwa East'),
(188, 10, 'Ndokwa West'),
(189, 10, 'Okpe'),
(190, 10, 'Oshimili North'),
(191, 10, 'Oshimili South'),
(192, 10, 'Patani'),
(193, 10, 'Sapele'),
(194, 10, 'Udu'),
(195, 10, 'Ughelli North'),
(196, 10, 'Ughelli South'),
(197, 10, 'Ukwuani'),
(198, 10, 'Uvwie'),
(199, 10, 'Warri North'),
(200, 10, 'Warri South'),
(201, 10, 'Warri South West'),
(202, 11, 'Afikpo North'),
(203, 11, 'Afikpo South'),
(204, 11, 'Ebonyi'),
(205, 11, 'Ezza North'),
(206, 11, 'Ezza South'),
(207, 11, 'Ikwo'),
(208, 11, 'Ishielu'),
(209, 11, 'Ivo'),
(210, 11, 'Izzi'),
(211, 11, 'Ohaozara'),
(212, 11, 'Ohaukwu'),
(213, 11, 'Onicha'),
(214, 12, 'Egor'),
(215, 12, 'Esan Central'),
(216, 12, 'Esan North-East'),
(217, 12, 'Esan South-East'),
(218, 12, 'Esan West'),
(219, 12, 'Etsako Central'),
(220, 12, 'Etsako East'),
(221, 12, 'Etsako West'),
(222, 12, 'Igueben'),
(223, 12, 'Ikpoba Okha'),
(224, 12, 'Orhionmwon'),
(225, 12, 'Oredo'),
(226, 12, 'Ovia North-East'),
(227, 12, 'Ovia South-West'),
(228, 12, 'Owan East'),
(229, 12, 'Owan West'),
(230, 12, 'Uhunmwonde'),
(231, 13, 'Efon'),
(232, 13, 'Ekiti East'),
(233, 13, 'Ekiti South-West'),
(234, 13, 'Ekiti West'),
(235, 13, 'Emure'),
(236, 13, 'Gbonyin'),
(237, 13, 'Ido Osi'),
(238, 13, 'Ijero'),
(239, 13, 'Ikere'),
(240, 13, 'Ikole'),
(241, 13, 'Ilejemeje'),
(242, 13, 'Irepodun/Ifelodun'),
(243, 13, 'Ise/Orun'),
(244, 13, 'Moba'),
(245, 13, 'Oye'),
(246, 14, 'Awgu'),
(247, 14, 'Enugu East'),
(248, 14, 'Enugu North'),
(249, 14, 'Enugu South'),
(250, 14, 'Ezeagu'),
(251, 14, 'Igbo Etiti'),
(252, 14, 'Igbo Eze North'),
(253, 14, 'Igbo Eze South'),
(254, 14, 'Isi Uzo'),
(255, 14, 'Nkanu East'),
(256, 14, 'Nkanu West'),
(257, 14, 'Nsukka'),
(258, 14, 'Oji River'),
(259, 14, 'Udenu'),
(260, 14, 'Udi'),
(261, 14, 'Uzo Uwani'),
(262, 15, 'Bwari'),
(263, 15, 'Gwagwalada'),
(264, 15, 'Kuje'),
(265, 15, 'Kwali'),
(266, 15, 'Municipal Area Council'),
(267, 16, 'Balanga'),
(268, 16, 'Billiri'),
(269, 16, 'Dukku'),
(270, 16, 'Funakaye'),
(271, 16, 'Gombe'),
(272, 16, 'Kaltungo'),
(273, 16, 'Kwami'),
(274, 16, 'Nafada'),
(275, 16, 'Shongom'),
(276, 16, 'Yamaltu/Deba'),
(277, 17, 'Ahiazu Mbaise'),
(278, 17, 'Ehime Mbano'),
(279, 17, 'Ezinihitte'),
(280, 17, 'Ideato North'),
(281, 17, 'Ideato South'),
(282, 17, 'Ihitte/Uboma'),
(283, 17, 'Ikeduru'),
(284, 17, 'Isiala Mbano'),
(285, 17, 'Isu'),
(286, 17, 'Mbaitoli'),
(287, 17, 'Ngor Okpala'),
(288, 17, 'Njaba'),
(289, 17, 'Nkwerre'),
(290, 17, 'Nwangele'),
(291, 17, 'Obowo'),
(292, 17, 'Oguta'),
(293, 17, 'Ohaji/Egbema'),
(294, 17, 'Okigwe'),
(295, 17, 'Orlu'),
(296, 17, 'Orsu'),
(297, 17, 'Oru East'),
(298, 17, 'Oru West'),
(299, 17, 'Owerri Municipal'),
(300, 17, 'Owerri North'),
(301, 17, 'Owerri West'),
(302, 17, 'Unuimo'),
(303, 18, 'Babura'),
(304, 18, 'Biriniwa'),
(305, 18, 'Birnin Kudu'),
(306, 18, 'Buji'),
(307, 18, 'Dutse'),
(308, 18, 'Gagarawa'),
(309, 18, 'Garki'),
(310, 18, 'Gumel'),
(311, 18, 'Guri'),
(312, 18, 'Gwaram'),
(313, 18, 'Gwiwa'),
(314, 18, 'Hadejia'),
(315, 18, 'Jahun'),
(316, 18, 'Kafin Hausa'),
(317, 18, 'Kazaure'),
(318, 18, 'Kiri Kasama'),
(319, 18, 'Kiyawa'),
(320, 18, 'Kaugama'),
(321, 18, 'Maigatari'),
(322, 18, 'Malam Madori'),
(323, 18, 'Miga'),
(324, 18, 'Ringim'),
(325, 18, 'Roni'),
(326, 18, 'Sule Tankarkar'),
(327, 18, 'Taura'),
(328, 18, 'Yankwashi'),
(329, 19, 'Chikun'),
(330, 19, 'Giwa'),
(331, 19, 'Igabi'),
(332, 19, 'Ikara'),
(333, 19, 'Jaba'),
(334, 19, 'Jema\'a'),
(335, 19, 'Kachia'),
(336, 19, 'Kaduna North'),
(337, 19, 'Kaduna South'),
(338, 19, 'Kagarko'),
(339, 19, 'Kajuru'),
(340, 19, 'Kaura'),
(341, 19, 'Kauru'),
(342, 19, 'Kubau'),
(343, 19, 'Kudan'),
(344, 19, 'Lere'),
(345, 19, 'Makarfi'),
(346, 19, 'Sabon Gari'),
(347, 19, 'Sanga'),
(348, 19, 'Soba'),
(349, 19, 'Zangon Kataf'),
(350, 19, 'Zaria'),
(351, 20, 'Albasu'),
(352, 20, 'Bagwai'),
(353, 20, 'Bebeji'),
(354, 20, 'Bichi'),
(355, 20, 'Bunkure'),
(356, 20, 'Dala'),
(357, 20, 'Dambatta'),
(358, 20, 'Dawakin Kudu'),
(359, 20, 'Dawakin Tofa'),
(360, 20, 'Doguwa'),
(361, 20, 'Fagge'),
(362, 20, 'Gabasawa'),
(363, 20, 'Garko'),
(364, 20, 'Garun Mallam'),
(365, 20, 'Gaya'),
(366, 20, 'Gezawa'),
(367, 20, 'Gwale'),
(368, 20, 'Gwarzo'),
(369, 20, 'Kabo'),
(370, 20, 'Kano Municipal'),
(371, 20, 'Karaye'),
(372, 20, 'Kibiya'),
(373, 20, 'Kiru'),
(374, 20, 'Kumbotso'),
(375, 20, 'Kunchi'),
(376, 20, 'Kura'),
(377, 20, 'Madobi'),
(378, 20, 'Makoda'),
(379, 20, 'Minjibir'),
(380, 20, 'Nasarawa'),
(381, 20, 'Rano'),
(382, 20, 'Rimin Gado'),
(383, 20, 'Rogo'),
(384, 20, 'Shanono'),
(385, 20, 'Sumaila'),
(386, 20, 'Takai'),
(387, 20, 'Tarauni'),
(388, 20, 'Tofa'),
(389, 20, 'Tsanyawa'),
(390, 20, 'Tudun Wada'),
(391, 20, 'Ungogo'),
(392, 20, 'Warawa'),
(393, 20, 'Wudil'),
(394, 21, 'Batagarawa'),
(395, 21, 'Batsari'),
(396, 21, 'Baure'),
(397, 21, 'Bindawa'),
(398, 21, 'Charanchi'),
(399, 21, 'Dandume'),
(400, 21, 'Danja'),
(401, 21, 'Dan Musa'),
(402, 21, 'Daura'),
(403, 21, 'Dutsi'),
(404, 21, 'Dutsin Ma'),
(405, 21, 'Faskari'),
(406, 21, 'Funtua'),
(407, 21, 'Ingawa'),
(408, 21, 'Jibia'),
(409, 21, 'Kafur'),
(410, 21, 'Kaita'),
(411, 21, 'Kankara'),
(412, 21, 'Kankia'),
(413, 21, 'Katsina'),
(414, 21, 'Kurfi'),
(415, 21, 'Kusada'),
(416, 21, 'Mai\'Adua'),
(417, 21, 'Malumfashi'),
(418, 21, 'Mani'),
(419, 21, 'Mashi'),
(420, 21, 'Matazu'),
(421, 21, 'Musawa'),
(422, 21, 'Rimi'),
(423, 21, 'Sabuwa'),
(424, 21, 'Safana'),
(425, 21, 'Sandamu'),
(426, 21, 'Zango'),
(427, 22, 'Arewa Dandi'),
(428, 22, 'Argungu'),
(429, 22, 'Augie'),
(430, 22, 'Bagudo'),
(431, 22, 'Birnin Kebbi'),
(432, 22, 'Bunza'),
(433, 22, 'Dandi'),
(434, 22, 'Fakai'),
(435, 22, 'Gwandu'),
(436, 22, 'Jega'),
(437, 22, 'Kalgo'),
(438, 22, 'Koko/Besse'),
(439, 22, 'Maiyama'),
(440, 22, 'Ngaski'),
(441, 22, 'Sakaba'),
(442, 22, 'Shanga'),
(443, 22, 'Suru'),
(444, 22, 'Wasagu/Danko'),
(445, 22, 'Yauri'),
(446, 22, 'Zuru'),
(447, 23, 'Ajaokuta'),
(448, 23, 'Ankpa'),
(449, 23, 'Bassa'),
(450, 23, 'Dekina'),
(451, 23, 'Ibaji'),
(452, 23, 'Idah'),
(453, 23, 'Igalamela Odolu'),
(454, 23, 'Ijumu'),
(455, 23, 'Kabba/Bunu'),
(456, 23, 'Kogi'),
(457, 23, 'Lokoja'),
(458, 23, 'Mopa Muro'),
(459, 23, 'Ofu'),
(460, 23, 'Ogori/Magongo'),
(461, 23, 'Okehi'),
(462, 23, 'Okene'),
(463, 23, 'Olamaboro'),
(464, 23, 'Omala'),
(465, 23, 'Yagba East'),
(466, 23, 'Yagba West'),
(467, 24, 'Baruten'),
(468, 24, 'Edu'),
(469, 24, 'Ekiti'),
(470, 24, 'Ifelodun'),
(471, 24, 'Ilorin East'),
(472, 24, 'Ilorin South'),
(473, 24, 'Ilorin West'),
(474, 24, 'Irepodun'),
(475, 24, 'Isin'),
(476, 24, 'Kaiama'),
(477, 24, 'Moro'),
(478, 24, 'Offa'),
(479, 24, 'Oke Ero'),
(480, 24, 'Oyun'),
(481, 24, 'Pategi'),
(482, 25, 'Ajeromi-Ifelodun'),
(483, 25, 'Alimosho'),
(484, 25, 'Amuwo-Odofin'),
(485, 25, 'Apapa'),
(486, 25, 'Badagry'),
(487, 25, 'Epe'),
(488, 25, 'Eti Osa'),
(489, 25, 'Ibeju-Lekki'),
(490, 25, 'Ifako-Ijaiye'),
(491, 25, 'Ikeja'),
(492, 25, 'Ikorodu'),
(493, 25, 'Kosofe'),
(494, 25, 'Lagos Island'),
(495, 25, 'Lagos Mainland'),
(496, 25, 'Mushin'),
(497, 25, 'Ojo'),
(498, 25, 'Oshodi-Isolo'),
(499, 25, 'Shomolu'),
(500, 25, 'Surulere'),
(501, 26, 'Awe'),
(502, 26, 'Doma'),
(503, 26, 'Karu'),
(504, 26, 'Keana'),
(505, 26, 'Keffi'),
(506, 26, 'Kokona'),
(507, 26, 'Lafia'),
(508, 26, 'Nasarawa'),
(509, 26, 'Nasarawa Egon'),
(510, 26, 'Obi'),
(511, 26, 'Toto'),
(512, 26, 'Wamba'),
(513, 27, 'Agwara'),
(514, 27, 'Bida'),
(515, 27, 'Borgu'),
(516, 27, 'Bosso'),
(517, 27, 'Chanchaga'),
(518, 27, 'Edati'),
(519, 27, 'Gbako'),
(520, 27, 'Gurara'),
(521, 27, 'Katcha'),
(522, 27, 'Kontagora'),
(523, 27, 'Lapai'),
(524, 27, 'Lavun'),
(525, 27, 'Magama'),
(526, 27, 'Mariga'),
(527, 27, 'Mashegu'),
(528, 27, 'Mokwa'),
(529, 27, 'Moya'),
(530, 27, 'Paikoro'),
(531, 27, 'Rafi'),
(532, 27, 'Rijau'),
(533, 27, 'Shiroro'),
(534, 27, 'Suleja'),
(535, 27, 'Tafa'),
(536, 27, 'Wushishi'),
(537, 28, 'Abeokuta South'),
(538, 28, 'Ado-Odo/Ota'),
(539, 28, 'Egbado North'),
(540, 28, 'Egbado South'),
(541, 28, 'Ewekoro'),
(542, 28, 'Ifo'),
(543, 28, 'Ijebu East'),
(544, 28, 'Ijebu North'),
(545, 28, 'Ijebu North East'),
(546, 28, 'Ijebu Ode'),
(547, 28, 'Ikenne'),
(548, 28, 'Imeko Afon'),
(549, 28, 'Ipokia'),
(550, 28, 'Obafemi Owode'),
(551, 28, 'Odeda'),
(552, 28, 'Odogbolu'),
(553, 28, 'Ogun Waterside'),
(554, 28, 'Remo North'),
(555, 28, 'Shagamu'),
(556, 29, 'Akoko North-West'),
(557, 29, 'Akoko South-West'),
(558, 29, 'Akoko South-East'),
(559, 29, 'Akure North'),
(560, 29, 'Akure South'),
(561, 29, 'Ese Odo'),
(562, 29, 'Idanre'),
(563, 29, 'Ifedore'),
(564, 29, 'Ilaje'),
(565, 29, 'Ile Oluji/Okeigbo'),
(566, 29, 'Irele'),
(567, 29, 'Odigbo'),
(568, 29, 'Okitipupa'),
(569, 29, 'Ondo East'),
(570, 29, 'Ondo West'),
(571, 29, 'Ose'),
(572, 29, 'Owo'),
(573, 30, 'Atakunmosa West'),
(574, 30, 'Aiyedaade'),
(575, 30, 'Aiyedire'),
(576, 30, 'Boluwaduro'),
(577, 30, 'Boripe'),
(578, 30, 'Ede North'),
(579, 30, 'Ede South'),
(580, 30, 'Ife Central'),
(581, 30, 'Ife East'),
(582, 30, 'Ife North'),
(583, 30, 'Ife South'),
(584, 30, 'Egbedore'),
(585, 30, 'Ejigbo'),
(586, 30, 'Ifedayo'),
(587, 30, 'Ifelodun'),
(588, 30, 'Ila'),
(589, 30, 'Ilesa East'),
(590, 30, 'Ilesa West'),
(591, 30, 'Irepodun'),
(592, 30, 'Irewole'),
(593, 30, 'Isokan'),
(594, 30, 'Iwo'),
(595, 30, 'Obokun'),
(596, 30, 'Odo Otin'),
(597, 30, 'Ola Oluwa'),
(598, 30, 'Olorunda'),
(599, 30, 'Oriade'),
(600, 30, 'Orolu'),
(601, 30, 'Osogbo'),
(602, 31, 'Akinyele'),
(603, 31, 'Atiba'),
(604, 31, 'Atisbo'),
(605, 31, 'Egbeda'),
(606, 31, 'Ibadan North'),
(607, 31, 'Ibadan North-East'),
(608, 31, 'Ibadan North-West'),
(609, 31, 'Ibadan South-East'),
(610, 31, 'Ibadan South-West'),
(611, 31, 'Ibarapa Central'),
(612, 31, 'Ibarapa East'),
(613, 31, 'Ibarapa North'),
(614, 31, 'Ido'),
(615, 31, 'Irepo'),
(616, 31, 'Iseyin'),
(617, 31, 'Itesiwaju'),
(618, 31, 'Iwajowa'),
(619, 31, 'Kajola'),
(620, 31, 'Lagelu'),
(621, 31, 'Ogbomosho North'),
(622, 31, 'Ogbomosho South'),
(623, 31, 'Ogo Oluwa'),
(624, 31, 'Olorunsogo'),
(625, 31, 'Oluyole'),
(626, 31, 'Ona Ara'),
(627, 31, 'Orelope'),
(628, 31, 'Ori Ire'),
(629, 31, 'Oyo'),
(630, 31, 'Oyo East'),
(631, 31, 'Saki East'),
(632, 31, 'Saki West'),
(633, 31, 'Surulere'),
(634, 32, 'Barkin Ladi'),
(635, 32, 'Bassa'),
(636, 32, 'Jos East'),
(637, 32, 'Jos North'),
(638, 32, 'Jos South'),
(639, 32, 'Kanam'),
(640, 32, 'Kanke'),
(641, 32, 'Langtang South'),
(642, 32, 'Langtang North'),
(643, 32, 'Mangu'),
(644, 32, 'Mikang'),
(645, 32, 'Pankshin'),
(646, 32, 'Qua\'an Pan'),
(647, 32, 'Riyom'),
(648, 32, 'Shendam'),
(649, 32, 'Wase'),
(650, 33, 'Ahoada East'),
(651, 33, 'Ahoada West'),
(652, 33, 'Akuku-Toru'),
(653, 33, 'Andoni'),
(654, 33, 'Asari-Toru'),
(655, 33, 'Bonny'),
(656, 33, 'Degema'),
(657, 33, 'Eleme'),
(658, 33, 'Emuoha'),
(659, 33, 'Etche'),
(660, 33, 'Gokana'),
(661, 33, 'Ikwerre'),
(662, 33, 'Khana'),
(663, 33, 'Obio/Akpor'),
(664, 33, 'Ogba/Egbema/Ndoni'),
(665, 33, 'Ogu/Bolo'),
(666, 33, 'Okrika'),
(667, 33, 'Omuma'),
(668, 33, 'Opobo/Nkoro'),
(669, 33, 'Oyigbo'),
(670, 33, 'Port Harcourt'),
(671, 33, 'Tai'),
(672, 34, 'Bodinga'),
(673, 34, 'Dange Shuni'),
(674, 34, 'Gada'),
(675, 34, 'Goronyo'),
(676, 34, 'Gudu'),
(677, 34, 'Gwadabawa'),
(678, 34, 'Illela'),
(679, 34, 'Isa'),
(680, 34, 'Kebbe'),
(681, 34, 'Kware'),
(682, 34, 'Rabah'),
(683, 34, 'Sabon Birni'),
(684, 34, 'Shagari'),
(685, 34, 'Silame'),
(686, 34, 'Sokoto North'),
(687, 34, 'Sokoto South'),
(688, 34, 'Tambuwal'),
(689, 34, 'Tangaza'),
(690, 34, 'Tureta'),
(691, 34, 'Wamako'),
(692, 34, 'Wurno'),
(693, 34, 'Yabo'),
(694, 35, 'Bali'),
(695, 35, 'Donga'),
(696, 35, 'Gashaka'),
(697, 35, 'Gassol'),
(698, 35, 'Ibi'),
(699, 35, 'Jalingo'),
(700, 35, 'Karim Lamido'),
(701, 35, 'Kumi'),
(702, 35, 'Lau'),
(703, 35, 'Sardauna'),
(704, 35, 'Takum'),
(705, 35, 'Ussa'),
(706, 35, 'Wukari'),
(707, 35, 'Yorro'),
(708, 35, 'Zing'),
(709, 36, 'Bursari'),
(710, 36, 'Damaturu'),
(711, 36, 'Fika'),
(712, 36, 'Fune'),
(713, 36, 'Geidam'),
(714, 36, 'Gujba'),
(715, 36, 'Gulani'),
(716, 36, 'Jakusko'),
(717, 36, 'Karasuwa'),
(718, 36, 'Machina'),
(719, 36, 'Nangere'),
(720, 36, 'Nguru'),
(721, 36, 'Potiskum'),
(722, 36, 'Tarmuwa'),
(723, 36, 'Yunusari'),
(724, 36, 'Yusufari'),
(725, 37, 'Bakura'),
(726, 37, 'Birnin Magaji/Kiyaw'),
(727, 37, 'Bukkuyum'),
(728, 37, 'Bungudu'),
(729, 37, 'Gummi'),
(730, 37, 'Gusau'),
(731, 37, 'Kaura Namoda'),
(732, 37, 'Maradun'),
(733, 37, 'Maru'),
(734, 37, 'Shinkafi'),
(735, 37, 'Talata Mafara'),
(736, 37, 'Chafe'),
(737, 37, 'Zurmi'),
(738, 9, 'Abi'),
(739, 13, 'Ado Ekiti'),
(740, 1, 'Aba South'),
(741, 2, 'Demsa'),
(742, 3, 'Abak'),
(743, 4, 'Aguata'),
(744, 5, 'Alkaleri'),
(745, 6, 'Brass'),
(746, 7, 'Agatu'),
(747, 8, 'Abadam'),
(748, 10, 'Aniocha North'),
(750, 11, 'Abakaliki'),
(751, 12, 'Akoko Edo'),
(752, 14, 'Aninri'),
(753, 15, 'Abaji'),
(754, 16, 'Akko'),
(755, 17, 'Aboh-Mbaise'),
(756, 18, 'Auyo'),
(757, 20, 'Ajingi'),
(758, 19, 'Birni-Gwari'),
(759, 21, 'Bakori'),
(760, 22, 'Aleiro'),
(761, 23, 'Adavi, Nigeria'),
(762, 24, 'Asa'),
(763, 25, 'Agege'),
(764, 26, 'Akwanga'),
(765, 27, 'Agaie'),
(766, 28, 'Yewa South'),
(767, 28, 'Abeukuta North'),
(768, 30, 'Atakunmosa East'),
(769, 29, 'Akoko South Akure East'),
(770, 31, 'Afijio '),
(771, 32, 'Bokkos'),
(772, 33, 'Abua/Odual'),
(773, 34, 'Binji'),
(774, 35, 'Ardo-Kola'),
(775, 36, 'Bade'),
(776, 37, 'Anka');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'frank', 'frank'),
(2, 'peter', 'peter'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2018-07-12 17:57:37', 'no'),
(2, 1, '2018-07-13 03:35:17', 'no'),
(3, 2, '2018-07-13 03:34:39', 'no'),
(4, 2, '2018-07-13 03:42:00', 'yes'),
(5, 1, '2018-07-13 05:50:33', 'no'),
(6, 2, '2018-07-13 04:07:11', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `adddate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newstitle`, `body`, `adddate`) VALUES
(13, '2018/2019 Admission Process Thread Guide ', 'Sequel to the release of the date for the 2018 UTME, which is proposed to hold March 9 to 17, this thread therefore would serve as a point of contact for all Nairalanders aiming for next year UTME and subsequently PUTME.\r\n\r\nFurthermore, this thread would serve as a point where aspirants would get advice as regards their schools of choice, latest admission news and guidelines pertaining to their subject combinations, which would facilitate easy running for next year admission processes.\r\nAlso, aspirants would get to know some basic things regarding their courses and Universities before selecting them, this stage being the first step of admission process for all aspirants would be stocked with information important for your journey through out this stage.\r\n\r\nFeel free to ask questions and ensure while doing this, all Nairaland Rules are protected.\r\n\r\nThanks.', '2018-06-06 04:23:03.000000');

-- --------------------------------------------------------

--
-- Table structure for table `newsfiles`
--

CREATE TABLE `newsfiles` (
  `fileId` int(11) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `newsfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsfiles`
--

INSERT INTO `newsfiles` (`fileId`, `newstitle`, `newsfile`) VALUES
(1, 'another news', '../newsfile/2'),
(2, 'still testing', '../newsfile/20160620_081737.jpg'),
(3, 'still testing', '../newsfile/20160822_183836.jpg'),
(4, 'still testing', '../newsfile/20161009_165427.jpg'),
(5, 'still testing', '../newsfile/FB_IMG_1476215279723.jpg'),
(6, 'still testing', '../newsfile/IMAG0618.jpg'),
(7, 'still testing', '../newsfile/IMAG0620.jpg'),
(8, 'still testing withdate', '../newsfile/20160620_081737.jpg'),
(9, 'still testing withdate', '../newsfile/20161009_165128.jpg'),
(10, 'still testing with timestam', '../newsfile/20160620_081737.jpg'),
(11, 'still testing with timestam', '../newsfile/20161009_165128.jpg'),
(12, '08/50053 View books localhost solution, be it XAMPP or similar, will most probably not have any working mail server included. To be able to debug/develop the e', '../newsfile/20160225_145312.jpg'),
(13, '08/50053 View books localhost solution, be it XAMPP or similar, will most probably not have any working mail server included. To be able to debug/develop the e', '../newsfile/IMG_20141228_114349.jpg'),
(14, '08/50053 View books localhost solution, be it XAMPP or similar, will most probably not have any working mail server included. To be able to debug/develop the e', '../newsfile/IMG_20161018_155643.jpg'),
(15, '08/50053 View books localhost solution, be it XAMPP or similar, will most probably not have any working mail server included. To be able to debug/develop the e', '../newsfile/itafor11.jpg'),
(16, '08/50053 View books localhost solution, be it XAMPP or similar, will most probably not have any working mail server included. To be able to debug/develop the e', '../newsfile/otondofrnd.jpg'),
(17, 'SUMMER POSSIBILITIES', '../newsfile/'),
(18, 'school counseling week.', '../newsfile/'),
(19, 'Admission', '../newsfile/'),
(20, '2018/2019 Admission Process Thread Guide', '../newsfile/backgdimage.jpg'),
(21, 'Nigerians Now Drawing The New Jersey On Their Body Instead Of Paying 41k For It.', '../newsfile/20160620_081737.jpg'),
(22, 'Nigerians Now Drawing The New Jersey On Their Body Instead Of Paying 41k For It.', '../newsfile/20161009_165109.jpg'),
(23, 'Nigerians Now Drawing The New Jersey On Their Body Instead Of Paying 41k For It.', '../newsfile/20161009_165128.jpg'),
(24, 'Nigerians Now Drawing The New Jersey On Their Body Instead Of Paying 41k For It.', '../newsfile/20161009_165148.jpg'),
(25, '2018/2019 Admission Process Thread Guide ', '../newsfile/'),
(26, '2018/2019 Admission Process Thread Guide ', '../newsfile/');

-- --------------------------------------------------------

--
-- Table structure for table `primary_register`
--

CREATE TABLE `primary_register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `ca` varchar(255) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `primary_register`
--

INSERT INTO `primary_register` (`id`, `fullname`, `regno`, `year`, `class`, `dept`, `term`, `subject`, `exam`, `ca`, `regdate`) VALUES
(15, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'First Term', 'mathematics', '60', '23', '2018-07-09'),
(16, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'First Term', 'english Language', '34', '32', '2018-07-09'),
(17, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'First Term', 'Social Studies', '12', '32', '2018-07-09'),
(18, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'First Term', 'Home Economics', '56', '32', '2018-07-09'),
(19, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'First Term', 'PHE', '12', '23', '2018-07-09'),
(20, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'First Term', 'Hand Writing', '45', '21', '2018-07-09'),
(21, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'First Term', 'CRS', '56', '23', '2018-07-09'),
(22, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'mathematics', '60', '22', '2018-07-09'),
(23, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'english Language', '33', '21', '2018-07-09'),
(24, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'Social Studies', '44', '31', '2018-07-09'),
(25, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'Home Economics', '32', '21', '2018-07-09'),
(26, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'PHE', '32', '34', '2018-07-09'),
(27, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'Hand Writing', '60', '40', '2018-07-09'),
(28, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'CRS', '57', '40', '2018-07-09'),
(29, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Second Term', 'mathematics', '50', '30', '2018-07-09'),
(30, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Second Term', 'english Language', '45', '37', '2018-07-09'),
(31, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Second Term', 'Social Studies', '49', '39', '2018-07-09'),
(32, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Second Term', 'Home Economics', '21', '34', '2018-07-09'),
(33, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Second Term', 'PHE', '51', '33', '2018-07-09'),
(34, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Second Term', 'Hand Writing', '60', '28', '2018-07-09'),
(35, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Second Term', 'CRS', '43', '22', '2018-07-09'),
(36, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Second Term', 'mathematics', '00', '00', '2018-07-09'),
(37, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Second Term', 'english Language', '00', '00', '2018-07-09'),
(38, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Second Term', 'Social Studies', '00', '00', '2018-07-09'),
(39, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Second Term', 'Home Economics', '00', '00', '2018-07-09'),
(40, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Second Term', 'PHE', '00', '00', '2018-07-09'),
(41, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Second Term', 'Hand Writing', '00', '00', '2018-07-09'),
(42, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Second Term', 'CRS', '00', '00', '2018-07-09'),
(43, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Third Term', 'mathematics', '00', '00', '2018-07-09'),
(44, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Third Term', 'english Language', '00', '00', '2018-07-09'),
(45, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Third Term', 'Social Studies', '00', '00', '2018-07-09'),
(46, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Third Term', 'Home Economics', '00', '00', '2018-07-09'),
(47, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Third Term', 'PHE', '00', '00', '2018-07-09'),
(48, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Third Term', 'Hand Writing', '00', '00', '2018-07-09'),
(49, 'Linda  Paul  Vintia', 'pry/student2', '2018', 'BASIC2', 'Primary', 'Third Term', 'CRS', '00', '00', '2018-07-09'),
(50, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Third Term', 'mathematics', '47', '23', '2018-07-09'),
(51, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Third Term', 'english Language', '46', '32', '2018-07-09'),
(52, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Third Term', 'Social Studies', '55', '31', '2018-07-09'),
(53, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Third Term', 'Home Economics', '45', '23', '2018-07-09'),
(54, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Third Term', 'PHE', '55', '21', '2018-07-09'),
(55, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Third Term', 'Hand Writing', '43', '21', '2018-07-09'),
(56, 'Kposi  Idowu  Ide', 'pry/student3', '2018', 'BASIC3', 'Primary', 'Third Term', 'CRS', '60', '32', '2018-07-09'),
(57, 'Patience  John  Nwaka ', 'pry/basic1', '2018', 'BASIC1', 'Primary', 'Third Term', 'mathematics', '00', '00', '2018-07-09'),
(58, 'Patience  John  Nwaka ', 'pry/basic1', '2018', 'BASIC1', 'Primary', 'Third Term', 'english Language', '00', '00', '2018-07-09'),
(59, 'Patience  John  Nwaka ', 'pry/basic1', '2018', 'BASIC1', 'Primary', 'Third Term', 'Social Studies', '00', '00', '2018-07-09'),
(60, 'Patience  John  Nwaka ', 'pry/basic1', '2018', 'BASIC1', 'Primary', 'Third Term', 'Home Economics', '00', '00', '2018-07-09'),
(61, 'Patience  John  Nwaka ', 'pry/basic1', '2018', 'BASIC1', 'Primary', 'Third Term', 'PHE', '00', '00', '2018-07-09'),
(62, 'Patience  John  Nwaka ', 'pry/basic1', '2018', 'BASIC1', 'Primary', 'Third Term', 'Hand Writing', '00', '00', '2018-07-09'),
(63, 'Patience  John  Nwaka ', 'pry/basic1', '2018', 'BASIC1', 'Primary', 'Third Term', 'CRS', '00', '00', '2018-07-09'),
(64, 'Ibi Ele Ben', 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'mathematics', '56', '23', '2018-07-10'),
(65, 'Ibi Ele Ben', 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'english Language', '50', '23', '2018-07-10'),
(66, 'Ibi Ele Ben', 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'Social Studies', '45', '21', '2018-07-10'),
(67, 'Ibi Ele Ben', 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'Home Economics', '55', '33', '2018-07-10'),
(68, 'Ibi Ele Ben', 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'Hand Writing', '60', '13', '2018-07-10'),
(69, 'Ibi Ele Ben', 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'CRS', '44', '32', '2018-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `primary_setting`
--

CREATE TABLE `primary_setting` (
  `id` int(11) NOT NULL,
  `schname` varchar(255) NOT NULL,
  `schaddress` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `primary_setting`
--

INSERT INTO `primary_setting` (`id`, `schname`, `schaddress`, `phone`, `email`, `website`, `logo`) VALUES
(1, 'Silverbird  International  Primary School', '10, awolowo road, Ikoyi,  Lagos', '07065907948, 08055907949', 'info@silverbirdschools.ng.com', 'www.silverbirdschools.com.ng', 'images/Godswilllogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `primary_subject`
--

CREATE TABLE `primary_subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `qnid` int(11) NOT NULL DEFAULT '0',
  `question` varchar(500) DEFAULT NULL,
  `optiona` varchar(100) DEFAULT NULL,
  `optionb` varchar(100) DEFAULT NULL,
  `optionc` varchar(100) DEFAULT NULL,
  `optiond` varchar(100) DEFAULT NULL,
  `correctanswer` enum('optiona','optionb','optionc','optiond') DEFAULT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`testid`, `qnid`, `question`, `optiona`, `optionb`, `optionc`, `optiond`, `correctanswer`, `marks`) VALUES
(1, 1, ' What is the next prime number after 7?', '9', '11', '13', '19', 'optionb', 1),
(1, 2, 'The value of x + x(xx) when x = 2 is:', '16', '18', '36', '10', 'optiond', 1),
(1, 3, 'The distance light travels in one year is approximately 5,870,000,000,000 miles. The distance light travels in 100 years is:', '587 ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â 108 miles,', '587 ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â 1010 miles, ', '587 ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â 10-10 miles, ', '587 ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â 1012 miles, ', 'optiond', 3),
(1, 4, 'Jones covered a distance of 50 miles on his first trip. On a later trip he traveled 300 miles while going three times as fast. His new time compared with the old time was:', 'three times as much,', 'twice as much,', 'the same,', 'half as much,', 'optionb', 1),
(2, 1, 'The most widely used computer device is.', 'Solid state disks', 'External hard disk', 'Internal hard disk', 'Mouse', 'optiond', 1),
(2, 2, 'Who is father of modern computers?', 'Abraham Lincoln', 'James Gosling', 'Charles Babbage', 'Gordon E. Moore ', 'optionc', 1),
(2, 3, 'How many generations of computers we have?', '5', '8', '7', '6', 'optiona', 2),
(2, 4, '_______ are software which is used to do particular task.', ' Operating system', 'Program', 'Data', 'Software', 'optionb', 3),
(2, 5, ' The improvement of computer hardware theory is summarized by which law.?', 'Metcalf&#039;s law', 'Bill&#039;s Law', 'Moore&#039;s First Law', 'Grove&#039;s law', 'optionc', 5),
(2, 6, 'Another name for computer monitor is ---', 'VDU', 'VLC', 'GUI', 'ROM', 'optiona', 3),
(2, 7, 'VDU stands for -----', 'Video device unit', 'voluminous Device Unit ', 'Visual Display Unit', 'Voice Decoder Unit', 'optionc', 4),
(3, 1, '_is the name of a person, animal, place or things', 'verb', 'adverb', 'noun', 'preposition', 'optionc', 1),
(3, 2, '___Is a word used instead of a noun', 'adjective', 'conjuction', 'verb', 'pronoun', 'optiond', 1),
(4, 1, 'If y=a+b, where a=3, b=7. find y', '9', '15', '10', '13', 'optionc', 3),
(4, 2, 'simplify 9(5-3)', '16', '15', '36', '18', 'optiond', 2),
(4, 3, 'if an event is certain to happen, its probability is---', '1', '-3', '2', '-1', 'optiona', 1),
(5, 1, 'which of this is not a hardware of a computer', 'mother board', 'pencil', 'speaker', 'keyboard', 'optionb', 1),
(5, 2, 'how many function keys has the standard keyboard', '11', '12', '7', '2', 'optionb', 1),
(6, 1, '- is an input device', 'pen', 'book', 'eraza', 'mouse', 'optiond', 1),
(7, 1, '- is the name of a person , animal or things', 'verb', 'pronounce', 'adverb', 'noun', 'optiond', 3),
(7, 2, 'A person that drives an aroplane is call', 'drive', 'pillot', 'rider', 'conductor', 'optionb', 3),
(7, 3, 'A person that treat sick animals is called', 'native doctor', 'medical doctor', 'nurse', 'vertnary doctor', 'optiond', 1),
(7, 4, 'Your mother Brother is your---', 'Aunty', 'Uncle', 'Father', 'Cousin', 'optionb', 13),
(8, 1, '2+2=  ?', '4', '3', '8', '1', 'optiona', 3),
(8, 2, '&lt;p&gt;if 3&lt;sup&gt;2&lt;/sup&gt;=x, find x&lt;/p&gt;', '5', '2', '9', '1', 'optionc', 3),
(8, 3, 'find the mean of 2,3,4,5', '37', '2.5', '20.4', '3.5', 'optiond', 14),
(8, 4, 'what is the mode of these numbers: 2,5,7,1,1,1,5,6,', '1', '5', '6', '7', 'optiona', 24),
(8, 5, '&lt;p&gt;An arc subtends an angle of 150 degree at the centre of a circle of radius 6cm. Find the length of the arc (take &lt;code&gt;pi=22/7)&lt;/code&gt;&lt;/p&gt;', '22cm', '16cm', '12cm', '11cm', 'optiond', 4),
(9, 1, 'what is the mode of these numbers: 2,5,7,1,1,1,5,6,', '1', '5', '6', '2', 'optiona', 14),
(9, 2, '3+4', '2', '5', '7', '9', 'optionc', 1),
(10, 1, '6-5=?', '2', '1', '3', '5', 'optionb', 33),
(10, 2, '3*2', '3', '8', '6', '1', 'optionc', 15),
(11, 1, '3-8=', '-5', '9', '4', '2', 'optiona', 55),
(11, 2, '4/2=', '2', '4', '6', '8', 'optiona', 54),
(12, 1, 'find x if 2x&lt;4\r\n', 'x &gt; 5', 'x&lt;-2', 'x &lt; 2', 'x &gt; 3', 'optionc', 3),
(12, 2, 'find the 4th term of the A.P if first term is 3 and d=1', '6', '5', '2', '8', 'optionb', 2),
(12, 3, '&lt;p&gt;simplify 3&lt;sup&gt;2x&lt;/sup&gt;=9&lt;/p&gt;', '9', '12', '3/2', '1/2', 'optionc', 2),
(12, 4, '&lt;p&gt;find dy/dx if y=x&lt;sup&gt;2&lt;/sup&gt; +3x-6&lt;/p&gt;', 'x+3', '-5x+2', '2x+3', 'x', 'optionc', 2),
(13, 1, '&lt;p&gt;What does PHP stand for?&lt;/p&gt;', 'peripheral higher preprocessor', 'Personal Hypertext Processor', ' PHP: Hypertext Preprocessor', 'Private Home Page', 'optionc', 3),
(13, 2, '&lt;p&gt;How do you get information from a form that is submitted using the &quot;get&quot; method?&lt;/p&gt;', '$_GET[];', 'Request.Form;', 'Request.QueryString;', 'Request.Query', 'optiona', 3),
(13, 3, '&lt;p&gt;How do you write &amp;quot;Hello World&amp;quot; in PHP&lt;/p&gt;\r\n', 'Document.Write(&quot;Hello World&quot;);', '&quot;Hello World&quot;;', 'echo &quot;Hello World&quot;;', 'alert &quot;Hello World&quot;;', 'optionc', 3),
(13, 4, '&lt;p&gt;&amp;nbsp;All variables in PHP start with which symbol?&lt;/p&gt;\r\n', '$', '!', '%', '#', 'optiona', 3),
(13, 5, '&lt;p&gt;When using the POST method, variables are displayed in the URL:&lt;/p&gt;\r\n', 'True', 'False', 'Non of the above', 'all of the above', 'optionb', 3),
(13, 6, '&lt;p&gt;&amp;nbsp;What is the correct way to create a function in PHP?&lt;/p&gt;\r\n', 'function myFunction()', 'create myFunction()', 'new_function myFunction()', 'let function myFunction()', 'optiona', 3),
(13, 7, '&lt;p&gt;What is the correct way to add 1 to the $count variable?&lt;/p&gt;', 'count++;', '++count', '$count =+1', '$count++;', 'optiond', 3),
(13, 8, '&lt;p&gt;Which one of these variables has an illegal name?&lt;/p&gt;', '$my-Var', '$my_Var', '$myVar', '$_myVar', 'optiona', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `totalscore` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id`, `totalscore`, `rank`, `regno`, `year`, `class`, `dept`, `term`, `fullname`) VALUES
(13816, '527', 1, 'pry/student3', '2018', 'BASIC3', 'Primary', 'First Term', 'Kposi  Idowu  Ide'),
(13840, '461', 1, 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'Linda  Paul  Vintia'),
(13841, '455', 2, 'basic2', '2018', 'BASIC2', 'Primary', 'First Term', 'Ibi Ele Ben'),
(13851, '937', 1, '08/50053', '2018', 'SS1', 'Science', 'First Term', 'David  Clement  ITA'),
(13852, '813', 2, '08/50053', '2018', 'SS1', 'Science', 'First Term', 'akim paul'),
(13853, '783', 3, '08/50053', '2018', 'SS1', 'Science', 'First Term', 'Blessing  Heritage  UBI'),
(13854, '389', 1, '08/50053', '2018', 'SS1', 'Science', 'Second Term', 'Blessing  Heritage  UBI'),
(13855, '0', 2, '08/50053', '2018', 'SS1', 'Science', 'Second Term', 'David  Clement  ITA'),
(14161, '365', 1, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Boluwade  F  Fikayo'),
(14162, '142', 2, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Agbonaruoho   M  Magdalene'),
(14163, '140', 3, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Akinboro  T  Teniola'),
(14164, '138', 4, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Adeyemi  W  Wonderful'),
(14165, '121', 5, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Onipede  D  David'),
(14166, '120', 6, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Akamo  B  Basit'),
(14167, '119', 7, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Ojo  Abdul  Quowiyu'),
(14168, '116', 8, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Muftau  Q  Quadri'),
(14169, '105', 9, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Okediya  T  Timileyin'),
(14170, '104', 10, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Popoola  D  Daniel'),
(14171, '100', 11, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Francis  D  Daniel'),
(14172, '99', 12, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Muhammed  A  Arafat'),
(14173, '89', 13, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Oyelola  F  Feyisara'),
(14174, '64', 14, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Olatunji  B  Bolaji'),
(14175, '63', 15, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Akanbi  D  Dorcas'),
(14176, '61', 16, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Olanrewaju  m  Maxwell'),
(14177, '58', 17, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Akinola  T  Temidayo'),
(14178, '39', 18, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Olatokun  O  Opeoluwa'),
(14179, '30', 19, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Adeniran  p  Precious'),
(14180, '18', 20, 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Mustapha   L  Latifat'),
(14182, '35', 1, 'bs/ss2/005', '2018', 'SS2', 'Arts', 'First Term', 'Emeka Jonas'),
(14231, '93.5', 1, 'bs/ss2/002', '2018', 'SS2', 'Science', 'Second Term', 'Elijah  E  Ejenavwo'),
(14232, '90', 2, 'bs/ss2/002', '2018', 'SS2', 'Science', 'Second Term', 'Taiwo  A  Adejumo'),
(14233, '79', 3, 'bs/ss2/002', '2018', 'SS2', 'Science', 'Second Term', 'John  C  Collins'),
(14234, '74.5', 4, 'bs/ss2/002', '2018', 'SS2', 'Science', 'Second Term', 'Rosemary  J  Jaiyeoba'),
(14235, '59.5', 5, 'bs/ss2/002', '2018', 'SS2', 'Science', 'Second Term', 'Fathia  M  Mohammed'),
(14236, '55.5', 6, 'bs/ss2/002', '2018', 'SS2', 'Science', 'Second Term', 'Paul  J  Joseph'),
(14271, '314', 1, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Edo  A  Abigail'),
(14272, '287', 2, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Fashawe  O  Opemipo'),
(14273, '255', 3, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Daniel  G  Abe'),
(14274, '169', 4, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Owuoma  C  Chidinma'),
(14275, '152', 5, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Mgbekwere  C  Chukwuemeka'),
(14276, '145', 6, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Labinjo  S  seyifunmi'),
(14277, '145', 6, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Ogundiyan  O  Moyosore'),
(14278, '132', 7, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Onipede  D  Damilola'),
(14279, '121', 8, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Moses  I  Ifeoluwa'),
(14280, '119', 9, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Ogunsakin  P  Philip'),
(14281, '119', 9, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Salaudeen  M  Muibat'),
(14282, '112', 10, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Talabi  O  Oluwakemi'),
(14283, '107', 11, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Mustapha   A  Abdulhameed'),
(14284, '101', 12, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Mutayero  R  Rokeebat'),
(14285, '97', 13, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Osayimwen  O  Osafunwengbe'),
(14286, '92', 14, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Adeyemi   o  Oreoluwa'),
(14287, '59', 15, 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Umoh  G  Goodness'),
(14318, '600', 1, 'bs/ss2/003', '2018', 'SS2', 'Science', 'First Term', 'Rosemary  J  Jaiyeoba'),
(14319, '527', 2, 'bs/ss2/003', '2018', 'SS2', 'Science', 'First Term', 'Elijah  E  Ejenavwo'),
(14320, '512', 3, 'bs/ss2/003', '2018', 'SS2', 'Science', 'First Term', 'John  C  Collins'),
(14321, '488', 4, 'bs/ss2/003', '2018', 'SS2', 'Science', 'First Term', 'Taiwo  A  Adejumo'),
(14322, '473', 5, 'bs/ss2/003', '2018', 'SS2', 'Science', 'First Term', 'Paul  J  Joseph'),
(14323, '469', 6, 'bs/ss2/003', '2018', 'SS2', 'Science', 'First Term', 'Fathia  M  Mohammed');

-- --------------------------------------------------------

--
-- Table structure for table `reply_complain`
--

CREATE TABLE `reply_complain` (
  `replyID` int(11) NOT NULL,
  `matricno` varchar(255) NOT NULL,
  `MES` text NOT NULL,
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `adusername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reply_complain`
--

INSERT INTO `reply_complain` (`replyID`, `matricno`, `MES`, `id`, `date`, `adusername`) VALUES
(128, ' 08/50053', 'Yes, but twice, 60% and 40%', 29, '2018-06-10', 'admin'),
(129, ' 08/50053', 'Who is the lecturer in charge of CSC101?', 35, '2018-06-10', 'admin'),
(130, ' 08/50053', 'Dr. Mboto', 35, '2018-06-10', ''),
(131, '  08/50053', 'OK! I will get back to you in the next 20mins', 35, '2018-06-10', 'admin '),
(132, ' 08/50053', 'Thanks a lot Sir', 35, '2018-06-10', ''),
(133, '  08/50053', 'No worries', 35, '2018-06-10', 'admin '),
(134, ' 08/50053', 'Thanks Sir', 29, '2018-06-10', ''),
(135, '  08/50053', 'You are welcome!', 29, '2018-06-10', 'admin '),
(139, ' 08/50053', 'hi', 35, '2018-06-11', ''),
(140, '  08/50053', 'How are u doing tody', 35, '2018-06-11', 'Admin '),
(141, ' 08/50053', 'thanks sir', 29, '2018-06-12', ''),
(142, ' 08/50053', 'GOD', 29, '2018-06-12', ''),
(143, ' 08/50053', 'hhhh', 29, '2018-06-12 11:57 AM', ''),
(144, ' 08/50053', 'hjhj', 29, '2018-06-12 11:58 AM', ''),
(145, ' 08/50053', 'uybgyu', 29, '08:00 PM', ''),
(146, ' 08/50053', 'HBKJH', 29, '2018-06-12 20:00 PM', ''),
(147, ' 08/50053', 'CC', 29, '2018-06-12 20:01 PM', ''),
(148, ' 08/50053', 'KHBK', 29, '2018-06-12 08:01 PM', ''),
(149, ' 08/50053', 'HJBIK', 29, '2018-06-12 08:02 PM', ''),
(150, ' 08/50053', 'oijnol', 29, '2018-06-12 08:49pm', ''),
(151, ' 08/50053', 'qqq', 29, '1970-01-01 01:00am', ''),
(152, ' 08/50053', 'hjj', 29, '2018-06-12 08:04:18pm', ''),
(153, ' 08/50053', 'qqqw', 29, '2018-06-12 08:05 PM', ''),
(154, ' 08/50053', 'qqwes', 29, '2018-06-12 08:01 PM', ''),
(155, ' 08/50053', 'cxxzz', 29, '06/12/2018 20:06:33', ''),
(156, ' 08/50053', 'qqqss', 29, '06/12/2018 08:06:57', ''),
(157, ' 08/50053', 'aaa', 29, '06/12/2018 08:07:33', ''),
(158, ' 08/50053', 'qq', 29, '12/06/2018 08:08:07', ''),
(159, ' 08/50053', 'xx', 29, '12/06/2018 08:08:35', ''),
(160, ' 08/50053', 'qq', 29, '12/06/2018 08:08:55pm', ''),
(161, ' 08/50053', 'qq', 29, '12/06/2018 08:08:55pm', ''),
(162, ' 08/50053', 'aa', 29, '12/06/2018 08:09:48 PM', ''),
(163, ' 08/50053', 'vv', 29, '12/06/2018 08:10:13 PM', ''),
(164, ' 08/50053', 'ggf', 29, '12/06/2018 08:14:00 PM', ''),
(165, ' 08/50053', 'ggf', 29, '12/06/2018 08:14:00 PM', ''),
(166, ' 08/50053', 'qssxd', 29, '12/06/2018 08:14:25 PM', ''),
(167, ' 08/50053', 'ww', 29, '12/06/2018 08:15:10 PM', ''),
(168, ' 08/50053', 'qqwass', 29, '12/06/2018 08:17:53 PM', ''),
(169, ' 08/50053', 'hjhj', 29, '12/06/2018 08:18:37 PM', ''),
(170, ' 08/50053', 'ww', 29, '12/06/2018 07:21:02 PM', ''),
(171, ' 08/50053', 'qssqs', 29, '12/06/2018 07:23:59 PM', ''),
(172, ' 08/50053', 'aass', 29, '12/06/2018 07:29:11 PM', ''),
(173, ' 08/50053', 'zxxxx', 29, '13/06/2018 12:00:41 AM', ''),
(174, ' 08/50053', 'hgvg', 29, '13/06/2018 12:06:49 AM', ''),
(175, ' 08/50053', 'q', 29, '12/06/2018 08:37:47 PM', ''),
(176, ' 08/50053', 'hjubvujh', 29, '12/06/2018 08:38:54 PM', ''),
(177, ' 08/50053', 'hgvgh', 29, '12/06/2018 08:40:18 PM', ''),
(178, ' 08/50053', 'kjbk', 29, '12/06/2018 07:40:52 PM', ''),
(179, ' 08/50053', 'kjbk', 29, '12/06/2018 07:40:52 PM', ''),
(180, ' 08/50053', 'iubhiuk', 29, '12/06/2018 07:41:19 PM', ''),
(181, ' 08/50053', 'qq', 29, '12/06/2018 07:41:41 PM', ''),
(182, ' 08/50053', 'qq', 29, '12/06/2018 07:42:17 PM', ''),
(183, ' 08/50053', 'jhbvjh', 29, '12/06/2018 7:43:49 PM', ''),
(184, ' 08/50053', 'qs', 29, '12/06/2018 7:44:00 PM', ''),
(185, ' 08/50053', 'ytyu', 29, '12/06/2018 7:45:29 PM', ''),
(186, ' 08/50053', 'qq', 29, '12/06/2018 7:46:01 PM', ''),
(187, ' 08/50053', 'qqq', 29, '12/06/2018 7:46:59 PM', ''),
(188, ' 08/50053', 'at last', 29, 'Tue, 12 Jun 2018, 11:48 am<br>', ''),
(189, ' 08/50053', 'hggh', 29, 'Tue, 12 Jun 2018, 11:50 am<br>', ''),
(190, ' 08/50053', 'jkbjk', 29, 'Tue, 12 Jun 2018, 11:51 am<br>', ''),
(191, ' 00217', 'seem', 47, '2018-06-12 12:42:00', 'admin'),
(196, ' 00217', 'u8yyg87', 47, 'Tue, 12 Jun 2018, 12:48 pm<br>', ''),
(197, ' 00217', '\r\njujiou', 47, 'Tue, 12 Jun 2018, 12:49 pm<br>', ''),
(198, ' 00217', 'ouhoui', 47, 'Tue, 12 Jun 2018, 12:49 pm<br>', ''),
(199, ' 00217', 'ouhoui', 47, 'Tue, 12 Jun 2018, 12:49 pm<br>', ''),
(200, '  08/50053', 'send', 29, 'Fri, 15 Jun 2018, 5:24 am<br>', 'admin'),
(201, ' GWSC/2300/David', 'how are you', 52, '2018-06-25 05:27:25', 'admin'),
(202, ' GWSC/2300/David', 'i am fine', 52, 'Mon, 25 Jun 2018, 1:27 pm<br>', ''),
(203, '  GWSC/2300/David', 'great!', 52, 'Mon, 25 Jun 2018, 1:28 pm<br>', 'admin'),
(204, ' GWSC/2300/David', 'i am fine', 52, 'Mon, 25 Jun 2018, 1:28 pm<br>', ''),
(205, ' GWSC/2300/David', 'i am fine', 52, 'Mon, 25 Jun 2018, 1:28 pm<br>', ''),
(206, ' GWSC/2300/David', 'sorry, is error.', 52, 'Mon, 25 Jun 2018, 1:29 pm<br>', ''),
(207, '  GWSC/2300/David', 'great!', 52, 'Mon, 25 Jun 2018, 1:29 pm<br>', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `matricno` varchar(255) NOT NULL,
  `MES` text NOT NULL,
  `LOGS` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `matricno`, `MES`, `LOGS`, `status`, `name`, `username`) VALUES
(5, '08/50053', 'frank Charly Boy trolls on President Buhari\'s son, Yusuf, for being a Lazy Nigerian Youth lailasnews 1 Charly Boy also added; On behalf of the exceptional, hard working, the ever gallant Nigeria youths I urge you mr President to please show some respect. #Ourmumu don do. It is clear dat the only reason old pple like u insist in remaining in power is dat you fear a life without oil money, you all are worthless you bring nothing to the table. The future of the youths can never belong to the old. See how you and your likes killed and destroyed education in this country because it means nothing to you, by d way hv u found ur missing certificate? When leaders are clueless, Incompetent, clueless, analogish, myopic, mongoparkish dey are also lazy, because dey inspire no one, dey motivate no one, dey kill ppleÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢s hopes an dreams, dey contribute nothing to the youths growth. The lazy youths na ur children crashing out on power bikes, shopping at Herolds in london with our oil money. Mr Presidento!!nigerian oil money has paid u for not adding value to our lives, you hv no visible thriving buisness dat provides employment for thousands of youths. What legacy would you and your likes say you bequeathed to the youths apart from ethnic distrust, suspicion, religious intolerance and corruption. Na you I dey ask. Three years ago, you told us dat you would create three million \'jobs yearly, but in three years, over 9 million Nigerians have lost their jobs. U told us dat u will stop medical tourisim but you and family enjoy the best medical attention abroad, while we die like rats here. So Oga Buhari u get the mind to call nigerian youths lazy and uneducated after ur generation stole and destroyed their future? Haba!!!!!! Charly Boy trolls on President Buhari\'s son, Yusuf, for being a Lazy Nigerian Youth lailasnews 1', '2018-05-16', 'read', '', ''),
(6, 'dph2016/1212', 'Dhm 121', '2018-05-23', 'read', 'Nubi  Oludayo', ''),
(7, 'dph2016/1212', 'dhm121', '2018-05-23', 'read', 'Nubi  Oludayo', ''),
(8, '08/50010', 'Good day sir, pls upload  a handout on CSC 101 \r\n\r\nThanks\r\n\r\n', '2018-06-08', 'unread', 'Bimbo lalola', 'james'),
(9, '08/50010', 'Good day sir, pls upload  a handout on CSC 101 \r\n\r\nThanks\r\n\r\n', '2018-06-08', 'read', 'Bimbo lalola', 'itafor'),
(10, '08/50010', 'Good day sir, pls upload  a handout on CSC 101 \r\n\r\nThanks\r\n\r\n', '2018-06-08', 'unread', 'Bimbo lalola', 'wale'),
(11, '08/50010', 'Good day sir, pls upload  a handout on CSC 101 \r\n\r\nThanks\r\n\r\n', '2018-06-08', 'unread', 'Bimbo lalola', 'depotter'),
(12, '08/50010', 'Good day sir, pls upload  a handout on CSC 101 \r\n\r\nThanks\r\n\r\n', '2018-06-08', 'unread', 'Bimbo lalola', 'maths'),
(13, '08/50010', 'Good day sir, pls upload  a handout on CSC 101 \r\n\r\nThanks\r\n\r\n', '2018-06-08', 'unread', 'Bimbo lalola', 'nwaka'),
(14, '08/50053', 'I need material in csc3321', '2018-06-10', 'unread', 'Victor  Ejomo', 'james'),
(15, '08/50053', 'I need material in csc3321', '2018-06-10', 'unread', 'Victor  Ejomo', 'admin'),
(16, '08/50053', 'I need material in csc3321', '2018-06-10', 'unread', 'Victor  Ejomo', 'wale'),
(17, '08/50053', 'I need material in csc3321', '2018-06-10', 'unread', 'Victor  Ejomo', 'depotter'),
(19, '08/50053', 'I need material in csc3321', '2018-06-10', 'unread', 'Victor  Ejomo', 'nwaka');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `name`, `level_id`) VALUES
(94, 'Mathematics', 65),
(95, 'English Language', 65),
(96, 'Basic science', 65),
(97, 'Social studies', 65),
(98, 'Computer studies', 65),
(99, 'Basic Technology', 65),
(100, 'French language', 65),
(101, 'Agricultural science', 65),
(102, 'Physical and Health Education', 65),
(103, 'Business studies', 65),
(104, 'Christian Religious Studies', 65),
(105, 'Cultural and Creative Arts', 65),
(106, 'Yoruba Langauge', 65),
(107, 'Home Economics', 65),
(108, 'Civic Education', 65),
(109, 'Mathematics', 68),
(110, 'English Language', 68),
(111, 'Basic science', 68),
(112, 'Social studies', 68),
(113, 'Computer studies', 68),
(114, 'Basic Technology', 68),
(115, 'French language', 68),
(116, 'Agricultural science', 68),
(117, 'Physical and Health Education', 68),
(118, 'Business studies', 68),
(119, 'Christian Religious Studies', 68),
(120, 'Cultural and Creative Arts', 68),
(121, 'Yoruba Langauge', 68),
(122, 'Home Economics', 68),
(123, 'Civic Education', 68),
(143, 'Mathematics', 77),
(144, 'English Language', 77),
(145, 'Civic Education', 77),
(146, 'Economics', 77),
(147, 'Account', 77),
(148, 'Yoruba Langauge', 77),
(149, 'Marketing', 77),
(150, 'further Mathematics', 77),
(151, 'Government', 77),
(152, 'Biology', 77),
(153, 'Computer studies', 77),
(154, 'Mathematics', 86),
(155, 'English Language', 86),
(156, 'Civic Education', 86),
(157, 'Economics', 86),
(158, 'Account', 86),
(159, 'Yoruba Langauge', 86),
(160, 'Marketing', 86),
(161, 'further Mathematics', 86),
(162, 'Government', 86),
(163, 'Biology', 86),
(164, 'Computer studies', 86),
(165, 'Mathematics', 94),
(166, 'English Language', 94),
(167, 'Civic Education', 94),
(168, 'Economics', 94),
(169, 'Account', 94),
(170, 'Yoruba Langauge', 94),
(171, 'Marketing', 94),
(172, 'further Mathematics', 94),
(173, 'Government', 94),
(174, 'Biology', 94),
(175, 'Computer studies', 94),
(176, 'Mathematics', 80),
(177, 'English Language', 80),
(178, 'Christian Religious Studies', 80),
(179, 'Literature in English', 80),
(180, 'Economics', 80),
(181, 'Marketing', 80),
(182, 'Yoruba Langauge', 80),
(183, 'Biology', 80),
(184, 'Geography', 80),
(185, 'Computer studies', 80),
(186, 'Civic Education', 80),
(187, 'Government', 80),
(188, 'Commerce', 80),
(189, 'Mathematics', 83),
(190, 'English Language', 83),
(191, 'Chemistry', 83),
(192, 'Physics', 83),
(193, 'Biology', 83),
(194, 'Computer studies', 83),
(195, 'Further Mathematics', 83),
(196, 'Geography', 83),
(197, 'Agricultural science', 83),
(198, 'Economics', 83),
(199, 'Yoruba Langauge', 83),
(200, 'Civic Education', 83),
(201, 'Marketing', 83),
(202, 'Technical Drawing', 83),
(205, 'Mathematics', 74),
(206, 'English Language', 74),
(207, 'Chemistry', 74),
(208, 'Physics', 74),
(209, 'Biology', 74),
(210, 'Computer studies', 74),
(211, 'Further Mathematics', 74),
(212, 'Geography', 74),
(213, 'Agricultural science', 74),
(214, 'Economics', 74),
(215, 'Yoruba Langauge', 74),
(216, 'Civic Education', 74),
(217, 'Marketing', 74),
(218, 'Technical Drawing', 74),
(219, 'Mathematics', 75),
(220, 'English Language', 75),
(221, 'Chemistry', 75),
(222, 'Physics', 75),
(223, 'Biology', 75),
(224, 'Computer studies', 75),
(225, 'Further Mathematics', 75),
(226, 'Geography', 75),
(227, 'Agricultural science', 75),
(228, 'Economics', 75),
(229, 'Yoruba Langauge', 75),
(230, 'Civic Education', 75),
(231, 'Marketing', 75),
(232, 'Technical Drawing', 75),
(233, 'Mathematics', 76),
(234, 'English Language', 76),
(235, 'Chemistry', 76),
(236, 'Physics', 76),
(237, 'Biology', 76),
(238, 'Computer studies', 76),
(239, 'Further Mathematics', 76),
(240, 'Geography', 76),
(241, 'Agricultural science', 76),
(242, 'Economics', 76),
(243, 'Yoruba Langauge', 76),
(244, 'Civic Education', 76),
(245, 'Marketing', 76),
(246, 'Technical Drawing', 76),
(256, 'Mathematics', 78),
(257, 'English Language', 78),
(258, 'Civic Education', 78),
(259, 'Economics', 78),
(260, 'Account', 78),
(261, 'Yoruba Langauge', 78),
(262, 'Marketing', 78),
(263, 'further Mathematics', 78),
(264, 'Government', 78),
(265, 'Biology', 78),
(266, 'Computer studies', 78),
(267, 'Mathematics', 79),
(268, 'English Language', 79),
(269, 'Civic Education', 79),
(270, 'Economics', 79),
(271, 'Account', 79),
(272, 'Yoruba Langauge', 79),
(273, 'Marketing', 79),
(274, 'further Mathematics', 79),
(275, 'Government', 79),
(276, 'Biology', 79),
(277, 'Computer studies', 79),
(278, 'Mathematics', 84),
(279, 'English Language', 84),
(280, 'Chemistry', 84),
(281, 'Physics', 84),
(282, 'Biology', 84),
(283, 'Computer studies', 84),
(284, 'Further Mathematics', 84),
(285, 'Geography', 84),
(286, 'Agricultural science', 84),
(287, 'Economics', 84),
(288, 'Yoruba Langauge', 84),
(289, 'Civic Education', 84),
(290, 'Marketing', 84),
(291, 'Technical Drawing', 84),
(292, 'Mathematics', 85),
(293, 'English Language', 85),
(294, 'Chemistry', 85),
(295, 'Physics', 85),
(296, 'Biology', 85),
(297, 'Computer studies', 85),
(298, 'Further Mathematics', 85),
(299, 'Geography', 85),
(300, 'Agricultural science', 85),
(301, 'Economics', 85),
(302, 'Yoruba Langauge', 85),
(303, 'Civic Education', 85),
(304, 'Marketing', 85),
(305, 'Technical Drawing', 85),
(306, 'Mathematics', 81),
(307, 'English Language', 81),
(308, 'Christian Religious Studies', 81),
(309, 'Literature in English', 81),
(310, 'Economics', 81),
(311, 'Marketing', 81),
(312, 'Yoruba Langauge', 81),
(313, 'Biology', 81),
(314, 'Geography', 81),
(315, 'Computer studies', 81),
(316, 'Civic Education', 81),
(317, 'Government', 81),
(318, 'Commerce', 81),
(319, 'Mathematics', 82),
(320, 'English Language', 82),
(321, 'Christian Religious Studies', 82),
(322, 'Literature in English', 82),
(323, 'Economics', 82),
(324, 'Marketing', 82),
(325, 'Yoruba Langauge', 82),
(326, 'Biology', 82),
(327, 'Geography', 82),
(328, 'Computer studies', 82),
(329, 'Civic Education', 82),
(330, 'Government', 82),
(331, 'Commerce', 82),
(332, 'Mathematics', 87),
(333, 'English Language', 87),
(334, 'Civic Education', 87),
(335, 'Economics', 87),
(336, 'Account', 87),
(337, 'Yoruba Langauge', 87),
(338, 'Marketing', 87),
(339, 'further Mathematics', 87),
(340, 'Government', 87),
(341, 'Biology', 87),
(342, 'Computer studies', 87),
(343, 'Mathematics', 88),
(344, 'English Language', 88),
(345, 'Civic Education', 88),
(346, 'Economics', 88),
(347, 'Account', 88),
(348, 'Yoruba Langauge', 88),
(349, 'Marketing', 88),
(350, 'further Mathematics', 88),
(351, 'Government', 88),
(352, 'Biology', 88),
(353, 'Computer studies', 88),
(354, 'Mathematics', 91),
(355, 'English Language', 91),
(356, 'Christian Religious Studies', 91),
(357, 'Literature in English', 91),
(358, 'Economics', 91),
(359, 'Marketing', 91),
(360, 'Yoruba Langauge', 91),
(361, 'Biology', 91),
(362, 'Geography', 91),
(363, 'Computer studies', 91),
(364, 'Civic Education', 91),
(365, 'Government', 91),
(366, 'Commerce', 91),
(367, 'Mathematics', 92),
(368, 'English Language', 92),
(369, 'Christian Religious Studies', 92),
(370, 'Literature in English', 92),
(371, 'Economics', 92),
(372, 'Marketing', 92),
(373, 'Yoruba Langauge', 92),
(374, 'Biology', 92),
(375, 'Geography', 92),
(376, 'Computer studies', 92),
(377, 'Civic Education', 92),
(378, 'Government', 92),
(379, 'Commerce', 92),
(380, 'Mathematics', 93),
(381, 'English Language', 93),
(382, 'Christian Religious Studies', 93),
(383, 'Literature in English', 93),
(384, 'Economics', 93),
(385, 'Marketing', 93),
(386, 'Yoruba Langauge', 93),
(387, 'Biology', 93),
(388, 'Geography', 93),
(389, 'Computer studies', 93),
(390, 'Civic Education', 93),
(391, 'Government', 93),
(392, 'Commerce', 93),
(393, 'Mathematics', 89),
(394, 'English Language', 89),
(395, 'Chemistry', 89),
(396, 'Physics', 89),
(397, 'Biology', 89),
(398, 'Computer studies', 89),
(399, 'Further Mathematics', 89),
(400, 'Geography', 89),
(401, 'Agricultural science', 89),
(402, 'Economics', 89),
(403, 'Yoruba Langauge', 89),
(404, 'Civic Education', 89),
(405, 'Marketing', 89),
(406, 'Technical Drawing', 89),
(407, 'Mathematics', 96),
(408, 'English Language', 96),
(409, 'Christian Religious Studies', 96),
(410, 'Literature in English', 96),
(411, 'Economics', 96),
(412, 'Marketing', 96),
(413, 'Yoruba Langauge', 96),
(414, 'Biology', 96),
(415, 'Geography', 96),
(416, 'Computer studies', 96),
(417, 'Civic Education', 96),
(418, 'Government', 96),
(419, 'Commerce', 96),
(420, 'Mathematics', 90),
(421, 'English Language', 90),
(422, 'Chemistry', 90),
(423, 'Physics', 90),
(424, 'Biology', 90),
(425, 'Computer studies', 90),
(426, 'Further Mathematics', 90),
(427, 'Geography', 90),
(428, 'Agricultural science', 90),
(429, 'Economics', 90),
(430, 'Yoruba Langauge', 90),
(431, 'Civic Education', 90),
(432, 'Marketing', 90),
(433, 'Technical Drawing', 90),
(434, 'Mathematics', 66),
(435, 'English Language', 66),
(436, 'Basic science', 66),
(437, 'Social studies', 66),
(438, 'Computer studies', 66),
(439, 'Basic Technology', 66),
(440, 'French language', 66),
(441, 'Agricultural science', 66),
(442, 'Physical and Health Education', 66),
(443, 'Business studies', 66),
(444, 'Christian Religious Studies', 66),
(445, 'Cultural and Creative Arts', 66),
(446, 'Yoruba Langauge', 66),
(447, 'Home Economics', 66),
(448, 'Civic Education', 66),
(449, 'Mathematics', 67),
(450, 'English Language', 67),
(451, 'Basic science', 67),
(452, 'Social studies', 67),
(453, 'Computer studies', 67),
(454, 'Basic Technology', 67),
(455, 'French language', 67),
(456, 'Agricultural science', 67),
(457, 'Physical and Health Education', 67),
(458, 'Business studies', 67),
(459, 'Christian Religious Studies', 67),
(460, 'Cultural and Creative Arts', 67),
(461, 'Yoruba Langauge', 67),
(462, 'Home Economics', 67),
(463, 'Civic Education', 67),
(464, 'Mathematics', 69),
(465, 'English Language', 69),
(466, 'Basic science', 69),
(467, 'Social studies', 69),
(468, 'Computer studies', 69),
(469, 'Basic Technology', 69),
(470, 'French language', 69),
(471, 'Agricultural science', 69),
(472, 'Physical and Health Education', 69),
(473, 'Business studies', 69),
(474, 'Christian Religious Studies', 69),
(475, 'Cultural and Creative Arts', 69),
(476, 'Yoruba Langauge', 69),
(477, 'Home Economics', 69),
(478, 'Civic Education', 69),
(479, 'Mathematics', 70),
(480, 'English Language', 70),
(481, 'Basic science', 70),
(482, 'Social studies', 70),
(483, 'Computer studies', 70),
(484, 'Basic Technology', 70),
(485, 'French language', 70),
(486, 'Agricultural science', 70),
(487, 'Physical and Health Education', 70),
(488, 'Business studies', 70),
(489, 'Christian Religious Studies', 70),
(490, 'Cultural and Creative Arts', 70),
(491, 'Yoruba Langauge', 70),
(492, 'Home Economics', 70),
(493, 'Civic Education', 70),
(494, 'Mathematics', 71),
(495, 'English Language', 71),
(496, 'Basic science', 71),
(497, 'Social studies', 71),
(498, 'Computer studies', 71),
(499, 'Basic Technology', 71),
(500, 'French language', 71),
(501, 'Agricultural science', 71),
(502, 'Physical and Health Education', 71),
(503, 'Business studies', 71),
(504, 'Christian Religious Studies', 71),
(505, 'Cultural and Creative Arts', 71),
(506, 'Yoruba Langauge', 71),
(507, 'Home Economics', 71),
(508, 'Civic Education', 71),
(509, 'Mathematics', 72),
(510, 'English Language', 72),
(511, 'Basic science', 72),
(512, 'Social studies', 72),
(513, 'Computer studies', 72),
(514, 'Basic Technology', 72),
(515, 'French language', 72),
(517, 'Agricultural science', 72),
(518, 'Physical and Health Education', 72),
(519, 'Business studies', 72),
(520, 'Christian Religious Studies', 72),
(521, 'Cultural and Creative Arts', 72),
(522, 'Yoruba Langauge', 72),
(523, 'Home Economics', 72),
(524, 'Civic Education', 72),
(525, 'Mathematics', 73),
(526, 'English Language', 73),
(527, 'Basic science', 73),
(528, 'Social studies', 73),
(529, 'Computer studies', 73),
(530, 'Basic Technology', 73),
(531, 'French language', 73),
(532, 'Agricultural science', 73),
(533, 'Physical and Health Education', 73),
(534, 'Business studies', 73),
(535, 'Christian Religious Studies', 73),
(536, 'Cultural and Creative Arts', 73),
(537, 'Yoruba Langauge', 73),
(538, 'Home Economics', 73),
(539, 'Civic Education', 73);

-- --------------------------------------------------------

--
-- Table structure for table `sss_arts_subj`
--

CREATE TABLE `sss_arts_subj` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss_arts_subj`
--

INSERT INTO `sss_arts_subj` (`id`, `name`) VALUES
(1, 'Mathematics'),
(2, 'English Language'),
(3, 'Civic Education'),
(5, 'Biology');

-- --------------------------------------------------------

--
-- Table structure for table `sss_comm_subj`
--

CREATE TABLE `sss_comm_subj` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss_comm_subj`
--

INSERT INTO `sss_comm_subj` (`id`, `name`) VALUES
(1, 'Mathematics'),
(2, 'English Language'),
(3, 'Economics'),
(4, 'civic');

-- --------------------------------------------------------

--
-- Table structure for table `sss_sci_subj`
--

CREATE TABLE `sss_sci_subj` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss_sci_subj`
--

INSERT INTO `sss_sci_subj` (`id`, `name`) VALUES
(1, 'Mathematics'),
(2, 'English Language'),
(3, 'Chemistry'),
(4, 'Physics'),
(6, 'Computer Science'),
(7, 'Further Mathematics '),
(8, 'Geography'),
(9, 'Agricultural science'),
(10, 'Economics'),
(11, 'Yoruba Langauge');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `name`) VALUES
(1, 'Abia State'),
(2, 'Adamawa State'),
(3, 'Akwa Ibom State'),
(4, 'Anambra State'),
(5, 'Bauchi State'),
(6, 'Bayelsa State'),
(7, 'Benue State'),
(8, 'Borno State'),
(9, 'Cross River State'),
(10, 'Delta State'),
(11, 'Ebonyi State'),
(12, 'Edo State'),
(13, 'Ekiti State'),
(14, 'Enugu State'),
(15, 'FCT'),
(16, 'Gombe State'),
(17, 'Imo State'),
(18, 'Jigawa State'),
(19, 'Kaduna State'),
(20, 'Kano State'),
(21, 'Katsina State'),
(22, 'Kebbi State'),
(23, 'Kogi State'),
(24, 'Kwara State'),
(25, 'Lagos State'),
(26, 'Nasarawa State'),
(27, 'Niger State'),
(28, 'Ogun State'),
(29, 'Ondo State'),
(30, 'Osun State'),
(31, 'Oyo State'),
(32, 'Plateau State'),
(33, 'Rivers State'),
(34, 'Sokoto State'),
(35, 'Taraba State'),
(36, 'Yobe State'),
(37, 'Zamfara State');

-- --------------------------------------------------------

--
-- Table structure for table `studentquestion`
--

CREATE TABLE `studentquestion` (
  `stdid` bigint(20) NOT NULL DEFAULT '0',
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `qnid` int(11) NOT NULL DEFAULT '0',
  `answered` enum('answered','unanswered','review') DEFAULT NULL,
  `stdanswer` enum('optiona','optionb','optionc','optiond') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentquestion`
--

INSERT INTO `studentquestion` (`stdid`, `testid`, `qnid`, `answered`, `stdanswer`) VALUES
(2, 1, 1, 'unanswered', NULL),
(2, 1, 2, 'unanswered', NULL),
(2, 1, 3, 'unanswered', NULL),
(2, 1, 4, 'unanswered', NULL),
(2, 2, 1, 'unanswered', NULL),
(2, 2, 2, 'unanswered', NULL),
(2, 2, 3, 'unanswered', NULL),
(2, 2, 4, 'unanswered', NULL),
(2, 2, 5, 'unanswered', NULL),
(2, 3, 1, 'unanswered', NULL),
(2, 3, 2, 'unanswered', NULL),
(2, 4, 1, 'unanswered', NULL),
(2, 4, 2, 'unanswered', NULL),
(2, 4, 3, 'unanswered', NULL),
(2, 5, 1, 'unanswered', NULL),
(2, 5, 2, 'unanswered', NULL),
(2, 6, 1, 'unanswered', NULL),
(2, 7, 1, 'answered', 'optiond'),
(2, 7, 2, 'answered', 'optionb'),
(2, 7, 3, 'answered', 'optiond'),
(2, 8, 1, 'unanswered', NULL),
(2, 8, 2, 'unanswered', NULL),
(2, 8, 3, 'unanswered', NULL),
(2, 8, 4, 'unanswered', NULL),
(2, 9, 1, 'answered', 'optionb'),
(2, 9, 2, 'answered', 'optionc'),
(2, 10, 1, 'unanswered', NULL),
(2, 10, 2, 'unanswered', NULL),
(2, 11, 1, 'unanswered', NULL),
(2, 11, 2, 'unanswered', NULL),
(2, 12, 1, 'answered', 'optionc'),
(2, 12, 2, 'answered', 'optionb'),
(2, 12, 3, 'answered', 'optionc'),
(2, 12, 4, 'answered', 'optionc'),
(4, 1, 1, 'unanswered', NULL),
(4, 1, 2, 'unanswered', NULL),
(4, 1, 3, 'unanswered', NULL),
(4, 1, 4, 'unanswered', NULL),
(4, 2, 1, 'unanswered', NULL),
(4, 2, 2, 'unanswered', NULL),
(4, 2, 3, 'unanswered', NULL),
(4, 2, 4, 'unanswered', NULL),
(4, 2, 5, 'unanswered', NULL),
(4, 3, 1, 'unanswered', NULL),
(4, 3, 2, 'unanswered', NULL),
(5, 1, 1, 'unanswered', NULL),
(5, 1, 2, 'unanswered', NULL),
(5, 1, 3, 'unanswered', NULL),
(5, 1, 4, 'unanswered', NULL),
(5, 2, 1, 'unanswered', NULL),
(5, 2, 2, 'unanswered', NULL),
(5, 2, 3, 'unanswered', NULL),
(5, 2, 4, 'unanswered', NULL),
(5, 2, 5, 'unanswered', NULL),
(5, 3, 1, 'unanswered', NULL),
(5, 3, 2, 'unanswered', NULL),
(5, 4, 1, 'unanswered', NULL),
(5, 4, 2, 'unanswered', NULL),
(5, 4, 3, 'unanswered', NULL),
(5, 5, 1, 'unanswered', NULL),
(5, 5, 2, 'unanswered', NULL),
(5, 6, 1, 'unanswered', NULL),
(5, 7, 1, 'unanswered', NULL),
(5, 7, 2, 'unanswered', NULL),
(5, 7, 3, 'unanswered', NULL),
(5, 8, 1, 'answered', 'optiona'),
(5, 8, 2, 'answered', 'optionc'),
(5, 8, 3, 'answered', 'optiond'),
(5, 8, 4, 'answered', 'optiona'),
(6, 11, 1, 'answered', 'optiona'),
(6, 11, 2, 'answered', 'optiona'),
(6, 12, 1, 'answered', 'optionc'),
(6, 12, 2, 'answered', 'optionb'),
(6, 12, 3, 'answered', 'optionc'),
(6, 12, 4, 'answered', 'optionc'),
(8, 1, 1, 'answered', 'optionb'),
(8, 1, 2, 'answered', 'optiond'),
(8, 1, 3, 'answered', 'optionc'),
(8, 1, 4, 'answered', 'optionc'),
(8, 2, 1, 'answered', 'optiond'),
(8, 2, 2, 'answered', 'optionc'),
(8, 2, 3, 'answered', 'optiona'),
(8, 2, 4, 'answered', 'optionb'),
(8, 2, 5, 'answered', 'optionc'),
(8, 3, 1, 'answered', 'optionc'),
(8, 3, 2, 'answered', 'optiond'),
(8, 5, 1, 'answered', 'optionb'),
(8, 5, 2, 'answered', 'optionb'),
(8, 8, 1, 'answered', 'optiona'),
(8, 8, 2, 'answered', 'optionc'),
(8, 8, 3, 'answered', 'optiond'),
(8, 8, 4, 'answered', 'optiona'),
(8, 10, 1, 'answered', 'optionb'),
(8, 10, 2, 'answered', 'optionc'),
(8, 12, 1, 'answered', 'optionb'),
(8, 12, 2, 'answered', 'optionb'),
(8, 12, 3, 'answered', 'optionc'),
(8, 12, 4, 'answered', 'optionc'),
(8, 13, 1, 'review', ''),
(8, 13, 2, 'answered', 'optiona'),
(8, 13, 3, 'answered', 'optionc'),
(8, 13, 4, 'answered', 'optiona'),
(8, 13, 5, 'answered', 'optionb'),
(8, 13, 6, 'unanswered', NULL),
(8, 13, 7, 'unanswered', NULL),
(8, 13, 8, 'unanswered', NULL),
(10, 8, 1, 'answered', 'optiona'),
(10, 8, 2, 'answered', 'optiona'),
(10, 8, 3, 'answered', 'optiond'),
(10, 8, 4, 'answered', 'optiona'),
(10, 8, 5, 'answered', 'optiond'),
(12, 8, 1, 'answered', 'optiona'),
(12, 8, 2, 'answered', 'optionb'),
(12, 8, 3, 'answered', 'optiond'),
(12, 8, 4, 'unanswered', NULL),
(12, 8, 5, 'unanswered', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentregister`
--

CREATE TABLE `studentregister` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `ca` varchar(255) NOT NULL,
  `ftbf` varchar(255) NOT NULL,
  `stbf` varchar(255) NOT NULL,
  `regdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentregister`
--

INSERT INTO `studentregister` (`id`, `fullname`, `regno`, `year`, `class`, `dept`, `term`, `subject`, `exam`, `ca`, `ftbf`, `stbf`, `regdate`) VALUES
(1123, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '22', '11', '00', '00', '2018-11-14 06:15:36pm'),
(1124, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '32', '12', '00', '00', '2018-11-14 06:15:36pm'),
(1125, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '4', '3', '2', '7', '2018-11-14 06:15:36pm'),
(1126, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1127, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1128, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1129, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1130, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1131, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1132, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1133, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1134, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1135, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '3', '5', '5', '9', '2018-11-14 06:15:36pm'),
(1136, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1137, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1138, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1139, 'Adeyemi   o  Oreoluwa', 'bs/js/002', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1140, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '44', '33', '00', '00', '2018-11-14 06:15:36pm'),
(1141, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '43', '12', '00', '00', '2018-11-14 06:15:36pm'),
(1142, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '23', '21', '44', '21', '2018-11-14 06:15:36pm'),
(1143, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1144, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1145, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1146, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1147, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1148, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1149, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1150, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1151, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1152, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '67', '12', '54', '12', '2018-11-14 06:15:36pm'),
(1153, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1154, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1155, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1156, 'Daniel  G  Abe', 'bs/js/003', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1157, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '66', '55', '00', '00', '2018-11-14 06:15:36pm'),
(1158, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '31', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1159, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '45', '21', '32', '12', '2018-11-14 06:15:36pm'),
(1160, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1161, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1162, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1163, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1164, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1165, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1166, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1167, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1168, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1169, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '43', '21', '5', '21', '2018-11-14 06:15:36pm'),
(1170, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1171, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1172, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1173, 'Edo  A  Abigail', 'bs/js/004', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1174, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '88', '77', '00', '00', '2018-11-14 06:15:36pm'),
(1175, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '21', '23', '00', '00', '2018-11-14 06:15:36pm'),
(1176, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '32', '21', '12', '32', '2018-11-14 06:15:36pm'),
(1177, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1178, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1179, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1180, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1181, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1182, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1183, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1184, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1185, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1186, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '4', '21', '32', '61', '2018-11-14 06:15:36pm'),
(1187, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1188, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1189, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1190, 'Fashawe  O  Opemipo', 'bs/js/005', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1191, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '34', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1192, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '45', '34', '00', '00', '2018-11-14 06:15:36pm'),
(1193, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1194, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1195, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1196, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1197, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1198, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1199, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1200, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1201, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1202, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1203, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1204, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1205, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1206, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1207, 'Labinjo  S  seyifunmi', 'bs/js/006', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1208, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '65', '12', '00', '00', '2018-11-14 06:15:36pm'),
(1209, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '43', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1210, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1211, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1212, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1213, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1214, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1215, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1216, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1217, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1218, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1219, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1220, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1221, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1222, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1223, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1224, 'Mgbekwere  C  Chukwuemeka', 'bs/js/007', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1225, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '43', '23', '00', '00', '2018-11-14 06:15:36pm'),
(1226, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '12', '43', '00', '00', '2018-11-14 06:15:36pm'),
(1227, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1228, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1229, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1230, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1231, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1232, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1233, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1234, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1235, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1236, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1237, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1238, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1239, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1240, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1241, 'Moses  I  Ifeoluwa', 'bs/js/008', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1242, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '33', '21', '00', '00', '2018-11-14 06:15:36pm'),
(1243, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '32', '21', '00', '00', '2018-11-14 06:15:36pm'),
(1244, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1245, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1246, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1247, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1248, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1249, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1250, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1251, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1252, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1253, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1254, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1255, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1256, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1257, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1258, 'Mustapha   A  Abdulhameed', 'bs/js/009', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1259, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '34', '22', '00', '00', '2018-11-14 06:15:36pm'),
(1260, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '12', '33', '00', '00', '2018-11-14 06:15:36pm'),
(1261, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1262, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1263, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1264, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1265, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1266, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1267, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1268, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1269, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1270, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1271, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1272, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1273, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1274, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1275, 'Mutayero  R  Rokeebat', 'bs/js/010', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1276, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '45', '25', '00', '00', '2018-11-14 06:15:36pm'),
(1277, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '43', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1278, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1279, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1280, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1281, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1282, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1283, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1284, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1285, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1286, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1287, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1288, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1289, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1290, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1291, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1292, 'Ogundiyan  O  Moyosore', 'bs/js/011', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1293, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '32', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1294, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '33', '22', '00', '00', '2018-11-14 06:15:36pm'),
(1295, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1296, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1297, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1298, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1299, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1300, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1301, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1302, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1303, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1304, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1305, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1306, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1307, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1308, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1309, 'Ogunsakin  P  Philip', 'bs/js/012', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1310, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '55', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1311, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '33', '12', '00', '00', '2018-11-14 06:15:36pm'),
(1312, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1313, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1314, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1315, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1316, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1317, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1318, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1319, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1320, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1321, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1322, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1323, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1324, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1325, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1326, 'Onipede  D  Damilola', 'bs/js/013', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1327, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '11', '42', '00', '00', '2018-11-14 06:15:36pm'),
(1328, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '21', '23', '00', '00', '2018-11-14 06:15:36pm'),
(1329, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1330, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1331, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1332, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1333, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1334, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1335, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1336, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1337, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1338, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1339, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1340, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1341, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1342, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1343, 'Osayimwen  O  Osafunwengbe', 'bs/js/014', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1344, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '56', '27', '00', '00', '2018-11-14 06:15:36pm'),
(1345, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '43', '43', '00', '00', '2018-11-14 06:15:36pm'),
(1346, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1347, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1348, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1349, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1350, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1351, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1352, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1353, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1354, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1355, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1356, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1357, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1358, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1359, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1360, 'Owuoma  C  Chidinma', 'bs/js/015', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1361, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '22', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1362, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '33', '32', '00', '00', '2018-11-14 06:15:36pm'),
(1363, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1364, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1365, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1366, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1367, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1368, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1369, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1370, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1371, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1372, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1373, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1374, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1375, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1376, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1377, 'Salaudeen  M  Muibat', 'bs/js/016', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1378, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '56', '11', '00', '00', '2018-11-14 06:15:36pm'),
(1379, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '33', '12', '00', '00', '2018-11-14 06:15:36pm'),
(1380, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1381, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1382, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1383, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1384, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1385, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1386, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1387, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1388, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1389, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1390, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1391, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1392, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1393, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1394, 'Talabi  O  Oluwakemi', 'bs/js/017', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1395, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Mathematics', '3', '2', '00', '00', '2018-11-14 06:15:36pm'),
(1396, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'English Language', '33', '21', '00', '00', '2018-11-14 06:15:36pm'),
(1397, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1398, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1399, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1400, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1401, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1402, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1403, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1404, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1405, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1406, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1407, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1408, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1409, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1410, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1411, 'Umoh  G  Goodness', 'bs/js/018', '2018', 'JSS1', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1412, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '6', '8', '2', '8', '2018-11-14 06:15:36pm'),
(1413, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '4', '12', '2', '11', '2018-11-14 06:15:36pm'),
(1414, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1415, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1416, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1417, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1418, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1419, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1420, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1421, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1422, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1423, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1424, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '4', '21', '3', '6', '2018-11-14 06:15:36pm'),
(1425, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1426, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1427, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1428, 'Adeniran  p  Precious', 'bs/js/019', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1429, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '44', '7', '66', '7', '2018-11-14 06:15:36pm'),
(1430, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '55', '32', '2', '22', '2018-11-14 06:15:36pm'),
(1431, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1432, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1433, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1434, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1435, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1436, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1437, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1438, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1439, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1440, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1441, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '1', '43', '2', '3', '2018-11-14 06:15:36pm'),
(1442, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1443, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1444, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1445, 'Adeyemi  W  Wonderful', 'bs/js/020', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1446, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '22', '55', '7', '55', '2018-11-14 06:15:36pm'),
(1447, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '22', '43', '11', '33', '2018-11-14 06:15:36pm'),
(1448, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1449, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1450, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1451, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1452, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1453, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1454, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1455, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1456, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1457, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1458, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '33', '32', '11', '5', '2018-11-14 06:15:36pm'),
(1459, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1460, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1461, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1462, 'Agbonaruoho   M  Magdalene', 'bs/js/021', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1463, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '55', '22', '33', '22', '2018-11-14 06:15:36pm'),
(1464, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '11', '32', '32', '5', '2018-11-14 06:15:36pm'),
(1465, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm');
INSERT INTO `studentregister` (`id`, `fullname`, `regno`, `year`, `class`, `dept`, `term`, `subject`, `exam`, `ca`, `ftbf`, `stbf`, `regdate`) VALUES
(1466, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1467, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1468, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1469, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1470, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1471, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1472, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1473, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1474, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1475, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1476, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1477, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1478, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1479, 'Akamo  B  Basit', 'bs/js/022', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1480, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '3', '4', '2', '4', '2018-11-14 06:15:36pm'),
(1481, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '44', '12', '6', '3', '2018-11-14 06:15:36pm'),
(1482, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1483, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1484, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1485, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1486, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1487, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1488, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1489, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1490, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1491, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1492, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1493, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1494, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1495, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1496, 'Akanbi  D  Dorcas', 'bs/js/023', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1497, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '32', '43', '6', '4', '2018-11-14 06:15:36pm'),
(1498, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '44', '21', '55', '66', '2018-11-14 06:15:36pm'),
(1499, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1500, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1501, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1502, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1503, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1504, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1505, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1506, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1507, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1508, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1509, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1510, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1511, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1512, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1513, 'Akinboro  T  Teniola', 'bs/js/024', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1514, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '2', '1', '6', '3', '2018-11-14 06:15:36pm'),
(1515, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '22', '11', '33', '2018-11-14 06:15:36pm'),
(1516, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1517, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1518, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1519, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1520, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1521, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1522, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1523, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1524, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1525, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1526, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1527, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1528, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1529, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1530, 'Akinola  T  Temidayo', 'bs/js/025', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1531, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '212', '65', '66', '32', '2018-11-14 06:15:36pm'),
(1532, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '55', '33', '77', '22', '2018-11-14 06:15:36pm'),
(1533, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1534, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1535, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1536, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1537, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1538, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1539, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1540, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1541, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1542, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1543, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1544, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1545, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1546, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1547, 'Boluwade  F  Fikayo', 'bs/js/026', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1548, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '2', '21', '4', '1', '2018-11-14 06:15:36pm'),
(1549, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '44', '33', '11', '22', '2018-11-14 06:15:36pm'),
(1550, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1551, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1552, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1553, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1554, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1555, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1556, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1557, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1558, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1559, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1560, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1561, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1562, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1563, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1564, 'Francis  D  Daniel', 'bs/js/027', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1565, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '12', '5', '66', '3', '2018-11-14 06:15:36pm'),
(1566, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '66', '22', '33', '2018-11-14 06:15:36pm'),
(1567, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1568, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1569, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1570, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1571, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1572, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1573, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1574, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1575, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1576, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1577, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1578, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1579, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1580, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1581, 'Muftau  Q  Quadri', 'bs/js/028', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1582, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '43', '12', '21', '2', '2018-11-14 06:15:36pm'),
(1583, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '11', '44', '55', '2018-11-14 06:15:36pm'),
(1584, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1585, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1586, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1587, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1588, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1589, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1590, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1591, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1592, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1593, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1594, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1595, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1596, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1597, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1598, 'Muhammed  A  Arafat', 'bs/js/029', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1599, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '3', '2', '4', '8', '2018-11-14 06:15:36pm'),
(1600, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '2', '11', '33', '4', '2018-11-14 06:15:36pm'),
(1601, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1602, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1603, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1604, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1605, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1606, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1607, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1608, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1609, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1610, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1611, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1612, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1613, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1614, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1615, 'Mustapha   L  Latifat', 'bs/js/030', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1616, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '54', '21', '66', '44', '2018-11-14 06:15:36pm'),
(1617, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '11', '55', '77', '2018-11-14 06:15:36pm'),
(1618, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1619, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1620, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1621, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1622, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1623, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1624, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1625, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1626, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1627, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1628, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1629, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1630, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1631, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1632, 'Ojo  Abdul  Quowiyu', 'bs/js/031', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1633, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '6', '43', '44', '22', '2018-11-14 06:15:36pm'),
(1634, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '44', '12', '66', '44', '2018-11-14 06:15:36pm'),
(1635, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1636, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1637, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1638, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1639, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1640, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1641, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1642, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1643, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1644, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1645, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1646, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1647, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1648, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1649, 'Okediya  T  Timileyin', 'bs/js/032', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1650, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '5', '1', '6', '2', '2018-11-14 06:15:36pm'),
(1651, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '22', '44', '22', '2018-11-14 06:15:36pm'),
(1652, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1653, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1654, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1655, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1656, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1657, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1658, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1659, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1660, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1661, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1662, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1663, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1664, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1665, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1666, 'Olanrewaju  m  Maxwell', 'bs/js/033', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1667, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '3', '3', '2', '12', '2018-11-14 06:15:36pm'),
(1668, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '22', '11', '33', '55', '2018-11-14 06:15:36pm'),
(1669, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1670, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1671, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1672, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1673, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1674, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1675, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1676, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1677, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1678, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1679, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1680, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1681, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1682, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1683, 'Olatokun  O  Opeoluwa', 'bs/js/034', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1684, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '2', '7', '3', '1', '2018-11-14 06:15:36pm'),
(1685, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '22', '12', '55', '2018-11-14 06:15:36pm'),
(1686, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1687, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1688, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1689, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1690, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1691, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1692, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1693, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1694, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1695, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1696, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1697, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1698, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1699, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1700, 'Olatunji  B  Bolaji', 'bs/js/035', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1701, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '11', '22', '44', '55', '2018-11-14 06:15:36pm'),
(1702, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '55', '33', '22', '5', '2018-11-14 06:15:36pm'),
(1703, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1704, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1705, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1706, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1707, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1708, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1709, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1710, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1711, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1712, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1713, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1714, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1715, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1716, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1717, 'Onipede  D  David', 'bs/js/036', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1718, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '33', '12', '22', '33', '2018-11-14 06:15:36pm'),
(1719, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '11', '55', '33', '2018-11-14 06:15:36pm'),
(1720, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1721, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1722, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1723, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1724, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1725, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1726, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1727, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1728, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1729, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1730, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1731, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1732, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1733, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1734, 'Oyelola  F  Feyisara', 'bs/js/037', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1735, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Mathematics', '56', '4', '7', '5', '2018-11-14 06:15:36pm'),
(1736, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'English Language', '33', '11', '55', '33', '2018-11-14 06:15:36pm'),
(1737, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1738, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1739, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1740, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1741, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1742, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1743, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1744, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1745, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1746, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1747, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1748, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1749, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1750, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1751, 'Popoola  D  Daniel', 'bs/js/038', '2018', 'JSS2', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1752, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1753, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1754, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1755, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1756, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1757, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1758, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1759, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1760, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1761, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1762, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1763, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1764, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1765, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1766, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1767, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1768, 'Abiola  O  Oyinlola', 'bs/js/039', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1769, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1770, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1771, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1772, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1773, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1774, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1775, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1776, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1777, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1778, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1779, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1780, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1781, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1782, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1783, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1784, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1785, 'Aimuan  G  Glory', 'bs/js/040', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1786, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1787, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1788, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1789, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1790, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1791, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1792, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1793, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1794, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1795, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1796, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1797, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1798, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1799, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1800, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1801, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1802, 'Aluko  m  Morinmolaoluwa', 'bs/js/041', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1803, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1804, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1805, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1806, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1807, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1808, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1809, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1810, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1811, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1812, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm');
INSERT INTO `studentregister` (`id`, `fullname`, `regno`, `year`, `class`, `dept`, `term`, `subject`, `exam`, `ca`, `ftbf`, `stbf`, `regdate`) VALUES
(1813, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1814, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1815, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1816, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1817, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1818, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1819, 'Chukwuma  I  Irene', 'bs/js/042', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1820, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1821, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1822, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1823, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1824, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1825, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1826, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1827, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1828, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1829, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1830, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1831, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1832, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1833, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1834, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1835, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1836, 'Chuks  E  Emmanuella', 'bs/js/043', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1837, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1838, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1839, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1840, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1841, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1842, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1843, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1844, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1845, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1846, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1847, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1848, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1849, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1850, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1851, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1852, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1853, 'Dasaolu  B  Bidemi', 'bs/js/044', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1854, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1855, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1856, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1857, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1858, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1859, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1860, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1861, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1862, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1863, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1864, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1865, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1866, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1867, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1868, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1869, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1870, 'Linus  D  Damilola', 'bs/js/045', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1871, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1872, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1873, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1874, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1875, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1876, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1877, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1878, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1879, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1880, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1881, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1882, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1883, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1884, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1885, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1886, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1887, 'Oderinde  R  Ramot', 'bs/js/046', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1888, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1889, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1890, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1891, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1892, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1893, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1894, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1895, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1896, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1897, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1898, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1899, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1900, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1901, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1902, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1903, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1904, 'Akhigbe  D  David', 'bs/js/047', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1905, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1906, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1907, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1908, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1909, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1910, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1911, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1912, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1913, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1914, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1915, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1916, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1917, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1918, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1919, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1920, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1921, 'Chuks  E  Emmanuel', 'bs/js/048', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1922, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1923, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1924, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1925, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1926, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1927, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1928, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1929, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1930, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1931, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1932, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1933, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1934, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1935, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1936, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1937, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1938, 'Egegele  G  Goodluck', 'bs/js/049', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1939, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1940, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1941, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1942, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1943, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1944, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1945, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1946, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1947, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1948, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1949, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1950, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1951, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1952, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1953, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1954, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1955, 'Falodun  O  Olamide', 'bs/js/050', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1956, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1957, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1958, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1959, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1960, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1961, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1962, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1963, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1964, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1965, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1966, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1967, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1968, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1969, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1970, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1971, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1972, 'Kingsley  J  Joseph', 'bs/js/051', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1973, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1974, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1975, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1976, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1977, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1978, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1979, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1980, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1981, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1982, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1983, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1984, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1985, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1986, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1987, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1988, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1989, 'Makinwa  P  Paul', 'bs/js/052', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1990, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1991, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1992, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1993, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1994, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1995, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1996, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1997, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1998, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(1999, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2000, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2001, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2002, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2003, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2004, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2005, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2006, 'Makinwa  P  Peter', 'bs/js/053', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2007, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2008, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2009, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2010, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2011, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2012, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2013, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2014, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2015, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2016, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2017, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2018, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2019, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2020, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2021, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2022, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2023, 'Ogunsakin  P  Praise', 'bs/js/054', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2024, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2025, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2026, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2027, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2028, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2029, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2030, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2031, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2032, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2033, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2034, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2035, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2036, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2037, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2038, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2039, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2040, 'Owoama  D  David', 'bs/js/055', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2041, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2042, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2043, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2044, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2045, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2046, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2047, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2048, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2049, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2050, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2051, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2052, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2053, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2054, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2055, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2056, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2057, 'Talabi  D  Taiwo', 'bs/js/056', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2058, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2059, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2060, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2061, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2062, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2063, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2064, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2065, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2066, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2067, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2068, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2069, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2070, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2071, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2072, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2073, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2074, 'Eze  C  Chioma', 'bs/js/057', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2075, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2076, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'English Language', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2077, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Yoruba', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2078, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Social Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2079, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Business Studies', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2080, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'C.R.S', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2081, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2082, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Security Education', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2083, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Agric.Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2084, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'P.H.E', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2085, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2086, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Basic Technology', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2087, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Computer Science', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2088, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'French', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2089, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Music', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2090, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Home Economics', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2091, 'Abimbade  D  David', 'bs/js/058', '2018', 'JSS3', 'JSS', 'First Term', 'Fine Art', '00', '00', '00', '00', '2018-11-14 06:15:36pm'),
(2152, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Mathematics', '45', '12', '00', '00', '2018-12-02 03:46:38am'),
(2153, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'English Language', '60', '21', '00', '00', '2018-12-02 03:46:38am'),
(2154, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Chemistry', '38', '28', '00', '00', '2018-12-02 03:46:38am'),
(2155, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Physics', '44', '31', '32', '33', '2018-12-02 03:46:38am'),
(2156, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Computer studies', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2157, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Further Mathematics ', '34', '12', '12', '33', '2018-12-02 03:46:38am'),
(2158, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Geography', '11', '30', '00', '00', '2018-12-02 03:46:38am'),
(2159, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Agricultural science', '66', '11', '00', '00', '2018-12-02 03:46:38am'),
(2160, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Economics', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2161, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'First Term', 'Yoruba Langauge', '41', '4', '00', '00', '2018-12-02 03:46:38am'),
(2162, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Mathematics', '33', '18', '00', '00', '2018-12-02 03:46:38am'),
(2163, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'English Language', '12', '28', '00', '00', '2018-12-02 03:46:38am'),
(2164, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Chemistry', '56', '30', '00', '00', '2018-12-02 03:46:38am'),
(2165, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Physics', '23', '41', '44', '22', '2018-12-02 03:46:38am'),
(2166, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Computer studies', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2167, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Further Mathematics ', '22', '13', '45', '31', '2018-12-02 03:46:38am'),
(2168, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Geography', '44', '13', '00', '00', '2018-12-02 03:46:38am'),
(2169, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Agricultural science', '42', '14', '00', '00', '2018-12-02 03:46:38am'),
(2170, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Economics', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2171, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'First Term', 'Yoruba Langauge', '32', '21', '00', '00', '2018-12-02 03:46:38am'),
(2172, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Mathematics', '65', '22', '00', '00', '2018-12-02 03:46:38am'),
(2173, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'English Language', '44', '30', '00', '00', '2018-12-02 03:46:38am'),
(2174, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Chemistry', '21', '32', '00', '00', '2018-12-02 03:46:38am'),
(2175, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Physics', '44', '12', '33', '22', '2018-12-02 03:46:38am'),
(2176, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Computer studies', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2177, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Further Mathematics ', '55', '31', '42', '33', '2018-12-02 03:46:38am'),
(2178, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Geography', '45', '30', '00', '00', '2018-12-02 03:46:38am'),
(2179, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Agricultural science', '66', '21', '00', '00', '2018-12-02 03:46:38am'),
(2180, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Economics', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2181, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'First Term', 'Yoruba Langauge', '60', '22', '00', '00', '2018-12-02 03:46:38am'),
(2182, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Mathematics', '21', '23', '00', '00', '2018-12-02 03:46:38am'),
(2183, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'English Language', '44', '21', '00', '00', '2018-12-02 03:46:38am'),
(2184, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Chemistry', '33', '30', '00', '00', '2018-12-02 03:46:38am'),
(2185, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Physics', '11', '32', '33', '55', '2018-12-02 03:46:38am'),
(2186, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Computer studies', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2187, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Further Mathematics ', '2', '31', '3', '5', '2018-12-02 03:46:38am'),
(2188, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Geography', '57', '22', '00', '00', '2018-12-02 03:46:38am'),
(2189, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Agricultural science', '70', '21', '00', '00', '2018-12-02 03:46:38am'),
(2190, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Economics', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2191, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'First Term', 'Yoruba Langauge', '44', '11', '00', '00', '2018-12-02 03:46:38am'),
(2192, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Mathematics', '12', '43', '00', '00', '2018-12-02 03:46:38am'),
(2193, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'English Language', '70', '13', '00', '00', '2018-12-02 03:46:38am'),
(2194, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Chemistry', '55', '21', '00', '00', '2018-12-02 03:46:38am'),
(2195, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Physics', '32', '21', '11', '22', '2018-12-02 03:46:38am'),
(2196, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Computer studies', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2197, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Further Mathematics ', '5', '6', '4', '6', '2018-12-02 03:46:38am'),
(2198, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Geography', '56', '28', '00', '00', '2018-12-02 03:46:38am'),
(2199, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Agricultural science', '67', '29', '00', '00', '2018-12-02 03:46:38am'),
(2200, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Economics', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2201, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'First Term', 'Yoruba Langauge', '32', '22', '00', '00', '2018-12-02 03:46:38am'),
(2202, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Mathematics', '32', '32', '00', '00', '2018-12-02 03:46:38am'),
(2203, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'English Language', '32', '30', '00', '00', '2018-12-02 03:46:38am'),
(2204, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Chemistry', '22', '11', '00', '00', '2018-12-02 03:46:38am'),
(2205, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Physics', '33', '12', '11', '32', '2018-12-02 03:46:38am'),
(2206, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Computer studies', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2207, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Further Mathematics ', '32', '7', '21', '32', '2018-12-02 03:46:38am'),
(2208, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Geography', '22', '21', '00', '00', '2018-12-02 03:46:38am'),
(2209, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Agricultural science', '66', '30', '00', '00', '2018-12-02 03:46:38am'),
(2210, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Economics', '00', '00', '00', '00', '2018-12-02 03:46:38am'),
(2211, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'First Term', 'Yoruba Langauge', '66', '21', '00', '00', '2018-12-02 03:46:38am'),
(2212, 'Emeka Jonas', 'bs/ss2/005', '2018', 'SS2', 'Arts', 'First Term', 'Mathematics', '00', '00', '00', '00', '2018-12-02 10:28:19am'),
(2213, 'Emeka Jonas', 'bs/ss2/005', '2018', 'SS2', 'Arts', 'First Term', 'English Language', '23', '12', '34', '21', '2018-12-02 10:28:19am'),
(2214, 'Emeka Jonas', 'bs/ss2/005', '2018', 'SS2', 'Arts', 'First Term', 'Civic Education', '00', '00', '00', '00', '2018-12-02 10:28:19am'),
(2215, 'Emeka Jonas', 'bs/ss2/005', '2018', 'SS2', 'Arts', 'First Term', 'Biology', '00', '00', '00', '00', '2018-12-02 10:28:19am'),
(2216, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Mathematics', '32', '12', '00', '00', '2018-12-07 08:21:51pm'),
(2217, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'English Language', '44', '6', '00', '00', '2018-12-07 08:21:51pm'),
(2218, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Chemistry', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2219, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Physics', '00', '00', '00', '00', '2018-12-07 08:21:51pm');
INSERT INTO `studentregister` (`id`, `fullname`, `regno`, `year`, `class`, `dept`, `term`, `subject`, `exam`, `ca`, `ftbf`, `stbf`, `regdate`) VALUES
(2220, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Computer Science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2221, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Further Mathematics ', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2222, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Geography', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2223, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Agricultural science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2224, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Economics', '43', '43', '00', '00', '2018-12-07 08:21:51pm'),
(2225, 'Taiwo  A  Adejumo', 'bs/ss2/002', '2018', 'SS2', 'science', 'Second Term', 'Yoruba Langauge', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2226, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Mathematics', '34', '12', '00', '00', '2018-12-07 08:21:51pm'),
(2227, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'English Language', '00', '66', '00', '00', '2018-12-07 08:21:51pm'),
(2228, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Chemistry', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2229, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Physics', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2230, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Computer Science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2231, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Further Mathematics ', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2232, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Geography', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2233, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Agricultural science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2234, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Economics', '43', '32', '', '00', '2018-12-07 08:21:51pm'),
(2235, 'Elijah  E  Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'science', 'Second Term', 'Yoruba Langauge', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2236, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Mathematics', '44', '42', '00', '00', '2018-12-07 08:21:51pm'),
(2237, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'English Language', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2238, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Chemistry', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2239, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Physics', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2240, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Computer Science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2241, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Further Mathematics ', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2242, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Geography', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2243, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Agricultural science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2244, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Economics', '31', '32', '00', '00', '2018-12-07 08:21:51pm'),
(2245, 'Rosemary  J  Jaiyeoba', 'bs/ss2/004', '2018', 'SS2', 'science', 'Second Term', 'Yoruba Langauge', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2246, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Mathematics', '55', '12', '00', '00', '2018-12-07 08:21:51pm'),
(2247, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'English Language', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2248, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Chemistry', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2249, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Physics', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2250, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Computer Science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2251, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Further Mathematics ', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2252, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Geography', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2253, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Agricultural science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2254, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Economics', '12', '32', '00', '00', '2018-12-07 08:21:51pm'),
(2255, 'Paul  J  Joseph', 'bs/ss2/006', '2018', 'SS2', 'science', 'Second Term', 'Yoruba Langauge', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2256, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Mathematics', '42', '30', '00', '00', '2018-12-07 08:21:51pm'),
(2257, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'English Language', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2258, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Chemistry', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2259, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Physics', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2260, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Computer Science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2261, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Further Mathematics ', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2262, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Geography', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2263, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Agricultural science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2264, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Economics', '54', '32', '00', '00', '2018-12-07 08:21:51pm'),
(2265, 'John  C  Collins', 'bs/ss2/007', '2018', 'SS2', 'science', 'Second Term', 'Yoruba Langauge', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2266, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Mathematics', '44', '21', '00', '00', '2018-12-07 08:21:51pm'),
(2267, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'English Language', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2268, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Chemistry', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2269, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Physics', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2270, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Computer Science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2271, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Further Mathematics ', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2272, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Geography', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2273, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Agricultural science', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2274, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Economics', '33', '21', '00', '00', '2018-12-07 08:21:51pm'),
(2275, 'Fathia  M  Mohammed', 'bs/ss2/008', '2018', 'SS2', 'science', 'Second Term', 'Yoruba Langauge', '00', '00', '00', '00', '2018-12-07 08:21:51pm'),
(2276, 'Elijah E Ejenavwo', 'bs/ss2/003', '2018', 'SS2', 'Science', 'First Term', 'Computer Science', '55', '30', '00', '00', '2018-12-11 09:42:01am');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stdId` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `stdaddress` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `matricno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `regdate` date NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stdId`, `firstname`, `middlename`, `lastname`, `stdaddress`, `gender`, `class`, `dept`, `matricno`, `password`, `user_status`, `user_type`, `regdate`, `picture`) VALUES
(110, 'Abayomi ', 'a', 'Boaz', 'oke aro', 'Male', 'SS1', 'Arts', 'bs/js/001', 'Abayomi ', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(111, 'Adeyemi ', 'o', 'Oreoluwa', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/002', 'Adeyemi ', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(112, 'Daniel', 'G', 'Abe', 'oke aro', 'Male', 'JSS1', 'JSS', 'bs/js/003', 'Daniel', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(113, 'Edo', 'A', 'Abigail', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/004', 'Edo', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(114, 'Fashawe', 'O', 'Opemipo', 'oke aro', 'Male', 'JSS1', 'JSS', 'bs/js/005', 'Fashawe', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(115, 'Labinjo', 'S', 'seyifunmi', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/006', 'Labinjo', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(116, 'Mgbekwere', 'C', 'Chukwuemeka', 'oke aro', 'Male', 'JSS1', 'JSS', 'bs/js/007', 'Mgbekwere', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(117, 'Moses', 'I', 'Ifeoluwa', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/008', 'Moses', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(118, 'Mustapha ', 'A', 'Abdulhameed', 'oke aro', 'Male', 'JSS1', 'JSS', 'bs/js/009', 'Mustapha ', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(119, 'Mutayero', 'R', 'Rokeebat', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/010', 'Mutayero', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(120, 'Ogundiyan', 'O', 'Moyosore', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/011', 'Ogundiyan', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(121, 'Ogunsakin', 'P', 'Philip', 'oke aro', 'Male', 'JSS1', 'JSS', 'bs/js/012', 'Ogunsakin', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(122, 'Onipede', 'D', 'Damilola', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/013', 'Onipede', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(123, 'Osayimwen', 'O', 'Osafunwengbe', 'oke aro', 'Male', 'JSS1', 'JSS', 'bs/js/014', 'Osayimwen', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(124, 'Owuoma', 'C', 'Chidinma', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/015', 'Owuoma', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(125, 'Salaudeen', 'M', 'Muibat', 'oke aro', 'Male', 'JSS1', 'JSS', 'bs/js/016', 'Salaudeen', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(126, 'Talabi', 'O', 'Oluwakemi', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/017', 'Talabi', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(127, 'Umoh', 'G', 'Goodness', 'oke aro', 'Female', 'JSS1', 'JSS', 'bs/js/018', 'Umoh', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(128, 'Adeniran', 'p', 'Precious', 'oke aro', 'Female', 'JSS2', 'JSS', 'bs/js/019', 'Adeniran', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(129, 'Adeyemi', 'W', 'Wonderful', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/020', 'Adeyemi', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(130, 'Agbonaruoho ', 'M', 'Magdalene', 'oke aro', 'Female', 'JSS2', 'JSS', 'bs/js/021', 'Agbonaruoho ', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(131, 'Akamo', 'B', 'Basit', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/022', 'Akamo', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(132, 'Akanbi', 'D', 'Dorcas', 'oke aro', 'Female', 'JSS2', 'JSS', 'bs/js/023', 'Akanbi', 'Inactive', 'user', '2018-11-13', '../students/images/'),
(133, 'Akinboro', 'T', 'Teniola', 'oke aro', 'Female', 'JSS2', 'JSS', 'bs/js/024', 'Akinboro', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(134, 'Akinola', 'T', 'Temidayo', 'oke aro', 'Female', 'JSS2', 'JSS', 'bs/js/025', 'Akinola', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(135, 'Boluwade', 'F', 'Fikayo', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/026', 'Boluwade', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(136, 'Francis', 'D', 'Daniel', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/027', 'Francis', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(137, 'Muftau', 'Q', 'Quadri', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/028', 'Muftau', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(138, 'Muhammed', 'A', 'Arafat', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/029', 'Muhammed', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(139, 'Mustapha ', 'L', 'Latifat', 'oke aro', 'Female', 'JSS2', 'JSS', 'bs/js/030', 'Mustapha ', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(140, 'Ojo', 'Abdul', 'Quowiyu', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/031', 'Ojo', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(141, 'Okediya', 'T', 'Timileyin', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/032', 'Okediya', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(142, 'Olanrewaju', 'm', 'Maxwell', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/033', 'Olanrewaju', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(143, 'Olatokun', 'O', 'Opeoluwa', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/034', 'Olatokun', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(144, 'Olatunji', 'B', 'Bolaji', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/035', 'Olatunji', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(145, 'Onipede', 'D', 'David', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/036', 'Onipede', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(146, 'Oyelola', 'F', 'Feyisara', 'oke aro', 'Female', 'JSS2', 'JSS', 'bs/js/037', 'Oyelola', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(147, 'Popoola', 'D', 'Daniel', 'oke aro', 'Male', 'JSS2', 'JSS', 'bs/js/038', 'Popoola', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(152, 'Chuks', 'E', 'Emmanuella', 'oke aro', 'Female', 'SS1', 'JSS', 'bs/js/043', 'Chuks', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(153, 'Dasaolu', 'B', 'Bidemi', 'oke aro', 'Female', 'SS1', 'JSS', 'bs/js/044', 'Dasaolu', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(154, 'Linus', 'D', 'Damilola', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/045', 'Linus', 'Inactive', 'user', '2018-11-13', '../students/images/'),
(155, 'Oderinde', 'R', 'Ramot', 'oke aro', 'Female', 'SS1', 'JSS', 'bs/js/046', 'Linus', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(156, 'Akhigbe', 'D', 'David', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/047', 'Akhigbe', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(157, 'Chuks', 'E', 'Emmanuel', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/048', 'Chuks', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(158, 'Egegele', 'G', 'Goodluck', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/049', 'Egegele', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(159, 'Falodun', 'O', 'Olamide', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/050', 'Falodun', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(160, 'Kingsley', 'J', 'Joseph', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/051', 'Kingsley', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(161, 'Makinwa', 'P', 'Paul', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/052', 'Makinwa', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(162, 'Makinwa', 'P', 'Peter', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/053', 'Makinwa', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(163, 'Ogunsakin', 'P', 'Praise', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/054', 'Ogunsakin', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(164, 'Owoama', 'D', 'David', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/055', 'Owoama', 'Inactive', 'user', '2018-11-13', '../students/images/bolson logo.png'),
(165, 'Talabi', 'D', 'Taiwo', 'oke aro', 'Male', 'SS1', 'JSS', 'bs/js/056', 'Talabi', 'Inactive', 'user', '2018-11-13', '../students/images/male.png'),
(166, 'Eze', 'C', 'Chioma', 'oke aro', 'Female', 'SS1', 'JSS', 'bs/js/057', 'Eze', 'Inactive', 'user', '2018-11-13', '../students/images/female.png'),
(198, 'Tofunmi', 'A', 'Adebisi', 'oke aro', 'Female', 'SS2', 'Science', 'bs/ss2/001', 'Tofunmi', 'Inactive', 'user', '2018-11-21', '../students/images/bolson logo.png'),
(199, 'Taiwo', 'A', 'Adejumo', 'oke aro', 'Male', 'SS2', 'Science', 'bs/ss2/002', 'Taiwo', 'Inactive', 'user', '2018-11-21', '../students/images/male.png'),
(200, 'Elijah', 'E', 'Ejenavwo', 'oke aro', 'Male', 'SS2', 'Science', 'bs/ss2/003', 'Elijah', 'Inactive', 'user', '2018-11-21', '../students/images/usoh.jpg'),
(201, 'Rosemary', 'J', 'Jaiyeoba', 'oke aro', 'Female', 'SS2', 'Science', 'bs/ss2/004', 'Rosemary', 'Inactive', 'user', '2018-11-21', '../students/images/bolson logo.png'),
(202, 'Emeka', 'J', 'Jonas', 'oke aro', 'Male', 'SS2', 'Arts', 'bs/ss2/005', 'Emeka', 'Inactive', 'user', '2018-11-21', '../students/images/bolson logo.png'),
(203, 'Paul', 'J', 'Joseph', 'oke aro', 'Male', 'SS2', 'Science', 'bs/ss2/006', 'Emeka', 'Inactive', 'user', '2018-11-21', '../students/images/bolson logo.png'),
(204, 'John', 'C', 'Collins', 'oke aro', 'Male', 'SS2', 'Science', 'bs/ss2/007', 'John', 'Inactive', 'user', '2018-11-21', '../students/images/bolson logo.png'),
(205, 'Fathia', 'M', 'Mohammed', 'oke aro', 'Female', 'SS2', 'Science', 'bs/ss2/008', 'Fathia', 'Inactive', 'user', '2018-11-21', '../students/images/bolson logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `studenttest`
--

CREATE TABLE `studenttest` (
  `stdid` bigint(20) NOT NULL DEFAULT '0',
  `testid` bigint(20) NOT NULL DEFAULT '0',
  `starttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `correctlyanswered` int(11) DEFAULT NULL,
  `status` enum('over','inprogress') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admname`);

--
-- Indexes for table `anouncement`
--
ALTER TABLE `anouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appId`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emaillist`
--
ALTER TABLE `emaillist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footersetting`
--
ALTER TABLE `footersetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headersetting`
--
ALTER TABLE `headersetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jss_subjs`
--
ALTER TABLE `jss_subjs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`local_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsfiles`
--
ALTER TABLE `newsfiles`
  ADD PRIMARY KEY (`fileId`);

--
-- Indexes for table `primary_register`
--
ALTER TABLE `primary_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `primary_setting`
--
ALTER TABLE `primary_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `primary_subject`
--
ALTER TABLE `primary_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`testid`,`qnid`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply_complain`
--
ALTER TABLE `reply_complain`
  ADD PRIMARY KEY (`replyID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_arts_subj`
--
ALTER TABLE `sss_arts_subj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_comm_subj`
--
ALTER TABLE `sss_comm_subj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss_sci_subj`
--
ALTER TABLE `sss_sci_subj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `studentquestion`
--
ALTER TABLE `studentquestion`
  ADD PRIMARY KEY (`stdid`,`testid`,`qnid`),
  ADD KEY `testid` (`testid`,`qnid`);

--
-- Indexes for table `studentregister`
--
ALTER TABLE `studentregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stdId`);

--
-- Indexes for table `studenttest`
--
ALTER TABLE `studenttest`
  ADD PRIMARY KEY (`stdid`,`testid`),
  ADD KEY `testid` (`testid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `anouncement`
--
ALTER TABLE `anouncement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `appId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `emaillist`
--
ALTER TABLE `emaillist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `footersetting`
--
ALTER TABLE `footersetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headersetting`
--
ALTER TABLE `headersetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jss_subjs`
--
ALTER TABLE `jss_subjs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=777;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `newsfiles`
--
ALTER TABLE `newsfiles`
  MODIFY `fileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `primary_register`
--
ALTER TABLE `primary_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `primary_setting`
--
ALTER TABLE `primary_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `primary_subject`
--
ALTER TABLE `primary_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14324;

--
-- AUTO_INCREMENT for table `reply_complain`
--
ALTER TABLE `reply_complain`
  MODIFY `replyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=540;

--
-- AUTO_INCREMENT for table `sss_arts_subj`
--
ALTER TABLE `sss_arts_subj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sss_comm_subj`
--
ALTER TABLE `sss_comm_subj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sss_sci_subj`
--
ALTER TABLE `sss_sci_subj`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `studentregister`
--
ALTER TABLE `studentregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2277;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
