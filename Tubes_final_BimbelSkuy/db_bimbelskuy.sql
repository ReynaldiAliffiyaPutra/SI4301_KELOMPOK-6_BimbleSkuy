-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 01:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bimbelskuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berlangganan`
--

CREATE TABLE `tb_berlangganan` (
  `id_berlangganan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berlangganan`
--

INSERT INTO `tb_berlangganan` (`id_berlangganan`, `id_user`, `paket`, `start`, `end`) VALUES
(1, 2, 'Masih Newbie', '2022-01-12', '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id_feedback` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`id_feedback`, `name`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'test feedback', '2022-01-13 09:50:59', '2022-01-13 09:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id_history` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pembelajaran` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id_history`, `id_user`, `id_pembelajaran`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-01-13 12:34:52', '2022-01-13 12:35:59'),
(2, 2, 3, '2022-01-13 12:34:59', '2022-01-13 12:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `id_payment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `kode_pembayaran` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`id_payment`, `id_user`, `nominal`, `metode_pembayaran`, `kode_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 2, '500000', 'Bank BCA', '89090008123456232', '2022-01-12 17:46:51', '2022-01-12 17:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelajaran`
--

CREATE TABLE `tb_pembelajaran` (
  `id_pembelajaran` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `kategori` enum('java','c++','python','javascript') NOT NULL,
  `paket` int(2) NOT NULL,
  `materi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembelajaran`
--

INSERT INTO `tb_pembelajaran` (`id_pembelajaran`, `title`, `cover`, `kategori`, `paket`, `materi`) VALUES
(1, 'Belajar Java [Dasar] - Variable, Assignment, dan Deklarasi', '2dE59ueHPT1DYCruC41voyh1JEvkaW-hist-java.png', 'java', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque purus semper eget duis at tellus at urna condimentum. Ut etiam sit amet nisl purus in. Tristique senectus et netus et malesuada. Ornare lectus sit amet est placerat in. Sodales ut etiam sit amet nisl purus. Pharetra pharetra massa massa ultricies mi quis. Pulvinar sapien et ligula ullamcorper. Tincidunt lobortis feugiat vivamus at augue eget arcu. Nibh praesent tristique magna sit amet purus. Risus pretium quam vulputate dignissim suspendisse in est ante in. Mattis vulputate enim nulla aliquet. Amet massa vitae tortor condimentum lacinia. Ac orci phasellus egestas tellus rutrum. Amet est placerat in egestas. Congue eu consequat ac felis donec et odio pellentesque. Urna condimentum mattis pellentesque id nibh. Sed cras ornare arcu dui vivamus arcu felis bibendum ut.\r\n\r\nDiam in arcu cursus euismod. Duis tristique sollicitudin nibh sit amet commodo nulla. Purus sit amet volutpat consequat mauris nunc. Est ante in nibh mauris cursus mattis molestie a. Et tortor consequat id porta nibh venenatis cras sed felis. Scelerisque viverra mauris in aliquam sem fringilla ut morbi. Ridiculus mus mauris vitae ultricies leo integer malesuada. Vitae proin sagittis nisl rhoncus mattis. Mi in nulla posuere sollicitudin aliquam ultrices. Amet commodo nulla facilisi nullam vehicula ipsum a. Feugiat scelerisque varius morbi enim. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet.\r\n\r\nA erat nam at lectus urna duis convallis convallis. Consectetur adipiscing elit pellentesque habitant. Enim sed faucibus turpis in. Vehicula ipsum a arcu cursus vitae. Commodo odio aenean sed adipiscing diam donec. Velit egestas dui id ornare arcu odio ut sem. Amet facilisis magna etiam tempor orci eu. Gravida neque convallis a cras semper auctor neque. Nec ullamcorper sit amet risus nullam. Nibh praesent tristique magna sit. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Eget magna fermentum iaculis eu non. Sollicitudin tempor id eu nisl. In nibh mauris cursus mattis molestie a. Dui nunc mattis enim ut tellus elementum sagittis vitae et. Fusce ut placerat orci nulla pellentesque dignissim. Condimentum mattis pellentesque id nibh tortor id aliquet lectus. Fusce ut placerat orci nulla pellentesque dignissim enim. At urna condimentum mattis pellentesque id nibh tortor.'),
(3, 'Belajar Python [Dasar] - Mengambil Input Data Dari User', 'gBrhQG5nryh2Z8IuZyNloCbYXBmPxz-hist-py.png', 'python', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempus imperdiet nulla malesuada pellentesque. Viverra aliquet eget sit amet tellus. Quis blandit turpis cursus in hac habitasse platea dictumst. At elementum eu facilisis sed odio morbi quis commodo odio. Lacus sed viverra tellus in hac habitasse platea dictumst vestibulum. Pharetra magna ac placerat vestibulum lectus mauris ultrices. Elit duis tristique sollicitudin nibh sit. Et egestas quis ipsum suspendisse ultrices gravida dictum fusce. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Id consectetur purus ut faucibus pulvinar. Ipsum dolor sit amet consectetur adipiscing elit. Eget gravida cum sociis natoque penatibus. Sagittis nisl rhoncus mattis rhoncus urna neque. Dui ut ornare lectus sit. Odio ut sem nulla pharetra diam sit amet nisl suscipit. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus est. Pulvinar mattis nunc sed blandit libero volutpat sed.\r\n\r\nQuam vulputate dignissim suspendisse in est ante in nibh. Orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Egestas maecenas pharetra convallis posuere morbi leo urna molestie at. Mi in nulla posuere sollicitudin aliquam ultrices. Etiam erat velit scelerisque in. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Enim facilisis gravida neque convallis a cras semper auctor neque. Integer enim neque volutpat ac. Arcu dui vivamus arcu felis. Commodo sed egestas egestas fringilla. Odio ut sem nulla pharetra diam sit amet nisl. Justo donec enim diam vulputate ut pharetra. Est sit amet facilisis magna etiam tempor orci eu. Sed arcu non odio euismod lacinia at. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt. Commodo nulla facilisi nullam vehicula ipsum. Dolor sit amet consectetur adipiscing elit duis tristique. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit.\r\n\r\nAdipiscing elit ut aliquam purus. At tellus at urna condimentum mattis pellentesque id nibh. Diam vulputate ut pharetra sit amet aliquam. Scelerisque eu ultrices vitae auctor eu augue ut. Augue mauris augue neque gravida in fermentum et sollicitudin ac. Nec sagittis aliquam malesuada bibendum. Sem fringilla ut morbi tincidunt. Facilisis magna etiam tempor orci eu lobortis elementum. In metus vulputate eu scelerisque felis imperdiet proin. Ut placerat orci nulla pellentesque dignissim. Eu scelerisque felis imperdiet proin fermentum leo vel. Nibh cras pulvinar mattis nunc sed blandit. Tincidunt arcu non sodales neque sodales ut etiam. Enim lobortis scelerisque fermentum dui faucibus. Morbi non arcu risus quis varius quam. Quam quisque id diam vel quam elementum. In vitae turpis massa sed elementum tempus egestas sed. Elementum nibh tellus molestie nunc non blandit massa enim.\r\n\r\nViverra ipsum nunc aliquet bibendum enim facilisis gravida neque convallis. Tellus rutrum tellus pellentesque eu tincidunt. Morbi blandit cursus risus at ultrices mi. Id interdum velit laoreet id donec ultrices. Cras semper auctor neque vitae. Enim nunc faucibus a pellentesque sit amet porttitor eget dolor. Arcu non sodales neque sodales ut etiam. Aliquam sem et tortor consequat. Nec feugiat in fermentum posuere urna nec tincidunt praesent. Curabitur gravida arcu ac tortor dignissim convallis aenean et.\r\n\r\nLorem ipsum dolor sit amet consectetur adipiscing elit duis tristique. Mauris ultrices eros in cursus turpis massa tincidunt. Amet tellus cras adipiscing enim eu turpis egestas. Auctor elit sed vulputate mi sit. Fringilla phasellus faucibus scelerisque eleifend donec. Eget sit amet tellus cras adipiscing enim. Sit amet tellus cras adipiscing enim. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Platea dictumst quisque sagittis purus sit. Quis ipsum suspendisse ultrices gravida dictum. Risus sed vulputate odio ut enim blandit volutpat. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Maecenas accumsan lacus vel facilisis volutpat. Proin fermentum leo vel orci porta non pulvinar. Platea dictumst vestibulum rhoncus est pellentesque. Lectus quam id leo in vitae turpis. Tincidunt vitae semper quis lectus nulla at volutpat. Gravida neque convallis a cras semper auctor neque vitae. Feugiat pretium nibh ipsum consequat nisl vel pretium lectus quam. Elementum pulvinar etiam non quam lacus suspendisse.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajar`
--

CREATE TABLE `tb_pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tamatan` varchar(255) NOT NULL,
  `umur` int(2) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajar`
--

INSERT INTO `tb_pengajar` (`id_pengajar`, `nama`, `tamatan`, `umur`, `keahlian`, `profile`) VALUES
(1, 'Muhammad Alif', 'Institut Teknologi Bandung', 27, 'Python', 'jETfdsTWpMMVEy2cnDbajTPuCdb7YE-guru1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `status` enum('usr','adm') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `full_name`, `sekolah`, `hp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@bimbelskuy.com', '$2y$10$JQPtrkZwTy5W9kDT5rZBguy0mE910A0Jgpm3JZXXKL6VRJHNLHUk6', 'admin', 'admin', '0', 'adm', '2022-01-12 17:18:00', '2022-01-12 17:18:00'),
(2, 'user1', 'user1@gmail.com', '$2y$10$UweMzSPwxz38vjXDkG5tf.7/tyCqsJJOk9HKFJpgIdnBpu8kVy2X6', 'user1', 'sekolah', '08123456232', 'usr', '2022-01-12 17:38:02', '2022-01-12 17:38:02'),
(3, 'user2', 'user2@gmail.com', '$2y$10$oJ4wLDjA8Nbe8zKPkDcvguIV6RMXfVhWQbCaTvHqF2QoOUSUJ89W2', 'user2', 'sekolah', '081234567890', 'usr', '2022-01-12 18:16:53', '2022-01-12 18:16:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berlangganan`
--
ALTER TABLE `tb_berlangganan`
  ADD PRIMARY KEY (`id_berlangganan`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `tb_pembelajaran`
--
ALTER TABLE `tb_pembelajaran`
  ADD PRIMARY KEY (`id_pembelajaran`);

--
-- Indexes for table `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berlangganan`
--
ALTER TABLE `tb_berlangganan`
  MODIFY `id_berlangganan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembelajaran`
--
ALTER TABLE `tb_pembelajaran`
  MODIFY `id_pembelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
