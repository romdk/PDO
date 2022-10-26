-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage de la structure de la table store. products
CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table store.products : ~8 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`ID`, `name`, `price`, `description`) VALUES
	(1, 'baguette', 0.9, 'Une baguette de pain ou simplement baguette, parfois appelée baguette de Paris, ou encore Parisienne (en Lorraine) ou pain français (belgicisme et québécisme), mais aussi pain baguette est une variété de pain, reconnaissable à sa forme allongée.'),
	(2, 'pain au chocolat', 0.85, 'Le pain au chocolat, aussi appelé chocolatine, couque au chocolat, croissant au chocolat ou encore petit pain, est une viennoiserie constituée d\'une pâte levée feuilletée, identique à celle du croissant, rectangulaire et enroulée sur une ou plusieurs barres de chocolat.'),
	(3, 'croissant', 0.7, 'Un croissant est une viennoiserie à base d\'une pâte levée feuilletée spécifique, la pâte à croissant, qui comporte de la levure et une proportion importante de beurre.\r\n\r\nBien que partageant une forme similaire, la recette française du croissant à base de pâte feuilletée est différente de son ancêtre, le kipferl autrichien, dont la texture s\'apparente davantage à une brioche.'),
	(4, 'pain au raisin', 1.1, 'Le pain aux raisins, également appelé escargot, brioche aux raisins dans le sud de la France, couque aux raisins, couque escargot ou couque suisse en Belgique, pain russe à Lyon, escargot aux raisins dans le sud-ouest et l\'est de la France, schneck1 en Alsace-Moselle ainsi qu\'au Maroc et en Tunisie, et pain suisse en Algérie, est une viennoiserie en forme de spirale. Constituée d\'une pâte feuilletée levée, mélangée avec des raisins secs, et fourrée de crème pâtissière, elle est traditionnellement consommée le matin au petit déjeuner, ou pour le goûter.\r\n\r\nEn France, en Amérique du Nord et en Europe du Nord, on appelle pain aux raisins un petit pain sucré qui contient des raisins secs, plus proche du pain traditionnel, qui n\'est donc pas une viennoiserie.'),
	(5, 'chausson aux pommes', 1.05, 'Le chausson aux pommes est une pâtisserie à base de pâte feuilletée de forme semi-circulaire ou triangulaire contenant le même type de garniture que la tarte aux pommes.\r\n\r\nÀ Saint-Calais (Sarthe), où il aurait été créé en 1630 à la suite d\'une épidémie, a lieu tous les ans en septembre la fête du chausson1.\r\n\r\nEn Belgique le chausson est fait non pas avec de la pâte feuilletée mais avec de la pâte à tarte et est appelé « gosette aux pommes ».\r\n\r\nEn France, en 1873 à Lemud (Moselle), les chaussons étaient de la taille d\'une demi-tarte (pâte à tarte repliée en deux) et s\'appelaient « Conn-ché ».'),
	(6, 'eclair', 1.15, 'viennoiserie'),
	(8, 'Banane', 1.99, 'un lot de 6 bananes'),
	(11, 'Raisins', 1.2, 'une grappe de raisins');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
