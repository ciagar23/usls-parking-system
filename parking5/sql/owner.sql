DROP TABLE IF EXISTS `tbl_owner`;
CREATE TABLE `tbl_owner` (
	`owner_id` int(3) unsigned NOT NULL auto_increment,
	`vio_id` int(4) NOT NULL default '0000',
	`owner_code` varchar(3) NOT NULL default '',
	`owner_desc` varchar(20) NOT NULL default '',
	KEY (`vio_id`),
	PRIMARY KEY (`owner_id`)
)	TYPE=MyISAM AUTO_INCREMENT=111;

INSERT INTO `tbl_owner` (`owner_code`,`owner_desc`) 
VALUES ('ADM','Admin');
INSERT INTO `tbl_owner` (`owner_code`,`owner_desc`) 
VALUES ('STD','Student');
INSERT INTO `tbl_owner` (`owner_code`,`owner_desc`) 
VALUES ('FAC','Faculty');
INSERT INTO `tbl_owner` (`owner_code`,`owner_desc`) 
VALUES ('ALM','Alumni');
INSERT INTO `tbl_owner` (`owner_code`,`owner_desc`) 
VALUES ('CAT','Caterer/Supplier');
INSERT INTO `tbl_owner` (`owner_code`,`owner_desc`) 
VALUES ('SPC','Special/Others');