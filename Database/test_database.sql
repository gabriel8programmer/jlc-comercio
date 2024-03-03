-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_jlccomercio
CREATE DATABASE IF NOT EXISTS `db_jlccomercio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_jlccomercio`;

-- Copiando estrutura para tabela db_jlccomercio.buys
CREATE TABLE IF NOT EXISTS `buys` (
  `id` int NOT NULL AUTO_INCREMENT,
  `supplier_id` int NOT NULL,
  `user_id` int NOT NULL,
  `unit_buy_value` float NOT NULL,
  `unit_sell_value` float NOT NULL,
  `amout` int NOT NULL,
  `profit` float NOT NULL,
  `product_batch` varchar(100) NOT NULL,
  `validate` date NOT NULL,
  `expiration_days` int NOT NULL,
  `img` blob,
  `createAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `supplier_buy_suppliers_id` (`supplier_id`) USING BTREE,
  KEY `buys_user_id_users_id` (`user_id`),
  CONSTRAINT `buys_supplier_id_suppliers_id` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `buys_user_id_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.buys: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.cashiers
CREATE TABLE IF NOT EXISTS `cashiers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.cashiers: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.cashies
CREATE TABLE IF NOT EXISTS `cashies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cashier_id` int NOT NULL,
  `status` int NOT NULL,
  `opening_date` date DEFAULT NULL,
  `total_selled` float NOT NULL,
  `total_smash` float NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cashier_cashiers_id` (`cashier_id`) USING BTREE,
  CONSTRAINT `cashies_cashier_id_cashiers_id` FOREIGN KEY (`cashier_id`) REFERENCES `cashiers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.cashies: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `img` blob,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.categories: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '0',
  `phone` varbinary(200) NOT NULL DEFAULT '0x30',
  `cpf` varbinary(200) NOT NULL DEFAULT '0x30',
  `address` varbinary(200) NOT NULL DEFAULT '0x30',
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.clients: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.payment_methods
CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.payment_methods: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `supplier_id` int NOT NULL,
  `code` bigint NOT NULL,
  `name` varchar(100) NOT NULL,
  `buy_value` float NOT NULL,
  `sell_value` float NOT NULL,
  `min_stock` int NOT NULL,
  `description` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img` blob,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_categories_id` (`category_id`) USING BTREE,
  KEY `supplier_suppliers_id` (`supplier_id`) USING BTREE,
  CONSTRAINT `products_category_id_categories_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_supplier_id_suppliers_id` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.products: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.sells
CREATE TABLE IF NOT EXISTS `sells` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL DEFAULT '0',
  `payment_method_id` int NOT NULL DEFAULT '0',
  `status` int NOT NULL,
  `total` float NOT NULL,
  `date` date DEFAULT NULL,
  `hour` time DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_id` (`user_id`) USING BTREE,
  KEY `payment_method_payment_methods_id` (`payment_method_id`) USING BTREE,
  CONSTRAINT `sells_payment_method_id_payment_methods_id` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sells_user_id_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.sells: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `person_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varbinary(200) NOT NULL DEFAULT '0x30',
  `cpf/cnpj` varbinary(200) NOT NULL DEFAULT '0x30',
  `email` varbinary(200) NOT NULL DEFAULT '0x30',
  `address` varbinary(200) NOT NULL DEFAULT '0x30',
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.suppliers: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_jlccomercio.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cpf` varbinary(200) NOT NULL,
  `email` varbinary(200) NOT NULL,
  `password` varbinary(200) NOT NULL,
  `profile` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `udpatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela db_jlccomercio.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `cpf`, `email`, `password`, `profile`, `createdAt`, `udpatedAt`) VALUES
	(1, 'admin', _binary 0x3836141548878980db35dc126390ddc1, _binary 0x3ee2b12639e0de58ec20ed707b207318, _binary 0x007885a72f0878729bfa614fa28f8ccf, 'admin', '2024-01-18 15:17:03', NULL),
	(10, 'usuario1', _binary 0x47164e390db853ca3f59f89209a5961a, _binary 0x1d488b91f3b73d15aed134bb2b47ab0d56a57c10f0bdaa1c732493c447249424, _binary 0x48a8513ddbc555cd3c1ec0faefed8064, 'tesoureiro', '2024-03-03 11:37:47', NULL),
	(11, 'usuario2', _binary 0x2e92c8c77691b934bb3d51b6bb287338, _binary 0x24e801cb762da57a42ac874df4032b4a56a57c10f0bdaa1c732493c447249424, _binary 0xa1e394573b05ff131c931ace98b8fe41, 'operador', '2024-03-03 11:38:21', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
