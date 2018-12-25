-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 02:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catgory`
--

CREATE TABLE `tbl_catgory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_catgory`
--

INSERT INTO `tbl_catgory` (`cat_id`, `cat_name`, `cat_title`) VALUES
(10, 'PHP', 'PHP'),
(11, 'JAVA', 'JAVA'),
(12, 'Javascript', 'Javascript'),
(13, 'HTML', 'HTML'),
(14, 'Leraval', 'Leraval'),
(15, 'Jquery', 'Jquery');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `writer_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post`, `post_title`, `tag`, `cat_id`, `writer_id`) VALUES
(14, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat odio vitae orci molestie, eget mattis nisl porttitor. Mauris imperdiet velit non tincidunt blandit. Fusce sit amet risus a eros volutpat tempor. Sed vitae laoreet ante. Donec consectetur lectus id accumsan sagittis. In gravida est eget velit fringilla malesuada. Aliquam facilisis convallis dui at pretium.</p>\r\n\r\n<p>Etiam et vestibulum neque, ac volutpat ex. Curabitur porta, nibh eget mattis dictum, tortor eros convallis augue, vel laoreet nisl nibh a leo. Ut eget bibendum lorem, sit amet hendrerit dui. Duis et sapien sagittis, dapibus ante quis, efficitur massa. Maecenas ultrices ante vel sem luctus, a tincidunt velit convallis. Etiam tempus ipsum non risus viverra, non elementum enim viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras malesuada diam mi, eleifend vehicula mauris varius sodales. Integer facilisis lacus id nulla aliquet, in sodales augue malesuada. Cras hendrerit metus vel mi aliquet tincidunt. Nunc vitae placerat orci, ut lobortis metus. Donec ut velit eu diam maximus consectetur quis sit amet sapien. Aenean sed aliquam arcu.</p>\r\n', 'Java is intersting', 'Java', 11, '3'),
(15, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat odio vitae orci molestie, eget mattis nisl porttitor. Mauris imperdiet velit non tincidunt blandit. Fusce sit amet risus a eros volutpat tempor. Sed vitae laoreet ante. Donec consectetur lectus id accumsan sagittis. In gravida est eget velit fringilla malesuada. Aliquam facilisis convallis dui at pretium.</p>\r\n\r\n<p>Etiam et vestibulum neque, ac volutpat ex. Curabitur porta, nibh eget mattis dictum, tortor eros convallis augue, vel laoreet nisl nibh a leo. Ut eget bibendum lorem, sit amet hendrerit dui. Duis et sapien sagittis, dapibus ante quis, efficitur massa. Maecenas ultrices ante vel sem luctus, a tincidunt velit convallis. Etiam tempus ipsum non risus viverra, non elementum enim viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras malesuada diam mi, eleifend vehicula mauris varius sodales. Integer facilisis lacus id nulla aliquet, in sodales augue malesuada. Cras hendrerit metus vel mi aliquet tincidunt. Nunc vitae placerat orci, ut lobortis metus. Donec ut velit eu diam maximus consectetur quis sit amet sapien. Aenean sed aliquam arcu.</p>\r\n', 'php error concept', 'error', 10, '2'),
(16, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat odio vitae orci molestie, eget mattis nisl porttitor. Mauris imperdiet velit non tincidunt blandit. Fusce sit amet risus a eros volutpat tempor. Sed vitae laoreet ante. Donec consectetur lectus id accumsan sagittis. In gravida est eget velit fringilla malesuada. Aliquam facilisis convallis dui at pretium.</p>\r\n\r\n<p>Etiam et vestibulum neque, ac volutpat ex. Curabitur porta, nibh eget mattis dictum, tortor eros convallis augue, vel laoreet nisl nibh a leo. Ut eget bibendum lorem, sit amet hendrerit dui. Duis et sapien sagittis, dapibus ante quis, efficitur massa. Maecenas ultrices ante vel sem luctus, a tincidunt velit convallis. Etiam tempus ipsum non risus viverra, non elementum enim viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras malesuada diam mi, eleifend vehicula mauris varius sodales. Integer facilisis lacus id nulla aliquet, in sodales augue malesuada. Cras hendrerit metus vel mi aliquet tincidunt. Nunc vitae placerat orci, ut lobortis metus. Donec ut velit eu diam maximus consectetur quis sit amet sapien. Aenean sed aliquam arcu.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat odio vitae orci molestie, eget mattis nisl porttitor. .</p>\r\n', 'Jquery is a javascript framweork', 'jquery', 15, '4'),
(17, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit tellus vel euismod laoreet. Nunc sit amet tincidunt lorem, id eleifend mauris. Aliquam eget erat odio. Proin sed pulvinar lectus. Phasellus nec tellus eget metus egestas porta ut eu sapien. Nullam vulputate scelerisque elit sit amet imperdiet. Proin a dignissim metus. Maecenas tortor nibh, convallis ut sagittis vitae, ullamcorper a nulla. Quisque ante mauris, iaculis id urna ut, ultrices laoreet mi. Donec vel neque posuere, finibus est efficitur, pretium erat. Sed vulputate, metus quis pulvinar imperdiet, leo lacus posuere orci, in rhoncus libero nunc sit amet leo. Pellentesque vel pellentesque quam. Nam dolor arcu, imperdiet eu velit vel, iaculis convallis lacus. Curabitur vulputate eleifend ipsum, vel eleifend erat volutpat sed.</p>\r\n', 'Php is a important language', 'php, Server side', 10, '2'),
(19, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit tellus vel euismod laoreet. Nunc sit amet tincidunt lorem, id eleifend mauris. Aliquam eget erat odio. Proin sed pulvinar lectus. Phasellus nec tellus eget metus egestas porta ut eu sapien. Nullam vulputate scelerisque elit sit amet imperdiet. Proin a dignissim metus. Maecenas tortor nibh, convallis ut sagittis vitae, ullamcorper a nulla. Quisque ante mauris, iaculis id urna ut, ultrices laoreet mi. Donec vel neque posuere, finibus est efficitur, pretium erat. Sed vulputate, metus quis pulvinar imperdiet, leo lacus posuere orci, in rhoncus libero nunc sit amet leo. Pellentesque vel pellentesque quam. Nam dolor arcu, imperdiet eu velit vel, iaculis convallis lacus. Curabitur vulputate eleifend ipsum, vel eleifend erat volutpat sed.</p>\r\n', 'Lareval is best php framework', 'laravel,Framework', 10, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `email`, `password`, `level`) VALUES
(2, 'Abdullah', 'admin@gmail.com', 'fd2cc6c54239c40495a0d3a93b6380eb', '1'),
(4, 'Osman', 'osman@gmail.com', 'fd2cc6c54239c40495a0d3a93b6380eb', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catgory`
--
ALTER TABLE `tbl_catgory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catgory`
--
ALTER TABLE `tbl_catgory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
