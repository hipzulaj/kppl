-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 12:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yummy`
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `fullname`, `alamat`, `email`, `no_hp`) VALUES
('IJUL', '12345678', 'hipzul achmad jabbar', 'dimana aja bole', 'boy@gmail.com', '13124234'),
('njul', '12345678', 'hipzul achmad jabbar', 'awdasd', 'hipzulachmadjabbar@g.com', '1321312113');

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
('ASOY', 'MANTAP', 'thumb-1920-78846.jpg', 'IHIW', 999999999, '1512946404'),
('MENU001', 'AYAM SAUS BLACKPEPPER', 'yummyblackpep.JPG', 'Variasi nasi ayam yang dilumuri bumbu lada hitam yang nikmat, dengan sayur-mayur berupa wortel dan juga terdapat mayonaise untuk menambah cita rasa.', 8000, '1512914684'),
('MENU002', 'AYAM SAUS BOLOGNESE', 'yummybolog.JPG', 'Variasi nasi ayam yang dilumuri bumbu bolognese seperti pada spaghetti, dengan sayur-mayur berupa wortel, buncis, dan jagung serta terdapat mayonaise untuk menambah cita rasa.', 8000, '1496113947'),
('MENU003', 'AYAM SAUS INGGRIS SPESIAL', 'yummyinggris.JPG', 'Variasi nasi ayam yang dilumuri saus inggris serta dengan nasi merah yang enak, dilengkapi dengan sayur-mayur berupa wortel, buncis, dan jagung, serta terdapat mayonaise untuk menambah cita rasa.', 8000, '1496122563'),
('MENU004', 'AYAM CABE CABEAN', 'yummycabe.JPG', 'Variasi nasi ayam yang ditaburi oleh cabe dan garam, menghasilkan perpaduan rasa pedas dan asin yang tidak pernah terbayangkan sebelumnya dan membuat ketagihan.', 12000, '1512449291');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(50) NOT NULL,
  `nama_pemesan` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `menu` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `Status_Order` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_pemesan`, `username`, `no_telp`, `alamat`, `menu`, `jumlah`, `total_harga`, `Status_Order`) VALUES
('1496067610', 'hipzul achmad jabbar', 'njul', '0888', 'Jalan jalan', 'AYAM SIRAM', 5, 40000, 'Pesanan Selesai'),
('1496067660', 'Gilang lagi', '', '088888', 'jalan', 'CHICKEN BALLS', 7, 49000, 'Belum Dikonfirmasi'),
('1496068927', 'Gilang is back', '', '088801762650', 'Penjaringan Timur V / PD-33', 'UDANG KATSU', 8, 64000, 'Belum Dikonfirmasi'),
('1496122662', 'Umar', '', '0888111', 'Jalan Keputih', 'AYAM SAUS BLACKPEPPER', 1, 8000, 'Belum Dikonfirmasi'),
('1512448297', 'NJUL', '', '+62 82231376570', 'dimana aja bole', 'AYAM SAUS BLACKPEPPER', 5000, 40000000, 'Belum Dikonfirmasi'),
('1512449241', 'Paujan', '', '+62 82231376570', 'dimana aja bole', 'AYAM SAUS INGGRIS SPESIAL', 50000, 400000000, 'Belum Dikonfirmasi'),
('1512449479', 'SINSIN', '', '+62 82231376570', 'jalan jalan sore', 'AYAM CABE CABEAN', 1000, 12000000, 'Belum Dikonfirmasi'),
('1512903986', 'hipzul achmad jabbar', 'njul', '1321312113', 'awdasd', 'AYAM CABE CABEAN', 10, 120000, 'Belum Dikonfirmasi'),
('1512914080', 'hipzul achmad jabbar', 'IJUL', '13124234', 'dimana aja bole', 'AYAM SAUS INGGRIS SPESIAL', 100, 800000, 'Belum Dikonfirmasi'),
('1512919607', 'hipzul achmad jabbar', 'IJUL', '13124234', 'dimana aja bole', 'AYAM SAUS BOLOGNESE', 1, 8000, 'Belum Dibayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
