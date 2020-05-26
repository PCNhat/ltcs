-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2020 lúc 05:04 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltcs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_des`, `mode`, `created_at`, `updated_at`) VALUES
(1, 'Video trên Youtube', 'Các video chia sẻ về lập trình, đời sống lập trình viên trên Lập Trình Viên TV, kênh youtube chính thức của Lập trình cuộc sống chấm com', 1, NULL, NULL),
(2, 'Chuyện nghề nghiệp', 'Chuyện nghề nghiệp - là chuyên mục nơi một thằng coder viết về những buồn vui, khó khăn, trăn trở trong nghề lập trình.', 0, NULL, NULL),
(3, 'Chuyện lập trình', 'Chuyện lập trình - là chuyên mục mà một thằng coder viết về các vấn đề liên quan đến kỹ thuật, lập trình, những gì hắn đã học được trong quá trình cày cuốc của mình.', 0, NULL, NULL),
(4, 'Chuyện bên lề', 'Chuyện bên lề - là chuyên mục viết về mọi thứ liên quan đến cuộc sống của một thằng coder.', 0, NULL, NULL),
(5, 'Chuyện cuộc sống', 'Những buồn vui trong cuộc sống của lập trình viên và những người làm trong ngành công nghệ.', 0, NULL, NULL),
(6, 'Linux - Ubuntu', 'Linux - ubuntu là chuyên mục mà một thằng coder viết về hệ điều hành hắn yêu thích, chia sẻ mọi thứ hắn biết về ubuntu và linux.', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_post`
--

CREATE TABLE `info_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info_post`
--

INSERT INTO `info_post` (`id`, `cate_id`, `post_name`, `post_img`, `post_des`, `created_at`, `updated_at`) VALUES
(1, 2, 'Lập trình viên PHP đứng đầy đường', 'php.png', 'Thật khó để đặt tiêu đề bài viết này như thế nào cho sát thực nhất, ban đầu tớ định đặt là “Lập trình viên PHP, những kẻ khờ dại” hoặc “Lập trình viên PHP - Những kẻ đáng thương”, thật khó lựa chọn tiêu đề nào để miêu tả hết số phận của những lập trình viên đang theo đuổi một ngôn ngữ củ chuối nhất: PHP.', NULL, NULL),
(2, 2, 'Lỗi cần tránh khi viết CV xin việc lập trình viên, nhân viên IT là gì?', 'cv-thumb.png', 'Một trong những phần đau đầu nhất đối với dân lập trình nói riêng và nhân viên IT nói chung là viết lại CV cho từng vị trí công việc muốn ứng tuyển trong quá trình tìm việc mới. Đây có lẽ là thử thách khó khăn với dân kỹ thuật nói chung, còn khó hơn việc viết báo cáo hay viết code', NULL, NULL),
(3, 2, 'Lập trình viên cần học những gì ?', 'lap-trinh-vien-thumb.jpg', 'Một trong những câu hỏi được nhiều bạn sinh viên ngành công nghệ quan tâm nhất đó là: Cần học những kiến thức gì, rèn luyện kỹ năng gì để trở thành một lập trình viên? Câu hỏi nghe có vẻ đơn giản nhưng rất khó để trả lời, lập trình là một lĩnh vực rất rộng, có hàng tá ngôn ngữ cần phải học, hàng trăm công nghệ cần nghiên cứu, và môi trường mỗi công ty lại hoàn toàn khác nhau, do đó các thanh niên vẫn cảm thấy rất mông lung.', NULL, NULL),
(4, 2, 'Trả lời câu hỏi của bạn đọc', 'tra-loi-cau-hoi-thumb.png', 'Vừa rồi mình vừa có một buổi live stream trò chuyện cùng bạn đọc Lập Trình Cuộc Sống trên facebook. Một stream đặc biệt, nơi tất cả bạn đọc có thể nói chuyện với nhau thoải mái, chia sẻ những kinh nghiệm, buồn vui trong nghề. Thu hút hơn 2 nghìn lượt xem và hàng trăm bình luận, mình hiểu rằng các bạn rất quan tâm và có rất nhiều băn khoăn, nhất là các bạn sinh viên.', NULL, NULL),
(5, 2, 'Các bước tạo một wireframe tuyệt vời', 'wireframe.png', 'Wireframe là bản phác thảo thô mô tả tổng quan về sản phẩm cuối cùng, việc vẽ wireframe là một bước quan trọng trong quy trình phát triển phần mềm. Wireframe giúp dễ dàng truyền đạt ý tưởng tăng hiệu quả giao tiếp giữa các thành viên trong team, từ đó giảm chi phí và thời gian cho toàn bộ dự án.', NULL, NULL),
(6, 2, 'Làm product và làm outsource khác nhau như thế nào?', 'thumbnail_default.png', 'Trong ngành công nghệ thông tin có hai xu hướng rất điển hình đó là làm product và làm outsource. Vậy làm product là gì và làm outsource là gì? Đặc điểm và sự khác nhau giữa chúng như thế nào?', NULL, NULL),
(7, 2, 'Chậm tiến độ - khi bạn không còn muốn viết code nữa', 'thumb-lap-trinh-vien-met-moi.png', 'Bạn không biết phải làm gì, đáng lẽ nó phải hoàn thành sớm hơn bạn nghĩ, bạn bị nhấn chìm bởi những ý nghĩ tiêu cực bao quanh, những ý nghĩ kiểu như: mình không thể làm kịp việc này trong thời gian ngắn như thế, trông mình thật thảm hại trong mắt đồng nghiệp. Bạn thất vọng, nghi ngờ chính bản thân mình.', NULL, NULL),
(8, 2, '5 việc làm đơn giản để khởi đầu \"sự nghiệp\" lập trình viên nghiêm túc', 'thanh-cong.png', 'Có những việc rất nhỏ, có thể làm trong vài phút, nhưng hiệu quả mang lại cực kỳ lớn mà bạn có thể làm ngay hôm nay. Cho dù bạn là một developer, bạn có kỹ năng code huyền diệu, khả năng teamwork tuyệt vời, hay bạn là sinh viên, đang dần hoàn thiện kỹ năng để trở thành lập trình viên trong tương lai. Thì những việc làm rất đơn giản sau sẽ giúp bạn có một khởi đầu tốt hơn rất nhiều.', NULL, NULL),
(9, 2, 'Kiếm tiền bằng lập trình web như thế nào?', 'web-money.png', 'Lập trình web kiếm tiền có lẽ không còn xa lạ với hầu hết các lập trình viên. Thời đại chấm com rồi, nhà nhà làm web, người người làm web, đến cả cái quán bún chả đầu ngõ nhà mình cũng có web nữa. Web là cái đầu tiên người ta nghĩ đến khi xây dựng thương hiệu online trên internet, thế nên hiện tại thì lập trình viên web không bao giờ thiếu việc.', NULL, NULL),
(10, 2, 'Viết CV xin việc như thế nào? Download mẫu CV chuẩn cho dân IT', 'cv-thumb.png', 'CV là bản tóm tắt thông tin nổi bật của bạn, phản ánh đầy đủ kinh nghiệm, trình độ, tính cách và các kỹ năng liên quan của bạn với vị trí đang ứng tuyển. Nói gì thì nói, đây là một yếu tố quan trọng quyết định việc bạn có gây ấn tượng và có được mời phỏng vấn hay không.', NULL, NULL),
(11, 2, 'Lương lập trình viên mới ra trường - sự thật và ảo tưởng', 'fly-get-money.png', 'Hồi mới ra trường mình cũng như các bạn, tưởng rằng lương lập trình viên cao lắm, giờ thì đỡ nhiều rồi. Đến bây giờ, sau từng ấy năm làm vập mặt mà vẫn chưa đạt được một nửa con số lương khởi điểm 2000 đô mà một bạn sinh viên kia mong muốn, mình khẳng định rằng chúng ta đã và đang hi vọng quá nhiều vào môi trường làm việc sau khi ra trường.', NULL, NULL),
(12, 2, 'Trông bạn sẽ cool hơn trong mắt nhà tuyển dụng nếu bạn có những thứ này', 'tim-viec.png', 'Nhà tuyển dụng dễ dàng có được những thông tin cần thiết, đọc được những bài viết trên blog, họ sẽ hiểu bạn hơn, một là họ ghét bạn, hai là họ thích bạn, từ đó bạn dễ tìm được môi trường làm việc phù hợp hơn.', NULL, NULL),
(13, 2, 'Nghề IT, lập trình có dễ xin việc không?', 'tim-viec.png', 'Ngày nay, nghề IT ngày càng mở rộng và phát triển, mở ra nhiều cơ hội việc làm thu nhập cao cho người lao động do nhu cầu tuyển dụng gia tăng ở mọi khía cạnh. Tuy không phải ai cũng có thể làm giàu bằng nghề IT nhưng có một điều chắc chắn đó là số lượng công việc trong ngành vẫn không ngừng tăng lên', NULL, NULL),
(14, 2, 'Nên học ngôn ngữ lập trình nào?', 'ngon-ngu-lap-trinh.png', 'Đối với các bạn mới học lập trình, lựa chọn ngôn ngữ lập trình để học là một việc rất khó khăn. Mỗi ngôn ngữ có những đặc điểm riêng, không có ngôn ngữ nào mạnh hơn ngôn ngữ nào cả. Bạn không biết ngôn ngữ nào phù hợp với mình, bài viết này sẽ giúp bạn.', NULL, NULL),
(15, 2, 'Mình đã học lập trình như thế nào?', 'thanh-cong.png', 'Mình đã học lập trình như thế nào? Trong video này, mình chia sẻ về quãng thời gian đã học lập trình của mình từ thời cấp 3 đến lúc trở thành lập trình viên. Mỗi người có một con đường khác, cuộc sống không có ai giống ai cả, nhưng rồi cuối cùng chúng ta gặp nhau ở đây, tôi gặp bạn, những người có cùng niềm đam mê', NULL, NULL),
(16, 2, 'Thế chốt lại, lập trình là làm cái gì?', 'ngon-ngu-lap-trinh.png', 'Chúng ta học bao nhiêu ngôn ngữ, công nghệ, những thứ quá cao siêu, để rồi quên đi mục đích ban đầu, Ngày xưa chúng ta đã học lập trình để làm cái gì?', NULL, NULL),
(17, 2, 'Thực tập IT là làm gì? Có nên nhận lương hay không? Chuẩn bị gì cho kỳ thực tập?', 'tra-loi-cau-hoi-thumb.png', 'Thực tập là giai đoạn cực kỳ quan trọng với các bạn sinh viên, vậy cần chuẩn bị gì để có kỳ thực tập tốt?', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_04_12_153838_create_categories_table', 1),
(3, '2020_04_15_050627_create_info_post_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a@gmail.com', NULL, '$2y$10$SK2Lb0kZLRzpJ4XCB4hAF.YCUwgiJiMt2ntoJ8SjA5uz9sCt69xoy', NULL, '2020-05-22 09:27:35', '2020-05-22 09:27:35'),
(2, 'b', 'b@gmail.com', NULL, '$2y$10$OrvsYuOgwNGnkZ.oHjuhAeDy9TpPG8gXwuLyp7W65P3TSEvSdEtJ.', NULL, '2020-05-22 09:29:18', '2020-05-22 09:29:18'),
(3, 'pcnhat', 'phamcongnhat1415@gmail.com', NULL, '$2y$10$C86bToLmjFaopJ8Sg/mHjOT.Jl98YS4.nCcHVjgBcFe3/vCZyP2/O', 'NzvpNF2SYur6Td1pPRFAIhfjPcEPWS31CW26YMxxAXJn2904BzyyBArndvbG', '2020-05-22 10:36:15', '2020-05-24 23:00:54');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `info_post`
--
ALTER TABLE `info_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_post_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `info_post`
--
ALTER TABLE `info_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `info_post`
--
ALTER TABLE `info_post`
  ADD CONSTRAINT `info_post_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
