-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.6.7-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- project 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `project` /*!40100 DEFAULT CHARACTER SET utf8mb3 */;
USE `project`;

-- 테이블 project.t_board 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_board` (
  `i_board` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `ctnt` varchar(2000) NOT NULL,
  `i_user` int(10) unsigned NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `c_cnt` int(11) DEFAULT 0,
  `view_at` int(10) DEFAULT 0,
  `sel_board` int(11) DEFAULT NULL,
  `img_board` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`i_board`),
  KEY `i_user` (`i_user`),
  CONSTRAINT `t_board_ibfk_1` FOREIGN KEY (`i_user`) REFERENCES `t_user` (`i_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_board:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_board` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_board` ENABLE KEYS */;

-- 테이블 project.t_com 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_com` (
  `i_user` int(10) unsigned NOT NULL,
  `i_board` int(10) unsigned NOT NULL,
  `i_com` int(11) NOT NULL AUTO_INCREMENT,
  `ctnt` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`i_com`),
  KEY `i_user` (`i_user`),
  KEY `i_board` (`i_board`),
  CONSTRAINT `t_com_ibfk_1` FOREIGN KEY (`i_user`) REFERENCES `t_user` (`i_user`),
  CONSTRAINT `t_com_ibfk_2` FOREIGN KEY (`i_board`) REFERENCES `t_board` (`i_board`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_com:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_com` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_com` ENABLE KEYS */;

-- 테이블 project.t_gg_buy 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_gg_buy` (
  `i_gonggu` int(10) unsigned NOT NULL,
  `i_user` int(10) unsigned NOT NULL,
  `buy_inv` int(10) NOT NULL,
  `buy_price` varchar(10) NOT NULL,
  `buy_unm` varchar(10) NOT NULL,
  `bank_nm` varchar(10) NOT NULL,
  `bank_num` varchar(30) NOT NULL,
  `bank_user` varchar(10) NOT NULL,
  `user_number` varchar(30) NOT NULL,
  `pickup_nm` varchar(10) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `addr_part` varchar(50) DEFAULT NULL,
  `addr_num` varchar(10) NOT NULL,
  `memo` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  KEY `i_gonggu` (`i_gonggu`),
  KEY `i_user` (`i_user`),
  CONSTRAINT `t_gg_buy_ibfk_1` FOREIGN KEY (`i_gonggu`) REFERENCES `t_gg_sell` (`i_gonggu`),
  CONSTRAINT `t_gg_buy_ibfk_2` FOREIGN KEY (`i_user`) REFERENCES `t_user` (`i_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_gg_buy:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_gg_buy` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_gg_buy` ENABLE KEYS */;

-- 테이블 project.t_gg_sell 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_gg_sell` (
  `i_gonggu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `i_user` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `ctnt` varchar(5000) NOT NULL DEFAULT '',
  `product_nm` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `bank_nm` varchar(10) NOT NULL,
  `bank_num` varchar(20) NOT NULL,
  `bank_sell_user` varchar(10) NOT NULL,
  `start_day` date NOT NULL,
  `end_day` date NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `sel_board` int(11) DEFAULT NULL,
  `view_at` int(11) DEFAULT 0,
  PRIMARY KEY (`i_gonggu`),
  KEY `i_user` (`i_user`),
  CONSTRAINT `t_gg_sell_ibfk_1` FOREIGN KEY (`i_user`) REFERENCES `t_user` (`i_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_gg_sell:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_gg_sell` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_gg_sell` ENABLE KEYS */;

-- 테이블 project.t_user 구조 내보내기
CREATE TABLE IF NOT EXISTS `t_user` (
  `i_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `user_pw` varchar(30) NOT NULL,
  `nm` varchar(5) NOT NULL DEFAULT '',
  `bank_nm` varchar(10) DEFAULT NULL,
  `bank_num` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `profile_img` varchar(100) DEFAULT NULL,
  `user_num` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`i_user`),
  UNIQUE KEY `nm` (`nm`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_user:~1 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` (`i_user`, `user_id`, `user_pw`, `nm`, `bank_nm`, `bank_num`, `created_at`, `updated_at`, `profile_img`, `user_num`) VALUES
	(1, 'bww@naver.com', '123', '관리자', NULL, NULL, '2022-06-23 09:52:11', '2022-06-23 09:52:11', NULL, '');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
