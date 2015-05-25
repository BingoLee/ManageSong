-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-05-20 14:17:58
-- 服务器版本： 5.7.3-m13
-- PHP Version: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs`
--

-- --------------------------------------------------------

--
-- 表的结构 `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `url` varchar(256) NOT NULL,
  `sname` varchar(256) NOT NULL,
  `key` varchar(256) NOT NULL DEFAULT '默认',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `song`
--

INSERT INTO `song` (`id`, `url`, `sname`, `key`) VALUES
(1, 'http://bingoh.sinaapp.com/__00000.m4a', '征服', '征服'),
(2, 'http://bingoh.sinaapp.com/__00001.m4a', '童话', '童话'),
(3, 'http://bingoh.sinaapp.com/__00002.m4a', '同桌的你', '同桌的你'),
(4, 'http://bingoh.sinaapp.com/__00003.m4a', '七里香', '七里香'),
(5, 'http://bingoh.sinaapp.com/__00004.m4a', '传奇', '传奇'),
(6, 'http://bingoh.sinaapp.com/__00005.m4a', '大海', '大海'),
(7, 'http://bingoh.sinaapp.com/__00006.m4a', '后来', '后来'),
(8, 'http://bingoh.sinaapp.com/__00007.m4a', '你的背包', '你的背包'),
(9, 'http://bingoh.sinaapp.com/__00008.m4a', '老男孩', '老男孩'),
(10, 'http://bingoh.sinaapp.com/__00009.m4a', '龙的传人', '龙的传人'),
(11, 'http://bingoh.sinaapp.com/__000010.m4a', '龙的传人', '龙的传人'),
(12, 'http://bingoh.sinaapp.com/__00011.m4a', '龙的传人', '龙的传人'),
(21, 'http://bingoh.sinaapp.com/__00012.m4a', '龙的传人', '龙的传人');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '17c4520f6cfd1ab53d8745e84681eb49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
