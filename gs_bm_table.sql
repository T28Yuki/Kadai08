-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-06-29 16:52:30
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `tempo_no` varchar(5) NOT NULL,
  `tempo_name` text NOT NULL,
  `postcode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`tempo_no`, `tempo_name`, `postcode`, `address`, `phone_no`, `open_date`, `close_date`) VALUES
('1234', '中野店', '166-0012', '東京都杉並区和田', '03-1234-5678', '2023-06-29', '2023-06-29'),
('2345', '新宿店', '123-4567', '東京都中野区', '03-1234-5678', '2023-06-29', '2999-12-31'),
('1234', '中野店', '163-0641', '新宿区西新宿1-25-1', '0362794881', '2023-07-01', '2999-12-31'),
('1234', '中野店', '163-0641', '新宿区西新宿1-25-1', '0362794881', '2023-06-29', '2999-12-31'),
('1234', '中野店', '163-0641', '新宿区西新宿1-25-1', '0362794881', '2023-06-29', '2023-07-01'),
('1234', '中野店', '163-0641', '新宿区西新宿1-25-1', '0362794881', '2023-06-29', '2023-07-08'),
('1234', '中野店', '163-0641', '新宿区西新宿1-25-1', '0362794881', '2023-06-30', '2023-07-06'),
('1234', '新宿', '000-0000', '北海道', '0123-000-000', '2023-06-28', '2023-06-30'),
('1234', '新宿', '163-0641', '新宿区西新宿1-25-1', '0362794881', '2023-06-30', '2023-07-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
