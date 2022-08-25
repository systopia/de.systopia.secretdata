<?php
// Here you can initialize variables that will be available to your tests
// phpcs:ignore
# $CIVICRM_SETTINGS = "/var/www/civicrm_env/secretdata/drupal/web/sites/default/civicrm.settings.php";

eval(_cv_run('cvi cv secretdata php:boot', 'phpcode'));
