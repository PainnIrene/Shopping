-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 02:36 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoriesid` int(11) NOT NULL AUTO_INCREMENT,
  `categoriesname` varchar(50) NOT NULL,
  PRIMARY KEY (`categoriesid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoriesid`, `categoriesname`) VALUES
(20, 'Software'),
(3, 'CPU Tower'),
(12, 'Keyboard'),
(13, 'Laptop'),
(19, 'Printer'),
(17, 'LCD Monitor'),
(18, 'Mouse'),
(29, 'Mobile Phones');

-- --------------------------------------------------------

--
-- Table structure for table `countrylist`
--

CREATE TABLE IF NOT EXISTS `countrylist` (
  `CountryID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`CountryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=242 ;

--
-- Dumping data for table `countrylist`
--

INSERT INTO `countrylist` (`CountryID`, `Name`) VALUES
(1, 'United States'),
(2, 'Canada'),
(3, 'Mexico'),
(4, 'Afghanistan'),
(5, 'Albania'),
(6, 'Algeria'),
(7, 'Andorra'),
(8, 'Angola'),
(9, 'Anguilla'),
(10, 'Antarctica'),
(11, 'Antigua and Barbuda'),
(12, 'Argentina'),
(13, 'Armenia'),
(14, 'Aruba'),
(15, 'Ascension Island'),
(16, 'Australia'),
(17, 'Austria'),
(18, 'Azerbaijan'),
(19, 'Bahamas'),
(20, 'Bahrain'),
(21, 'Bangladesh'),
(22, 'Barbados'),
(23, 'Belarus'),
(24, 'Belgium'),
(25, 'Belize'),
(26, 'Benin'),
(27, 'Bermuda'),
(28, 'Bhutan'),
(29, 'Bolivia'),
(30, 'Bophuthatswana'),
(31, 'Bosnia-Herzegovina'),
(32, 'Botswana'),
(33, 'Bouvet Island'),
(34, 'Brazil'),
(35, 'British Indian Ocean'),
(36, 'British Virgin Islands'),
(37, 'Brunei Darussalam'),
(38, 'Bulgaria'),
(39, 'Burkina Faso'),
(40, 'Burundi'),
(41, 'Cambodia'),
(42, 'Cameroon'),
(44, 'Cape Verde Island'),
(45, 'Cayman Islands'),
(46, 'Central Africa'),
(47, 'Chad'),
(48, 'Channel Islands'),
(49, 'Chile'),
(50, 'China, Peoples Republic'),
(51, 'Christmas Island'),
(52, 'Cocos (Keeling) Islands'),
(53, 'Colombia'),
(54, 'Comoros Islands'),
(55, 'Congo'),
(56, 'Cook Islands'),
(57, 'Costa Rica'),
(58, 'Croatia'),
(59, 'Cuba'),
(60, 'Cyprus'),
(61, 'Czech Republic'),
(62, 'Denmark'),
(63, 'Djibouti'),
(64, 'Dominica'),
(65, 'Dominican Republic'),
(66, 'Easter Island'),
(67, 'Ecuador'),
(68, 'Egypt'),
(69, 'El Salvador'),
(70, 'England'),
(71, 'Equatorial Guinea'),
(72, 'Estonia'),
(73, 'Ethiopia'),
(74, 'Falkland Islands'),
(75, 'Faeroe Islands'),
(76, 'Fiji'),
(77, 'Finland'),
(78, 'France'),
(79, 'French Guyana'),
(80, 'French Polynesia'),
(81, 'Gabon'),
(82, 'Gambia'),
(83, 'Georgia Republic'),
(84, 'Germany'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe (French)'),
(90, 'Guatemala'),
(91, 'Guernsey Island'),
(92, 'Guinea Bissau'),
(93, 'Guinea'),
(94, 'Guyana'),
(95, 'Haiti'),
(96, 'Heard and McDonald Isls'),
(97, 'Honduras'),
(98, 'Hong Kong'),
(99, 'Hungary'),
(100, 'Iceland'),
(101, 'India'),
(102, 'Iran'),
(103, 'Iraq'),
(104, 'Ireland'),
(105, 'Isle of Man'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Ivory Coast'),
(109, 'Jamaica'),
(110, 'Japan'),
(111, 'Jersey Island'),
(112, 'Jordan'),
(113, 'Kazakhstan'),
(114, 'Kenya'),
(115, 'Kiribati'),
(116, 'Kuwait'),
(117, 'Laos'),
(118, 'Latvia'),
(119, 'Lebanon'),
(120, 'Lesotho'),
(121, 'Liberia'),
(122, 'Libya'),
(123, 'Liechtenstein'),
(124, 'Lithuania'),
(125, 'Luxembourg'),
(126, 'Macao'),
(127, 'Macedonia'),
(128, 'Madagascar'),
(129, 'Malawi'),
(130, 'Malaysia'),
(131, 'Maldives'),
(132, 'Mali'),
(133, 'Malta'),
(134, 'Martinique (French)'),
(135, 'Mauritania'),
(136, 'Mauritius'),
(137, 'Mayotte'),
(139, 'Micronesia'),
(140, 'Moldavia'),
(141, 'Monaco'),
(142, 'Mongolia'),
(143, 'Montenegro'),
(144, 'Montserrat'),
(145, 'Morocco'),
(146, 'Mozambique'),
(147, 'Myanmar'),
(148, 'Namibia'),
(149, 'Nauru'),
(150, 'Nepal'),
(151, 'Netherlands Antilles'),
(152, 'Netherlands'),
(153, 'New Caledonia (French)'),
(154, 'New Zealand'),
(155, 'Nicaragua'),
(156, 'Niger'),
(157, 'Niue'),
(158, 'Norfolk Island'),
(159, 'North Korea'),
(160, 'Northern Ireland'),
(161, 'Norway'),
(162, 'Oman'),
(163, 'Pakistan'),
(164, 'Panama'),
(165, 'Papua New Guinea'),
(166, 'Paraguay'),
(167, 'Peru'),
(168, 'Philippines'),
(169, 'Pitcairn Island'),
(170, 'Poland'),
(171, 'Polynesia (French)'),
(172, 'Portugal'),
(173, 'Qatar'),
(174, 'Reunion Island'),
(175, 'Romania'),
(176, 'Russia'),
(177, 'Rwanda'),
(178, 'S.Georgia Sandwich Isls'),
(179, 'Sao Tome, Principe'),
(180, 'San Marino'),
(181, 'Saudi Arabia'),
(182, 'Scotland'),
(183, 'Senegal'),
(184, 'Serbia'),
(185, 'Seychelles'),
(186, 'Shetland'),
(187, 'Sierra Leone'),
(188, 'Singapore'),
(189, 'Slovak Republic'),
(190, 'Slovenia'),
(191, 'Solomon Islands'),
(192, 'Somalia'),
(193, 'South Africa'),
(194, 'South Korea'),
(195, 'Spain'),
(196, 'Sri Lanka'),
(197, 'St. Helena'),
(198, 'St. Lucia'),
(199, 'St. Pierre Miquelon'),
(200, 'St. Martins'),
(201, 'St. Kitts Nevis Anguilla'),
(202, 'St. Vincent Grenadines'),
(203, 'Sudan'),
(204, 'Suriname'),
(205, 'Svalbard Jan Mayen'),
(206, 'Swaziland'),
(207, 'Sweden'),
(208, 'Switzerland'),
(209, 'Syria'),
(210, 'Tajikistan'),
(211, 'Taiwan'),
(212, 'Tahiti'),
(213, 'Tanzania'),
(214, 'Thailand'),
(215, 'Togo'),
(216, 'Tokelau'),
(217, 'Tonga'),
(218, 'Trinidad and Tobago'),
(219, 'Tunisia'),
(220, 'Turkmenistan'),
(221, 'Turks and Caicos Isls'),
(222, 'Tuvalu'),
(223, 'Uganda'),
(224, 'Ukraine'),
(225, 'United Arab Emirates'),
(226, 'Uruguay'),
(227, 'Uzbekistan'),
(228, 'Vanuatu'),
(229, 'Vatican City State'),
(230, 'Venezuela'),
(231, 'Vietnam'),
(232, 'Virgin Islands (Brit)'),
(233, 'Wales'),
(234, 'Wallis Futuna Islands'),
(235, 'Western Sahara'),
(236, 'Western Samoa'),
(237, 'Yemen'),
(238, 'Yugoslavia'),
(239, 'Zaire'),
(240, 'Zambia'),
(241, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` int(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `firstname`, `lastname`, `email`, `sex`, `address`, `postcode`, `city`, `country`, `phone`, `fax`, `password`) VALUES
(1, 'dfas', 'asdf', 'asdfa', 0, 'asdf', 'asdf', '0', '17', 'adsfa', 'ad', 'asdfa'),
(2, 'dfas', 'asdf', 'asdfa', 0, 'asdf', 'asdf', '0', '17', 'adsfa', 'ad', 'asdfa'),
(3, 'Phyo', 'Min Tun', '2006.pmtun@gmail.com', 0, 'asdf', 'asdf', '0', '17', 'adsfa', 'ad', 'admin.pmt'),
(4, 'dfas', 'asdf', 'asdfa', 0, 'asdf', 'asdf', '0', '17', 'adsfa', 'ad', 'asdfa'),
(8, 'Phyo', 'Min Tun', 'phyomintun.sg@gmail.com', 1, 'No.352, Mahabandola Road, 5th Floor', '1234', 'Yangon', '147', '973002184', '22222', 'admin.pmt'),
(9, 'Chan', 'Myae Aung', 'chan@mail.com', 1, 'adfa', 'adfasd', 'Bangkok', '209', '12345', '12345', 'admin.pmt'),
(16, 'sdfa', 'asdfa', 'asdf', 1, 'dsafd', 'asdfa', 'asdf', '17', 'aasdfs', 'asdfa', 'adsfa'),
(11, 'Su', 'Su', 'su@mail.com', 0, 'sdfas', 'asdfas', 'Bangkok', '209', '12345', '12345', 'admin.pmt'),
(12, 'aa', 'aa', 'aa@mail.com', 0, 'aa', 'aa', 'aa', '17', '12345', '12345', 'aa'),
(13, 'bb', 'bb', 'bb', 0, 'bb', 'bb', 'bb', '17', 'bb', 'bb', 'bb'),
(18, 'adfas', 'adfa', 'adfa', 1, 'adfa', 'adfasd', 'adsfsa', '18', 'adfa', 'adfa', 'adsf'),
(19, 'asdfas', 'adfa', 'adfa', 1, 'hgj', 'gjh', '', '19', 'fhj', 'fhj', ''),
(20, 'Aung', 'Zin Myo Win', 'aungzinmyowin@gmail.com', 1, 'Bld 53', '10200', 'Bangkok', '214', '12345', '12345', 'aa'),
(21, 'Mg', 'Mg', 'mgmg@mail.com', 1, 'adsfa', 'adfasd', 'adfa', '9', 'adsfa', 'adas', 'aa'),
(22, 'dsafas', 'adf', 'ppp', 1, 'gh', 'dfd', 'dfg', '19', 'dfgh', 'df', 'fddh'),
(23, 'sdfsd', 'adf', 'adf', 0, 'adfa', 'adsfa', 'adfa', '3', 'asdf', 'asdfa', 'adfa'),
(24, 'Su', 'Su', 'susu.fong@gmail.com', 0, 'ABAC', '1234', 'Bangkok', '214', '123456789', '123456789', 'admin.pmt');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `shipmentid` int(11) NOT NULL,
  `paymentid` int(11) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `productid`, `customerid`, `price`, `qty`, `subtotal`, `tax`, `total`, `shipmentid`, `paymentid`, `remark`, `orderdate`) VALUES
(14, 42, 8, '50.00', 3, '150', '10.50', '1.00', 3, 2, 'paid', '0000-00-00'),
(13, 37, 8, '958.99', 5, '4794.95', '335.65', '1.00', 5, 6, 'paid', '0000-00-00'),
(12, 42, 8, '50.00', 1, '50.00', '3.50', '1.00', 3, 2, 'paid', '0000-00-00'),
(9, 42, 11, '50.00', 2, '100', '7.00', '1.00', 1, 2, 'shipping', '0000-00-00'),
(15, 41, 8, '75.54', 1, '75.54', '5.29', '1.00', 1, 6, 'delivered', '0000-00-00'),
(16, 53, 8, '12.00', 1, '12.00', '0.84', '1.00', 5, 4, 'paid', '0000-00-00'),
(10, 35, 8, '22.00', 1, '22.00', '1.54', '1.00', 1, 5, 'paid', '0000-00-00'),
(11, 7, 3, '81.33', 2, '162.66', '11.39', '1.00', 5, 4, 'pending', '0000-00-00'),
(10, 42, 8, '50.00', 2, '100', '7.00', '1.00', 1, 5, 'paid', '0000-00-00'),
(11, 6, 3, '30.69', 1, '30.69', '2.15', '1.00', 5, 4, 'pending', '0000-00-00'),
(11, 42, 3, '50.00', 1, '50.00', '3.50', '1.00', 5, 4, 'pending', '0000-00-00'),
(9, 14, 11, '32.49', 2, '64.98', '4.55', '1.00', 0, 0, 'pending', '0000-00-00'),
(16, 41, 8, '75.54', 1, '75.54', '5.29', '1.00', 5, 4, 'paid', '0000-00-00'),
(16, 38, 8, '21.39', 1, '21.39', '1.50', '1.00', 5, 4, 'paid', '0000-00-00'),
(19, 41, 8, '75.54', 1, '75.54', '5.29', '1.00', 5, 4, 'paid', '0000-00-00'),
(18, 38, 8, '21.39', 1, '21.39', '1.50', '1.00', 6, 2, 'paid', '2029-04-10'),
(18, 27, 8, '69.00', 1, '69.00', '4.83', '1.00', 6, 2, 'paid', '2029-04-10'),
(18, 20, 8, '649.99', 1, '649.99', '45.50', '1.00', 6, 2, 'paid', '2029-04-10'),
(21, 36, 8, '12.99', 1, '12.99', '0.91', '1.00', 1, 3, 'paid', '2010-07-02'),
(21, 12, 8, '55.36', 1, '55.36', '3.88', '1.00', 1, 3, 'paid', '2010-09-04'),
(20, 53, 8, '12.00', 1, '12.00', '0.84', '1.00', 6, 3, 'paid', '2010-04-30'),
(21, 33, 8, '604.61', 1, '604.61', '42.32', '1.00', 1, 3, 'paid', '2010-07-02'),
(22, 36, 8, '12.99', 1, '12.99', '0.91', '1.00', 6, 6, 'paid', '2010-11-10'),
(22, 41, 8, '75.54', 1, '75.54', '5.29', '1.00', 6, 6, 'paid', '2010-11-18'),
(23, 18, 24, '599.99', 1, '599.99', '42.00', '1.00', 5, 3, 'paid', '2010-10-17'),
(22, 53, 8, '12.00', 2, '24', '1.68', '1.00', 6, 6, 'paid', '2011-02-05'),
(24, 18, 8, '599.99', 1, '599.99', '42.00', '1.00', 1, 3, 'paid', '2011-10-04'),
(24, 56, 8, '345.50', 1, '345.50', '24.19', '1.00', 1, 3, 'paid', '2011-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `paymentid` int(11) NOT NULL AUTO_INCREMENT,
  `paymentname` varchar(50) NOT NULL,
  PRIMARY KEY (`paymentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `paymentname`) VALUES
(6, 'PayPal'),
(2, 'Credit Card'),
(3, 'Bank Transfer'),
(4, 'Visa Card'),
(5, 'Master Card');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  `productdes` varchar(200) NOT NULL,
  `categoriesid` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `productdate` date NOT NULL,
  `productimage` varchar(50) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `productdes`, `categoriesid`, `price`, `qty`, `productdate`, `productimage`) VALUES
(8, 'Tower Case', 'Antec Twelve Hundred ATX 12 Drive Bays 2xUSB 2.0 eSATA', 3, '159.99', 5, '2014-04-10', 'cpu_1.jpg'),
(9, 'Cooler Master Tower Case', 'SGC-2000-KKN1-GP <BR/>Storm Scout <BR/>ATX/MATX/ITX<BR/>Color-Black', 3, '79.99', 5, '2014-04-10', 'cpu_2.jpg'),
(10, 'Tower Case', 'Antec Three Hundred Gaming Case<BR/>External 3 X 5.25<BR/>Internal 6 X 3.5<BR/> 2*Usb2.0', 3, '59.82', -18, '2014-04-10', 'cpu_3.jpg'),
(11, 'Cooler Master Tower Case', 'NV-334-KWN1-GP \r\n<BR/>Elite 334 nVidia Edition ATX', 3, '54.24', 10, '2014-04-10', 'cpu_4.jpg'),
(12, 'Mid-Tower Gaming Case', 'Antec Two Hundred Cost-Efficient ', 3, '55.36', 9, '2014-04-10', 'cpu_5.jpg'),
(13, 'Cooler Master Mid Tower Case', 'Elite 335 ATX  \r\n<BR/>Black \r\n<BR/>RC-335-KKN1-GP', 3, '45.24', 5, '2014-04-10', 'cpu_6.jpg'),
(14, 'Microsoft Keyboard', 'Microsoft Natural Ergo Keyboard 4000', 12, '32.49', 9, '2014-04-10', 'keyboard_1.jpg'),
(15, 'Apple Keyboard', 'Apple Wireless Keyboard<BR/>(Retail Packaging)', 12, '68.00', 5, '2014-04-10', 'keyboard_2.jpg'),
(16, 'Apple Keyboard Kit', 'Color White', 12, '49.99', 3, '2014-04-10', 'keyboard_3.jpg'),
(17, 'Toshiba Laptop', 'Satellite L505-GS5037 \r\nTruBrite 15.6-Inch Laptop<BR/>Color-Black', 13, '559.99', 5, '2014-04-10', 'laptop_1.jpg'),
(18, 'ASUS', 'UL30A-X5 Thin<BR/>Light 13.3-Inch<BR/>Black Laptop<BR/>12 Hours of Battery Life', 13, '599.99', 3, '2014-04-10', 'laptop_2.jpg'),
(19, 'HP Pavilion ', 'DV6-2162NR<BR/>15.6-Inch Black Laptop<BR/>Up to 4.25 Hours of Battery Life', 13, '729.99', 5, '2014-04-10', 'laptop_3.jpg'),
(57, 'LG Optimus2x', 'Camera 	\r\n8MP, with LED Flash\r\nBluetooth 	\r\nver 2.1 with A2DP\r\nMusic Player 	\r\nYes\r\nFM Radio 	\r\nStereo FM radio with RDS\r\nGPRS 	\r\nYes\r\nEDGE 	\r\nYes\r\nWeb Browser 	\r\nHTML\r\nSocial Networking 	\r\nSocial Net', 29, '351.85', 352, '2001-10-11', '3_small.jpg'),
(20, 'HP Pavilion', 'DV4-2161NR<BR/>14.1-Inch Laptop<BR/>Color-Black', 13, '649.99', 4, '2014-04-10', 'laptop_4.jpg'),
(21, 'HP', 'HP 2009M 20-Inch HD LCD Monitor', 17, '139.82', 10, '2014-04-10', 'monitor_1.jpg'),
(22, 'Acer LCD Monitor', 'Acer V173Bb 17-Inch Widescreen LCD Monitor', 17, '101.54', 10, '2017-10-10', 'monitor_2.jpg'),
(23, 'ViewSonic', 'ViewSonic VA2223wm 22-Inch 16:9 1080p LCD Monitor', 17, '179.00', 5, '2014-04-10', 'monitor_4.jpg'),
(24, 'Microsoft Windows 7', 'Microsoft Windows 7 Professional Upgrade', 20, '167.35', 20, '2014-04-10', 'software_1.jpg'),
(27, 'Apple Magic Mouse', 'Color-White', 18, '69.00', 8, '2014-04-10', 'mouse_1.jpg'),
(28, 'Microsoft Mouse', 'Microsoft Wireless Notebook Optical Mouse 3000 - Slate', 18, '17.49', 10, '2014-04-10', 'mouse_2.jpg'),
(29, 'Logitech Mouse', 'Logitech V450 Nano Cordless Laser Mouse for Notebooks<BR/>Color-Black', 18, '35.23', 10, '2014-04-10', 'mouse_3.jpg'),
(30, 'Canon Printer', 'Canon PIXMA MX870 Wireless Office All-in-One Printer <BR/>(4206B002)', 19, '149.99', 5, '2014-04-10', 'printer_1.jpg'),
(31, 'Canon Photo Printer', 'Canon SELPHY CP790 Compact Photo Printer <BR/>(3646B001)', 19, '129.00', 5, '2014-04-10', 'printer_19.jpg'),
(32, 'Canon Photo Printer', 'Canon Selphy CP780 Silver Compact Photo Printer', 19, '86.94', 5, '2014-04-10', 'printer_20.jpg'),
(33, 'Canon Color Printer', 'Canon Color imageCLASS MF8350Cdn All-in-One Printer <BR/>(3555B001AA)', 19, '604.61', 4, '2014-04-10', 'printer_2.jpg'),
(34, 'Kensington SlimBlade Presenter Mouse', 'Wireless Mouse and Presenter in One<BR/>Ice Blue<BR/> (K72283US)', 18, '29.63', 5, '2014-04-10', 'mouse_19.jpg'),
(35, 'Kensington Wireless Mini Travel Mouse', 'PocketMouse Wireless Mini Travel Mouse<BR/>72214', 18, '22.00', 2, '2014-04-10', 'mouse_20.jpg'),
(36, 'Logitech Keyboard', 'Logitech Classic Keyboard 200 USB', 12, '12.99', 8, '2014-04-10', 'keyboard_4.jpg'),
(37, 'Apple Laptop', 'Apple MacBook MC207LL/A 13.3-Inch Laptop', 13, '958.99', 0, '2014-04-10', 'laptop_6.jpg'),
(42, 'Canon Photo Printer', 'Canon Selphy ES30 Compact Photo Printer <BR>White<BR>2676B001', 2, '50.00', 0, '2026-04-10', 'printer_18.jpg'),
(53, 'ASUS Laptop', 'adfas', 2, '12.00', 8, '2017-10-10', 'newlaptop.jpg'),
(54, 'Nokia C5-00 Warm Grey', 'Camera 	\r\n5MP, with LED Flash\r\nBluetooth 	\r\nwith A2DP, Yes\r\nMusic Player 	\r\nYes\r\nFM Radio 	\r\nStereo FM radio with RDS\r\nGPRS 	\r\nYes\r\nEDGE 	\r\nYes\r\nWeb Browser 	\r\nHTML\r\nSocial Networking 	\r\nYes. Facebook', 29, '98.90', 10, '2001-10-11', '1_small.jpg'),
(56, 'Apple iPhone 4, 16GB Black', 'Camera 	\r\n5MP, withAuto Focus & LED Flash\r\nBluetooth 	\r\nver 2.1 with A2DP\r\nMusic Player 	\r\nYes\r\nFM Radio 	\r\nNo\r\nGPRS 	\r\nYes, Class 10\r\nEDGE 	\r\nClass 10, Yes\r\nWeb Browser 	\r\nSafari\r\nSocial Networking 	', 29, '345.50', 345, '2001-10-11', '2_small.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settingcode` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`settingcode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settingcode`, `value`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE IF NOT EXISTS `shipment` (
  `shipmentid` int(11) NOT NULL AUTO_INCREMENT,
  `shipmentname` varchar(50) NOT NULL,
  `shipmentrate` decimal(10,2) NOT NULL,
  PRIMARY KEY (`shipmentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipmentid`, `shipmentname`, `shipmentrate`) VALUES
(1, 'DHL', '1.20'),
(5, 'FedEx', '1.15'),
(3, 'UPS', '1.30'),
(4, 'EMS', '0.95'),
(6, 'TNT', '1.25');
