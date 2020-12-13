-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenland`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'الاعشاب', 'Herbs', NULL, NULL, '1556358409.jpg', 1, '2019-04-27 07:46:49', '2019-04-27 07:50:55'),
(2, 'توابل', 'Spices', NULL, NULL, '1556358573.jpg', 1, '2019-04-27 07:49:33', '2019-04-27 07:51:33'),
(4, 'الزيوت', 'Olis', NULL, NULL, '1593618158.jpg', 1, '2020-07-01 13:42:38', '2020-07-01 13:42:38'),
(5, 'البقوليات والحبوب', 'Legumes & Grains', NULL, NULL, '1593854364.jpg', 1, '2020-07-04 07:19:24', '2020-07-04 07:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(191) NOT NULL,
  `title_en` varchar(191) NOT NULL,
  `description_ar` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `certificate` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `certificate`, `status`, `created_at`, `updated_at`) VALUES
(9, 'ريحان', 'Basil', NULL, NULL, '1594069863.jpg', 1, '2020-07-06 19:11:03', '2020-07-06 19:11:03'),
(10, 'نعناع', 'Peppermint', NULL, NULL, '1594069904.jpg', 1, '2020-07-06 19:11:44', '2020-07-06 19:11:44'),
(11, 'كركدية', 'Hibiscus', NULL, NULL, '1594069976.jpg', 1, '2020-07-06 19:12:56', '2020-07-06 19:12:56'),
(12, 'شمر', 'Fennel', NULL, NULL, '1594070083.jpg', 1, '2020-07-06 19:14:43', '2020-07-06 19:14:43'),
(13, 'بقدونس', 'parsley', NULL, NULL, '1594070121.jpg', 1, '2020-07-06 19:15:21', '2020-07-06 19:15:21'),
(14, 'زعتر', 'Thyme', NULL, NULL, '1594070160.jpg', 1, '2020-07-06 19:16:00', '2020-07-06 19:16:00'),
(15, 'ورق اللورو', 'Lauro paper', NULL, NULL, '1594070205.jpg', 1, '2020-07-06 19:16:45', '2020-07-06 19:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email_1`, `email_2`, `email_3`, `address_ar`, `address_en`, `phone_1`, `phone_2`, `phone_3`, `line`, `whatsapp`, `whatsapp_2`, `created_at`, `updated_at`) VALUES
(1, 'Info@greenland-eg.com', 'Sales@greenland-eg.com', 'kamalsamir@greenland-eg.com', 'Minshat Abu Milih, Sumusta,  Bani Swief, Egypt', 'Minshat Abu Milih, Sumusta,  Bani Swief, Egypt', '(+20) 01128987232', '(+20) 01022774582', NULL, '082-2393123', '(+20) 01125050517', '(+20) 01155937570', NULL, '2020-08-05 13:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname_ar` varchar(191) DEFAULT NULL,
  `sortname_en` varchar(191) NOT NULL,
  `name_ar` varchar(191) DEFAULT NULL,
  `name_en` varchar(191) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `flag` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname_ar`, `sortname_en`, `name_ar`, `name_en`, `phonecode`, `flag`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'AF', '', 'Afghanistan', 93, NULL, 1, NULL, NULL),
(2, '', 'AL', '', 'Albania', 355, NULL, 1, NULL, NULL),
(3, '', 'DZ', '', 'Algeria', 213, NULL, 1, NULL, NULL),
(4, '', 'AS', '', 'American Samoa', 1684, NULL, 1, NULL, NULL),
(5, '', 'AD', '', 'Andorra', 376, NULL, 1, NULL, NULL),
(6, '', 'AO', '', 'Angola', 244, NULL, 1, NULL, NULL),
(7, '', 'AI', '', 'Anguilla', 1264, NULL, 1, NULL, NULL),
(8, '', 'AQ', '', 'Antarctica', 0, NULL, 1, NULL, NULL),
(9, '', 'AG', '', 'Antigua And Barbuda', 1268, NULL, 1, NULL, NULL),
(10, '', 'AR', '', 'Argentina', 54, NULL, 1, NULL, NULL),
(11, '', 'AM', '', 'Armenia', 374, NULL, 1, NULL, NULL),
(12, '', 'AW', '', 'Aruba', 297, NULL, 1, NULL, NULL),
(13, '', 'AU', '', 'Australia', 61, NULL, 1, NULL, NULL),
(14, '', 'AT', '', 'Austria', 43, NULL, 1, NULL, NULL),
(15, '', 'AZ', '', 'Azerbaijan', 994, NULL, 1, NULL, NULL),
(16, '', 'BS', '', 'Bahamas The', 1242, NULL, 1, NULL, NULL),
(17, '', 'BH', '', 'Bahrain', 973, NULL, 1, NULL, NULL),
(18, '', 'BD', '', 'Bangladesh', 880, NULL, 1, NULL, NULL),
(19, '', 'BB', '', 'Barbados', 1246, NULL, 1, NULL, NULL),
(20, '', 'BY', '', 'Belarus', 375, NULL, 1, NULL, NULL),
(21, '', 'BE', '', 'Belgium', 32, NULL, 1, NULL, NULL),
(22, '', 'BZ', '', 'Belize', 501, NULL, 1, NULL, NULL),
(23, '', 'BJ', '', 'Benin', 229, NULL, 1, NULL, NULL),
(24, '', 'BM', '', 'Bermuda', 1441, NULL, 1, NULL, NULL),
(25, '', 'BT', '', 'Bhutan', 975, NULL, 1, NULL, NULL),
(26, '', 'BO', '', 'Bolivia', 591, NULL, 1, NULL, NULL),
(27, '', 'BA', '', 'Bosnia and Herzegovina', 387, NULL, 1, NULL, NULL),
(28, '', 'BW', '', 'Botswana', 267, NULL, 1, NULL, NULL),
(29, '', 'BV', '', 'Bouvet Island', 0, NULL, 1, NULL, NULL),
(30, '', 'BR', '', 'Brazil', 55, NULL, 1, NULL, NULL),
(31, '', 'IO', '', 'British Indian Ocean Territory', 246, NULL, 1, NULL, NULL),
(32, '', 'BN', '', 'Brunei', 673, NULL, 1, NULL, NULL),
(33, '', 'BG', '', 'Bulgaria', 359, NULL, 1, NULL, NULL),
(34, '', 'BF', '', 'Burkina Faso', 226, NULL, 1, NULL, NULL),
(35, '', 'BI', '', 'Burundi', 257, NULL, 1, NULL, NULL),
(36, '', 'KH', '', 'Cambodia', 855, NULL, 1, NULL, NULL),
(37, '', 'CM', '', 'Cameroon', 237, NULL, 1, NULL, NULL),
(38, '', 'CA', '', 'Canada', 1, NULL, 1, NULL, NULL),
(39, '', 'CV', '', 'Cape Verde', 238, NULL, 1, NULL, NULL),
(40, '', 'KY', '', 'Cayman Islands', 1345, NULL, 1, NULL, NULL),
(41, '', 'CF', '', 'Central African Republic', 236, NULL, 1, NULL, NULL),
(42, '', 'TD', '', 'Chad', 235, NULL, 1, NULL, NULL),
(43, '', 'CL', '', 'Chile', 56, NULL, 1, NULL, NULL),
(44, '', 'CN', '', 'China', 86, NULL, 1, NULL, NULL),
(45, '', 'CX', '', 'Christmas Island', 61, NULL, 1, NULL, NULL),
(46, '', 'CC', '', 'Cocos (Keeling) Islands', 672, NULL, 1, NULL, NULL),
(47, '', 'CO', '', 'Colombia', 57, NULL, 1, NULL, NULL),
(48, '', 'KM', '', 'Comoros', 269, NULL, 1, NULL, NULL),
(49, '', 'CG', '', 'Republic Of The Congo', 242, NULL, 1, NULL, NULL),
(50, '', 'CD', '', 'Democratic Republic Of The Congo', 242, NULL, 1, NULL, NULL),
(51, '', 'CK', '', 'Cook Islands', 682, NULL, 1, NULL, NULL),
(52, '', 'CR', '', 'Costa Rica', 506, NULL, 1, NULL, NULL),
(53, '', 'CI', '', 'Cote D\'Ivoire (Ivory Coast)', 225, NULL, 1, NULL, NULL),
(54, '', 'HR', '', 'Croatia (Hrvatska)', 385, NULL, 1, NULL, NULL),
(55, '', 'CU', '', 'Cuba', 53, NULL, 1, NULL, NULL),
(56, '', 'CY', '', 'Cyprus', 357, NULL, 1, NULL, NULL),
(57, '', 'CZ', '', 'Czech Republic', 420, NULL, 1, NULL, NULL),
(58, '', 'DK', '', 'Denmark', 45, NULL, 1, NULL, NULL),
(59, '', 'DJ', '', 'Djibouti', 253, NULL, 1, NULL, NULL),
(60, '', 'DM', '', 'Dominica', 1767, NULL, 1, NULL, NULL),
(61, '', 'DO', '', 'Dominican Republic', 1809, NULL, 1, NULL, NULL),
(62, '', 'TP', '', 'East Timor', 670, NULL, 1, NULL, NULL),
(63, '', 'EC', '', 'Ecuador', 593, NULL, 1, NULL, NULL),
(64, '', 'EG', '', 'Egypt', 20, NULL, 1, NULL, NULL),
(65, '', 'SV', '', 'El Salvador', 503, NULL, 1, NULL, NULL),
(66, '', 'GQ', '', 'Equatorial Guinea', 240, NULL, 1, NULL, NULL),
(67, '', 'ER', '', 'Eritrea', 291, NULL, 1, NULL, NULL),
(68, '', 'EE', '', 'Estonia', 372, NULL, 1, NULL, NULL),
(69, '', 'ET', '', 'Ethiopia', 251, NULL, 1, NULL, NULL),
(70, '', 'XA', '', 'External Territories of Australia', 61, NULL, 1, NULL, NULL),
(71, '', 'FK', '', 'Falkland Islands', 500, NULL, 1, NULL, NULL),
(72, '', 'FO', '', 'Faroe Islands', 298, NULL, 1, NULL, NULL),
(73, '', 'FJ', '', 'Fiji Islands', 679, NULL, 1, NULL, NULL),
(74, '', 'FI', '', 'Finland', 358, NULL, 1, NULL, NULL),
(75, '', 'FR', '', 'France', 33, NULL, 1, NULL, NULL),
(76, '', 'GF', '', 'French Guiana', 594, NULL, 1, NULL, NULL),
(77, '', 'PF', '', 'French Polynesia', 689, NULL, 1, NULL, NULL),
(78, '', 'TF', '', 'French Southern Territories', 0, NULL, 1, NULL, NULL),
(79, '', 'GA', '', 'Gabon', 241, NULL, 1, NULL, NULL),
(80, '', 'GM', '', 'Gambia The', 220, NULL, 1, NULL, NULL),
(81, '', 'GE', '', 'Georgia', 995, NULL, 1, NULL, NULL),
(82, '', 'DE', '', 'Germany', 49, NULL, 1, NULL, NULL),
(83, '', 'GH', '', 'Ghana', 233, NULL, 1, NULL, NULL),
(84, '', 'GI', '', 'Gibraltar', 350, NULL, 1, NULL, NULL),
(85, '', 'GR', '', 'Greece', 30, NULL, 1, NULL, NULL),
(86, '', 'GL', '', 'Greenland', 299, NULL, 1, NULL, NULL),
(87, '', 'GD', '', 'Grenada', 1473, NULL, 1, NULL, NULL),
(88, '', 'GP', '', 'Guadeloupe', 590, NULL, 1, NULL, NULL),
(89, '', 'GU', '', 'Guam', 1671, NULL, 1, NULL, NULL),
(90, '', 'GT', '', 'Guatemala', 502, NULL, 1, NULL, NULL),
(91, '', 'XU', '', 'Guernsey and Alderney', 44, NULL, 1, NULL, NULL),
(92, '', 'GN', '', 'Guinea', 224, NULL, 1, NULL, NULL),
(93, '', 'GW', '', 'Guinea-Bissau', 245, NULL, 1, NULL, NULL),
(94, '', 'GY', '', 'Guyana', 592, NULL, 1, NULL, NULL),
(95, '', 'HT', '', 'Haiti', 509, NULL, 1, NULL, NULL),
(96, '', 'HM', '', 'Heard and McDonald Islands', 0, NULL, 1, NULL, NULL),
(97, '', 'HN', '', 'Honduras', 504, NULL, 1, NULL, NULL),
(98, '', 'HK', '', 'Hong Kong S.A.R.', 852, NULL, 1, NULL, NULL),
(99, '', 'HU', '', 'Hungary', 36, NULL, 1, NULL, NULL),
(100, '', 'IS', '', 'Iceland', 354, NULL, 1, NULL, NULL),
(101, '', 'IN', '', 'India', 91, NULL, 1, NULL, NULL),
(102, '', 'ID', '', 'Indonesia', 62, NULL, 1, NULL, NULL),
(103, '', 'IR', '', 'Iran', 98, NULL, 1, NULL, NULL),
(104, '', 'IQ', '', 'Iraq', 964, NULL, 1, NULL, NULL),
(105, '', 'IE', '', 'Ireland', 353, NULL, 1, NULL, NULL),
(106, '', 'IL', '', 'Israel', 972, NULL, 1, NULL, NULL),
(107, '', 'IT', '', 'Italy', 39, NULL, 1, NULL, NULL),
(108, '', 'JM', '', 'Jamaica', 1876, NULL, 1, NULL, NULL),
(109, '', 'JP', '', 'Japan', 81, NULL, 1, NULL, NULL),
(110, '', 'XJ', '', 'Jersey', 44, NULL, 1, NULL, NULL),
(111, '', 'JO', '', 'Jordan', 962, NULL, 1, NULL, NULL),
(112, '', 'KZ', '', 'Kazakhstan', 7, NULL, 1, NULL, NULL),
(113, '', 'KE', '', 'Kenya', 254, NULL, 1, NULL, NULL),
(114, '', 'KI', '', 'Kiribati', 686, NULL, 1, NULL, NULL),
(115, '', 'KP', '', 'Korea North', 850, NULL, 1, NULL, NULL),
(116, '', 'KR', '', 'Korea South', 82, NULL, 1, NULL, NULL),
(117, '', 'KW', '', 'Kuwait', 965, NULL, 1, NULL, NULL),
(118, '', 'KG', '', 'Kyrgyzstan', 996, NULL, 1, NULL, NULL),
(119, '', 'LA', '', 'Laos', 856, NULL, 1, NULL, NULL),
(120, '', 'LV', '', 'Latvia', 371, NULL, 1, NULL, NULL),
(121, '', 'LB', '', 'Lebanon', 961, NULL, 1, NULL, NULL),
(122, '', 'LS', '', 'Lesotho', 266, NULL, 1, NULL, NULL),
(123, '', 'LR', '', 'Liberia', 231, NULL, 1, NULL, NULL),
(124, '', 'LY', '', 'Libya', 218, NULL, 1, NULL, NULL),
(125, '', 'LI', '', 'Liechtenstein', 423, NULL, 1, NULL, NULL),
(126, '', 'LT', '', 'Lithuania', 370, NULL, 1, NULL, NULL),
(127, '', 'LU', '', 'Luxembourg', 352, NULL, 1, NULL, NULL),
(128, '', 'MO', '', 'Macau S.A.R.', 853, NULL, 1, NULL, NULL),
(129, '', 'MK', '', 'Macedonia', 389, NULL, 1, NULL, NULL),
(130, '', 'MG', '', 'Madagascar', 261, NULL, 1, NULL, NULL),
(131, '', 'MW', '', 'Malawi', 265, NULL, 1, NULL, NULL),
(132, '', 'MY', '', 'Malaysia', 60, NULL, 1, NULL, NULL),
(133, '', 'MV', '', 'Maldives', 960, NULL, 1, NULL, NULL),
(134, '', 'ML', '', 'Mali', 223, NULL, 1, NULL, NULL),
(135, '', 'MT', '', 'Malta', 356, NULL, 1, NULL, NULL),
(136, '', 'XM', '', 'Man (Isle of)', 44, NULL, 1, NULL, NULL),
(137, '', 'MH', '', 'Marshall Islands', 692, NULL, 1, NULL, NULL),
(138, '', 'MQ', '', 'Martinique', 596, NULL, 1, NULL, NULL),
(139, '', 'MR', '', 'Mauritania', 222, NULL, 1, NULL, NULL),
(140, '', 'MU', '', 'Mauritius', 230, NULL, 1, NULL, NULL),
(141, '', 'YT', '', 'Mayotte', 269, NULL, 1, NULL, NULL),
(142, '', 'MX', '', 'Mexico', 52, NULL, 1, NULL, NULL),
(143, '', 'FM', '', 'Micronesia', 691, NULL, 1, NULL, NULL),
(144, '', 'MD', '', 'Moldova', 373, NULL, 1, NULL, NULL),
(145, '', 'MC', '', 'Monaco', 377, NULL, 1, NULL, NULL),
(146, '', 'MN', '', 'Mongolia', 976, NULL, 1, NULL, NULL),
(147, '', 'MS', '', 'Montserrat', 1664, NULL, 1, NULL, NULL),
(148, '', 'MA', '', 'Morocco', 212, NULL, 1, NULL, NULL),
(149, '', 'MZ', '', 'Mozambique', 258, NULL, 1, NULL, NULL),
(150, '', 'MM', '', 'Myanmar', 95, NULL, 1, NULL, NULL),
(151, '', 'NA', '', 'Namibia', 264, NULL, 1, NULL, NULL),
(152, '', 'NR', '', 'Nauru', 674, NULL, 1, NULL, NULL),
(153, '', 'NP', '', 'Nepal', 977, NULL, 1, NULL, NULL),
(154, '', 'AN', '', 'Netherlands Antilles', 599, NULL, 1, NULL, NULL),
(155, '', 'NL', '', 'Netherlands The', 31, NULL, 1, NULL, NULL),
(156, '', 'NC', '', 'New Caledonia', 687, NULL, 1, NULL, NULL),
(157, '', 'NZ', '', 'New Zealand', 64, NULL, 1, NULL, NULL),
(158, '', 'NI', '', 'Nicaragua', 505, NULL, 1, NULL, NULL),
(159, '', 'NE', '', 'Niger', 227, NULL, 1, NULL, NULL),
(160, '', 'NG', '', 'Nigeria', 234, NULL, 1, NULL, NULL),
(161, '', 'NU', '', 'Niue', 683, NULL, 1, NULL, NULL),
(162, '', 'NF', '', 'Norfolk Island', 672, NULL, 1, NULL, NULL),
(163, '', 'MP', '', 'Northern Mariana Islands', 1670, NULL, 1, NULL, NULL),
(164, '', 'NO', '', 'Norway', 47, NULL, 1, NULL, NULL),
(165, '', 'OM', '', 'Oman', 968, NULL, 1, NULL, NULL),
(166, '', 'PK', '', 'Pakistan', 92, NULL, 1, NULL, NULL),
(167, '', 'PW', '', 'Palau', 680, NULL, 1, NULL, NULL),
(168, '', 'PS', '', 'Palestinian Territory Occupied', 970, NULL, 1, NULL, NULL),
(169, '', 'PA', '', 'Panama', 507, NULL, 1, NULL, NULL),
(170, '', 'PG', '', 'Papua new Guinea', 675, NULL, 1, NULL, NULL),
(171, '', 'PY', '', 'Paraguay', 595, NULL, 1, NULL, NULL),
(172, '', 'PE', '', 'Peru', 51, NULL, 1, NULL, NULL),
(173, '', 'PH', '', 'Philippines', 63, NULL, 1, NULL, NULL),
(174, '', 'PN', '', 'Pitcairn Island', 0, NULL, 1, NULL, NULL),
(175, '', 'PL', '', 'Poland', 48, NULL, 1, NULL, NULL),
(176, '', 'PT', '', 'Portugal', 351, NULL, 1, NULL, NULL),
(177, '', 'PR', '', 'Puerto Rico', 1787, NULL, 1, NULL, NULL),
(178, '', 'QA', '', 'Qatar', 974, NULL, 1, NULL, NULL),
(179, '', 'RE', '', 'Reunion', 262, NULL, 1, NULL, NULL),
(180, '', 'RO', '', 'Romania', 40, NULL, 1, NULL, NULL),
(181, '', 'RU', '', 'Russia', 70, NULL, 1, NULL, NULL),
(182, '', 'RW', '', 'Rwanda', 250, NULL, 1, NULL, NULL),
(183, '', 'SH', '', 'Saint Helena', 290, NULL, 1, NULL, NULL),
(184, '', 'KN', '', 'Saint Kitts And Nevis', 1869, NULL, 1, NULL, NULL),
(185, '', 'LC', '', 'Saint Lucia', 1758, NULL, 1, NULL, NULL),
(186, '', 'PM', '', 'Saint Pierre and Miquelon', 508, NULL, 1, NULL, NULL),
(187, '', 'VC', '', 'Saint Vincent And The Grenadines', 1784, NULL, 1, NULL, NULL),
(188, '', 'WS', '', 'Samoa', 684, NULL, 1, NULL, NULL),
(189, '', 'SM', '', 'San Marino', 378, NULL, 1, NULL, NULL),
(190, '', 'ST', '', 'Sao Tome and Principe', 239, NULL, 1, NULL, NULL),
(191, '', 'SA', '', 'Saudi Arabia', 966, NULL, 1, NULL, NULL),
(192, '', 'SN', '', 'Senegal', 221, NULL, 1, NULL, NULL),
(193, '', 'RS', '', 'Serbia', 381, NULL, 1, NULL, NULL),
(194, '', 'SC', '', 'Seychelles', 248, NULL, 1, NULL, NULL),
(195, '', 'SL', '', 'Sierra Leone', 232, NULL, 1, NULL, NULL),
(196, '', 'SG', '', 'Singapore', 65, NULL, 1, NULL, NULL),
(197, '', 'SK', '', 'Slovakia', 421, NULL, 1, NULL, NULL),
(198, '', 'SI', '', 'Slovenia', 386, NULL, 1, NULL, NULL),
(199, '', 'XG', '', 'Smaller Territories of the UK', 44, NULL, 1, NULL, NULL),
(200, '', 'SB', '', 'Solomon Islands', 677, NULL, 1, NULL, NULL),
(201, '', 'SO', '', 'Somalia', 252, NULL, 1, NULL, NULL),
(202, '', 'ZA', '', 'South Africa', 27, NULL, 1, NULL, NULL),
(203, '', 'GS', '', 'South Georgia', 0, NULL, 1, NULL, NULL),
(204, '', 'SS', '', 'South Sudan', 211, NULL, 1, NULL, NULL),
(205, '', 'ES', '', 'Spain', 34, NULL, 1, NULL, NULL),
(206, '', 'LK', '', 'Sri Lanka', 94, NULL, 1, NULL, NULL),
(207, '', 'SD', '', 'Sudan', 249, NULL, 1, NULL, NULL),
(208, '', 'SR', '', 'Suriname', 597, NULL, 1, NULL, NULL),
(209, '', 'SJ', '', 'Svalbard And Jan Mayen Islands', 47, NULL, 1, NULL, NULL),
(210, '', 'SZ', '', 'Swaziland', 268, NULL, 1, NULL, NULL),
(211, '', 'SE', '', 'Sweden', 46, NULL, 1, NULL, NULL),
(212, '', 'CH', '', 'Switzerland', 41, NULL, 1, NULL, NULL),
(213, '', 'SY', '', 'Syria', 963, NULL, 1, NULL, NULL),
(214, '', 'TW', '', 'Taiwan', 886, NULL, 1, NULL, NULL),
(215, '', 'TJ', '', 'Tajikistan', 992, NULL, 1, NULL, NULL),
(216, '', 'TZ', '', 'Tanzania', 255, NULL, 1, NULL, NULL),
(217, '', 'TH', '', 'Thailand', 66, NULL, 1, NULL, NULL),
(218, '', 'TG', '', 'Togo', 228, NULL, 1, NULL, NULL),
(219, '', 'TK', '', 'Tokelau', 690, NULL, 1, NULL, NULL),
(220, '', 'TO', '', 'Tonga', 676, NULL, 1, NULL, NULL),
(221, '', 'TT', '', 'Trinidad And Tobago', 1868, NULL, 1, NULL, NULL),
(222, '', 'TN', '', 'Tunisia', 216, NULL, 1, NULL, NULL),
(223, '', 'TR', '', 'Turkey', 90, NULL, 1, NULL, NULL),
(224, '', 'TM', '', 'Turkmenistan', 7370, NULL, 1, NULL, NULL),
(225, '', 'TC', '', 'Turks And Caicos Islands', 1649, NULL, 1, NULL, NULL),
(226, '', 'TV', '', 'Tuvalu', 688, NULL, 1, NULL, NULL),
(227, '', 'UG', '', 'Uganda', 256, NULL, 1, NULL, NULL),
(228, '', 'UA', '', 'Ukraine', 380, NULL, 1, NULL, NULL),
(229, '', 'AE', '', 'United Arab Emirates', 971, NULL, 1, NULL, NULL),
(230, '', 'GB', '', 'United Kingdom', 44, NULL, 1, NULL, NULL),
(231, '', 'US', '', 'United States', 1, NULL, 1, NULL, NULL),
(232, '', 'UM', '', 'United States Minor Outlying Islands', 1, NULL, 1, NULL, NULL),
(233, '', 'UY', '', 'Uruguay', 598, NULL, 1, NULL, NULL),
(234, '', 'UZ', '', 'Uzbekistan', 998, NULL, 1, NULL, NULL),
(235, '', 'VU', '', 'Vanuatu', 678, NULL, 1, NULL, NULL),
(236, '', 'VA', '', 'Vatican City State (Holy See)', 39, NULL, 1, NULL, NULL),
(237, '', 'VE', '', 'Venezuela', 58, NULL, 1, NULL, NULL),
(238, '', 'VN', '', 'Vietnam', 84, NULL, 1, NULL, NULL),
(239, '', 'VG', '', 'Virgin Islands (British)', 1284, NULL, 1, NULL, NULL),
(240, '', 'VI', '', 'Virgin Islands (US)', 1340, NULL, 1, NULL, NULL),
(241, '', 'WF', '', 'Wallis And Futuna Islands', 681, NULL, 1, NULL, NULL),
(242, '', 'EH', '', 'Western Sahara', 212, NULL, 1, NULL, NULL),
(243, '', 'YE', '', 'Yemen', 967, NULL, 1, NULL, NULL),
(244, '', 'YU', '', 'Yugoslavia', 38, NULL, 1, NULL, NULL),
(245, '', 'ZM', '', 'Zambia', 260, NULL, 1, NULL, NULL),
(246, '', 'ZW', '', 'Zimbabwe', 263, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(191) NOT NULL,
  `title_en` varchar(191) NOT NULL,
  `code_ar` varchar(191) NOT NULL,
  `code_en` varchar(191) NOT NULL,
  `value` float DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `title_ar`, `title_en`, `code_ar`, `code_en`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'الجنيه المصرى', 'EGP', 'L.E', 'L.E', NULL, 1, '2019-04-16 20:43:14', '2019-04-16 20:43:14'),
(2, 'الدولار الامريكى', 'USD', '$', '$', NULL, 1, '2019-04-16 20:44:01', '2019-04-16 20:44:01');

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
(3, '2019_02_04_082800_create_settings_table', 2),
(9, '2019_02_07_082502_create_sliders_table', 4),
(20, '2019_02_14_121801_create_social_links_table', 12),
(22, '2019_02_17_104821_create_contacts_table', 14),
(24, '2019_03_11_125458_create_products_table', 16),
(25, '2019_03_11_134252_create_categories_table', 17),
(29, '2019_03_27_130525_create_images_table', 20);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `currency_id` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `code`, `category_id`, `price`, `currency_id`, `featured`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'peppermint & spearmint', 'peppermint & spearmint', 'peppermint & spearmint', 'peppermint & spearmint', 'herbs_1', 1, 100, 1, 1, '1556373600.jpg', 1, '2019-04-27 12:00:00', '2019-04-27 12:00:00'),
(2, 'Camomile', 'Camomile', 'Camomile', 'Camomile', 'herbs_2', 1, 100, 1, 1, '1556373662.jpg', 1, '2019-04-27 12:01:02', '2019-04-27 12:01:02'),
(3, 'Basil', 'Basil', 'Basil', 'Basil', 'herbs_3', 1, 100, 1, 1, '1556373711.jpg', 1, '2019-04-27 12:01:51', '2019-04-27 12:01:51'),
(4, 'Molokhia', 'Molokhia', 'Molokhia', 'Molokhia', 'herbs_4', 1, 100, 1, 1, '1556373754.jpg', 1, '2019-04-27 12:02:34', '2019-04-27 12:03:50'),
(5, 'Marjoram', 'Marjoram', 'Marjoram', 'Marjoram', 'herbs_5', 1, 100, 1, 1, '1595529841.jpg', 1, '2019-04-27 12:04:40', '2020-07-23 16:44:01'),
(6, 'Calendula', 'Calendula', 'Calendula', 'Calendula', 'herbs_6', 1, 100, 1, 1, '1556374024.jpg', 1, '2019-04-27 12:07:04', '2019-04-27 12:07:04'),
(7, 'Hibiscus', 'Hibiscus', 'Hibiscus', 'Hibiscus', 'herbs_7', 1, 100, 1, 1, '1556374070.jpg', 1, '2019-04-27 12:07:50', '2019-04-27 12:07:50'),
(8, 'Lemongrass', 'Lemongrass', 'Lemongrass', 'Lemongrass', 'herbs_8', 1, 100, 1, 1, '1556374160.jpg', 1, '2019-04-27 12:09:20', '2019-04-27 12:09:20'),
(9, 'cumin', 'cumin', 'cumin', 'cumin', 'spices_1', 2, 100, 1, 0, '1556374521.jpg', 1, '2019-04-27 12:15:21', '2019-04-27 12:15:21'),
(10, 'rosemary', 'rosemary', 'rosemary', 'rosemary', 'spices_2', 2, 100, 1, 0, '1556374584.jpg', 1, '2019-04-27 12:16:24', '2019-04-27 12:16:24'),
(11, 'black seeds', 'black seeds', 'black seeds', 'black seeds', 'seeds_1', 3, 100, 1, 0, '1556374716.png', 1, '2019-04-27 12:18:36', '2019-04-27 12:18:36'),
(12, 'caraway', 'caraway', 'caraway', 'caraway', 'seeds_2', 3, 100, 2, 0, '1556374781.jpg', 1, '2019-04-27 12:19:41', '2019-04-27 12:19:41'),
(13, 'fennel', 'fennel', 'fennel', 'fennel', 'seeds_3', 3, 100, 1, 0, '1556374843.jpg', 1, '2019-04-27 12:20:43', '2019-04-27 12:20:43'),
(14, 'fenugreek', 'fenugreek', 'fenugreek', 'fenugreek', 'seeds_4', 3, 100, 1, 0, '1556374897.jpg', 1, '2019-04-27 12:21:37', '2019-04-27 12:21:37'),
(15, 'onion powder', 'onion powder', 'onion powder', 'onion powder', 'spices_3', 2, 100, 1, 0, '1556374993.png', 1, '2019-04-27 12:23:13', '2019-04-27 12:23:13'),
(16, 'garlic powder', 'garlic powder', 'garlic powder', 'garlic powder', 'spice_4', 2, 100, 1, 0, '1556375051.jpg', 1, '2019-04-27 12:24:11', '2019-04-27 12:24:11'),
(17, 'زيت الريحان', 'Basil oil', 'يعمل زيت الريحان على المساعدة في الشعور بالاسترخاء وتخليص الجسم من التعب والإرهاق', 'Basil oil helps to feel relaxed and free the body from fatigue and exhaustion', 'Basil-1', 4, 50, 2, 1, '1593637904.jpg', 1, '2020-07-01 19:11:44', '2020-07-01 19:11:44'),
(18, 'زيت الكراوية', 'Caraway oil', 'يساعد على ارتخاء عضلات المعدة والأمعاء ويستخدم بنجاح في علاج مرض تطبل البطن.', 'It helps relax the muscles of the stomach and intestine and is used successfully to treat flatulence.', 'Caraway-1', 4, 55, 2, 1, '1593638225.jpg', 1, '2020-07-01 19:17:05', '2020-07-01 19:17:05'),
(19, 'زيت البابونج', 'Chamomile oil', 'على التخلص من الاضطرابات التي تصيب الجهاز الهضمي، ويساعد على القضاء على حالات الإسهال والإمساك والتخلص من الحصوات التي تصيب المرارة، كما يخلص المعدة من الغازات والانتفاخات', 'To get rid of disorders that affect the digestive system, and helps to eliminate cases of diarrhea and constipation and get rid of gallstones that affect the gallbladder, as it removes the stomach from gases and bloating', 'Chamomile-1', 4, 50, 2, 1, '1593638499.jpg', 1, '2020-07-01 19:21:39', '2020-07-01 19:21:39'),
(20, 'زيت حبة البركة', 'Nigella sativa oil', 'تخفيف الربو: يمكن أن يساعد تناول حبة البركة على تخفيف أعراض مرض الربو،', 'Asthma relief: Eating a pond can help relieve asthma symptoms', 'Nigella sativa oil-2', 4, 60, 2, 1, '1593638760.jpg', 1, '2020-07-01 19:26:00', '2020-07-01 19:26:00'),
(21, 'زيت الكمون', 'Cumin oil', 'الذي يساعد في تعزيز قوة وبناء عظام الجسم من خلال الحد من إفراز الكالسيوم البولي وزيادة محتوي الجسم من عنصر الكالسيوم', 'Which helps in strengthening the strength and building of the bones of the body by reducing urinary calcium excretion and increasing the body\'s calcium content', 'Cumin oil-1', 4, 40, 2, 1, '1593639197.jpg', 1, '2020-07-01 19:33:17', '2020-07-01 19:33:17'),
(22, 'زيت النعناع', 'Peppermint oil', 'التخلص من الإسهال والغثيان، وله قدرة على طرد الغازات. مفيد في التخلص من الإجهاد والإرهاق، وتحسين الذاكرة والتركيز، ويمنح الجسم النشاط والحيوية', 'It eliminates diarrhea and nausea, and has the ability to flush out gases. Useful in relieving stress and fatigue, improving memory and concentration, and giving the body vitality and vitality', 'Peppermint oil-1', 4, 50, 2, 1, '1593640092.jpg', 1, '2020-07-01 19:48:12', '2020-07-01 19:48:12'),
(23, 'زيت الشبت', 'Dill oil', 'يساعد على تثبيط الالتهابات الفطرية بشكل فعال.', 'It helps to inhibit fungal infections effectively.', 'Dill oil', 4, 50, 2, 1, '1593640250.jpg', 1, '2020-07-01 19:50:50', '2020-07-01 19:50:50'),
(24, 'زيت الزعتر', 'Thyme oil', 'تقوية جهاز المناعة .علاج المشاكل الجلدية المختلفة .لصحة الفم والأسنان', 'Strengthening the immune system. Treating various skin problems. For oral and dental health', 'Thyme oil-1', 4, 50, 2, 1, '1593640591.jpeg', 1, '2020-07-01 19:56:31', '2020-07-01 19:56:31'),
(25, 'زيت الزيتون', 'olive oil', 'تحسين صحة البشرة والشعر والأظافر وحتى العظام', 'Improve the health of skin, hair, nails and even bones', 'olive oil-1', 4, 50, 2, 1, '1593692617.jpg', 1, '2020-07-02 10:23:37', '2020-07-02 10:23:37'),
(26, 'زيت السمسم', 'Sesame oil', 'التحسين من أداء الجهاز الهضمي، فهو يحتوي على نسبة هائلة من الألياف الغذائية، ويفيد في تليين حركة الأمعاء', 'Improving the performance of the digestive system, as it contains a huge proportion of dietary fiber, and is useful in softening bowel movement', 'Sesame oil-1', 4, 60, 2, 1, '1593692798.jpeg', 1, '2020-07-02 10:26:38', '2020-07-02 10:26:38'),
(27, 'الروزمارى', 'Rosemary oil', 'علاج قشرة الرأس بشكل سريع والتخلص من مشكلات فروة الرأس التي تتسبب في القشرة', 'Treat dandruff quickly and get rid of scalp problems that cause dandruff', 'Rosemary oil-1', 4, 40, 2, 1, '1593692907.jpg', 1, '2020-07-02 10:28:27', '2020-07-02 10:28:27'),
(28, 'الزنجبيل', 'Ginger oil', 'مضادة للجراثيم والالتهابات التي تستخدم كنوع من أنواع الزيوت المهدئة لتهيج الجلد', 'Anti-bacterial and anti-inflammatory that is used as a type of soothing oil to irritate the skin', 'ginger oil-1', 4, 50, 2, 1, '1593693067.jpg', 1, '2020-07-02 10:31:07', '2020-07-02 10:31:07'),
(29, 'الجرجير', 'Watercress oil', 'تقوية بصيلات الشعر وتحسينها', 'Strengthening and improving hair follicles', 'Watercress oil-2', 4, 50, 2, 1, '1593693202.jpg', 1, '2020-07-02 10:33:22', '2020-07-02 10:33:22'),
(30, 'الجزر', 'Carrot oil', 'حماية كبيرة وكثيرة لصحة الجلد', 'Great protection for skin health', 'Carrot oil-1', 4, 51, 2, 1, '1593693360.jpg', 1, '2020-07-02 10:36:00', '2020-07-02 10:36:00'),
(31, 'جوز الهند', 'Coconut Oil', 'ينشط الدورة الدموية ويساعد على تقوية بصيلات الشعر', 'It stimulates blood circulation and helps to strengthen hair follicles', 'Coconut Oil-1', 4, 40, 2, 1, '1593693442.jpg', 1, '2020-07-02 10:37:22', '2020-07-02 10:37:22'),
(32, 'زيت الحلبة', 'Fenugreek oil', 'يساعد على علاج مشاكل البشرة المختلفة', 'It helps to treat various skin problems', 'Fenugreek oil-1', 4, 40, 2, 1, '1593693523.jpg', 1, '2020-07-02 10:38:43', '2020-07-02 10:38:43'),
(33, 'زيت الذرة', 'corn oil', 'يفتت الحصى والرمل الذي يتكون في الجسم', 'Crushes of gravel and sand that form in the body.', 'corn oil-1', 4, 40, 2, 1, '1593693636.jpg', 1, '2020-07-02 10:40:37', '2020-07-02 10:40:37'),
(34, 'زيت الحبة السوداء', 'black seed oil', 'لتقوية مناعة الجسم وحمايته', 'To strengthen and protect the body\'s immunity', 'black seed -oil-1', 4, 40, 2, 1, '1593693728.jpg', 1, '2020-07-02 10:42:08', '2020-07-02 10:42:08'),
(35, 'زيت الخردل', 'Mustard oil', 'لعلاج ألم الأعصاب والعظام والمفاصل', 'For the treatment of nerve, bone and joint pain', 'Mustard oil', 4, 40, 2, 1, '1593693800.jpg', 1, '2020-07-02 10:43:20', '2020-07-02 10:43:20'),
(36, 'زيت عباد الشمس', 'Sun flower oil', 'تنظيم مستوى السكر فى الدم، والمساعدة في فقدان الوزن', 'Regulating blood sugar, and helping in weight loss', 'Sun flower oil-1', 4, 40, 2, 1, '1593693882.jpg', 1, '2020-07-02 10:44:42', '2020-07-02 10:44:42'),
(37, 'زيت فول الصويا', 'Soybean oil', 'يقلل من ارتفاع ضغط الدم', 'Reduces high blood pressure', 'Soybean oil-1', 4, 40, 2, 1, '1593693959.jpg', 1, '2020-07-02 10:45:59', '2020-07-02 10:45:59'),
(38, 'زيت الثوم', 'Garlic oil', 'يساعد فى الهضم و خفض خطر الإصابة بالسمنة', 'Helps digestion and reduce the risk of obesity', 'garlic oil', 4, 40, 2, 1, '1593694046.jpg', 1, '2020-07-02 10:47:26', '2020-07-02 10:47:26'),
(39, 'زيت البصل', 'Onion oil', 'يعالج الامراض الجلدية المختلفة', 'It treats various skin diseases', 'Onion oil', 4, 60, 2, 1, '1593694112.jpg', 1, '2020-07-02 10:48:32', '2020-07-02 10:48:32'),
(40, 'زيت الفجل', 'Radish oil', 'معالجة مختلف مشاكل الجمال ، لأنه غني بالفيتامينات A و C', 'Treating various beauty problems, as it is rich in vitamins A and C.', 'Radish oil', 4, 50, 2, 1, '1593694192.jpg', 1, '2020-07-02 10:49:52', '2020-07-02 10:49:52'),
(41, 'زيت الجوز', 'Walnut oil', 'خطر الإصابة بأمراض القلب وتشكّل الجلطات الدموية.', 'The risk of heart disease and blood clots.', 'Walnut oil', 4, 40, 2, 1, '1593694311.jpg', 1, '2020-07-02 10:51:51', '2020-07-02 10:51:51'),
(42, 'زيت اللوز', 'Almond oil', 'مساعدة في مكافحة تأثير الشمس على البشرة والتقليل من اثار تقدم السن.', 'Help fight the sun\'s impact on the skin and reduce the effects of aging', 'Almond oil', 4, 40, 2, 1, '1593694373.jpg', 1, '2020-07-02 10:52:53', '2020-07-02 10:52:53'),
(43, 'زيت القرنفل', 'Clove oil', 'مضادات الميكروبات والفطريات، ومطهر، ومضاد للفيروسات، ومثير للشهوة الجنسية،', 'Antimicrobial, antifungal, antiseptic, antiviral, aphrodisiac', 'Clove oil', 4, 60, 2, 1, '1593694428.gif', 1, '2020-07-02 10:53:48', '2020-07-02 10:53:48'),
(44, 'زيت النخيل', 'Palm oil', 'شكل من أشكال فيتامين هـ التي تتمتع بخصائص مضادة للأكسدة قد تدعم صحة الدماغ. ...', 'A form of vitamin E that has antioxidant properties may support brain health', 'Palm oil', 4, 70, 2, 1, '1593694486.jpg', 1, '2020-07-02 10:54:46', '2020-07-02 10:54:46'),
(45, 'اكليل الجبل', 'Rosemary', 'مضادة للميكروبات والفيروسات والفطريات المختلفة.', 'Anti-microbes, viruses and various fungi.', 'Rosemary', 1, 79, 2, 1, '1593774508.jpg', 1, '2020-07-03 09:08:28', '2020-07-03 09:08:28'),
(46, 'المرمرية', 'Marmoreal', 'فيتامينات ومعادن أساسية معروفة بدورها في مكافحة المرض وتعزيز الصحة:', 'Essential vitamins and minerals known for their role in disease control and health promotion', 'marmoreal', 1, 79, 2, 1, '1595530030.jpg', 1, '2020-07-03 12:37:53', '2020-07-23 16:47:10'),
(47, 'الزعتر', 'Thyme', 'القدرة على التعامل مع البكتيريا والفطريات', 'The ability to deal with bacteria and fungi', 'Thyme', 1, 40, 2, 1, '1593787152.jpg', 1, '2020-07-03 12:39:12', '2020-07-03 12:39:12'),
(48, 'بقدونس', 'parsley', 'دعم صحة الجهاز الهضمي', 'Supporting digestive health', 'parsley', 1, 70, 2, 1, '1593787248.jpg', 1, '2020-07-03 12:40:48', '2020-07-03 12:40:48'),
(49, 'الشبت', 'Dill', 'علاج مشاكل الهضم بما في ذلك فقدان الشهية', 'Treating digestion problems including loss of appetite', 'Dill', 1, 70, 2, 1, '1593787320.jpg', 1, '2020-07-03 12:42:00', '2020-07-03 12:42:00'),
(50, 'الكزبرة', 'Coriander', 'التخفيف من الألم لدى المصابين بمتلازمة القولون العصبي', 'Reducing pain in Irritable Bowel Syndrome', 'coriander', 1, 70, 2, 1, '1593787400.jpg', 1, '2020-07-03 12:43:20', '2020-07-03 12:43:20'),
(51, 'ليمون اسود  مجفف', 'Dried black lemon', 'خفض خطر الإصابة بأمراض القلب', 'Reducing the risk of heart disease', 'Dried black lemon', 1, 60, 2, 1, '1593787490.jpg', 1, '2020-07-03 12:44:50', '2020-07-03 12:44:50'),
(52, 'ليمون اصفر مجفف', 'Yellow dried lemon', 'يضفي نكهة الحامض الخفيفة إلى الطعام', 'Adds a mild sour flavor to food', 'Yellow dried lemon', 1, 70, 2, 1, '1593787574.jpeg', 1, '2020-07-03 12:46:14', '2020-07-03 12:46:14'),
(53, 'السمسم', 'Sesame', 'التقليل من ضغط الدم المُرتفع', 'Reducing high blood pressure', 'Sesame', 1, 60, 2, 1, '1593787650.png', 1, '2020-07-03 12:47:30', '2020-07-03 12:47:30'),
(54, 'السمسم الابيض', 'White sesame', 'تعزيز صحة القلب', 'Promote heart health', 'White sesame', 1, 60, 2, 1, '1593787747.jpg', 1, '2020-07-03 12:49:07', '2020-07-03 12:49:07'),
(55, 'ورق زيتون', 'Olive leaf', 'خفض ضغط الدم ومستويات الكولسترول السيء', 'Lowering blood pressure and bad cholesterol levels', 'Olive leaf', 1, 50, 2, 1, '1593787973.jpg', 1, '2020-07-03 12:52:53', '2020-07-03 12:52:53'),
(56, 'صمغ العربى', 'Acacia', 'علاج مشاكل الجهاز الهضمي', 'Treating digestive problems', 'Acacia', 1, 30, 2, 1, '1593788046.jpg', 1, '2020-07-03 12:54:06', '2020-07-03 12:54:06'),
(57, 'ورق الجوافة', 'Guava paper', 'خفض الكولسترول', 'Lower cholesterol', 'Guava paper', 1, 30, 2, 1, '1593788117.jpg', 1, '2020-07-03 12:55:17', '2020-07-03 12:55:17'),
(58, 'ورق اللورا', 'Laura leaf', 'مستويات جيدة من فيتامين د والأحماض الدهنية', 'Good levels of vitamin D and fatty acids', 'Laura leaf', 1, 40, 2, 1, '1593788236.jpg', 1, '2020-07-03 12:57:16', '2020-07-03 12:57:16'),
(59, 'المورينجا', 'Moringa', 'مضادات للأكسدة تدعى، فلافونيدات، بوليفينول وحامض الأسكوربيك،', 'Antioxidants called flavonoids, polyphenols and ascorbic acid,', 'Moringa', 1, 50, 2, 1, '1593788726.jpg', 1, '2020-07-03 13:05:26', '2020-07-03 13:05:26'),
(60, 'حلف بر', 'Pact', 'علاج مشاكل الجهاز الهضمي.', 'Treating digestive problems.', 'Pact', 1, 40, 2, 1, '1593788811.jpg', 1, '2020-07-03 13:06:51', '2020-07-03 13:06:51'),
(61, 'ورق التوت', 'Berry leaf', 'الحديد والزنك والكالسيوم ومضادات الأكسدة مثل حمض الأسكوربيك والبيتا كاروتين.', 'Iron, zinc, calcium and antioxidants such as ascorbic acid and beta-carotene.', 'Berry leaf', 1, 50, 2, 1, '1593788869.jpg', 1, '2020-07-03 13:07:49', '2020-07-03 13:07:49'),
(62, 'ورق الصفصاف', 'Willow paper', 'تخفيف الالام المفاصل والعضلات', 'Relieve joint and muscle pain', 'Willow paper', 1, 50, 2, 1, '1593789018.jpg', 1, '2020-07-03 13:10:18', '2020-07-03 13:10:18'),
(63, 'ورق كافور', 'Camphor paper', 'القدرة الفعالة على كبح الرغبة الجنسية', 'Effective ability to curb sexual desire', 'Camphor paper', 1, 60, 2, 1, '1593789092.jpeg', 1, '2020-07-03 13:11:32', '2020-07-03 13:11:32'),
(64, 'ورق التوت', 'Berry leaf', 'الحديد والزنك والكالسيوم ومضادات الأكسدة مثل حمض الأسكوربيك والبيتا كاروتين.', 'Iron, zinc, calcium and antioxidants such as ascorbic acid and beta-carotene.', 'Berry leaf', 1, 60, 2, 1, '1593789238.jpg', 1, '2020-07-03 13:13:58', '2020-07-03 13:13:58'),
(65, 'فلفل اسود', 'Black pepper', 'الحدّ من خطر الإصابة بالتهاب المفاصل', 'Reducing the risk of arthritis', 'Black pepper', 2, 70, 2, 1, '1593792960.jpg', 1, '2020-07-03 14:16:00', '2020-07-03 14:16:00'),
(66, 'فلفل ابيض', 'Piper Nigrum', 'يعزز الجهاز الهضمي', 'Promotes the digestive system', 'Piper Nigrum', 2, 70, 2, 1, '1593793096.jpg', 1, '2020-07-03 14:18:16', '2020-07-03 14:18:16'),
(67, 'حبهان', 'Cardamom', 'يعالج اضطرابات الجهاز الهضمي المختلفة', 'It treats various digestive disorders', 'Cardamom', 2, 60, 2, 1, '1593793213.jpg', 1, '2020-07-03 14:20:13', '2020-07-03 14:20:13'),
(68, 'قرفة', 'cinnamon', 'تقلل الالتهابات وتكافح الجراثيم', 'Reduces inflammation and combats germs', 'cinnamon', 2, 60, 2, 1, '1593793287.jpg', 1, '2020-07-03 14:21:27', '2020-07-03 14:21:27'),
(69, 'ينسون', 'Anise', 'يقضى على التهاب الحلق', 'It eliminates sore throat.', 'Anise', 2, 50, 2, 1, '1593793401.jpg', 1, '2020-07-03 14:23:21', '2020-07-03 14:23:21'),
(70, 'جوز الطيب', 'Nutmeg', 'جوزة الطيب في تحسين البشرة', 'Nutmeg to improve the complexion', 'Nutmeg', 2, 58, 2, 1, '1593793461.jpg', 1, '2020-07-03 14:24:21', '2020-07-03 14:24:21'),
(71, 'قرنفل', 'Cinnamon', 'مكافحة الالتهابات وتقوية المناعة', 'Fighting infections and strengthening immunity', 'Cinnamon', 2, 66, 2, 1, '1593793540.jpg', 1, '2020-07-03 14:25:40', '2020-07-03 14:25:40'),
(72, 'شمر', 'Fennel', 'خفض ضغط الدم', 'Lowering blood pressure', 'Fennel', 2, 77, 2, 1, '1593793612.jpg', 1, '2020-07-03 14:26:52', '2020-07-03 14:26:52'),
(73, 'زنجبيل', 'Ginger', 'خفض نسبة السكر في الدم', 'Reducing blood sugar', 'Ginger', 2, 56, 2, 1, '1593793730.jpg', 1, '2020-07-03 14:28:50', '2020-07-03 14:28:50'),
(74, 'الزعفران', 'Saffron', 'مكافحة السرطان', 'Fighting cancer', 'Saffron', 2, 69, 2, 1, '1593793858.jpg', 1, '2020-07-03 14:30:58', '2020-07-03 14:30:58'),
(75, 'الكركم', 'Turmeric', 'يحفز جهاز المناعة:', 'Stimulates the immune system:', 'Turmeric', 2, 66, 2, 1, '1593794015.png', 1, '2020-07-03 14:33:35', '2020-07-03 14:33:35'),
(76, 'حلبة', 'fenugreek', 'السيطرة على مستويات السكر', 'Control of sugar levels', 'fenugreek', 2, 79, 2, 1, '1593794326.jpg', 1, '2020-07-03 14:38:46', '2020-07-03 14:38:46'),
(77, 'حب الرشاد', 'Lepidium sativum', 'يكافح ارتفاع ضغط الدم.', '.   Fights high blood pressure', 'Lepidium sativum', 2, 77, 2, 1, '1593794423.jpg', 1, '2020-07-03 14:40:23', '2020-07-03 14:40:23'),
(78, 'كراوية', 'Caraway', 'تحسين عمليات الهضم', 'Improve digestion', 'Caraway', 2, 88, 2, 1, '1593794493.jpg', 1, '2020-07-03 14:41:33', '2020-07-03 14:41:33'),
(79, 'حبة البركه', 'Nigella sativa', 'تعزيز وظائف الحيوانات المنوية', 'Enhancing sperm function', 'Nigella sativa', 2, 77, 2, 1, '1593794554.jpg', 1, '2020-07-03 14:42:34', '2020-07-03 14:42:34'),
(80, 'جرجير', 'Eruca vesicaria ssp', 'العناصر المهمّة لبناء العظام وتعزيز صحّتها', 'Elements important for building bones and promoting their health', 'Eruca vesicaria ssp', 2, 50, 2, 1, '1593852475.jpg', 1, '2020-07-04 06:47:56', '2020-07-04 06:47:56'),
(81, 'عدس اصفر', 'Lentils', 'محاربة أمراض القلب', 'Fighting heart diseases', 'Lentils', 5, 50, 2, 1, '1593929121.jpg', 1, '2020-07-05 04:05:21', '2020-07-05 04:05:21'),
(82, 'العدس الاحمر', 'Lentils Read', 'محاربة أمراض القلب', 'Fighting heart diseases', 'Lentils Read', 5, 50, 2, 1, '1593929218.jpg', 1, '2020-07-05 04:06:58', '2020-07-05 04:06:58'),
(83, 'الفاصوليا الخضراء', 'Green Beans', 'زيادة الخصوبة وتقوية الحمل', 'Increased fertility and strengthen pregnancy', 'Green Beans', 5, 70, 2, 1, '1593929342.jpg', 1, '2020-07-05 04:09:02', '2020-07-05 04:09:02'),
(84, 'الفاصوليا السوداء', 'Black Beans', 'الحفاظ على صحة العظام', 'Maintaining healthy bones', 'Black Beans', 5, 50, 2, 1, '1593929405.jpg', 1, '2020-07-05 04:10:05', '2020-07-05 04:10:05'),
(85, 'الفاصوليا البيضاء', 'White Beans', 'مصدرًا غنيًا بالبروتين', 'A rich source of protein', 'White Beans', 5, 50, 2, 1, '1593929467.jpg', 1, '2020-07-05 04:11:07', '2020-07-05 04:11:07'),
(86, 'الفاصوليا الحمراء', 'Read Beans', 'خسارة الوزن الزائد', 'Excess weight loss', 'Read Beans', 5, 50, 2, 1, '1593929537.jpg', 1, '2020-07-05 04:12:17', '2020-07-05 04:12:17'),
(87, 'البازيلاء', 'Peas', 'مشبعة ومصدر ممتاز للبروتينات', 'Saturated and an excellent source of proteins', 'Peas', 5, 40, 2, 1, '1593929594.jpg', 1, '2020-07-05 04:13:14', '2020-07-05 04:13:14'),
(88, 'الحمص', 'Chick Peas', 'يعزز صحة الجهاز الهضمي', 'Promotes healthy digestive system', 'Chick Peas', 5, 59, 2, 1, '1593929676.jpg', 1, '2020-07-05 04:14:36', '2020-07-05 04:14:36'),
(89, 'الفول المدمس', 'Fava Beans', 'الوقاية من سرطان الثدي', 'Prevention of breast cancer', 'Fava Beans', 5, 40, 2, 1, '1593929756.jpg', 1, '2020-07-05 04:15:56', '2020-07-05 04:15:56'),
(90, 'الفول السوداني', 'Leguminasge', 'تعزيز صحة القلب والشرايين', 'Promote cardiovascular health', 'Leguminasge', 5, 60, 2, 1, '1593929824.jpg', 1, '2020-07-05 04:17:04', '2020-07-05 04:17:04'),
(91, 'البامية الخضراء', 'Okra Green', 'غنية بفيتامين A ومضادات الأكسدة الأخرى', 'Rich in vitamin A and other antioxidants', 'Okra Green', 5, 50, 2, 1, '1593929928.jpg', 1, '2020-07-05 04:18:48', '2020-07-05 04:18:48'),
(92, 'البامية الناشفة', 'Dray Okra', 'تقوى مناعة الجسم وتحد من تعرضه لأى أمراض جلدية.', 'It strengthens the body\'s immunity and reduces its exposure to any skin diseases.', 'Dray Okra', 5, 69, 2, 1, '1593929995.jpg', 1, '2020-07-05 04:19:55', '2020-07-05 04:19:55'),
(93, 'الذرة البيضاء', 'white Corn', 'تدعيم نمو الجنين في الرحم', 'Supporting fetal growth in the womb', 'white Corn', 5, 50, 2, 1, '1593930047.jpg', 1, '2020-07-05 04:20:47', '2020-07-05 04:20:47'),
(94, 'الذرة الصفراء', 'Corn', 'الحفاظ على صحة القلب', 'Maintaining a healthy heart', 'Corn', 5, 50, 2, 1, '1593930110.jpg', 1, '2020-07-05 04:21:50', '2020-07-05 04:21:50'),
(95, 'اللوبيا', 'Mungbean', 'تخليص الجسم من السموم', 'Rid the body of toxins', 'Mungbean', 5, 70, 2, 1, '1593930189.jpg', 1, '2020-07-05 04:23:09', '2020-07-05 04:23:09'),
(96, 'الصويا', 'Soybeans', 'تقليل خطر الإصابة بسرطان الثدي', 'Reducing the risk of developing breast cancer', 'Soybeans', 5, 60, 2, 1, '1593930247.jpg', 1, '2020-07-05 04:24:07', '2020-07-05 04:24:07'),
(97, 'الترمس', 'Lupine', 'تخلص من الديدان التي توجد في الأمعاء وتحسين الهضم.', 'Eliminate worms in the intestine and improve digestion.', 'Lupine', 5, 77, 2, 1, '1593930329.jpg', 1, '2020-07-05 04:25:29', '2020-07-05 04:25:29'),
(98, 'القمح', 'Wheat', 'تقليل خطر الإصابة بالسكري', 'Reducing the risk of diabetes', 'Wheat', 5, 60, 2, 1, '1593930385.jpg', 1, '2020-07-05 04:26:25', '2020-07-05 04:26:25'),
(99, 'الشعير', 'Barley', 'تقوية جهاز المناعة', 'Strengthening the immune system', 'Barley', 5, 60, 2, 1, '1593930435.jpeg', 1, '2020-07-05 04:27:15', '2020-07-05 04:27:15'),
(100, 'البرغل', 'Bulgur', 'مفيدة لصحة القلب والشرايين', 'Good for cardiovascular health', 'Bulgur', 5, 70, 2, 1, '1593930489.jpg', 1, '2020-07-05 04:28:09', '2020-07-05 04:28:09'),
(101, 'بهارات لحمة', 'Meat spices', 'محاربة أمراض القلب', 'Iron, zinc, calcium and antioxidants such as ascorbic acid and beta-carotene.', 'Meat spices', 2, 70, 2, 1, '1593935313.jpg', 1, '2020-07-05 05:48:33', '2020-07-05 05:48:33'),
(102, 'بهارات سمك', 'Fish spices', 'الحديد والزنك والكالسيوم ومضادات الأكسدة مثل حمض الأسكوربيك والبيتا كاروتين.', 'Fighting heart diseases', 'Fish spices', 2, 40, 2, 1, '1593935434.jpg', 1, '2020-07-05 05:50:34', '2020-07-05 05:50:34'),
(103, 'بهارات فراخ', 'Chicken spices', 'على التخلص من الاضطرابات التي تصيب الجهاز الهضمي، ويساعد على القضاء على حالات الإسهال والإمساك والتخلص من الحصوات التي تصيب المرارة، كما يخلص المعدة من الغازات والانتفاخات', 'Basil oil helps to feel relaxed and free the body from fatigue and exhaustion', 'Chicken spices', 2, 70, 2, 1, '1593935513.jpg', 1, '2020-07-05 05:51:53', '2020-07-05 05:51:53'),
(104, 'بهارات شاورما', 'Shawarma spices', 'يساعد على ارتخاء عضلات المعدة والأمعاء ويستخدم بنجاح في علاج مرض تطبل البطن.', 'To get rid of disorders that affect the digestive system, and helps to eliminate cases of diarrhea and constipation and get rid of gallstones that affect the gallbladder, as it removes the stomach from gases and bloating', 'Shawarma spices', 2, 50, 2, 1, '1593935573.jpg', 1, '2020-07-05 05:52:53', '2020-07-05 05:52:53'),
(105, 'شطه', 'Hot sauce', 'على التخلص من الاضطرابات التي تصيب الجهاز الهضمي، ويساعد على القضاء على حالات الإسهال والإمساك والتخلص من الحصوات التي تصيب المرارة، كما يخلص المعدة من الغازات والانتفاخات', 'To get rid of disorders that affect the digestive system, and helps to eliminate cases of diarrhea and constipation and get rid of gallstones that affect the gallbladder, as it removes the stomach from gases and bloating', 'Hot sauce', 2, 40, 2, 1, '1593935950.jpg', 1, '2020-07-05 05:59:10', '2020-07-05 05:59:10'),
(106, 'بابريكا', 'Paprika', 'على التخلص من الاضطرابات التي تصيب الجهاز الهضمي، ويساعد على القضاء على حالات الإسهال والإمساك والتخلص من الحصوات التي تصيب المرارة، كما يخلص المعدة من الغازات والانتفاخات', 'Fighting heart diseases', 'Paprika', 2, 49, 2, 1, '1593936125.jpeg', 1, '2020-07-05 06:02:05', '2020-07-05 06:02:05'),
(107, 'كارى', 'curry', 'الحديد والزنك والكالسيوم ومضادات الأكسدة مثل حمض الأسكوربيك والبيتا كاروتين.', 'Iron, zinc, calcium and antioxidants such as ascorbic acid and beta-carotene.', 'curry', 2, 30, 2, 1, '1593936181.jpg', 1, '2020-07-05 06:03:01', '2020-07-05 06:03:01'),
(108, 'فلفل حار', 'Hot pepper', 'محاربة أمراض القلب', 'Fighting heart diseases', 'Hot pepper', 2, 40, 2, 1, '1593936239.jpg', 1, '2020-07-05 06:03:59', '2020-07-05 06:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_ar`, `title_en`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Green Land', 'Green Land', '1556360292.png', 1, '2019-02-04 10:20:06', '2019-04-27 08:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider1', 'slider1', NULL, NULL, '1556369706.jpg', 1, '2019-04-27 10:55:06', '2019-04-27 10:55:06'),
(2, 'slider2', 'slider2', NULL, NULL, '1556369749.jpg', 1, '2019-04-27 10:55:49', '2019-04-27 10:55:49'),
(3, 'slider3', 'slider3', NULL, NULL, '1556369798.jpg', 1, '2019-04-27 10:56:38', '2019-04-27 10:56:38'),
(4, 'slider4', 'slider4', NULL, NULL, '1556369822.jpg', 1, '2019-04-27 10:57:02', '2019-04-27 10:57:02'),
(5, 'slider5', 'slider5', NULL, NULL, '1556369889.jpg', 1, '2019-04-27 10:58:09', '2019-04-27 10:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `color`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-facebook', NULL, 'https://www.facebook.com/', 1, '2019-04-27 08:00:59', '2019-04-27 08:00:59'),
(2, 'fa fa-linkedin', NULL, 'https://www.linkedin.com/', 1, '2019-04-27 08:02:22', '2019-04-27 08:02:22'),
(3, 'fa fa-google-plus', NULL, 'https://plus.google.com/', 1, '2019-04-27 08:03:56', '2019-04-27 08:03:56'),
(4, 'fa fa-twitter', NULL, 'https://twitter.com/', 1, '2019-04-27 08:04:38', '2019-04-27 08:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Mahmoud', 'Maher', 'admin@gmail.com', '01202600632', NULL, '$2y$10$WR8uaW79t6PniBpAIQKlC.zzRBwiqBeLcmSWUp8gV4WFqtUR/eCnW', 'f2riK874WuuzMueU2pvjqCQr3S1AJI6gKsTMu3KqoKI9IjhCLTs2VBeKWw9M', 1, '2019-02-04 06:21:40', '2019-04-19 22:21:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
