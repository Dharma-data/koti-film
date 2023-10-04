-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2023 pada 11.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dharma-data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `id_mhs` int(10) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_film`
--

CREATE TABLE `tb_film` (
  `id_film` int(5) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user',
  `judul` varchar(200) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `genre` varchar(150) NOT NULL,
  `url` text NOT NULL,
  `trailer` varchar(200) NOT NULL,
  `foto` text NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_film`
--

INSERT INTO `tb_film` (`id_film`, `level`, `judul`, `detail`, `genre`, `url`, `trailer`, `foto`, `tahun`) VALUES
(21, 'user', 'SUNYI', 'Sunyi (bahasa Inggris: Death Whisper) merupakan film horor Indonesia tahun 2019 yang disutradarai oleh Awi Suryadi serta dibintangi oleh Amanda Rawles dan Angga Aldi Yunanda. Film ini diadaptasi dari film horor terkenal Korea Selatan berjudul Whispering Corridors yang tayang di negara asalnya pada 1998 silam\r\nAlex (Angga Yunanda), seorang anak laki-laki yang baru saja masuk Sekolah Menengah Atas (SMA). Ia bertemu dengan teman barunya, Maggie (Amanda Rawles)\r\n\r\nNamun, ternyata masa-masa SMA tidak seindah yang dibayangkan. Alex sering ditindas oleh senior-seniornya, hingga suatu hari terjadi kejadian aneh di sekolah tersebut.', 'Horror, Drama', 'https://dharma-data.com/dashboard-anggota', 'https://www.youtube.com/embed/yJKjJoYGTu8', 'Sunyi.jpg', '2019-04-11'),
(22, 'user', 'SI MANIS JEMBATAN ANCOL', 'Si Manis Jembatan Ancol adalah film hantu jagal Indonesia tahun 2019 yang disutradarai oleh Anggy Umbara dan dibuat ulang dari film berjudul sama arahan Turino Djunaedy tahun 1973. Film ini dibintangi Indah Permatasari, Arifin Putra, Randy Pangalila, dan Ozy Syahputra. Film ini ditayangkan pada 26 Desember 2019.', 'Horror, Drama', 'https://dhrd.pw/b?c=RrTYJw6wsR', 'https://youtube.com/embed/jvf6dnI8Ytg', 'Simanis.jpg', '2019-12-26'),
(23, 'user', 'RATU ILMU HITAM', 'Ratu Ilmu Hitam adalah sebuah film horor Indonesia tahun 2019 yang disutradarai oleh Kimo Stamboel dan ditulis oleh Joko Anwar. Film ini diadaptasi dari film berjudul sama keluaran 1981.[1][2][3] Film ini merupakan film terakhir yang dibintangi oleh Ade Firman Hakim sebelum meninggal dunia pada 14 September 2020.\r\n\r\nFilm Ratu Ilmu Hitam mendapatkan 5 nominasi pada Festival Film Indonesia 2020 dan memenangkan dua penghargaan Piala Citra untuk kategori Pemeran Pendukung Pria Terbaik yang diterima oleh Ade Firman Hakim dan Penata Efek Visual Terbaik yang diterima oleh Gaga Nugraha.\r\n\r\nHanif (Ario Bayu) membawa Nadya (Hannah Al Rashid), istrinya, dan ketiga anak mereka ke panti asuhan tempat Hanif dulu dibesarkan untuk menjenguk pengasuh panti itu, Pak Bandi (Yayu Unru) yang sudah sangat tua dan sakit keras. Dua sahabat Hanif saat tinggal di panti, Anton (Tanta Ginting) dan Jefri (Miller Khan) juga datang dengan istri-istri mereka. Mereka bermalam di panti asuhan itu untuk memberikan pengh', 'Horror', 'https://dharma-data.com', 'https://youtube.com/embed/594PxKASQfg', 'RATU ILMU HITAM.jpg', '2019-11-07'),
(24, 'user', 'A+', 'A+ adalah serial web Indonesia tahun 2023 produksi Falcon Pictures. Serial yang ditayangkan di Prime Video ini diadaptasi dari novel berjudul sama karya Ananda Putri dengan disutradarai Fajar Bustomi, serta diperankan oleh Antonio Blanco Jr, Nurra Datau, Rey Bong, Ziva Magnolya, dan Livy Renata.\r\n\r\nBerjuang dari barisan try out untuk menembus peringkat pertama, Kaliypso Dirgantari harus menghadapi empat besar pemegang tahta di SMA Bina Indonesia: Re Dirgantara, Kenan Aditya, Adinda Aletheia dan Aurora Calista. Masing-masing didorong oleh motivasi mereka sendiri, kelimanya bersaing ketat untuk mendapatkan peringkat paralel, setidaknya sampai rahasia epik terkait sistem sekolah terungkap.', 'Drama, Aksi, Strategi', 'https://dharma-data.com', 'https://youtube.com/embed/h0gkrFZthqI', 'A+.jpg', '2023-05-25'),
(25, 'user', 'KKN DESA PENARI', 'KKN di Desa Penari adalah film horor supranatural Indonesia tahun 2022 yang disutradarai oleh Awi Suryadi berdasarkan cerita viral berjudul sama karya SimpleMan. Film produksi MD Pictures serta Pichouse Films ini dibintangi oleh Tissa Biani, Adinda Thomas, dan Achmad Megantara. KKN di Desa Penari tayang perdana di bioskop Indonesia pada 30 April 2022. Film ini sempat dijadwalkan akan tayang pada 19 Maret 2020 dan 24 Februari 2022. Namun, keduanya dibatalkan karena pandemi Covid-19.\r\n\r\nNur, Widya, Ayu, Bima, Anton, dan Wahyu adalah 6 orang mahasiswa yang melaksanakan kuliah kerja nyata (KKN) di sebuah desa terpencil. Namun, mereka sama sekali tidak menyangka bahwa desa yang mereka pilih bukanlah desa biasa. Pak Prabu, sang kepala desa telah memperingatkan mereka untuk tidak melewati batas gapura terlarang. Beberapa hari di desa tersebut, mereka mulai merasakan keanehan. Bima mengalami perubahan sikap dan program KKN mereka akhirnya berantakan.\r\n\r\nMereka pun mendapatkan teror sosok penar', 'Horror', 'https://dharma-data.com', 'https://youtube.com/embed/01BPk6M37qs', 'KKN DESA PENARI.jpg', '2022-04-30'),
(26, 'user', 'JAILANGKUNG SANDEKALA', 'Jailangkung: Sandekala (juga dikenal sebagai Jailangkung 3) adalah film horor petualangan Indonesia tahun 2022 yang disutradarai Kimo Stamboel. Film yang ditayangkan pada 22 September 2022 ini,[1] dibintangi Titi Kamal, Syifa Hadju, Muzakki Ramdhan, Giulio Parengkuan, dan Dwi Sasono.\r\n\r\nAdrian (Dwi Sasono) dan istrinya Sandra (Titi Kamal), beserta kedua anak mereka, yaitu Nicky (Syifa Hadju) dan Kinan (Muzakki Ramdhan), sedang berlibur ke luar kota. Ketika berada di sebuah danau yang menjadi destinasi wisata mereka, Kinan secara misterius menghilang tanpa jejak pada saat matahari terbenam. Keluarga kecil tersebut panik mencari-cari Kinan di daerah yang sangat asing untuk mereka. Mereka justru menemukan sebuah boneka jailangkung di tengah-tengah pencarian yang menegangkan.\r\n\r\nAkhirnya Kinan ditemukan dengan selamat oleh Nicky setelah meyakinkan diri untuk mencoba memainkan boneka tersebut, lalu Nicky dibawa ke alam Jailangkung dengan kabut biru sangat tebal. Keduanya pun berhasil keluar', 'Horror', 'https://dharma-data.com', 'https://youtube.com/embed/LdLSid_nOh0', 'JAILANGKUNG SANDEKALA.jpg', '2022-09-22'),
(27, 'user', 'RATU DANSA', 'Ratu Dansa adalah sebuah film drama fantasi Indonesia tahun 2022 yang disutradarai oleh Dyan Sunu Prastowo. Film yang tayang secara eksklusif di Bioskop Online pada 16 Desember 2022 ini dibintangi oleh Marsha Aruan, Davina Karamoy, Dennis Adhiswara, Debo Andryos dan Sandy Pradana.\r\n\r\nHarapan seorang gadis pada bintang jatuh telah membawa ibunya ke masa depan, memberi kesempatan pada mereka berdua untuk mengenal, demi menemukan jawaban akan masa depan mereka masing-masing.', 'Drama', 'https://dharma-data.com', 'https://youtube.com/embed/hD3fzA3bwQg', 'RATU DANSA.jpg', '2022-12-16'),
(28, 'user', 'MIRACLE IN CELL No. 7', 'Miracle in Cell No. 7 adalah film drama keluarga Indonesia tahun 2022 yang disutradarai oleh Hanung Bramantyo[1][2] berdasarkan film Korea Selatan tahun 2013 berjudul sama karya Lee Hwan-kyung. Film produksi Falcon Pictures ini dibintangi oleh Vino G. Bastian, Graciella Abigail, dan Indro Warkop.[3][4] Miracle in Cell No. 7 ditayangkan di bioskop Indonesia pada 8 September 2022.\r\n\r\nDodo Rozak (Vino G. Bastian) adalah seorang penjual balon berumur 20 tahun yang menyandang disabilitas intelektual, serta ayah bagi putrinya Ika Kartika (Graciella Abigail). Suatu hari tahun 2002, ia berteriak melihat anjing peliharaan Melati Wibisono (Makayla Rose), anak pelanggannya, mati ditabrak motor, namun disalahpahami sebagai ia yang membunuhnya. Ketika Dodo berusaha menenangkannya, Melati lari dan tersandung sebuah tali lalu jatuh tenggelam ke kolam renang dan mati. Dodo memakai kayu untuk menariknya keluar dari kolam; karena tidak bisa tercapai, ia masuk ke kolam dan membawa Melati keluar, lalu mem', 'Drama, Komedi', 'https://dharma-data.com', 'https://youtube.com/embed/0uf6QUacVgs', 'MIRACLE IN CELL No. 7.jpg', '2022-09-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(5) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user',
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `level`, `nama`, `email`, `tgl_lahir`, `Alamat`, `No_Hp`, `username`, `password`, `foto`) VALUES
(87, 'admin', 'dharma andhika', 'dharmaandhika123.gda@gmail.com', '2023-04-28', 'Denpasar, Pedungan', '089630679036', 'dharmaandhika', '78947661afee90b0f2d7d300484e8712', 'dharmaandhika123.gda@gmail.com.jpg'),
(91, 'user', 'budi setiawan', 'budi@gmail.com', '2023-07-19', 'denpasar', '089630679036', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi@gmail.com.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `nilai_absen` varchar(3) NOT NULL,
  `nilai_kuis` varchar(3) NOT NULL,
  `nilai_tugas` varchar(3) NOT NULL,
  `nilai_uts` varchar(3) NOT NULL,
  `nilai_uas` varchar(3) NOT NULL,
  `nilai_akhir` varchar(5) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `nim`, `nama`, `matakuliah`, `nilai_absen`, `nilai_kuis`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `nilai_akhir`, `grade`) VALUES
(19, 19, 'Dharma Andhika', 'Akuntansi', '85', '80', '80', '78', '79', '79.85', 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indeks untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_film`
--
ALTER TABLE `tb_film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `username` (`username`,`password`),
  ADD KEY `password` (`password`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_film`
--
ALTER TABLE `tb_film`
  MODIFY `id_film` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
