CREATE TABLE `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) DEFAULT NULL,
  `id_tipo_empresa` int(11) DEFAULT NULL,
  `eliminado` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;