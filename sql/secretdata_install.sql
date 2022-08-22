
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `civicrm_secretdata`;

SET FOREIGN_KEY_CHECKS=1;
-- /*******************************************************
-- *
-- * Create new tables
-- *
-- *******************************************************/

-- /*******************************************************
-- *
-- * civicrm_eck_entity_type
-- *
-- * Custom CiviCRM entity types
-- *
-- *******************************************************/
CREATE TABLE `civicrm_secretdata` (
                                         id serial,
                                         `contact_id` int(10) unsigned NOT NULL,
                                         -- `name0` varchar(255) NOT NULL,
                                         `content0` varchar(255) NOT NULL,
                                         -- `name1` varchar(255) NOT NULL,
                                         `content1` varchar(255) NOT NULL,
                                         -- `name2` varchar(255) NOT NULL,
                                         `content2` varchar(255) NOT NULL,
                                         -- `name3` varchar(255) NOT NULL,
                                         `content3` varchar(255) NOT NULL,
                                         -- `name4` varchar(255) NOT NULL,
                                         `content4` varchar(255) NOT NULL,
                                         -- `name5` varchar(255) NOT NULL,
                                         `content5` varchar(255) NOT NULL,
                                         -- `name6` varchar(255) NOT NULL,
                                         `content6` varchar(255) NOT NULL,
                                         -- `name7` varchar(255) NOT NULL,
                                         `content7` varchar(255) NOT NULL,
                                         -- `name8` varchar(255) NOT NULL,
                                         `content8` varchar(255) NOT NULL,
                                         -- `name9` varchar(255) NOT NULL,
                                         `content9` varchar(255) NOT NULL,
                                         PRIMARY KEY (`contact_id`)
                                  ) ENGINE=InnoDB;
