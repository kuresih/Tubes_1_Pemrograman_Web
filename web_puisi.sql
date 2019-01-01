-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 11:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_puisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_puisi`
--

CREATE TABLE `create_puisi` (
  `id_puisi` int(20) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `nama_penulis` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `isi_puisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_puisi`
--

INSERT INTO `create_puisi` (`id_puisi`, `judul`, `nama_penulis`, `kategori`, `isi_puisi`) VALUES
(3, 'Izinkan', 'Ita Sugiarti', 'Harapan', '<p>Dalam sunyi aku berdiri menghapus air mata hati...<br />Mengharap pada sang illahi rabbi...<br />Membentangkan kain sebagai bukti hati...<br />Menengadahkan kedua tangan sebagai bukti....<br />Meratapi segala derita didalam hati...<br /><br />Kepada-Mu illahi rabbi aku meminta ketenangan hati...<br />Kepada-Mu illahi rabbi aku berserah diri....<br />Kepada-Mu illahi rabbi pemilik alam raya ini ...<br />Izinkanlah hamba menjadi satu tanda bukti ketenangan hati berada dekat pada sang illahi....</p>'),
(4, 'Elegi', 'Febria Lestari', 'Romance', '<p>Aku terjerat<br />Pada pesonamu yang kian memikat<br />Aku tersesat<br />Pada kelam matamu yang kian mengikat<br /><br />Kau adalah sosok sempurna<br />Di balik kesederhanaan yang ada<br />Senyumanmu mampu menggetarkan jiwa<br />Sampai di hati pun terasa<br /><br />Tapi ku sadar<br />Senyummu telah lama pudar<br />Terganti tawa pilu tanpa sadar<br />Melekat di bibir yang perlahan bergetar<br /><br />Kau memakai topeng itu lagi<br />Berlagak seperti tokoh sempurna dalam drama dengan senyuman<br />Namun kau tetap seperti elegi<br />Yang meratap pada sebuah peristiwa kematian</p>'),
(12, 'Keputusanmu', 'Hyuwan', 'Romance', '<p>Dihatimu masih ada keraguan<br />Berat untuk melepaskan<br />Entah apa yang difikirkan<br />Tapi masih bisa dipertahankan<br />Dan harus ada salah satu di hancurkan<br /><br />Semua tergantung keputusan<br />Ketika sudah memutuskan<br />Ku harap itu yang terbaik untuk kedepan<br /><br />Gak hanya untuk satu orang<br />Karena rasa tak cukup mengucap kata sayang<br />Semua perlu pembuktian<br />Jika masih pantas pertahankan<br />Atau sebaliknya lupakan perlahan<br /><br />Mungkin akan indah pada waktunya<br />Tapi itu tak selamanya<br />Ketika aku melihat&nbsp; kau dengannya<br />Yang aku bisa hanya bertanya-tanya<br /><br />Untuk apa hati meraung<br />Diujung mata air tak terbendung<br />Aku coba sanjung-sanjung<br />Tapi mungkin kita sudah di ujung</p>'),
(13, 'kekuasaan', 'lala', 'Islami', '<p>hhds dsfjdsf jsfdhjsf</p>'),
(14, 'Pahlawan Pendidikan', 'Dian Hartini', 'Pendidikan', '<p>hjduh sdkjdsajk sdajkdsjk</p>');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('kuresih', 'kuresih'),
('kuresih', 'kuresih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_puisi`
--
ALTER TABLE `create_puisi`
  ADD PRIMARY KEY (`id_puisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_puisi`
--
ALTER TABLE `create_puisi`
  MODIFY `id_puisi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
