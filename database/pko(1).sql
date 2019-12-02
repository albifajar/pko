-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2019 pada 15.00
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `nomor` int(11) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `jumlah_pemilih` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id_calon`, `nama`, `kelas`, `visi`, `misi`, `nomor`, `gambar`, `jumlah_pemilih`) VALUES
(1, 'albi fajar ramadhan&&rizal jalaludin', 'XII-RPL2&&XII-RPL3', 'Memajukan ifsu ke depan pintu gerbang tol cipali', 'membuat kecerdasan buatan kepada setiap siswa yang ada di ifsu', 1, 'profile.jpg&&profile.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id_kode` int(11) NOT NULL,
  `kode_unik` varchar(8) NOT NULL,
  `status_kode` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id_kode`, `kode_unik`, `status_kode`) VALUES
(1, 'GVLIvkZ', 1),
(2, 'WXusmD0', 1),
(3, 'vqDvZ8y', 0),
(4, 'heUtG6K', 0),
(5, 'ZsU8cNx', 0),
(6, 'ZHrjPAA', 0),
(7, '5BrYaMm', 0),
(8, 'OrkWOeJ', 0),
(9, 'hdoVYIg', 0),
(10, 'p7yG9hq', 0),
(11, '1Azy4IB', 0),
(12, 'Gc1r1gp', 0),
(13, 'HfCqsC5', 0),
(14, 'YkRZzna', 0),
(15, 'cadh5dW', 0),
(16, 'oqI9fB7', 0),
(17, 'U4tnQxm', 0),
(18, 'Z2T8U4S', 0),
(19, '6C3F64x', 0),
(20, '1vJG80z', 0),
(21, '4Ho6KZ4', 0),
(22, 'dlHuqX4', 0),
(23, 'xI0Lyw4', 0),
(24, '3mPfCk7', 0),
(25, 'OIgjl3y', 0),
(26, 'WXO1VeK', 0),
(27, 'ZKg6loD', 0),
(28, 'wojsi1t', 0),
(29, 'j7vmjbL', 0),
(30, 'W2e6Fyu', 0),
(31, 'lvuFSWW', 0),
(32, 'ZwWuaCY', 0),
(33, 'ep21Ls5', 0),
(34, 'ubwCq4j', 0),
(35, 'Zgw44Y9', 0),
(36, 't821L5n', 0),
(37, 'IGdvopq', 0),
(38, 'oAH2vqJ', 0),
(39, 'RNtghJR', 0),
(40, 'u9i99KX', 0),
(41, 'rqZGk5b', 0),
(42, 'VUibFMN', 0),
(43, 'ko3Pt3g', 0),
(44, '6W6zOAv', 0),
(45, 'wGLMfXi', 0),
(46, 'RjkxdO3', 0),
(47, 'kOmM293', 0),
(48, 'Ns0rNYj', 0),
(49, 'EZqBh79', 0),
(50, 'tqmYUFt', 0),
(51, 'gn6FQQj', 0),
(52, 'E6MpEO9', 0),
(53, 'Ynnp84C', 0),
(54, 'yqpT3ZD', 0),
(55, '2QoumpK', 0),
(56, 'aKJDnwh', 0),
(57, '0my1TPa', 0),
(58, 'oXZcoWz', 0),
(59, '2uUNrEu', 0),
(60, 'nPkLx1v', 0),
(61, 'kZlFgXF', 0),
(62, 'Kb0keaN', 0),
(63, 'a7OCwOd', 0),
(64, 'PfkY0F8', 0),
(65, 'aMEaptx', 0),
(66, 'VLq0mRm', 0),
(67, 'RXLuuG6', 0),
(68, 'xo1UJpS', 0),
(69, 'PMTMWUF', 0),
(70, 'GQP74DL', 0),
(71, '2RTqLzJ', 0),
(72, '4c0IlE5', 0),
(73, 'XvXj4iu', 0),
(74, 'j7U56F5', 0),
(75, '34SZfdj', 0),
(76, 'n435uht', 0),
(77, 'J1h2oaT', 0),
(78, 'BFGsJCM', 0),
(79, 'PlSamWv', 0),
(80, '5Rs7dIo', 0),
(81, 'MNJG8yh', 0),
(82, 'PcHbMDX', 0),
(83, 'O2wxYvr', 0),
(84, '04Hu3RA', 0),
(85, 'hUKCRZz', 0),
(86, 'MSYEwo7', 0),
(87, 'RQZ6wbN', 0),
(88, '0uwo18k', 0),
(89, 'RTdzOu0', 0),
(90, 'Ik3MJ1g', 0),
(91, 'p7WnULJ', 0),
(92, '7CdsEoq', 0),
(93, 'IKyPCBX', 0),
(94, 'rJWWHaY', 0),
(95, 'mzwrxxS', 0),
(96, 'xlzPZ79', 0),
(97, 't2Fcpmm', 0),
(98, 'dJc5b2g', 0),
(99, '7xnNjhp', 0),
(100, 'u3Rbz9f', 0),
(101, 'jLWVShi', 0),
(102, 'QuQyteF', 0),
(103, 'yNGtDgY', 0),
(104, 'tDRFpV4', 0),
(105, 'RtjOaoa', 0),
(106, 'AEpkmWc', 0),
(107, '8B71phJ', 0),
(108, 'yxSW3lk', 0),
(109, 'ica8VfR', 0),
(110, 'eoUL8Oo', 0),
(111, 'ILLq5Cl', 0),
(112, 'eEE0vPl', 0),
(113, 'htqFjSN', 0),
(114, '5mUMx1j', 0),
(115, 'Jxkhu3X', 0),
(116, 'xnuXjgT', 0),
(117, 'WkuHZNS', 0),
(118, 'SHqNTar', 0),
(119, '6IYz6Pe', 0),
(120, '2Dbxw5f', 0),
(121, 'Xhf172w', 0),
(122, 'V5YIXsQ', 0),
(123, 'bAlQLLk', 0),
(124, 'INZvE0c', 0),
(125, 'tn9Sk9C', 0),
(126, '1EBV2x3', 0),
(127, 'VUB9W0U', 0),
(128, '9OH4IT2', 0),
(129, 'a037N8z', 0),
(130, 'o5QmRz4', 0),
(131, 'IZnYvK7', 0),
(132, 'j4BPhev', 0),
(133, 'aCnWbwj', 0),
(134, 'SvIoLcr', 0),
(135, 'sBRoSQA', 0),
(136, 'MssZmzU', 0),
(137, '0j3bEnd', 0),
(138, 'JALXwzc', 0),
(139, 'A2GUXew', 0),
(140, 'ApzbtN3', 0),
(141, 'fhr7Pdd', 0),
(142, 'Jv2romT', 0),
(143, 'Y32z0ay', 0),
(144, 'fOIzFja', 0),
(145, '03uvT5H', 0),
(146, 'bS1LaJx', 0),
(147, '3VwTmrQ', 0),
(148, 'N6aNt46', 0),
(149, 'ZCBEutz', 0),
(150, 'QTKk8jE', 0),
(151, 'GtkV1l3', 0),
(152, 'L9I3Up4', 0),
(153, 'qyFkMrg', 0),
(154, '1cM34hi', 0),
(155, 'kW8bZEj', 0),
(156, 'bmDWwhR', 0),
(157, 'CT6OqwE', 0),
(158, 'rW0ieiY', 0),
(159, 'R93IHDj', 0),
(160, 'AFHFk5N', 0),
(161, 'e9NSzKa', 0),
(162, 'rNn2quJ', 0),
(163, 'HkK257b', 0),
(164, '1scRSID', 0),
(165, 'olaPSDG', 0),
(166, 'MTtBWx6', 0),
(167, 'KipbuiA', 0),
(168, 'YEVHbAE', 0),
(169, 'N29qveE', 0),
(170, 'KU1XyA6', 0),
(171, 'pkEGR3H', 0),
(172, 'vE0OMBD', 0),
(173, 'zd6Y74W', 0),
(174, '8ZZuxig', 0),
(175, 'BcFzBA0', 0),
(176, '0lEmHbS', 0),
(177, 'osWeQ9Y', 0),
(178, 'aMX7FQD', 0),
(179, 'Ic6oCI7', 0),
(180, 'VaI2ud0', 0),
(181, 'pM6tm2E', 0),
(182, 'GtWdeQK', 0),
(183, 'F650jJe', 0),
(184, 'n18Va8I', 0),
(185, 'gIsvPJn', 0),
(186, 'XHsJ2uB', 0),
(187, 'QbhoAoF', 0),
(188, 'xh0LgMo', 0),
(189, '9hqBSN5', 0),
(190, 'KCy3jpM', 0),
(191, 'beS0QZ6', 0),
(192, 'VSzENDq', 0),
(193, 'E1VxHg8', 0),
(194, 'mSL4RMg', 0),
(195, '5xvX1jD', 0),
(196, 'zeHgkyD', 0),
(197, '1WlBWDr', 0),
(198, 'yE8bZfC', 0),
(199, 'pRkQtDX', 0),
(200, '2dhLSYg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
