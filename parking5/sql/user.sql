DROP DATABASE IF EXISTS db_parking;

CREATE DATABASE db_parking;

USE db_parking;

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(4) unsigned NOT NULL auto_increment, 
  `user_name` varchar(20) NOT NULL default '',
  `user_pswd` varchar(32) NOT NULL default '',
  `utype_id` int(1) NOT NULL default '11', 
  `user_fname` varchar(50) NOT NULL default '',
  `user_lname` varchar(50) NOT NULL default '',
  `user_image` varchar(180) NOT NULL default 'no-image.png' COLLATE 'latin1_general_ci', 
  `user_dt_added` date NOT NULL default '0000-00-00',
  `user_tm_added` time NOT NULL default '00:00:00',	
  `user_dt_updated` date NOT NULL default '0000-00-00',
  `user_tm_updated` time NOT NULL default '00:00:00',
  `user_stat` int(1) NOT NULL default '1',
  KEY (`utype_id`),  
  PRIMARY KEY  (`user_id`)
) TYPE=MyISAM AUTO_INCREMENT=001;

INSERT INTO `tbl_user` (`user_name`,`user_pswd`,`utype_id`,`user_fname`,`user_lname`,`user_dt_added`,`user_tm_added`,`user_dt_updated`,`user_tm_updated`) 
VALUES ('admin','admin','1002','Admin','Admin',NOW(),NOW(),NOW(),NOW());

DROP TABLE IF EXISTS `tbl_utype`;
CREATE TABLE `tbl_utype` (
  `utype_id` int(2) unsigned NOT NULL auto_increment, 
  `utype_code` varchar(3) NOT NULL default '',	
  `utype_description` varchar(20) NOT NULL default '',	
  PRIMARY KEY  (`utype_id`)
) TYPE=MyISAM AUTO_INCREMENT=1001;


INSERT INTO `tbl_utype` (`utype_code`,`utype_description` ) 
VALUES ('GRD','Guard');

INSERT INTO `tbl_utype` (`utype_code`,`utype_description` ) 
VALUES ('ADM','Admin');