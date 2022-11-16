-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 08:32 PM
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
(2, 'Cây Cam Ngọt Của Tôi', 'José Mauro de Vasconcelos', '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng sống... một tác phẩm kinh điển của Brazil.” - Booklist\n\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.” - The National', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_217480.jpg', 90000, 50, 2, 1, 120, '2022-10-08 17:00:00', 224, '8935235228351', '2022-10-08 04:59:01', '2022-10-09 09:27:26'),
(3, 'Trăng Giữa Dòng Sông', 'Nguyên Sinh', 'An impassioned meditation on the consequences of sexual exploitation and the dead ends of forgiveness', 'https://cdn0.fahasa.com/media/catalog/product/b/i/bia_trang-giua-dong-song_bia-1.jpg', 108000, 7, 3, 2, 100, '2022-02-09 17:00:00', 184, '9781787703582', '2022-10-09 01:10:53', '2022-10-09 09:27:12'),
(6, 'Nhà Giả Kim (Tái Bản 2020)', 'Paulo Coelho', NULL, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg', 79000, 18, 1, 1, 14, '2022-06-01 17:00:00', 227, '8935235226272', '2022-10-09 09:29:04', '2022-10-09 09:29:04'),
(7, 'Bố Già (Đông A)', 'Mario Puzo', 'Thế giới ngầm được phản ánh trong tiểu thuyết Bố già là sự gặp gỡ giữa một bên là ý chí cương cường và nền tảng gia tộc chặt chẽ theo truyền thống mafia xứ Sicily với một bên là xã hội Mỹ nhập nhằng đen trắng, mảnh đất màu mỡ cho những cơ hội làm ăn bất chính hứa hẹn những món lợi kếch xù. Trong thế giới ấy, hình tượng Bố già được tác giả dày công khắc họa đã trở thành bức chân dung bất hủ trong lòng người đọc. Từ một kẻ nhập cư tay trắng đến ông trùm tột đỉnh quyền uy, Don Vito Corleone là con rắn hổ mang thâm trầm, nguy hiểm khiến kẻ thù phải kiềng nể, e dè, nhưng cũng được bạn bè, thân quyến xem như một đấng toàn năng đầy nghĩa khí. Nhân vật trung tâm ấy đồng thời cũng là hiện thân của một pho triết lí rất “đời” được nhào nặn từ vốn sống của hàng chục năm lăn lộn giữa chốn giang hồ bao phen vào sinh ra tử, vì thế mà có ý kiến cho rằng “Bố già là sự tổng hòa của mọi hiểu biết. Bố già là đáp án cho mọi câu hỏi”.', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936071673381.jpg', 110000, 5, 4, 1, 23, '2019-01-16 17:00:00', 642, '8936071673381', '2022-10-09 09:33:04', '2022-10-09 09:33:04'),
(8, 'Thay Đổi Cuộc Sống Với Nhân Số Học', 'Lê Đỗ Quỳnh Hương', 'Đầu năm 2020, chuỗi chương trình “Thay đổi cuộc sống với Nhân số học” của  biên tập viên, người dẫn chương trình quen thuộc tại Việt Nam Lê Đỗ Quỳnh Hương ra đời trên Youtube, với mục đích chia sẻ kiến thức, giúp mọi người tìm hiểu và phát triển, hoàn thiện bản thân, các mối quan hệ xã hội thông qua bộ môn Nhân số học. Chương trình đã nhận được sự yêu mến và phản hồi tích cực của rất nhiều khán giả và độc giả sau mỗi tập phát sóng.', 'https://cdn0.fahasa.com/media/catalog/product/t/d/tdcsvnsh.jpg', 248000, 29, 1, 3, 51, '2016-02-24 17:00:00', 416, '8935086853634', '2022-10-09 09:35:46', '2022-10-30 09:08:48'),
(9, 'Hiểu Về Trái Tim (Tái Bản 2019)', 'Minh Niệm', '“Hiểu về trái tim” là một cuốn sách đặc biệt được viết bởi thiền sư Minh Niệm. Với phong thái và lối hành văn gần gũi với những sinh hoạt của người Việt, thầy Minh Niệm đã thật sự thổi hồn Việt vào cuốn sách nhỏ này.', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_14922.jpg', 138000, 9, 1, 1, 3354343, '2022-01-26 17:00:00', 480, '8935086849903', '2022-10-09 17:24:31', '2022-10-30 09:42:35'),
(10, 'Rèn Luyện Tư Duy Phản Biện', 'Albert Rutherford', 'Như bạn có thể thấy, chìa khóa để trở thành một người có tư duy phản biện tốt chính là sự tự nhận thức. Bạn cần phải đánh giá trung thực những điều trước đây bạn nghĩ là đúng, cũng như quá trình suy nghĩ đã dẫn bạn tới những kết luận đó. Nếu bạn không có những lý lẽ hợp lý, hoặc nếu suy nghĩ của bạn bị ảnh hưởng bởi những kinh nghiệm và cảm xúc, thì lúc đó hãy cân nhắc sử dụng tư duy phản biện! Bạn cần phải nhận ra được rằng con người, kể từ khi sinh ra, rất giỏi việc đưa ra những lý do lý giải cho những suy nghĩ khiếm khuyết của mình. Nếu bạn đang có những kết luận sai lệch này thì có một sự thật là những đức tin của bạn thường mâu thuẫn với nhau và đó thường là kết quả của thiên kiến xác nhận, nhưng nếu bạn biết điều này, thì bạn đã tiến gần hơn tới sự thật rồi!', 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_18448.jpg', 99000, 34, 1, 1, 123, '2017-01-11 17:00:00', 208, '8936066687812', '2022-10-09 17:34:38', '2022-10-09 17:34:38'),
(11, 'Blockchain - Bản Chất Của Blockchain', 'Mark Gates', 'Blockchain - Bản Chất Của Blockchain, Bitcoin, Tiền Điện Tử, Hợp Đồng Thông Minh Và Tương Lai Của Tiền Tệ\n\nTiền điện tử, với đại diện tiêu biểu nhất là Bitcoin, đang là mối quan tâm hàng đầu của giới tài chính toàn cầu. Khả năng thanh toán bằng tiền ảo mở ra hàng loạt tiềm năng cho thương mại và thay đổi toàn diện thói quen tiêu dùng của con người. Hạt nhân của công nghệ hứa hẹn rung chuyển thế giới này được gọi là Blockchain.\n\nBlockchain được giới công nghệ đánh giá là phát kiến vĩ đại nhất sau khi mạng Internet ra đời. Ứng dụng phổ biến nhất của nó là các loại tiền điện tử nổi tiếng (Bitcoin, Ethereum, Ripple...)', 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936066684996.jpg', 110000, 34, 1, 1, 188, '2022-05-09 17:00:00', 288, '8936066684996', '2022-10-26 11:53:57', '2022-10-26 11:53:57'),
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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `book_id` bigint(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(10) UNSIGNED NOT NULL DEFAULT 0,
  `rating` int(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `book_id`, `user_id`, `rating`, `comment`, `created_at`) VALUES
(1, 2, 5, 5, 'Quá nhiều cảm xúc hòa lẫn trong tâm trí tôi sau khi đọc xong quyển sách này. Quyển sách là tiếng nói, là nỗi lòng của một đứa trẻ mà theo tôi bất cứ ai khi đọc xong cũng nhận ra rằng tình yêu thương, sự quan tâm có vai trò lớn lao thế nào đối với trẻ. Cậu bé Zezé năm tuổi trong câu chuyện cũng hồn nhiên, trong sáng như Anne tóc đỏ, như cô bé Heidi, cũng có phần nghịch ngợm như thằng nhóc Emil. Cậu bé đã khiến tôi phì cười không ít lần. Dù hay gây ra rắc rối nhưng Zezé là một em bé theo tôi là rất đáng yêu. Truyện đưa ta đến với những trò quậy phá, những vụn vặt ngày thường của cậu bé nhưng không hề nhàm chán chút nào cả. Tôi rất hứng thú khi được đặt bước chân vào thế giới của cậu bé con ấy để hiểu hơn về trẻ, để có thể nuôi dạy con một cách tốt nhất. Tôi lắng nghe từng suy nghĩ, từng câu thoại của cậu bé và càng thấm thía hơn bao giờ hết: Trong trái tim đứa trẻ đôi khi có những con quỷ dữ, hãy đánh đuổi con quỷ ấy đi bằng sự thấu hiểu, bằng tình yêu, sự bao dung chứ không phải là dùng đòn roi. Đòn roi, bạo lực chưa bao giờ là cách giải quyết tốt nhất cho mọi vấn đề. Cuốn sách không phải là dòng suối êm ả của ngôn từ, chẳng bóng bẩy, óng ả câu chữ, nó vốn dĩ mang hơi thở của đời thường. Nhưng nó lại đặc biệt bởi diễn biến cốt truyện hấp dẫn, tác giả biết cách dẫn dắt để đưa ta lên đỉnh đồi của cao trào, có lúc đặt ta vào những cảm xúc dịu êm như dải lụa mềm mại. Nhà văn biết cách để bóp nghẹt tim ta, làm nước mắt ta tuôn trào.\n', '2022-11-15'),
(3, 2, 6, 5, 'Trẻ con vốn dĩ cần được sống vô tư trong sự bảo bọc và bao dung, thay vì gượng ép chúng phải hiểu chuyện và hành xử như một người lớn. Zezé là một đứa trẻ sáng dạ, cậu bé luôn hỏi tất cả những thứ gì cậu muốn biết, cậu có một niềm đam mê đặc biệt với từ ngữ. Khi nghe được một từ nào lạ Zezé đều mong muốn hiểu được ý nghĩa của nó và sử dụng chúng. Cậu cũng là một đứa trẻ có trách nhiệm, ít nhất là trong lời nói. Khi đối diện với cậu em Luis cậu luôn cẩn trọng từng câu, bởi vì cậu không muốn dạy em mình bất kì từ nào không chính xác Vốn là một đứa trẻ hiếu động, những trò tinh nghịch của Zezé luôn khiến cho người khác phiền lòng. Và ắc hẳn cũng vì lý do đó mà cậu bị cho là trong máu có quỷ. Kể cả khi cậu bộc lộ được thiên phú là biết đọc dù không được ai dạy, ấy vậy mà mọi người lại đều cho rằng quỷ sứ đã dạy cậu trong giấc ngủ Có lẽ ít ai nhận thấy ẩn sâu bên trong đứa trẻ tinh nghịch đó là một trái tim vô cùng ấm áp và khát khao có được tình yêu thương. Có hay chăng sự nghịch ngợm của Zezé chỉ là muốn tạo được sự chú ý đối với gia đình. Cậu mong mỏi ở gia đình một người chịu lắng nghe cậu, quan tâm cậu, giành thời gian hơn cho cậu. Bởi lẽ, khi nhận được sự quan tâm từ người ngoài, cậu liền trở nên ngoan ngoãn và vâng lời hơn. Đứa trẻ tự chơi tự học, cũng có thể tự kiếm tiền bằng cách đi đánh giày để mua tặng cha một bao thuốc lá, không thể nào lại là đứa trẻ hư, nhỉ?', '2022-11-15'),
(4, 11, 6, 4, 'Cuốn sách theo mình là tương đối dễ tiếp cận cho những người mới tìm hiểu về Blockchain. Cuối mỗi chương tác giả có tóm lược lại nội dung chính của chương đó nên rất tiện nếu như thỉnh thoảng có cầm lại sách. Về nội dung thì sách nói nhiều về công nghệ Blockchain hơn là Bitcoin. Đọc xong tác phẩm ta có thể nắm được sơ lược những ngôn từ thông dụng trong thế giới tiền điện tử và công nghệ đứng sau nó. Ta sẽ biết cách làm thế nào để thêm 1 khối vào chuỗi, cách máy tính xử lý các hàm băm , các phần thưởng cho sự đóng góp công suất xử lý hay còn gọi là \" đào\" bitcoin. Sách cũng nói tới những ưu điểm cũng như nhược điểm của công nghệ blockchain, những tương lai phát triển của công nghệ cũng như nền tảng blockchain 2.0 mà đại diện là Etherium cùng với đồng Ether.', '2022-11-15'),
(5, 11, 1, 5, 'Công nghệ Blockchain đang phát triển nhanh chóng, vượt xa phạm vi nhưng gì ta tưởng tượng. Trong khi nhiều người xem công nghệ này như là một phương thức thanh toán hay đầu tư, thay thế cho vàng và tiền pháp định. Và tính đến nay các công ty đã sử dụng công nghệ này để huy động vốn phát triển các ý tưởng về lĩnh vực blockchain, đứng đầu là bitcoin về sau này có Ethereum làm nền tảng có nhiều chức năng mang tính ưu việt được sử dụng nhiều. Nhưng quan trọng hơn với cách thức này chung ta đang chứng kiến các công ty khởi nghiệp phát hành ra chứng chỉ đầu tư dưới dạng tiền mã hóa. Quyển sách này đã cho thấy tầm nhìn, sứ mệnh cao của công nghệ Blockchain mà tác giả muốn truyền tải tới cho người đọc.', '2022-11-15'),
(6, 11, 5, 4, 'Giao hàng nhanh chóng mặt ???? Nội dung sách hay - trình bày các vấn đề vô cùng đơn giản dễ hiểu, k mang nặng tính hàn lâm, kỹ thuật. Chất lượng in ấn tốt. Nhưng phần dịch thuật chưa thật sự tốt.', '2022-11-15'),
(7, 11, 5, 5, 'Cuốn sách thích hợp nhất cho những người bắt đầu tiến vào thế giới tiền điện tử và công nghệ tạo ra nó. Tác giả viết theo lối dễ hiểu nhất có thể, không dài dòng nhưng cũng đủ cho người đọc có được cái nhìn tổng quan về tiền điện từ và công nghệ blockchain. Cuối mỗi chương tác giả có tóm tắt lại nội dung chính để khi cần người đọc có thể dễ dàng xem lại nội dung cả chương. Qua cuốn sách ta có thể thấy được lịch sử từ khi ý tưởng về 1 đồng tiền phi tập trung, không lệ thuộc vào niềm tin vào các tổ chức tài chính đang chi phối đồng tiền, những thất bại của những người tiền nhiệm cho tới khi Satoshi Nakamoto phát hành thành công đồng Bitcoin. Ta cũng biết được bằng cách nào người ta có được đồng bitcoin( Phần thưởng cho công suất tính toán khi giải mã thành công đưa 1 khối mới vào chuỗi Blockchain). Ta cũng thấy được những ưu nhược điểm của Bitcoin, những thách thức đặt ra với đồng tiền này. Sự phát triển của công nghệ blockchain 2.0 với điển hình là Etherium và đồng Ether.', '2022-11-15'),
(8, 11, 5, 5, 'Bạn đã từng nghe về BTC hay bitcoin rồi chứ?Đúng vậy,chúng ta đều từng nghe về Bitcoin hay Tiền Điện Tử,loại tiền công nghệ mà ai cũng từng ghe qua...hoặc từng tiếp xúc,mua bán trao đổi..và cuốn sách này sẽ cho chúng ta thấy rõ ràng hơn nữa ,rõ ràng một cách có hệ thống mà ai cũng từng muốn một lần tìm hiểu thật kỹ về BTC,Thời đại của tiền điện tử,khi mà việc giao lưu hàng hoá giữa các đất nước trở lên thường xuyên hơn,đều đặn hơn và điều đó đòi hỏi có một loại tiền giúp tối ưu hoá việc giao dịch và thanh toán ... mọi thứ ấy rất dễ dàng nếu chúng ta biết rõ về bản chất của Bitcoin hay BTC. Cuốn sách này sẽ nói cặn kẽ tỉ mỉ về việc BTC tồn tại và phát triển như thế nào.Hãy đọc !', '2022-11-15'),
(9, 11, 5, 5, 'Các khái niệm cơ bản về BitCoin, Blockchain đã có từ những năm 80 và 90. Một số bài báo đã viết về việc sử dụng mật mã kết hợp với chuỗi dữ liệu an toàn và tạo ra các loại tiền tệ số. David Chaum đã thành lập DigiCash vào năm 1990, tạo ra một đồng tiền ảo, nhưng tuyên bố phá sản vào năm 1998. Cùng năm đó, vào năm 1998, Nick Szabo đề xuất một loại tiền tệ số gọi là \"Bit Gold\". Trong năm 2008, Satoshi Nakamoto (cha đẻ của bitcoin) đã đăng một bài báo có tựa đề \"Bitcoin: A Peer-to-Peer Electronic Cash System\". Và sau đó Bitcoin đã ra đời vào năm 2009. Nếu bạn quan tâm đến công nghệ này, cuốn sách này sẽ giúp bạn hiểu những khái niệm cơ bản: Blockchain là gì? Làm thế nào Blockchain hoạt động? Lịch sử, ưu điểm, nhược điểm và mối nguy hiểm của việc sử dụng Blockchain, Ethereum, hợp đồng thông minh và các ứng dụng phân tán (Decentralized), tương lai của Blockchain. Sau khi đọc xong bạn sẽ có một lượng kiến thức nền tảng thiết yếu cho việc tìm hiểu sâu hơn về công nghệ cũng như đọc hiểu được các bài báo công nghệ nói về tiền ảo,... người dịch đã dịch quyển sách này bằng cái nhìn của một người không biết về công nghệ, từ ngữ rất gần gũi, dễ hiểu.', '2022-11-15'),
(10, 11, 5, 4, 'Mặc dù hiện tại giá bitcoin đang rớt 1 cách thảm hại, mất 80% trong vòng hơn 1 năm qua nhưng nền tảng blockchain tạo ra nó vẫn rất tiềm năng. Nếu như chưa tìm hiểu thì có thể mọi người sẽ đồng nhất đồng tiền Bitcoin với công nghệ tạo ra nó là Blockchain. Thực ra Blockchain là hệ thống dữ liệu được lưu trữ phi tập trung, được cập nhật bằng cách thêm từng khối ( block) vào chuỗi ( chain) bằng việc xác thực qua hệ thống máy tính( bằng chứng xử lý). Bitcoin khi đó sẽ là phần thưởng cho sự đóng góp công suất xử lý, Sách viết đơn giản, dễ hiểu cho người mới bắt đầu tìm hiểu về bitcoin và blockchain. Bạn sẽ không mất quá nhiều thời gian để biết sơ lược về 1 công nghệ rất thú vị này\r\n', '2022-11-15'),
(11, 11, 5, 4, 'Cuốn sách thích hợp nhất cho những người bắt đầu tiến vào thế giới tiền điện tử và công nghệ tạo ra nó. Tác giả viết theo lối dễ hiểu nhất có thể, không dài dòng nhưng cũng đủ cho người đọc có được cái nhìn tổng quan về tiền điện từ và công nghệ blockchain. Cuối mỗi chương tác giả có tóm tắt lại nội dung chính để khi cần người đọc có thể dễ dàng xem lại nội dung cả chương. Qua cuốn sách ta có thể thấy được lịch sử từ khi ý tưởng về 1 đồng tiền phi tập trung, không lệ thuộc vào niềm tin vào các tổ chức tài chính đang chi phối đồng tiền, những thất bại của những người tiền nhiệm cho tới khi Satoshi Nakamoto phát hành thành công đồng Bitcoin. Ta cũng biết được bằng cách nào người ta có được đồng bitcoin( Phần thưởng cho công suất tính toán khi giải mã thành công đưa 1 khối mới vào chuỗi Blockchain). Ta cũng thấy được những ưu nhược điểm của Bitcoin, những thách thức đặt ra với đồng tiền này. Sự phát triển của công nghệ blockchain 2.0 với điển hình là Etherium và đồng Ether.', '2022-11-15'),
(12, 11, 5, 4, 'Nội dung sách chỉ mang tính tổng quan, không đi sâu vào chi tiết, thực tế vận hành của các tiền mã hoá vẫn còn một khoảng cách xa. Sách phù hợp cho những người mới bặt đầu tìm hiểu về tiền mã hóa.', '2022-11-15'),
(13, 11, 5, 5, 'Sách viết theo bố cục cuối các chương đều có hệ thống lại các ý chính nên rất dễ nắm được nội dung giúp bạn có cái nhìn tổng quan về blockchain. Nội dung viết rõ ràng, dễ hiểu, dễ nhớ. Tuy nhiên, ngôn ngữ dịch còn khiến mình cảm thấy chưa chuyên nghiệp và còn xuất hiện 1 vài lỗi chính tả. Nhưng nhìn chung về nội dung, đây là một quyển sách hay và nên đọc. Cảm ơn tác giả và Fahasa.', '2022-11-15'),
(14, 11, 5, 5, 'Sách rất hay và bổ ích, rất cần thiết cho những ai muốn tìm hiểu sâu hơn về bitcoin và cụ thể là blockchain (xương sống của bitcoin).', '2022-11-15'),
(15, 11, 5, 5, 'Hiện nay nhiều người đang đổ xô đi đầu tư vào bitcoin, ethereum... mà không chịu tìm hiểu bản chất của blockchain (blockchain là công nghệ quyết định sự hoạt động của tiền ảo). Đọc cuốn này sẽ giúp bạn có được cái nhìn cơ bản nhất. Sách khá dễ hiểu.', '2022-11-15');

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
(5, 'Mai Linh', '$2y$10$95S9U.wdH.4kmM.uCm3ZeuYPvRLbSAiQD9UPv4oeuQl7U1MMsJppS', 'mailinh@gmail.com', 1, '2022-10-09 22:41:01'),
(6, 'Tuan', '123456', 'tuan@gmail.com', 1, '2022-11-15 07:36:56');

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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

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
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
