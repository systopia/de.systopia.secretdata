
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `civicrm_eck_entity_type`;

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
                                         `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique secretdata ID',
                                         `name1` varchar(255) NOT NULL COMMENT 'name of first entry',
                                         PRIMARY KEY (`id`)
                                  ) ENGINE=InnoDB;
