-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2017 at 10:18 PM
-- Server version: 5.6.37-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `created_at`, `updated_at`) VALUES
(3, 'Saiful community center, an aristocratic air-conditioned community Centre with world-class interior decoration, is a prestigious venue for your communal and corporate gathering.\r\n\r\nEnjoy the unique architectural beauty, crafted by a renowned Bangladeshi architect and the warm hospitality provides by our professional team that makes your event grand and memorable.\r\n\r\nWe provide multiple venue configurations to fit in events according to size and volume of your attendance, you can fairly plan for wedding party, birthday, anniversary, seminar, conference, annual general meeting and many more.', NULL, '2017-12-21 03:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `contactlists`
--

CREATE TABLE `contactlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactlists`
--

INSERT INTO `contactlists` (`id`, `name`, `mobile`, `message`, `created_at`, `updated_at`, `status`) VALUES
(18, 'hafizur', '01739981172', 'afafafa', '2017-12-20 04:43:04', '2017-12-20 04:43:04', '1'),
(19, 'Guestspubs', '81247762864', 'guest test post \r\n<a href=\" http://kioppoerk.com/ \">bbcode</a> \r\n<a href=\"http://kioppoerk.com/\">html</a> \r\nhttp://kioppoerk.com/ simple', '2017-12-25 18:49:15', '2017-12-25 18:49:15', '0');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Rent A Car', '2_1514008064.png', '2017-12-22 23:45:20', '2017-12-22 23:47:44'),
(3, 'Wedding', '6_1514008090.jpg', '2017-12-22 23:48:10', '2017-12-22 23:48:10'),
(4, 'Event management', 'event_1514008436.jpg', '2017-12-22 23:53:56', '2017-12-22 23:53:56'),
(5, 'Wedding', 'pexels-photo_1514009952.jpg', '2017-12-23 00:19:12', '2017-12-23 00:19:12'),
(6, 'Rent A Car', '2_1514010136.png', '2017-12-23 00:22:16', '2017-12-23 00:22:16');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_20_085922_create_service_table', 1),
(4, '2017_12_11_104624_create_gallaries_table', 2),
(5, '2017_12_13_055308_create_sliders_table', 3),
(6, '2017_12_17_061958_create_testimonials_table', 4),
(7, '2017_12_17_081256_create_contactlists_table', 5),
(8, '2017_12_17_105228_create_contactlists_table', 6),
(9, '2017_12_18_045554_add_status_to_contactlists_table', 7),
(10, '2017_12_18_092457_create_contactlist_table', 8),
(11, '2017_12_18_093028_add_status_to_contactlists_table', 9),
(12, '2017_12_18_093128_add_status_to_contactlists_table', 10),
(13, '2017_12_18_122951_create_abouts_table', 11),
(14, '2017_12_20_053401_create_newsletters_table', 12),
(15, '2017_12_20_110610_create_newsletters_table', 13),
(16, '2017_12_23_054143_create_galleries_table', 14),
(17, '2017_12_23_090623_add_slug_to_services_table', 15),
(18, '2017_12_23_105248_create_sliders_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'hafizur@yahoo.com', '0', '2017-12-21 03:23:35', '2017-12-21 03:23:35'),
(4, 'hafizur@yahoo.com', '0', '2017-12-23 00:23:12', '2017-12-23 00:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `slug`) VALUES
(17, 'Wedding Planner', 'Saiful Community Center is best community center in Bangladesh for arranging the event of Wedding. We have experienced in Maintaining at least 2000+ wedding ceremony in Saiful Community Primises.  So, if you have to plan for arranging a wedding ceremony in Bangladesh specially in the near of World longest sea beach Cox\'sbazar the we are the best. We have the facility for all arrangements for a wedding event.', 'Bride_and_Groom_1514670276.jpg', '2017-12-31 05:44:36', '2017-12-31 05:51:52', 'wedding-planner-in-coxbazar'),
(18, 'Event Manager', 'Your Event is our Responsibility. We ensure to confirm our best quality in the services that\'s why we handle it like as ours. You Just handover your responsibility to us. We are here you.', 'event_1514670505.jpg', '2017-12-31 05:48:25', '2017-12-31 05:48:25', 'event-management-in-coxbazar'),
(19, 'Catering Services', 'The Best Catering Services in coxbazar. Saiful Community center has lots of expert people who are able to provide the service of Catering Service in Coxbazar.', 'pexels-photo-104884_1514021394_1514670805.jpeg', '2017-12-31 05:53:25', '2017-12-31 05:54:44', 'catering-services'),
(20, 'Corporate Event Management', 'We have 3000+ capacity hall room in Saiful Community Center in Cox\'sbazar.  We are very much Concern to reach in their business goals through our services in Communication, education, measurement, rewards and events to inspire their employees, channel partners and customers.', 'corporate-dinner-events_1514671658.jpg', '2017-12-31 06:07:38', '2017-12-31 06:07:38', 'corporate-event-management-service');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'A wedding is a ceremony where two people or a couple are united in marriage.', 'We provide multiple venue configurations to fit in events according to size and volume of your attendance, you can fairly plan for wedding party, birthday, anniversary, seminar, conference, annual general meeting and many more.', 'slider3-min_1514108026.jpg', '2017-12-23 04:59:38', '2017-12-24 17:49:28'),
(2, 'Welcome to Saiful community center', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ipsum molestiae quas quo aut repellat modi iusto cupiditate adipisci, natus odio, explicabo sapiente.', 'party_1514110945.jpg', '2017-12-23 05:00:47', '2017-12-24 18:22:25'),
(3, 'Full Time Air Conditioning Support With Stand-by Generator.', 'We provide multiple venue configurations to fit in events according to size and volume of your attendance, you can fairly plan for wedding party, birthday, anniversary, seminar, conference, annual general meeting and many more.', 'maxresdefault_1514354629.jpg', '2017-12-23 05:01:38', '2017-12-27 14:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(12, 'Hope that, Saiful Community is the community center in Bangladesh for Wedding Planning Service in Bangladesh.', 'avatar-1606914_960_720_1514018761.png', '2017-12-23 02:46:01', '2017-12-31 06:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MR. SAIFUL ISLAM', 'saifulislam@gmail.com', '$2y$10$15Bg60K.RledFnvZcXVll.HTiQNBKbNPy1DJCAqXAUsupmyjhdtEq', 'WT8a8Ah2RQ8qkzlX1Bvvb8mIIOPrf0aGxF5NWFAnblS5MuV2hW347y4vxuL4', '2017-11-26 03:15:04', '2017-12-23 03:01:23'),
(2, 'Abdul Hamid', 'singlemah@gmail.com', 'aef79139d32655be4645eaeff06fc629', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactlists`
--
ALTER TABLE `contactlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contactlists`
--
ALTER TABLE `contactlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
