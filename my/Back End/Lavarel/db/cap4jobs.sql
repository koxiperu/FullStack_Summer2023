-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: dbl
-- Generation Time: Aug 07, 2023 at 12:52 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cap4jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `title`, `tags`, `company`, `location`, `email`, `website`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Stringed Instrument Repairer and Tuner', 'laravel, api, backend', 'Walsh Ltd', 'Darrenfurt', 'kihn.amely@torphy.com', 'https://www.barton.com/eius-tempora-sint-voluptatem-et-repudiandae-iure-tempore', 'Rerum dolorem numquam deserunt atque eius aut. Saepe quis repellat in et ab sit. Rem eos a corrupti atque voluptatem. Nesciunt consequatur sunt ad sequi nisi voluptatem. Eos ut saepe quibusdam libero. Tempora nobis repudiandae quae placeat ut quaerat. Quia non commodi quia voluptatem vel.', '2023-08-07 12:42:42', '2023-08-07 12:42:42'),
(2, 'Word Processors and Typist', 'laravel, api, backend', 'Padberg, Pagac and Block', 'Raubury', 'giovanny71@yahoo.com', 'http://hegmann.com/', 'Non earum eos aut quia sint soluta. Saepe in sed rerum nostrum harum aut. Id sed eos quia consequatur et possimus maxime adipisci. Minima placeat recusandae omnis beatae debitis. Sint ex et voluptatem. Sed labore id fugit odio consectetur molestias et.', '2023-08-07 12:42:42', '2023-08-07 12:42:42'),
(3, 'Teller', 'laravel, api, backend', 'Koelpin, Kunde and Russel', 'West Vergiestad', 'wblock@hotmail.com', 'http://www.donnelly.net/', 'Rem qui et nisi sit maiores. Aut ullam odit necessitatibus. Nam veritatis quam doloremque facere aspernatur. Aut aliquam vel ratione. Rerum vero voluptatum sint deleniti. Consequuntur animi sed sed.', '2023-08-07 12:42:42', '2023-08-07 12:42:42'),
(4, 'Therapist', 'laravel, api, backend', 'Reichert, Ernser and Gutmann', 'Cassidystad', 'yrogahn@quitzon.info', 'http://www.gutkowski.biz/nostrum-et-aut-consectetur-earum', 'Cum qui porro architecto fugiat. Velit nihil esse soluta architecto voluptatem. Quo eius adipisci omnis beatae et. Ad impedit ipsum ut aut.', '2023-08-07 12:42:42', '2023-08-07 12:42:42'),
(5, 'Online Marketing Analyst', 'laravel, api, backend', 'Frami Inc', 'Lake Colleen', 'gbecker@yahoo.com', 'https://johnston.org/consequatur-et-qui-dolor-cumque.html', 'Voluptas similique aut itaque ut et. Et minus reprehenderit quasi recusandae eaque. Animi corporis at quo sint cumque. Odio laboriosam sequi repellat aliquid nobis est. Et odit quia animi sed. Nesciunt ipsam possimus voluptatem delectus non.', '2023-08-07 12:42:42', '2023-08-07 12:42:42'),
(6, 'Electro-Mechanical Technician', 'laravel, api, backend', 'Jones Group', 'Graciechester', 'estanton@beier.com', 'https://www.gibson.com/repudiandae-sint-esse-qui-doloremque-qui', 'Temporibus cumque ipsum sunt et sapiente a. Ipsa ipsam sit fuga ducimus incidunt. Omnis inventore similique non quos porro asperiores eveniet. Minus libero pariatur exercitationem aspernatur nihil. Numquam dicta consequatur et illo. Vel saepe qui officiis vero similique aliquam. Est omnis similique non blanditiis explicabo illo et.', '2023-08-07 12:42:42', '2023-08-07 12:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2023_08_07_071338_create_listings_table', 1),
(11, '2014_10_12_000000_create_users_table', 2),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(13, '2019_08_19_000000_create_failed_jobs_table', 2),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(15, '2023_08_07_102942_create_members_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `role`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Maud Reilly', 'Tailor', 'Voluptates labore soluta quam. Facere beatae dicta voluptatibus consequuntur. Itaque nihil fuga inventore. Est asperiores cum voluptatibus autem qui. Iure quo cum optio. Doloremque rerum ut nemo aperiam explicabo qui.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(2, 'Prof. Marquis Flatley', 'Health Educator', 'Ipsum necessitatibus autem laboriosam ex ex. Non dolores recusandae modi fuga qui unde. Et doloremque laudantium temporibus autem vel excepturi consectetur pariatur. Necessitatibus ut fuga id. Voluptatum saepe iure et hic.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(3, 'Beth Windler', 'Segmental Paver', 'Est reiciendis molestias occaecati veniam vero molestias iure illum. Ut molestias neque consequatur quisquam dignissimos natus incidunt. Incidunt reprehenderit eaque eaque sequi quia fuga laborum. Explicabo et repellendus repellat distinctio sed unde iste eos. Ipsum dolorem mollitia qui consequuntur enim. Sunt qui dolores aliquam.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(4, 'Violette Kiehn', 'Agricultural Inspector', 'Nam ex ducimus harum esse. Similique recusandae nihil quod vero. Ut qui sunt totam dicta ipsum quo. Neque eveniet aut et reiciendis quia. Quia odit sed asperiores ducimus voluptatem voluptas accusamus ratione. Minus non quisquam rem repellat. Atque beatae perferendis ea qui esse porro.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(5, 'Dr. Eddie Thiel IV', 'Industrial-Organizational Psychologist', 'Eum quas placeat sed quidem consequatur voluptates qui assumenda. Molestiae commodi reprehenderit vitae maxime quo pariatur placeat error. Provident eveniet a quia et. Dolor ratione est non sed omnis. Exercitationem eaque qui qui ut eum saepe dolore. Et iure molestiae sed et veniam eligendi accusantium.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(6, 'Mr. Jaquan Considine Sr.', 'Nuclear Equipment Operation Technician', 'Sit voluptas velit dolore et. Aut consequuntur incidunt aut itaque praesentium. Aut aut ab commodi commodi maiores ea veritatis. Et porro ex porro eos et.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(7, 'Mr. Dillan O\'Reilly II', 'Mathematician', 'Dolorum illum assumenda delectus dicta ut. Sapiente ut eum aperiam impedit expedita. Perferendis harum aut iste harum. Debitis nemo voluptas optio repellat distinctio magnam quas. Explicabo inventore iste doloribus error sunt in ut. Vitae doloremque et sint ipsam accusantium vitae magnam.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(8, 'Elmo Cummings', 'User Experience Researcher', 'Exercitationem neque nihil voluptatem rerum ex dignissimos tenetur. Cumque numquam at et quia. Quaerat temporibus voluptatem ratione sequi delectus quia. Magni consequatur sit voluptas perspiciatis quasi nam perspiciatis asperiores. Accusamus maxime officia quas atque. Consequatur excepturi quo earum. Error sequi est quis ipsa.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(9, 'Prof. Vinnie Okuneva', 'Precision Mold and Pattern Caster', 'Iure nobis qui et et quis id maiores. Dolore cumque laudantium eaque est. Nisi quo quam totam voluptas laborum. Mollitia harum ipsam porro dolorum ab fugit. In id placeat rerum voluptatibus repellat quia et. Recusandae animi suscipit consequuntur dolorum consequatur dignissimos et. Dolores non similique est magnam sunt voluptas.', '2023-08-07 12:51:51', '2023-08-07 12:51:51'),
(10, 'Arjun Lesch', 'Engine Assembler', 'Facere asperiores doloribus totam dolores atque. Eligendi quae repudiandae id voluptas quos omnis quo ea. Enim error deserunt illum dolorem sit non ea beatae. Dolorem iusto molestiae deserunt dolor sequi. Amet consequuntur dignissimos aspernatur rerum laudantium explicabo iusto. Velit molestiae consectetur ullam doloribus architecto voluptatem sint. Quas explicabo eum fuga consequatur dolorem itaque aut.', '2023-08-07 12:51:51', '2023-08-07 12:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
