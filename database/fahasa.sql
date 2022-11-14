-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 06:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `publication_date` timestamp NULL DEFAULT NULL,
  `page_quantity` int(11) DEFAULT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `price`, `discount`, `publisher_id`, `category_id`, `quantity`, `publication_date`, `page_quantity`, `isbn`, `created_at`, `updated_at`) VALUES
(2, 'Cây Cam Ngọt Của Tôi', 'José Mauro de Vasconcelos', NULL, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_217480.jpg', 90, 20, 2, 1, 120, '2022-10-08 17:00:00', 224, '8935235228351', '2022-10-08 04:59:01', '2022-10-09 09:27:26'),
(3, 'Trăng Giữa Dòng Sông', 'Nguyên Sinh', 'An impassioned meditation on the consequences of sexual exploitation and the dead ends of forgiveness', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_trang-giua-dong-song_bia-1.jpg', 108, 7, 3, 2, 100, '2022-02-09 17:00:00', 184, '9781787703582', '2022-10-09 01:10:53', '2022-10-09 09:27:12'),
(6, 'Nhà Giả Kim (Tái Bản 2020)', 'Paulo Coelho', NULL, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg', 79, 18, 1, 1, 14, '2022-06-01 17:00:00', 227, '8935235226272', '2022-10-09 09:29:04', '2022-10-09 09:29:04'),
(7, 'Bố Già (Đông A)', 'Mario Puzo', 'Thế giới ngầm được phản ánh trong tiểu thuyết Bố già là sự gặp gỡ giữa một bên là ý chí cương cường và nền tảng gia tộc chặt chẽ theo truyền thống mafia xứ Sicily với một bên là xã hội Mỹ nhập nhằng đen trắng, mảnh đất màu mỡ cho những cơ hội làm ăn bất chính hứa hẹn những món lợi kếch xù. Trong thế giới ấy, hình tượng Bố già được tác giả dày công khắc họa đã trở thành bức chân dung bất hủ trong lòng người đọc. Từ một kẻ nhập cư tay trắng đến ông trùm tột đỉnh quyền uy, Don Vito Corleone là con rắn hổ mang thâm trầm, nguy hiểm khiến kẻ thù phải kiềng nể, e dè, nhưng cũng được bạn bè, thân quyến xem như một đấng toàn năng đầy nghĩa khí. Nhân vật trung tâm ấy đồng thời cũng là hiện thân của một pho triết lí rất “đời” được nhào nặn từ vốn sống của hàng chục năm lăn lộn giữa chốn giang hồ bao phen vào sinh ra tử, vì thế mà có ý kiến cho rằng “Bố già là sự tổng hòa của mọi hiểu biết. Bố già là đáp án cho mọi câu hỏi”.', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936071673381.jpg', 110, 5, 4, 1, 23, '2019-01-16 17:00:00', 642, '8936071673381', '2022-10-09 09:33:04', '2022-10-09 09:33:04'),
(8, 'Friday on My Mind', 'French, Nicci', 'When a bloated corpse is found floating in the River Thames the police can at least sure that identifying the victim will be straightforward. Around the dead man\'s wrist is a hospital band. On it are the words Dr F Klein... But psychotherapist Frieda Klein is very much alive.', 'https://s3.eu-west-3.amazonaws.com/nova-shakespeare-production/product/images_116/5199367.jpg', 13, 0, 1, 3, 51, '2016-02-24 17:00:00', 464, '9781405918596', '2022-10-09 09:35:46', '2022-10-30 09:08:48'),
(9, 'Ulysses', 'Joyce, James', 'Loosely based on the Odyssey, this landmark of modern literature follows ordinary Dubliners in 1904. Capturing a single day in the life of Dubliner Leopold Bloom, his friends Buck Mulligan and Stephen Dedalus, his wife Molly, and a scintillating cast of supporting characters, Joyce pushes Celtic lyricism and vulgarity to splendid extremes. Captivating experimental techniques range from interior monologues to exuberant wordplay and earthy humor. A major achievement in 20th century literature.', 'https://s3.eu-west-3.amazonaws.com/nova-shakespeare-production/product/images_140/6288789.jpg', 27, 50, 1, 1, 3354343, '2022-01-26 17:00:00', 1040, '9780241552636', '2022-10-09 17:24:31', '2022-10-30 09:42:35'),
(10, 'Notes of a Native Son', 'Baldwin, James', 'In an age of Black Lives Matter, James Baldwin\'s essays on life in Harlem, the protest novel, movies, and African Americans abroad are as powerful today as when they were first written. With films like I Am Not Your Negro and the forthcoming If Beale Street Could Talk bringing renewed interest to Baldwin\'s life and work, Notes of a Native Son serves as a valuable introduction.\r\n\r\nWritten during the 1940s and early 1950s, when Baldwin was only in his twenties, the essays collected in Notes of a Native Son capture a view of black life and black thought at the dawn of the civil rights movement and as the movement slowly gained strength through the words of one of the most captivating essayists and foremost intellectuals of that era. Writing as an artist, activist, and social critic, Baldwin probes the complex condition of being black in America. With a keen eye, he examines everything from the significance of the protest novel to the motives and circumstances of the many black expatriates of the time, from his home in “The Harlem Ghetto” to a sobering “Journey to Atlanta.”\r\n\r\nNotes of a Native Son inaugurated Baldwin as one of the leading interpreters of the dramatic social changes erupting in the United States in the twentieth century, and many of his observations have proven almost prophetic. His criticism on topics such as the paternalism of white progressives or on his own friend Richard Wright’s work is pointed and unabashed. He was also one of the few writing on race at the time who addressed the issue with a powerful mixture of outrage at the gross physical and political violence against black citizens and measured understanding of their oppressors, which helped awaken a white audience to the injustices under their noses. Naturally, this combination of brazen criticism and unconventional empathy for white readers won Baldwin as much condemnation as praise.\r\n\r\nNotes is the book that established Baldwin’s voice as a social critic, and it remains one of his most admired works. The essays collected here create a cohesive sketch of black America and reveal an intimate portrait of Baldwin’s own search for identity as an artist, as a black man, and as an American.', 'https://s3.eu-west-3.amazonaws.com/nova-shakespeare-production/product/images_157/7033700.jpg', 14, 0, 1, 1, 123, '2017-01-11 17:00:00', 208, '9780241334003', '2022-10-09 17:34:38', '2022-10-09 17:34:38'),
(11, 'A Portrait Of The Artist As Young Man', 'Joyce, James', NULL, 'https://s3.eu-west-3.amazonaws.com/nova-shakespeare-production/product/images_130/5811895.jpg', 22, 0, 1, 1, 188, '2022-05-09 17:00:00', 1000, '9780143124313', '2022-10-26 11:53:57', '2022-10-26 11:53:57'),
(12, 'We are all weird', 'Godin, Seth', NULL, 'https://s3.eu-west-3.amazonaws.com/nova-shakespeare-production/product/images_117/5259029_1.jpg', 13, 0, 1, 1, 12, '2015-07-22 17:00:00', 1111, '9780241209011', '2022-10-30 09:22:32', '2022-10-30 09:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Văn học'),
(2, 'Sách thiếu nhi'),
(3, 'Kinh tế');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Penguin Books LTD', NULL, NULL),
(2, 'Octopus', NULL, NULL),
(3, 'Europa Editions (UK) LTD', NULL, NULL),
(4, 'Vintage Publishing', NULL, NULL),
(5, 'Faber & Faber', '2022-10-30 09:27:17', '2022-10-30 09:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `level`, `created_at`) VALUES
(1, 'Admin', '$2y$10$sEN7.oCLpJ3s77ogynLKU.Uq9Zim673GLy/fomiX4EjPlMeYq/djS', 'admin@admin.com', 0, '2022-10-09 04:26:34'),
(5, 'User', '$2y$10$95S9U.wdH.4kmM.uCm3ZeuYPvRLbSAiQD9UPv4oeuQl7U1MMsJppS', 'user@user.com', 1, '2022-10-09 22:41:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
