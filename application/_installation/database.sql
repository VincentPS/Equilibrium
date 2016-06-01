-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Databasestructuur van equilibrium wordt geschreven
CREATE DATABASE IF NOT EXISTS `equilibrium` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `equilibrium`;


-- Structuur van  tabel equilibrium.materials wordt geschreven
CREATE TABLE IF NOT EXISTS `materials` (
  `mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `mat_name` varchar(50) NOT NULL,
  `parent_1_id` int(11) NOT NULL,
  `parent_2_id` int(11) NOT NULL,
  `circle` varchar(10) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`mat_id`),
  UNIQUE KEY `mat-name` (`mat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel equilibrium.materials: ~100 rows (ongeveer)
DELETE FROM `materials`;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` (`mat_id`, `mat_name`, `parent_1_id`, `parent_2_id`, `circle`, `description`) VALUES
	(1, 'Light', 0, 0, 'A', ''),
	(2, 'Fire', 0, 0, 'A', ''),
	(3, 'Water', 0, 0, 'A', ''),
	(4, 'Earth', 0, 0, 'A', ''),
	(5, 'Air', 0, 0, 'A', ''),
	(6, 'Alcohol', 2, 3, 'B', ''),
	(7, 'Dust', 4, 5, 'A', ''),
	(8, 'Energy', 2, 5, 'B', ''),
	(9, 'Swamp', 3, 4, 'B', ''),
	(10, 'Lava', 2, 4, 'B', ''),
	(12, 'Ash', 2, 7, 'B', ''),
	(13, 'Plasma', 2, 8, 'B', ''),
	(14, 'Stone', 10, 3, 'B', ''),
	(15, 'Storm', 5, 8, 'B', ''),
	(16, 'Life', 9, 8, 'G', ''),
	(17, 'Bacteria', 9, 16, 'G', ''),
	(18, 'Tornado', 15, 5, 'B', ''),
	(19, 'Explosion', 55, 2, 'O', ''),
	(20, 'Egg', 16, 14, 'G', ''),
	(21, 'Ghost', 12, 16, 'G', ''),
	(22, 'Despair', 23, 6, 'B', ''),
	(23, 'Human', 16, 16, 'G', ''),
	(24, 'Suicide', 23, 22, 'O', ''),
	(25, 'Metal', 14, 2, 'B', ''),
	(26, 'Grass', 4, 16, 'G', ''),
	(27, 'Seeds', 26, 16, 'G', ''),
	(28, 'Wheat', 26, 27, 'G', ''),
	(29, 'Field', 28, 28, 'D', ''),
	(30, 'Tree', 29, 27, 'D', ''),
	(31, 'Forest', 30, 30, 'D', ''),
	(32, 'Bird', 30, 20, 'D', ''),
	(33, 'Coal', 30, 2, 'D', ''),
	(34, 'Steel', 25, 33, 'G', ''),
	(35, 'Steal', 23, 37, 'O', ''),
	(36, 'Crime', 23, 35, 'O', ''),
	(37, 'Desire', 23, 23, 'G', ''),
	(38, 'Evil', 23, 36, 'D', ''),
	(39, 'Demon', 38, 23, 'D', ''),
	(40, 'Devil', 38, 39, 'O', ''),
	(41, 'Spiritual', 23, 8, 'G', ''),
	(42, 'Enlightenment', 23, 41, 'G', ''),
	(43, 'Angel', 23, 42, 'D', ''),
	(44, 'God', 42, 43, 'O', ''),
	(45, 'Religion', 23, 44, 'D', ''),
	(47, 'Hope', 45, 23, 'D', ''),
	(48, 'Sand', 3, 4, 'A', ''),
	(49, 'Glass', 48, 2, 'G', ''),
	(50, 'Cloud', 3, 5, 'G', ''),
	(51, 'Rain', 50, 3, 'G', ''),
	(52, 'Compressor', 5, 34, 'G', ''),
	(53, 'Vacuum', 52, 8, 'D', ''),
	(54, 'Space', 53, 53, 'D', ''),
	(55, 'Gas', 12, 50, 'G', ''),
	(56, 'Sun', 104, 54, 'O', ''),
	(57, 'Rainbow', 51, 56, 'D', ''),
	(58, 'Prism', 57, 49, 'D', ''),
	(59, 'Color', 58, 56, 'D', ''),
	(60, 'Emotion', 59, 23, 'O', ''),
	(61, 'Depression', 60, 22, 'O', ''),
	(62, 'Freedom', 23, 60, 'O', ''),
	(63, 'Happiness', 60, 62, 'O', ''),
	(64, 'Sadness', 60, 61, 'O', ''),
	(65, 'Speech', 62, 23, 'D', ''),
	(66, 'Fantasy', 63, 65, 'D', ''),
	(67, 'Elf', 66, 23, 'D', ''),
	(68, 'Orc', 67, 38, 'D', ''),
	(69, 'Lizard', 20, 14, 'G', ''),
	(70, 'Dragon', 66, 69, 'O', ''),
	(71, 'Blood', 23, 70, 'O', ''),
	(72, 'Bones', 23, 70, 'O', ''),
	(73, 'Robot', 16, 34, 'O', ''),
	(74, 'Electricity', 34, 8, 'G', ''),
	(75, 'Tools', 34, 23, 'D', ''),
	(76, 'Weapon', 75, 23, 'O', ''),
	(77, 'Gunpowder', 12, 55, 'O', ''),
	(78, 'Gun', 76, 77, 'O', ''),
	(79, 'Cultivation', 75, 29, 'O', ''),
	(80, 'Flour', 28, 75, 'D', ''),
	(81, 'Dough', 80, 3, 'O', ''),
	(82, 'Clay', 48, 3, 'D', ''),
	(83, 'Brick', 82, 2, 'O', ''),
	(84, 'Furnace', 83, 2, 'O', ''),
	(85, 'Bread', 84, 81, 'O', ''),
	(86, 'House', 83, 83, 'O', ''),
	(87, 'Village', 86, 86, 'O', ''),
	(88, 'City', 87, 87, 'O', ''),
	(89, 'Nation', 88, 88, 'O', ''),
	(90, 'Continent', 89, 89, 'O', ''),
	(91, 'World', 90, 90, 'O', ''),
	(92, 'War', 90, 90, 'O', ''),
	(93, 'Famine', 29, 2, 'O', ''),
	(94, 'Love', 60, 37, 'D', ''),
	(95, 'Chaos', 60, 98, 'O', ''),
	(96, 'Apocalypse', 91, 95, 'O', ''),
	(97, 'Pestilence', 71, 38, 'O', ''),
	(98, 'Death', 38, 72, 'O', ''),
	(99, 'Astronaut', 23, 54, 'D', ''),
	(100, 'Alien', 54, 16, 'O', ''),
	(101, 'Darkness', 19, 96, 'O', ''),
	(102, 'Equilibrium', 1, 102, 'E', '');
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;


-- Structuur van  tabel equilibrium.user_data wordt geschreven
CREATE TABLE IF NOT EXISTS `user_data` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(48) DEFAULT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_password_hash` varchar(255) DEFAULT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_active` tinyint(1) NOT NULL DEFAULT '0',
  `user_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `user_remeber_me_token` varchar(64) DEFAULT NULL,
  `user_creation_timestamp` bigint(20) DEFAULT NULL,
  `user_last_login_timstamp` bigint(20) DEFAULT NULL,
  `user_last_logout_timestamp` bigint(20) DEFAULT NULL,
  `user_activation_hash` varchar(40) DEFAULT NULL,
  `user_password_reset_hash` char(40) DEFAULT NULL,
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL,
  `user_provider_type` text,
  `alpha_progress` int(11) NOT NULL,
  `beta_progress` int(11) NOT NULL,
  `gamma_progress` int(11) NOT NULL,
  `delta_progress` int(11) NOT NULL,
  `omega_progress` int(11) NOT NULL,
  `end_game` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel equilibrium.user_data: ~0 rows (ongeveer)
DELETE FROM `user_data`;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
