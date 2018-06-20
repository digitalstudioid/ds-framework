# SQL Manager 2005 Lite for MySQL 3.7.7.1
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : db_framework


SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `db_framework`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `db_framework`;

#
# Structure for the `migrations` table : 
#

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `sys_modules` table : 
#

CREATE TABLE `sys_modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0 = No, 1 = Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `sys_password_resets` table : 
#

CREATE TABLE `sys_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `sys_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `sys_settings` table : 
#

CREATE TABLE `sys_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_password_length` int(11) NOT NULL DEFAULT '8' COMMENT 'characters',
  `password_should_be_complex` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0 = No, 1 = Yes (password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character)',
  `allow_re_use_older_passwords` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `max_older_passwords` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '10' COMMENT 'Min 1 and Max 10',
  `change_password_period` int(11) NOT NULL DEFAULT '120' COMMENT 'days',
  `max_login_attempts` int(11) NOT NULL DEFAULT '5' COMMENT 'times',
  `forced_idle_time` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `idle_time` int(11) NOT NULL DEFAULT '300' COMMENT 'seconds',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `sys_user_privileges` table : 
#

CREATE TABLE `sys_user_privileges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_superadmin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `is_default` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0 = No, 1 = Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `sys_user_privileges_roles` table : 
#

CREATE TABLE `sys_user_privileges_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_sys_user_privileges` bigint(20) unsigned NOT NULL COMMENT 'from table sys_user_privileges',
  `id_sys_modules` bigint(20) unsigned NOT NULL COMMENT 'from table sys_modules',
  `is_visible` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `is_create` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `is_edit` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `is_delete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `is_print` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `is_export` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sys_user_privileges_roles_id_sys_user_privileges_foreign` (`id_sys_user_privileges`),
  KEY `sys_user_privileges_roles_id_sys_modules_foreign` (`id_sys_modules`),
  CONSTRAINT `sys_user_privileges_roles_id_sys_modules_foreign` FOREIGN KEY (`id_sys_modules`) REFERENCES `sys_modules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sys_user_privileges_roles_id_sys_user_privileges_foreign` FOREIGN KEY (`id_sys_user_privileges`) REFERENCES `sys_user_privileges` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `sys_users` table : 
#

CREATE TABLE `sys_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_change_password` datetime DEFAULT NULL,
  `last_password` text COLLATE utf8mb4_unicode_ci,
  `password_question` text COLLATE utf8mb4_unicode_ci,
  `password_answer` text COLLATE utf8mb4_unicode_ci,
  `failed_password_answer` int(11) NOT NULL DEFAULT '0',
  `status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = Not Active, 1 = Active, 2 = Locked, 3 = Expired',
  `last_approved` datetime DEFAULT NULL,
  `last_locked` datetime DEFAULT NULL,
  `last_expired` datetime DEFAULT NULL,
  `is_super_administrator` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `can_be_logged_on` enum('0','1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = All Device, 1 = Windows ID, 2 = Computer Name, 3 = IP Address, 4 = MAC Address, 5 = User Login ID',
  `windows_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `computer_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mac_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_login_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `login_windows_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_computer_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_ip_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_mac_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_user_login_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `total_login` int(11) NOT NULL DEFAULT '0',
  `failed_login_attemp` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sys_users_email_unique` (`email`),
  UNIQUE KEY `sys_users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for the `migrations` table  (LIMIT 0,500)
#

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES 
  (22,'2018_06_04_075348_create_sys_modules_table',1),
  (23,'2018_06_06_062710_create_sys_user_privileges_table',1),
  (24,'2018_06_06_062717_create_sys_user_privileges_roles_table',1),
  (25,'2018_06_06_074835_create_sys_users_table',1),
  (26,'2018_06_12_011035_create_sys_password_resets_table',1),
  (27,'2018_06_12_042638_create_sys_settings_table',1);

COMMIT;

#
# Data for the `sys_password_resets` table  (LIMIT 0,500)
#

INSERT INTO `sys_password_resets` (`email`, `token`, `created_at`) VALUES 
  ('rudi.amirudin@gmail.com','$2y$10$lX9v/XhpgYB8nxHMpSpgW.cpC8wqlkejsN9rF/yJA5iQAsvMBQlNS','2018-06-12 06:41:14');

COMMIT;

#
# Data for the `sys_users` table  (LIMIT 0,500)
#

INSERT INTO `sys_users` (`id`, `name`, `phone`, `mobile`, `email`, `photo`, `username`, `password`, `last_change_password`, `last_password`, `password_question`, `password_answer`, `failed_password_answer`, `status`, `last_approved`, `last_locked`, `last_expired`, `is_super_administrator`, `can_be_logged_on`, `windows_id`, `computer_name`, `ip_address`, `mac_address`, `user_login_id`, `login`, `login_windows_id`, `login_computer_name`, `login_ip_address`, `login_mac_address`, `login_user_login_id`, `last_login`, `total_login`, `failed_login_attemp`, `remember_token`, `created_at`, `updated_at`) VALUES 
  ('5','Rudi Amirudin',NULL,'085771312020','rudi.amirudin@gmail.com',NULL,'rudi','$2y$10$v5lbUROO8/YoSyjrs0jlke.AqepJzEXFox2tudrRzuQvlqmP0c0m6',NULL,NULL,NULL,NULL,0,'0',NULL,NULL,NULL,'0','0',NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'Oz7ruDKoh80wOPAm6IH8Y0K5mpCN8ZY4BP43YWqERjIRotyXfkwADkWBY9L3','2018-06-12 06:25:42','2018-06-12 06:25:42'),
  ('6','Ajeng Dwie Rahayu Lestari',NULL,'085716166660','ajeng.drl@gmail.com',NULL,'ajeng','$2y$10$ezgWgGnHppfFSOj4Gs2KbelqDzvNQszl3m.KedPxiQVieAfBosbLu',NULL,NULL,NULL,NULL,0,'0',NULL,NULL,NULL,'0','0',NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'qX1BiRFFyTJfVMsZ2YU3ADqNzGVYmRivJ53S1h9QDVZkKF69FVJO1xbbaVzn','2018-06-12 06:33:47','2018-06-12 06:33:47');

COMMIT;

