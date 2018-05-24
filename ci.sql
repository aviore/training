-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 08:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `marcel_blog`
--

CREATE TABLE `marcel_blog` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marcel_blog`
--

INSERT INTO `marcel_blog` (`id`, `id_category`, `title`, `description`, `date`, `image`) VALUES
(1, 1, 'Kitchen', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', '2018-05-06', 'service0.png'),
(2, 2, 'Installation', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', '2018-05-13', 'service2.png'),
(3, 1, 'Design', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', '2018-05-04', 'service4.jpg'),
(4, 1, 'Installation', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', '2018-05-10', 'service5.jpg'),
(5, 1, 'Coba pagination', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', '2018-05-20', 'service0.png'),
(6, 3, 'asd', 'asd', '2018-05-21', 'service5.jpg'),
(7, 1, 'sdf', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt', '2018-05-23', 'service0.png'),
(8, 3, 'asd', 'asd', '2018-05-21', 'service5.jpg'),
(9, 1, 'dd', 'aaa', '2018-05-21', 'service0.png');

-- --------------------------------------------------------

--
-- Table structure for table `marcel_category`
--

CREATE TABLE `marcel_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marcel_category`
--

INSERT INTO `marcel_category` (`id`, `category`) VALUES
(1, 'Creative Kitchen'),
(2, 'Art Design'),
(3, 'Life Events');

-- --------------------------------------------------------

--
-- Table structure for table `marcel_message`
--

CREATE TABLE `marcel_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marcel_message`
--

INSERT INTO `marcel_message` (`id`, `name`, `email`, `message`) VALUES
(1, 'asd', 'asd@gmail.com', 'asd'),
(2, 'asd', 'asd@gmail.com', 'sd'),
(3, 'sdf', 'sdf@gmail.cinsafiushfijh', 'asdfsadf'),
(4, 'test home', 'home@dumet.com', 'test\r\n'),
(5, 'asd', 'marcel@gmail.com', 'sd'),
(6, 'test gome', 'asd@gmail.com', 's'),
(7, 'sdf', 'sadf@gmail.com', 'asd'),
(8, 'asd', 'contact@gmail.com', 'asdkjahsdkajshdkajsdh'),
(9, 'test akhir', 'sdkfjshdfkjh@gmail.com', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `marcel_service`
--

CREATE TABLE `marcel_service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marcel_service`
--

INSERT INTO `marcel_service` (`id`, `title`, `description`, `image`) VALUES
(1, 'Creative Kitchen', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service4.jpg'),
(2, 'art installation', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service5.jpg'),
(3, 'print design', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nNemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service6.jpg'),
(4, 'a', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service4.jpg'),
(5, 'a', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service6.jpg'),
(6, 'a', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service6.jpg'),
(7, 'b', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service6.jpg'),
(8, 'c', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'service6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marcel_team`
--

CREATE TABLE `marcel_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marcel_team`
--

INSERT INTO `marcel_team` (`id`, `name`, `job`, `image`) VALUES
(1, 'Florence Pniel', 'Founder', 'team3.jpg'),
(2, 'Marcel Christian', 'Artist, Designer', 'team2.jpg'),
(3, 'Calista Natalie', 'Artist', 'team3.jpg'),
(4, 'Joko', 'President', 'team1.jpg'),
(5, 'Nancy Mcdonie', 'Artist', 'team3.jpg'),
(6, 'Jiu', 'Dancer, Singer', 'team3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marcel_testi`
--

CREATE TABLE `marcel_testi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marcel_testi`
--

INSERT INTO `marcel_testi` (`id`, `name`, `job`, `description`, `image`, `status`) VALUES
(1, 'frank sims', 'photographer', 'terbaik', 'c1.png', '2'),
(2, 'frank sims', 'photographer', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, \r\n                                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'c1.png', '0'),
(3, 'frank sims', 'photographer', 'keren', 'c1.png', '2'),
(4, 'frank sims', 'photographer', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, \r\n                                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'c1.png', '0'),
(5, 'frank sims', 'photographer', 'bagus', 'c1.png', '2'),
(6, 'frank sims', 'photographer', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, \r\n                                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'c1.png', '0'),
(7, 'frank sims', 'photographer', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, \r\n                                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ', 'c1.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `marcel_works`
--

CREATE TABLE `marcel_works` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marcel_works`
--

INSERT INTO `marcel_works` (`id`, `image`, `name`, `job`) VALUES
(1, 'pf01.png', 'golfino awards', 'print design'),
(2, 'pf02.png', 'golfino awards', 'print design'),
(3, 'pf3.png', 'golfino awards', 'print design'),
(4, 'pf4.png', 'golfino awards', 'print design'),
(5, 'pf6.png', 'golfino awards', 'print design'),
(6, 'pf5.png', 'golfino awards', 'print design'),
(7, 'pf01.png', 'golfino awards', 'print design'),
(8, 'pf02.png', 'golfino awards', 'print design'),
(9, 'pf3.png', 'golfino awards', 'print design'),
(10, 'pf4.png', 'golfino awards', 'print design'),
(11, 'pf6.png', 'golfino awards', 'print design'),
(12, 'pf5.png', 'golfino awards', 'print design'),
(13, 'pf01.png', 'golfino award', 'print designer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marcel_blog`
--
ALTER TABLE `marcel_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcel_category`
--
ALTER TABLE `marcel_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcel_message`
--
ALTER TABLE `marcel_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcel_service`
--
ALTER TABLE `marcel_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcel_team`
--
ALTER TABLE `marcel_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcel_testi`
--
ALTER TABLE `marcel_testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcel_works`
--
ALTER TABLE `marcel_works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marcel_blog`
--
ALTER TABLE `marcel_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `marcel_category`
--
ALTER TABLE `marcel_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `marcel_message`
--
ALTER TABLE `marcel_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `marcel_service`
--
ALTER TABLE `marcel_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `marcel_team`
--
ALTER TABLE `marcel_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `marcel_testi`
--
ALTER TABLE `marcel_testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `marcel_works`
--
ALTER TABLE `marcel_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
