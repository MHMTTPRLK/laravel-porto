-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ağu 2020, 23:57:43
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `portfolio`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_content` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_video` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_vizyon` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_misyon` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `about_content`, `about_video`, `about_vizyon`, `about_misyon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bizim Hakkımızda', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut</p>\r\n\r\n<p>mauris augue, condimentum accumsan consectetur nec,</p>\r\n\r\n<p>maximus vel est. Morbi convallis diam eget odio accumsan lacinia eget ac orci. Mauris sollicitudin est ac rhoncus porttito</p>\r\n\r\n<p>r. Integer quis nisl vitae nulla pretium luctus. Aenean lacinia risus congue tellus convallis dictum. Vivamus tristique orci sed neque consequat, ac lobortis augue mollis. In finibus dolor at imperdiet pharetra.</p>\r\n\r\n<p>Cras vel augue orci. Suspendisse potenti. Sed vestibulum ultricies luctus. Quisque sem est, accumsan vitae dolor at, vestibulum blandit odio. Curabitur ut elementum est. Curabitur varius eu augue in posuere. Aliquam sed sagittis elit, eu lobortis massa. Fusce a tristique neque, in iaculis felis. Praesent at vehicula elit, ut facilisis arcu. Aenean eget tristique metus. Nam sed dui ultrices leo commodo vehicula. Suspendisse sit amet lectus pulvinar, luctus ipsum id, ullamcorper dui. Nunc fringilla augue non urna rutrum elementum. Nullam id sem ac orci commodo lobortis et iaculis mi. Phasellus vel massa massa.</p>\r\n\r\n<p>Aenean volutpat accumsan tellus in imperdiet. Fusce vitae maximus lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim erat lorem, eleifend interdum justo scelerisque a. Vestibulum libero nisi, tincidunt ac lacus sed, tempor tristique ligula. Duis arcu dui, placerat ac leo vitae, molestie sodales nisl. Aliquam in nunc mi. Nam eget dolor enim. Fusce nisi leo, consectetur ornare vulputate sed, rutrum non lacus. Integer gravida tellus eget dui vehicula dignissim. Vivamus vulputate leo et viverra tincidunt. Aliquam sit amet elit aliquam, interdum arcu ac, porttitor massa. Praesent non neque eget augue porttitor tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur vulputate vestibulum tellus, sit amet maximus ligula tincidunt ut.</p>\r\n\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur faucibus rhoncus sapien, at egestas orci. Donec sed commodo quam, quis gravida libero. Vestibulum cursus placerat elit, at pulvinar orci venenatis porttitor. Sed dapibus pretium elit, id pretium lectus cursus id. Nam vel augue et ex tristique convallis. Vivamus porttitor feugiat feugiat. Suspendisse potenti. Integer auctor magna fermentum, mollis quam et, euismod urna. Phasellus ante massa, egestas eget auctor eget, scelerisque in felis. Integer euismod sem vitae nisl eleifend, ac egestas mauris semper. Donec imperdiet justo a enim finibus sollicitudin. Integer dui est, scelerisque in sodales in, rutrum sed dolor. Integer sodales magna nec lacinia consequat. Nunc aliquet vel mauris vehicula sodales. Donec metus mauris, bibendum nec ligula et, pulvinar lacinia&nbsp;quam.</p>\r\n\r\n<p>Vivamus cursus vehicula pulvinar. Duis et urna blandit, congue augue sollicitudin, accumsan tellus. Nullam ornare mi at enim efficitur, eu varius risus pellentesque. Vivamus mollis non tellus a tincidunt. Fusce dolor massa, posuere a ex sit amet, porta vulputate metus. Integer vitae metus molestie, accumsan metus eget, eleifend est. Phasellus a ipsum ante. Nullam nec dolor sollicitudin, pharetra purus sed, porta justo.</p>\r\n\r\n<p>Donec sagittis ex a risus blandit cursus. Curabitur viverra finibus nunc at vulputate. Phasellus in ex sit amet nisi ultricies blandit. Sed pretium lectus felis, eu sagittis eros vestibulum eu. Vivamus nec fringilla magna. Suspendisse tincidunt, dui non lobortis tristique, odio sem suscipit turpis, sit amet pellentesque augue tellus eu ligula. Donec rutrum ac massa et fermentum. In accumsan, nulla vel posuere mattis, nibh dui mollis ex, eget tincidunt neque tellus vel dolor</p>\r\n\r\n<p>&nbsp;</p>', 'EcYXsp78Xy8', 'Cras vel augue orci. Suspendisse potenti. Sed vestibulum ultricies luctus. Quisque sem est, accumsan vitae dolor at, vestibulum blandit odio. Curabitur ut elementum est. Curabitur varius eu augue in posuere. Aliquam sed sagittis elit, eu lobortis massa. Fusce a tristique neque, in iaculis felis. Praesent at vehicula elit, ut facilisis arcu. Aenean eget tristique metus. Nam sed dui ultrices leo commodo vehicula. Suspendisse sit amet lectus pulvinar, luctus ipsum id, ullamcorper dui. Nunc fringilla augue non urna rutrum elementum. Nullam id sem ac orci commodo lobortis et iaculis mi. Phasellus vel massa massa.', '<p>Cras vel augue orci. Suspendisse potenti. Sed vestibulum ultricies luctus. Quisque sem est, accumsan vitae dolor at, vestibulum blandit odio. Curabitur ut elementum est. Curabitur varius eu augue in posuere. Aliquam sed sagittis elit, eu lobortis massa. Fusce a tristique neque, in iaculis felis. Praesent at vehicula elit, ut facilisis arcu. Aenean eget tristique metus. Nam sed dui ultrices leo commodo vehicula. Suspendisse sit amet lectus pulvinar, luctus ipsum id, ullamcorper dui. Nunc fringilla augue non urna rutrum elementum. Nullam id sem ac orci commodo lobortis et iaculis mi. Phasellus vel massa massa.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-08-24 21:00:00', '2020-08-20 22:50:50', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` int(11) NOT NULL DEFAULT '1' COMMENT '0: Kullanıcı 1:Yönetici',
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `pass_question`, `fullname`, `image`, `authority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Firstname', 'admin@gmail.com', '$2y$10$Th0mJxUaPKMzIuKSCsO7K.e/SWTV6sVmtgBVVh8cQQ/mre2Ayg96O', '1998', 'Fullname', 'uploadImages/prlk-blog-logo.png', 1, 1, '2020-08-24 21:00:00', '2020-08-24 21:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0:pasif 1:aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'İçeriklerim', 'iceriklerim', 1, '2020-08-16 21:00:00', '2020-08-17 18:25:28'),
(4, 'Elektrik', 'elektrik', 1, '2020-08-17 18:09:40', '2020-08-17 18:42:36'),
(5, 'Kategori1', 'kategori1', 1, '2020-08-22 21:57:43', '2020-08-22 21:57:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:pasif 1:aktif',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `googlemap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `analystic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smptp_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smptp_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `configs`
--

INSERT INTO `configs` (`id`, `logo`, `favicon`, `active`, `site_url`, `title`, `description`, `keywords`, `author`, `googlemap`, `analystic`, `smptp_password`, `smptp_port`, `created_at`, `updated_at`) VALUES
(1, 'Logo_Image/site-basligi-logo.png', 'Logo_Image/site-basligi-favicon.png', '1', 'Site Url', 'Site Başlığı', 'Site keywords', 'Site keywords', 'Site yazar', 'AIzaSyAKDU5o_I1nhG22i9j5RSurx1zqr4VGogM', 'Site analystic', 'smptp_password', 'smptp_port', '2020-08-15 21:00:00', '2020-08-20 21:22:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `durum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `topic`, `message`, `durum`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Lorem Ipsum', 'loremipsumk@gmail.com', 'İş', 'İş var mı Abeeeeeeeeee', 0, '2020-08-18 21:00:00', '2020-08-24 21:17:14', NULL),
(5, 'Lorem Ipsum', 'loremipsumk@gmail.com', 'Bilgi', '<p>Bu Bir Deneme Mesajıdır!!!!!</p>', 0, '2020-08-24 21:06:18', '2020-08-24 21:17:15', NULL),
(7, 'Lorem Ipsum', 'loremipsumk@gmail.com', 'Genel', '<p><strong>Address:</strong>&nbsp;Hasanpaşa Mah. Fahrettinkerim G&ouml;kay Cad. No:2 Kadık&ouml;y , İstanbul Turkey<strong>Address:</strong>&nbsp;Hasanpaşa Mah. Fahrettinkerim G&ouml;kay Cad. No:2 Kadık&ouml;y , İstanbul Turkey</p>', 0, '2020-08-24 21:28:23', '2020-08-24 21:28:23', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `tel` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `gsm` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `fax` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `email` varchar(75) COLLATE utf32_turkish_ci NOT NULL,
  `address` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `city` varchar(200) COLLATE utf32_turkish_ci NOT NULL,
  `street` varchar(500) COLLATE utf32_turkish_ci NOT NULL,
  `hour` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `hour1` varchar(50) COLLATE utf32_turkish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `infos`
--

INSERT INTO `infos` (`id`, `tel`, `gsm`, `fax`, `email`, `address`, `city`, `street`, `hour`, `hour1`, `created_at`, `updated_at`) VALUES
(1, '0850123456', '00000000', '000000000000', 'email', 'Turkey', 'İstanbul', 'Hasanpaşa Mah. Fahrettinkerim Gökay Cad. No:2 Kadıköy', '08.00 - 17.00', '09.00-14.00', '2020-08-16 21:10:53', '2020-08-20 21:27:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0:pasif 1:aktif',
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `menus`
--

INSERT INTO `menus` (`id`, `title`, `slug`, `status`, `order`, `created_at`, `updated_at`) VALUES
(2, 'Menu1', 'menu1', '1', '0', '2020-08-14 17:54:19', '2020-08-22 21:09:52'),
(3, 'Menu2', 'menu2', '1', '1', '2020-08-14 17:55:00', '2020-08-20 20:53:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_08_10_150429_create_sliders_table', 1),
(2, '2020_08_10_151207_create_abouts_table', 1),
(3, '2020_08_10_151608_create_contacts_table', 2),
(4, '2020_08_10_183315_create_information_table', 3),
(5, '2020_08_10_184007_create_configs_table', 4),
(6, '2020_08_10_185328_create_socials_table', 5),
(7, '2020_08_10_190502_create_menu_table', 6),
(8, '2020_08_10_191332_create_categories_table', 7),
(9, '2020_08_10_191416_create_news_table', 8),
(10, '2020_08_10_192054_create_admins_table', 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0:pasif 1:aktif',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `image`, `content`, `hit`, `status`, `slug`, `author`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem Ipsum1', 'uploads/icerik-baslik.png10', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum leo ac odio venenatis interdum. Nullam interdum ligula mauris, vel lobortis ante tincidunt ac. Curabitur maximus, purus at tristique vestibulum, arcu nibh blandit magna, et placerat metus libero a massa. Fusce ac nisi porta, fermentum turpis eu, semper turpis. Proin aliquet pretium felis, semper sodales dui aliquam eget. Nam maximus orci ut ex gravida mollis. Sed vel malesuada enim, ut dapibus dolor. Duis sit amet rhoncus elit. Mauris sit amet justo auctor, molestie dolor et, porta justo. Maecenas eu congue orci.</p>\r\n\r\n<p>Duis sed diam et tortor suscipit sagittis eu vestibulum metus. Curabitur eget ex sit amet arcu porta mollis in nec lectus. Nullam est sapien, pharetra a viverra sit amet, fermentum placerat elit. Nullam eget sem hendrerit, viverra libero eleifend, porta sapien. Suspendisse augue ligula, finibus ac ex ac, semper convallis tellus. Donec commodo vestibulum velit, vitae tempor velit sodales eget. Donec suscipit tristique enim, eget congue dui consectetur ac. In ac sodales dui, suscipit porttitor lectus. Sed porttitor lacus quis ipsum feugiat, et sollicitudin urna sagittis. In euismod erat id purus tristique, a luctus quam congue. In hac habitasse platea dictumst. Vivamus dapibus lorem sit amet tortor cursus ultrices. Pellentesque volutpat hendrerit condimentum. Donec sed semper quam. Mauris vel viverra diam. Fusce bibendum quam ac maximus efficitur.</p>\r\n\r\n<p>Aenean interdum interdum odio, in vestibulum nunc fermentum tincidunt. Nulla sagittis ultrices risus, et porta tellus porta at. Donec vulputate arcu sit amet risus maximus, non ultricies neque sodales. Donec at massa tincidunt, elementum tellus quis, condimentum dui. Ut ornare tortor in tincidunt finibus. Vestibulum fringilla vehicula felis ut consequat. Mauris dapibus nulla et arcu ullamcorper feugiat.</p>\r\n\r\n<p>Cras faucibus arcu risus, sit amet blandit enim facilisis ut. Duis arcu tellus, vehicula non tortor ut, sagittis sodales eros. Quisque at odio in lorem consectetur fringilla vitae id ante. Curabitur eget tortor eu dui hendrerit iaculis. Cras dapibus nunc maximus, tincidunt odio id, ultrices arcu. Cras cursus magna ornare odio aliquam, nec molestie sapien congue. Nulla commodo suscipit felis. Nulla eu lobortis sem. Nullam egestas dapibus arcu. Nam fermentum est et ligula fermentum, eget sodales eros finibus. Phasellus venenatis libero a sapien ultrices semper. Pellentesque et tellus metus. Ut eleifend erat lacus, sed consequat elit pharetra quis. Suspendisse ante neque, consequat a nisi nec, cursus ullamcorper mi. Duis eget nulla leo.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 1px; top: -4.8px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 12, 1, 'lorem-ipsum1', 'Mehmet Parlak', NULL, '2020-08-16 21:00:00', '2020-08-22 20:12:42'),
(3, 4, 'Lorem Ipsum2', 'uploads/kategori-baslik.png6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum leo ac odio venenatis interdum. Nullam interdum ligula mauris, vel lobortis ante tincidunt ac. Curabitur maximus, purus at tristique vestibulum, arcu nibh blandit magna, et placerat metus libero a massa. Fusce ac nisi porta, fermentum turpis eu, semper turpis. Proin aliquet pretium felis, semper sodales dui aliquam eget. Nam maximus orci ut ex gravida mollis. Sed vel malesuada enim, ut dapibus dolor. Duis sit amet rhoncus elit. Mauris sit amet justo auctor, molestie dolor et, porta justo. Maecenas eu congue orci.</p>\r\n\r\n<p>Duis sed diam et tortor suscipit sagittis eu vestibulum metus. Curabitur eget ex sit amet arcu porta mollis in nec lectus. Nullam est sapien, pharetra a viverra sit amet, fermentum placerat elit. Nullam eget sem hendrerit, viverra libero eleifend, porta sapien. Suspendisse augue ligula, finibus ac ex ac, semper convallis tellus. Donec commodo vestibulum velit, vitae tempor velit sodales eget. Donec suscipit tristique enim, eget congue dui consectetur ac. In ac sodales dui, suscipit porttitor lectus. Sed porttitor lacus quis ipsum feugiat, et sollicitudin urna sagittis. In euismod erat id purus tristique, a luctus quam congue. In hac habitasse platea dictumst. Vivamus dapibus lorem sit amet tortor cursus ultrices. Pellentesque volutpat hendrerit condimentum. Donec sed semper quam. Mauris vel viverra diam. Fusce bibendum quam ac maximus efficitur.</p>\r\n\r\n<p>Aenean interdum interdum odio, in vestibulum nunc fermentum tincidunt. Nulla sagittis ultrices risus, et porta tellus porta at. Donec vulputate arcu sit amet risus maximus, non ultricies neque sodales. Donec at massa tincidunt, elementum tellus quis, condimentum dui. Ut ornare tortor in tincidunt finibus. Vestibulum fringilla vehicula felis ut consequat. Mauris dapibus nulla et arcu ullamcorper feugiat.</p>\r\n\r\n<p>Cras faucibus arcu risus, sit amet blandit enim facilisis ut. Duis arcu tellus, vehicula non tortor ut, sagittis sodales eros. Quisque at odio in lorem consectetur fringilla vitae id ante. Curabitur eget tortor eu dui hendrerit iaculis. Cras dapibus nunc maximus, tincidunt odio id, ultrices arcu. Cras cursus magna ornare odio aliquam, nec molestie sapien congue. Nulla commodo suscipit felis. Nulla eu lobortis sem. Nullam egestas dapibus arcu. Nam fermentum est et ligula fermentum, eget sodales eros finibus. Phasellus venenatis libero a sapien ultrices semper. Pellentesque et tellus metus. Ut eleifend erat lacus, sed consequat elit pharetra quis. Suspendisse ante neque, consequat a nisi nec, cursus ullamcorper mi. Duis eget nulla leo.</p>\r\n\r\n<p>Fusce congue ac lectus quis venenatis. Mauris eu dignissim ligula, nec fermentum ante. Nam non vestibulum elit. Donec nec accumsan sapien, consequat lacinia ante. Vestibulum faucibus, massa non tempor posuere, augue velit dignissim orci, quis mollis risus nibh nec urna. Nam lorem ligula, aliquam in enim vitae, sollicitudin luctus sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n\r\n<p>Nulla rhoncus ante fermentum lectus congue, ac rhoncus augue vestibulum. Vivamus eleifend, nisl id dictum commodo, lacus felis porttitor dui, at faucibus justo dolor ac enim. Praesent consectetur ipsum placerat purus lacinia molestie. Sed ut blandit lectus. Sed a efficitur ex. Donec finibus dictum elit, ornare hendrerit ligula cursus id. Sed ipsum metus, porta ac lorem nec, finibus posuere est. Praesent felis tellus, pellentesque sit amet sollicitudin eget, convallis vitae tellus. Sed at nibh nec ante laoreet lobortis in id est. Aenean vel pellentesque nulla, sit amet posuere ante. In at turpis maximus, pulvinar erat id, egestas magna. Vivamus dictum nulla a lectus viverra, sit amet eleifend mi luctus. Donec varius urna varius nunc pretium, id cursus ex ornare. Aenean vestibulum neque quis aliquam facilisis. Vestibulum consequat elit eu diam dignissim, in congue lacus eleifend.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 178px; top: 38.6px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 6, 1, 'lorem-ipsum2', 'Mehmet Parlak', NULL, '2020-08-16 21:00:00', '2020-08-22 20:20:33'),
(4, 4, 'Lorem Ipsum1', 'uploads/icerik-baslik.png10', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum leo ac odio venenatis interdum. Nullam interdum ligula mauris, vel lobortis ante tincidunt ac. Curabitur maximus, purus at tristique vestibulum, arcu nibh blandit magna, et placerat metus libero a massa. Fusce ac nisi porta, fermentum turpis eu, semper turpis. Proin aliquet pretium felis, semper sodales dui aliquam eget. Nam maximus orci ut ex gravida mollis. Sed vel malesuada enim, ut dapibus dolor. Duis sit amet rhoncus elit. Mauris sit amet justo auctor, molestie dolor et, porta justo. Maecenas eu congue orci.</p>\r\n\r\n<p>Duis sed diam et tortor suscipit sagittis eu vestibulum metus. Curabitur eget ex sit amet arcu porta mollis in nec lectus. Nullam est sapien, pharetra a viverra sit amet, fermentum placerat elit. Nullam eget sem hendrerit, viverra libero eleifend, porta sapien. Suspendisse augue ligula, finibus ac ex ac, semper convallis tellus. Donec commodo vestibulum velit, vitae tempor velit sodales eget. Donec suscipit tristique enim, eget congue dui consectetur ac. In ac sodales dui, suscipit porttitor lectus. Sed porttitor lacus quis ipsum feugiat, et sollicitudin urna sagittis. In euismod erat id purus tristique, a luctus quam congue. In hac habitasse platea dictumst. Vivamus dapibus lorem sit amet tortor cursus ultrices. Pellentesque volutpat hendrerit condimentum. Donec sed semper quam. Mauris vel viverra diam. Fusce bibendum quam ac maximus efficitur.</p>\r\n\r\n<p>Aenean interdum interdum odio, in vestibulum nunc fermentum tincidunt. Nulla sagittis ultrices risus, et porta tellus porta at. Donec vulputate arcu sit amet risus maximus, non ultricies neque sodales. Donec at massa tincidunt, elementum tellus quis, condimentum dui. Ut ornare tortor in tincidunt finibus. Vestibulum fringilla vehicula felis ut consequat. Mauris dapibus nulla et arcu ullamcorper feugiat.</p>\r\n\r\n<p>Cras faucibus arcu risus, sit amet blandit enim facilisis ut. Duis arcu tellus, vehicula non tortor ut, sagittis sodales eros. Quisque at odio in lorem consectetur fringilla vitae id ante. Curabitur eget tortor eu dui hendrerit iaculis. Cras dapibus nunc maximus, tincidunt odio id, ultrices arcu. Cras cursus magna ornare odio aliquam, nec molestie sapien congue. Nulla commodo suscipit felis. Nulla eu lobortis sem. Nullam egestas dapibus arcu. Nam fermentum est et ligula fermentum, eget sodales eros finibus. Phasellus venenatis libero a sapien ultrices semper. Pellentesque et tellus metus. Ut eleifend erat lacus, sed consequat elit pharetra quis. Suspendisse ante neque, consequat a nisi nec, cursus ullamcorper mi. Duis eget nulla leo.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 1px; top: -4.8px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 12, 1, 'lorem-ipsum1', 'Mehmet Parlak', NULL, '2020-08-16 21:00:00', '2020-08-22 20:12:42'),
(5, 4, 'Lorem Ipsum1', 'uploads/icerik-baslik.png10', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum leo ac odio venenatis interdum. Nullam interdum ligula mauris, vel lobortis ante tincidunt ac. Curabitur maximus, purus at tristique vestibulum, arcu nibh blandit magna, et placerat metus libero a massa. Fusce ac nisi porta, fermentum turpis eu, semper turpis. Proin aliquet pretium felis, semper sodales dui aliquam eget. Nam maximus orci ut ex gravida mollis. Sed vel malesuada enim, ut dapibus dolor. Duis sit amet rhoncus elit. Mauris sit amet justo auctor, molestie dolor et, porta justo. Maecenas eu congue orci.</p>\r\n\r\n<p>Duis sed diam et tortor suscipit sagittis eu vestibulum metus. Curabitur eget ex sit amet arcu porta mollis in nec lectus. Nullam est sapien, pharetra a viverra sit amet, fermentum placerat elit. Nullam eget sem hendrerit, viverra libero eleifend, porta sapien. Suspendisse augue ligula, finibus ac ex ac, semper convallis tellus. Donec commodo vestibulum velit, vitae tempor velit sodales eget. Donec suscipit tristique enim, eget congue dui consectetur ac. In ac sodales dui, suscipit porttitor lectus. Sed porttitor lacus quis ipsum feugiat, et sollicitudin urna sagittis. In euismod erat id purus tristique, a luctus quam congue. In hac habitasse platea dictumst. Vivamus dapibus lorem sit amet tortor cursus ultrices. Pellentesque volutpat hendrerit condimentum. Donec sed semper quam. Mauris vel viverra diam. Fusce bibendum quam ac maximus efficitur.</p>\r\n\r\n<p>Aenean interdum interdum odio, in vestibulum nunc fermentum tincidunt. Nulla sagittis ultrices risus, et porta tellus porta at. Donec vulputate arcu sit amet risus maximus, non ultricies neque sodales. Donec at massa tincidunt, elementum tellus quis, condimentum dui. Ut ornare tortor in tincidunt finibus. Vestibulum fringilla vehicula felis ut consequat. Mauris dapibus nulla et arcu ullamcorper feugiat.</p>\r\n\r\n<p>Cras faucibus arcu risus, sit amet blandit enim facilisis ut. Duis arcu tellus, vehicula non tortor ut, sagittis sodales eros. Quisque at odio in lorem consectetur fringilla vitae id ante. Curabitur eget tortor eu dui hendrerit iaculis. Cras dapibus nunc maximus, tincidunt odio id, ultrices arcu. Cras cursus magna ornare odio aliquam, nec molestie sapien congue. Nulla commodo suscipit felis. Nulla eu lobortis sem. Nullam egestas dapibus arcu. Nam fermentum est et ligula fermentum, eget sodales eros finibus. Phasellus venenatis libero a sapien ultrices semper. Pellentesque et tellus metus. Ut eleifend erat lacus, sed consequat elit pharetra quis. Suspendisse ante neque, consequat a nisi nec, cursus ullamcorper mi. Duis eget nulla leo.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 1px; top: -4.8px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', 12, 1, 'lorem-ipsum1', 'Mehmet Parlak', NULL, '2020-08-16 21:00:00', '2020-08-22 20:12:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0:pasif 1:aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `slider_image`, `slider_slug`, `slider_order`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Birinci Slider12', 'sliderImages/birinci-slider12.jpg85', 'birinci-slider12', 0, 1, '2020-08-13 18:12:50', '2020-08-22 19:56:11', NULL),
(7, 'İkinci Slider22', 'sliderImages/ikinci-slider22.jpg90', 'ikinci-slider22', 1, 1, '2020-08-13 18:13:27', '2020-08-22 19:56:20', NULL),
(8, 'Üçüncü Slider', 'sliderImages/ucuncu-slider.png10', 'ucuncu-slider', 2, 1, '2020-08-14 16:33:56', '2020-08-22 19:56:37', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `github`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/prlkmehmet/', 'https://www.linkedin.com/in/mehmet-parlak/', 'https://www.youtube.com/', 'https://github.com/MHMTTPRLK', '2020-08-16 21:00:00', '2020-08-16 18:28:49');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_id_foreign` (`category_id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
