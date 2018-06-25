-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2018 at 11:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_timi_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(3) NOT NULL,
  `categories_id` int(3) NOT NULL,
  `menu` varbinary(200) NOT NULL,
  `date` date NOT NULL,
  `position` int(3) NOT NULL,
  `visible` int(1) NOT NULL,
  `content` varbinary(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `categories_id`, `menu`, `date`, `position`, `visible`, `content`) VALUES
(2, 2, 0x4e6f6170746561204d757a65656c6f72206c612054696d69c8996f617261, '2018-05-08', 1, 1, 0x090909090909090909095472656920696e7374697475c89b69692064652063756c747572c4832064696e2054696d69c8996f61726120c3aec89969206465736368696420706f72c89b696c652070656e747275206f206e6f75c48320656469c89b6965204e6f6170746561204d757a65656c6f722e20436569206361726520766f7220706172746963697061206c61206576656e696d656e7420766f722070757465612076697a696f6e61206e7520646f6172206578706f6e6174656c652064696e206d757a65652c20636920766f722066692070c483727461c89969206c61206f20736572696520646520737065637461636f6c6520c8996920636f6e63657274652e0d0a0d0a53c3a26d62c483746120766969746f6172652c20c3ae6e203139206d61692c206465206c61206f72612031383a30302070c3a26ec483206c61206f72612030313a3030206e6f617074656120766f722061766561206c6f63206576656e696d656e74652c20737065637461636f6c6520c8996920636f6e6365727465206c61204d757a65756c20646520417274c4832c204d757a65756c204e61c89b696f6e616c20616c2042616e6174756c756920c89969204d757a65756c20536174756c75692042c4836ec483c89b65616e2c2069617220696e74726172656120657374652067726174756974c4832e),
(7, 1, 0x556e697665727369746174656120646520566573742054696d69736f6172612065206c61206d696a6c6f63756c20636c6173616d656e74756c75692063656c6f72206d61692062756e6520696e737469747574696920646520696e766174616d616e74207375706572696f722064696e20746172696c6520656d657267656e7465, '2018-05-22', 1, 1, 0x4164617567c48320636f6ec89b696e7574),
(8, 1, 0x5465737420446961637269746963653a20c482c483c3a2c382c89ac89bc898c899c38ec3ae, '2018-03-07', 2, 1, 0x64696163726974696365206469616372697469636520c482c483c3a2c382c89ac89bc898c899c38ec3aec482c483c3a2c382c89ac89bc898c899c38ec3ae);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
