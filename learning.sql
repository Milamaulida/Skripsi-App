-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2025 pada 09.27
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `answer_text`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 19, 'A', 0, '2025-02-15 16:29:40', '2025-03-01 08:30:33'),
(3, 10, 'B', 0, '2025-03-01 01:56:17', '2025-03-01 01:56:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exam`
--

CREATE TABLE `exam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `exam`
--

INSERT INTO `exam` (`id`, `class_id`, `type`, `number`, `created_at`, `updated_at`) VALUES
(1, 1, 'PTS', 0, '2025-02-15 11:55:02', '2025-02-15 11:55:02'),
(2, 1, 'PAS', 0, '2025-02-15 21:11:35', '2025-03-01 08:12:55'),
(3, 1, 'PH 1', 0, '2025-03-01 00:44:17', '2025-03-01 00:44:17'),
(4, 1, 'PH 2', 0, '2025-03-01 01:29:00', '2025-03-01 01:29:00'),
(5, 1, 'PH 3', 0, '2025-05-20 09:47:20', '2025-05-20 09:47:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_02_15_165329_create_subject_table', 2),
(6, '2025_02_15_165341_create_value_exam_table', 2),
(7, '2025_02_15_165349_create_role_table', 2),
(8, '2025_02_15_165402_create_question_table', 2),
(9, '2025_02_15_165414_create_exam_table', 2),
(10, '2025_02_15_165422_create_class_table', 2),
(11, '2025_02_15_165434_create_answer_table', 2),
(12, '2014_10_12_100000_create_password_resets_table', 3),
(13, '2025_02_15_170720_create_subjects_table', 3),
(14, '2025_02_15_170922_create_value_exams_table', 3),
(15, '2025_02_15_170931_create_roles_table', 3),
(16, '2025_02_15_170945_create_questions_table', 3),
(17, '2025_02_15_170952_create_exams_table', 3),
(18, '2025_02_15_171034_create_answers_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nr_class`
--

CREATE TABLE `nr_class` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nr_class`
--

INSERT INTO `nr_class` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '7', '2025-05-06 05:02:32', '2025-05-06 05:02:32'),
(2, '8', '2025-05-06 05:02:32', '2025-05-06 05:02:32'),
(3, '9', '2025-05-06 05:02:54', '2025-05-06 05:02:54'),
(4, '10', '2025-06-08 03:01:01', '2025-06-08 03:01:01'),
(5, '11', '2025-06-08 03:01:17', '2025-06-08 03:01:17'),
(6, '14', '2025-06-08 03:13:41', '2025-06-08 03:13:41'),
(7, '18', '2025-06-08 03:46:48', '2025-06-08 03:46:48'),
(8, '21', '2025-06-08 04:00:29', '2025-06-08 04:00:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `question`
--

CREATE TABLE `question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `question`
--

INSERT INTO `question` (`id`, `exam_id`, `class_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '', '2025-02-15 16:13:46', '2025-02-15 16:13:46'),
(3, 2, 2, '', '2025-02-15 21:13:44', '2025-03-01 08:13:44'),
(4, 1, 3, 'Apa yang dimaksud dengan komputasional komputer', '2025-03-01 01:36:44', '2025-03-01 01:36:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2025-02-15 11:29:45', '2025-02-15 11:29:45'),
(2, 'Guru', '2025-02-15 21:09:45', '2025-03-01 08:12:08'),
(3, 'Siswa', '2025-03-01 00:23:38', '2025-03-01 00:23:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subject`
--

CREATE TABLE `subject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `class_id` int(11) NOT NULL,
  `video_material` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subject`
--

INSERT INTO `subject` (`id`, `title`, `description`, `class_id`, `video_material`, `created_at`, `updated_at`) VALUES
(1, 'Berfikir Komputasional', 'Teknologi Informasi dan Komunikasi adalah Teknologi Teknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi ada adalahTeknologi Informasi dan Komunikasi adalahTeknologi Informasi dan Komunikasi', 1, 'https://youtu.be/6HEBhSucJ-E?si=fsBMBwW0lOvNTUab', '2025-02-15 11:06:49', '2025-03-01 08:11:03'),
(2, 'Teknologi Informasi dan Komunikasi', 'Teknologi Informasi dan Komunikasi', 1, 'https://youtu.be/I5V85df5RV4?si=OKAJa0ibt1lMsckC', '2025-02-15 21:07:02', '2025-03-01 00:19:00'),
(3, 'Sistem Komputer', 'Sistem Komputer Adalah', 1, 'https://youtu.be/VXV5XwNJWXU?si=R4vfTpZpve8FcxBO', '2025-03-01 00:16:08', '2025-03-01 00:16:08'),
(4, 'Jaringan Komputer Dan Internet', 'Jaringan Komputer dan Internet Adalah', 1, 'https://youtu.be/VXV5XwNJWXU?si=R4vfTpZpve8FcxBO', '2025-05-09 04:54:59', '2025-05-09 04:54:59'),
(5, 'Analisis Data', 'Analisis Data Adalah', 1, 'https://youtu.be/4JvAZJYu9XM?si=D98tH1k5S-y8IRoJ', '2025-05-09 04:54:59', '2025-05-09 04:54:59'),
(6, 'Algoritma dan Pemograman', 'Algoritma dan Pemograman', 1, 'https://youtu.be/BYg5QC_QGZ8?si=xgfrBLviahPlx2Vo', '2025-05-09 04:56:52', '2025-05-09 04:56:52'),
(7, 'Dampak Sosial Informatika', 'Dampak Sosial Informatika', 1, 'https://youtu.be/dnOoqeip81k?si=Z9xl6TB_4ooajj0a', '2025-05-09 04:56:52', '2025-05-09 04:56:52'),
(8, 'Praktik Lintas Bidang', 'Praktik Lintas Bidang Adalah', 1, 'https://youtu.be/Ts8OQ7L1SV0?si=bsMCMtcXBsrFeE8u', '2025-05-09 04:57:43', '2025-05-09 04:57:43'),
(9, 'Berfikir Komputasional', 'Berfikir Komputasional Adalah', 2, 'https://youtu.be/w7Wo2KOlfYQ?si=iusqqcuTZFPm79BV', '2025-05-09 08:09:50', '2025-05-09 08:09:50'),
(10, 'Teknologi Informasi dan Komunikasi', 'Teknologi Informasi dan Komunikasi Kelas 8\r\n', 2, 'https://youtu.be/OFSI0i5FLP4?si=2nyqllXa6rKEOxov', '2025-05-09 08:21:14', '2025-05-09 08:21:14'),
(11, 'Sistem Komputer', 'Sistem Komputer Adalah', 2, 'https://youtu.be/qWOgdSQWJH0?si=nG2xAlvF2ktxMEJy', '2025-05-09 08:21:14', '2025-05-09 08:21:14'),
(12, 'Jaringan Komputer dan Internet', 'Jaringan Komputer dan Internet Kelas 8', 2, 'https://youtu.be/uW0uzfg5grA?si=ECQOk-eMbVu288mY', '2025-05-09 08:40:38', '2025-05-09 08:40:38'),
(13, 'Analisis Data', 'Analisis Data Kelas 8 Adalah', 2, 'https://youtu.be/HFIh6y8cw70?si=_8gOzfQ7uiZkU0mM', '2025-05-09 08:40:38', '2025-05-09 08:40:38'),
(14, 'Algoritma dan Pemrograman', 'Algoritma dan Pemrograman adalah', 2, 'https://youtu.be/5QbzO5CSBG0?si=nVFRT_-EwzICLvaj', '2025-05-09 08:42:56', '2025-05-09 08:42:56'),
(15, 'Dampak Sosial Informatika', 'Dampak Sosial Informatika kelas 8 adalah', 2, 'https://youtu.be/40WElft-K4E?si=9IZnyuuIbeanIPiy', '2025-05-09 08:42:56', '2025-05-09 08:42:56'),
(16, 'Praktik Lintas Bidang', 'Praktik Lintas Bidang adalah', 2, 'https://youtu.be/OhrZP5DiNuA?si=C8zW7tmWMNi8rMP8', '2025-05-09 08:44:28', '2025-05-09 08:44:28'),
(17, 'Berfikir Komputasional ', 'Berfikir Komputasional kelas 9 adalah', 3, 'https://youtu.be/PWy19pyabO4?si=23CmYB3hENt_BrFv', '2025-05-09 08:52:40', '2025-05-09 08:52:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subject_topic`
--

CREATE TABLE `subject_topic` (
  `id` bigint(20) NOT NULL,
  `class_id` int(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `title` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `subject_topic`
--

INSERT INTO `subject_topic` (`id`, `class_id`, `chapter`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'Berfikir Komputasional', '0000-00-00 00:00:00', '2025-05-20 04:51:11'),
(2, 1, '2', 'Teknologi Informasi dan Komunikasi', '0000-00-00 00:00:00', '2025-05-20 04:51:11'),
(3, 1, '3', 'Sistem Komputer', '2025-05-29 15:01:19', '2025-05-29 15:01:19'),
(4, 1, '4', 'Algoritma dan Pemograman', '2025-05-30 07:05:14', '2025-05-30 07:05:14'),
(5, 1, '5', 'Analisis Data', '2025-05-30 07:05:14', '2025-05-30 07:05:14'),
(6, 1, '6', 'Algoritma dan Pemograman', '2025-05-30 07:43:28', '2025-05-30 07:43:28'),
(7, 1, '7', 'Dampak Sosial Informatika', '2025-05-30 08:17:56', '2025-05-30 08:17:56'),
(8, 1, '8', 'Praktik Lintas Bidang', '2025-05-30 08:18:57', '2025-05-30 08:18:57'),
(9, 2, '1', 'Berfikir Komputasional', '2025-05-30 08:23:59', '2025-05-30 08:23:59'),
(10, 2, '2', 'Teknologi Informasi dan Komunikasi', '2025-05-30 08:23:59', '2025-05-30 08:23:59'),
(11, 2, '3', 'Sistem Komputer', '2025-05-30 08:30:24', '2025-05-30 08:30:24'),
(12, 2, '4', 'Jaringan Komputer dan Internet', '2025-05-30 08:31:12', '2025-05-30 08:31:12'),
(13, 2, '5', 'Analisis Data', '2025-05-30 08:32:21', '2025-05-30 08:32:21'),
(14, 2, '6', 'Algoritma dan Pemrograman', '2025-05-30 08:33:14', '2025-05-30 08:33:14'),
(15, 2, '7', 'Dampak Sosial Informatika', '2025-05-30 08:34:36', '2025-05-30 08:34:36'),
(16, 2, '8', 'Praktik Lintas Bidang', '2025-05-30 08:35:17', '2025-05-30 08:35:17'),
(17, 3, '1', 'Berfikir Komputasional', '2025-05-30 08:38:45', '2025-05-30 08:38:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `class_id` int(255) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `identification_number` int(255) NOT NULL,
  `role_id` int(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `class_id`, `name`, `email`, `password`, `phone`, `identification_number`, `role_id`, `status`, `birth_date`, `address`, `image_path`) VALUES
(1, NULL, 'Mila Maulida', 'maulidamila07@gmail.com', 'Mila070903', 813164732, 457769, 2, 'Active', '2025-05-06', 'Jl.mengger girang 1 no.39', 'png'),
(2, 1, 'Bramara Saddad Minthadara', 'Bramara@gmail.com', 'Bram12345', 813164732, 1233, 3, 'Active', '2025-05-06', 'Jl.MOh toha', 'png'),
(3, 2, 'Zaskia Sungkar', 'zaskia@gmail.com', '12345', 892849272, 789879, 3, 'active', '2025-02-02', 'Jl.Sunda 23', 'png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_exam`
--

CREATE TABLE `user_exam` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `exam_ id` int(255) NOT NULL,
  `question_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `value_exam`
--

CREATE TABLE `value_exam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `score` decimal(8,2) NOT NULL,
  `exam_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `value_exam`
--

INSERT INTO `value_exam` (`id`, `user_id`, `exam_id`, `score`, `exam_date`, `created_at`, `updated_at`) VALUES
(2, 3, 70, 90.00, '2024-02-20', '2025-03-01 02:22:55', '2025-03-01 07:26:56'),
(3, 2, 5, 87.00, '2024-03-25', '2025-03-01 02:23:56', '2025-03-01 02:23:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nr_class`
--
ALTER TABLE `nr_class`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subject_topic`
--
ALTER TABLE `subject_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_exam`
--
ALTER TABLE `user_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `value_exam`
--
ALTER TABLE `value_exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answer`
--
ALTER TABLE `answer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `exam`
--
ALTER TABLE `exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `nr_class`
--
ALTER TABLE `nr_class`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `question`
--
ALTER TABLE `question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `subject_topic`
--
ALTER TABLE `subject_topic`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_exam`
--
ALTER TABLE `user_exam`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `value_exam`
--
ALTER TABLE `value_exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
