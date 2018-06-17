-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 23 日 20:07
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
-- 表的结构 `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `create_user` varchar(100) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `place` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `events`
--

INSERT INTO `events` (`id`, `title`, `content`, `create_user`, `create_time`, `start_time`, `place`, `phone`) VALUES
(1, 'test1', 'sdfasfasdfasdfasdfasdf\r\nasdfasdfa\r\nasdfa', '734322210@qq.com', '2018-05-23 17:41:11', '2018-05-29 16:00:00', 'testst11', '1241232123'),
(2, '1231', 'tesatasasdfasdfsdfasdfasdfasdfasdfasdfasdfasdfas', '734322210@qq.com', '2018-05-23 18:03:18', '2018-05-09 07:57:00', 'teeee1', '123123');

-- --------------------------------------------------------

--
-- 表的结构 `joins`
--

CREATE TABLE IF NOT EXISTS `joins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `join_user` varchar(100) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `joins`
--

INSERT INTO `joins` (`id`, `event_id`, `join_user`, `create_time`) VALUES
(1, 1, '734322210@qq.com', '2018-05-23 17:52:25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`ID`, `Username`, `Access`, `Password`, `Created`, `Name`, `Address`, `status`) VALUES
(3, '734322210@qq.com', 0, '12345', '2018-05-22 17:13:58', 'sqr12311', 'test1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
