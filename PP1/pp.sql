-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 15 日 19:40
-- 服务器版本: 5.6.16
-- PHP 版本: 5.5.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `pp`
--

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(32) NOT NULL DEFAULT '',
  `Access` int(11) NOT NULL DEFAULT '0' COMMENT '1 管理员 0 员工 2 发单员',
  `Password` char(40) NOT NULL DEFAULT '',
  `Created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`ID`, `Username`, `Access`, `Password`, `Created`, `Name`, `Address`, `status`) VALUES
(1, 'sun1', 0, 'sqr123', '2018-05-15 17:22:51', 'sun1', '', 0),
(2, 'sun2', 0, 'sqr123', '2018-05-15 17:39:38', 'sun2', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
