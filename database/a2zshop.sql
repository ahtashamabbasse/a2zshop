-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql103.byethost13.com
-- Generation Time: Jan 08, 2017 at 09:17 AM
-- Server version: 5.6.34-79.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a2zshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL DEFAULT 'admin%$#@',
  `admin_date` date NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_date`) VALUES
(1, 'Ahtasham', 'admin@gmail.com', 'admin', '2016-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'HP'),
(2, 'Dell'),
(3, 'Sony'),
(4, 'Toshiba laptop'),
(5, 'Lenovo'),
(6, 'Maria B'),
(7, 'Asim Jopha'),
(8, 'Androbe'),
(9, 'J.'),
(10, 'JD'),
(11, 'Gull Ahmad'),
(12, 'Nokia'),
(13, 'Samsung'),
(14, 'Huawei'),
(15, 'OPPO'),
(16, 'Q Mobile'),
(17, 'I-phone'),
(18, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_p_id` int(11) NOT NULL,
  `cart_c_ip` varchar(11) NOT NULL,
  `cart_qty` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Electric'),
(4, 'Mobiles'),
(5, 'Laptops'),
(6, 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_pass` varchar(255) NOT NULL DEFAULT 'c%$#@!',
  `c_gender` varchar(11) NOT NULL,
  `c_img` varchar(255) NOT NULL DEFAULT 'customer.png',
  `c_contact` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_city` varchar(255) NOT NULL,
  `c_date` date NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_name`, `c_email`, `c_pass`, `c_gender`, `c_img`, `c_contact`, `c_address`, `c_city`, `c_date`) VALUES
(3, 'umar', 'ali@gmail.com', 'c%$#@!', 'Male', 'customer.png', '03008765432', 'street no.3 house no.66 ', 'Faisalabad', '2016-12-09'),
(4, 'Javeed', 'javeed@gmail.com', 'c%$#@!', '0', 'customer.png', '', 'House No.10,Street No.5 Madina Town', 'Faisalabad', '2016-12-09'),
(5, 'Shahid Javeed', 'abc@gmail.com', 'c%$#@!', 'Male', 'customer.png', '', 'Street No.1,House No.7 Jannah Colony', 'Rawalpindi', '2016-11-29'),
(6, 'Umair', 'umair@hotmail.com', 'c%$#@!', '0', 'customer.png', '', 'Street No.6,House No.33 Mujahid Colony', 'Karachi', '2016-11-28'),
(11, 'Shahid', 'shahid@gmail.comm', 'asdfghj', 'Male', 'customer.png', '', 'fas', 'Karachi', '2016-01-01'),
(12, 'ali', 'c@gmail.com', 'asdfgh', 'Male', 'customer.png', '', 'House No.10,Street No.5 Madina Town', 'Sadiqabad', '2016-12-20'),
(13, 'Arslan', 'arslan@gmail.com', '123456', 'Male', 'customer.png', '03065159021', 'Mujahid Colony', 'Sadiqabad', '2016-12-07'),
(14, 'testing', 'testing@gmail.com', '123456', 'Female', 'customer.png', '1098080', 'flkasj', 'Multan', '2016-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_no` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'In Progress',
  `o_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `o_c_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_no`, `p_id`, `c_id`, `qty`, `invoice_no`, `status`, `o_date`, `o_c_date`) VALUES
(7, '', '3', 3, '2', '1', 'Completed', '2016-12-30 18:27:40', '2016-12-30 18:12:22'),
(8, '', '4', 1, '2', '2', 'Completed', '2016-12-30 18:27:40', '2016-12-30 18:12:24'),
(9, '', '1', 1, '2', '3', 'Completed', '2016-12-30 18:27:40', '2016-12-30 18:42:32'),
(10, '', '2', 1, '2', '4', 'Completed', '2016-12-30 18:27:40', '2016-12-30 18:42:34'),
(11, '', '3', 1, '2', '5', 'In progress', '2016-12-30 18:27:40', '2016-12-30 18:12:56'),
(12, '', '4', 1, '2', '6', 'In progress', '2016-12-30 18:27:40', '2016-12-30 18:12:57'),
(13, '', '1', 1, '2', '7', 'In progress', '2016-12-30 18:27:40', '2016-12-30 18:12:59'),
(14, '', '2', 1, '2', '8', 'In progress', '2016-12-30 18:27:40', '2016-12-30 18:12:01'),
(15, '', '3', 1, '2', '5', 'In progress', '2016-12-30 18:27:40', '2016-12-30 18:12:03'),
(16, '', '4', 1, '2', '200', 'In progress', '2016-12-30 18:27:40', '2016-12-30 18:12:05'),
(43, '220', '1', 3, '1', '220', 'Completed', '2017-01-06 19:05:00', '2017-01-06 19:22:26'),
(44, '220', '2', 3, '2', '220', 'In Progress', '2017-01-06 19:05:00', NULL),
(45, '220', '3', 3, '3', '220', 'In Progress', '2017-01-06 19:05:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `txr_id` varchar(255) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `amount`, `c_id`, `p_id`, `txr_id`, `payment_date`) VALUES
(1, 1000, 1, 2, '1234567', '2016-12-30 18:43:53'),
(2, 1000, 1, 2, '12345678', '2016-12-30 18:43:53'),
(3, 1000, 1, 2, '1234569', '2016-12-30 18:43:53'),
(4, 1000, 1, 2, '12345610', '2016-12-30 18:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` text NOT NULL,
  `p_cat` varchar(255) NOT NULL,
  `p_brand` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_cat`, `p_brand`, `p_desc`, `p_price`, `p_qty`, `p_img`, `p_keyword`) VALUES
(1, 'Dell XPS 13 Core i5', 'Laptops', 'Dell', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Display size/resolution</strong></td>\r\n			<td>&nbsp;13.3-inch 3,200x1,800 &nbsp;touchscreen</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PC CPU</strong></td>\r\n			<td>2.2GHz Intel Core i5-5200U</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PC Memory</strong></td>\r\n			<td>8GB DDR3 SDRAM 1600MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Graphics</strong></td>\r\n			<td>3839MB (shared) Intel HD Graphics 5500<br />\r\n			&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 48000, 11, 'Dell_XPS_13_Core_i5.jpg', 'Laptop,device,dell,core i5'),
(17, 'Boat Neck Color Block Striped High-Low Long Sleeve T-Shirt', 'Women', 'Maria', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Product Name:</strong></td>\r\n			<td>Boat Neck Color Block Striped High-Low Long Sleeve T-Shirt</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Weight:</strong></td>\r\n			<td>229(g)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Material:</strong></td>\r\n			<td>Cotton</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Pattern Type:</strong></td>\r\n			<td>Color Block / Striped</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Package Included:</strong></td>\r\n			<td>Top / 1</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Sleeve:</strong></td>\r\n			<td>Long Sleeve</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Occasion:</strong></td>\r\n			<td>Casual</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Collar&amp;neckline:</strong></td>\r\n			<td>Boat Neck</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Season:</strong></td>\r\n			<td>Autumn / Spring</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1200, 12, '3045496_4.jpg', 'Boat Neck Color Block Striped High-Low Long Sleeve T-Shirt'),
(2, 'Dell Inspiron 15 3542', 'Laptops', 'Dell', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Brand</th>\r\n			<th>Dell</th>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Screen Size</strong></td>\r\n			<td>15.6-Inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Screen Resolution</strong></td>\r\n			<td>1366&times;768</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Touchscreen</strong></td>\r\n			<td>Optional</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 60000, 12, 'Dell_Inspiron_15_3542.jpg', 'Laptop,device,dell,core i5'),
(14, 'Dell Inspiron 15 5559', 'Laptops', 'Dell', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th scope="row">CPU</th>\r\n			<td>Intel Core i7-6500U (2-core, 2.50 &ndash; 3.10 GHz, 4MB cache)</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">RAM</th>\r\n			<td>8GB (2x 4096MB) &ndash; DDR3L, 1600MHz</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">GPU</th>\r\n			<td>AMD Radeon R5 M335 (4GB DDR3)</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">HDD/SSD</th>\r\n			<td>1TB HDD (5400 rpm)</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">Display</th>\r\n			<td>15.6-inch (39.62 cm.) &ndash; 1366 x 768, glossy</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 51900, 20, 'ssDell-Inspiron-15-5559-2-1.jpg', 'Laptop,device,dell,core i5-600U'),
(15, 'Round Neck Batwing Short Sleeve T-Shirt', 'Women', 'Maria', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Product Name:</strong></td>\r\n			<td>Round Neck Batwing Short Sleeve T-Shirt</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Weight:</strong></td>\r\n			<td>217(g)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Sleeve Type:</strong></td>\r\n			<td>Batwing Sleeve</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Sleeve:</strong></td>\r\n			<td>Short Sleeve</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Package Included:</strong></td>\r\n			<td>Top / 1</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Season:</strong></td>\r\n			<td>Summer</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Material:</strong></td>\r\n			<td>Cotton</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Occasion:</strong></td>\r\n			<td>Basic&nbsp;/&nbsp;Casual</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Collar&amp;neckline:</strong></td>\r\n			<td>Round Neck</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1500, 10, '3045574_5.jpg', 'Round Neck Batwing Short Sleeve T-Shirt'),
(16, 'Round Neck Ruffle Trim Plain Shift Dress', 'Women', 'Gull', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Product Name:</strong></td>\r\n			<td>Round Neck Ruffle Trim Plain Shift Dress</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Weight:</strong></td>\r\n			<td>270(g)</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Material:</strong></td>\r\n			<td>Cotton/linen</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Length:</strong></td>\r\n			<td>Calf-length</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Sleeve:</strong></td>\r\n			<td>Long Sleeve</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Embellishment:</strong></td>\r\n			<td>Ruffle Trim</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Pattern Type:</strong></td>\r\n			<td>Plain</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Occasion:</strong></td>\r\n			<td>Basic&nbsp;/&nbsp;Casual</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Dress Silhouette:</strong></td>\r\n			<td>Shift</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Collar&amp;neckline:</strong></td>\r\n			<td>Round Neck</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Season:</strong></td>\r\n			<td>Autumn / Spring</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Package Included:</strong></td>\r\n			<td>Dress / 1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 2500, 12, '3049036_7_(1).jpg', 'Round Neck Ruffle Trim Plain Shift Dress'),
(3, 'Dell Vostro 15 3558', 'Laptops', 'Dell', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Display Size &nbsp;&nbsp;</strong>(in inches) 15.6 Inch</li>\r\n	<li><strong>Processor. &nbsp; &nbsp; &nbsp;&nbsp;</strong>5th Gen Core i3</li>\r\n	<li><strong>RAM Type</strong>. &nbsp; &nbsp; &nbsp; &nbsp;DDR3L 1600Mhz</li>\r\n	<li><strong>HDD Type</strong>. &nbsp; &nbsp; &nbsp; SATA Hard Drive (5400RPM)</li>\r\n</ul>\r\n', 19700, 10, 'Dell-Vostro-15.jpg', 'Laptop,device,dell,duel core,Ubuntu'),
(4, 'Iphone 6s', 'Mobiles', 'I-phone', '<p><strong>Primary Camera:</strong> 12MP</p>\r\n\r\n<p><strong>Secondary Camera: </strong>5MP</p>\r\n\r\n<p>&nbsp;<strong>ROM:</strong>&nbsp;64GB</p>\r\n', 48000, 11, 'iphone6.jpg', 'iphone 6s,mobile'),
(5, 'Samsung Galaxy 7', 'Mobiles', 'Samsung', '<p><strong>Primary Camera:</strong> 12MP</p>\r\n\r\n<p><strong>Secondary Camera:</strong> 5MP&nbsp;</p>\r\n\r\n<p><strong>ROM:</strong> 16 Version MarshMallow 6.0&nbsp;</p>\r\n\r\n<p><strong>RAM:</strong> 4GB</p>\r\n', 55000, 10, 'samsung-galaxy-s7-usa1.jpg', 'samsung Galaxy 7,mobile,samsung'),
(6, 'Noir e8 ', 'Mobiles', 'Q', '<p><strong>Primary Camera:</strong> 24mp</p>\r\n\r\n<p>&nbsp;<strong>Secondary Camera:</strong> 8mp&nbsp;</p>\r\n\r\n<p><strong>RAM: &nbsp; &nbsp; &nbsp; &nbsp;</strong>4G RAM</p>\r\n', 25000, 20, '13661qmobil.jpg', 'Qmobile,Mobile,'),
(7, 'Lumia 928', 'Mobiles', 'Nokia', '<p><strong>Primary Camera: </strong>8mp</p>\r\n\r\n<p><strong>&nbsp;Secondary Camera:</strong> 1.3mp&nbsp;</p>\r\n\r\n<p><strong>RAM:</strong>&nbsp;1GB&nbsp;</p>\r\n\r\n<p><strong>ROM:</strong> 32GB</p>\r\n', 28500, 10, 'nokia-lumia-928-black.jpg', 'Nokia,Lumia 928,Mobile'),
(8, 'Huawei p8', 'Mobiles', 'Huawei', '<p><strong>Primary Camera:</strong> 13mp</p>\r\n\r\n<p>&nbsp;<strong>Secondary:</strong> 8mp&nbsp;</p>\r\n\r\n<p><strong>Version:</strong> 5.0.2</p>\r\n', 24000, 20, 'huawei-p8-0.jpg', 'mobile,p8,13mp,8mp'),
(9, 'Breast Pocket Long Sleeve Button Up Plaid Shirt', 'Men', 'J.', '<p><strong>Shirts Type: </strong>Casual Shirts</p>\r\n\r\n<p>&nbsp;<strong>Material:</strong> Cotton Blends</p>\r\n\r\n<p>&nbsp;<strong>Sleeve Length:</strong> Full Collar: Turn-down Collar</p>\r\n\r\n<p>&nbsp;<strong>Weight:</strong> 0.270kg&nbsp;</p>\r\n\r\n<p><strong>Package Contents:</strong> 1 x Shirt</p>\r\n', 900, 30, '20161104100448_96428.jpg', 'shirt'),
(10, 'Flag Star Printed Long Sleeve Pocket Denim Shirt', 'Men', 'JD', '<p><strong>Shirts Type:</strong> Casual Shirts&nbsp;</p>\r\n\r\n<p><strong>Material:</strong> Jeans</p>\r\n\r\n<p>&nbsp;<strong>Sleeve Length: </strong>Full Collar: Turn-down Collar</p>\r\n\r\n<p>&nbsp;<strong>Weight:</strong> 0.350kg&nbsp;</p>\r\n\r\n<p><strong>Package Contents:</strong> 1 x Shirt</p>\r\n', 950, 13, '20161019111603_78500.jpg', 'shirts,flag shirt'),
(11, 'Casual Stand-Up Collar Short Sleeve Loose-Fitting Plaid Women''s Blouse', 'Women', 'Asim', '<p><strong>Material: &nbsp;</strong>Poleyster Clothing</p>\r\n\r\n<p><strong>Sleeve: &nbsp; &nbsp;</strong>Long</p>\r\n\r\n<p><strong>Collar: &nbsp; &nbsp;&nbsp;</strong>Short Collar</p>\r\n\r\n<p><strong>Weight: &nbsp; &nbsp;</strong>0.222kg</p>\r\n\r\n<p><strong>Package Contents: &nbsp; &nbsp;</strong>1xBlouse</p>\r\n\r\n<p><strong>Collar Pattern Type: &nbsp;</strong>Plaid Style</p>\r\n', 1300, 20, '1428881649402-P-2550379.jpg', 'women shirt,collar short'),
(12, 'OEM Wholesale New Design Slim Fit Men Casual Chino Pants', 'Men', 'JD', '<p><strong>Model NO.:</strong> YOL-MP1504B&nbsp;</p>\r\n\r\n<p><strong>Age Group:</strong> Adults&nbsp;</p>\r\n\r\n<p><strong>Model:</strong> Low Waist</p>\r\n\r\n<p><strong>&nbsp;Length:</strong> Long Trouser&nbsp;</p>\r\n\r\n<p><strong>Leg:</strong> Straight&nbsp;</p>\r\n\r\n<p><strong>Thickness: </strong>Medium</p>\r\n\r\n<p>&nbsp;<strong>Size:</strong> as Customer?s</p>\r\n\r\n<p>&nbsp;<strong>Request Design:</strong> as Customer?</p>\r\n', 1400, 10, 'pent.jpg', 'pents,slipm pents,jd Brand,Jamal Den'),
(18, 'Prime Men''s Slim Fit Leather Jacket - Black', 'Men', 'JD', '<p><strong>Brand:</strong>&nbsp;<a href="http://www.kaymu.pk/other/">Other</a></p>\r\n\r\n<p><strong>Condition:</strong>&nbsp;New</p>\r\n\r\n<p><strong>Gender:</strong>&nbsp;Men&#39;s</p>\r\n\r\n<p><strong>Material:</strong>&nbsp;Faux Leather</p>\r\n\r\n<p><strong>Occasion:</strong>&nbsp;Casual</p>\r\n\r\n<p><strong>Weight:&nbsp;</strong>1.00 kg</p>\r\n', 3499, 20, 'other-4500-7331201-1-zoom.jpg', 'Prime Men''s Slim Fit Leather Jacket - Black'),
(19, ' Sony 43" FULL HD LED 43LF540T', 'Electric', 'Sony', '<ul>\r\n	<li>FULL HD</li>\r\n	<li>WIDE COLOR ENHANCER PLUS</li>\r\n	<li>SCREEN MIRRORING&nbsp;</li>\r\n	<li>HDMI</li>\r\n	<li>USB</li>\r\n	<li>VIRTUAL SURROUND</li>\r\n</ul>\r\n', 50800, 10, 'Sony-KLV-32W512D-81-cm-SDL759905332-3-f1278.jpg', ' Sony 43" FULL HD LED 43LF540T'),
(20, 'Apple Macbook Pro', 'Laptops', 'Apple', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Processor Type</th>\r\n			<td>Intel Dual Core - Core i5 Processor</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Processor Speed</th>\r\n			<td>2.5 GHz With 3.1 GHz Turbo Boost</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Installed RAM</th>\r\n			<td>4GB RAM</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Type of memory</th>\r\n			<td>1600MHz DDR3 memory</td>\r\n		</tr>\r\n		<tr>\r\n			<th>Hard drive size</th>\r\n			<td>500 GB HDD</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 96999, 10, 'md10111.jpg', 'Apple Macbook Pro'),
(21, 'Toshiba Satellite C50-A107', 'Laptops', 'Toshiba', '<ul>\r\n	<li><strong>Screen:</strong> 15.6 inch Diagonal HD Glossy Display</li>\r\n	<li><strong>CPU:</strong> 4th Generation Intel Core i3-4000M 2.4 GHz</li>\r\n	<li><strong>Storage + RAM</strong>: 500GB 5400RPM HDD + 4GB DDR3L</li>\r\n</ul>\r\n', 42000, 10, 'toshiba-1794-4971545-1-zoom.jpg', 'Toshiba Satellite C50-A107'),
(22, 'HP Notebook 15-AY101TU', 'Laptops', 'HP', '<ul>\r\n	<li><strong>Display: &nbsp;</strong>15.6&quot; diagonal HD SVA BrightView WLED-backlit (1366 x 768)</li>\r\n	<li><strong>Core: &nbsp; &nbsp; &nbsp;</strong>Intel&reg; Core&trade; i3-7100U (2.4 GHz, 3 MB cache, 2 cores)</li>\r\n	<li><strong>RAM: &nbsp; &nbsp;&nbsp;</strong>4 GB DDR4-2133 SDRAM (1 x 4 GB)</li>\r\n</ul>\r\n', 52000, 10, 'hp-3678-2468446-1-zoom.jpg', 'HP Notebook 15-AY101TU'),
(23, 'HP Star Wars Special Edition an050nr', 'Laptops', 'HP', '<ul>\r\n	<li><strong>&nbsp;Display: &nbsp;&nbsp;</strong>15.6-Inch 1920x1080 pixel LED-lit</li>\r\n	<li><strong>Core: &nbsp; &nbsp; &nbsp; &nbsp;</strong>Intel&reg; Core&trade; i5-6200U 2.3 GHz Processor</li>\r\n	<li><strong>RAM:</strong>&nbsp; &nbsp; &nbsp; &nbsp;6 GB SDRAM</li>\r\n</ul>\r\n', 54299, 20, 'hp-3755-2030246-1-zoom.jpg', 'HP Star Wars Special Edition an050nr'),
(24, 'BLACK EMBROIDERED SILK MERINO WOOLEN SW-26', 'Women', 'Gull', '<ul>\r\n	<li><strong>Printed Linen Shirt:</strong> 2.5 meters</li>\r\n	<li><strong>Sleeves:</strong> &nbsp;0.65 meters &nbsp;</li>\r\n	<li><strong>Embroidered Lace:</strong> &nbsp;1.5 meters</li>\r\n	<li><strong>Silk&nbsp;Merino&nbsp;Woolen Shawl:</strong> &nbsp;2.5 meters&nbsp;</li>\r\n	<li><strong>Dyed Linen Shalwar:</strong> 2.5 meters</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Package Contents:&nbsp;</strong>3 Piece Suit</li>\r\n</ul>\r\n', 6000, 30, 'SW-26.jpg', 'BLACK EMBROIDERED SILK MERINO WOOLEN SW-26'),
(25, ' BLUE JACQUARD SHIRT GLW-16-06', 'Women', 'Gull', '<p>A blue jacquard loose-fit women&rsquo;s tunic with beaded buttons and an intricate maze of motifs blended into the fabric.</p>\r\n', 2290, 20, '131444-0.jpg', ' BLUE JACQUARD SHIRT GLW-16-06'),
(26, 'PINK FANCY CLUTCH 28613-4', 'Women', 'Gull', '<h1>PINK FANCY CLUTCH 28613-4</h1>\r\n', 2000, 9, 'DSC_0056.jpg', 'PINK FANCY CLUTCH 28613-4'),
(27, 'BROWN CASUAL CLUTCH DSB-384', 'Women', 'Gull', '<h1>BROWN CASUAL CLUTCH DSB-384</h1>\r\n', 2295, 9, '121007_1_grande.jpg', 'BROWN CASUAL CLUTCH DSB-384'),
(28, 'GREY CASUAL SHIRT CM-YD-1879', 'Men', 'Gull', '<h1>GREY CASUAL SHIRT CM-YD-1879</h1>\r\n', 1350, 10, '126004.jpg', 'GREY CASUAL SHIRT CM-YD-1879'),
(29, 'NAVY FORMAL SHIRT CM-YD-1814', 'Men', 'Gull', '<h1>NAVY FORMAL SHIRT CM-YD-1814</h1>\r\n', 1950, 10, '125635.jpg', 'NAVY FORMAL SHIRT CM-YD-1814'),
(30, 'BLACK PLAIN KURTA KP-1132', 'Men', 'Asim', '<h1>BLACK PLAIN KURTA KP-1132</h1>\r\n', 1470, 10, '125263_1.jpg', 'BLACK PLAIN KURTA KP-1132'),
(31, 'RUST HOODED ZIPPER JACKET JKT-HZJ-D16-2', 'Men', 'Asim', '<h1>RUST HOODED ZIPPER JACKET JKT-HZJ-D16-2</h1>\r\n', 1490, 10, 'JKT-HZJ-D16-2.jpg', 'RUST HOODED ZIPPER JACKET JKT-HZJ-D16-2'),
(32, 'Apple iPhone 7 Plus', 'Mobiles', 'Apple', '<table border="0" cellpadding="0" cellspacing="0" style="width:604px">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="row">OS</th>\r\n			<td>iOS 10 &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">Memory</th>\r\n			<td><strong>32GB</strong>&nbsp;built-in,&nbsp;<strong>2GB RAM</strong>&nbsp;&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">Processor</th>\r\n			<td><strong>Quad-core</strong>, Apple A10 Fusion<br />\r\n			<strong>GPU:</strong>&nbsp;(six-core graphics) &nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 77000, 5, 'hqdefault.jpg', 'Apple iPhone 7 Plus'),
(34, 'Samsung Galaxy S7 ', 'Mobiles', 'Samsung', '<table border="0" cellpadding="0" cellspacing="0" style="width:604px">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="row">OS</th>\r\n			<td>Android OS, v6.0 (Marshmallow) &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">Memory</th>\r\n			<td><strong>32/64GB</strong>&nbsp;built-in,&nbsp;<strong>4GB RAM</strong>, MicroSD Card (Support up to 200GB) &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">Processor</th>\r\n			<td><strong>Exynos 8890 Octa</strong>, Qualcomm MSM8996 Snapdragon 820<br />\r\n			<strong>GOPU:</strong>&nbsp;Adreno 530 &nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 62000, 10, '1-5960-1451894332.jpg', 'Samsung Galaxy S7 '),
(33, 'Apple iphone 5 ', 'Mobiles', 'I-phone', '<table border="0" cellpadding="0" cellspacing="0" style="width:604px">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="row">OS</th>\r\n			<td colspan="2"><strong>iOS 6</strong>&nbsp;&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">Memory</th>\r\n			<td colspan="2"><strong>32</strong>&nbsp;GB built-in &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row">Processor</th>\r\n			<td colspan="2"><strong>A6 Chip</strong>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 66000, 10, 'download.jpg', 'Apple iphone 5 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
