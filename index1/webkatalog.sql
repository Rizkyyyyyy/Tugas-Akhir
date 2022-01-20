-- phpMyAdmin SQL Dump
-- version 5.0.4deb2ubuntu5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2022 at 02:41 PM
-- Server version: 8.0.27-0ubuntu0.21.10.1
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webkatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `no_telp`, `alamat`, `pesan`) VALUES
(4, 'Rizkyyy', '082188940057', 'Banyumanik', 'Suka');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `foto`, `detail`, `harga`) VALUES
(1, 'Acer Aspire 3 Slim A314-35-C1UK Intel-4GB-256GB- Win10 Home - OHS 2019 - Silver', 'https://images.tokopedia.net/img/cache/900/product-1/2021/6/8/383037/383037_cef6db5e-37d3-444e-9c46-4db00f1e1612.png', 'Brands Acer  Detail Processor Intel Celeron N5100 (1.10 GHz; 4M Cache; up to 2.80 GHz)  RAM 4GB  Storage 256GB SSD', 5149000),
(2, 'ASUS ROG Zephyrus G14 GA401 Ryzen7 4800 16GB 512ssd GTX1650 4GB W10 - GRAY', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/1/28/c1d0c093-bbc7-45f9-81e2-d2aa9d73e04d.png', 'Asus ROG Zephyrus G14 - Processor AMD Ryzen 7 4800 - Operating System Windows 10 Home - Memory 16 GB DDR4 - Storage 512gb NVMe™ PCIe® - Graphic NVIDIA® GeForce GTX1650 4GB - Display 14-inch Non-glare Full HD (1920 x 1080) IPS-level panel', 16599000),
(9, 'MSI Modern 14 B11MO [9S7-14D314-622]', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/9/13/e10aefb7-a8a0-4d43-bea6-a49d18299b48.jpg', 'MSI Modern 14 B11MO [9S7-14D314-622] - CARBON GREY Garansi: 2 tahun resmi msi indonesia Spesifikasi: Platform : Notebook Tipe Prosesor : Intel Core i7 Processor', 12500000),
(10, 'ASUS VivoBook 14 M415DAO ', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/8/2/2598acec-97a7-4435-a355-74f80e8f8489.jpg', 'Speksifikasi: • AMD Ryzen™ 3 3250U 8GB DDR4 • 512GB M.2 NVMe™ PCIe® 3.0 SSD • AMD Radeon™ Graphics • Windows 10 Home 64bit', 7000000),
(11, 'ASUS TUF DASH F15 FX516PC I5-11300H 8GB 512GB RTX3050 4G144Hz W10 OHS', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/8/28/dcb11846-a1ef-4751-bb6f-2826986a3282.jpg', '• Processor : Intel® Core™ i5-11300H Processor 3.1 GHz, 4 cores (8M Cache, up to 4.4GHz)\r\n• Memori : 8GB DDR4 3200Mhz Extra one slot\r\n• Grafis : NVIDIA® GeForce RTX™ 3050 Laptop GPU 4GB GDDR6', 15000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
