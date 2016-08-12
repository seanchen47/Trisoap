-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016 年 08 月 11 日 09:12
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `Trisoap`
--

-- --------------------------------------------------------

--
-- 資料表結構 `CUSMAS`
--

CREATE TABLE `CUSMAS` (
  `EMAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `CUSPW` varchar(15) COLLATE utf8_bin NOT NULL,
  `CUSNM` varchar(30) COLLATE utf8_bin NOT NULL,
  `CUSIDT` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'B',
  `CUSADD` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `CUSBIRTHY` smallint(4) NOT NULL,
  `CUSBIRTHM` tinyint(2) NOT NULL,
  `CUSBIRTHD` tinyint(2) NOT NULL,
  `COUNTRY` varchar(15) COLLATE utf8_bin DEFAULT 'Taiwan',
  `ZCODE` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `TEL` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `CUSTYPE` varchar(1) COLLATE utf8_bin NOT NULL,
  `KNOWTYPE` varchar(1) COLLATE utf8_bin NOT NULL,
  `CREDITSTAT` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'A',
  `TAXID` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `DISCOUNT` int(8) NOT NULL DEFAULT '0',
  `SALEAMTMTD` int(8) NOT NULL DEFAULT '0',
  `SALEAMTSTD` int(8) NOT NULL DEFAULT '0',
  `SALEAMTYTD` int(8) NOT NULL DEFAULT '0',
  `SALEAMT` int(8) NOT NULL DEFAULT '0',
  `CURAR` int(8) NOT NULL DEFAULT '0',
  `SPEINS` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `CREATEDATE` datetime DEFAULT NULL,
  `UPDATEDATE` datetime DEFAULT NULL,
  `ACTCODE` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `CUSMAS`
--

INSERT INTO `CUSMAS` (`EMAIL`, `CUSPW`, `CUSNM`, `CUSIDT`, `CUSADD`, `CUSBIRTHY`, `CUSBIRTHM`, `CUSBIRTHD`, `COUNTRY`, `ZCODE`, `TEL`, `CUSTYPE`, `KNOWTYPE`, `CREDITSTAT`, `TAXID`, `DISCOUNT`, `SALEAMTMTD`, `SALEAMTSTD`, `SALEAMTYTD`, `SALEAMT`, `CURAR`, `SPEINS`, `CREATEDATE`, `UPDATEDATE`, `ACTCODE`) VALUES
('a0922825881@gmail.com', '7db4cd6e7093', '冷俊瑩', 'A', 'Home', 1995, 12, 6, 'Taiwan', NULL, '0922825881', 'A', 'A', 'A', 'No', 0, 0, 0, 0, 0, 0, '', '2016-07-25 10:17:55', '2016-08-02 15:50:20', 1),
('tim841206@yahoo.com.tw', '7db4cd6e7093', '冷俊瑩', 'B', 'Home', 1995, 12, 6, 'Taiwan', NULL, '0922825881', 'A', 'A', 'A', 'No', 0, 0, 0, 0, 0, 0, '', '2016-07-25 09:42:09', '2016-07-25 09:42:09', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `ITEMMAS`
--

CREATE TABLE `ITEMMAS` (
  `ITEMNO` int(15) NOT NULL,
  `ITEMNM` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ITEMAMT` int(8) NOT NULL DEFAULT '0',
  `PRICE` int(8) DEFAULT NULL,
  `DESCRIPTION` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `PHOTO` mediumblob NOT NULL,
  `PHOTOTYPE` varchar(50) COLLATE utf8_bin NOT NULL,
  `CREATEDATE` datetime NOT NULL,
  `UPDATEDATE` datetime NOT NULL,
  `ACTCODE` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `ITEMMAS`
--

INSERT INTO `ITEMMAS` (`ITEMNO`, `ITEMNM`, `ITEMAMT`, `PRICE`, `DESCRIPTION`, `PHOTO`, `PHOTOTYPE`, `CREATEDATE`, `UPDATEDATE`, `ACTCODE`) VALUES
(1, '田靜山巒禾風皂', 0, 300, '', '', '', '2016-05-20 00:00:00', '2016-05-20 00:00:00', 1),
(2, '金絲森林渲染皂', 0, 300, '', '', '', '2016-05-20 00:00:00', '2016-05-20 00:00:00', 1),
(3, '釋迦手感果力皂', 0, 300, '', '', '', '2016-05-20 00:00:00', '2016-05-20 00:00:00', 1),
(4, '三三台東意象禮盒組', 0, 900, '', '', '', '2016-05-20 00:00:00', '2016-05-20 00:00:00', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `MSGMAS`
--

CREATE TABLE `MSGMAS` (
  `MSGNO` int(15) NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `MSGTXT` text COLLATE utf8_bin NOT NULL,
  `MSGPHOTO` mediumblob NOT NULL,
  `MSGPHOTOTYPE` varchar(50) COLLATE utf8_bin NOT NULL,
  `MSGVIDEO` varchar(100) COLLATE utf8_bin NOT NULL,
  `MSGSTAT` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'A',
  `REWARDSTAT` tinyint(1) NOT NULL DEFAULT '0',
  `CREATEDATE` datetime NOT NULL,
  `PUBLICDATE` datetime NOT NULL,
  `ACTCODE` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 資料表結構 `ORDITEMMAS`
--

CREATE TABLE `ORDITEMMAS` (
  `ORDNO` varchar(15) COLLATE utf8_bin NOT NULL,
  `ITEMNO` varchar(15) COLLATE utf8_bin NOT NULL,
  `ORDAMT` int(8) DEFAULT NULL,
  `EMAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `CREATEDATE` datetime NOT NULL,
  `UPDATEDATE` datetime NOT NULL,
  `ACTCODE` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `ORDITEMMAS`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ORDMAS`
--

CREATE TABLE `ORDMAS` (
  `ORDNO` int(15) NOT NULL,
  `ORDTYPE` varchar(1) COLLATE utf8_bin NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `INVOICENO` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `BACKSTAT` tinyint(1) DEFAULT '0',
  `ORDSTAT` varchar(1) COLLATE utf8_bin DEFAULT 'E',
  `PAYSTAT` tinyint(1) DEFAULT '0',
  `PAYTYPE` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `ORDINST` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `TOTALPRICE` int(8) DEFAULT '0',
  `REALPRICE` int(8) NOT NULL,
  `SHIPFEE` int(8) DEFAULT '0',
  `TOTALAMT` int(8) DEFAULT '0',
  `DATEREQ` date DEFAULT NULL,
  `CREATEDATE` datetime NOT NULL,
  `UPDATEDATE` datetime NOT NULL,
  `ACTCODE` tinyint(1) NOT NULL DEFAULT '1',
  `MerchantTradeNo` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `ORDMAS`
--

-- --------------------------------------------------------

--
-- 資料表結構 `OWNMAS`
--

CREATE TABLE `OWNMAS` (
  `COMNM` varchar(15) COLLATE utf8_bin NOT NULL,
  `COMADD` varchar(100) COLLATE utf8_bin NOT NULL,
  `COMTEL` varchar(15) COLLATE utf8_bin NOT NULL,
  `COMEMAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `COMWEB` varchar(50) COLLATE utf8_bin NOT NULL,
  `COMTAXID` varchar(15) COLLATE utf8_bin NOT NULL,
  `NORDNOG` int(15) NOT NULL,
  `NORDNOS` int(15) NOT NULL,
  `NMSGNO` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `OWNMAS`
--

INSERT INTO `OWNMAS` (`COMNM`, `COMADD`, `COMTEL`, `COMEMAIL`, `COMWEB`, `COMTAXID`, `NORDNOG`, `NORDNOS`, `NMSGNO`) VALUES
('Trisoap', '台灣台北市大安區和平東路二段265巷3號', '0952527077', 'trisoap2015@gmail.com', 'needs replenishment', '43864595', 100000001, 999000001, 100001);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `CUSMAS`
--
ALTER TABLE `CUSMAS`
  ADD PRIMARY KEY (`EMAIL`);

--
-- 資料表索引 `ITEMMAS`
--
ALTER TABLE `ITEMMAS`
  ADD PRIMARY KEY (`ITEMNO`);

--
-- 資料表索引 `MSGMAS`
--
ALTER TABLE `MSGMAS`
  ADD PRIMARY KEY (`MSGNO`);

--
-- 資料表索引 `ORDITEMMAS`
--
ALTER TABLE `ORDITEMMAS`
  ADD PRIMARY KEY (`ORDNO`,`ITEMNO`,`EMAIL`);

--
-- 資料表索引 `ORDMAS`
--
ALTER TABLE `ORDMAS`
  ADD PRIMARY KEY (`ORDNO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
