-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2024 pada 15.21
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
(5, '20240916025247', 'kita bisa', 'YwcTl29ZQ7kJdfgeeqBRzKMPvQ9gCDnGMrogx9OI.jpg', '2024-09-16 05:28:35', '2024-09-23 06:38:17'),
(6, '20240916025247', 'kita bisa 2', 'yAsIFnWijVRTjjKBrRBaLerpfcp1lDbYnyyJjf4B.webp', '2024-09-19 07:52:56', '2024-09-23 06:38:31'),
(7, 'ID Artis belum diinput1', 'ss', 'It6zOfFU8xz1j8Smgj8ZW7XjZiXClICpAXvSSU8A.png', '2024-10-13 04:34:23', '2024-10-13 04:34:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artis`
--

CREATE TABLE `artis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `cover_artis` varchar(255) NOT NULL,
  `file_lagu` varchar(255) NOT NULL,
  `song` varchar(255) NOT NULL,
  `pencipta_lagu` varchar(255) NOT NULL,
  `jenis_musik` varchar(255) NOT NULL,
  `kontrak` varchar(255) NOT NULL,
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

INSERT INTO `artis` (`id`, `id_user`, `artist`, `album`, `cover_artis`, `file_lagu`, `song`, `pencipta_lagu`, `jenis_musik`, `kontrak`, `tentang_artis`, `lirik`, `keterangan_lagu`, `facebook`, `x`, `youtube`, `instagram`, `apple`, `spotify`, `tiktok`, `joox`, `tidal`, `created_at`, `updated_at`) VALUES
(12, '1234', 'justin', '5', 'nSgP2MpD7bDT9IUZvAf4WqBCjiIplnydvERT96KL.jpg', '', 'belive', 'justin', '', '', '<p><strong>Justin Bieber</strong>&nbsp;(<span class=\"rt-commentedText nowrap\"><span class=\"IPA nopopups noexcerpt\"><a class=\"mw-redirect\" title=\"Bantuan:IPA untuk bahasa Inggris\" href=\"https://id.wikipedia.org/wiki/Bantuan:IPA_untuk_bahasa_Inggris\">/<span title=\"/ˈ/: primary stress follows\">ˈ</span><span title=\"\'b\' in \'buy\'\">b</span><span title=\"/iː/: \'ee\' in \'fleece\'\">iː</span><span title=\"\'b\' in \'buy\'\">b</span><span title=\"/ər/: \'er\' in \'letter\'\">ər</span>/</a></span></span>; lahir 1 Maret 1994)<sup id=\"cite_ref-4\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-4\"><span class=\"cite-bracket\">[</span>4<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-5\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-5\"><span class=\"cite-bracket\">[</span>5<span class=\"cite-bracket\">]</span></a></sup>&nbsp;adalah seorang&nbsp;<a title=\"Penyanyi\" href=\"https://id.wikipedia.org/wiki/Penyanyi\">penyanyi</a>&nbsp;dan&nbsp;<a class=\"mw-redirect\" title=\"Penulis lagu\" href=\"https://id.wikipedia.org/wiki/Penulis_lagu\">penulis lagu</a>&nbsp;berkebangsaan&nbsp;<a title=\"Kanada\" href=\"https://id.wikipedia.org/wiki/Kanada\">Kanada</a>. Setelah manajer pencarian bakat&nbsp;<a title=\"Scooter Braun\" href=\"https://id.wikipedia.org/wiki/Scooter_Braun\">Scooter Braun</a>&nbsp;menemukannya melalui video-video&nbsp;<a title=\"YouTube\" href=\"https://id.wikipedia.org/wiki/YouTube\">YouTube</a>-nya, ketika sedang menyanyikan ulang lagu pada tahun 2008, ia lalu dikontrak oleh RBMG, Bieber merilis&nbsp;<a class=\"mw-redirect\" title=\"Album mini\" href=\"https://id.wikipedia.org/wiki/Album_mini\">album mini</a>&nbsp;debutnya,&nbsp;<em><a class=\"mw-redirect\" title=\"My World (EP)\" href=\"https://id.wikipedia.org/wiki/My_World_(EP)\">My World</a></em>, pada akhir tahun 2009. Album ini disertifikasi platinum di&nbsp;<a title=\"Amerika Serikat\" href=\"https://id.wikipedia.org/wiki/Amerika_Serikat\">Amerika Serikat</a>.<sup id=\"cite_ref-auto_6-0\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-auto-6\"><span class=\"cite-bracket\">[</span>6<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Bieber menjadi artis pertama yang mempunyai tujuh lagu dari rekaman debut di tangga lagu&nbsp;<a title=\"Billboard Hot 100\" href=\"https://id.wikipedia.org/wiki/Billboard_Hot_100\"><em>Billboard</em>&nbsp;Hot 100</a>.<sup id=\"cite_ref-7\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-7\"><span class=\"cite-bracket\">[</span>7<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Bieber merilis album studio penuh pertamanya,&nbsp;<em><a title=\"My World 2.0\" href=\"https://id.wikipedia.org/wiki/My_World_2.0\">My World 2.0</a></em>, pada tahun 2010. Album ini debut di atau hampir di nomor satu di beberapa negara, disertifikasi tiga kali platinum di&nbsp;<a title=\"Amerika Serikat\" href=\"https://id.wikipedia.org/wiki/Amerika_Serikat\">Amerika Serikat</a>,<sup id=\"cite_ref-auto_6-1\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-auto-6\"><span class=\"cite-bracket\">[</span>6<span class=\"cite-bracket\">]</span></a></sup>&nbsp;dan menghasilkan singel \"<a title=\"Baby (lagu Justin Bieber)\" href=\"https://id.wikipedia.org/wiki/Baby_(lagu_Justin_Bieber)\">Baby</a>\".</p>\r\n<p>Mengikuti album debut dan tur promosinya, dia merilis film konser 3D&nbsp;<em><a title=\"Justin Bieber: Never Say Never\" href=\"https://id.wikipedia.org/wiki/Justin_Bieber:_Never_Say_Never\">Justin Bieber: Never Say Never</a></em>&nbsp;dan album studio keduanya,&nbsp;<em><a title=\"Under the Mistletoe\" href=\"https://id.wikipedia.org/wiki/Under_the_Mistletoe\">Under the Mistletoe</a></em>&nbsp;(2011), yang debut di nomor satu di&nbsp;<a title=\"Billboard 200\" href=\"https://id.wikipedia.org/wiki/Billboard_200\"><em>Billboard</em>&nbsp;200</a>. Album studio ketiganya,&nbsp;<em><a title=\"Believe (album Justin Bieber)\" href=\"https://id.wikipedia.org/wiki/Believe_(album_Justin_Bieber)\">Believe</a></em>&nbsp;(2012) menghasilkan single \"<a title=\"Boyfriend (lagu Justin Bieber)\" href=\"https://id.wikipedia.org/wiki/Boyfriend_(lagu_Justin_Bieber)\">Boyfriend</a>\", yang berada di nomor satu di Kanada. Album studio keempatnya&nbsp;<em><a title=\"Purpose (album Justin Bieber)\" href=\"https://id.wikipedia.org/wiki/Purpose_(album_Justin_Bieber)\">Purpose</a></em>&nbsp;dirilis pada tahun 2015, menghasilkan tiga single nomor satu: \"What Do You Mean?\", \"Sorry\", dan \"Love Yourself\". Setelah itu, Bieber menjadi fitur di berbagai kolaborasi sukses, termasuk \"Cold Water\", \"Let Me Love You\", \"Despacito (Remix)\", dan \"I\'m the One\". Penjualan album dan singlenya di&nbsp;<a title=\"Amerika Serikat\" href=\"https://id.wikipedia.org/wiki/Amerika_Serikat\">AS</a>&nbsp;mencapai total 44.7 juta.<sup id=\"cite_ref-auto_6-2\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-auto-6\"><span class=\"cite-bracket\">[</span>6<span class=\"cite-bracket\">]</span></a></sup><sup id=\"cite_ref-8\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-8\"><span class=\"cite-bracket\">[</span>8<span class=\"cite-bracket\">]</span></a></sup>&nbsp;Dia diperkirakan telah menjual 140 juta rekaman, membuatnya menjadi salah satu dari&nbsp;<a class=\"mw-redirect\" title=\"List of best-selling music artists\" href=\"https://id.wikipedia.org/wiki/List_of_best-selling_music_artists\">artis musik terlaris di dunia</a>, dan menjadi orang kedua yang mempunyai 100 juta pengikut di&nbsp;<a title=\"X (media sosial)\" href=\"https://id.wikipedia.org/wiki/X_(media_sosial)\">Twitter</a>&nbsp;pada bulan Agustus 2017 setelah&nbsp;<a title=\"Katy Perry\" href=\"https://id.wikipedia.org/wiki/Katy_Perry\">Katy Perry</a>.</p>\r\n<p>&nbsp;</p>', '<pre class=\"tK8GG Ty_RP\">Favorite Girl - Justin Bieber<br>\r\nStandard Tuning<br> \r\nEm - 022000<br>\r\nAm - 002210<br> \r\nC  - 032010<br> \r\nB7 - 021202\r\n[Verse]\r\n<br>Em\r\nI always knew you were the best\r\nAm\r\nThe coolest girl I know\r\nC\r\nSo Prettier than all the rest\r\nB7\r\nThe star of the show\r\nEm\r\nSo many times I wish<br>Am\r\nYou\'d be the one for me<br>C\r\nI never knew you\'d be like this, girl,<br>B7\r\nWhat did ya do to me<br> \r\n \r\n[Pre-Chorus]\r\n \r\nEm\r\nYou\'re who I\'m thinking of\r\nAm\r\nGirl, you ain\'t runner up\r\nC                         B7\r\nAnd no matter what you\'re always number one\r\n \r\n \r\n[Chorus]\r\n \r\nEm\r\nMy prized possession, one and only\r\nAm\r\nI adore ya, girl I want ya\r\nC\r\nThe one I can\'t live without\r\nB7\r\nThat\'s you, that\'s you\r\nEm\r\nYou\'re my precious little lady\r\nAm\r\nThe one that makes me crazy\r\nC\r\nOf all the girls I\'ve ever known\r\nB7\r\nIt\'s you, it\'s you\r\n \r\n \r\n[Turnaround]\r\n \r\nEm\r\nMy favorite, my favorite, \r\nAm                          C\r\nmy favorite, My favorite girl\r\n              B7\r\nMy favorite girl\r\n \r\n \r\n[Verse]\r\n \r\nEm\r\nYou\'re always going out your way\r\nAm\r\nTo impress these Mr. Wrongs\r\nC\r\nBut you can be yourself with me \r\nB7\r\nI\'ll take you as you are\r\nEm\r\nYou always said believe in love, \r\nAm\r\nIt\'s a dream that can\'t be real\r\nC\r\nSo girl let\'s write a fairytale, \r\nB7\r\nI\'ll show you how it feels\r\n \r\n \r\n[Pre-Chorus]\r\n \r\nEm\r\nYou\'re who I\'m thinking of\r\nAm\r\nGirl, you ain\'t my runner up\r\nC                       B7\r\nAnd no matter what you\'re always number one\r\n \r\n \r\n[Chorus]\r\n \r\nEm\r\nMy prized possession, one and only\r\nAm\r\nI adore ya, girl I want ya\r\nC\r\nOf all the girls I\'ve ever known\r\nB7\r\nIt\'s you, it\'s you\r\nEm\r\nYou\'re my precious little lady\r\nAm\r\nThe one that makes me crazy\r\nC\r\nOf all the girls I\'ve ever known\r\nB7\r\nIt\'s you, it\'s you\r\n \r\n \r\n[Turnaround]\r\n \r\nEm\r\nMy favorite, my favorite, \r\nAm                          C\r\nmy favorite, My favorite girl\r\n              B7\r\nMy favorite girl\r\n \r\n \r\n[Bridge]\r\n \r\nAm\r\nYou take my breath away\r\nB7\r\nWith everything you say\r\nEm\r\nI just wanna be with you, \r\nAm\r\nMy baby, my baby, ohhhh\r\nAm\r\nMy Miss don\'t play no games, \r\n<span class=\"fciXY _Oy28\" data-name=\"B7\">B7</span>\r\nTreats you no other way, \r\n<span class=\"fciXY _Oy28\" data-name=\"Em\">Em</span>      <span class=\"fciXY _Oy28\" data-name=\"Am\">Am</span>\r\nThan you deserve\r\n \r\n\'Cause you\'re the girl of my dreams\r\n \r\n \r\n[Chorus]\r\n \r\n<span class=\"fciXY _Oy28\" data-name=\"Em\">Em</span>\r\nMy prized possession, one and only\r\n<span class=\"fciXY _Oy28\" data-name=\"Am\">Am</span>\r\nI adore ya, girl I want ya\r\n<span class=\"fciXY _Oy28\" data-name=\"C\">C</span>\r\nThe one I can\'t live without\r\n<span class=\"fciXY _Oy28\" data-name=\"B7\">B7</span>\r\nThat\'s you, that\'s you\r\n<span class=\"fciXY _Oy28\" data-name=\"Em\">Em</span>\r\nYou\'re my precious little lady\r\n<span class=\"fciXY _Oy28\" data-name=\"Am\">Am</span>\r\nThe one that makes me crazy\r\n<span class=\"fciXY _Oy28\" data-name=\"C\">C</span>\r\nOf all the girls I\'ve ever known\r\n<span class=\"fciXY _Oy28\" data-name=\"B7\">B7</span>\r\nIt\'s you, it\'s you</pre>', '<p>Ketika mencari video dari penyanyi yang berbeda,&nbsp;<a title=\"Scooter Braun\" href=\"https://id.wikipedia.org/wiki/Scooter_Braun\">Scooter Braun</a>, mantan eksekutif pemasaran So So Def, membuka salah satu video Bieber pada tahun 2007 tanpa disengaja. Terkesan, Braun mendatangi teater tempat Bieber tampil, sekolah Bieber, dan akhirnya menghubungi Mallette, yang enggan karena Braun seorang Yahudi. Dia ingat pernah berdoa, \"Tuhan, hamba memberikannya kepada engkau. Engkau bisa mengirimkan hamba seorang lelaki Kristen, label Kristen\" dan \"Tuhan, Engkau tidak ingin pria Yahudi ini menjadi penjaga Justin, kan?\" Namun, ketua gereja meyakinkannya untuk membiarkan Bieber pergi dengan Braun. Pada usia 13 tahun, Bieber pergi ke&nbsp;<a title=\"Atlanta\" href=\"https://id.wikipedia.org/wiki/Atlanta\">Atlanta</a>, Georgia, dengan Braun untuk merekam kaset demo. Bieber mulai bernyanyi untuk&nbsp;<a class=\"mw-redirect\" title=\"Usher (entertainer)\" href=\"https://id.wikipedia.org/wiki/Usher_(entertainer)\">Usher</a>&nbsp;seminggu kemudian.<sup id=\"cite_ref-31\" class=\"reference\"><a href=\"https://id.wikipedia.org/wiki/Justin_Bieber#cite_note-31\"><span class=\"cite-bracket\">[</span>31<span class=\"cite-bracket\">]</span></a></sup></p>', '#', '#', '#', '#', '#1', '#2', '#3', '#4', '#5', '2024-09-23 08:33:09', '2024-10-05 06:18:15'),
(13, '20240923035725', 'lilis1', '5', 'peRBaE9BVTOMyizjVhl3MUcrTogTEDutuG2ZSByH.jpg', 'l2Ja0e20jr7xPD8dvdzKEfV7kh2I0gEUwscrTAZ0.mp3', 'kau selalu diam1', 'belum terdapat pencipta_lagu1', 'Religi', '2024-10-31', '<p>belum terdapat tentang_artis1</p>', '<p>belum terdapat lirik1</p>', '<p>belum terdapat keterangan_lagu1</p>', '#1', '#1', '#1', '#1', '#1', '#1', '#1', '#1', '#1', '2024-09-23 08:57:26', '2024-10-14 04:44:33'),
(18, '20240923035725', 'lala', '7', '7WBBcR0lj823B1iGGCOSVRcpt54e31X9JW2UARC0.jpg', 'NmYtT9PJxr21UHqZGexUqYG8Bq44KRtsW7DY7QZS.mp3', 'bidadari', 's', 'Pop Rock', '00/00/0000', '<p>-</p>', '<p>-</p>', '<p>-</p>', '#', '#', '#', '#', '#', '#', '#', '#', '#', '2024-10-14 04:53:14', '2024-10-14 04:53:14'),
(19, '20240923035725', 'baru', '7', 'G9HJ938zV0mtUwmNmNE4Qr5pkTbIM67N2jilnvPE.png', 'wAMJ7Awo5mFVwCDeoON5etJFRhguolNp7BXjPmch.mp3', 'kau pergi', 'sina', 'Pop', '00/00/0000', '<p>-</p>', '<p>-</p>', '<p>-</p>', '#', '#', '#', '#', '#', '#', '#', '#', '#', '2024-10-16 04:27:14', '2024-10-16 04:27:14');

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
-- Struktur dari tabel `cover_artists`
--

CREATE TABLE `cover_artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_artist` varchar(255) NOT NULL,
  `nameCoverArtist` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cover_artists`
--

INSERT INTO `cover_artists` (`id`, `id_user`, `id_artist`, `nameCoverArtist`, `cover`, `created_at`, `updated_at`) VALUES
(2, '1234', '1234', 'cover yang terlupakan', 'LWPJRNvfQ3e6is39RspnwVuDAuQnrJMGHlLB9br7.png', '2024-09-22 01:35:18', '2024-09-22 01:35:18'),
(3, '1234', '1234', 'kisah 1', 'KbC74ncy91WqLDsz1U7leSCmQp5eYUY9bTnIZzsd.png', '2024-09-23 06:43:19', '2024-09-23 06:43:19');

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
(14, '2024_09_16_035426_create_albums_table', 4),
(15, '2024_09_21_113825_create_cover_artists_table', 5);

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
  `status` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_artist` varchar(90) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `norek` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `level_user`, `address`, `status`, `email_verified_at`, `password`, `id_artist`, `npwp`, `ktp`, `bank`, `norek`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ega', '0811204409', 'galihandroid009@gmail.com', '', 'Jl. Siliwangi', '', NULL, '$2y$12$QB4ySAvzLlZQq0ywB9rxl.g.ieERKDJ.iy8/aCZiB/tfRvARUIDYy', '', '', '', '', '', NULL, '2024-03-12 02:05:46', '2024-03-12 02:05:46'),
(17, 'andi', '08112236791', 'admin@gmail.com', 'Karyawan', 'Jl Siliwangi 1 No 274  RT 003 / RW004 kel. Maleber', 'Aktif', NULL, '$2y$12$e35RdLFuLrwq9AQh3Eghn.2oCQKaV96RU.j2JHKE9m78VRKlgs6wi', '1234', '', '', '', '', NULL, '2024-09-20 21:47:45', '2024-09-22 01:34:36'),
(18, 'nina', '087652323112', 'agregator@gmail.com', 'Agregator', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Aktif', NULL, '$2y$12$6wWMV.hY.sbl5AhoMiqgPO7grcnnkVUXKQiiWW9HArhdiYE9mx3IK', '20240923035330', '1234567890', '', 'Bank Kaltim', '88876543331', NULL, '2024-09-23 08:53:30', '2024-10-13 07:31:09'),
(20, 'kinda', '062811204409', 'apan@gmail.com', 'Anggota', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Menunggu_Verifikasi', NULL, '$2y$12$QRNcH1et1BgbT2bm7zH6KeWYg9q4uk/zNwaAxtg5pFQHRqelv6Uga', '20240923035725', '1234567890', '', 'Bank Jatim', '88876543331', NULL, '2024-09-23 08:57:26', '2024-10-13 07:29:22'),
(30, 'ss', '062811204409', 'ss@gmail.com', 'Anggota', 'Jl. Siliwangi 1 no. 274 RT 004 RW 003', 'Pasif', NULL, '$2y$12$Ardhgf6eyqhJ5nmLuKd3A.d34gsAzAjMfPZqmsUBhvlCZA5S/KuTy', 'ID Artis belum diinput1', '12345678901', 'Gyxb97U2btxjTr5A4FRuNv5wSLLNyKna0IqsV1b4.jpg', 'Bank Kaltim', '88876543331', NULL, '2024-10-12 20:03:45', '2024-10-13 03:35:59');

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
-- Indeks untuk tabel `cover_artists`
--
ALTER TABLE `cover_artists`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `artis`
--
ALTER TABLE `artis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT untuk tabel `cover_artists`
--
ALTER TABLE `cover_artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
