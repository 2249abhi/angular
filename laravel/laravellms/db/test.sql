-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 08:46 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussiness`
--

CREATE TABLE IF NOT EXISTS `bussiness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `service_interest` varchar(200) NOT NULL,
  `user_location` varchar(200) NOT NULL,
  `industry` varchar(200) NOT NULL,
  `freetrial` varchar(20) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `bphone` varchar(200) NOT NULL,
  `weburl` varchar(200) NOT NULL,
  `nlocation` varchar(200) NOT NULL,
  `btype` varchar(200) NOT NULL,
  `cregisdate` varchar(200) NOT NULL,
  `rba` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `regs_no` varchar(200) NOT NULL,
  `pba` varchar(200) NOT NULL,
  `pcity` varchar(200) NOT NULL,
  `pstate` varchar(200) NOT NULL,
  `pzip` varchar(200) NOT NULL,
  `avgsale` varchar(200) NOT NULL,
  `avgamt` varchar(200) NOT NULL,
  `maxt` varchar(200) NOT NULL,
  `transaction_type` varchar(200) NOT NULL,
  `vmd` varchar(200) NOT NULL,
  `amf` varchar(200) NOT NULL,
  `tmf` varchar(200) NOT NULL,
  `pb` varchar(200) NOT NULL,
  `bkexp` varchar(200) NOT NULL,
  `adc` varchar(200) NOT NULL,
  `adcamt` varchar(200) NOT NULL,
  `acd` varchar(200) NOT NULL,
  `cdetail` varchar(200) NOT NULL,
  `qsaname` varchar(200) NOT NULL,
  `saq` varchar(200) NOT NULL,
  `dlscan` varchar(200) NOT NULL,
  `svname` varchar(200) NOT NULL,
  `iyns` varchar(200) NOT NULL,
  `osp` varchar(200) NOT NULL,
  `csupport` varchar(200) NOT NULL,
  `ccallcentre` varchar(200) NOT NULL,
  `offer_email` varchar(200) NOT NULL,
  `dfulltime` varchar(200) NOT NULL,
  `delivery_proof` varchar(200) NOT NULL,
  `deliverycused` varchar(200) NOT NULL,
  `dtracking` varchar(200) NOT NULL,
  `revenue_model` varchar(200) NOT NULL,
  `acceptcc` varchar(200) NOT NULL,
  `usedcc` varchar(200) NOT NULL,
  `ma_terminated` varchar(200) NOT NULL,
  `ansexp` varchar(200) NOT NULL,
  `aformer` varchar(200) NOT NULL,
  `twprocessor` varchar(200) NOT NULL,
  `lreason` varchar(200) NOT NULL,
  `iname` varchar(200) NOT NULL,
  `pweburl` varchar(200) NOT NULL,
  `tradestart` varchar(200) NOT NULL,
  `step` int(5) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `admin` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New Lead',
  `account_status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `bussiness`
--

INSERT INTO `bussiness` (`id`, `user_id`, `fname`, `email`, `country`, `password`, `phone`, `company_name`, `service_interest`, `user_location`, `industry`, `freetrial`, `bname`, `bphone`, `weburl`, `nlocation`, `btype`, `cregisdate`, `rba`, `city`, `state`, `zip`, `regs_no`, `pba`, `pcity`, `pstate`, `pzip`, `avgsale`, `avgamt`, `maxt`, `transaction_type`, `vmd`, `amf`, `tmf`, `pb`, `bkexp`, `adc`, `adcamt`, `acd`, `cdetail`, `qsaname`, `saq`, `dlscan`, `svname`, `iyns`, `osp`, `csupport`, `ccallcentre`, `offer_email`, `dfulltime`, `delivery_proof`, `deliverycused`, `dtracking`, `revenue_model`, `acceptcc`, `usedcc`, `ma_terminated`, `ansexp`, `aformer`, `twprocessor`, `lreason`, `iname`, `pweburl`, `tradestart`, `step`, `created`, `updated`, `admin`, `status`, `account_status`, `created_at`, `updated_at`) VALUES
(12, '566ea372b0012', 'hitesh kumar', 'hitesh@mail.com', '', '123456', '546546554654', 'abhishek', 'Merchant Processing (High Risk)', 'United States - Pacific', '5', 'no', 'usiness Nam', '879879879879879879897', 'http://www.google.com', '2', 'Partnership General/Limited', '01/12/2015', ' Bussiness Address', 'sgdfghdfh', 'District of Columbia', '5654654', '2', '', '', 'Hawaii', '', '560000', '56465', '5465465', 'Lodging,Trade/Craft,Mail/Phone', 'no', 'no', '', 'no', '', 'no', '', 'no', '', '', '', '', '', 'no', '', 'no', 'no', 'no', 'elivery fulfilment Tim', 'f delivery an', 'no', '', 'revenue model so that we can present it to bank', 'no', 'no', 'no', 'es, Please explain why', 'State all Former / Current Process', 'with processor?', 'ocessor, what were you reason', 'us Incorporated Name', 'http://www.google.com', '03/12/2015', 1, '0000-00-00 00:00:00', '2016-03-25 15:57:03', '', 'In Process', '1', '', ''),
(16, '566ec4299e734', 'abc xyz', 'abc@xz.com', 'Armenia', 'e10adc3949ba59abbe56e057f20f883e', '466789965678', 'Company Na', 'Cash Advance', 'United States - Pacific', '11', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '0', '', ''),
(21, '566edb7a1d561', 'rohit', 'rohit@mail.com', 'Angola', 'e10adc3949ba59abbe56e057f20f883e', '999999999999', 'Company Name', 'Merchant Processing (High Risk)', 'United States - Mountain', '10', 'yes', 'Merchant Legal Business Name', '5465465446', 'http://www.google.com', '2', 'Partnership General/Limited', '08/12/2015', 'Bussiness Address', 'sgdfghdfh', 'Delaware', '321134', '2', '', '', 'Hawaii', '', '46554', '464', '54654', 'Retail,Restaurant,Lodging', 'no', 'no', '', 'no', '', 'no', '', 'no', '', '', '', '', '', 'no', '', 'no', 'no', 'no', 'ery fulfilment Time', ' of delivery and ', 'no', '', ' your revenue model so th', 'no', 'no', 'no', 's, Please explain why', '/ Current Processo', 'e with processo', 'ssor, what were you reas', 'corporated Names', 'http://www.google.com', '10/12/2015', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '1', '', ''),
(24, '566fc4bfceedc', 'ull Name', 'vishal@mail.com', 'Aland Islands', 'e10adc3949ba59abbe56e057f20f883e', '456789654112', 'ompany Name', 'Merchant Processing (High Risk)', 'United States - Mountain', '8', 'yes', 'l Business Name', '65465465445', 'http://www.google.com', '21', 'Corporation', '09/12/2015', 'ussiness Address', '213213', 'Armed Forces Europe', '123456', '213', '', '', 'Hawaii', '', '54654654654654654', '546464654654', '54654654654564654', 'Retail,Restaurant,Lodging', 'no', 'no', '', 'no', '', 'no', '', 'no', '', '', '', '', '', 'no', '', 'no', 'no', 'no', 'very fulfilment Time', 'u offer proof of delivery and ho', 'no', '', 'venue model so that we can present it to bank', 'no', 'no', 'no', 'ease explain why', 'er / Current Process', 'ith processor', 'at were you reasons f', '', '', '', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '0', '', ''),
(25, '566fce20376c6', 'anil kumar', 'anil@mail.com', 'Albania', 'e10adc3949ba59abbe56e057f20f883e', '777777777777', 'Company Nam', 'Merchant Processing (High Risk)', 'United States - Pacific', '3', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '1', '', ''),
(26, '566fe344778b1', 'rohit', 'aaaaa@mail.com', 'American Samoa', 'e10adc3949ba59abbe56e057f20f883e', '777777777777', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '0', '', ''),
(27, '566fe38549de4', 'hitesh kumar', 'sfsegdfg@mail.com', 'Angola', 'e10adc3949ba59abbe56e057f20f883e', '777777777777', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '1', '', ''),
(28, '56701e5183b71', 'abhi', 'ambuj.malviya@livetechnician.com', 'Bahamas', '4297f44b13955235245b2497399d7a93', '777777777777', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'New Lead', '1', '', ''),
(29, '5670259195d36', 'vishal', 'v@mail.com', 'Andorra', 'e10adc3949ba59abbe56e057f20f883e', '444444444444', 'my company', 'Merchant Processing (High Risk)', 'United States - Mountain', '7', 'yes', 'vishal bussiness name', '777777777777', 'http://www.vishal.com', '5', 'Corporation', '14/12/2015', 'vishal reg b address', 'delhi', 'Arkansas', '110025', '2', '', '', 'Hawaii', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'New Lead', '1', '', ''),
(31, '5671279667558', 'ajay kumar', 'ajay@mail.com', 'Armenia', 'e10adc3949ba59abbe56e057f20f883e', '44444444444', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'New Lead', '1', '', ''),
(38, '567132152134a', 'nitin', 'n@mail.com', 'Argentina', '', '444444444444', 'nitin company', 'Merchant Processing (High Risk)', 'United States - Mountain', '8', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5670259195d36', 'New Lead', '1', '', ''),
(39, '56713793ae2ed', 'navneet', 'navneet@mail.com', 'Congo', '', '456789899878', 'navneet company', 'Merchant Processing (High Risk)', 'United States - Mountain', '3', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5670259195d36', 'In Process', '1', '', ''),
(40, '56713972c28c5', 'karan', 'k@mail.com', 'Botswana', '', '777777777777', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5670259195d36', 'New Lead', '1', '', ''),
(41, '5671455104ae3', 'krishn kumar', 'kr@mail.com', 'Cook Islands', 'e10adc3949ba59abbe56e057f20f883e', '555555555555', 'krishna comp', 'Merchant Processing (High Risk)', 'United States - Mountain', '9', 'yes', 'krishna Business Info', '777777777777', 'http://www.google.com', '3', 'Sole Proprietor', '15/12/2015', 'Registered Bussi', 'sgdfghdfh', 'Colorado', '232131', '2', '', '', 'Hawaii', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '0', '', ''),
(42, '56717db6effe9', 'abhi shri', 'abhi@mail.com', 'India', 'e10adc3949ba59abbe56e057f20f883e', '777777777777', 'sdgdfg', 'Merchant Processing (High Risk)', 'India', '12', 'no', 'abhi shri', '754654654654', 'http://www.google.com', '1', 'Partnership General/Limited', '16/02/2016', 'sgfghdfhfd', 'gdghd', 'delhi', '110032', '123456', '', '', '', '', '4654654', '54654', '30', 'Retail,Restaurant', 'no', 'no', '', 'no', '', 'no', '', 'no', '', '', '', '', '', 'no', '', 'no', 'no', 'no', 'Delivery fulfilment Time', 'fer proof of delivery and how', 'no', '', 'sfdrgdfgh', 'no', 'no', 'no', 'drrghrth', '', '', 'fhfghjg', 'fjh', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'New Lead', '1', '', ''),
(43, '567298b1109d8', 'raj kumar', 'raj@mail.com', 'India', 'e10adc3949ba59abbe56e057f20f883e', '4654564654', 'raj complany', 'Cash Advance', 'India', '2', 'yes', 'raj kumar', '777777777777', '', '1', 'Sole Proprietor', '24/12/2015', 'raj bussiness', 'sdkajf', 'hrhty', '', 'vgdfgdlghk', '', 'fhfghbkkjnk', '', '', '', '', '', 'Lodging,Trade/Craft', 'no', 'no', '', 'no', '', 'no', '', 'no', '', '', '', '', '', 'no', '', 'yes', 'yes', 'no', '', '', 'no', '', '', '', '', '', '', '', '', '', '', '', '', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'In Process', '1', '', ''),
(44, '5672a07fb2f14', 'test', 'test@gm.com', 'Antigua and Barbuda', 'e10adc3949ba59abbe56e057f20f883e', '7777777777', 'test', 'Merchant Processing (High Risk)', 'Antigua and Barbuda', '1', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'New Lead', '1', '', ''),
(45, '5672a0e7103be', 'etst', 'rdf@fgna.com', 'United States', 'e10adc3949ba59abbe56e057f20f883e', '7777777777', 'rrrr', 'Merchant Processing (High Risk)', 'Iceland', '6', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'New Lead', '0', '', ''),
(46, '5698baeb4f9a2', 'abhi', 'aa@gmail.com', 'Albania', 'e10adc3949ba59abbe56e057f20f883e', '123444444444', 'comp', 'Merchant Processing (High Risk)', 'Algeria', '0', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, '2016-01-15 14:54:59', '0000-00-00 00:00:00', '', 'New Lead', '0', '', ''),
(47, '56b484416ab17', 'test', 'test@dfsgdf.com', 'Argentina', 'e10adc3949ba59abbe56e057f20f883e', '8745214521', 'rohit', 'Cash Advance', 'Argentina', '7', 'no', 'abhishek', '546546545465', 'http://www.google.com', '1', 'Sole Proprietor', '17/02/2016', 'sgfghdfhfd', 'sgdfghdfh', 'hrhty', '110032', '123456', '', '', '', '', '4654654', '65456465', '132132', 'Retail,Restaurant', 'no', 'no', '', 'no', '', 'no', '', 'no', '', '', '', '', '', 'no', '', 'yes', 'yes', 'yes', '220', 'fer proof of delivery and how', 'no', '', 'fsgfdghf', 'no', 'no', 'no', 'fertgrthyr', 'ryujtyui', '4565', 'gjjkhjkj', 'hkhklj', 'jkljkl', '01/03/2016', 7, '2016-02-05 16:45:13', '0000-00-00 00:00:00', '', 'New Lead', '1', '', ''),
(48, '56b4b15d3e230', 'abhi', 'gdfgdgdfg@mail.com', 'Algeria', 'e10adc3949ba59abbe56e057f20f883e', '888888888888', 'rohit', 'Cash Advance', 'Algeria', '12', 'yes', 'Merchant Legal Business Name', '888888888888', 'http://www.google.com', '1', 'Limited Liability Corp', '08/02/2016', 'sgfghdfhfd', 'sgdfghdfh', 'delhi', '110032', 'abcdef', '', '', '', '', '4654654', '65456465', '65465465', 'Retail,Restaurant', 'no', 'no', '', 'no', '', 'no', '', 'no', '', '', '', '', '', 'no', '', 'no', 'no', 'no', 'Delivery fulfilment Time', 'fer proof of delivery and how', 'no', '', 'sdgdfhg', 'no', 'no', 'no', 'sfgsgf', 'dghfghf', '23', 'fghfghgf', '', '', '', 6, '2016-02-05 19:57:41', '0000-00-00 00:00:00', '', 'In Process', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `updatetime` timestamp NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New Lead',
  `user_status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `comment`, `updatetime`, `status`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'abc@xyz.com', '8465465465', 'The traditional way of doing business has seen a tremendous change ever since the inception of payment gateway services, not just in Australia but all over the world. Now the old procedure for online payments involving multiple entities has been taken over by the new process of involving just your merchant account and your customers. The wait in clearing online transactions is over now. The new process has not just made the transaction of payments and the flow of money faster but it has also made it easier, cheaper and safer for everyone.', '2016-03-22 15:08:15', 'New Lead', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL DEFAULT '',
  `code` char(2) NOT NULL DEFAULT '',
  `code3` char(3) NOT NULL,
  `phone_code` int(7) NOT NULL,
  `postcode_required` tinyint(1) NOT NULL DEFAULT '0',
  `isEU` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `code3`, `phone_code`, `postcode_required`, `isEU`) VALUES
(1, 'United States', 'US', 'USA', 1, 0, 0),
(2, 'Canada', 'CA', 'CAN', 1, 0, 0),
(3, 'Afghanistan', 'AF', 'AFG', 93, 0, 0),
(4, 'Albania', 'AL', 'ALB', 355, 0, 0),
(5, 'Algeria', 'DZ', 'DZA', 213, 0, 0),
(6, 'American Samoa', 'DS', 'ASM', 44, 0, 0),
(7, 'Andorra', 'AD', 'AND', 376, 0, 0),
(8, 'Angola', 'AO', 'AGO', 244, 0, 0),
(9, 'Anguilla', 'AI', 'AIA', 1264, 0, 0),
(10, 'Antarctica', 'AQ', 'ATA', 672, 0, 0),
(11, 'Antigua and Barbuda', 'AG', 'ATG', 1268, 0, 0),
(12, 'Argentina', 'AR', 'ARG', 54, 0, 0),
(13, 'Armenia', 'AM', 'ARM', 374, 0, 0),
(14, 'Aruba', 'AW', 'ABW', 297, 0, 0),
(15, 'Australia', 'AU', 'AUS', 61, 0, 0),
(16, 'Austria', 'AT', 'AUT', 43, 0, 1),
(17, 'Azerbaijan', 'AZ', 'AZE', 994, 0, 0),
(18, 'Bahamas', 'BS', 'BHS', 1242, 0, 0),
(19, 'Bahrain', 'BH', 'BHR', 973, 0, 0),
(20, 'Bangladesh', 'BD', 'BGD', 880, 0, 0),
(21, 'Barbados', 'BB', 'BRB', 1246, 0, 0),
(22, 'Belarus', 'BY', 'BLR', 375, 0, 0),
(23, 'Belgium', 'BE', 'BEL', 32, 0, 1),
(24, 'Belize', 'BZ', 'BLZ', 501, 0, 0),
(25, 'Benin', 'BJ', 'BEN', 229, 0, 0),
(26, 'Bermuda', 'BM', 'BMU', 1441, 0, 0),
(27, 'Bhutan', 'BT', 'BTN', 975, 0, 0),
(28, 'Bolivia', 'BO', 'BOL', 591, 0, 0),
(29, 'Bosnia and Herzegovina', 'BA', 'BIH', 387, 0, 0),
(30, 'Botswana', 'BW', 'BWA', 267, 0, 0),
(31, 'Bouvet Island', 'BV', '', 44, 0, 0),
(32, 'Brazil', 'BR', 'BRA', 55, 0, 0),
(34, 'Brunei Darussalam', 'BN', 'BRN', 673, 0, 0),
(35, 'Bulgaria', 'BG', 'BGR', 359, 0, 1),
(36, 'Burkina Faso', 'BF', 'BFA', 226, 0, 0),
(37, 'Burundi', 'BI', 'BDI', 257, 0, 0),
(38, 'Cambodia', 'KH', 'KHM', 855, 0, 0),
(39, 'Cameroon', 'CM', 'CMR', 237, 0, 0),
(40, 'Cape Verde', 'CV', 'CPV', 238, 0, 0),
(41, 'Cayman Islands', 'KY', 'CYM', 1345, 0, 0),
(42, 'Central African Republic', 'CF', 'CAF', 236, 0, 0),
(43, 'Chad', 'TD', 'TCD', 235, 0, 0),
(44, 'Chile', 'CL', 'CHL', 56, 0, 0),
(45, 'China', 'CN', 'CHN', 86, 0, 0),
(46, 'Christmas Island', 'CX', 'CXR', 61, 0, 0),
(47, 'Cocos (Keeling) Islands', 'CC', 'CCK', 61, 0, 0),
(48, 'Colombia', 'CO', 'COL', 57, 0, 0),
(49, 'Comoros', 'KM', 'COM', 269, 0, 0),
(50, 'Congo', 'CG', 'COG', 242, 0, 0),
(51, 'Cook Islands', 'CK', 'COK', 682, 0, 0),
(52, 'Costa Rica', 'CR', 'CRC', 506, 0, 0),
(53, 'Croatia (Hrvatska)', 'HR', 'HRV', 385, 0, 0),
(54, 'Cuba', 'CU', 'CUB', 53, 0, 0),
(55, 'Cyprus', 'CY', 'CYP', 357, 0, 1),
(56, 'Czech Republic', 'CZ', 'CZE', 420, 0, 1),
(57, 'Denmark', 'DK', 'DNK', 45, 0, 1),
(58, 'Djibouti', 'DJ', 'DJI', 253, 0, 0),
(59, 'Dominica', 'DM', 'DMA', 1767, 0, 0),
(60, 'Dominican Republic', 'DO', 'DOM', 1809, 0, 0),
(61, 'East Timor', 'TP', '', 44, 0, 0),
(62, 'Ecuador', 'EC', 'ECU', 593, 0, 0),
(63, 'Egypt', 'EG', 'EGY', 20, 0, 0),
(64, 'El Salvador', 'SV', 'SLV', 503, 0, 0),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 240, 0, 0),
(66, 'Eritrea', 'ER', 'ERI', 291, 0, 0),
(67, 'Estonia', 'EE', 'EST', 372, 0, 1),
(68, 'Ethiopia', 'ET', 'ETH', 251, 0, 0),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 500, 0, 0),
(70, 'Faroe Islands', 'FO', 'FRO', 298, 0, 0),
(71, 'Fiji', 'FJ', 'FJI', 679, 0, 0),
(72, 'Finland', 'FI', 'FIN', 358, 0, 1),
(73, 'France', 'FR', 'FRA', 33, 0, 1),
(74, 'France, Metropolitan', 'FX', '', 44, 0, 0),
(75, 'French Guiana', 'GF', '', 44, 0, 0),
(76, 'French Polynesia', 'PF', 'PYF', 689, 0, 0),
(77, 'French Southern Territories', 'TF', '', 44, 0, 0),
(78, 'Gabon', 'GA', 'GAB', 241, 0, 0),
(79, 'Gambia', 'GM', 'GMB', 220, 0, 0),
(80, 'Georgia', 'GE', 'GEO', 995, 0, 0),
(81, 'Germany', 'DE', 'DEU', 49, 0, 1),
(82, 'Ghana', 'GH', 'GHA', 233, 0, 0),
(83, 'Gibraltar', 'GI', 'GIB', 350, 0, 0),
(84, 'Greece', 'GR', 'GRC', 30, 0, 1),
(85, 'Greenland', 'GL', 'GRL', 299, 0, 0),
(86, 'Grenada', 'GD', 'GRD', 1473, 0, 0),
(87, 'Guadeloupe', 'GP', '', 44, 0, 0),
(88, 'Guam', 'GU', 'GUM', 1671, 0, 0),
(89, 'Guatemala', 'GT', 'GTM', 502, 0, 0),
(90, 'Guinea', 'GN', 'GIN', 224, 0, 0),
(91, 'Guinea-Bissau', 'GW', 'GNB', 245, 0, 0),
(92, 'Guyana', 'GY', 'GUY', 592, 0, 0),
(93, 'Haiti', 'HT', 'HTI', 509, 0, 0),
(94, 'Heard and Mc Donald Islands', 'HM', '', 44, 0, 0),
(95, 'Honduras', 'HN', 'HND', 504, 0, 0),
(96, 'Hong Kong', 'HK', 'HKG', 852, 0, 0),
(97, 'Hungary', 'HU', 'HUN', 36, 0, 1),
(98, 'Iceland', 'IS', 'IS', 354, 0, 0),
(99, 'India', 'IN', 'IND', 91, 0, 0),
(100, 'Indonesia', 'ID', 'IDN', 62, 0, 0),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 98, 0, 0),
(102, 'Iraq', 'IQ', 'IRQ', 964, 0, 0),
(103, 'Ireland', 'IE', 'IRL', 353, 0, 1),
(104, 'Israel', 'IL', 'ISR', 972, 0, 0),
(105, 'Italy', 'IT', 'ITA', 39, 0, 1),
(106, 'Ivory Coast', 'CI', 'CIV', 225, 0, 0),
(107, 'Jamaica', 'JM', 'JAM', 1876, 0, 0),
(108, 'Japan', 'JP', 'JPN', 81, 0, 0),
(109, 'Jordan', 'JO', 'JOR', 962, 0, 0),
(110, 'Kazakhstan', 'KZ', 'KAZ', 7, 0, 0),
(111, 'Kenya', 'KE', 'KEN', 254, 0, 0),
(112, 'Kiribati', 'KI', 'KIR', 686, 0, 0),
(113, 'Korea, Democratic People''s Republic of', 'KP', 'PRK', 850, 0, 0),
(114, 'Korea, Republic of', 'KR', 'KOR', 82, 0, 0),
(115, 'Kuwait', 'KW', 'KWT', 965, 0, 0),
(116, 'Kyrgyzstan', 'KG', 'KGZ', 996, 0, 0),
(117, 'Lao People''s Democratic Republic', 'LA', 'LAO', 856, 0, 0),
(118, 'Latvia', 'LV', 'LVA', 371, 0, 1),
(119, 'Lebanon', 'LB', 'LBN', 961, 0, 0),
(120, 'Lesotho', 'LS', 'LSO', 266, 0, 0),
(121, 'Liberia', 'LR', 'LBR', 231, 0, 0),
(122, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 218, 0, 0),
(123, 'Liechtenstein', 'LI', 'LIE', 423, 0, 0),
(124, 'Lithuania', 'LT', 'LTU', 370, 0, 1),
(125, 'Luxembourg', 'LU', 'LUX', 352, 0, 1),
(126, 'Macau', 'MO', 'MAC', 853, 0, 0),
(127, 'Macedonia', 'MK', 'MKD', 389, 0, 0),
(128, 'Madagascar', 'MG', 'MDG', 261, 0, 0),
(129, 'Malawi', 'MW', 'MWI', 265, 0, 0),
(130, 'Malaysia', 'MY', 'MYS', 60, 0, 0),
(131, 'Maldives', 'MV', 'MDV', 960, 0, 0),
(132, 'Mali', 'ML', 'MLI', 223, 0, 0),
(133, 'Malta', 'MT', 'MLT', 356, 0, 1),
(134, 'Marshall Islands', 'MH', 'MHL', 692, 0, 0),
(135, 'Martinique', 'MQ', '', 44, 0, 0),
(136, 'Mauritania', 'MR', 'MRT', 222, 0, 0),
(137, 'Mauritius', 'MU', 'MUS', 230, 0, 0),
(138, 'Mayotte', 'TY', 'MYT', 262, 0, 0),
(139, 'Mexico', 'MX', 'MEX', 52, 0, 0),
(140, 'Micronesia, Federated States of', 'FM', 'FSM', 691, 0, 0),
(141, 'Moldova, Republic of', 'MD', 'MDA', 373, 0, 0),
(142, 'Monaco', 'MC', 'MCO', 377, 0, 0),
(143, 'Mongolia', 'MN', 'MNG', 976, 0, 0),
(144, 'Montserrat', 'MS', 'MSR', 1664, 0, 0),
(145, 'Morocco', 'MA', 'MAR', 212, 0, 0),
(146, 'Mozambique', 'MZ', 'MOZ', 258, 0, 0),
(147, 'Myanmar', 'MM', 'MMR', 95, 0, 0),
(148, 'Namibia', 'NA', 'NAM', 264, 0, 0),
(149, 'Nauru', 'NR', 'NRU', 674, 0, 0),
(150, 'Nepal', 'NP', 'NPL', 977, 0, 0),
(151, 'Netherlands', 'NL', 'NLD', 31, 0, 1),
(152, 'Netherlands Antilles', 'AN', 'ANT', 599, 0, 0),
(153, 'New Caledonia', 'NC', 'NCL', 687, 0, 0),
(154, 'New Zealand', 'NZ', 'NZL', 64, 0, 0),
(155, 'Nicaragua', 'NI', 'NIC', 505, 0, 0),
(156, 'Niger', 'NE', 'NER', 227, 0, 0),
(157, 'Nigeria', 'NG', 'NGA', 234, 0, 0),
(158, 'Niue', 'NU', 'NIU', 683, 0, 0),
(159, 'Norfork Island', 'NF', '', 44, 0, 0),
(160, 'Northern Mariana Islands', 'MP', 'MNP', 1670, 0, 0),
(161, 'Norway', 'NO', 'NOR', 47, 0, 0),
(162, 'Oman', 'OM', 'OMN', 968, 0, 0),
(163, 'Pakistan', 'PK', 'PAK', 92, 0, 0),
(164, 'Palau', 'PW', 'PLW', 680, 0, 0),
(165, 'Panama', 'PA', 'PAN', 507, 0, 0),
(166, 'Papua New Guinea', 'PG', 'PNG', 675, 0, 0),
(167, 'Paraguay', 'PY', 'PRY', 595, 0, 0),
(168, 'Peru', 'PE', 'PER', 51, 0, 0),
(169, 'Philippines', 'PH', 'PHL', 63, 0, 0),
(170, 'Pitcairn', 'PN', 'PCN', 870, 0, 0),
(171, 'Poland', 'PL', 'POL', 48, 0, 1),
(172, 'Portugal', 'PT', 'PRT', 351, 0, 1),
(173, 'Puerto Rico', 'PR', 'PRI', 1, 0, 0),
(174, 'Qatar', 'QA', 'QAT', 974, 0, 0),
(175, 'Reunion', 'RE', '', 44, 0, 0),
(176, 'Romania', 'RO', 'ROU', 40, 0, 1),
(177, 'Russian Federation', 'RU', 'RUS', 7, 0, 0),
(178, 'Rwanda', 'RW', 'RWA', 250, 0, 0),
(179, 'Saint Kitts and Nevis', 'KN', 'KNA', 1869, 0, 0),
(180, 'Saint Lucia', 'LC', 'LCA', 1758, 0, 0),
(181, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1784, 0, 0),
(182, 'Samoa', 'WS', 'WSM', 685, 0, 0),
(183, 'San Marino', 'SM', 'SMR', 378, 0, 0),
(184, 'Sao Tome and Principe', 'ST', 'STP', 239, 0, 0),
(185, 'Saudi Arabia', 'SA', 'SAU', 966, 0, 0),
(186, 'Senegal', 'SN', 'SEN', 221, 0, 0),
(187, 'Seychelles', 'SC', 'SYC', 248, 0, 0),
(188, 'Sierra Leone', 'SL', 'SLE', 232, 0, 0),
(189, 'Singapore', 'SG', 'SGP', 65, 0, 0),
(190, 'Slovakia', 'SK', 'SVK', 421, 0, 1),
(191, 'Slovenia', 'SI', 'SVN', 386, 0, 1),
(192, 'Solomon Islands', 'SB', 'SLB', 677, 0, 0),
(193, 'Somalia', 'SO', 'SOM', 252, 0, 0),
(194, 'South Africa', 'ZA', 'ZAF', 27, 0, 0),
(195, 'South Georgia South Sandwich Islands', 'GS', '', 44, 0, 0),
(196, 'Spain', 'ES', 'ESP', 34, 0, 1),
(197, 'Sri Lanka', 'LK', 'LKA', 94, 0, 0),
(198, 'St. Helena', 'SH', 'SHN', 290, 0, 0),
(199, 'St. Pierre and Miquelon', 'PM', 'SPM', 508, 0, 0),
(200, 'Sudan', 'SD', 'SDN', 249, 0, 0),
(201, 'Suriname', 'SR', 'SUR', 597, 0, 0),
(203, 'Swaziland', 'SZ', 'SWZ', 268, 0, 0),
(204, 'Sweden', 'SE', 'SWE', 46, 0, 1),
(205, 'Switzerland', 'CH', 'CHE', 41, 0, 0),
(206, 'Syrian Arab Republic', 'SY', 'SYR', 963, 0, 0),
(207, 'Taiwan', 'TW', 'TWN', 886, 0, 0),
(208, 'Tajikistan', 'TJ', 'TJK', 992, 0, 0),
(209, 'Tanzania, United Republic of', 'TZ', 'TZA', 255, 0, 0),
(210, 'Thailand', 'TH', 'THA', 66, 0, 0),
(211, 'Togo', 'TG', 'TGO', 228, 0, 0),
(212, 'Tokelau', 'TK', 'TKL', 690, 0, 0),
(213, 'Tonga', 'TO', 'TON', 676, 0, 0),
(214, 'Trinidad and Tobago', 'TT', 'TTO', 1868, 0, 0),
(215, 'Tunisia', 'TN', 'TUN', 216, 0, 0),
(216, 'Turkey', 'TR', 'TUR', 90, 0, 0),
(217, 'Turkmenistan', 'TM', 'TKM', 993, 0, 0),
(218, 'Turks and Caicos Islands', 'TC', 'TCA', 1649, 0, 0),
(219, 'Tuvalu', 'TV', 'TUV', 688, 0, 0),
(220, 'Uganda', 'UG', 'UGA', 256, 0, 0),
(221, 'Ukraine', 'UA', 'UKR', 380, 0, 0),
(222, 'United Arab Emirates', 'AE', 'ARE', 971, 0, 0),
(223, 'United Kingdom', 'GB', 'GBR', 44, 1, 1),
(224, 'United States minor outlying islands', 'UM', '', 44, 0, 0),
(225, 'Uruguay', 'UY', 'URY', 598, 0, 0),
(226, 'Uzbekistan', 'UZ', 'UZB', 998, 0, 0),
(227, 'Vanuatu', 'VU', 'VUT', 678, 0, 0),
(228, 'Vatican City State', 'VA', 'VAT', 39, 0, 0),
(229, 'Venezuela', 'VE', 'VEN', 58, 0, 0),
(230, 'Vietnam', 'VN', 'VNM', 84, 0, 0),
(231, 'Virigan Islands (British)', 'VG', 'VGB', 1284, 0, 0),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1340, 0, 0),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', 681, 0, 0),
(235, 'Yemen', 'YE', 'YEM', 967, 0, 0),
(236, 'Yugoslavia', 'YU', '', 44, 0, 0),
(237, 'Zaire', 'ZR', '', 44, 0, 0),
(238, 'Zambia', 'ZM', 'ZMB', 260, 0, 0),
(239, 'Zimbabwe', 'ZW', 'ZWE', 263, 0, 0),
(240, 'Kosovo', 'XK', '', 381, 0, 0),
(243, 'Montenegro', 'ME', 'MNE', 382, 0, 0),
(386, 'Serbia', 'RS', 'SRB', 381, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `country_details`
--

CREATE TABLE IF NOT EXISTS `country_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `cc` varchar(5) NOT NULL,
  `capital` varchar(250) NOT NULL,
  `currency` varchar(250) NOT NULL,
  `language` varchar(250) NOT NULL,
  `religion` varchar(250) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=387 ;

--
-- Dumping data for table `country_details`
--

INSERT INTO `country_details` (`id`, `country`, `cc`, `capital`, `currency`, `language`, `religion`, `info`) VALUES
(1, 'United States', 'US', '', '', '', '', ''),
(2, 'Canada', 'CA', '', '', '', '', ''),
(3, 'Afghanistan', 'AF', '', '', '', '', ''),
(4, 'Albania', 'AL', '', '', '', '', ''),
(5, 'Algeria', 'DZ', '', '', '', '', ''),
(6, 'American Samoa', 'DS', '', '', '', '', ''),
(7, 'Andorra', 'AD', '', '', '', '', ''),
(8, 'Angola', 'AO', '', '', '', '', ''),
(9, 'Anguilla', 'AI', '', '', '', '', ''),
(10, 'Antarctica', 'AQ', '', '', '', '', ''),
(11, 'Antigua and Barbuda', 'AG', '', '', '', '', ''),
(12, 'Argentina', 'AR', '', '', '', '', ''),
(13, 'Armenia', 'AM', '', '', '', '', ''),
(14, 'Aruba', 'AW', '', '', '', '', ''),
(15, 'Australia', 'AU', '', '', '', '', ''),
(16, 'Austria', 'AT', '', '', '', '', ''),
(17, 'Azerbaijan', 'AZ', '', '', '', '', ''),
(18, 'Bahamas', 'BS', '', '', '', '', ''),
(19, 'Bahrain', 'BH', '', '', '', '', ''),
(20, 'Bangladesh', 'BD', '', '', '', '', ''),
(21, 'Barbados', 'BB', '', '', '', '', ''),
(22, 'Belarus', 'BY', '', '', '', '', ''),
(23, 'Belgium', 'BE', '', '', '', '', ''),
(24, 'Belize', 'BZ', '', '', '', '', ''),
(25, 'Benin', 'BJ', '', '', '', '', ''),
(26, 'Bermuda', 'BM', '', '', '', '', ''),
(27, 'Bhutan', 'BT', '', '', '', '', ''),
(28, 'Bolivia', 'BO', '', '', '', '', ''),
(29, 'Bosnia and Herzegovina', 'BA', '', '', '', '', ''),
(30, 'Botswana', 'BW', '', '', '', '', ''),
(31, 'Bouvet Island', 'BV', '', '', '', '', ''),
(32, 'Brazil', 'BR', '', '', '', '', ''),
(34, 'Brunei Darussalam', 'BN', '', '', '', '', ''),
(35, 'Bulgaria', 'BG', '', '', '', '', ''),
(36, 'Burkina Faso', 'BF', '', '', '', '', ''),
(37, 'Burundi', 'BI', '', '', '', '', ''),
(38, 'Cambodia', 'KH', '', '', '', '', ''),
(39, 'Cameroon', 'CM', '', '', '', '', ''),
(40, 'Cape Verde', 'CV', '', '', '', '', ''),
(41, 'Cayman Islands', 'KY', '', '', '', '', ''),
(42, 'Central African Republic', 'CF', '', '', '', '', ''),
(43, 'Chad', 'TD', '', '', '', '', ''),
(44, 'Chile', 'CL', '', '', '', '', ''),
(45, 'China', 'CN', '', '', '', '', ''),
(46, 'Christmas Island', 'CX', '', '', '', '', ''),
(47, 'Cocos (Keeling) Islands', 'CC', '', '', '', '', ''),
(48, 'Colombia', 'CO', '', '', '', '', ''),
(49, 'Comoros', 'KM', '', '', '', '', ''),
(50, 'Congo', 'CG', '', '', '', '', ''),
(51, 'Cook Islands', 'CK', '', '', '', '', ''),
(52, 'Costa Rica', 'CR', '', '', '', '', ''),
(53, 'Croatia (Hrvatska)', 'HR', '', '', '', '', ''),
(54, 'Cuba', 'CU', '', '', '', '', ''),
(55, 'Cyprus', 'CY', '', '', '', '', ''),
(56, 'Czech Republic', 'CZ', '', '', '', '', ''),
(57, 'Denmark', 'DK', '', '', '', '', ''),
(58, 'Djibouti', 'DJ', '', '', '', '', ''),
(59, 'Dominica', 'DM', '', '', '', '', ''),
(60, 'Dominican Republic', 'DO', '', '', '', '', ''),
(61, 'East Timor', 'TP', '', '', '', '', ''),
(62, 'Ecuador', 'EC', '', '', '', '', ''),
(63, 'Egypt', 'EG', '', '', '', '', ''),
(64, 'El Salvador', 'SV', '', '', '', '', ''),
(65, 'Equatorial Guinea', 'GQ', '', '', '', '', ''),
(66, 'Eritrea', 'ER', '', '', '', '', ''),
(67, 'Estonia', 'EE', '', '', '', '', ''),
(68, 'Ethiopia', 'ET', '', '', '', '', ''),
(69, 'Falkland Islands (Malvinas)', 'FK', '', '', '', '', ''),
(70, 'Faroe Islands', 'FO', '', '', '', '', ''),
(71, 'Fiji', 'FJ', '', '', '', '', ''),
(72, 'Finland', 'FI', '', '', '', '', ''),
(73, 'France', 'FR', '', '', '', '', ''),
(74, 'France, Metropolitan', 'FX', '', '', '', '', ''),
(75, 'French Guiana', 'GF', '', '', '', '', ''),
(76, 'French Polynesia', 'PF', '', '', '', '', ''),
(77, 'French Southern Territories', 'TF', '', '', '', '', ''),
(78, 'Gabon', 'GA', '', '', '', '', ''),
(79, 'Gambia', 'GM', '', '', '', '', ''),
(80, 'Georgia', 'GE', '', '', '', '', ''),
(81, 'Germany', 'DE', '', '', '', '', ''),
(82, 'Ghana', 'GH', '', '', '', '', ''),
(83, 'Gibraltar', 'GI', '', '', '', '', ''),
(84, 'Greece', 'GR', '', '', '', '', ''),
(85, 'Greenland', 'GL', '', '', '', '', ''),
(86, 'Grenada', 'GD', '', '', '', '', ''),
(87, 'Guadeloupe', 'GP', '', '', '', '', ''),
(88, 'Guam', 'GU', '', '', '', '', ''),
(89, 'Guatemala', 'GT', '', '', '', '', ''),
(90, 'Guinea', 'GN', '', '', '', '', ''),
(91, 'Guinea-Bissau', 'GW', '', '', '', '', ''),
(92, 'Guyana', 'GY', '', '', '', '', ''),
(93, 'Haiti', 'HT', '', '', '', '', ''),
(94, 'Heard and Mc Donald Islands', 'HM', '', '', '', '', ''),
(95, 'Honduras', 'HN', '', '', '', '', ''),
(96, 'Hong Kong', 'HK', '', '', '', '', ''),
(97, 'Hungary', 'HU', '', '', '', '', ''),
(98, 'Iceland', 'IS', '', '', '', '', ''),
(99, 'India', 'IN', '', '', '', '', ''),
(100, 'Indonesia', 'ID', '', '', '', '', ''),
(101, 'Iran (Islamic Republic of)', 'IR', '', '', '', '', ''),
(102, 'Iraq', 'IQ', '', '', '', '', ''),
(103, 'Ireland', 'IE', '', '', '', '', ''),
(104, 'Israel', 'IL', '', '', '', '', ''),
(105, 'Italy', 'IT', '', '', '', '', ''),
(106, 'Ivory Coast', 'CI', '', '', '', '', ''),
(107, 'Jamaica', 'JM', '', '', '', '', ''),
(108, 'Japan', 'JP', '', '', '', '', ''),
(109, 'Jordan', 'JO', '', '', '', '', ''),
(110, 'Kazakhstan', 'KZ', '', '', '', '', ''),
(111, 'Kenya', 'KE', '', '', '', '', ''),
(112, 'Kiribati', 'KI', '', '', '', '', ''),
(113, 'Korea, Democratic People''s Republic of', 'KP', '', '', '', '', ''),
(114, 'Korea, Republic of', 'KR', '', '', '', '', ''),
(115, 'Kuwait', 'KW', '', '', '', '', ''),
(116, 'Kyrgyzstan', 'KG', '', '', '', '', ''),
(117, 'Lao People''s Democratic Republic', 'LA', '', '', '', '', ''),
(118, 'Latvia', 'LV', '', '', '', '', ''),
(119, 'Lebanon', 'LB', '', '', '', '', ''),
(120, 'Lesotho', 'LS', '', '', '', '', ''),
(121, 'Liberia', 'LR', '', '', '', '', ''),
(122, 'Libyan Arab Jamahiriya', 'LY', '', '', '', '', ''),
(123, 'Liechtenstein', 'LI', '', '', '', '', ''),
(124, 'Lithuania', 'LT', '', '', '', '', ''),
(125, 'Luxembourg', 'LU', '', '', '', '', ''),
(126, 'Macau', 'MO', '', '', '', '', ''),
(127, 'Macedonia', 'MK', '', '', '', '', ''),
(128, 'Madagascar', 'MG', '', '', '', '', ''),
(129, 'Malawi', 'MW', '', '', '', '', ''),
(130, 'Malaysia', 'MY', '', '', '', '', ''),
(131, 'Maldives', 'MV', '', '', '', '', ''),
(132, 'Mali', 'ML', '', '', '', '', ''),
(133, 'Malta', 'MT', '', '', '', '', ''),
(134, 'Marshall Islands', 'MH', '', '', '', '', ''),
(135, 'Martinique', 'MQ', '', '', '', '', ''),
(136, 'Mauritania', 'MR', '', '', '', '', ''),
(137, 'Mauritius', 'MU', '', '', '', '', ''),
(138, 'Mayotte', 'TY', '', '', '', '', ''),
(139, 'Mexico', 'MX', '', '', '', '', ''),
(140, 'Micronesia, Federated States of', 'FM', '', '', '', '', ''),
(141, 'Moldova, Republic of', 'MD', '', '', '', '', ''),
(142, 'Monaco', 'MC', '', '', '', '', ''),
(143, 'Mongolia', 'MN', '', '', '', '', ''),
(144, 'Montserrat', 'MS', '', '', '', '', ''),
(145, 'Morocco', 'MA', '', '', '', '', ''),
(146, 'Mozambique', 'MZ', '', '', '', '', ''),
(147, 'Myanmar', 'MM', '', '', '', '', ''),
(148, 'Namibia', 'NA', '', '', '', '', ''),
(149, 'Nauru', 'NR', '', '', '', '', ''),
(150, 'Nepal', 'NP', '', '', '', '', ''),
(151, 'Netherlands', 'NL', '', '', '', '', ''),
(152, 'Netherlands Antilles', 'AN', '', '', '', '', ''),
(153, 'New Caledonia', 'NC', '', '', '', '', ''),
(154, 'New Zealand', 'NZ', '', '', '', '', ''),
(155, 'Nicaragua', 'NI', '', '', '', '', ''),
(156, 'Niger', 'NE', '', '', '', '', ''),
(157, 'Nigeria', 'NG', '', '', '', '', ''),
(158, 'Niue', 'NU', '', '', '', '', ''),
(159, 'Norfork Island', 'NF', '', '', '', '', ''),
(160, 'Northern Mariana Islands', 'MP', '', '', '', '', ''),
(161, 'Norway', 'NO', '', '', '', '', ''),
(162, 'Oman', 'OM', '', '', '', '', ''),
(163, 'Pakistan', 'PK', '', '', '', '', ''),
(164, 'Palau', 'PW', '', '', '', '', ''),
(165, 'Panama', 'PA', '', '', '', '', ''),
(166, 'Papua New Guinea', 'PG', '', '', '', '', ''),
(167, 'Paraguay', 'PY', '', '', '', '', ''),
(168, 'Peru', 'PE', '', '', '', '', ''),
(169, 'Philippines', 'PH', '', '', '', '', ''),
(170, 'Pitcairn', 'PN', '', '', '', '', ''),
(171, 'Poland', 'PL', '', '', '', '', ''),
(172, 'Portugal', 'PT', '', '', '', '', ''),
(173, 'Puerto Rico', 'PR', '', '', '', '', ''),
(174, 'Qatar', 'QA', '', '', '', '', ''),
(175, 'Reunion', 'RE', '', '', '', '', ''),
(176, 'Romania', 'RO', '', '', '', '', ''),
(177, 'Russian Federation', 'RU', '', '', '', '', ''),
(178, 'Rwanda', 'RW', '', '', '', '', ''),
(179, 'Saint Kitts and Nevis', 'KN', '', '', '', '', ''),
(180, 'Saint Lucia', 'LC', '', '', '', '', ''),
(181, 'Saint Vincent and the Grenadines', 'VC', '', '', '', '', ''),
(182, 'Samoa', 'WS', '', '', '', '', ''),
(183, 'San Marino', 'SM', '', '', '', '', ''),
(184, 'Sao Tome and Principe', 'ST', '', '', '', '', ''),
(185, 'Saudi Arabia', 'SA', '', '', '', '', ''),
(186, 'Senegal', 'SN', '', '', '', '', ''),
(187, 'Seychelles', 'SC', '', '', '', '', ''),
(188, 'Sierra Leone', 'SL', '', '', '', '', ''),
(189, 'Singapore', 'SG', '', '', '', '', ''),
(190, 'Slovakia', 'SK', '', '', '', '', ''),
(191, 'Slovenia', 'SI', '', '', '', '', ''),
(192, 'Solomon Islands', 'SB', '', '', '', '', ''),
(193, 'Somalia', 'SO', '', '', '', '', ''),
(194, 'South Africa', 'ZA', '', '', '', '', ''),
(195, 'South Georgia South Sandwich Islands', 'GS', '', '', '', '', ''),
(196, 'Spain', 'ES', '', '', '', '', ''),
(197, 'Sri Lanka', 'LK', '', '', '', '', ''),
(198, 'St. Helena', 'SH', '', '', '', '', ''),
(199, 'St. Pierre and Miquelon', 'PM', '', '', '', '', ''),
(200, 'Sudan', 'SD', '', '', '', '', ''),
(201, 'Suriname', 'SR', '', '', '', '', ''),
(203, 'Swaziland', 'SZ', '', '', '', '', ''),
(204, 'Sweden', 'SE', '', '', '', '', ''),
(205, 'Switzerland', 'CH', '', '', '', '', ''),
(206, 'Syrian Arab Republic', 'SY', '', '', '', '', ''),
(207, 'Taiwan', 'TW', '', '', '', '', ''),
(208, 'Tajikistan', 'TJ', '', '', '', '', ''),
(209, 'Tanzania, United Republic of', 'TZ', '', '', '', '', ''),
(210, 'Thailand', 'TH', '', '', '', '', ''),
(211, 'Togo', 'TG', '', '', '', '', ''),
(212, 'Tokelau', 'TK', '', '', '', '', ''),
(213, 'Tonga', 'TO', '', '', '', '', ''),
(214, 'Trinidad and Tobago', 'TT', '', '', '', '', ''),
(215, 'Tunisia', 'TN', '', '', '', '', ''),
(216, 'Turkey', 'TR', '', '', '', '', ''),
(217, 'Turkmenistan', 'TM', '', '', '', '', ''),
(218, 'Turks and Caicos Islands', 'TC', '', '', '', '', ''),
(219, 'Tuvalu', 'TV', '', '', '', '', ''),
(220, 'Uganda', 'UG', '', '', '', '', ''),
(221, 'Ukraine', 'UA', '', '', '', '', ''),
(222, 'United Arab Emirates', 'AE', '', '', '', '', ''),
(223, 'United Kingdom', 'GB', '', '', '', '', ''),
(224, 'United States minor outlying islands', 'UM', '', '', '', '', ''),
(225, 'Uruguay', 'UY', '', '', '', '', ''),
(226, 'Uzbekistan', 'UZ', '', '', '', '', ''),
(227, 'Vanuatu', 'VU', '', '', '', '', ''),
(228, 'Vatican City State', 'VA', '', '', '', '', ''),
(229, 'Venezuela', 'VE', '', '', '', '', ''),
(230, 'Vietnam', 'VN', '', '', '', '', ''),
(231, 'Virigan Islands (British)', 'VG', '', '', '', '', ''),
(232, 'Virgin Islands (U.S.)', 'VI', '', '', '', '', ''),
(233, 'Wallis and Futuna Islands', 'WF', '', '', '', '', ''),
(235, 'Yemen', 'YE', '', '', '', '', ''),
(236, 'Yugoslavia', 'YU', '', '', '', '', ''),
(237, 'Zaire', 'ZR', '', '', '', '', ''),
(238, 'Zambia', 'ZM', '', '', '', '', ''),
(239, 'Zimbabwe', 'ZW', '', '', '', '', ''),
(240, 'Kosovo', 'XK', '', '', '', '', ''),
(243, 'Montenegro', 'ME', '', '', '', '', ''),
(386, 'Serbia', 'RS', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cname`) VALUES
(1, 'abhishek'),
(2, 'rahul'),
(3, 'nitin'),
(4, 'vijay'),
(5, 'jitendra'),
(6, 'suhail'),
(7, 'faraz'),
(8, 'anshul'),
(9, 'harshit'),
(10, 'shilpi'),
(11, 'navneet');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE IF NOT EXISTS `forum_answer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT '',
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_categories`
--

CREATE TABLE IF NOT EXISTS `forum_categories` (
  `cat_id` int(8) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_unique` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `forum_categories`
--

INSERT INTO `forum_categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Fraud By Payment Gateways', 'Fraud By Payment Gateways detail'),
(2, 'Fraud By Call Providers', 'Fraud By Call Providers detail'),
(3, 'Fraud By Employees', 'Fraud By Employees detail'),
(4, 'Fraud By Call-Buyers', 'Fraud By Call-Buyers detail'),
(5, 'Other Frauds', 'Other Frauds detail');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comment`
--

CREATE TABLE IF NOT EXISTS `forum_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` text NOT NULL,
  `topic_id` varchar(10) NOT NULL,
  `comment_by_id` varchar(10) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `forum_comment`
--

INSERT INTO `forum_comment` (`id`, `comment_content`, `topic_id`, `comment_by_id`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, '<p>abcdefg<br></p>', '1', '1', 0, '2016-04-01 14:13:48', '2016-04-01 14:13:48'),
(2, 'The traditional way of doing business has seen a tremendous change ever since the inception of payment gateway services, not just in Australia but all over the world. Now the old procedure for online payments involving multiple entities has been taken over by the new process of involving just your merchant account and your customers. The wait in clearing online transactions is over now.', '1', '1', 0, '2016-04-02 07:39:18', '2016-04-02 07:39:18'),
(3, 'The traditional way of doing business has seen a tremendous change ever since the inception of payment gateway services, not just in Australia but all over the world.\r\nNow the old procedure for online payments involving multiple entities has been taken over by the new process of involving just your merchant account and your customers.', '1', '1', 0, '2016-04-02 07:43:58', '2016-04-02 07:43:58'),
(4, 'The traditional way of doing business has seen a tremendous change ever since the inception of payment gateway services, not just in Australia but all over the world. Now the old procedure for online payments involving multiple entities has been taken over by the new process of involving just your merchant account and your customers. The wait in clearing online transactions is over now. The new process has not just made the transaction of payments and the flow of money faster but it has also made it easier, cheaper and safer for everyone.\nThe list of payment gateway service providers Australia is very big and it is necessary for an individual to know which payment gateway in Australia is secure and useful.', '1', '1', 0, '2016-04-02 07:48:31', '2016-04-02 07:48:31'),
(5, 'Our payment gateway services in Australia also offer e-check facilities to our reputed clients. Many payment gateway service providers in Australia are fraud but you can easily trust us as we are offering services in almost every country.', '2', '1', 0, '2016-04-02 09:27:01', '2016-04-02 09:27:01'),
(6, 'abc"c', '2', '1', 0, '2016-04-02 09:42:16', '2016-04-02 09:42:16'),
(7, 'abcd "xyz" dfsgsdgrf', '2', '1', 0, '2016-04-02 09:42:42', '2016-04-02 09:42:42'),
(8, 'abc''c', '2', '1', 0, '2016-04-02 09:48:18', '2016-04-02 09:48:18'),
(9, 'new comment with abc''c and "abc"', '2', '1', 0, '2016-04-02 11:26:12', '2016-04-02 11:26:12'),
(10, 'this is a reply comment.', '1', '2', 4, '2016-04-02 11:42:45', '2016-04-02 11:42:45'),
(11, 'this is another reply', '1', '3', 4, '2016-04-02 12:45:35', '2016-04-02 12:45:35'),
(12, 'rply to a user.', '1', '4', 10, '2016-04-02 13:31:14', '2016-04-02 13:31:14'),
(13, '1 april superadmin reply ', '1', '5', 1, '2016-04-04 08:19:37', '2016-04-04 08:19:37'),
(14, '2 april super admin reply', '1', '5', 2, '2016-04-04 08:20:25', '2016-04-04 08:20:25'),
(15, '2 april 1:13 tradional way reply', '1', '5', 3, '2016-04-04 08:21:30', '2016-04-04 08:21:30'),
(16, 'normal reply in topic.\r\nwith change para.', '1', '5', 0, '2016-04-04 08:23:05', '2016-04-04 08:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `forum_like_email`
--

CREATE TABLE IF NOT EXISTS `forum_like_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `forum_like_email`
--

INSERT INTO `forum_like_email` (`id`, `email`, `topic_id`, `created_at`) VALUES
(1, 'raj@mail.com', '1', '2016-04-04 12:31:33'),
(2, 'raj@mail.com', '3', '2016-04-04 12:34:10'),
(3, 'raj@mail.com', '4', '2016-04-04 12:34:21'),
(5, 'raj@mail.com', '2', '2016-04-04 12:55:04'),
(6, 'raj@mail.com', '9', '2016-04-04 12:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE IF NOT EXISTS `forum_posts` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE IF NOT EXISTS `forum_question` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(1, 'test topic', 'test topic detail is here.', 'test name', 'testemail@mail.com', '30/03/16 04:24:43', 0, 0),
(2, 'abcd', 'hbcjasdbhfd', 'xyz', 'abce@xyz,com', '31/03/16 02:36:32', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE IF NOT EXISTS `forum_topics` (
  `topic_id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `like_count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `forum_topics`
--

INSERT INTO `forum_topics` (`topic_id`, `topic_subject`, `description`, `topic_date`, `topic_cat`, `topic_by`, `status`, `like_count`, `created_at`, `updated_at`) VALUES
(1, 'Integrating WordPress with Your Website', 'Many of us work in an endless stream of tasks, browser tasks, social media, emails, meetings, rushing from one thing to another, never pausing and never ending. Then the day is over, and we are exhausted, and we often have very little to show for it. And we start the next', '2016-03-31 00:00:00', 1, 1245, 1, 0, '2016-03-30 18:30:00', '0000-00-00 00:00:00'),
(2, 'WordPress Site Maintenance', 'Prepathon gives you courses that are backed by real coaches. Ask, discuss and learn from both coaches and other students. Innovative learning formats, friendly coaches and cutting edge technology — all in one powerful mobile app.', '2016-03-31 00:00:00', 1, 1254, 1, 0, '2016-03-31 00:48:20', '0000-00-00 00:00:00'),
(3, 'Meta Tags in WordPress', '', '2016-03-31 00:00:00', 2, 5132, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'WordPress in Your Language', '', '2016-03-31 00:00:00', 2, 1123, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Know Your Sources', '', '2016-03-31 06:18:20', 3, 3154, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Validating a Website', '', '2016-03-31 06:31:19', 3, 1235, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'New To WordPress – Where to Start', '', '2016-03-31 05:17:27', 4, 3123, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Introduction to Blogging', '', '2016-03-31 04:31:15', 4, 3213, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Formatting Date and Time', '', '2016-03-31 04:31:20', 5, 2313, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Developing a Colour Scheme', '', '2016-03-31 06:31:17', 5, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Thatâ€™s not all, you will also be eligible for exclusive discounts on our services for all your future purchases.', 'I authorize Live Technician (Third party independent company for remote tech support)   to charge the agreed amount listed above to my credit/credit card provided herein. I agree that I will pay for this purchase in accordance with the issuing bank cardholder agreement.\r\nAll services are rendered before payment is accepted.\r\n\r\nAs a registered customer with us, you will receive updates about our services and products from time to time. Thatâ€™s not all, you will also be eligible for exclusive discounts on our services for all your future purchases.', '0000-00-00 00:00:00', 4, 6, 1, 0, '2016-04-04 10:27:55', '2016-04-04 10:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `forum_users`
--

CREATE TABLE IF NOT EXISTS `forum_users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_level` int(8) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name_unique` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(60) NOT NULL,
  `receiver` varchar(60) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `updatetime` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `sender`, `receiver`, `subject`, `message`, `updatetime`) VALUES
(2, 'support@elivepay.com', 'hitesh@mail.com', 'test subject', 'asdfsafgsdgd', '2016-03-18 10:08:48'),
(3, 'hitesh@mail.com 	', 'support@elivepay.com', 'hello', 'hiiiiiiiiiiiiiii', '2016-03-18 12:18:55'),
(4, 'support@elivepay.com', 'hitesh@mail.com 	', 'xyzthfhfgj', 'one two', '2016-03-18 12:18:55'),
(5, 'rohit@mail.com', 'support@elivepay.com', 'xvbxchncvjvhjghj', 'message', '2016-03-18 12:20:08'),
(6, 'support@elivepay.com', 'rohit@mail.com', 'gdfhfdhggggggggg', 'gggggggggggggggggg', '2016-03-18 12:20:08'),
(7, 'rohit@mail.com', 'support@elivepay.com', 'adasfsdgdfghdfhdf', 'Everyone knows the importance of payment gateways in the today World. You must have the complete knowledge on the working of payment gateway. It can process all payment cards and other forms of online payment.', '2016-03-18 12:24:13'),
(8, 'support@elivepay.com', 'rohit@mail.com', 'dgdfggggggggggggggggggd', 'sdfgdddddddddddddddddddf', '2016-03-18 12:24:13'),
(9, 'admin', 'hitesh@mail.com', 'hiiiiiiiiiiiiiiiiiiiii', 'helllllllllllllllllloooooooooooooooo', '2016-03-18 13:09:39'),
(10, 'admin', 'hitesh@mail.com', 'qqqqqqqqqqqqqqqqqqqqqqqqqq', 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', '2016-03-18 13:32:18'),
(11, 'admin', 'hitesh@mail.com', 'xx', 'yy', '2016-03-18 13:37:39'),
(12, 'admin', 'hitesh@mail.com', 'hhhhhhhhhhhhh', 'uuuuuuuuuuuuuuuuuuuuuuu', '2016-03-18 13:52:41'),
(13, 'admin', 'hitesh@mail.com', 'hfdfghdfh', 'kllklklklkj', '2016-03-18 14:08:59'),
(14, 'admin', 'hitesh@mail.com', 'hgjghk', 'fgjhgfhjk', '2016-03-18 14:09:17'),
(15, 'support@elivepay.com', 'navneet@mail.com', 'yyyyyyyyyyyyy', 'mjmmmmmmmm', '2016-03-18 14:11:58'),
(16, 'support@elivepay.com', 'kr@mail.com', 'abcd', 'kjnkjnkjnkjn', '2016-03-18 14:57:58'),
(17, 'support@elivepay.com', 'first@mail.com', 'test subject', 'sdcsfvgdf', '2016-03-21 06:46:41'),
(18, 'support@elivepay.com', 'firsttest@mail.com', 'sdfsdgdfhfg', 'zdfdsgdfhg', '2016-03-21 06:47:42'),
(19, 'support@elivepay.com', 'hitesh@mail.com', 'Re: hello', 'this is reply mail<br><br><hr><p>From: hitesh@mail.com 	<br>To: support@elivepay.com <br>Sent: 2016-03-18 17:48:55</p><p>hiiiiiiiiiiiiiii</p>', '2016-03-21 06:58:22'),
(20, 'support@elivepay.com', 'abc@xyz.com', 'test', 'test', '2016-03-28 08:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `cid` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cid`, `pid`) VALUES
('1', '1'),
('1', '2'),
('3', '3'),
('3', '1'),
('4', '5'),
('5', '6'),
('2', '8'),
('2', '4'),
('1', '6'),
('1', '7');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'mobile'),
(2, 'lcd'),
(3, 'monitor'),
(4, 'mouse'),
(5, 'laptop'),
(6, 'desktop'),
(7, 'keyboard'),
(8, 'cpu'),
(9, 'desk'),
(10, 'table');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'support@elivepay.com', 'support@123', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'abhishek', 'abhishek@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '2016-04-02 12:50:59', '2016-04-02 12:50:59'),
(3, 'naveen', 'naveen@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '2016-04-02 12:50:59', '2016-04-02 12:50:59'),
(4, 'rajendra', 'raj@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '2016-04-02 13:30:40', '2016-04-02 13:30:40'),
(5, 'lokesh', 'lokesh@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '2016-04-04 08:11:14', '2016-04-04 08:11:14'),
(6, 'artclecreater rohit ', 'rohit@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '2016-04-04 10:17:15', '2016-04-04 10:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE IF NOT EXISTS `user_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(250) NOT NULL,
  `updatetime` datetime NOT NULL,
  `registration_certificate` varchar(250) NOT NULL,
  `municipal_certificate` varchar(250) NOT NULL,
  `incometax_certificate` varchar(250) NOT NULL,
  `vat_certificate` varchar(250) NOT NULL,
  `servicetax_certificate` varchar(250) NOT NULL,
  `partnership_certificate` varchar(250) NOT NULL,
  `deed_certificate` varchar(250) NOT NULL,
  `pancard_partnership_certificate` varchar(250) NOT NULL,
  `resolution_certificate` varchar(250) NOT NULL,
  `memorandum_certificate` varchar(250) NOT NULL,
  `directors_certificate` varchar(250) NOT NULL,
  `cpancard_certificate` varchar(250) NOT NULL,
  `opc_certificate` varchar(250) NOT NULL,
  `government_certificate` varchar(250) NOT NULL,
  `signatory_certificate` varchar(250) NOT NULL,
  `trust_certificate` varchar(250) NOT NULL,
  `trustresolution_certificate` varchar(250) NOT NULL,
  `bank_certificate` varchar(250) NOT NULL,
  `transactions_certificate` varchar(250) NOT NULL,
  `pancard_certificate` varchar(250) NOT NULL,
  `passport_certificate` varchar(250) NOT NULL,
  `driving_certificate` varchar(250) NOT NULL,
  `electioncard_certificate` varchar(250) NOT NULL,
  `electricity_certificate` varchar(250) NOT NULL,
  `rent_certificate` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `user_id`, `updatetime`, `registration_certificate`, `municipal_certificate`, `incometax_certificate`, `vat_certificate`, `servicetax_certificate`, `partnership_certificate`, `deed_certificate`, `pancard_partnership_certificate`, `resolution_certificate`, `memorandum_certificate`, `directors_certificate`, `cpancard_certificate`, `opc_certificate`, `government_certificate`, `signatory_certificate`, `trust_certificate`, `trustresolution_certificate`, `bank_certificate`, `transactions_certificate`, `pancard_certificate`, `passport_certificate`, `driving_certificate`, `electioncard_certificate`, `electricity_certificate`, `rent_certificate`) VALUES
(3, '56717db6effe9', '2016-02-01 12:21:14', 'user_documents/56717db6effe9/proprietorship/registration_certificate/1454309474_Desert.png,', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,user_documents/56717db6effe9/proprietorship/incometax_certificate/Hydrangeas.jpg,', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,user_documents/56717db6effe9/proprietorship/incometax_certificate/Hydrangeas.jpg,user_', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,user_documents/56717db6effe9/proprietorship/incometax_certificate/Hydrangeas.jpg,user_', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,user_documents/56717db6effe9/proprietorship/incometax_certificate/Hydrangeas.jpg,user_', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,user_documents/56717db6effe9/proprietorship/incometax_certificate/Hydrangeas.jpg,user_', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,user_documents/56717db6effe9/proprietorship/incometax_certificate/Hydrangeas.jpg,user_', 'user_documents/56717db6effe9/proprietorship/registration_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/proprietorship/municipal_certificate/Desert.png,user_documents/56717db6effe9/proprietorship/incometax_certificate/Hydrangeas.jpg,user_', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/limited/directors_certificate/Desert.png,', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/limited/directors_certificate/Desert.png,user_documents/56717db6effe9/limited/cpancard_certificate/Hydrangeas.jpg,', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/limited/directors_certificate/Desert.png,user_documents/56717db6effe9/limited/cpancard_certificate/Hydrangeas.jpg,user_documents/56717db6effe9/', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/limited/directors_certificate/Desert.png,user_documents/56717db6effe9/limited/cpancard_certificate/Hydrangeas.jpg,user_documents/56717db6effe9/', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/limited/directors_certificate/Desert.png,user_documents/56717db6effe9/limited/cpancard_certificate/Hydrangeas.jpg,user_documents/56717db6effe9/', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/limited/directors_certificate/Desert.png,user_documents/56717db6effe9/limited/cpancard_certificate/Hydrangeas.jpg,user_documents/56717db6effe9/', 'user_documents/56717db6effe9/limited/memorandum_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/limited/directors_certificate/Desert.png,user_documents/56717db6effe9/limited/cpancard_certificate/Hydrangeas.jpg,user_documents/56717db6effe9/', 'user_documents/56717db6effe9/financial/bank_certificate/Chrysanthemum.jpg,', 'user_documents/56717db6effe9/financial/bank_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/financial/transactions_certificate/Desert.png,', 'user_documents/56717db6effe9/financial/bank_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/financial/transactions_certificate/Desert.png,user_documents/56717db6effe9/photoproof/pancard_certificate/Hydrangeas.jpg,', 'user_documents/56717db6effe9/financial/bank_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/financial/transactions_certificate/Desert.png,user_documents/56717db6effe9/photoproof/pancard_certificate/Hydrangeas.jpg,user_documents/56717db6eff', 'user_documents/56717db6effe9/financial/bank_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/financial/transactions_certificate/Desert.png,user_documents/56717db6effe9/photoproof/pancard_certificate/Hydrangeas.jpg,user_documents/56717db6eff', 'user_documents/56717db6effe9/financial/bank_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/financial/transactions_certificate/Desert.png,user_documents/56717db6effe9/photoproof/pancard_certificate/Hydrangeas.jpg,user_documents/56717db6eff', 'user_documents/56717db6effe9/officeaddress/electricity_certificate/Chrysanthemum.jpg,', 'user_documents/56717db6effe9/officeaddress/electricity_certificate/Chrysanthemum.jpg,user_documents/56717db6effe9/officeaddress/rent_certificate/Desert.png,');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `emp_type` varchar(100) NOT NULL,
  `team_id` varchar(100) NOT NULL,
  `date_of_join` varchar(100) NOT NULL,
  `alias_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
