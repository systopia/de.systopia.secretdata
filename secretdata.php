<?php

require_once 'secretdata.civix.php';
// phpcs:disable
use CRM_Secretdata_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function secretdata_civicrm_config(&$config) {
  _secretdata_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function secretdata_civicrm_install() {
  _secretdata_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function secretdata_civicrm_postInstall() {
  _secretdata_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function secretdata_civicrm_uninstall() {
  _secretdata_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function secretdata_civicrm_enable() {
  _secretdata_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function secretdata_civicrm_disable() {
  _secretdata_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function secretdata_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _secretdata_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function secretdata_civicrm_entityTypes(&$entityTypes) {
  _secretdata_civix_civicrm_entityTypes($entityTypes);
}

function secretdata_civicrm_permission(&$permissions) {
  # print "JSHDFKJH";

  $permissions['access secret data'] = [
    E::ts('Access Secret Data'),
    E::ts('Grants the necessary permissions to read and edit the special fields provided by the secret data extension.'),
  ];
}

function secretdata_civicrm_tabset($tabsetName, &$tabs, $context)
{
  switch ($tabsetName) {
    case 'civicrm/contact/view':
    # case 'civicrm/eck/entity':
      CRM_Resource_UI::addResourceTab($tabs, $tabsetName, $context);
      return;

/*    case 'civicrm/event/manage':
      CRM_Resource_UI::addEventResourceDemandTab($tabs, $context);
      return;
*/
    default:
      return;
  }
}


// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function secretdata_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function secretdata_civicrm_navigationMenu(&$menu) {
//  _secretdata_civix_insert_navigation_menu($menu, 'Mailings', [
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ]);
//  _secretdata_civix_navigationMenu($menu);
//}
