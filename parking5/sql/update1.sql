
USE db_parking;

DROP TABLE IF EXISTS `tbl_violation`;
CREATE TABLE `tbl_violation` (
  `client_vio_id` int(2) unsigned NOT NULL auto_increment, 
  `client_vio_code` varchar(3) NOT NULL default '',	
  `client_vio_description` varchar(20) NOT NULL default '',	
  PRIMARY KEY  (`client_vio_id`)
) TYPE=MyISAM AUTO_INCREMENT=111;


INSERT INTO `tbl_violation` (`client_vio_code`,`client_vio_description` ) 
VALUES ('PRA', 'Parking on Reserved Areas');

INSERT INTO `tbl_violation` (`client_vio_code`,`client_vio_description` ) 
VALUES ('BDE', 'Blocking the Driveway/Exit');

INSERT INTO `tbl_violation` (`client_vio_code`,`client_vio_description` ) 
VALUES ('DP', 'Double Parking');

INSERT INTO `tbl_violation` (`client_vio_code`,`client_vio_description` ) 
VALUES ('WP', 'Wrong Parking');

INSERT INTO `tbl_violation` (`client_vio_code`,`client_vio_description` ) 
VALUES ('VPS', 'Violating the parking sign');

INSERT INTO `tbl_violation` (`client_vio_code`,`client_vio_description` ) 
VALUES ('RD', 'Reckless Driving');
