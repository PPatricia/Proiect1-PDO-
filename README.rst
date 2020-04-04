
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
CREATE DATABASE IF NOT EXISTS images DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci; USE images;


DROP TABLE IF EXISTS images;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `images` (`id`, `title`, `image`) VALUES
(20, 'Meddy', './images/2.jpg'),
(23, 'Ann', './images/3.jpg');

ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);
 
 ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;


DROP TABLE IF EXISTS images_updated;
CREATE TABLE `images_updated` (
  `title` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `id` int(11) NOT NULL,
  `edtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `images_updated`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `images_updated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

