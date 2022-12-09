-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 12:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_access` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `image`, `phone`, `address`, `admin_access`, `last_login`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$.sO9kLAurqjCYnUatIQeDuwxOqPC7KWPKEIOy5rYf8sGMm0zkLdZm', '627a4928ec4a51652181288.jpg', '+5641 455646', 'TX, USA', '[\"admin.dashboard\",\"admin.staff\",\"admin.storeStaff\",\"admin.updateStaff\",\"admin.identify-form\",\"admin.identify-form.store\",\"admin.identify-form.action\",\"admin.listCategory\",\"admin.listTournament\",\"admin.listTeam\",\"admin.listMatch\",\"admin.infoMatch\",\"admin.addQuestion\",\"admin.optionList\",\"admin.storeCategory\",\"admin.updateCategory\",\"admin.deleteCategory\",\"admin.storeTournament\",\"admin.storeTeam\",\"admin.storeMatch\",\"admin.storeQuestion\",\"admin.optionAdd\",\"admin.updateTournament\",\"admin.updateTeam\",\"admin.updateMatch\",\"admin.locker\",\"admin.updateQuestion\",\"admin.optionUpdate\",\"admin.deleteTournament\",\"admin.deleteTeam\",\"admin.deleteMatch\",\"admin.deleteQuestion\",\"admin.optionDelete\",\"admin.resultList.pending\",\"admin.resultList.complete\",\"admin.searchResult\",\"admin.resultWinner\",\"admin.betUser\",\"admin.makeWinner\",\"admin.refundQuestion\",\"admin.referral-commission\",\"admin.referral-commission.store\",\"admin.referral-commission.action\",\"admin.transaction\",\"admin.transaction.search\",\"admin.commissions\",\"admin.commissions.search\",\"admin.bet-history\",\"admin.searchBet\",\"admin.refundBet\",\"admin.users\",\"admin.users.search\",\"admin.email-send\",\"admin.user.transaction\",\"admin.user.fundLog\",\"admin.user.withdrawal\",\"admin.user.userKycHistory\",\"admin.kyc.users.pending\",\"admin.kyc.users\",\"admin.user-edit\",\"admin.user-multiple-active\",\"admin.user-multiple-inactive\",\"admin.send-email\",\"admin.user.userKycHistory\",\"admin.user-balance-update\",\"admin.payment.methods\",\"admin.deposit.manual.index\",\"admin.deposit.manual.create\",\"admin.edit.payment.methods\",\"admin.deposit.manual.edit\",\"admin.payment.pending\",\"admin.payment.log\",\"admin.payment.search\",\"admin.payment.action\",\"admin.payout-method\",\"admin.payout-log\",\"admin.payout-request\",\"admin.payout-log.search\",\"admin.payout-method.create\",\"admin.payout-method.edit\",\"admin.payout-action\",\"admin.ticket\",\"admin.ticket.view\",\"admin.ticket.reply\",\"admin.ticket.delete\",\"admin.subscriber.index\",\"admin.subscriber.sendEmail\",\"admin.subscriber.remove\",\"admin.basic-controls\",\"admin.email-controls\",\"admin.email-template.show\",\"admin.sms.config\",\"admin.sms-template\",\"admin.notify-config\",\"admin.notify-template.show\",\"admin.notify-template.edit\",\"admin.plugin.config\",\"admin.tawk.control\",\"admin.fb.messenger.control\",\"admin.google.recaptcha.control\",\"admin.google.analytics.control\",\"admin.basic-controls.update\",\"admin.email-controls.update\",\"admin.email-template.edit\",\"admin.sms-template.edit\",\"admin.notify-config.update\",\"admin.notify-template.update\",\"admin.language.index\",\"admin.language.create\",\"admin.language.edit\",\"admin.language.keywordEdit\",\"admin.language.delete\",\"admin.manage.theme\",\"admin.logo-seo\",\"admin.breadcrumb\",\"admin.template.show\",\"admin.content.index\",\"admin.content.create\",\"admin.logoUpdate\",\"admin.seoUpdate\",\"admin.breadcrumbUpdate\",\"admin.content.show\",\"admin.content.delete\"]', '2022-11-21 23:36:16', 1, 'mUqm8fJuZR96ZKMys6UKOUr1XdRD9Fa8RT0AaLbRLiOiHIRTFxkOcewLI5er', '2021-12-17 10:00:01', '2022-11-21 16:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `bet_invests`
--

CREATE TABLE `bet_invests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `invest_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `return_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `charge` decimal(8,2) NOT NULL DEFAULT 0.00,
  `remaining_balance` decimal(8,2) NOT NULL DEFAULT 0.00,
  `ratio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'default 0, win 1, lose -1, refund 2',
  `isMultiBet` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bet_invest_logs`
--

CREATE TABLE `bet_invest_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bet_invest_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `bet_option_id` bigint(20) UNSIGNED NOT NULL,
  `ratio` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tournament_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `match_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'default=>0\r\nwin => 2,\r\nlose=> -2,\r\nrefund=3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configures`
--

CREATE TABLE `configures` (
  `id` int(11) UNSIGNED NOT NULL,
  `site_title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `time_zone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_mode` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=> light, 0 => Dark',
  `fraction_number` int(11) DEFAULT NULL,
  `paginate` int(11) DEFAULT NULL,
  `email_verification` tinyint(1) NOT NULL DEFAULT 0,
  `email_notification` tinyint(1) NOT NULL DEFAULT 0,
  `sms_verification` tinyint(1) NOT NULL DEFAULT 0,
  `sms_notification` tinyint(1) NOT NULL DEFAULT 0,
  `sender_email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_email_name` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_configuration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `push_notification` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `error_log` tinyint(1) NOT NULL,
  `strong_password` tinyint(1) NOT NULL,
  `registration` tinyint(1) NOT NULL,
  `address_verification` tinyint(1) NOT NULL,
  `identity_verification` tinyint(1) NOT NULL,
  `maintenance` tinyint(1) NOT NULL,
  `is_active_cron_notification` tinyint(1) NOT NULL DEFAULT 0,
  `tawk_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawk_status` tinyint(4) NOT NULL DEFAULT 1,
  `fb_messenger_status` tinyint(4) NOT NULL DEFAULT 1,
  `fb_app_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_page_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reCaptcha_status_login` tinyint(4) NOT NULL DEFAULT 1,
  `reCaptcha_status_registration` tinyint(4) NOT NULL DEFAULT 1,
  `MEASUREMENT_ID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analytic_status` tinyint(4) NOT NULL DEFAULT 1,
  `refund_charge` decimal(5,2) NOT NULL DEFAULT 0.00,
  `win_charge` decimal(11,2) NOT NULL DEFAULT 0.00,
  `minimum_bet` decimal(11,2) NOT NULL DEFAULT 10.00,
  `deposit_commission` tinyint(1) NOT NULL DEFAULT 0,
  `bet_commission` tinyint(1) NOT NULL DEFAULT 0,
  `bet_win_commission` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configures`
--

INSERT INTO `configures` (`id`, `site_title`, `base_color`, `time_zone`, `currency`, `currency_symbol`, `theme`, `theme_mode`, `fraction_number`, `paginate`, `email_verification`, `email_notification`, `sms_verification`, `sms_notification`, `sender_email`, `sender_email_name`, `email_description`, `email_configuration`, `push_notification`, `created_at`, `updated_at`, `error_log`, `strong_password`, `registration`, `address_verification`, `identity_verification`, `maintenance`, `is_active_cron_notification`, `tawk_id`, `tawk_status`, `fb_messenger_status`, `fb_app_id`, `fb_page_id`, `reCaptcha_status_login`, `reCaptcha_status_registration`, `MEASUREMENT_ID`, `analytic_status`, `refund_charge`, `win_charge`, `minimum_bet`, `deposit_commission`, `bet_commission`, `bet_win_commission`) VALUES
(1, 'Prophecy', '#8fb568', 'UTC', 'USD', '$', 'betting', 0, 0, 20, 0, 0, 0, 0, 'support@mail.com', 'Bug Finder', '<h1>\r\n                            </h1><h1></h1><p style=\"font-style:normal;font-weight:normal;color:rgb(68,168,199);font-size:36px;font-family:bitter, georgia, serif;text-align:center;\"> <br /></p>\r\n                        \r\n\r\n                        \r\n\r\n                            <p><strong>Hello [[name]],</strong></p>\r\n                            <p><strong>[[message]]</strong></p>\r\n                            <p><br /></p>\r\n                        \r\n\r\n                    \r\n                \r\n            \r\n\r\n            \r\n                \r\n                    \r\n                        <p style=\"font-style:normal;font-weight:normal;color:#ffffff;font-size:16px;font-family:bitter, georgia, serif;text-align:center;\">\r\n                            2021 ©  All Right Reserved\r\n                        </p>', '{\"name\":\"smtp\",\"smtp_host\":\"smtp.mailtrap.io\",\"smtp_port\":\"2525\",\"smtp_encryption\":\"ssl\",\"smtp_username\":\"b75b1a5bfa5d58\",\"smtp_password\":\"f89fbe0495a7fc\"}', 1, NULL, '2022-09-21 04:00:55', 0, 0, 1, 0, 0, 0, 1, '58dd135ef7bbaa72709c3470/default', 1, 1, NULL, NULL, 0, 0, NULL, 1, '5.00', '0.00', '5.00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(83, 'testimonial', '2022-08-31 07:05:14', '2022-08-31 07:05:14'),
(84, 'testimonial', '2022-08-31 07:05:52', '2022-08-31 07:05:52'),
(85, 'testimonial', '2022-08-31 07:06:20', '2022-08-31 07:06:20'),
(86, 'faq', '2022-08-31 07:19:51', '2022-08-31 07:19:51'),
(87, 'faq', '2022-08-31 07:22:10', '2022-08-31 07:22:10'),
(88, 'faq', '2022-08-31 07:22:56', '2022-08-31 07:22:56'),
(89, 'faq', '2022-08-31 07:23:27', '2022-08-31 07:23:27'),
(90, 'faq', '2022-08-31 07:24:15', '2022-08-31 07:24:15'),
(91, 'faq', '2022-08-31 07:24:55', '2022-08-31 07:24:55'),
(92, 'blog', '2022-08-31 07:56:45', '2022-08-31 07:56:45'),
(93, 'blog', '2022-08-31 07:57:20', '2022-08-31 07:57:20'),
(94, 'blog', '2022-08-31 07:57:52', '2022-08-31 07:57:52'),
(95, 'support', '2022-09-01 00:03:53', '2022-09-01 00:03:53'),
(96, 'support', '2022-09-01 00:04:29', '2022-09-01 00:04:29'),
(97, 'social', '2022-09-01 00:39:36', '2022-09-01 00:39:36'),
(98, 'social', '2022-09-01 00:40:39', '2022-09-01 00:40:39'),
(99, 'social', '2022-09-01 00:41:48', '2022-09-01 00:41:48'),
(100, 'slider', '2022-09-15 07:01:00', '2022-09-15 07:01:00'),
(101, 'slider', '2022-09-15 07:02:31', '2022-09-15 07:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `content_details`
--

CREATE TABLE `content_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `content_id` int(11) UNSIGNED DEFAULT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_details`
--

INSERT INTO `content_details` (`id`, `content_id`, `language_id`, `description`, `created_at`, `updated_at`) VALUES
(225, 83, 1, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-08-31 07:05:14', '2022-08-31 07:05:14'),
(226, 84, 1, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-08-31 07:05:52', '2022-08-31 07:05:52'),
(227, 85, 1, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-08-31 07:06:20', '2022-08-31 07:06:20'),
(228, 86, 1, '{\"title\":\"What is Partial status?\",\"description\":\"Partial Status is when we partially refund the remains of an order. Sometimes for some reasons we are unable to deliver a full order, so we refund you the remaining undelivered amount. Example: You bought an order with quantity 10 000 and charges 10$, let\'s say we delivered 9 000 and the remaining 1 000 we couldn\'t deliver, then we will \\\"Partial\\\" the order and refund you the remaining 1000 (1$ in this example.\"}', '2022-08-31 07:19:51', '2022-08-31 07:19:51'),
(229, 87, 1, '{\"title\":\"What is Drip Feed?\",\"description\":\"Drip Feed is a service that we are offering so you would be able to put the same order multiple times automatically. Example: let\'s say you want to get 1000 likes on your Instagram Post but you want to get 100 likes each 30 minutes, you will put Link: Your Post Link Quantity: 100 Runs: 10 (as you want to run this order 10 times, if you want to get 2000 likes, you will run it 20 times, etc\\u2026) Interval: 30 (because you want to get 100 likes on your post each 30 minutes, if you want each hour, you will put 60 because the time is in minutes) P.S: Never order more quantity than the maximum which is written on the service name (Quantity x Runs), Example if the service\'s max is 4000, you don\\u2019t put Quantity: 500 and Run: 10, because total quantity will be 500x10 = 5000 which is bigger than the service max (4000). Also never put the Interval below the actual start time (some services need 60 minutes to start, don\\u2019t put Interval less than the service start time or it will cause a fail in your order\"}', '2022-08-31 07:22:10', '2022-08-31 07:22:10'),
(230, 88, 1, '{\"title\":\"How to get youtube comment link?\",\"description\":\"Find the timestamp that is located next to your username above your comment (for example: \\\"3 days ago\\\") and hover over it then right click and \\\"Copy Link Address\\\". The link will be something like this: https:\\/\\/www.youtube.com\\/watch?v=12345&amp;lc=a1b21etc instead of just https:\\/\\/www.youtube.com\\/watch?v=12345 To be sure that you got the correct link, paste it in your browser\'s address bar and you will see that the comment is now the first one below the video and it says \\\"Highlighted comment\\\".\"}', '2022-08-31 07:22:56', '2022-08-31 07:22:56'),
(231, 89, 1, '{\"title\":\"What is \'Instagram Saves\', and what does it do?\",\"description\":\"Instagram Saves is when a user saves a post to his history on Instagram (by pressing the save button near the like button). A lot of saves for a post increase its impression.\"}', '2022-08-31 07:23:27', '2022-08-31 07:23:27'),
(232, 90, 1, '{\"title\":\"How do I benefit from the ICO Token?\",\"description\":\"This is the third item\'s accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the accordion-body though the transition does limit overflow.\"}', '2022-08-31 07:24:19', '2022-08-31 07:24:19'),
(233, 91, 1, '{\"title\":\"The link must be added before the user goes live or after?\",\"description\":\"After he goes live, or just 5 second before he goes!\"}', '2022-08-31 07:24:55', '2022-08-31 07:24:55'),
(234, 92, 1, '{\"title\":\"Learn about UI8 coin and earn an All-Access Pass\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quas, asperiores sed itaque officiis quae est nulla dolores voluptatem accusantium quisquam tempore quasi, nihil totam perspiciatis! Dicta nesciunt suscipit maxime. Alias pariatur eum fuga corporis aperiam sit.\"}', '2022-08-31 07:56:45', '2022-08-31 07:56:45'),
(235, 93, 1, '{\"title\":\"Learn about UI8 coin and earn an All-Access Pass\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quas, asperiores sed itaque officiis quae est nulla dolores voluptatem accusantium quisquam tempore quasi, nihil totam perspiciatis! Dicta nesciunt suscipit maxime. Alias pariatur eum fuga corporis aperiam sit.\"}', '2022-08-31 07:57:20', '2022-08-31 07:57:20'),
(236, 94, 1, '{\"title\":\"Learn about UI8 coin and earn an All-Access Pass\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quas, asperiores sed itaque officiis quae est nulla dolores voluptatem accusantium quisquam tempore quasi, nihil totam perspiciatis! Dicta nesciunt suscipit maxime. Alias pariatur eum fuga corporis aperiam sit.\"}', '2022-08-31 07:57:52', '2022-08-31 07:57:52'),
(237, 95, 1, '{\"title\":\"Terms &amp; Conditions\",\"description\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\\r\\n\\r\\n\\r\\n\\r\\nThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like\"}', '2022-09-01 00:03:53', '2022-09-01 00:03:53'),
(238, 96, 1, '{\"title\":\"Privacy Policy\",\"description\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\"}', '2022-09-01 00:04:29', '2022-09-01 00:04:29'),
(239, 97, 1, '{\"name\":\"facebook\"}', '2022-09-01 00:39:36', '2022-09-01 00:39:36'),
(240, 98, 1, '{\"name\":\"twitter\"}', '2022-09-01 00:40:39', '2022-09-01 00:40:39'),
(241, 99, 1, '{\"name\":\"linkein\"}', '2022-09-01 00:41:48', '2022-09-01 00:41:48'),
(242, 100, 1, '{\"name\":\"Football\",\"short_description\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit unde.\",\"button_name\":\"place a bet\"}', '2022-09-15 07:01:00', '2022-09-15 07:01:00'),
(243, 101, 1, '{\"name\":\"Cricket\",\"short_description\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit unde.\",\"button_name\":\"find out more\"}', '2022-09-15 07:02:31', '2022-09-15 07:02:31'),
(245, 100, 18, '{\"name\":\"F\\u00fatbol\",\"short_description\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit unde.\",\"button_name\":\"hacer una apuesta\"}', '2022-09-18 05:01:39', '2022-09-18 05:01:39'),
(246, 101, 18, '{\"name\":\"Grillo\",\"short_description\":\"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit unde.\",\"button_name\":\"Saber m\\u00e1s\"}', '2022-09-18 05:02:31', '2022-09-18 05:02:31'),
(248, 83, 18, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-18 05:08:03', '2022-09-18 05:08:03'),
(249, 84, 18, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-18 05:08:30', '2022-09-18 05:08:30'),
(250, 85, 18, '{\"name\":\"selena gomez\",\"designation\":\"Director, BAT\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas distinctio hic commodi itaque aperiam aliquam ullam adipisci laborum eum.\"}', '2022-09-18 05:08:59', '2022-09-18 05:08:59'),
(251, 86, 18, '{\"title\":\"Qu\\u00e9 es el estado parcial?\",\"description\":\"Partial Status is when we partially refund the remains of an order. Sometimes for some reasons we are unable to deliver a full order, so we refund you the remaining undelivered amount. Example: You bought an order with quantity 10 000 and charges 10$, let\'s say we delivered 9 000 and the remaining 1 000 we couldn\'t deliver, then we will \\\"Partial\\\" the order and refund you the remaining 1000 (1$ in this example.\"}', '2022-09-18 05:09:35', '2022-09-18 05:09:35'),
(252, 87, 18, '{\"title\":\"Qu\\u00e9 es la alimentaci\\u00f3n por goteo?\",\"description\":\"Drip Feed is a service that we are offering so you would be able to put the same order multiple times automatically. Example: let\'s say you want to get 1000 likes on your Instagram Post but you want to get 100 likes each 30 minutes, you will put Link: Your Post Link Quantity: 100 Runs: 10 (as you want to run this order 10 times, if you want to get 2000 likes, you will run it 20 times, etc\\u2026) Interval: 30 (because you want to get 100 likes on your post each 30 minutes, if you want each hour, you will put 60 because the time is in minutes) P.S: Never order more quantity than the maximum which is written on the service name (Quantity x Runs), Example if the service\'s max is 4000, you don\\u2019t put Quantity: 500 and Run: 10, because total quantity will be 500x10 = 5000 which is bigger than the service max (4000). Also never put the Interval below the actual start time (some services need 60 minutes to start, don\\u2019t put Interval less than the service start time or it will cause a fail in your order\"}', '2022-09-18 05:10:01', '2022-09-18 05:10:01'),
(253, 88, 18, '{\"title\":\"C\\u00f3mo obtener el enlace de comentario de YouTube?\",\"description\":\"Find the timestamp that is located next to your username above your comment (for example: \\\"3 days ago\\\") and hover over it then right click and \\\"Copy Link Address\\\". The link will be something like this: https:\\/\\/www.youtube.com\\/watch?v=12345&amp;lc=a1b21etc instead of just https:\\/\\/www.youtube.com\\/watch?v=12345 To be sure that you got the correct link, paste it in your browser\'s address bar and you will see that the comment is now the first one below the video and it says \\\"Highlighted comment\\\".\"}', '2022-09-18 05:10:32', '2022-09-18 05:10:32'),
(254, 89, 18, '{\"title\":\"Qu\\u00e9 es \'Instagram Saves\' y qu\\u00e9 hace?\",\"description\":\"Instagram Saves es cuando un usuario guarda una publicaci\\u00f3n en su historial en Instagram (presionando el bot\\u00f3n Guardar cerca del bot\\u00f3n Me gusta). Una gran cantidad de guardados para una publicaci\\u00f3n aumentan su impresi\\u00f3n.\"}', '2022-09-18 05:11:25', '2022-09-18 05:11:25'),
(255, 90, 18, '{\"title\":\"C\\u00f3mo me beneficio del token ICO?\",\"description\":\"This is the third item\'s accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the accordion-body though the transition does limit overflow.\"}', '2022-09-18 05:12:20', '2022-09-18 05:12:20'),
(256, 91, 18, '{\"title\":\"El enlace debe agregarse antes de que el usuario se active o despu\\u00e9s?\",\"description\":\"Despu\\u00e9s de que salga en vivo, o solo 5 segundos antes de que salga!\"}', '2022-09-18 05:13:12', '2022-09-18 05:13:12'),
(257, 92, 18, '{\"title\":\"Aprenda sobre la moneda UI8 y gane un pase de acceso completo\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quas, asperiores sed itaque officiis quae est nulla dolores voluptatem accusantium quisquam tempore quasi, nihil totam perspiciatis! Dicta nesciunt suscipit maxime. Alias pariatur eum fuga corporis aperiam sit.\"}', '2022-09-18 05:13:55', '2022-09-18 05:13:55'),
(258, 93, 18, '{\"title\":\"Aprenda sobre la moneda UI8 y gane un pase de acceso completo\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quas, asperiores sed itaque officiis quae est nulla dolores voluptatem accusantium quisquam tempore quasi, nihil totam perspiciatis! Dicta nesciunt suscipit maxime. Alias pariatur eum fuga corporis aperiam sit.\"}', '2022-09-18 05:14:42', '2022-09-18 05:14:42'),
(259, 94, 18, '{\"title\":\"Learn about UI8 coin and earn an All-Access Pass\",\"description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quas, asperiores sed itaque officiis quae est nulla dolores voluptatem accusantium quisquam tempore quasi, nihil totam perspiciatis! Dicta nesciunt suscipit maxime. Alias pariatur eum fuga corporis aperiam sit.\"}', '2022-09-18 05:15:01', '2022-09-18 05:15:01'),
(260, 97, 18, '{\"name\":\"facebook\"}', '2022-09-18 05:15:21', '2022-09-18 05:15:21'),
(261, 98, 18, '{\"name\":\"gorjeo\"}', '2022-09-18 05:15:37', '2022-09-18 05:15:37'),
(262, 99, 18, '{\"name\":\"linkein\"}', '2022-09-18 05:15:45', '2022-09-18 05:15:45'),
(263, 95, 18, '{\"title\":\"T\\u00e9rminos y condiciones\",\"description\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like\"}', '2022-09-18 05:16:14', '2022-09-18 05:16:14'),
(264, 96, 18, '{\"title\":\"Pol\\u00edtica de privacidad\",\"description\":\"Es un hecho establecido desde hace mucho tiempo que un lector se distraer\\u00e1 con el contenido legible de una p\\u00e1gina cuando mire su dise\\u00f1o. El punto de usar Lorem Ipsum es que tiene una distribuci\\u00f3n de letras m\\u00e1s o menos normal, en lugar de usar \'Contenido aqu\\u00ed, contenido aqu\\u00ed\', lo que hace que parezca un ingl\\u00e9s legible. Muchos paquetes de autoedici\\u00f3n y editores de p\\u00e1ginas web ahora usan Lorem Ipsum como su modelo de texto predeterminado, y una b\\u00fasqueda de \'lorem ipsum\' descubrir\\u00e1 muchos sitios web que a\\u00fan est\\u00e1n en su infancia. Varias versiones han evolucionado a lo largo de los a\\u00f1os, a veces por accidente, a veces a prop\\u00f3sito (humor inyectado y cosas por el estilo). Es un hecho establecido desde hace mucho tiempo que un lector se distraer\\u00e1 con el contenido legible de una p\\u00e1gina cuando mire su dise\\u00f1o.\"}', '2022-09-18 05:16:44', '2022-09-18 05:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `content_media`
--

CREATE TABLE `content_media` (
  `id` int(11) UNSIGNED NOT NULL,
  `content_id` int(11) UNSIGNED DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_media`
--

INSERT INTO `content_media` (`id`, `content_id`, `description`, `created_at`, `updated_at`) VALUES
(60, 83, '{\"image\":\"630f5c8a46f771661951114.jpg\"}', '2022-08-31 07:05:14', '2022-08-31 07:05:14'),
(61, 84, '{\"image\":\"630f5cb10eb391661951153.jpg\"}', '2022-08-31 07:05:53', '2022-08-31 07:05:53'),
(62, 85, '{\"image\":\"630f5ccc0e6411661951180.jpg\"}', '2022-08-31 07:06:20', '2022-08-31 07:06:20'),
(63, 92, '{\"image\":\"630f689d875941661954205.jpg\"}', '2022-08-31 07:56:45', '2022-08-31 07:56:45'),
(64, 93, '{\"image\":\"630f68c0ac95a1661954240.jpg\"}', '2022-08-31 07:57:20', '2022-08-31 07:57:20'),
(65, 94, '{\"image\":\"630f68e06248f1661954272.jpg\"}', '2022-08-31 07:57:52', '2022-08-31 07:57:52'),
(66, 97, '{\"link\":\"https:\\/\\/www.facebook.com\\/\",\"icon\":\"fab fa-facebook\"}', '2022-09-01 00:39:36', '2022-09-01 00:39:36'),
(67, 98, '{\"link\":\"https:\\/\\/twitter.com\\/\",\"icon\":\"fab fa-twitter\"}', '2022-09-01 00:40:39', '2022-09-01 00:40:39'),
(68, 99, '{\"link\":\"https:\\/\\/www.linkedin.com\\/\",\"icon\":\"fab fa-linkedin\"}', '2022-09-01 00:41:48', '2022-09-01 00:41:48'),
(69, 100, '{\"image\":\"637b52f5dc2721669026549.jpg\",\"button_link\":\"https:\\/\\/betco365.vercel.app\\/\"}', '2022-09-15 07:01:01', '2022-11-21 09:29:10'),
(70, 101, '{\"image\":\"637b531a0dc5c1669026586.jpg\",\"button_link\":\"https:\\/\\/betco365.vercel.app\\/\"}', '2022-09-15 07:02:32', '2022-11-21 09:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `template_key` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'support@exampl.com',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_keys` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_status` tinyint(1) NOT NULL DEFAULT 0,
  `sms_status` tinyint(1) NOT NULL DEFAULT 0,
  `lang_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `language_id`, `template_key`, `email_from`, `name`, `subject`, `template`, `sms_body`, `short_keys`, `mail_status`, `sms_status`, `lang_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'PROFILE_UPDATE', 'support@mail.com', 'Profile has been updated', 'Profile has been updated', 'Your first name [[firstname]]\r\n\r\nlast name [[lastname]]\r\n\r\nemail [[email]]\r\n\r\nphone number [[phone]]\r\n', 'Your first name [[firstname]]\r\n\r\nlast name [[lastname]]\r\n\r\nemail [[email]]\r\n\r\nphone number [[phone]]\r\n', '{\"trx\":\"Transaction Number\",\"amount\":\"Request Amount By user\",\"charge\":\"Gateway Charge\",\"currency\":\"Site Currency\",\"rate\":\"Conversion Rate\",\"method_name\":\"Deposit Method Name\",\"method_currency\":\"Deposit Method Currency\",\"method_amount\":\"Deposit Method Amount After Conversion\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(2, 1, 'ADMIN_SUPPORT_REPLY', 'support@mail.com', 'Support Ticket Reply ', 'Support Ticket Reply', '<p>Ticket ID [[ticket_id]]\r\n</p><p><span><br /></span></p><p><span>Subject [[ticket_subject]]\r\n</span></p><p><span>-----Replied------</span></p><p><span>\r\n[[reply]]</span><br /></p>', 'Ticket ID [[ticket_id]]\r\n\r\n\r\n\r\nSubject [[ticket_subject]]\r\n\r\n-----Replied------\r\n\r\n[[reply]]', '{\"ticket_id\":\"Support Ticket ID\",\"ticket_subject\":\"Subject Of Support Ticket\",\"reply\":\"Reply from Staff\\/Admin\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(3, 1, 'PASSWORD_CHANGED', 'support@mail.com', 'PASSWORD CHANGED ', 'Your password changed ', 'Your password changed \r\n\r\nNew password [[password]]\r\n\r\n', 'Your password changed\r\n\r\nNew password [[password]]\r\n\r\n\r\nNews [[test]]', '{\"password\":\"password\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(4, 1, 'ADD_BALANCE', 'support@mail.com', 'Balance Add by Admin', 'Your Account has been credited', '[[amount]] [[currency]] credited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '[[amount]] [[currency]] credited in your account. \r\n\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 0, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(6, 1, 'DEDUCTED_BALANCE', 'support@mail.com', 'Balance deducted by Admin', 'Your Account has been debited', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(9, 1, 'PAYMENT_COMPLETE', 'support@mail.com', 'Payment Completed', 'Your Payment Has Been Completed', '[[amount]] [[currency]] Payment Has Been successful via [[gateway_name]]\r\n\r\nCharge[[charge]] [[currency]]\r\n\r\nTranaction [[transaction]]\r\n\r\nYour Main Balance [[remaining_balance]] [[currency]]\r\n\r\n', '[[amount]] [[currency]] Payment Has Been successful via [[gateway_name]]\n\nCharge[[charge]] [[currency]]\n\nTranaction [[transaction]]\n\nYour Main Balance [[remaining_balance]] [[currency]]\n\n', '{\"gateway_name\":\"gateway name\",\"amount\":\"amount\",\"charge\":\"charge\", \"currency\":\"currency\",\"transaction\":\"transaction\",\"remaining_balance\":\"remaining balance\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(11, 1, 'PASSWORD_RESET', 'support@mail.com', 'Reset Password Notification', 'Reset Password Notification', 'You are receiving this email because we received a password reset request for your account.[[message]]\r\n\r\n\r\nThis password reset link will expire in 60 minutes.\r\n\r\nIf you did not request a password reset, no further action is required.', 'You are receiving this email because we received a password reset request for your account. [[message]]', '{\"message\":\"message\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(12, 1, 'VERIFICATION_CODE', 'support@mail.com', 'Verification Code', 'Verify Your Email ', 'Your Email verification Code  [[code]]', 'Your SMS verification Code  [[code]]', '{\"code\":\"code\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(21, 1, 'TWO_STEP_ENABLED', 'support@mail.com', 'TWO STEP ENABLED', 'TWO STEP ENABLED', 'Your verification code is: [[code]]', 'Your verification code is: [[code]]', '{\"action\":\"Enabled Or Disable\",\"ip\":\"Device Ip\",\"browser\":\"browser and Operating System \",\"time\":\"Time\",\"code\":\"code\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(22, 1, 'TWO_STEP_DISABLED', 'support@mail.com', 'TWO STEP DISABLED', 'TWO STEP DISABLED', 'Google two factor verification is disabled', 'Google two factor verification is disabled', '{\"action\":\"Enabled Or Disable\",\"ip\":\"Device Ip\",\"browser\":\"browser and Operating System \",\"time\":\"Time\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(24, 1, 'PAYOUT_REQUEST', 'support@mail.com', 'Withdraw request has been sent', 'Withdraw request has been sent', '[[amount]] [[currency]] withdraw requested by [[method_name]]\r\n\r\n\r\nCharge [[charge]] [[currency]]\r\n\r\nTransaction [[trx]]\r\n', '[[amount]] [[currency]] withdraw requested by [[method_name]]\r\n\r\n\r\nCharge [[charge]] [[currency]]\r\n\r\nTransaction [[trx]]\r\n', '{\"method_name\":\"method name\",\"amount\":\"amount\",\"charge\":\"charge\",\"currency\":\"currency\",\"trx\":\"transaction\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(27, 1, 'PAYOUT_REJECTED', 'support@mail.com', 'Withdraw request has been rejected', 'Withdraw request has been rejected', '[[amount]] [[currency]] withdraw has been rejeced\n\nPayout Method [[method]]\nCharge [[charge]] [[currency]]\nTransaction [[transaction]]\n\n\nAdmin feedback [[feedback]]\n\n', '[[amount]] [[currency]] withdraw has been rejeced\r\n\r\nPayout Method [[method]]\r\nCharge [[charge]] [[currency]]\r\nTransaction [[transaction]]\r\n\r\n\r\nAdmin feedback [[feedback]]\r\n\r\n', '{\"method\":\"Payout method\",\"amount\":\"amount\",\"charge\":\"charge\",\"currency\":\"currency\",\"transaction\":\"transaction\",\"feedback\":\"Admin feedback\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(28, 1, 'PAYOUT_APPROVE ', 'support@mail.com', 'Withdraw request has been approved', 'Withdraw request has been approved', '[[amount]] [[currency]] withdraw has been approved\r\n\r\nPayout Method [[method]]\r\nCharge [[charge]] [[currency]]\r\nTransaction [[transaction]]\r\n\r\n\r\nAdmin feedback [[feedback]]\r\n\r\n', '[[amount]] [[currency]] withdraw has been approved\n\nPayout Method [[method]]\nCharge [[charge]] [[currency]]\nTransaction [[transaction]]\n\n\nAdmin feedback [[feedback]]\n\n', '{\"method\":\"Payout method\",\"amount\":\"amount\",\"charge\":\"charge\",\"currency\":\"currency\",\"transaction\":\"transaction\",\"feedback\":\"Admin feedback\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(40, 1, 'KYC_APPROVED', 'support@mail.com', 'KYC has been approved', 'KYC has been approved', '[[kyc_type]] has been approved\r\n\r\n', '[[kyc_type]] has been approved\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(41, 1, 'KYC_REJECTED', 'support@mail.com', 'KYC has been rejected', 'KYC has been rejected', '[[kyc_type]] has been rejected\r\n\r\n', '[[kyc_type]] has been rejected\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(42, 1, 'NEW_REGISTER', 'support@mail.com', 'Register Completed', 'Profile has been completed', 'Hey [[name]],\r\n\r\n[[site_name]] like to thank you for signing up.\r\n', 'Hey [[name]],\r\n\r\n[[site_name]] like to thank you for signing up.\r\n', '{\"name\":\"name\",\"site_name\":\"site name\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(43, 1, 'USER_REFUND', 'support@mail.com', 'Refund Amount', 'Refund Amount', 'Your Refund Amount [[amount]]', 'Your Refund Amount [[amount]]\r\n', '{\"amount\":\"Amount\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(44, 1, 'REFERRAL_BONUS', 'support@mail.com', 'REFERRAL BONUS', 'REFERRAL BONUS', 'You got [[amount]] [[currency]]  Referral bonus From  [[bonus_from]] \r\n', 'You got [[amount]] [[currency]]  Referral bonus From  [[bonus_from]] \r\n', '{\"bonus_from\":\"bonus from User\",\"amount\":\"amount\",\"currency\":\"currency\",\"level\":\"level\",\"transaction_id\":\"transaction id\",\"final_balance\":\"final balance\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25'),
(45, 1, 'BET_WIN', 'support@mail.com', 'BET WIN', 'BET WIN', 'You win [[amount]] [[currency]]  on [[transaction_id]] \r\n\r\nMain Balance [[final_balance]] [[currency]]\r\n', 'You win [[amount]] [[currency]]  on [[transaction_id]] \r\n\r\nMain Balance [[final_balance]] [[currency]]\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\",\"transaction_id\":\"transaction id\",\"final_balance\":\"final balance\"}', 1, 1, 'en', '2021-12-17 10:00:26', '2022-09-01 01:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(11) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `gateway_id` int(11) UNSIGNED DEFAULT NULL,
  `gateway_currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `charge` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `rate` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `final_amount` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `btc_amount` decimal(18,8) DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `try` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=> Complete, 2=> Pending, 3 => Cancel',
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `user_id`, `gateway_id`, `gateway_currency`, `amount`, `charge`, `rate`, `final_amount`, `btc_amount`, `btc_wallet`, `transaction`, `try`, `status`, `detail`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 1, 23, 'BTC', '500.00000000', '0.50000000', '0.00000000', '0.00000000', '0.00000000', '', 'PZV95FB33QJU', 0, 0, NULL, NULL, '2022-11-21 16:43:10', '2022-11-21 16:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `game_categories`
--

CREATE TABLE `game_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=>deActive, 1=>Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_categories`
--

INSERT INTO `game_categories` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cricket', '<i class=\"far fa-cricket\" aria-hidden=\"true\"></i>', 1, '2022-11-21 09:16:52', '2022-11-21 09:16:52'),
(2, 'Football', '<i class=\"far fa-futbol\" aria-hidden=\"true\"></i>', 1, '2022-11-21 09:17:06', '2022-11-21 09:17:06'),
(3, 'Basketball', '<i class=\"far fa-basketball-ball\" aria-hidden=\"true\"></i>', 1, '2022-11-21 09:17:19', '2022-11-21 09:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `game_matches`
--

CREATE TABLE `game_matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `tournament_id` bigint(20) UNSIGNED NOT NULL,
  `team1_id` bigint(20) UNSIGNED NOT NULL,
  `team2_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=> deactive 1=>active, 2=>closed',
  `is_unlock` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=>unlock 1=>lock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_matches`
--

INSERT INTO `game_matches` (`id`, `category_id`, `tournament_id`, `team1_id`, `team2_id`, `name`, `start_date`, `end_date`, `status`, `is_unlock`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 1, '', '2022-11-21 00:00:00', '2022-12-21 00:00:00', 1, 0, '2022-11-21 09:36:20', '2022-11-21 09:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `game_options`
--

CREATE TABLE `game_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invest_amount` decimal(8,2) NOT NULL,
  `return_amount` decimal(8,2) NOT NULL,
  `minimum_amount` decimal(8,2) NOT NULL,
  `ratio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT 'pending=>1 ,win=>2, deActive=>0, refunded=>3, Lost=> -2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_options`
--

INSERT INTO `game_options` (`id`, `match_id`, `question_id`, `creator_id`, `option_name`, `invest_amount`, `return_amount`, `minimum_amount`, `ratio`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Argentina', '0.00', '0.00', '0.00', '4', 1, '2022-11-21 09:42:26', '2022-11-21 09:42:26'),
(2, 1, 1, 1, 'Brasil', '0.00', '0.00', '0.00', '3', 1, '2022-11-21 09:42:26', '2022-11-21 09:42:26'),
(3, 1, 1, 1, 'England', '0.00', '0.00', '0.00', '6', 1, '2022-11-21 09:42:26', '2022-11-21 09:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `game_questions`
--

CREATE TABLE `game_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `result_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=> pending, 1=> active, 2=> closed',
  `is_unlock` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=>unlock 1=>lock',
  `result` tinyint(4) NOT NULL DEFAULT 0,
  `limit` int(11) NOT NULL DEFAULT 100,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_questions`
--

INSERT INTO `game_questions` (`id`, `match_id`, `result_id`, `name`, `status`, `is_unlock`, `result`, `limit`, `creator_id`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Winner?', 1, 0, 0, 100, 1, '2022-11-18 17:41:00', '2022-11-21 09:42:26', '2022-11-21 09:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `game_teams`
--

CREATE TABLE `game_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=>deActive, 1=>Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_teams`
--

INSERT INTO `game_teams` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'QATAR WINNER', '637b53e4569411669026788.png', 1, '2022-11-21 09:33:08', '2022-11-21 09:38:36', 2),
(2, 'FIFA WORLD CUP', '637b54303ba541669026864.png', 1, '2022-11-21 09:34:24', '2022-11-21 09:38:24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `game_tournaments`
--

CREATE TABLE `game_tournaments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=>deActive, 1=>Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `game_tournaments`
--

INSERT INTO `game_tournaments` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'FIFA World Cup', 1, '2022-11-21 09:31:30', '2022-11-21 09:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `convention_rate` decimal(18,8) NOT NULL DEFAULT 1.00000000,
  `currencies` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_amount` decimal(18,8) NOT NULL,
  `max_amount` decimal(18,8) NOT NULL,
  `percentage_charge` decimal(8,4) NOT NULL DEFAULT 0.0000,
  `fixed_charge` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: inactive, 1: active',
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_by` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `name`, `code`, `currency`, `symbol`, `parameters`, `extra_parameters`, `convention_rate`, `currencies`, `min_amount`, `max_amount`, `percentage_charge`, `fixed_charge`, `status`, `note`, `image`, `sort_by`, `created_at`, `updated_at`) VALUES
(1, 'Paypal', 'paypal', 'USD', 'USD', '{\"cleint_id\":\"AUrvcotEVWZkksiGir6Ih4PyalQcguQgGN-7We5O1wBny3tg1w6srbQzi6GQEO8lP3yJVha2C6lyivK9\", \"secret\":\"EPx-YEgvjKDRFFu3FAsMue_iUMbMH6jHu408rHdn4iGrUCM8M12t7mX8hghUBAWwvWErBOa4Uppfp0Eh\"}', NULL, '0.01200000', '{\"0\":{\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"GBP\":\"GBP\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"USD\":\"USD\"}}', '1.00000000', '10000.00000000', '1.0000', '0.50000000', 1, '', '5f637b5622d23.jpg', 14, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(2, 'Stripe ', 'stripe', 'USD', 'USD', '{\"secret_key\":\"sk_test_aat3tzBCCXXBkS4sxY3M8A1B\",\"publishable_key\":\"pk_test_AU3G7doZ1sbdpJLj0NaozPBu\"}', NULL, '1.00000000', '{\"0\":{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"SGD\":\"SGD\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 0, '', '5f645d432b9c0.jpg', 23, '2020-09-10 09:05:02', '2022-11-21 16:53:47'),
(3, 'Skrill', 'skrill', 'USD', 'USD', '{\"pay_to_email\":\"mig33@gmail.com\",\"secret_key\":\"SECRETKEY\"}', NULL, '1.00000000', '{\"0\":{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JOD\":\"JOD\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"KWD\":\"KWD\",\"MAD\":\"MAD\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"OMR\":\"OMR\",\"PLN\":\"PLN\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"SAR\":\"SAR\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TND\":\"TND\",\"TRY\":\"TRY\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\",\"COP\":\"COP\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 0, '', '5f637c7fcb9ef.jpg', 22, '2020-09-10 09:05:02', '2022-11-21 16:53:51'),
(4, 'Perfect Money', 'perfectmoney', 'USD', 'USD', '{\"passphrase\":\"112233445566\",\"payee_account\":\"U26203997\"}', NULL, '1.00000000', '{\"0\":{\"USD\":\"USD\",\"EUR\":\"EUR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f64d522d8bea.jpg', 18, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(5, 'PayTM', 'paytm', 'INR', 'INR', '{\"MID\":\"uAOkSk48844590235401\",\"merchant_key\":\"pcB_oEk_R@kbm1c1\",\"WEBSITE\":\"DIYtestingweb\",\"INDUSTRY_TYPE_ID\":\"Retail\",\"CHANNEL_ID\":\"WEB\",\"transaction_url\":\"https:\\/\\/securegw.paytm.in\\/order\\/process\",\"transaction_status_url\":\"https:\\/\\/securegw.paytm.in\\/order\\/status\"}', NULL, '1.00000000', '{\"0\":{\"AUD\":\"AUD\",\"ARS\":\"ARS\",\"BDT\":\"BDT\",\"BRL\":\"BRL\",\"BGN\":\"BGN\",\"CAD\":\"CAD\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"HRK\":\"HRK\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EGP\":\"EGP\",\"EUR\":\"EUR\",\"GEL\":\"GEL\",\"GHS\":\"GHS\",\"HKD\":\"HKD\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"JPY\":\"JPY\",\"KES\":\"KES\",\"MYR\":\"MYR\",\"MXN\":\"MXN\",\"MAD\":\"MAD\",\"NPR\":\"NPR\",\"NZD\":\"NZD\",\"NGN\":\"NGN\",\"NOK\":\"NOK\",\"PKR\":\"PKR\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SGD\":\"SGD\",\"ZAR\":\"ZAR\",\"KRW\":\"KRW\",\"LKR\":\"LKR\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"THB\":\"THB\",\"TRY\":\"TRY\",\"UGX\":\"UGX\",\"UAH\":\"UAH\",\"AED\":\"AED\",\"GBP\":\"GBP\",\"USD\":\"USD\",\"VND\":\"VND\",\"XOF\":\"XOF\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637cbfb4d4c.jpg', 16, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(6, 'Payeer', 'payeer', 'RUB', 'USD', '{\"merchant_id\":\"1560632740\",\"secret_key\":\"817b347f8c9315713fe68402a186c569673c624\"}', '{\"status\":\"ipn\"}', '1.00000000', '{\"0\":{\"USD\":\"USD\",\"EUR\":\"EUR\",\"RUB\":\"RUB\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f64d52d09e13.jpg', 13, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(7, 'PayStack', 'paystack', 'NGN', 'NGN', '{\"public_key\":\"pk_test_f922aa1a87101e3fd029e13024006862fdc0b8c7\",\"secret_key\":\"sk_test_b8d571f97c1b41d409ba339eb20b005377751dff\"}', '{\"callback\":\"ipn\",\"webhook\":\"ipn\"}\r\n', '1.00000000', '{\"0\":{\"USD\":\"USD\",\"NGN\":\"NGN\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d069177e.jpg', 15, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(8, 'VoguePay', 'voguepay', 'USD', 'USD', '{\"merchant_id\":\"9753-0112994\"}', NULL, '1.00000000', '{\"0\":{\"NGN\":\"NGN\",\"USD\":\"USD\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"ZAR\":\"ZAR\",\"JPY\":\"JPY\",\"INR\":\"INR\",\"AUD\":\"AUD\",\"CAD\":\"CAD\",\"NZD\":\"NZD\",\"NOK\":\"NOK\",\"PLN\":\"PLN\"}}\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d53da3e7.jpg', 21, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(9, 'Flutterwave', 'flutterwave', 'USD', 'USD', '{\"public_key\":\"FLWPUBK_TEST-5d9bb05bba2c13aa6c7a1ec7d7526ba2-X\",\"secret_key\":\"FLWSECK_TEST-2ac7b05b6b9fa8a423eb58241fd7bbb6-X\",\"encryption_key\":\"FLWSECK_TEST32e13665a95a\"}', NULL, '0.01200000', '{\"0\":{\"KES\":\"KES\",\"GHS\":\"GHS\",\"NGN\":\"NGN\",\"USD\":\"USD\",\"GBP\":\"GBP\",\"EUR\":\"EUR\",\"UGX\":\"UGX\",\"TZS\":\"TZS\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d6a0b22d.jpg', 8, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(10, 'RazorPay', 'razorpay', 'INR', 'INR', '{\"key_id\":\"rzp_test_kiOtejPbRZU90E\",\"key_secret\":\"osRDebzEqbsE1kbyQJ4y0re7\"}', NULL, '1.00000000', '{\"0\": {\"INR\": \"INR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637d80b68e0.jpg', 19, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(11, 'instamojo', 'instamojo', 'INR', 'INR', '{\"api_key\":\"test_2241633c3bc44a3de84a3b33969\",\"auth_token\":\"test_279f083f7bebefd35217feef22d\",\"salt\":\"19d38908eeff4f58b2ddda2c6d86ca25\"}', NULL, '73.51000000', '{\"0\":{\"INR\":\"INR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637da3c44d2.jpg', 9, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(12, 'Mollie', 'mollie', 'USD', 'USD', '{\"api_key\":\"test_cucfwKTWfft9s337qsVfn5CC4vNkrn\"}', NULL, '0.01200000', '{\"0\":{\"AED\":\"AED\",\"AUD\":\"AUD\",\"BGN\":\"BGN\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"HRK\":\"HRK\",\"HUF\":\"HUF\",\"ILS\":\"ILS\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\",\"USD\":\"USD\",\"ZAR\":\"ZAR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637db537958.jpg', 11, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(13, '2checkout', 'twocheckout', 'USD', 'USD', '{\"merchant_code\":\"250507228545\",\"secret_key\":\"=+0CNzfvTItqp*ygwiQE\"}', '{\"approved_url\":\"ipn\"}', '1.00000000', '{\"0\":{\"AFN\":\"AFN\",\"ALL\":\"ALL\",\"DZD\":\"DZD\",\"ARS\":\"ARS\",\"AUD\":\"AUD\",\"AZN\":\"AZN\",\"BSD\":\"BSD\",\"BDT\":\"BDT\",\"BBD\":\"BBD\",\"BZD\":\"BZD\",\"BMD\":\"BMD\",\"BOB\":\"BOB\",\"BWP\":\"BWP\",\"BRL\":\"BRL\",\"GBP\":\"GBP\",\"BND\":\"BND\",\"BGN\":\"BGN\",\"CAD\":\"CAD\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"HRK\":\"HRK\",\"CZK\":\"CZK\",\"DKK\":\"DKK\",\"DOP\":\"DOP\",\"XCD\":\"XCD\",\"EGP\":\"EGP\",\"EUR\":\"EUR\",\"FJD\":\"FJD\",\"GTQ\":\"GTQ\",\"HKD\":\"HKD\",\"HNL\":\"HNL\",\"HUF\":\"HUF\",\"INR\":\"INR\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"JMD\":\"JMD\",\"JPY\":\"JPY\",\"KZT\":\"KZT\",\"KES\":\"KES\",\"LAK\":\"LAK\",\"MMK\":\"MMK\",\"LBP\":\"LBP\",\"LRD\":\"LRD\",\"MOP\":\"MOP\",\"MYR\":\"MYR\",\"MVR\":\"MVR\",\"MRO\":\"MRO\",\"MUR\":\"MUR\",\"MXN\":\"MXN\",\"MAD\":\"MAD\",\"NPR\":\"NPR\",\"TWD\":\"TWD\",\"NZD\":\"NZD\",\"NIO\":\"NIO\",\"NOK\":\"NOK\",\"PKR\":\"PKR\",\"PGK\":\"PGK\",\"PEN\":\"PEN\",\"PHP\":\"PHP\",\"PLN\":\"PLN\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RUB\":\"RUB\",\"WST\":\"WST\",\"SAR\":\"SAR\",\"SCR\":\"SCR\",\"SGD\":\"SGD\",\"SBD\":\"SBD\",\"ZAR\":\"ZAR\",\"KRW\":\"KRW\",\"LKR\":\"LKR\",\"SEK\":\"SEK\",\"CHF\":\"CHF\",\"SYP\":\"SYP\",\"THB\":\"THB\",\"TOP\":\"TOP\",\"TTD\":\"TTD\",\"TRY\":\"TRY\",\"UAH\":\"UAH\",\"AED\":\"AED\",\"USD\":\"USD\",\"VUV\":\"VUV\",\"VND\":\"VND\",\"XOF\":\"XOF\",\"YER\":\"YER\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 0, '', '5f637e7eae68b.jpg', 24, '2020-09-10 09:05:02', '2022-11-21 16:42:45'),
(14, 'Authorize.Net', 'authorizenet', 'USD', 'USD', '{\"login_id\":\"35s2ZJWTh2\",\"current_transaction_key\":\"3P425sHVwE8t2CzX\"}', NULL, '0.01200000', '{\"0\":{\"AUD\":\"AUD\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"NOK\":\"NOK\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"SEK\":\"SEK\",\"USD\":\"USD\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637de6d9fef.jpg', 3, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(15, 'SecurionPay', 'securionpay', 'USD', 'USD', '{\"public_key\":\"pk_test_VZEUdaL8fYjBVbDOSkPFcgE0\",\"secret_key\":\"sk_test_yd5JJnYpsEoKtlaXDBkAFpse\"}', NULL, '1.00000000', '{\"0\":{\"AFN\":\"AFN\", \"DZD\":\"DZD\", \"ARS\":\"ARS\", \"AUD\":\"AUD\", \"BHD\":\"BHD\", \"BDT\":\"BDT\", \"BYR\":\"BYR\", \"BAM\":\"BAM\", \"BWP\":\"BWP\", \"BRL\":\"BRL\", \"BND\":\"BND\", \"BGN\":\"BGN\", \"CAD\":\"CAD\", \"CLP\":\"CLP\", \"CNY\":\"CNY\", \"COP\":\"COP\", \"KMF\":\"KMF\", \"HRK\":\"HRK\", \"CZK\":\"CZK\", \"DKK\":\"DKK\", \"DJF\":\"DJF\", \"DOP\":\"DOP\", \"EGP\":\"EGP\", \"ETB\":\"ETB\", \"ERN\":\"ERN\", \"EUR\":\"EUR\", \"GEL\":\"GEL\", \"HKD\":\"HKD\", \"HUF\":\"HUF\", \"ISK\":\"ISK\", \"INR\":\"INR\", \"IDR\":\"IDR\", \"IRR\":\"IRR\", \"IQD\":\"IQD\", \"ILS\":\"ILS\", \"JMD\":\"JMD\", \"JPY\":\"JPY\", \"JOD\":\"JOD\", \"KZT\":\"KZT\", \"KES\":\"KES\", \"KWD\":\"KWD\", \"KGS\":\"KGS\", \"LVL\":\"LVL\", \"LBP\":\"LBP\", \"LTL\":\"LTL\", \"MOP\":\"MOP\", \"MKD\":\"MKD\", \"MGA\":\"MGA\", \"MWK\":\"MWK\", \"MYR\":\"MYR\", \"MUR\":\"MUR\", \"MXN\":\"MXN\", \"MDL\":\"MDL\", \"MAD\":\"MAD\", \"MZN\":\"MZN\", \"NAD\":\"NAD\", \"NPR\":\"NPR\", \"ANG\":\"ANG\", \"NZD\":\"NZD\", \"NOK\":\"NOK\", \"OMR\":\"OMR\", \"PKR\":\"PKR\", \"PEN\":\"PEN\", \"PHP\":\"PHP\", \"PLN\":\"PLN\", \"QAR\":\"QAR\", \"RON\":\"RON\", \"RUB\":\"RUB\", \"SAR\":\"SAR\", \"RSD\":\"RSD\", \"SGD\":\"SGD\", \"ZAR\":\"ZAR\", \"KRW\":\"KRW\", \"IKR\":\"IKR\", \"LKR\":\"LKR\", \"SEK\":\"SEK\", \"CHF\":\"CHF\", \"SYP\":\"SYP\", \"TWD\":\"TWD\", \"TZS\":\"TZS\", \"THB\":\"THB\", \"TND\":\"TND\", \"TRY\":\"TRY\", \"UAH\":\"UAH\", \"AED\":\"AED\", \"GBP\":\"GBP\", \"USD\":\"USD\", \"VEB\":\"VEB\", \"VEF\":\"VEF\", \"VND\":\"VND\", \"XOF\":\"XOF\", \"YER\":\"YER\", \"ZMK\":\"ZMK\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f637e002d11b.jpg', 20, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(16, 'PayUmoney', 'payumoney', 'INR', 'INR', '{\"merchant_key\":\"gtKFFx\",\"salt\":\"eCwWELxi\"}', NULL, '0.87000000', '{\"0\":{\"INR\":\"INR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f6390dbaa6ff.jpg', 17, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(17, 'Mercado Pago', 'mercadopago', 'BRL', 'BRL', '{\"access_token\":\"TEST-705032440135962-041006-ad2e021853f22338fe1a4db9f64d1491-421886156\"}', NULL, '0.06300000', '{\"0\":{\"ARS\":\"ARS\",\"BOB\":\"BOB\",\"BRL\":\"BRL\",\"CLF\":\"CLF\",\"CLP\":\"CLP\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"CUC\":\"CUC\",\"CUP\":\"CUP\",\"DOP\":\"DOP\",\"EUR\":\"EUR\",\"GTQ\":\"GTQ\",\"HNL\":\"HNL\",\"MXN\":\"MXN\",\"NIO\":\"NIO\",\"PAB\":\"PAB\",\"PEN\":\"PEN\",\"PYG\":\"PYG\",\"USD\":\"USD\",\"UYU\":\"UYU\",\"VEF\":\"VEF\",\"VES\":\"VES\"}}', '3715.12000000', '371500000.12000000', '0.0000', '0.50000000', 1, '', '5f645d1bc1f24.jpg', 10, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(18, 'Coingate', 'coingate', 'USD', 'USD', '{\"api_key\":\"c71152b8-ab4e-4712-a421-c5c7ea5165a2\",\"secret\":\"a709d081-e693-46e0-8a34-61fd785b20b3\"}', NULL, '1.00000000', '{\"0\":{\"USD\":\"USD\",\"EUR\":\"EUR\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f659e5355859.jpg', 7, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(19, 'Coinbase Commerce', 'coinbasecommerce', 'USD', 'USD', '{\"api_key\":\"c71152b8-ab4e-4712-a421-c5c7ea5165a2\",\"secret\":\"a709d081-e693-46e0-8a34-61fd785b20b3\"}', '{\"webhook\":\"ipn\"}', '1.00000000', '{\"0\":{\"AED\":\"AED\",\"AFN\":\"AFN\",\"ALL\":\"ALL\",\"AMD\":\"AMD\",\"ANG\":\"ANG\",\"AOA\":\"AOA\",\"ARS\":\"ARS\",\"AUD\":\"AUD\",\"AWG\":\"AWG\",\"AZN\":\"AZN\",\"BAM\":\"BAM\",\"BBD\":\"BBD\",\"BDT\":\"BDT\",\"BGN\":\"BGN\",\"BHD\":\"BHD\",\"BIF\":\"BIF\",\"BMD\":\"BMD\",\"BND\":\"BND\",\"BOB\":\"BOB\",\"BRL\":\"BRL\",\"BSD\":\"BSD\",\"BTN\":\"BTN\",\"BWP\":\"BWP\",\"BYN\":\"BYN\",\"BZD\":\"BZD\",\"CAD\":\"CAD\",\"CDF\":\"CDF\",\"CHF\":\"CHF\",\"CLF\":\"CLF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"COP\":\"COP\",\"CRC\":\"CRC\",\"CUC\":\"CUC\",\"CUP\":\"CUP\",\"CVE\":\"CVE\",\"CZK\":\"CZK\",\"DJF\":\"DJF\",\"DKK\":\"DKK\",\"DOP\":\"DOP\",\"DZD\":\"DZD\",\"EGP\":\"EGP\",\"ERN\":\"ERN\",\"ETB\":\"ETB\",\"EUR\":\"EUR\",\"FJD\":\"FJD\",\"FKP\":\"FKP\",\"GBP\":\"GBP\",\"GEL\":\"GEL\",\"GGP\":\"GGP\",\"GHS\":\"GHS\",\"GIP\":\"GIP\",\"GMD\":\"GMD\",\"GNF\":\"GNF\",\"GTQ\":\"GTQ\",\"GYD\":\"GYD\",\"HKD\":\"HKD\",\"HNL\":\"HNL\",\"HRK\":\"HRK\",\"HTG\":\"HTG\",\"HUF\":\"HUF\",\"IDR\":\"IDR\",\"ILS\":\"ILS\",\"IMP\":\"IMP\",\"INR\":\"INR\",\"IQD\":\"IQD\",\"IRR\":\"IRR\",\"ISK\":\"ISK\",\"JEP\":\"JEP\",\"JMD\":\"JMD\",\"JOD\":\"JOD\",\"JPY\":\"JPY\",\"KES\":\"KES\",\"KGS\":\"KGS\",\"KHR\":\"KHR\",\"KMF\":\"KMF\",\"KPW\":\"KPW\",\"KRW\":\"KRW\",\"KWD\":\"KWD\",\"KYD\":\"KYD\",\"KZT\":\"KZT\",\"LAK\":\"LAK\",\"LBP\":\"LBP\",\"LKR\":\"LKR\",\"LRD\":\"LRD\",\"LSL\":\"LSL\",\"LYD\":\"LYD\",\"MAD\":\"MAD\",\"MDL\":\"MDL\",\"MGA\":\"MGA\",\"MKD\":\"MKD\",\"MMK\":\"MMK\",\"MNT\":\"MNT\",\"MOP\":\"MOP\",\"MRO\":\"MRO\",\"MUR\":\"MUR\",\"MVR\":\"MVR\",\"MWK\":\"MWK\",\"MXN\":\"MXN\",\"MYR\":\"MYR\",\"MZN\":\"MZN\",\"NAD\":\"NAD\",\"NGN\":\"NGN\",\"NIO\":\"NIO\",\"NOK\":\"NOK\",\"NPR\":\"NPR\",\"NZD\":\"NZD\",\"OMR\":\"OMR\",\"PAB\":\"PAB\",\"PEN\":\"PEN\",\"PGK\":\"PGK\",\"PHP\":\"PHP\",\"PKR\":\"PKR\",\"PLN\":\"PLN\",\"PYG\":\"PYG\",\"QAR\":\"QAR\",\"RON\":\"RON\",\"RSD\":\"RSD\",\"RUB\":\"RUB\",\"RWF\":\"RWF\",\"SAR\":\"SAR\",\"SBD\":\"SBD\",\"SCR\":\"SCR\",\"SDG\":\"SDG\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"SHP\":\"SHP\",\"SLL\":\"SLL\",\"SOS\":\"SOS\",\"SRD\":\"SRD\",\"SSP\":\"SSP\",\"STD\":\"STD\",\"SVC\":\"SVC\",\"SYP\":\"SYP\",\"SZL\":\"SZL\",\"THB\":\"THB\",\"TJS\":\"TJS\",\"TMT\":\"TMT\",\"TND\":\"TND\",\"TOP\":\"TOP\",\"TRY\":\"TRY\",\"TTD\":\"TTD\",\"TWD\":\"TWD\",\"TZS\":\"TZS\",\"UAH\":\"UAH\",\"UGX\":\"UGX\",\"USD\":\"USD\",\"UYU\":\"UYU\",\"UZS\":\"UZS\",\"VEF\":\"VEF\",\"VND\":\"VND\",\"VUV\":\"VUV\",\"WST\":\"WST\",\"XAF\":\"XAF\",\"XAG\":\"XAG\",\"XAU\":\"XAU\",\"XCD\":\"XCD\",\"XDR\":\"XDR\",\"XOF\":\"XOF\",\"XPD\":\"XPD\",\"XPF\":\"XPF\",\"XPT\":\"XPT\",\"YER\":\"YER\",\"ZAR\":\"ZAR\",\"ZMW\":\"ZMW\",\"ZWL\":\"ZWL\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5f6703145a5ca.jpg', 2, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(20, 'Monnify', 'monnify', 'NGN', 'NGN', '{\"api_key\":\"MK_TEST_LB5KJDYD65\",\"secret_key\":\"WM9B4GSW826XRCNABM3NF92K9957CVMU\", \"contract_code\":\"5566252118\"}', NULL, '4.52000000', '{\"0\":{\"NGN\":\"NGN\"}}', '1.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5fbca5d05057f.jpg', 12, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(21, 'Block.io', 'blockio', 'BTC', 'BTC', '{\"api_key\":\"1d97-a9af-6521-a330\",\"api_pin\":\"654abc654opp\"}', '{\"cron\":\"ipn\"}', '0.00004200', '{\"1\":{\"BTC\":\"BTC\",\"LTC\":\"LTC\",\"DOGE\":\"DOGE\"}}', '10.10004200', '10000.00000000', '0.0000', '0.50000000', 1, '', '5fe038332ad52.jpg', 1, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(22, 'CoinPayments', 'coinpayments', 'BTC', 'BTC', '{\"merchant_id\":\"93a1e014c4ad60a7980b4a7239673cb4\",\"private_key\":\"Cb6dee7af8Eb9E0D4123543E690dA3673294147A5Dc8e7a621B5d484a3803207\",\"public_key\":\"7638eebaf4061b7f7cdfceb14046318bbdabf7e2f64944773d6550bd59f70274\"}', '{\"callback\":\"ipn\"}', '0.00000000', '{\"0\":{\"USD\":\"USD\",\"AUD\":\"AUD\",\"BRL\":\"BRL\",\"CAD\":\"CAD\",\"CHF\":\"CHF\",\"CLP\":\"CLP\",\"CNY\":\"CNY\",\"DKK\":\"DKK\",\"EUR\":\"EUR\",\"GBP\":\"GBP\",\"HKD\":\"HKD\",\"INR\":\"INR\",\"ISK\":\"ISK\",\"JPY\":\"JPY\",\"KRW\":\"KRW\",\"NZD\":\"NZD\",\"PLN\":\"PLN\",\"RUB\":\"RUB\",\"SEK\":\"SEK\",\"SGD\":\"SGD\",\"THB\":\"THB\",\"TWD\":\"TWD\"},\"1\":{\"BTC\":\"Bitcoin\",\"BTC.LN\":\"Bitcoin (Lightning Network)\",\"LTC\":\"Litecoin\",\"CPS\":\"CPS Coin\",\"VLX\":\"Velas\",\"APL\":\"Apollo\",\"AYA\":\"Aryacoin\",\"BAD\":\"Badcoin\",\"BCD\":\"Bitcoin Diamond\",\"BCH\":\"Bitcoin Cash\",\"BCN\":\"Bytecoin\",\"BEAM\":\"BEAM\",\"BITB\":\"Bean Cash\",\"BLK\":\"BlackCoin\",\"BSV\":\"Bitcoin SV\",\"BTAD\":\"Bitcoin Adult\",\"BTG\":\"Bitcoin Gold\",\"BTT\":\"BitTorrent\",\"CLOAK\":\"CloakCoin\",\"CLUB\":\"ClubCoin\",\"CRW\":\"Crown\",\"CRYP\":\"CrypticCoin\",\"CRYT\":\"CryTrExCoin\",\"CURE\":\"CureCoin\",\"DASH\":\"DASH\",\"DCR\":\"Decred\",\"DEV\":\"DeviantCoin\",\"DGB\":\"DigiByte\",\"DOGE\":\"Dogecoin\",\"EBST\":\"eBoost\",\"EOS\":\"EOS\",\"ETC\":\"Ether Classic\",\"ETH\":\"Ethereum\",\"ETN\":\"Electroneum\",\"EUNO\":\"EUNO\",\"EXP\":\"EXP\",\"Expanse\":\"Expanse\",\"FLASH\":\"FLASH\",\"GAME\":\"GameCredits\",\"GLC\":\"Goldcoin\",\"GRS\":\"Groestlcoin\",\"KMD\":\"Komodo\",\"LOKI\":\"LOKI\",\"LSK\":\"LSK\",\"MAID\":\"MaidSafeCoin\",\"MUE\":\"MonetaryUnit\",\"NAV\":\"NAV Coin\",\"NEO\":\"NEO\",\"NMC\":\"Namecoin\",\"NVST\":\"NVO Token\",\"NXT\":\"NXT\",\"OMNI\":\"OMNI\",\"PINK\":\"PinkCoin\",\"PIVX\":\"PIVX\",\"POT\":\"PotCoin\",\"PPC\":\"Peercoin\",\"PROC\":\"ProCurrency\",\"PURA\":\"PURA\",\"QTUM\":\"QTUM\",\"RES\":\"Resistance\",\"RVN\":\"Ravencoin\",\"RVR\":\"RevolutionVR\",\"SBD\":\"Steem Dollars\",\"SMART\":\"SmartCash\",\"SOXAX\":\"SOXAX\",\"STEEM\":\"STEEM\",\"STRAT\":\"STRAT\",\"SYS\":\"Syscoin\",\"TPAY\":\"TokenPay\",\"TRIGGERS\":\"Triggers\",\"TRX\":\" TRON\",\"UBQ\":\"Ubiq\",\"UNIT\":\"UniversalCurrency\",\"USDT\":\"Tether USD (Omni Layer)\",\"VTC\":\"Vertcoin\",\"WAVES\":\"Waves\",\"XCP\":\"Counterparty\",\"XEM\":\"NEM\",\"XMR\":\"Monero\",\"XSN\":\"Stakenet\",\"XSR\":\"SucreCoin\",\"XVG\":\"VERGE\",\"XZC\":\"ZCoin\",\"ZEC\":\"ZCash\",\"ZEN\":\"Horizen\"}}', '10.00000000', '99999.00000000', '1.0000', '0.50000000', 1, '', '5ffd7d962985e1610448278.jpg', 6, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(23, 'Blockchain', 'blockchain', 'BTC', 'BTC', '{\"api_key\":\"8df2e5a0-3798-4b74-871d-973615b57e7b\",\"xpub_code\":\"xpub6CXLqfWXj1xgXe79nEQb3pv2E7TGD13pZgHceZKrQAxqXdrC2FaKuQhm5CYVGyNcHLhSdWau4eQvq3EDCyayvbKJvXa11MX9i2cHPugpt3G\"}', NULL, '0.00000000', '{\"1\":{\"BTC\":\"BTC\"}}', '100.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', '5fe439f477bb7.jpg', 4, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(25, 'cashmaal', 'cashmaal', 'PKR', 'PKR', '{\"web_id\": \"3748\",\"ipn_key\": \"546254628759524554647987\"}\r\n', '{\"ipn_url\":\"ipn\"}', '0.85000000', '{\"0\":{\"PKR\":\"PKR\",\"USD\":\"USD\"}}', '100.00000000', '10000.00000000', '0.0000', '0.50000000', 1, '', 'cashmaal.jpg', 5, '2020-09-10 09:05:02', '2022-09-10 06:44:39'),
(1000, 'Bank Transfer', 'bank-transfer', 'BDT', 'BDT', '{\"AccountNumber\":{\"field_name\":\"AccountNumber\",\"field_level\":\"Account Number\",\"type\":\"text\",\"validation\":\"required\"},\"BeneficiaryName\":{\"field_name\":\"BeneficiaryName\",\"field_level\":\"Beneficiary Name\",\"type\":\"text\",\"validation\":\"required\"},\"NID\":{\"field_name\":\"NID\",\"field_level\":\"NID\",\"type\":\"file\",\"validation\":\"nullable\"},\"Address\":{\"field_name\":\"Address\",\"field_level\":\"Address\",\"type\":\"textarea\",\"validation\":\"nullable\"}}', NULL, '84.00000000', NULL, '10.00000000', '10000.00000000', '0.0000', '5.00000000', 0, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '61d16f5313ee41641115475.jpg', 1, '2022-01-02 03:18:56', '2022-09-10 01:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `identify_forms`
--

CREATE TABLE `identify_forms` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `services_form` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `identify_forms`
--

INSERT INTO `identify_forms` (`id`, `name`, `slug`, `services_form`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Driving License', 'driving-license', '{\"FrontPage\":{\"field_name\":\"FrontPage\",\"field_level\":\"Front Page\",\"type\":\"file\",\"field_length\":\"2500\",\"length_type\":\"max\",\"validation\":\"required\"},\"RearPage\":{\"field_name\":\"RearPage\",\"field_level\":\"Rear Page\",\"type\":\"file\",\"field_length\":\"2500\",\"length_type\":\"max\",\"validation\":\"required\"},\"PassportNumber\":{\"field_name\":\"PassportNumber\",\"field_level\":\"Passport Number\",\"type\":\"text\",\"field_length\":\"20\",\"length_type\":\"max\",\"validation\":\"required\"},\"Address\":{\"field_name\":\"Address\",\"field_level\":\"Address\",\"type\":\"textarea\",\"field_length\":\"300\",\"length_type\":\"max\",\"validation\":\"required\"}}', 1, '2021-09-30 22:07:40', '2022-05-17 06:29:36'),
(2, 'Passport', 'passport', '{\"PassportNumber\":{\"field_name\":\"PassportNumber\",\"field_level\":\"Passport Number\",\"type\":\"text\",\"field_length\":\"25\",\"length_type\":\"max\",\"validation\":\"required\"},\"PassportImage\":{\"field_name\":\"PassportImage\",\"field_level\":\"Passport Image\",\"type\":\"file\",\"field_length\":\"1040\",\"length_type\":\"max\",\"validation\":\"required\"}}', 1, '2021-09-30 22:16:23', '2022-05-17 06:29:40'),
(4, 'National ID', 'national-id', '{\"FrontPage\":{\"field_name\":\"FrontPage\",\"field_level\":\"Front Page\",\"type\":\"file\",\"field_length\":\"500\",\"length_type\":\"max\",\"validation\":\"required\"},\"RearPage\":{\"field_name\":\"RearPage\",\"field_level\":\"Rear Page\",\"type\":\"file\",\"field_length\":\"500\",\"length_type\":\"max\",\"validation\":\"required\"},\"NidNumber\":{\"field_name\":\"NidNumber\",\"field_level\":\"Nid Number\",\"type\":\"text\",\"field_length\":\"10\",\"length_type\":\"digits\",\"validation\":\"required\"},\"Address\":{\"field_name\":\"Address\",\"field_level\":\"Address\",\"type\":\"textarea\",\"field_length\":\"300\",\"length_type\":\"max\",\"validation\":\"required\"}}', 1, '2021-10-01 07:58:40', '2022-05-17 06:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kycs`
--

CREATE TABLE `kycs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `kyc_type` varchar(20) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=> Approved, 2 => Reject',
  `feedback` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `rtl` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `short_name`, `flag`, `is_active`, `rtl`, `created_at`, `updated_at`) VALUES
(1, 'English', 'US', NULL, 1, 0, '2021-12-17 10:00:55', '2021-12-17 10:00:55'),
(18, 'Spanish', 'ES', NULL, 1, 0, '2021-12-17 10:00:55', '2021-12-17 10:31:02');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_09_29_074810_create_jobs_table', 1),
(32, '2020_11_12_075639_create_transactions_table', 6),
(36, '2020_10_14_113046_create_admins_table', 9),
(42, '2020_11_24_064711_create_email_templates_table', 11),
(48, '2014_10_12_000000_create_users_table', 13),
(51, '2020_09_16_103709_create_controls_table', 15),
(59, '2021_01_03_061604_create_tickets_table', 17),
(60, '2021_01_03_061834_create_ticket_messages_table', 18),
(61, '2021_01_03_065607_create_ticket_attachments_table', 18),
(62, '2021_01_07_095019_create_funds_table', 19),
(66, '2021_01_21_050226_create_languages_table', 21),
(69, '2020_12_17_075238_create_sms_controls_table', 23),
(70, '2021_01_26_051716_create_site_notifications_table', 24),
(72, '2021_01_26_075451_create_notify_templates_table', 25),
(73, '2021_01_28_074544_create_contents_table', 26),
(74, '2021_01_28_074705_create_content_details_table', 26),
(75, '2021_01_28_074829_create_content_media_table', 26),
(76, '2021_01_28_074847_create_templates_table', 26),
(77, '2021_01_28_074905_create_template_media_table', 26),
(83, '2021_02_03_100945_create_subscribers_table', 27),
(86, '2021_01_21_101641_add_language_to_email_templates_table', 28),
(87, '2021_02_14_064722_create_manage_plans_table', 28),
(88, '2021_02_14_072251_create_manage_times_table', 29),
(89, '2021_03_09_100340_create_investments_table', 30),
(90, '2021_03_13_132414_create_payout_methods_table', 31),
(91, '2021_03_13_133534_create_payout_logs_table', 32),
(93, '2021_03_18_091710_create_referral_bonuses_table', 33),
(94, '2021_10_25_060950_create_money_transfers_table', 34),
(96, '2021_03_18_091710_create_users_table', 35),
(97, '2022_08_31_054441_create_categories_table', 36),
(98, '2022_09_03_045836_create_game_tournaments_table', 37),
(99, '2022_09_03_073817_create_game_teams_table', 38),
(100, '2022_09_03_100900_add_category_id_to_game_teams_table', 39),
(101, '2022_09_07_054503_create_game_matches_table', 40),
(102, '2022_09_08_072041_create_game_questions_table', 41),
(104, '2022_09_08_100329_create_game_options_table', 42),
(105, '2022_09_13_114549_create_bet_invests_table', 43),
(106, '2022_09_13_120143_create_bet_multis_table', 43);

-- --------------------------------------------------------

--
-- Table structure for table `notify_templates`
--

CREATE TABLE `notify_templates` (
  `id` int(11) NOT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_keys` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `notify_for` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=> Admin, 0=> User',
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notify_templates`
--

INSERT INTO `notify_templates` (`id`, `language_id`, `name`, `template_key`, `body`, `short_keys`, `status`, `notify_for`, `lang_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'SUPPORT TICKET CREATE', 'SUPPORT_TICKET_CREATE', '[[username]] create a ticket\r\nTicket : [[ticket_id]]\r\n\r\n', '{\"ticket_id\":\"Support Ticket ID\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(2, 1, 'SUPPORT TICKET REPLIED', 'SUPPORT_TICKET_REPLIED', '[[username]] replied  ticket\r\nTicket : [[ticket_id]]\r\n\r\n', '{\"ticket_id\":\"Support Ticket ID\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(3, 1, 'ADMIN REPLIED SUPPORT TICKET ', 'ADMIN_REPLIED_TICKET', 'Admin replied  \r\nTicket : [[ticket_id]]', '{\"ticket_id\":\"Support Ticket ID\"}', 1, 0, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(4, 1, 'ADMIN DEPOSIT NOTIFICATION', 'PAYMENT_COMPLETE', '[[username]] deposited [[amount]] [[currency]] via [[gateway]]\r\n', '{\"gateway\":\"gateway\",\"amount\":\"amount\",\"currency\":\"currency\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(5, 1, 'ADD BALANCE', 'ADD_BALANCE', '[[amount]] [[currency]] credited in your account. \r\n\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 1, 0, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(6, 1, 'DEDUCTED BALANCE', 'DEDUCTED_BALANCE', '[[amount]] [[currency]] debited in your account.\r\n\r\nYour Current Balance [[main_balance]][[currency]]\r\n\r\nTransaction: #[[transaction]]', '{\"transaction\":\"Transaction Number\",\"amount\":\"Request Amount By Admin\",\"currency\":\"Site Currency\", \"main_balance\":\"Users Balance After this operation\"}', 1, 0, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(7, 1, 'NEW USER ADDED', 'ADDED_USER', '[[username]] has been joined\r\n\r\n', '{\"username\":\"username\"}', 1, 1, 'en', '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(8, 1, 'WITHDRAW REQUEST NOTIFICATION TO ADMIN', 'PAYOUT_REQUEST', '[[username]] withdraw requested by [[amount]] [[currency]] \r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(9, 1, 'PAYOUT REJECTED ', 'PAYOUT_REJECTED', '[[amount]] [[currency]]  withdraw requested has been rejected\r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(10, 1, 'PAYOUT APPROVE ', 'PAYOUT_APPROVE ', '[[amount]] [[currency]]  withdraw requested has been approved\r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(11, 1, 'ADMIN DEPOSIT REQUEST NOTIFICATION', 'PAYMENT_REQUEST', '[[username]] deposit request [[amount]] [[currency]] via [[gateway]]\r\n', '{\"gateway\":\"gateway\",\"amount\":\"amount\",\"currency\":\"currency\",\"username\":\"username\"}', 1, 1, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(12, 1, 'PAYMENT REJECTED', 'PAYMENT_REJECTED', '[[amount]] [[currency]] payment has been requested \r\n\r\n', '{\"amount\":\"amount\",\"currency\":\"currency\",\"feedback\":\"Admin feedback\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(13, 1, 'KYC APPROVED', 'KYC_APPROVED', '[[kyc_type]] has been approved\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(14, 1, 'KYC REJECTED', 'KYC_REJECTED', '[[kyc_type]] has been rejected\r\n\r\n', '{\"kyc_type\":\"kyc type\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(15, 1, 'USER REFUND', 'USER_REFUND', 'Your Refund Amount [[amount]]\r\n\r\n', '{\"amount\":\"amount\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53'),
(16, 1, 'REFERRAL BONUS', 'REFERRAL_BONUS', 'You got [[amount]] [[currency]]  Referral bonus From  [[bonus_from]] \r\n', '{\"bonus_from\":\"bonus from User\",\"amount\":\"amount\",\"currency\":\"currency\",\"level\":\"level\"}', 1, 0, NULL, '2021-12-17 10:01:53', '2021-12-17 10:01:53');

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
-- Table structure for table `payout_logs`
--

CREATE TABLE `payout_logs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `method_id` int(11) UNSIGNED DEFAULT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `charge` decimal(11,2) DEFAULT NULL,
  `net_amount` decimal(11,2) DEFAULT NULL,
  `information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '1=> pending, 2=> success, 3=> cancel,',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payout_methods`
--

CREATE TABLE `payout_methods` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_amount` decimal(11,2) DEFAULT NULL,
  `maximum_amount` decimal(11,2) DEFAULT NULL,
  `fixed_charge` decimal(11,2) DEFAULT NULL,
  `percent_charge` decimal(11,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `input_form` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payout_methods`
--

INSERT INTO `payout_methods` (`id`, `name`, `image`, `minimum_amount`, `maximum_amount`, `fixed_charge`, `percent_charge`, `status`, `input_form`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'Wire Transfer', '606418e821ad01617172712.jpg', '20.00', '2000.00', '10.00', '0.00', 1, '{\"email\":{\"field_name\":\"email\",\"field_level\":\"Email\",\"type\":\"text\",\"validation\":\"required\"},\"nid_number\":{\"field_name\":\"nid_number\",\"field_level\":\"NID Number\",\"type\":\"text\",\"validation\":\"required\"},\"passport_number\":{\"field_name\":\"passport_number\",\"field_level\":\"Passport Number\",\"type\":\"text\",\"validation\":\"nullable\"}}', '1-2 Hours', '2021-12-17 10:02:14', '2021-12-17 10:02:14'),
(2, 'Bank Transfer', '6064181b137c91617172507.jpg', '10.00', '100.00', '10.00', '1.00', 1, '{\"bank_name\":{\"field_name\":\"bank_name\",\"field_level\":\"Bank Name\",\"type\":\"text\",\"validation\":\"required\"},\"transaction_prove\":{\"field_name\":\"transaction_prove\",\"field_level\":\"Transaction Prove\",\"type\":\"file\",\"validation\":\"required\"},\"your_address\":{\"field_name\":\"your_address\",\"field_level\":\"Your Address\",\"type\":\"textarea\",\"validation\":\"required\"}}', '1-2 hours maximum', '2021-12-17 10:02:14', '2021-12-17 10:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(11) UNSIGNED NOT NULL,
  `commission_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `percent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_bonuses`
--

CREATE TABLE `referral_bonuses` (
  `id` int(11) UNSIGNED NOT NULL,
  `from_user_id` int(11) UNSIGNED DEFAULT NULL,
  `to_user_id` int(11) UNSIGNED DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `amount` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `main_balance` decimal(18,8) NOT NULL DEFAULT 0.00000000,
  `transaction` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_notifications`
--

CREATE TABLE `site_notifications` (
  `id` int(11) UNSIGNED NOT NULL,
  `site_notificational_id` int(11) NOT NULL,
  `site_notificational_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_controls`
--

CREATE TABLE `sms_controls` (
  `id` int(11) UNSIGNED NOT NULL,
  `actionMethod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actionUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headerData` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paramData` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formData` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_controls`
--

INSERT INTO `sms_controls` (`id`, `actionMethod`, `actionUrl`, `headerData`, `paramData`, `formData`, `created_at`, `updated_at`) VALUES
(1, 'POST', 'https://rest.nexmo.com/sms/json', '{\"Content-Type\":\"application\\/x-www-form-urlencoded\"}', NULL, '{\"from\":\"Rownak\",\"text\":\"[[message]]\",\"to\":\"[[receiver]]\",\"api_key\":\"930cc608\",\"api_secret\":\"2pijsaMOUw5YKOK5\"}', '2021-12-17 10:02:43', '2021-12-17 10:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) UNSIGNED NOT NULL,
  `language_id` int(11) UNSIGNED DEFAULT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `language_id`, `section_name`, `description`, `created_at`, `updated_at`) VALUES
(81, 1, 'about-us', '{\"title\":\"A Next-Level Sports Betting\",\"sub_title\":\"Know About Us\",\"description\":\"Our platform has been designed from the ground up to be tailored to the unique form of betting and settlement offered by the blockchain. Follow these simple steps and make profits! Our platform has been designed from the ground up to be tailored to the unique form of betting and settlement offered by the blockchain. Follow these simple steps and make profits!\\r\\n\\r\\nOur platform has been designed from the ground up to be tailored to the unique form of betting and settlement offered by the blockchain. Follow these simple steps and make profits!\\r\\nOur platform has been designed from the ground up to be tailored to the unique form of betting and settlement offered by the blockchain. Follow these simple steps and make profits!\"}', '2022-08-31 06:52:21', '2022-08-31 06:52:21'),
(82, 1, 'testimonial', '{\"title\":\"Testimonials\",\"sub_title\":\"What Clients Say\",\"short_description\":\"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti impedit molestias ipsa quo deserunt ipsam eveniet temporibus cupiditate natus praesentium?\"}', '2022-08-31 07:02:22', '2022-08-31 07:02:22'),
(83, 1, 'faq', '{\"title\":\"Frequently Asked Questions\"}', '2022-08-31 07:53:39', '2022-08-31 07:53:39'),
(84, 1, 'blog', '{\"title\":\"Our Blogs\"}', '2022-08-31 08:01:13', '2022-08-31 08:01:13'),
(85, 1, 'contact-us', '{\"heading\":\"Contact Us\",\"sub_heading\":\"Get In Touch With Us\",\"short_description\":\"Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.\",\"address\":\"22 Baker Street, London\",\"house\":\"22 Baker Street, London\",\"email\":\"hello@website.com\",\"phone\":\"+44-20-4526-2356\",\"footer_short_details\":\"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\"}', '2022-08-31 23:39:30', '2022-08-31 23:39:30'),
(86, 1, 'hero', NULL, '2022-09-01 00:05:39', '2022-09-01 00:05:39'),
(87, 18, 'about-us', '{\"title\":\"Una apuesta deportiva de siguiente nivel\",\"sub_title\":\"Sepa Sobre nosotras\",\"description\":\"Nuestra plataforma ha sido dise\\u00f1ada desde cero para adaptarse a la forma \\u00fanica de apuestas y liquidaci\\u00f3n que ofrece la cadena de bloques. \\u00a1Siga estos sencillos pasos y obtenga beneficios! Nuestra plataforma ha sido dise\\u00f1ada desde cero para adaptarse a la forma \\u00fanica de apuestas y liquidaci\\u00f3n que ofrece la cadena de bloques. \\u00a1Siga estos sencillos pasos y obtenga beneficios! Nuestra plataforma ha sido dise\\u00f1ada desde cero para adaptarse a la forma \\u00fanica de apuestas y liquidaci\\u00f3n que ofrece la cadena de bloques. \\u00a1Siga estos sencillos pasos y obtenga beneficios! Nuestra plataforma ha sido dise\\u00f1ada desde cero para adaptarse a la forma \\u00fanica de apuestas y liquidaci\\u00f3n que ofrece la cadena de bloques. \\u00a1Siga estos sencillos pasos y obtenga beneficios!\"}', '2022-09-18 04:55:43', '2022-09-18 04:55:43'),
(88, 18, 'faq', '{\"title\":\"Preguntas frecuentes\"}', '2022-09-18 04:56:01', '2022-09-18 04:56:01'),
(89, 18, 'blog', '{\"title\":\"Nuestras Blogs\"}', '2022-09-18 04:57:34', '2022-09-18 04:57:34'),
(90, 18, 'testimonial', '{\"title\":\"Testimonios\",\"sub_title\":\"Lo que dicen las clientes\",\"short_description\":\"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti impedit molestias ipsa quo deserunt ipsam eveniet temporibus cupiditate natus praesentium?\"}', '2022-09-18 04:58:47', '2022-09-18 04:58:47'),
(91, 18, 'contact-us', '{\"heading\":\"Contacta con nosotras\",\"sub_heading\":\"P\\u00f3ngase en contacto con nosotros\",\"short_description\":\"Ll\\u00e1menos o vis\\u00edtenos en cualquier momento, nos esforzamos por responder todas las consultas dentro de las 24 horas en d\\u00edas h\\u00e1biles. Estaremos encantados de responder a sus preguntas.\",\"address\":\"22 Baker Street, Londres\",\"house\":\"22 Baker Street, London\",\"email\":\"hello@website.com\",\"phone\":\"+44-20-4526-2356\",\"footer_short_details\":\"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\"}', '2022-09-18 05:00:54', '2022-09-18 05:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `template_media`
--

CREATE TABLE `template_media` (
  `id` int(11) UNSIGNED NOT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_media`
--

INSERT INTO `template_media` (`id`, `section_name`, `description`, `created_at`, `updated_at`) VALUES
(6, 'about-us', '{\"image\":\"630f5985a94bb1661950341.png\"}', '2022-08-31 06:52:21', '2022-08-31 06:52:21'),
(7, 'hero', '{\"image\":\"63104bb3103231662012339.jpg\"}', '2022-09-01 00:05:39', '2022-09-01 00:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Open, 1: Answered, 2: Replied, 3: Closed	',
  `last_reply` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_attachments`
--

CREATE TABLE `ticket_attachments` (
  `id` int(11) UNSIGNED NOT NULL,
  `ticket_message_id` int(11) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_messages`
--

CREATE TABLE `ticket_messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `ticket_id` int(11) UNSIGNED DEFAULT NULL,
  `admin_id` int(11) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(11,2) DEFAULT NULL,
  `charge` decimal(11,2) NOT NULL DEFAULT 0.00,
  `final_balance` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trx_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(11,2) NOT NULL DEFAULT 0.00,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `identity_verify` tinyint(4) NOT NULL COMMENT '	0 => Not Applied, 1=> Applied, 2=> Approved, 3 => Rejected	',
  `address_verify` tinyint(4) NOT NULL COMMENT '0 => Not Applied, 1=> Applied, 2=> Approved, 3 => Rejected	',
  `two_fa` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: two-FA off, 1: two-FA on',
  `two_fa_verify` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0: two-FA unverified, 1: two-FA verified',
  `two_fa_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verification` tinyint(1) NOT NULL DEFAULT 1,
  `sms_verification` tinyint(1) NOT NULL DEFAULT 1,
  `verify_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `referral_id`, `language_id`, `email`, `country_code`, `phone_code`, `phone`, `balance`, `image`, `address`, `provider`, `provider_id`, `status`, `identity_verify`, `address_verify`, `two_fa`, `two_fa_verify`, `two_fa_code`, `email_verification`, `sms_verification`, `verify_code`, `sent_at`, `last_login`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test123', NULL, NULL, 'test@yahoo.com', NULL, '+61', '+6198989498499', '0.00', NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, NULL, 1, 1, NULL, NULL, '2022-11-21 23:42:00', '$2y$10$dn5vk3nblznO5bFtPXSHJOIuFQX0ik8EIjgNS1rZvsiculW2eDctq', NULL, NULL, '2022-11-21 09:49:29', '2022-11-21 16:42:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bet_invests`
--
ALTER TABLE `bet_invests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bet_invest_logs`
--
ALTER TABLE `bet_invest_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bet_multis_bet_invest_id_foreign` (`bet_invest_id`);

--
-- Indexes for table `configures`
--
ALTER TABLE `configures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_name_index` (`name`);

--
-- Indexes for table `content_details`
--
ALTER TABLE `content_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_details_content_id_foreign` (`content_id`),
  ADD KEY `content_details_language_id_foreign` (`language_id`);

--
-- Indexes for table `content_media`
--
ALTER TABLE `content_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_media_content_id_foreign` (`content_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_templates_language_id_foreign` (`language_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funds_user_id_foreign` (`user_id`),
  ADD KEY `funds_gateway_id_foreign` (`gateway_id`);

--
-- Indexes for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_matches`
--
ALTER TABLE `game_matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_matches_category_id_foreign` (`category_id`),
  ADD KEY `game_matches_tournament_id_foreign` (`tournament_id`),
  ADD KEY `game_matches_team1_id_foreign` (`team1_id`),
  ADD KEY `game_matches_team2_id_foreign` (`team2_id`);

--
-- Indexes for table `game_options`
--
ALTER TABLE `game_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_options_match_id_foreign` (`match_id`),
  ADD KEY `game_options_question_id_foreign` (`question_id`);

--
-- Indexes for table `game_questions`
--
ALTER TABLE `game_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_questions_match_id_foreign` (`match_id`);

--
-- Indexes for table `game_teams`
--
ALTER TABLE `game_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_teams_category_id_foreign` (`category_id`);

--
-- Indexes for table `game_tournaments`
--
ALTER TABLE `game_tournaments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_tournaments_category_id_foreign` (`category_id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gateways_code_unique` (`code`);

--
-- Indexes for table `identify_forms`
--
ALTER TABLE `identify_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `kycs`
--
ALTER TABLE `kycs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_templates`
--
ALTER TABLE `notify_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notify_templates_language_id_foreign` (`language_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payout_logs`
--
ALTER TABLE `payout_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payout_methods`
--
ALTER TABLE `payout_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_bonuses`
--
ALTER TABLE `referral_bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_notifications`
--
ALTER TABLE `site_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_controls`
--
ALTER TABLE `sms_controls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_media`
--
ALTER TABLE `template_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_media_section_name_index` (`section_name`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`);

--
-- Indexes for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_attachments_ticket_message_id_foreign` (`ticket_message_id`);

--
-- Indexes for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_messages_ticket_id_foreign` (`ticket_id`),
  ADD KEY `ticket_messages_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bet_invests`
--
ALTER TABLE `bet_invests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bet_invest_logs`
--
ALTER TABLE `bet_invest_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configures`
--
ALTER TABLE `configures`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `content_details`
--
ALTER TABLE `content_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `content_media`
--
ALTER TABLE `content_media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game_matches`
--
ALTER TABLE `game_matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game_options`
--
ALTER TABLE `game_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game_questions`
--
ALTER TABLE `game_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game_teams`
--
ALTER TABLE `game_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game_tournaments`
--
ALTER TABLE `game_tournaments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `identify_forms`
--
ALTER TABLE `identify_forms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kycs`
--
ALTER TABLE `kycs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `notify_templates`
--
ALTER TABLE `notify_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payout_logs`
--
ALTER TABLE `payout_logs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payout_methods`
--
ALTER TABLE `payout_methods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_bonuses`
--
ALTER TABLE `referral_bonuses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_notifications`
--
ALTER TABLE `site_notifications`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_controls`
--
ALTER TABLE `sms_controls`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `template_media`
--
ALTER TABLE `template_media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bet_invest_logs`
--
ALTER TABLE `bet_invest_logs`
  ADD CONSTRAINT `bet_multis_bet_invest_id_foreign` FOREIGN KEY (`bet_invest_id`) REFERENCES `bet_invests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_details`
--
ALTER TABLE `content_details`
  ADD CONSTRAINT `content_details_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`),
  ADD CONSTRAINT `content_details_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `content_media`
--
ALTER TABLE `content_media`
  ADD CONSTRAINT `content_media_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`);

--
-- Constraints for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD CONSTRAINT `email_templates_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `funds`
--
ALTER TABLE `funds`
  ADD CONSTRAINT `funds_gateway_id_foreign` FOREIGN KEY (`gateway_id`) REFERENCES `gateways` (`id`),
  ADD CONSTRAINT `funds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `game_matches`
--
ALTER TABLE `game_matches`
  ADD CONSTRAINT `game_matches_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `game_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_matches_team1_id_foreign` FOREIGN KEY (`team1_id`) REFERENCES `game_teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_matches_team2_id_foreign` FOREIGN KEY (`team2_id`) REFERENCES `game_teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_matches_tournament_id_foreign` FOREIGN KEY (`tournament_id`) REFERENCES `game_tournaments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `game_options`
--
ALTER TABLE `game_options`
  ADD CONSTRAINT `game_options_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `game_matches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `game_options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `game_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `game_questions`
--
ALTER TABLE `game_questions`
  ADD CONSTRAINT `game_questions_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `game_matches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `game_teams`
--
ALTER TABLE `game_teams`
  ADD CONSTRAINT `game_teams_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `game_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `game_tournaments`
--
ALTER TABLE `game_tournaments`
  ADD CONSTRAINT `game_tournaments_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `game_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notify_templates`
--
ALTER TABLE `notify_templates`
  ADD CONSTRAINT `notify_templates_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ticket_attachments`
--
ALTER TABLE `ticket_attachments`
  ADD CONSTRAINT `ticket_attachments_ticket_message_id_foreign` FOREIGN KEY (`ticket_message_id`) REFERENCES `ticket_messages` (`id`);

--
-- Constraints for table `ticket_messages`
--
ALTER TABLE `ticket_messages`
  ADD CONSTRAINT `ticket_messages_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `ticket_messages_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
