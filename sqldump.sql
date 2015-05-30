-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2015 at 05:54 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sam`
--
CREATE DATABASE IF NOT EXISTS `sam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sam`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `personal_id` varchar(255) NOT NULL,
  `employment_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `personal_id`, `employment_date`) VALUES
(1, 'Rita', 'Bertilsson', 'XwLjSVqEfDkCGSVG3E1VrxVs2CrZfj5xYiSvaTISWB4=', '2015-05-13'),
(3, 'Greta', 'Gäddsson', 'Qtd/oqmihHhPrHRBpSH3aee7cSHfO7gdegY8RPLD1wY=', '2015-05-30'),
(4, 'Rudolf', 'Tomtesson', '9n42Yo4oX70JwDejY+waAAoOqgjbYmfYwTI1GdhZlk4=', '2015-05-30'),
(6, 'Samsonite', 'Samsungsson', 'knW68s8qIyt0BOW9OrdjySK2hjbJQYidWg8XNMoI+Ww=', '2015-05-30'),
(13, 'Samsung', 'Samsonitesson', 'T732uZrN5t8btKvYETp7vKKz3VioSjaThm7dKcBYr14=', '2015-05-30'),
(15, 'David', 'Axelsson', 'PKVW4JVJjkbuLozMXJqDqSkuBbmYG+jSPNqxeesf8sI=', '2015-08-12'),
(17, 'Motorola', 'Androidsson', 'aRigmPGfZgkrHNehIvEzMZ8wgs7XmuRX8VAcjJyRZF0=', '2015-05-14'),
(18, 'Huawei', 'Androidsson', 'tRF3flZWqvvViGbv5uTXELW5okKGYvlETSFpt91iyDg=', '2015-05-17'),
(19, 'Apple', 'Iphonesson', 'E0s8+l8boSdr9BRPXNZ5KJAZ3qaPrDfHvCwj/9Ss24Q=', '2015-07-01'),
(20, 'Han', 'Solo', 'DAF7OjMksTJbnSLqHQVsSystfxnE11CNEV1RhKM6q8E=', '1923-02-06'),
(21, 'Minch', 'Yoda', '5k2qmYbaGHIcXnQHOP+iSv9rnPX1uhlvL4yk35J+5EA=', '1933-02-01'),
(22, 'Mace', 'Windu', 'bsyRBU79RWYokvQuHM9xsUaqWm0T+6cq9qEF5OgzEZY=', '2015-05-04'),
(23, 'Test', 'Testsson', 'FfGvMRF2DdPvgIe5BOYN968q7R349FFhw4MKyJKILco=', '2015-05-12'),
(24, 'Obi-wan', 'Kenobi', 'UwyXpBI59eOLhUc8Vso/i07MESVfKqD4h47NfmFekLQ=', '2015-05-05'),
(25, 'Ben', 'Kenobi', 'ABD3cvciIi7QLrFyabh8C6gxiv2mMwRJCSrStnCu3L0=', '2015-06-04'),
(26, 'Anakin', 'Skywalker', 'yGVssaB1b7coIA1Y6CgX9XjWP/LY3nDL32o3GlpXOHI=', '2015-05-13'),
(27, 'Padme', 'Amidala', 'UULmQOPZ1EK4Dk9sLLsXY1aFj9Erf4BWfTS/jjrHz5c=', '2015-05-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
