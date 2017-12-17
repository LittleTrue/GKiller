-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-16 09:16:51
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gk_killer`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `Comment_id` int(10) UNSIGNED NOT NULL COMMENT '评论id',
  `Document _id` int(10) UNSIGNED NOT NULL DEFAULT '4003' COMMENT '对应的文档id',
  `Comment_content` text CHARACTER SET utf8 NOT NULL COMMENT '评论内容',
  `Comment_date` date NOT NULL COMMENT '日期'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='评论表';

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`Comment_id`, `Document _id`, `Comment_content`, `Comment_date`) VALUES
(40001, 30004, '这篇攻略对我帮助很大，感谢！！', '2017-12-16'),
(40002, 30004, '给你们点赞！', '2017-12-16'),
(40003, 4003, ' 厉害', '2017-12-16');

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE `department` (
  `department_id` int(10) UNSIGNED NOT NULL COMMENT '学院号',
  `Department_name` varchar(64) CHARACTER SET utf8 NOT NULL COMMENT '学院名'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='课程表';

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`department_id`, `Department_name`) VALUES
(20001, '管理学院'),
(20002, '经济学院'),
(20003, '计算机与软件学院'),
(20004, '电子科学与技术学院'),
(20005, '法学院'),
(20006, '物理学院'),
(20007, '生命科学学院'),
(20008, '高数');

-- --------------------------------------------------------

--
-- 表的结构 `document`
--

CREATE TABLE `document` (
  `Document_id` int(10) UNSIGNED NOT NULL COMMENT '文件编号',
  `Document_title` varchar(64) CHARACTER SET utf8 NOT NULL COMMENT '文件标题',
  `School_id` int(10) UNSIGNED NOT NULL COMMENT '学校id',
  `Department_id` int(10) UNSIGNED NOT NULL COMMENT '学院号',
  `Document_content` text CHARACTER SET utf8 NOT NULL COMMENT '文档详情',
  `Create_time` date NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='文档，攻略表';

--
-- 转存表中的数据 `document`
--

INSERT INTO `document` (`Document_id`, `Document_title`, `School_id`, `Department_id`, `Document_content`, `Create_time`) VALUES
(30004, '深大学管院各专业大一至大四复习攻略', 10001, 20001, '<p>\r\n    学校：深圳大学<br/>\r\n</p>\r\n<p>\r\n    学院：管理学院<br/>\r\n</p>\r\n<p>\r\n    年级：大一至大四<br/>\r\n</p>\r\n<p>\r\n    获取链接1：<a href="https://pan.baidu.com/s/1miaeNhQ">https://pan.baidu.com/s/1miaeNhQ</a><br/>\r\n</p>\r\n<p>\r\n    获取密码： jjbt<br/>\r\n</p>\r\n<p>\r\n    获取链接2：<a href="https://pan.baidu.com/s/1boORQgB">https://pan.baidu.com/s/1boORQgB</a><br/>\r\n</p>\r\n<p>\r\n    获取密码： bbai<br/>\r\n</p>\r\n<p>\r\n    获取链接3：<a href=" https://pan.baidu.com/s/1bppWorH"> https://pan.baidu.com/s/1bppWorH</a><br/>\r\n</p>\r\n<p>\r\n    获取密码： lzy1<br/>\r\n</p>\r\n', '2017-12-15'),
(30005, '深大经院大一至大三复习攻略', 10001, 20002, '<p>\r\n    学校：深圳大学 <br/>\r\n</p>\r\n<p>\r\n    学院：经济学院 <br/>\r\n</p>\r\n<p>\r\n    年级：大一至大三 <br/>\r\n</p>\r\n<p>\r\n    获取链接：<a href=" https://pan.baidu.com/s/1c1MNWDq"> https://pan.baidu.com/s/1c1MNWDq</a> <br/>\r\n</p><span style="font-size: 14px; font-family: 等线;">获取密码：kn2j</span>\r\n', '2017-12-15'),
(30006, '深大软院大一至大三复习攻略', 10001, 20003, '<p>\r\n    学校：深圳大学 <br/>\r\n</p>\r\n<p>\r\n    学院：计算机与软件学院 <br/>\r\n</p>\r\n<p>\r\n    年级：大一至大三 <br/>\r\n</p>\r\n<p>\r\n    获取链接：<a href="https://pan.baidu.com/s/1kVGKq4v">https://pan.baidu.com/s/1kVGKq4v</a> <br/>\r\n</p>\r\n<p>\r\n    <span style="font-size:14px;font-family:等线">获取密码：ajgo</span>\r\n</p>\r\n', '2017-12-15'),
(30007, '深大电子学院复习攻略', 10001, 20004, '<p>\r\n    学校：深圳大学 <br/>\r\n</p>\r\n<p>\r\n    学院：电子科学与技术学院 <br/>\r\n</p>\r\n<p>\r\n    获取链接：<a href="https://pan.baidu.com/s/1c2GY9qC">https://pan.baidu.com/s/1c2GY9qC</a> <br/>\r\n</p>\r\n<p>\r\n    获取密码：8v89 <br/>\r\n</p>\r\n', '2017-12-15'),
(30008, '深大法学院大一至大三复习攻略', 10001, 20005, '<p>\r\n    学校：深圳大学 <br/>\r\n</p>\r\n<p>\r\n    学院：法学院 <br/>\r\n</p>\r\n<p>\r\n    年级：大一至大三 <br/>\r\n</p>\r\n<p>\r\n    获取链接：<a href="https://pan.baidu.com/s/1nuLjIi9">https://pan.baidu.com/s/1nuLjIi9</a> <br/>\r\n</p>\r\n<p>\r\n    <span style="font-size:14px;font-family:等线">获取密码： i948</span> <br/>\r\n</p>', '2017-12-15'),
(30009, '深大物理学院复习攻略', 10001, 20006, '<p>\r\n    学校：深圳大学 <br/>\r\n</p>\r\n<p>\r\n    学院：物理学院 <br/>\r\n</p>\r\n<p>\r\n    <span style="font-size:14px;font-family:等线">获取链接：<a href="https://pan.baidu.com/s/1bo9sPCr">https://pan.baidu.com/s/1bo9sPCr</a></span> <br/>\r\n</p>\r\n<p>\r\n    <span style="font-size:14px;font-family:等线">获取密码</span>：u44g <br/>\r\n</p>\r\n', '2017-12-15'),
(30010, '深大生命科学学院复习攻略', 10001, 20007, '<p>\r\n    学校：深圳大学 <br/>\r\n</p>\r\n<p>\r\n    学院：生命科学学院 <br/>\r\n</p>\r\n<p>\r\n    获取链接：<a href="https://pan.baidu.com/s/1slfuqqL">https://pan.baidu.com/s/1slfuqqL</a> <br/>\r\n</p>\r\n<p>\r\n    获取密码：52pe<br/>\r\n</p>', '2017-12-15'),
(30011, '高等数学考试复习攻略', 10001, 20008, '<p>\r\n    学校：深圳大学 <br/>\r\n</p>\r\n<p>\r\n    课程：高数 <br/>\r\n</p>\r\n<p>\r\n    获取链接：<a href="https://pan.baidu.com/s/1dEP3Ngt">https://pan.baidu.com/s/1dEP3Ngt</a> <br/>\r\n</p>\r\n<p>\r\n    获取密码：s46m <br/>\r\n</p>\r\n', '2017-12-16');

-- --------------------------------------------------------

--
-- 表的结构 `school`
--

CREATE TABLE `school` (
  `School_id` int(10) UNSIGNED NOT NULL COMMENT '学校id',
  `School_name` varchar(64) CHARACTER SET utf8 NOT NULL COMMENT '学校姓名'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='学校表';

--
-- 转存表中的数据 `school`
--

INSERT INTO `school` (`School_id`, `School_name`) VALUES
(10001, '深圳大学');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Comment_id`),
  ADD KEY `Document _id` (`Document _id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`Document_id`),
  ADD KEY `School_id` (`School_id`),
  ADD KEY `Course_id` (`Department_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`School_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `Comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '评论id', AUTO_INCREMENT=40005;
--
-- 使用表AUTO_INCREMENT `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '学院号', AUTO_INCREMENT=20009;
--
-- 使用表AUTO_INCREMENT `document`
--
ALTER TABLE `document`
  MODIFY `Document_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '文件编号', AUTO_INCREMENT=30011;
--
-- 使用表AUTO_INCREMENT `school`
--
ALTER TABLE `school`
  MODIFY `School_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '学校id', AUTO_INCREMENT=10002;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
