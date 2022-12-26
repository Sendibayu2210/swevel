-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 07.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swevel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `slug`, `isi_artikel`, `poster`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'Z', 'ZenBook-S-13-OLED-merupakan-laptop-tipis-(ultrathin)-terbaru-Asus-yang-dipasarkan-di-Indonesia-pada-awal-November-2022.-Sebagai-salah-satu-produk-anyar,-laptop-ini-hadir-dengan-berbagai-keunggulan-dibanding-produk-ZenBook-lainnya', '<p>KOMPAS.com - Setelah memperkenalkan smartphone terbarunya di acara IFA 2022 (pameran gadget tahunan berskala global) pada bulan lalu, Nokia akhirnya resmi meluncurkan Nokia X30 5G ke pasar Eropa. Perusahaan menjelaskan bahwa perangkat Nokia X30 5G menggunakan bahan daur ulang, alias material ramah lingkungan, pada bagian bingkai dan penampang perangkat. Bahan daur ulang tersebut terdiri dari bahan aluminium yang 100 persen di daur ulang dan 65 persen plastik daur ulang. Adapun pada kotak kemasan Nokia X30 5G menggunakan 70 persen kertas daur ulang dan telah mengantongi sertifikat Forest Stewardship Council (FSC). Spesifikasi Nokia X30 5G Ponsel ini mengusung layar berpanel AMOLED dengan bentang seluas 6,43 inci yang sudah Full HD Plus (1.080 x 2.400 piksel). Nokia X30 5G memiliki refresh rate 90Hz, tingkat kecerahan maksimal 700 nits, rasio 20:9, dan telah dilapisi kaca pelindung Corning Gorilla Glass Victus. Baca juga: HP Nokia Produksi Semarang Siap Dipasarkan Pada tampilan layar depan, perangkat ini didesain dengan layar berlubang (punch hole) yang berada di sisi tengah atas layar. Punch hole tersebut berfungsi sebagai rumah dari kamera depan (selfie) 16 MP. Sedangkan di bagian belakang, terdapat dua sensor kamera yang diposisikan secara vertikal dan dibenamkan ke dalam modul yang sedikit menonjol. Konfigurasi kamera yang dimiliki terdiri dari kamera utama 50 MP (f.1.9) disertai OIS (Optical Image Stabilization) dan fitur AI (artificial intelligence), dan kamera ultrawide 13 MP (f/2.4) dengan sudut pandang 130 derajat. Fitur-fitur kamera yang dihadirkan adalah Capture Fusion yang memungkinkan perangkat menghasilkan gambar lebih baik lagi pada kamera ultama dan kamera ultrawide, serta fitur Dark Vision dan Night Selfie agar dapat memaksimalkan hasil potret di malam hari atau minim cahaya. Nokia X30 5G diotaki oleh chipset besutan Qualcomm, Snapdragon 695, yang dipadukan dengan RAM 8GB dan media penyimpanan sebesar 256 GB. Sistem operasi yang dijalankan perangkat adalah Android 12 yang diklaim bakal dapat tiga kali peningkatan sistem operasi dan tiga tahun pembaruan sistem keamanan perangkat di setiap bulannya.</p>', '1669262615_57a0ea9f436cae32fdd0.jpg', 'publish', NULL, NULL, NULL),
(13, 'Pasar Smartwatch Global Tumbuh 30 Persen, India Terbesar di Dunia  Artikel ini telah tayang di Kompas.com dengan judul &quot;Pasar Smartwatch Global Tumbuh 30 Persen, India Terbesar di', 'Pasar', '<p>Pertumbuhan ini berasal dari berbagai negara, termasuk India, Amerika Utara, dan lainnya. Menurut laporan Global Smartwatch Model Tracker yang dirilis firma riset Counterpoint Research, harga murah dan sistem operasi (OS) ringan merupakan dua faktor pendorong naiknya pangsa pasar smartwatch Smartwatch dengan OS \"ringan\" yang dimaksud yaitu smartwatch yang tidak memiliki dukungan aplikasi pihak ketiga dan hanya menjalankan fungsi dasar. Berbeda smartwatch yang mendukung aplikasi pihak ketiga, seperti smartwatch dengan sistem operasi Watch OS atau Wear OS. Arloji pintar dengan OS tersebut biasanya disebut sebagai \"HLOS smartwatch\". Baca juga: Apa itu Fitur SpO2 di Smartband dan Smartwatch? \"Dari berbagai jenis arloji pintar, smartwatch \'reguler\' dengan OS yang relatif ringan dan harga lebih terjangkau menjadi pendorong utama meningkatnya pasar global,\" kata Woojin Son, analis Counterpoint Research, dikutip KompasTekno dari situs Counterpoint, Kamis (1/12/2022). Menurut Counterpoint, pengiriman smartwatch model basic ini naik dua kali lipat dibanding periode yang sama tahun 2021, atau menyumbang 35 persen di pasar smartwatch global. Sementara smartwatch HLOS tumbuh 23 persen dari periode yang sama tahun lalu. Meski pengiriman smartwatch HLOS lebih rendah dibanding smartwatch model basic, pendapatan vendor dari smartwatch HLOS ini, menurut Son, lebih tinggi dibanding model basic karena harga jual rata-ratanya yang lebih tinggi pula. India dongkrak pasar smartwatch global India menyumbang kontribusi terbesar untuk pasar smartwatch global pada kuartal III-2022. Pasar smartwatch di India tumbuh 171 persen dibanding kuartal yang sama tahun sebelumnya (year-on-year/YoY). Faktor pendorong pertubuhan pasar smartwatch di India yaitu adanya musim perayaan di negara tersebut. Selain itu, sejumlah merek smartwatch juga memperluas portofolio produk mereka dengan harga yang murah. Belum lagi dorongan manufaktur lokal yang turut berperan mendongkrak pertumbuhan pasar arloji pintar India.</p>', '1669859430_a91444894996b47a0ca8.jpg', 'publish', NULL, NULL, NULL),
(14, 'Informatika: Pengerti', 'Informatika:-Pen', '<p>Semakin canggihnya perkembangan teknologi dan informasi banyak bidang pun diuntungkan akan hal ini. Bahkan tidak sedikit peran manusia yang tergantikan akibat banyak peralatan yang dapat mengambil alih beberapa pekerjaan manusia. Tidak hanya itu, saat ini bahkan teknologi informasi masih tetap dikembangkan dan terus berinovasi menghasilkan berbagai hal lainnya. Pembahasan tersebut banyak diulas dalam bidang Informatika. Berikut KompasTekno telah merangkum pengertian, dampak, serta manfaat yang diberikan oleh bidang ilmu informatika terhadap kehidupan sehari-hari. Baca juga: Pengertian dan Fungsi BIOS dalam Perangkat Komputer Pengertian Informatika Dalam dunia akademis informatika diartikan sebagai ilmu yang berhubungan dengan aktivitas pengumpulan, klasifikasi, penyimpanan, pengeluaran, dan penyebaran sebuah pengetahuan. Sementara dalam perguruan tinggi negeri, Anda akan mengenal jurusan teknik informatika. Tidak jauh berbeda dengan pengertian sebelumnya, dalam jurusan tersebut menerapkan penggunaan komputer untuk menangani hal-hal terkait pengolahan data. Informatika berhubungan erat dengan teknologi informasi, seperti komputer, internet, pemrograman dan lain sebagainya. Selain itu informatika juga berhubungan dengan komputasi atau perhitungan yang menggunakan mesin. Hal ini biasanya menyangkut pengolahan data dalam jumlah besar yang digunakan untuk mendapatkan sebuah informasi. Informatika memiliki beberapa bidang ilmu, seperti sistem informasi, ilmu komputer, ilmu informasi, teknik komputer, aplikasi informasi dalam sistem informasi manajemen, keamanan informasi, dan informatika sosial. Baca juga: 5 Fungsi Komputer dalam Kehidupan Sehari-hari Dampak Informatika Dalam setiap bidang kehidupan pengaruh yang kuat bisa mendatangkan sebuah dampak positif dan negatif. Berikut dampak positif dari adanya bidang informatika. Kemudahan berkomunikasi Adanya bidang ilmu informatika membuat manusia memiliki pengetahuan dan berinovasi untuk mengembangkan teknologi. Hal berdampak pada adanya kemudahan komunikasi dengan banyak orang meskipun keduanya tidak dalam satu tempat.</p>', '1669859564_1a998d0fdfba19953c1c.jpg', 'publish', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(5) NOT NULL,
  `from` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_pembayaran`
--

CREATE TABLE `kelola_pembayaran` (
  `id` int(5) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kelola_pembayaran`
--

INSERT INTO `kelola_pembayaran` (`id`, `nama_bank`, `no_rekening`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'BCA-489379234', '1667356775_9ae376bab12558cecb1d.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(2, 'BNI', 'BNI-489379234', '1667356796_c6f3c651cd6f027cafe3.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(3, 'BRI', 'BRI-489379234', '1667356807_d3a63f1da29f69d947ad.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(4, 'Mandiri', 'Mandiri-489379234', '1667356819_9c7f74a71353c2dfdc0f.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(5, 'BSI', 'BSI-489379234', '1667356854_9861fef9637b86ab5660.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `id` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `klien`
--

INSERT INTO `klien` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '1669826843_23443efbfed4f19266e6.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '1669827855_ddb144c5576c49bfd0b7.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '1669827983_71554846717a85e03b9e.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '1669828096_d63496922ba58fb988f8.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '1669828287_c62b4d44f0901b4d48ce.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '1669828330_7c22a9d1323fba53c591.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `name`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(17, 'phone', '0123456789', '<i class=\"fa-solid fa-phone\"></i>', '2022-10-11 14:22:08', '2022-11-25 09:42:28'),
(19, 'envelope', 'swevel@gmail.co.id', '<i class=\"fa-solid fa-envelope\"></i>', '2022-10-11 14:26:14', '2022-11-25 09:42:12'),
(21, 'location-dot', 'Jl Kenari Yogyakarta', '<i class=\"fa-solid fa-location-dot\"></i>', '2022-11-25 09:47:01', '2022-11-25 09:47:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `milestone`
--

CREATE TABLE `milestone` (
  `id_milestone` int(5) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `year` varchar(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `milestone`
--

INSERT INTO `milestone` (`id_milestone`, `description`, `year`, `image`, `created_at`, `updated_at`) VALUES
(10, '<p>Description<strong> Milestone</strong></p>', '2022', '2015_milestones.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '<p>lorem 2020</p>', '2020', '2016_milestones.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '<p>alksdjflkafjldksj 2016</p>', '2016', '2017_milestones.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'question', '1669264208_a022d57314e5dce4f45b.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'whatsapp', '1669264227_e76b030d4dc9282557b8.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Laptop', '1669264249_d1ed7bf0cffffb4118c1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kamera', '1669264271_867c4cd35353b5b10079.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Discussioin', '1669276342_bf556dfeb8fc75af938f.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'software', '1669274061_e225b7d176ceb459433a.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', '1669826736_e26ac2c72cb16fe4a570.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(5) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `category`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'definition', 'PT Swevel Universal Media', '<p>PT. Swevel Universal Media merupakan salah satu Industri Jasa Teknologi Informasi yang memberikan kualitas service excellence. Titik produk PT. Swevel Universal Media mengutamakan System End User dan memberikan solusi kreatif TI. PT. Swevel Universal Media fokus pada WEB Developer dan Mobile Smart Phone Application.</p>', '2022-09-26 14:00:52', '2022-09-26 14:00:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase`
--

CREATE TABLE `purchase` (
  `id` int(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(5) NOT NULL,
  `id_bank` int(5) NOT NULL,
  `kode_promo` varchar(50) NOT NULL,
  `harga_bayar` int(11) NOT NULL,
  `status` enum('approved','notapproved') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `purchase`
--

INSERT INTO `purchase` (`id`, `id_user`, `id_course`, `id_bank`, `kode_promo`, `harga_bayar`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '', 500000, 'approved', '2022-11-02 14:11:49', '2022-11-02 14:11:49'),
(2, 2, 12, 2, '', 500000, 'notapproved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 10, 1, '', 600000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 11, 5, '', 500000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 6, 3, '', 500000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 7, 2, '', 400000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `image`, `linkedin`, `instagram`, `facebook`, `created_at`, `updated_at`) VALUES
(15, 'Sarah Loli', 'Designer', '1664953889_1c8f7bd1962ce60d1b7e.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Miquel Gabriel', 'Designer', '1664953901_d7d937e12029f110dc55.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Martin Patin', 'Model', '1664953925_afb1375bea6c9493f133.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Lulu Lumpia', 'Designer', '1664953936_b99adc1c9b4e977df9fb.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Jhuedes Sila', 'Model', '1664953946_3d830410fc0d5b44d7f5.png', ' ', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `level` enum('admin','pengguna') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `foto`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$ddrQp6T1TzDGOHJUza4WpeOBwfpRgSFlxHTPKOLu6lXkhWGLI5Iiy', 'default_admin.jpg', 'admin', '2022-10-30 20:33:40', '2022-10-30 20:33:40'),
(2, 'user', 'user@gmail.com', '$2y$10$8IP8xZXlY2iX0hb3rUXn1eLc9hh7UR4FaQPgGYlVWpBpyUIDiutNW', 'default_pengguna.jpg', 'pengguna', '2022-10-30 20:33:40', '2022-10-30 20:33:40'),
(3, 'swevel', 'swevel@gmail.com', '$2y$10$JxvAaS1klSoOEUkRxVqTCOP5maZtvOYUSVCkw0W1PIPTp4UBUDdsO', 'default_pengguna.jpg', 'pengguna', NULL, NULL),
(4, 'coba', 'coba@gmail.com', '$2y$10$j8lDw8JjHI98X1wSGoyrtuiWtNa5S3frzaqUaS0qZQ548LGnUM30G', 'default_pengguna.jpg', 'pengguna', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelola_pembayaran`
--
ALTER TABLE `kelola_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`id_milestone`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `kelola_pembayaran`
--
ALTER TABLE `kelola_pembayaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `milestone`
--
ALTER TABLE `milestone`
  MODIFY `id_milestone` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
