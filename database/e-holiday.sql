-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 10:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-holiday`
--

-- --------------------------------------------------------

--
-- Table structure for table `event2`
--

CREATE TABLE `event2` (
  `id_event` int(11) NOT NULL,
  `nm_event` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbdetailwisata`
--

CREATE TABLE `tbdetailwisata` (
  `id` int(11) NOT NULL,
  `nm_wisata` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `map` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbdetailwisata`
--

INSERT INTO `tbdetailwisata` (`id`, `nm_wisata`, `deskripsi`, `kategori`, `lokasi`, `map`, `foto`) VALUES
(1, 'Candi Surawana', 'Candi ini memiliki nama asli sebagai Wishnubhawanapura yang dibangun sekitar abad ke 14 yang digunakan untuk seorang raja dari kerajaan Wengker yang berada dibawah kekuasaan Kerajaan Majapahit bernamaBhre Wengker. Konon katanya, relief yang terdapat di candi ini mengisahkan tentang Sri Tanjung, Arjunawiwaha, serta kisah Bubuksah dan gagak Aking. Melihat candi ini, seperitnya candi ini telah banyak mengalami pemugaran meskipun masih banyak kaki candi yang masih tersisa dan harus kita jaga. Jadi berkunjunglah ke candi ini sebelum candi ini habis dimakan usia.', 'Candi', 'Surowono, Canggu, Kec. Badas, Kediri, Jawa Timur 64217', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.410337662028!2d112.21592091376066!3d-7.746226378941413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785d70ffffffff%3A0xe25af7ca3524d922!2sCandi%20Surowono!5e0!3m2!1sen!2sid!4v1622568303127!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'candi7.jpg'),
(2, 'Air Terjun Irenggolo', 'Air Terjun Irenggolo juga merupakan salah satu tempat rekreasi yang harus dipertimbangkan, sebab objek wisata memiliki panorama alam dan lingkungan yang masih terjaga keasriannya. Objek wisata alam ini juga memiliki fasilitas penunjang yang cukup baik jika dibandingkan dengan tempat rekreasi lainnya. Fasilitas-fasilitas tersebut bertujuan agar para wisatawan yang ingin berkunjung ke sini merasa nyaman. Air Terjun Irenggolo juga menjadi tempat yang sangat tepat untuk kumpul bersama dengan keluarga ataupun sahabat.\r\nDi sekitar Air Terjun Irenggolo tersedia tempat beribadah untuk para pengunjung yang menunaikan ibadah ketika berada di objek wisata alam ini. Dan disekitar area tempat beribadah juga terdapat toilet untuk para pengunjung yang ingin buang air kecil dan besar. Semua fasilitas tersebut telah disediakan oleh penduduk lokal yang tinggal di sekitar area objek wisata tersebut.\r\nAkses jalan untuk menuju objek wisata alam ini cukup mudah, jika Anda berada di Kediri Anda dapat menggun', 'Air Terjun', 'Jugo, Mojo, Kediri, Jawa Timur', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.301001187852!2d111.84816281376204!3d-7.863535880350499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79aab67326b3ed%3A0x94e8147b5adc4f03!2sIRONGGOLO%20waterfall!5e0!3m2!1sen!2sid!4v1622571541104!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'irenggolo.jpg'),
(3, 'Gunung Kelud', 'Gunung Kelud berada di perbatasan antara Kabupaten Kediri, Kabupaten Blitar, dan Kabupaten Malang. Pengelolaannya sendiri diatur penuh oleh Pemkab Kediri. Gunung Kelud menjadi salah satu gunung teraktif di Indonesia yang telah meletus hingga 30 kali sejak tahun 1.000 masehi. Gunung ini memliki besaran letusan di skala 5 dari 8 level, artinya letusannya sangat besar menurut Volcanic Explosivity Index (VEI).\r\n\r\nPuncak-puncak tebing di Gunung Kelud saat ini adalah sisa-sisa masa purba yang tergerus letusan berkali-kali. Puncak Kelud adalah yang tertinggi berposisi di timur laut kawah, lainnya yakni Puncak Gajahmungkur di sisi barat dan Puncak Sumbing di sisi selatan.\r\n\r\nSetelah erupsi tahun 2014, anak Gunung Kelud yang sempat muncul berubah menjadi kawah lagi. Kini, Gunung Kelud punya wajah baru yang semakin indah. Pengelola wisata Gunung Kelud di Jawa Timur pun terus berbenah. Akses jalan aspal yang rusak kini diganti dan juga diperlebar dengan jalan beton. Lalu-lalang motor ojek ke tepi', 'Gunung', 'Ringinrejo, Karangrejo, Kec. Garum, Blitar, Jawa Timur', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31612.93668004926!2d112.29637926877659!3d-7.9349994841877765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788bf4425ac5e3%3A0xfdacc6dbc315617d!2sKelud!5e0!3m2!1sen!2sid!4v1623118865243!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'green.jpg'),
(4, 'Simpang Lima Gumul', 'Monumen Simpang Lima Gumul atau biasa disingkat SLG adalah salah satu bangunan yang menjadi ikon Kabupaten Kediri yang bentuknya menyerupai Arc de Triomphe yang berada di Paris, Prancis. SLG mulai dibangun pada tahun 2003 dan diresmikan pada tahun 2008, yang digagas oleh Bupati Kediri saat itu, Sutrisno.', 'Taman', 'Tugurejo, Kec. Ngasem, Kediri, Jawa Timur 64182', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.753426121562!2d112.06007491409822!3d-7.815904394367913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7857175f9cda31%3A0x3123610563e44ab3!2sSimpang%20Lima%20Gumul!5e0!3m2!1sen!2sid!4v1622694043316!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'simpang7.jpg'),
(5, 'Candi Tegowangi', 'Candi Tegowangi berbentuk bujur sangkar dan menghadap ke barat. Pondasinya terbuat dari batu bata, sedangkan balur kaki dan sebagian tubuh yang tersisa terbuat dari batu andesit. Bagian kaki candi berlipit dan berhias. Tiap sisi kaki candi ditemukan tiga panil tegak yang dihiasi raksasa atau gana yang duduk berjongkok, kedua tangan diangkat ke atas seperti mendukung bangunan candi. Di atasnya terdapat tonjolan-tonjolan berukir melingkari kaki candi. Di atas candi terdapat sisi genta yang berhias.\r\n\r\nDi halaman candi terdapat beberapa arca, yaitu Parwati, Ardhanari, Garuda berbadan manusia, dan sisa-sisa bangunan candi di sudut tenggara. Candi ini diyakini sebagai candi beraliran agama hindu.', 'Candi', 'Candirejo, Tegowangi, Kec. Plemahan, Kediri, Jawa Timur 64155', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.518573935463!2d112.1590540147778!3d-7.73468599442499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785c94ffffffff%3A0x53620a7d183d0f57!2sCandi%20Tegowangi!5e0!3m2!1sen!2sid!4v1623295360386!5m2!1sen!2sid\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Candi-Tegowangi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbgaleri`
--

CREATE TABLE `tbgaleri` (
  `id` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbgaleri`
--

INSERT INTO `tbgaleri` (`id`, `id_wisata`, `foto`) VALUES
(1, 1, 'candi7.jpg'),
(2, 1, 'Candi Surawana Kediri Jawa Timur.jpg'),
(3, 5, 'Candi-Tegowangi.jpg'),
(4, 3, 'kelud-via-tulungrejo-blitar-630x380.jpeg'),
(5, 3, '3@backpacker.man_-630x380.jpg'),
(6, 3, 'ERUPSI GUNUNG KELUD.jpg'),
(7, 4, 'Monumen SLG Kediri.jpg'),
(8, 4, 'Tempat Liburan Di Indonesia Yang Mirip Luar Negeri - LiburMulu_Com.jpg'),
(9, 4, 'Tempat Rekreasi Indah dan Menarik di Kediri Jawa Timur.jpg'),
(10, 4, 'Simpang Lima Gumul (1).jpg'),
(11, 5, 'Candi-Tegowangi-1-630x380.jpg'),
(12, 5, 'Candi-Tegowangi-7-630x380-1.jpg'),
(13, 5, 'IMG_20191020_072046.jpg'),
(14, 2, 'Air-Terjun-Irenggolo-10-630x380.jpg'),
(15, 2, 'Air-Terjun-Irenggolo-2-630x380.jpg'),
(16, 2, 'Air-Terjun-Irenggolo-9-630x380-1.jpg'),
(17, 2, 'Air-Terjun-Irenggolo-3-630x380.jpg'),
(18, 1, 'Candi-Surawana-6-630x380.jpg'),
(19, 1, 'Candi-Surawana-1-630x380.jpg'),
(20, 3, 'Pesona-dan-keindahan-gunung-kelud-kediri-630x380.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbregister`
--

CREATE TABLE `tbregister` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbregister`
--

INSERT INTO `tbregister` (`email`, `username`, `password`) VALUES
('Ardianita', 'ardianitaf@student.uns.ac.id', '062c467a7067447aa7397f623afd89cf');

-- --------------------------------------------------------

--
-- Table structure for table `tbvirtualtour`
--

CREATE TABLE `tbvirtualtour` (
  `nm_wisata` varchar(100) NOT NULL,
  `desk` varchar(1000) NOT NULL,
  `vt` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event2`
--
ALTER TABLE `event2`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tbdetailwisata`
--
ALTER TABLE `tbdetailwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbgaleri`
--
ALTER TABLE `tbgaleri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `tbregister`
--
ALTER TABLE `tbregister`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tbvirtualtour`
--
ALTER TABLE `tbvirtualtour`
  ADD PRIMARY KEY (`nm_wisata`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbgaleri`
--
ALTER TABLE `tbgaleri`
  ADD CONSTRAINT `tbgaleri_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tbdetailwisata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
