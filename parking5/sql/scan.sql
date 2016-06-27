
USE db_parking;

DROP TABLE IF EXISTS `tbl_scan`;
CREATE TABLE `tbl_scan` (
  `scan_id` int(4) unsigned NOT NULL auto_increment, 
  `client_id` int(1) NOT NULL default '0',
  `scan_dt_added` date NOT NULL default '0000-00-00',
  `scan_tm_added` time NOT NULL default '00:00:00',
  `scan_stat` int(1) NOT NULL default '1',
  KEY (`client_id`),
  PRIMARY KEY  (`scan_id`)
) TYPE=MyISAM AUTO_INCREMENT=2001;