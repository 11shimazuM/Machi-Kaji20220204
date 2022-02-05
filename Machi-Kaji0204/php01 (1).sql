
-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql1025.db.sakura.ne.jp
-- 生成日時: 2022 年 2 月 04 日 16:04
-- サーバのバージョン： 5.7.32-log
-- PHP のバージョン: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `maternitysupport_machi-kaji`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `php01`
--

CREATE TABLE `php01` (
  `id` int(11) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `line` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `mokuteki0` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `mokuteki1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mokuteki2` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kazoku0` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `kazoku1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kazoku2` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kazoku3` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `kazoku4` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass2` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `php01`
--

INSERT INTO `php01` (`id`, `name`, `tel`, `address`, `birth`, `mail`, `line`, `mokuteki0`, `mokuteki1`, `mokuteki2`, `kazoku0`, `kazoku1`, `kazoku2`, `kazoku3`, `kazoku4`, `pass`, `pass2`, `indate`) VALUES
(1, '島津裕太', '09062101713', '北三十二条東17-3-3-102', '1989-05-11', 'yuta.s5296@gmail.com', 'yuta1713', 'peach', NULL, NULL, '妻、娘、娘', NULL, NULL, NULL, NULL, '12345678', '12345678', '2022-01-27 00:00:00'),
(2, 'あ', '12', '12', '2022-01-11', '12@12', '12', 'orange', NULL, NULL, '12', NULL, NULL, NULL, NULL, '12', '12', '2022-01-27 00:00:00'),
(3, 's', 's', 's', '2022-01-13', '12@12', 's', 'お片付け', NULL, NULL, 's', NULL, NULL, NULL, NULL, 's', 's', '2022-01-27 00:00:00'),
(4, 'てす', '１２３４５', '12121212121', '2022-01-20', '12@12', '121212121212121', 'お片付け', NULL, NULL, 'ご両親', NULL, NULL, NULL, NULL, '1234', '1234', '2022-01-27 00:00:00'),
(5, 'a', '5', '555', '2022-01-04', '555@33', '555', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, '123', '123', '2022-01-27 00:00:00'),
(6, 'ddd', '555', '14141', '2022-01-13', '141414@14141', '14141', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, 'ddd', 'ddd', '2022-01-27 00:00:00'),
(7, 'aaaaa', '22222', '札幌市東区北十六条東7丁目2-24-203', '2022-01-11', 'info@h-capital.jp', '22222222', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, 'aaaaa', 'aaaa', '2022-01-28 00:00:00'),
(8, 'aaaaa', '55555', '北三十二条東17-3-3-102', '2022-01-20', 'yuta.s5296@gmail.com', '555555555555', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, '1234', '1234', '2022-01-28 00:00:00'),
(9, 'aaaaaa', '11111111111', '札幌市東区', '2021-12-29', 'info@h-capital.jp', 's', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, '0000', '0000', '2022-01-28 00:00:00'),
(10, 'うぇ', '121221212', 'う', '2022-01-06', 'info@h-capital.jp', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '777', '777', '2022-01-28 00:00:00'),
(11, 'お', '09012345678', 'ええええ', '2022-01-13', 'info@h-capital.jp', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '555', '555', '2022-01-28 00:00:00'),
(12, '', '', '', '', '', '', 'Array', NULL, NULL, '$kazoku', NULL, NULL, NULL, NULL, '', '', '2022-01-29 00:00:00'),
(13, '', '', '', '', '', '', 'Array', NULL, NULL, '$kazoku', NULL, NULL, NULL, NULL, '', '', '2022-01-29 00:00:00'),
(14, '', '', '', '', '', '', 'Array', NULL, NULL, '$kazoku', NULL, NULL, NULL, NULL, '', '', '2022-01-29 00:00:00'),
(15, '', '', '', '', '', '', '$mokuteki', NULL, NULL, '$kazoku', NULL, NULL, NULL, NULL, '', '', '2022-01-29 00:00:00'),
(16, '', '', '', '', '', '', 'Array', NULL, NULL, '$kazoku', NULL, NULL, NULL, NULL, '', '', '2022-01-29 00:00:00'),
(17, '島津裕太', '09062101713', '北三十二条東17-3-3-102', '2022-01-11', 'yuta.s5296@gmail.com', '', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, '1111', '1111', '2022-01-29 00:00:00'),
(18, '島津裕太', '09062101713', '北三十二条東17-3-3-102', '2022-01-11', 'yuta.s5296@gmail.com', '', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, '1111', '1111', '2022-01-29 00:00:00'),
(19, '島津裕太', '09062101713', '北三十二条東17-3-3-102', '2022-01-12', 'yuta.s5296@gmail.com', '', 'Array', NULL, NULL, 'Array', NULL, NULL, NULL, NULL, '111', '111', '2022-01-29 00:00:00'),
(23, '', '', '', '', '', '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '2022-01-29 00:00:00'),
(24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-03 22:37:55'),
(25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-03 23:53:48'),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-04 01:52:27'),
(27, '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-04 02:07:39'),
(28, '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-04 02:08:50'),
(29, '島津裕太', '9062101713', '北三十二条東17-3-3-102', '2022-02-12', 'yuta.s5296@gmail.com', '', '料理', '掃除', NULL, NULL, '夫婦', 'ひとり暮らし', NULL, NULL, '111', '111', '2022-02-04 02:12:50'),
(30, '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-04 02:19:16'),
(31, '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-04 02:24:39'),
(32, '島津裕太', '9062101713', '北三十二条東17-3-3-102', '2022-02-03', 'yuta.s5296@gmail.com', '', '料理', '掃除', NULL, NULL, '夫婦', 'ひとり暮らし', NULL, NULL, '111', '111', '2022-02-04 02:25:48');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php01`
--
ALTER TABLE `php01`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `php01`
--
ALTER TABLE `php01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
