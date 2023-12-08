-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2023 pada 14.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(122) NOT NULL,
  `foto` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(5, 'Ingatlah bahwa tak ada yang abadi di dunia ini, termasuk masalah yang ada dalam hidupmu.  Baca artikel detikbali, \"100+ Ka', '20231004035832.jpg'),
(7, 'We Have A good time,didn\'t we?', '20231115025533.jpg'),
(8, 'Love Was Happy', '20231115053337.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(123) NOT NULL,
  `foto` varchar(123) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`, `tanggal`) VALUES
(1, 'MAAF PEMULA!', '20231004161206.jpg', '2023-10-04'),
(3, 'TOLONG KOREKSINYA!', '20231004162519.jpg', '2023-10-04'),
(4, 'van gg', '20231004162954.jpg', '2023-10-04'),
(7, 'coba', '20231004164329.jpg', '0000-00-00'),
(8, 'COba', '20231011063401.jpg', '0000-00-00'),
(9, 'perkewoh', '20231011063451.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Sejarah'),
(4, 'Bahasa Indonesia'),
(5, 'Fun Fact'),
(6, 'vian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(123) NOT NULL,
  `profil_website` text NOT NULL,
  `about_world` text NOT NULL,
  `kata_kata` text NOT NULL,
  `instagram` varchar(123) NOT NULL,
  `facebook` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `alamat` varchar(123) NOT NULL,
  `whatsapp` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `about_world`, `kata_kata`, `instagram`, `facebook`, `email`, `alamat`, `whatsapp`) VALUES
(1, 'D3L\'s', '<p>web ini dibuat pada tahun 2023 tepat 10 tahun ketika aku sudah memiliki segalanya waktu bergerak sangat cepat ya jadi jangan berkedip kawan Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae maxime sint perferendis praesentium similique eaque, incidunt tempore enim nostrum pariatur! Modi placeat at sapiente maiores quod alias fugiat corporis voluptatum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae maxime sint perferendis praesentium similique eaque, incidunt tempore enim nostrum pariatur! Modi placeat at sapiente maiores quod alias fugiat corporis voluptatum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae maxime sint perferendis praesentium similique eaque, incidunt tempore enim nostrum pariatur! Modi placeat at sapiente maiores quod alias fugiat corporis voluptatum!</p>', '<p><span style=\"font-family: \'courier new\', courier, monospace;\">The mango is perfect in that it is always yellow and if it&rsquo;s not, I don&rsquo;t want to hear about it. The mango&rsquo;s only flaw, and it&rsquo;s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</span></p>', '<p><span style=\"font-family: \'comic sans ms\', sans-serif;\">Maybe I\'am not yours and you aren\'t mine but i\'ll there for you when you need me</span></p>', 'https://www.instagram.com/f.fadil.k/', 'https://www.facebook.com/profile.php?id=100090353552195&mibextid=ZbWKwL', 'fadilgowther@gmail.com', 'https://www.google.com/maps/place/Bandardawung,+Kec.+Tawangmangu,+Kabupaten+Karanganyar,+Jawa+Tengah/@-7.6685274,111.076145', 'https://wa.me/089681379056');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul_konten` varchar(60) NOT NULL,
  `isi_konten` text NOT NULL,
  `foto` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `id_kategori` varchar(60) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul_konten`, `isi_konten`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(7, '10 November', 'Pada tanggal 1 September 1945 terdapat seruan untuk secara serentak mengibarkan bendera Merah Putih di seluruh Indonesia. Di Surabaya, pada tanggal 18 September 1945, pasukan Belanda dibawah Mr. W.V.Ch. Ploegman mengibarkan bendera Belanda (Merah, Putih, Biru) di Hotel Yamato tanpa persetujuan RI. Keesokan harinya pada tanggal 19 September 1945, berkumpullah para pemuda Surabaya yang geram melihat kembali berkibarnya bendera Belanda.', '20231009154439.jpg', '10-November', '2', '2023-10-09', 'tukijo'),
(8, 'Pengertian Teks Hikayat dan Strukturnya', 'Pengertian Hikayat\r\nLayaknya cerpen maupun novel, hikayat juga termasuk prosa atau karya sastra berupa karangan yang berbentuk narasi dan tidak terikat oleh rima. Hikayat adalah cerita Melayu klasik yang menonjolkan unsur penceritaan berciri kemustahilan dan kesaktian para tokohnya. Melalui hikayat, kamu bisa memetik nilai-nilai kehidupan untuk menjadi pribadi yang lebih baik dan bijaksana.\r\n\r\nContohnya, kisah Mahabharata mengandung pesan agar umat manusia senantiasa berbuat berkata jujur, setia, bertanggungjawab, ikhlas, serta menggali potensi yang ada dalam diri masing-masing.\r\nKarakteristik Hikayat\r\nSebuah karangan dapat dikatakan sebagai hikayat apabila memiliki ciri atau karakteristik sebagai berikut:\r\n\r\n \r\n\r\n1. Kemustahilan\r\nBaik cerita, tokoh, dan latar dalam hikayat mengandung kemustahilan. Dengan kata lain, hikayat tidak logis serta tidak bisa diterima oleh nalar. Contohnya, air susu harimau dapat menyembuhkan sakit mata yang diderita seorang puteri kerajaan.\r\n\r\n \r\n\r\n2. Tokoh Sakti\r\nTokoh-tokoh yang terkandung pada hikayat biasanya mempunyai kemampuan seperti di film superhero. Dalam kisah Mahabharata, ada tokoh Arjuna yang memiliki kemampuan memanah di atas rata-rata. Ada pula Gatotkaca, tokoh perwayangan Jawa yang bisa terbang tanpa menggunakan sayap.\r\n\r\n \r\n\r\n3. Anonim\r\nKebanyakan penulis cerita hikayat tidak diketahui secara pasti (anonim). Hikayat disampaikan melalui lisan dan turun-temurun. Meski begitu, ada beberapa sumber yang mengungkap penulis dibalik cerita hikayat terkenal seperti Mahabharata, yaitu Vyasa Krisna Dwipayana yang berkebangsaan India pada tahun 400 sebelum Masehi.\r\n4. Istanasentris\r\nKalau kamu perhatikan, latar belakang cerita dalam hikayat berlangsung di istana. Perebutan tahta, konflik antar saudara, perjodohan puteri dan pangeran, perang antar kerajaan, dan sebagainya. Itulah sebabnya, hikayat bersifat istanasentris.\r\n\r\n \r\n\r\n5. Alur Berbingkai\r\nKarakteristik lain yang terdapat pada hikayat yaitu alurnya yang berbingkai. Artinya, suatu hikayat dapat memiliki lebih dari satu cerita. Contohnya, Mahabharata mengisahkan para leluhur Pandawa dan Kurawa, hingga diterimanya Pandawa di surga. Hikayat ini terbagi menjadi 18 bagian dengan kurang lebih 1,8 juta kata. Wah, banyak banget!\r\n\r\n \r\n\r\n6. Statis\r\nHikayat adalah karya sastra yang statis atau tetap. Artinya, penggambaran dan penulisan antara satu hikayat dengan hikayat lainnya tidak terlalu berbeda. Bahkan, beberapa tokohnya bisa jadi mempunyai kemiripan. Contohnya, tokoh Srikandi terdapat di dalam kisah Mahabharata dan pewayangan Jawa.\r\n\r\n \r\n\r\n7. Edukatif\r\nWalaupun bercerita tentang hal-hal di luar nalar, kenyataannya hikayat mengandung amanat yang bisa diterapkan di kehidupan sehari-hari. Bagaimana memperlakukan orang yang lebih tua, belajar untuk ikhlas, berkorban demi kepentingan bersama, hingga pelajaran mengenai karma baik dan buruk.\r\n', '20231009170522.jpg', 'Pengertian-Teks-Hikayat-dan-Strukturnya', '4', '2023-10-09', 'tukijo'),
(9, 'Teks Biografi', 'Pengertian Teks Biografi\r\nTeks biografi adalah teks yang berisikan kisah suatu tokoh dalam mengarungi kehidupannya. Teks ini ditulis oleh seseorang agar tokoh tersebut dapat diteladani banyak orang. Penulisan kisah hidup tokoh mencakup permasalahan yang pernah dihadapi maupun kelebihan-kelebihan tokoh yang dapat menginspirasi. \r\n\r\nBiografi biasanya berisi tentang sejarah hidup seseorang sejak lahir hingga saat ini. Bahkan, sampai tokoh tersebut meninggal dunia. Tokoh yang biasanya dibuatkan biografi antara lain tokoh terkenal, orang sukses, dan seseorang yang berpengaruh atau inspiratif di masyarakat. Contohnya, seperti pahlawan, negarawan, penemu, penguasaha, sastrawan, dan sebagainya.\r\n\r\nSerupa dengan biografi, terdapat pula teks autobiografi. Autobiografi adalah teks yang berisikan kisah hidup seorang tokoh yang ditulis oleh dirinya sendiri. Namun, perbedaannya terletak pada penulisnya. Biografi ditulis oleh orang lain, sedangkan autobiografi ditulis sendiri oleh tokoh yang bersangkutan. Jadi, jangan sampai tertukar, ya!', '20231009171014.jpg', 'Teks-Biografi', '4', '2023-10-09', 'tukijo'),
(10, 'Tiny Mce', '<p><span style=\"font-family: \'arial black\', sans-serif;\">Tiny Impact<span style=\"font-family: \'andale mono\', monospace;\">&nbsp;</span></span></p>', '20231025031622.jpg', 'Tiny-Mce', '5', '2023-10-25', 'tukijo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` enum('Admin','Kontributor') NOT NULL,
  `recent_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `recent_login`, `foto`) VALUES
(10, 'tukijo', '202cb962ac59075b964b07152d234b70', 'kijo', 'Admin', '2023-11-28 12:44:29', '20231127153531.jpg'),
(11, 'solihkun', 'caf1a3dfb505ffed0d024130f58c5cfa', 'solih', 'Kontributor', '2023-11-27 14:44:13', '20231127154350.jpg'),
(16, 'gagga', 'e10adc3949ba59abbe56e057f20f883e', 'gugu', 'Kontributor', '2023-11-28 13:24:02', '20231127152949.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Database: `cmsgozi`
--
CREATE DATABASE IF NOT EXISTS `cmsgozi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cmsgozi`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(8, 'The Old Architecture', '20231114150231.jpg'),
(9, 'coba', '20231114150758.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Bahasa Indonesia'),
(3, 'Sejarah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Al-Ibra Ghoziy\'s web', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit', 'Aa', 'A', 'Aaa', 'A', '098765');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(3, 'wlakdsmf vcmwsd', ',', '20231107154030.jpg', 'lwlakdsmf-vcmwsd', '2', '2023-11-07', 'kocak'),
(4, 'komoonioppl', 'opkmjioqwertyuuwa3excfgvh', '20231114152410.jpg', 'komoonioppl', '2', '2023-11-14', 'kocak'),
(5, 'nibjjasji c', 'pokcv ks vpqoa', '20231114152454.jpg', 'nibjjasji-c', '2', '2023-11-14', 'kocak'),
(6, 'd cqje acwijv wvi', 'idnckow avjq', '20231114152525.jpg', 'd-cqje-acwijv-wvi', '2', '2023-11-14', 'kocak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(4, 'kocak', 'gayamu', '202cb962ac59075b964b07152d234b70', 'Admin'),
(5, 'gozionalisme', 'al', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `coba_login`
--
CREATE DATABASE IF NOT EXISTS `coba_login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `coba_login`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ayo_login`
--

CREATE TABLE `ayo_login` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ayo_login`
--

INSERT INTO `ayo_login` (`id`, `name`, `password`, `level`) VALUES
(1, 'dugong', '123', 'Admin'),
(2, 'okta', 'okta', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `user`, `password`) VALUES
(1, 'dadangs', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ayo_login`
--
ALTER TABLE `ayo_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ayo_login`
--
ALTER TABLE `ayo_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `kasir1`
--
CREATE DATABASE IF NOT EXISTS `kasir1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kasir1`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hidangan`
--

CREATE TABLE `hidangan` (
  `id_brg` int(11) NOT NULL,
  `nama_hidangan` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hidangan`
--

INSERT INTO `hidangan` (`id_brg`, `nama_hidangan`, `harga`, `gambar`) VALUES
(1, 'Mie ayam', 20000, 'mieayam.jpg'),
(4, 'indomie kuah', 50000, 'miekuah.jpg\r\n'),
(11, 'kopi', 12000, 'kopi.jpg'),
(13, 'jeruk anget/dingin', 15000, 'esjeruk.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_meja` int(128) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `nama`, `no_meja`, `tgl_pesan`) VALUES
(6, 'Tejo', 1, '2023-06-16'),
(7, 'ulil', 2, '2023-06-16'),
(8, 'ujang', 3, '2023-06-16'),
(9, 'bknklkac', 4, '2023-09-11'),
(10, 'bejoo', 5, '2023-09-11'),
(11, 'Fauzan fadil kurniawan', 6, '2023-11-17'),
(12, 'kpksf', 7, '2023-11-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_hidangan` varchar(128) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `Total` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `nama_hidangan`, `jumlah`, `harga`, `Total`) VALUES
(4, 6, 1, 'Mie ayam', 1, 20000, ''),
(5, 6, 4, 'indomie kuah', 1, 50000, ''),
(6, 6, 10, 'Bakso', 1, 30000, ''),
(7, 7, 1, 'Mie ayam', 1, 20000, ''),
(8, 8, 4, 'indomie kuah', 1, 50000, ''),
(9, 8, 1, 'Mie ayam', 1, 20000, ''),
(10, 8, 10, 'Bakso', 1, 30000, ''),
(11, 9, 1, 'Mie ayam', 1, 20000, ''),
(12, 9, 4, 'indomie kuah', 1, 50000, ''),
(13, 10, 4, 'indomie kuah', 1, 50000, ''),
(14, 11, 1, 'Mie ayam', 1, 20000, ''),
(15, 11, 4, 'indomie kuah', 1, 50000, ''),
(16, 12, 1, 'Mie ayam', 1, 20000, ''),
(17, 12, 4, 'indomie kuah', 1, 50000, ''),
(18, 13, 1, 'Mie ayam', 1, 20000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(127) NOT NULL,
  `email` varchar(127) NOT NULL,
  `image` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'fadilgg', 'fadilgowther@gmail.com', 'default.png', '$2y$10$VOrBeOHU3ocyF6ufsIRaA.XEmU9Iyz8WY1Bs0qVhAu3KuH9p8O.FW', 1, 1, '2023-11-23 15:57:21'),
(2, 'sule', 'sulee@gmail.com', 'default.png\r\n', '$2y$10$CmUoXHZPin9L4EL.1l6be.iCW1L/3uCWibFEl9JQtUEH9pk1aLO02', 2, 1, '2023-11-23 13:18:29'),
(3, 'qwertygtf', 'qwerty@gmail.com', 'default.png', '$2y$10$p1y2sdkfATapxbeUaXVQyeN9m3cdZ5rYKYQ3oKvirR/RyHaMF60gu', 3, 1, '2023-11-23 16:05:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_acces_menu`
--

CREATE TABLE `user_acces_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_acces_menu`
--

INSERT INTO `user_acces_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 1, 2),
(5, 1, 3),
(7, 1, 4),
(8, 2, 5),
(9, 1, 6),
(10, 3, 6),
(11, 3, 8),
(12, 2, 9),
(13, 3, 9),
(14, 1, 10),
(15, 2, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'home'),
(2, 'admininstrator'),
(3, 'log'),
(5, 'manager'),
(6, 'transaksi'),
(8, 'kasir'),
(9, 'invoice');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'manager'),
(3, 'kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(127) NOT NULL,
  `url` varchar(127) NOT NULL,
  `icon` varchar(127) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'home', 'fa-solid fa-house', 1),
(2, 3, 'aktivitas login', 'log', 'fa-solid fa-right-to-bracket', 1),
(3, 4, 'menu', 'menu', 'fa-solid fa-bars', 1),
(5, 5, 'produk', 'manager', 'fa-brands fa-product-hunt', 1),
(10, 6, 'daftar menu', 'daftar', 'dcve', 1),
(11, 9, 'invoice', 'invoice', 'dvjvbdjvb', 1),
(13, 10, 'Catatan Pendapatan', 'transaksi', 'a-thin fa-cart-shopping', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hidangan`
--
ALTER TABLE `hidangan`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_acces_menu`
--
ALTER TABLE `user_acces_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hidangan`
--
ALTER TABLE `hidangan`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_acces_menu`
--
ALTER TABLE `user_acces_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Database: `kas_buku`
--
CREATE DATABASE IF NOT EXISTS `kas_buku` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kas_buku`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `keterangan` varchar(77) NOT NULL,
  `nominal` float NOT NULL,
  `username` varchar(55) NOT NULL,
  `jenis_transaksi` varchar(55) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `keterangan`, `nominal`, `username`, `jenis_transaksi`, `tanggal`) VALUES
(6, 'kas', 10000000, 'hallo', 'pemasukan', '2023-08-22'),
(7, 'duit bulanan pasar', 20000, 'hallo', 'pemasukan', '2023-08-22'),
(8, 'kas', 123456, 'tukijo', 'pemasukan', '2023-08-24'),
(10, 'bayar hutang ke desa sebelah', 10000000, 'tukijo', 'pengeluaran', '2023-08-24'),
(11, 'duit bulanan pasar', 123456, 'hallo', 'pengeluaran', '2023-08-22'),
(12, 'bulanan pak bos', 900000, 'tukijo', 'pemasukan', '2023-08-28'),
(13, 'cjdsbk,mvs', 1234570, 'tukijo', 'pemasukan', '2023-08-30'),
(15, 'beli sate', 20000, 'tukijo', 'pengeluaran', '2023-08-30'),
(16, 'mengingatkan', 2000, 'solihkun', 'pemasukan', '2023-10-02'),
(17, 'a', 0, 'tukijo', 'pemasukan', '2023-10-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `level` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(34, 'solihkun', 'zakaria', '202cb962ac59075b964b07152d234b70', 'admin'),
(38, 'tukijo', 'bejo', 'caf1a3dfb505ffed0d024130f58c5cfa', 'user'),
(39, 'hallo', 'hallo', '598d4c200461b81522a3328565c25f7c', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data untuk tabel `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"cms\",\"table\":\"user\"},{\"db\":\"cms\",\"table\":\"galeri\"},{\"db\":\"kasir1\",\"table\":\"invoice\"},{\"db\":\"kasir1\",\"table\":\"hidangan\"},{\"db\":\"kasir1\",\"table\":\"pesanan\"},{\"db\":\"kas_buku\",\"table\":\"user\"},{\"db\":\"cms\",\"table\":\"kategori\"},{\"db\":\"cms\",\"table\":\"konfigurasi\"},{\"db\":\"cms\",\"table\":\"konten\"},{\"db\":\"kasir1\",\"table\":\"user_role\"}]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data untuk tabel `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-11-28 13:43:56', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"id\"}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Struktur dari tabel `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indeks untuk tabel `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indeks untuk tabel `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indeks untuk tabel `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indeks untuk tabel `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indeks untuk tabel `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indeks untuk tabel `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indeks untuk tabel `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indeks untuk tabel `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indeks untuk tabel `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indeks untuk tabel `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indeks untuk tabel `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indeks untuk tabel `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indeks untuk tabel `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `pkwu`
--
CREATE DATABASE IF NOT EXISTS `pkwu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pkwu`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(123) NOT NULL,
  `user_role` enum('kasir','manager','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `user_role`) VALUES
(1, 'tukij0', 'tukijo@gmail.com', '202cb962ac59075b964b07152d234b70', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
