-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 01:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus-sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `rak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `kode_buku`, `isbn`, `judul`, `slug`, `penerbit`, `pengarang`, `category_id`, `jumlah`, `rak`, `image`, `created_at`, `updated_at`) VALUES
(1, 'BK0001', '9788925285641', 'One Piece', 'one-piece', 'Gramedia', 'Echiiro Oda', 1, 1, 'Komik', 'assets/gallery/DzYdb7nkXbuJS3zj3yyb4sxts3zjz9p50oZToKLq.jpg', '2022-02-03 08:56:34', '2022-04-01 22:49:25'),
(2, 'BK0002', '9781593077440', 'Berserk', 'berserk', 'Elex Media', 'Kentaro Miura', 1, 2, 'Komik', 'assets/gallery/OpvAMlptTeTcTAPAzXeABEQYEh2BbOBFVpUPQpND.jpg', '2022-02-03 08:57:00', '2022-03-13 00:40:21'),
(3, 'BK0003', '9786020287256', 'Crayon sinchan 46', 'crayon-sinchan-46', 'Appolo-surabaya', 'Lusiana wijaya', 1, 1, 'Komik', 'assets/gallery/x7eTiioXkc4hL8yCUtTmZWPdA6LnK04ncoAKa5KA.jpg', '2022-02-04 12:11:43', '2022-03-23 02:35:33'),
(4, 'BK0004', NULL, 'Seribu Daun', 'seribu-daun', 'I Gusti Made Dwi Wiguna', 'I Gusti Made Dwi Wiguna', 3, 0, 'Dongeng', 'assets/gallery/cb3Sc5AlnCu424zicpiV7CItKJyANApOm7QrGI98.jpg', '2022-02-05 10:40:24', '2022-03-17 03:15:03'),
(5, 'BK0005', '9780439684026', 'Has a Heart (Magic School Bus)', 'has-a-heart-magic-school-bus', 'Anne Capeci', 'Anne Capeci', 5, 0, 'Education', 'assets/gallery/c1YMk7AcCK7x9Q1E5wfxogPR4JyKO8ULimp2VTLq.jpg', '2022-02-05 10:43:41', '2022-03-22 03:25:01'),
(6, 'BK0006', '9781407114644', 'Diplodocus', 'diplodocus', 'Helen Greathead', 'Helen Greathead', 4, 0, 'Encyclopedia', 'assets/gallery/LUxwLruOMLtGjCb0hsWkW55CODXkgeRBIaQp6bba.jpg', '2022-02-05 10:46:56', '2022-02-12 11:57:22'),
(7, 'BK0007', '9781426320873', 'Weird But True 7: 300 Outrageous Facts', 'weird-but-true-7-300-outrageous-facts', 'National Geographic Children\'s Books', 'National Geographic Kids', 4, 0, 'Encyclopedia', 'assets/gallery/KripJQMvQSGlkOQsEzzDWvL6j4V1DIw7iZlJL2w0.jpg', '2022-02-05 10:50:21', '2022-02-13 09:30:46'),
(8, 'BK0008', '9780714130378', 'Fantastic Mummies', 'fantastic-mummies', 'British Museum Pubns Ltd', 'John H. Taylor', 4, 1, 'Encyclopedia', 'assets/gallery/Yb53nuSko2nX22KI5REgle8V8BD4tAPWTjbHPBQb.jpg', '2022-02-05 10:52:34', '2022-03-11 11:00:20'),
(9, 'BK0009', '9781426302862', 'Sharks (National Geographic Readers) (National Geographic Kids Readers: Level 2)', 'sharks-national-geographic-readers-national-geographic-kids-readers-level-2', 'National Geographic Society', 'Anne Schreiber', 4, 1, 'Encyclopedia', 'assets/gallery/NTwOxRnaZ7AHDyMlOUGIEsqz6elHw8LTPjihwjmn.jpg', '2022-02-05 10:58:44', '2022-02-05 10:58:44'),
(10, 'BK0010', '9780670913503', 'Hairy Maclary', 'hairy-maclary', 'Tricycle Press', 'Lynley Dodd', 6, 0, 'Fable', 'assets/gallery/zyvxyzIM4lJpaA1R2BXEvgokIKUHZWAbetNmNE8P.jpg', '2022-02-05 11:02:21', '2022-02-23 18:20:37'),
(11, 'BK0011', '9781426308512', 'National Geographic Readers: Spiders', 'national-geographic-readers-spiders', 'National Geographic Kids', 'Laura F. Marsh', 4, 1, 'Encyclopedia', 'assets/gallery/MByNg2PQ84kE6eejVfuTRt2R5l9elfFosyW0wEFP.jpg', '2022-02-05 11:04:24', '2022-02-05 11:04:24'),
(12, 'BK0012', '9780140367829', 'Aladdin and Other Tales from the Arabian Nights (Puffin Classics)', 'aladdin-and-other-tales-from-the-arabian-nights-puffin-classics', 'Puffin Books', 'N. J. Dawood', 2, 1, 'Novel', 'assets/gallery/ox9nWBxtR6T3IzOQ5UicIpqPHg4S6wtWbTAWMyI4.jpg', '2022-02-05 11:07:07', '2022-02-05 11:07:07'),
(13, 'BK0013', '9781593699536', 'Find Your Way', 'find-your-way', 'American Girl', 'Kristi Thom', 5, 1, 'Education', 'assets/gallery/mSSNvaiBrVDnHc8P52WAT3HfhU4MYVuZ48q2kwtK.jpg', '2022-02-05 11:11:36', '2022-03-16 23:59:34'),
(14, 'BK0014', NULL, 'Noah Board Book', 'noah-board-book', 'Bendon Publishing International', 'Bendon', 3, 1, 'Fairytale', 'assets/gallery/DLIKEgWyEQhQjO3WKZ6FQCGhm3ltZuGXi0mwqacE.jpg', '2022-02-05 11:13:58', '2022-02-05 11:13:58'),
(15, 'BK0015', NULL, 'The Arabian Nights', 'the-arabian-nights', 'Octopus Books', 'Sheila Schwartz', 3, 1, 'Fairytale', 'assets/gallery/qXxAX2wUuVVQFrPclLbeMIyYuiGcVHnKHgZqXKrR.jpg', '2022-02-05 11:17:33', '2022-02-18 11:27:59'),
(16, 'BK0016', NULL, 'Shirley Barber S Elfensprookje De Elfenkokkin', 'shirley-barber-s-elfensprookje-de-elfenkokkin', 'Nederlands', 'Onbekend', 3, 0, 'Fairytale', 'assets/gallery/y2lZYln6sIukM25YIQQqgwepJR4hY9Ow5qmv4Pm0.jpg', '2022-02-05 11:20:38', '2022-02-13 17:55:34'),
(17, 'BK0017', NULL, 'A Sparkle Book: Beautiful Butterflies', 'a-sparkle-book-beautiful-butterflies', 'JG Kids', 'The Book Company Editorial', 3, 2, 'Fairytale', 'assets/gallery/RFDxleKplF5qcc9YVf2Eo7EWCskMmklwPIKZYgfF.jpg', '2022-02-05 11:23:39', '2022-03-17 00:01:50'),
(18, 'BK0018', NULL, 'Twinkle, Twinkle, Little Star: Sing Along With Me!', 'twinkle-twinkle-little-star-sing-along-with-me', 'Nosy Crow', 'Yu-hsuan Huang', 5, 1, 'Education', 'assets/gallery/y4eIlUyNPHI6vHGO31c9lOjZ54Hq0FRclTgqWsUR.jpg', '2022-02-05 11:27:07', '2022-04-01 23:06:22'),
(19, 'BK0019', NULL, 'Hello Pooh, Hello Piglet!', 'hello-pooh-hello-piglet', 'Methuen young books', 'A. A. Milne', 3, 1, 'Fairytale', 'assets/gallery/tr1MTxefQupwnKx5LNfGAyQGuut4g5gJbB5fZYqm.jpg', '2022-02-05 11:29:16', '2022-02-05 11:29:16'),
(20, 'BK0020', NULL, 'Barney:Super Drum Songs', 'barneysuper-drum-songs', 'Publications International', 'Louis Weber', 5, 0, 'Education', 'assets/gallery/Gykh8qQem0V5ZYnAp3JUOH8ATvGwranI4LknQRPP.jpg', '2022-02-05 11:34:14', '2022-02-13 17:54:15'),
(21, 'BK0021', NULL, 'All Because of a Cup of Coffee', 'all-because-of-a-cup-of-coffee', 'Scholastic', 'Geronimo Stilton', 6, 0, 'Fable', 'assets/gallery/dutT3S7IagkOTkeI8ttPPp5RZ2x1D4qtOXQtBRgt.jpg', '2022-02-05 11:38:29', '2022-03-17 03:18:14'),
(22, 'BK0022', NULL, 'The Mouse Island Marathon', 'the-mouse-island-marathon', 'Scholastic', 'Geronimo Stilton', 6, 1, 'Fable', 'assets/gallery/ntvqMyNYyPXjmUqgmKHGUxOSixKuU7H78npw8I7F.jpg', '2022-02-05 11:40:11', '2022-02-05 11:40:11'),
(23, 'BK0023', NULL, 'Windy Day Fairy', 'windy-day-fairy', 'Brimax', 'Brimax', 3, 1, 'Fairytale', 'assets/gallery/tBqlwON29STCtFkq0ycJxOLXLiLYO9lh2LXcWqnM.jpg', '2022-02-05 11:42:29', '2022-03-12 11:35:47'),
(24, 'BK0024', NULL, 'Horrible Histories Measly Middle Ages', 'horrible-histories-measly-middle-ages', 'Scholastic', 'Martin Brown', 5, 1, 'Education', 'assets/gallery/l2jxQCZoSl8Pra7ne6lk1CUtZ1wFLDo3w4M2LmAX.jpg', '2022-02-05 11:45:05', '2022-02-05 11:45:05'),
(25, 'BK0025', NULL, 'Doing My Own Thing - Endeavour Reading Programme Book 17', 'doing-my-own-thing-endeavour-reading-programme-book-17', 'AbeBooks', 'Laura Books', 2, 1, 'Novel', 'assets/gallery/PyXjca8k0mEbuchFGqwOsS25g1LngYruwdQUCivv.jpg', '2022-02-05 11:51:25', '2022-02-05 11:51:25'),
(26, 'BK0026', NULL, 'Over 1000 Fantastic Earth Facts', 'over-1000-fantastic-earth-facts', 'Miles Kelly', 'Miles Kelly', 4, 1, 'Encyclopedia', 'assets/gallery/uG0sUzWhLu82LC7ClKWu2rs8PloxQp2hBaKrii49.jpg', '2022-02-05 11:55:38', '2022-03-12 11:35:40'),
(27, 'BK0027', NULL, 'THE NEW BIG BROTHER', 'the-new-big-brother', 'Generic', 'Generic', 7, 0, 'Magazine', 'assets/gallery/6XJvfeUxwtuvzWaMlmy3eduApA4ELKQ6xy0s1BNU.jpg', '2022-02-05 11:58:44', '2022-03-22 03:24:45'),
(28, 'BK0028', NULL, 'Pirates: Raiders of the High Seas (DK Readers Level 4)', 'pirates-raiders-of-the-high-seas-dk-readers-level-4', 'DK Children', 'Christopher Maynard', 4, 1, 'Encyclopedia', 'assets/gallery/rzJ7YRfx8yXigLDUtbVmZ7rik19skvuAHLkYr6QG.jpg', '2022-02-05 12:01:40', '2022-03-14 11:29:33'),
(29, 'BK0029', NULL, 'The Magic Fish', 'the-magic-fish', 'Scholastic', 'Freya Littledale', 3, 1, 'Fairytale', 'assets/gallery/29pi3wF82A4s0qlRE060loU7Y9iI4hx77KZDdlzO.jpg', '2022-02-05 12:04:25', '2022-02-05 12:04:25'),
(30, 'BK0030', NULL, 'Big Nate and Friends', 'big-nate-and-friends', 'Andrews McMeel Publishing', 'Lincoln Peirce', 1, 1, 'Comic', 'assets/gallery/pKrpTEZ1kPPr9wZdlhepkC9IQdt9aeerrvgmcNFL.jpg', '2022-02-05 12:06:58', '2022-02-05 12:06:58'),
(31, 'BK0031', NULL, 'Persephone the Daring', 'persephone-the-daring', 'Aladdin', 'Joan Holub', 2, 1, 'Novel', 'assets/gallery/9SNzv9VgMK6SCU3I5ZdsztwxaEuZ9J16A40rNtEv.jpg', '2022-02-05 12:12:38', '2022-02-05 12:12:38'),
(32, 'BK0032', NULL, 'Read with Me Tom\'s Storybook', 'read-with-me-toms-storybook', 'Ladybird', 'Ladybird', 3, 1, 'Fairytale', 'assets/gallery/sFVLSKOEQ0HYIWs5WC5ubNMhEFBuLl52rByIexqQ.jpg', '2022-02-05 12:15:33', '2022-02-05 12:15:33'),
(33, 'BK0033', NULL, 'Racing in the Rain: My Life as a Dog', 'racing-in-the-rain-my-life-as-a-dog', 'HarperCollins', 'Garth Stein', 2, 1, 'Novel', 'assets/gallery/ZZGpexHUV2uCAesCyAjr7JyrW3CzUxuhM6UPKQeP.jpg', '2022-02-05 12:18:01', '2022-02-05 12:18:01'),
(34, 'BK0034', NULL, 'The Pearls of Lutra', 'the-pearls-of-lutra', 'Red Fox', 'Brian Jacques', 2, 1, 'Novel', 'assets/gallery/adeywZZa6WXIdohrmIRmutdUOjTJaRknDH4D2eLU.jpg', '2022-02-05 12:23:13', '2022-02-05 12:23:13'),
(35, 'BK0035', NULL, 'All Tutus Should Be Pink', 'all-tutus-should-be-pink', 'Cartwheel Books', 'Sheri Brownrigg', 3, 1, 'Fairytale', 'assets/gallery/4EiPICCSgToruXCgPKv8wqqTSl01X6o6vbzrmbjm.jpg', '2022-02-05 12:29:46', '2022-02-05 12:29:46'),
(36, 'BK0036', NULL, 'The Walker Fairy Tale Library Bk.3', 'the-walker-fairy-tale-library-bk3', 'Walker Books', 'Sarah Hayes', 3, 1, 'Fairytale', 'assets/gallery/mFl4AQjxdQfrY9CfgvxdlVtd42ScoAxlejRoSfPX.jpg', '2022-02-05 12:35:06', '2022-02-05 12:35:06'),
(37, 'BK0037', NULL, 'Embara Embun Mimpi', 'embara-embun-mimpi', 'Agil Karya Group', 'Ira Diana', 8, 1, 'Antology', 'assets/gallery/jE5n1vVj1o6VcecAQfzzz7Wdfhu9OovEzJlP3Qc9.jpg', '2022-02-05 12:41:25', '2022-02-05 12:41:25'),
(38, 'BK0038', NULL, 'Saturday', 'saturday', 'Anchor', 'Ian McEwan', 2, 1, 'Novel', 'assets/gallery/90Cm8y5qptzvMRN2mPKqVh1uYZzPw3rwclzrlqCp.jpg', '2022-02-05 12:42:59', '2022-02-05 12:42:59'),
(39, 'BK0039', NULL, 'The Dracula Dossier', 'the-dracula-dossier', 'HarperCollins', 'James Reese', 2, 1, 'Novel', 'assets/gallery/cUeEXxkCGfWAQyPByVAm7Kv8YpUz9JFilXdBdkef.jpg', '2022-02-05 12:44:24', '2022-03-17 00:02:16'),
(40, 'BK0040', NULL, 'Amulet #8', 'amulet-8', 'Graphix', 'Kazu Kibuishi', 1, 1, 'Comic', 'assets/gallery/95PBHJ5Cxm8uqPDedfFr1NC48JXA5MSNMxVMRBLO.jpg', '2022-02-05 12:46:32', '2022-02-05 12:46:32'),
(41, 'BK0041', NULL, 'Real Pigeons Eat Danger', 'real-pigeons-eat-danger', 'Random House Books for Young Readers', 'Andrew McDonald', 1, 1, 'Comic', 'assets/gallery/XdM6LX911nUUC7JLGv1JnbJEwdlUFq5cPbP5TTii.jpg', '2022-02-05 12:48:15', '2022-02-05 12:48:15'),
(42, 'BK0042', NULL, 'Dog Man: Lord of the Fleas', 'dog-man-lord-of-the-fleas', 'Graphix', 'Dav Pilkey', 1, 1, 'Comic', 'assets/gallery/wAXmAb3xZpObvy7OegQspYmiRcypUJPa5whPKy26.jpg', '2022-02-05 12:50:18', '2022-02-05 12:50:18'),
(43, 'BK0043', NULL, 'Operation Red Jericho', 'operation-red-jericho', 'Candlewick Press', 'Joshua Mowll', 2, 1, 'Novel', 'assets/gallery/8s48log6nTnVWoRRnk89zfbKf1QpmzMtI4vsRYgP.jpg', '2022-02-05 12:52:24', '2022-02-05 12:52:24'),
(44, 'BK0044', NULL, 'Polar Lands', 'polar-lands', 'Watts Books', 'Joy Palmer', 4, 1, 'Encyclopedia', 'assets/gallery/CutNpyA4rqAAaNxRPGbPwGG8owL0X35D6TCi1i4Y.jpg', '2022-02-05 12:55:01', '2022-02-05 12:55:01'),
(45, 'BK0045', NULL, 'Ants, Bees and Wasps', 'ants-bees-and-wasps', 'Chrysalis Education', 'Sally Morgan', 4, 1, 'Encyclopedia', 'assets/gallery/DAzbRLjgEi0gjzUZS3KZJtEhxWlrEDYKXGKfXQ47.jpg', '2022-02-05 12:56:59', '2022-02-05 12:56:59'),
(46, 'BK0046', NULL, 'Animals Under the Sea', 'animals-under-the-sea', 'Kingfisher', 'Deborah Chancellor', 4, 1, 'Encyclopedia', 'assets/gallery/aM2pVZPLV4pXrXxjQHWZs7jqlQJ3JdqQUtX9ZtqC.jpg', '2022-02-05 12:58:55', '2022-02-05 12:58:55'),
(47, 'BK0047', NULL, 'Mythical Monsters', 'mythical-monsters', 'Tangerine Press', 'Chris McNab', 4, 1, 'Encyclopedia', 'assets/gallery/I92PrgstoMoFbo5F0MS9Btv9gOma2K2Rzp0zcs1S.jpg', '2022-02-05 13:02:03', '2022-02-05 13:02:03'),
(48, 'BK0048', NULL, 'The Turbulent Term of Tyke Tiler', 'the-turbulent-term-of-tyke-tiler', 'G K Hall & Co', 'Gene Kemp', 2, 1, 'Novel', 'assets/gallery/CxVoAKgCHsuLGGdER6TxcSlslzMFaz4bALtsRSEt.jpg', '2022-02-05 13:07:16', '2022-03-22 03:27:12'),
(49, 'BK0049', NULL, 'Shopaholic Takes Manhattan', 'shopaholic-takes-manhattan', 'Dell Book', 'Sophie Kinsella', 2, 1, 'Novel', 'assets/gallery/zbFopk2oSLHvfXJkHG5CGpJJUe2Fs8upEwOkiWXF.jpg', '2022-02-05 13:09:42', '2022-02-05 13:09:42'),
(50, 'BK0050', NULL, 'Tiga Manula Jalan-Jalan ke Selatan Jawa', 'tiga-manula-jalan-jalan-ke-selatan-jawa', 'Kepustakaan Populer Gramedia', 'Benny Rachmadi', 1, 1, 'Comic', 'assets/gallery/Jz2U3Sja6TOa7B7RF2nG9oRxor6XDCH0F7pKEFF4.jpg', '2022-02-05 13:11:52', '2022-02-05 13:11:52'),
(51, 'BK0051', NULL, 'Watch Out, Big Bro\'s Coming', 'watch-out-big-bros-coming', 'Paw Prints', 'Jez Alborough', 6, 1, 'Fable', 'assets/gallery/HO8uIEhMkrENJe2AqCrgvdghR9lqv4w36ZJY8VZW.jpg', '2022-02-05 13:13:34', '2022-02-05 13:13:34'),
(52, 'BK0052', NULL, 'Oh, Say Can You Say?', 'oh-say-can-you-say', 'Random House Books for Young Readers', 'Dr. Seuss', 6, 0, 'Fable', 'assets/gallery/nOHYXqhqYYeG9nqlZnQ40HPivVv1ztVWM0nzq02C.jpg', '2022-02-05 13:15:36', '2022-03-20 18:34:41'),
(53, 'BK0053', NULL, 'A Silly Snowy Day', 'a-silly-snowy-day', 'Scholastic', 'Michael Coleman', 6, 1, 'Fable', 'assets/gallery/rSTdYb3SkOlgFJ8iz3Y7gI1rHgAuQ9v5M0gVzd78.jpg', '2022-02-05 13:17:09', '2022-02-05 13:17:09'),
(54, 'BK0054', NULL, 'Harry Potter', 'harry-potter', 'Gramedia', 'J.K Rowling', 2, 2, 'Novel', 'assets/gallery/Q7ee6jjDNyMGg3HFQ8CpJ6bL9LD2JO8Ds8B0N30z.jpg', '2022-02-07 11:17:57', '2022-02-07 11:18:22'),
(55, 'BK0055', NULL, 'Naruto Shippuden', 'naruto-shippuden', 'Gramedia', 'Masashi Kishimoto', 1, 2, 'Komik', 'assets/gallery/TUq38jMWxBXD4w2UYgjG8F7DpXvX8iczsi4DFYoZ.jpg', '2022-02-08 01:00:50', '2022-02-08 01:00:50'),
(56, 'BK0056', '9781863117081', 'New Wave Maths - Book D', 'new-wave-maths-book-d', 'R.I.C. Publications', 'R.I.C. Publications', 5, 1, 'Education', 'assets/gallery/4FIx3tSvSyfI6GCj9SRsUAyoOM2Nm4tj0ISB5BXd.jpg', '2022-02-08 02:18:30', '2022-02-08 02:18:30'),
(57, 'BK0057', '9780862729097', 'I Wonder Why Camels Have Humps', 'i-wonder-why-camels-have-humps', 'Kingfisher', 'Anita Ganeri', 4, 1, 'Encyclopedia', 'assets/gallery/F9W4E0JGKUl25pNRHyojjZL9Sss0Ukg9A0ZP1Qva.jpg', '2022-02-08 02:24:50', '2022-02-08 02:24:50'),
(58, 'BK0058', '9781903840436', 'Mouse Shops: Grocery Shop', 'mouse-shops-grocery-shop', 'Michael O\'Mara Books', 'Michelle Cartlidge', 6, 1, 'Fable', 'assets/gallery/1e04IWeU4SUMUeq47cFcNwLqeg8p06tTPCf6jGP6.jpg', '2022-02-08 02:28:41', '2022-02-08 02:28:41'),
(59, 'BK0059', NULL, 'Mevrouwtje Koppig', 'mevrouwtje-koppig', 'Uitgeverij Rainbow bv', 'Roger Hargreaves', 3, 1, 'Fairytale', 'assets/gallery/mPd6c59p7loc7XvUUzX5ghHykXIly1XMPcO1PRhK.jpg', '2022-02-08 02:31:27', '2022-02-08 02:31:27'),
(60, 'BK0060', '9783473331703', 'Ein Osterei für den kleinen Hasen', 'ein-osterei-fur-den-kleinen-hasen', 'Ravensburger Buchverlag', 'Kleine Ravensburger', 6, 1, 'Fable', 'assets/gallery/XqsahZinEhHk9XazZS6GjGGirA4kdgGd32oEmhLs.jpg', '2022-02-08 02:37:28', '2022-02-08 02:37:28'),
(61, 'BK0061', '9781408315231', 'Beast Quest: 60: Doomskull the King of Fear', 'beast-quest-60-doomskull-the-king-of-fear', 'Orchard Books', 'Adam Blade', 2, 1, 'Novel', 'assets/gallery/Kj1idizXgzfAkXBALUFWbF5BetkyV6xQoInVGuww.jpg', '2022-02-08 02:40:33', '2022-02-08 02:40:33'),
(62, 'BK0062', '9781442450530', 'No Trick-or-Treating!: (You\'re Invited to a Creepover Book 9)', 'no-trick-or-treating-youre-invited-to-a-creepover-book-9', 'Simon Spotlight', 'P. J. Night', 2, 1, 'Novel', 'assets/gallery/SkzMika2tesLG3nVZGQl91uUPd1Jjtv73q0LWxcB.jpg', '2022-02-08 02:43:35', '2022-02-08 02:43:35'),
(63, 'BK0063', NULL, 'Fire Team Adventure!', 'fire-team-adventure', 'Ladybird Books', 'LEGO Group', 3, 1, 'Fairytale', 'assets/gallery/wG9EAKaqSXEjWGjZiXnHxyBy4XX7lcE2RZS5lHk9.jpg', '2022-02-08 02:45:43', '2022-02-08 02:45:43'),
(64, 'BK0064', NULL, 'Julie of the Wolves', 'julie-of-the-wolves', 'HarperCollins', 'Jean Craighead George', 2, 1, 'Novel', 'assets/gallery/HIGIeareq2VY9xd3D8RztoIPyCAAAJYLKYfOzEPX.jpg', '2022-02-08 02:53:38', '2022-02-08 02:53:38'),
(65, 'BK0065', NULL, 'Thor Junior Novel', 'thor-junior-novel', 'Marvel Press', 'Elizabeth Rudnick', 2, 1, 'Novel', 'assets/gallery/Molq3QQWZCk4yDeABx1ZFTL4u5ad0mzdE8VpIKfC.jpg', '2022-02-08 02:56:17', '2022-02-08 02:56:17'),
(66, 'BK0066', NULL, 'I Can Tell the Time', 'i-can-tell-the-time', 'World International Publishing', 'Glynis Langley', 3, 1, 'Fairytale', 'assets/gallery/tdLfRWFFGCNpCZVB1Fpjc0GlXzz4m070yCyMCwDC.jpg', '2022-02-08 02:59:55', '2022-02-08 02:59:55'),
(67, 'BK0067', '9782211071611', 'Alice racontee aux petits', 'alice-racontee-aux-petits', 'EDL', 'Lewis Carroll', 2, 1, 'Novel', 'assets/gallery/KhkSykiH545LmzVRnrESnlhUBAwMwC0jqGxssrC8.jpg', '2022-02-08 03:01:46', '2022-02-08 03:02:53'),
(68, 'BK0068', NULL, 'Caperucita Roja', 'caperucita-roja', 'TODOLIBRO', 'Equipo de Todolibro', 3, 0, 'Fairytale', 'assets/gallery/bev4UJZ6j5cuN4fXHexUs6h22V1xA5OaobKfE8MT.jpg', '2022-02-08 03:07:31', '2022-03-22 03:48:25'),
(69, 'BK0069', '9782013943468', 'TIM DETECTIVE', 'tim-detective', 'DEUX COQS D OR', 'Pierre Probst', 6, 1, 'Fable', 'assets/gallery/mAu0VYet9IE10cJXkrTbfZgwd0Put6K6mizm5dTZ.jpg', '2022-02-08 03:09:06', '2022-02-08 03:09:44'),
(70, 'BK0070', NULL, 'Beast Quest 31 : Komodo the Lizard King', 'beast-quest-31-komodo-the-lizard-king', 'Orchard Books', 'Adam Blade', 2, 1, 'Novel', 'assets/gallery/taoc7FYrMSprXZYAlWo9I7UWl10j0MtXj4rmVt7a.jpg', '2022-02-08 03:12:24', '2022-02-08 03:12:24'),
(71, 'BK0071', '97800088164621', 'The Midnight Gang', 'the-midnight-gang', 'HarperCollins', 'David Walliams', 2, 1, 'Novel', 'assets/gallery/78bmvof3r9FaP1TwPZKPgkuLaOyKdiLOvRCjlSKS.jpg', '2022-02-08 03:16:44', '2022-02-08 03:16:44'),
(72, 'BK0072', '978-1442482357', 'Your Worst Nightmare : (You\'re Invited to a Creepover Book 17)', 'your-worst-nightmare-youre-invited-to-a-creepover-book-17', 'Simon Spotlight', 'P. J. Night', 2, 1, 'Novel', 'assets/gallery/74WngD1eshnRXZrhEWEnfWgC5EwacAeYnXYynk1V.jpg', '2022-02-08 03:19:35', '2022-02-08 03:19:35'),
(73, 'BK0073', '9781407103819', 'Amulet #1 : The Stonekeeper', 'amulet-1-the-stonekeeper', 'Graphix', 'Kazu Kibuishi', 1, 1, 'Comic', 'assets/gallery/U6XnIqqPTHvTeKGi6oyPV324Hs0gao2bW0vDhcn1.jpg', '2022-02-08 03:22:05', '2022-02-08 03:22:05'),
(74, 'BK0074', '9786027310414', 'Walking On The Ceiling', 'walking-on-the-ceiling', 'Lit Hidup', 'Dian Hadiani', 3, 1, 'Fairytale', 'assets/gallery/1FUiXIc2qWEPUcbHXh8bFOOIGnJGLg3EcLTihnY6.jpg', '2022-02-08 03:26:00', '2022-02-08 03:26:00'),
(75, 'BK0075', '9786023945160', 'Legenda Pulau Senua', 'legenda-pulau-senua', 'Bhuana Ilmu Populer', 'Dian K.', 3, 1, 'Fairytale', 'assets/gallery/OG7lQCDxfSLFexP8hefVbvOgSoWGyL297neJOao5.jpg', '2022-02-08 03:31:22', '2022-02-08 03:31:22'),
(76, 'BK0076', '9780989348027', 'Alistair The Armadillo', 'alistair-the-armadillo', 'Armadillo Press Children', 'Mike Brumby', 6, 1, 'Fable', 'assets/gallery/f0sjC8KHvV0jj2ahiIRUB126WdXkhpgA84kugiIy.jpg', '2022-02-08 03:35:30', '2022-02-08 03:35:30'),
(77, 'BK0077', '9782745927262', 'Dans la cour de l\'école', 'dans-la-cour-de-lecole', 'MILAN', 'Christophe Loupy', 5, 1, 'Education', 'assets/gallery/sney1QyAuqVez0EquYe4bE59KdG2irzcBdQA4yRb.jpg', '2022-02-08 03:38:03', '2022-02-08 03:38:03'),
(78, 'BK0078', NULL, 'Maisy\'s World of Animals', 'maisys-world-of-animals', 'Candlewick', 'Lucy Cousins', 4, 1, 'Encyclopedia', 'assets/gallery/q1zoK3PCkdLJXHJFdCspLlJ6lLAyMmAA3zuxgMq4.jpg', '2022-02-08 03:41:38', '2022-02-08 03:41:38'),
(79, 'BK0079', '9781583241141', 'My Desktop Dictionary', 'my-desktop-dictionary', 'World Teachers Press', 'World Teachers Press', 5, 0, 'Education', 'assets/gallery/th0FdeAKrhsnVsj6yv9LmRMOZSZF6B2XffD6dUVn.jpg', '2022-02-08 03:43:09', '2022-03-23 02:34:58'),
(80, 'BK0080', '9781921502040', 'Zac\'s Wild Rescue', 'zacs-wild-rescue', 'Hardie Grant Egmont', 'H. I. Larry', 4, 1, 'Encyclopedia', 'assets/gallery/mJt5cVZsAuWMlfgCc47ffkVGxQiJEsBKN8LPqrjl.jpg', '2022-02-08 03:49:30', '2022-02-08 03:49:30'),
(81, 'BK0081', '9781921417313', 'Zac Power: Volcanic Panic', 'zac-power-volcanic-panic', 'Hardie Grant Children\'s Publishing', 'H. I. Larry', 4, 1, 'Encyclopedia', 'assets/gallery/fUybPcipHzxPSSNaNbn1wOb0Hxl7e38LBIJFJIQC.jpg', '2022-02-08 03:53:34', '2022-02-08 03:53:34'),
(82, 'BK0082', '9780545135702', 'The 39 Clues, Book 3: The Sword Thief', 'the-39-clues-book-3-the-sword-thief', 'Scholastic Audio', 'Peter Lerangis', 2, 1, 'Novel', 'assets/gallery/AM26EsFW4gisziwgwwYN2s3hvxzBzXaL1wVUpgSw.jpg', '2022-02-08 03:55:46', '2022-02-08 03:55:46'),
(83, 'BK0083', NULL, 'The 39 Clues, Book 4: Beyond the Grave', 'the-39-clues-book-4-beyond-the-grave', 'Scholastic Audio', 'Jude Watson', 2, 1, 'Novel', 'assets/gallery/azaVqX2Fou2MNRFjINSSnNPlsx2jGPlLOkX5LrF9.jpg', '2022-02-08 03:57:42', '2022-02-08 03:57:42'),
(84, 'BK0084', NULL, 'Dork Diaries Puppy Love', 'dork-diaries-puppy-love', 'Simon & Schuster Childrens Books', 'Rachel Renée Russell', 3, 1, 'Fairytale', 'assets/gallery/dV7PjlZfEObCgX4PxImH0tQYf06GsVcFmyNdccFD.jpg', '2022-02-08 03:59:10', '2022-02-08 03:59:10'),
(85, 'BK0085', NULL, 'Dork Diaries Drama Queen', 'dork-diaries-drama-queen', 'SIMON & SCHUSTER', 'Rachel Renée Russell', 3, 1, 'Fairytale', 'assets/gallery/Bbo9X72dP2EF5wGeIkZrSQwFyhsmEgnIcKIrJdWD.jpg', '2022-02-08 04:01:28', '2022-02-08 04:01:28'),
(86, 'BK0086', '9780748756445', 'It\'s Pay Back Time', 'its-pay-back-time', 'Nelson Thornes', 'Jan Weeks', 3, 1, 'Fairytale', 'assets/gallery/cB4Bq2VvmFOoso978odAjwNbxawnmHiJQAmx3ce9.jpg', '2022-02-08 04:08:09', '2022-02-08 04:08:09'),
(87, 'BK0087', NULL, 'Isabella', 'isabella', 'Blake Education', 'Christopher Stitt', 5, 1, 'Education', 'assets/gallery/GooGBqbGD5XicIjBnSpdtAlNkGihnrKv3TfLfqJa.jpg', '2022-02-08 04:10:44', '2022-02-08 04:10:44'),
(88, 'BK0088', NULL, 'Ariel', 'ariel', 'Blake Education', 'Jeni Jones', 5, 1, 'Education', 'assets/gallery/K8BnXP1TyMCtWi6Gs390K6jPSBDXbMPHjXPJ0o5U.jpg', '2022-02-08 04:12:34', '2022-02-08 04:12:34'),
(89, 'BK0089', NULL, 'A Snowy Robin Rescue', 'a-snowy-robin-rescue', 'Scholastic', 'Mary Kelly', 2, 1, 'Novel', 'assets/gallery/ZsZCVVErjnV0xsUunvenq0fW4CqyR8Q1WDyjCQQF.jpg', '2022-02-08 04:14:05', '2022-02-08 04:14:05'),
(90, 'BK0090', NULL, 'Bad Day for Badger', 'bad-day-for-badger', 'Scholastic', 'Sarah Hawkins', 2, 1, 'Novel', 'assets/gallery/rxjnaQIVKd3m4sFXC0e0KZgyxJ0kX1HygQ7U3mEG.jpg', '2022-02-08 04:15:13', '2022-02-08 04:15:13'),
(91, 'BK0091', NULL, 'Lamb All Alone', 'lamb-all-alone', 'Scholastic', 'Katie Davies', 2, 1, 'Novel', 'assets/gallery/Huuz4KOsFYIsNH4Bq6IrBlCwL89CyTekXHDrU5TC.jpg', '2022-02-08 04:17:28', '2022-02-08 04:17:28'),
(92, 'BK0092', NULL, 'Leonardo Da Vinci', 'leonardo-da-vinci', 'Usborne Pub Ltd', 'Karen Ball', 4, 1, 'Encyclopedia', 'assets/gallery/Jxz36b1GVQzkeoL5SSC1ZWIEo2YfYHqcNiUQUfou.jpg', '2022-02-08 04:19:11', '2022-02-08 04:19:11'),
(93, 'BK0093', NULL, 'Jack and the Beanstalk', 'jack-and-the-beanstalk', 'Usborne Publishing', 'Katie Daynes', 3, 1, 'Fairytale', 'assets/gallery/0r0yGaOSgSiWlnz0YNdB5YWO3aphuH3j7RmUrDL8.jpg', '2022-02-08 04:20:32', '2022-02-08 04:20:32'),
(94, 'BK0094', NULL, 'The Adventures of Sinbad the Sailor', 'the-adventures-of-sinbad-the-sailor', 'Usborne Publishing Ltd', 'Katie Daynes', 3, 1, 'Fairytale', 'assets/gallery/w236498FBZXoE89aWp8KRkbLUw6CrXio640KGa31.jpg', '2022-02-08 04:21:57', '2022-02-08 04:21:57'),
(95, 'BK0095', NULL, 'Princess Mirror-Belle and the Flying Horse', 'princess-mirror-belle-and-the-flying-horse', 'Macmillan Children\'s Books', 'Julia Donaldson', 2, 1, 'Novel', 'assets/gallery/ABS7OOTe9HemXHyzPKv25hiOEV8co7WiFKAYzM8g.jpg', '2022-02-08 04:26:24', '2022-02-08 04:26:24'),
(96, 'BK0096', NULL, 'The Desert Princess', 'the-desert-princess', 'Red Fox', 'Katie Chase', 3, 1, 'Fairytale', 'assets/gallery/9Y4ezL7MWRqhcZgxYEoIf3Er36dO1h8UCqpmFIsg.jpg', '2022-02-08 04:27:36', '2022-02-08 04:27:36'),
(97, 'BK0097', NULL, 'Little Miss Not-so-perfect (Summer Camp Secrets)', 'little-miss-not-so-perfect-summer-camp-secrets', 'Usborne Publishing', 'Melissa J. Morgan', 2, 1, 'Novel', 'assets/gallery/Oqno6fk7WFAixwCLGOVHBEvvMuBi072DD66qmNyC.jpg', '2022-02-08 04:29:05', '2022-02-08 04:29:05'),
(98, 'BK0098', NULL, 'Tooth And Nail', 'tooth-and-nail', 'Orion', 'Ian Rankin', 2, 0, 'Novel', 'assets/gallery/BwI2AVfuUS4RMftEviZ5Vmsjd8jqGFCGBsCM4ojl.jpg', '2022-02-08 04:31:33', '2022-02-25 11:01:38'),
(99, 'BK0099', NULL, 'Parsival or a Knight\'s Tale', 'parsival-or-a-knights-tale', 'Pocket Books', 'Richard Monaco', 2, 0, 'Novel', 'assets/gallery/EOWxSKNH0lPunoEneVj2XTDxkrwqkKSFFahnNbck.jpg', '2022-02-08 04:33:06', '2022-02-26 03:39:07'),
(100, 'BK100', NULL, 'A Little Life', 'a-little-life', 'Anchor', 'Hanya Yanagihara', 2, 0, 'Novel', 'assets/gallery/qouT139y5504qOSYZS6XD2iREROQGFL0596qhqnr.jpg', '2022-02-08 04:35:05', '2022-02-25 10:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `kode_kategori`, `nama_kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'CAT0001', 'Comic', 'comic', '2022-02-03 16:55:55', '2022-02-12 19:23:31'),
(2, 'CAT0002', 'Novel', 'novel', '2022-02-04 20:10:46', '2022-02-04 20:10:50'),
(3, 'CAT0003', 'Fairytale', 'fairytale', '2022-02-05 18:52:53', '2022-02-05 18:52:53'),
(4, 'CAT0004', 'Encyclopedia', 'encyclopedia', '2022-02-05 18:53:08', '2022-02-05 18:53:08'),
(5, 'CAT0005', 'Education', 'education', '2022-02-05 18:53:53', '2022-02-05 18:53:53'),
(6, 'CAT0006', 'Fable', 'fable', '2022-02-05 19:01:37', '2022-02-05 19:01:37'),
(7, 'CAT0007', 'Magazine', 'magazine', '2022-02-05 19:57:22', '2022-02-05 19:57:22'),
(8, 'CAT0008', 'Anthology', 'anthology', '2022-02-05 20:36:17', '2022-02-05 20:36:17'),
(9, 'CAT0009', 'Digital', 'digital', '2022-02-08 00:59:58', '2022-02-08 00:59:58'),
(13, 'CAT0010', 'Fiction', 'fiction', '2022-03-11 04:29:09', '2022-03-11 04:29:09'),
(14, 'CAT0011', 'Science', 'science', '2022-03-11 04:29:19', '2022-03-11 04:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_peminjaman` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `members_id` bigint(20) UNSIGNED DEFAULT NULL,
  `books_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `keadaan` enum('Sedang diproses','Dipinjam','Dikembalikan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sedang diproses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `kode_peminjaman`, `members_id`, `books_id`, `user_id`, `tgl_pinjam`, `tgl_pengembalian`, `keadaan`, `created_at`, `updated_at`) VALUES
(30, 'LN0015', 21, 48, NULL, '2022-03-17', '2022-03-24', 'Dikembalikan', '2022-03-16 23:57:02', '2022-03-22 03:27:12'),
(31, 'LN0016', NULL, 3, 7, '2022-03-18', '2022-03-25', 'Dikembalikan', '2022-03-17 00:05:01', '2022-03-23 02:35:33'),
(32, 'LN0017', NULL, 18, 7, '2022-03-18', '2022-03-25', 'Dikembalikan', '2022-03-17 00:05:34', '2022-04-01 23:06:22'),
(33, 'LN0018', 14, 4, NULL, '2022-03-18', '2022-03-25', 'Dipinjam', '2022-03-17 03:15:03', '2022-03-17 03:15:03'),
(34, 'LN0019', NULL, 21, 7, '2022-03-18', '2022-03-25', 'Dipinjam', '2022-03-17 03:18:14', '2022-03-22 03:25:41'),
(35, 'LN0020', NULL, 52, 12, '2022-03-21', '2022-03-28', 'Dipinjam', '2022-03-20 18:34:41', '2022-03-23 02:35:19'),
(36, 'LN0021', 29, 27, NULL, '2022-03-22', '2022-03-29', 'Dipinjam', '2022-03-22 03:24:45', '2022-03-22 03:24:45'),
(37, 'LN0022', 2, 5, NULL, '2022-03-22', '2022-03-29', 'Dipinjam', '2022-03-22 03:25:00', '2022-03-22 03:25:00'),
(38, 'LN0023', NULL, 68, 7, '2022-03-22', '2022-03-29', 'Sedang diproses', '2022-03-22 03:48:25', '2022-03-22 03:48:25'),
(39, 'LN0024', 19, 79, NULL, '2022-03-23', '2022-03-30', 'Dipinjam', '2022-03-23 02:34:58', '2022-03-23 02:34:58'),
(40, 'LN0025', NULL, 1, 7, '2022-04-02', '2022-04-09', 'Dipinjam', '2022-04-01 22:49:25', '2022-04-01 23:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_anggota` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jen_kel` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Guru','Siswa','Staff') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` enum('TK','SD','SMP') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `no_anggota`, `nama_anggota`, `jen_kel`, `status`, `kelas`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, '18010709', 'Ainayya Poetri Elshanum', 'Perempuan', 'Siswa', 'SD', '081588769709', '2022-02-06 17:03:00', '2022-03-17 20:54:22'),
(2, '18025021', 'Live Kikumura', 'Laki-Laki', 'Siswa', 'SD', '085569870988', '2022-02-06 17:09:15', '2022-02-06 17:09:15'),
(3, '19033268', 'Seungyeon Jo', 'Laki-Laki', 'Siswa', 'SD', '081657790098', '2022-02-06 17:10:35', '2022-02-06 17:10:35'),
(4, '1006', 'I Ketut Putra', 'Laki-Laki', 'Guru', NULL, '085867735356', '2022-02-06 17:11:44', '2022-02-06 17:11:44'),
(5, '18009608', 'Wende Sanne Heemskerl', 'Perempuan', 'Siswa', 'SD', '083658687098', '2022-02-07 01:29:44', '2022-02-07 01:29:44'),
(6, '1105', 'Ni Luh Puspa', 'Perempuan', 'Staff', NULL, '085146547685', '2022-02-07 01:30:41', '2022-02-07 01:30:41'),
(7, '18008502', 'Alessandra Familiari', 'Perempuan', 'Siswa', 'SMP', '085789843421', '2022-02-07 01:32:46', '2022-02-07 01:32:46'),
(8, '20014311', 'Kiran Benedict Cardamone', 'Laki-Laki', 'Siswa', 'TK', '089455435451', '2022-02-07 01:34:40', '2022-02-07 01:34:40'),
(9, '1002', 'Marilyn Diana', 'Perempuan', 'Guru', NULL, '081547809745', '2022-02-07 01:37:48', '2022-02-07 01:37:48'),
(11, '1101', 'Ni Wayan Arini', 'Perempuan', 'Staff', NULL, '087757543424', '2022-02-07 02:02:14', '2022-03-11 02:49:10'),
(12, '19030339', 'Yoon Dae Hu', 'Laki-Laki', 'Siswa', 'TK', '081345788779', '2022-02-07 02:03:29', '2022-02-07 02:03:29'),
(13, '1004', 'Andini', 'Perempuan', 'Guru', NULL, '083508865234', '2022-02-07 02:04:47', '2022-02-07 02:04:47'),
(14, '18008603', 'Jhon Thomas Garvin', 'Laki-Laki', 'Siswa', 'SD', '083898707896', '2022-02-07 02:07:13', '2022-02-07 02:07:13'),
(15, '1007', 'Asher Michael', 'Laki-Laki', 'Guru', NULL, '081479879805', '2022-02-07 02:08:28', '2022-02-07 02:08:28'),
(16, '1010', 'Honey Cahaya Shorten', 'Perempuan', 'Guru', NULL, '085697987968', '2022-02-07 02:10:23', '2022-02-07 02:10:23'),
(17, '20026425', 'Johannes Alipio', 'Laki-Laki', 'Siswa', 'TK', '083345576767', '2022-02-07 02:11:56', '2022-02-07 11:23:22'),
(18, '20021107', 'Prama Dewastu', 'Laki-Laki', 'Siswa', 'TK', '089424347567', '2022-02-07 02:13:07', '2022-02-07 02:13:07'),
(19, '204028429', 'Yu Jimin', 'Perempuan', 'Siswa', 'TK', '089186783987', '2022-02-08 00:58:52', '2022-02-08 00:59:25'),
(20, '18035345345', 'Stephen Strange', 'Laki-Laki', 'Guru', 'SMP', '082485549054', '2022-02-12 11:44:17', '2022-02-12 11:45:52'),
(21, '1108', 'I Made Muditha', 'Laki-Laki', 'Guru', NULL, '083344953448', '2022-02-25 04:48:14', '2022-02-25 04:48:14'),
(29, '21040343', 'Christian Budiman', 'Laki-Laki', 'Siswa', 'SMP', '3432534534', '2022-03-22 02:55:52', '2022-03-22 02:55:52');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_25_104121_create_members_table', 1),
(6, '2021_12_25_105430_create_categories_table', 1),
(7, '2021_12_25_105610_create_books_table', 1),
(8, '2021_12_31_015032_create_loans_table', 1),
(9, '2021_12_31_023601_create_restores_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restores`
--

CREATE TABLE `restores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loans_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kembali',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restores`
--

INSERT INTO `restores` (`id`, `loans_id`, `tgl_kembali`, `status`, `created_at`, `updated_at`) VALUES
(17, 30, '2022-03-22', 'Kembali', '2022-03-22 03:27:12', '2022-03-22 03:27:12'),
(18, 31, '2022-03-23', 'Kembali', '2022-03-23 02:35:33', '2022-03-23 02:35:33'),
(19, 32, '2022-04-02', 'Kembali', '2022-04-01 23:06:22', '2022-04-01 23:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` enum('USER','ADMIN') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$nLKztZYlRSxZNcJSl2vyAeeqCyyIdHmpp8Bn2yWfDy7IjJCqsStRa', 'ADMIN', NULL, '2022-02-25 04:24:07', '2022-02-25 04:24:07'),
(7, 'User', 'users', 'user@gmail.com', '$2y$10$x94RdyvY2/tzf8ZVf4rW7ey/Np6EzCJJA5/uiiNhLpsoxh2OjN4RW', 'USER', NULL, '2022-03-01 12:46:02', '2022-03-01 12:46:02'),
(12, 'Akagami No Shanks', 'shanks', 'akagami@gmail.com', '$2y$10$uEgkVAyEySQeL3eNcJeviu.DehSP77jdR98iDr4/8th46TWylUNLO', 'USER', NULL, '2022-03-20 18:33:46', '2022-03-20 18:33:46'),
(13, 'Diwantara', 'taraarts', 'diwantara@gmail.com', '$2y$10$rHZygQjzW.bvHhaYwFwAMug5Hc8pnNuNTvF9H.Td3Br.dOm3CJJJe', 'USER', NULL, '2022-03-22 02:42:14', '2022-03-22 02:42:14'),
(15, 'tok', 'tongkat', 'genusepalios@gmail.com', '$2y$10$4l242ShSnsbucH5poWyB9OKJgU22s3H.XbFDBZZv.CnsizuLebE1e', 'USER', NULL, '2022-04-01 22:52:41', '2022-04-01 22:52:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_kode_buku_unique` (`kode_buku`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_kode_kategori_unique` (`kode_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loans_kode_peminjaman_unique` (`kode_peminjaman`),
  ADD KEY `loans_members_id_foreign` (`members_id`),
  ADD KEY `loans_books_id_foreign` (`books_id`),
  ADD KEY `loans_user_id_foreign` (`user_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_no_anggota_unique` (`no_anggota`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `restores`
--
ALTER TABLE `restores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restores_loans_id_foreign` (`loans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restores`
--
ALTER TABLE `restores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_books_id_foreign` FOREIGN KEY (`books_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `loans_members_id_foreign` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `loans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `restores`
--
ALTER TABLE `restores`
  ADD CONSTRAINT `restores_loans_id_foreign` FOREIGN KEY (`loans_id`) REFERENCES `loans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
