-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Drinks', 'uploads/categories/20200407191604.png', '2020-04-07 13:46:04', '2020-04-07 13:46:04'),
(8, 'Ice Cream', 'uploads/categories/20200411114510.png', '2020-04-11 06:15:10', '2020-04-11 06:15:10'),
(9, 'Cake', 'uploads/categories/20200411114519.png', '2020-04-11 06:15:19', '2020-04-11 06:15:19'),
(10, 'Cookie', 'uploads/categories/20200418180624.png', '2020-04-18 12:36:24', '2020-04-18 12:36:24'),
(11, 'Healthy', 'uploads/categories/20200418180901.png', '2020-04-18 12:39:01', '2020-04-18 12:39:01'),
(12, 'Pizza', 'uploads/categories/20200418180934.png', '2020-04-18 12:39:35', '2020-04-18 12:39:35'),
(13, 'Jam', 'uploads/categories/20200418181731.png', '2020-04-18 12:47:31', '2020-04-18 12:47:31'),
(14, 'Chips', 'uploads/categories/20200418181748.png', '2020-04-18 12:47:48', '2020-04-18 12:47:48'),
(15, 'Burger', 'uploads/categories/20200418181830.png', '2020-04-18 12:48:30', '2020-04-18 12:48:30'),
(16, 'Shrimp', 'uploads/categories/20200418181916.png', '2020-04-18 12:49:16', '2020-04-18 12:49:16'),
(17, 'Meet', 'uploads/categories/20200418181933.png', '2020-04-18 12:49:33', '2020-04-18 12:49:33'),
(18, 'Noodle', 'uploads/categories/20200418182008.png', '2020-04-18 12:50:08', '2020-04-18 12:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recipe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `recipe_id`, `likes`, `created_at`, `updated_at`) VALUES
(2, '8', 0, '2020-04-08 03:47:27', '2020-04-08 03:47:27'),
(3, '9', 0, '2020-04-09 09:07:11', '2020-04-09 09:07:11'),
(4, '10', 0, '2020-04-09 09:07:23', '2020-04-09 09:07:23'),
(5, '11', 0, '2020-04-09 15:28:48', '2020-04-09 15:28:48'),
(6, '12', 0, '2020-04-09 16:07:27', '2020-04-09 16:07:27'),
(7, '13', 0, '2020-04-15 01:58:02', '2020-04-15 01:58:02'),
(8, '14', 0, '2020-04-15 02:27:16', '2020-04-15 02:27:16'),
(10, '16', 0, '2020-04-15 13:16:31', '2020-04-15 13:16:31'),
(11, '17', 0, '2020-04-15 13:18:30', '2020-04-15 13:18:30'),
(12, '18', 0, '2020-04-15 13:20:19', '2020-04-15 13:20:19'),
(13, '19', 0, '2020-04-15 13:20:19', '2020-04-15 13:20:19'),
(14, '20', 0, '2020-04-15 13:25:24', '2020-04-15 13:25:24'),
(15, '21', 0, '2020-04-15 13:29:52', '2020-04-15 13:29:52'),
(16, '22', 0, '2020-04-15 13:31:52', '2020-04-15 13:31:52'),
(17, '23', 0, '2020-04-16 07:57:04', '2020-04-16 07:57:04'),
(18, '24', 0, '2020-04-16 07:57:33', '2020-04-16 07:57:33'),
(19, '25', 0, '2020-04-16 07:58:18', '2020-04-16 07:58:18'),
(20, '26', 0, '2020-04-16 08:03:29', '2020-04-16 08:03:29'),
(21, '27', 0, '2020-04-16 08:16:49', '2020-04-16 08:16:49'),
(22, '28', 0, '2020-04-16 08:20:04', '2020-04-16 08:20:04'),
(23, '29', 0, '2020-04-16 08:24:37', '2020-04-16 08:24:37'),
(24, '30', 0, '2020-04-18 12:58:29', '2020-04-18 12:58:29'),
(26, '32', 0, '2020-04-18 13:04:16', '2020-04-18 13:04:16'),
(27, '33', 0, '2020-04-18 13:10:57', '2020-04-18 13:10:57'),
(28, '34', 0, '2020-04-18 13:13:05', '2020-04-18 13:13:05'),
(29, '35', 0, '2020-04-18 13:13:58', '2020-04-18 13:13:58');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_05_164621_create_recipes_table', 2),
(5, '2020_04_05_165852_create_categories_table', 3),
(7, '2020_04_08_040726_create_likes_table', 4),
(8, '2020_04_10_124616_create_verifications_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/recipes/default.png',
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `name`, `ingredients`, `description`, `image`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(8, '1', 'Clouths', 'asdsad', '<p>asdasd</p>', 'uploads/recipes/20200408091726.jpg', 7, 0, '2020-04-08 03:47:27', '2020-04-18 12:59:15'),
(9, '2', 'asdasd', 'asdasda', '<p>asdasdasd</p>', 'uploads/recipes/20200409143711.jpg', 8, 0, '2020-04-09 09:07:11', '2020-04-18 12:59:20'),
(10, '2', 'sadasd', 'adasdasd', '<p><strong>adsasdasdasdasd</strong></p>', 'uploads/recipes/20200409143723.jpg', 7, 0, '2020-04-09 09:07:23', '2020-04-18 12:59:09'),
(11, '1', 'sfsdfsdcccccccc', 'asfasdf', '<p>sdasd<strong>asdasdasd<em>asdasdasd</em>asdasd</strong>asdasd</p>', 'uploads/recipes/20200409205848.jpg', 9, 0, '2020-04-09 15:28:48', '2020-04-18 12:59:24'),
(12, '1', 'sdfsdfadf', 'sadfffffffffffffffff', '<p>sdfsadfasdfasdfasdfasdfsadfasd</p>', 'uploads/recipes/20200409213727.png', 7, 0, '2020-04-09 16:07:27', '2020-04-18 12:59:29'),
(13, '1', 'hhh', 'hy', 'yyyy', 'uploads/recipes/default.jpg', 8, 0, '2020-04-15 01:58:02', '2020-04-18 12:59:00'),
(14, '1', 'gghh', 'ftyy', 'gyuukkjk', 'uploads/recipes/default.jpg', 8, 0, '2020-04-15 02:27:16', '2020-04-18 12:58:53'),
(16, '1', 'gggg', 'hh', 'xxxxx', 'uploads/recipes/default.jpg', 8, 0, '2020-04-15 13:16:31', '2020-04-15 13:16:31'),
(17, '1', 'gggg', 'hh', 'pppppp', 'uploads/recipes/default.jpg', 8, 0, '2020-04-15 13:18:30', '2020-04-15 13:18:30'),
(18, '1', 'hhsshss', 'hsjjs', 'mmmm', 'uploads/recipes/default.jpg', 8, 0, '2020-04-15 13:20:19', '2020-04-15 13:20:19'),
(19, '1', 'hhsshss', 'hsjjs', 'mmmm', 'uploads/recipes/default.jpg', 8, 0, '2020-04-15 13:20:19', '2020-04-15 13:20:19'),
(20, '1', 'hhsshss', 'hsjjs', 'mmmm', 'uploads/recipes/default.jpg', 8, 0, '2020-04-15 13:25:24', '2020-04-15 13:25:24'),
(21, '1', 'hhsshss', 'hsjjs', 'mmmmooooo', 'uploads/recipes/default.png', 8, 0, '2020-04-15 13:29:52', '2020-04-15 13:29:52'),
(22, '1', 'hhsshss', 'hsjjs', 'mmmmoooooxxxxxxxxx', 'uploads/recipes/20200415190152.JPG', 8, 0, '2020-04-15 13:31:52', '2020-04-15 13:31:52'),
(23, '1', 'ggff', 'ttyyyy', 'qqqqq', 'uploads/recipes/20200416132704.JPG', 8, 0, '2020-04-16 07:57:04', '2020-04-16 07:57:04'),
(24, '1', 'ggff', 'ttyyyy', 'qqqqq', 'uploads/recipes/20200416132733', 8, 0, '2020-04-16 07:57:33', '2020-04-16 07:57:33'),
(25, '1', 'ggff', 'ttyyyy', 'qqqqq', 'uploads/recipes/20200416132818.jpg', 8, 0, '2020-04-16 07:58:18', '2020-04-16 07:58:18'),
(26, '1', 'ggff', 'ttyyyy', 'qqqqq', 'uploads/recipes/20200416133329.jpg', 8, 0, '2020-04-16 08:03:29', '2020-04-16 08:03:29'),
(27, '1', 'ee', 'wwww', 'wwwwww', 'uploads/recipes/20200416134649.jpg', 8, 0, '2020-04-16 08:16:49', '2020-04-16 08:16:49'),
(28, '1', 'qqq', 'ssss', 'mmmmmmqqqq', 'uploads/recipes/20200416135004.jpg', 8, 0, '2020-04-16 08:20:04', '2020-04-16 08:20:04'),
(29, '1', 'rttt', 'cg', 'wwrvjk', 'uploads/recipes/20200416135437.jpg', 8, 0, '2020-04-16 08:24:37', '2020-04-16 08:24:37'),
(30, '2', 'dgsg', 'sgsdfg', '<p>sdfgsfgsdfg</p>', 'uploads/recipes/20200418182829.jpg', 16, 0, '2020-04-18 12:58:29', '2020-04-18 12:59:34'),
(32, '2', 'Easy butter chicken', 'lemon  , juiced', '<ol class=\"method__list\">\r\n<li class=\"method__item\">\r\n<p>In a medium bowl, mix all the marinade ingredients with some seasoning. Chop the chicken into bite-sized pieces and toss with the marinade. Cover and chill in the fridge for 1 hr or overnight.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>In a large, heavy saucepan, heat the oil. Add the onion, garlic, green chilli, ginger and some seasoning. Fry on a medium heat for 10 mins or until soft.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>Add the spices with the tomato pur&eacute;e, cook for a further 2 mins until fragrant, then add the stock and marinated chicken. Cook for 15 mins, then add any remaining marinade left in the bowl. Simmer for 5 mins, then sprinkle with the toasted almonds. Serve with rice, naan bread, chutney, coriander and lime wedges, if you like</p>\r\n</li>\r\n</ol>', 'uploads/recipes/20200418183416.jpg', 17, 1, '2020-04-18 13:04:16', '2020-04-18 13:09:18'),
(33, '2', 'Easy classic lasagne', '1 tbsp olive oil  2 rashers smoked streaky bacon 1 onion  , finely chopped 1 celery   stick, finely chopped 1 medium carrot  , grated 2 garlic cloves, finely chopped 500g beef mince 1 tbsp tomato purée', '<ol class=\"method__list\">\r\n<li class=\"method__item\">\r\n<p>Heat the oil in a large saucepan. Use kitchen scissors to snip the bacon into small pieces, or use a sharp knife to chop it on a chopping board. Add the bacon to the pan and cook for just a few mins until starting to turn golden. Add the onion, celery and carrot, and cook over a medium heat for 5 mins, stirring occasionally, until softened.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>Add the garlic and cook for 1 min, then tip in the mince and cook, stirring and breaking it up with a wooden spoon, for about 6 mins until browned all over.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>Stir in the tomato pur&eacute;e and cook for 1 min, mixing in well with the beef and vegetables. Tip in the chopped tomatoes. Fill each can half full with water to rinse out any tomatoes left in the can, and add to the pan. Add the honey and season to taste. Simmer for 20 mins.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>Heat oven to 200C/180C fan/gas 6. To assemble the lasagne, ladle a little of the ragu sauce into the bottom of the roasting tin or casserole dish, spreading the sauce all over the base. Place 2 sheets of lasagne on top of the sauce overlapping to make it fit, then repeat with more sauce and another layer of pasta. Repeat with a further 2 layers of sauce and pasta, finishing with a layer of pasta.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>Put the cr&egrave;me fra&icirc;che in a bowl and mix with 2 tbsp water to loosen it and make a smooth pourable sauce. Pour this over the top of the pasta, then top with the mozzarella. Sprinkle Parmesan over the top and bake for 25&ndash;30 mins until golden and bubbling. Serve scattered with basil, if you like.</p>\r\n</li>\r\n</ol>', 'uploads/recipes/20200418184057.jpg', 7, 1, '2020-04-18 13:10:57', '2020-04-18 13:12:05'),
(34, '2', 'Thai fried prawn & pineapple rice', 'tsp sunflower oil  bunch spring onions, greens and whites separated, both sliced 1 green pepper, deseeded and chopped into small chunks 140g pineapple  , chopped into bite-sized chunks', '<ol class=\"method__list\">\r\n<li class=\"method__item\">\r\n<p>Heat the oil in a wok or non-stick frying pan and fry the spring onion whites for 2 mins until softened. Stir in the pepper for 1 min, followed by the pineapple for 1 min more, then stir in the green curry paste and soy sauce.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>Add the rice, stir-frying until piping hot, then push the rice to one side of the pan and scramble the eggs on the other side. Stir the peas, bamboo shoots and prawns into the rice and eggs, then heat through for 2 mins until the prawns are hot and the peas tender. Finally, stir in the spring onion greens, lime juice and coriander, if using. Spoon into bowls and serve with extra lime wedges and soy sauce.</p>\r\n</li>\r\n</ol>', 'uploads/recipes/20200418184305.jpg', 15, 1, '2020-04-18 13:13:05', '2020-04-18 13:14:08'),
(35, '2', 'One-pan spaghetti with nduja, fennel & olives', '400g spaghetti 3 garlic cloves, very thinly sliced', '<ol class=\"method__list\">\r\n<li class=\"method__item\">\r\n<p>Boil the kettle. Put all the ingredients except the pecorino and basil in a wide saucepan or deep frying pan and season well. Pour over 800ml kettle-hot water and bring to a simmer, using your tongs to ease the spaghetti under the liquid as it starts to soften.</p>\r\n</li>\r\n<li class=\"method__item\">\r\n<p>Simmer, uncovered, for 10-12 mins, tossing the spaghetti through the liquid every so often until it is cooked and the sauce is reduced and clinging to it. Add a splash more hot water if the sauce is too thick or does not cover the pasta while it cooks. Turn up the heat for the final few mins to drive off the excess liquid, leaving you with a rich sauce. Stir through the pecorino and basil, and serve with an extra drizzle of oil and pecorino on the side.</p>\r\n</li>\r\n</ol>', 'uploads/recipes/20200418184358.jpg', 17, 1, '2020-04-18 13:13:58', '2020-04-18 13:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/profile_pic/default.png',
  `user_type` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_pic`, `user_type`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Alverta Lowe', 'tgrafix95@gmail.com', 'uploads/profile_pic/20200416144918.jpg', 1, 1, '2020-04-05 09:25:43', '$2y$10$1xWzAPvCAe/FU0WdmfoLb.Lpupt1.//vtsWJsAKF1sWuTaMEOrSW.', 'JHwSuXdPb7TUyzUHjngFJtb6brVas3IKfkI351OzDwuZtFtwDMogTSq5bDYA', '2020-04-05 09:25:43', '2020-04-12 11:31:45'),
(2, 'Kavindu Theekshana', 'kavindutheekshana@gmail.com', 'uploads/profile_pic/20200418184713.jpg', 0, 1, NULL, '$2y$10$mRxIHpWWcc9fvau5QgUa.OZ69J1xD2iKKL2beG1vctGxa/b6a96ze', NULL, '2020-04-05 08:49:06', '2020-04-18 13:17:13'),
(4, 'Miss Mable Kulas II', 'purdy.jeanne@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bAqz8JPDOG', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(5, 'Dr. Ramon Roberts I', 'lhessel@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'i7263oI2Ve', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(6, 'Ludwig Lemke', 'pabshire@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QezFW2RylT', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(8, 'Earlene Ferry', 'dmayert@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AN3mwjgGk3', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(9, 'Kevon Kertzmann', 'tconsidine@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fNQ5fsM2AZ', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(10, 'Maia Gaylord', 'stoltenberg.mortimer@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E7VMR4f2dT', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(11, 'Dr. Sebastian O\'Connell III', 'helen35@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ekidJnW4z2', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(12, 'Laney Huel MD', 'emmerich.isac@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Hka7HDUXi4', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(13, 'Dr. Maymie Lesch DDS', 'olson.micheal@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2DqtQO13le', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(14, 'Karley Wuckert', 'zbarton@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DNWfIUriCx', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(16, 'Viola Rolfson', 'flo19@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YcBpRh3SBg', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(17, 'Nigel Trantow', 'jblanda@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MHpYpqasl3', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(18, 'Dr. Garnett Koss', 'carissa04@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1UefL4KFuF', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(19, 'Prof. Enoch Herman', 'ogusikowski@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3BqefqV3re', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(20, 'Delilah Mante', 'marguerite.hammes@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xa0mxY66lr', '2020-04-05 09:25:43', '2020-04-06 11:14:38'),
(21, 'Nyah Windler', 'toy.yessenia@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T9OsSApZgR', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(22, 'Garrison Schulist', 'bo88@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oMSO7VeiA9', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(23, 'Dortha Graham', 'maybelle43@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JeVaWqaP6K', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(24, 'Maye Rodriguez DDS', 'rowe.santiago@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OLXunmu573', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(25, 'Lexie Ward I', 'valentine44@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'coMWrBtpJp', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(26, 'Raymond Cronin DDS', 'niko.altenwerth@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wobgPYs2us', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(27, 'Dr. Milan Davis V', 'jennings18@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OIdXonlY6r', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(28, 'Mr. William O\'Kon II', 'aaron.will@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4uApwhWgb2', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(29, 'Lucas Haley', 'walker.dock@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nAVdEzXlnO', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(30, 'Dylan Towne', 'cortez.kilback@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oCEo4j4Mua', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(31, 'Wilfred Pfeffer', 'dexter22@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PgeeeNyuQ2', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(32, 'Dr. Carole Spencer III', 'adah92@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YF0uNJu9MD', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(33, 'Jesus Heidenreich', 'bernard64@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LRJGe8VKf2', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(34, 'Isadore Haley', 'bernice68@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VBhdcBrX3y', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(35, 'Graciela Williamson', 'tyrese.armstrong@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XyCAaACe6m', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(37, 'Raul Marvin V', 'dibbert.evangeline@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QlPZTV6vcE', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(38, 'Emily Spencer', 'christopher26@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UAetiqlHQE', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(39, 'Marie Kunze DDS', 'melba.aufderhar@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bpQvjYkAVE', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(40, 'Rowland Halvorson', 'kristy10@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HCZNx8SdCU', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(41, 'Dr. Linwood Willms', 'lwolf@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hGMoVg9qTc', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(42, 'Prof. Arthur Sanford MD', 'lenore97@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zgUiwf1wqN', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(43, 'Mr. Morgan Erdman DVM', 'norberto02@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LGQg1KkZuv', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(44, 'Domenico Kunze', 'tbechtelar@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'u2ety6U6y2', '2020-04-05 09:25:43', '2020-04-06 11:14:42'),
(45, 'Era Harvey', 'nelda72@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '861hmlIZhC', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(46, 'Orland Konopelski', 'ratke.casimir@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5Pi12m8o2S', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(47, 'Prof. Maurice Kertzmann V', 'qbalistreri@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WolGp9M5GO', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(48, 'Emmy Legros', 'towne.kaitlin@example.net', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cfqjHJieGM', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(49, 'Cristian Batz', 'xbeer@example.com', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's2DfCdZoZq', '2020-04-05 09:25:43', '2020-04-06 11:14:36'),
(50, 'Ms. Vickie Collier Jr.', 'marcelo.farrell@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '19oWDRCkZR', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(51, 'Reagan Leffler', 'wbashirian@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nLPXp97iPh', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(52, 'Sandy Graham', 'danielle.ledner@example.org', 'uploads/profile_pic/default.png', 1, 1, '2020-04-05 09:25:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KxvSiRwRJB', '2020-04-05 09:25:43', '2020-04-05 09:25:43'),
(54, 'Kavindu Theekshana', 'kavindutheekshananew@gmail.com', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$TkD8IJ2zk7EAWgTi5ZM.gOP.aSkA8L0xuJRoFqxZs7p9HlcHdZTVa', NULL, '2020-04-10 04:15:18', '2020-04-10 04:15:18'),
(55, 'Kavindu Theekshana', 'kavindutheekshananew2@gmail.com', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$xMZSatyNBDiqYr/rl9L2G.geyAa51wdiApAoRHh1y2AD68w.d1rfC', NULL, '2020-04-10 04:21:32', '2020-04-10 04:21:32'),
(56, 'sachindu', 'sachindu@gmail.com', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$suvlyb1qL4pspAAV5tbMmeOaihCh2NFtDvZ/hZ3hSBMYFI.Gmf7Ym', NULL, '2020-04-10 04:26:39', '2020-04-10 04:26:39'),
(57, 'sachindu', 'sachibndu@gmail.com', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$SXYzgIeI/JrzlAwrQopAb.8OwcX4xEVr1WuEt9qm4uZG6uCsfbg9e', NULL, '2020-04-10 04:29:35', '2020-04-10 04:29:35'),
(58, 'sachindu', 'sachindu@gmail.comy', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$U42i1SI8.dBmUM521OEUHez6sS9BeXmC3nWqGP4CxEYwOqPkkrpjy', NULL, '2020-04-10 04:35:36', '2020-04-10 04:35:36'),
(59, 'jdjdhdhd', 'hsjsj@jdjdd.com', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$lXrhJAoNuyTlQ6pXfS5qq.6ArI819DnCUYjnIQlAAiTRRSWQpIzRu', NULL, '2020-04-10 04:38:30', '2020-04-10 04:38:30'),
(60, 'jajaka', 'iw@jd.com', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$g7fSdYG1gMlS1KK/6zD4j.XR7gGgxhQtf/8Z4UH7ghZTMG/DOvhmu', NULL, '2020-04-10 04:41:22', '2020-04-10 04:41:22'),
(61, 'jsjsjs', 'hhh@jjj.bnn', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$LugPYYVorS2D/g4fzQZyEefPvzfBD2ARk2HLbXmv/1Atl0CBya75e', NULL, '2020-04-10 04:42:53', '2020-04-10 04:42:53'),
(62, 'yyyu', 'hjhj@ggg.bbbb', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$nxZbXF1XZGzIO0Z.SMegcOfvAGLpoUYzVnejImFAiXRk7NYnO6Y2O', NULL, '2020-04-10 04:49:40', '2020-04-10 04:49:40'),
(63, 'qqq', 'hshshs@jdjdjd.hdjd', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$pWMuli23aZlE54j.W2IELewV9zQ71xQ1o53sBp.eTtNL.bIEgf89K', NULL, '2020-04-10 04:50:44', '2020-04-10 04:50:44'),
(64, 'gggggh', 'ggggg@hhh.cccc', 'uploads/profile_pic/default.png', 1, 1, NULL, '$2y$10$2dYYsoZbn5/NH1dJEff3B.MdOtyUl8P2D2s8c2KEahqeTU3.nJWOq', NULL, '2020-04-10 04:52:08', '2020-04-10 04:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`id`, `email`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kavindutheekshana@gmail.com', '3693', 0, '2020-04-10 07:20:16', '2020-04-10 07:20:16'),
(2, 'kavindutheekshana@gmail.com', '3466', 0, '2020-04-10 09:02:32', '2020-04-10 09:02:32'),
(3, 'kavindutheekshana@gmail.com', '5742', 0, '2020-04-10 09:03:03', '2020-04-10 09:03:03'),
(4, 'kavindutheekshana@gmail.com', '8777', 0, '2020-04-10 09:04:56', '2020-04-10 09:04:56'),
(5, 'kavindutheekshana@gmail.com', '6128', 0, '2020-04-10 09:05:21', '2020-04-10 09:05:21'),
(6, 'kavindutheekshana@gmail.com', '6229', 0, '2020-04-10 09:06:30', '2020-04-10 09:06:30'),
(7, 'kavindutheekshana@gmail.com', '7851', 0, '2020-04-10 09:06:55', '2020-04-10 09:06:55'),
(8, 'kavindutheekshana@gmail.com', '1865', 0, '2020-04-10 09:07:20', '2020-04-10 09:07:20'),
(9, 'kavindutheekshana@gmail.com', '8230', 0, '2020-04-10 10:02:56', '2020-04-10 10:02:56'),
(10, 'kavindutheekshana@gmail.com', '2098', 0, '2020-04-10 10:03:24', '2020-04-10 10:03:24'),
(11, 'kavindutheekshana@gmail.com', '6894', 0, '2020-04-10 10:03:50', '2020-04-10 10:03:50'),
(12, 'kavindutheekshana@gmail.com', '1157', 0, '2020-04-10 10:04:15', '2020-04-10 10:04:15'),
(13, 'kavindutheekshana@gmail.com', '3465', 0, '2020-04-10 10:06:50', '2020-04-10 10:06:50'),
(14, 'kavindutheekshana@gmail.com', '3936', 0, '2020-04-10 10:07:16', '2020-04-10 10:07:16'),
(15, 'kavindutheekshana@gmail.com', '5260', 0, '2020-04-10 10:07:46', '2020-04-10 10:07:46'),
(16, 'kavindutheekshana@gmail.com', '4756', 0, '2020-04-10 10:08:11', '2020-04-10 10:08:11'),
(17, 'kavindutheekshana@gmail.com', '6773', 0, '2020-04-10 10:13:38', '2020-04-10 10:13:38'),
(18, 'kavindutheekshana@gmail.com', '5293', 0, '2020-04-10 10:14:04', '2020-04-10 10:14:04'),
(19, 'kavindutheekshana@gmail.com', '5818', 0, '2020-04-10 10:14:30', '2020-04-10 10:14:30'),
(20, 'kavindutheekshana@gmail.com', '1742', 0, '2020-04-10 10:14:56', '2020-04-10 10:14:56'),
(21, 'kavindutheekshana@gmail.com', '9157', 0, '2020-04-10 10:15:29', '2020-04-10 10:15:29'),
(22, 'kavindutheekshana@gmail.com', '4566', 0, '2020-04-10 10:15:55', '2020-04-10 10:15:55'),
(23, 'kavindutheekshana@gmail.com', '9075', 0, '2020-04-10 10:15:55', '2020-04-10 10:15:55'),
(24, 'kavindutheekshana@gmail.com', '2850', 0, '2020-04-10 10:15:56', '2020-04-10 10:15:56'),
(25, 'kavindutheekshana@gmail.com', '5301', 0, '2020-04-10 10:15:56', '2020-04-10 10:15:56'),
(26, 'kavindutheekshana@gmail.com', '9195', 0, '2020-04-10 10:17:31', '2020-04-10 10:17:31'),
(27, 'kavindutheekshana@gmail.com', '1656', 0, '2020-04-10 10:17:39', '2020-04-10 10:17:39'),
(28, 'kavindutheekshana@gmail.com', '7550', 0, '2020-04-10 10:18:30', '2020-04-10 10:18:30'),
(29, 'kavindutheekshana@gmail.com', '1731', 0, '2020-04-10 10:18:57', '2020-04-10 10:18:57'),
(30, 'kavindutheekshana@gmail.com', '6737', 0, '2020-04-10 10:19:26', '2020-04-10 10:19:26'),
(31, 'kavindutheekshana@gmail.com', '1692', 0, '2020-04-10 10:22:23', '2020-04-10 10:22:23'),
(32, 'kavindutheekshana@gmail.com', '7482', 0, '2020-04-10 10:23:51', '2020-04-10 10:23:51'),
(33, 'kavindutheekshana@gmail.com', '9309', 0, '2020-04-10 10:24:17', '2020-04-10 10:24:17'),
(34, 'kavindutheekshana@gmail.com', '3819', 0, '2020-04-10 10:36:42', '2020-04-10 10:36:42'),
(35, 'kavindutheekshana@gmail.com', '8686', 0, '2020-04-10 10:46:05', '2020-04-10 10:46:05'),
(36, 'kavindutheekshana@gmail.com', '5381', 0, '2020-04-10 10:47:58', '2020-04-10 10:47:58'),
(37, 'kavindutheekshana@gmail.com', '5733', 0, '2020-04-10 10:52:26', '2020-04-10 10:52:26'),
(38, 'kavindutheekshana@gmail.com', '6087', 0, '2020-04-10 11:05:23', '2020-04-10 11:05:23'),
(39, 'kavindutheekshana@gmail.com', '3522', 0, '2020-04-10 11:27:01', '2020-04-10 11:27:01'),
(40, 'kavindutheekshana@gmail.com', '4060', 0, '2020-04-11 00:42:33', '2020-04-11 00:42:33'),
(41, 'kavindutheekshana@gmail.com', '1754', 0, '2020-04-11 00:53:33', '2020-04-11 00:53:33'),
(42, 'kavindutheekshana@gmail.com', '3706', 0, '2020-04-11 00:54:31', '2020-04-11 00:54:31'),
(43, 'kavindutheekshana@gmail.com', '7453', 0, '2020-04-11 01:29:20', '2020-04-11 01:29:20'),
(44, 'kavindutheekshana@gmail.com', '6716', 0, '2020-04-11 02:22:56', '2020-04-11 02:22:56'),
(45, 'kavindutheekshana@gmail.com', '3623', 0, '2020-04-11 02:24:24', '2020-04-11 02:24:24'),
(46, 'kavindutheekshana@gmail.com', '3571', 0, '2020-04-11 02:26:22', '2020-04-11 02:26:22'),
(47, 'kavindutheekshana@gmail.com', '3952', 0, '2020-04-11 04:44:40', '2020-04-11 04:44:40'),
(48, 'kavindutheekshana@gmail.com', '7486', 0, '2020-04-11 04:47:23', '2020-04-11 04:47:23'),
(49, 'tgrafix95@gmail.com', '6771', 0, '2020-04-11 06:06:28', '2020-04-11 06:06:28'),
(50, 'tgrafix95@gmail.com', '2136', 0, '2020-04-18 13:38:04', '2020-04-18 13:38:04'),
(51, 'kavindutheekshana@gmail.com', '6473', 0, '2020-04-22 16:22:11', '2020-04-22 16:22:11'),
(52, 'kavindutheekshana@gmail.com', '4843', 0, '2020-04-22 16:25:29', '2020-04-22 16:25:29'),
(53, 'kavindutheekshana@gmail.com', '8013', 0, '2020-04-22 16:25:59', '2020-04-22 16:25:59'),
(54, 'kavindutheekshana@gmail.com', '3640', 0, '2020-04-24 06:29:02', '2020-04-24 06:29:02'),
(55, 'kavindutheekshana@gmail.com', '5573', 0, '2020-04-24 07:10:00', '2020-04-24 07:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
