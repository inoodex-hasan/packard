-- Adminer 5.4.2 MySQL 8.4.3 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clients_phone_index` (`phone`),
  KEY `clients_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clients` (`id`, `name`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1,	'Ryans Computers',	'01256423001',	'ryans@gmail.com',	'Dhaka',	'2026-02-24 06:47:44',	'2026-02-24 08:53:23'),
(7,	'Md Hasan',	'01000000000',	'hasan@inoodex.com',	'Dhaka',	'2026-04-05 04:02:21',	'2026-04-05 04:02:21');

DROP TABLE IF EXISTS `company_details`;
CREATE TABLE `company_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `signatory_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signatory_designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `company_details` (`id`, `name`, `signatory_name`, `signatory_designation`, `phone`, `photo`, `email`, `website`, `address`, `is_default`, `is_active`, `created_at`, `updated_at`) VALUES
(1,	'Packard Engineering Ltd.',	NULL,	NULL,	'+880172837468763, +88016398473984',	'uploads/company_details/1775385303_logo.png',	'info@packardbd.com',	'https://www.packardbd.com/',	'Purana Paltan, Dhaka, Bangladesh',	1,	1,	'2026-02-24 09:34:06',	'2026-04-06 08:37:12');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2014_10_12_100000_create_password_resets_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2024_02_29_144312_addresses',	1),
(7,	'2024_03_13_022048_norifications',	1),
(8,	'2024_11_10_034909_ditsricts',	1),
(9,	'2024_11_10_034941_areas',	1),
(10,	'2024_11_25_144630_customers',	1),
(11,	'2024_11_25_164637_services',	1),
(12,	'2024_12_01_091025_create_bookings_table',	1),
(13,	'2024_12_02_015620_create_brands_table',	1),
(14,	'2024_12_03_143540_products',	1),
(15,	'2024_12_05_152050_sales',	1),
(16,	'2024_12_16_102327_payments',	1),
(17,	'2024_12_31_090914_daily_sales',	1),
(18,	'2025_02_16_091918_attendances',	1),
(19,	'2025_03_26_120716_extras',	1),
(20,	'2025_04_14_015443_create_vendors_table',	1),
(21,	'2025_05_27_095543_create_purchases_table',	1),
(22,	'2025_05_29_103934_create_inventories_table',	1),
(23,	'2025_10_14_001916_create_expense_categories_table',	1),
(24,	'2025_10_14_015809_create_sale_items_table',	1),
(25,	'2025_11_03_045713_create_revenues_table',	1),
(26,	'2025_11_15_013858_create_clients_table',	1),
(27,	'2025_11_18_060953_create_cost_categories_table',	1),
(28,	'2025_11_20_153146_create_company_details_table',	1),
(29,	'2025_11_20_163131_create_bank_details_table',	1),
(30,	'2025_11_23_183135_create_challans_table',	1),
(31,	'2025_11_24_110556_create_challan_items_table',	1),
(32,	'2025_11_24_125448_create_bills_table',	1),
(33,	'2025_11_24_144057_create_bill_items_table',	1),
(34,	'2025_11_25_131014_create_quotations_table',	1),
(35,	'2025_11_25_135221_create_quotation_items_table',	1),
(36,	'add_teams_fields',	1),
(37,	'create_permission_tables',	1),
(38,	'2025_12_02_154630_add_fields_to_products_table',	2),
(39,	'2025_12_03_142522_create_inventory_items',	3),
(40,	'2025_12_08_164903_create_purchase_items_table',	4),
(41,	'2026_02_24_095736_create_products_table',	5),
(42,	'2026_02_24_113858_create_clients_table',	6),
(43,	'2026_02_24_200000_add_details_to_quotations_table',	7),
(44,	'2026_02_24_210000_add_round_off_to_quotations_table',	8),
(45,	'2026_02_24_223146_create_company_details_table',	9),
(46,	'2026_02_24_233000_add_signatory_and_photo_to_company_details_table',	10),
(47,	'2026_02_25_095547_add_pdf_fields_to_quotations_table',	11),
(48,	'2026_02_25_100733_add_deleted_at_to_quotations_table',	12),
(49,	'2026_02_25_103024_add_company_logo_to_quotations_table',	13),
(50,	'2026_04_05_103411_add_unique_constraints_to_clients_table',	14),
(51,	'2026_04_05_105206_add_discount_percent_to_quotations_table',	15),
(52,	'2026_04_05_105247_add_discount_percent_to_quotation_items_table',	15);

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2,	'App\\Models\\User',	1),
(3,	'App\\Models\\User',	2),
(3,	'App\\Models\\User',	3);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1,	'Administration',	'web',	'2025-12-02 07:38:52',	'2025-12-02 07:38:52'),
(2,	'Booking',	'web',	'2025-12-02 07:38:52',	'2025-12-02 07:38:52'),
(3,	'Service Management',	'web',	'2025-12-02 07:38:52',	'2025-12-02 07:38:52'),
(4,	'Sales Management',	'web',	'2025-12-02 07:38:52',	'2025-12-02 07:38:52'),
(5,	'Settings',	'web',	'2025-12-02 07:38:52',	'2025-12-02 07:38:52'),
(6,	'Product Management',	'web',	'2025-12-02 07:38:52',	'2025-12-02 07:38:52'),
(7,	'Customer Management',	'web',	'2025-12-02 07:38:53',	'2025-12-02 07:38:53'),
(8,	'Vendor Management',	'web',	'2025-12-02 07:38:53',	'2025-12-02 07:38:53'),
(9,	'Purchase Management',	'web',	'2025-12-02 07:38:53',	'2025-12-02 07:38:53'),
(10,	'Inventory Management',	'web',	'2025-12-02 07:38:53',	'2025-12-02 07:38:53'),
(11,	'Expense Management',	'web',	'2025-12-02 07:38:53',	'2025-12-02 07:38:53'),
(12,	'Report Management',	'web',	'2025-12-02 07:38:53',	'2025-12-02 07:38:53'),
(13,	'Company Management',	'web',	'2026-02-08 05:01:32',	'2026-02-08 05:01:32'),
(14,	'Payment Management',	'web',	'2026-02-08 05:06:47',	'2026-02-08 05:06:47'),
(15,	'Accounts Management',	'web',	'2026-02-08 12:46:36',	'2026-02-08 12:46:36'),
(16,	'Client Management',	'web',	'2026-02-24 05:51:58',	'2026-02-24 05:51:58');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `unit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_product_code_unique` (`product_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `product_code`, `details`, `unit`, `price`, `created_at`, `updated_at`) VALUES
(1,	'Canon Pixma G4010 All in One Wireless Ink Tank Printer',	'123456',	'Test',	'pcs',	7000.00,	'2026-02-24 04:45:47',	'2026-02-24 04:47:14'),
(2,	'HP DeskJet Ink Advantage 2336 All-in-One Color Printer',	'012345',	NULL,	'pcs',	9000.00,	'2026-02-24 05:10:00',	'2026-02-24 05:10:00'),
(3,	'Product A',	'P001',	'High-quality material',	'pcs',	120.50,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(4,	'Product B',	'P002',	'Durable and lightweight',	'pcs',	75.00,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(5,	'Product C',	'P003',	'Eco-friendly packaging',	'pcs',	150.00,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(6,	'Product D',	'P004',	'Compact design',	'pcs',	90.25,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(7,	'Product E',	'P005',	'Multi-purpose use',	'pcs',	110.00,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(8,	'Product F',	'P006',	'High-precision',	'pcs',	200.75,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(9,	'Product G',	'P007',	'Standard model',	'pcs',	60.00,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(10,	'Product H',	'P008',	'Heavy-duty',	'pcs',	250.00,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(11,	'Product I',	'P009',	'Energy-efficient',	'pcs',	180.00,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(12,	'Product J',	'P010',	'Lightweight and portable',	'pcs',	95.50,	'2026-02-25 05:04:55',	'2026-02-25 05:04:55'),
(13,	'Product Kzdfhzdfhzdfhdzsfghsdfhsdfgzdfgsgtdfgdfgdfgdfg',	'P011',	'Premium finish',	'piece',	130.00,	'2026-02-25 05:11:04',	'2026-05-09 05:33:34'),
(14,	'Product L',	'P012',	'Quick assembly',	'pcs',	85.00,	'2026-02-25 05:11:04',	'2026-02-25 05:11:04'),
(15,	'Product M',	'P013',	'Waterproof design',	'pcs',	170.00,	'2026-02-25 05:11:04',	'2026-02-25 05:11:04'),
(16,	'Product N',	'P014',	'Adjustable size',	'pcs',	140.25,	'2026-02-25 05:11:04',	'2026-02-25 05:11:04'),
(17,	'Product O',	'P015',	'Scratch-resistant',	'pcs',	120.00,	'2026-02-25 05:11:04',	'2026-02-25 05:11:04'),
(18,	'Product P',	'P016',	'Multipack available',	'pcs',	220.00,	'2026-02-25 05:11:04',	'2026-02-25 05:11:04'),
(19,	'Product Q',	'P017',	'High durability',	'pcs',	160.00,	'2026-02-25 05:11:04',	'2026-02-25 05:11:04'),
(20,	'Product R',	'P018',	'Compact & lightweight',	'pcs',	100.50,	'2026-02-25 05:11:04',	'2026-02-25 05:11:04');

DROP TABLE IF EXISTS `quotation_items`;
CREATE TABLE `quotation_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `quantity` int NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `discount_percent` decimal(5,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quotation_items_quotation_id_foreign` (`quotation_id`),
  KEY `quotation_items_product_id_foreign` (`product_id`),
  CONSTRAINT `quotation_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `quotation_items_quotation_id_foreign` FOREIGN KEY (`quotation_id`) REFERENCES `quotations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `quotation_items` (`id`, `quotation_id`, `product_id`, `description`, `quantity`, `unit_price`, `discount_percent`, `total`, `created_at`, `updated_at`) VALUES
(119,	14,	2,	'description not available',	1,	9000.00,	0.00,	9000.00,	'2026-04-07 03:55:42',	'2026-04-07 03:55:42'),
(120,	14,	1,	'Test',	1,	7000.00,	0.00,	7000.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(121,	14,	3,	'High-quality material',	1,	120.50,	0.00,	120.50,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(122,	14,	4,	'Durable and lightweight',	1,	75.00,	0.00,	75.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(123,	14,	5,	'Eco-friendly packaging',	1,	150.00,	0.00,	150.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(124,	14,	1,	'Test',	1,	7000.00,	0.00,	7000.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(125,	14,	19,	'High durability',	1,	160.00,	0.00,	160.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(126,	14,	20,	'Compact & lightweight',	1,	100.50,	0.00,	100.50,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(127,	14,	17,	'Scratch-resistant',	1,	120.00,	0.00,	120.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(128,	14,	14,	'Quick assembly',	1,	85.00,	0.00,	85.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(129,	14,	11,	'Energy-efficient',	1,	180.00,	0.00,	180.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(130,	14,	3,	'High-quality material',	1,	120.50,	0.00,	120.50,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(131,	14,	3,	'High-quality material',	1,	120.50,	0.00,	120.50,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(132,	14,	1,	'Test',	1,	7000.00,	0.00,	7000.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(133,	14,	2,	'description not available',	1,	9000.00,	0.00,	9000.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(134,	14,	13,	'Premium finish',	1,	130.00,	0.00,	130.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(135,	14,	18,	'Multipack available',	1,	220.00,	0.00,	220.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(136,	14,	3,	'High-quality material',	1,	120.50,	0.00,	120.50,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(137,	14,	4,	'Durable and lightweight',	1,	75.00,	0.00,	75.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(138,	14,	5,	'Eco-friendly packaging',	1,	150.00,	0.00,	150.00,	'2026-04-07 03:55:43',	'2026-04-07 03:55:43'),
(140,	17,	2,	'description not available',	1,	9000.00,	0.00,	9000.00,	'2026-05-04 11:25:51',	'2026-05-04 11:25:51');

DROP TABLE IF EXISTS `quotations`;
CREATE TABLE `quotations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quotation_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `quotation_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sub_total` decimal(10,2) NOT NULL,
  `discount_percent` decimal(5,2) NOT NULL DEFAULT '0.00',
  `discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `vat_percent` decimal(5,2) NOT NULL DEFAULT '0.00',
  `vat_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `tax_percent` decimal(5,2) NOT NULL DEFAULT '0.00',
  `tax_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `installation_charge` decimal(12,2) NOT NULL DEFAULT '0.00',
  `round_off` decimal(12,2) NOT NULL DEFAULT '0.00',
  `total_amount` decimal(10,2) NOT NULL,
  `status` enum('draft','sent','accepted','rejected','expired') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `client_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `client_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attention_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `terms_conditions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signatory_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signatory_designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signatory_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `additional_enclosed` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quotations_quotation_number_unique` (`quotation_number`),
  KEY `quotations_client_id_foreign` (`client_id`),
  CONSTRAINT `quotations_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `quotations` (`id`, `quotation_number`, `client_id`, `quotation_date`, `expiry_date`, `notes`, `sub_total`, `discount_percent`, `discount_amount`, `vat_percent`, `vat_amount`, `tax_percent`, `tax_amount`, `installation_charge`, `round_off`, `total_amount`, `status`, `created_at`, `updated_at`, `client_name`, `client_designation`, `client_address`, `client_phone`, `client_email`, `attention_to`, `body_content`, `terms_conditions`, `subject`, `company_name`, `logo`, `signatory_name`, `signatory_designation`, `signatory_photo`, `company_phone`, `company_email`, `company_website`, `company_address`, `additional_enclosed`, `deleted_at`) VALUES
(14,	'0001-ryans',	1,	'2026-04-07',	'2026-04-22',	'Quotation for Your Requirement',	40927.50,	2.00,	818.55,	1.50,	601.63,	2.50,	1002.72,	0.00,	0.00,	41713.31,	'draft',	'2026-04-05 10:45:55',	'2026-04-07 03:55:42',	'Ryans Computers',	'Manager',	'Dhaka',	'01256423001',	'ryans@gmail.com',	'Mr. Kamal',	'Dear Sir/Madam,\r\n\r\nThank you for your inquiry.\r\n\r\nPlease find attached our quotation based on your requirements. The pricing, scope, and terms are outlined for your review. If you need any modifications or have specific questions, feel free to let us know.\r\n\r\nWe look forward to your feedback and the opportunity to work with you.\r\n\r\nBest regards,\r\nPackard Engineering Ltd',	'Delivery timeline will be confirmed after order confirmation.\r\n Prices are in BDT.\r\n VAT/TAX are not included unless mentioned.\r\n Payment terms: As per mutual agreement.',	'Quotation for Your Requirement',	'Packard Engineering Ltd.',	'uploads/company_details/1775385303_logo.png',	'Mr. Karim',	'Sales Person',	'frontend/users/20260224122504_SrA86C5rqb.png',	'+880172837468763, +88016398473984',	'info@packardbd.com',	'https://www.packardbd.com/',	'Purana Paltan, Dhaka, Bangladesh',	NULL,	NULL),
(17,	'md-0001',	7,	'2026-05-04',	'2026-05-19',	'Bill for Supplying of Products/Services',	9000.00,	0.00,	0.00,	0.00,	0.00,	0.00,	0.00,	0.00,	0.00,	9000.00,	'draft',	'2026-05-04 11:25:05',	'2026-05-04 11:25:51',	'Md Hasan',	'Manager',	'Dhaka',	'01000000000',	'hasan@inoodex.com',	'Mr. Khan',	'Dear Sir,\r\nWith reference to the above inquiry, we are pleased to offer our most competitive price for your kind consideration as follows:',	'Delivery timeline will be confirmed after order confirmation.\r\n Prices are in BDT.\r\n VAT/TAX are not included unless mentioned.\r\n Payment terms: As per mutual agreement.',	'Bill for Supplying of Products/Services',	'Packard Engineering Ltd.',	'uploads/company_details/1775385303_logo.png',	'Mr. Karim',	'Sales Person',	'frontend/users/20260224122504_SrA86C5rqb.png',	'+880172837468763, +88016398473984',	'info@packardbd.com',	'https://www.packardbd.com/',	'Purana Paltan, Dhaka, Bangladesh',	NULL,	NULL);

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1,	2),
(2,	2),
(3,	2),
(4,	2),
(5,	2),
(6,	2),
(7,	2),
(8,	2),
(9,	2),
(10,	2),
(11,	2),
(12,	2),
(13,	2),
(14,	2),
(15,	2),
(16,	2),
(16,	3);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2,	'Super Admin',	'web',	'2025-12-02 07:38:53',	'2025-12-02 07:38:53'),
(3,	'Sales Person',	'web',	'2026-02-24 06:23:04',	'2026-02-24 06:23:04');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int NOT NULL DEFAULT '1',
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_code` int DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `billing_address` bigint DEFAULT NULL,
  `shipping_address` bigint DEFAULT NULL,
  `is_guest` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `type` enum('1','2','3','4') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `role_id`, `images`, `verification_code`, `is_verified`, `billing_address`, `shipping_address`, `is_guest`, `status`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Super Admin',	'hello@inoodex.com',	NULL,	NULL,	'$2y$12$scwluqWiU5ZQ5.2VoAJWD.EQRgnfvrpK3Z/EpMJM8g3KUxfubVwQy',	2,	'20260509115149_Lcv3SSzIou.png',	NULL,	0,	NULL,	NULL,	'0',	'1',	'1',	NULL,	NULL,	'2026-05-09 05:51:49'),
(2,	'Mr. Karim',	'salesperson@example.com',	'01000000000',	NULL,	'$2y$12$y7NkopP01Nmrfmf78tvtVuXdan.GEW0yKnY9TJjL/FNtZ5X33Za5y',	3,	'20260224122504_SrA86C5rqb.png',	NULL,	0,	NULL,	NULL,	'0',	'1',	'1',	NULL,	'2026-02-24 06:25:04',	'2026-02-24 08:20:05'),
(3,	'Mr. Rahim',	'salesperson2@example.com',	'01230465322',	NULL,	'$2y$12$/Tc3qRY58lzsWVcJlP8fK.azJEtxiZWuLT89WixV1SrR9R9ezwiZ2',	3,	'20260224124256_iXlhSR4ekp.png',	NULL,	0,	NULL,	NULL,	'0',	'1',	'1',	NULL,	'2026-02-24 06:42:57',	'2026-02-24 08:19:55');

-- 2026-05-09 11:29:38 UTC
