use fuckapp;
-- MySQL dump 10.13  Distrib 5.6.19, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: fuckapp
-- ------------------------------------------------------
-- Server version	5.1.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acl_grupo`
--

DROP TABLE IF EXISTS `acl_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_grupo` (
  `id_acl_grupo` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `ultima_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` char(1) DEFAULT NULL,
  `eliminado` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_acl_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_grupo`
--

LOCK TABLES `acl_grupo` WRITE;
/*!40000 ALTER TABLE `acl_grupo` DISABLE KEYS */;
INSERT INTO `acl_grupo` VALUES (1,'Iron Admin','2015-03-29 11:03:43','2015-03-29 14:51:43','S',0),(2,'administradores','2015-05-26 00:05:35','2015-05-25 22:01:35','S',0);
/*!40000 ALTER TABLE `acl_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_grupo_permiso`
--

DROP TABLE IF EXISTS `acl_grupo_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_grupo_permiso` (
  `id_acl_grupo_permiso` int(10) NOT NULL AUTO_INCREMENT,
  `fk_acl_grupo` int(10) DEFAULT NULL,
  `fk_acl_permiso` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_acl_grupo_permiso`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_grupo_permiso`
--

LOCK TABLES `acl_grupo_permiso` WRITE;
/*!40000 ALTER TABLE `acl_grupo_permiso` DISABLE KEYS */;
INSERT INTO `acl_grupo_permiso` VALUES (64,1,37),(63,1,38),(62,1,17),(61,1,18),(60,1,19),(59,1,20),(58,1,21),(57,1,22),(56,1,23),(55,1,24),(54,1,25),(53,1,26),(52,1,27),(51,1,28),(50,1,12),(49,1,13),(48,1,14),(47,1,15),(46,1,16),(45,1,2),(44,1,3),(43,1,4),(42,1,5),(41,1,6),(40,1,7),(39,1,8),(38,1,9),(37,1,10),(36,1,11),(35,1,1),(34,1,30),(33,1,31),(65,1,48),(66,2,48);
/*!40000 ALTER TABLE `acl_grupo_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_modulo_permiso`
--

DROP TABLE IF EXISTS `acl_modulo_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_modulo_permiso` (
  `id_acl_modulo_permiso` int(10) NOT NULL AUTO_INCREMENT,
  `controlador` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_acl_modulo_permiso`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Guarda las descrip de los módulos de permisos (controllers)';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_modulo_permiso`
--

LOCK TABLES `acl_modulo_permiso` WRITE;
/*!40000 ALTER TABLE `acl_modulo_permiso` DISABLE KEYS */;
INSERT INTO `acl_modulo_permiso` VALUES (1,'ejemplo','Métodos de ejemplo para probar el ACL'),(2,'pasos','pasos'),(3,'welcome','welcome'),(4,'acl_usuarios','ACL - Usuarios'),(5,'acl_permisos','ACL - Permisos'),(6,'acl_grupos','ACL - Grupos'),(7,'usuarios','usuarios'),(8,'empresas','empresas'),(9,'my_controller','my_controller'),(10,'acl_custom','Permisos personalizados');
/*!40000 ALTER TABLE `acl_modulo_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_permiso`
--

DROP TABLE IF EXISTS `acl_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_permiso` (
  `id_acl_permiso` int(10) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  `identificador` varchar(100) DEFAULT NULL,
  `controlador` varchar(100) DEFAULT NULL,
  `accion` varchar(255) DEFAULT NULL,
  `whitelist` int(1) DEFAULT NULL,
  `blacklist` int(1) DEFAULT NULL,
  `activo` smallint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_acl_permiso`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_permiso`
--

LOCK TABLES `acl_permiso` WRITE;
/*!40000 ALTER TABLE `acl_permiso` DISABLE KEYS */;
INSERT INTO `acl_permiso` VALUES (1,'Cambiar el estado del grupo','acl_grupos/cambiar_activo','acl_grupos','cambiar_activo',0,1,1),(2,'Mostrar todos los grupos','acl_grupos/listar','acl_grupos','listar',0,1,1),(3,'','acl_grupos/guardar','acl_grupos','guardar',0,1,1),(4,'','acl_grupos/permisos_grupo','acl_grupos','permisos_grupo',0,1,1),(5,'','acl_grupos/guardar_permisos_grupo','acl_grupos','guardar_permisos_grupo',0,1,1),(6,'','acl_grupos/asignar_usuarios_grupo','acl_grupos','asignar_usuarios_grupo',0,1,1),(7,'','acl_grupos/grupos_usuario','acl_grupos','grupos_usuario',0,1,1),(8,'','acl_grupos/ajax_buscar_usuario','acl_grupos','ajax_buscar_usuario',0,1,1),(9,'','acl_grupos/guardar_usuario_grupo','acl_grupos','guardar_usuario_grupo',0,1,1),(10,'','acl_grupos/desasignar_usuarios_grupo','acl_grupos','desasignar_usuarios_grupo',0,1,1),(11,'','acl_grupos/eliminar_grupos','acl_grupos','eliminar_grupos',0,1,1),(12,'','acl_permisos/index','acl_permisos','index',0,1,1),(13,'','acl_permisos/listar','acl_permisos','listar',0,1,1),(14,'','acl_permisos/custom','acl_permisos','custom',0,1,1),(15,'','acl_permisos/guardar_custom','acl_permisos','guardar_custom',0,1,1),(16,'','acl_permisos/guardar','acl_permisos','guardar',0,1,1),(17,'','acl_usuarios/index','acl_usuarios','index',0,1,1),(18,'','acl_usuarios/listar','acl_usuarios','listar',0,1,1),(19,'','acl_usuarios/nuevo','acl_usuarios','nuevo',0,1,1),(20,'','acl_usuarios/editar','acl_usuarios','editar',0,1,1),(21,'','acl_usuarios/guardar','acl_usuarios','guardar',0,1,1),(22,'','acl_usuarios/permisos_usuario','acl_usuarios','permisos_usuario',0,1,1),(23,'','acl_usuarios/grupos_usuario','acl_usuarios','grupos_usuario',0,1,1),(24,'','acl_usuarios/guardar_grupos_usuario','acl_usuarios','guardar_grupos_usuario',0,1,1),(25,'','acl_usuarios/guardar_permisos_usuario','acl_usuarios','guardar_permisos_usuario',0,1,1),(26,'','acl_usuarios/cambiar_activo','acl_usuarios','cambiar_activo',0,1,1),(27,'','acl_usuarios/eliminar_usuarios','acl_usuarios','eliminar_usuarios',0,1,1),(28,'','acl_usuarios/cambiar_contrasenia','acl_usuarios','cambiar_contrasenia',0,1,1),(30,'Crear un nuevo grupo','grupos/crear','acl_custom','acl_custom',0,1,1),(31,'Editar el nombre de un grupo','grupos/editar','acl_custom','acl_custom',0,1,1),(37,'Método de ejemplo para requerir su ingreso. Está en la blacklist.','ejemplo/metodo_requerido','ejemplo','metodo_requerido',0,1,1),(38,'Método de ejemplo para permitir su ingreso','ejemplo/metodo_permitido','ejemplo','metodo_permitido',0,1,1),(39,'Método de ejemplo para restringir ingreso','ejemplo/metodo_no_permitido','ejemplo','metodo_no_permitido',0,1,1),(40,'Método de ejemplo para no requerirlo. Está en la whitelist','ejemplo/metodo_no_requerido','ejemplo','metodo_no_requerido',1,0,1),(41,'Método que no se definió el permiso','ejemplo/metodo_sin_definir_permiso','ejemplo','metodo_sin_definir_permiso',0,1,1),(42,'','pasos/index','pasos','index',1,0,1),(43,'','pasos/sanear_string','pasos','sanear_string',1,0,1),(44,'','pasos/paso2','pasos','paso2',1,0,1),(45,'','pasos/manual','pasos','manual',1,0,1),(46,'','welcome/paso2','welcome','paso2',1,0,1),(47,'','usuarios/alta','usuarios','alta',0,1,1),(48,'','empresas/listar_empresas','empresas','listar_empresas',0,1,1),(49,'','my_controller/acceso_denegado','my_controller','acceso_denegado',1,0,1),(50,'','my_controller/_export_csv_full','my_controller','_export_csv_full',1,0,1);
/*!40000 ALTER TABLE `acl_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_usuario`
--

DROP TABLE IF EXISTS `acl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_usuario` (
  `id_acl_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  `email` varchar(132) DEFAULT NULL,
  `cii` int(10) DEFAULT NULL,
  `bloqueado` char(1) DEFAULT 'N',
  `activo` char(1) DEFAULT 'S',
  `eliminado` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_acl_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_usuario`
--

LOCK TABLES `acl_usuario` WRITE;
/*!40000 ALTER TABLE `acl_usuario` DISABLE KEYS */;
INSERT INTO `acl_usuario` VALUES (1,'Iron','Admin','ironadmin','$2a$10$cHqcP353aySsH4jIuL6Ms.qXXVWNrPVbKsxAyFGUwEgu9.4bjRcCa','example@example.com',NULL,'N','S',0),(2,'abel','derviche','aderviche','$2a$10$AY.j5TBNZGbNN4MgXRU0hePrp8aEk3lyprAOUqHhzsgfKDe//mI7a','abelderviche@gmail.com',NULL,'N','S',0);
/*!40000 ALTER TABLE `acl_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_usuario_grupo`
--

DROP TABLE IF EXISTS `acl_usuario_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_usuario_grupo` (
  `id_acl_usuario_grupo` int(10) NOT NULL AUTO_INCREMENT,
  `fk_acl_usuario` int(10) DEFAULT NULL,
  `fk_acl_grupo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_acl_usuario_grupo`),
  UNIQUE KEY `unico` (`fk_acl_usuario`,`fk_acl_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_usuario_grupo`
--

LOCK TABLES `acl_usuario_grupo` WRITE;
/*!40000 ALTER TABLE `acl_usuario_grupo` DISABLE KEYS */;
INSERT INTO `acl_usuario_grupo` VALUES (1,1,1),(2,2,2);
/*!40000 ALTER TABLE `acl_usuario_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl_usuario_permiso`
--

DROP TABLE IF EXISTS `acl_usuario_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_usuario_permiso` (
  `id_acl_usuario_permiso` int(10) NOT NULL AUTO_INCREMENT,
  `fk_acl_usuario` int(10) DEFAULT NULL,
  `fk_acl_permiso` int(10) DEFAULT NULL,
  `tipo_permiso` int(1) DEFAULT NULL COMMENT '1= permitir; 0 = denegar',
  PRIMARY KEY (`id_acl_usuario_permiso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_usuario_permiso`
--

LOCK TABLES `acl_usuario_permiso` WRITE;
/*!40000 ALTER TABLE `acl_usuario_permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl_usuario_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `id_tipo_empresa` int(11) DEFAULT NULL,
  `eliminado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'edesur',1,0),(2,'aysa',1,0),(3,'empresa3',3,0),(4,'empresa4',3,0),(5,'empresa 5',2,0),(6,'Empresa del Estado',2,1);
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `palabra_clave`
--

DROP TABLE IF EXISTS `palabra_clave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `palabra_clave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `palabra` varchar(255) DEFAULT NULL,
  `eliminado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `palabra_clave`
--

LOCK TABLES `palabra_clave` WRITE;
/*!40000 ALTER TABLE `palabra_clave` DISABLE KEYS */;
INSERT INTO `palabra_clave` VALUES (1,'palabra1',0),(3,'palabra 2',0),(4,'palabar 3',1);
/*!40000 ALTER TABLE `palabra_clave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_empresa`
--

DROP TABLE IF EXISTS `tipo_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `eliminado` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_empresa`
--

LOCK TABLES `tipo_empresa` WRITE;
/*!40000 ALTER TABLE `tipo_empresa` DISABLE KEYS */;
INSERT INTO `tipo_empresa` VALUES (1,'empresas de agua',0),(2,'empresas de luz ',0),(15,'empresa de sanitarios',1);
/*!40000 ALTER TABLE `tipo_empresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-27 23:35:05
