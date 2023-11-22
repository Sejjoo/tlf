-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 08:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `Student_ID` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `Student_ID`, `email`, `password`, `profile_image_path`) VALUES
(1, 'Luke Sellado', '2021334', 's2021334@usls.edu.ph', '$2y$10$dWeC2yL5m4ZYL476QcQM7e1KAHl8L0JQ8wvYxWnoileTkGS213dsW', NULL),
(5, 'Jhustin Paul O. Zamora', '2120301', 's2120301@usls.edu.ph', '$2y$10$ZNFozXPXpVChC88xqfZoxONNjuJHm2uazhfw13XlkyVF4HsAOCWxi', NULL),
(6, 'Kerschtine B. Billiones', '2121059', 's2121059@usls.edu.ph', '$2y$10$hw7WU1p79CVvrOrEtGdHo.mbvMUBh574wXMVNTV7exqAqih8wH4Du', NULL),
(7, 'Paulo John C. Jimenea', '2120757', 's2120757@usls.edu.ph', '$2y$10$VRH4JfjrO2DKK8X2tCL2iuuv0O.i0qK.2yy67VtgnrS6M.ewS2Ddu', NULL),
(11, 'Gian Aibo C. Boyero', '2120795', 's2120795@usls.edu.ph', '$2y$10$akbTtRNtjMFTN1skbA8SG.ZZdOhoES5WUPlUqHbqeMzOM3vEtpZKy', NULL),
(16, 'Jose Emmanuel Felizario', '2120492', 's2120492@usls.edu.ph', '$2y$10$oVbL29EkGEU3dtfLX9nhSeq6nJJ7VmHm.uin4L2kSCa2p6ISsfRAG', NULL),
(18, 'Ritz Airro', '2121309', 's2121309@usls.edu.ph', '$2y$10$f0EqY5iRELAyeCGgIsyaN.GjMV265kks5uyoySEIIhD1XCSFDC.tC', NULL),
(19, 'Patrick Flores', '2120000', 's2120000@usls.edu.ph', '$2y$10$oq05eyR2EDfVMx7EqVBUhOICMUB4M.fMgpx.fI2QNQUA2QNs.wEMC', NULL),
(21, 'Luke Sellado', '2021334', 'lukesellado04@gmail.com', '$2y$10$eRp9gOa0MWoQc4slNgBOSOQ/ym.HZOEC7SxPLW12Of9G/cBi12dJC', 'uploads/db33216e0ac0d54ee9238745f2ebb4b4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
