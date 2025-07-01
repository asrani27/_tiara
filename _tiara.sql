/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _tiara

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 01/07/2025 17:27:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
BEGIN;
INSERT INTO `customer` (`id`, `nama`, `alamat`, `instansi`, `email`, `telp`, `created_at`, `updated_at`, `user_id`, `foto`) VALUES (3, 'santi', 'jl pramuka', NULL, NULL, '09876789', '2025-07-01 17:06:16', '2025-07-01 17:06:16', 17, NULL);
INSERT INTO `customer` (`id`, `nama`, `alamat`, `instansi`, `email`, `telp`, `created_at`, `updated_at`, `user_id`, `foto`) VALUES (4, 'nadia', 'nadia', 'sdf', 'sdf', 'nadia', '2025-07-01 17:17:21', '2025-07-01 17:21:51', 18, '6863a8af5ffe8.jpg');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (1, 'superadmin', 'superadmin', '$2y$12$r0HAFQIZdiAabhk3HwCdVub716cax1jMnmwKnv76nJz8sJx0M3TB6', 'uufsM2mMfsADty3JDgleuBrO2Le3MEEekPtdzhDHN4MZBRemMLcFL1ni7dBt', NULL, '2024-12-20 02:49:44', 'superadmin');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (11, 'adi', 'adi2', '$2y$12$S8y2eXzZhf7OMrScCfdwT.9EZo6yv7EBZUkrk/faHh3DNzW/7zhPu', NULL, '2025-05-12 23:54:44', '2025-05-12 23:56:31', 'superadmin');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (12, 'pu1', NULL, '$2y$10$zGhW7n6aBtBIgJ.moSRNtOnohY/MiTF6pcfL//qd4akj1T9U8oMwy', NULL, '2025-06-03 07:20:53', '2025-06-03 07:20:53', 'dokter');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (13, 'dokter2', NULL, '$2y$10$vygcXV9TgNYpCnltnbXxqeuAQDhiR7n2ypsa3FvWuTY347PSIAo3m', 'RlNOJ0ptuUbZ1sIvdnrRJe2X3jSZWjzM3CW5M1zfWNIEg11a9FOScFhUaOUv', '2025-06-03 07:23:51', '2025-06-18 20:07:45', 'dokter');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (14, 'pasien1', NULL, '$2y$10$gGgvmda5sOw.XteWdJKvoeQNJh1c.irtDx1Rol7t9.XLE3Q87aoqm', NULL, '2025-06-03 07:28:22', '2025-06-03 07:28:22', 'pasien');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (15, 'andi', 'andi', '$2y$10$yZdmxyf8pr2ytTowZZSIIOsh44zaDlDbN4oFZzk2iubBrBxkinMT6', 'FYaxAtmregMaGruLPk9B2913qjsUcXkj4b7W55vioEcMCzkl2h7Oy0itv5SG', '2025-06-09 00:44:27', '2025-06-18 19:30:03', 'pasien');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (16, 'budi', 'kjjhkjh', '$2y$10$T5//mvFrV6aBX1S7DU9WkOoYEUzTAD8UYTsBgG3L61hWFkIHsHgMi', NULL, '2025-07-01 17:05:16', '2025-07-01 17:05:16', 'customer');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (17, 'santi', 'santi', '$2y$10$UbuZuOJO6Dz0wI89w2IXr.4CmlINDZT78SM9l6TE5xt2usZw8jADK', NULL, '2025-07-01 17:06:16', '2025-07-01 17:06:16', 'customer');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (18, 'nadia', 'nadia', '$2y$10$QXsKQbDc3d/ZduLIGfkgY.0oheyoG2lM3/Av96LjvSzOfmWsVHIwu', NULL, '2025-07-01 17:17:21', '2025-07-01 17:17:21', 'customer');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
