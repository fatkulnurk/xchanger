-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 01:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xchanger`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `currency_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` double(10,2) NOT NULL,
  `price` int(11) NOT NULL,
  `account_holder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `currency_name`, `payment_name`, `stock`, `price`, `account_holder`, `account_number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'USD', 'PayPal', 89732.00, 15389, 'Fatkul Nur Koirudin', 'fatkulnurk@outlook.com', 'wkwkwkkwkwkw', '2018-10-11 20:16:29', '2018-10-11 20:16:29'),
(4, 'IDR', 'BANK MANDIRI', 39232000.00, 1, 'Fatkul Nur Koirudin', '3223232332', 'oaaaaa', '2018-10-11 22:03:29', '2018-10-11 22:03:29'),
(5, 'IDR', 'BANK BRI', 4565643.00, 1, 'Fatkul Nur Koirudin', '357575447447', 'ooppp', '2018-10-11 22:04:04', '2018-10-11 22:04:04'),
(6, 'IDR', 'BCA', 32320789.00, 1, 'Fatkul Nur Koirudin', '965747546546456', 'tttttttt', '2018-10-11 22:04:37', '2018-10-11 22:04:37'),
(7, 'EURO', 'SKRILL', 291219.00, 18020, 'Fatkul Nur Koirudin', 'owayo@gmail.com', 'ini hanya sebatas message', '2018-10-12 09:33:46', '2018-10-12 09:33:46'),
(8, 'EURO 1', 'SKRILL', 291219.00, 18020, 'Fatkul Nur Koirudin', 'owayo@gmail.com', 'ini hanya sebatas message', '2018-10-12 09:59:49', '2018-10-12 09:59:49'),
(9, 'EURO 20', 'SKRILL', 291219.00, 18020, 'Fatkul Nur Koirudin', 'owayo@gmail.com', 'ini hanya sebatas message', '2018-10-12 10:00:50', '2018-10-12 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_09_29_003242_create_currency_table', 1),
(2, '2018_09_29_003837_create_user_role_table', 1),
(3, '2018_09_29_003852_create_user_table', 1),
(4, '2018_09_29_003959_create_reset_password_table', 1),
(5, '2018_09_29_011344_create_type_transaction_table', 1),
(6, '2018_09_29_012016_create_user_bank_table', 1),
(7, '2018_10_03_123801_create_status_transaction_table', 1),
(8, '2018_10_03_124503_create_transaction_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `reset_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_transaction`
--

CREATE TABLE `status_transaction` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_transaction`
--

INSERT INTO `status_transaction` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'waiting', 'Menunggu Proses Pembayaran', '2018-10-31 05:19:36', '2018-10-31 05:20:29'),
(2, 'success', 'Transaksi Sukses .', '2018-10-31 05:20:52', '2018-11-02 01:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `amount` double(80,2) NOT NULL,
  `amount_get` double(80,2) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `currency_id` int(10) UNSIGNED NOT NULL,
  `user_bank_id` int(10) UNSIGNED NOT NULL,
  `type_transaction_id` int(10) UNSIGNED NOT NULL,
  `status_transaction_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `amount`, `amount_get`, `message`, `currency_id`, `user_bank_id`, `type_transaction_id`, `status_transaction_id`, `created_at`, `updated_at`) VALUES
(1, 1, 434.00, 6678826.00, NULL, 1, 1, 2, 1, '2018-10-31 05:45:58', '2018-10-31 05:45:58'),
(2, 1, 10.00, 153890.00, 'FROM USD PAYPAL TO 4343 NAMA 1', 1, 1, 2, 1, '2018-11-01 01:46:53', '2018-11-01 01:46:53'),
(3, 1, 10.00, 153890.00, NULL, 1, 1, 2, 1, '2018-11-01 03:55:51', '2018-11-01 03:55:51'),
(4, 1, 2.00, 30778.00, NULL, 1, 1, 2, 1, '2018-11-01 03:56:59', '2018-11-01 03:56:59'),
(5, 1, 2.00, 30778.00, NULL, 1, 1, 2, 1, '2018-11-01 03:57:12', '2018-11-01 03:57:12'),
(6, 1, 43.00, 661727.00, NULL, 1, 1, 1, 1, '2018-11-01 03:57:39', '2018-11-01 03:57:39'),
(7, 1, 2.00, 2.00, NULL, 4, 1, 2, 1, '2018-11-01 03:57:45', '2018-11-03 21:17:13'),
(8, 3, 67.00, 1031063.00, '89789798', 1, 2, 2, 1, '2018-11-13 02:29:25', '2018-11-13 02:29:25'),
(9, 3, 1000.00, 15389000.00, 'INI PESANNYA', 1, 2, 2, 1, '2018-11-13 02:45:07', '2018-11-13 02:45:07'),
(10, 3, 323.00, 4970647.00, NULL, 1, 2, 2, 1, '2018-11-13 02:46:58', '2018-11-13 02:46:58'),
(11, 3, 9302.00, 143148478.00, 'aahahha akjsahskjaaksnae ewkjhejwkmna dqijaqhnkjbqnsa', 1, 2, 2, 1, '2018-11-13 02:52:22', '2018-11-13 02:52:22'),
(12, 3, 9302.00, 143148478.00, 'aahahha akjsahskjaaksnae ewkjhejwkmna dqijaqhnkjbqnsa', 1, 2, 2, 1, '2018-11-13 02:53:37', '2018-11-13 02:53:37'),
(13, 3, 34.00, 523226.00, 'Copyright © 2018 xChanger All rights reserved', 1, 2, 2, 1, '2018-11-13 02:57:30', '2018-11-13 02:57:30'),
(14, 3, 34.00, 523226.00, 'Copyright © 2018 xChanger All rights reserved', 1, 2, 2, 1, '2018-11-13 02:58:07', '2018-11-13 02:58:07'),
(15, 3, 309232.00, 4758771248.00, NULL, 1, 2, 1, 1, '2018-11-13 03:01:08', '2018-11-13 03:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `type_transaction`
--

CREATE TABLE `type_transaction` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_transaction`
--

INSERT INTO `type_transaction` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'buy', 'transaksi pembelian', '2018-10-31 05:02:01', '2018-10-31 05:21:42'),
(2, 'sell', 'transaksi penjualan', '2018-10-31 05:05:09', '2018-10-31 05:21:54'),
(7, 'return', 'Transaksi return', '2018-10-31 05:22:11', '2018-10-31 05:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `email`, `phone_number`, `password`, `birthday`, `address`, `country`, `pin`, `status`, `verified`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'fatkul', '32', NULL, 'man', 'fatkulnurk@gmail.com', '08560283232323', '$2y$10$RhRIBKAURUY0KdpDRSKG/OnD8hDJCVwN2gWEzCgqd/PT.YZYNa7NS', '2018-10-25 00:00:00', '876786897', 'indonesia', '123456', NULL, 'no', 'r4gdTD0FqzRXA2Ziv9UMjC1949xDkA1XH2j8mAG0da6Bdy7CoxN4KcUBKKMF', 1, '2018-10-15 07:16:18', '2018-11-01 04:15:36'),
(3, 'fatkul', 'nur', 'k', 'man', 'rudi@gmail.com', '085602832323', '$2y$10$LiLoTimICD0jhELU6nGyneol4jtAA7owuiiq98Lk78BSvy69aNdEO', '2018-10-24 00:00:00', 'jauh sekali', 'ID', '1234567', NULL, 'no', 'MVvM29ptdDKDI5u3HV6Ie0ApJ0dty6Ha9YiLreVP0Kq3Xf3Krngg0R4jNjZr', 1, '2018-10-15 08:31:09', '2018-10-15 08:31:09'),
(4, 'aku', NULL, 'rindu', 'man', 'awesome@dibumi.com', '32323232323', '$2y$10$Q5FCmWdRlHRe4LzlNXAFPu2wzg41boS1CfzGsfwSD1W60ikyeURrW', '2018-11-21 00:00:00', 'jauh sekali ada dibulan sepertinya', 'ID', '1234567', NULL, 'no', '2eEZnmHKXKlw309MRIN20cuf37QPjEYq4WCfLZn04atVL2y98wQxz0hfex77', 1, '2018-11-01 22:32:07', '2018-11-01 22:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_bank`
--

CREATE TABLE `user_bank` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `payment_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_holder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bank`
--

INSERT INTO `user_bank` (`id`, `user_id`, `payment_title`, `description`, `bank_name`, `account_holder`, `account_number`, `currency`, `created_at`, `updated_at`) VALUES
(1, 1, 'NAMA I', NULL, 'BRI', 'RUDI IO', '3908239', '4343', '2018-10-31 01:57:47', '2018-10-31 01:57:47'),
(2, 3, 'mandiri', 'KSJAKLJSA', 'bank mandiri', 'Saya Sendiri', '09281022091801', 'IDR', '2018-11-13 02:21:29', '2018-11-13 02:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ini untuk admin', '2018-10-15 14:13:21', '2018-10-15 14:13:21'),
(2, 'member', 'wkwkwk wkwkkw', '2018-11-03 16:13:40', '2018-11-03 16:13:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currency_currency_name_payment_name_unique` (`currency_name`,`payment_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reset_password_user_id_foreign` (`user_id`);

--
-- Indexes for table `status_transaction`
--
ALTER TABLE `status_transaction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status_transaction_name_unique` (`name`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_currency_id_foreign` (`currency_id`),
  ADD KEY `transaction_user_bank_id_foreign` (`user_bank_id`),
  ADD KEY `transaction_type_transaction_id_foreign` (`type_transaction_id`),
  ADD KEY `transaction_status_transaction_id_foreign` (`status_transaction_id`);

--
-- Indexes for table `type_transaction`
--
ALTER TABLE `type_transaction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_transaction_name_unique` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD UNIQUE KEY `user_phone_number_unique` (`phone_number`),
  ADD KEY `user_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_bank`
--
ALTER TABLE `user_bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_bank_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_transaction`
--
ALTER TABLE `status_transaction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `type_transaction`
--
ALTER TABLE `type_transaction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_bank`
--
ALTER TABLE `user_bank`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `reset_password_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currency` (`id`),
  ADD CONSTRAINT `transaction_status_transaction_id_foreign` FOREIGN KEY (`status_transaction_id`) REFERENCES `status_transaction` (`id`),
  ADD CONSTRAINT `transaction_type_transaction_id_foreign` FOREIGN KEY (`type_transaction_id`) REFERENCES `type_transaction` (`id`),
  ADD CONSTRAINT `transaction_user_bank_id_foreign` FOREIGN KEY (`user_bank_id`) REFERENCES `user_bank` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `user_bank`
--
ALTER TABLE `user_bank`
  ADD CONSTRAINT `user_bank_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
