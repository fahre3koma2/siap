-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 05:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siap`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `file_id` int(11) NOT NULL,
  `file_nama` varchar(255) NOT NULL,
  `file_display` varchar(255) DEFAULT NULL,
  `file_user` varchar(10) DEFAULT NULL,
  `file_status` varchar(20) NOT NULL,
  `file_app` varchar(10) DEFAULT NULL,
  `file_dept` varchar(10) NOT NULL,
  `file_tgl_app` date DEFAULT NULL,
  `file_desk` text DEFAULT NULL,
  `file_tag` text DEFAULT NULL,
  `file_dok` varchar(225) DEFAULT NULL,
  `file_created` date NOT NULL,
  `file_createby` varchar(10) NOT NULL,
  `file_updated` date NOT NULL,
  `file_updateby` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`file_id`, `file_nama`, `file_display`, `file_user`, `file_status`, `file_app`, `file_dept`, `file_tgl_app`, `file_desk`, `file_tag`, `file_dok`, `file_created`, `file_createby`, `file_updated`, `file_updateby`) VALUES
(1, 'Denver', NULL, NULL, 'Approve', NULL, '2', NULL, 'Son', 'sop', 'gmail-tugas-kandidat-staff-it-1596363855.pdf', '2020-08-02', '1', '2020-08-02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(20) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `nama_google_plus` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rekening` text DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `nama_singkat`, `tagline`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_plus`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `nama_google_plus`, `singkatan`, `google_map`, `gambar`, `video`, `rekening`, `tanggal`) VALUES
(1, 'PT. SIAP', 'PT. SIAP', 'SIAP', 'PT. Surya Inti Aneka Pangan', 'PT. Surya Inti Aneka Pangan', 'www.ptsiap.com', 'admin@ptsiap.com', 'hrd@ptsiap.com', 'Jl. Raya Bulang no 08, Kecamatan Prambon. Sidoarjo, JAWA TIMUR', '-', '-', '-', 'logo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '2020-08-01 08:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `user_nip` varchar(50) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_alamat` varchar(225) NOT NULL,
  `user_sex` varchar(2) NOT NULL,
  `user_tlp` varchar(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pict` varchar(255) DEFAULT NULL,
  `user_level` varchar(50) NOT NULL,
  `user_username` varchar(32) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_create` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_lastlogin` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nip`, `user_nama`, `user_alamat`, `user_sex`, `user_tlp`, `user_email`, `user_pict`, `user_level`, `user_username`, `user_password`, `user_create`, `user_update`, `user_lastlogin`) VALUES
(1, '201920209090', 'Denver', 'Spanyol', 'L', '210007079090', 'denver.moneyheist@gmail.com', 'admin.jpg', '1', 'adminsiap', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2020-08-02 15:20:12', '2020-08-02 15:20:12', '2020-07-31 14:41:12'),
(2, '95590373', 'Unjani Tania Pudjiastuti S.I.Kom', 'Ds. Cikutra Timur No. 57, Dumai 40455, KalBar', 'L', '0435 7606 2917', 'jaiman85@domain.com', 'admin.jpg', '4', 'dprasetyo', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1985-12-16 17:00:00', '2018-08-07 17:00:00', '1979-03-02 17:00:00'),
(3, '34738517', 'Raina Rachel Hassanah', 'Kpg. Veteran No. 215, Sorong 66078, KalSel', 'L', '0782 8687 5122', 'cinta72@domain.com', 'admin.jpg', '5', 'luthfi45', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1970-01-26 17:00:00', '1988-05-10 17:00:00', '1984-01-09 17:00:00'),
(4, '24910948', 'Putri Pudjiastuti', 'Gg. Jend. A. Yani No. 468, Probolinggo 33821, Papua', 'L', '0455 3094 432', 'zkurniawan@domain.com', 'capture-1596362200.PNG', '5', 'isiregar', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2020-08-02 09:56:40', '2020-08-02 09:56:40', '2014-12-13 17:00:00'),
(5, '65407281', 'Mila Uli Widiastuti S.T.', 'Kpg. Jayawijaya No. 525, Administrasi Jakarta Pusat 93380, KalTeng', 'P', '(+62) 339 4405 007', 'panji.thamrin@domain.com', 'admin.jpg', '3', 'ynuraini', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1987-10-23 17:00:00', '2010-05-13 17:00:00', '1977-04-16 17:00:00'),
(6, '62347308', 'Latika Yulianti', 'Jln. Bambu No. 62, Sukabumi 45777, KalBar', 'P', '(+62) 300 3839 896', 'mila.kuswoyo@domain.com', 'admin.jpg', '5', 'utama.eka', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2002-09-29 17:00:00', '1976-06-30 17:00:00', '1976-05-10 17:00:00'),
(7, '4883459', 'Jaeman Winarno', 'Jln. Sadang Serang No. 5, Padang 49021, PapBar', 'P', '(+62) 279 8775 923', 'galur26@domain.com', 'admin.jpg', '3', 'siti23', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1996-09-23 17:00:00', '2006-10-21 17:00:00', '2002-11-21 17:00:00'),
(8, '15039394', 'Dalimin Januar', 'Gg. Sukajadi No. 699, Ternate 77071, KalTim', 'P', '(+62) 553 1176 0188', 'eva03@domain.com', 'admin.jpg', '5', 'haryanto.shania', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2010-12-07 17:00:00', '2000-08-22 17:00:00', '1976-08-08 17:00:00'),
(9, '10605703', 'Taswir Wisnu Tarihoran S.IP', 'Jln. Moch. Toha No. 185, Sorong 87941, NTB', 'L', '(+62) 922 4886 0835', 'cindy.manullang@domain.com', 'admin.jpg', '4', 'bala.purwanti', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1973-01-04 17:00:00', '2001-08-15 17:00:00', '2007-11-08 17:00:00'),
(10, '25017109', 'Johan Prabowo M.M.', 'Ds. Abdul. Muis No. 903, Blitar 62746, SulBar', 'L', '0945 2108 161', 'prima50@domain.com', 'admin.jpg', '2', 'esusanti', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1991-09-03 17:00:00', '1991-10-26 17:00:00', '2000-07-13 17:00:00'),
(11, '49428550', 'Halim Damu Waluyo S.Kom', 'Dk. Banal No. 402, Metro 36177, KalUt', 'P', '023 4535 429', 'paris35@domain.com', 'admin.jpg', '5', 'prabowo.unjani', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1998-02-16 17:00:00', '1970-06-16 17:00:00', '1971-05-07 17:00:00'),
(12, '44143738', 'Usyi Zulaika S.IP', 'Ki. Nanas No. 613, Kendari 43285, Gorontalo', 'P', '(+62) 633 2197 587', 'qputra@domain.com', 'admin.jpg', '3', 'phidayanto', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1987-07-01 17:00:00', '2019-08-19 17:00:00', '2002-05-05 17:00:00'),
(13, '92512177', 'Karya Winarno', 'Ki. Pelajar Pejuang 45 No. 690, Makassar 69700, SulTra', 'L', '0308 0013 0270', 'ksudiati@domain.com', 'admin.jpg', '5', 'himawan.fujiati', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1999-07-14 17:00:00', '1977-05-18 17:00:00', '1995-08-14 17:00:00'),
(14, '58774943', 'Carla Lailasari', 'Jr. Dr. Junjunan No. 141, Manado 40398, DIY', 'P', '0229 7307 417', 'kamila.hariyah@domain.com', 'admin.jpg', '4', 'salsabila85', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2017-02-20 17:00:00', '1991-09-01 17:00:00', '2005-01-13 17:00:00'),
(15, '275712', 'Endra Prayoga', 'Kpg. Adisucipto No. 795, Banjarmasin 59774, Bengkulu', 'L', '(+62) 572 6097 717', 'dagel50@domain.com', 'admin.jpg', '2', 'farhunnisa41', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1973-08-19 17:00:00', '2000-04-04 17:00:00', '1982-02-21 17:00:00'),
(16, '96084589', 'Caket Bahuwirya Pangestu S.Ked', 'Gg. Yogyakarta No. 924, Bitung 90471, KalUt', 'L', '0826 450 536', 'nsamosir@domain.com', 'admin.jpg', '4', 'purnawati.maria', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2016-07-23 17:00:00', '1988-03-27 17:00:00', '2008-08-25 17:00:00'),
(17, '83220247', 'Usman Nababan', 'Ds. Suryo No. 756, Madiun 62560, KepR', 'P', '0599 0350 086', 'garda.hartati@domain.com', 'admin.jpg', '4', 'banara.padmasari', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1971-07-14 17:00:00', '2009-09-26 17:00:00', '1972-07-04 17:00:00'),
(18, '92373921', 'Harjaya Cakrabirawa Hidayat S.Sos', 'Dk. Arifin No. 551, Makassar 74528, Aceh', 'P', '0484 0065 3351', 'julia94@domain.com', 'admin.jpg', '2', 'suartini.emas', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1984-09-29 17:00:00', '1987-11-21 17:00:00', '1970-12-12 17:00:00'),
(19, '82119394', 'Ciaobella Lestari', 'Jln. Asia Afrika No. 540, Serang 40389, Banten', 'L', '0664 3229 348', 'spangestu@domain.com', 'admin.jpg', '3', 'ikin.laksmiwati', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '1981-02-13 17:00:00', '2013-04-30 17:00:00', '1988-06-28 17:00:00'),
(20, '15278779', 'Hartana Samosir', 'Jr. Basmol Raya No. 590, Pematangsiantar 92092, NTT', 'P', '(+62) 496 7371 604', 'owahyuni@domain.com', 'admin.jpg', '3', 'tari81', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2015-11-30 17:00:00', '1996-12-05 17:00:00', '1995-11-17 17:00:00'),
(21, '34215236', 'Eli Pratiwi', 'Gg. Supono No. 147, Prabumulih 56436, Aceh', 'P', '0211 5240 633', 'hana.usamah@domain.com', 'admin.jpg', '5', 'clara75', '7fd66f416f4a4aae4fad2641f08acc078b0c4882', '2017-03-20 17:00:00', '1983-09-08 17:00:00', '1976-02-06 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
