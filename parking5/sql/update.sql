
USE db_parking;

DROP TABLE IF EXISTS `tbl_client`;
CREATE TABLE `tbl_client` (
  `client_id` int(4) NOT NULL default '0', 
  `ctype_id` int(1) NOT NULL default '21',
  `client_vio_id` int(1) NOT NULL default '0',
  `client_fname` varchar(50) NOT NULL default '',
  `client_lname` varchar(50) NOT NULL default '',
  `client_course` varchar(50) NOT NULL default '',
  `client_dept` varchar(50) NOT NULL default '',
  `client_city` varchar(50) NOT NULL default '',
  `client_tel` varchar(50) NOT NULL default '',
  `client_image` varchar(180) NOT NULL default 'no-image.png' COLLATE 'latin1_general_ci', 
  `client_vio_stat` int(1) NOT NULL default '0',
  `client_dt_added` date NOT NULL default '0000-00-00',
  `client_tm_added` time NOT NULL default '00:00:00',	
  `client_dt_updated` date NOT NULL default '0000-00-00',
  `client_tm_updated` time NOT NULL default '00:00:00',
  `client_stat` int(1) NOT NULL default '1',
  KEY (`client_vio_id`),
  KEY (`ctype_id`),  
  PRIMARY KEY  (`client_id`)
);

INSERT INTO `tbl_client` (`ctype_id`,`client_fname`,`client_lname`,`client_dt_added`,`client_tm_added`,`client_dt_updated`,`client_tm_updated`) 
VALUES ('22','Isis','Don',NOW(),NOW(),NOW(),NOW());

DROP TABLE IF EXISTS `tbl_ctype`;
CREATE TABLE `tbl_ctype` (
  `ctype_id` int(2) unsigned NOT NULL auto_increment, 
  `ctype_code` varchar(3) NOT NULL default '',	
  `ctype_description` varchar(20) NOT NULL default '',	
  PRIMARY KEY  (`ctype_id`)
) TYPE=MyISAM AUTO_INCREMENT=21;


INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_description` ) 
VALUES ('STF','Staff');

INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_description` ) 
VALUES ('STD','Student');

INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_description` ) 
VALUES ('FAC','Faculty');

DROP TABLE IF EXISTS `tbl_violation`;
CREATE TABLE `tbl_violation` (
  `client_vio_id` int(2) unsigned NOT NULL auto_increment, 
  `client_vio_code` varchar(3) NOT NULL default '',	
  `client_vio_description` varchar(20) NOT NULL default '',	
  PRIMARY KEY  (`client_vio_id`)
) TYPE=MyISAM AUTO_INCREMENT=110;


INSERT INTO `tbl_violation` (`client_vio_code`,`client_vio_description` ) 
VALUES ('NRA', 'No Records Yet');

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
