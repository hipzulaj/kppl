-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 05:04 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp_pbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `timestamp` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`timestamp`, `nama`, `email`, `pesan`) VALUES
('1496126953', 'Gilang', 'gdimizza@gmail.com', 'pesan rahasia'),
('1496127051', 'Habeb', 'rifaihabib29@gmail.com', 'halo'),
('1496127591', 'Ojan', 'fauzan_oji@yahoo.co.id', 'pesan singkat'),
('1496129362', 'Erica', 'maulidina.erica@gmail.com', 'coba coba'),
('1496129611', 'Habeb', 'rifaihabib29@gmail.com', 'E   N   A'),
('1496129713', 'Oeeee', 'rifaihabib29@gmail.com', 'e  n  a  e  n  a'),
('1496129873', 'Arlin', 'arlinnhk@gmail.com', 'Halo'),
('1496129958', 'ISOK ISOK', 'rifaihabib29@gmail.com', 'ISOK ISOK');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(255) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `timestamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `gambar`, `deskripsi`, `harga`, `timestamp`) VALUES
('MENU001', 'AYAM SAUS BLACKPEPPER', 'yummyblackpep.JPG', 'Variasi nasi ayam yang dilumuri bumbu lada hitam yang nikmat, dengan sayur-mayur berupa wortel dan juga terdapat mayonaise untuk menambah cita rasa.', 8000, '1496113839'),
('MENU002', 'AYAM SAUS BOLOGNESE', 'yummybolog.JPG', 'Variasi nasi ayam yang dilumuri bumbu bolognese seperti pada spaghetti, dengan sayur-mayur berupa wortel, buncis, dan jagung serta terdapat mayonaise untuk menambah cita rasa.', 8000, '1496113947'),
('MENU003', 'AYAM SAUS INGGRIS SPESIAL', 'yummyinggris.JPG', 'Variasi nasi ayam yang dilumuri saus inggris serta dengan nasi merah yang enak, dilengkapi dengan sayur-mayur berupa wortel, buncis, dan jagung, serta terdapat mayonaise untuk menambah cita rasa.', 8000, '1496122563'),
('MENU004', 'AYAM CABE GARAM', 'yummycabe.JPG', 'Variasi nasi ayam yang ditaburi oleh cabe dan garam, menghasilkan perpaduan rasa pedas dan asin yang tidak pernah terbayangkan sebelumnya dan membuat ketagihan.', 12000, '1496114884');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(50) NOT NULL,
  `nama_pemesan` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `menu` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_pemesan`, `no_telp`, `alamat`, `menu`, `jumlah`, `total_harga`) VALUES
('1496067618', 'Gilang', '0888', 'Jalan jalan', 'AYAM SIRAM', 5, 40000),
('1496067660', 'Gilang lagi', '088888', 'jalan', 'CHICKEN BALLS', 7, 49000),
('1496068927', 'Gilang is back', '088801762650', 'Penjaringan Timur V / PD-33', 'UDANG KATSU', 8, 64000),
('1496122662', 'Umar', '0888111', 'Jalan Keputih', 'AYAM SAUS BLACKPEPPER', 1, 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`timestamp`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
