-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-23 00:58:18
-- 服务器版本： 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yang`
--
CREATE DATABASE IF NOT EXISTS `yang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `yang`;

-- --------------------------------------------------------

--
-- 表的结构 `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `tel` bigint(60) NOT NULL,
  `sex` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `password`, `tel`, `sex`) VALUES
(1, 'aa', '123', 13854226889, '男'),
(2, 'bb', '123', 12833452585, '女'),
(3, 'aa2', '123', 13822544778, '男'),
(4, 'bb2', '123', 12833453996, '女'),
(5, 'aa3', '123', 13854226889, '男'),
(6, 'bb3', '123', 12833452585, '女'),
(7, 'aa24', '123', 13822544778, '男'),
(8, 'bb24', '123', 12833453996, '女'),
(9, 'aa52', '123', 13854226889, '男'),
(10, 'bb45', '123', 12833452585, '女'),
(11, 'aa222', '123', 13822544778, '男'),
(12, 'bb2332', '123', 12833453996, '女'),
(13, 'aa311', '123', 13854226889, '男'),
(14, 'bb378', '123', 12833452585, '女'),
(15, 'aa2492', '123', 13822544778, '男'),
(16, 'bb2462', '123', 12833453996, '女'),
(17, 'uuu', '123', 1213131321, '女'),
(18, 'bbbb', '123', 12312341234, '男');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `cname` varchar(60) CHARACTER SET utf8 NOT NULL,
  `pid` varchar(60) NOT NULL,
  `path` varchar(60) NOT NULL,
  `display` int(60) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `cname`, `pid`, `path`, `display`) VALUES
(1, '服务中心', '0', '1', 1),
(2, '产品包装', '1', '0,1', 1),
(3, '品牌战略', '1', '0,1', 1),
(4, '空间导示', '1', '0,1', 1),
(5, '网络互动', '1', '0,1', 1),
(6, '标志/VI', '1', '0,1', 1),
(7, '广告传媒', '1', '0,1', 1),
(8, '公司新闻', '0', '2', 1),
(17, '动漫包装', '2', '0,3', 1),
(16, '商业包装', '2', '0,2', 1),
(12, '工业包装', '2', '0,2', 1),
(13, '企业包装', '2', '0,3', 1),
(14, '会员中心', '0', '3', 1),
(9, '产品中心', '0', '4', 1);

-- --------------------------------------------------------

--
-- 表的结构 `lunbo`
--

CREATE TABLE `lunbo` (
  `id` int(100) NOT NULL,
  `time` datetime DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lunbo`
--

INSERT INTO `lunbo` (`id`, `time`, `img`, `text`) VALUES
(1, '2017-11-23 10:38:14', 'public/images/banner1.jpg', '宝藏世界 插画设计'),
(2, '2017-11-21 06:14:16', 'public/images/banner2.jpg', '极限脱出3：零时困境 平面海报设计'),
(3, '2017-11-18 06:20:31', 'public/images/banner4.jpg', '刺客信条：起源 游戏背景设计'),
(4, '2017-11-14 13:10:18', 'public/images/banner3.jpg', '寂静岭5归乡 背景设计'),
(5, '2017-11-06 10:08:15', 'public/images/banner5.jpg', '新款兰博基尼外观设计图'),
(6, '2017-11-03 06:31:00', 'public/images/banner6.jpg', '泰坦陨落2 环境设计'),
(7, '2017-10-26 11:28:48', 'public/images/banner7.jpg', '高能时刻：看门狗2 人物形象设计');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(60) NOT NULL,
  `author` varchar(11) NOT NULL,
  `time` datetime NOT NULL,
  `sort` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `author`, `time`, `sort`, `title`, `text`) VALUES
(1, '杨百万', '2017-11-22 14:56:55', '公司荣誉', '胖羊再次荣获澳大利亚优秀设计奖', '澳大利亚优秀设计奖始创于1958年，是澳大利亚最负盛名的设计和创新领域奖项。旨在表彰本土及国际市场上最佳创新产品与服务以及优秀的建筑设计、数字设计、传达设计以及新型领域的设计，包括商业模式创新、社会创新和设计开创性。\r\n自2015年，东道已赢得20项澳大利亚优秀设计奖。尤为瞩目的是，曾获得一项最佳传播奖及两项最佳类别（企业形象）设计奖。    哈哈                                                                             '),
(2, '杨富贵', '2017-03-22 10:28:15', '公司荣耀', '德意志联邦共和国设计大奖', '德意志联邦共和国设计奖被誉为“业内最具含金量的国际设计奖”，只颁发给能真正代表德国乃至全球设计行业顶级水准的作品。德意志联邦共和国设计奖代表并引领着设计潮流。 自2014年始，胖羊已荣获22项该设计大奖。'),
(3, '杨万里', '2017-05-03 11:47:24', '公司荣誉', '红点设计奖', '红点设计奖诞生于1955年，是全球屈指可数的国际顶级奖项之一。红点设计奖面向全球设计机构、设计师个人以及设计公司征集作品，共18个参选类别，最终由红点奖专家评委评选。 评审阶段严循既有标准，并不断适应技术、社会、经济和生态新要求。 自2013年参选该奖伊始，胖羊已荣获10项红点设计奖，国际知名度因此大大提高。 '),
(4, '杨富贵', '2017-07-12 09:25:32', '公司荣誉', 'iF 2017', 'iF设计奖是全球公认的设计界顶级奖项。自1953年起，iF设计奖就已成为业界标杆，象征着优质与一流。 自2014年参加iF设计奖角逐以来，胖羊已荣获26项该国际奖项，由此收获了良好的国际知名度。 2017年，由设计、建筑等不同行业的知名专家组成的评审团对众多参选作品进行了专业评选，胖羊一举荣获12项iF设计大奖，可谓硕果累累。 '),
(5, '杨富贵', '2016-07-16 14:39:12', '公司荣誉', '2016 iF巅峰之夜—— 东道续写辉煌', ' 全球公认的设计界顶级奖项，iF设计大奖颁奖晚宴于2016年2月26日在德国慕尼黑宝马汽车博物馆揭晓。来自全球2000名来宾在此共襄盛举。 从来自53个国家2458名参选者的5295项申奖作品中脱颖而出，胖羊再次斩获5项iF设计大奖。另外，胖羊董事长杨富贵先生与胖羊国际部总裁杨万里先生受邀出席今年的“iF设计行业峰会”。 此外，富贵先生与万里先生出席了于2016年2月20日至28日举办的慕尼黑创新合作周的诸多活动。该活动是德国设计界的最大规模展会。设计有潜力作为其与经济之间的纽带，更是大胆创新的实践。 \r'),
(6, '杨百万', '2017-11-13 08:29:44', '公司荣誉', '意大利A’设计奖荣誉', ' 在意大利科摩湖边风景秀丽的高卢别墅区，来自设计行业、媒体和政治领域的300多位国际嘉宾共同庆祝了A‘ Design颁奖盛典。 胖羊一举获得11项A’ Design大奖，这充分证明了我们有能力以我们创新、独特的设计和理念角逐于开放公平的比赛中。我们借参加A\' Design 盛典之夜的机会，庆祝我们的成就。如今，庆典盛况已被全世界的媒体广为传播。 A\' Design是一年一度的设计评选盛会，它旨在为全世界最优异的设计师，建筑师，工程师，设计团队，品牌，以及设计公司提升曝光率，名气，以及赞誉。\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` smallint(6) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `vip` int(8) DEFAULT '0'COMMENT
) ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `sex`, `age`, `email`, `vip`) VALUES
(1, 'TTT', '123', '男', 20, 'TTT@qq.com', 0),
(2, 'bb', '123', '男', 18, 'bb@qq.com', 0),
(3, 'aa1', '123', '女', 18, 'aa1@qq.com', 0),
(4, 'bb1', '123', '男', 18, 'bb1@qq.com', 0),
(5, 'QWQW', '123', '男', 20, 'QWQW2@qq.com', 0),
(6, 'bb3', '123', '男', 18, 'bb@qq.com', 0),
(7, 'aa3', '123', '女', 18, 'aa1@qq.com', 0),
(8, 'bb4', '123', '男', 18, 'bb1@qq.com', 0),
(9, 'aa5', '123', '男', 18, 'aa@qq.com', 0),
(10, 'bb55', '123', '女', 18, 'bb@qq.com', 0),
(11, 'aa155', '123', '女', 18, 'aa1@qq.com', 0),
(12, 'bb1867', '123', '男', 17, 'bb1@qq.com', 0),
(13, 'aa4486', '123', '女', 20, 'aa2@qq.com', 0),
(14, 'bb3876', '123', '男', 25, 'bb@qq.com', 0),
(15, 'aa3564', '123', '女', 30, 'aa1@qq.com', 0),
(16, 'bb4134', '123', '女', 20, 'bb1@qq.com', 0),
(17, 'aa656', '123', '男', 45, 'aa@qq.com', 0),
(18, 'bb1534', '123', '男', 24, 'bb@qq.com', 0),
(19, 'aa1435', '123', '女', 41, 'aa1@qq.com', 0),
(20, 'bb1564', '123', '男', 15, 'bb1@qq.com', 0),
(21, 'aa4231', '123', '男', 20, 'aa2@qq.com', 0),
(22, 'bb33217', '123', '男', 35, 'bb@qq.com', 0),
(23, 'aa21885', '123', '女', 18, 'aa1@qq.com', 0),
(24, 'bb4137', '123', '男', 36, 'bb1@qq.com', 0),
(25, 'aa5412', '123', '男', 19, 'aa@qq.com', 0),
(26, 'bb552311', '123', '女', 18, 'bb@qq.com', 0),
(27, 'aa155751', '123', '女', 18, 'aa1@qq.com', 0),
(28, 'bb1867312', '123', '男', 17, 'bb1@qq.com', 0),
(29, 'aa4486786', '123', '女', 20, 'aa2@qq.com', 0),
(30, 'bb387645123', '123', '男', 25, 'bb@qq.com', 0),
(31, 'aa356412312', '123', '女', 30, 'aa1@qq.com', 0),
(32, 'bb413412312', '123', '女', 20, 'bb1@qq.com', 0),
(33, 'aa', '123', '男', 14, 'aa@qq.com', 0),
(34, '杨百万', '123', '男', 22, '512961181@qq.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunbo`
--
ALTER TABLE `lunbo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `lunbo`
--
ALTER TABLE `lunbo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
