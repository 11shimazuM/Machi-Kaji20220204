-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 3 月 04 日 23:58
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
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
  `kanri_flg` int(1) NOT NULL DEFAULT '0',
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `php01`
--

INSERT INTO `php01` (`id`, `name`, `tel`, `address`, `birth`, `mail`, `line`, `mokuteki0`, `mokuteki1`, `mokuteki2`, `kazoku0`, `kazoku1`, `kazoku2`, `kazoku3`, `kazoku4`, `pass`, `pass2`, `kanri_flg`, `indate`) VALUES
(35, '島津裕太', '9062101713', '北三十二条東17-3-3-102', '1989-05-11', 'yuta.s5296@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kanri', 'kanri', 1, '2022-03-05 08:09:03'),
(36, 'a', '12012345678', 'aa', '111111-11-11', 'aa@aa', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111', '111', 0, '2022-03-05 08:17:10');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php01`
--
ALTER TABLE `php01`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `php01`
--
ALTER TABLE `php01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
