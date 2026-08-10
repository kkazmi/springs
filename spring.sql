-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2026 at 02:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spring`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(150) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `total_likes` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_comments` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_view` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `image` varchar(500) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `display_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category`, `heading`, `description`, `total_likes`, `total_comments`, `total_view`, `image`, `created_date`, `updated_date`, `status`, `display_order`) VALUES
(1, 'Real Estate', '10 Things to Consider Before Buying Your Dream Home', 'Buying a home is one of the biggest financial decisions you will make. Learn about location, budget, property documents, amenities, financing and other important factors to consider before making a purchase.', 124, 18, 3250, 'uploads/blog/buying-dream-home.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 1),
(2, 'Property Investment', 'Why Real Estate Is a Smart Long-Term Investment', 'Real estate can provide long-term wealth creation through property appreciation, rental income and portfolio diversification. Discover the key benefits of investing in property.', 98, 12, 2840, 'uploads/blog/real-estate-investment.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 2),
(3, 'Home Buying', 'How to Choose the Right Location for Your New Home', 'Location plays a crucial role in property value and everyday living. Explore the factors you should evaluate, including connectivity, schools, healthcare, shopping, infrastructure and future development.', 156, 24, 4120, 'uploads/blog/choose-right-location.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 3),
(4, 'Property Guide', 'Understanding Property Documents Before You Buy', 'Before purchasing a property, it is essential to verify ownership, approvals, title documents, tax records and other legal paperwork. This guide explains the key documents buyers should check.', 87, 9, 2310, 'uploads/blog/property-documents.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 4),
(5, 'Home Loans', 'A Complete Guide to Home Loans for First-Time Buyers', 'Understand the basics of home loans, including eligibility, down payment, interest rates, loan tenure, EMI calculation and important factors to consider before choosing a lender.', 143, 21, 3890, 'uploads/blog/home-loan-guide.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 5),
(6, 'Real Estate Trends', 'Real Estate Trends Every Homebuyer Should Know', 'The real estate market is constantly evolving. Learn about changing buyer preferences, new developments, technology, sustainable housing and emerging property trends.', 76, 11, 1980, 'uploads/blog/real-estate-trends.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 6),
(7, 'Property Investment', 'Residential vs Commercial Property Investment', 'Residential and commercial properties offer different investment opportunities. Compare rental income, investment requirements, risks, maintenance and potential returns before making a decision.', 112, 16, 2760, 'uploads/blog/residential-vs-commercial.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 7),
(8, 'Home Selling', 'How to Increase the Value of Your Property Before Selling', 'Small improvements can make a significant difference when selling a property. Discover practical ways to improve your home presentation, functionality and overall market appeal.', 91, 14, 2450, 'uploads/blog/increase-property-value.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 8),
(9, 'Property Management', 'Essential Tips for Managing a Rental Property', 'Successful rental property management requires careful tenant selection, regular maintenance, proper documentation and effective financial planning. Learn how to manage your property efficiently.', 68, 8, 1740, 'uploads/blog/rental-property-management.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 9),
(10, 'Real Estate Advice', 'Common Mistakes to Avoid When Buying Property', 'From ignoring location and skipping document verification to stretching your budget too far, property buyers often make avoidable mistakes. Learn how to make a more informed real estate decision.', 135, 19, 3670, 'uploads/blog/property-buying-mistakes.webp', '2026-08-09 18:06:07', '2026-08-09 18:06:07', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `chairman_msg`
--

CREATE TABLE `chairman_msg` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chairman_msg`
--

INSERT INTO `chairman_msg` (`id`, `heading`, `description`, `name`, `position`) VALUES
(1, 'A Message from Our Chairman & Managing Director', 'I don\'t believe in doing business solely for profit. True success lies in creating developments that contribute to the growth of our nation while improving the lives of people. India is witnessing an extraordinary era of progress, and with that comes a new generation of aspirational citizens seeking better lifestyles and brighter futures. At BST Developers, we have built a passionate team committed to creating not just homes, but opportunities for long-term wealth creation and meaningful living. \r\nWe will continue to innovate, embrace the best technologies, and pursue excellence in\r\n                                 everything we undertake. Above all, our greatest achievement will always be earning the\r\n                                 trust of our customers, employees, partners, and stakeholders.\r\n                                 Together, we are building communities that stand as a testament to quality, integrity,\r\n                                 and the future of India.', 'Mr. Yoginder Tanwar', 'Chairman & Managing Director');

-- --------------------------------------------------------

--
-- Table structure for table `hero_caption_section`
--

CREATE TABLE `hero_caption_section` (
  `id` int(11) NOT NULL,
  `main_heading` varchar(255) NOT NULL,
  `sub_heading` text DEFAULT NULL,
  `primary_button_text` varchar(100) DEFAULT NULL,
  `primary_button_link` varchar(255) DEFAULT NULL,
  `secondary_button_text` varchar(100) DEFAULT NULL,
  `secondary_button_link` varchar(255) DEFAULT NULL,
  `desktop_next_section` varchar(100) DEFAULT '#l-intro',
  `mobile_next_section` varchar(100) DEFAULT '#l-intro-mobile',
  `sort_order` int(11) DEFAULT 1,
  `status` tinyint(1) DEFAULT 1 COMMENT '1=Active,0=Inactive',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_caption_section`
--

INSERT INTO `hero_caption_section` (`id`, `main_heading`, `sub_heading`, `primary_button_text`, `primary_button_link`, `secondary_button_text`, `secondary_button_link`, `desktop_next_section`, `mobile_next_section`, `sort_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Building Tomorrow\'s Communities with Trust, Innovation & Sustainable Growth', 'At BST Developers, we don\'t just develop land—we create thoughtfully planned communities that combine modern infrastructure, sustainable living, and long-term value. Every project is designed to offer aspiring Indian families a better lifestyle while creating wealth for generations.', 'Explore Our Projects', 'projects', 'Get in Touch', 'contact-us', '#l-intro', '#l-intro-mobile', 1, 1, '2026-07-28 13:29:35', '2026-07-28 13:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `hero_slider_section`
--

CREATE TABLE `hero_slider_section` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_xs` varchar(255) NOT NULL,
  `image_md` varchar(255) NOT NULL,
  `image_xxl` varchar(255) NOT NULL,
  `image_xxxl` varchar(255) NOT NULL,
  `sort_order` int(11) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_slider_section`
--

INSERT INTO `hero_slider_section` (`id`, `title`, `image_xs`, `image_md`, `image_xxl`, `image_xxxl`, `sort_order`, `status`, `created_at`) VALUES
(1, 'Gallery 1', 'uploads/gallery/gallery-1@xs.webp', 'uploads/gallery/gallery-1@md.webp', 'uploads/gallery/gallery-1@xxl.webp', 'uploads/gallery/gallery-1@xxxl.webp', 1, 1, '2026-07-28 06:44:59'),
(2, 'Gallery 2', 'uploads/gallery/gallery-2@xs.webp', 'uploads/gallery/gallery-2@md.webp', 'uploads/gallery/gallery-2@xxl.webp', 'uploads/gallery/gallery-2@xxxl.webp', 2, 1, '2026-07-28 06:44:59'),
(3, 'Gallery 3', 'uploads/gallery/gallery-3@xs.webp', 'uploads/gallery/gallery-3@md.webp', 'uploads/gallery/gallery-3@xxl.webp', 'uploads/gallery/gallery-3@xxxl.webp', 3, 1, '2026-07-28 06:44:59'),
(4, 'Gallery 4', 'uploads/gallery/gallery-4@xs.webp', 'uploads/gallery/gallery-4@md.webp', 'uploads/gallery/gallery-4@xxl.webp', 'uploads/gallery/gallery-4@xxxl.webp', 4, 1, '2026-07-28 06:44:59'),
(5, 'Gallery 5', 'uploads/gallery/gallery-5@xs.webp', 'uploads/gallery/gallery-5@md.webp', 'uploads/gallery/gallery-5@xxl.webp', 'uploads/gallery/gallery-5@xxxl.webp', 5, 1, '2026-07-28 06:44:59'),
(6, 'Gallery 6', 'uploads/gallery/gallery-6@xs.webp', 'uploads/gallery/gallery-6@md.webp', 'uploads/gallery/gallery-6@xxl.webp', 'uploads/gallery/gallery-6@xxxl.webp', 6, 1, '2026-07-28 06:44:59'),
(7, 'Gallery 7', 'uploads/gallery/gallery-7@xs.webp', 'uploads/gallery/gallery-7@md.webp', 'uploads/gallery/gallery-7@xxl.webp', 'uploads/gallery/gallery-7@xxxl.webp', 7, 1, '2026-07-28 06:44:59'),
(8, 'Gallery 8', 'uploads/gallery/gallery-8@xs.webp', 'uploads/gallery/gallery-8@md.webp', 'uploads/gallery/gallery-8@xxl.webp', 'uploads/gallery/gallery-8@xxxl.webp', 8, 1, '2026-07-28 06:44:59'),
(9, 'Gallery 9', 'uploads/gallery/gallery-9@xs.webp', 'uploads/gallery/gallery-9@md.webp', 'uploads/gallery/gallery-9@xxl.webp', 'uploads/gallery/gallery-9@xxxl.webp', 9, 1, '2026-07-28 06:44:59'),
(10, 'Gallery 10', 'uploads/gallery/gallery-10@xs.webp', 'uploads/gallery/gallery-10@md.webp', 'uploads/gallery/gallery-10@xxl.webp', 'uploads/gallery/gallery-10@xxxl.webp', 10, 1, '2026-07-28 06:44:59'),
(11, 'Gallery 11', 'uploads/gallery/gallery-11@xs.webp', 'uploads/gallery/gallery-11@md.webp', 'uploads/gallery/gallery-11@xxl.webp', 'uploads/gallery/gallery-11@xxxl.webp', 11, 1, '2026-07-28 06:44:59'),
(12, 'Gallery 12', 'uploads/gallery/gallery-12@xs.webp', 'uploads/gallery/gallery-12@md.webp', 'uploads/gallery/gallery-12@xxl.webp', 'uploads/gallery/gallery-12@xxxl.webp', 12, 1, '2026-07-28 06:44:59'),
(13, 'Gallery 13', 'uploads/gallery/gallery-13@xs.webp', 'uploads/gallery/gallery-13@md.webp', 'uploads/gallery/gallery-13@xxl.webp', 'uploads/gallery/gallery-13@xxxl.webp', 13, 1, '2026-07-28 06:44:59'),
(14, 'Gallery 14', 'uploads/gallery/gallery-14@xs.webp', 'uploads/gallery/gallery-14@md.webp', 'uploads/gallery/gallery-14@xxl.webp', 'uploads/gallery/gallery-14@xxxl.webp', 14, 1, '2026-07-28 06:44:59'),
(15, 'Gallery 15', 'uploads/gallery/gallery-15@xs.webp', 'uploads/gallery/gallery-15@md.webp', 'uploads/gallery/gallery-15@xxl.webp', 'uploads/gallery/gallery-15@xxxl.webp', 15, 1, '2026-07-28 06:44:59'),
(16, 'Gallery 16', 'uploads/gallery/gallery-16@xs.webp', 'uploads/gallery/gallery-16@md.webp', 'uploads/gallery/gallery-16@xxl.webp', 'uploads/gallery/gallery-16@xxxl.webp', 16, 1, '2026-07-28 06:44:59'),
(17, 'Gallery 17', 'uploads/gallery/gallery-17@xs.webp', 'uploads/gallery/gallery-17@md.webp', 'uploads/gallery/gallery-17@xxl.webp', 'uploads/gallery/gallery-17@xxxl.webp', 17, 1, '2026-07-28 06:44:59'),
(18, 'Gallery 18', 'uploads/gallery/gallery-18@xs.webp', 'uploads/gallery/gallery-18@md.webp', 'uploads/gallery/gallery-18@xxl.webp', 'uploads/gallery/gallery-18@xxxl.webp', 18, 1, '2026-07-28 06:44:59'),
(19, 'Gallery 19', 'uploads/gallery/gallery-19@xs.webp', 'uploads/gallery/gallery-19@md.webp', 'uploads/gallery/gallery-19@xxl.webp', 'uploads/gallery/gallery-19@xxxl.webp', 19, 1, '2026-07-28 06:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `interior_images`
--

CREATE TABLE `interior_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `alt_text` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT 1,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interior_images`
--

INSERT INTO `interior_images` (`id`, `image`, `thumb`, `alt_text`, `display_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/gallery/interiors-slider-3-xxxl.webp', 'uploads/gallery/interiors-thumb-3.webp', 'interiors-slider-3', 1, 1, '2026-08-09 08:05:02', '2026-08-09 09:01:41'),
(2, 'uploads/gallery/interiors-slider-2-xxxl.webp', 'uploads/gallery/interiors-thumb-2.webp', 'interiors-slider-2', 1, 1, '2026-08-09 08:05:34', '2026-08-09 09:01:45'),
(3, 'uploads/gallery/interiors-slider-1-xxxl.webp', 'uploads/gallery/interiors-thumb-1.webp', 'interiors-slider-1', 1, 1, '2026-08-09 08:05:46', '2026-08-09 09:01:48'),
(4, 'uploads/gallery/interiors-slider-4-xxxl.webp', 'uploads/gallery/interiors-thumb-4.webp', 'interiors-slider-4', 1, 1, '2026-08-09 08:06:52', '2026-08-09 09:01:51'),
(5, 'uploads/gallery/interiors-slider-5-xxxl.webp', 'uploads/gallery/interiors-thumb-5.webp', 'interiors-slider-5', 1, 1, '2026-08-09 08:06:52', '2026-08-09 09:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission_name` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL DEFAULT '',
  `target` varchar(255) NOT NULL DEFAULT 'self',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: Deactive, 1: Active, 2: Delete',
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `priority` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `permission_name`, `href`, `icon`, `target`, `status`, `parent_id`, `priority`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dashboard', 'DASHBOARD', 'dashboard', 'fa fa-home', 'self', 1, 0, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(2, 'Testimonials', 'TESTIMONIALS', 'testimonial', 'fa fa-comments', '', 1, 0, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(3, 'Chairman Message', 'CHAIRMAN_MSG', 'chairmanmsg', 'fa fa-user-secret', 'self', 1, 0, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(4, 'Philosophy', 'PHILOSOPHY', 'philosophy', 'fa fa-users', 'self', 1, 0, 4, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(5, 'Setting', 'SETTINGS', 'setting', 'fa fa-cogs', '', 1, 0, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(6, 'Permission User Type', 'PERMISSION_USER_TYPE', '/setting/permission-user-type', 'solar:shield-user-linear', 'self', 0, 5, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(7, 'Permission User', 'PERMISSION_USER', '/setting/permission-user', 'solar:shield-check-linear', 'self', 0, 5, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(8, 'User Management', 'USER_MANAGEMENT', '', 'solar:users-group-rounded-linear', '', 0, 0, 4, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(9, 'Wallet', 'WALLET', '/user-management/wallet', 'solar:wallet-money-linear', 'self', 0, 8, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(10, 'Sender Id Registration', 'SENDER_ID_REGISTRATION', '/user-management/sender-id-registration', 'solar:letter-linear', 'self', 0, 8, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(11, 'Blacklisting', 'BLACKLISTING', '/user-management/blacklisting', 'solar:slash-circle-linear', 'self', 0, 8, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(12, 'DLR Webhook', 'DLR_WEBHOOK', '/user-management/dlr-webhook', 'solar:global-linear', 'self', 0, 8, 4, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(13, 'Error Code Mapping', 'ERROR_CODE_MAPPING', '/user-management/error-code-mapping', 'solar:danger-triangle-linear', 'self', 0, 8, 5, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(14, 'DLR Repush', 'DLR_REPUSH', '/user-management/dlr-repush', 'solar:refresh-linear', 'self', 0, 8, 6, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(15, 'Template Id Registration', 'TEMPLATE_ID_REGISTRATION', '/user-management/template-id-registration', 'solar:document-add-linear', 'self', 0, 8, 7, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(16, 'Pre-Insert Content', 'PRE_INSERT_CONTENT', '/user-management/pre-insert-content', 'solar:document-text-linear', 'self', 0, 8, 8, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(17, 'SMS Campaign', 'SMS_CAMPAIGN', '', 'solar:chat-round-line-linear', '', 0, 0, 5, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(18, 'Url Shortner', 'URL_SHORTNER', '/sms-campaign/url-shortner', 'solar:link-linear', 'self', 0, 17, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(19, 'Compose SMS', 'COMPOSE_SMS', '/sms-campaign/compose-sms', 'solar:chat-round-line-linear', 'self', 0, 17, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(20, 'Address Book', 'ADDRESS_BOOK', '/sms-campaign/address-book', 'solar:user-id-linear', 'self', 0, 17, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(21, 'Template Registration', 'TEMPLATE_REGISTRATION', '/sms-campaign/template-registration', 'solar:clipboard-text-linear', 'self', 0, 17, 4, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(22, 'SMS Config', 'SMS_CONFIG', '/sms-campaign/sms-config', 'solar:server-square-cloud-linear', 'self', 0, 17, 5, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(23, 'SMS Templates', 'SMS_TEMPLATES', '/sms-campaign/sms-templates', 'solar:chat-round-line-linear', 'self', 0, 17, 6, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(24, 'Campaign Registration', 'CAMPAIGN_REGISTRATION', '/sms-campaign/campaign-registration', 'solar:speaker-linear', 'self', 0, 17, 7, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(25, 'Email', 'EMAIL', '', 'solar:mailbox-line-duotone', '', 0, 0, 6, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(26, 'Email Config', 'EMAIL_CONFIG', '/email/config', 'solar:mailbox-line-duotone', 'self', 0, 25, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(27, 'Email Templates', 'EMAIL_TEMPLATES', '/email/templates', 'solar:letter-opened-linear', 'self', 0, 25, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(28, 'Telco Onboarding', 'TELCO_ONBOARDING', '', 'solar:server-2-linear', '', 0, 0, 7, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(29, 'SMSC Registration', 'SMSC_REGISTRATION', '/telco-onboarding/smsc-registration', 'solar:server-2-linear', 'self', 0, 28, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(30, 'Routing Group', 'ROUTING_GROUP', '/telco-onboarding/routing-group', 'solar:route-linear', 'self', 0, 28, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(31, 'Reseller Route', 'RESELLER_ROUTE', '/telco-onboarding/reseller-route', 'solar:shuffle-linear', 'self', 0, 28, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(32, 'Route Mapping', 'ROUTE_MAPPING', '/telco-onboarding/route-mapping', 'solar:map-point-linear', 'self', 0, 28, 4, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(33, 'Summary', 'SUMMARY', '', 'solar:chart-linear', '', 0, 0, 8, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(34, 'Today Stats', 'TODAY_STATS', '/summary/today-stats', 'solar:chart-linear', 'self', 0, 33, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(35, 'Download Center', 'DOWNLOAD_CENTER', '/summary/download-center', 'solar:download-linear', 'self', 0, 33, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(36, 'Error List', 'ERROR_LIST', '/summary/error-list', 'solar:danger-circle-linear', 'self', 0, 33, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(37, 'Header List', 'HEADER_LIST', '/summary/header-list', 'solar:list-linear', 'self', 0, 33, 4, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(38, 'SMSC List', 'SMSC_LIST', '/summary/smsc-list', 'solar:server-square-linear', 'self', 0, 33, 5, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(39, 'Campaign Tracking List', 'CAMPAIGN_TRACKING_LIST', '/summary/campaign-tracking-list', 'solar:target-linear', 'self', 0, 33, 6, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(40, 'Tracking Summary', 'TRACKING_SUMMARY', '/summary/tracking-summary', 'solar:graph-up-linear', 'self', 0, 33, 7, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(41, 'User Summary', 'USER_SUMMARY', '/summary/user-summary', 'solar:user-id-linear', 'self', 0, 33, 8, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(42, 'Campaign Summary', 'CAMPAIGN_SUMMARY', '/summary/campaign-summary', 'solar:pie-chart-2-linear', 'self', 0, 33, 9, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(43, 'Latency Summary', 'LATENCY_SUMMARY', '/summary/latency-summary', 'solar:clock-circle-linear', 'self', 0, 33, 10, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(44, 'Channel Summary', 'CHANNEL_SUMMARY', '/summary/channel-summary', 'solar:widget-4-linear', 'self', 0, 33, 11, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(45, 'Traffic Summary', 'TRAFFIC_SUMMARY', '/summary/traffic-summary', 'solar:pulse-linear', 'self', 0, 33, 12, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(46, 'System Monitor', 'SYSTEM_MONITOR', '', 'solar:monitor-linear', '', 0, 0, 9, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(47, 'Server Status', 'SERVER_STATUS', '/system-monitor/server-status', 'solar:monitor-linear', 'self', 0, 46, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(48, 'ESME List', 'ESME_LIST', '/system-monitor/esme-list', 'solar:smartphone-linear', 'self', 0, 46, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(49, 'SMSC List', 'SMSC_LIST_SYSTEM', '/system-monitor/smsc-list', 'solar:server-minimalistic-linear', 'self', 0, 46, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(50, 'Live Analytics', 'LIVE_ANALYTICS', '', 'solar:chart-square-linear', '', 0, 0, 10, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(51, 'User Summary', 'USER_SUMMARY_ANALYTICS', '/live-analytics/user-summary', 'solar:user-check-linear', 'self', 0, 50, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(52, 'Campaign Summary', 'CAMPAIGN_SUMMARY_ANALYTICS', '/live-analytics/campaign-summary', 'solar:chart-square-linear', 'self', 0, 50, 2, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(53, 'Vendor Summary', 'VENDOR_SUMMARY', '/live-analytics/vendor-summary', 'solar:buildings-linear', 'self', 0, 50, 3, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(54, 'Reason Summary', 'REASON_SUMMARY', '/live-analytics/reason-summary', 'solar:question-circle-linear', 'self', 0, 50, 4, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(55, 'Support', 'SUPPORT', '', 'fa fa-headphones', '', 1, 0, 11, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL),
(56, 'Helpdesk Tickets', 'HELPDESK_TICKETS', '/apps/tickets', 'solar:ticket-linear', 'self', 0, 55, 1, '2026-06-23 15:44:00', '2026-06-23 15:44:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_users`
--

CREATE TABLE `permission_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_usertypes`
--

CREATE TABLE `permission_usertypes` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `text` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permission_usertypes`
--

INSERT INTO `permission_usertypes` (`id`, `user_type`, `text`, `status`, `created_date`) VALUES
(1, 1, '{\"DASHBOARD\":{\"read\":1,\"write\":1,\"delete\":1},\"USRONBORD\":{\"read\":1,\"write\":1,\"delete\":1},\"TESTIMONIALS\":{\"read\":1,\"write\":1,\"delete\":1},\"SETTINGS\":{\"read\":1,\"write\":1,\"delete\":1},\"PERMISSION_USER_TYPE\":{\"read\":1,\"write\":1,\"delete\":1},\"PERUSR\":{\"read\":1,\"write\":1,\"delete\":1},\"CHAIRMAN_MSG\":{\"read\":1,\"write\":1,\"delete\":1},\"PHILOSOPHY\":{\"read\":1,\"write\":1,\"delete\":1},\"ADDRESSBOOK\":{\"read\":1,\"write\":1,\"delete\":1},\"TEMPLATE_REGISTRATION\":{\"read\":1,\"write\":1,\"delete\":1},\"SENDER\":{\"read\":1,\"write\":1,\"delete\":1},\"BLACKLIST\":{\"read\":1,\"write\":1,\"delete\":1},\"WHITELIST\":{\"read\":1,\"write\":1,\"delete\":1},\"COMPOSESMS\":{\"read\":1,\"write\":1,\"delete\":1},\"LEDGER\":{\"read\":1,\"write\":1,\"delete\":1},\"HEADERSUMMARY\":{\"read\":1,\"write\":1,\"delete\":1},\"MARGINSUMMARY\":{\"read\":1,\"write\":1,\"delete\":1},\"USERSSUMMARY\":{\"read\":1,\"write\":1,\"delete\":1},\"RUNNINGSUMMARY\":{\"read\":1,\"write\":1,\"delete\":1},\"SCHEDULEDSUMMARY\":{\"read\":1,\"write\":1,\"delete\":1},\"FLOWMGMT\":{\"read\":1,\"write\":1,\"delete\":1},\"WALLET\":{\"read\":1,\"write\":1,\"delete\":1},\"SUPPORT\":{\"read\":1,\"write\":1,\"delete\":1}}', 1, '2023-08-02 09:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `philosophies`
--

CREATE TABLE `philosophies` (
  `id` int(10) UNSIGNED NOT NULL,
  `short_name` varchar(100) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `display_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `display_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `philosophies`
--

INSERT INTO `philosophies` (`id`, `short_name`, `heading`, `description`, `display_status`, `display_order`, `created_at`, `updated_at`) VALUES
(1, 'B', 'Best of Everything', 'We strive to deliver excellence ineveryaspect—from strategic locations and premium planning to superior infrastructure, quality construction, and customer experience. Every BST project reflects our commitment to offering nothing but the best.', 1, 1, '2026-07-27 08:31:06', '2026-07-27 08:32:43'),
(2, 'S', 'Sustainable Future', 'Our developments are designed with tomorrow in mind. Green landscapes, open spaces, efficient planning, and environmentally responsible practices help us create communities that are healthier, smarter, and built to last for future generations.', 1, 2, '2026-07-27 08:33:46', '2026-07-27 08:33:46'),
(3, 'T', 'Trust & Technology', 'Trust forms the foundation of every relationship we build. By integrating transparency, ethical business practices, and modern technology into every stage of development, we ensure confidence, reliability, and seamless experiences for our customers.', 1, 3, '2026-07-27 08:34:24', '2026-07-27 08:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `preloader_images`
--

CREATE TABLE `preloader_images` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `image_xs` varchar(255) NOT NULL,
  `image_md` varchar(255) NOT NULL,
  `image_xxl` varchar(255) NOT NULL,
  `image_xxxl` varchar(255) NOT NULL,
  `alt_text` varchar(255) DEFAULT NULL,
  `display_order` int(11) DEFAULT 1,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preloader_images`
--

INSERT INTO `preloader_images` (`id`, `section_id`, `image_xs`, `image_md`, `image_xxl`, `image_xxxl`, `alt_text`, `display_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/gallery/preloader-left-1-xs.webp', 'uploads/gallery/preloader-left-1-md.webp', 'uploads/gallery/preloader-left-1-xxl.webp', 'uploads/gallery/preloader-left-1-xxxl.webp', NULL, 1, 1, '2026-07-28 04:17:05', NULL),
(2, 1, 'uploads/gallery/preloader-left-2-xs.webp', 'uploads/gallery/preloader-left-2-md.webp', 'uploads/gallery/preloader-left-2-xxl.webp', 'uploads/gallery/preloader-left-2-xxxl.webp', NULL, 2, 1, '2026-07-28 04:17:05', NULL),
(3, 1, 'uploads/gallery/preloader-left-3-xs.webp', 'uploads/gallery/preloader-left-3-md.webp', 'uploads/gallery/preloader-left-3-xxl.webp', 'uploads/gallery/preloader-left-3-xxxl.webp', NULL, 3, 1, '2026-07-28 04:17:05', NULL),
(4, 2, 'uploads/gallery/preloader-right-1-xs.webp', 'uploads/gallery/preloader-right-1-md.webp', 'uploads/gallery/preloader-right-1-xxl.webp', 'uploads/gallery/preloader-right-1-xxxl.webp', NULL, 1, 1, '2026-07-28 04:17:05', NULL),
(5, 2, 'uploads/gallery/preloader-right-2-xs.webp', 'uploads/gallery/preloader-right-2-md.webp', 'uploads/gallery/preloader-right-2-xxl.webp', 'uploads/gallery/preloader-right-2-xxxl.webp', NULL, 2, 1, '2026-07-28 04:17:05', NULL),
(6, 2, 'uploads/gallery/preloader-right-3-xs.webp', 'uploads/gallery/preloader-right-3-md.webp', 'uploads/gallery/preloader-right-3-xxxl.webp', 'uploads/gallery/preloader-right-3-xxl.webp', NULL, 3, 1, '2026-07-28 04:17:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preloader_sections`
--

CREATE TABLE `preloader_sections` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `section_key` varchar(50) NOT NULL,
  `display_order` int(11) DEFAULT 1,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preloader_sections`
--

INSERT INTO `preloader_sections` (`id`, `title`, `section_key`, `display_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Left Gallery', 'left', 1, 1, '2026-07-28 04:17:05', NULL),
(2, 'Right Gallery', 'right', 2, 1, '2026-07-28 04:17:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_properties`
--

CREATE TABLE `project_properties` (
  `project_property_id` int(10) UNSIGNED NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_code` varchar(50) DEFAULT NULL,
  `property_type_id` int(10) UNSIGNED NOT NULL,
  `transaction_type_id` int(10) UNSIGNED NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT 'India',
  `pincode` varchar(10) DEFAULT NULL,
  `builder_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `display_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `display_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_properties`
--

INSERT INTO `project_properties` (`project_property_id`, `property_name`, `property_code`, `property_type_id`, `transaction_type_id`, `location`, `city`, `state`, `country`, `pincode`, `builder_name`, `description`, `display_status`, `display_order`, `created_at`, `updated_at`) VALUES
(1, 'Green Valley Residency', 'P001', 1, 1, 'Sector 62', 'Noida', 'Uttar Pradesh', 'India', NULL, 'ABC Builders', NULL, 1, 1, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(2, 'Palm Meadows', 'P002', 2, 1, 'Whitefield', 'Bengaluru', 'Karnataka', 'India', NULL, 'Prestige Group', NULL, 1, 2, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(3, 'Skyline Heights', 'P003', 1, 1, 'MG Road', 'Pune', 'Maharashtra', 'India', NULL, 'Skyline Developers', NULL, 1, 3, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(4, 'Sunrise Apartments', 'P004', 1, 3, 'Vaishali', 'Ghaziabad', 'Uttar Pradesh', 'India', NULL, 'Sunrise Infra', NULL, 1, 4, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(5, 'Business Hub Tower', 'P005', 6, 1, 'Cyber City', 'Gurugram', 'Haryana', 'India', NULL, 'DLF', NULL, 1, 5, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(6, 'Royal Greens', 'P006', 3, 1, 'NH-24', 'Lucknow', 'Uttar Pradesh', 'India', NULL, 'Royal Developers', NULL, 1, 6, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(7, 'Elite Enclave', 'P007', 5, 2, 'Raj Nagar Extension', 'Ghaziabad', 'Uttar Pradesh', 'India', NULL, 'Elite Homes', NULL, 1, 7, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(8, 'Corporate Plaza', 'P008', 6, 4, 'Sector 18', 'Noida', 'Uttar Pradesh', 'India', NULL, 'Corporate Spaces', NULL, 1, 8, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(9, 'Emerald Villas', 'P009', 2, 1, 'Sarjapur Road', 'Bengaluru', 'Karnataka', 'India', NULL, 'Emerald Builders', NULL, 1, 9, '2026-07-15 03:48:42', '2026-07-15 03:48:42'),
(10, 'City Square Mall', 'P010', 7, 3, 'Civil Lines', 'Jaipur', 'Rajasthan', 'India', NULL, 'City Developers', NULL, 1, 10, '2026-07-15 03:48:42', '2026-07-15 03:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `property_type_id` int(10) UNSIGNED NOT NULL,
  `property_type_name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `display_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`property_type_id`, `property_type_name`, `description`, `display_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', NULL, 1, 1, '2026-07-15 03:40:03', '2026-07-15 03:40:03'),
(2, 'Villa', NULL, 2, 1, '2026-07-15 03:40:03', '2026-07-15 03:40:03'),
(3, 'Plot', NULL, 3, 1, '2026-07-15 03:40:03', '2026-07-15 03:40:03'),
(4, 'Commercial', NULL, 4, 1, '2026-07-15 03:40:03', '2026-07-15 03:40:03'),
(5, 'Independent House', NULL, 5, 1, '2026-07-15 03:40:03', '2026-07-15 03:40:03'),
(6, 'Office', NULL, 6, 1, '2026-07-15 03:40:03', '2026-07-15 03:40:03'),
(7, 'Shop', NULL, 7, 1, '2026-07-15 03:40:03', '2026-07-15 03:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(122) UNSIGNED NOT NULL,
  `keys` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `is_display` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `keys`, `value`, `user_id`, `is_display`) VALUES
(1, 'website', 'localhost', 2, 0),
(2, 'company_name', 'BST Developers', 2, 1),
(7, 'logo', 'logo.png', 2, 0),
(8, 'favicon', 'favicon.ico', 2, 0),
(15, 'email', 'info@bstdevelopers.com', 2, 1),
(25, 'address', '308, 3rd floor, BST Developers India Pvt Ltd, ILD Trade Center, Malibu Towne, Sector 47, Gurugram, Haryana 122018, India', 2, 1),
(26, 'contact_no', '8929303303', 2, 1),
(27, 'toll_free_no', '', 2, 1),
(28, 'facebook', 'https://www.facebook.com/bstdevelopers/?locale=hi_IN', 2, 1),
(29, 'twitter', '', 2, 1),
(30, 'linkedin', 'https://www.linkedin.com/company/bst-developers/?_l=en_US', 2, 1),
(31, 'instagram', 'https://www.instagram.com/bst_developers/', 2, 1),
(33, 'youtube', '', 2, 1),
(34, 'Corporate_website', 'https://bstdevelopers.com/', 2, 1),
(538, 'whatsapp', 'https://api.whatsapp.com/send/?phone=918368130733', 2, 1),
(539, 'download_brochures', 'https://bstdevelopers.com/bstbrochure', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(150) NOT NULL,
  `testimonial` text NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `property_type_id` int(10) UNSIGNED NOT NULL,
  `transaction_type_id` int(10) UNSIGNED NOT NULL,
  `project_property_id` int(10) UNSIGNED NOT NULL,
  `display_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `display_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `client_name`, `testimonial`, `rating`, `property_type_id`, `transaction_type_id`, `project_property_id`, `display_status`, `display_order`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Sharma', 'The entire buying process was smooth and transparent. The team guided us at every step and helped us find our dream apartment.', 5, 1, 1, 1, 1, 1, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(2, 'Priya Verma', 'Excellent service and professional staff. They helped us sell our villa much faster than expected.', 5, 2, 2, 2, 1, 2, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(3, 'Amit Singh', 'Very satisfied with the property recommendations. The documentation process was quick and hassle-free.', 4, 1, 1, 3, 1, 3, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(4, 'Neha Gupta', 'The rental process was seamless. The team understood our requirements and found us a perfect home.', 5, 1, 3, 4, 1, 4, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(5, 'Vikas Mehta', 'Professional guidance throughout the purchase of our commercial office. Highly recommended.', 5, 6, 1, 5, 1, 5, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(6, 'Sneha Kapoor', 'We recently purchased a residential plot through them. The transaction was transparent and completed on time.', 4, 3, 1, 6, 1, 6, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(7, 'Ankit Jain', 'Their market knowledge helped us get the best value for our independent house. Great experience.', 5, 5, 2, 7, 1, 7, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(8, 'Pooja Mishra', 'Very responsive team. They assisted us in leasing our office space with complete professionalism.', 4, 6, 4, 8, 1, 8, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(9, 'Sandeep Yadav', 'Excellent customer support from property visits to registration. Everything was handled efficiently.', 5, 2, 1, 9, 1, 9, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(10, 'Ritika Malhotra', 'Found the perfect shop for our business. The entire process was quick and well managed.', 5, 7, 3, 10, 1, 10, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(11, 'Manoj Agarwal', 'Honest advice, transparent pricing, and timely updates throughout the selling process.', 4, 4, 2, 5, 1, 11, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(12, 'Kavita Joshi', 'A trustworthy real estate partner. We are extremely happy with our new apartment and the overall experience.', 5, 1, 1, 1, 1, 12, '2026-07-15 03:50:26', '2026-07-15 03:50:26'),
(13, 'Prateek Verma', 'Its Easy\'s. Join the BST GOLDEN CLUB. Become a member .As a member all you need to do is refer your friends & contacts. Encourage them to visit the BST website, download our brochures, view the\'Fly - through\', visit our project sites and of course- book our projects !\r\n', 5, 1, 1, 1, 1, 1, '2026-07-18 16:11:33', '2026-07-18 16:32:51'),
(14, 'Subhash Chander', 'BST has built this project beautifully for us.\r\nFrom proper sewer systems to excellent\r\nlighting and perfectly developed roads —\r\neverything is well-planned and thoughtfully\r\nThere is no compromise on quality.\r\nThank you, BST, for delivering such a well-\r\ndeveloped and reliable project.', 5, 3, 1, 1, 1, 1, '2026-07-27 07:20:32', '2026-07-27 07:20:32'),
(15, 'Anil Agarwal', 'I have yet to find a more helpful and polite staff than BST. My bookings in BST has been so well executed and communicated, that I will recommend BST to all my contacts.', 4, 3, 1, 1, 1, 2, '2026-07-27 07:25:34', '2026-07-27 07:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_types`
--

CREATE TABLE `transaction_types` (
  `transaction_type_id` int(10) UNSIGNED NOT NULL,
  `transaction_type_name` varchar(50) NOT NULL,
  `display_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction_types`
--

INSERT INTO `transaction_types` (`transaction_type_id`, `transaction_type_name`, `display_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Buy', 1, 1, '2026-07-15 03:45:05', '2026-07-15 03:45:05'),
(2, 'Sell', 2, 1, '2026-07-15 03:45:05', '2026-07-15 03:45:05'),
(3, 'Rent', 3, 1, '2026-07-15 03:45:05', '2026-07-15 03:45:05'),
(4, 'Lease', 4, 1, '2026-07-15 03:45:05', '2026-07-15 03:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `smsc_type` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `parent_id` int(11) NOT NULL,
  `billing_type` int(11) NOT NULL,
  `billing_cycle` int(11) NOT NULL,
  `billing_currency` int(11) NOT NULL,
  `user_chain` text NOT NULL,
  `account_validity` date NOT NULL,
  `wl_id` int(11) NOT NULL,
  `balance` float NOT NULL,
  `gst` varchar(255) NOT NULL,
  `gst_file` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `pan_file` varchar(255) NOT NULL,
  `director_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_contact` varchar(255) NOT NULL,
  `company_website` varchar(255) NOT NULL,
  `company_country` varchar(255) NOT NULL,
  `company_city` varchar(255) NOT NULL,
  `company_state` varchar(255) NOT NULL,
  `company_zip` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `panel_url` varchar(255) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` varchar(255) NOT NULL,
  `smtp_username` varchar(255) NOT NULL,
  `smtp_password` varchar(255) NOT NULL,
  `smtp_encryption` varchar(255) NOT NULL,
  `smtp_email` varchar(255) NOT NULL,
  `smtp_name` varchar(255) NOT NULL,
  `dir_pan_file` varchar(255) NOT NULL,
  `dir_aadhar_file` varchar(255) NOT NULL,
  `agreement` varchar(255) NOT NULL,
  `light_logo` varchar(255) NOT NULL,
  `dark_logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `is_kyc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `username`, `password`, `country_id`, `mobile`, `email`, `designation`, `smsc_type`, `created_date`, `updated_date`, `status`, `is_deleted`, `parent_id`, `billing_type`, `billing_cycle`, `billing_currency`, `user_chain`, `account_validity`, `wl_id`, `balance`, `gst`, `gst_file`, `pan`, `pan_file`, `director_name`, `company_name`, `company_email`, `company_contact`, `company_website`, `company_country`, `company_city`, `company_state`, `company_zip`, `company_address`, `panel_url`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `smtp_encryption`, `smtp_email`, `smtp_name`, `dir_pan_file`, `dir_aadhar_file`, `agreement`, `light_logo`, `dark_logo`, `favicon`, `is_kyc_status`) VALUES
(1, 1, 'Omni Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '9457120207', 'php@gmail.com', '', 1, '2025-07-31 10:25:56', '2025-07-31 06:55:12', 1, 0, 1, 1, 1, 1, 'admin#', '2030-07-01', 2, 286.99, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, 2, 'Omni Enterprise', 'adminEnter', '', 101, '9457120206', 'phpenter@gmail.com', '', 1, '2025-07-31 10:25:56', '2025-07-31 06:55:12', 1, 0, 1, 1, 1, 1, 'admin#', '2030-07-01', 2, 400, 'gst', '', 'test', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '', '', '', '', '', '', 0),
(3, 3, 'Prateek Verma', 'root', '21232f297a57a5a743894a0e4a801fc3', 101, '9990045313', 'prateekvermatech@gmail.com', 'root', 0, '2025-08-06 12:08:20', '0000-00-00 00:00:00', 1, 0, 1, 0, 0, 0, 'admin#root#', '2025-08-08', 2, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 2, 'Ashok', 'asok', '098f6bcd4621d373cade4e832627b4f6', 1, '9990045313', 'asok@gmail.com', '', 0, '2025-11-23 09:44:48', '0000-00-00 00:00:00', 1, 0, 1, 0, 0, 0, 'admin#asok#', '2026-11-23', 2, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 2, 'Arvind test ', 'test', '098f6bcd4621d373cade4e832627b4f6', 1, '9990045313', 'test', '', 0, '2025-11-23 09:46:08', '0000-00-00 00:00:00', 1, 0, 1, 0, 0, 0, 'admin#test#', '2026-11-23', 2, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `isAdmin` int(11) NOT NULL,
  `isAccess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`id`, `name`, `status`, `isAdmin`, `isAccess`) VALUES
(1, 'Admin', 1, 1, ''),
(2, 'Enterprise', 1, 0, '1,4,3'),
(3, 'Reseller', 1, 0, '1'),
(4, 'Seller', 1, 0, '1'),
(8, 'Vendor', 1, 0, '1'),
(9, 'Support Admin', 1, 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_blog_category` (`category`),
  ADD KEY `idx_blog_status` (`status`),
  ADD KEY `idx_blog_display_order` (`display_order`),
  ADD KEY `idx_blog_created_date` (`created_date`);

--
-- Indexes for table `chairman_msg`
--
ALTER TABLE `chairman_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_caption_section`
--
ALTER TABLE `hero_caption_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_slider_section`
--
ALTER TABLE `hero_slider_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_images`
--
ALTER TABLE `interior_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_id` (`parent_id`),
  ADD KEY `menus_status` (`status`);

--
-- Indexes for table `permission_users`
--
ALTER TABLE `permission_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_usertypes`
--
ALTER TABLE `permission_usertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `philosophies`
--
ALTER TABLE `philosophies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_display_status` (`display_status`),
  ADD KEY `idx_display_order` (`display_order`);

--
-- Indexes for table `preloader_images`
--
ALTER TABLE `preloader_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gallery_section` (`section_id`) USING BTREE;

--
-- Indexes for table `preloader_sections`
--
ALTER TABLE `preloader_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_properties`
--
ALTER TABLE `project_properties`
  ADD PRIMARY KEY (`project_property_id`),
  ADD UNIQUE KEY `property_code` (`property_code`),
  ADD KEY `fk_project_property_type` (`property_type_id`),
  ADD KEY `fk_project_transaction_type` (`transaction_type_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`property_type_id`),
  ADD UNIQUE KEY `property_type_name` (`property_type_name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`),
  ADD KEY `fk_testimonials_property_type` (`property_type_id`),
  ADD KEY `fk_testimonials_transaction_type` (`transaction_type_id`),
  ADD KEY `fk_testimonials_project_property` (`project_property_id`);

--
-- Indexes for table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`transaction_type_id`),
  ADD UNIQUE KEY `transaction_type_name` (`transaction_type_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chairman_msg`
--
ALTER TABLE `chairman_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero_caption_section`
--
ALTER TABLE `hero_caption_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero_slider_section`
--
ALTER TABLE `hero_slider_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `interior_images`
--
ALTER TABLE `interior_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `permission_users`
--
ALTER TABLE `permission_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permission_usertypes`
--
ALTER TABLE `permission_usertypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `philosophies`
--
ALTER TABLE `philosophies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `preloader_images`
--
ALTER TABLE `preloader_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `preloader_sections`
--
ALTER TABLE `preloader_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_properties`
--
ALTER TABLE `project_properties`
  MODIFY `project_property_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `property_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(122) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=540;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `transaction_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `preloader_images`
--
ALTER TABLE `preloader_images`
  ADD CONSTRAINT `fk_gallery_section` FOREIGN KEY (`section_id`) REFERENCES `preloader_sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_properties`
--
ALTER TABLE `project_properties`
  ADD CONSTRAINT `fk_project_property_type` FOREIGN KEY (`property_type_id`) REFERENCES `property_types` (`property_type_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_project_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `transaction_types` (`transaction_type_id`) ON UPDATE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `fk_testimonials_project_property` FOREIGN KEY (`project_property_id`) REFERENCES `project_properties` (`project_property_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_testimonials_property_type` FOREIGN KEY (`property_type_id`) REFERENCES `property_types` (`property_type_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_testimonials_transaction_type` FOREIGN KEY (`transaction_type_id`) REFERENCES `transaction_types` (`transaction_type_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
