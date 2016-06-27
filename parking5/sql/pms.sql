USE db_parking;

DROP TABLE IF EXISTS `tbl_violist`;
CREATE TABLE `tbl_violist` (
	`violist_id` int(4) unsigned NOT NULL auto_increment,
	`client_id` int(4) NOT NULL default '0',
	`client_vio_id` int(1) NOT NULL default '1',
	`client_vio_stat` int(1) NOT NULL default '0',
	`violist_dt_added` date NOT NULL default '0000-00-00',
    `violist_tm_added` time NOT NULL default '00:00:00',
	KEY (`client_id`),
	KEY (`client_vio_id`),
	KEY (`client_vio_stat`),
	PRIMARY KEY (`violist_id`)
)	TYPE=MyISAM AUTO_INCREMENT=1200;

DROP TABLE IF EXISTS `tbl_car`;
CREATE TABLE `tbl_car` (
	`car_id` int(2) unsigned NOT NULL auto_increment,
	`client_id` int(4) NOT NULL default '0', 
	`car_make` varchar(20) NOT NULL default '',
	`car_plate` varchar(10) NOT NULL default '',
	`car_color` varchar(10) NOT NULL default '',
	KEY (`client_id`),
	PRIMARY KEY (`car_id`)
)	TYPE=MyISAM AUTO_INCREMENT=11;

DROP TABLE IF EXISTS `tbl_logs`;
CREATE TABLE `tbl_logs` (
  `log_id` int(10) unsigned NOT NULL auto_increment,    
  `user_id` int(10) NOT NULL default '0', 
  `code_id`  int(10) NOT NULL default '0',
  `log_text` varchar(180) NOT NULL default '',
  `log_date` date NOT NULL default '0000-00-00', 
  `log_time` time NOT NULL default '00:00:00',   
KEY (`user_id`),
KEY (`code_id`),
PRIMARY KEY (`log_id`)
) TYPE=MyISAM AUTO_INCREMENT=5001;

DROP TABLE IF EXISTS `tbl_codes`;
CREATE TABLE `tbl_codes` (
  `code_id` int(10) unsigned NOT NULL auto_increment,  
  `code_text` varchar(180) NOT NULL default '',
  `code_date` datetime NOT NULL default '0000-00-00 00:00:00',  
PRIMARY KEY (`code_id`)
) TYPE=MyISAM AUTO_INCREMENT=6001;

INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('CLIENT UPDATE',NOW());
INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('CLIENT DELETE',NOW());
INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('CLIENT CREATE',NOW());
INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('USER LOGIN',NOW());
INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('USER UPDATE',NOW());
INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('USER DELETE',NOW());
INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('USER CREATE',NOW());
INSERT INTO `tbl_codes` (`code_text`,`code_date`) 
VALUES ('GENERATE REPORT',NOW());

DROP TABLE IF EXISTS `tbl_ctype`;
CREATE TABLE `tbl_ctype` (
	`ctype_id` int(3) unsigned NOT NULL auto_increment,
	`ctype_code` varchar(3) NOT NULL default '',
	`ctype_desc` varchar(20) NOT NULL default '',
	PRIMARY KEY (`ctype_id`)
)	TYPE=MyISAM AUTO_INCREMENT=111;

INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_desc`) 
VALUES ('ADM','Admin');
INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_desc`) 
VALUES ('STD','Student');
INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_desc`) 
VALUES ('FAC','Faculty');
INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_desc`) 
VALUES ('ALM','Alumni');
INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_desc`) 
VALUES ('CAT','Caterer/Supplier');
INSERT INTO `tbl_ctype` (`ctype_code`,`ctype_desc`) 
VALUES ('SPC','Special/Others');


DROP TABLE IF EXISTS `tbl_client`;
CREATE TABLE `tbl_client` (
  `client_id` int(4) NOT NULL default '0', 
  `ctype_id` int(1) NOT NULL default '21',
  `client_vio_stat` int(1) NOT NULL default '0',
  `client_fname` varchar(50) NOT NULL default '',
  `client_lname` varchar(50) NOT NULL default '',
  `client_course` varchar(50) NOT NULL default '',
  `client_dept` varchar(50) NOT NULL default '',
  `client_city` varchar(50) NOT NULL default '',
  `client_tel` varchar(50) NOT NULL default '',
  `client_image` varchar(180) NOT NULL default 'no-image.png' COLLATE 'latin1_general_ci', 
  `client_dt_added` date NOT NULL default '0000-00-00',
  `client_tm_added` time NOT NULL default '00:00:00',	
  `client_dt_updated` date NOT NULL default '0000-00-00',
  `client_tm_updated` time NOT NULL default '00:00:00',
  `client_stat` int(1) NOT NULL default '1',
  KEY (`client_vio_stat`),
  KEY (`ctype_id`),  
  PRIMARY KEY  (`client_id`)
);