CREATE TABLE `palabra_clave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `palabra` varchar(255) DEFAULT NULL,
  `eliminado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
