SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS `whiztrial` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `whiztrial`;

CREATE TABLE IF NOT EXISTS `userprofile` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dat` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `userprofile` (`first_name`, `last_name`, `user_id`, `password`, `phone`, `email`, `dat`, `sex`, `profession`, `address`) VALUES
('Roshan', 'Singh', 'Roshan Singh', '123456', 2147483647, 'roshansingh.azm@gmail.com', '0000-00-00', 'mal', 'employee', 'C-124'),
('Selenium', 'IDE', 'testing', '123456', 2147483647, 'roshansingh.azm@gmail.com', '0000-00-00', 'mal', 'employee', 'New Delhi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
