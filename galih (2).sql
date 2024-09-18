-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2024 pada 15.44
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
-- Database: `galih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nameAlbum` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `albums`
--

INSERT INTO `albums` (`id`, `id_user`, `nameAlbum`, `cover`, `created_at`, `updated_at`) VALUES
(5, '20240916025247', 'kita bisa', 'hE8ztJnN9slfdA2e3Svzlqu1ttYFfsfMMEmAlwJU.png', '2024-09-16 05:28:35', '2024-09-16 05:33:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artis`
--

CREATE TABLE `artis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `song` varchar(255) NOT NULL,
  `pencipta_lagu` varchar(255) NOT NULL,
  `tentang_artis` text NOT NULL,
  `lirik` text NOT NULL,
  `keterangan_lagu` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `x` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `apple` varchar(255) NOT NULL,
  `spotify` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL,
  `joox` varchar(255) NOT NULL,
  `tidal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artis`
--

INSERT INTO `artis` (`id`, `id_user`, `artist`, `album`, `song`, `pencipta_lagu`, `tentang_artis`, `lirik`, `keterangan_lagu`, `facebook`, `x`, `youtube`, `instagram`, `apple`, `spotify`, `tiktok`, `joox`, `tidal`, `created_at`, `updated_at`) VALUES
(1, '20240820014938', 'sina', '', 'yang terlupakan', '', 'belum terdapat cover', '', '', '', '', '', '', '', '', '', '', '', '2024-08-20 06:49:38', '2024-08-30 02:27:36'),
(2, '20240916024646', 'andre', '', 'yang terlupakan itu aku', '', 'belum terdapat cover', '', '', '', '', '', '', '', '', '', '', '', '2024-09-15 19:46:47', '2024-09-15 19:46:47'),
(3, '20240916025247', 'andre', '', 'yang terlupakan', '', 'belum terdapat cover', '', '', '', '', '', '', '', '', '', '', '', '2024-09-15 19:52:48', '2024-09-15 19:52:48'),
(4, '20240916045626', 'sina', '', 'bertahan tanpamu', '', 'belum terdapat cover', '', '', '', '', '', '', '', '', '', '', '', '2024-09-15 21:56:26', '2024-09-15 21:56:26'),
(5, '20240916070653', 'lukman', 'belum terdapat album', 'kami', 'belum terdapat pencipta_lagu', 'belum terdapat tentang_artis', 'belum terdapat lirik', 'belum terdapat keterangan_lagu', '#', '#', '#', '#', '#', '#', '', '#', '#', '2024-09-16 00:06:53', '2024-09-16 00:06:53'),
(6, '20240916025247', 'sina1', 'diami1', 'diami1', 'sina1', '<p><strong>Musik</strong>&nbsp;ditemukan di setiap budaya, baik masa lalu maupun masa kini, menyesuaikan antara waktu dan tempat. Karena semua orang di dunia, termasuk kelompok suku yang paling terisolasi pun memiliki&nbsp;<a title=\"Bentuk musik\" href=\"https://id.wikipedia.org/wiki/Bentuk_musik\">bentuk musik</a>, dapat disimpulkan bahwa musik mungkin telah hadir di leluhur manusia sebelum penyebaran manusia di seluruh dunia. Akibatnya, musik mungkin telah ada selama setidaknya 55,000 tahun dan musik pertama mungkin telah ada di Afrika dan kemudian berkembang menjadi bagian dasar dari kehidupan manusia1</p>', '<p><strong>Musik</strong>&nbsp;ditemukan di setiap budaya, baik masa lalu maupun masa kini, menyesuaikan antara waktu dan tempat. Karena semua orang di dunia, termasuk kelompok suku yang paling terisolasi pun memiliki&nbsp;<a title=\"Bentuk musik\" href=\"https://id.wikipedia.org/wiki/Bentuk_musik\">bentuk musik</a>, dapat disimpulkan bahwa musik mungkin telah hadir di leluhur manusia sebelum penyebaran manusia di seluruh dunia. Akibatnya, musik mungkin telah ada selama setidaknya 55,000 tahun dan musik pertama mungkin telah ada di Afrika dan kemudian berkembang menjadi bagian dasar dari kehidupan manusia1</p>', '<p><strong>Musik</strong>&nbsp;ditemukan di setiap budaya, baik masa lalu maupun masa kini, menyesuaikan antara waktu dan tempat. Karena semua orang di dunia, termasuk kelompok suku yang paling terisolasi pun memiliki&nbsp;<a title=\"Bentuk musik\" href=\"https://id.wikipedia.org/wiki/Bentuk_musik\">bentuk musik</a>, dapat disimpulkan bahwa musik mungkin telah hadir di leluhur manusia sebelum penyebaran manusia di seluruh dunia. Akibatnya, musik mungkin telah ada selama setidaknya 55,000 tahun dan musik pertama mungkin telah ada di Afrika dan kemudian berkembang menjadi bagian dasar dari kehidupan manusia1</p>', '#1', '#1', '#1', '#1', '#1', '#1', 'tiktok1', '#1', '#1', '2024-09-16 00:27:47', '2024-09-16 01:05:35'),
(7, '20240916025247', 'sina', 'aku', 'diami', 'sina', '<p><strong>Musik</strong>&nbsp;ditemukan di setiap budaya, baik masa lalu maupun masa kini, menyesuaikan antara waktu dan tempat. Karena semua orang di dunia, termasuk kelompok suku yang paling terisolasi pun memiliki&nbsp;<a title=\"Bentuk musik\" href=\"https://id.wikipedia.org/wiki/Bentuk_musik\">bentuk musik</a>, dapat disimpulkan bahwa musik mungkin telah hadir di leluhur manusia sebelum penyebaran manusia di seluruh dunia. Akibatnya, musik mungkin telah ada selama setidaknya 55,000 tahun dan musik pertama mungkin telah ada di Afrika dan kemudian berkembang menjadi bagian dasar dari kehidupan manusia</p>', '<p><strong>Musik</strong>&nbsp;ditemukan di setiap budaya, baik masa lalu maupun masa kini, menyesuaikan antara waktu dan tempat. Karena semua orang di dunia, termasuk kelompok suku yang paling terisolasi pun memiliki&nbsp;<a title=\"Bentuk musik\" href=\"https://id.wikipedia.org/wiki/Bentuk_musik\">bentuk musik</a>, dapat disimpulkan bahwa musik mungkin telah hadir di leluhur manusia sebelum penyebaran manusia di seluruh dunia. Akibatnya, musik mungkin telah ada selama setidaknya 55,000 tahun dan musik pertama mungkin telah ada di Afrika dan kemudian berkembang menjadi bagian dasar dari kehidupan manusia</p>', '<p><strong>Musik</strong>&nbsp;ditemukan di setiap budaya, baik masa lalu maupun masa kini, menyesuaikan antara waktu dan tempat. Karena semua orang di dunia, termasuk kelompok suku yang paling terisolasi pun memiliki&nbsp;<a title=\"Bentuk musik\" href=\"https://id.wikipedia.org/wiki/Bentuk_musik\">bentuk musik</a>, dapat disimpulkan bahwa musik mungkin telah hadir di leluhur manusia sebelum penyebaran manusia di seluruh dunia. Akibatnya, musik mungkin telah ada selama setidaknya 55,000 tahun dan musik pertama mungkin telah ada di Afrika dan kemudian berkembang menjadi bagian dasar dari kehidupan manusia</p>', '#', '#', '#', '#', '#', '#', '#', '#', '#', '2024-09-16 01:04:59', '2024-09-16 01:04:59'),
(8, '20240916080512', 'lala', 'belum terdapat album', 'bidadari', 'belum terdapat pencipta_lagu', 'belum terdapat tentang_artis', 'belum terdapat lirik', 'belum terdapat keterangan_lagu', '#', '#', '#', '#', '#', '#', '#', '#', '#', '2024-09-16 01:05:13', '2024-09-16 01:05:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `product_id`, `banner`, `created_at`, `updated_at`) VALUES
(1, '1', '35wkDjZf4rb1FdQvQg0eZtLysGNpSC7Y0s9qWuBf.jpg', '2024-03-11 01:45:36', '2024-04-24 07:28:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `producer`, `created_at`, `updated_at`) VALUES
(1, 'Kemeja Putih', 'olamart', '2024-03-10 17:28:39', '2024-03-10 17:28:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `image_video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contents`
--

INSERT INTO `contents` (`id`, `product_id`, `image_video`, `created_at`, `updated_at`) VALUES
(1, '1', 'HuXo3zRYHZPW1U69qC6Cok41x3qsvzy2HWCgyYE6.png', '2024-03-12 16:41:42', '2024-03-12 16:41:42'),
(2, '1', 'NySFFrTTgwa9un70ASJOjB9tdXdX3jzAeesBJmHO.png', '2024-03-12 16:44:18', '2024-03-12 16:44:18'),
(3, '1', '9Qj7DNtddDQCsrAxtOGUX6kx3v0laUkYO28RVaCS.png', '2024-03-12 16:44:39', '2024-03-12 16:44:39'),
(4, '1', 'uM4eUfUSxlVWsAIn6Y0ZfiFFRZF7fm6g177Tgx5a.png', '2024-03-12 16:45:31', '2024-03-12 16:45:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `copywrites`
--

CREATE TABLE `copywrites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) NOT NULL,
  `masalah` text NOT NULL,
  `solusi` text NOT NULL,
  `manfaat` text NOT NULL,
  `bonus` text NOT NULL,
  `kontak` text NOT NULL,
  `kelangkaan` text NOT NULL,
  `kerugian` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `copywrites`
--

INSERT INTO `copywrites` (`id`, `headline`, `masalah`, `solusi`, `manfaat`, `bonus`, `kontak`, `kelangkaan`, `kerugian`, `created_at`, `updated_at`) VALUES
(1, 'kemeja terbaik', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '2024-03-13 06:58:09', '2024-03-13 06:58:09');

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
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `many` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `name`, `phone`, `email`, `address`, `name_product`, `size`, `many`, `cost`, `created_at`, `updated_at`) VALUES
(1, 'dani', '05434423', 'null', 'lost 1 angels florida Amerika', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-11 19:43:26', '2024-03-11 19:43:26'),
(2, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-11 22:52:21', '2024-03-11 22:52:21'),
(3, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-11 22:57:56', '2024-03-11 22:57:56'),
(4, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:01:11', '2024-03-12 01:01:11'),
(5, 'Galih Nugraha', '0628112044091', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 0031', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:01:54', '2024-03-12 01:01:54'),
(6, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:15:24', '2024-03-12 01:15:24'),
(7, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:16:39', '2024-03-12 01:16:39'),
(8, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:17:10', '2024-03-12 01:17:10'),
(9, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:17:24', '2024-03-12 01:17:24'),
(10, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:18:14', '2024-03-12 01:18:14'),
(11, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:21:07', '2024-03-12 01:21:07'),
(12, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:21:34', '2024-03-12 01:21:34'),
(13, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:22:12', '2024-03-12 01:22:12'),
(14, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:23:43', '2024-03-12 01:23:43'),
(15, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:24:42', '2024-03-12 01:24:42'),
(16, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:25:03', '2024-03-12 01:25:03'),
(17, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:26:33', '2024-03-12 01:26:33'),
(18, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:26:52', '2024-03-12 01:26:52'),
(19, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:27:27', '2024-03-12 01:27:27'),
(20, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:28:53', '2024-03-12 01:28:53'),
(21, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:30:11', '2024-03-12 01:30:11'),
(22, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:30:35', '2024-03-12 01:30:35'),
(23, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:31:03', '2024-03-12 01:31:03'),
(24, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:31:34', '2024-03-12 01:31:34'),
(25, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:32:06', '2024-03-12 01:32:06'),
(26, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:35:33', '2024-03-12 01:35:33'),
(27, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:35:52', '2024-03-12 01:35:52'),
(28, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:39:37', '2024-03-12 01:39:37'),
(29, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:39:54', '2024-03-12 01:39:54'),
(30, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-12 01:42:35', '2024-03-12 01:42:35'),
(31, 'Galih n', '811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-13 07:03:35', '2024-03-13 07:03:35'),
(32, 'Galih Nugraha', '062811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-03-20 15:28:08', '2024-03-20 15:28:08'),
(33, 'Galih Nugraha', '062811204409', 'null', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Kemeja Putih / olamart', 'null', 'null', 'null', '2024-09-10 03:39:39', '2024-09-10 03:39:39');

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
(5, '2024_03_04_235826_create_members_table', 1),
(6, '2024_03_06_050004_create_categories_table', 1),
(7, '2024_03_06_115632_create_products_table', 1),
(8, '2024_03_07_011842_create_copywrites_table', 1),
(9, '2024_03_08_114825_create_contents_table', 1),
(10, '2024_03_09_003414_create_testimonials_table', 1),
(11, '2024_03_10_132018_create_banners_table', 1),
(12, '2024_07_28_130440_create_posts_table', 2),
(13, '2024_08_17_032049_create_artis_table', 3),
(14, '2024_09_16_035426_create_albums_table', 4);

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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `image_cover_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `produsen` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `headline` varchar(255) NOT NULL,
  `image_video` varchar(255) NOT NULL,
  `masalah` text NOT NULL,
  `solusi` text NOT NULL,
  `manfaat` text NOT NULL,
  `gambar_testimoni` varchar(255) NOT NULL,
  `bonus` text NOT NULL,
  `kontak` text NOT NULL,
  `kelangkaan` text NOT NULL,
  `kerugian` text NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `phone3` varchar(255) NOT NULL,
  `phone4` varchar(255) NOT NULL,
  `phone5` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `produsen`, `image`, `name`, `size`, `stock`, `price`, `description`, `headline`, `image_video`, `masalah`, `solusi`, `manfaat`, `gambar_testimoni`, `bonus`, `kontak`, `kelangkaan`, `kerugian`, `phone1`, `phone2`, `phone3`, `phone4`, `phone5`, `created_at`, `updated_at`) VALUES
(1, 'Kemeja Putih', 'olamart', 'gk6fGhVshBbYF811xmG8OwGfb8QXLEBaWRuXfwuA.png', 'Kemeja Putih', 'XL', '500', '200000000', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', 'kemeja terbaik', 'WrCxdwXONOS1o9WqVaWGX0Hevw9asDKwVDucoIly.png', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', 'krfP0vB2dyzDpByDELRRNcTHTBkbhQHFsUjK4zo5.png', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '<div class=\"css-uqawib\">\r\n<h1 class=\"css-7mvqif\">10 Rekomendasi Kemeja Putih Polos untuk Pria Terbaik (Terbaru Tahun )</h1>\r\n</div>\r\n<div class=\"css-kbm1t2\">\r\n<div class=\"css-z4d070\">\r\n<p>Kemeja putih polos menjadi salah satu&nbsp;<em>fashion item</em>&nbsp;esensial yang sebaiknya dimiliki oleh pria. Warnanya yang netral membuatnya mudah dipadukan dengan&nbsp;<em>outfit&nbsp;</em>lain sehingga tercipta beragam gaya, mulai dari kasual hingga formal. Saat ini, ada banyak merek kemeja putih pria yang bisa dijadikan pilihan, misalnya BOSS, Benhill, Erigo, serta&nbsp;FortKlass.</p>\r\n<br>\r\n<p>Apabila Anda sedang mencari rekomendasi kemeja putih pria<em>&nbsp;branded</em> yang bagus, kami memiliki rekomendasi produk terbaik. Tak hanya itu, kami juga akan memberikan tips memilih kemeja putih polos supaya Anda mendapatkan produk yang sesuai kebutuhan. Yuk, simak selengkapnya!</p>\r\n</div>\r\n</div>', '62811204409', '1', '2', '3', '4', '2024-03-10 17:30:05', '2024-03-10 17:30:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `gambar_testimoni` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `product_id`, `gambar_testimoni`, `created_at`, `updated_at`) VALUES
(1, '1', 'j8mZLAMc5gwvycakHQi4FGqb759jJOT7cx2qGjtV.jpg', '2024-03-11 06:04:08', '2024-03-11 06:04:08'),
(2, '1', 'twNKkrunNoYBLbVFuX3Czq8JFVEA3rTDvPYUDucs.png', '2024-03-11 06:04:24', '2024-03-11 06:04:24'),
(3, '1', 'uFwFbzvuawOVhYhgbyik4n2WPRUIGBXu7BADFXNP.png', '2024-03-11 06:04:35', '2024-03-11 06:04:35'),
(4, '1', '1dlDdrUJ6T5CQ73Fj3YHqdiYJsGztboyRUPkzufl.png', '2024-03-11 06:04:45', '2024-03-11 06:04:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level_user` varchar(9) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(9) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_artist` varchar(90) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `level_user`, `address`, `status`, `email_verified_at`, `password`, `id_artist`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ega', '0811204409', 'galihandroid009@gmail.com', '', 'Jl. Siliwangi', '', NULL, '$2y$12$QB4ySAvzLlZQq0ywB9rxl.g.ieERKDJ.iy8/aCZiB/tfRvARUIDYy', '', NULL, '2024-03-12 02:05:46', '2024-03-12 02:05:46'),
(8, 'andi', '08773434321', 'andi@gmail.com', 'Anggota', 'Jl. Perjuangan 1 no. 274 RT 004 RW 003', 'Aktif', NULL, '$2y$12$480cSEjQV7Y4.5yACg97jOFq3sKVV8ff5Ntr6ySdklNgJiqoLih9O', '20240916025247', NULL, '2024-09-15 19:52:47', '2024-09-15 20:12:38'),
(9, 'riri', '087347374734', 'riri@gmail.com', 'Belum ada', 'Jl.bertahan 1 no. 274 RT 004 RW 003', 'pendaftar', NULL, '$2y$12$3dxdH8JXUqpHMo4938UvbeBMoxI4o57eBltDcbB8tMgrIBw2LEoZ.', '20240916045626', NULL, '2024-09-15 21:56:26', '2024-09-15 21:56:26'),
(10, 'jenal', '08112236791', 'jenal@gmail.com', 'Belum ada', 'Jl Siliwangi 1 No 274  RT 003 / RW004 kel. Maleber', 'pendaftar', NULL, '$2y$12$c3AnnJuEOgBoLfV9jUiuvOY5u2L2a2ki4gKLAy1BDsDRd522L799G', '20240916070653', NULL, '2024-09-16 00:06:53', '2024-09-16 00:06:53'),
(15, 'prima', '08763534782', 'prima@gmail.com', 'Belum ada', 'Jl. perjuangan1 no. 274 RT 004 RW 003', 'pendaftar', NULL, '$2y$12$nYzHZBHqmiV6kQJjvX1QQ.2o95sW8yPbU85ejhyMyIgeud1e8m0tW', '20240916080512', NULL, '2024-09-16 01:05:13', '2024-09-16 01:05:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `copywrites`
--
ALTER TABLE `copywrites`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `artis`
--
ALTER TABLE `artis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `copywrites`
--
ALTER TABLE `copywrites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
