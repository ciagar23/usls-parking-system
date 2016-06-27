DROP TABLE IF EXISTS `tbl_violations`;
CREATE TABLE `tbl_violations` (
  `vio_id` int(4) unsigned NOT NULL auto_increment,
	`vio_code` varchar(10) NOT NULL default '',
	`vio_desc` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`vio_id`)
) TYPE=MyISAM AUTO_INCREMENT=3001;

INSERT INTO `tbl_violations` (`vio_code`,`vio_desc`) 
VALUES ('PRA', 'Parking on Reserved Areas');
INSERT INTO `tbl_violations` (`vio_code`,`vio_desc`) 
VALUES ('BDE', 'Blocking the Driveway/Exit');
INSERT INTO `tbl_violations` (`vio_code`,`vio_desc`) 
VALUES ('DP', 'Double Parking');
INSERT INTO `tbl_violations` (`vio_code`,`vio_desc`) 
VALUES ('WP', 'Wrong Parking');
INSERT INTO `tbl_violations` (`vio_code`,`vio_desc`) 
VALUES ('VPS', 'Violating the parking sign');
INSERT INTO `tbl_violations` (`vio_code`,`vio_desc`) 
VALUES ('RD', 'Reckless Driving');

