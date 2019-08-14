-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 10:41 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `title`, `description`, `image`, `excerpt`, `status`, `created_at`, `updated_at`) VALUES
(41, 2, 1, 'भक्तपुरमा नाला सोेर्दै प्रधानमन्त्री रोजगार !', '२ असार, काठमाडौं । समय– आइतबार मध्यान्ह साढे १ बजे ।\r\nस्थान– सूर्यविनायक नगरपालिका–५, तीनधारा ।\r\nसन्दर्भ– प्रधानमन्त्री रोजगार कार्यक्रम कार्यान्वयन !\r\n\r\n‘प्रधानमन्त्री रोजगार कार्यक्रम’ को पहेँलो ज्याकेट लगाएर हातमा साबेल (बेल्चा) बोकेका ३० भन्दा बढी कामदार तीनधारामाथिको चौतारामा भेटिए । उनीहरु १ आधा घण्टा जति काम गरेर त्यहाँ सुस्ताएका रहेछन् ।', '1560750232.jpg', 'भक्तपुरमा नाला सोेर्दै प्रधानमन्त्री रोजगार !', 1, '2019-06-16 23:58:53', '2019-06-16 23:58:53'),
(42, 2, 1, 'विपक्षी भन्छन्– प्रदेश ५ को बजेट वितरणमुखी, पहाडमुखी !', '२ असार, बुटवल । प्रदेश ५ सरकारले आर्थिक बर्ष २०७६/०७७ का लागि ३६ अर्ब ४१ करोड ६८ लाखको बजेट ल्याएपछि बजेटका बिषयमा टीकाटिप्पणी शुरु भैसकेको छ । प्रदेश ५ का सांसदहरुले बजेटबारे मिश्रित प्रतिक्रिया दिएका छन् ।\r\n\r\nसत्ताधारी प्रदेशसभा सदस्यहरुले बजेट समग्रमा राम्रो रहेको रहेको प्रतिक्रिया दिइरहँदा प्रमुख प्रतिपक्षी दलका सांसदहरुले भने बजेट वितरणमुखी, पहाडमुखी र कम्युनिष्टको लाइन अनुसार आएको बताएका छन् ।', '1560750321.jpg', 'विपक्षी भन्छन्– प्रदेश ५ को बजेट वितरणमुखी, पहाडमुखी !', 1, '2019-06-17 00:00:21', '2019-06-17 00:00:21'),
(43, 2, 3, 'सिपाघाटमा नयाँ टेलिफोन एक्सचेन्जको उद्घाटन', '३२ जेठ, काठमाडौं । सञ्चार तथा सूचना प्रविधि मन्त्री गोकुलप्रसाद बाँस्कोटाले काभ्रेपलाञ्चोक जिल्लाको सिपाघाटमा नयाँ टेलिफोन एक्सचेन्जको उद्घाटन गरे । नयाँ स्थापित एक्सचेञ्जबाट सञ्चालित टेलिफोनमार्फत मण्डन देउपुर वडा नम्बर ६ का वडाध्यक्ष डिल्लीप्रसाद आचार्यलाई फोन गरेर उनले सो एक्सचेञ्जको उद्घाटन गरेका हुन् ।\r\n\r\nसो अवसरमा उनले ‘जहाँ जनता त्यहाँ विकास’ भन्ने नारालाई साकार पार्ने क्रममा सिपाघाटमा सञ्चार सेवा पुर्‍याइएको र यसबाट सस्तोमा भरपर्दो टेलिफोन तथा इन्टरनेट चलाउन पाइने बताए ।', '1560750392.jpg', 'सिपाघाटमा नयाँ टेलिफोन एक्सचेन्जको उद्घाटन', 1, '2019-06-17 00:01:32', '2019-06-17 00:01:32'),
(44, 2, 3, 'सारा र इशानको जोडी पर्दामा', 'चलचित्र ‘सिम्बा’बाट निकै चर्चा कमाएकी नायिका साराअली खानको क्रेज अहिले लोभलाग्दो बनिसकेको छ । उनको व्यस्ता पनि दिन प्रतिदिन बढ्दै गइरहेको छ । हाल सारा चलचित्र ‘लभ आजकल २’को छायांकनमा व्यस्त छिन् । यो चलचित्रमा साराले आफ्नो ‘क्रस’ कात्तिक आर्यनसँग रोमान्स गरिरहेकी छिन् ।\r\n\r\nयस्तैमा साराले नयाँ चलचित्रमा काम गर्ने समाचार बाहिरिएको छ । बलिउड मिडियालाई आधार मान्ने हो भने साराले ‘भारत’ निर्देशक अली अब्बास जफरको प्रोडक्सन हाउसबाट बन्ने चलचित्रमा काम गर्ने पक्का भएको छ । यो चलचित्रका लागि सारको जोडी भएर काम गर्न इशान खट्टर तयार भएका छन् ।', '1560750449.jpg', 'सारा र इशानको जोडी पर्दामा', 1, '2019-06-17 00:02:29', '2019-06-17 00:02:29'),
(45, 2, 2, '१३औं सागको लागि ५ अर्ब २६ लाख बजेट माग', '१ असार, काठमाडौं । आगामी डिसेम्बरमा १३ औं दक्षिण एसियाली खेलकुद प्रतियोगिता (साग) आयोजना गर्न राष्ट्रिय खेलकुद परिषद् (राखेप)०ले ५ अर्ब २६ करोड ५७ लाख ४२ हजार बजेट माग गरेको छ ।\r\n\r\nराखेप उपाध्यक्ष पिताम्बर तिम्सिनाको संयोजकत्वमा निर्माण भएको बजेट निर्माण कार्यदलले आइतबार युवा तथा खेलकुदमन्त्री जगतबहादुर विश्वकर्मा समक्ष १३औं साग सम्पन्न गर्न बजेटको माग गरेका हुन्', '1560750505.jpg', '१३औं सागको लागि ५ अर्ब २६ लाख बजेट माग', 1, '2019-06-17 00:03:25', '2019-06-17 00:03:25'),
(46, 2, 1, 'नेपालमा लगानी गर्न फ्रान्सेली व्यवसायीलाई प्रधानमन्त्रीको आग्रह', '३० जेठ, बार्सिलोना । प्रधानमन्त्री केपी शर्मा ओलीले नेपालमा लगानी मैत्री बातावरण रहेको भन्दै फ्रान्सेली ब्यबसायीहरुलाई लगानी गर्न आग्रह गरेका छन् । बुधबार फ्रान्सका ब्यवसायीसँगको भेटघाटमा प्रधानमन्त्रीले ओलीले नेपालमा राजनीतिक स्थायित्वका साथै कानुनी जटिलताको अन्त्य भएको भन्दै लगानी गर्न आग्रह गरेका हुन् ।\r\n\r\nबेलायतको तीन दिने भम्रण सकेर भूमिगत रेल चढेर बुधबार दिउँसो पेरिस पुगेका प्रधानमन्त्री ओलीले उद्योग वाणिज्य महासंघका अधिकारीहरुसँग छलफल गरेका थिए ।', '1560750567.jpg', 'नेपालमा लगानी गर्न फ्रान्सेली व्यवसायीलाई प्रधानमन्त्रीको आग्रह', 1, '2019-06-17 00:04:27', '2019-06-17 00:04:27'),
(47, 2, 1, 'प्रदेश २ मा लफडा : संसद अवरुद्व पार्ने नेकपाको चेतावनी', '२ असार, जनकपुरधाम । प्रदेश २ सरकारले आगामी आर्थिक वर्षका लागि आइतबार प्रस्तुत गरेको बजेट विपक्षी सांसदको अनुपस्थितिमै टेबल भयो । विपक्षी नेकपाका सांसदहरु बाहिर गएपछि सत्तासीन सांसदहरुको मात्रै उपस्थितिमा बजेट टेबल गरिएको हो ।\r\n\r\nसत्ता पक्षले विपक्षी सांसदहरु निर्धारित समयमा नआएकाले तोकिएको समयमा बजेट टेबल गरिएको बताएका छन् ।', '1560750638.jpg', 'प्रदेश २ मा लफडा : संसद अवरुद्व पार्ने नेकपाको चेतावनी', 1, '2019-06-17 00:05:38', '2019-06-17 00:05:38'),
(48, 2, 2, 'सात प्रदेशको बजेट : सातथरी नारा, दशथरी वितरण', '१ असार, काठमाडौं । सातवटै प्रदेशले आइतबार आगामी आर्थिक वर्ष २०७६/७७ का लागि बजेट सार्वजनिक गरेका छन् । चालु आर्थिक वर्षको तुलनामा आगामी वर्ष प्रदेशहरुको कूल बजेट २०.३३ प्रतिशतले बढेको छ ।\r\n\r\nअन्तर सरकारी वित्त व्यवस्थापन ऐनको प्रावधानअनुसार असार १ गतेभित्र सबै प्रदेशले बजेट ल्याउनुपर्ने बाध्यता छ । आगामी आर्थिक वर्षका लागि सातवटै प्रदेशको कूल बजेट २ अर्ब ५९ अर्ब ६० करोड रुपैयाँ रहेको छ ।', '1560750719.jpg', 'सात प्रदेशको बजेट : सातथरी नारा, दशथरी वितरण', 1, '2019-06-17 00:06:59', '2019-06-17 00:06:59'),
(49, 2, 2, 'टाटा ट्रस्ट र सिप्रदी सिन्धुपाल्चोकमा विद्यालय पुनर्निर्माण गर्दै, कुपकन्या माबि हस्तान्तरण', '३१ जेठ, काठमाडौं । टाटा ट्रस्ट तथा सिप्रदी ट्रेडिङ प्रा लिले सामाजिक उत्तरदायित्व अन्तर्गत सिन्धुपाल्चोकमा एक विद्यालयको पुनर्निर्माण सम्पन्न गरी हस्तान्तरण गरेको छ।\r\n\r\nसिप्रदी ट्रेडिङको सामाजिक उत्तरदायित्व विङ-सिप्रदीयन सहायता संस्थाको सहयोगमा पुनर्निर्माण गरिएको सिन्धुपालचोक जिल्लास्थित कुपकन्या माध्यमिक विद्यालय हस्तान्तरण गरिएको हो।', '1560750777.jpg', 'टाटा ट्रस्ट र सिप्रदी सिन्धुपाल्चोकमा विद्यालय पुनर्निर्माण गर्दै, कुपकन्या माबि हस्तान्तरण', 1, '2019-06-17 00:07:58', '2019-06-17 00:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Poletics', 'History', '2019-06-13 23:12:01', '2019-06-17 00:10:58'),
(2, 'Development', 'Economics', '2019-06-13 23:12:20', '2019-06-17 00:11:09'),
(3, 'Entertainment', 'er', '2019-06-14 02:47:59', '2019-06-17 00:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_13_083216_create_categories_table', 1),
(4, '2019_06_13_083317_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '3',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, 1, '$2y$10$NC7Q34vxEffdf.kUnXyy8ulTytFG1MTr3aD/OB1VSpiARBUmDrDsO', 'S9y8ZJriiQoqVh83ytLlTV955QCFOPIMQhhuL8ycwerrV9hXGDmi6PKfSVie', '2019-06-13 03:06:28', '2019-06-13 03:06:28'),
(2, 'author', 'author@author.com', NULL, 2, '$2y$10$QPraVsL2lmmbgS1fYbJxuOl0HqiyOl6yTYVdv44nfqBSsoA7/daIK', 'DsxuMfHtddqPDVbnPpak6b8416yvuZuFJnZ05ueVL6ANuOnlXtb5yGRCpvmE', '2019-06-13 19:18:00', '2019-06-13 19:18:00'),
(3, 'user', 'user@user.com', NULL, 3, '$2y$10$rYYBVt3Uz4yOtW5cMwA87OyezKrFeGVakwyuY6jkJk/HUggeuTZYC', NULL, '2019-06-15 06:32:07', '2019-06-15 06:32:07'),
(8, 'Economics', 'roshankumar.giri19@gmail.com', NULL, 3, '$2y$10$koOOe4q9QOQp.1Y64LXAWumpPMa8YJIvhv6aYhIZe6PbLA/zfk20S', NULL, '2019-06-16 23:50:00', '2019-06-16 23:50:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
