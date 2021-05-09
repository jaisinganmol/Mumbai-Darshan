
CREATE TABLE `images` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `image_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;