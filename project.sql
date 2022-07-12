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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_board:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_board` DISABLE KEYS */;
INSERT INTO `t_board` (`i_board`, `title`, `ctnt`, `i_user`, `created_at`, `updated_at`, `c_cnt`, `view_at`, `sel_board`, `img_board`) VALUES
	(1, 'test', 'test글', 1, '2022-05-18 17:45:23', '2022-05-18 17:45:23', 0, 13, 0, 'hn05180845233.jpg'),
	(2, 'testtt', 'asd', 1, '2022-05-18 18:06:44', '2022-05-18 18:06:44', 0, 9, 1, 'cj05180906445.jpg'),
	(3, '귀여운 컵케이크', '귀여워', 5, '2022-05-18 21:47:29', '2022-05-18 21:47:29', 2, 55, 1, 'mn05181247297.jpg'),
	(4, '[필독] 게시글 가이드를 확인해주세요!!', '공지사항 테스트 글', 1, '2022-05-18 21:56:15', '2022-05-18 21:56:15', 0, 14, 3, ''),
	(5, 'test', '사진없이', 1, '2022-05-19 10:43:45', '2022-05-19 10:43:45', 0, 7, 1, ''),
	(6, 'ㅂㅈㄷ', 'ㅂㅈㄷ', 1, '2022-05-20 11:10:25', '2022-05-20 11:10:25', 2, 59, 0, ''),
	(7, '레몬이 자랐어요', 'ㅋㅋㅋㅋㅋ', 2, '2022-05-20 17:47:18', '2022-05-20 17:47:18', 2, 53, 0, 'ak05200847187.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_com:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_com` DISABLE KEYS */;
INSERT INTO `t_com` (`i_user`, `i_board`, `i_com`, `ctnt`, `created_at`) VALUES
	(3, 3, 1, '', '2022-05-19 17:58:05'),
	(3, 3, 2, 'test', '2022-05-19 17:58:10'),
	(1, 6, 3, 'test', '2022-05-20 11:31:43'),
	(1, 6, 4, 'ttttttt', '2022-05-20 11:38:57'),
	(2, 7, 5, 'ㅋㅋㅋㅋㅋㅋㅋ', '2022-05-20 17:47:29'),
	(1, 7, 6, '안녕', '2022-06-23 17:09:55');
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
INSERT INTO `t_gg_buy` (`i_gonggu`, `i_user`, `buy_inv`, `buy_price`, `buy_unm`, `bank_nm`, `bank_num`, `bank_user`, `user_number`, `pickup_nm`, `addr`, `addr_part`, `addr_num`, `memo`, `created_at`) VALUES
	(6, 3, 3, '15000', '홍길동', '신한', '110345324321', '홍길동', '01033342221', '홍길동', '대구북구침산남로', '1층', '234987', '', '2022-05-17 14:55:50'),
	(7, 3, 2, '12000', '황영은', '', '', '', '', '', '대구 북구 침산남로13길 33', '', '', '', '2022-05-17 16:44:21'),
	(7, 3, 1, '12000', '황영은', '하나', '1231243523', '황영은', '', '황영은', '대구 북구 침산남로13길 33', '1층 이화조립', '41552', '', '2022-05-17 16:46:46'),
	(20, 3, 2, '12000', '황영은', '신한', '1231243523', '황영은', '', '', '대구 북구 노원로 179', '', '41500', '', '2022-05-18 16:53:46'),
	(28, 24, 1, '20000', '홍길동', '우리', '1234567891011', '홍길동', '', '홍길동', '대구 중구 남산로7길 109-2', '5층', '41976', '', '2022-07-12 19:31:55');
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_gg_sell:~28 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_gg_sell` DISABLE KEYS */;
INSERT INTO `t_gg_sell` (`i_gonggu`, `i_user`, `title`, `ctnt`, `product_nm`, `price`, `bank_nm`, `bank_num`, `bank_sell_user`, `start_day`, `end_day`, `created_at`, `updated_at`, `sel_board`, `view_at`) VALUES
	(1, 1, 'test', 'contents ', '화분', 30000, '신한', '110431780769', '황영은', '2022-05-15', '2022-05-23', '2022-05-15 23:15:08', '2022-05-15 23:15:08', NULL, 2),
	(2, 1, 'asda', 'asdasd', 'sad', 2000, '시ㄴ한', '1231243523', 'ㅇㅇㅇ', '2022-05-16', '2022-05-31', '2022-05-16 14:20:01', '2022-05-16 14:20:01', NULL, 0),
	(3, 1, '테스트 글', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '화분', 2900, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-16', '2022-05-17', '2022-05-16 15:16:09', '2022-05-16 15:16:09', NULL, 1),
	(4, 1, 'adasd', 'ㅁㄴㅇㅁㄴㅁㅇ', 'asd', 2000, '신한', '123124124', 'ㅇㅇㅇ', '2022-05-16', '2022-05-25', '2022-05-16 15:18:24', '2022-05-16 15:18:24', NULL, 0),
	(5, 1, 'asd', 'asdasd', '화분', 2000, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-23', '2022-05-31', '2022-05-16 15:21:48', '2022-05-16 15:21:48', NULL, 0),
	(6, 1, '테이블 야자 공구글입니다~', 'asdasdsad', '테이블 야자', 2000, '하나', '1231243523', '홍길동', '2022-05-16', '2022-05-18', '2022-05-16 15:24:23', '2022-05-16 15:24:23', NULL, 0),
	(7, 5, '자두나무 같이 사실 분', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '자두나무', 400000, '하나', '345333444555', '한영', '2022-05-17', '2022-05-31', '2022-05-17 16:25:03', '2022-05-17 16:25:03', NULL, 0),
	(8, 3, 'test 공구글', 'ㅁㅁㅁㅁㅁㅁㅁㅁ', '화분', 2900, '하나', '1231243523', '홍길동', '2022-05-17', '2022-05-17', '2022-05-17 16:55:42', '2022-05-17 16:55:42', NULL, 0),
	(9, 3, 'test', 'test', 'sad', 2000, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-17', '2022-05-26', '2022-05-17 16:58:34', '2022-05-17 16:58:34', NULL, 0),
	(10, 3, 'test', 'tewtatdf', 'sad', 2000, '하나', '1231243523', '한영', '2022-05-17', '2022-05-17', '2022-05-17 17:03:56', '2022-05-17 17:03:56', NULL, 0),
	(11, 3, 'test', 'tewtatdf', 'sad', 2000, '하나', '1231243523', '한영', '2022-05-17', '2022-05-17', '2022-05-17 17:04:11', '2022-05-17 17:04:11', NULL, 0),
	(12, 3, 'test', 'sadasd', 'sad', 2000, '하나', '29311144432', 'ㅇㅇㅇ', '2022-05-17', '2022-05-19', '2022-05-17 17:08:27', '2022-05-17 17:08:27', NULL, 0),
	(13, 3, 'dfsafasdf', 'asdasddas', 'asf', 2000, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-17', '2022-05-31', '2022-05-17 17:09:05', '2022-05-17 17:09:05', NULL, 0),
	(14, 3, 'qweqweqwe', 'asdasddsaa', '화분', 2900, '신한', '29311144432', '홍길동', '2022-05-17', '2022-05-18', '2022-05-17 17:11:50', '2022-05-17 17:11:50', NULL, 0),
	(15, 3, 'asaaaa', 'qqq', 'sad', 2000, '하나', '11033344456', '한영', '2022-05-18', '2022-05-18', '2022-05-17 17:12:55', '2022-05-17 17:12:55', NULL, 2),
	(16, 3, 'asd', 'dadas', 'asd', 2900, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-18', '2022-05-27', '2022-05-17 17:13:34', '2022-05-17 17:13:34', NULL, 0),
	(17, 3, 'aadasd', 'qweeqw', 'addsa', 22222, '하나', '1231243523', '한영', '2022-05-17', '2022-05-19', '2022-05-17 17:15:33', '2022-05-17 17:15:33', NULL, 5),
	(18, 5, 'ttttt', 'asdasd', 'sad', 2000, '하나', '29311144432', '한영', '2022-05-11', '2022-05-27', '2022-05-18 16:50:47', '2022-05-18 16:50:47', NULL, 3),
	(19, 5, 'asd', 'asd', 'asd', 2000, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-18', '2022-05-19', '2022-05-18 16:51:44', '2022-05-18 16:51:44', NULL, 0),
	(20, 5, 'asd', 'asd', 'asd', 2900, '하나', '1231243523', '한영', '2022-05-18', '2022-05-18', '2022-05-18 16:52:26', '2022-05-18 16:52:26', NULL, 0),
	(21, 3, 'test33', 'test', 'sad', 2000, '하나', '29311144432', 'ㅇㅇㅇ', '2022-05-20', '2022-06-03', '2022-05-20 09:38:45', '2022-05-20 09:38:45', NULL, 9),
	(22, 1, 't4', 'test', 'sad', 2000, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-20', '2022-05-27', '2022-05-20 10:01:12', '2022-05-20 10:01:12', NULL, 1),
	(23, 1, 'tttttt', 'asdasd', 'asd', 2000, '하나', '1231243523', 'ㅇㅇㅇ', '2022-05-20', '2022-05-27', '2022-05-20 10:02:54', '2022-05-20 10:02:54', NULL, 1),
	(24, 1, 'asd', 'asdasdasd', 'asdasd', 2000, '하나', '29311144432', '한영', '2022-05-20', '2022-05-27', '2022-05-20 10:09:45', '2022-05-20 10:09:45', 2, 13),
	(25, 1, '식물', 'ㅁㅁㅁㅁ', '옐로우', 1000, '우리', '1234567891011', '우리', '2022-06-30', '2022-07-02', '2022-06-23 17:09:23', '2022-06-23 17:09:23', 2, 4),
	(26, 1, 'aaa', 'asdad', '123', 123, '우리', '123', '우리', '2022-06-07', '2022-06-15', '2022-06-23 17:27:33', '2022-06-23 17:27:33', 2, 2),
	(27, 1, 'zxc', 'sadas', 'asd', 1000, 'asd', '1234567891011', '우리', '2022-06-23', '2022-07-07', '2022-06-23 17:32:34', '2022-06-23 17:32:34', 2, 1),
	(28, 2, '고목나무', '고목나무입니다.', '고목나무', 20000, '우리', '1234567891011', '우리', '2022-06-28', '2022-06-30', '2022-06-28 19:17:05', '2022-06-28 19:17:05', 2, 8);
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;

-- 테이블 데이터 project.t_user:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` (`i_user`, `user_id`, `user_pw`, `nm`, `bank_nm`, `bank_num`, `created_at`, `updated_at`, `profile_img`, `user_num`) VALUES
	(1, 'bww@naver.com', '123', '관리자', NULL, NULL, '2022-06-23 09:52:11', '2022-06-23 09:52:11', NULL, ''),
	(2, 'im12@gmail.com', 'aaa', '초무초무', '신한', '11039458792', '2022-05-16 11:04:52', '2022-05-16 11:04:52', '619f7dd9-f1b6-4d4e-bafe-6fa6a3150ab1.png', '010947294'),
	(3, 'good@gmail.com', 'qwe', 'kiki', '우리', '23456723445', '2022-05-16 17:44:55', '2022-05-16 17:44:55', NULL, '0103443424'),
	(4, 'sim@naver.com', 'asd', '둥실', '우리', '223456789769', '2022-05-16 17:46:01', '2022-05-16 17:46:01', NULL, '0104957384'),
	(5, 'ye111@gmail.com', 'aaa', '한영', '신한', '11033344456', '2022-05-16 17:48:40', '2022-05-17 15:35:46', NULL, '0102226667'),
	(7, 'asd322@naver.com', 'aaa', '다미', '농협', '2346674111222', '2022-05-18 16:48:55', '2022-05-18 16:48:55', NULL, '0102226667'),
	(23, 'zico@naver.com', '123', 'zico', NULL, NULL, '2022-05-19 12:19:11', '2022-05-19 12:19:11', NULL, '01088887777'),
	(24, 'aa123@naver.com', '123', 'aa', NULL, NULL, '2022-06-23 13:13:50', '2022-06-23 13:13:50', NULL, '');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
